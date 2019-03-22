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
# @version   3.0.2

# @copyright Copyright (c) 2014, Opmantek
# @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3

# turn off globbing
set -f

ORIGIFS=$IFS
NEWLINEIFS=$(echo -en "\n\b")
IFS="$NEWLINEIFS"
#IFS='
#'

create_file="n"
debugging=1
echo_output="y"
log_no_response="n"
org_id=""
submit_online="y"
subnet_range=""
discovery_id=""
url="http://localhost/open-audit/index.php/input/discoveries"
user=$(whoami)
system_hostname=$(hostname 2>/dev/null)
version="2.3.2"
int='^[0-9]+$'
#range='^[0-9\.\//-]+$'
range='^[0-9\.\,\/\-]+$'
ports='^[0-9\,]+$'

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
	echo "    *1 - Debug Output."
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
	ip=$8
	if [ -z "$severity" ]; then
		severity=6
	fi
	if [ -z "$output" ]; then
		output=""
	fi
	if [ -z "$command" ]; then
		command=""
	fi
	if [ -z "$ip" ]; then
		ip="127.0.0.1"
	fi
	if [ -z "$status" ]; then
		status="notice"
	fi

	curl -d "type=discovery&timestamp=$now&discovery_id=$discovery_id&severity=$severity&pid=$$&ip=$ip&file=discover_subnet.sh&message=$message&command_time_to_execute=$duration&command_status=$status&command_output=$output&command=$command" -X POST http://localhost/open-audit/index.php/input/logs
	if [ "$debugging" -gt 0 ]; then
		echo "$1"
		echo ""
		echo "curl -d \"type=discovery&timestamp=$now&discovery_id=$discovery_id&severity=$severity&pid=$$&ip=$ip&file=discover_subnet.sh&message=$message&command_time_to_execute=$duration&command_status=$status&command_output=$output&command=$command\" -X POST http://localhost/open-audit/index.php/input/logs"
		echo ""
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

