#!/usr/bin/env bash

# Set local config
cat /submit_diginole_config/assets/bash.sh >> /root/.bashrc
cat /submit_diginole_config/assets/vagrant.env >> /etc/environment

# Install local MySQL
apt update -y >> /root/vagrant.log 2>&1
apt -y install mysql-server >> /root/vagrant.log 2>&1
service mysql start >> /root/vagrant.log 2>&1
service mysql restart >> /root/vagrant.log 2>&1

# Initiate build
/submit_diginole_config/build/build.sh
