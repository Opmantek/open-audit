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

set -f              # turn off globbing
IFS='
'

echo "-------ATTENTION------"
echo "This script has been deprecated. Please use the discover_subnet.sh script instead."
echo "----------------------"
echo ""

create_file="n"
debugging=0
echo_output="n"
help="n"
submit_online="y"
subnet=""
syslog="y"
url="http://localhost/open-audit/index.php/system/add_nmap"
background_wget="n"

user=$(whoami)
system_hostname=$(hostname 2>/dev/null)


local_hostname=`hostname 2>/dev/null`
local_ip=`/sbin/ifconfig | grep -v "127.0.0.1" | grep "inet addr:" | cut -d":" -f2 | cut -d" " -f1`
xml_file="subnet_result"-`date +%Y%m%d%H%M%S`.xml
process="audit_subnet.sh"
whoami=`whoami`
working_directory=`pwd`

for arg in "$@"; do
	parameter=$(echo "$arg" | cut -d= -f1)
	parameter_value=$(echo "$arg" | cut -d= -f2)
	case "$parameter" in
		"background_wget" )
			background_wget="$parameter_value" ;;
		"create_file" )
			create_file="$parameter_value" ;;
		"debugging" )
			debugging="$parameter_value" ;;
		"echo_output" )
			echo_output="$parameter_value" ;;
		"help" )
			help="$parameter_value" ;;
		"--help" )
			help="y" ;;
		"-h" )
			help="y" ;;
		"org_id" )
			org_id="$parameter_value" ;;
		"submit_online" )
			submit_online="$parameter_value" ;;
		"subnet" )
			subnet="$parameter_value" ;;
		"syslog" )
			syslog="$parameter_value" ;;
		"url" )
			url="$parameter_value" ;;
	esac
done

if [ "$help" == "y" ]; then
	echo ""
	echo "---------------------------------"
	echo "Open-AudIT Linux Discovery script"
	echo "(c) Opmantek, 2014.              "
	echo "---------------------------------"
	echo ""
	echo "-------ATTENTION------"
	echo "This script has been deprecated. Please use the duscover_subnet.sh script instead."
	echo "----------------------"
	echo ""
	echo "This script should be used on a Linux based computer to discover hosts in a subnet."
	echo "It will run nmap against the target subnet and submit the result."
	echo ""
	echo "Nmap and Wget are prerequisites for this script to function correctly."
	echo ""
	echo "Valid command line options are below (items containing * are the defaults) and should take the format name=value (eg: debugging=1)."
	echo ""
	echo "  create_file"
	echo "     y - Create an XML file containing the audit result."
	echo "    *n - Do not create an XML result file."
	echo ""
	echo "  debugging"
	echo "     0 - No output."
	echo "     1 - Minimal Output."
	echo "    *2 - Verbose output."
	echo ""
	echo "  -h or --help or help=y"
	echo "      y - Display this help output."
	echo "     *n - Do not display this output."
	echo ""
	echo "  log_no_response"
	echo "    *n - Do not submit a result if there is no device attached to the given ip address."
	echo "     y - Submit a result even if nothing is found."
	echo ""
	echo "  org_id"
	echo "       - The org_id (an integer) taken from Open-AudIT. If set all devices found will be associated to that Organisation."
	echo ""
	echo "  submit_online"
	echo "    *y - Submit the audit result to the Open-AudIT Server defined by the 'url' variable."
	echo "     n - Do not submit the audit result"
	echo ""
	echo "  subnet"
	echo "       - Any given subnet as per the Nmap command line options. http://nmap.org/book/man-target-specification.html EG - 192.168.1-3.1-20, 192.168.1.0/24, etc."
	echo ""
	echo "  subnet_timestamp"
	echo "       - Set by the web GUI. Not used on the command line."
	echo ""
	echo "  syslog"
	echo "     *y - Log entries to the Open-AudIT log file."
	echo "      n - Do not log entries."
	echo ""
	echo "  url"
	echo "    *http://localhost/open-audit/index.php/discovery/process_subnet - The http url of the Open-AudIT Server used to submit the result to."
	echo ""
	echo ""
	echo "NOTE - The netstat section can take a few minutes to complete."
	echo ""
	echo "The name of the resulting XML file will be in the format HOSTNAME-YYMMDDHHIISS.xml, as in the hostname of the machine the the complete timestamp the audit was started."
	exit
fi

# logging to a file
function write_log()
{
	if [ "$syslog" == "y" ]; then
		now=$(date "+%b %d %T")
		if [[ $debugging -gt 1 ]]; then
			echo "Logged: $1"
		fi
		echo "$now $system_hostname $$ 7 U:$user S:audit_subnet M:$1" >> /usr/local/open-audit/other/log_system.log
	fi	
}

#if [[ $EUID -ne 0 ]]; then
#   echo "This script must be run as root" 
#   exit 1
#fi

if [ $debugging -gt 0 ]; then
	echo "Scanning subnet starting: $subnet"
fi

log_entry="Job starting - scanning subnet $subnet"
write_log "$log_entry"

#hosts_in_subnet=`nmap -sP -PS135,139,445 -n $subnet | grep "scan report for" | cut -d" " -f5`
# -PE == icmp echo
# -PP == timestamp
# -sn == ping scan (no port scan)
# -sP == 
hosts_in_subnet=`nmap -sP -PE -PP -n $subnet | grep "scan report for" | cut -d" " -f5`

result="<devices>\n"

