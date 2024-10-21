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
submit_online="y"

# the address of the Open-AudIT server "submit" page
url="http://localhost/open-audit/index.php/input/devices"

# 0 = no debug
# 1 = basic debug
# 2 = verbose debug
# 3 = verbose debug and no safety
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
	VAR=$(echo $arg | cut -d'=' -f1)
	VAL=$(echo $arg | cut -d'=' -f2)
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

if [[ "$debugging" -eq 3 ]]; then
	safety=""
else
	# set the below to "" to show any errors
	safety=" 2>/dev/null "
fi

if [[ $help = "y" ]]; then
	echo ""
	echo "----------------------------"
	echo "Open-AudIT AIX audit script"
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
	echo "     1 - Minimal Output (headings only)."
	echo "     2 - Verbose output (headings and timings)."
	echo "    *3 - Verbose output and the safety switch removed. If a command fails, you will see the error message and the script may halt."
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
	echo ""
	echo "  url"
	echo "    *http://localhost/index.php/system/add_system - The http url of the Open-AudIT Server used to submit the result to."
	echo ""
	echo ""
	echo "NOTE - The netstat section can take a few minutes to complete."
	echo ""
	echo "The name of the resulting XML file will be in the format HOSTNAME-YYMMDDHHIISS.xml, as in the hostname of the machine the the complete timestamp the audit was started."
	exit
fi

if [[ $version = "y" ]]; then
	echo ""
	echo "----------------------------"
	echo "Open-AudIT AIX audit script"
	echo "(c) Firstwave, 2022."
	echo "----------------------------"
	echo "Version: $version"
fi

pwd=$(pwd)

# turn off globbing across line breaks
set -f 
IFS='
'  



