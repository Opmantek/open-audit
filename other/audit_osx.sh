#!/bin/bash
#'''''''''''''''''''''''''''''''''''''''''''''''''''''''
#' Open Audit                                          '
#' Software and Hardware Inventory                     '
#' (c) Opmantek, 2013                                  '
#' http://www.open-audit.org                           '
#' Licensed under the AGPL v3                          '
#' http://www.fsf.org/licensing/licenses/agpl-3.0.html '
#  Release: 2013-08-10 v1.0.4                          '
#'''''''''''''''''''''''''''''''''''''''''''''''''''''''

O=$IFS
IFS=$'\n'

url="http://192.168.61.111/index.php/system/add_system"
submit_online="n"
create_file="y"
org_id=""
terminal_print="n"

system_timestamp=`date +'%F %T'`
system_uuid=`system_profiler SPHardwareDataType | grep "Hardware UUID:" | cut -d":" -f2 | sed 's/^ *//g'`
system_hostname=`networksetup -getcomputername`
system_domain=""
system_description=""
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
echo  "		<domain></domain>" >> $xml_file
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





processor_cores=`sysctl hw.ncpu | awk '{print $2}'`
processor_socket=""
processor_description=`sysctl -n machdep.cpu.brand_string`
processor_speed=`sudo system_profiler SPHardwareDataType | grep "Processor Speed:" | cut -d":" -f2 | sed 's/^ *//g' | cut -d" " -f1`
processor_speed=`echo "scale = 0; $processor_speed * 1000" | bc`
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

