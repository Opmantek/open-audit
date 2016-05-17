#!/bin/sh
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
# @author Mark Unwin <marku@opmantek.com> and others
# @version 1.12.6
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

# the address of the Open-AudIT server "submit" page
url="http://localhost/open-audit/index.php/system/add_system"

# optional - assign any PCs audited to this Org - take the OrgId from OAv2 interface
org_id=""

# if set then delete the audit script upon completion
# useful when starting the script on a remote machine and leaving no trace
self_delete="n"

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

# Should we attempt to audit any connected SAN's
audit_san="y"

# If we detect the san management software, should we run an auto-discover before the query
run_san_discover="n"

PATH="$PATH:/sbin:/usr/sbin"
export PATH

ORIGIFS=$IFS
NEWLINEIFS=$(echo -n "\n");
IFS="$NEWLINEIFS";

# we set this if we detect we're running on a BB shell
busybox="n"

display=""
# This should only be set by Discovery when using the debug option

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

# cidr2mask ()
# {
#   local i mask=""
#   local full_octets=$(($1/8))
#   local partial_octet=$(($1%8))
#   for ((i=0;i<4;i+=1)); do
#     if [ $i -lt $full_octets ]; then
#       mask+=255
#     elif [ $i -eq $full_octets ]; then
#       mask+=$((256 - 2**(8-partial_octet)))
#     else
#       mask+=0
#     fi
#     test $i -lt 3 && mask+=.
#   done
#   echo "$mask"
# }

cidr2mask ()
{
   # Number of args to shift, 255..255, first non-255 byte, zeroes
   set -- $(( 5 - ($1 / 8) )) 255 255 255 255 $(( (255 << (8 - ($1 % 8))) & 255 )) 0 0 0
   [ $1 -gt 1 ] && shift $1 || shift
   echo ${1-0}.${2-0}.${3-0}.${4-0}
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
		if echo "$line" | grep -q "$delimiter" ; then
			if [ -n "$resultgroup" ]; then
				# resultgroup contains data, test it
				if [ $(echo "$resultgroup" | grep "$match" -c ) -ne 0 ]; then
					# our match is contained within the resultgroup
					result=$(echo "$resultgroup" | grep "vendor:")
					break
				fi
				resultgroup=""
			else
				# resultgroup doesn't contain data, start anew
				resultgroup="$line"
			fi
		else
			# not a delimiter, so add to the result group
			resultgroup=$(echo "$resultgroup\n$line")
		fi
	done

	# check a last time as we may not have a final delimiter
	if [ $(echo "$resultgroup" | grep "$match" -c ) -ne 0 ]; then
		# our match is contained within the resultgroup
		result=$(echo "$resultgroup" | grep "vendor:")
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
		"self_delete" )
			self_delete="$parameter_value" ;;
		"debugging" )
			debugging="$parameter_value" ;;
		"display" )
			display="$parameter_value" ;;
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
		"audit_san" )
			audit_san="$parameter_value" ;;
		"run_san_discover" )
			run_san_discover="$parameter_value" ;;
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
	echo "  self_delete"
	echo "    *n - Do not delete the audit script after running"
	echo "     y - Delete the audit script after running"
	echo ""
	echo "  display"
	echo "    *  - Do not display debugging output upon submit"
	echo "    on - Display debugging output upon submit (used by Discovery with debug)"
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
	echo "  audit_san"
	echo "     *y - Should we audit a SAN if it is detected"
	echo "      n - Do not attempt to audit any attached SANs"
	echo ""
	echo "  run_san_discover"
	echo "     *n - Do not run smcli -A if we detect the SAN management software"
	echo "      Y - Run the command and update the list of any connected SANs"
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
# if [ "$submit_online" = "y" ]; then
# 	server=$(echo "$url" | cut -d"/" -f3 | cut -d: -f1)
# 	test=$(ping "$server" -n -c 3 | grep "100% packet loss")
# 	if [ -n "$test" ]; then
# 		if [  "$debugging" -gt 0 ]; then
# 			echo "Server $server is not responding to a ping. Cannot submit audit result. Exiting."
# 		fi
# 		exit
# 	fi
# fi

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
script_name=$(basename $0)

if [ "$debugging" -gt 0 ]; then
	echo "My PID is : $$"
	echo "Audit Start Time : $system_timestamp"
	echo "Audit Location: $audit_location"
	echo "-------------------"
fi

IFS="$ORIGIFS";
if pidof -x -o $$ "$script_name" >/dev/null 2>&1; then
	if [ "$debugging" -gt 0 ]; then
		echo "Exiting as other audits are currently running."
		for pid in $(pidof -x "$script_name"); do
			echo $(ps -p "$pid");
		done
	fi
	exit 0
fi
IFS="$NEWLINEIFS"



#========================
#  SAN INFO             #
#========================
if [ "$audit_san" = "y" ]; then
	if [ -f "/opt/IBM_DS/client/SMcli" ]; then
		san_url=$(echo "$san_url" | sed 's/system\/add_system/san\/add_san/g')
		if [ "$debugging" -gt 0 ]; then
			echo "SAN info"
		fi
		if [ "$run_san_discover" = "y" ]; then
			if [ "$debugging" -gt 1 ]; then
				echo "Running SAN refresh / discover."
			fi
			output=$(/opt/IBM_DS/client/SMcli -A)
		fi
		if [ "$debugging" -gt 1 ]; then
			echo "Running SAN list"
		fi
		for san in $(/opt/IBM_DS/client/SMcli -d | grep -v -e '^$' | grep -v 'SMcli' | cut -d" " -f2 ); do
			$(echo "input=" > /tmp/"$san".txt)
			if [ "$debugging" -gt 1 ]; then
				echo "Running command: /opt/IBM_DS/client/SMcli \"$san\" -c \"show storagesubsystem profile;\" >> /tmp/\"$san\".txt"
			fi
			$(/opt/IBM_DS/client/SMcli "$san" -c "show storagesubsystem profile;" >> /tmp/"$san".txt)
			if [ "$submit_online" = "y" ]; then
				if [ "$debugging" -gt 1 ]; then
					echo "Submitting SAN results to server"
					echo "URL: $san_url"
					if [ "$debugging" -gt 2 ]; then
						head /tmp/"$san".txt
					fi
				fi
				if [ -n "$(which wget 2>/dev/null)" ]; then
					if [ "$debugging" -gt 1 ]; then
						echo "Sending using wget."
					fi
					wget --delete-after --post-file=/tmp/"$san".txt "$san_url" 2>/dev/null
				else
					if [ -n "$(which curl 2>/dev/null)" ]; then
					if [ "$debugging" -gt 1 ]; then
						echo "Sending using curl."
					fi
						curl --data @/tmp/"$san".txt "$san_url"
					fi
				fi
			fi
			if [ "$debugging" -gt 1 ]; then
				echo "Deleting SAN output file /tmp/$san.txt."
			fi
			$(rm /tmp/"$san".txt)
		done
	fi
fi



#========================
#  SYSTEM INFO          #
#========================

if [ "$debugging" -gt "0" ]; then
	echo "System Info"
fi

