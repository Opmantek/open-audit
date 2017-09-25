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
# 
# @version   2.0.8

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
discovery_id=""
syslog="y"
url="http://localhost/open-audit/index.php/input/discoveries"
user=$(whoami)
system_hostname=$(hostname 2>/dev/null)
timing="-T3"
sequential="n"
os_scan="n"
force_ping="n"
host_timeout=""
#host_timeout="30"

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

if [ -n "$host_tmeout" ]; then
	host_timeout="--host-timeout $host_timeout"
fi

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
	echo "  discovery_id"
	echo "     * - The Open-AudIT discovery id. This is populated by Open-AudIT when running this script from discovery."
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
	echo "  -host_timeout"
	echo "     X - Give up on scanning the target after X seconds."
	echo "    *  - Do not set this value, allow Nmap to take as long as it needs to scan."
	echo ""
	#echo "  log_no_response"
	#echo "    *n - Do not submit a result if there is no device attached to the given ip address."
	#echo "     y - Submit a result even if nothing is found."
	#echo ""
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
	#echo "  sequential"
	#echo "     *n - Set to n to NOT wait for each result from the server before continuing to scan the next ip in the list."
	#echo "      y - Set to y to wait for a result from the server before continuing on to the next ip to scan. Will extend discovery times."
	#echo "  syslog"
	#echo "     *y - Log entries to the Open-AudIT log file."
	#echo "      n - Do not log entries."
	#echo ""
	echo "  timing"
	echo "   *-T3 - Nmap timing see this page for details"
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

function db_log()
{
	now=$(date "+%F %T")
	message=$1
	duration=$2
	status=$3
	severity=$4
	if [ -z "$severity" ]; then
		severity=6
	fi
	curl -d "type=discovery&timestamp=$now&discovery_id=$discovery_id&severity=$severity&pid=$$&ip=127.0.0.1&file=discover_subnet.sh&message=$message&command_time_to_execute=$duration&command_status=$status" -X POST http://localhost/open-audit/index.php/input/logs
	if [ "$debugging" -gt 0 ]; then
		echo "curl -d \"type=discovery&timestamp=$now&discovery_id=$discovery_id&severity=$severity&pid=$$&ip=127.0.0.1&file=discover_subnet.sh&message=$message&command_time_to_execute=$duration&command_status=$status\" -X POST http://localhost/open-audit/index.php/input/logs"
	fi
}

