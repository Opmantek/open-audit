#!/bin/bash
#
#  Copyright 2003-2014 Opmantek Limited (www.opmantek.com)
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
# @version 1.5.2
# @copyright Copyright (c) 2014, Opmantek
# @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3

# turn off globbing
set -f
IFS='
'

create_file="n"
debugging=2
echo_output="y"
log_no_response="n"
org_id=""
submit_online="y"
subnet_range=""
subnet_timestamp=""
syslog="y"
url="http://localhost/open-audit/index.php/discovery/process_subnet"
user=$(whoami)
system_hostname=$(hostname 2>/dev/null)

# OSX - nmap not in _www user's path
if [[ $(uname) == "Darwin" ]]; then
	PATH="$PATH:/usr/local/bin"
	export PATH
fi

# import the command line arguements
for arg in "$@"; do
	parameter=${arg%%=*}
	value=${arg##*=} 
	if [ "$parameter" == "help" ]; then value="y"; fi
	if [ "$parameter" == "--help" ]; then parameter="help"; value="y"; fi
	if [ "$parameter" == "-h" ]; then parameter="help"; value="y"; fi
	eval "$parameter"=\""$value\""
done

if [ "$help" == "y" ]; then
	echo ""
	echo "---------------------------------"
	echo "Open-AudIT Linux Discovery script"
	echo "(c) Opmantek, 2014.              "
	echo "---------------------------------"
	echo "This script should be used on a Linux based computer to discover hosts in a subnet."
	echo "It will run nmap against the target subnet and submit the result."
	echo "This script is designed to be called by the Open-AudIT web GUI, not run directly from the command line."
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
		echo "$now $system_hostname $$ S:discover_subnet U:$user $1" >> /usr/local/open-audit/other/open-audit.log
	fi	
}

if [ "$debugging" -gt 0 ]; then
	echo "Log Level: $debugging"
fi

i=$(which nmap 2>/dev/null)
if [[ "$i" == *"nmap"* ]]; then 
	if [ "$debugging" -gt 1 ]; then 
		echo "Using NMap."
	fi
else
	if [ "$debugging" -gt 0 ]; then 
		echo "Nmap path not found, aborting."
	fi
	log_entry="Nmap not found, aborting."
	write_log "$log_entry"
	exit 1
fi

log_entry="Discovery for $subnet_range submitted at $subnet_timestamp starting"
write_log "$log_entry"

if [ "$debugging" -gt 0 ]; then
	echo "Scanning Subnet: $subnet_range"
	echo "URL: $url"
fi

# Nmap command line switches explained
# -PE == icmp echo
# -PP == timestamp
# -v  == verbose
# -sP == ping scan
# -PE == imcp echo
# -PP == timestamp
# -n == no name resolution

i=0
j=0
#for line in $(nmap -v -sP -PE -PP -n "$subnet_range" 2>/dev/null | grep "scan report for"); do
for line in $(nmap -v -sn -n "$subnet_range" 2>/dev/null | grep "scan report for"); do
	if [ "$debugging" -gt 0 ]; then
		echo "$line"
	fi
	host=$(echo "$line" | cut -d" " -f5)
	let "i = i + 1"
	if [[ "$line" == *"[host down]"* ]]; then
		if [[ "$log_no_response" == "y" ]]; then
			log_entry="Non responsive ip address $host"
			write_log "$log_entry"
		fi
	else
		let "j = j + 1"
		hosts="$hosts"$'\n'"$host"
	fi
done

if [ "$debugging" -gt 0 ]; then
	echo "Total ip addresses: $i"
	echo "Total responding ip addresses: $j"
fi

result_file=""
result=""

