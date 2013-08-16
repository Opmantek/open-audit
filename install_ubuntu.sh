#!/bin/bash

# On CentOS 6.2
# yum install unzip mysql-server php php-cli php-ldap php-mbstring php-mysql php-snmp php-xml nmap snmp
# wget http://website/open-audit.zip
# unzip open-audit.zip
# cd open-audit

# Make sure your server is patched and up to date.
apt-get update
apt-get dist-upgrade -q -y

#Install MySQL without user prompts.
DEBIAN_FRONTEND=noninteractive apt-get install -q -y mysql-server

# Install the various prerequisite packages.
apt-get install -q -y apache2 php5 php5-mysql php5-ldap php5-snmp php5-mcrypt nmap snmp zip

# Configure the apache server.
echo "ServerName localhost" >> /etc/apache2/apache2.conf
service apache2 restart

# Download the Open-AudIT package
# wget http://website/open-audit.zip

# Extract the package.
unzip open-audit.zip

# Change to the directory created.
cd open-audit

# Create the install directory.
mkdir /usr/local/open-audit

# Copy your extracted package files to it.
cp -r * /usr/local/open-audit/

# Set the appropriate permissions on the install directory.
chown -R root:www-data /usr/local/open-audit
chmod -R 640 /usr/local/open-audit
chmod -R 660 /usr/local/open-audit/code_igniter/application/views/lang/
chmod 770 /usr/local/open-audit/install_ubuntu.sh
chmod 770 /usr/local/open-audit/other/audit_subnet.sh
chmod 770 /usr/local/open-audit/other/winexe

# Copy the appropriate www items.
cp -r /usr/local/open-audit/www/* /var/www/

# Set the required permissions.
chown -R root:www-data /var/www 
chmod -R 755 /var/www 

# Remove the uneeded index.html file.
rm /var/www/index.html

# Create the Open-AudIT log file.
touch /var/log/open-audit.log

# Set the log file permissions.
chmod 777 /var/log/open-audit.log

# set the suid for /usr/bin/nmap.
chmod u+s /usr/bin/nmap

# Set the MySQL root user password.
mysql -u root -e "USE mysql; UPDATE user set Password = password('openauditrootuserpassword') WHERE User = 'root'; FLUSH PRIVILEGES;"

# Create the Open-AudIT database.
mysql -u root -popenauditrootuserpassword -e "CREATE DATABASE openaudit;"

# Create the application user for the database.
mysql -u root -popenauditrootuserpassword -e "CREATE USER openaudit@localhost IDENTIFIED BY 'openauditpassword';"
mysql -u root -popenauditrootuserpassword -e "GRANT ALL PRIVILEGES ON openaudit.* TO openaudit@localhost IDENTIFIED BY 
'openauditpassword';"
mysql -u root -popenauditrootuserpassword -e "FLUSH PRIVILEGES;"

# Insert the database schema.
mysql -u root -popenauditrootuserpassword openaudit < /usr/local/open-audit/other/openaudit_mysql.sql