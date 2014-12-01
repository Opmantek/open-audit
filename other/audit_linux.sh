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
# @author Mark Unwin <marku@opmantek.com> and others
# @version 1.5.2
# @copyright Copyright (c) 2014, Opmantek
# @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3

########################################################
# CREDITS                                              #
########################################################

# Timer Function Code was based on an article By Mitch Frazier
# http://www.linuxjournal.com/content/use-date-command-measure-elapsed-time
#
# Contributors to this script
# Open-AudIT forum users jpa, ihashacks, a.arenas, ginorh, RedDevils and others.
# Open-AudIT users 
#       Brandon Pierce brandon@ihashacks.com 
#       Fábio Chicout fabio.chicout@ufpe.br
#       Mark Unwin mark.unwin@gmail.com

#set -x
########################################################
# DEFINE SCRIPT PARAMETERS                             #
########################################################

# Below are the default settings

# default to localhost
strComputer="."

# submit the audit to the OAv2 server
submit_online="n"

# create an XML text file of the result in the current directory
create_file="y"

# the address of the OAv2 server "submit" page
url="http://localhost/open-audit/index.php/system/add_system"

# optional - assign any PCs audited to this Org - take the OrgId from OAv2 interface
org_id=""

# 0 = no debug
# 1 = basic debug
# 2 = verbose debug
debugging=2

# Display help
help="n"

# attempt to ping a target computer before audit?
ping_target="y"

# set by the Discovery function - do not normally set this manually
system_id=""

PATH="$PATH:/sbin:/usr/sbin"
export PATH

ORIGIFS=$IFS
IFS=$'\n';

########################################################
# DEFINE SCRIPT FUNCTIONS                              #
########################################################

timer ()
# Returns the elapsed time in seconds.
#
# usage :
#
#   start=$(timer)
#   # commands...
#   total_seconds=$(timer "$start")
#
{
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

lcase ()
# Returns the lower case version of the argument.
#
# usage :
#
#   lower_version=$(lcase "$var")
#
{
	result=$(echo "$1" | awk '{print tolower($0)}')
	echo "$result"
}

ucase ()
# Returns the upper case version of the argument.
#
# usage :
#
#   upper_version=$(ucase "$var")
#
{
	result=$(echo "$1" | awk '{print toupper($0)}')
	echo "$result"
}

pcase ()
# Returns the propper case version of the argument.
#
# usage :
#
#   proper_version=$(pcase "$var")
#
{
	result=$(lcase "$1" |  awk '{ for ( i=1; i <= NF; i++) {   sub(".", substr(toupper($i),1,1) , $i) } print }')
	echo "$result"
}

trim ()
# Remove the leading/trailing spaces from the argument.
#
# usage :
#
#   trimmed_version=$(trim "$var")
#
{
	result=$(echo "$1" | sed 's/^ *//g' | sed 's/ *$//g')
	echo "$result"
}

escape_xml ()
# If a special character exists in the string, escape the XML.
#
# usage :
#
#   xml_version=$(escape_xml "$var")
#
{
	# escape characters 
	result="$1"
	if echo "$result" | grep -Eq -e '[&<>"]' -e "'"; then
		result="<![CDATA[$result]]>"
	fi

	# Trim leading/trailing spaces
	result=$(trim "$result")
	echo "$result"
}

cidr2mask () 
{
  local i mask=""
  local full_octets=$(($1/8))
  local partial_octet=$(($1%8))
  for ((i=0;i<4;i+=1)); do
    if [ $i -lt $full_octets ]; then
      mask+=255
    elif [ $i -eq $full_octets ]; then
      mask+=$((256 - 2**(8-partial_octet)))
    else
      mask+=0
    fi  
    test $i -lt 3 && mask+=.
  done
  echo "$mask"
}

between_output ()
{
# usage :
#
#   test=$(between "command" "delimiter" "match" "variable")
#
	command="$1"
	delimiter="$2"
	match="$3"
	variable="$4"

	# first get all lines between $start and $end (inclusive)
	for line in $(eval $command); do
		if [[ "$line" == *"$delimiter"* ]]; then
			if [[ -n "$resultgroup" ]]; then
				# resultgroup contains data, test it
				if [[ $(echo -e "$resultgroup" | grep "$match" -c ) -ne 0 ]]; then
					# our match is contained within the resultgroup
					result=$(echo -e "$resultgroup" | grep "vendor:")					
					break
				fi
				resultgroup=""
			else
				# resultgroup doesn't contain data, start anew
				resultgroup="$line"
			fi
		else
			# not a delimiter, so add to the result group
			resultgroup=$(echo -e "$resultgroup\n$line")
		fi
	done

	# check a last time as we may not have a final delimiter
	if [[ $(echo -e "$resultgroup" | grep "$match" -c ) -ne 0 ]]; then
		# our match is contained within the resultgroup
		result=$(echo -e "$resultgroup" | grep "vendor:")
	fi

	echo "$result"
}

########################################################
# PROCESS COMMAND-LINE PARAMETERS                      #
########################################################

# Below we take any command line arguements
# to override the variables above, simply include them on the command line like submit_online=n
# NOTE - argurments are case sensitive

for arg in "$@"; do
	parameter=$(echo "$arg" | cut -d= -f1)
	parameter=$(lcase "$parameter")
	parameter=$(trim "$parameter")

	parameter_value=$(echo "$arg" | cut -d= -f2)
	parameter_value=$(trim "$parameter_value")

	case "$parameter" in
		"create_file" )
			create_file="$parameter_value" ;;
		"debugging" )
			debugging="$parameter_value" ;;
		"help" )
			help="$parameter_value" ;;
		"--help" )
			help="y" ;;
		"-h" )
			help="y" ;;
		"org_id" )
			org_id="$parameter_value" ;;
		"ping_target" )
			ping_target="$parameter_value" ;;
		"strcomputer" )
			strComputer="$parameter_value" ;;
		"submit_online" )
			submit_online="$parameter_value" ;;
		"system_id" )
			system_id="$parameter_value" ;;
		"url" )
			url="$parameter_value" ;;
		"$parameter_value" )
			strComputer="$parameter_value" ;;
	esac
done

if [ "$help" = "y" ]; then
	echo ""
	echo "-----------------------------"
	echo "Open-AudIT Linux Audit script"
	echo "-----------------------------"
	echo "This script should be run on a Linux based computer using root or sudo access rights."
	echo ""
	echo "Prerequisites for this script to function correctly can be tested by running audit_linux.sh check_commands=y."
	echo ""
	echo "Valid command line options are below (items containing * are the defaults) and should take the format name=value (eg: debugging=1)."
	echo ""
	echo "  check_commands"
	echo "     y - Run a test to determine if the required commands to run this script are present on the target system."
	echo "    *n - Do not run the test."
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
	echo "NOTE - The netstat section can take a few minutes to complete."
	echo ""
	echo "The name of the resulting XML file will be in the format HOSTNAME-YYMMDDHHIISS.xml, as in the hostname of the machine the the complete timestamp the audit was started."
	exit
fi


# test pinging the server hosting the URL
if [ "$submit_online" = "y" ]; then
	server=$(echo "$url" | cut -d"/" -f3 | cut -d: -f1)
	test=$(ping "$server" -n -c 3 | grep "100% packet loss")
	if [ -n "$test" ]; then
		if [  "$debugging" -gt 0 ]; then
			echo "Server $server is not responding to a ping. Cannot submit audit result. Exiting."
		fi
		exit
	fi
fi

########################################################
# CREATE THE AUDIT FILE                                #
########################################################


start_time=$(timer)

if [ "$debugging" -gt 0 ]; then
	echo "Starting audit - $strComputer"
fi

pc_alive=0
if [ "$ping_target" = "y" ]; then
	if [ "$strComputer" = "." ]; then
		pc_alive=1
	else
		ping_result=$(ping -c1 "$strComputer" 2>/dev/null | grep "time")
		if [ "$ping_result" != "" ]; then
			pc_alive=1
		fi
	fi
fi

if [ "$debugging" -gt 0 ]; then
	if [ "$ping_target" = "n" ]; then
		echo "Not pinging target, attempting to audit."
	else
		if [ "$pc_alive" = "1" ]; then
			echo "PC $strComputer responding to ping"
		else
			echo "PC $strComputer not responding to ping"
		fi
	fi
fi

local_hostname=""
if [ -f /etc/hostname ]; then
	local_hostname=$(cat /etc/hostname 2>/dev/null)
else
	local_hostname=$(hostname -s 2>/dev/null)
fi

if [ -z "$local_hostname" ]; then
	local_hostname=$(hostname 2>/dev/null)
fi

if [ "$strComputer" = "." ] || \
   [ "$strComputer" = "127.0.0.1" ] || \
   [ "$(lcase "$strComputer")" = "$(lcase "$local_hostname")" ]; then
	audit_location="local"
else
	audit_location="remote"
fi

# Set the TimeSamp
system_timestamp=$(date +'%F %T')

