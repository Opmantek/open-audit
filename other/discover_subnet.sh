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
timing="-T4"
sequential="n"
os_scan="n"
force_ping="n"

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

if [ "$os_scan" == "y" ]; then
	os_scan="-O"
else
	os_scan=""
fi

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
	echo "  force_ping"
	echo "    *n - When discovering devices, do not check for ping response."
	echo "     y - Check for a ping response and only discover those devices that do respond."
	echo ""
	echo "  os_scan"
	echo "    *n - Do not use the -O Nmap flag when scanning devices."
	echo "     y - Use -O (will slow down scan and requires SUID be set on the Nmap binary."
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
	echo "  subnet_range"
	echo "       - Any given subnet as per the Nmap command line options. http://nmap.org/book/man-target-specification.html EG - 192.168.1-3.1-20, 192.168.1.0/24, etc."
	echo ""
	echo "  subnet_timestamp"
	echo "       - Set by the web GUI. Not used on the command line."
	echo ""
	echo "  sequential"
	echo "     *n - Set to n to NOT wait for each result from the server before continuing to scan the next ip in the list."
	echo "      y - Set to y to wait for a result from the server before continuing on to the next ip to scan. Will extend discovery times."
	echo "  syslog"
	echo "     *y - Log entries to the Open-AudIT log file."
	echo "      n - Do not log entries."
	echo ""
	echo "  timing"
	echo "   *-T4 - Nmap timing see this page for details"
	echo "        - https://nmap.org/book/man-performance.html"
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

if [ "$sequential" == "n" ]; then
	sequential="-b"
else
	sequential=""
fi