function check_output ()
{
	# greps the line for interesting items
	line=$1
	test=""

	if [ -n "$filtered" ] && [ "$filtered" == "y" ]; then
		test=$(echo $line | grep "tcp.*open")
		if [ -n "$test" ]; then
			host_is_up="true"
			port=$(echo $line | awk '{print $1}')
			program=$(echo $line | awk '{print $3}')
			nmap_ports="$nmap_ports,$port/$program"
			if [ -z "$response_reason" ]; then
				response_reason="received open TCP port ($port, $program)"
			fi
			if [ -n $port ] && [ "$port" = "22/tcp" ]; then
				ssh_status="true"
				db_log "Host $host is up, received ssh (TCP port 22 open) response" "" "" "7" "$line" "" "" "$host"
			elif [ -n $port ] && [ "$port" = "135/tcp" ]; then
				wmi_status="true"
				db_log "Host $host is up, received wmi (TCP port 135 open) response" "" "" "7" "$line" "" "" "$host"
			else
				db_log "Host $host is up, received TCP port $port open response" "" "" "7" "$line" "" "" "$host"
			fi

		fi
	else
		test=$(echo $line | grep "tcp.*open" | grep -v filtered)
		if [ -n "$test" ]; then
			host_is_up="true"
			port=$(echo $line | awk '{print $1}')
			program=$(echo $line | awk '{print $3}')
			nmap_ports="$nmap_ports,$port/$program"
			if [ -z "$response_reason" ]; then
				response_reason="received open TCP port ($port, $program)"
			fi
			if [ -n $port ] && [ "$port" = "22/tcp" ]; then
				ssh_status="true"
				db_log "Host $host is up, received ssh (TCP port 22 open) response" "" "" "7" "$line" "" "" "$host"
			elif [ -n $port ] && [ "$port" = "135/tcp" ]; then
				wmi_status="true"
				db_log "Host $host is up, received wmi (TCP port 135 open) response" "" "" "7" "$line" "" "" "$host"
			else
				db_log "Host $host is up, received TCP port $port open response" "" "" "7" "$line" "" "" "$host"
			fi
		fi
		test=$(echo $line | grep "tcp.*filterred")
		if [ -n "$test" ]; then
			db_log "Host $host had a filtered port, but options state not to detect" "" "" "7" "$line" "" "" "$host"
		fi
	fi
	test=""

	if [ -n "$filtered" ] && [ "$filtered" == "y" ]; then
		test=$(echo $line | grep "udp.*open")
	else
		test=$(echo $line | grep "udp.*open" | grep -v filtered)
	fi


	if [ -n "$filtered" ] && [ "$filtered" == "y" ]; then
		test=$(echo $line | grep "udp.*open")
		if [ -n "$test" ]; then
			host_is_up="true"
			port=$(echo $line | awk '{print $1}')
			program=$(echo $line | awk '{print $3}')
			nmap_ports="$nmap_ports,$port/$program"
			if [ -z "$response_reason" ]; then
				response_reason="received open UDP port ($port, $program)"
			fi
			if [ -n $port ] && [ "$port" = "161/udp" ]; then
				snmp_status="true"
				db_log "Host $host is up, received snmp (UDP port 161 open) response" "" "" "7" "$line" "" "" "$host"
			else
				db_log "Host $host is up, received UDP port $port open response" "" "" "7" "$line" "" "" "$host"
			fi
		fi
	else
		test=$(echo $line | grep "udp.*open" | grep -v filtered)
		if [ -n "$test" ]; then
			host_is_up="true"
			port=$(echo $line | awk '{print $1}')
			program=$(echo $line | awk '{print $3}')
			nmap_ports="$nmap_ports,$port/$program"
			if [ -z "$response_reason" ]; then
				response_reason="received open UDP port ($port, $program)"
			fi
			if [ -n $port ] && [ "$port" = "161/udp" ]; then
				snmp_status="true"
				db_log "Host $host is up, received snmp (UDP port 161 open) response" "" "" "7" "$line" "" "" "$host"
			else
				db_log "Host $host is up, received UDP port $port open response" "" "" "7" "$line" "" "" "$host"
			fi
		fi
		test=$(echo $line | grep "udp.*filterred")
		if [ -n "$test" ]; then
			db_log "Host $host had a filtered port, but options state not to detect" "" "" "7" "$line" "" "" "$host"
		fi
	fi
	test=""

	test=$(echo $line | grep "Host $host is up, received arp-response")
	if [[ "$test" != "" ]]; then
		host_is_up="true"
		response_reason="arp response received"
		db_log "Host $host is up, received arp-response" "" "" "7" "$line" "" "" "$host"
	fi
	test=""

	test=$(echo $line | grep "MAC Address:")
	if [[ "$test" != "" ]]; then
		host_is_up="true"
		mac_address=$(echo "$line" | cut -d" " -f3)
		manufacturer=$(echo "$line" | cut -d"(" -f2 | cut -d")" -f1 | sed 's/^ *//g' | sed 's/ *$//g')
		if [ -z "$response_reason" ]; then
			response_reason="MAC address retrieved ($mac_address)"
		fi
		db_log "Host $host is up, received mac addess $mac_address" "" "" "7" "$line" "" "" "$host"
	fi
	test=""


	test=$(echo $line | grep "Nmap done: 1 IP address (1 host up)")
	if [[ "$test" != "" && -z "$ping" ]]; then
		host_is_up="true"
		if [ -z "$response_reason" ]; then
			response_reason="ping reply"
		fi
		db_log "Host $host is up, received Nmap ping response" "" "" "7" "$line" "" "" "$host"
	fi
	test=""

	test=$(echo $line | grep "due to host timeout")
	if [[ "$test" != "" && -z "$ping" ]]; then
        host_is_up="true"
		if [ -z "$response_reason" ]; then
        	response_reason="host responded but timed out"
        fi
		db_log "Host $host timed out. Exceeded $timeout seconds." "" "" "7" "$line" "" "" "$host"
	fi
	test=""

}

script_start=$(timer)
db_log "Starting discovery for $subnet_range" "" "start"

nmap_full_version=$(nmap -V 2>/dev/null | grep -i version | cut -d" " -f3)
nmap_major_version=$(echo "$nmap_full_version" | cut -d. -f1)
nmap_path=$(type nmap 2>/dev/null | cut -d" " -f3)
if [ -z "$nmap_full_version" ]; then
	db_log "Nmap binary not on path, aborting." "" "finish" "5"
	if [ "$debugging" -gt 0 ]; then
		echo "Nmap binary not on path, aborting."
	fi
	exit 1
