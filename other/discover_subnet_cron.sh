#!/bin/bash
#
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published 
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************

# @package Open-AudIT
# @author Mark Unwin <marku@opmantek.com>
# @version 1.12.6
# @copyright Copyright (c) 2014, Opmantek
# @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3

# these are REQUIRED and can be overwritten on the command line
OPENAUDIT_USER="admin"
OPENAUDIT_PASS="password"
OPENAUDIT_URL="http://localhost/open-audit/index.php/discovery/discover_subnet"
FORM_SUBNET=""
FORM_LOCAL_ADDRESS=""
DEBUGGING=1
SYSLOG="/usr/local/open-audit/other/log_system.log"
HELP="n"
# these are OPTIONAL and can be set on the command line
FORM_SNMP_COMMUNITY="public"
FORM_SSH_USER=""
FORM_SSH_PASS=""
FORM_WINDOWS_USER=""
FORM_WINDOWS_PASS=""
FORM_WINDOWS_DOMAIN=""

# value determined at runtime
SYSTEM_HOSTNAME=$(hostname 2>/dev/null)

for arg in "$@"; do
	parameter=${arg%%=*}
	value=${arg##*=} 
	#eval "$parameter"=\""$value\""
	case "${parameter}" in
		quiet)
			DEBUGGING=0
			;;
		verbose)
			DEBUGGING=1
			;;
		debugging)
			DEBUGGING=1
			;;
		syslog)
			SYSLOG=${value}
			;;
		help|-h|--help)
			HELP="y"
			;;
		openaudit_user)
			OPENAUDIT_USER=${value}
			;;
		openaudit_password)
			OPENAUDIT_PASS=${value}
			;;
		openaudit_url)
			OPENAUDIT_URL=${value}
			;;
		subnet)
			FORM_SUBNET=${value}
			;;
		local_address)
			FORM_LOCAL_ADDRESS=${value}
			;;
		snmp_community)
			FORM_SNMP_COMMUNITY=${value}
			;;
		ssh_user)
			FORM_SSH_USER=${value}
			;;
		ssh_password)
			FORM_SSH_PASS=${value}
			;;
		windows_user)
			FORM_WINDOWS_USER=${value}
			;;
		windows_password)
			FORM_WINDOWS_PASS=${value}
			;;
		windows_domain)
			FORM_WINDOWS_DOMAIN=${value}
			;;
		*)
			echo "---------------------------------"
			echo "       W A R N I N G"
			echo "Invalid option: -$value" >&2
			HELP="y"
			DEBUGGING=1
			;;
	esac
done

if [[ $DEBUGGING -gt 0 ]] || [[ $HELP == "y" ]]; then
	echo "---------------------------------------"
	echo "Open-AudIT Subnet Discovery cron script"
	echo "(c) Opmantek, 2014.              "
	echo "---------------------------------------"
fi

if [[ $DEBUGGING -gt 0 ]]; then
	echo ""
	echo "ARGUMENTS"
	echo "---------------------------------------"
	echo "Open-AudIT User: $OPENAUDIT_USER"
	echo "Open-AudIT Password: $OPENAUDIT_PASS"
	echo "Open-AudIT URL: $OPENAUDIT_URL"
	echo "Subnet: $FORM_SUBNET"
	echo "Local Address: $FORM_LOCAL_ADDRESS"
	echo "Debugging: $DEBUGGING"
	echo "Syslog: $SYSLOG"
	echo "Help: $HELP"
	echo "SNMP Community: $FORM_SNMP_COMMUNITY"
	echo "SSH User: $FORM_SSH_USER"
	echo "SSH Password: $FORM_SSH_PASS"
	echo "Windows User: $FORM_WINDOWS_USER"
	echo "Windows Password: $FORM_WINDOWS_PASS"
	echo "Windows Domain: $FORM_WINDOWS_DOMAIN"
fi

if [ "$HELP" == "y" ]; then
cat <<EOF

HELP
---------------------------------------
This script should be used on a Linux based computer to discover hosts in a subnet.
It will run nmap against the target subnet and submit the result.
This script is designed to be called by cron or run directly from the command line.

Wget is the only prerequisite for this script to function correctly.