if [ $debugging -gt 0 ]; then
	hosts_up=`echo "$hosts_in_subnet" | wc -l`
	echo "Hosts Up: $hosts_up"
fi


if [ "$hosts_in_subnet" != "" ]; then
	
	for host in $hosts_in_subnet; do

		#if [[ "$host" != *"$local_ip"* ]]; then

			# TODO: add in a ping to determine if the host is REALLY online.
			# nmap has issues across subnets where network infrastructure may return a false positive
			# even if there is nothing at the probed address

			# maybe use a switch
			# maybe use ping when target subnet is different to host subnet

			if [ $debugging -gt 0 ]; then
				echo "Scanning Host: $host"
			fi

			log_entry="$host being nmap scanned"
			write_log "$log_entry"

			# options
			# -vv Very Verbose
			# -n Do not resolve IP to DNS name
			# -O attempt to determine operating system
			# --host-timeout set to a smaller than default number
			# -PN treat host as online, skip discovery (we already know it is because of above)
			nmap_scan=`nmap -vv -n -O --host-timeout 9000ms -PN $host 2>/dev/null`

			# Not trying SNMP detection as it's not consistent across no snmp, snmp v1, snmp v2
			#NMAP=`nmap -vv -n -O -PN -sU -p161-162 $host`
			
			mac_address=""
			manufacturer=""
			type="unknown"
			description=""
			os_name=""
			
			for line in $nmap_scan; do

				NEEDLE="MAC Address:"
				if [[ "$line" == *"$NEEDLE"* ]]; then
					mac_address=`echo $line | cut -d" " -f3`
					manufacturer=`echo $line | cut -d"(" -f2 | cut -d")" -f1 | sed 's/^ *//g' | sed 's/ *$//g'`
				fi

				NEEDLE="Device type:"
				if [[ "$line" == *"$NEEDLE"* ]]; then 
					NEEDLE="|"
					if [[ "$line" == *"$NEEDLE"* ]]; then 
						# could be one of multiple
						# just ignore setting type as it's already set to "unknown" above
						description=`echo $line | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g'`
					else
						type=`echo $line | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g'`
						description=""
					fi
				fi

				NEEDLE="Running:"
				if [[ "$line" == *"$NEEDLE"* ]]; then 
					os_name=`echo $line | cut -d":" -f2 | cut -d "," -f1 | sed 's/^ *//g' | sed 's/ *$//g'`
				fi

				NEEDLE="Running (JUST GUESSING):"
				if [[ "$line" == *"$NEEDLE"* ]]; then 
					os_name=`echo $line | cut -d":" -f2 | cut -d "(" -f1 | sed 's/^ *//g' | sed 's/ *$//g'`
				fi

				NEEDLE="Aggressive OS guesses:"
				if [[ "$line" == *"$NEEDLE"* ]]; then 
					os_name=`echo $line | cut -d":" -f2 | cut -d "(" -f1 | sed 's/^ *//g' | sed 's/ *$//g'`
					if [[ "$description" == "" ]]; then
						description=`echo $line | cut -d":" -f2 | cut -d "," -f1 | sed 's/^ *//g' | sed 's/ *$//g'`
					fi
				fi

				NEEDLE="OS Details:"
				if [[ "$line" == *"$NEEDLE"* ]]; then 
					if [[ "$os_name" == "" ]]; then
						os_name=`echo $line | cut -d":" -f2 | cut -d "(" -f1 | sed 's/^ *//g' | sed 's/ *$//g'`
					fi
				fi

			done

			result="$result	<device>\n"
			result="$result		<man_ip_address>$host</man_ip_address>\n"
			result="$result		<mac_address>$mac_address</mac_address>\n"
			result="$result		<manufacturer>$manufacturer</manufacturer>\n"
			result="$result		<type>$type</type>\n"
			result="$result		<os_name>$os_name</os_name>\n"
			result="$result		<description>$description</description>\n"
			result="$result	</device>\n"

			device="<devices>\n"
			device="$device	<device>\n"
			device="$device		<man_ip_address>$host</man_ip_address>\n"
			device="$device		<mac_address>$mac_address</mac_address>\n"
			device="$device		<manufacturer>$manufacturer</manufacturer>\n"
			device="$device		<type>$type</type>\n"
			device="$device		<os_name>$os_name</os_name>\n"
			device="$device		<description>$description</description>\n"
			device="$device	</device>\n"
			device="$device</devices>\n"

			if [[ "$submit_online" == "y" ]]; then

				log_entry="$host being submitted"
				write_log "$log_entry"

				if [ $debugging -gt 0 ]; then
					echo "Submitting online."
				fi

				device=`echo -e "$device"`

				if [[ `uname` == "Linux" ]]; then
					if [[ "$background_wget" == "n" ]]; then
						wget -O - -q ${url} --post-data=form_nmap="$device"
					fi
					if [[ "$background_wget" == "y" ]]; then
						wget -b -O - -q ${url} --post-data=form_nmap="$device" 1>/dev/null
					fi
				fi

				if [[ `uname` == "Darwin" ]]; then
					curl --data "form_nmap=$device" "$url"
				fi
			fi
		#fi
	done
fi

result="$result</devices>"

if [[ "$create_file" == "y" ]]; then
	if [ $debugging -gt 0 ]; then
		echo "Creating file."
	fi
	echo -e "$result" > $xml_file
	chmod 777 $xml_file
fi

if [[ "$echo_output" == "y" ]]; then
	echo -e "$result"
fi

log_entry="Job complete - scanning subnet $subnet"
write_log "$log_entry"

exit 0