# logging to a file
function write_log()
{
	if [ "$syslog" == "y" ]; then
		now=$(date "+%b %d %T")
		if [[ $debugging -gt 1 ]]; then
			echo "Logged: $1"
		fi
		echo "$now $system_hostname $$ 7 U:$user S:discover_subnet M:$1" >> /usr/local/open-audit/other/log_system.log
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

if [ -z $(ls -lh "$i" | grep "rws") ]; then
	if [ "$os_scan" = "-O" ]; then
		log_entry="Discovery with os scan requested but suid not set on nmap binary. Removing os detection (still scanning)"
		write_log "$log_entry"
	fi
	os_scan=""
fi

# Nmap command line switches explained
# -PE == icmp echo
# -PP == timestamp
# -sP == ping scan
# -PE == imcp echo
# -PP == timestamp
# -v  == verbose
# -sn == ping scan only
# -n  == no name resolution

i=0
j=0
hosts=""
# removed the below for 1.12.2 - scan every IP now as we're checking for devices not responding to a ping
if [ "$force_ping" == "y" ]; then
	for line in $(nmap -v -sn -n "$timing" "$subnet_range" 2>/dev/null | grep "scan report for"); do
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
else
	for line in $(nmap -n -sL "$subnet_range" 2>/dev/null | grep "Nmap scan report for" | cut -d" " -f5); do
		let "i = i + 1"
		hosts="$hosts"$'\n'"$line"
	done

	if [ "$debugging" -gt 0 ]; then
		echo "Total ip addresses: $i"
		#echo "Total responding ip addresses: $j"
	fi
fi

result_file=""
result=""

if [[ "$hosts" != "" ]]; then
	for host in $hosts; do

		if [ "$debugging" -gt 0 ]; then
			echo "Scanning Host: $host"
		fi

		#log_entry="Scanning ip address $host"
		#write_log "$log_entry"

		mac_address=""
		manufacturer=""
		description=""
		os_group=""
		os_family=""
		os_name=""
		ssh_status="false"
		wmi_status="false"
		snmp_status="false"
		p80_status="false"
		p443_status="false"
		tel_status="false"
		host_is_up="false"

		# options
		# -vv Very Verbose
		# -n Do not resolve IP to DNS name
		# -O attempt to determine operating system ($os_scan)
		# --host-timeout so we don't hang indefinitley
		# -T4 set the timing (higher is faster) ($timing) default for the script is -T4
		nmap_scan=$(nmap -vv -n $os_scan -Pn --host-timeout 90 $timing "$host" 2>&1)
		for line in $nmap_scan; do

			NEEDLE="/tcp"
			if [[ "$line" == *"$NEEDLE"* ]]; then
				NEEDLE="open"
				if [[ "$line" == *"$NEEDLE"* ]]; then
					host_is_up="true"
					if [ "$debugging" -gt 1 ]; then
						echo "Host $host is up."
					fi
				fi
			fi

			NEEDLE="MAC Address:"
			if [[ "$line" == *"$NEEDLE"* ]]; then
				mac_address=$(echo "$line" | cut -d" " -f3)
				manufacturer=$(echo "$line" | cut -d"(" -f2 | cut -d")" -f1 | sed 's/^ *//g' | sed 's/ *$//g')
				if [ "$debugging" -gt 1 ]; then
					echo "Host $host mac: $mac_address."
				fi
			fi

			NEEDLE="Device type:"
			if [[ "$line" == *"$NEEDLE"* ]]; then
				NEEDLE="|"
				if [[ "$line" == *"$NEEDLE"* ]]; then
					# could be one of multiple
					description=$(echo "$line" | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g')
					if [ "$debugging" -gt 1 ]; then
						echo "Host $host description: $description."
					fi
				else
					description=""
				fi
			fi

			# individual ports

			NEEDLE="22/tcp"
			if [[ "$line" == *"$NEEDLE"* ]]; then
				NEEDLE="open"
				if [[ "$line" == *"$NEEDLE"* ]]; then
					ssh_status="true"
					if [ "$debugging" -gt 1 ]; then
						echo "Host $host SSH status os true."
					fi
				fi
			fi

			NEEDLE="135/tcp"
			if [[ "$line" == *"$NEEDLE"* ]]; then
				NEEDLE="open"
				if [[ "$line" == *"$NEEDLE"* ]]; then
					wmi_status="true"
					if [ "$debugging" -gt 1 ]; then
						echo "Host $host WMI status os true."
					fi
				fi
			fi

		done

		# test for SNMP (separate scan as it's UDP)
		snmp_status="false"
		command=$(nmap -n -sU -p161 "$timing" --host-timeout 90 "$host" 2>/dev/null | grep "161/udp open")
		if [[ "$command" == *"161/udp open"* ]]; then
			snmp_status="true"
			if [ "$host_is_up" == "false" ] && [ "$debugging" -gt 1 ]; then
				echo "SNMP only detected host $host is up."
			fi
			if [ "$debugging" -gt 1 ]; then
				echo "Host $host SNMP status os true."
			fi
			host_is_up="true"
		fi

		result=""
		if [ "$host_is_up" == "true" ]; then
			result="	<device>"$'\n'
			result="$result		<subnet_range>$subnet_range</subnet_range>"$'\n'
			result="$result		<man_ip_address>$host</man_ip_address>"$'\n'
			result="$result		<mac_address>$mac_address</mac_address>"$'\n'
			result="$result		<manufacturer><![CDATA[$manufacturer]]></manufacturer>"$'\n'
			#result="$result		<description><![CDATA[$description]]></description>"$'\n'
			result="$result		<description></description>"$'\n'
			result="$result		<org_id>$org_id</org_id>"$'\n'
			result="$result		<snmp_status>$snmp_status</snmp_status>"$'\n'
			result="$result		<ssh_status>$ssh_status</ssh_status>"$'\n'
			result="$result		<wmi_status>$wmi_status</wmi_status>"$'\n'
			result="$result		<subnet_timestamp>$subnet_timestamp</subnet_timestamp>"$'\n'
			result="$result     <nmap_result><![CDATA[$nmap_scan]]></nmap_result>"$'\n'
			result="$result	</device>"
			# add the result for this device to the result_file var for display or file output later on
			result_file="$result_file"$'\n'"$result"
			# wrap this device in xml tags for submission individually
			result="<devices>"$'\n'"$result"$'\n'"</devices>"

			if [[ "$submit_online" == "y" ]]; then
				if [ "$debugging" -gt 0 ]; then
					echo "Submitting online."$'\n'
				fi
				log_entry="IP $host responding, submitting."
				write_log "$log_entry"
				if [[ $(uname) == "Linux" ]]; then
					# -b   = background the wget command
					# -O - = output to STDOUT (combine with 1>/dev/null for no output).
					# -q   = quiet (no output)
					wget $sequential -O - -q --no-check-certificate "$url" --post-data=form_details="$result" 1>/dev/null
				fi
				if [[ $(uname) == "Darwin" ]]; then
					curl --data "form_details=$result" "$url"
				fi
			else
				log_entry="IP $host responding."
				write_log "$log_entry"
			fi
		else
			log_entry="IP $host not responding, ignoring."
			write_log "$log_entry"
		fi

		result=""

	done
fi

resultcomplete="<devices><device><subnet_range>$subnet_range</subnet_range><subnet_timestamp>$subnet_timestamp</subnet_timestamp><complete>y</complete></device></devices>"

if [[ "$submit_online" == "y" ]]; then
	if [[ $(uname) == "Linux" ]]; then
		# -b   = background the wget command
		# -O - = output to STDOUT (combine with 1>/dev/null for no output).
		# -q   = quiet (no output)
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