if [[ "$hosts" != "" ]]; then
	for host in $hosts; do

		if [ "$debugging" -gt 0 ]; then
			echo "Scanning Host: $host"
		fi

		log_entry="Scanning ip address $host"
		write_log "$log_entry"

		mac_address=""
		manufacturer=""
		description=""
		os_group=""
		os_family=""
		os_name=""
		type="unknown"

		# options
		# -vv Very Verbose
		# -n Do not resolve IP to DNS name
		# -O attempt to determine operating system
		# --host-timeout set to a smaller than default number
		# -PN treat host as online, skip discovery (we already know it is because of above)
		#nmap_scan=`nmap -vv -n -O --host-timeout 20000ms -PN $host 2>/dev/null`
		nmap_scan=$(nmap -vv -n -O -PN "$host" 2>/dev/null)
		for line in $nmap_scan; do

			NEEDLE="MAC Address:"
			if [[ "$line" == *"$NEEDLE"* ]]; then
				mac_address=$(echo "$line" | cut -d" " -f3)
				manufacturer=$(echo "$line" | cut -d"(" -f2 | cut -d")" -f1 | sed 's/^ *//g' | sed 's/ *$//g')
			fi

			NEEDLE="Device type:"
			if [[ "$line" == *"$NEEDLE"* ]]; then 
				NEEDLE="|"
				if [[ "$line" == *"$NEEDLE"* ]]; then 
					# could be one of multiple
					# just ignore setting type as it's already set to "unknown" above
					description=$(echo "$line" | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g')
				else
					type=$(echo "$line" | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g')
					description=""
				fi
			fi

			NEEDLE="Running:"
			if [[ "$line" == "$NEEDLE"* ]]; then 
				os_name=$(echo "$line" | cut -d":" -f2 | cut -d "," -f1 | sed 's/^ *//g' | sed 's/ *$//g')

				NEEDLE="Cisco IOS"
				if [[ "$line" == *"$NEEDLE"* ]]; then 
					os_group="Cisco"
					os_family="Cisco IOS"
				fi

				NEEDLE="Windows"
				if [[ "$line" == *"$NEEDLE"* ]]; then
					os_group="Windows"
					NEEDLE="Vista"
					if [[ "$line" == *"$NEEDLE"* ]]; then
						os_family="Windows Vista"
					fi
					NEEDLE="7"
					if [[ "$line" == *"$NEEDLE"* ]]; then
						os_family="Windows 7"
					fi
					NEEDLE="8"
					if [[ "$line" == *"$NEEDLE"* ]]; then
						os_family="Windows 8"
					fi
					NEEDLE="2003"
					if [[ "$line" == *"$NEEDLE"* ]]; then
						os_family="Windows 2003"
					fi
					NEEDLE="2008"
					if [[ "$line" == *"$NEEDLE"* ]]; then
						os_family="Windows 2008"
					fi
					NEEDLE="2012"
					if [[ "$line" == *"$NEEDLE"* ]]; then
						os_family="Windows 2012"
					fi
				fi
				NEEDLE="IRIX"
				if [[ "$line" == *"$NEEDLE"* ]]; then 
					os_group="Irix"
				fi
				NEEDLE="OpenBSD"
				if [[ "$line" == *"$NEEDLE"* ]]; then 
					os_group="BSD"
					os_family="Open BSD"
				fi
				NEEDLE="FreeBSD"
				if [[ "$line" == *"$NEEDLE"* ]]; then 
					os_group="BSD"
					os_family="Free BSD"
				fi
				NEEDLE="NetBSD"
				if [[ "$line" == *"$NEEDLE"* ]]; then 
					os_group="BSD"
					os_family="Net BSD"
				fi
				NEEDLE="SunOS"
				if [[ "$line" == *"$NEEDLE"* ]]; then 
					os_group="SunOS"
				fi
				NEEDLE="Solaris"
				if [[ "$line" == *"$NEEDLE"* ]]; then 
					os_group="Solaris"
				fi
				NEEDLE="Linux"
				if [[ "$line" == *"$NEEDLE"* ]]; then 
					os_group="Linux"
				fi
				NEEDLE="VMware"
				if [[ "$line" == *"$NEEDLE"* ]]; then 
					os_group="VMware"
					os_family="VMware ESXi"
				fi
				NEEDLE="Apple Mac OS X"
				if [[ "$line" == *"$NEEDLE"* ]]; then 
					os_group="Apple"
					os_family="Apple OSX"
				fi
				NEEDLE="Apple iOS"
				if [[ "$line" == *"$NEEDLE"* ]]; then 
					os_group="Apple"
					os_family="Apple IOS"
				fi

			fi


			NEEDLE="Running (JUST GUESSING):"
			if [[ "$line" == *"$NEEDLE"* ]]; then 
				os_name=$(echo "$line" | cut -d":" -f2 | cut -d "(" -f1 | sed 's/^ *//g' | sed 's/ *$//g')
			fi

			NEEDLE="Aggressive OS guesses:"
			if [[ "$line" == *"$NEEDLE"* ]]; then 
				os_name=$(echo "$line" | cut -d":" -f2 | cut -d "(" -f1 | sed 's/^ *//g' | sed 's/ *$//g')
				if [[ "$description" == "" ]]; then
					description=$(echo "$line" | cut -d":" -f2 | cut -d "," -f1 | sed 's/^ *//g' | sed 's/ *$//g')
				fi
			fi

			NEEDLE="OS Details:"
			if [[ "$line" == *"$NEEDLE"* ]]; then 
				if [[ "$os_name" == "" ]]; then
					os_name=$(echo "$line" | cut -d":" -f2 | cut -d "(" -f1 | sed 's/^ *//g' | sed 's/ *$//g')
				fi
			fi

		done

		# test for SNMP
		snmp_status="false"
		command=$(nmap -n -sU -p161 "$host" 2>/dev/null | grep "161/udp open")
		if [[ "$command" == *"161/udp open"* ]]; then
				snmp_status="true"
		fi

		# test for SSH
		ssh_status="false"
		command=$(nmap -n -p22 "$host" 2>/dev/null | grep "22/tcp open")
		if [[ "$command" == *"22/tcp open"* ]]; then
				ssh_status="true"
		fi

		# test for WMI
		wmi_status="false"
		command=$(nmap -n -p135 "$host" 2>/dev/null | grep "135/tcp open")
		if [[ "$command" == *"135/tcp open"* ]]; then
				wmi_status="true"
		fi

		# test for webserver on port 80
		p80_status="false"
		command=$(nmap -n -p80 "$host" 2>/dev/null | grep "80/tcp open")
		if [[ "$command" == *"80/tcp open"* ]]; then
				p80_status="true"
		fi

		# test for webserver on port 443
		p443_status="false"
		command=$(nmap -n -p443 "$host" 2>/dev/null | grep "443/tcp open")
		if [[ "$command" == *"443/tcp open"* ]]; then
				p443_status="true"
		fi

		# test for telnet
		tel_status="false"
		command=$(nmap -n -p23 "$host" 2>/dev/null | grep "23/tcp open")
		if [[ "$command" == *"23/tcp open"* ]]; then
				tel_status="true"
		fi

		result="	<device>"$'\n'
		result="$result		<subnet_range>$subnet_range</subnet_range>"$'\n'
		result="$result		<man_ip_address>$host</man_ip_address>"$'\n'
		result="$result		<mac_address>$mac_address</mac_address>"$'\n'
		result="$result		<manufacturer><![CDATA[$manufacturer]]></manufacturer>"$'\n'
		result="$result		<type><![CDATA[$type]]></type>"$'\n'
		result="$result		<os_group><![CDATA[$os_group]]></os_group>"$'\n'
		result="$result		<os_family><![CDATA[$os_family]]></os_family>"$'\n'
		result="$result		<os_name><![CDATA[$os_name]]></os_name>"$'\n'
		result="$result		<description><![CDATA[$description]]></description>"$'\n'
		result="$result		<org_id>$org_id</org_id>"$'\n'
		result="$result		<snmp_status>$snmp_status</snmp_status>"$'\n'
		result="$result		<ssh_status>$ssh_status</ssh_status>"$'\n'
		result="$result		<wmi_status>$wmi_status</wmi_status>"$'\n'
		result="$result		<p80_status>$p80_status</p80_status>"$'\n'
		result="$result		<p443_status>$p443_status</p443_status>"$'\n'
		result="$result		<tel_status>$tel_status</tel_status>"$'\n'
		result="$result		<subnet_timestamp>$subnet_timestamp</subnet_timestamp>"$'\n'
		result="$result	</device>"

		result_file="$result_file"$'\n'"$result"

		result="<devices>"$'\n'"$result"$'\n'"</devices>"
		#result="<devices>"$result"</devices>"

		if [[ "$submit_online" == "y" ]]; then
			if [ "$debugging" -gt 0 ]; then
				echo "Submitting online."$'\n'
			fi
			log_entry="Submitting online $host"
			write_log "$log_entry"
			if [[ $(uname) == "Linux" ]]; then
				# -b   = background the wget command
				# -O - = output to STDOUT (combine with 1>/dev/null for no output).
				# -q   = quiet (no output)
				#if [ "$debugging" -gt 0 ]; then
				#	wget -O "$url" --post-data=form_details="$result" 1>/dev/null
				#else
					wget -b -O - -q --no-check-certificate "$url" --post-data=form_details="$result" 1>/dev/null
				#fi
			fi
			if [[ $(uname) == "Darwin" ]]; then
				curl --data "form_details=$result" "$url"
			fi
		fi

		result=""

	done
fi

#resultcomplete="<devices>$result_file<device><subnet_range>$subnet_range</subnet_range><subnet_timestamp>$subnet_timestamp</subnet_timestamp><complete>y</complete></device></devices>"
resultcomplete="<devices><device><subnet_range>$subnet_range</subnet_range><subnet_timestamp>$subnet_timestamp</subnet_timestamp><complete>y</complete></device></devices>"

if [[ "$submit_online" == "y" ]]; then
	if [[ $(uname) == "Linux" ]]; then
		# -b   = background the wget command
		# -O - = output to STDOUT (combine with 1>/dev/null for no output).
		# -q   = quiet (no output)
		#wget -b -O - -q --no-check-certificate ${url} --post-data=form_details="$resultcomplete" 1>/dev/null
		wget -b -O - -q --no-check-certificate "$url" --post-data=form_details="$resultcomplete" 1>/dev/null
	fi

	if [[ $(uname) == "Darwin" ]]; then
		curl --data "form_details=$resultcomplete" "$url"
	fi
fi

if [[ "$echo_output" == "y" ]]; then
	echo "<devices>$result_file<device><subnet_range>$subnet_range</subnet_range><subnet_timestamp>$subnet_timestamp</subnet_timestamp><complete>y</complete></device></devices>"
fi


if [[ "$create_file" == "y" ]]; then
	result_file="<devices>$result_file"$'\n'"</devices>"$'\n'
	echo "$result_file" > discovery_subnet.xml
fi

log_entry="Discovery for $subnet_range submitted at $subnet_timestamp completed"
write_log "$log_entry"