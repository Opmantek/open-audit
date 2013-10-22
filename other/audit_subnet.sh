#!/bin/bash

# Open Audit
# Software and Hardware Inventory
# (c) Mark Unwin 2012 
# http://www.open-audit.org
# Licensed under the AGPL v3
# http://www.fsf.org/licensing/licenses/agpl-3.0.html 

set -f              # turn off globbing
IFS='
'

create_file="n"
debugging=0
echo_output="n"
submit_online="y"
subnet=""
syslog="y"
url="http://localhost/index.php/system/add_nmap"
background_wget="n"


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

#if [[ $EUID -ne 0 ]]; then
#   echo "This script must be run as root" 
#   exit 1
#fi

if [ $debugging -gt 0 ]; then
	echo "Scanning Subnet: $subnet"
fi

if [ $syslog == "y" ]; then
	now=`date "+%b %e %T"`
	echo "$now $local_hostname $$ $process Job Starting" >> /usr/local/open-audit/other/open-audit.log
	echo "$now $local_hostname $$ $process Scanning Subnet: $subnet" >> /usr/local/open-audit/other/open-audit.log
fi

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

			if [ $syslog == "y" ]; then
				now=`date "+%b %e %T"`
				echo "$now $local_hostname $$ $process $host being nmap scanned." >> /usr/local/open-audit/other/open-audit.log
			fi

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
				if [ $debugging -gt 0 ]; then
					echo "Submitting online."
				fi

				device=`echo -e "$device"`
				if [[ "$background_wget" == "n" ]]; then
					wget -O - -q ${url} --post-data=form_nmap="$device"
				fi
				if [[ "$background_wget" == "y" ]]; then
					wget -b -O - -q ${url} --post-data=form_nmap="$device" 1>/dev/null
				fi
			fi
		#fi
	done
fi

result="$result</devices>"

if [ $syslog == "y" ]; then
	now=`date "+%b %e %T"`
	echo "$now $local_hostname $$ $process Scan completed." >> /usr/local/open-audit/other/open-audit.log
fi

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

if [ $syslog == "y" ]; then
	now=`date "+%b %e %T"`
	echo "$now $local_hostname $$ $process Job Complete." >> /usr/local/open-audit/other/open-audit.log
fi
