#!/usr/bin/env bash

cat /submit_diginole_config/assets/bash.sh >> /root/.bashrc

cat /submit_diginole_config/assets/vagrant.env >> /etc/environment

/submit_diginole_config/build/build.sh
