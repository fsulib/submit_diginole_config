#!/usr/bin/env bash

# Set local config
cat /submit_diginole_config/assets/bash.sh >> /root/.bashrc
cat /submit_diginole_config/assets/vagrant.env >> /etc/environment

# Install local MySQL
#apt -y install mysql-server
#service mysql start

# Initiate build
/submit_diginole_config/build/build.sh