else
	db_log "Discovery for $subnet_range using Nmap version $nmap_full_version at $nmap_path" "" "" "7"
fi

if ! [[ $subnet_range =~ $range ]]; then
	if [ "$debugging" -gt 0 ]; then
		echo "Bad value for subnet range, aborting"
	fi
	db_log "Bad value for subnet range" "" "fail" "4" "" "" "Cannot continue, aborting"
	resultcomplete="<devices><device><subnet_range>$subnet_range</subnet_range><discovery_id>$discovery_id</discovery_id><complete>y</complete></device></devices>"
	send_result=$(curl --data "data=$resultcomplete" "$url" -k -s -S 2>&1)
	if [ -n "$send_result" ]; then
		db_log "Error when submitting discovery result (complete). $send_result" "" "fail" "3" "" "" "" "$host"
		echo ""
		echo "$send_result"
	fi
	exit 1
fi

if [ -n "$timing" ]; then
	if ! [[ $timing =~ $int ]] || [ "$timing" -lt 0 ] || [ "$timing" -gt 5 ]; then
		if [ "$debugging" -gt 0 ]; then
			echo "Bad value for timing, setting to -T4"
		fi
		db_log "Bad value for timing" "" "warning" "5" "" "" "Setting to -T4"
		timing="-T4"
	else
		timing="-T$timing"
	fi
else
	timing="-T4"
fi

if [ -n "$ping" ]; then
	if [ "$ping" == "n" ]; then
		ping="-Pn"
	else
		ping=""
	fi
else
	ping=""
fi

if [ -n "$service_version" ]; then
	if [ "$service_version" == "y" ]; then
		service_version="-sV"
	else
		service_version=""
	fi
else
	service_version=""
fi

if [ -n "$timeout" ]; then
	if ! [[ $timeout =~ $int ]]; then
		if [ "$debugging" -gt 0 ]; then
			echo "Bad value for timeout, removing value"
		fi
		db_log "Bad value for timeout" "" "warning" "5" "" "" "Removing value"
		timeout=""
	else
		timeout="--host-timeout $timeout"
	fi
else
	timeout=""
fi

if [ -n "$nmap_tcp_ports" ]; then
	if ! [[ $nmap_tcp_ports =~ $int ]]; then
		if [ "$debugging" -gt 0 ]; then
			echo "Bad value for nmap_tcp_ports, removing value"
		fi
		db_log "Bad value for nmap_tcp_ports" "" "warning" "5" "" "" "Removing value"
		nmap_tcp_ports=""
	else
		nmap_tcp_ports="--top-ports $nmap_tcp_ports"
	fi
else
	nmap_tcp_ports=""
fi

if [ -n "$nmap_udp_ports" ]; then
	if ! [[ $nmap_udp_ports =~ $int ]]; then
		if [ "$debugging" -gt 0 ]; then
			echo "Bad value for nmap_udp_ports, removing value"
		fi
		db_log "Bad value for nmap_udp_ports" "" "warning" "5" "" "" "Removing value"
		nmap_udp_ports=""
	else
		nmap_udp_ports="--top-ports $nmap_udp_ports"
	fi
else
	nmap_udp_ports=""
fi

if [ -n "$tcp_ports" ]; then
	if ! [[ $tcp_ports =~ $ports ]]; then
		if [ "$debugging" -gt 0 ]; then
			echo "Bad value for tcp_ports, removing"
		fi
		db_log "Bad value for tcp_ports" "" "warning" "5" "" "" "Removing value"
		tcp_ports=""
	else
		tcp_ports="-p $tcp_ports"
	fi
else
	tcp_ports=""
fi

if [ -n "$udp_ports" ]; then
	if ! [[ $udp_ports =~ $ports ]]; then
		if [ "$debugging" -gt 0 ]; then
			echo "Bad value for udp_ports, removing"
		fi
		db_log "Bad value for udp_ports" "" "warning" "5" "" "" "Removing value"
		udp_ports=""
	else
		udp_ports="-p $udp_ports"
	fi
else
	udp_ports=""
fi

if [ -n "$exclude_ip" ]; then
	if ! [[ $exclude_ip =~ $range ]]; then
		if [ "$debugging" -gt 0 ]; then
			echo "Bad value for exclude_ip, removing"
		fi
		db_log "Bad value for exclude_ip" "" "warning" "5" "" "" "Removing value"
		exclude_ip=""
	else
		exclude_ip="--exclude $exclude_ip"
	fi
