#!/bin/bash

# The following installation has been tested on:
# Centos 6.3

# The below commands should be run as the root user.

# Make sure your server is patched and up to date.
# On CentOS and RedHat
yum update


HOSTNAME=`uname -n`
TIMEZONE=`cat /etc/sysconfig/clock  | grep ZONE | cut -d"\"" -f2`
IP_ADDRESS=`ifconfig | grep -Eo 'inet (addr:)?([0-9]*\.){3}[0-9]*' | grep -Eo '([0-9]*\.){3}[0-9]*' | grep -v '127.0.0.1'`

# Install the various prerequisite packages.
# On CentOS and RedHat
rpm -Uvh http://download.fedoraproject.org/pub/epel/6/i386/epel-release-6-8.noarch.rpm
yum -y install mysql mysql-server
chkconfig --levels 235 mysqld on
service mysqld start
yum -y install httpd
chkconfig --levels 235 httpd on
service httpd start
yum -y install nano openssh-server php php-cli php-mysql php-ldap php-mbstring php-mcrypt php-snmp php-xml nmap snmp zip
chkconfig --levels 235 sshd on
service sshd start
sed -i -e 's/SELINUX=/#SELINUX=/g' /etc/selinux/config
echo "SELINUX=disabled" >> /etc/selinux/config
setenforce 0
sed -i '1s/^/A INPUT -p tcp -m tcp --dport 80 -j ACCEPT\n/' /etc/sysconfig/iptables
sed -i '1s/^/A INPUT -p tcp -m tcp --dport 443 -j ACCEPT\n/' /etc/sysconfig/iptables
# Edit the php config file
# On CentOS and RedHat
sed -i -e 's/memory_limit/;memory_limit/g' /etc/php.ini
echo "memory_limit = 512M" >> /etc/php.ini
sed -i -e 's/max_execution_time/;max_execution_time/g' /etc/php.ini
echo "max_execution_time = 300" >> /etc/php.ini
sed -i -e 's/max_input_time/;max_input_time/g' /etc/php.ini
echo "max_input_time = 600" >> /etc/php.ini
sed -i -e 's/error_reporting/;error_reporting/g' /etc/php.ini
echo "error_reporting = E_ALL" >> /etc/php.ini
sed -i -e 's/display_errors/;display_errors/g' /etc/php.ini
echo "display_errors = On" >> /etc/php.ini
sed -i -e 's/upload_max_filesize/;upload_max_filesize/g' /etc/php.ini
echo "upload_max_filesize = 10M" >> /etc/php.ini
# Get a valid dat/time string from http://www.php.net/manual/en/timezones.php
sed -i -e 's/date.timezone/;date.timezone/g' /etc/php.ini
echo "date.timezone = $TIMEZONE" >> /etc/php.ini

# Set the server name for apache
# On CentOS and RedHat
echo "ServerName $HOSTNAME" >> /etc/httpd/conf/httpd.conf
chsh -s /bin/bash apache
service httpd restart

# Create the install directory.
mkdir /usr/local/open-audit

# Copy your extracted package files to it.
cp -r * /usr/local/open-audit/

# Set the appropriate permissions on the install directory.
# On CentOS and RedHat
chown -R root:apache /usr/local/open-audit

# Set the appropriate permissions on the install directory.
chmod -R 770 /usr/local/open-audit
chmod -R 770 /usr/local/open-audit/code_igniter/application/views/lang/
chmod 770 /usr/local/open-audit/install_debian_ubuntu.sh
chmod 770 /usr/local/open-audit/install_centos_redhat.sh
chmod 770 /usr/local/open-audit/other/audit_subnet.sh
chmod 660 /usr/local/open-audit/other/open-audit.log
chmod 770 /usr/local/open-audit/other/winexe

# Set the required permissions.
# On CentOS and RedHat
cp -r /usr/local/open-audit/www/* /var/www/html/
chown -R root:apache /var/www/html
chmod -R 755 /var/www/html 

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