# Get the script name
#sScriptName=$(echo "$0" | rev | cut -d/ -f1 | rev)

# Set the Process ID
nPID="$BASHPID"

if [ "$debugging" -gt 0 ]; then 
	echo "My PID is : $nPID"
	echo "Audit Start Time : $system_timestamp"
	echo "Audit Location: $audit_location" 
	echo "-------------------" 
fi

#========================
#  SYSTEM INFO          #
#========================

if [ "$debugging" -gt "0" ]; then
	echo "System Info"
fi

# Set the UUID
system_uuid=""
system_uuid=$(dmidecode -s system-uuid 2>/dev/null)
if [ -z "$system_uuid" ] && [[ -n $(which lshal 2>/dev/null) ]]; then
	system_uuid=$(lshal | grep "system.hardware.uuid" | cut -d\' -f2)
fi
if [ -z "$system_uuid" ]; then
	system_uuid=$(cat /sys/class/dmi/id/product_uuid 2>/dev/null)
fi

# Get the hostname & DNS domain
system_hostname=""
if [ -f /etc/hostname ]; then
	system_hostname=$(cat /etc/hostname 2>/dev/null)
else
	system_hostname=$(hostname -s 2>/dev/null)
fi

if [ -z "$system_hostname" ]; then
	system_hostname=$(hostname 2>/dev/null)
	system_domain=""
else
	system_domain=$(hostname -d 2>/dev/null)
fi 

system_ip_address=$(ip addr | grep 'state UP' -A2 | grep inet | awk '{print $2}' | cut -f1  -d'/' | head -n 1)

# Get System Family (Distro Name) and the OS Name
# Debian and Ubuntu will match on the below
#system_description=""
system_type="computer"
system_os_group="Linux"
system_os_family=$(lsb_release -is 2>/dev/null | tr -d '"')
system_os_name=$(lsb_release -ds 2>/dev/null | tr -d '"')
system_os_version=$(lsb_release -rs 2>/dev/null | tr -d '"')

for system_release_file in /etc/*[_-]version /etc/*[_-]release; do

	[ -f "$system_release_file" ] || continue;
	[ "$system_release_file" = "/etc/os-release" ] && continue;

	if [ -z "$system_os_name" ]; then
		system_os_name=$(cat "$system_release_file")
	fi

	# Suse Based
	if echo "$system_os_name" | grep -Fqi "Suse" ; then
		if [ -z "$system_os_family" ]; then
			system_os_family="Suse"
		fi
		break;
	fi

	# CentOS based - must come before RedHat based
	if [ "$system_release_file" = "/etc/centos-release" ]; then
		if [ -z "$system_os_family" ]; then
			system_os_family="CentOS";
			system_os_version=$(grep -o '[0-9]\.[0-9]' "$system_release_file" 2>/dev/null)
			if [ -z "$system_os_version" ]; then
				system_os_version=$(grep -o '[0-9].' "$system_release_file" 2>/dev/null)
			fi
		fi
		break;
	fi

	# RedHat based
	if [ "$system_release_file" = "/etc/redhat-release" ]; then
		if [[ "$(cat "$system_release_file")" == *"Red Hat"* ]]; then
			system_os_family="RedHat"
		fi
		if [[ "$(cat "$system_release_file")" == *"CentOS"* ]]; then
			system_os_family="CentOS"
		fi
		if [[ "$(cat "$system_release_file")" == *"Fedora"* ]]; then
			system_os_family="Fedora"
		fi
		if [ -z "$system_os_version" ]; then
			system_os_version=$(grep -o '[0-9]\.[0-9]' "$system_release_file" 2>/dev/null)
			if [ -z "$system_os_version" ]; then
				system_os_version=$(grep -o '[0-9].' "$system_release_file" 2>/dev/null)
			fi
		fi
		break;
	fi
done

# Set the icon as the lower case version of the System Family.
system_os_icon=$(lcase $system_os_family)

# Get the System Serial Number
system_serial=""
system_serial=$(dmidecode -s system-serial-number 2>/dev/null)
if [ -z "$system_serial" ]; then
	if [[ -n $(which lshal 2>/dev/null) ]]; then
		system_serial=$(lshal | grep "system.hardware.serial" | cut -d\' -f2)
	fi
fi
if [ -z "$system_serial" ]; then
	system_serial=$(cat /sys/class/dmi/id/product_serial 2>/dev/null)
fi

# Get the System Model
system_model=""
system_model=$(dmidecode -s system-product-name 2>/dev/null)
if [ -z "$system_model" ] && [[ -n $(which lshal 2>/dev/null) ]]; then
	system_model=$(lshal | grep "system.hardware.product" | cut -d\' -f2)
fi
if [ -z "$system_model" ]; then
	system_model=$(cat /sys/devices/virtual/dmi/id/product_name 2>/dev/null)
fi

# Get the System Manufacturer
system_manufacturer=""
system_manufacturer=$(dmidecode -s system-manufacturer 2>/dev/null)
if [ -z "$system_manufacturer" ]; then
	if [[ -n $(which lshal 2>/dev/null) ]]; then
		system_manufacturer=$(lshal | grep "system.hardware.vendor" | cut -d\' -f2)
	fi
fi
if [ -z "$system_manufacturer" ]; then
	system_manufacturer=$(cat /sys/devices/virtual/dmi/id/sys_vendor 2>/dev/null)
fi

# A few specific checks below here
if [ -z "$system_model" ] && [[ -e "/proc/user_beancounters" ]] && [[ "$(cat /proc/1/status 2>/dev/null | grep "^envID:" | cut -d: -f2 | awk '{print $1}')" != "1" ]]; then
	# Test for an OpenVZ guest
	system_model="OpenVZ"
	system_manufacturer="OpenVZ"
fi
if [ -z "$system_model" ] && [[ "$(dmidecode | egrep -i 'manufacturer')" == *"Microsoft"* ]]; then
	# test for a Microsoft virtual machine
	system_model="Virtual Machine"
	system_manufacturer="Microsoft"
fi

# Get the System Uptime
system_uptime=$(cut -d. -f1 < /proc/uptime)

# Get the System Form factor
system_form_factor=""
if [ "$system_model" = "Bochs" -o "$system_model" = "KVM" -o "$system_model" = "Virtual Machine" -o "$system_model" = "VMware Virtual Platform" -o "$system_model" = "OpenVZ" -o "$system_model" = "VirtualBox" ]; then
	system_form_factor="Virtual"
else
	system_form_factor=$(dmidecode -s chassis-type 2>/dev/null)
	if [ "$system_form_factor" = "<OUT OF SPEC>" ]; then
		system_form_factor="Unknown"
	fi
	system_form_factor=$(pcase $system_form_factor)
fi
if [ -z "$system_form_factor" ]; then
	if [[ -n $(which lshal 2>/dev/null) ]]; then
		system_form_factor=$(lshal | grep "system.chassis.type" | cut -d\' -f2)
	fi
fi

# Get OS bits
system_pc_os_bit=$(uname -m | grep 64 | cut -d_ -f2)
if [ -z "$system_pc_os_bit" ]; then
	system_pc_os_bit=$(uname -i | grep 64 | cut -d_ -f2)
fi
if [ -z "$system_pc_os_bit" ]; then
	system_pc_os_bit=32
fi

# Get the System Memory
system_pc_memory=$(grep MemTotal /proc/meminfo | cut -d: -f2 | cut -dk -f1)
system_pc_memory=$(trim "$system_pc_memory")

# Get the Number of Physical Processors
# 
#	Each Physical Processor have one or more Processor Cores.
#	Each Processor Core have one or more Threads
#	Each thread appears as one active processor to the OS
# EX:	
#   Two Dual Core Processors with Hyper-Threading enabled will show :
#	system_pc_total_threads=8
# 	system_pc_threads_x_processor=4
#	system_pc_cores_x_processor=2
#     
#	Two Dual Core Processors with Hyper-Threading disabled will show :
# 	system_pc_total_threads=4
# 	system_pc_threads_x_processor=2
#	system_pc_cores_x_processor=2
#     
#	One Quad Core Processor with Hyper-Threading disabled will show :
#	system_pc_total_threads=4
# 	system_pc_threads_x_processor=4
#	system_pc_cores_x_processor=4
#
#   system_pc_physical_processors = system_pc_total_threads / system_pc_threads_x_processor
#
system_pc_total_threads=$(grep -c processor /proc/cpuinfo)
system_pc_cores_x_processor=$(grep cores /proc/cpuinfo | head -n1 | cut -d: -f2)
system_pc_cores_x_processor=$(trim "$system_pc_cores_x_processor")

if [ -z "$system_pc_cores_x_processor" ] && [[ -n $(which lshal 2>/dev/null) ]]; then
	system_pc_cores_x_processor=$(lshal | grep -c "processor.number")
fi

# RedHat 6.5 doesn't work with the above, so....
if [ -z "$system_pc_cores_x_processor" ]; then
	system_pc_cores_x_processor=1
fi

# The number of siblings tell us the number of Threads x Physical Processor
system_pc_threads_x_processor=$(grep siblings /proc/cpuinfo | head -n1 | cut -d: -f2)
system_pc_threads_x_processor=$(trim "$system_pc_threads_x_processor")

if [ -z "$system_pc_threads_x_processor" ]; then
	system_pc_threads_x_processor=1
fi


system_pc_physical_processors=$((system_pc_total_threads / system_pc_threads_x_processor))
if [ "$system_pc_physical_processors" == "0" ]; then
	system_pc_physical_processors="1"
fi

# Guess the OS Instalation Date
# There is no way to know for sure the install date. /etc/distro-release should give a clue, but it is not really accurate
#

system_pc_date_os_installation=$(stat "$system_release_file" | grep "^Modify:" | cut -d" " -f2)

#'''''''''''''''''''''''''''''''''
#' Write to the audit file       '
#'''''''''''''''''''''''''''''''''

xml_file="$system_hostname"-$(date +%Y%m%d%H%M%S).xml

{
echo "form_systemXML=<?xml version=\"1.0\" encoding=\"UTF-8\"?>"
echo "<system>"
echo "	<sys>"
echo "		<timestamp>$(escape_xml "$system_timestamp")</timestamp>"
echo "		<uuid>$(escape_xml "$system_uuid")</uuid>"
echo "		<hostname>$(escape_xml "$system_hostname")</hostname>"
echo "		<man_ip_address>$(escape_xml "$system_ip_address")</man_ip_address>"
echo "		<domain>$(escape_xml "$system_domain")</domain>"
echo "		<description></description>"
echo "		<type>$(escape_xml "$system_type")</type>"
echo "		<os_icon>$(escape_xml "$system_os_icon")</os_icon>"
echo "		<os_group>$(escape_xml "$system_os_group")</os_group>"
echo "		<os_family>$(escape_xml "$system_os_family")</os_family>"
echo "		<os_name>$(escape_xml "$system_os_name")</os_name>"
echo "		<os_version>$(escape_xml "$system_os_version")</os_version>"
echo "		<serial>$(escape_xml "$system_serial")</serial>"
echo "		<model>$(escape_xml "$system_model")</model>"
echo "		<manufacturer>$(escape_xml "$system_manufacturer")</manufacturer>"
echo "		<uptime>$(escape_xml "$system_uptime")</uptime>"
echo "		<form_factor>$(escape_xml "$system_form_factor")</form_factor>"
echo "		<pc_os_bit>$(escape_xml "$system_pc_os_bit")</pc_os_bit>"
echo "		<pc_memory>$(escape_xml "$system_pc_memory")</pc_memory>"
echo "		<pc_num_processor>$(escape_xml "$system_pc_total_threads")</pc_num_processor>"
echo "		<pc_date_os_installation>$(escape_xml "$system_pc_date_os_installation")</pc_date_os_installation>"
echo "		<man_org_id>$(escape_xml "$org_id")</man_org_id>"
echo "		<system_id>$(escape_xml "$system_id")</system_id>"
echo "	</sys>"
} > "$xml_file"


##################################
# BIOS SECTION                   #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "BIOS Info"
fi

# Get the BIOS Manufacturer
bios_manufacturer=""
bios_manufacturer=$(dmidecode -s bios-vendor 2>/dev/null)
if [ -z "$bios_manufacturer" ]; then
	if [[ -n $(which lshal 2>/dev/null) ]]; then
		bios_manufacturer=$(lshal | grep "smbios.bios.vendor" | cut -d\' -f2)
		if [ -z "$bios_manufacturer" ]; then
			bios_manufacturer=$(lshal | grep "system.firmware.vendor" | cut -d\' -f2)
		fi
	fi
	if [ -z "$bios_manufacturer" ]; then
		bios_manufacturer=$(cat /sys/class/dmi/id/bios_vendor 2>/dev/null)
	fi
fi

# Get the BIOS Firmware Revision
bios_firm_rev=""
bios_firm_rev=$(dmidecode 2>/dev/null | grep "Firmware Revision" | cut -d: -f2)
bios_firm_rev=$(trim "$bios_firm_rev")
if [ -z "$bios_firm_rev" ]; then
	if [[ -n $(which lshal 2>/dev/null) ]]; then
		bios_firm_rev=$(lshal | grep "smbios.bios.version" | cut -d\' -f2)
		if [ -z "$bios_firm_rev" ]; then
			bios_firm_rev=$(lshal | grep "system.firmware.version" | cut -d\' -f2)
		fi
		if [ -z "$bios_firm_rev" ]; then
			bios_firm_rev=$(cat /sys/class/dmi/id/bios_version)
		fi
	fi
fi

# Make the BIOS Description using the manufacturer - Firmware Rev
if [ -n "$bios_firm_rev" ]; then
	bios_description=$(echo "$bios_manufacturer" | cut -d" " -f1)" BIOS - Firmware Rev. $bios_firm_rev"
else
	bios_description=$(echo "$bios_manufacturer" | cut -d" " -f1)" BIOS"
fi

# Get the BIOS Serial = System Serial
bios_serial="$system_serial"

# Get the SMBIOS Version
bios_smversion=""
bios_smversion=$(dmidecode 2>/dev/null | grep -i SMBIOS | cut -d' ' -f2)
if [ -z "$bios_smversion" ]; then
	if [[ -n $(which lshal 2>/dev/null) ]]; then
		bios_smversion=$(lshal | grep "smbios.bios.version" | cut -d\' -f2)
		if [ -z "$bios_smversion" ]; then
			bios_smversion=$(lshal | grep "system.firmware.version" | cut -d\' -f2)
		fi
	fi
fi

# Get the BIOS Version
bios_version_p1=$(dmidecode -s bios-version 2>/dev/null)
bios_version_p2=$(dmidecode 2>/dev/null | grep "BIOS Revision" | cut -d: -f2)
bios_version_p2=$(trim "$bios_version_p2")
bios_version_p3=$(dmidecode -s bios-release-date 2>/dev/null)

if [ -n "$bios_version_p1" ]; then
	if [ -n "$bios_version_p2" ]; then
		bios_version="V.$bios_version_p1 Rev.$bios_version_p2 - $bios_version_p3"
	else
		bios_version="V.$bios_version_p1 - $bios_version_p3"
	fi
fi

if [ -z "$bios_version" ] && [[ -n $(which lshal 2>/dev/null) ]]; then
	bios_version=$(lshal | grep "smbios.bios.version" | cut -d\' -f2)
	if [ -z "$bios_version" ]; then
		bios_version=$(lshal | grep "system.firmware.version" | cut -d\' -f2)
	fi
fi

#'''''''''''''''''''''''''''''''''
#' Write to the audit file       '

#'''''''''''''''''''''''''''''''''
{
echo "	<bios>"
echo "		<bios_description>$(escape_xml "$bios_description")</bios_description>"
echo "		<bios_manufacturer>$(escape_xml "$bios_manufacturer")</bios_manufacturer>"
echo "		<bios_serial>$(escape_xml "$bios_serial")</bios_serial>"
echo "		<bios_smversion>$(escape_xml "$bios_smversion")</bios_smversion>"
echo "		<bios_version>$(escape_xml "$bios_version")</bios_version>"
echo "	</bios>"
} >> "$xml_file"


##################################
# PROCESSOR SECTION              #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "Processor Info"
fi

# Get processor socket type
processor_socket=$(dmidecode -t processor 2>/dev/null | grep Upgrade | head -n1 | cut -d: -f2 2>/dev/null)

# Get processor description
processor_description=$(grep "model name" /proc/cpuinfo | head -n1 | cut -d: -f2)

# Get processor speed
processor_speed=$(grep "cpu MHz" /proc/cpuinfo | head -n1 | cut -d: -f2 | awk '{printf("%d\n",$1 + 0.5)}')

# Get processor manufacturer
processor_manufacturer=$(grep vendor_id /proc/cpuinfo | head -n1 | cut -d: -f2)

# Get processor power management support
processor_power_management_supported=$(dmidecode -t processor 2>/dev/null | grep Thermal 2>/dev/null)
if [ -z "$processor_power_management_supported" ]; then
	if [[ -n $(which lshal 2>/dev/null) ]]; then
		processor_power_management_supported=$(lshal | grep -m 1 "processor.can_throttle" | cut -d= -f2 | cut -d" " -f2)
	fi
fi


if [ -n "$processor_power_management_supported" ]; then
	processor_power_management_supported="True"
else
	processor_power_management_supported="False"
fi

#'''''''''''''''''''''''''''''''''
#' Write to the audit file       '

#'''''''''''''''''''''''''''''''''

let total_cores=$system_pc_cores_x_processor*$system_pc_physical_processors
let total_logical_processors=$system_pc_threads_x_processor*$system_pc_physical_processors
{
echo "	<processor>"
echo "		<processor_count>$(escape_xml "$system_pc_physical_processors")</processor_count>"
echo "		<processor_cores>$(escape_xml "$total_cores")</processor_cores>"
echo "		<processor_logical>$(escape_xml "$total_logical_processors")</processor_logical>"
echo "		<processor_socket>$(escape_xml "$processor_socket")</processor_socket>"
echo "		<processor_description>$(escape_xml "$processor_description")</processor_description>"
echo "		<processor_speed>$(escape_xml "$processor_speed")</processor_speed>"
echo "		<processor_manufacturer>$(escape_xml "$processor_manufacturer")</processor_manufacturer>"
echo "		<processor_power_management_supported>$(escape_xml "$processor_power_management_supported")</processor_power_management_supported>"
echo "	</processor>"
} >> "$xml_file"


##################################
# MEMORY SECTION                 #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "Memory Info"
fi

memory_slots="0"
memory_slots=$(dmidecode -t 17 2>/dev/null | awk '/DMI type 17/{print $2}' | wc -l)

if [ "$memory_slots" != "0" ]; then

	echo "	<memory>">> "$xml_file"

	for memory_handle in $(dmidecode -t 17 2>/dev/null | awk '/DMI type 17/{print $2}'); do

			# memory_detail and memory_type are switched here to match the Windows results
			bank_info=$(dmidecode -t 17 2>/dev/null | sed -n '/^Handle '"$memory_handle"'/,/^$/p')

			memory_bank=$(echo "$bank_info" | awk '/^[^B]+Locator:/{for (u=2; u<=NF; u++){printf("%s ", $u)}printf("\n")}' | awk '{gsub(" ","");print}')
			
			memory_detail=$(echo "$bank_info" | awk '/Type:/{for (u=2; u<=NF; u++){printf("%s ", $u)}printf("\n")}' | awk '{gsub(" ","");print}')

			if [ "$memory_detail" = "<OUT OF SPEC>" ]; then
				system_form_factor="Unknown"
			fi
			
			memory_form_factor=$(echo "$bank_info" | awk '/Form Factor/{for (u=3; u<=NF; u++){printf("%s ", $u)}printf("\n")}' | cut -d" " -f1)
			
			memory_type=$(echo "$bank_info" | awk '/Type Detail:/{for (u=3; u<=NF; u++){printf("%s ", $u)}printf("\n")}' | cut -d" " -f1)
			
			memory_capacity=$(echo "$bank_info" | awk '/Size:/{print $2}' | sed 's/[^0-9]//g')
			
			if [ "$(echo "$bank_info" | awk '/Size:/{print $3}')" = "kB" ];then
					memory_capacity=$((memory_capacity / 1024))
			fi
			
			memory_speed=$(echo "$bank_info" |\
				awk '/Speed:/{for (u=2; u<=NF; u++){printf("%s ", $u)}printf("\n")}' |\
				sed 's/[[:space:]]MHz.*//g')
			
			memory_tag=$(echo "$bank_info" |\
				awk '/Bank L.*:/{for (u=3; u<=NF; u++){printf("%s ", $u)}printf("\n")}')
			
			memory_serial=$(echo "$bank_info" |\
					awk '/Serial Number:/{for (u=3; u<=NF; u++){printf("%s ", $u)}printf("\n")}' |\
					cut -d" " -f1)
			
			if  [ "$memory_serial" = "Not" ] || [ "$memory_serial" = "Not " ] || [ "$memory_serial" = "Not Specified" ]; then
				memory_serial=""
			fi
			
			# Ignore empty slots
			if [ -n "$memory_capacity" ]; then
				{
				echo "		<slot>"
				echo "			<bank>$(escape_xml "$memory_bank")</bank>"
				echo "			<type>$(escape_xml "$memory_type")</type>"
				echo "			<form_factor>$(escape_xml "$memory_form_factor")</form_factor>"
				echo "			<detail>$(escape_xml "$memory_detail")</detail>"
				echo "			<capacity>$(escape_xml "$memory_capacity")</capacity>"
				echo "			<speed>$(escape_xml "$memory_speed")</speed>"
				echo "			<tag>$(escape_xml "$memory_tag")</tag>"
				echo "			<serial>$(escape_xml "$memory_serial")</serial>"
				echo "		</slot>"
				} >> "$xml_file"
			fi
	done

	echo "	</memory>">> "$xml_file"
fi


##################################
# MOTHERBOARD SECTION            #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "Motherboard Info"
fi

mobo_manufacturer=$(dmidecode -s baseboard-manufacturer 2> /dev/null)
mobo_model=$(dmidecode -s baseboard-product-name 2> /dev/null)
mobo_version=$(dmidecode -s baseboard-version 2> /dev/null | grep -v Not)
mobo_serial=$(dmidecode -s baseboard-serial-number 2> /dev/null)

if [ -n "$mobo_version" ]; then
	# Report both Model and Version
	mobo_model="$mobo_model - $mobo_version"
fi

#'''''''''''''''''''''''''''''''''
#' Write to the audit file       '

#'''''''''''''''''''''''''''''''''

if [ -n "$mobo_manufacturer" ] || [ -n "$mobo_model" ]; then
	{
	echo "	<motherboard>"
	echo "		<manufacturer>$(escape_xml "$mobo_manufacturer")</manufacturer>"
	echo "		<model>$(escape_xml "$mobo_model")</model>"
	echo "		<serial>$(escape_xml "$mobo_serial")</serial>"
	echo "		<processor_slots>$(escape_xml "$system_pc_physical_processors")</processor_slots>"
	echo "		<processor_type>$(escape_xml "$processor_socket")</processor_type>"
	echo "		<memory_slots>$(escape_xml "$memory_slots")</memory_slots>"
	echo "	</motherboard>" 
	} >> "$xml_file"
fi


##################################
# OPTICAL DRIVES SECTION         #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "Optical Drives Info"
fi
optical_num_devices=$(cdrdao scanbus 2>&1 | grep -c '/dev')

if [ "$optical_num_devices" != "0" ]; then
	# The exact mount point will depend on the cd/dvd volume name.  Older GNU/Linux distros always mount on /mnt/cdrom
	# Modern ditros use /media for any removable media (cd/dvd/usb) followed by the volume name
	if test -d /media; then
		optical_drive_mount_point="/media"
	else
		optical_drive_mount_point="/mnt/cdrom"
	fi

	#'''''''''''''''''''''''''''''''''
	#' Write to the audit file       '
	#'''''''''''''''''''''''''''''''''
	
	echo "	<optical_drives>" >> "$xml_file"

	for optical_device in $(cdrdao scanbus 2>&1 | grep '/dev'); do
		temp=""
		temp=$(echo "$optical_device" | cut -d: -f2 | cut -d, -f1)
		optical_drive_vendor=$(ucase trim "$temp")
		temp=""
		temp=$(echo "$optical_device" | cut -d: -f2 | cut -d, -f2)
		optical_drive_model=$(trim "$temp")
		temp=""
		temp=$(echo "$optical_device" | cut -d: -f2 | cut -d, -f3)
		optical_drive_release=$(trim "$temp")
                if [ -n "$optical_drive_release" ]; then
                  optical_drive_release="Rel.$optical_drive_release"
                fi
        temp=""
        temp=$(echo "$optical_device" | cut -d: -f1)
		optical_device_ID=$(trim "$temp")
		optical_caption="$optical_drive_vendor $optical_drive_model"
		{
		echo "		<optical_drive>"
		echo "			<optical_drive_caption>$(escape_xml "$optical_caption")</optical_drive_caption>"
		echo "			<optical_drive_model>$(escape_xml "$optical_caption $optical_drive_release")</optical_drive_model>"
		echo "			<optical_drive_device_id>$(escape_xml "$optical_device_ID")</optical_drive_device_id>"
		echo "			<optical_drive_mount_point>$(escape_xml "$optical_drive_mount_point")</optical_drive_mount_point>"
		echo "		</optical_drive>"
		} >> "$xml_file"
	done
	echo "	</optical_drives>" >> "$xml_file"
fi

##################################
# VIDEO CARDS SECTION            #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "Video Cards Info"
fi

video_pci_adapters=""
video_pci_adapters=$(lspci 2>/dev/null | grep VGA | cut -d" " -f1)

if [ -n "$video_pci_adapters" ]; then
	echo "	<video_cards>" >> "$xml_file"
	for video_adapter in $video_pci_adapters; do 
		video_device_name=$(lspci -vms "$video_adapter" | grep '^Device' | tail -n1  | cut -d: -f2 | cut -c2-)
		video_revision=$(lspci -vms "$video_adapter" | grep '^Rev' | cut -d: -f2 | cut -c2-)
		video_description="$video_device_name"
		# Add the revision
		if [ -n "$video_revision" ]; then
			video_description="$video_device_name (Rev: $video_revision)"
		fi
		video_manufacturer=$(lspci -vms "$video_adapter" | grep '^Vendor' | cut -d: -f2 | cut -c2-)
		video_memory=$(lspci -vs "$video_adapter" | grep Memory | tail -n1 | cut -d= -f2 | sed 's/[^0-9]//g')
		{
		echo "		<video_card>"
		echo "			<video_description>$(escape_xml "$video_description")</video_description>"
		echo "			<video_manufacturer>$(escape_xml "$video_manufacturer")</video_manufacturer>"
		echo "			<video_memory>$(escape_xml "$video_memory")</video_memory>"
		echo "		</video_card>"
		} >> "$xml_file"
	done
	echo "	</video_cards>" >> "$xml_file"
fi


##################################
# SOUND CARDS SECTION            #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "Sound Cards Info"
fi

sound_pci_adapters=""
sound_pci_adapters=$(lspci 2>/dev/null | grep -Ei 'audio | multmedia' | cut -d" " -f1)

if [ -n "$sound_pci_adapters" ]; then
	echo "	<sound_cards>" >> "$xml_file"
	for sound_adapter in $sound_pci_adapters; do 
		sound_device_name=$(lspci -vms "$sound_adapter" | grep '^Device' | tail -n1  | cut -d: -f2 | cut -c2-)
		sound_revision=$(lspci -vms "$sound_adapter" | grep '^Rev' | cut -d: -f2 | cut -c2-)
		sound_name="$sound_device_name"
		if [ -n "$sound_revision" ]; then
			sound_name="$sound_device_name (Rev: $sound_revision)"
		fi
		sound_manufacturer=$(lspci -vms "$sound_adapter" | grep '^Vendor' | cut -d: -f2 | cut -c2-)
		{
		echo "		<sound_card>"
		echo "			<sound_name>$(escape_xml "$sound_name")</sound_name>"
		echo "			<sound_manufacturer>$(escape_xml "$sound_manufacturer")</sound_manufacturer>"
		echo "			<sound_device_id>$(escape_xml "$sound_adapter")</sound_device_id>"
		echo "		</sound_card>"
		} >> "$xml_file"
	done
	echo "	</sound_cards>" >> "$xml_file"
fi

##################################
# SHARES SECTION                 #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "Shares Info"
fi

echo "	<shares>" >> "$xml_file"

case $system_os_family in
		'Ubuntu' | 'Debian' )
				service smbd status 2> /dev/null |\
				grep running > /dev/null &&
					sed -e '/^$/d' -e 's/^[ \t]*//' -e '/^[#;]/d' /etc/samba/smb.conf |\
					grep -E "^\[|^comment|^path" |\
					sed -e '/^\[global\]/d' -e 's/\]$//' -e 's/^comment = //' -e 's/^path = //' |\
					awk 'BEGIN { RS = "[" ; FS = "\n" } { print "\t\t<share>"; print "\t\t\t<share_name>",$1,"</share_name>"; print "\t\t\t<share_caption>",$2,"</share_caption>"; print "\t\t\t<share_path>",$3,"</share_path>"; print "\t\t</share>" }' |\
					tail -n +6 >>\
					"$xml_file"
			;;
		'CentOS' | 'RedHat' | 'SUSE' | 'Fedora' )
				service smb status > /dev/null 2>&1 &&\
					sed -e '/^$/d' -e 's/^[ \t]*//' -e '/^[#;]/d' /etc/samba/smb.conf |\
					grep -E "^\[|^comment|^path" |\
					sed -e '/^\[global\]/d' -e 's/\]$//' -e 's/^comment = //' -e 's/^path = //' |\
					awk 'BEGIN { RS = "[" ; FS = "\n" } { print "\t\t<share>"; print "\t\t\t<share_name>",$1,"</share_name>"; print "\t\t\t<share_caption>",$2,"</share_caption>"; print "\t\t\t<share_path>",$3,"</share_path>"; print "\t\t</share>" }' |\
					tail -n +6 >>\
					"$xml_file"
			;;
