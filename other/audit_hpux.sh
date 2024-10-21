#!/usr/bin/ksh 
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

# Below are the default settings
SECONDS=0

# create an XML text file of the result in the current directory
create_file="y"

# submit the audit to the Open-AudIT server
submit_online="n"

# the address of the Open-AudIT server "submit" page
url="http://localhost/open-audit/index.php/input/devices"

# 0 = no debug
# 1 = basic debug
debugging=1

# Version
version="5.6.0"

discovery_id=""
help=""
last_seen_by="audit_ssh"
org_id=""
system_id=""

# DO NOT REMOVE THE LINE BELOW
# Configuration from web UI here


for arg; do
	VAR=$(echo "$arg" | cut -d'=' -f1)
	VAL=$(echo "$arg" | cut -d'=' -f2)
	case $VAR in 
		-h)            help="y";;
		--help)        help="y";;
		-v)            version="y";;
		--version)     version="y";;
		submit_online) submit_online="$VAL";;
		create_file)   create_file="$VAL";;
		debugging)     debugging="$VAL";;
		org_id)        org_id="$VAL";;
		url)           url="$VAL";;
		system_id)     system_id="$VAL";;
		last_seen_by)  last_seen_by="$VAL";;
		discovery_id)  discovery_id="$VAL";;
		*) ;;
	esac
done

if [[ $help = "y" ]]; then
	echo ""
	echo "----------------------------"
	echo "Open-AudIT HP-UX audit script"
	echo "(c) Firstwave, 2022."
	echo "Version: $version"
	echo "----------------------------"
	echo "This script should be used on IBM AIX machines to generate a result file and submit it to the Open-AudIT Server."
	echo ""
	echo "Valid command line options are below (items containing * are the defaults) and should take the format name=value (eg: debugging=3)."
	echo ""
	echo "  create_file"
	echo "    *y - Create an XML file containing the audit result."
	echo "     n - Do not create an XML result file."
	echo ""
	echo "  debugging"
	echo "     0 - No output."
	echo "    *1 - Minimal Output."
	echo ""
	echo "  discovery_id"
	echo "     * - The Open-AudIT discovery id. This is populated by Open-AudIT when running this script from discovery."
	echo ""
	echo "  org_id"
	echo "     * - The Open-AudIT id of the organisation you would like this machine assigned to. This is not populated by default."
	echo ""
	echo "  submit_online"
	echo "     y - Submit the audit result to the Open-AudIT Server defined by the 'url' variable."
	echo "    *n - Do not submit the audit result"
	echo "     NOTE - Submitting online does not currently work and should not be used."
	echo ""
	echo "  url"
	echo "    *http://localhost/index.php/input/devices - The http url of the Open-AudIT Server used to submit the result to."
	echo ""
	echo ""
	echo "The name of the resulting XML file will be in the format HOSTNAME-YYMMDDHHIISS.xml, as in the hostname of the machine the the complete timestamp the audit was started."
	echo ""
	exit
fi

# turn off globbing across line breaks
set -f 
IFS='
'  

function escape_xml {
	# escape characters
	result="$1"
	if [[ "$result" = *"&"* ]] || [[ "$result" = *"<"* ]] || [[ "$result" = *">"* ]] || [[ "$result" = *"\""* ]] || [[ "$result" = *"'"* ]]; then
		result="<![CDATA[$result]]>"
	fi
	# Trim leading/trailing spaces
	result=$(echo "$result" | awk '{$1=$1};1')
	echo "$result"
}

print_manifest=$(/opt/ignite/bin/print_manifest 2>/dev/null)
machinfo=$(machinfo)
if [ -z "$machinfo" ]; then
	echo "Cannot retrieve machinfo. Script will not proceed."
	exit
fi
system_timestamp=$(date +"%Y-%m-%d %T" 2>/dev/null)
system_hostname=$(hostname 2>/dev/null)
xml_file="$system_hostname"-$(date +%Y%m%d%H%M%S).xml
xml_file_full_path=`pwd`"/$xml_file"

if [[ "$debugging" -gt 0 ]]; then
	echo "----------------------------"
	echo "Open-AudIT HP-UX audit script"
	echo "Version: $version"
	echo "----------------------------"
	echo "My PID is           $$"
	echo "Audit Start Time    $system_timestamp"
	echo "Create File         $create_file"
	echo "Submit Online       $submit_online"
	echo "Debugging Level     $debugging"
	echo "Discovery ID        $discovery_id"
	echo "Org Id              $org_id"
	echo "URL                 $url"
	echo "File                $xml_file_full_path"
	echo "----------------------------"
