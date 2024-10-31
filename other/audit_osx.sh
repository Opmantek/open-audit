#!/bin/bash
#  Copyright 2022 Firstwave (www.firstwave.com)
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
#  www.firstwave.com or email sales@firstwave.com
#
# *****************************************************************************

# @package Open-AudIT
# @author Mark Unwin <mark.unwin@firstwave.com>
# @version   GIT: Open-AudIT_5.6.0
# @copyright Copyright (c) 2022, Firstwave
# @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3

O=$IFS
IFS=$'\n'

export PATH=$PATH:/usr/sbin

url="http://localhost/open-audit/index.php/input/devices"
submit_online="n"
create_file="y"
discovery_id=""
org_id=""
terminal_print="n"
debugging="3"
system_id=""
last_seen_by="audit"

# Version
version="5.6.0"

# DO NOT REMOVE THE LINE BELOW
# Configuration from web UI here

# import the command line arguements
for arg in "$@"; do
    parameter=${arg%%=*}
    value=${arg##*=}
    if [ "$parameter" == "--help" ]; then parameter="help"; value="y"; fi
    if [ "$parameter" == "-h" ]; then parameter="help"; value="y"; fi
    eval "$parameter"=\""$value\""
done

if [ "$help" = "y" ]; then
    echo ""
    echo "---------------------------"
    echo "Open-AudIT OSX audit script"
    echo "Version: $version"
    echo "---------------------------"
    echo "This script should be run on a Mac OSX based computer using root or sudo access rights."
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
    echo "     2 - Verbose output."
    echo "    *3 - Very Verbose output."
    echo ""
    echo "  discovery_id"
    echo "     * - The Open-AudIT discovery id. This is populated by Open-AudIT when running this script from discovery."
    echo ""
    echo "  -h or --help or help=y"
    echo "      y - Display this help output."
    echo "     *n - Do not display this output."
    echo ""
    echo "  org_id"
    echo "       - The org_id (an integer) taken from Open-AudIT. If set all devices found will be associated to that Organisation."
    echo ""
    echo "  submit_online"
    echo "    *y - Submit the audit result to the Open-AudIT Server defined by the 'url' variable."
    echo "     n - Do not submit the audit result"
    echo ""
    echo "  url"
    echo "    *http://localhost/open-audit/index.php/discovery/process_subnet - The http url of the Open-AudIT Server used to submit the result to."
    echo ""
    echo ""
    echo "The name of the resulting XML file will be in the format HOSTNAME-YYMMDDHHIISS.xml, as in the hostname of the machine the the complete timestamp the audit was started."
    exit
fi

system_hostname=$(hostname | cut -d. -f1)
xml_file="$system_hostname"-`date +%Y%m%d%H%M%S`.xml
xml_file_full_path=`pwd`"/$xml_file"

if [  "$debugging" -gt 0 ]; then
    echo "----------------------------"
    echo "Open-AudIT OSX audit script"
    echo "Version: $version"
    echo "----------------------------"
    echo "My PID is           $$"
    echo "Audit Start Time    $system_timestamp"
    echo "Create File         $create_file"
    echo "Submit Online       $submit_online"
    echo "Debugging Level     $debugging"
    echo "Discovery ID        $discovery_id"
    echo "Org Id              $org_id"
    echo "File                $xml_file_full_path"
    echo "----------------------------"
fi

if [ "$debugging" -gt "0" ]; then
    echo "System Info"
fi
system_timestamp=$(date +'%F %T')
system_uuid=$(system_profiler SPHardwareDataType | grep "Hardware UUID:" | cut -d":" -f2 | sed 's/^ *//g')

if [[ $system_hostname == *"."* ]]; then
    system_domain=$(hostname | cut -d. -f2-)
else
    system_domain=""
fi
system_os_version=$(sw_vers | grep "ProductVersion:" | cut -d: -f2 | xargs)
system_os_version_major=$(echo "$system_os_version" | cut -d. -f1)
system_os_version_minor=$(echo "$system_os_version" | cut -d. -f2)
system_os_name="MacOS $system_os_version"
system_serial=$(system_profiler SPHardwareDataType | grep 'Serial Number (system):' | cut -d':' -f2 | sed 's/^ *//g')
manufacturer_code=""
if [[ ${#system_serial} = 11 ]]; then
    manufacturer_code=${system_serial: -3}
fi
if [[ ${#system_serial} = 12 ]]; then
    manufacturer_code=${system_serial: -4}
fi
system_model=$(system_profiler SPHardwareDataType | grep 'Model Identifier:' | cut -d':' -f2 | sed 's/^ *//g')
# todo - below displays days and stops at hours
# system_uptime=`system_profiler SPSoftwareDataType | grep "Time since boot:" | cut -d":" -f2 | sed 's/^ *//g'`
system_uptime=""
system_form_factor=""
system_pc_os_bit="64"
system_pc_os_arch=$(uname -m 2>/dev/null)
system_pc_memory=$(system_profiler SPHardwareDataType | grep 'Memory:' | cut -d':' -f2 | sed 's/^ *//g' | cut -d' ' -f1)
system_pc_memory=$(expr "$system_pc_memory" \* 1024 \* 1024)
processor_count=$(system_profiler SPHardwareDataType | grep 'Number of Processors' | cut -d: -f2)
if [ "$system_pc_os_arch" == "arm64" ]; then
    processor_count=1
fi
system_pc_date_os_installation=$(date -r $(stat -f "%B" /private/var/db/.AppleSetupDone) "+%Y-%m-%d %H:%M:%S")

for line in $(system_profiler SPNetworkDataType | grep "BSD Device Name: en" | cut -d":" -f2 | cut -d" " -f2); do
    system_ip=`ipconfig getifaddr $line`
    if [ -n "$system_ip" ]; then
        break
    fi
done

echo  "<?xml version="\"1.0\"" encoding="\"UTF-8\""?>" > $xml_file
echo  "<system>" >> $xml_file
echo  " <sys>" >> $xml_file
echo "      <script_version>$version</script_version>" >> $xml_file
echo  "     <timestamp>$system_timestamp</timestamp>" >> $xml_file
echo  "     <id>$system_id</id>" >> $xml_file
echo  "     <uuid>$system_uuid</uuid>" >> $xml_file
echo  "     <hostname>$system_hostname</hostname>" >> $xml_file
echo  "     <domain>$system_domain</domain>" >> $xml_file
echo  "     <description></description>" >> $xml_file
echo  "     <ip>$system_ip</ip>" >> $xml_file
echo  "     <class></class>" >> $xml_file
echo  "     <type>computer</type>" >> $xml_file
echo  "     <os_group>Apple</os_group>" >> $xml_file
echo  "     <os_family>Apple OSX</os_family>" >> $xml_file
echo  "     <os_name>$system_os_name</os_name>" >> $xml_file
echo  "     <os_version>$system_os_version</os_version>" >> $xml_file
echo  "     <serial>$system_serial</serial>" >> $xml_file
echo  "     <model>$system_model</model>" >> $xml_file
echo  "     <manufacturer>Apple, Inc.</manufacturer>" >> $xml_file
echo  "     <manufacturer_code>$manufacturer_code</manufacturer_code>" >> $xml_file
echo  "     <uptime>$system_uptime</uptime>" >> $xml_file
echo  "     <form_factor></form_factor>" >> $xml_file
echo  "     <os_bit>$system_pc_os_bit</os_bit>" >> $xml_file
echo  "     <os_arch>$system_pc_os_arch</os_arch>" >> $xml_file
echo  "     <memory_count>$system_pc_memory</memory_count>" >> $xml_file
echo  "     <processor_count>$processor_count</processor_count>" >> $xml_file
echo  "     <os_installation_date>$system_pc_date_os_installation</os_installation_date>" >> $xml_file
echo  "     <org_id>$org_id</org_id>" >> $xml_file
echo  "     <last_seen_by>$last_seen_by</last_seen_by>" >> $xml_file
echo  "     <discovery_id>$discovery_id</discovery_id>" >> $xml_file
echo  " </sys>" >> $xml_file

if [ "$debugging" -gt "0" ]; then
    echo "Network Cards Info"
fi
ip_info=""
echo "  <network>" >> $xml_file
for line in $(system_profiler SPNetworkDataType | grep "BSD Device Name: en" | cut -d":" -f2); do
    line=`echo "${line}" | awk '{gsub(/^ +| +$/,"")} {print $0}'`
    net_mac_address=`ifconfig $line 2>/dev/null | grep "ether" | awk '{print $2}'`
    i=`system_profiler SPNetworkDataType | grep "BSD Device Name: $line" -B 4 | grep ":" | grep -v "      " | cut -d":" -f1`
    i=`echo "${i}" | awk '{gsub(/^ +| +$/,"")} {print $0}'`
    j=`system_profiler SPNetworkDataType | grep "BSD Device Name: $line" -B 3 | grep ":" | grep "Type" | cut -d":" -f2`
    j=`echo "${j}" | awk '{gsub(/^ +| +$/,"")} {print $0}'`
    net_index="$line"
    net_manufacturer="Apple"
    net_model="$i"
    net_description="$i $j"
    net_ip_enabled=`system_profiler SPNetworkDataType | grep "BSD Device Name: $line" -A 1 | grep ":" | grep "Has IP Assigned" | cut -d":" -f2 | cut -d" " -f2`
    net_connection_id="$line"
    net_speed=""
    net_adapter_type="$j"
    connection_status=`ifconfig $line 2>/dev/null | grep status | cut -d: -f2 | sed 's/^ *//g'`
    if [[ "$net_mac_address" > "" ]]; then
        echo "      <item>" >> $xml_file
        echo "          <net_index>$net_index</net_index>" >> $xml_file
        echo "          <mac>$net_mac_address</mac>" >> $xml_file
        echo "          <manufacturer>$net_manufacturer</manufacturer>" >> $xml_file
        echo "          <model>$net_model</model>" >> $xml_file
        echo "          <description>$net_description</description>" >> $xml_file
        echo "          <ip_enabled>$net_ip_enabled</ip_enabled>" >> $xml_file
        echo "          <connection>$net_connection_id</connection>" >> $xml_file
        echo "          <connection_status>$connection_status</connection_status>" >> $xml_file
        echo "          <type>$net_adapter_type</type>" >> $xml_file
        echo "      </item>" >> $xml_file
    fi
done
echo "  </network>" >> $xml_file
echo "  <ip>" >> $xml_file
for line in $(system_profiler SPNetworkDataType | grep "BSD Device Name: en" | cut -d":" -f2); do
    line=`echo "${line}" | awk '{gsub(/^ +| +$/,"")} {print $0}'`
    net_mac_address=`ifconfig $line 2>/dev/null | grep "ether" | awk '{print $2}'`
    if [[ "$net_mac_address" > "" ]]; then
        # IPv4
        ip_address_v4=`ipconfig getifaddr $line`
        if [[ "$ip_address_v4" > "" ]]; then
            net_index="$line"
            ip_subnet=`ipconfig getpacket $line | grep "subnet_mask" | cut -d" " -f3`
            ip_address_v6=""
            version="4"
        fi
        if [[ "$ip_address_v4" > "" ]]; then
            echo "      <item>" >> $xml_file
            echo "          <net_index>$net_index</net_index>" >> $xml_file
            echo "          <mac>$net_mac_address</mac>" >> $xml_file
            echo "          <ip>$ip_address_v4</ip>" >> $xml_file
            echo "          <netmask>$ip_subnet</netmask>" >> $xml_file
            echo "          <version>$version</version>" >> $xml_file
            echo "      </item>" >> $xml_file
        fi
        # IPv6
        ip_address_v4=""
        ip_address_v6=`ifconfig $line 2>/dev/null | grep inet6 | cut -d% -f1 | cut -d" " -f2`
        if [[ "$ip_address_v6" == *":"* ]]; then
            net_index="$line"
            ip_subnet=`ifconfig $line 2>/dev/null | grep inet6 | cut -d% -f2 | cut -d" " -f3`
            ip_address_v4="$ip_address_v6"
            version="6"
        fi
        if [[ "$ip_address_v4" > "" ]]; then
            echo "      <item>" >> $xml_file
            echo "          <net_index>$net_index</net_index>" >> $xml_file
            echo "          <mac>$net_mac_address</mac>" >> $xml_file
            echo "          <ip>$ip_address_v4</ip>" >> $xml_file
            echo "          <netmask>$ip_subnet</netmask>" >> $xml_file
            echo "          <version>$version</version>" >> $xml_file
            echo "      </item>" >> $xml_file
        fi
    fi
done
echo "  </ip>" >> $xml_file


if [ "$debugging" -gt "0" ]; then
    echo "Processor Info"
fi

processor_cores=`system_profiler SPHardwareDataType | grep "Total Number of Cores" | awk '{print $5}'`
processor_logical=`sysctl hw.ncpu | awk '{print $2}'`
processor_socket=""
processor_description=`sysctl -n machdep.cpu.brand_string`
processor_speed=`system_profiler SPHardwareDataType | grep "Processor Speed:" | cut -d":" -f2 | sed 's/^ *//g' | cut -d" " -f1 | sed 's/,/./g'`
if [ -n "$processor_speed" ]; then
    processor_speed=`echo "scale = 0; $processor_speed*1000" | bc`
fi
if [ -z "$processor_speed" ]; then
    if [ "$processor_description" = "Apple M1" ]; then
        processor_speed="3200"
    fi
    if [ "$processor_description" = "Apple M2" ] || [ "$processor_description" = "Apple M2 Pro" ]; then
        processor_speed="3500"
    fi
    if [ "$processor_description" = "Apple M2 Max" ] || [ "$processor_description" = "Apple M2 Ultra" ]; then
        processor_speed="3700"
    fi
    if [ "$processor_description" = "Apple M3" ]; then
        processor_speed="4050"
    fi
fi
if [[ "$processor_description" == *"Apple"* ]]; then
    processor_manufacturer="Apple"
    processor_architecture="arm64"
else
    processor_manufacturer="GenuineIntel"
    processor_architecture="x64"
fi

echo  " <processor>" >> $xml_file
echo  "     <item>" >> $xml_file
echo  "         <physical_count>$processor_count</physical_count>" >> $xml_file
echo  "         <core_count>$processor_cores</core_count>" >> $xml_file
echo  "         <logical_count>$processor_logical</logical_count>" >> $xml_file
echo  "         <socket>$processor_socket</socket>" >> $xml_file
echo  "         <description>$processor_description</description>" >> $xml_file
echo  "         <speed>$processor_speed</speed>" >> $xml_file
echo  "         <manufacturer>$processor_manufacturer</manufacturer>" >> $xml_file
echo  "         <architecture>$processor_architecture</architecture>" >> $xml_file
echo  "     </item>" >> $xml_file
echo  " </processor>" >> $xml_file




if [ "$debugging" -gt "0" ]; then
    echo "Memory Info"
fi
echo "  <memory>" >> $xml_file
if [ "$processor_architecture" == "arm64" ]; then
    memory_type=$(system_profiler SPMemoryDataType | grep Type | cut -d: -f2 | sed 's/^ *//g')
    memory_capacity=$(expr "$system_pc_memory" / 1024)

    echo "      <item>" >> $xml_file
    echo "          <bank>1</bank>" >> $xml_file
    echo "          <type>$memory_type</type>" >> $xml_file
    echo "          <form_factor></form_factor>" >> $xml_file
    echo "          <detail></detail>" >> $xml_file
    echo "          <size>$memory_capacity</size>" >> $xml_file
    echo "          <speed></speed>" >> $xml_file
    echo "          <tag></tag>" >> $xml_file
    echo "          <serial></serial>" >> $xml_file
    echo "      </item>" >> $xml_file
else
    for line in $(system_profiler SPMemoryDataType | grep "BANK" -A 8); do

        if [[ "$line" == *"BANK"* ]]; then
            memory_tag=`echo "$line" | cut -d"/" -f1 | sed 's/^ *//'`
            memory_bank=`echo "$memory_tag" | sed 's/BANK/DIMM/g'`
        fi

        if [[ "$line" == *"Size"* ]]; then
            memory_capacity=`echo "$line" | grep "Size:" | cut -d":" -f2 | sed 's/^ *//g' | cut -d" " -f1 | sed 's/,/./g'`
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

            echo "      <item>" >> $xml_file
            echo "          <bank>$memory_bank</bank>" >> $xml_file
            echo "          <type></type>" >> $xml_file
            echo "          <form_factor></form_factor>" >> $xml_file
            echo "          <detail>$memory_detail</detail>" >> $xml_file
            echo "          <size>$memory_capacity</size>" >> $xml_file
            echo "          <speed>$memory_speed</speed>" >> $xml_file
            echo "          <tag>$memory_tag</tag>" >> $xml_file
            echo "          <serial>$memory_serial</serial>" >> $xml_file
            echo "      </item>" >> $xml_file
        fi
    done
fi
echo "  </memory>" >> $xml_file

if [ "$debugging" -gt "0" ]; then
    echo "OS: $system_os_version"
    echo "MAJ: $system_os_version_major"
    echo "MIN: $system_os_version_minor"
    echo "Hard Disks"
fi
# NOTES -
# manufacturer not available on SATA conntected disks
# model not available on USB connected disks
# partition count not available
# scsi logical unit not available


echo "  <disk>" >> $xml_file
partition_each=""
if [ "$debugging" -gt 3 ]; then
    echo "COMMAND: diskutil list | grep "^/" | cut -d/ -f3 | cut -d\" \" -f1"
fi
for disk in $(diskutil list | grep "physical\|synthesized" | grep "^/" | cut -d/ -f3 | cut -d" " -f1); do
    hard_drive_index=$disk
    if [ "$debugging" -gt 3 ]; then
        echo "COMMAND: diskutil list | grep \"physical\\|synthesized\" | grep \"^/\" | grep \"$disk\" | cut -d\\( -f2 | cut -d\\) -f1"
    fi
    hard_drive_caption=$(diskutil list | grep "physical\|synthesized" | grep "^/" | grep "$disk" | cut -d\( -f2 | cut -d\) -f1)
    if [ "$debugging" -gt 3 ]; then
        echo "COMMAND: diskutil info $disk | grep \"^ \" | grep \"Protocol:\" | cut -d\":\" -f2- | sed 's/^ *//g'"
    fi
    hard_drive_interface_type=$(diskutil info "$disk" | grep "^ " | grep "Protocol:" | cut -d":" -f2- | sed 's/^ *//g')

    hard_drive_size=""
    if [ "$debugging" -gt 3 ]; then
        echo "COMMAND: diskutil info $disk | grep \"^ \" | grep \"Disk Size:\" | cut -d\":\" -f2- | sed 's/^ *//g' | cut -d\" \" -f3 | cut -d\"(\" -f2"
    fi
    hard_drive_size=$(diskutil info "$disk" | grep "^ " | grep "Disk Size:" | cut -d":" -f2- | sed 's/^ *//g' | cut -d" " -f3 | cut -d"(" -f2)
    if [ "$hard_drive_size" == "" ]; then
        if [ "$debugging" -gt 3 ]; then
            echo "COMMAND: diskutil info $disk | grep \"^ \" | grep \"Total Size:\" | cut -d\":\" -f2- | sed 's/^ *//g' | cut -d\" \" -f3 | cut -d\"(\" -f2"
        fi
        hard_drive_size=$(diskutil info "$disk" | grep "^ " | grep "Total Size:" | cut -d":" -f2- | sed 's/^ *//g' | cut -d" " -f3 | cut -d"(" -f2)]
    fi

    if [ "$hard_drive_size" == "" ]; then
        hard_drive_size="0"
    else
        if [ "$debugging" -gt 3 ]; then
            echo "COMMAND: echo \"$hard_drive_size / 1000 / 1000 \" | bc | cut -d\".\" -f1"
        fi
        hard_drive_size=$(echo "$hard_drive_size / 1000 / 1000 " | bc | cut -d"." -f1)
    fi
    
    hard_drive_device_id=$(diskutil info "$disk" | grep "^ " | grep "Device Node:" | cut -d":" -f2- | sed 's/^ *//g')
    hard_drive_status=$(diskutil info "$disk" | grep "^ " | grep "SMART Status:" | cut -d":" -f2- | sed 's/^ *//g')
    hard_drive_manufacturer=""
    hard_drive_model=""
    if [[ "$hard_drive_interface_type" == "SATA" ]]; then
        hard_drive_model=$(system_profiler    SPSerialATADataType | grep "BSD Name: $disk$" -B8 | grep "Model:"         | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g')
        hard_drive_serial=$(system_profiler   SPSerialATADataType | grep "BSD Name: $disk$" -B8 | grep "Serial Number:" | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g')
        hard_drive_firmware=$(system_profiler SPSerialATADataType | grep "BSD Name: $disk$" -B8 | grep "Revision:"      | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g')
        hard_drive_status=$(diskutil info $disk 2>/dev/null | grep "SMART Status:" | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g')
    fi
    if [[ "$hard_drive_interface_type" == "USB" ]]; then
        hard_drive_model=$(diskutil info "$disk" | grep "^ " | grep "Device / Media Name:" | cut -d":" -f2- | sed 's/^ *//g')
        hard_drive_serial=$(system_profiler       SPUSBDataType 2>/dev/null | grep "BSD Name: $disk$" -B12 | grep "Serial Number:" | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g')
        hard_drive_firmware=$(system_profiler     SPUSBDataType 2>/dev/null | grep "BSD Name: $disk$" -B12 | grep "Version:"       | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g')
        hard_drive_manufacturer=$(system_profiler SPUSBDataType 2>/dev/null | grep "BSD Name: $disk$" -B12 | grep "Manufacturer:"  | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g')
    fi
    if [[ "$hard_drive_interface_type" == "Apple Fabric" ]]; then
        hard_drive_model=$(system_profiler    SPNVMeDataType 2>/dev/null | grep "BSD Name: $disk$" -B6 | grep "Model:"         | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g')
        hard_drive_serial=$(system_profiler   SPNVMeDataType 2>/dev/null | grep "BSD Name: $disk$" -B6 | grep "Serial Number:" | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g')
        hard_drive_firmware=$(system_profiler SPNVMeDataType 2>/dev/null | grep "BSD Name: $disk$" -B6 | grep "Revision:"      | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g')
        hard_drive_status=$(diskutil info $disk 2>/dev/null | grep "SMART Status:" | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g')
    fi
    if [[ "$hard_drive_interface_type" == "PCI" ]]; then
        hard_drive_model=$(system_profiler    SPSerialATADataType | grep "BSD Name: $disk$" -B8 | grep "Model:"         | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g')
        hard_drive_serial=$(system_profiler   SPSerialATADataType | grep "BSD Name: $disk$" -B8 | grep "Serial Number:" | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g')
        hard_drive_firmware=$(system_profiler SPSerialATADataType | grep "BSD Name: $disk$" -B8 | grep "Revision:"      | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g')
        hard_drive_status=$(diskutil info $disk 2>/dev/null | grep "SMART Status:" | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g')
    fi
    if [[ "$hard_drive_model" == *"APPLE"* ]]; then
        hard_drive_manufacturer="Apple"
    fi

    echo "      <item>" >> $xml_file
    echo "          <caption>$hard_drive_caption</caption>" >> $xml_file
    echo "          <hard_drive_index>$hard_drive_index</hard_drive_index>" >> $xml_file
    echo "          <interface_type>$hard_drive_interface_type</interface_type>" >> $xml_file
    echo "          <manufacturer>$hard_drive_manufacturer</manufacturer>" >> $xml_file
    echo "          <model>$hard_drive_model</model>" >> $xml_file
    echo "          <serial>$hard_drive_serial</serial>" >> $xml_file
    echo "          <size>$hard_drive_size</size>" >> $xml_file
    echo "          <device>$hard_drive_device_id</device>" >> $xml_file
    echo "          <status>$hard_drive_status</status>" >> $xml_file
    echo "          <firmware>$hard_drive_firmware</firmware>" >> $xml_file
    echo "      </item>" >> $xml_file

    # partitions on this disk
    if [ "$debugging" -gt 3 ]; then
        echo "COMMAND: diskutil list | grep \"  $disk\"s.\\\$ | awk 'NF>1{print $NF}'"
    fi
    for partition in $(diskutil list | grep "  $disk"s.\$ | awk 'NF>1{print $NF}'); do

        if [ "$debugging" -gt 3 ]; then
            echo "COMMAND: diskutil info \"$partition\" | grep \"^ \" | grep \"Mount Point:\" | cut -d\":\" -f2 | sed 's/^ *//g' | sed 's/ *$//g'"
        fi
        partition_mount_point=$(diskutil info "$partition" | grep "^ " | grep "Mount Point:" | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g')


        if [ "$debugging" -gt 3 ]; then
            echo "COMMAND: diskutil info \"$partition\" | grep \"^ \" | grep \"Volume Name:\" | cut -d\":\" -f2- | sed 's/^ *//g' | sed 's/ *$//g'"
        fi
        partition_name=$(diskutil info "$partition" | grep "^ " | grep "Volume Name:" | cut -d":" -f2- | sed 's/^ *//g' | sed 's/ *$//g')


        if [ "$partition_name" == "Not applicable (no file system)" ]; then
            if [ "$debugging" -gt 3 ]; then
                echo "COMMAND: diskutil info \"$partition\" | grep \"^ \" | grep \"Device / Media Name:\" | cut -d\":\" -f2- | sed 's/^ *//g' | sed 's/ *$//g'"
            fi
            partition_name=$(diskutil info "$partition" | grep "^ " | grep "Device / Media Name:" | cut -d":" -f2- | sed 's/^ *//g' | sed 's/ *$//g')
        fi


        if [ "$debugging" -gt 3 ]; then
            echo "COMMAND: diskutil info \"$partition\" | grep \"^ \" | grep \"Disk Size:\" | cut -d\":\" -f2- | sed 's/^ *//g' | cut -d\" \" -f3 | cut -d\"(\" -f2"
        fi
        partition_size=$(diskutil info "$partition" | grep "^ " | grep "Disk Size:" | cut -d":" -f2- | sed 's/^ *//g' | cut -d" " -f3 | cut -d"(" -f2)
        if [ "$partition_size" == "" ]; then
            if [ "$debugging" -gt 3 ]; then
                echo "COMMAND: diskutil info \"$partition\" | grep \"^ \" | grep \"Total Size:\" | cut -d\":\" -f2- | sed 's/^ *//g' | cut -d\" \" -f3 | cut -d\"(\" -f2"
            fi
            partition_size=$(diskutil info "$partition" | grep "^ " | grep "Total Size:" | cut -d":" -f2- | sed 's/^ *//g' | cut -d" " -f3 | cut -d"(" -f2)
        fi
        if [ "$partition_size" == "" ]; then
            if [ "$debugging" -gt 3 ]; then
                echo "COMMAND: diskutil info \"$partition\" | grep \"^ \" | grep \"Container Total Space:\" | cut -d\":\" -f2- | sed 's/^ *//g' | cut -d\" \" -f3 | cut -d\"(\" -f2"
            fi
            partition_size=$(diskutil info "$partition" | grep "^ " | grep "Container Total Space:" | cut -d":" -f2- | sed 's/^ *//g' | cut -d" " -f3 | cut -d"(" -f2)
        fi


        if [ "$debugging" -gt 3 ]; then
            echo "COMMAND: diskutil info \"$partition\" | grep \"^ \" | grep \"Volume Free Space:\" | cut -d\":\" -f2- | sed 's/^ *//g' | cut -d\" \" -f3 | cut -d\"(\" -f2"
        fi
        partition_free_space=$(diskutil info "$partition" | grep "^ " | grep "Volume Free Space:" | cut -d":" -f2- | sed 's/^ *//g' | cut -d" " -f3 | cut -d"(" -f2)
        if [ "$partition_free_space" == "" ]; then
            if [ "$debugging" -gt 3 ]; then
                echo "COMMAND: diskutil info \"$partition\" | grep \"^ \" | grep \"Container Free Space:\" | cut -d\":\" -f2- | sed 's/^ *//g' | cut -d\" \" -f3 | cut -d\"(\" -f2"
            fi
            partition_free_space=$(diskutil info "$partition" | grep "^ " | grep "Container Free Space:" | cut -d":" -f2- | sed 's/^ *//g' | cut -d" " -f3 | cut -d"(" -f2)
        fi

        if [ "$partition_free_space" != "" ]; then
            if [ "$debugging" -gt 3 ]; then
                echo "COMMAND: echo \"$partition_size - $partition_free_space\" | bc | cut -d\".\" -f1"
            fi
            partition_used_space=$(echo "$partition_size - $partition_free_space" | bc | cut -d"." -f1)
            if [ "$debugging" -gt 3 ]; then
                echo "COMMAND: echo \"$partition_used_space / 1000 / 1000\" | bc | cut -d\".\" -f1"
            fi
            partition_used_space=$(echo "$partition_used_space / 1000 / 1000" | bc | cut -d"." -f1)

            if [ "$debugging" -gt 3 ]; then
                echo "COMMAND: echo \"$partition_free_space / 1000 / 1000\" | bc | cut -d\".\" -f1"
            fi
            partition_free_space=$(echo "$partition_free_space / 1000 / 1000" | bc | cut -d"." -f1)
        else
            partition_free_space="0"
            partition_used_space="0"
        fi

        mount_type="partition"
        if [ "$hard_drive_caption" == "synthesized" ]; then
            mount_type="volume"
        fi

        partition_size=$(echo "$partition_size / 1000 / 1000" | bc | cut -d"." -f1)
        partition_format=$(diskutil info "$partition" | grep "^ " | grep "File System Personality:" | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g')
        partition_caption=$(diskutil info "$partition" | grep "^ " | grep "Volume Name:" | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g')
        partition_serial=$(diskutil info "$partition" | grep "^ " | grep "Volume UUID:" | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g')
        if [ -z "$partition_serial" ]; then
            partition_serial=$(diskutil info "$partition" | grep "^ " | grep "Partition UUID:" | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g')
        fi
        partition_disk_index=$(diskutil info "$partition" | grep "^ " | grep "Device Identifier:" | cut -d":" -f2 | sed 's/^ *//g' | sed 's/ *$//g')

        partition_each="$partition_each       <item>"$'\n'
        partition_each="$partition_each           <serial>$partition_serial</serial>"$'\n'
        partition_each="$partition_each           <hard_drive_index>$hard_drive_index</hard_drive_index>"$'\n'
        partition_each="$partition_each           <mount_type>$mount_type</mount_type>"$'\n'
        partition_each="$partition_each           <mount_point><![CDATA[$partition_mount_point]]></mount_point>"$'\n'
        partition_each="$partition_each           <name>$partition_name</name>"$'\n'
        partition_each="$partition_each           <size>$partition_size</size>"$'\n'
        partition_each="$partition_each           <free>$partition_free_space</free>"$'\n'
        partition_each="$partition_each           <used>$partition_used_space</used>"$'\n'
        partition_each="$partition_each           <format>$partition_format</format>"$'\n'
        partition_each="$partition_each           <description>$partition_caption</description>"$'\n'
        partition_each="$partition_each           <device>$partition_device_id</device>"$'\n'
        partition_each="$partition_each           <partition_disk_index>$partition_disk_index</partition_disk_index>"$'\n'
        partition_each="$partition_each           <bootable></bootable>"$'\n'
        partition_each="$partition_each           <type>local</type>"$'\n'
        partition_each="$partition_each       </item>"$'\n'
    done

done
echo "  </disk>" >> $xml_file
echo "   <partition>" >> $xml_file
echo "$partition_each</partition>" >> $xml_file



if [ "$debugging" -gt "0" ]; then
    echo "Software Info"
fi
echo "  <software>" >> $xml_file
# include OS in software
echo "      <item>" >> $xml_file
echo "          <name><![CDATA[$system_os_name]]></name>" >> $xml_file
echo "          <version><![CDATA[$system_os_version]]></version>" >> $xml_file
echo "          <publisher>Apple</publisher>" >> $xml_file
echo "      </item>" >> $xml_file
software_name=""
software_version=""
software_install_source=""
for line in $(system_profiler SPApplicationsDataType | grep "Location: " -B 8 -A 1 | grep -e '^$' -v); do

    if [[ "$software_name" == "" && "$line" != *"Get Info String: "* && "$line" != *"Kind: "* ]]; then
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
        software_install_source="Mac App Store"
    fi

    if [[ "$line" == *"App Store: No"* ]]; then
        software_install_source=""
    fi

    if [[ "$line" == *"Obtained from: "* ]]; then
        software_install_source=`echo "$line" | cut -d":" -f2 | sed 's/^ *//'`
    fi

    if [[ "$line" == *"Signed by: Developer ID Application"* ]]; then
        software_publisher=`echo "$line" | cut -d":" -f3 | cut -d"," -f1 | sed 's/^ *//'`
    fi

    if [[ "$line" == *"Signed by: Microsoft Corporation"* ]]; then
        software_publisher="Microsoft"
    fi

    if [[ "$software_install_source" == "Apple" ]]; then
        software_publisher="Apple"
    fi

    # the below line appears (sometimes) after the Location: line.
    # Commenting out for now as it's not easy to retrieve this for 'some' packages only
    # if [[ "$line" == *"Get Info String: "* && "$software_publisher" == "" ]]; then
    #     software_publisher=`echo "$line" | sed 's/^ *//'`
    #     software_publisher=`echo "$software_publisher" | sed 's/^Get Info String: //'`
    # fi

    if [[ "$line" == *"Location:"* ]]; then
        if [[ "$line" != *"Daemon Containers"* ]]; then
            software_location=`echo "$line" | cut -d":" -f2 | sed 's/^ *//'`
            software_name=`echo $software_name | cut -d":" -f1`
            echo "      <item>" >> $xml_file
            echo "          <name><![CDATA[$software_name]]></name>" >> $xml_file
            echo "          <version><![CDATA[$software_version]]></version>" >> $xml_file
            echo "          <location><![CDATA[$software_location]]></location>" >> $xml_file
            echo "          <install_source>$software_install_source</install_source>" >> $xml_file
            echo "          <publisher><![CDATA[$software_publisher]]></publisher>" >> $xml_file
            echo "      </item>" >> $xml_file
        fi
        software_name=""
        software_version=""
        software_location=""
        software_install_source=""
        software_publisher=""
    fi
done
echo "  </software>" >> $xml_file



if [ "$debugging" -gt "0" ]; then
    echo "Software Keys"
fi
echo "  <software_keys>" >> $xml_file
key_name=""
key_release=""
key_text=""
# Adobe CS5 and later
if [ -d /Library/Application\ Support/regid.1986-12.com.adobe/ ] ; then
    # Read each each found file and add its product to a list
    for AFILE in /Library/Application\ Support/regid.1986-12.com.adobe/*
    do
        key_name=$( sed -n -e 's/.*<swid:product_title>\(.*\)<\/swid:product_title>.*/\1/p' "$AFILE" )
        key_release=$( sed -n -e 's/.*<swid:activation_status>\(.*\)<\/swid:activation_status>.*/\1/p' "$AFILE" )
        key_text=$( sed -n -e 's/.*<swid:serial_number>\(.*\)<\/swid:serial_number>.*/\1/p' "$AFILE" )
        echo "      <key>" >> $xml_file
        echo "          <key_name><![CDATA[$key_name]]></key_name>" >> $xml_file
        echo "          <key_text><![CDATA[$key_text]]></key_text>" >> $xml_file
        echo "          <key_release><![CDATA[$key_release]]></key_release>" >> $xml_file
        echo "          <key_edition>OSX</key_edition>" >> $xml_file
        echo "      </key>" >> $xml_file
        key_name=""
        key_release=""
        key_text=""
    done
fi

key_name=""
key_release=""
key_text=""

# Adobe CS4
if [ -d /Users/Shared/Adobe/ISO-19770/ ] ; then
    # Read each found file add its product to the list
    for AFILE in /Users/Shared/Adobe/ISO-19770/*
    do
        key_name=$( sed -n -e 's/.*<sat:product_title>\(.*\)<\/sat:product_title>.*/\1/p' "$AFILE" )
        # Some products use a different version of SWID Tag where "sat:product_title" isn't valid.
        # If "sat:product_title" isn't found in the tag then assume "product".
        if [ "$key_name" = "" ] ; then
            key_name=$( sed -n -e 's/.*<product>\(.*\)<\/product>.*/\1/p' "$AFILE" )
            key_suite=$( sed -n -e 's/.*<part_of_suite>\(.*\)<\/part_of_suite>.*/\1/p' "$AFILE" )

            # Some products such as Acrobat Pro may exist but this older version
            # of SWID Tag will only indicate that it was part of a suite or standalone.
            # Report if the product is part of a suite.

            if [ "$key_suite" = "true" ] ; then
                key_name="$key_name is part of an unknown CS4 suite"
            fi
        fi
        key_release=$( sed -n -e 's/.*<sat:activation_status>\(.*\)<\/sat:activation_status>.*/\1/p' "$AFILE" )
        echo "      <key>" >> $xml_file
        echo "          <key_name><![CDATA[$key_name]]></key_name>" >> $xml_file
        echo "          <key_text></key_text>" >> $xml_file
        echo "          <key_release><![CDATA[$key_release]]></key_release>" >> $xml_file
        echo "          <key_edition>OSX</key_edition>" >> $xml_file
        echo "      </key>" >> $xml_file
        key_name=""
        key_release=""
        key_text=""
    done
fi


echo "  </software_keys>" >> $xml_file




echo "</system>" >> $xml_file


if [ "$submit_online" = "y" ]; then
    if [ "$debugging" -gt 0 ]; then
        echo "Submitting results to server"
    fi
    if [ "$debugging" -gt 3 ]; then
        curl -o input_devices --data-urlencode data@"$xml_file" $url
        cat "input_devices"
        rm -f input_devices
    else
        curl --data-urlencode data@"$xml_file" $url >/dev/null 2>&1
        #rm -f input_devices
    fi
fi


if [ "$terminal_print" = "y" ]; then
    cat "$xml_file"
fi


if [ "$create_file" != "y" ]; then
    `rm -f $xml_file`
fi

if [ "$debugging" -gt 0 ]; then
    echo "Audit Completed"
fi

IFS=$O

