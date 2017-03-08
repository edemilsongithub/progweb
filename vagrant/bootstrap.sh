#!/bin/bash

export VAGRANT_DIR="/vagrant"

export VAGRANT_SCRIPTS_DIR="$VAGRANT_DIR/vagrant"
export VAGRANT_CONFIG_FILES_DIR="$VAGRANT_SCRIPTS_DIR/config"

export DATABASE_USER='dev'
export DATABASE_PASSWORD='dev123'

sudo apt-get update
sudo apt-get install -y php5
sudo apt-get install -y php5-intl
sudo apt-get install -y php5-pgsql

sudo sh -c 'echo "deb http://apt.postgresql.org/pub/repos/apt/ $(lsb_release -cs)-pgdg main" > /etc/apt/sources.list.d/pgdg.list'
wget --quiet -O - https://www.postgresql.org/media/keys/ACCC4CF8.asc | sudo apt-key add -
sudo apt-get update
sudo apt-get install -y postgresql-9.4 pgadmin3

sudo mv /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/000-default.conf.bk
sudo cp $VAGRANT_CONFIG_FILES_DIR/000-default.conf  /etc/apache2/sites-available/000-default.conf
sudo a2enmod rewrite
sudo service apache2 restart


create_user_cmd="CREATE USER $DATABASE_USER WITH SUPERUSER PASSWORD '$DATABASE_PASSWORD';"
echo "$create_user_cmd"
sudo -u postgres psql -d postgres -c "$create_user_cmd"
create_database_cmd="CREATE DATABASE ledes WITH OWNER $DATABASE_USER ENCODING='UTF-8';"
echo "$create_database_cmd"
sudo -u postgres psql -d postgres -c "$create_database_cmd"
sudo service postgresql restart