# Set the UUID
system_uuid=""
system_uuid=$(dmidecode -s system-uuid 2>/dev/null | grep -v "^#")
if [ -z "$system_uuid" ] && [ -n "$(which lshal 2>/dev/null)" ]; then
	system_uuid=$(lshal 2>/dev/null | grep "system.hardware.uuid" | cut -d\' -f2)
fi
if [ -z "$system_uuid" ]; then
	system_uuid=$(cat /sys/class/dmi/id/product_uuid 2>/dev/null)
fi

# Get the hostname & DNS domain
system_hostname=""
system_hostname=$(hostname -s 2>/dev/null)
system_domain=$(hostname -d 2>/dev/null)

# if [ -f /etc/hostname ]; then
# 	system_hostname=$(cat /etc/hostname 2>/dev/null)
# else
# 	system_hostname=$(hostname -s 2>/dev/null)
# fi

# if [ -z "$system_hostname" ]; then
# 	system_hostname=$(hostname 2>/dev/null)
# 	system_domain=""
# else
# 	system_domain=$(hostname -d 2>/dev/null)
# fi



# Get System Family (Distro Name) and the OS Name
# Debian and Ubuntu will match on the below
#system_description=""
system_type="computer"
system_os_group="Linux"
system_os_family=$(lsb_release -is 2>/dev/null | tr -d '"')
system_os_name=$(lsb_release -ds 2>/dev/null | tr -d '"' | head -n1)
system_os_version=$(lsb_release -rs 2>/dev/null | tr -d '"')
system_manufacturer=""
system_model=""

# Some DD-WRT specials stuff
if [ -z "$system_os_family" ] && grep -qi 'DD-WRT' /etc/motd ; then
	system_os_family="DD-WRT"
	system_os_version=$(grep DD-WRT /etc/motd | cut -dv -f2)
	system_os_version="v$system_os_version"
	system_os_name="DD-WRT $system_os_version"
	system_model=$(nvram get DD_BOARD)
	if echo "$system_model" | grep -qi "tplink"; then
		system_manufacturer="TP-Link Technology"
	fi
	system_ip_address=$(nvram get lan_ipaddr)
	system_domain=$(nvram get lan_domain)
	system_type="router"
	busybox="y"
fi

if [ -z "$system_os_family" ] && [ -f "/etc/os-release" ]; then
	if grep -q 'Alpine Linux' /etc/os-release ; then
		system_os_family="Alpine Linux"
		system_os_version=$(grep VERSION_ID /etc/os-release | cur -d\" -f2)
		system_os_name=$(grep PRETTY_NAME /etc/os-release | cut -d\" -f2)
		busybox="y"
	fi
fi



for system_release_file in /etc/*[_-]version /etc/*[_-]release; do

	[ -f "$system_release_file" ] || continue;
	[ "$system_release_file" = "/etc/os-release" ] && continue;

	if [ -z "$system_os_name" ]; then
		system_os_name=$(head -n1 "$system_release_file")
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
		if  cat "$system_release_file" | grep -q "Red Hat" ; then
			system_os_family="RedHat"
		fi
		if cat "$system_release_file" | grep -q "CentOS" ; then
			system_os_family="CentOS"
		fi
		if cat "$system_release_file" | grep -q "Fedora" ; then
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

if [ "$busybox" = "n" ] && [ -z "$system_ip_address" ]; then
	system_ip_address=$(ip route get $(ip route show 0.0.0.0/0 2>/dev/null | grep -oP 'via \K\S+') 2>/dev/null | grep -oP 'src \K\S+')
fi
if [ -z "$system_ip_address" ]; then
	system_ip_address=$(ip addr | grep 'state UP' -A2 | grep inet | awk '{print $2}' | cut -f1  -d'/' | head -n 1)
fi

# Set the icon as the lower case version of the System Family.
system_os_icon=$(lcase $system_os_family)

# Get the System Serial Number
system_serial=""
system_serial=$(dmidecode -s system-serial-number 2>/dev/null | grep -v "^#")
if [ -z "$system_serial" ]; then
	if [ -n "$(which lshal 2>/dev/null)" ]; then
		system_serial=$(lshal | grep "system.hardware.serial" | cut -d\' -f2)
	fi
fi
if [ -z "$system_serial" ]; then
	system_serial=$(cat /sys/class/dmi/id/product_serial 2>/dev/null)
fi

# Get the System Model
if [ -z "$system_model" ]; then
	system_model=$(dmidecode -s system-product-name 2>/dev/null | grep -v "^#")
	if [ -z "$system_model" ] && [ -n "$(which lshal 2>/dev/null)" ]; then
		system_model=$(lshal | grep "system.hardware.product" | cut -d\' -f2)
	fi
	if [ -z "$system_model" ]; then
		system_model=$(cat /sys/devices/virtual/dmi/id/product_name 2>/dev/null)
	fi
fi

# get the systemd identifier
dbus_identifier=$(cat /var/lib/dbus/machine-id 2>/dev/null)

# Get the System Manufacturer
if [ -z "$system_manufacturer" ]; then
	system_manufacturer=$(dmidecode -s system-manufacturer 2>/dev/null | grep -v "^#")
	if [ -z "$system_manufacturer" ]; then
		if [ -n "$(which lshal 2>/dev/null)" ]; then
			system_manufacturer=$(lshal | grep "system.hardware.vendor" | cut -d\' -f2)
		fi
	fi
	if [ -z "$system_manufacturer" ]; then
		system_manufacturer=$(cat /sys/devices/virtual/dmi/id/sys_vendor 2>/dev/null)
	fi
fi

# A few specific checks below here
if [ -z "$system_model" ] && [ -e "/proc/user_beancounters" ] && [ "$(cat /proc/1/status 2>/dev/null | grep "^envID:" | cut -d: -f2 | awk '{print $1}')" != "1" ]; then
	# Test for an OpenVZ guest
	system_model="OpenVZ"
	system_manufacturer="OpenVZ"
fi
if [ -z "$system_model" ] && [ -n "$(which dmidecode 2>/dev/null)" ]; then
	if dmidecode | egrep -i 'manufacturer' | grep -q "Microsoft" ; then
		# test for a Microsoft virtual machine
		system_model="Virtual Machine"
		system_manufacturer="Microsoft"
	fi
fi

# Get the System Uptime
system_uptime=$(cut -d. -f1 < /proc/uptime)

# Get the System Form factor
system_form_factor=""
if [ "$system_model" = "Bochs" -o "$system_model" = "KVM" -o "$system_model" = "Virtual Machine" -o "$system_model" = "VMware Virtual Platform" -o "$system_model" = "OpenVZ" -o "$system_model" = "VirtualBox" ]; then
	system_form_factor="Virtual"
else
	system_form_factor=$(dmidecode -s chassis-type 2>/dev/null | grep -v "^#")
	if [ "$system_form_factor" = "<OUT OF SPEC>" ]; then
		system_form_factor="Unknown"
	fi
	system_form_factor=$(pcase $system_form_factor)
fi
if [ -z "$system_form_factor" ]; then
	if [ -n "$(which lshal 2>/dev/null)" ]; then
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

if [ -z "$system_pc_cores_x_processor" ] && [ -n "$(which lshal 2>/dev/null)" ]; then
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
if [ "$system_pc_physical_processors" = "0" ]; then
	system_pc_physical_processors="1"
fi

# Guess the OS Instalation Date
# There is no way to know for sure the install date. /etc/distro-release should give a clue, but it is not really accurate
#
if [ -n "$(which stat 2>/dev/null)" ]; then
	system_pc_date_os_installation=$(stat "$system_release_file" | grep "^Modify:" | cut -d" " -f2)
else
	system_pc_date_os_installation=""
fi

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
echo "		<dbus_identifier>$(escape_xml "$dbus_identifier")</dbus_identifier>"
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
	if [ -n "$(which lshal 2>/dev/null)" ]; then
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
	if [ -n "$(which lshal 2>/dev/null)" ]; then
		bios_firm_rev=$(lshal | grep "smbios.bios.version" | cut -d\' -f2)
		if [ -z "$bios_firm_rev" ]; then
			bios_firm_rev=$(lshal | grep "system.firmware.version" | cut -d\' -f2)
		fi
		if [ -z "$bios_firm_rev" ]; then
			bios_firm_rev=$(cat /sys/class/dmi/id/bios_version 2>/dev/null)
		fi
	fi
fi

# Make the BIOS Description using the manufacturer - Firmware Rev
if [ -n "$bios_firm_rev" ]; then
	bios_description=$(echo "$bios_manufacturer" | cut -d" " -f1)" BIOS - Firmware Rev. $bios_firm_rev"
else
	if [ -n "$bios_manufacturer" ]; then
		bios_description=$(echo "$bios_manufacturer" | cut -d" " -f1)" BIOS"
	else
		bios_description=""
	fi
fi

# Get the BIOS Serial = System Serial
bios_serial="$system_serial"

# Get the SMBIOS Version
bios_smversion=""
bios_smversion=$(dmidecode 2>/dev/null | grep -i SMBIOS | cut -d' ' -f2)
if [ -z "$bios_smversion" ]; then
	if [ -n "$(which lshal 2>/dev/null)" ]; then
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

if [ -z "$bios_version" ] && [ -n "$(which lshal 2>/dev/null)" ]; then
	bios_version=$(lshal | grep "smbios.bios.version" | cut -d\' -f2)
	if [ -z "$bios_version" ]; then
		bios_version=$(lshal | grep "system.firmware.version" | cut -d\' -f2)
	fi
fi

#'''''''''''''''''''''''''''''''''
#' Write to the audit file       '

#'''''''''''''''''''''''''''''''''
# only output the bios section if we have some details
if [ -n "$bios_description" ] || [ -n "$bios_manufacturer" ] || [ -n "$bios_serial" ] || [ -n "$bios_smversion" ] || [ -n "$bios_version" ]; then
	{
	echo "	<bios>"
	echo "		<item>"
	echo "			<description>$(escape_xml "$bios_description")</description>"
	echo "			<manufacturer>$(escape_xml "$bios_manufacturer")</manufacturer>"
	echo "			<serial>$(escape_xml "$bios_serial")</serial>"
	echo "			<smversion>$(escape_xml "$bios_smversion")</smversion>"
	echo "			<version>$(escape_xml "$bios_version")</version>"
	echo "		</item>"
	echo "	</bios>"
	} >> "$xml_file"
fi

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
if [ -z "$processor_description" ]; then
	processor_description=$(grep "system type" /proc/cpuinfo | head -n1 | cut -d: -f2)
fi
# Get processor speed
processor_speed=$(grep "cpu MHz" /proc/cpuinfo | head -n1 | cut -d: -f2 | awk '{printf("%d\n",$1 + 0.5)}')
if [ -z "$processor_speed" ]; then
	processor_speed=$(grep "CPUClock" /proc/cpuinfo | head -n1 | cut -d: -f2 | awk '{printf("%d\n",$1 + 0.5)}')
fi
# Get processor manufacturer
processor_manufacturer=$(grep vendor_id /proc/cpuinfo | head -n1 | cut -d: -f2)

#'''''''''''''''''''''''''''''''''
#' Write to the audit file       '

#'''''''''''''''''''''''''''''''''

total_cores=$(( $system_pc_cores_x_processor * $system_pc_physical_processors ))
total_logical_processors=$(( $system_pc_threads_x_processor * $system_pc_physical_processors ))
{
echo "	<processor>"
echo "		<item>"
echo "			<physical_count>$(escape_xml "$system_pc_physical_processors")</physical_count>"
echo "			<core_count>$(escape_xml "$total_cores")</core_count>"
echo "			<logical_count>$(escape_xml "$total_logical_processors")</logical_count>"
echo "			<socket>$(escape_xml "$processor_socket")</socket>"
echo "			<description>$(escape_xml "$processor_description")</description>"
echo "			<speed>$(escape_xml "$processor_speed")</speed>"
echo "			<manufacturer>$(escape_xml "$processor_manufacturer")</manufacturer>"
echo "		</item>"
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
#echo "IFS is "
#echo "$IFS"|hexdump -C
#dmidecode -t 17 2>/dev/null | awk '/DMI type 17/{print $2}' |hexdump -C
	IFS="$ORIGIFS";
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
				echo "		<item>"
				echo "			<bank>$(escape_xml "$memory_bank")</bank>"
				echo "			<type>$(escape_xml "$memory_type")</type>"
				echo "			<form_factor>$(escape_xml "$memory_form_factor")</form_factor>"
				echo "			<detail>$(escape_xml "$memory_detail")</detail>"
				echo "			<size>$(escape_xml "$memory_capacity")</size>"
				echo "			<speed>$(escape_xml "$memory_speed")</speed>"
				echo "			<tag>$(escape_xml "$memory_tag")</tag>"
				echo "			<serial>$(escape_xml "$memory_serial")</serial>"
				echo "		</item>"
				} >> "$xml_file"
			fi
	done

	echo "	</memory>">> "$xml_file"
fi
IFS="$NEWLINEIFS"

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
	echo "		<item>"
	echo "			<manufacturer>$(escape_xml "$mobo_manufacturer")</manufacturer>"
	echo "			<model>$(escape_xml "$mobo_model")</model>"
	echo "			<serial>$(escape_xml "$mobo_serial")</serial>"
	echo "			<processor_slot_count>$(escape_xml "$system_pc_physical_processors")</processor_slot_count>"
	echo "			<processor_type>$(escape_xml "$processor_socket")</processor_type>"
	echo "			<memory_slot_count>$(escape_xml "$memory_slots")</memory_slot_count>"
	echo "		</item>"
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

	echo "	<optical>" >> "$xml_file"

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
		echo "		<item>"
		echo "			<description>$(escape_xml "$optical_caption")</description>"
		echo "			<model>$(escape_xml "$optical_caption $optical_drive_release")</model>"
		echo "			<device>$(escape_xml "$optical_device_ID")</device>"
		echo "			<mount_point>$(escape_xml "$optical_drive_mount_point")</mount_point>"
		echo "		</item>"
		} >> "$xml_file"
	done
	echo "	</optical>" >> "$xml_file"
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
	echo "	<video>" >> "$xml_file"
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
		echo "		<item>"
		echo "			<model>$(escape_xml "$video_description")</model>"
		echo "			<manufacturer>$(escape_xml "$video_manufacturer")</manufacturer>"
		echo "			<size>$(escape_xml "$video_memory")</size>"
		echo "		</item>"
		} >> "$xml_file"
	done
	echo "	</video>" >> "$xml_file"
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
	echo "	<sound>" >> "$xml_file"
	for sound_adapter in $sound_pci_adapters; do
		sound_device_name=$(lspci -vms "$sound_adapter" | grep '^Device' | tail -n1  | cut -d: -f2 | cut -c2-)
		sound_revision=$(lspci -vms "$sound_adapter" | grep '^Rev' | cut -d: -f2 | cut -c2-)
		sound_name="$sound_device_name"
		if [ -n "$sound_revision" ]; then
			sound_name="$sound_device_name (Rev: $sound_revision)"
		fi
		sound_manufacturer=$(lspci -vms "$sound_adapter" | grep '^Vendor' | cut -d: -f2 | cut -c2-)
		{
		echo "		<item>"
		echo "			<model>$(escape_xml "$sound_name")</model>"
		echo "			<manufacturer>$(escape_xml "$sound_manufacturer")</manufacturer>"
		echo "			<device>$(escape_xml "$sound_adapter")</device>"
		echo "		</item>"
		} >> "$xml_file"
	done
	echo "	</sound>" >> "$xml_file"
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

addr_info=""
echo "	<network>" >> "$xml_file";

# first look for bonded network cards - new for 1.5.6
#for net_connection_id in $(ls -l `find /sys/class/net -maxdepth 1 -type l -print` | cut -d" " -f9 | cut -d/ -f5); do
#for net_connection_id in $(ls -l `find /sys/class/net -maxdepth 1 -type l -print` | cut -d" " -f10 | cut -d/ -f5); do
for net_connection_id in $(ls /sys/class/net/) ; do
	if [ -f "/proc/net/bonding/$net_connection_id" ]; then
		# we have a bonded nic
		net_index=$(cat /sys/class/net/$net_connection_id/ifindex)
		net_card_id="$net_connection_id"
		net_card_mac="$system_hostname:$net_connection_id:$net_index"
		net_card_manufacturer="Linux Kernel"
		net_card_model="Virtual Bonded NIC"
		net_card_description="Virtual Bonded NIC ($net_connection_id)"
		net_card_enabled=""
		net_card_status=$(cat /sys/class/net/$net_connection_id/operstate)
		if [ "$net_card_status" = "up" ]; then
				net_card_status="Connected"
		else
				net_card_status="Disconnected"
		fi
		net_slaves=""
		for slave in $(cat /proc/net/bonding/$net_connection_id | grep "Slave Interface" | cut -d" " -f3); do
				if [ -n "$net_slaves" ]; then
						net_slaves="$net_slaves, $slave"
				else
						net_slaves="$slave"
				fi
		done
		net_active_slave=$(cat /proc/net/bonding/$net_connection_id | grep "Currently Active Slave" | cut -d" " -f4)
		net_slaves="$net_slaves ($net_active_slave active)"
		net_card_speed=""
		if [ -n "$(which ethtool 2>/dev/null)" ]; then
				net_card_speed=$(ethtool "$net_active_slave" 2>/dev/null | grep Speed | cut -d: -f2 | sed 's/[^0-9]//g')
				if [ $net_card_speed ]; then
						net_card_speed=$((net_card_speed * 1000000))
				fi
		fi
		net_card_type="Ethernet 802.3"
		net_card_dhcp_enab=""
		net_card_dhcp_server=""
		net_card_dhcp_lease_obtained=""
		net_card_dhcp_lease_expires=""
		net_card_dns_domain=""
		net_card_domain_reg=""
		net_card_dns_server=""

		# Check DHCP lease for this card
		# Distros store the lease info in different files/locations, I'm getting the file from the running process
		net_card_lease_file=$(ps -ef | grep dhclient | grep "$net_card_id" | sed -e 's/^.*-lf//' | cut -d" " -f2)
		# below only works for Debian
		# net_card_lease_file="/var/lib/dhcp/dhclient.$net_card_id.leases"
		# below only works for RH
		# net_card_lease_file="/var/lib/dhclient/dhclient-$net_card_id.leases"

		if [ ! -e "$net_card_lease_file" ]; then
			net_card_dhcp_enab="False"
			set_by="static"
			net_card_dhcp_server=""
			net_card_dhcp_lease_expire=""
		else
			net_card_dhcp_enab="True"
			set_by="dhcp"
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

		# Get Info on active IPV4 Addresses for this card
		for net_card_enabled_ip4_addr in $(ip addr show "$net_connection_id" | grep 'inet ' | cut -dt -f2 | cut -db -f1 | cut -c2- | cut -d" " -f1); do
			net_card_enabled="True"
			ip=$(echo "$net_card_enabled_ip4_addr" | cut -d/ -f1)
			temp=$(echo "$net_card_enabled_ip4_addr" | cut -d/ -f2)
			subnet=$(cidr2mask "$temp")
			addr_info=$addr_info"
		<item>
			<mac>$(escape_xml "$net_card_mac")</mac>
			<net_index>$(escape_xml "$net_index")</net_index>
			<ip>$(escape_xml "$ip")</ip>
			<netmask>$(escape_xml "$subnet")</netmask>
			<version>4</version>
			<set_by>$(escape_xml "$set_by")</set_by>
			<type>bonded</type>
		</item>"
		done
		# Get Info on active IPV6 Addresses for this card
		for net_card_enabled_ip6_addr in $(ip addr show "$net_connection_id" | grep 'inet6' | cut -c11- | cut -ds -f1); do
			net_card_enabled="True"
			ip=$(echo "$net_card_enabled_ip6_addr" | cut -d/ -f1)
			subnet=$(echo "$net_card_enabled_ip6_addr" | cut -d/ -f2)
			addr_info=$addr_info"
		<item>
			<mac>$(escape_xml "$net_card_mac")</mac>
			<net_index>$(escape_xml "$net_index")</net_index>
			<ip>$(escape_xml "$ip")</ip>
			<cidr>$(escape_xml "$subnet")</cidr>
			<version>6</version>
			<set_by>$(escape_xml "$set_by")</set_by>
			<type>bonded</type>
		</item>"
		done

		{
		echo "		<item>"
		echo "			<mac>$(escape_xml "$net_card_mac")</mac>"
		echo "			<manufacturer>$(escape_xml "$net_card_manufacturer")</manufacturer>"
		echo "			<model>$(escape_xml "$net_card_model")</model>"
		echo "			<description>$(escape_xml "$net_card_description")</description>"
		echo "			<alias></alias>"
		echo "			<ip_enabled>$(escape_xml "$net_card_enabled")</ip_enabled>"
		echo "			<net_index>$(escape_xml "$net_index")</net_index>"
		echo "			<dhcp_enabled>$(escape_xml "$net_card_dhcp_enab")</dhcp_enabled>"
		echo "			<dhcp_server>$(escape_xml "$net_card_dhcp_server")</dhcp_server>"
		echo "			<dhcp_lease_obtained>$(escape_xml "$net_card_dhcp_lease_obtained")</dhcp_lease_obtained>"
		echo "			<dhcp_lease_expires>$(escape_xml "$net_card_dhcp_lease_expire")</dhcp_lease_expires>"
		echo "			<dns_host_name>$(escape_xml "$system_hostname")</dns_host_name>"
		echo "			<dns_server>$(escape_xml "$net_card_dns_server")</dns_server>"
		echo "			<dns_domain>$(escape_xml "$net_card_dns_domain")</dns_domain>"
		echo "			<dns_domain_reg_enabled>$(escape_xml "$net_card_domain_reg")</dns_domain_reg_enabled>"
		echo "			<type>$(escape_xml "$net_card_type")</type>"
		echo "			<connection>$(escape_xml "$net_connection_id")</connection>"
		echo "			<connection_status>$(escape_xml "$net_card_status")</connection_status>"
		echo "			<speed>$(escape_xml "$net_card_speed")</speed>"
		echo "			<slaves>$(escape_xml "$net_slaves")</slaves>"
		echo "			<ifadminstatus></ifadminstatus>"
		echo "			<iflastchange></iflastchange>"
		echo "		</item>"
		} >> "$xml_file"

	fi
done

IFS="$ORIGIFS"
net_cards=""
temp=$(ls /sys/class/net/)
for dir in $temp; do
	if [ -e "/sys/class/net/$dir/device" ]; then
		dev=""
		if [ "$busybox" = "n" ]; then
		dev=$(echo "/sys/class/net/$dir" | readlink -f "/sys/class/net/$dir/device" 2>/dev/null | awk -F/ '{ print $5 }' | awk -F: '{ print $2":"$3 }' | tr -d '[:blank:]' 2>/dev/null)
		fi
		if [ "$busybox" = "y" ]; then
			# busy box has realpath, not readlink
			dev="0"
		fi
		if [ -n "$dev" ]; then
			if [ -n "$net_cards" ]; then
				net_cards="$net_cards$dev/$dir "
			else
				net_cards="$dev/$dir "
			fi
		fi
	fi
done

dev=""
temp=""
if [ -n "$net_cards" ]; then
	# Store the IP Addresses Information in a variable to write it later on the file
	for net_card_connection_id in $net_cards; do
		net_card_id=$(echo "$net_card_connection_id" | cut -d/ -f2)
		net_card_pci=$(echo "$net_card_connection_id" | cut -d/ -f1)
		net_card_mac=""

		# determine the cards MAC Address
		# first try ethtool as ifconfig can report duplicate MACs in the case of bonded NICs on CentOS
		if [ -n "$(which ethtool 2>/dev/null)" ]; then
			net_card_mac=$(ethtool -P "$net_card_id" 2>/dev/null | grep -F "Permanent" | cut -d" " -f3)
		fi
		if [ -z "$net_card_mac" ] || [ "$net_card_mac" = "00:00:00:00:00:00" ]; then
			net_card_mac=$(cat /sys/class/net/$net_card_id/address)
		fi

		net_index=$(cat /sys/class/net/$net_card_id/ifindex)

		if [ "$net_card_pci" = 'virtual' ]; then
			net_card_model="Virtual Interface"
			net_card_manufacturer="Linux"
		elif [ "$(which lspci 2>/dev/null)" != "" ]; then
			net_card_model=$(lspci -vms "$net_card_pci" | grep -v "$net_card_pci" | grep ^Device | cut -d: -f2 | cut -c2-)
			net_card_manufacturer=$(lspci -vms "$net_card_pci" | grep ^Vendor | cut -d: -f2 | cut -c2-)
		elif [ "$system_model" = *"VMware"* ]; then
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
			net_card_speed=$((net_card_speed * 1000000))
		fi

		temp=$(cat /sys/class/net/"$net_card_id"/operstate)
		net_card_status=$(trim "$temp")
		if [ "$net_card_status" = "up" ]; then
			net_card_status="Connected"
		else
			net_card_status="Disconnected"
		fi

		net_card_enabled="False"
		# Check DHCP lease for this card
		# Distros store the lease info in different files/locations, I'm getting the file from the running process
		net_card_lease_file=$(ps -ef 2>/dev/null | grep dhclient | grep "$net_card_id" | sed -e 's/^.*-lf//' | cut -d" " -f2)
		# below only works for Debian
		# net_card_lease_file="/var/lib/dhcp/dhclient.$net_card_id.leases"
		# below only works for RH
		# net_card_lease_file="/var/lib/dhclient/dhclient-$net_card_id.leases"

		if [ ! -e "$net_card_lease_file" ]; then
			net_card_dhcp_enab="False"
			set_by="static"
			net_card_dhcp_server=""
			net_card_dhcp_lease_expire=""
		else
			net_card_dhcp_enab="True"
			set_by="dhcp"
			net_card_dhcp_server=$(grep dhcp-server "$net_card_lease_file" | tail -n1 | sed 's/;//' | cut -d" " -f5)
			net_card_dhcp_lease_expire=$(grep expire "$net_card_lease_file" | tail -n1 | sed 's/;//' | cut -d" " -f5 | sed 's|/|-|g')
			# To get the Obtained date we need to get lease time first
			net_card_dhcp_lease_time=$(grep lease-time "$net_card_lease_file" | tail -n1 | sed 's/;//' | cut -d" " -f5)
			net_card_dhcp_lease_days=$((net_card_dhcp_lease_time / 60 / 60 / 24))
			net_card_dhcp_lease_obtained=$(date -d ''"$net_card_dhcp_lease_expire"' -'"$net_card_dhcp_lease_days"' days' +%F)
		fi


		# Get Info on active IPV4 Addresses for this card
		for net_card_enabled_ip4_addr in $(ip addr show "$net_card_id" | grep 'inet ' | cut -dt -f2 | cut -db -f1 | cut -c2- | cut -d" " -f1); do
			net_card_enabled="True"
			ip=$(echo "$net_card_enabled_ip4_addr" | cut -d/ -f1)
			temp=$(echo "$net_card_enabled_ip4_addr" | cut -d/ -f2)
			subnet=$(cidr2mask "$temp")
			addr_info=$addr_info"
		<item>
			<mac>$(escape_xml "$net_card_mac")</mac>
			<net_index>$(escape_xml "$net_index")</net_index>
			<ip>$(escape_xml "$ip")</ip>
			<netmask>$(escape_xml "$subnet")</netmask>
			<version>4</version>
			<set_by>$(escape_xml "$set_by")</set_by>
		</item>"
		done

		# Get Info on active IPV6 Addresses for this card
		for net_card_enabled_ip6_addr in $(ip addr show "$net_card_id" | grep 'inet6' | cut -c11- | cut -ds -f1); do
			net_card_enabled="True"
			ip=$(echo "$net_card_enabled_ip6_addr" | cut -d/ -f1)
			subnet=$(echo "$net_card_enabled_ip6_addr" | cut -d/ -f2)
			addr_info=$addr_info"
		<item>
			<mac>$(escape_xml "$net_card_mac")</mac>
			<net_index>$(escape_xml "$net_index")</net_index>
			<ip>$(escape_xml "$ip")</ip>
			<cidr>$(escape_xml "$subnet")</cidr>
			<version>6</version>
			<set_by>$(escape_xml "$set_by")</set_by>
		</item>"
		done

		# TODO: Domain Registration & WINS Info (Samba)
		net_card_domain_reg=""
		net_card_dns_server=$(awk '/^name/{print $2}' /etc/resolv.conf | head -n1)
		net_card_dns_domain=$(awk '/^domain/{print $2}' /etc/resolv.conf | head -n1)
		if [ -z "$net_card_dns_domain" ]; then
			net_card_dns_domain=$(awk '/^search/{print $2}' /etc/resolv.conf | head -n1)
		fi

		{
		echo "		<item>"
		echo "			<mac>$(escape_xml "$net_card_mac")</mac>"
		echo "			<manufacturer>$(escape_xml "$net_card_manufacturer")</manufacturer>"
		echo "			<model>$(escape_xml "$net_card_model")</model>"
		echo "			<description>$(escape_xml "$net_card_description")</description>"
		echo "			<alias></alias>"
		echo "			<ip_enabled>$(escape_xml "$net_card_enabled")</ip_enabled>"
		echo "			<net_index>$(escape_xml "$net_index")</net_index>"
		echo "			<dhcp_enabled>$(escape_xml "$net_card_dhcp_enab")</dhcp_enabled>"
		echo "			<dhcp_server>$(escape_xml "$net_card_dhcp_server")</dhcp_server>"
		echo "			<dhcp_lease_obtained>$(escape_xml "$net_card_dhcp_lease_obtained")</dhcp_lease_obtained>"
		echo "			<dhcp_lease_expires>$(escape_xml "$net_card_dhcp_lease_expire")</dhcp_lease_expires>"
		echo "			<dns_host_name>$(escape_xml "$system_hostname")</dns_host_name>"
		echo "			<dns_server>$(escape_xml "$net_card_dns_server")</dns_server>"
		echo "			<dns_domain>$(escape_xml "$net_card_dns_domain")</dns_domain>"
		echo "			<dns_domain_reg_enabled>$(escape_xml "$net_card_domain_reg")</dns_domain_reg_enabled>"
		echo "			<type>$(escape_xml "$net_card_type")</type>"
		echo "			<connection>$(escape_xml "$net_card_id")</connection>"
		echo "			<connection_status>$(escape_xml "$net_card_status")</connection_status>"
		echo "			<speed>$(escape_xml "$net_card_speed")</speed>"
		echo "			<slaves>$(escape_xml "$net_slaves")</slaves>"
		echo "			<ifadminstatus></ifadminstatus>"
		echo "			<iflastchange></iflastchange>"
		echo "		</item>"
		} >> "$xml_file"
	done
fi
echo "	</network>" >> "$xml_file"


##################################
# ADDRESSES SECTION              #
##################################

if [ -n "$addr_info" ]; then
	{
	echo "	<ip>$addr_info"
	echo "	</ip>"
	} >> "$xml_file"
fi


##################################
# DISK SECTION                   #
##################################
if [ "$debugging" -gt "0" ]; then
	echo "Hard Disk Info"
fi
echo "	<disk>" >> "$xml_file"
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
	if [ "$hard_drive_size" -gt 1048576 ]; then
		hard_drive_size=$((hard_drive_size / 1024 / 1024))
	else
		hard_drive_size="0"
	fi
	hard_drive_device_id="/dev/$disk"
	hard_drive_partitions=$(lsblk -lno NAME /dev/$disk | grep -v "^$disk\$" -c)
	hard_drive_status=""
	hard_drive_model_family=""
	hard_drive_firmware=$(udevadm info -q all -n /dev/"$disk" 2>/dev/null | grep ID_REVISION= | cut -d= -f2)

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

	if [ -n "$(which smartctl 2>/dev/null)" ]; then
		# use smart tools as they are installed
		hard_drive_status=$(smartctl -H /dev/"$disk" 2>/dev/null | grep "SMART overall" | cut -d: -f2)
		hard_drive_model_family=$(smartctl -i /dev/"$disk" 2>/dev/null | grep "Model Family" | cut -d: -f2)
	fi

	# some hacks
	if [ -z "$hard_drive_manufacturer" ] &&  echo "$hard_drive_model" | grep -q "Crucial" ; then
		hard_drive_manufacturer="Crucial"
	fi

	if echo "$hard_drive_manufacturer" | grep -q "VMware" ; then
		hard_drive_manufacturer="VMware"
		hard_drive_model_family="VMware"
		hard_drive_model="VMware Virtual Disk"
	fi

	if echo "$hard_drive_model" | grep -q "VMware" || echo "$hard_drive_model" | grep -q "Virtual" ; then
		hard_drive_model="VMware Virtual Disk"
	fi

	{
	echo "		<item>"
	echo "			<caption>$(escape_xml "$hard_drive_caption")</caption>"
	echo "			<hard_drive_index>$(escape_xml "$hard_drive_index")</hard_drive_index>"
	echo "			<interface_type>$(escape_xml "$hard_drive_interface_type")</interface_type>"
	echo "			<manufacturer>$(escape_xml "$hard_drive_manufacturer")</manufacturer>"
	echo "			<model>$(escape_xml "$hard_drive_model")</model>"
	echo "			<serial>$(escape_xml "$hard_drive_serial")</serial>"
	echo "			<size>$(escape_xml "$hard_drive_size")</size>"
	echo "			<device>$(escape_xml "$hard_drive_device_id")</device>"
	echo "			<partition_count>$(escape_xml "$hard_drive_partitions")</partition_count>"
	echo "			<status>$(escape_xml "$hard_drive_status")</status>"
	echo "			<firmware>$(escape_xml "$hard_drive_firmware")</firmware>"
	echo "			<model_family>$(escape_xml "$hard_drive_model_family")</model_family>"
	echo "		</item>"
	} >> "$xml_file"

	for partition in $(lsblk -lno NAME /dev/$disk 2>/dev/null | grep -v ^$disk\$ ); do
		if [ -n "$partition" ] && [ "$partition" != "$disk" ]; then

			# partition_mount_type=$(lsblk -lndo TYPE /dev/"$partition" 2>/dev/null)
			partition_mount_type=$(lsblk -lno NAME,TYPE /dev/$disk 2>/dev/null | grep "^$partition " | sed -e "s/$partition//g")
			partition_mount_type=$(trim "$partition_mount_type")
			if [ "$partition_mount_type" = "part" ]; then
				partition_mount_type="partition"
				partition_type="local"
			else
				partition_mount_type="mount point"
				partition_type="$partition_mount_type"
			fi

			#partition_mount_point=$(lsblk -lndo MOUNTPOINT /dev/"$partition" 2>/dev/null)
			partition_mount_point=$(lsblk -lno NAME,MOUNTPOINT /dev/$disk 2>/dev/null | grep "^$partition " | sed -e "s/$partition//g")
			partition_mount_point=$(trim "$partition_mount_point")

			#partition_name=$(lsblk -lndo LABEL /dev/"$partition" 2>/dev/null)
			partition_name=$(lsblk -lno NAME,LABEL /dev/$disk 2>/dev/null | grep "^$partition " | sed -e "s/$partition//g")
			partition_name=$(trim "$partition_name")

			#partition_size=$(lsblk -lbndo SIZE /dev/"$partition" 2>/dev/null)
			#partition_size=$(lsblk -lbo NAME,SIZE /dev/$disk 2>/dev/null | grep "^$partition " | sed -e "s/$partition//g")
			partition_size=$(lsblk -lbo NAME,SIZE /dev/$disk 2>/dev/null | grep "^$partition " | rev | cut -d" " -f1 | rev)
			partition_size=$((partition_size / 1024 / 1024))

			#partition_format=$(lsblk -lndo FSTYPE /dev/"$partition" 2>/dev/null)
			partition_format=$(lsblk -lno NAME,FSTYPE /dev/$disk 2>/dev/null | grep "^$partition " | sed -e "s/$partition//g")
			partition_format=$(trim "$partition_format")

			#partition_caption=$(lsblk -lndo LABEL /dev/"$partition" 2>/dev/null)
			partition_caption=$(lsblk -lno NAME,LABEL /dev/$disk 2>/dev/null | grep "^$partition " | sed -e "s/$partition//g")
			partition_caption=$(trim "$partition_caption")

			partition_device_id="/dev/$partition"
			partition_disk_index="$disk"
			partition_bootable=""
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

			partition_result=$partition_result"
		<item>
			<serial>$(escape_xml "$partition_serial")</serial>
			<name>$(escape_xml "$partition_name")</name>
			<description>$(escape_xml "$partition_caption")</description>
			<device>$(escape_xml "$partition_device_id")</device>
			<hard_drive_index>$(escape_xml "$partition_disk_index")</hard_drive_index>
			<partition_disk_index>$(escape_xml "$partition_disk_index")</partition_disk_index>
			<mount_type>$(escape_xml "$partition_mount_type")</mount_type>
			<mount_point>$(escape_xml "$partition_mount_point")</mount_point>
			<size>$(escape_xml "$partition_size")</size>
			<free>$(escape_xml "$partition_free_space")</free>
			<used>$(escape_xml "$partition_used_space")</used>
			<format>$(escape_xml "$partition_format")</format>
			<type>$(escape_xml "$partition_type")</type>
		</item>"

		fi
	done
done
echo "	</disk>" >> "$xml_file"


##################################
# NFS MOUNTS SECTION             #
##################################
for mount in $(mount -l -t nfs,nfs2,nfs3,nfs4 2>/dev/null); do
	partition_mount_point=$(echo "$mount" | cut -d" " -f3)
	partition_name=$(echo "$mount" | cut -d" " -f1)
	if [ -n $(which timeout) ]; then
		partition_free_space=$(timeout 300 df -m --total "$partition_mount_point" 2>/dev/null | grep ^total | awk '{print $4}')
		partition_used_space=$(timeout 300 df -m --total "$partition_mount_point" 2>/dev/null | grep ^total | awk '{print $3}')
	else
		partition_free_space=$(df -m --total "$partition_mount_point" 2>/dev/null | grep ^total | awk '{print $4}')
		partition_used_space=$(df -m --total "$partition_mount_point" 2>/dev/null | grep ^total | awk '{print $3}')
	fi
	if [ -z "$partition_free_space" ]; then
		partition_free_space=0;
	fi
	if [ -z "$partition_used_space" ]; then
		partition_used_space=0;
	fi
	partition_size=$((partition_free_space + partition_used_space))
	partition_format=""
	partition_caption=""
	partition_device_id=""
	partition_device_id=""
	partition_disk_index=""
	partition_type="NFS Mount"
	partition_serial=""
	partition_result=$partition_result"
		<item>
			<serial>$(escape_xml "$partition_serial")</serial>
			<name>$(escape_xml "$partition_name")</name>
			<description>$(escape_xml "$partition_caption")</description>
			<device>$(escape_xml "$partition_device_id")</device>
			<hard_drive_index></hard_drive_index>
			<partition_disk_index>$(escape_xml "$partition_disk_index")</partition_disk_index>
			<mount_type>mount point</mount_type>
			<mount_point>$(escape_xml "$partition_mount_point")</mount_point>
			<size>$(escape_xml "$partition_size")</size>
			<free>$(escape_xml "$partition_free_space")</free>
			<used>$(escape_xml "$partition_used_space")</used>
			<format>$(escape_xml "$partition_format")</format>
			<bootable></bootable>
			<type>nfs</type>
		</item>"
done


#####################################
# PARTITION AND NFS MOUNTS SECTION  #
#####################################

if [ -n "$partition_result" ]; then
	{
	echo "	<partition>$partition_result"
	echo "	</partition>"
	} >> "$xml_file"
fi


##################################
# LOG SECTION                    #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "Log Info"
fi

echo "	<log>" >> "$xml_file"
for log in ls /etc/logrotate.d/* ; do
	if [ -e "$log" ]; then
		log_file_name=$(grep -m 1 -E "^/" "$log" | sed -e 's/\ {//g')
		log_max_file_size=$(grep -E '\ size\ ' "$log" | grep -oE '[[:digit:]]*')
		{
		echo "		<item>"
		echo "			<name>$(escape_xml "$log")</name>"
		echo "			<file_name>$(escape_xml "$log_file_name")</file_name>"
		echo "			<max_file_size>$(escape_xml "$log_max_file_size")</max_file_size>"
		echo "		</item>"
		} >> "$xml_file"
	fi
done
echo "	</log>" >> "$xml_file"


##################################
# ENVIRONMENT VARIABLE SECTION   #
##################################
IFS='
'
if [ "$debugging" -gt "0" ]; then
	echo "Environment Variable Info"
fi
echo "	<variable>" >> "$xml_file"
for variable in $(env); do
	name=$( echo "$variable" | cut -d= -f1 )
	value=${variable#*=}
	if [ "$name" != "XDG_SESSION_ID" ] && [ "$name" != "SSH_CLIENT" ] && [ "$name" != "SSH_CONNECTION" ] && [ "$name" != "SSH_TTY" ]; then
		echo "		<item>" >> "$xml_file"
		echo "			<program>environment</program>" >> "$xml_file"
		echo "			<name>$(escape_xml "$name")</name>" >> "$xml_file"
		echo "			<value>$(escape_xml "$value")</value>" >> "$xml_file"
		echo "		</item>" >> "$xml_file"
	fi
done

# Puppet facts
if [ -n "$(which facter)" ]; then
    exclusions=" system_uptime memoryfree memoryfree_mb sshdsakey sshfp_dsa sshfp_rsa sshrsakey swapfree swapfree_mb system_uptime "
    for variable in $(facter -p); do
        name=$( echo "$variable" | cut -d" " -f1 )
        if [ -z "$(echo "$exclusions" | grep " $name ")" ]; then
            value=$(echo "$variable" | cut -d" " -f3-)
            echo "      <item>" >> "$xml_file"
            echo "          <program>facter</program>" >> "$xml_file"
            echo "          <name>$(escape_xml "$name")</name>" >> "$xml_file"
            echo "          <value>$(escape_xml "$value")</value>" >> "$xml_file"
            echo "      </item>" >> "$xml_file"
        fi
    done
fi


echo "	</variable>" >> "$xml_file"




##################################
# SWAP SECTION                   #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "Swap Info"
fi
IFS="$NEWLINEIFS"
echo "	<pagefile>" >> "$xml_file"
for swap in $(tail -n +2 /proc/swaps) ; do
	echo "$swap" | awk ' { print "\t\t<item>\n\t\t\t<name>"$1"</name>\n\t\t\t<initial_size>"$3"</initial_size>\n\t\t\t<max_size>"$3"</max_size>\n\t\t</item>" } ' >> "$xml_file"
done
echo "	</pagefile>" >> "$xml_file"


##################################
# USER SECTION                   #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "User Info"
fi
echo "	<user>" >> "$xml_file"

IFS=$(echo -n "\n\b");
grep -v '^ *#' < /etc/passwd | while IFS= read -r line; do
	echo "$line" | awk -F: ' { print "\t\t<item>\n" "\t\t\t<name>"$1"</name>\n" "\t\t\t<full_name><![CDATA["$5"]]></full_name>\n" "\t\t\t<sid>"$3"</sid>\n" "\t\t</item>" } ' >> "$xml_file"
done
echo "	</user>" >> "$xml_file"


##################################
# GROUP SECTION                  #
##################################
IFS=$ORIGIFS
if [ "$debugging" -gt "0" ]; then
	echo "Group Info"
fi
echo "	<user_group>" >> "$xml_file"
for line in $(getent group); do
	name=$(echo "$line" | cut -d: -f1)
	sid=$(echo "$line" | cut -d: -f3)
	members=$(echo "$line" | cut -d: -f4)
	
	for user in $(cat /etc/passwd); do
		gid=$(echo "$user" | cut -d: -f4)
		if [ "$gid" = "$sid" ]; then
			extra_user=$(echo "$user" | cut -d: -f1)
			members=$(echo "$extra_user","$members")
		fi
	done
	members=$(echo "$members" | sed 's/,$//')

	echo "		<item>" >> $xml_file
	echo "			<sid>$(escape_xml "$sid")</sid>" >> $xml_file
	echo "			<name>$(escape_xml "$name")</name>" >> $xml_file
	echo "			<members>$(escape_xml "$members")</members>" >> $xml_file
	echo "		</item>" >> $xml_file
done
echo "	</user_group>" >> "$xml_file"



########################################################
# SOFTWARE SECTION                                     #
########################################################

if [ "$debugging" -gt "0" ]; then
	echo "Software Info"
fi
IFS='
'
echo "	<software>" >> "$xml_file"
case $system_os_family in
		'Ubuntu' | 'Debian' | 'LinuxMint' )
			dpkg-query --show --showformat="\t\t<item>\n\t\t\t<name><![CDATA[\${Package}]]></name>\n\t\t\t<version><![CDATA[\${Version}]]></version>\n\t\t\t<url></url>\n\t\t</item>\n" |\
				sed -e 's/\&.*]]/]]/' >> "$xml_file"
			;;
		'CentOS' | 'RedHat' | 'SUSE' | 'Fedora' )
			rpm -qa --queryformat="\t\t<item>\n\t\t\t<name><\!\[CDATA\[%{NAME}\]\]></name>\n\t\t\t<version><\!\[CDATA\[%{VERSION}-%{RELEASE}\]\]></version>\n\t\t\t<url><\!\[CDATA\[%{URL}\]\]></url>\n\t\t</item>\n" |\
				sed -e 's/\&.*]]/]]/' >> "$xml_file"
			;;
		'Alpine Linux' )
			for package in $(apk info); do
				name="$package"
				version=$(apk info "$package" | grep description | cut -d" " -f1 | cut -d "-" -f2-)
				description=$(apk info "$package" | grep description: -A1 | grep -v description:)
				echo "		<item>" >> "$xml_file"
				echo "			<name>$(escape_xml $package)</name>" >> "$xml_file"
				echo "			<version>$(escape_xml $version)</version>" >> "$xml_file"
				echo "			<description>$(escape_xml $description)</description>" >> "$xml_file"
				echo "		</item>" >> "$xml_file"
			done
			;;
esac
echo "	</software>" >> "$xml_file"

########################################################
# SERVICE SECTION                                      #
########################################################

if [ "$debugging" -gt "0" ]; then
	echo "Service Info"
fi

echo "	<service>" >> "$xml_file"
if hash systemctl 2>/dev/null; then
	# systemD services
	for name in $(systemctl list-units -all --type=service --no-pager --no-legend 2>/dev/null | cut -d" " -f1); do
		display_name=$(echo "$name" | cut -d. -f1)
		description=$(systemctl show "$name" -p Description | cut -d= -f2)
		binary=$(systemctl show "$name" -p ExecStart | cut -d" " -f2 | cut -d= -f2)
		state=$(systemctl show "$name" -p ActiveState | cut -d= -f2)
		user=$(systemctl show "$name" -p User | cut -d= -f2)
		# start_mode order of attribute preference is WantedBy, Wants, After
		start_mode=$(systemctl show "$name" -p WantedBy | cut -d= -f2)
		if [ -z "$start_mode" ]; then
			start_mode=$(systemctl show "$name" -p Wants | cut -d= -f2)
		fi
		if [ -z "$start_mode" ]; then
			start_mode=$(systemctl show "$name" -p After | cut -d= -f2)
		fi
		{
		echo "      <item>"
		echo "          <description>$(escape_xml "$display_name")</description>"
		echo "          <name>$(escape_xml "$name")</name>"
		echo "          <start_mode>$(escape_xml "$start_mode")</start_mode>"
		echo "          <executable>$(escape_xml "$binary")</executable>"
		echo "          <state>$(escape_xml "$state")</state>"
		echo "          <user>$(escape_xml "$user")</user>"
		echo "      </item>"
		} >> "$xml_file"
	done
else
	case $system_os_family in
			'Ubuntu' | 'Debian' )
				if [ -r /etc/inittab ]; then
					INITDEFAULT=$(awk -F: '/id:/,/:initdefault:/ { print $2 }' /etc/inittab)
				else
					if [ -r /etc/init/rc-sysinit.conf ]; then
						INITDEFAULT=$(awk -F= ' /^env\ DEFAULT_RUNLEVEL/ { print $2 } ' /etc/init/rc-sysinit.conf)
					fi
				fi
				# upstart services
				for s in $(initctl 2>/dev/null | awk ' { print $1 } ' | sort | uniq) ; do
					if [ "$s" = "rc" ]; then
						service_start_mode="Auto"
					else
						service_start_mode="Manual"
					fi
					service_name=$(escape_xml "$s")
					echo "\t\t<item>\n\t\t\t<name>$service_name</name>\n\t\t\t<start_mode>$service_start_mode</start_mode>\n\t\t</item>" >> "$xml_file"
				done
				# SysV init services
				for service_name in /etc/init.d/* ; do
					[ -e $service_name ] || break
					if [ "$service_name" != "README" ] && [ "$service_name" != "upstart" ] && [ "$service_name" != "skeleton" ]; then
						{
						echo "      <item>"
						service_display_name=$(echo "$service_name" | cut -d/ -f4)
						echo "          <description>$(escape_xml "$service_display_name")</description>" >> "$xml_file"
						echo "          <name>$(escape_xml "$service_name")</name>"
						} >> "$xml_file"
						if ls /etc/rc"$INITDEFAULT".d/*"$service_name"* 2>/dev/null ; then
							echo "          <start_mode>Manual</start_mode>" >> "$xml_file"
						else
							echo "          <start_mode>Auto</start_mode>" >> "$xml_file"
						fi
						service_name=$(echo "$service_name" | cut -d/ -f4)
						if  [ "$service_name" != "README" ] && [ "$service_name" != "upstart" ] && [ "$service_name" != "skeleton" ] && [ "$service_name" != "rcS" ]; then
							service_state=$(service "$service_display_name" status 2>/dev/null | grep -i running)
							echo "          <state>$(escape_xml "$service_state")</state>" >> "$xml_file"
							service_state=""
						fi
						echo "      </item>" >> "$xml_file"
					fi
				done
				;;
			'CentOS' | 'RedHat' | 'SUSE' )
				# INITDEFAULT=$(awk -F: '/id:/,/:initdefault:/ { print $2 }' /etc/inittab)
				# chkconfig --list |\
				#     sed -e '/^$/d' -e '/xinetd based services:/d' |\
				#     awk -v ID="$INITDEFAULT" ' { sub(/:/, "", $1); print "\t\t<service>\n\t\t\t<service_name>"$1"</service_name>"; if ($2 =="on" || $5 ==ID":on") print "\t\t\t<service_start_mode>Auto</service_start_mode>"; else if ($2 =="off" || $5 ==ID":off") print "\t\t\t<service_start_mode>Manual</service_start_mode>"; print "\t\t</service>" } ' >> "$xml_file"
				# ;;
				INITDEFAULT=$(awk -F: '/id:/,/:initdefault:/ { print $2 }' /etc/inittab)
				for service_name in /etc/init.d/* ; do
					[ -e $service_name ] || break
					if [ "$service_name" != "functions" ] && [ "$service_name" != "rcS" ]; then
						{
						echo "      <item>"
						service_display_name=$(echo "$service_name" | cut -d/ -f4)
						echo "          <description>$(escape_xml "$service_display_name")</description>" >> "$xml_file"
						echo "          <name>$(escape_xml "$service_name")</name>"
						} >> "$xml_file"
						if ls /etc/rc"$INITDEFAULT".d/*"$service_name"* 2>/dev/null ; then
							echo "          <start_mode>Manual</start_mode>" >> "$xml_file"
						else
							echo "          <start_mode>Auto</start_mode>" >> "$xml_file"
						fi
						if  [ "$service_name" != "functions" ] && [ "$service_name" != "rcS" ]; then
							service_state=$(service "$service_display_name" status 2>/dev/null | grep -E -i "running|stopped")
							echo "          <state>$(escape_xml "$service_state")</state>" >> "$xml_file"
							service_state=""
						fi
						echo "      </item>" >> "$xml_file"
					fi
				done
				;;
	esac
fi

echo "	</service>" >> "$xml_file"

########################################################
# SERVER SECTION                                       #
########################################################
server=""
name=""
version=""
test=$(which apache2 2>/dev/null)
if [ -n "$test" ]; then
	name="apache2ctl"
	version=$(apache2 -v | grep "Server version" | cut -d: -f2)
	status=$(service apache2 status)
	server=$server"		<item>"
	server=$server"			<type>web</type>"
	server=$server"			<name>Apache</name>"
	server=$server"			<version>$(escape_xml "$version")</version>"
	server=$server"			<status>$(escape_xml "$status")</status>"
	server=$server"		</item>"
fi
test=$(which httpd 2>/dev/null)
if [ -n "$test" ]; then
	name="httpd"
	version=$(httpd -v | grep "Server version" | cut -d: -f2)
	status=$(service httpd status)
	server=$server"		<item>"
	server=$server"			<type>web</type>"
	server=$server"			<name>Apache</name>"
	server=$server"			<version>$(escape_xml "$version")</version>"
	server=$server"			<status>$(escape_xml "$status")</status>"
	server=$server"		</item>"
fi
if [ -n "$server" ]; then
	echo "	<server>" >> "$xml_file"
	echo "$server" >> "$xml_file"
	echo "	</server>" >> "$xml_file"
fi
# if [ -n "$name" ]; then
# 	hosts=$( "$name" -S 2>/dev/null)
# 	echo "$hosts"
# fi


########################################################
# ROUTE SECTION                                        #
########################################################

if [ "$debugging" -gt "0" ]; then
	echo "Route Info"
fi

echo "	<route>" >> "$xml_file"
if [ -n "$(which route 2>/dev/null)" ]; then
	for i in $(route -n | tail -n +3) ; do
		echo "$i" | awk ' { print "\t\t<item>\n\t\t\t<destination>"$1"</destination>\n\t\t\t<mask>"$3"</mask>\n\t\t\t<metric>"$5"</metric>\n\t\t\t<next_hop>"$2"</next_hop>\n\t\t\t<type>"$4"</type>\n\t\t</item>" } ' >> "$xml_file"
	done
fi
if [ -n "$(which route 2>/dev/null)" ] && [ -n "$(which ip 2>/dev/null)" ]; then
	#route_mask=$(cidr2mask `ip r | grep "default via" | cut -d" " -f1 | cut -d"\"" -f2`)
	route_next_hop=$(ip r | grep "default via" | cut -d" " -f3)
	route_metric=$(ip r | grep "default via" | cut -d" " -f10)
	{
	echo "		<item>"
	echo "			<destination>0.0.0.0</destination>"
	echo "			<mask></mask>"
	echo "			<metric>$(escape_xml "$route_metric")</metric>"
	echo "			<next_hop>$(escape_xml "$route_next_hop")</next_hop>"
	echo "		</item>"
	} >> "$xml_file"
fi
echo "	</route>" >> "$xml_file"


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
	sed -i -e 's/"/%22/g' "$xml_file"
	sed -i -e 's/&/%26/g' "$xml_file"
	if [ "$debugging" -gt 1 ]; then
		echo "Submitting results to server"
		echo "URL: $url"
	fi
	if [ "$display" = "y" ]; then
		url="$url/display"
		debugging=4
	fi
	if [ -n "$(which wget 2>/dev/null)" ]; then
		if [ "$debugging" -gt 3 ]; then
			wget -O add_system --post-file="$xml_file" "$url" 2>/dev/null
			cat add_system
			rm add_system
		else
			wget --delete-after --post-file="$xml_file" "$url" 2>/dev/null
		fi
	else
		if [ -n "$(which curl 2>/dev/null)" ]; then
			if [ "$debugging" -gt 3 ]; then
				curl -o add_system --data "@$xml_file" "$url"
				cat add_system
				rm add_system
			else
				curl --data "@$xml_file" "$url"
			fi
		fi
	fi
fi

sed -i -e 's/form_systemXML=//g' "$xml_file"
sed -i -e 's/%2B/+/g' "$xml_file"
sed -i -e 's/%22/"/g' "$xml_file"
sed -i -e 's/%26/&/g' "$xml_file"

if [ "$create_file" != "y" ]; then
	rm -f "$PWD"/"$xml_file"
fi


if [ "$debugging" -gt 0 ]; then
	elapsed_time=$(timer "$start_time")
	echo "Audit Completed in '$elapsed_time' seconds."
fi


IFS="$ORIGIFS"

if [ "$self_delete" = "y" ]; then
	rm /tmp/audit_linux.sh
fi

exit 0