function escape_xml {
	# escape characters
	result="$1"
	if [[ "$result" == *"&"* ]] || [[ "$result" == *"<"* ]] || [[ "$result" == *">"* ]] || [[ "$result" == *"\""* ]] || [[ "$result" == *"'"* ]]; then
		result="<![CDATA[$result]]>"
	fi
	# Trim leading/trailing spaces
	#result=$(echo "$result" | sed 's/ +$//')
	result=${result## }
	result=${result%% }
	echo "$result"
}

function timeout {
	typeset timeout=$1
	shift
	"$@" & # command which might hang
	typeset cmd_pid=$!
	sleep "$timeout" && kill -TERM "$cmd_pid" 2>/dev/null &
	typeset sleep_pid=$!
	wait "$cmd_pid" 2>/dev/null
	typeset rc=$?
	kill "$sleep_pid" 2>/dev/null
	return $rc # will be non-zero if command was timed out
}



system_timestamp=$(eval "date +\"%Y-%m-%d %T\" $safety")
system_hostname=$(eval "uname -n $safety")
xml_file="$system_hostname"-$(date +%Y%m%d%H%M%S).xml
xml_file_full_path=`pwd`"/$xml_file"

if [[ "$debugging" -gt 0 ]]; then
	echo "----------------------------"
	echo "Open-AudIT AIX audit script"
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

START="$SECONDS"
if [[ "$debugging" -gt 0 ]]; then print -n "System Details      "; fi

system_uuid=$(eval "uname -m $safety")
system_domain=$(eval "lsconf | grep \"Domain Name:\" | cut -d\" \" -f3 $safety")

i=$(uname -s)
j=$(uname -v)
k=$(uname -r)

system_os_name="$i $j.$k"
system_os_version=$(eval "oslevel -r $safety")
system_serial=$(eval "odmget CuAt | grep -p systemid | grep value | cut -d'\"' -f2 | cut -d, -f2 $safety")
system_model=$(eval "uname -M | sed 's/IBM,//' $safety")
system_uptime=""
system_pc_os_bit=$(eval "bootinfo -K $safety")
system_pc_memory=$(eval "bootinfo -r $safety")

i_processor=$(eval "lscfg -vp | grep -c WAY $safety")
j_processor=$(eval "lscfg -vp | grep WAY | head -1 | sed 's/  //g' | cut -d- -f1 $safety")
if [[ $i_processor = "0" ]]; then
	i_processor="1"
	j_processor=$(lscfg -vp | grep -c "  proc")
fi
let "system_pc_num_processor = i_processor * j_processor"

#ls -l /etc/3270.keys | read L1 L2 L3 L4 L5 L6 L7 L8 L9
#system_pc_date_os_installation="$L7 $L6 $L8"
i_day=$(eval "ls -l /etc/3270.keys | sed -e 's/^[ \t]*//' | sed 's/  */\ /g' | cut -d\" \" -f7 $safety")
i_month=$(eval "ls -l /etc/3270.keys | sed -e 's/^[ \t]*//' | sed 's/  */\ /g' | cut -d\" \" -f6 $safety")
i_year=$(eval "ls -l /etc/3270.keys | sed -e 's/^[ \t]*//' | sed 's/  */\ /g' | cut -d\" \" -f8 $safety")
system_pc_date_os_installation="$i_day $i_month $i_year"

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
		<icon>aix</icon>
		<os_group>Unix</os_group>
		<os_family>IBM AIX</os_family>
		<os_name>$(escape_xml "$system_os_name")</os_name>
		<os_version>$(escape_xml "$system_os_version")</os_version>
		<serial>$(escape_xml "$system_serial")</serial>
		<model>$(escape_xml "$system_model")</model>
		<manufacturer>IBM</manufacturer>
		<uptime>$(escape_xml "$system_uptime")</uptime>
		<form_factor></form_factor>
		<os_bit>$(escape_xml "$system_pc_os_bit")</os_bit>
		<memory_count>$(escape_xml "$system_pc_memory")</memory_count>
		<processor_count>$(escape_xml "$system_pc_num_processor")</processor_count>
		<os_installation_date>$(escape_xml "$system_pc_date_os_installation")</os_installation_date>
		<org_id>$(escape_xml "$org_id")</org_id>
		<class>server</class>
		<id>$(escape_xml "$system_id")</id>
		<last_seen_by>$(escape_xml "$last_seen_by")</last_seen_by>
		<discovery_id>$(escape_xml "$discovery_id")</discovery_id>
	</sys>
EndOfFile
FINISH=$((SECONDS-START))
if [[ "$debugging" -gt 1 ]]; then echo " took $FINISH seconds"; else echo " "; fi


START="$SECONDS"
if [[ "$debugging" -gt 0 ]]; then print -n "Processor Details   "; fi
processor_speed=$(eval "pmcycles | sed 's/This machine runs at //g' $safety")
processor_socket=$(eval "lsconf | grep 'Processor Type:' | cut -d: -f2 | sed -e 's/^[ \t]*//' $safety")
processor_description="$i_processor physical $processor_socket processors at $processor_speed with $j_processor cores each"
processor_manufacturer="IBM"
processor_power_management_supported=""
cat >>"$xml_file" <<EndOfFile
	<processor>
		<item>
			<physical_count>$(escape_xml "$i_processor")</physical_count>
			<core_count>$(escape_xml "$j_processor")</core_count>
			<logical_count>$(escape_xml "$system_pc_num_processor")</logical_count>
			<socket>$(escape_xml "$processor_socket")</socket>
			<description>$(escape_xml "$processor_description")</description>
			<speed>$(escape_xml "$processor_speed")</speed>
			<manufacturer>$(escape_xml "$processor_manufacturer")</manufacturer>
		</item>
	</processor>
EndOfFile
FINISH=$((SECONDS-START))
if [[ "$debugging" -gt 1 ]]; then echo " took $FINISH seconds"; else echo " "; fi




START="$SECONDS"
if [[ "$debugging" -gt 0 ]]; then print -n "Disk Details        "; fi
echo "	<disk>" >> "$xml_file"
for disk in $(lspv | cut -d" " -f1); do
	hard_drive_caption="$disk"
	hard_drive_index=$(eval "lspv $disk | grep 'PV IDENTIFIER:' | sed -e 's/^[ \t]*//' | sed 's/  */\ /g' | cut -d' ' -f3 $safety")
	hard_drive_interface_type=""
	hard_drive_manufacturer=""
	hard_drive_model=""
	hard_drive_serial=""
	hard_drive_size=$(eval "getconf DISK_SIZE /dev/$disk $safety")
	hard_drive_device_id=""
	hard_drive_partitions=""
	hard_drive_status=""
	hard_drive_scsi_logical_unit=""
	cat >>"$xml_file" <<EndOfFile
		<item>
			<caption>$(escape_xml "$hard_drive_caption")</caption>
			<hard_drive_index>$(escape_xml "$hard_drive_index")</hard_drive_index>
			<interface_type>$(escape_xml "$hard_drive_interface_type")</interface_type>
			<manufacturer>$(escape_xml "$hard_drive_manufacturer")</manufacturer>
			<model>$(escape_xml "$hard_drive_model")</model>
			<serial>$(escape_xml "$hard_drive_serial")</serial>
			<size>$(escape_xml "$hard_drive_size")</size>
			<device>$(escape_xml "$hard_drive_device_id")</device>
			<partition_count>$(escape_xml "$hard_drive_partitions")</partition_count>
			<status>$(escape_xml "$hard_drive_status")</status>
			<scsi_logical_unit>$(escape_xml "$hard_drive_scsi_logical_unit")</scsi_logical_unit>
		</item>
EndOfFile
done
echo "	</disk>" >> "$xml_file"
FINISH=$((SECONDS-START))
if [[ "$debugging" -gt 1 ]]; then echo " took $FINISH seconds"; else echo " "; fi




START="$SECONDS"
if [[ "$debugging" -gt 0 ]]; then print -n "Partition Details   "; fi
echo "	<partition>" >> "$xml_file"
for disk in $(lspv | cut -d" " -f1); do
	hard_drive_index=$(eval "lspv $disk | grep 'PV IDENTIFIER:' | sed -e 's/^[ \t]*//' | sed 's/  */\ /g' | cut -d' ' -f3 $safety")
	for partition in $(eval "lspv -l $disk | cut -d' ' -f1 | grep -v 'LV' | grep -v '$disk' $safety"); do

			partition_mount_point=$(eval "lspv -p $disk | grep '$partition' | sed -e 's/^[ \t]*//' | sed 's/  */\ /g' | sed 's/inner /inner/' | sed 's/outer /outer/' | cut -d' ' -f6 | head -1 $safety")

			partition_format=$(eval "lspv -p $disk | grep '$partition' | sed -e 's/^[ \t]*//' | sed 's/  */\ /g' | sed 's/inner /inner/' | sed 's/outer /outer/' | cut -d' ' -f5 | head -1 $safety")

			partition_size=$(eval "getconf DISK_SIZE /dev/$partition $safety")
			partition_used_space=$(eval "df -mP | grep '/dev/$partition ' | sed 's/  */\ /g' | cut -d' ' -f3 $safety")
			partition_free_space=$(eval "df -mP | grep '/dev/$partition ' | sed 's/  */\ /g' | cut -d' ' -f4 $safety")
			cat >>"$xml_file" <<EndOfFile
		<item>
			<serial></serial>
			<name></name>
			<description>$(escape_xml "$partition")</description>
			<device></device>
			<hard_drive_index>$(escape_xml "$hard_drive_index")</hard_drive_index>
			<partition_disk_index></partition_disk_index>
			<mount_type>partition</mount_type>
			<mount_point>$(escape_xml "$partition_mount_point")</mount_point>
			<size>$(escape_xml "$partition_size")</size>
			<free>$(escape_xml "$partition_free_space")</free>
			<used>$(escape_xml "$partition_used_space")</used>
			<format>$(escape_xml "$partition_format")</format>
			<bootable></bootable>
			<type>local</type>
		</item>
EndOfFile
	done
done
echo "	</partition>" >> "$xml_file"
FINISH=$((SECONDS-START))
if [[ "$debugging" -gt 1 ]]; then echo " took $FINISH seconds"; else echo " "; fi




START="$SECONDS"
if [[ "$debugging" -gt 0 ]]; then print -n "Network Card Details"; fi
echo "	<network>" >> "$xml_file"
for interface in $(eval "lsdev -Cc if | grep Available | grep 'Standard Ethernet' | cut -d' ' -f1 $safety"); do
	net_card_mac=$(eval "entstat $interface | grep 'Hardware Address:' | cut -d' ' -f3 $safety")
	net_card_manufacturer="IBM"
	net_card_description="$interface"
	net_card_enabled="True"
	net_card_id="$interface"
	net_card_status="Connected"
	net_dhcp_enabled="False"
	net_card_speed=$(eval "lsattr -El en10 -a media_speed $safety")
	count="0"
	for i in $(eval "entstat -d $interface $safety"); do
		if [[ $count = "1" ]]; then
			net_card_model="$i"
		fi
		if [[ $i = "ETHERNET STATISTICS ($interface) :" ]]; then
			count="1"
		else
			count="0"
		fi
	done
	net_card_model=$(eval "echo \"$net_card_model\" | cut -d' ' -f3 $safety")
	cat >>"$xml_file" <<EndOfFile
		<item>
			<mac>$(escape_xml "$net_card_mac")</mac>
			<manufacturer>$(escape_xml "$net_card_manufacturer")</manufacturer>
			<model>$(escape_xml "$net_card_model")</model>
			<description>$(escape_xml "$net_card_description")</description>
			<ip_enabled>$(escape_xml "$net_card_enabled")</ip_enabled>
			<connection>$(escape_xml "$net_card_id")</connection>
			<connection_status>$(escape_xml "$net_card_status")</connection_status>
			<speed>$(escape_xml "$net_card_speed")</speed>
			<dhcp_enabled>$(escape_xml "$net_dhcp_enabled")</dhcp_enabled>
			<dns_host_name>$(escape_xml "$system_hostname")</dns_host_name>
			<dns_domain>$(escape_xml "$system_domain")</dns_domain>
		</item>
EndOfFile

done
echo "	</network>" >> "$xml_file"
FINISH=$((SECONDS-START))
if [[ "$debugging" -gt 1 ]]; then echo " took $FINISH seconds"; else echo " "; fi




START="$SECONDS"
if [[ "$debugging" -gt 0 ]]; then print -n "IP Details          "; fi
echo "	<ip>" >> "$xml_file"
for interface in $(eval "lsdev -Cc if | grep Available | grep 'Standard Ethernet' | cut -d' ' -f1 $safety"); do
	net_card_enabled_ip4_addr=$(eval "ifconfig $interface | grep inet | cut -d' ' -f2 $safety")
	net_card_enabled_ip_subnet=$(eval "ifconfig $interface | grep inet | cut -d' ' -f4 $safety")
	net_card_enabled_ip_subnet=$(echo "$net_card_enabled_ip_subnet" |  sed 's/^0x//g;s/\(..\)/\1\,/g;s/,$//g;' | tr ',' '\n' | while read w; do printf ".%d" 0x"$w"; done | sed -e 's/^\.//')
	net_card_mac=$(eval "entstat $interface | grep 'Hardware Address:' | cut -d' ' -f3 $safety")
	cat >>"$xml_file" <<EndOfFile
		<item>
				<mac>$(escape_xml "$net_card_mac")</mac>
				<ip>$(escape_xml "$net_card_enabled_ip4_addr")</ip>
				<netmask>$(escape_xml "$net_card_enabled_ip_subnet")</netmask>
				<version>4</version>
			</item>
EndOfFile

done
echo "	</ip>" >> "$xml_file"
FINISH=$((SECONDS-START))
if [[ "$debugging" -gt 1 ]]; then echo " took $FINISH seconds"; else echo " "; fi




START="$SECONDS"
if [[ "$debugging" -gt 0 ]]; then print -n "User Details        "; fi
echo "	<user>" >> "$xml_file"
for username in $(eval "lsuser -a ALL $safety"); do
	user_name="$username"
	user_sid=$(eval "lsuser -f -a id $username | grep id | cut -d= -f2 $safety")
	user_full_name=$(eval "lsuser -f -a gecos $username | grep gecos | cut -d= -f2 $safety")
	user_disabled=$(eval "lsuser -f -a account_locked $username | grep account_locked | cut -d= -f2 $safety")
	cat >>"$xml_file" <<EndOfFile
		<item>
			<name>$(escape_xml "$user_name")</name>
			<sid>$(escape_xml "$user_sid")</sid>
			<full_name>$(escape_xml "$user_full_name")</full_name>
			<disabled>$(escape_xml "$user_disabled")</disabled>
			<type>local</type>
		</item>
EndOfFile
done
echo "	</user>" >> "$xml_file"
FINISH=$((SECONDS-START))
if [[ "$debugging" -gt 1 ]]; then echo " took $FINISH seconds"; else echo " "; fi


START="$SECONDS"
if [[ "$debugging" -gt 0 ]]; then print -n "Memory Details      "; fi
	echo "	<memory>" >> "$xml_file"
array=0
for line in $(eval "lscfg -vp | grep -p \"Memory DIMM\" $safety"); do
	if [[ "$line" == *"Memory DIMM"* ]]; then
		let "array = array + 1"
	fi
	if [[ "$line" == *"Size.."* ]]; then
		memory_size[$array]=$(echo "$line" | sed 's/ //g' | sed 's/Size//' | sed 's/\.//g')
	fi
	if [[ "$line" == *"Part Number"* ]]; then
		memory_detail[$array]=$(echo "$line" | sed 's/ //g' | sed 's/PartNumber//' | sed 's/\.//g')
		memory_detail[$array]="Part Number: ${memory_detail[$array]}"
	fi
	if [[ "$line" == *"Serial Number"* ]]; then
		memory_serial[$array]=$(echo "$line" | sed 's/ //g' | sed 's/SerialNumber//' | sed 's/\.//g')
	fi
	if [[ "$line" == *"Hardware Location Code"* ]]; then
		memory_bank[$array]=$(echo "$line" | sed 's/ //g' | sed 's/HardwareLocationCode//' | sed 's/\.\.\.\.\.\.//g')
	fi
done
i=1
while [[ $i -le $array ]];do
	cat >>"$xml_file" <<EndOfFile
		<slot>
			<bank>$(escape_xml "${memory_bank[$i]}")</bank>
			<type></type>
			<form_factor></form_factor>
			<detail>$(escape_xml "${memory_detail[$i]}")</detail>
			<capacity>$(escape_xml "${memory_size[$i]}")</capacity>
			<speed></speed>
			<tag></tag>
			<serial>$(escape_xml "${memory_serial[$i]}")</serial>
		</slot>
EndOfFile
	let "i = i + 1"
done
echo "	</memory>" >> "$xml_file"
FINISH=$((SECONDS-START))
if [[ "$debugging" -gt 1 ]]; then echo " took $FINISH seconds"; else echo " "; fi


# START="$SECONDS"
# if [[ "$debugging" -gt 0 ]]; then print -n "Netstat Details     "; fi
# print -n "	<netstat><![CDATA[" >> "$xml_file"
# for line in $(eval "netstat -Aan | grep LISTEN | awk '{print \$1 \" \" \$2 \" \" \$5}' $safety"); do 
# 	pcb=$(eval "echo \"$line\" | cut -d' ' -f1 $safety")
# 	protocol=$(eval "echo \"$line\" | cut -d' ' -f2 $safety")
# 	port=$(eval "echo \"$line\" | cut -d' ' -f3 $safety")
# 	out=$(eval "rmsock $pcb tcpcb $safety")
# 	if echo "$out" | grep "Kernel Extension" > /dev/null; then
# 		echo "$protocol $port Kernel Extension" >> "$xml_file"
# 	else
# 		pid=$(echo "$out" | sed -n 's/.*pro[c]*ess \([0-9][0-9]*\) .*/\1/p')
# 		if [ -n "$pid" ]; then
# 			netstat_process=$(ps -p "$pid" | tail -n 1 | awk '{print $4}')
# 			echo "$protocol $port $netstat_process" >> "$xml_file"
# 		fi
# 	fi
# done
# for line in $(eval "netstat -Aan | grep udp | awk '{print \$1 \" \" \$2 \" \" \$5}' $safety"); do 
# 	pcb=$(eval "echo \"$line\" | cut -d' ' -f1 $safety")
# 	protocol=$(eval "echo \"$line\" | cut -d' ' -f2 $safety")
# 	port=$(eval "echo \"$line\" | cut -d' ' -f3 $safety")
# 	if [[ $port != "*.*" ]]; then
# 		out=$(timeout 5 rmsock "$pcb" inpcb)
# 		if [[ -n "$out" ]]; then
# 			pid=$(echo "$out" | sed -n 's/.*pro[c]*ess \([0-9][0-9]*\) .*/\1/p')
# 			if [ -n "$pid" ]; then
# 				netstat_process=$(ps -p "$pid" | tail -n 1 | awk '{print $4}')
# 				echo "$protocol $port $netstat_process" >> "$xml_file"
# 			else 
# 				echo "$protocol $port unknown" >> "$xml_file" 
# 			fi
# 		fi
# 	fi
# done
# echo "]]></netstat>" >> "$xml_file"
# FINISH=$((SECONDS-START))
# if [[ "$debugging" -gt 1 ]]; then echo " took $FINISH seconds"; else echo " "; fi


START="$SECONDS"
if [[ "$debugging" -gt 0 ]]; then print -n "Software Details    "; fi
echo "	<software>" >> "$xml_file"
# include OS in software
cat >>"$xml_file" <<EndOfFile
		<item>
			<name>$(escape_xml "$system_os_name")</name>
			<version>$(escape_xml "$system_os_version")</version>
			<description>Operating System</description>
			<publisher>IBM</publisher>
		</item>
EndOfFile
for software in $(lslpp -lc -q); do
	if [[ -n "$software" ]]; then
		software=$(echo "$software" | sed 's/"//g')
		software_name=$(eval "echo \"$software\" | cut -d':' -f2 $safety")
		software_version=$(eval "echo \"$software\" | cut -d':' -f3 $safety")
		software_status=$(eval "echo \"$software\" | cut -d':' -f5 $safety")
		software_description=$(eval "echo \"$software\" | cut -d':' -f7 $safety")
		cat >>"$xml_file" <<EndOfFile
		<item>
			<name>$(escape_xml "$software_name")</name>
			<version>$(escape_xml "$software_version")</version>
			<status>$(escape_xml "$software_status")</status>
			<description>$(escape_xml "$software_description")</description>
		</item>
EndOfFile
	fi
done
echo "	</software>" >> "$xml_file"
FINISH=$((SECONDS-START))
if [[ "$debugging" -gt 1 ]]; then echo " took $FINISH seconds"; else echo " "; fi

# End of the information gathering
echo "</system>" >> "$xml_file"

if [ "$debugging" -gt 0 ]; then
	echo "Audit Generated in $SECONDS seconds."
fi

if [ "$submit_online" = "y" ]; then
	echo "Submitting results to server"
	post_result="perl -MLWP::UserAgent -MHTTP::Request::Common -e 'my \$url=\"$url\"; open(F,\"$xml_file\"); my \$result=join(\"\",<F>); close(F); my \$ua=LWP::UserAgent->new; my \$req=POST(\$url, [ data => \"\$result\" ] ); my \$response=\$ua->request(\$req); if ( \$response->is_error() ) { print \$response->status_line; }'"
	if [ "$debugging" -gt 2 ]; then
		echo "$post_result"
	fi
	eval "$post_result"
fi

if [ "$create_file" != "y" ]; then
	rm -f "$pwd"/"$xml_file"
fi

if [ "$debugging" -gt 0 ]; then
	FINISH=$(eval "date +\"%Y-%m-%d %T\" $safety")
	echo "Audit Completed in $SECONDS seconds at $FINISH."
fi

# put globbing back to how it was
unset IFS
set +f