function timer ()
{
	# Returns the elapsed time in seconds.
	#
	# usage :
	#
	#   start=$(timer)
	#   # commands...
	#   total_seconds=$(timer "$start")
	#
	if [ $# -eq 0 ]; then
		date +%s
	else
		local stime=$1
		etime=$(date '+%s')
		if [ -z "$stime" ]; then stime=$etime; fi
		dt=$((etime - stime))
		echo "$dt"
	fi
}

script_start=$(timer)

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

log_entry="Discovery for $subnet_range submitted for discovery $discovery_id starting"
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

hosts_in_subnet=$(nmap -n -sL "$subnet_range" 2>/dev/null | grep "Nmap done" | cut -d" " -f3)

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
		echo "Total ip addresses: $hosts_in_subnet"
		echo "Total responding ip addresses: $i"
	fi
fi

db_log "Starting discovery, scanning $hosts_in_subnet IP addresses" "" "start"
result_file=""
result=""
hosts_scanned=0

if [[ "$hosts" != "" ]]; then
	for host in $hosts; do

		let "hosts_scanned = hosts_scanned + 1"
		start=$(timer)

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
		nmap_ports=""

		# options
		# -vv Very Verbose
		# -n Do not resolve IP to DNS name
		# -O attempt to determine operating system ($os_scan)
		# --host-timeout so we don't hang indefinitley
		# -T3 set the timing (higher is faster) ($timing) default for the script is -T3
		if [ "$debugging" -gt 0 ]; then
			echo "Scanning Host: $host"
			echo "nmap -vv -n $os_scan -Pn --host-timeout 30 $timing $host 2>&1"
		fi
		nmap_tcp_timer_start=$(timer)
		nmap_scan=$(nmap -vv -n $os_scan -Pn $host_timeout $timing "$host" 2>&1)
		if [ "$debugging" -gt 0 ]; then
			nmap_tcp_timer_end=$(timer "$nmap_tcp_timer_start")
			echo "Nmap TCP scan time: $nmap_tcp_timer_end"
			echo ""
			echo "$nmap_scan"
			echo ""
		fi

		for line in $nmap_scan; do

			test=$(echo $line | grep "tcp.*open")
			if [[ "$test" != "" ]]; then
				port=$(echo $line | awk '{print $1}')
				program=$(echo $line | awk '{print $3}')
				nmap_ports="$nmap_ports,$port/$program"
			fi

			NEEDLE="/tcp"
			if [[ "$line" == *"$NEEDLE"* ]]; then
				NEEDLE="open"
				if [[ "$line" == *"$NEEDLE"* ]]; then
					host_is_up="true"
				fi
				NEEDLE="closed "
				if [[ "$line" == *"$NEEDLE"* ]]; then
					host_is_up="true"
				fi
			fi

			NEEDLE="Host is up, received arp-response"
			if [[ "$line" == *"$NEEDLE"* ]]; then
				host_is_up="true"
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
				fi
			fi

			NEEDLE="135/tcp"
			if [[ "$line" == *"$NEEDLE"* ]]; then
				NEEDLE="open"
				if [[ "$line" == *"$NEEDLE"* ]]; then
					wmi_status="true"
				fi
			fi

		done

		# test for SNMP (separate scan as it's UDP)
		snmp_status="false"
		nmap_udp_timer_start=$(timer)
		command=$(nmap -n -sU -p161 "$timing" --host-timeout 20 "$host" 2>/dev/null | grep "161/udp open")
		if [ "$debugging" -gt 0 ]; then
			nmap_udp_timer_end=$(timer "$nmap_udp_timer_start")
			echo "Nmap UDP scan time: $nmap_udp_timer_end"
		fi
		if [[ "$command" == *"161/udp open"* ]]; then
			snmp_status="true"
			nmap_ports="$nmap_ports,161/udp/snmp"
			if [ "$host_is_up" == "false" ] && [ "$debugging" -gt 1 ]; then
				echo "SNMP only detected host $host is up."
			fi
			if [ "$debugging" -gt 1 ]; then
				echo "Host $host SNMP status is true."
			fi
			host_is_up="true"
		fi

		result=""
		if [ "$host_is_up" == "true" ]; then
			nmap_ports=${nmap_ports#?}
			result="	<device>"$'\n'
			result="$result		<subnet_range>$subnet_range</subnet_range>"$'\n'
			result="$result		<ip>$host</ip>"$'\n'
			result="$result		<mac_address>$mac_address</mac_address>"$'\n'
			result="$result		<manufacturer><![CDATA[$manufacturer]]></manufacturer>"$'\n'
			#result="$result		<description><![CDATA[$description]]></description>"$'\n'
			result="$result		<description></description>"$'\n'
			result="$result		<org_id>$org_id</org_id>"$'\n'
			result="$result		<snmp_status>$snmp_status</snmp_status>"$'\n'
			result="$result		<ssh_status>$ssh_status</ssh_status>"$'\n'
			result="$result		<wmi_status>$wmi_status</wmi_status>"$'\n'
			result="$result		<discovery_id>$discovery_id</discovery_id>"$'\n'
			if [ "$debugging" -gt 0 ]; then
				result="$result		<debug>true</debug>"$'\n'
			else
				result="$result		<debug>false</debug>"$'\n'
			fi
			result="$result		<nmap_ports><![CDATA[$nmap_ports]]></nmap_ports>"$'\n'
			#result="$result     <nmap_result><![CDATA[$nmap_result]]></nmap_result>"$'\n'
			result="$result	</device>"
			# add the result for this device to the result_file var for display or file output later on
			result_file="$result_file"$'\n'"$result"
			# wrap this device in xml tags for submission individually
			result="<devices>"$'\n'"$result"$'\n'"</devices>"

			if [[ "$submit_online" == "y" ]]; then
				if [ "$debugging" -gt 0 ]; then
					echo "Submitting online."$'\n'
				fi
				write_log "IP $host responding, submitting."
				db_log "IP $host responding, submitting." $(timer "$start") "($hosts_scanned of $hosts_in_subnet)"
				# curl options
				# -k = ignore invalid (self signed) certs
				# -s = Silent mode. Don’t show progress meter or error messages.
				# -S = When used with -s it makes curl show error message if it fails.
				#send_result=$(curl --data "data=$result" "$url" -k -s -S 2>&1 1> /dev/null)
				send_result=$(curl --data "data=$result" "$url" -k -s -S 2>&1)
				if [ -n "$send_result" ]; then
					db_log "Error when submitting discovery result (device). $send_result" "" "fail" "3"
				fi
			else
				log_entry="IP $host responding."
				write_log "$log_entry"
				# Don't bother to update the db log table because we're not sending the result to it
			fi
		else
			log_entry="IP $host not responding, ignoring."
			write_log "$log_entry"
			db_log "IP $host not responding, ignoring." $(timer "$start") "($hosts_scanned of $hosts_in_subnet)"
		fi
		result=""
	done
fi

resultcomplete="<devices><device><subnet_range>$subnet_range</subnet_range><discovery_id>$discovery_id</discovery_id><complete>y</complete></device></devices>"

if [[ "$submit_online" == "y" ]]; then
	if [[ "$echo_output" == "y" ]]; then
		send_result=$(curl --data "data=$resultcomplete" "$url" -k -s -S 2>&1)
		echo "$send_result"
	else
		#send_result=$(curl --data "data=$resultcomplete" "$url" -k -s -S  2>&1 1> /dev/null)
		send_result=$(curl --data "data=$resultcomplete" "$url" -k -s -S 2>&1)
		if [ -n "$send_result" ]; then
			db_log "Error when submitting discovery result (complete). $send_result" "" "fail" "3"
		fi
	fi
fi

if [[ "$echo_output" == "y" ]]; then
	echo "<devices>$result_file<device><subnet_range>$subnet_range</subnet_range><discovery_id>$discovery_id</discovery_id><complete>y</complete></device></devices>"
fi

if [[ "$create_file" == "y" ]]; then
	result_file="<devices>$result_file"$'\n'"</devices>"$'\n'
	echo "$result_file" > discovery_subnet.xml
fi

log_entry="Discovery for $subnet_range submitted for discovery $discovery_id completed"
write_log "$log_entry"


db_log "Completed discovery, scanned $hosts_scanned IP addresses" $(timer "$script_start") "finish"