#!/usr/bin/env bash

# Set local config
cat /submit_diginole_config/assets/bash.sh >> /root/.bashrc
cat /submit_diginole_config/assets/vagrant.env >> /etc/environment

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

# Install local MySQL
apt update -y >> /root/vagrant.log 2>&1
apt -y install mysql-server >> /root/vagrant.log 2>&1
service mysql start >> /root/vagrant.log 2>&1
service mysql restart >> /root/vagrant.log 2>&1

# Initiate build
/submit_diginole_config/build/build.sh