else
	exclude_ip=""
fi

if [ -n "$exclude_tcp_ports" ]; then
	if ! [[ $exclude_tcp_ports =~ $ports ]]; then
		if [ "$debugging" -gt 0 ]; then
			echo "Bad value for exclude_tcp_ports, removing"
		fi
		db_log "Bad value for exclude_tcp_ports" "" "warning" "5" "" "" "Removing value"
		exclude_tcp_ports=""
	else
		exclude_tcp_ports="--exclude-ports T:$exclude_tcp_ports"
	fi
else
	exclude_tcp_ports=""
fi

if [ -n "$exclude_udp_ports" ]; then
	if ! [[ $exclude_udp_ports =~ $ports ]]; then
		if [ "$debugging" -gt 0 ]; then
			echo "Bad value for exclude_udp_ports, removing"
		fi
		db_log "Bad value for exclude_udp_ports" "" "warning" "5" "" "" "Removing value"
		exclude_udp_ports=""
	else
		exclude_udp_ports="--exclude-ports U:$exclude_udp_ports"
	fi
else
	exclude_udp_ports=""
fi

if [ "$debugging" -gt 0 ]; then
	echo "----------------------------"
	echo "Open-AudIT Discover Subnet script"
	echo "Version: $version"
	echo "----------------------------"
	echo "My PID is           $$"
	echo "Create File:        $create_file"
	echo "Discovery ID:       $discovery_id"
	echo "Log Level:          $debugging"
	echo "Nmap Binary:        $nmap_path"
	echo "Nmap Version:       $nmap_full_version"
	echo "Submit Online:      $submit_online"
	echo "URL:                $url"
	echo "Nmap Options"
	echo "Subnet Range:       $subnet_range"
	echo "Exclude IPs:        $exclude_ip"
	echo "Ping:               $ping"
	echo "Service Version:    $service_version"
	echo "Timing:             $timing"
	echo "Top TCP Ports:      $nmap_tcp_ports"
	echo "Top UDP Ports:      $nmap_udp_ports"
	echo "Custom TCP Ports:   $tcp_ports"
	echo "Custom UDP Ports:   $udp_ports"
	echo "Excluded TCP Ports: $exclude_tcp_ports"
	echo "Excluded UDP Ports: $exclude_udp_ports"
fi

result_file=""
result=""
hosts_scanned=0
ip_list=""

# Nmap command line switches explained
# -n   == no name resolution
# -oG - == grepable output to the command line
# -PE  == icmp echo
# -Pn  == Treat target(s) as online
# -PP  == timestamp
# -sL  == List, don't actually scan IPs in the range
# -sn  == ping scan only
# -sP  == ping scan (newer versions of nmap use -sn but -sP should still work as well)
# -T4  == timing (0-5) higher is faster
# -v   == verbose
# -vv  == very verboseNmap scan report for
IFS=$ORIGIFS
hosts_in_subnet=$(nmap -n -sL $subnet_range 2>/dev/null | grep "Nmap done" | cut -d" " -f3)
db_log "IPs in subnet: $hosts_in_subnet" "" "" "" "" "" "nmap -n -sL $subnet_range 2>/dev/null | grep \"Nmap done\" | cut -d\" \" -f3"

hosts_in_subnet=$(nmap -n -sL $exclude_ip $subnet_range 2>/dev/null | grep "Nmap done" | cut -d" " -f3)
db_log "IPs after exclusions in subnet: $hosts_in_subnet" "" "" "" "" "" "nmap -n -sL $exclude_ip $subnet_range 2>/dev/null | grep \"Nmap done\" | cut -d\" \" -f3"

