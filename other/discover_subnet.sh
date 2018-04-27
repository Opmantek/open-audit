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
# @version   2.2.1

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
url="http://localhost/open-audit/index.php/input/discoveries"
user=$(whoami)
system_hostname=$(hostname 2>/dev/null)
timing="-T4"
force_ping="n"
consider_161_enough="n"
version="2.2"

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
	echo "  consider_161_enough"
	echo "    *-n - If the target responds ONLY to port 161, do not consider it up."
	echo "      y - Consider the target up if UDP port 161 responds."
	echo ""
	echo "  create_file"
	echo "    *n - Do not create an XML result file."
	echo "     y - Create an XML file containing the audit result."
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
	echo "  -h or --help or help=y"
	echo "     *n - Do not display this output."
	echo "      y - Display this help output."
	echo ""
	echo "  org_id"
	echo "       - The org_id (an integer) taken from Open-AudIT. If set all devices found will be associated to that Organisation."
	echo ""
	echo "  submit_online"
	echo "     n - Do not submit the audit result"
	echo "    *y - Submit the audit result to the Open-AudIT Server defined by the 'url' variable."
	echo ""
	echo "  subnet_range"
	echo "       - Any given subnet as per the Nmap command line options. http://nmap.org/book/man-target-specification.html EG - 192.168.1-3.1-20, 192.168.1.0/24, etc."
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