esac

echo "	</shares>" >> "$xml_file"

##################################
# NETWORK CARDS SECTION          #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "Network Cards Info"
fi

net_cards=""
temp=$(ls /sys/class/net/)
for dir in $temp; do
	if [ -e "/sys/class/net/$dir/device" ]; then
		dev=""
		dev=$(echo "/sys/class/net/$dir" | readlink -f "/sys/class/net/$dir/device" | awk -F/ '{ print $5 }' | awk -F: '{ print $2":"$3 }' | tr -d '[:blank:]' 2>/dev/null)
		if [ -n "$dev" ]; then
			if [ -n "$net_cards" ]; then
				net_cards=$(trim "$net_cards"$'\n'"$dev/$dir")
			else
				net_cards=$(trim "$dev/$dir")
			fi
		fi
	fi
done
dev=""
temp=""

if [ -n "$net_cards" ]; then
	# Store the IP Addresses Information in a variable to write it later on the file
	addr_info=""
	echo "	<network_cards>" >> "$xml_file";

	for net_card_connection_id in $net_cards; do 
		net_card_id=$(echo "$net_card_connection_id" | cut -d/ -f2)
		net_card_pci=$(echo "$net_card_connection_id" | cut -d/ -f1)
		net_card_mac=$(cat /sys/class/net/"$net_card_id"/address)
		net_index=$(cat /sys/class/net/"$net_card_id"/ifindex)

		if [ "$net_card_pci" = 'virtual' ]; then
			net_card_model="Virtual Interface"
			net_card_manufacturer="Linux"
		elif [ "$(which lspci 2>/dev/null)" != "" ]; then
			net_card_model=$(lspci -vms "$net_card_pci" | grep -v "$net_card_pci" | grep ^Device | cut -d: -f2 | cut -c2-)
			net_card_manufacturer=$(lspci -vms "$net_card_pci" | grep ^Vendor | cut -d: -f2 | cut -c2-)
		elif [[ "$system_model" == *"VMware"* ]]; then
			net_card_model="PCI bridge"
			net_card_manufacturer="VMware"
		else
			net_card_model=""
			net_card_manufacturer=""
		fi

		net_card_description="$net_card_model"
		net_card_speed=""

		if [ -z "$(echo "$net_card_id" | awk '/^wl/{print $1}')" ]; then
			if [ -z "$(which ethtool 2>/dev/null)" ]; then
				# we don't have ethtool installed
				net_card_type="Ethernet 802.3"
			else
				net_card_speed=""
				net_card_speed=$(ethtool "$net_card_id" 2>/dev/null | grep Speed | cut -d: -f2 | sed 's/[^0-9]//g')
				net_card_type="Ethernet 802.3"
			fi
		else
			# This is a wireless link
			if [ -z "$(which iwlist 2>/dev/null)" ]; then
				net_card_speed=$(iwlist "$net_card_id" bitrate | grep Current  | cut -d. -f1 | grep -oE '[[:digit:]]*')
			else
				net_card_speed=""
			fi
			net_card_type="Wireless Ethernet 802.11"
		fi

		# if a speed was detected, it needs to be multiplied to show up in the web
		if [ $net_card_speed ]; then
			net_card_speed=$((net_card_speed * 10000))
		fi

		temp=$(cat /sys/class/net/"$net_card_id"/operstate)
		net_card_status=$(trim "$temp")
		if [ "$net_card_status" = "up" ]; then
			net_card_status="Connected" 
		else
			net_card_status="Disconnected"
		fi

		net_card_enabled="False"

		# Get Info on active IPV4 Addresses for this card
		for net_card_enabled_ip4_addr in $(ip addr show "$net_card_id" | grep 'inet ' | cut -dt -f2 | cut -db -f1 | cut -c2- | cut -d" " -f1); do
			net_card_enabled="True"
			net_card_enabled_ip6_addr=""
			#echo "NCEIA: $net_card_enabled_ip4_addr"
			temp=$(echo "$net_card_enabled_ip4_addr" | cut -d/ -f2)
			net_card_enabled_ip_subnet=$(cidr2mask "$temp")
			net_card_enabled_ip_version="4"
			addr_info=$addr_info"\t\t<ip_address>\n"
			addr_info=$addr_info"\t\t\t<net_mac_address>$(escape_xml "$net_card_mac")</net_mac_address>\n"
			addr_info=$addr_info"\t\t\t<net_index>$(escape_xml "$net_index")</net_index>\n"
			temp=$(echo "$net_card_enabled_ip4_addr" | cut -d/ -f1)
			addr_info=$addr_info"\t\t\t<ip_address_v4>$(escape_xml "$temp")</ip_address_v4>\n"
			addr_info=$addr_info"\t\t\t<ip_address_v6>$(escape_xml "$net_card_enabled_ip6_addr")</ip_address_v6>\n"
			addr_info=$addr_info"\t\t\t<ip_subnet>$(escape_xml "$net_card_enabled_ip_subnet")</ip_subnet>\n"
			addr_info=$addr_info"\t\t\t<ip_address_version>$(escape_xml "$net_card_enabled_ip_version")</ip_address_version>\n"
			addr_info=$addr_info"\t\t</ip_address>\n"
		done

		# Get Info on active IPV6 Addresses for this card
		for net_card_enabled_ip6_addr in $(ip addr show "$net_card_id" | grep 'inet6' | cut -c11- | cut -ds -f1); do
			net_card_enabled="True"
			net_card_enabled_ip4_addr=""
		 		net_card_enabled_ip_subnet=$(echo "$net_card_enabled_ip6_addr" | cut -d/ -f2)
			net_card_enabled_ip_version="6"

			addr_info=$addr_info"\t\t<ip_address>\n"
			addr_info=$addr_info"\t\t\t<net_mac_address>$(escape_xml "$net_card_mac")</net_mac_address>\n"
			addr_info=$addr_info"\t\t\t<net_index>$(escape_xml "$net_index")</net_index>\n"
			addr_info=$addr_info"\t\t\t<ip_address_v4>$(escape_xml "$net_card_enabled_ip4_addr")</ip_address_v4>\n"
			temp=$(echo "$net_card_enabled_ip6_addr" | cut -d/ -f1)
			addr_info=$addr_info"\t\t\t<ip_address_v6>$(escape_xml "$temp")</ip_address_v6>\n"
			addr_info=$addr_info"\t\t\t<ip_subnet>$(escape_xml "$net_card_enabled_ip_subnet")</ip_subnet>\n"
			addr_info=$addr_info"\t\t\t<ip_address_version>$(escape_xml "$net_card_enabled_ip_version")</ip_address_version>\n"
			addr_info=$addr_info"\t\t</ip_address>\n"
		done

		# Check DHCP lease for this card
		# Distros store the lease info in different files/locations, I'm getting the file from the running process
		#net_card_lease_file=$(ps -ef | grep dhclient | grep "$net_card_id" | sed -e 's/^.*-lf//' | cut -d" " -f2)
		net_card_lease_file="/var/lib/dhcp/dhclient.$net_card_id.leases"

		if [ ! -e "$net_card_lease_file" ]; then
			net_card_dhcp_enab="False"
			net_card_dhcp_server=""
			net_card_dhcp_lease_expire=""
		else
			net_card_dhcp_enab="True"
			net_card_dhcp_server=$(grep dhcp-server "$net_card_lease_file" | tail -n1 | sed 's/;//' | cut -d" " -f5)
			net_card_dhcp_lease_expire=$(grep expire "$net_card_lease_file" | tail -n1 | sed 's/;//' | cut -d" " -f5 | sed 's|/|-|g')
			# To get the Obtained date we need to get lease time first
			net_card_dhcp_lease_time=$(grep lease-time "$net_card_lease_file" | tail -n1 | sed 's/;//' | cut -d" " -f5)
			net_card_dhcp_lease_days=$((net_card_dhcp_lease_time / 60 / 60 / 24))
			net_card_dhcp_lease_obtained=$(date -d ''"$net_card_dhcp_lease_expire"' -'"$net_card_dhcp_lease_days"' days' +%F)
		fi
		
		# TODO: Domain Registration & WINS Info (Samba)
		net_card_domain_reg=""
		net_card_dns_server=$(awk '/^name/{print $2}' /etc/resolv.conf | head -n1)
		net_card_dns_domain=$(awk '/^domain/{print $2}' /etc/resolv.conf | head -n1)
		if [ -z "$net_card_dns_domain" ]; then
			net_card_dns_domain=$(awk '/^search/{print $2}' /etc/resolv.conf | head -n1)
		fi

		{
		echo "		<network_card>"
		echo "			<net_index>$(escape_xml "$net_index")</net_index>"
		echo "			<net_mac_address>$(escape_xml "$net_card_mac")</net_mac_address>"
		echo "			<net_manufacturer>$(escape_xml "$net_card_manufacturer")</net_manufacturer>"
		echo "			<net_model>$(escape_xml "$net_card_model")</net_model>"
		echo "			<net_description>$(escape_xml "$net_card_description")</net_description>"
		echo "			<net_ip_enabled>$(escape_xml "$net_card_enabled")</net_ip_enabled>"
		echo "			<net_connection_id>$(escape_xml "$net_card_id")</net_connection_id>"
		echo "			<net_connection_status>$(escape_xml "$net_card_status")</net_connection_status>"
		echo "			<net_speed>$(escape_xml "$net_card_speed")</net_speed>"
		echo "			<net_adapter_type>$(escape_xml "$net_card_type")</net_adapter_type>"
		echo "			<net_dhcp_enabled>$(escape_xml "$net_card_dhcp_enab")</net_dhcp_enabled>"
		echo "			<net_dhcp_server>$(escape_xml "$net_card_dhcp_server")</net_dhcp_server>"
		echo "			<net_dhcp_lease_obtained>$(escape_xml "$net_card_dhcp_lease_obtained")</net_dhcp_lease_obtained>"
		echo "			<net_dhcp_lease_expires>$(escape_xml "$net_card_dhcp_lease_expire")</net_dhcp_lease_expires>"
		echo "			<net_dns_host_name>$(escape_xml "$system_hostname")</net_dns_host_name>"
		echo "			<net_dns_domain>$(escape_xml "$net_card_dns_domain")</net_dns_domain>"
		echo "			<net_dns_domain_reg_enabled>$(escape_xml "$net_card_domain_reg")</net_dns_domain_reg_enabled>"
		echo "			<net_dns_server>$(escape_xml "$net_card_dns_server")</net_dns_server>"
		echo "			<net_wins_primary></net_wins_primary>"
		echo "			<net_wins_secondary></net_wins_secondary>"
		echo "			<net_wins_lmhosts_enabled></net_wins_lmhosts_enabled>"
		echo "		</network_card>"
		} >> "$xml_file"
	done
	echo "	</network_cards>" >> "$xml_file"
