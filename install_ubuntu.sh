#!/bin/bash

# apt-get install -y zip
# wget http://192.168.61.105/open-audit.zip
# unzip open-audit.zip
# cd open-audit
# sudo ./install_ubuntu.sh

apt-get update

apt-get dist-upgrade -q -y

DEBIAN_FRONTEND=noninteractive apt-get install -q -y mysql-server

apt-get install -q -y apache2 php5 php5-mysql php5-ldap php5-snmp nmap snmp

echo "ServerName localhost" >> /etc/apache2/apache2.conf

/etc/init.d/apache2 restart

mkdir /usr/local/open-audit

cp -r * /usr/local/open-audit/

chown -R root:www-data /usr/local/open-audit

chmod -R 640 /usr/local/open-audit

chmod -R 660 /usr/local/open-audit/code_igniter/application/views/lang/

chmod 770 /usr/local/open-audit/install_ubuntu.sh

chmod 770 /usr/local/open-audit/other/audit_subnet.sh

chmod 770 /usr/local/open-audit/other/winexe

cp -r /usr/local/open-audit/www/* /var/www/

chown -R root:www-data /var/www #

chmod -R 640 /var/www #

rm /var/www/index.html

touch /var/log/open-audit.log

chmod 777 /var/log/open-audit.log

# set the suid for /usr/bin/nmap
chmod u+s /usr/bin/nmap

mysql -u root -e "USE mysql; UPDATE user set Password = password('openauditrootuserpassword') WHERE User = 'root'; FLUSH PRIVILEGES;"

mysql -u root -popenauditrootuserpassword -e "CREATE DATABASE openaudit;"

mysql -u root -popenauditrootuserpassword -e "CREATE USER openaudit@localhost IDENTIFIED BY 'openauditpassword';"

mysql -u root -popenauditrootuserpassword -e "GRANT ALL PRIVILEGES ON openaudit.* TO openaudit@localhost IDENTIFIED BY 
'openauditpassword';"

mysql -u root -popenauditrootuserpassword -e "FLUSH PRIVILEGES;"

mysql -u root -popenauditrootuserpassword openaudit < /usr/local/open-audit/other/openaudit_mysql.sql