BACKUP YOUR DATA AND FILES before upgrading, really, please.
There are details at https://community.opmantek.com/display/OA/Home

# Open-AudIT

Open-AudIT is an application to tell you exactly what is on your network, how it is configured and when it changes. Open-AudIT will run on Windows and Linux systems. Open-AudIT is a database of information, that can be queried via a web interface and JSON API. Data about the network is inserted using audit scripts (shell, vbscript) as well as Nmap and SNMP results. The entire application is written in php, bash and vbscript. These are all 'scripting' languages - no compiling and human readable source code. Making changes and customisations is both quick and easy.

Windows PCs can be queried for hardware, software, operating system settings, security settings, IIS settings, services, users & groups and much more. Linux systems can be queried for a similar amount of information. Network devices (printers, switches, routers, etc) can have data recorded such as IP-Address, MAC Address, open ports, serial number, etc, etc.

![Devices](https://github.com/Opmantek/open-audit/raw/master/public/images/devices.png)<br>
![Summaries](https://github.com/Opmantek/open-audit/raw/master/public/images/summaries.png)<br>

# Open-AudIT Enterprise

[Firstwave](https://www.firstwave.com) offer Open-AudIT Enterprise which leverages from Open-AudIT to provide extra features and benefits as well as an easy to use installer for Windows and Linux. Please consider purchasing a license to assist with the continued development of Open-AudIT.

![Home](https://github.com/Opmantek/open-audit/raw/master/public/images/dashboards.png)<br>



## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

Nmap is a prerequisite for Open-AudIT. We rely on Nmap for discovering devices on your network. The Linux installer will install this and the other prerequisites. The Windows installer needs the user to manually install Nmap.

The other Linux prerequisites are:

#### RedHat 8 & 9

mariadb-server httpd php php-cli php-intl php-mysqlnd php-ldap php-json php-mbstring php-process php-snmp php-xml nmap zip curl wget sshpass screen samba-client logrotate perl-Time-ParseDate ipmitool net-snmp perl-Crypt-CBC libnsl.x86_64

#### Debian 11 & 12 

mariadb-server apache2 apache2-utils libapache2-mod-php openssh-client php php-cli php-curl php-intl php-ldap php-mbstring php-mysql php-snmp php-xml nmap zip wget curl sshpass screen smbclient logrotate ipmitool snmp libcrypt-cbc-perl

#### Ubuntu 20.04 & 22.04

mariadb-server apache2 apache2-utils libapache2-mod-php openssh-client php php-cli php-curl php-intl php-ldap php-mbstring php-mysql php-snmp php-xml nmap zip wget curl sshpass screen smbclient logrotate ipmitool snmp libcrypt-cbc-perl

### Installing

Installing is simply a matter of downloading the .run or .exe (Linux or Windows) from http://firstwave.com. The installer is self-contained and will install Linux prerequisites. Windows users will need to download and install Nmap.

To install from this source, please put the code in /usr/local/open-audit and link the public folder into your web root under /open-audit. Use composer to install the required dependencies. Initialise a MySQL database using the credentials found in app/Config/database.json. The MySQL schema can be found in other/open-audit.sql.

## Release Notes
Are available here - https://community.opmantek.com/display/OA/Open-AudIT+Release+Notes

## Built With

* [CodeIgniter](http://www.codeigniter.com/) - The web framework used
* [JsonAPI](http://jsonapi.org/) - API specification
* [jQuery](https://jquery.com/) - Javascript
* [Bootstrap](http://getbootstrap.com/) - Web Frontend

## Contributing

Please contact [Firstwave](https://www.firstwave.com) with any enquiries for contributing or post to the [Questions](https://community.opmantek.com/questions) site. And you can always submit a pull request on [GitHub](https://github.com/Opmantek/open-audit).

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/Opmantek/open-audit/releases). 

## Authors

* **Mark Unwin** - [Mark Unwin](https://github.com/mark-unwin)

## License

This project is licensed under the aGPL License - see the [AGPL 3.0](agpl-3.0.txt) file for details

## Acknowledgments

* Thanks for all the forum contributions.
* Thanks in particular to JPA (forum user) for his countless contributions and testing work.