Valid command line options are below (items containing * are the defaults) and should take the format name=value (eg: debugging=1). The special options for help, quiet and verbose do not require an arguement. "./discover_subnet_cron.sh help" is valid.

  openaudit_user
     *admin - The Open-AudIT user running this script.

  openaudit_password
     *password - The password for the above user.

  openaudit_url
     *http://localhost/open-audit/index.php/discovery/discover_subnet - The form URL in Open-AudIT we are submitting to.

  help
      y - Display this help output.
     *n - Do not display this output.

  subnet
       - The format of the subnet is specified in standard Nmap syntax. The following are valid examples:
       - 192.168.0.1 (a single address)
       - 192.168.1.2/32 (a single address with mask)
       - 192.168.3.0/24 (a 24 bit mask - 192.168.3.0 to 192.168.3.255)
       - 198.168.0-255.1-127 (a range of ip addresses)

  local_address
       - The external ip of this Open-AudIT server.

  snmp_community
     *public  - The SNMP community string to be used in this discovery run.

  ssh_user and ssh_password
       - The SSH credentials to be used in this discovery run.

  windows_user and windows_pass and windows_domain
       - The Windows credentials to be used in this discovery run.

  syslog
     */usr/local/open-audit/other/log_system.log - If set the script will log to this file.

  debugging
     *1 - If set to 1, will output details on the command line. If set to 0, no output will occur.

  verbose
       - Equivalent to debugging=1

  quiet 
       - Equivalent to debugging=0

EOF
exit
fi

if [[ $DEBUGGING -gt 0 ]]; then
	echo ""
	echo "DEBUG"
	echo "---------------------------------------"
fi

# function for logging to a file
function write_log()
{
	if [ "$SYSLOG" != "" ]; then
		NOW=$(date "+%b %d %T")
		if [[ $DEBUGGING -gt 0 ]]; then
			echo "Logged: $1"
		fi
		echo "$NOW $SYSTEM_HOSTNAME $$ S:discover_subnet_cron U:$USER $1" >> $SYSLOG
	fi	
}

# log the script has run
LOG_ENTRY="Discovery for $FORM_SUBNET cron job STARTED"
write_log "$LOG_ENTRY"

# check a few required items
if [ "$OPENAUDIT_USER" == "" ]; then
	echo "An Open-AudIT username must be included. See help if required ./discover_subnet_cron.sh help"
	LOG_ENTRY="Discovery for $FORM_SUBNET cron job FAILED Open-AudIT username not provided"
	write_log "$LOG_ENTRY"
	exit 1
fi

if [ "$OPENAUDIT_PASS" == "" ]; then
	echo "A password for the Open-AudIT user must be included. See help if required ./discover_subnet_cron.sh help"
	LOG_ENTRY="Discovery for $FORM_SUBNET cron job FAILED Open-AudIT password not provided"
	write_log "$LOG_ENTRY"
	exit 1
fi

if [ "$OPENAUDIT_URL" == "" ]; then
	echo "A URL to submit to must be included. See help if required ./discover_subnet_cron.sh help"
	LOG_ENTRY="Discovery for $FORM_SUBNET cron job FAILED Open-AudIT url not provided"
	write_log "$LOG_ENTRY"
	exit 1
fi

if [ "$FORM_LOCAL_ADDRESS" == "" ]; then
	echo "The local ip address must be included. See help if required ./discover_subnet_cron.sh help"
	LOG_ENTRY="Discovery for $FORM_SUBNET cron job FAILED local ip address not provided"
	write_log "$LOG_ENTRY"
	exit 1
fi

if [ "$FORM_SUBNET" == "" ]; then
	echo "The subnet to be scanned must be included. See help if required ./discover_subnet_cron.sh help"
	LOG_ENTRY="Discovery for $FORM_SUBNET cron job FAILED subnet to discover not provided"
	write_log "$LOG_ENTRY"
	exit 1
fi

# create the details for the form data
FORM_DETAILS="subnet_range=$FORM_SUBNET&network_address=$FORM_LOCAL_ADDRESS&snmp_community=$FORM_SNMP_COMMUNITY&ssh_username=$FORM_SSH_USER&ssh_password=$FORM_SSH_PASS&windows_username=$FORM_WINDOWS_USER&windows_password=$FORM_WINDOWS_PASS&windows_domain=$FORM_WINDOWS_DOMAIN&username=$OPENAUDIT_USER&password=$OPENAUDIT_PASS&submit=true"

# call the URL using the form data
RESULT=`curl -o /dev/null --silent --write-out '%{http_code}' --data "$FORM_DETAILS" "$OPENAUDIT_URL" `

# confirm the above command worked
if [ $? -ne 0 ]; then
	LOG_ENTRY="Discovery for $FORM_SUBNET cron job FAILED submission"
	write_log "$LOG_ENTRY"
	exit 1
fi

# check the web server response code
if [ "$RESULT" -ne 302 ]; then
	LOG_ENTRY="Discovery for $FORM_SUBNET cron job FAILED with an unexpected web server response code of $RESULT"
	write_log "$LOG_ENTRY"
	exit 1
fi

# log the script has completed and exit
LOG_ENTRY="Discovery for $FORM_SUBNET cron job COMPLETED successfully"
write_log "$LOG_ENTRY"
exit 0


