#!/bin/bash

# The following installation has been tested on:
# Ubuntu 12.04 and 13.04 and Debian 7

# The below commands should be run as the root user.

# Make sure your server is patched and up to date.
# On Ubuntu and Debian
apt-get update
apt-get dist-upgrade -q -y

HOSTNAME=`uname -n`
TIMEZONE=`cat /etc/timezone`
IP_ADDRESS=`ifconfig | grep -Eo 'inet (addr:)?([0-9]*\.){3}[0-9]*' | grep -Eo '([0-9]*\.){3}[0-9]*' | grep -v '127.0.0.1'`

# Install the various prerequisite packages.
# On Ubuntu and Debian
DEBIAN_FRONTEND=noninteractive apt-get install -q -y mysql-server
apt-get install -q -y apache2 openssh-server php5 php5-ldap php5-mbstring php5-mcrypt php5-mysql php5-snmp nmap snmp zip

# Edit the php config file
# On Ubuntu and Debian
sed -i -e 's/memory_limit/;memory_limit/g' /etc/php5/apache2/php.ini
echo "memory_limit = 512M" >> /etc/php5/apache2/php.ini
sed -i -e 's/max_execution_time/;max_execution_time/g' /etc/php5/apache2/php.ini
echo "max_execution_time = 300" >> /etc/php5/apache2/php.ini
sed -i -e 's/max_input_time/;max_input_time/g' /etc/php5/apache2/php.ini
echo "max_input_time = 600" >> /etc/php5/apache2/php.ini
sed -i -e 's/error_reporting/;error_reporting/g' /etc/php5/apache2/php.ini
echo "error_reporting = E_ALL" >> /etc/php5/apache2/php.ini
sed -i -e 's/display_errors/;display_errors/g' /etc/php5/apache2/php.ini
echo "display_errors = On" >> /etc/php5/apache2/php.ini
sed -i -e 's/upload_max_filesize/;upload_max_filesize/g' /etc/php5/apache2/php.ini
echo "upload_max_filesize = 10M" >> /etc/php5/apache2/php.ini
# Get a valid dat/time string from http://www.php.net/manual/en/timezones.php
sed -i -e 's/date.timezone/;date.timezone/g' /etc/php.ini
echo "date.timezone = $TIMEZONE" >> /etc/php.ini

# Set the server name for apache
# On Ubuntu and Debian
echo "ServerName $HOSTNAME" >> /etc/apache2/apache2.conf
service apache2 restart

# Create the install directory.
mkdir /usr/local/open-audit

# Copy your extracted package files to it.
cp -r * /usr/local/open-audit/

# Set the appropriate permissions on the install directory.
# On Ubuntu and Debian
chown -R root:www-data /usr/local/open-audit

# Set the appropriate permissions on the install directory.
chmod -R 770 /usr/local/open-audit
chmod -R 770 /usr/local/open-audit/code_igniter/application/views/lang/
chmod 770 /usr/local/open-audit/install_ubuntu.sh
chmod 770 /usr/local/open-audit/other/audit_subnet.sh
chmod 770 /usr/local/open-audit/other/winexe

# Set the required permissions.
# On Ubuntu and Debian
cp -r /usr/local/open-audit/www/* /var/www/
chown -R root:www-data /var/www 
chmod -R 755 /var/www 

# Remove the uneeded index.html file.
# On Ubuntu and Debian
rm /var/www/index.html

# Create the Open-AudIT log file.
touch /var/log/open-audit.log
chmod 777 /var/log/open-audit.log

# set the suid for /usr/bin/nmap.
chmod u+s /usr/bin/nmap

# Set the MySQL root user password.
mysql -u root -e "USE mysql; UPDATE user set Password = password('openauditrootuserpassword') WHERE User = 'root'; FLUSH PRIVILEGES;"

# Create the Open-AudIT database.
mysql -u root -popenauditrootuserpassword -e "CREATE DATABASE openaudit;"

# Create the application user for the database.
mysql -u root -popenauditrootuserpassword -e "CREATE USER openaudit@localhost IDENTIFIED BY 'openauditpassword';"
mysql -u root -popenauditrootuserpassword -e "GRANT ALL PRIVILEGES ON openaudit.* TO openaudit@localhost IDENTIFIED BY 'openauditpassword';"
mysql -u root -popenauditrootuserpassword -e "FLUSH PRIVILEGES;"

# Insert the database schema.
mysql -u root -popenauditrootuserpassword openaudit < /usr/local/open-audit/other/openaudit_mysql.sql

echo "Installation complete."
# Open a web browser and go to 
# http://<YOUR_SERVER_NAME>/index.php
echo "Try browsing to http://$IP_ADDRESS/index.php"
# You should be able to log in using user:admin and password:password.
# Change the Admin user password by going to Admin -> List Users -> Edit User.
# Enable some Reports by going to Admin -> Reports -> Activate Report.
# Enable some Groups by going to Admin -> Groups -> Activate Group.
# NOTES - 
# If you wish to change the MySQL user and password, the application config file is at /usr/local/open-audit/code_igniter/application/config/database.php
# We have to disable SE Linux on CentOS / RedHat because it prevents apache from running the audit subnet script.
# You can tune php.ini to your liking. You may not wish to show errors, but they are useful for debugging and bug reporting.
