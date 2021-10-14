#!/usr/bin/env bash

source /etc/environment

rm -f /etc/localtime >> /root/build.log 2>&1
ln -s /usr/share/zoneinfo/US/Eastern /etc/localtime >> /root/build.log 2>&1

fallocate -l 2G /swapfile >> /root/build.log 2>&1
chmod 600 /swapfile >> /root/build.log 2>&1
mkswap /swapfile >> /root/build.log 2>&1
swapon /swapfile >> /root/build.log 2>&1
swapon -s >> /root/build.log 2>&1
echo "/swapfile none swap sw 0 0" >> /etc/fstab
echo "vm.swappiness=10" >> /etc/sysctl.conf
sysctl -p >> /root/build.log 2>&1

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

echo "AddHandler php5-script .php" >> /etc/apache2/apache2.conf
echo "AddType text/html .php" >> /etc/apache2/apache2.conf
sed -i -e 's/AllowOverride\ None/AllowOverride\ All/g' /etc/apache2/apache2.conf
sed -i -e 's/\/var\/www\/html/\/var\/www\/html\/drupal\/web/g' /etc/apache2/sites-available/000-default.conf
cd /var/www/html
rm index.html
export HOME='/root'

composer -n global require zaporylie/composer-drupal-optimizations >> /root/build.log 2>&1
composer -n create-project drupal-composer/drupal-project:9.x-dev drupal --stability dev --no-interaction >> /root/build.log 2>&1

cd /var/www/html/drupal
rm composer.*
cp /submit_diginole_config/assets/composer.json .
composer -n install >> /root/build.log 2>&1

service apache2 restart >> /root/build.log 2>&1