if [ -z "$ping" ]; then
	# Run a scan on all IPs and return only those responding to an Nmap ping
	#command="nmap -n -oG - -sP $exclude_ip $subnet_range 2>/dev/null | grep \"Host:\" | cut -d\" \" -f2"
	#alive_ips=$($command)
	if [ "$debugging" -gt 1 ]; then
		echo "Running command: nmap -n -oG - -sP $exclude_ip $subnet_range 2>/dev/null | grep \"Host:\" | cut -d\" \" -f2"
		echo ""
	fi
	alive_ips=$(nmap -n -oG - -sP $exclude_ip $subnet_range 2>/dev/null | grep "Host:" | cut -d" " -f2)

	count=$(echo "$alive_ips" | wc -l)
	db_log "IPs responding to Nmap ping in subnet (to be scanned): $count" "" "" "" "" "" "nmap -n -oG - -sP $exclude_ip $subnet_range 2>/dev/null | grep \"Host:\" | cut -d\" \" -f2"
	hosts_in_subnet="$count"

	if [ "$debugging" -gt 1 ]; then
		echo "Running command: nmap -n -sL $exclude_ip $subnet_range 2>/dev/null | grep \"Nmap scan report for\" | awk '{print \$5}'"
		echo ""
	fi
	ip_list=$(nmap -n -sL $exclude_ip $subnet_range 2>/dev/null | grep "Nmap scan report for" | awk '{print $5}')
else
	# Scan these IPs, ignoring their ping (or not) response
	alive_ips=$(nmap -n -sL $exclude_ip $subnet_range 2>/dev/null | grep "Nmap scan report for" | cut -d" " -f5)
	count=$(echo "$alive_ips" | wc -l)
	db_log "IPs after ignoring ping in subnet (to be scanned): $count" "" "" "" "" "" "nmap -n -oG - -sP $exclude_ip $subnet_range 2>/dev/null | grep Host: | cut -d\" \" -f2"
	hosts_in_subnet="$count"
fi
IFS=$NEWLINEIFS



# In the case of only scnning devices responding to an Nmap ping,
#    send a log line that this IP didn't respond
if [ -n "$ip_list" ]; then
	db_log "Updating discovery log with non-responding IPs" "" "" "7" "" "" ""
	for ip in $ip_list; do
		response=""
		for host in $alive_ips; do
			if [ "$host" = "$ip" ]; then
				response="true"
			fi
		done
		if [ -z "$response" ]; then
			db_log "IP $ip not responding, ignoring." "" "" "" "" "" "" "$ip"
		fi
	done
fi