fi

system_uuid=$(echo "$machinfo" | grep -i "Machine ID number:" | awk '{print $4}')
system_domain=$(domainname)
os_name=$(echo "$machinfo" | grep -i "Release:" | cut -d: -f2-)
os_version=$(echo "$machinfo" | grep -i "Version:" | head -n1 | cut -d: -f2-)
serial=$(echo "$machinfo" | grep "Machine serial number:" | awk '{print $4}')
system_model=$(model)
#system_uptime=$(uptime 2>/dev/null)
memory_count=$(echo "$machinfo" | grep -i "Memory:" |  awk '{ print $2 }')
processor_count=$(echo "$print_manifest" | grep "Processors:" | awk '{ print $2 }')
os_bit=$(getconf KERNEL_BITS)
form_factor=$(echo "model" | grep -i virtual)
if [ -n "form_factor" ]; then
	form_factor="virtual"
fi
if [ "$form_factor" = "virtual" ]; then
	class="virtual server"
else
	class="server"
fi
cat >"$xml_file" <<EndOfFile
<?xml version="1.0" encoding="UTF-8"?> 
<system>
	<sys>
		<script_version>$version</script_version>
		<uuid>$(escape_xml "$system_uuid")></uuid>
		<hostname>$(escape_xml "$system_hostname")</hostname>
		<domain>$(escape_xml "$system_domain")</domain>
		<description></description>
		<type>computer</type>
		<icon>hp-ux</icon>
		<os_group>Unix</os_group>
		<os_family>HP-UX</os_family>
		<os_name>$(escape_xml "$os_name")</os_name>
		<os_version>$(escape_xml "$os_version")</os_version>
		<serial>$(escape_xml "$serial")</serial>
		<model>$(escape_xml "$system_model")</model>
		<manufacturer>HP</manufacturer>
		<uptime></uptime>
		<form_factor>$(escape_xml "$form_factor")</form_factor>
		<os_bit>$(escape_xml "$os_bit")</os_bit>
		<memory_count>$(escape_xml "$memory_count")</memory_count>
		<processor_count>$(escape_xml "$processor_count")</processor_count>
		<os_installation_date></os_installation_date>
		<org_id>$(escape_xml "$org_id")</org_id>
		<class>$(escape_xml "$class")</class>
		<id>$(escape_xml "$system_id")</id>
		<last_seen_by>$(escape_xml "$last_seen_by")</last_seen_by>
		<discovery_id>$(escape_xml "$discovery_id")</discovery_id>
	</sys>
EndOfFile

if [ "$debugging" -gt 0 ]; then
	echo "Processor Info"
fi
physical_count=$(echo "$processor_count")
if [ -z "$processor_count" ]; then
	processor_count="1"
fi
core_count=$(echo "$machinfo" | grep "core" | cut -dc -f1)
if [ -z "$core_count" ]; then
	core_count="1"
fi
logical_count=$(echo "$machinfo" | grep "logical processor" | cut -dl -f1)
if [ -z "$logical_count" ]; then
	logical_count="1"
