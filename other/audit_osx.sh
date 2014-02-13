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

O=$IFS
IFS=$'\n'

url="http://localhost/open-audit/index.php/system/add_system"
submit_online="n"
create_file="y"
org_id=""
terminal_print="n"
debugging="3"

# import the command line arguements
for arg in "$@"; do
	parameter=${arg%%=*}
	value=${arg##*=} 
	eval "$parameter"=\""$value\""
done


if [ "$debugging" -gt "0" ]; then
	echo "System Info"
fi
system_timestamp=`date +'%F %T'`
system_uuid=`system_profiler SPHardwareDataType | grep "Hardware UUID:" | cut -d":" -f2 | sed 's/^ *//g'`
system_hostname=`networksetup -getcomputername`
system_domain=`more /etc/resolv.conf | grep domain | cut -d" " -f2`
#system_description=""
system_os_version=`sw_vers | grep "ProductVersion:" | cut -f2`
system_os_name="OSX $system_os_version"
system_serial=`system_profiler SPHardwareDataType | grep "Serial Number (system):" | cut -d":" -f2 | sed 's/^ *//g'`
system_model=`system_profiler SPHardwareDataType | grep "Model Identifier:" | cut -d":" -f2 | sed 's/^ *//g'`
# todo - below displays days and stops at hours
# system_uptime=`system_profiler SPSoftwareDataType | grep "Time since boot:" | cut -d":" -f2 | sed 's/^ *//g'`
system_uptime=""
system_form_factor=""
system_pc_os_bit="64"
system_pc_memory=`system_profiler SPHardwareDataType | grep "Memory:" | cut -d":" -f2 | sed 's/^ *//g' | cut -d" " -f1`
system_pc_memory=`expr $system_pc_memory \* 1024`
pc_num_processor=`sysctl hw.ncpu | awk '{print $2}'`
system_pc_date_os_installation=`date -r $(stat -f "%B" /private/var/db/.AppleSetupDone) "+%Y-%m-%d %H:%M:%S"`
if [[ "$system_model" == *"MacBook"* ]]; then
	system_form_factor="laptop"
fi

xml_file="$system_hostname"-`date +%Y%m%d%H%M%S`.xml
echo  "form_systemXML=<?xml version="\"1.0\"" encoding="\"UTF-8\""?>" > $xml_file
echo  "<system>" >> $xml_file
echo  "	<sys>" >> $xml_file
echo  "		<timestamp>$system_timestamp</timestamp>" >> $xml_file
echo  "		<uuid>$system_uuid</uuid>" >> $xml_file
echo  "		<hostname>$system_hostname</hostname>" >> $xml_file
echo  "		<domain>$system_domain</domain>" >> $xml_file
echo  "		<description></description>" >> $xml_file
echo  "		<type>computer</type>" >> $xml_file
echo  "		<os_icon>apple</os_icon>" >> $xml_file
echo  "		<os_group>Apple</os_group>" >> $xml_file
echo  "		<os_family>Apple OSX</os_family>" >> $xml_file
echo  "		<os_name>$system_os_name</os_name>" >> $xml_file
echo  "		<os_version>$system_os_version</os_version>" >> $xml_file
echo  "		<serial>$system_serial</serial>" >> $xml_file
echo  "		<model>$system_model</model>" >> $xml_file
echo  "		<manufacturer>Apple Inc</manufacturer>" >> $xml_file
echo  "		<uptime>$system_uptime</uptime>" >> $xml_file
echo  "		<form_factor>$system_form_factor</form_factor>" >> $xml_file
echo  "		<pc_os_bit>$system_pc_os_bit</pc_os_bit>" >> $xml_file
echo  "		<pc_memory>$system_pc_memory</pc_memory>" >> $xml_file
echo  "		<pc_num_processor>$pc_num_processor</pc_num_processor>" >> $xml_file
echo  "		<pc_date_os_installation>$system_pc_date_os_installation</pc_date_os_installation>" >> $xml_file
echo  "		<man_org_id>$org_id</man_org_id>" >> $xml_file
echo  "	</sys>" >> $xml_file



if [ "$debugging" -gt "0" ]; then
	echo "Network Cards Info"
fi
ip_info=""
echo "	<network_cards>" >> $xml_file
for line in $(system_profiler SPNetworkDataType | grep "BSD Device Name: en" | cut -d":" -f2); do
	line=`echo "${line}" | awk '{gsub(/^ +| +$/,"")} {print $0}'`
	net_mac_address=`ifconfig $line 2>/dev/null | grep "ether" | awk '{print $2}'`
	i=`system_profiler SPNetworkDataType | grep "BSD Device Name: $line" -B 4 | grep ":" | grep -v "      " | cut -d":" -f1`
	i=`echo "${i}" | awk '{gsub(/^ +| +$/,"")} {print $0}'`
	j=`system_profiler SPNetworkDataType | grep "BSD Device Name: $line" -B 3 | grep ":" | grep "Type" | cut -d":" -f2`
	j=`echo "${j}" | awk '{gsub(/^ +| +$/,"")} {print $0}'`
	net_manufacturer="Apple"
	net_model="$i"
	net_description="$i $j"
	net_ip_enabled=`system_profiler SPNetworkDataType | grep "BSD Device Name: $line" -A 1 | grep ":" | grep "Has IP Assigned" | cut -d":" -f2 | cut -d" " -f2`
	net_connection_id="$line"
	net_speed=""
	net_adapter_type="$j"
	if [[ "$net_mac_address" > "" ]]; then
		echo "		<network_card>" >> $xml_file
		echo "			<net_mac_address>$net_mac_address</net_mac_address>" >> $xml_file
		echo "			<net_manufacturer>$net_manufacturer</net_manufacturer>" >> $xml_file
		echo "			<net_model>$net_model</net_model>" >> $xml_file
		echo "			<net_description>$net_description</net_description>" >> $xml_file
		echo "			<net_ip_enabled>$net_ip_enabled</net_ip_enabled>" >> $xml_file
		echo "			<net_connection_id>$net_connection_id</net_connection_id>" >> $xml_file
		echo "			<net_connection_status></net_connection_status>" >> $xml_file
		echo "			<net_speed></net_speed>" >> $xml_file
		echo "			<net_adapter_type>$net_adapter_type</net_adapter_type>" >> $xml_file
		echo "			<net_dhcp_enabled></net_dhcp_enabled>" >> $xml_file
		echo "			<net_dhcp_server></net_dhcp_server>" >> $xml_file
		echo "			<net_dhcp_lease_obtained></net_dhcp_lease_obtained>" >> $xml_file
		echo "			<net_dhcp_lease_expires></net_dhcp_lease_expires>" >> $xml_file
		echo "			<net_dns_host_name></net_dns_host_name>" >> $xml_file
		echo "			<net_dns_domain></net_dns_domain>" >> $xml_file
		echo "			<net_dns_domain_reg_enabled></net_dns_domain_reg_enabled>" >> $xml_file
		echo "			<net_dns_server></net_dns_server>" >> $xml_file
		echo "			<net_wins_primary></net_wins_primary>" >> $xml_file
		echo "			<net_wins_secondary></net_wins_secondary>" >> $xml_file
		echo "			<net_wins_lmhosts_enabled></net_wins_lmhosts_enabled>" >> $xml_file
		echo "		</network_card>" >> $xml_file
	fi
done
echo "	</network_cards>" >> $xml_file
echo "	<addresses>" >> $xml_file
for line in $(system_profiler SPNetworkDataType | grep "BSD Device Name: en" | cut -d":" -f2); do
	line=`echo "${line}" | awk '{gsub(/^ +| +$/,"")} {print $0}'`
	net_mac_address=`ifconfig $line 2>/dev/null | grep "ether" | awk '{print $2}'`
	if [[ "$net_mac_address" > "" ]]; then
		ip_address_v4=`ipconfig getifaddr $line`
		ip_subnet=`ipconfig getpacket $line | grep "subnet_mask" | cut -d" " -f3`
		echo "		<ip_address>" >> $xml_file
		echo "			<net_mac_address>$net_mac_address</net_mac_address>" >> $xml_file
		echo "			<ip_address_v4>$ip_address_v4</ip_address_v4>" >> $xml_file
		echo "			<ip_address_v6></ip_address_v6>" >> $xml_file
		echo "			<ip_subnet>$ip_subnet</ip_subnet>" >> $xml_file
		echo "			<ip_address_version>4</ip_address_version>" >> $xml_file
		echo "		</ip_address>" >> $xml_file
	fi
done
echo "	</addresses>" >> $xml_file


if [ "$debugging" -gt "0" ]; then
	echo "Processor Info"
fi
processor_cores=`sysctl hw.ncpu | awk '{print $2}'`
processor_socket=""
processor_description=`sysctl -n machdep.cpu.brand_string`
processor_speed=`system_profiler SPHardwareDataType | grep "Processor Speed:" | cut -d":" -f2 | sed 's/^ *//g' | cut -d" " -f1 | sed 's/,/./g'`
processor_speed=`echo "scale = 0; $processor_speed*1000" | bc`
processor_manufacturer="GenuineIntel"
processor_power_management_supported=""

echo  "	<processor>" >> $xml_file
echo  "		<processor_cores>$processor_cores</processor_cores>" >> $xml_file
echo  "		<processor_socket>$processor_socket</processor_socket>" >> $xml_file
echo  "		<processor_description>$processor_description</processor_description>" >> $xml_file
echo  "		<processor_speed>$processor_speed</processor_speed>" >> $xml_file
echo  "		<processor_manufacturer>$processor_manufacturer</processor_manufacturer>" >> $xml_file
echo  "		<processor_power_management_supported>$processor_power_management_supported</processor_power_management_supported>" >> $xml_file
echo  "	</processor>" >> $xml_file




if [ "$debugging" -gt "0" ]; then
	echo "Memory Info"
fi
echo "	<memory>" >> $xml_file
for line in $(system_profiler SPMemoryDataType | grep "BANK" -A 8); do

	if [[ "$line" == *"BANK"* ]]; then
		memory_tag=`echo "$line" | cut -d"/" -f1 | sed 's/^ *//'`
		memory_bank=`echo "$memory_tag" | sed 's/BANK/DIMM/g'`
	fi

	if [[ "$line" == *"Size"* ]]; then
		memory_capacity=`echo "$line" | grep "Size:" | cut -d":" -f2 | sed 's/^ *//g' | cut -d" " -f1`
		memory_capacity=`echo "scale = 0; $memory_capacity * 1024" | bc`
	fi

	if [[ "$line" == *"Type"* ]]; then
		memory_detail=`echo "$line" | grep "Type:" | cut -d":" -f2 | sed 's/^ *//g'`
	fi

	if [[ "$line" == *"Speed"* ]]; then
		memory_speed=`echo "$line" | grep "Speed:" | cut -d":" -f2 | sed 's/^ *//g'`
	fi

	if [[ "$line" == *"Serial Number"* ]]; then
		memory_serial=`echo "$line" | grep "Serial Number:" | cut -d":" -f2 | sed 's/^ *//g'`

		echo "		<slot>" >> $xml_file
		echo "			<bank>$memory_bank</bank>" >> $xml_file
		echo "			<type></type>" >> $xml_file
		echo "			<form_factor></form_factor>" >> $xml_file
		echo "			<detail>$memory_detail</detail>" >> $xml_file
		echo "			<capacity>$memory_capacity</capacity>" >> $xml_file
		echo "			<speed>$memory_speed</speed>" >> $xml_file
		echo "			<tag>$memory_tag</tag>" >> $xml_file
		echo "			<serial>$memory_serial</serial>" >> $xml_file
		echo "		</slot>" >> $xml_file
	fi
done
#unset IFS
echo "	</memory>" >> $xml_file


if [ "$debugging" -gt "0" ]; then
	echo "Software Info"
fi
echo "	<software>" >> $xml_file
software_name=""
software_version=""
software_install_source=""
for line in $(system_profiler SPApplicationsDataType | grep "Location: " -B 8); do

	#echo "LINE: $line"

	if [[ "$software_name" == "" ]]; then
		#software_name=`echo "$line"`     # | cut -d":" -f0 | sed 's/^ *//'`
		software_name=`echo "$line" | sed 's/^ *//'`
	fi

	if [[ "$software_name" == "--" ]]; then
		software_name=""
	fi

	if [[ "$line" == *"Version: "* ]]; then
		software_version=`echo "$line" | cut -d":" -f2 | sed 's/^ *//'`
	fi

	if [[ "$line" == *"App Store: Yes"* ]]; then
		software_install_source="App Store"
	fi

	if [[ "$line" == *"App Store: No"* ]]; then
		software_install_source=""
	fi

	if [[ "$line" == *"Get Info String: "* ]]; then
		software_publisher=`echo "$line" | sed 's/^ *//'`
		software_publisher=`echo "$software_publisher" | sed 's/^Get Info String: //'`
	fi

	if [[ "$line" == *"Location:"* ]]; then
		software_location=`echo "$line" | cut -d":" -f2 | sed 's/^ *//'`
		software_name=`echo $software_name | cut -d":" -f1`
		echo "		<package>" >> $xml_file
		echo "			<software_name><![CDATA[$software_name]]></software_name>" >> $xml_file
		echo "			<software_version><![CDATA[$software_version]]></software_version>" >> $xml_file
		echo "			<software_location><![CDATA[$software_location]]></software_location>" >> $xml_file
		echo "			<software_install_source>$software_install_source</software_install_source>" >> $xml_file
		echo "			<software_publisher><![CDATA[$software_publisher]]></software_publisher>" >> $xml_file
		echo "		</package>" >> $xml_file
		software_name=""
		software_version=""
		software_install_source=""
	fi

done
echo "	</software>" >> $xml_file



echo "</system>" >> $xml_file


if [ "$submit_online" = "y" ]; then
	echo "Submitting results to server"
	#curl --data="$xml_file" $url 2>/dev/null
	curl --data @"$xml_file" $url 
fi

sed -i -e 's/form_systemXML=//g' $xml_file

if [ "$terminal_print" = "y" ]; then
	cat "$xml_file"
fi


if [ "$create_file" != "y" ]; then
	`rm -f $xml_file`
fi 
rm "$xml_file"-e

IFS=$O