fi


##################################
# ADDRESSES SECTION              #
##################################

if [ -n "$addr_info" ]; then
	{
	echo "	<addresses>"
	echo -e "$addr_info"
	echo "	</addresses>"
	} >> "$xml_file"
fi


##################################
# DISK SECTION                   #
##################################
if [ "$debugging" -gt "0" ]; then
	echo "Hard Disk Info"
fi
echo "	<hard_disks>" >> "$xml_file"
partition_result=""
for disk in $(lsblk -ndo NAME -e 11,2,1 2>/dev/null); do

	hard_drive_caption="/dev/$disk"
	hard_drive_index="$disk"
	hard_drive_interface_type=$(udevadm info -q all -n /dev/"$disk" 2>/dev/null | grep ID_BUS= | cut -d= -f2)
	test=$(udevadm info -q all -n /dev/"$disk" 2>/dev/null | grep ID_ATA_SATA= | cut -d= -f2)
	if [ "$test" = "1" ]; then
		hard_drive_interface_type="sata"
	fi
	
	hard_drive_model=$(udevadm info -a -n /dev/"$disk" 2>/dev/null | grep "ATTRS{model}==" | head -n 1 | cut -d\" -f2)
	if [ -z "$hard_drive_model" ]; then
		hard_drive_model=$(lsblk -lbndo MODEL /dev/"$disk")
	fi
	hard_drive_serial=$(udevadm info -q all -n /dev/"$disk" 2>/dev/null | grep ID_SERIAL_SHORT= | cut -d= -f2)
	hard_drive_size=$(lsblk -lbndo SIZE /dev/"$disk")
	hard_drive_size=$((hard_drive_size /1024 / 1024))
	hard_drive_device_id="/dev/$disk"
	hard_drive_partitions=$(lsblk -lno NAME /dev/$disk | grep -v "^$disk\$" -c)
	hard_drive_status=""
	hard_drive_model_family=""
	hard_drive_firmware=$(udevadm info -q all -n /dev/"$disk" 2>/dev/null | grep ID_REVISION= | cut -d= -f2)
	hard_drive_scsi_logical_unit=""

	mycommand="lshw -class disk 2>/dev/null"
	mydelimiter="*-disk"
	mymatch="logical name: /dev/$disk"
	myvariable="vendor:"
	myresult=$(between_output "$mycommand" "$mydelimiter" "$mymatch" "$myvariable")
	myresult=$(echo "$myresult" | cut -d: -f2)
	hard_drive_manufacturer=$(trim "$myresult")
	if [ -z "$hard_drive_manufacturer" ]; then
		hard_drive_manufacturer=$(udevadm info -q all -n /dev/"$disk" 2>/dev/null | grep ID_VENDOR= | cut -d= -f2)
	fi

	if [ -n $(which smartctl 2>/dev/null) ]; then
		# use smart tools as they are installed
		hard_drive_status=$(smartctl -H /dev/"$disk" 2>/dev/null | grep "SMART overall" | cut -d: -f2)
		hard_drive_model_family=$(smartctl -i /dev/"$disk" 2>/dev/null | grep "Model Family" | cut -d: -f2)
	fi

	# some hacks
	if [ -z "$hard_drive_manufacturer" ] && [[ "$hard_drive_model" == *"Crucial"* ]]; then
		hard_drive_manufacturer="Crucial"
	fi

	if [[ "$hard_drive_manufacturer" == *"VMware"* ]]; then
		hard_drive_manufacturer="VMware"
		hard_drive_model_family="VMware"
		hard_drive_model="VMware Virtual Disk"
	fi

	if [[ "$hard_drive_model" == *"VMware"* ]] || [[ "$hard_drive_model" == *"Virtual"* ]]; then
		hard_drive_model="VMware Virtual Disk"
	fi

	{
	echo "		<hard_disk>"
	echo "			<hard_drive_caption>$(escape_xml "$hard_drive_caption")</hard_drive_caption>"
	echo "			<hard_drive_index>$(escape_xml "$hard_drive_index")</hard_drive_index>"
	echo "			<hard_drive_interface_type>$(escape_xml "$hard_drive_interface_type")</hard_drive_interface_type>"
	echo "			<hard_drive_manufacturer>$(escape_xml "$hard_drive_manufacturer")</hard_drive_manufacturer>"
	echo "			<hard_drive_model>$(escape_xml "$hard_drive_model")</hard_drive_model>"
	echo "			<hard_drive_serial>$(escape_xml "$hard_drive_serial")</hard_drive_serial>"
	echo "			<hard_drive_size>$(escape_xml "$hard_drive_size")</hard_drive_size>"
	echo "			<hard_drive_device_id>$(escape_xml "$hard_drive_device_id")</hard_drive_device_id>"
	echo "			<hard_drive_partitions>$(escape_xml "$hard_drive_partitions")</hard_drive_partitions>"
	echo "			<hard_drive_status>$(escape_xml "$hard_drive_status")</hard_drive_status>"
	echo "			<hard_drive_firmware>$(escape_xml "$hard_drive_firmware")</hard_drive_firmware>"
	echo "			<hard_drive_model_family>$(escape_xml "$hard_drive_model_family")</hard_drive_model_family>"
	echo "			<hard_drive_scsi_logical_unit>$(escape_xml "$hard_drive_scsi_logical_unit")</hard_drive_scsi_logical_unit>"
	echo "		</hard_disk>"
	} >> "$xml_file"

	for partition in $(lsblk -lno NAME /dev/$disk 2>/dev/null | grep -v ^$disk\$ ); do
		if [ -n "$partition" ] && [ "$partition" != "$disk" ]; then

			# partition_mount_type=$(lsblk -lndo TYPE /dev/"$partition" 2>/dev/null)
			partition_mount_type=$(lsblk -lno NAME,TYPE /dev/$disk 2>/dev/null | grep "^$partition " | sed -e "s/$partition//g")
			partition_mount_type=$(trim "$partition_mount_type")
			if [ "$partition_mount_type" = "part" ]; then
				partition_mount_type="partition"
			fi

			#partition_mount_point=$(lsblk -lndo MOUNTPOINT /dev/"$partition" 2>/dev/null)
			partition_mount_point=$(lsblk -lno NAME,MOUNTPOINT /dev/$disk 2>/dev/null | grep "^$partition " | sed -e "s/$partition//g")
			partition_mount_point=$(trim "$partition_mount_point")

			#partition_name=$(lsblk -lndo LABEL /dev/"$partition" 2>/dev/null)
			partition_name=$(lsblk -lno NAME,LABEL /dev/$disk 2>/dev/null | grep "^$partition " | sed -e "s/$partition//g")
			partition_name=$(trim "$partition_name")

			#partition_size=$(lsblk -lbndo SIZE /dev/"$partition" 2>/dev/null)
			partition_size=$(lsblk -lbo NAME,SIZE /dev/$disk 2>/dev/null | grep "^$partition" | sed -e "s/$partition//" )
			partition_size=$(trim "$partition_size")
			partition_size=$((partition_size /1024 / 1024))

			#partition_format=$(lsblk -lndo FSTYPE /dev/"$partition" 2>/dev/null)
			partition_format=$(lsblk -lno NAME,FSTYPE /dev/$disk 2>/dev/null | grep "^$partition " | sed -e "s/$partition//g")
			partition_format=$(trim "$partition_format")

			#partition_caption=$(lsblk -lndo LABEL /dev/"$partition" 2>/dev/null)
			partition_caption=$(lsblk -lno NAME,LABEL /dev/$disk 2>/dev/null | grep "^$partition " | sed -e "s/$partition//g")
			partition_caption=$(trim "$partition_caption")

			partition_device_id="/dev/$partition"
			partition_disk_index="$disk"
			partition_bootable=""
			partition_type="$partition_mount_type"
			partition_quotas_supported=""
			partition_quotas_enabled=""

			#partition_serial=$(lsblk -lndo UUID /dev/"$partition" 2>/dev/null)
			partition_serial=$(lsblk -lno NAME,UUID /dev/$disk 2>/dev/null | grep "^$partition " | sed -e "s/$partition//g")
			partition_serial=$(trim "$partition_serial")

			#partition_free_space=$(df -m /dev/"$partition" 2>/dev/null | grep /dev/"$partition" | awk '{print $4}')
			partition_free_space=$(df -m --total "$partition_mount_point" 2>/dev/null | grep ^total | awk '{print $4}')
			if [ -z "$partition_free_space" ] && [ -n "$partition_serial" ]; then
				partition_free_space=$(df -m /dev/disk/by-uuid/"$partition_serial" 2>/dev/null | grep "$partition_serial" | awk '{print $4}')
			fi
			#partition_used_space=$(df -m /dev/"$partition" 2>/dev/null | grep /dev/"$partition" | awk '{print $3}')
			partition_used_space=$(df -m --total "$partition_mount_point" 2>/dev/null | grep ^total | awk '{print $3}')
			if [ -z "$partition_used_space" ] && [ -n "$partition_serial" ]; then
				partition_used_space=$(df -m /dev/disk/by-uuid/"$partition_serial" 2>/dev/null | grep "$partition_serial" | awk '{print $3}')
			fi

			if [ "$partition_format" = "swap" ]; then
				partition_used_space=$(free -m | grep -i swap | awk '{print $3}')
				partition_free_space=$(free -m | grep -i swap | awk '{print $4}')
			fi

			partition_result=$partition_result"		<partition>\n"
			partition_result=$partition_result"			<hard_drive_index>$(escape_xml "$partition_disk_index")</hard_drive_index>\n"
			partition_result=$partition_result"			<partition_mount_type>$(escape_xml "$partition_mount_type")</partition_mount_type>\n"
			partition_result=$partition_result"			<partition_mount_point>$(escape_xml "$partition_mount_point")</partition_mount_point>\n"
			partition_result=$partition_result"			<partition_name>$(escape_xml "$partition_name")</partition_name>\n"
			partition_result=$partition_result"			<partition_size>$(escape_xml "$partition_size")</partition_size>\n"
			partition_result=$partition_result"			<partition_free_space>$(escape_xml "$partition_free_space")</partition_free_space>\n"
			partition_result=$partition_result"			<partition_used_space>$(escape_xml "$partition_used_space")</partition_used_space>\n"
			partition_result=$partition_result"			<partition_format>$(escape_xml "$partition_format")</partition_format>\n"
			partition_result=$partition_result"			<partition_caption>$(escape_xml "$partition_caption")</partition_caption>\n"
			partition_result=$partition_result"			<partition_device_id>$(escape_xml "$partition_device_id")</partition_device_id>\n"
			partition_result=$partition_result"			<partition_disk_index>$(escape_xml "$partition_disk_index")</partition_disk_index>\n" 
			partition_result=$partition_result"			<partition_bootable></partition_bootable>\n" 
			partition_result=$partition_result"			<partition_type>$(escape_xml "$partition_type")</partition_type>\n"
			partition_result=$partition_result"			<partition_quotas_supported></partition_quotas_supported>\n" 
			partition_result=$partition_result"			<partition_quotas_enabled></partition_quotas_enabled>\n" 
			partition_result=$partition_result"			<partition_serial>$(escape_xml "$partition_serial")</partition_serial>\n"
			partition_result=$partition_result"		</partition>"

		fi
	done
done
echo "	</hard_disks>" >> "$xml_file"


##################################
# PARTITION SECTION              #
##################################

if [ -n "$partition_result" ]; then
	{
	echo "	<partitions>"
	echo -e "$partition_result"
	echo "	</partitions>"
	} >> "$xml_file"
fi


##################################
# LOG SECTION                    #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "Log Info"
fi

echo "	<logs>" >> "$xml_file"
for log in ls /etc/logrotate.d/* ; do
	if [ -e "$log" ]; then
		log_file_name=$(grep -m 1 -E "^/" "$log" | sed -e 's/\ {//g')
		log_max_file_size=$(grep -E '\ size\ ' "$log" | grep -oE '[[:digit:]]*')
		{
		echo "		<log>"
		echo "			<log_name>$(escape_xml "$log")</log_name>"
		echo "			<log_file_name>$(escape_xml "$log_file_name")</log_file_name>"
		echo "			<log_file_size></log_file_size>"
		echo "			<log_max_file_size>$(escape_xml "$log_max_file_size")</log_max_file_size>"
		echo "		</log>"
		} >> "$xml_file"
	fi
done
echo "	</logs>" >> "$xml_file"


##################################
# SWAP SECTION                   #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "Swap Info"
fi

for swap in $(tail -n +2 /proc/swaps) ; do
	echo "$swap" | awk ' { print "\t<pagefile>\n\t\t<file_name>"$1"</file_name>\n\t\t<initial_size>"$3"</initial_size>\n\t\t<max_size>"$3"</max_size>\n\t</pagefile>" } ' >> "$xml_file"
done

##################################
# USER SECTION                   #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "User Info"
fi
echo "	<users>" >> "$xml_file"

IFS=$(echo -en "\n\b");
#for i in $(cat /etc/passwd) ; do
#	echo $i | awk -F: ' { print "\t\t<user>\n" "\t\t\t<user_name>"$1"</user_name>\n" "\t\t\t<user_full_name>"$5"</user_full_name>\n" "\t\t\t<user_sid>"$3"</user_sid>\n" "\t\t</user>" } ' >> "$xml_file"
grep -v '^ *#' < /etc/passwd | while IFS= read -r line; do
	echo "$line" | awk -F: ' { print "\t\t<user>\n" "\t\t\t<user_name>"$1"</user_name>\n" "\t\t\t<user_full_name><![CDATA["$5"]]></user_full_name>\n" "\t\t\t<user_sid>"$3"</user_sid>\n" "\t\t</user>" } ' >> "$xml_file"
done
echo "	</users>" >> "$xml_file"


########################################################
# SOFTWARE SECTION                                     #
########################################################

if [ "$debugging" -gt "0" ]; then
	echo "Software Info"
fi

echo "	<software>" >> "$xml_file"
case $system_os_family in
		'Ubuntu' | 'Debian' | 'LinuxMint' )
			#dpkg-query --show --showformat="\t\t<package>\n\t\t\t<software_name><![CDATA[\${Package}]]></software_name>\n\t\t\t<software_version><![CDATA[\${Version}]]></software_version>\n\t\t\t<software_url><![CDATA[\${Homepage} ]]></software_url>\n\t\t</package>\n" |\
			dpkg-query --show --showformat="\t\t<package>\n\t\t\t<software_name><![CDATA[\${Package}]]></software_name>\n\t\t\t<software_version><![CDATA[\${Version}]]></software_version>\n\t\t\t<software_url></software_url>\n\t\t</package>\n" |\
				sed -e 's/\&.*</</' >> "$xml_file"
				#sed -e 's/url><.*><\/software/url><\/software/' >> "$xml_file"
			;;
		'CentOS' | 'RedHat' | 'SUSE' | 'Fedora' )
			rpm -qa --queryformat="\t\t<package>\n\t\t\t<software_name><\!\[CDATA\[%{NAME}\]\]></software_name>\n\t\t\t<software_version><\!\[CDATA\[%{VERSION}-%{RELEASE}\]\]></software_version>\n\t\t\t<software_version_orig><\!\[CDATA\[%{VERSION}\]\]></software_version_orig>\n\t\t\t<software_url><\!\[CDATA\[%{URL}\]\]></software_url>\n\t\t</package>\n" |\
				sed -e 's/\&.*</</' >> "$xml_file"
			#sed -e 's/url><.*><\/software/url><\/software/' >> "$xml_file"
			;;
esac
echo "	</software>" >> "$xml_file"

########################################################
# SERVICE SECTION                                      #
########################################################

if [ "$debugging" -gt "0" ]; then
	echo "Service Info"
fi

echo "	<services>" >> "$xml_file"

case $system_os_family in
		'Ubuntu' | 'Debian' )
			if [ -r /etc/inittab ]; then
				INITDEFAULT=$(awk -F: '/id:/,/:initdefault:/ { print $2 }' /etc/inittab)
			else
				INITDEFAULT=$(awk -F= ' /^env\ DEFAULT_RUNLEVEL/ { print $2 } ' /etc/init/rc-sysinit.conf)
			fi
			# upstart services
			for s in $(q 2>/dev/null | awk ' { print $1 } ' | sort | uniq) ; do
				if [ "$s" = "rc" ]; then
					service_start_mode="Auto"
				else
					service_start_mode="Manual"
				fi 
				service_name=$(escape_xml "$s")
				echo -e "\t\t<service>\n\t\t\t<service_name>$service_name</service_name>\n\t\t\t<service_start_mode>$service_start_mode</service_start_mode>\n\t\t</service>" >> "$xml_file"
			done
			# SysV init services
			for service_name in /etc/init.d/* ; do
				[[ -e $service_name ]] || break
				if [[ "$service_name" != "README" ]] && [[ "$service_name" != "upstart" ]]; then
					{
					echo "		<service>"
					echo "			<service_name>$(escape_xml "$service_name")</service_name>"
					} >> "$xml_file"
					temp=""
					if ls /etc/rc"$INITDEFAULT".d/*"$service_name"* &>/dev/null ; then
						echo "			<service_start_mode>Manual</service_start_mode>" >> "$xml_file"
					else
						echo "			<service_start_mode>Auto</service_start_mode>" >> "$xml_file"
					fi
					echo "		</service>" >> "$xml_file"
				fi
			done
			;;
		'CentOS' | 'RedHat' | 'SUSE' )
			INITDEFAULT=$(awk -F: '/id:/,/:initdefault:/ { print $2 }' /etc/inittab)
			chkconfig --list |\
				sed -e '/^$/d' -e '/xinetd based services:/d' |\
				awk -v ID="$INITDEFAULT" ' { sub(/:/, "", $1); print "\t\t<service>\n\t\t\t<service_name>"$1"</service_name>"; if ($2 =="on" || $5 ==ID":on") print "\t\t\t<service_start_mode>Auto</service_start_mode>"; else if ($2 =="off" || $5 ==ID":off") print "\t\t\t<service_start_mode>Manual</service_start_mode>"; print "\t\t</service>" } ' >> "$xml_file"
			;;
esac

echo "	</services>" >> "$xml_file"

########################################################
# ROUTE SECTION                                        #
########################################################

if [ "$debugging" -gt "0" ]; then
	echo "Route Info"
fi

echo "	<routes>" >> "$xml_file"
if [ -n "$(which route 2>/dev/null)" ]; then
	for i in $(route -n | tail -n +3) ; do 
		echo "$i" | awk ' { print "\t\t<route>\n\t\t\t<destination>"$1"</destination>\n\t\t\t<mask>"$3"</mask>\n\t\t\t<metric>"$5"</metric>\n\t\t\t<next_hop>"$2"</next_hop>\n\t\t\t<type>"$4"</type>\n\t\t</route>" } ' >> "$xml_file"
	done
fi
if [ -n "$(which route 2>/dev/null)" ] && [ -n "$(which ip 2>/dev/null)" ]; then
	#route_mask=$(cidr2mask `ip r | grep "default via" | cut -d" " -f1 | cut -d"\"" -f2`)
	route_next_hop=$(ip r | grep "default via" | cut -d" " -f3)
	route_metric=$(ip r | grep "default via" | cut -d" " -f10)
	{
	echo "		<route>"
	echo "			<destination>0.0.0.0</destination>"
	echo "			<mask></mask>"
	echo "			<metric>$(escape_xml "$route_metric")</metric>"
	echo "			<next_hop>$(escape_xml "$route_next_hop")</next_hop>"
	echo "		</route>"
	} >> "$xml_file"
fi
echo "	</routes>" >> "$xml_file"


########################################################
# NETSTAT LISTENING PORTS                              #
########################################################
if [ "$debugging" -gt "0" ]; then
	echo "Netstat Info"
fi
netstatdump=$(netstat -lntup 2>/dev/null | grep -v "(only servers)" | grep -v "Foreign Address")
{
echo "	<netstat>"
echo "		<![CDATA[$netstatdump]]>"
echo "	</netstat>"
} >> "$xml_file"







########################################################
# CLOSE THE AUDIT FILE                                 #
########################################################

echo "</system>" >> "$xml_file"

########################################################
# SUBMIT RESULTS                                       #
########################################################

if [ "$debugging" -gt 0 ]; then
	elapsed_time=$(timer "$start_time")
	echo "Audit Generated in '$elapsed_time' seconds."
fi

if [ "$submit_online" = "y" ]; then
	sed -i -e 's/+/%2B/g' "$xml_file"
	if [ "$debugging" -gt 1 ]; then
		echo "Submitting results to server"
		echo "URL: $url"
	fi
	wget --delete-after --post-file="$xml_file" "$url" 2>/dev/null
fi

sed -i -e 's/form_systemXML=//g' "$xml_file"
sed -i -e 's/%2B/+/g' "$xml_file"
if [ "$create_file" != "y" ]; then
	rm -f "$PWD"/"$xml_file"
fi


if [ "$debugging" -gt 0 ]; then
	elapsed_time=$(timer "$start_time")
	echo "Audit Completed in '$elapsed_time' seconds."
fi


IFS="$ORIGIFS"

exit 0