function db_log()
{
	now=$(date "+%F %T")
	message=$1
	duration=$2
	status=$3
	severity=$4
	output=$5
	level=$6
	command=$7
	if [ -z "$severity" ]; then
		severity=6
	fi
	if [ -z "$output" ]; then
		output=""
	fi
	if [ -z "$command" ]; then
		command=""
	fi

	curl -d "type=discovery&timestamp=$now&discovery_id=$discovery_id&severity=$severity&pid=$$&ip=127.0.0.1&file=discover_subnet.sh&message=$message&command_time_to_execute=$duration&command_status=$status&command_output=$output&command=$command" -X POST http://localhost/open-audit/index.php/input/logs
	if [ "$debugging" -gt 0 ]; then
		echo "curl -d \"type=discovery&timestamp=$now&discovery_id=$discovery_id&severity=$severity&pid=$$&ip=127.0.0.1&file=discover_subnet.sh&message=$message&command_time_to_execute=$duration&command_status=$status&command_output=$output&command=$command\" -X POST http://localhost/open-audit/index.php/input/logs"
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
db_log "Starting discovery for $subnet_range" "" "start"

nmap_full_version=""
nmap_major_version=""
nmap_path=$(which nmap 2>/dev/null)
if [[ "$nmap_path" == *"nmap"* ]]; then
	nmap_full_version=$(nmap -V | grep -i version | cut -d" " -f3)
	nmap_major_version=$(echo "$nmap_full_version" | cut -d. -f1)
	db_log "Discovery for $subnet_range using Nmap version $nmap_full_version at $nmap_path" "" "" "7"
else
	if [ "$debugging" -gt 0 ]; then
		echo "Nmap binary not on path, aborting."
	fi
	db_log "Nmap binary not on path, aborting." "" "finish" "5"
	exit 1
fi

if [ "$debugging" -gt 0 ]; then
	echo "----------------------------"
	echo "Open-AudIT Discover Subnet script"
	echo "Version: $version"
	echo "----------------------------"
	echo "My PID is           $$"
	echo "Create File:        $create_file"
	echo "Discovery ID:       $discovery_id"
	echo "Force Ping:         $force_ping"
	echo "Log Level:          $debugging"
	echo "Nmap Binary:        $nmap_path"
	echo "Nmap Version:       $nmap_full_version"
	echo "Submit Online:      $submit_online"
	echo "Subnet Range:       $subnet_range"
	echo "Timing:             $timing"
	echo "URL:                $url"
	echo ""
fi

# Nmap command line switches explained
# -n  == no name resolution
# -PE == icmp echo
# -PP == timestamp
# -sP == ping scan
# -sn == ping scan only
# -v  == verbose
hosts_in_subnet=$("$nmap_path" -n -sL "$subnet_range" 2>/dev/null | grep "Nmap done" | cut -d" " -f3)
if [ "$debugging" -gt 0 ]; then
	echo "Total ip addresses: $hosts_in_subnet"
fi
db_log "Scanning $hosts_in_subnet IP addresses" "" "" "" "" "" "$nmap_path -n -sL $subnet_range 2>/dev/null | grep \"Nmap scan report for\" | cut -d\" \" -f5"
result_file=""
result=""
hosts_scanned=0

for host in $("$nmap_path" -n -sL "$subnet_range" 2>/dev/null | grep "Nmap scan report for" | cut -d" " -f5); do

	let "hosts_scanned = hosts_scanned + 1"
	start=$(timer)
	mac_address=""
	manufacturer=""
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
	# -n  Do not resolve IP to DNS name
	# -Pn Treat all hosts as online ($force_ping) default for the script is to use this
	# -T4 set the timing (higher is faster) ($timing) default for the script is -T4
	nmap_tcp_timer_start=$(timer)
	if [ "$force_ping" == "y" ]; then
		nmap_scan=$(nmap -vv -n "$timing" "$host" 2>&1)
		if [ "$debugging" -gt 0 ]; then
			echo "Scanning Host: $host using the command: nmap -vv -n $timing $host 2>&1"
		fi
		if [ "$debugging" -gt 1 ]; then
			db_log "Scanning Host: $host" "" "" "7" "" "7" "nmap -vv -n $timing $host 2>%261"
		fi
	else
		nmap_scan=$(nmap -vv -n -Pn "$timing" "$host" 2>&1)
		if [ "$debugging" -gt 0 ]; then
			echo "Scanning Host: $host using the command: nmap -vv -n -Pn $timing $host 2>&1"
		fi
		if [ "$debugging" -gt 1 ]; then
			db_log "Scanning Host: $host" "" "" "7" "" "7" "nmap -vv -n -Pn $timing $host 2>%261"
		fi
	fi
	#statements
	nmap_tcp_timer_end=$(timer "$nmap_tcp_timer_start")

	if [ "$debugging" -gt 0 ]; then
		echo "Nmap TCP scan time for $host: $nmap_tcp_timer_end"
		echo ""
		echo "$nmap_scan"
		echo ""
	fi

	if [ "$debugging" -gt 1 ]; then
		db_log "Nmap TCP scan time for $host: $nmap_tcp_timer_end" "$nmap_tcp_timer_end" "" "7"
	fi

	for line in $nmap_scan; do

		test=$(echo $line | grep "tcp.*open")
		if [[ "$test" != "" ]]; then
			host_is_up="true"
			port=$(echo $line | awk '{print $1}')
			program=$(echo $line | awk '{print $3}')
			nmap_ports="$nmap_ports,$port/$program"
			if [ "$debugging" -gt 1 ]; then
				db_log "Host $host is up, received port $port response" "" "" "7" "$test"
			fi
		fi

		test=$(echo $line | grep "tcp.*closed")
		if [[ "$test" != "" ]]; then
			host_is_up="true"
		fi

		test=$(echo $line | grep "Host $host is up, received arp-response")
		if [[ "$test" != "" ]]; then
			host_is_up="true"
			if [ "$debugging" -gt 1 ]; then
				db_log "Host $host is up, received arp-response" "" "" "7" "$line"
			fi
		fi

		test=$(echo $line | grep "MAC Address:")
		if [[ "$test" != "" ]]; then
			host_is_up="true"
			mac_address=$(echo "$line" | cut -d" " -f3)
			manufacturer=$(echo "$line" | cut -d"(" -f2 | cut -d")" -f1 | sed 's/^ *//g' | sed 's/ *$//g')
			if [ "$debugging" -gt 1 ]; then
				echo "Host $host is up, received arp-response from $mac_address"
			fi
			if [ "$debugging" -gt 1 ]; then
				db_log "Host $host is up, received arp-response from $mac_address" "" "" "7" "$line"
			fi
		fi

		# SSH check
		test=$(echo $line | grep "22/tcp.*open")
		if [[ "$test" != "" ]]; then
			host_is_up="true"
			ssh_status="true"
		fi

		# WMI check
		test=$(echo $line | grep "135/tcp.*open")
		if [[ "$test" != "" ]]; then
			host_is_up="true"
			wmi_status="true"
		fi

	done

	# Apple IOS check
	test=$(nmap -n -Pn -p62078 "$timing" "$host" 2>/dev/null | grep "62078/tcp.*open" | grep -v "filtered")
	if [[ "$test" != "" ]]; then
		host_is_up="true"
		nmap_ports="$nmap_ports,62078/tcp/iphone-sync"
		if [ "$debugging" -gt 1 ]; then
			db_log "Host $host is up, received iphone-sync response" "" "" "7" "$line"
		fi
	fi

	# SNMP check
	snmp_status="false"
	nmap_udp_timer_start=$(timer)
	if [ "$debugging" -gt 1 ]; then
		echo "Scaning for SNMP using the command: nmap -n -sU -p161 $timing $host 2>/dev/null | grep \"161/udp.*open\" | grep -v \"filtered\""
	fi
	test=$(nmap -n -sU -p161 "$timing" "$host" 2>/dev/null | grep "161/udp.*open")
	nmap_udp_timer_end=$(timer "$nmap_udp_timer_start")
	if [ "$debugging" -gt 0 ]; then
		echo "Nmap UDP scan time: $nmap_udp_timer_end"
	fi
	if [[ "$test" != "" ]]; then
		snmp_status="true"
		nmap_ports="$nmap_ports,161/udp/snmp"
		if [ "$consider_161_enough" == "y" ]; then
			host_is_up="true"
		fi
	fi

	result=""
	if [ "$host_is_up" == "true" ]; then
		nmap_ports=${nmap_ports#?}
		result="	<device>"$'\n'
		result="$result		<subnet_range>$subnet_range</subnet_range>"$'\n'
		result="$result		<ip>$host</ip>"$'\n'
		result="$result		<mac_address>$mac_address</mac_address>"$'\n'
		result="$result		<manufacturer><![CDATA[$manufacturer]]></manufacturer>"$'\n'
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
		result="$result	</device>"
		# add the result for this device to the result_file var for display or file output later on
		result_file="$result_file"$'\n'"$result"
		# wrap this device in xml tags for submission individually
		result="<devices>"$'\n'"$result"$'\n'"</devices>"

		if [[ "$submit_online" == "y" ]]; then
			if [ "$debugging" -gt 0 ]; then
				echo "Submitting online."$'\n'
			fi
			db_log "IP $host responding, submitting." $(timer "$start") "($hosts_scanned of $hosts_in_subnet)"
			# curl options
			# -k = ignore invalid (self signed) certs
			# -s = Silent mode. Don’t show progress meter or error messages.
			# -S = When used with -s it makes curl show error message if it fails.
			#send_result=$(curl --data "data=$result" "$url" -k -s -S 2>&1 1> /dev/null)
			send_result=$(curl --data "data=$result" "$url" -k -s -S 2>&1)
			if [ -n "$send_result" ]; then
				db_log "Error when submitting discovery result (device). $send_result" "" "fail" "3"
				if [[ $debugging -gt 0 ]]; then
					echo "Error when submitting discovery result (device)"
					echo "$send_result"
				fi
			fi
		# else
			# Don't bother to update the db log table because we're not sending the result to it
		fi
	else
		db_log "IP $host not responding, ignoring." $(timer "$start") "($hosts_scanned of $hosts_in_subnet)"
	fi
	result=""
done

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

db_log "Completed discovery, scanned $hosts_scanned IP addresses" $(timer "$script_start") "finish"