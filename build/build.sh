rm -f /etc/localtime
ln -s /usr/share/zoneinfo/US/Eastern /etc/localtime

fallocate -l 2G /swapfile
chmod 600 /swapfile
mkswap /swapfile
swapon /swapfile
swapon -s
echo "/swapfile none swap sw 0 0" >> /etc/fstab
echo "vm.swappiness=10" >> /etc/sysctl.conf
sysctl -p

apt update -y
apt install -y php
apt install -y php-gd
apt install -y php-xml
apt install -y php-curl
apt install -y php-mbstring
apt install -y composer
apt install -y mysql-client
apt install -y apache2

echo "AddHandler php5-script .php" >> /etc/apache2/apache2.conf
echo "AddType text/html .php" >> /etc/apache2/apache2.conf
sed -i -e 's/AllowOverride\ None/AllowOverride\ All/g' /etc/apache2/apache2.conf
sed -i -e 's/\/var\/www\/html/\/var\/www\/html\/drupal\/web/g' /etc/apache2/sites-available/000-default.conf
cd /var/www/html
rm index.html
export HOME='/root'

composer -n global require zaporylie/composer-drupal-optimizations
composer -n create-project drupal-composer/drupal-project:9.x-dev drupal --stability dev --no-interaction

cd /var/www/html/drupal
rm composer.*
cp /submit_diginole_config/assets/composer.json .

service apache2 restart