fi
speed=0
speed=$(echo "$machinfo" | grep "GHz" | sed s/\(R\)//g | cut -d"(" -f2 | cut -d" " -f1)
integer speed=$(echo "$speed" \* 1000 | bc)
manufacturer=$(echo "$machinfo" | grep -i "intel" | head -n1)
if [ -n "$manufacturer" ]; then
	manufacturer="Intel"
fi
description=$(echo "$machinfo" | grep -i "intel" | grep -i "itanium")
cat >>"$xml_file" <<EndOfFile
	<processor>
		<item>
			<physical_count>$(escape_xml "$physical_count")</physical_count>
			<core_count>$(escape_xml "$core_count")</core_count>
			<logical_count>$(escape_xml "$logical_count")</logical_count>
			<socket></socket>
			<description>$(escape_xml "$description")</description>
			<speed>$(escape_xml "$speed")</speed>
			<manufacturer>$(escape_xml "$manufacturer")</manufacturer>
		</item>
	</processor>
EndOfFile

lspv=$(lspv 2>/dev/null)
	if [ -n "$lspv" ]; then
	if [ "$debugging" -gt 0 ]; then
		echo "Disk Info"
	fi
	echo "	<disk>" >> "$xml_file"
	for disk in $(lspv 2>/dev/null | grep -v "NAME" | cut -d" " -f1); do
		caption="$disk"
		index=$(lspv "$disk" 2>/dev/null | grep 'PV IDENTIFIER:' | sed -e "s/^[ \\t]*//" | sed 's/  */\ /g' | cut -d' ' -f3)
		interface_type=""
		manufacturer=""
		model=""
		serial=""
		size=$(getconf DISK_SIZE /dev/"$disk" 2>/dev/null)
		device_id=""
		partitions=""
		status=""
		scsi_logical_unit=""
		cat >>"$xml_file" <<EndOfFile
			<item>
				<caption>$(escape_xml "$caption")</caption>
				<hard_drive_index>$(escape_xml "$index")</hard_drive_index>
				<interface_type>$(escape_xml "$interface_type")</interface_type>
				<manufacturer>$(escape_xml "$manufacturer")</manufacturer>
				<model>$(escape_xml "$model")</model>
				<serial>$(escape_xml "$serial")</serial>
				<size>$(escape_xml "$size")</size>
				<device>$(escape_xml "$device_id")</device>
				<partition_count>$(escape_xml "$partitions")</partition_count>
				<status>$(escape_xml "$status")</status>
				<scsi_logical_unit>$(escape_xml "$scsi_logical_unit")</scsi_logical_unit>
			</item>
EndOfFile
	done
	echo "	</disk>" >> "$xml_file"

	if [ "$debugging" -gt 0 ]; then
		echo "Partition Info"
	fi
	echo "	<partition>" >> "$xml_file"
	for disk in $(lspv | cut -d" " -f1); do
		hard_drive_index=$(lspv "$disk" 2>/dev/null | grep 'PV IDENTIFIER:' | sed -e 's/^[ \t]*//' | sed 's/  */\ /g' | cut -d' ' -f3)
		for partition in $(lspv -l "$disk" 2>/dev/null | cut -d' ' -f1 | grep -v 'LV' | grep -v "$disk"); do
				mount_point=$(lspv -p "$disk" 2>/dev/null | grep "$partition" | sed -e 's/^[ \t]*//' | sed 's/  */\ /g' | sed 's/inner /inner/' | sed 's/outer /outer/' | cut -d' ' -f6 | head -1)
				format=$(lspv -p "$disk" 2>/dev/null | grep "$partition" | sed -e 's/^[ \t]*//' | sed 's/  */\ /g' | sed 's/inner /inner/' | sed 's/outer /outer/' | cut -d' ' -f5 | head -1)
				size=$(getconf DISK_SIZE /dev/"$partition" 2>/dev/null)
				used=$(df -mP 2>/dev/null | grep "/dev/$partition " | sed 's/  */\ /g' | cut -d" " -f3)
				free=$(df -mP 2>/dev/null | grep "/dev/$partition " | sed 's/  */\ /g' | cut -d" " -f4)
				cat >>"$xml_file" <<EndOfFile
			<item>
				<serial></serial>
				<name>$(escape_xml "$partition")</name>
				<description>$(escape_xml "$mount_point")</description>
				<device></device>
				<hard_drive_index>$(escape_xml "$hard_drive_index")</hard_drive_index>
				<partition_disk_index></partition_disk_index>
				<mount_type>partition</mount_type>
				<mount_point>$(escape_xml "$mount_point")</mount_point>
				<size>$(escape_xml "$size")</size>
				<free>$(escape_xml "$free")</free>
				<used>$(escape_xml "$used")</used>
				<format>$(escape_xml "$format")</format>
				<bootable></bootable>
				<type>local</type>
			</item>
EndOfFile
		done
	done
	echo "	</partition>" >> "$xml_file"
fi


if [ "$debugging" -gt 0 ]; then
	echo "Network Card Info"
fi
echo "	<network>" >> "$xml_file"
for interface in $(nwmgr 2>/dev/null | grep -v "^Name/" | grep -v "^ClassInstance" | grep -v "======" | grep -v "^$" | grep -v "0x000000000000"); do
	mac=$(echo "$interface" | awk '{ print $3 }' | cut -dx -f2 | sed -e 's/\([0-9A-Fa-f]\{2\}\)/\1:/g' -e 's/\(.*\):$/\1/' | tr "[:upper:]" "[:lower:]")
	manufacturer="HP"
	model=$(echo "$interface" | awk '{ print $5 }')
	description=$(echo "$interface" | awk '{ print $1 }')
	net_alias="$description"
	ip_enabled=$(echo "$interface" | awk '{ print $2 }')
	net_index=""
	connection="$interface"
	connection_status="$ip_enabled"
	dhcp_enabled="False"
	net_type=$(echo "$interface" | awk '{ print $4 }')
	if [ "$model" = "1000Base-T" ]; then
		speed="1000000000"
	else
		speed=""
	fi
	cat >>"$xml_file" <<EndOfFile
		<item>
			<mac>$(escape_xml "$mac")</mac>
			<manufacturer>$(escape_xml "$manufacturer")</manufacturer>
			<model>$(escape_xml "$model")</model>
			<description>$(escape_xml "$description")</description>
			<ip_enabled>$(escape_xml "$ip_enabled")</ip_enabled>
			<connection>$(escape_xml "$connection")</connection>
			<connection_status>$(escape_xml "$connection_status")</connection_status>
			<dhcp_enabled>False</dhcp_enabled>
			<speed>$(escape_xml "$speed")</speed>
		</item>
EndOfFile

done
echo "	</network>" >> "$xml_file"

if [ "$debugging" -gt 0 ]; then
	echo "IP Info"
fi
echo "	<ip>" >> "$xml_file"
for interface in $(nwmgr 2>/dev/null | grep "iether"); do
	ip_interface=$(echo "$interface" | awk '{ print $1 }')
	mac=$(echo "$interface" | awk '{ print $3 }' | cut -dx -f2 | sed -e 's/\([0-9A-Fa-f]\{2\}\)/\1:/g' -e 's/\(.*\):$/\1/' | tr "[:upper:]" "[:lower:]")
	ip=$(ifconfig "$ip_interface" 2>/dev/null | grep inet | awk '{ print $2 }')
	netmask=$(ifconfig "$ip_interface" 2>/dev/null | grep inet | awk '{ print $4 }')
	netmask=$(echo "$netmask" |  sed 's/^0x//g;s/\(..\)/\1\,/g;s/,$//g;' | tr ',' '\n' | while read w; do printf ".%d" 0x"$w"; done | sed -e 's/^\.//')
	cat >>"$xml_file" <<EndOfFile
		<item>
			<mac>$(escape_xml "$mac")</mac>
			<ip>$(escape_xml "$ip")</ip>
			<netmask>$(escape_xml "$netmask")</netmask>
			<version>4</version>
		</item>
EndOfFile
done
echo "	</ip>" >> "$xml_file"

if [ "$debugging" -gt 0 ]; then
	echo "User Info"
fi
echo "	<user>" >> "$xml_file"
for username in $(listusers -r local 2>/dev/null); do
	user_name=$(echo "$username" | awk '{print $1}')
	full_name=$(echo "$username")
	caption=$(echo "$username" | awk '{$1=""; print $0}')
	cat >>"$xml_file" <<EndOfFile
		<item>
			<name>$(escape_xml "$user_name")</name>
			<full_name>$(escape_xml "$full_name")</full_name>
			<caption>$(escape_xml "$caption")</caption>
			<type>local</type>
		</item>
EndOfFile
done
echo "	</user>" >> "$xml_file"



if [ "$debugging" -gt 0 ]; then
	echo "Software Info"
fi
echo "	<software>" >> "$xml_file"
# include OS in software
cat >>"$xml_file" <<EndOfFile
		<item>
			<name>$(escape_xml "$os_name")</name>
			<version>$(escape_xml "$os_version")</version>
			<description>Operating System</description>
			<publisher>Hewlett-Packard</publisher>
		</item>
EndOfFile
for software in $(swlist -l product 2>/dev/null | grep -v "^$" | grep -v "^#"); do
		name=$(echo "$software" | awk '{print $1}')
		version=$(echo "$software" | awk '{print $2}')
		description=$(echo "$software" | awk '{$1=$2=""; print $0}')
		cat >>"$xml_file" <<EndOfFile
		<item>
			<name>$(escape_xml "$name")</name>
			<version>$(escape_xml "$version")</version>
			<description>$(escape_xml "$description")</description>
		</item>
EndOfFile
	#fi
done
echo "	</software>" >> "$xml_file"
echo "</system>" >> "$xml_file"

if [ "$submit_online" = "y" ]; then
	echo "As HP-UX has no cURL or wget, we cannot auto-submit this to the server."
	echo "Please ensure you use submit_online=n and create_file=y to generate an XML file"
fi

if [ "$create_file" != "y" ]; then
	rm -f "$xml_file"
fi

if [ "$debugging" -gt 0 ]; then
	echo "Audit Completed"
fi

# put globbing back to how it was
unset IFS
set +f