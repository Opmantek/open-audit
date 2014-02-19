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
# @version 1.2
# @copyright Copyright (c) 2014, Opmantek
# @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3

# turn off globbing
set -f
IFS='
'

# debugging values
# 0 = no debug
# 1 = basic debug 
# 2 = verbose debug

create_file="n"
debugging=2
echo_output="y"
log_no_response="n"
org_id=""
submit_online="y"
subnet=""
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
	eval "$parameter"=\""$value\""
done

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

log_entry="Discovery for $subnet submitted at $subnet_timestamp starting"
write_log "$log_entry"

if [ "$debugging" -gt 0 ]; then
	echo "Scanning Subnet: $subnet"
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
#for line in $(nmap -v -sP -PE -PP -n "$subnet" 2>/dev/null | grep "scan report for"); do
for line in $(nmap -v -sn -n "$subnet" 2>/dev/null | grep "scan report for"); do
	echo "$line"
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
			if [[ "$line" == *"$NEEDLE"* ]]; then 
				os_name=$(echo "$line" | cut -d":" -f2 | cut -d "," -f1 | sed 's/^ *//g' | sed 's/ *$//g')
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
		result="$result		<subnet>$subnet</subnet>"$'\n'
		result="$result		<man_ip_address>$host</man_ip_address>"$'\n'
		result="$result		<mac_address>$mac_address</mac_address>"$'\n'
		result="$result		<manufacturer>$manufacturer</manufacturer>"$'\n'
		result="$result		<type>$type</type>"$'\n'
		result="$result		<os_name>$os_name</os_name>"$'\n'
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

		result="<devices>"$'\n'"$result"$'\n'"</devices>"$'\n'

		if [[ "$submit_online" == "y" ]]; then
			if [ "$debugging" -gt 0 ]; then
				echo "Submitting online."
			fi
			log_entry="Submitting online $host"
			write_log "$log_entry"
			if [[ $(uname) == "Linux" ]]; then
				# -b   = background the wget command
				# -O - = output to STDOUT (combine with 1>/dev/null for no output).
				# -q   = quiet (no output)
				#  wget -b -O - -q --no-check-certificate ${url} --post-data=form_details="$result" 1>/dev/null
				wget -b -O - -q --no-check-certificate "$url" --post-data=form_details="$result" 1>/dev/null
			fi
			if [[ $(uname) == "Darwin" ]]; then
				curl --data "form_details=$result" "$url"
			fi
		fi

		if [[ "$echo_output" == "y" ]]; then
			echo "$result"
		fi

		result=""

	done
fi

resultcomplete="<devices><device><subnet>$subnet</subnet><subnet_timestamp>$subnet_timestamp</subnet_timestamp><complete>y</complete></device></devices>"

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
	echo "$resultcomplete"
fi


if [[ "$create_file" == "y" ]]; then
	result_file="<devices>$result_file"$'\n'"</devices>"$'\n'
	echo "$result_file" > discovery_subnet.xml
fi

log_entry="Discovery for $subnet submitted at $subnet_timestamp completed"
write_log "$log_entry"