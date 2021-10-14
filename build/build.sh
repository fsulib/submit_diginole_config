#!/usr/bin/env bash

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
#mysql \
#  --user="${DATABASE_ROOT_USERNAME}" \
#	--password="${DATABASE_ROOT_PASSWORD}" \
#	--host="${DATABASE_ENDPOINT}" \
#	--execute="CREATE DATABASE submit_diginole;"
#
#mysql \
#  --user="${DATABASE_ROOT_USERNAME}" \
#	--password="${DATABASE_ROOT_PASSWORD}" \
#	--host="${DATABASE_ENDPOINT}" \
#	--execute="CREATE USER '${DATABASE_DRUPAL_USERNAME}'@'%' IDENTIFIED BY '${DATABASE_DRUPAL_PASSWORD}';"
#
#mysql \
#  --user="${DATABASE_ROOT_USERNAME}" \
#	--password="${DATABASE_ROOT_PASSWORD}" \
#	--host="${DATABASE_ENDPOINT}" \
#	--execute="GRANT ALL PRIVILEGES ON submit_diginole.* TO '${DATABASE_DRUPAL_USERNAME}'@'%';"
#
#mysql \
#  --user="${DATABASE_ROOT_USERNAME}" \
#	--password="${DATABASE_ROOT_PASSWORD}" \
#	--host="${DATABASE_ENDPOINT}" \
#	--execute="FLUSH PRIVILEGES;"
#
#service mysql restart


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
#cd /var/www/html/drupal
#/var/www/html/drupal/vendor/bin/drupal site:install standard \
#	--langcode="en" \
#	--db-type="mysql" \
#	--db-host="${DATABASE_ENDPOINT}" \
#	--db-name="submit_diginole" \
#	--db-user="${DATABASE_DRUPAL_USERNAME}" \
#	--db-pass="${DATABASE_DRUPAL_PASSWORD}" \
#	--db-port="3306" \
#	--site-mail="${DRUPAL_ADMIN_EMAIL}" \
#	--account-name="${DRUPAL_ADMIN_USERNAME}" \
#	--account-pass="${DRUPAL_ADMIN_PASSWORD}" \
#	--account-mail="${DRUPAL_ADMIN_EMAIL}" \
#	--no-interaction
#/var/www/html/drupal/vendor/bin/drush config-set "system.site" uuid "6d3939a8-a52f-4862-a77a-176786dcad2a" -y
#/var/www/html/drupal/vendor/bin/drush ev '\Drupal::entityManager()->getStorage("shortcut_set")->load("default")->delete();'
#/submit_diginole_config/commands/sd-import


# Preflight
service mysql restart >> /root/build.log 2>&1
service apache2 restart >> /root/build.log 2>&1