for host in $alive_ips; do
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
	response_reason=""

	db_log "Scanning Host: $host" "" "" "7" "" "7" "" "$host"

	if [ -n "$nmap_tcp_ports" ]; then
		nmap_timer_start=$(timer)
		IFS=$ORIGIFS
		command="$nmap_path -n $timing $ping -sS $service_version $exclude_ip $exclude_tcp_ports $nmap_tcp_ports $timeout $host"
		nmap_scan=$($command)
		IFS=$NEWLINEIFS
		nmap_timer_end=$(timer "$nmap_timer_start")
		db_log "Nmap Command (Top TCP Ports)" "$nmap_timer_end" "" "7" "" "" "$command" "$host"
		if [ "$debugging" -gt 0 ]; then
			echo ""
			echo "Scanning Host took $nmap_timer_end seconds using the command:"
			echo "$command"
			echo ""
		fi
		if [ "$debugging" -gt 1 ]; then
			echo "Nmap command result"
			echo "-------------------"
			echo "$nmap_scan"
			echo ""
		fi
		for line in $nmap_scan; do
			check_output "$line"
		done
	fi

	if [ -n "$nmap_udp_ports" ]; then
		nmap_timer_start=$(timer)
		IFS=$ORIGIFS
		command="$nmap_path -n $timing $ping -sU $service_version $exclude_ip $exclude_udp_ports $nmap_udp_ports $timeout $host"
		nmap_scan=$($command)
		IFS=$NEWLINEIFS
		nmap_timer_end=$(timer "$nmap_timer_start")
		db_log "Nmap Command (Top UDP Ports)" "$nmap_timer_end" "" "7" "" "" "$command" "$host"
		if [ "$debugging" -gt 0 ]; then
			echo ""
			echo "Scanning Host took $nmap_timer_end seconds using the command:"
			echo "$command"
			echo ""
		fi
		if [ "$debugging" -gt 1 ]; then
			echo "Nmap command result"
			echo "-------------------"
			echo "$nmap_scan"
			echo ""
		fi
		for line in $nmap_scan; do
			check_output "$line"
		done
	fi

	if [ -n "$tcp_ports" ]; then
		nmap_timer_start=$(timer)
		IFS=$ORIGIFS
		command="$nmap_path -n $timing $ping -sS $service_version $exclude_ip $exclude_tcp_ports $tcp_ports $timeout $host"
		nmap_scan=$($command)
		IFS=$NEWLINEIFS
		nmap_timer_end=$(timer "$nmap_timer_start")
		db_log "Nmap Command (Custom TCP Ports)" "$nmap_timer_end" "" "7" "" "" "$command" "$host"
		if [ "$debugging" -gt 0 ]; then
			echo ""
			echo "Scanning Host took $nmap_timer_end seconds using the command:"
			echo "$command"
			echo ""
		fi
		if [ "$debugging" -gt 1 ]; then
			echo "Nmap command result"
			echo "-------------------"
			echo "$nmap_scan"
			echo ""
		fi
		for line in $nmap_scan; do
			check_output "$line"
		done
	fi

	if [ -n "$udp_ports" ]; then
		nmap_timer_start=$(timer)
		IFS=$ORIGIFS
		command="$nmap_path -n $timing $ping -sU $service_version $exclude_ip $exclude_udp_ports $udp_ports $timeout $host"
		nmap_scan=$($command)
		IFS=$NEWLINEIFS
		nmap_timer_end=$(timer "$nmap_timer_start")
		db_log "Nmap Command (Custom UDP Ports)" "$nmap_timer_end" "" "7" "" "" "$command" "$host"
		if [ "$debugging" -gt 0 ]; then
			echo ""
			echo "Scanning Host took $nmap_timer_end seconds using the command:"
			echo "$command"
			echo ""
		fi
		if [ "$debugging" -gt 1 ]; then
			echo "Nmap command result"
			echo "-------------------"
			echo "$nmap_scan"
			echo ""
		fi
		for line in $nmap_scan; do
			check_output "$line"
		done
	fi

	result=""
	if [ "$host_is_up" == "true" ] || [ -z "$ping" ]; then
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

		if [[ "$echo_output" == "y" ]]; then
			echo ""
			echo "$result"
			echo ""
		fi

		if [[ "$submit_online" == "y" ]]; then
			if [ -z "$ping" ] && [ -z "$response_reason" ]; then
				response_reason="ping response"
			fi
			db_log "IP $host responding, $response_reason, adding to device list." $(timer "$start") "($hosts_scanned of $hosts_in_subnet)" "" "" "" "$url" "$host"
			# curl options
			# -k = ignore invalid (self signed) certs
			# -s = Silent mode. Don’t show progress meter or error messages.
			# -S = When used with -s it makes curl show error message if it fails.
			#send_result=$(curl --data "data=$result" "$url" -k -s -S 2>&1 1> /dev/null)
			send_result=$(curl --data "data=$result" "$url" -k -s -S 2>&1)
			if [ -n "$send_result" ]; then
				db_log "Error when submitting discovery result (device). $send_result" "" "fail" "3" "" "" "" "$host"
				if [[ $debugging -gt 0 ]]; then
					echo "Error when submitting discovery result (device)"
					echo "$send_result"
				fi
			fi
		# else
			# Don't bother to update the db log table because we're not sending the result to it
		fi
	else
		db_log "IP $host not responding, ignoring." $(timer "$start") "($hosts_scanned of $hosts_in_subnet)" "" "" "" "" "$host"
	fi
	result=""
done

resultcomplete="<devices><device><subnet_range>$subnet_range</subnet_range><discovery_id>$discovery_id</discovery_id><complete>y</complete></device></devices>"
if [[ "$echo_output" == "y" ]]; then
	echo ""
	echo "$resultcomplete"
	echo ""
fi

if [[ "$submit_online" == "y" ]]; then
	send_result=$(curl --data "data=$resultcomplete" "$url" -k -s -S 2>&1)
	if [ -n "$send_result" ]; then
		db_log "Error when submitting discovery result (complete). $send_result" "" "fail" "3" "" "" "" "$host"
		echo ""
		echo "$send_result"
	fi
fi

if [[ "$create_file" == "y" ]]; then
	result_file="<devices>$result_file"$'\n'"</devices>"$'\n'
	echo "$result_file" > discovery_subnet.xml
fi

db_log "Completed discovery, scanned $hosts_scanned IP addresses" $(timer "$script_start") "finish"
