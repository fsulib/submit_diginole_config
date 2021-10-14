#!/usr/bin/env bash

echo "PATH=/submit_diginole_config/commands/:/var/www/html/drupal/vendor/bin/:$PATH" >> /etc/environment
source /etc/environment


# Set timezone
rm -f /etc/localtime >> /root/build.log 2>&1
ln -s /usr/share/zoneinfo/US/Eastern /etc/localtime >> /root/build.log 2>&1


# Set up swap space so Composer doesn't die on small instances 
fallocate -l 2G /swapfile >> /root/build.log 2>&1
chmod 600 /swapfile >> /root/build.log 2>&1
mkswap /swapfile >> /root/build.log 2>&1
swapon /swapfile >> /root/build.log 2>&1
swapon -s >> /root/build.log 2>&1
echo "/swapfile none swap sw 0 0" >> /etc/fstab
echo "vm.swappiness=10" >> /etc/sysctl.conf
sysctl -p >> /root/build.log 2>&1


# Install os packages
apt update -y >> /root/build.log 2>&1
apt install -y php >> /root/build.log 2>&1
apt install -y php-gd >> /root/build.log 2>&1
apt install -y php-xml >> /root/build.log 2>&1
apt install -y php-curl >> /root/build.log 2>&1
apt install -y php-mbstring >> /root/build.log 2>&1
apt install -y php-mysql >> /root/build.log 2>&1
apt install -y mysql-client >> /root/build.log 2>&1
apt install -y composer >> /root/build.log 2>&1
apt install -y apache2 >> /root/build.log 2>&1


# Set up Drupal user in database
mysql \
  --user="${DATABASE_ROOT_USERNAME}" \
	--password="${DATABASE_ROOT_PASSWORD}" \
	--host="${DATABASE_ENDPOINT}" \
	--execute="CREATE DATABASE submit_diginole;"

mysql \
  --user="${DATABASE_ROOT_USERNAME}" \
	--password="${DATABASE_ROOT_PASSWORD}" \
	--host="${DATABASE_ENDPOINT}" \
	--execute="CREATE USER '${DATABASE_DRUPAL_USERNAME}'@'%' IDENTIFIED BY '${DATABASE_DRUPAL_PASSWORD}';"

mysql \
  --user="${DATABASE_ROOT_USERNAME}" \
	--password="${DATABASE_ROOT_PASSWORD}" \
	--host="${DATABASE_ENDPOINT}" \
	--execute="GRANT ALL PRIVILEGES ON submit_diginole.* TO '${DATABASE_DRUPAL_USERNAME}'@'%';"

mysql \
  --user="${DATABASE_ROOT_USERNAME}" \
	--password="${DATABASE_ROOT_PASSWORD}" \
	--host="${DATABASE_ENDPOINT}" \
	--execute="FLUSH PRIVILEGES;"

service mysql restart


# Prep Apache for Drupal
echo "AddHandler php5-script .php" >> /etc/apache2/apache2.conf
echo "AddType text/html .php" >> /etc/apache2/apache2.conf
sed -i -e 's/AllowOverride\ None/AllowOverride\ All/g' /etc/apache2/apache2.conf
sed -i -e 's/\/var\/www\/html/\/var\/www\/html\/drupal\/web/g' /etc/apache2/sites-available/000-default.conf
cd /var/www/html
rm index.html


# Install Drupal
export HOME='/root'
composer -n global require zaporylie/composer-drupal-optimizations >> /root/build.log 2>&1
composer -n create-project drupal-composer/drupal-project:9.x-dev drupal --stability dev --no-interaction >> /root/build.log 2>&1
cd /var/www/html/drupal
rm composer.*
cp /submit_diginole_config/assets/composer.json .
composer -n install >> /root/build.log 2>&1

# Install Drupal site
drush \
  -y \
  si \
  standard \
  install_configure_form.enable_update_status_emails=NULL \
  --locale=en --db-url=mysql://$DATABASE_DRUPAL_USERNAME:$DATABASE_DRUPAL_PASSWORD@$DATABASE_ENDPOINT/submit_diginole \
  --account-name=$DRUPAL_ADMIN_USERNAME \
  --account-pass=$DRUPAL_ADMIN_PASSWORD \
  --account-mail=$DRUPAL_ADMIN_EMAIL \
  --site-mail=$DRUPAL_ADMIN_EMAIL >> /root/build.log 2>&1

echo '$settings["trusted_host_patterns"] = [' >> /var/www/html/drupal/web/sites/default/settings.php
case $ENVIRONMENT in
  vagrant)
    echo '"^localhost$",'  >> /var/www/html/drupal/web/sites/default/settings.php
    ;;
  dev)
    echo '"^dev.submit.diginole.lib.fsu.edu$",'  >> /var/www/html/drupal/web/sites/default/settings.php
    ;;
  *)
    ;;
esac
echo '];' >> /var/www/html/drupal/web/sites/default/settings.php

drush entity:delete shortcut_set
drush config-set "system.site" uuid "0734e930-32e6-4075-8e2e-cc4c0286b4c1" -y
drush --root=/var/www/html/drupal/web/sites/default -y config:import --source=/submit_diginole_config/sync


# Override imported config with site-specific config
drush config:set "smtp.settings" smtp_username "${SMTP_USERNAME}" -y
drush config:set "smtp.settings" smtp_password "${SMTP_PASSWORD}" -y


# Preflight
drush cr
service mysql restart >> /root/build.log 2>&1
service apache2 restart >> /root/build.log 2>&1
