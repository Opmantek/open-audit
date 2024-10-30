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

# submit the audit to the Open-AudIT server
submit_online="n"

discovery_id=""

# create an XML text file of the result in the current directory
create_file="y"

# the address of the Open-AudIT server "submit" page
url="http://localhost/open-audit/index.php/input/devices"

# optional - assign any PCs audited to this Org - take the org_id from Open-AudIT interface
org_id=""

# if set then delete the audit script upon completion
# useful when starting the script on a remote machine and leaving no trace
self_delete="n"

# 0 = no debug
# 1 = basic debug
# 2 = verbose debug
debugging=2

# Version
version="5.6.0"

# Display help
help="n"

# set by the Discovery function - do not normally set this manually
system_id=""

# Should we attempt to audit any connected SAN's
san_audit="y"

# If we detect the san management software, should we run an auto-discover before the query
san_discover="n"

# If our URL uses https, but the certificate is invalid or unrecognised (self signed), we should submit anyway.
ignore_invalid_ssl="y"

PATH="$PATH:/sbin:/usr/sbin"
export PATH

ORIGIFS=$IFS
#NEWLINEIFS=$(echo -n "\n");
NEWLINEIFS=$(echo -en "\n\b");
IFS="$NEWLINEIFS";

# we set this if we detect we're running on a BB shell
busybox="n"

last_seen_by="audit"

display=""
# This should only be set by Discovery when using the debug option

# The pattern matches to check for certificates
cert_dirs[1]="/etc/ssl/certs/*.pem"
cert_dirs[2]="/etc/ssl/certs/*.crt"
cert_dirs[3]="/etc/ssl/private/*.key"

# DO NOT REMOVE THE LINE BELOW
# Configuration from web UI here

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
	result="$1"
	# Remove line feed / carriage return
	result=$(echo "$result" | tr -d -c '\n\r -~')
	# Trim leading/trailing spaces
	result=$(trim "$result")
	# Enclose in tags if required
	if echo "$result" | grep -Eq -e '[&<>"]' -e "'"; then
		result="<![CDATA[$result]]>"
	fi
	echo "$result"
}

# Get the last character in a string
#
# usage :
#
#   lc=$(last_char "$str")
#
last_char ()
{
   lc=""
   str="${1}"
   slen=${#1}
   if [ "${slen}" -gt "1" ]; then
      lcp=$((slen-1))
      lc="${str:$lcp}"
   fi
   echo "${lc}"
}

# Get the all but the last character in a string
#
# usage :
#
#   ablc=$(all_but_last_char "$str")
#
all_but_last_char ()
{
   ablc=""
   str="${1}"
   slen=${#1}
   lcp=$((slen-1))
   ablc="${str:0:$lcp}"
   echo "${ablc}"
}

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
		"discovery_id" )
			discovery_id="$parameter_value" ;;
		"display" )
			display="$parameter_value" ;;
		"ignore_invalid_ssl" )
			ignore_invalid_ssl="$parameter_value" ;;
		"help" )
			help="$parameter_value" ;;
		"--help" )
			help="y" ;;
		"-h" )
			help="y" ;;
		"last_seen_by" )
			last_seen_by="$parameter_value" ;;
		"org_id" )
			org_id="$parameter_value" ;;
		"submit_online" )
			submit_online="$parameter_value" ;;
		"system_id" )
			system_id="$parameter_value" ;;
		"san_audit" )
			san_audit="$parameter_value" ;;
		"san_discover" )
			san_discover="$parameter_value" ;;
		"url" )
			url="$parameter_value" ;;
	esac
done

if [ "$help" = "y" ]; then
	echo ""
	echo "-----------------------------"
	echo "Open-AudIT Linux audit script"
	echo "Version: $version"
	echo "-----------------------------"
	echo "This script should be run on a Linux based computer using root or sudo access rights."
	echo ""
	echo ""
	echo "Valid command line options are below (items containing * are the defaults) and should take the format name=value (eg: debugging=1)."
	echo ""
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
	echo "  discovery_id"
	echo "     * - The Open-AudIT discovery id. This is populated by Open-AudIT when running this script from discovery."
	echo ""
	echo "  ignore_invalid_ssl"
	echo "    *y - If our URL uses https, but the certificate is invalid or unrecognised (self signed), we should submit anyway."
	echo "     n - Do not submit if certificate is invalid (or self signed)."
	echo ""
	echo "  -h or --help or help=y"
	echo "      y - Display this help output."
	echo "     *n - Do not display this output."
	echo ""
	echo "  org_id"
	echo "       - The org_id (an integer) taken from Open-AudIT. If set all devices found will be associated to that Organisation."
	echo ""
	echo "  san_audit"
	echo "     *y - Should we audit a SAN if it is detected"
	echo "      n - Do not attempt to audit any attached SANs"
	echo ""
	echo "  san_discover"
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
	echo "The name of the resulting XML file will be in the format HOSTNAME-YYMMDDHHIISS.xml, as in the hostname of the machine the the complete timestamp the audit was started."
	exit
fi

########################################################
# CREATE THE AUDIT FILE                                #
########################################################

start_time=$(timer)
rev_exists=$(which rev 2>/dev/null)

if [ "$debugging" -gt 0 ]; then
	echo "Starting audit"
fi

system_hostname=""
if [ -f /etc/hostname ]; then
	system_hostname=$(cat /etc/hostname 2>/dev/null | cut -d. -f1)
fi

if [ -z "$system_hostname" ]; then
	system_hostname=$(hostname -s 2>/dev/null | cut -d. -f1)
fi

if [ -z "$system_hostname" ]; then
	system_hostname=$(hostname 2>/dev/null | cut -d. -f1)
fi

if [ -z "$system_hostname" ]; then
	# Ubiquiti specific
	system_hostname=$(cat /proc/sys/kernel/hostname 2>/dev/null)
fi

# Set the TimeSamp
system_timestamp=$(date +'%F %T')
script_name=$(basename $0)
xml_file="$system_hostname"-$(date +%Y%m%d%H%M%S).xml
xml_file_full_path=`pwd`"/$xml_file"

if [ "$debugging" -gt 0 ]; then
	echo "----------------------------"
	echo "Open-AudIT Linux audit script"
	echo "Version: $version"
	echo "----------------------------"
	echo "My PID is           $$"
	echo "Audit Start Time    $system_timestamp"
	echo "Create File         $create_file"
	echo "Submit Online       $submit_online"
	echo "Debugging Level     $debugging"
	echo "Discovery ID        $discovery_id"
	echo "Org Id              $org_id"
	echo "Script Name         $script_name"
	echo "URL                 $url"
	echo "File                $xml_file_full_path"
	echo "----------------------------"
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

#========================
#  SAN INFO             #
#========================
if [ "$san_audit" = "y" ]; then
	if [ -f "/opt/IBM_DS/client/SMcli" ]; then
		san_url=$(echo "$url" | sed 's/input\/devices/san\/add_san/g')
		if [ "$debugging" -gt 0 ]; then
			echo "SAN info"
		fi
		if [ "$san_discover" = "y" ]; then
			if [ "$debugging" -gt 1 ]; then
				echo "Running SAN refresh / discover."
			fi
			output=$(/opt/IBM_DS/client/SMcli -A)
		fi
		if [ "$debugging" -gt 1 ]; then
			echo "Running SAN list"
		fi
		for san in $(/opt/IBM_DS/client/SMcli -d | grep -v -e '^$' | grep -v 'SMcli' | cut -f2 ); do
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
				if [ -n "$(which curl 2>/dev/null)" ]; then
					if [ "$debugging" -gt 1 ]; then
						echo "Sending using curl."
					fi
						curl --data @/tmp/"$san".txt "$san_url"
					fi
				else
					if [ -n "$(which wget 2>/dev/null)" ]; then
					if [ "$debugging" -gt 1 ]; then
						echo "Sending using wget."
					fi
					wget --delete-after --post-file=/tmp/"$san".txt "$san_url" 2>/dev/null
				fi
			fi
			if [ "$create_file" != "y" ]; then
				if [ "$debugging" -gt 1 ]; then
					echo "Deleting SAN output file /tmp/$san.txt."
				fi
				$(rm /tmp/"$san".txt)
			else
				if [ "$debugging" -gt 0 ]; then
					echo "SAN output file for uploading to Open-AudIT is $PWD/san-$san.txt"
				fi
				$(mv /tmp/"$san".txt $PWD/san-$san.txt)
			fi
		done
	fi
fi



#========================
#  SYSTEM INFO          #
#========================
IFS="$NEWLINEIFS"
if [ "$debugging" -gt "0" ]; then
	echo "System Info"
fi

# Set the UUID
system_uuid=""
system_uuid=$(dmidecode -s system-uuid 2>/dev/null | grep -v "^#" | head -1)
if [ -z "$system_uuid" ] && [ -n "$(which lshal 2>/dev/null)" ]; then
	system_uuid=$(lshal 2>/dev/null | grep "system.hardware.uuid" | cut -d\' -f2)
fi
if [ -z "$system_uuid" ] && [ -f "/sys/class/dmi/id/product_uuid" ]; then
	system_uuid=$(cat /sys/class/dmi/id/product_uuid 2>/dev/null)
fi
if [ -z "$system_uuid" ] && [ -f "/sys/devices/virtual/dmi/id/product_uuid" ]; then
	system_uuid=$(cat /sys/devices/virtual/dmi/id/product_uuid 2>/dev/null)
fi

# Get the hostname & domain
system_domain=$(hostname -d 2>/dev/null | grep -v \(none\))
system_fqdn=$(hostname -f 2>/dev/null | grep -v \(none\))

# Get System Family (Distro Name) and the OS Name
# Debian and Ubuntu will match on the below
#system_description=""
system_type="computer"
system_os_group="Linux"
# Changed the below to match the commands run in ssh_helper in-app
# system_os_family=$(lsb_release -is 2>/dev/null | tr -d '"')
# system_os_name=$(lsb_release -ds 2>/dev/null | tr -d '"' | head -n1)
# system_os_version=$(lsb_release -rs 2>/dev/null | tr -d '"')
system_os_family=$(cat /etc/os-release 2>/dev/null | grep -i ^NAME | cut -d= -f2 | cut -d\" -f2)
if [ -f "/etc/redhat-release" ]; then
	# To cater to a RHEL 7 machine that has RHEL in /etc/os-release PRETTY_NAME
	system_os_name=$(cat /etc/redhat-release 2>/dev/null)
fi
if [ -z "$system_os_name" ]; then
	system_os_name=$(cat /etc/os-release 2>/dev/null | grep -i ^PRETTY_NAME | cut -d= -f2 | cut -d\" -f2)
fi
system_os_version=$(cat /etc/os-release 2>/dev/null | grep -i ^VERSION_ID | cut -d= -f2 | cut -d\" -f2)
system_manufacturer=""
system_model=""
system_serial=""

# Some DD-WRT specials stuff
if [ -z "$system_os_family" ]; then
	if [ -f "/etc/motd" ] && [ $(grep -qi 'DD-WRT' /etc/motd) ]; then
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
fi

if [ -z "$system_os_family" ] && [ -f "/etc/avahi/services/dsminfo.service" ]; then
	if [ -f "/etc/synoinfo.conf" ]; then
		# Keep these as per the SNMP helper
		system_type="nas"
		system_os_group="Linux"
		system_os_family="Synology DSM"
		system_manufacturer="Synology"

		# Query the OS for these
		major=`grep version_major /etc/avahi/services/dsminfo.service 2>/dev/null | cut -d= -f2 | cut -d\< -f1`
		minor=`grep version_minor /etc/avahi/services/dsminfo.service 2>/dev/null | cut -d= -f2 | cut -d\< -f1`
		build=`grep version_build /etc/avahi/services/dsminfo.service 2>/dev/null | cut -d= -f2 | cut -d\< -f1`
		system_os_version="$major.$minor-$build"
		system_os_name="Synology DSM $major.$minor-$build"
		system_model=`grep model /etc/avahi/services/dsminfo.service 2>/dev/null | cut -d= -f2 | cut -d\< -f1`
		system_serial=`grep serial /etc/avahi/services/dsminfo.service 2>/dev/null | cut -d= -f2 | cut -d\< -f1`;
	fi
fi

if [ -z "$system_os_family" ] && [ -f "/etc/os-release" ]; then
	if grep -q 'Alpine Linux' /etc/os-release ; then
		system_os_family="Alpine Linux"
		system_os_version=$(grep VERSION_ID /etc/os-release | cut -d\" -f2)
		system_os_name=$(grep PRETTY_NAME /etc/os-release | cut -d\" -f2)
		busybox="y"
	fi
fi

instance_ident=`grep instance_id /etc/default/instance_configs.cfg 2>/dev/null | cut -d= -f2`

if [ "$busybox" = "n" ]; then
	for system_release_file in /etc/*[_-]version /etc/*[_-]release; do

		[ -f "$system_release_file" ] || continue;
		[ "$system_release_file" = "/etc/os-release" ] && continue;

		if [ -z "$system_os_name" ]; then
			system_os_name=$(head -n1 "$system_release_file")
		fi

		# Suse Based
		# if echo "$system_os_name" | grep -Fqi "Suse" ; then
		# 	if [ -z "$system_os_family" ]; then
		# 		system_os_family="Suse"
		# 	fi
		# 	break;
		# fi

		if [ -z "$system_os_family" ]; then
			if [ -e "/etc/arch-release" ]; then
				system_os_name="Arch Linux";
				system_os_family="Arch";
			fi
		fi

		# CentOS based - must come before RedHat based
		if [ "$system_release_file" = "/etc/centos-release" ]; then
				system_os_family="CentOS";
				system_os_version=$(grep -o '[0-9]\.[0-9]' "$system_release_file" 2>/dev/null)
				if [ -z "$system_os_version" ]; then
					system_os_version=$(grep -o '[0-9]' "$system_release_file" 2>/dev/null | head -n1)
				fi
			break;
		fi

		# RedHat based
		if [ "$system_release_file" = "/etc/redhat-release" ]; then
			if cat "$system_release_file" | grep -q "Red Hat" ; then
				system_os_family="RedHat"
			fi
			if cat "$system_release_file" | grep -q "CentOS" ; then
				system_os_family="CentOS"
			fi
			if cat "$system_release_file" | grep -q "Fedora" ; then
				system_os_family="Fedora"
			fi
			if [ -z "$system_os_version" ]; then
				system_os_version=$(grep -o '[0-9]\.[0-9].' "$system_release_file" 2>/dev/null)
				if [ -z "$system_os_version" ]; then
					system_os_version=$(grep -o '[0-9].' "$system_release_file" 2>/dev/null)
				fi
			fi
			break;
		fi
	done
fi

if [ -z "$system_os_family" ] && [ -f "/etc/os-release" ]; then
	system_os_version=$(grep VERSION_ID /etc/os-release | cut -d\" -f2)
	system_os_name=$(grep PRETTY_NAME /etc/os-release | cut -d\" -f2)
	system_os_family=$(grep ^ID /etc/os-release | grep -v LIKE | cut -d= -f2)
fi

if [ "$system_os_family" == "\"amzn\"" ]; then
	system_os_family="Amazon"
fi

if [ "$system_os_family" == "debian" ] || [ "$system_os_family" == "Debian GNU/Linux" ]; then
	system_os_family="Debian"
fi

if [ "$system_os_family" == "ubuntu" ]; then
	system_os_family="Ubuntu"
fi

if [ "$system_os_family" == "centos" ]; then
	system_os_family="CentOS"
fi

if [ "$system_os_family" == "Common Base Linux Mariner" ]; then
	system_os_family="Mariner"
	system_os_name="Mariner Linux"
fi

if [[ "$system_os_family" == *"suse"* ]] || [[ "$system_os_family" == *"SUSE"* ]] || [[ "$system_os_family" == *"SuSE"* ]] || [[ "$system_os_family" == *"SuSe"* ]] || [[ "$system_os_family" == *"SLES"* ]]; then
	system_os_family="Suse"
	system_os_version=$(grep VERSION_ID /etc/os-release | cut -d\" -f2)
	system_os_name=$(grep PRETTY_NAME /etc/os-release | cut -d\" -f2)
fi

# Busy box test
if [ "$busybox" = "n" ]; then
	test=$(ls -lh `echo $SHELL` | grep busybox)
	if [ -n "$test" ]; then
		busybox="y"
	fi
fi

if [ "$busybox" = "n" ] && [ -z "$system_ip_address" ]; then
	system_ip_address=$(ip route get $(ip route show 0.0.0.0/0 2>/dev/null | grep -oP 'via \K\S+') 2>/dev/null | grep -oP 'src \K\S+')
fi

if [ "$busybox" = "y" ] && [ -z "$system_ip_address" ]; then
	system_ip_address=$(ip route show 0.0.0.0/0 2>/dev/null | head -n1 | awk '{print $3}')
fi

if [ -z "$system_ip_address" ]; then
	system_ip_address=$(ip addr | grep 'state UP' -A2 | grep inet | awk '{print $2}' | cut -f1  -d'/' | head -n 1)
fi

# Use the primary IP to find the DNS details
dns_hostname=$(getent hosts $system_ip_address 2>/dev/null | cut -d" " -f3 | cut -d. -f1)
dns_domain=$(getent hosts $system_ip_address 2>/dev/null | cut -d" " -f3 | cut -d. -f2-)
dns_fqdn=$(getent hosts $system_ip_address 2>/dev/null | cut -d" " -f3)

# Set the icon as the lower case version of the System Family.
if [ -z "$system_os_icon" ]; then
	system_os_icon=$(lcase "$system_os_family")
fi

# Get the System Serial Number
if [ -z "$system_serial" ] || [ "$system_serial" = "0" ]; then
	system_serial=$(dmidecode -s system-serial-number 2>/dev/null | grep -v "^#" | head -1)
fi

if [ -z "$system_serial" ] || [ "$system_serial" = "0" ]; then
	if [ -n "$(which lshal 2>/dev/null)" ]; then
		system_serial=$(lshal 2>/dev/null | grep "system.hardware.serial" | cut -d\' -f2)
	fi
fi

if [ -z "$system_serial" ] || [ "$system_serial" = "0" ]; then
	system_serial=$(cat /sys/class/dmi/id/product_serial 2>/dev/null)
fi

if [ -z "$system_serial" ] || [ "$system_serial" = "0" ]; then
	# Ubiquiti
	system_serial=$(grep serialno /proc/ubnthal/system.info 2>/dev/null | cut -d= -f2)
fi

# Get the System Model
if [ -z "$system_model" ]; then
	system_model=$(dmidecode -s system-product-name 2>/dev/null | grep -v "^#" | head -1)
fi
if [ -z "$system_model" ] && [ -n "$(which lshal 2>/dev/null)" ]; then
	system_model=$(lshal | grep "system.hardware.product" | cut -d\' -f2)
fi
if [ -z "$system_model" ]; then
	system_model=$(cat /sys/devices/virtual/dmi/id/product_name 2>/dev/null)
fi
if [ -z "$system_model" ]; then
	# Ubiquiti
	system_model=$(cat /etc/board.info 2>/dev/null | grep "board.name" | cut -d= -f2)
fi
if [ -z "$system_model" ]; then
	# Ubiquiti #2 - for some $SHELL reason, this doesn't appear to work
	system_model=$(info 2>/dev/null | grep Model | awk '{ print $2 }')
fi

# get the systemd identifier
dbus_identifier=$(cat /var/lib/dbus/machine-id 2>/dev/null)
if [ -z "$dbus_identifier" ]; then
	dbus_identifier=$(cat /etc/machine-id 2>/dev/null)
fi

# Get the System Manufacturer
if [ -z "$system_manufacturer" ]; then
	system_manufacturer=$(dmidecode -s system-manufacturer 2>/dev/null | grep -v "^#" | head -1)
fi
if [ -z "$system_manufacturer" ]; then
	if [ -n "$(which lshal 2>/dev/null)" ]; then
		system_manufacturer=$(lshal 2>/dev/null | grep "system.hardware.vendor" | cut -d\' -f2)
	fi
fi
if [ -z "$system_manufacturer" ]; then
	system_manufacturer=$(cat /sys/devices/virtual/dmi/id/sys_vendor 2>/dev/null)
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
if [ "$system_model" = "Bochs" -o \
	 "$system_model" = "Google Compute Engine" -o \
	 "$system_model" = "KVM" -o \
	 "$system_model" = "Virtual Machine" -o \
	 "$system_model" = "VMware Virtual Platform" -o \
	 "$system_model" = "OpenVZ" -o \
	 "$system_model" = "HVM domU" -o \
	 "$system_model" = "VirtualBox" ]; then
	system_form_factor="Virtual"
else
	system_form_factor=$(dmidecode -s chassis-type 2>/dev/null | grep -v "^#" | head -1)
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

system_pc_os_arch=$(uname -m 2>/dev/null)

# Get the System Memory
# system_pc_memory=$(grep MemTotal /proc/meminfo | cut -d: -f2 | cut -dk -f1)
# system_pc_memory=$(trim "$system_pc_memory")

memory_slots="0"
system_pc_memory="0"
memory_slots=$(dmidecode -t 17 2>/dev/null | awk '/DMI type 17/{print $2}' | wc -l)
if [ "$memory_slots" != "0" ]; then
	IFS="$ORIGIFS";
	for memory_handle in $(dmidecode -t 17 2>/dev/null | awk '/DMI type 17/{print $2}'); do
		bank_info=$(dmidecode -t 17 2>/dev/null | sed -n '/^Handle '"$memory_handle"'/,/^$/p')
		memory_capacity=$(echo "$bank_info" | awk '/Size:/{print $2}' | sed 's/[^0-9]//g')
		if [ "$(echo "$bank_info" | awk '/Size:/{print $3}')" = "GB" ];then
				memory_capacity=$((memory_capacity * 1024))
		fi
		system_pc_memory=$((system_pc_memory + memory_capacity))
	done;
	system_pc_memory=$((system_pc_memory * 1024))
else
	system_pc_memory=$(grep MemTotal /proc/meminfo | cut -d: -f2 | cut -dk -f1)
	system_pc_memory=$(trim "$system_pc_memory")
fi

# Get the Number of Physical Processors
#
#	Each Physical Processor has one or more Processor Cores.
#	Each Processor Core has one or more Threads
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
if [ -n "$(which stat 2>/dev/null)" ] && [ "$busybox" = "n" ]; then
	system_pc_date_os_installation=$(stat "$system_release_file" | grep "^Modify:" | cut -d" " -f2)
else
	system_pc_date_os_installation=""
fi

kernel_version=$(uname -r 2>/dev/null)
if [ -z "$kernel_version" ]; then
	kernel_version=$(hostnamectl 2>/dev/null | grep "Kernel" | cut -d: -f2 | cut -d" " -f3)
fi

last_os_update=$(stat -c %y /var/lib/apt/periodic/update-success-stamp 2>/dev/null | cut -d. -f1)
if [ -z "$last_os_update" ]; then
	lou=$(rpm -qa --last 2>/dev/null | head -1 | awk '{printf $2" "$3" "$4" "$5" "$6" "$7}')
	last_os_update=$(date -d "$lou" +"%Y-%m-%d %H:%m:%S" 2>/dev/null)
fi

#'''''''''''''''''''''''''''''''''
#' Write to the audit file       '
#'''''''''''''''''''''''''''''''''
{
echo "data=<?xml version=\"1.0\" encoding=\"UTF-8\"?>"
echo "<system>"
echo "	<sys>"
echo "		<script_version>$version</script_version>"
echo "		<uuid>$(escape_xml "$system_uuid")</uuid>"
echo "		<hostname>$(escape_xml "$system_hostname")</hostname>"
echo "		<domain>$(escape_xml "$system_domain")</domain>"
echo "		<fqdn>$(escape_xml "$system_fqdn")</fqdn>"
echo "		<dns_hostname>$(escape_xml "$dns_hostname")</dns_hostname>"
echo "		<dns_domain>$(escape_xml "$dns_domain")</dns_domain>"
echo "		<dns_fqdn>$(escape_xml "$dns_fqdn")</dns_fqdn>"
echo "		<ip>$(escape_xml "$system_ip_address")</ip>"
echo "		<type>$(escape_xml "$system_type")</type>"
echo "		<os_icon>$(escape_xml "$system_os_icon")</os_icon>"
echo "		<os_group>$(escape_xml "$system_os_group")</os_group>"
echo "		<os_family>$(escape_xml "$system_os_family")</os_family>"
echo "		<os_name>$(escape_xml "$system_os_name")</os_name>"
echo "		<os_version>$(escape_xml "$system_os_version")</os_version>"
echo "		<kernel_version>$(escape_xml "$kernel_version")</kernel_version>"
echo "		<serial>$(escape_xml "$system_serial")</serial>"
echo "		<model>$(escape_xml "$system_model")</model>"
echo "		<manufacturer>$(escape_xml "$system_manufacturer")</manufacturer>"
echo "		<uptime>$(escape_xml "$system_uptime")</uptime>"
echo "		<form_factor>$(escape_xml "$system_form_factor")</form_factor>"
echo "		<os_bit>$(escape_xml "$system_pc_os_bit")</os_bit>"
echo "		<os_arch>$(escape_xml "$system_pc_os_arch")</os_arch>"
echo "		<memory_count>$(escape_xml "$system_pc_memory")</memory_count>"
echo "		<processor_count>$(escape_xml "$system_pc_total_threads")</processor_count>"
echo "		<os_installation_date>$(escape_xml "$system_pc_date_os_installation")</os_installation_date>"
echo "		<org_id>$(escape_xml "$org_id")</org_id>"
echo "		<dbus_identifier>$(escape_xml "$dbus_identifier")</dbus_identifier>"
echo "		<last_os_update>$(escape_xml "$last_os_update")</last_os_update>"
if [ -n "$instance_ident" ]; then
echo "		<instance_ident>$(escape_xml "$instance_ident")</instance_ident>"
fi
echo "		<last_seen_by>$(escape_xml "$last_seen_by")</last_seen_by>"
echo "		<id>$(escape_xml "$system_id")</id>"
echo "		<discovery_id>$(escape_xml "$discovery_id")</discovery_id>"
echo "	</sys>"
} > "$xml_file"




##################################
# USB SECTION                    #
##################################
if [ "$debugging" -gt "0" ]; then
	echo "USB Info"
fi
IFS="$NEWLINEIFS"
echo "	<usb>" >> "$xml_file"
list=$(lsusb 2>/dev/null)
if [ -n "$list" ]; then
	for device in $(echo "$list"); do
		bus=$(echo "$device" | awk '{print $2}')
		dev=$(echo "$device" | awk '{print $4}')
		details=$(lsusb -v -s "$bus":"$dev" 2>/dev/null)
		if [ -n "$details" ]; then
			name=$(echo "$details" | grep "iProduct" | head -n1 | awk '{$1=$2=""; print $0}')
			if [ -z "$name" ]; then
				name=$(echo "$details" | grep "idProduct" | head -n1 | awk '{$1=$2=""; print $0}')
			fi
			manufacturer=$(echo "$details" | grep "idVendor" | head -n1 | awk '{$1=$2=""; print $0}')
			if [ -z "$manufacturer" ]; then
				manufacturer=$(echo "$details" | grep "iManufacturer" | head -n1 | awk '{$1=$2=""; print $0}')
			fi
			description=$(echo "$details" | grep "idProduct" | head -n1 | awk '{$1=$2=""; print $0}')
			class=$(echo "$details" | grep "bInterfaceClass" | head -n1 | awk '{$1=$2=""; print $0}')
			status=$(echo "$details" | grep "Device Status" -A1 | tail -n1)
			serial=$(echo "$details" | grep "iSerial" | head -n1 | awk '{$1=$2=""; print $0}')
			device=$(echo "$device" | awk '{print $1 " " $2 " " $3 " " $4}' | cut -d: -f1)
			{
	      echo "	     <item>"
	      echo "	         <name>$(escape_xml "$name")</name>"
	      echo "	         <availability></availability>"
	      echo "	         <class>$(escape_xml "$class")</class>"
	      echo "	         <config_manager_error_code></config_manager_error_code>"
	      echo "	         <description>$(escape_xml "$description")</description>"
	      echo "	         <device>$(escape_xml "$device")</device>"
	      echo "	         <manufacturer>$(escape_xml "$manufacturer")</manufacturer>"
	      echo "	         <present></present>"
	      echo "	         <serial>$(escape_xml "$serial")</serial>"
	      echo "	         <status>$(escape_xml "$status")</status>"
	      echo "	     </item>"
			} >> "$xml_file"
		fi
	done
fi
echo "	</usb>" >> "$xml_file"




##################################
# POLICY SECTION                 #
##################################
if [ "$debugging" -gt "0" ]; then
	echo "Policy Info"
fi
IFS="$NEWLINEIFS"
echo "	<policy>" >> "$xml_file"
for policy in $(grep -v ^# /etc/login.defs 2>/dev/null | grep -v ^$); do
	type="/etc/login.defs"
	name=$(echo "$policy" | awk '{print $1}')
	value=$(echo "$policy" | awk '{print $2}')
	guid=$(echo "$policy" | awk '{print $1}')
	{
	echo "		<item>"
	echo "			<type>$(escape_xml "$type")</type>"
	echo "			<name>$(escape_xml "$name")</name>"
	echo "			<value>$(escape_xml "$value")</value>"
	echo "			<guid>$(escape_xml "$guid")</guid>"
	echo "			<options>"
	echo "				<name>$(escape_xml "$name")</name>"
	echo "				<value>$(escape_xml "$value")</value>"
	echo "			</options>"
	echo "		</item>"
	} >> "$xml_file"
done
for policy in $(grep -v ^# /etc/pam.d/common-password 2>/dev/null | grep -v ^$ | sed 's/ \+ /\t/g' | tr -s '\t' '\t'); do
	type="/etc/pam.d/common-password"
	name=$(echo "$policy" | cut -f1)
	enabled=$(echo "$policy" | cut -f2)
	json_value=$(echo "$policy" | cut -f3)
	value="$enabled : $json_value"
	guid="$name-$enabled-$json_value"
	{
	echo "		<item>"
	echo "			<type>$(escape_xml "$type")</type>"
	echo "			<name>$(escape_xml "$name")</name>"
	echo "			<value>$(escape_xml "$value")</value>"
	echo "			<guid>$(escape_xml "$guid")</guid>"
	echo "			<options>"
	echo "				<name>$(escape_xml "$name")</name>"
	echo "				<enabled>$(escape_xml "$enabled")</enabled>"
	echo "				<value>$(escape_xml "$json_value")</value>"
	echo "			</options>"
	echo "		</item>"
	} >> "$xml_file"
done
for policy in $(grep -v ^# /etc/pam.d/system-auth 2>/dev/null | grep -v ^$ | sed 's/ \+ /\t/g' | tr -s '\t' '\t'); do
	type="/etc/pam.d/system-auth"
	name=$(echo "$policy" | cut -f1)
	enabled=$(echo "$policy" | cut -f2)
	json_value=$(echo "$policy" | cut -f3)
	value="$enabled : $json_value"
	guid="$name-$enabled-$json_value"
	{
	echo "		<item>"
	echo "			<type>$(escape_xml "$type")</type>"
	echo "			<name>$(escape_xml "$name")</name>"
	echo "			<value>$(escape_xml "$value")</value>"
	echo "			<guid>$(escape_xml "$guid")</guid>"
	echo "			<options>"
	echo "				<name>$(escape_xml "$name")</name>"
	echo "				<enabled>$(escape_xml "$enabled")</enabled>"
	echo "				<value>$(escape_xml "$json_value")</value>"
	echo "			</options>"
	echo "		</item>"
	} >> "$xml_file"
done
IFS="$ORIGIFS";
echo "	</policy>" >> "$xml_file"


##################################
# BIOS SECTION                   #
##################################
if [ "$debugging" -gt "0" ]; then
	echo "BIOS Info"
fi

# Get the BIOS Manufacturer
bios_manufacturer=$(dmidecode -s bios-vendor 2>/dev/null | head -1)
if [ -z "$bios_manufacturer" ] && [ -f "/sys/class/dmi/id/bios_vendor" ]; then
	bios_manufacturer=$(cat /sys/class/dmi/id/bios_vendor 2>/dev/null)
fi
if [ -z "$bios_manufacturer" ] && [ -n "$(which lshal 2>/dev/null)" ]; then
	bios_manufacturer=$(lshal | grep "smbios.bios.vendor" | cut -d\' -f2)
fi
if [ -z "$bios_manufacturer" ] && [ -n "$(which lshal 2>/dev/null)" ]; then
	bios_manufacturer=$(lshal | grep "system.firmware.vendor" | cut -d\' -f2)
fi
bios_manufacturer=$(trim "$bios_manufacturer")

# Get the BIOS Version
bios_version=$(dmidecode -s bios-version 2>/dev/null | head -1)
if [ -z "$bios_version" ]; then
	bios_version=$(dmidecode 2>/dev/null | grep "Firmware Revision" | cut -d: -f2)
fi
if [ -z "$bios_version" ] && [ -f "/sys/class/dmi/id/bios_version" ]; then
	bios_version=$(cat /sys/class/dmi/id/bios_version 2>/dev/null)
fi
if [ -z "$bios_version" ] && [ -n "$(which lshal 2>/dev/null)" ]; then
	bios_version=$(lshal 2>/dev/null | grep "smbios.bios.version" | cut -d\' -f2)
fi
if [ -z "$bios_version" ] && [ -n "$(which lshal 2>/dev/null)" ]; then
	bios_version=$(lshal 2>/dev/null | grep "system.firmware.version" | cut -d\' -f2)
fi
bios_version=$(trim "$bios_version")

# Get the BIOS revision
bios_revision=$(dmidecode 2>/dev/null | grep "BIOS Revision" | cut -d: -f2)
bios_revision=$(trim "$bios_revision")

# Make the BIOS Description using the manufacturer - Firmware Rev
bios_description=""
if [ -n "$bios_version" ] && [ -n "$bios_manufacturer" ]; then
	bios_description=$(echo "$bios_manufacturer" | cut -d" " -f1)" BIOS - Firmware Rev. $bios_version"
fi
if [ -z "$bios_description" ] && [ -n "$bios_manufacturer" ]; then
	bios_description=$(echo "$bios_manufacturer" | cut -d" " -f1)" BIOS"
fi

# Get the BIOS Serial = System Serial
bios_serial="$system_serial"

# Get the SMBIOS Version
bios_smversion=$(dmidecode 2>/dev/null | grep -i SMBIOS | cut -d' ' -f2 | tail -n1)
if [ -z "$bios_smversion" ] && [ -n "$(which lshal 2>/dev/null)" ]; then
	bios_smversion=$(lshal | grep "smbios.bios.version" | cut -d\' -f2)
fi
if [ -z "$bios_smversion" ] && [ -n "$(which lshal 2>/dev/null)" ]; then
	bios_smversion=$(lshal | grep "system.firmware.version" | cut -d\' -f2)
fi

# Get the BIOS date
bios_date=$(dmidecode -s bios-release-date 2>/dev/null | head -1)
if [ -z "$bios_date" ] && [ -f "/sys/devices/virtual/dmi/id/bios_date" ]; then
	bios_date=$(cat /sys/devices/virtual/dmi/id/bios_date 2>/dev/null)
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
	echo "			<revision>$(escape_xml "$bios_revision")</revision>"
	echo "			<date>$(escape_xml "$bios_date")</date>"
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

if [ "$processor_socket" = "<OUT OF SPEC>" ]; then
	processor_socket="Unknown"
fi

total_cores=$(( $system_pc_cores_x_processor * $system_pc_physical_processors ))
total_logical_processors=$(( $system_pc_threads_x_processor * $system_pc_physical_processors ))

#'''''''''''''''''''''''''''''''''
#' Write to the audit file       '
#'''''''''''''''''''''''''''''''''
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

			if [ "$(echo "$bank_info" | awk '/Size:/{print $3}')" = "GB" ];then
					memory_capacity=$((memory_capacity * 1024))
			fi

			memory_speed=$(echo "$bank_info" |\
				awk '/Speed:/{for (u=2; u<=NF; u++){printf("%s ", $u)}printf("\n")}' |\
				sed 's/[[:space:]]MHz.*//g' | head -n1)

			memory_tag=$(echo "$bank_info" |\
				awk '/Bank L.*:/{for (u=3; u<=NF; u++){printf("%s ", $u)}printf("\n")}')

			memory_serial=$(echo "$bank_info" |\
					awk '/Serial Number:/{for (u=3; u<=NF; u++){printf("%s ", $u)}printf("\n")}' |\
					cut -d" " -f1)

			memory_manufacturer=$(echo "$bank_info" | grep ".Manufacturer:" | cut -d: -f2)

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
				echo "			<manufacturer>$(escape_xml "$memory_manufacturer")</manufacturer>"
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

mobo_manufacturer=$(dmidecode -s baseboard-manufacturer 2> /dev/null | head -1)
if [ -z "$mobo_manufacturer" ] && [ -f "/sys/devices/virtual/dmi/id/board_vendor" ]; then
	mobo_manufacturer=$(cat /sys/devices/virtual/dmi/id/board_vendor 2>/dev/null)
fi
mobo_model=$(dmidecode -s baseboard-product-name 2> /dev/null | head -1)
if [ -z "$mobo_model" ] && [ -f "/sys/devices/virtual/dmi/id/board_name" ]; then
	mobo_model=$(cat /sys/devices/virtual/dmi/id/board_name 2>/dev/null)
fi
mobo_version=$(dmidecode -s baseboard-version 2> /dev/null | grep -v Not | head -1)
if [ -z "$mobo_version" ] && [ -f "/sys/devices/virtual/dmi/id/board_version" ]; then
	mobo_version=$(cat /sys/devices/virtual/dmi/id/board_version 2>/dev/null)
fi
mobo_serial=$(dmidecode -s baseboard-serial-number 2> /dev/null | head -1)
if [ -z "$mobo_serial" ] && [ -f "/sys/devices/virtual/dmi/id/board_serial" ]; then
	mobo_serial=$(cat /sys/devices/virtual/dmi/id/board_serial 2>/dev/null)
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
	echo "			<version>$(escape_xml "$mobo_version")</version>"
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
optical_num_devices=$(cdrdao scanbus 2>&1 | grep -v 'command not found' | grep -c 'dev')

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

echo "	<share>" >> "$xml_file"

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
		'CentOS' | 'RedHat' | 'Fedora' | 'Suse' | 'Amazon' )
				service smb status > /dev/null 2>&1 &&\
					sed -e '/^$/d' -e 's/^[ \t]*//' -e '/^[#;]/d' /etc/samba/smb.conf |\
					grep -E "^\[|^comment|^path" |\
					sed -e '/^\[global\]/d' -e 's/\]$//' -e 's/^comment = //' -e 's/^path = //' |\
					awk 'BEGIN { RS = "[" ; FS = "\n" } { print "\t\t<share>"; print "\t\t\t<share_name>",$1,"</share_name>"; print "\t\t\t<share_caption>",$2,"</share_caption>"; print "\t\t\t<share_path>",$3,"</share_path>"; print "\t\t</share>" }' |\
					tail -n +6 >>\
					"$xml_file"
			;;
esac

echo "	</share>" >> "$xml_file"

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
		net_card_status=$(cat /sys/class/net/$net_connection_id/operstate 2>/dev/null)
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

		# Wicked for Suse
		# wicked test dhcp4 eth0
		#  - unsure if this actually requests an IP and maybe causes networking to drop
		#  - pinging 8.8.8.8 while running the command showed 0 dropped responses, so maybe not?

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
				# we don't have iwlist installed
				net_card_speed=""
			else
				net_card_speed=$(iwlist "$net_card_id" bitrate | grep Current  | cut -d. -f1 | grep -oE '[[:digit:]]*')
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
			net_card_dhcp_lease_time=""
			net_card_dhcp_lease_days=""
			net_card_dhcp_serverp_lease_obtained=""

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

# if [ -n "$addr_info" ]; then
# 	{
# 	echo "	<ip>$addr_info"
# 	echo "	</ip>"
# 	} >> "$xml_file"
# fi
IFS="$NEWLINEIFS"
echo "	<ip>" >> "$xml_file"
for line in $(ip -o a | grep -v "^1: lo" | grep -v 'ff:ff:ff:ff:ff:ff'); do
	interface=$(echo "$line" | awk '{print $2}')
	mac=$(ip a show "$interface" | grep ether | awk '{print $2}')
	net_index=$(echo "$line" | cut -d: -f1)
	ip=$(echo "$line" | awk '{print $4}' | cut -d/ -f1)
	netmask=""
	cidr=$(echo "$line" | awk '{print $4}' | cut -d/ -f2)
	if [[ "$ip" = *":"* ]]; then
		version="6"
	else
		version="4"
	fi
	network=""
	lease_file=$(ps -ef 2>/dev/null | grep dhclient | grep "$interface" | sed -e 's/^.*-lf//' | cut -d" " -f2)
	if [ ! -e "$lease_file" ]; then
		set_by="static"
	else
		set_by="dhcp"
	fi
	{
	echo "		<item>"
	echo "			<mac>$(escape_xml "$mac")</mac>"
	echo "			<net_index>$(escape_xml "$net_index")</net_index>"
	echo "			<ip>$(escape_xml "$ip")</ip>"
	echo "			<netmask>$(escape_xml "$netmask")</netmask>"
	echo "			<cidr>$(escape_xml "$cidr")</cidr>"
	echo "			<version>$(escape_xml "$version")</version>"
	echo "			<network>$(escape_xml "$network")</network>"
	echo "			<set_by>$(escape_xml "$set_by")</set_by>"
	echo "			<interface>$(escape_xml "$interface")</interface>"
	echo "		</item>"
	} >> "$xml_file"
done
echo "	</ip>" >> "$xml_file"

##################################
# DISK SECTION                   #
##################################
if [ "$debugging" -gt "0" ]; then
	echo "Hard Disk Info"
fi

old="no"
if [[ "$system_os_name" == "CentOS release 4"* ]]; then
	old="yes"
fi
if [[ "$system_os_name" == "CentOS release 5"* ]]; then
	old="yes"
fi
if [ "$system_os_family" == "RedHat" -o "$system_os_family" == "Centos" ]; then
	major=$(echo "$system_os_version" | cut -c1-1)
	if [ "$major" -ge 4 ] && [ "$major" -lt 6 ]; then
		old="yes"
	fi
fi

if [ "$system_os_family" == "Synology DSM" ]; then
	old="yes"
fi

if [ "$old" = "yes" ]; then
	if [ "$debugging" -gt "0" ]; then
		echo "Running old disk checking for RHEL/CentOS 4/5."
	fi
	echo "	<disk>" >> "$xml_file"
	for disk in $(fdisk -l /dev/sd? | grep "^Disk " | grep -v "^Disk identifier" | cut -d" " -f2 | cut -d: -f1); do
		hard_drive_caption="$disk"
		hard_drive_index=$(echo "$hard_drive_caption" | cut -d/ -f3)
		hard_drive_interface_type=""
		hard_drive_manufacturer=$(smartctl -i "$hard_drive_caption" | grep "Vendor:" | cut -d: -f2)
		hard_drive_model=$(smartctl -i "$hard_drive_caption" | grep "Product:" | cut -d: -f2)
		hard_drive_serial=$(smartctl -i "$hard_drive_caption" | grep "Serial Number:" | cut -d: -f2)
		hard_drive_size=$(smartctl -i "$hard_drive_caption" | grep "User Capacity:" | cut -d: -f2 | cut -db -f1 | sed 's/,//g')
		hard_drive_size=$((hard_drive_size / 1024 / 1024))
		hard_drive_device_id="$disk"
		partition_count=$(fdisk -l "$disk" | grep "^$disk" | wc -l)
		hard_drive_status=""
		hard_drive_firmware=$(smartctl -i "$hard_drive_caption" | grep "Firmware Version" | cut -d: -f2)
		hard_drive_model_family=""
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
		echo "			<partition_count>$(escape_xml "$partition_count")</partition_count>"
		echo "			<status>$(escape_xml "$hard_drive_status")</status>"
		echo "			<firmware>$(escape_xml "$hard_drive_firmware")</firmware>"
		echo "			<model_family>$(escape_xml "$hard_drive_model_family")</model_family>"
		echo "		</item>"
		} >> "$xml_file"
		for partition in $(fdisk -l "$disk" 2>&1 | grep "^/dev/" | cut -d" " -f1); do
			partition_serial=""
			partition_name=""
			partition_description=""
			partition_device_id="$partition"
			partition_disk_index="$hard_drive_index"
			partition_mount_point=$(mount | grep "$partition" | cut -d" " -f3)

			partition_size=$(df -k "$partition" | tail -n1 | tr -s " " | cut -d" " -f2)
			partition_used=$(df -k "$partition" | tail -n1 | tr -s " " | cut -d" " -f3)
			partition_free=$(df -k "$partition" | tail -n1 | tr -s " " | cut -d" " -f4)

			partition_format=$(mount | grep "$partition" | cut -d" " -f5)
			partition_result=$partition_result"
		<item>
			<serial>$(escape_xml "$partition_serial")</serial>
			<name>$(escape_xml "$partition_name")</name>
			<description>$(escape_xml "$partition_description")</description>
			<device>$(escape_xml "$partition_device_id")</device>
			<hard_drive_index>$(escape_xml "$hard_drive_index")</hard_drive_index>
			<partition_disk_index>$(escape_xml "$partition_disk_index")</partition_disk_index>
			<mount_type>partition</mount_type>
			<mount_point>$(escape_xml "$partition_mount_point")</mount_point>
			<size>$(escape_xml "$partition_size")</size>
			<free>$(escape_xml "$partition_free")</free>
			<used>$(escape_xml "$partition_used")</used>
			<format>$(escape_xml "$partition_format")</format>
			<bootable></bootable>
			<type>partition</type>
		</item>"
		done
	done
	echo "	</disk>" >> "$xml_file"

else
	echo "	<disk>" >> "$xml_file"
	partition_result=""
	for disk in $(lsblk -ndo NAME -e 11,2,1 2>/dev/null | grep -v loop); do

		hard_drive_caption="/dev/$disk"
		hard_drive_index="$disk"
		hard_drive_interface_type=$(udevadm info -q all -n /dev/"$disk" 2>/dev/null | grep ID_BUS= | cut -d= -f2)
		test=$(udevadm info -q all -n /dev/"$disk" 2>/dev/null | grep ID_ATA_SATA= | cut -d= -f2)
		if [ "$test" = "1" ]; then
			hard_drive_interface_type="sata"
		fi
		if [ -z "$hard_drive_interface_type" ]; then
			test=$(nvme --list 2>/dev/null | grep "/dev/$disk")
			if [ -n "$test" ]; then
				hard_drive_interface_type="nvme"
			fi
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
		hard_drive_partitions=$(lsblk -lno NAME /dev/$disk | sort|uniq|grep -v "^$disk\$" -c)
		hard_drive_status=""
		hard_drive_model_family=""
		hard_drive_firmware=$(udevadm info -q all -n /dev/"$disk" 2>/dev/null | grep ID_REVISION= | cut -d= -f2)
		if [ -z "$hard_drive_firmware" ]; then
			hard_drive_firmware=$(smartctl -i /dev/"$disk" 2>/dev/null | grep "Firmware Version" | cut -d: -f2)
		fi

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

		if [ -z "$hard_drive_manufacturer" ] &&  echo "$hard_drive_model" | grep -q "Samsung" ; then
			hard_drive_manufacturer="Samsung"
		fi

		if [ -z "$hard_drive_manufacturer" ] &&  echo "$hard_drive_model_family" | grep -q "^Seagate" ; then
			hard_drive_manufacturer="Seagate"
		fi

		if [ -z "$hard_drive_manufacturer" ] &&  echo "$hard_drive_model" | grep -q "^ST" ; then
			hard_drive_manufacturer="Seagate"
		fi

		if [ -z "$hard_drive_manufacturer" ] &&  echo "$hard_drive_model" | grep -q "WDC " ; then
			hard_drive_manufacturer="Western Digital"
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

		PREVIFS=$IFS
		IFS="$NEWLINEIFS";
		for partition in $(lsblk -lno NAME /dev/$disk 2>/dev/null | grep -v ^$disk\$ ); do
		#for partition in $(lsblk -lno NAME /dev/$disk 2>/dev/null | grep -v ^$disk\$ | sed -e "s/ (/_(/g" ); do
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
				partition_mount_point=$(lsblk -lno NAME,MOUNTPOINT /dev/$disk |sort|uniq 2>/dev/null | grep "^$partition " | sed -e "s/$partition//g")
				partition_mount_point=$(trim "$partition_mount_point")

				#partition_name=$(lsblk -lndo LABEL /dev/"$partition" 2>/dev/null)
				partition_name=$(lsblk -lno NAME,LABEL /dev/$disk |sort|uniq 2>/dev/null | grep "^$partition " | sed -e "s/$partition//g")
				partition_name=$(trim "$partition_name")

				#partition_size=$(lsblk -lbndo SIZE /dev/"$partition" 2>/dev/null)
				#partition_size=$(lsblk -lbo NAME,SIZE /dev/$disk 2>/dev/null | grep "^$partition " | sed -e "s/$partition//g")
				partition_size=$(lsblk -lbo NAME,SIZE /dev/$disk |sort|uniq 2>/dev/null | grep "^$partition " | rev | cut -d" " -f1 | rev)
				partition_size=$((partition_size / 1024 / 1024))

				#partition_format=$(lsblk -lndo FSTYPE /dev/"$partition" 2>/dev/null)
				partition_format=$(lsblk -lno NAME,FSTYPE /dev/$disk |sort|uniq 2>/dev/null | grep "^$partition " | sed -e "s/$partition//g")
				partition_format=$(trim "$partition_format")

				#partition_caption=$(lsblk -lndo LABEL /dev/"$partition" 2>/dev/null)
				partition_caption=$(lsblk -lno NAME,LABEL /dev/$disk |sort|uniq 2>/dev/null | grep "^$partition " | sed -e "s/$partition//g")
				partition_caption=$(trim "$partition_caption")

				partition_device_id="/dev/$partition"
				partition_disk_index="$disk"
				partition_bootable=""
				partition_quotas_supported=""
				partition_quotas_enabled=""

				#partition_serial=$(lsblk -lndo UUID /dev/"$partition" 2>/dev/null)
				partition_serial=$(lsblk -lno NAME,UUID /dev/$disk |sort|uniq 2>/dev/null | grep "^$partition " | sed -e "s/$partition//g")
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
		IFS=$PREVIFS
	done
	echo "	</disk>" >> "$xml_file"
fi


if [ "$debugging" -gt "0" ]; then
	echo "Guest (Docker, Proxmox, LXC) Info"
fi
vm_result=""

##################################
# Docker Machines                #
##################################
if [ "$debugging" -gt "0" ] && [ -n $(which docker 2>/dev/null) ]; then
	echo "Docker Info"
fi
PREVIFS=$IFS
IFS="$NEWLINEIFS";
for line in $(docker ps -a --format "{{.ID}}\t{{.Names}}\t{{.Status}}" 2>/dev/null); do
	vm_ident=$(echo "$line" | awk '{print $1}')
	name=$(echo "$line" | awk '{print $2}')
	status=$(echo "$line" | awk '{print $4}')
	uuid=$(echo "$line" | awk '{print $1}')
	config_file=$(echo "$line" | awk '{print $3}')
	uuid=$(echo "$line" | awk '{print $1}')
	vm_result=$vm_result"
		<item>
			<vm_ident>$(escape_xml "$vm_ident")</vm_ident>
         <name>$(escape_xml "$name")</name>
         <status>$(escape_xml "$status")</status>
         <uuid>$(escape_xml "$uuid")</uuid>
         <config_file>$(escape_xml "$config_file")</config_file>
         <type>docker</type>
         <icon>docker</icon>
		</item>"
done

##################################
# PROXMOX GUESTS SECTION         #
##################################
guests=$(qm list 2>/dev/null | grep -v "BOOTDISK")
if [ -n "$guests" ]; then
	if [ "$debugging" -gt "0" ]; then
		echo "Proxmox Info"
	fi
	guest_config_dir="/etc/pve/qemu-server/"
	for guest in $guests; do
		guest=$(echo "$guest" | awk '$1=$1')
		guest_id=$(echo "$guest" | cut -d" " -f1)
		if [ -n "$guest_id" ]; then
			guest_name=$(echo "$guest" | cut -d" " -f2)
			guest_status=$(echo "$guest" | cut -d" " -f3)
			guest_memory_count=0
			guest_memory_count=$(echo "$guest" | cut -d" " -f4)
			guest_memory_count=$(($guest_memory_count * 1024))
			guest_config_file=$(echo "$guest_config_dir$guest_id.conf")
			guest_uuid=""
			guest_cpu_count=""
			if [ -f "$guest_config_file" ]; then
				guest_uuid=$(grep uuid "$guest_config_file" | cut -d"=" -f2)
				guest_cpu_count=$(grep cores "$guest_config_file" | cut -d":" -f2)
			fi
			vm_result=$vm_result"
		<item>
			<vm_ident>"$(escape_xml "$guest_id")"</vm_ident>
			<name>"$(escape_xml "$guest_name")"</name>
			<status>"$(escape_xml "$guest_status")"</status>
			<uuid>"$(escape_xml "$guest_uuid")"</uuid>
			<memory_count>"$(escape_xml "$guest_memory_count")"</memory_count>
			<cpu_count>"$(escape_xml "$guest_cpu_count")"</cpu_count>
			<config_file>"$(escape_xml "$guest_config_file")"</config_file>
			<type>proxmox</type>
			<icon>proxmox</icon>
		</item>"
		fi
	done
fi

##################################
# LXC GUESTS SECTION             #
##################################
lxcguests=$(lxc-ls 2>/dev/null)
if [ -n "$lxcguests" ]; then
	if [ "$debugging" -gt "0" ]; then
		echo "LXC Guests Info"
	fi
	guest_config_dir="/etc/pve/lxc/"
	for guest in $lxcguests; do
		guest_id=$guest
		guest_name=$(awk '{if($1=="hostname:") host=$NF} END {print host}' $guest_config_dir/${guest_id}.conf)
		guest_memory_count=$(awk '{if($1=="memory:") mem=$NF} END {print mem}' $guest_config_dir/${guest_id}.conf)
		guest_memory_count=$(($guest_memory_count * 1024))
		guest_cpu_count=$(awk '{if($1=="cpulimit:") cpu=$NF} END {print cpu}' $guest_config_dir/${guest_id}.conf)
		vm_result=$vm_result"
		<item>
			<vm_ident>"$(escape_xml "$guest_id")"</vm_ident>
			<name>"$(escape_xml "$guest_name")"</name>
			<status></status>
			<uuid>"$(escape_xml "$guest_id")"</uuid>
			<memory_count>"$(escape_xml "$guest_memory_count")"</memory_count>
			<cpu_count>"$(escape_xml "$guest_cpu_count")"</cpu_count>
			<config_file>"$(escape_xml "$guest_config_dir${guest_id}.conf")"</config_file>
			<type>lxc</type>
			<icon>lxc</icon>
		</item>"
	done
fi

if [ -n "$vm_result" ]; then
	{
	echo "	<vm>$vm_result"
	echo "	</vm>"
	} >> "$xml_file"
fi

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
	partition_caption=$(echo "$mount" | cut -d" " -f1)
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
                log_max_file_size_pre=$(grep -E '\ size\ ' "$log" | sed -e 's/size//g' | tr -d '[:space:]')
                if [ "$log_max_file_size_pre" != "" ]; then
                    nlen="${#log_max_file_size_pre}"
                    if [ "${nlen}" > "1" ]; then
                       num=$(all_but_last_char "${log_max_file_size_pre}")
                       unt=$(last_char "${log_max_file_size_pre}")
                       case $unt in
                          [kK] )
                             log_max_file_size="${num}000"
                             ;;
                          [mM] )
                             log_max_file_size="${num}000000"
                             ;;
                          *) ;;
                       esac
                    fi
                fi
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
# Arch throws encoded characters in, just ignore Arch for now
if [ "$system_os_family" != "Arch" ]; then
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
fi
# Puppet facts
if [ -n "$(which facter 2>/dev/null)" ]; then
    puppet_exclusions=" system_uptime memoryfree memoryfree_mb sshdsakey sshfp_dsa sshfp_rsa sshrsakey swapfree swapfree_mb system_uptime "
    for variable in $(facter -p); do
        name=$( echo "$variable" | cut -d" " -f1 )
        if [ -z "$(echo "$puppet_exclusions" | grep " $name ")" ]; then
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
IFS="$NEWLINEIFS"
for line in $(grep -v '^ *#' /etc/passwd ); do
	name=$(echo "$line" | cut -d: -f1)
	full_name=$(echo "$line" | cut -d: -f5 | cut -d, -f1)
	sid=$(echo "$line" | cut -d: -f3)
	home=$(echo "$line" | cut -d: -f6)
	shell=$(echo "$line" | cut -d: -f7)
	echo "		<item>" >> $xml_file
	echo "			<name>$(escape_xml "$name")</name>" >> $xml_file
	echo "			<full_name>$(escape_xml "$full_name")</full_name>" >> $xml_file
	echo "			<sid>$(escape_xml "$sid")</sid>" >> $xml_file
	echo "			<home>$(escape_xml "$home")</home>" >> $xml_file
	echo "			<shell>$(escape_xml "$shell")</shell>" >> $xml_file
	test1=$(grep "^$name:" /etc/shadow 2>/dev/null | cut -d: -f8)
	test2=$(grep "^$name:" /etc/shadow 2>/dev/null | cut -d: -f2)
	today=$(($(date --utc +%s)/86400))
	if [ "$test1" ] || [ "$test2" ]; then
		status="enabled"
		disabled="false"
		if [ -n "$test1" ] && [ $(($test1+0)) -lt $today ]; then
			status="expired"
			disabled="true"
		fi
		if [ "$test1" = "0" ] || [ "$test2" = "\*" ]; then
			status="disabled"
			disabled="true"
		fi
		echo "			<status>$status</status>" >> $xml_file
		echo "			<disabled>$disabled</disabled>" >> $xml_file

		if [[ "$test2" == "" ]]; then
			echo "			<password_required>n</password_required>" >> $xml_file
		else
			echo "			<password_required>y</password_required>" >> $xml_file
		fi

		if [[ "$test2" == !* ]]; then
			echo "			<password_disabled>y</password_disabled>" >> $xml_file
		else
			echo "			<password_disabled>n</password_disabled>" >> $xml_file
		fi
		password_expires=$(chage -l "$name" 2>/dev/null | grep -i "^Password expires" | cut -d: -f2)
		echo "			<password_expires>$(escape_xml "$password_expires")</password_expires>" >> $xml_file
	fi
	echo "			<keys>" >> $xml_file
	for keyline in $(grep -v ^$ "$home/.ssh/authorized_keys" 2>/dev/null | grep -v ^# | sort -d); do
		echo "				<key>$(escape_xml "$keyline")</key>" >> $xml_file
	done
	echo "			</keys>" >> $xml_file
	echo "		</item>" >> $xml_file
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
test=`which getent 2>/dev/null`
if [ -n "$test" ]; then
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
fi
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
# include OS in software
echo "		<item>" >> "$xml_file"
echo "			<name>$(escape_xml $system_os_name)</name>" >> "$xml_file"
echo "			<version>$(escape_xml $system_os_version)</version>" >> "$xml_file"
echo "			<description>Operating System</description>" >> "$xml_file"
echo "		</item>" >> "$xml_file"
# Detect FirstWave applications
if [ -f "/usr/local/omk/bin/show_versions.pl" ]; then
	for package in $(/usr/local/omk/bin/show_versions.pl 2>/dev/null); do
		name=$(echo "$package" | cut -d" " -f1)
		version=$(echo "$package" | cut -d" " -f2)
		# Determine the modified date
		installed_on=""
		if [[ "$name" == *"NMIS"* ]]; then
			installed_on=$(env stat --format=%y /usr/local/nmis8/lib/NMIS.pm 2>/dev/null | cut -d. -f1)
		fi
		if [[ "$name" == *"NMIS"* ]] && [[ "$installed_on" == "" ]]; then
			installed_on=$(env stat --format=%y /usr/local/nmis9/lib/NMISNG.pm 2>/dev/null | cut -d. -f1)
		fi
		if [[ "$name" == *"Open-AudIT"* ]]; then
			installed_on=$(env stat --format=%y /usr/local/omk/lib/OaeController.pm.exe 2>/dev/null | cut -d. -f1)
		fi
		if [[ "$name" == *"opAddress"* ]]; then
			installed_on=$(env stat --format=%y /usr/local/omk/lib/AddressController.pm.exe 2>/dev/null | cut -d. -f1)
		fi
		if [[ "$name" == *"opCharts"* ]]; then
			installed_on=$(env stat --format=%y /usr/local/omk/lib/ChartsController.pm.exe 2>/dev/null | cut -d. -f1)
		fi
		if [[ "$name" == *"opConfig"* ]]; then
			installed_on=$(env stat --format=%y /usr/local/omk/lib/ConfigController.pm.exe 2>/dev/null | cut -d. -f1)
		fi
		if [[ "$name" == *"opEvents"* ]]; then
			installed_on=$(env stat --format=%y /usr/local/omk/lib/EventsController.pm.exe 2>/dev/null | cut -d. -f1)
		fi
		if [[ "$name" == *"opFlow"* ]]; then
			installed_on=$(env stat --format=%y /usr/local/omk/lib/FlowController.pm.exe 2>/dev/null | cut -d. -f1)
		fi
		if [[ "$name" == *"opHA"* ]]; then
			installed_on=$(env stat --format=%y /usr/local/omk/lib/HighAvailabilityController.pm.exe 2>/dev/null | cut -d. -f1)
		fi
		if [[ "$name" == *"opReports"* ]]; then
			installed_on=$(env stat --format=%y /usr/local/omk/lib/ReportsController.pm.exe 2>/dev/null | cut -d. -f1)
		fi
		if [[ "$name" == *"No"* ]]; then
			# A weird edge case to account for 
			# No OMK manifest file at '/data/opmojo/bin/../manifest'.
			continue
		fi
		echo "		<item>" >> "$xml_file"
		echo "			<name>$(escape_xml $name)</name>" >> "$xml_file"
		echo "			<version>$(escape_xml $version)</version>" >> "$xml_file"
		echo "			<description></description>" >> "$xml_file"
		echo "			<url>https://firstwave.com</url>" >> "$xml_file"
		echo "			<publisher>FirstWave</publisher>" >> "$xml_file"
		echo "			<location>/usr/local/omk</location>" >> "$xml_file"
		echo "			<installed_on>$(escape_xml $installed_on)</installed_on>" >> "$xml_file"
		echo "		</item>" >> "$xml_file"
	done
fi
if [ -f "/usr/local/open-audit/app/Config/OpenAudit.php" ]; then
	# Open-AudiT 5 and greater
	name="Open-AudIT"
	version=$(grep displayVersion /usr/local/open-audit/app/Config/OpenAudit.php | cut -d\' -f2)
	installed_on=$(env stat --format=%y /usr/local/open-audit/app/Config/View.php 2>/dev/null | cut -d. -f1)
	echo "		<item>" >> "$xml_file"
	echo "			<name>$(escape_xml $name)</name>" >> "$xml_file"
	echo "			<version>$(escape_xml $version)</version>" >> "$xml_file"
	echo "			<description></description>" >> "$xml_file"
	echo "			<url>https://firstwave.com</url>" >> "$xml_file"
	echo "			<publisher>FirstWave</publisher>" >> "$xml_file"
	echo "			<location>/usr/local/open-audit</location>" >> "$xml_file"
	echo "			<installed_on>$(escape_xml $installed_on)</installed_on>" >> "$xml_file"
	echo "		</item>" >> "$xml_file"
fi
# Detect Quest InTrust agent
adcscm_path=`service adcscm.linux_intel status 2>/dev/null | grep '\-service' | awk '{ print $3 }'`
if [ -n "$adcscm_path" ]; then
	adcscm_binary=`echo "${adcscm_path/adcscm\.linux_intel/adcscm}"`
	version=`$adcscm_binary -help | grep version | awk '{ print $5 }'`
	installed_on=$(env stat --format=%y "$adcscm_binary" 2>/dev/null | cut -d. -f1)
	echo "		<item>" >> "$xml_file"
	echo "			<name>Quest InTrust Agent</name>" >> "$xml_file"
	echo "			<version>$(escape_xml $version)</version>" >> "$xml_file"
	echo "			<description></description>" >> "$xml_file"
	echo "			<url>https://www.quest.com/products/intrust/</url>" >> "$xml_file"
	echo "			<publisher>Quest</publisher>" >> "$xml_file"
	echo "			<location>$(escape_xml $adcscm_binary)</location>" >> "$xml_file"
	echo "			<installed_on>$(escape_xml $installed_on)</installed_on>" >> "$xml_file"
	echo "		</item>" >> "$xml_file"
fi
case $system_os_family in
		'Ubuntu' | 'Debian' | 'LinuxMint' | 'Raspbian' )
			dpkg-query --show --showformat="\t\t<item>\n\t\t\t<name><![CDATA[\${Package}]]></name>\n\t\t\t<version><![CDATA[\${Version}]]></version>\n\t\t\t<url></url>\n\t\t</item>\n" |\
				sed -e 's/\&.*]]/]]/' >> "$xml_file"
			;;
		'CentOS' | 'RedHat' | 'Fedora' | 'Suse' | 'Amazon' | 'Mariner' | 'AlmaLinux' )
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
		'Solus' )
			for package in $(eopkg list-installed | cut -d" " -f1); do
				version=$(eopkg blame "$package" | grep "Name: $package" | cut -d" " -f4 | cut -d, -f1)
				description=$(eopkg info "$package" | grep Summary | cut -d: -f2 | head -n1)
				echo "		<item>" >> "$xml_file"
				echo "			<name>$(escape_xml $package)</name>" >> "$xml_file"
				echo "			<version>$(escape_xml $version)</version>" >> "$xml_file"
				echo "			<description>$(escape_xml $description)</description>" >> "$xml_file"
				echo "		</item>" >> "$xml_file"
			done
			;;
		'Arch' )
			for package in $(pacman -Q 2>/dev/null | cut -d" " -f1); do
				version=$(pacman -Q -i "$package" 2>/dev/null | grep "^Version" | cut -d: -f2)
				description=$(pacman -Q -i "$package" 2>/dev/null | grep "^Description" | cut -d: -f2)
				url=$(pacman -Q -i "$package" 2>/dev/null | grep "^URL" | cut -d: -f2)
				installed_on=$(pacman -Q -i "$package" 2>/dev/null | grep "^Install Date" | cut -d: -f2)
				echo "		<item>" >> "$xml_file"
				echo "			<name>$(escape_xml $package)</name>" >> "$xml_file"
				echo "			<version>$(escape_xml $version)</version>" >> "$xml_file"
				echo "			<description>$(escape_xml $description)</description>" >> "$xml_file"
				echo "			<url>$(escape_xml $url)</url>" >> "$xml_file"
				echo "			<installed_on>$(escape_xml $installed_on)</installed_on>" >> "$xml_file"
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
systemd_services=""
upstart_service=""
if hash systemctl 2>/dev/null; then
	# systemD services
	if [ "$debugging" -gt "1" ]; then
		echo "    systemd services"
	fi
	systemd_services=$(systemctl list-units -all --type=service --no-pager --no-legend 2>/dev/null | grep -v ● | awk '{ print $1 }' | cut -d. -f1)
	for name in      $(systemctl list-units -all --type=service --no-pager --no-legend 2>/dev/null | grep -v ● | awk '{ print $1 }'); do
		description=$(systemctl show "$name" -p Description | cut -d= -f2)
		description="$description (using systemd)"
		binary=$(systemctl show "$name" -p ExecStart | cut -d" " -f2 | cut -d= -f2 | sort -u)
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
		service_name=$(lcase "$name")
		suffix=".service"
		service_name=${service_name%$suffix}
		service_name=$(systemd-escape --unescape "$service_name")
		{
		echo "		<item>"
		echo "			<name>$(escape_xml "$service_name")</name>"
		echo "			<description>$(escape_xml "$description")</description>"
		echo "			<start_mode>$(escape_xml "$start_mode")</start_mode>"
		echo "			<executable>$(escape_xml "$binary")</executable>"
		echo "			<state>$(escape_xml "$state")</state>"
		echo "			<user>$(escape_xml "$user")</user>"
		echo "		</item>"
		} >> "$xml_file"
	done
fi

if [ "$system_os_family" = "Ubuntu" ] || [ "$system_os_family" = "Debian" ]; then
	INITDEFAULT=$(awk -F= ' /^env\ DEFAULT_RUNLEVEL/ { print $2 } ' /etc/init/rc-sysinit.conf 2>/dev/null)
	# upstart services
	if [ -n `which initctl 2>/dev/null` ]; then
		if [ "$debugging" -gt "1" ]; then
			echo "    upstart services"
		fi
		upstart_services=$(initctl list 2>/dev/null | sort | uniq | cut -d" " -f1)
		for item in $(initctl list 2>/dev/null | sort | uniq) ; do
			start_mode="Manual"
			if [[ "$item" == *" start"* ]]; then
				start_mode="Auto"
			fi
			service_state="Stopped"
			if [[ "$item" == *"unning"* ]]; then
				service_state="Running"
			fi
			service_name=$(echo "$item" | cut -d" " -f1)
			service_name=$(lcase "$service_name")
			found=""
			for systemd in $systemd_services; do
				if [ "$service_name" = "$systemd" ]; then
					found="true"
				fi
			done
			service_description="$item (using upstart)"
			if [ -z "$found" ]; then
				{
				echo "		<item>"
				echo "			<name>$(escape_xml "$service_name")</name>"
				echo "			<description>$(escape_xml "$service_description")</description>"
				echo "			<start_mode>$(escape_xml "$start_mode")</start_mode>"
				echo "			<state>$(escape_xml "$service_state")</state>"
				echo "		</item>"
				} >> "$xml_file"
			fi
		done
	fi
fi

if [ "$system_os_family" = "CentOS" ] || [ "$system_os_family" = "RedHat" ] || [ "$system_os_family" = "Suse" ] || [ "$system_os_family" = "Amazon" ] || [ "$system_os_family" = "Mariner" ]; then
	INITDEFAULT=$(awk -F: '/id:/,/:initdefault:/ { print $2 }' /etc/inittab)
fi

if [ "$debugging" -gt "1" ]; then
	echo "    init.d services"
fi
for service in /etc/init.d/* ; do
	[ -e $service ] || break
	if [ "$service" != "functions" ] && [ "$service" != "README" ] && [ "$service" != "upstart" ] && [ "$service" != "skeleton" ] && [ "$service_name" != "rcS" ]; then
		service_name=$(echo "$service" | cut -d/ -f4)
		service_name=$(lcase "$service_name")
		suffix=".sh"
		service_name=${service_name%$suffix}
		service_description=""
		service_state=""
		service_binary=""
		systemctl=$(which systemctl 2>/dev/null)
		if [ -n "$systemctl" ]; then
			# systemd is present - ask it
			service_state=$(systemctl show "$service_name" -p ActiveState | grep " Active:" | awk '{ print $2 }')
			service_description=$(systemctl show "$service_name" -p Description | cut -d= -f2)
			service_binary=$(systemctl show "$service_name" -p ExecStart | cut -d" " -f2 | cut -d= -f2)
		fi
		if [ -z "service_description" ] || [ "$service_description" = " " ] || [ "$service_description" = "$service_name.service" ]; then
			service_description="$service"
		fi
		service_description="$service_description (using init.d)"
		if [ -z "service_state" ]; then
			service_state=$(service "$service_name" status 2>/dev/null | grep -E -i "running|stopped")
		fi
		if [[ "$service_state" == *"unning"* ]]; then
			service_state="Running"
		fi
		if [[ "$service_state" == *"not running"* ]]; then
			service_state="Stopped"
		fi
		if [[ "$service_state" == *"topped"* ]]; then
			service_state="Stopped"
		fi
		start_mode="Automatic"
		test=$(ls /etc/rc"$INITDEFAULT".d/*"$service_name"* 2>/dev/null)
		if [ -n "$test" ]; then
			start_mode="Manual"
		fi
		found=""
		for systemd in $systemd_services; do
			if [ "$service_name" = "$systemd" ]; then
				found="true"
			fi
		done
		for systemd in $upstart_services; do
			if [ "$service_name" = "$systemd" ]; then
				found="true"
			fi
		done
		if [ -z "$found" ]; then
			{
			echo "		<item>"
			echo "			<name>$(escape_xml "$service_name")</name>"
			echo "			<description>$(escape_xml "$service_description")</description>" >> "$xml_file"
			echo "			<start_mode>$(escape_xml "$start_mode")</start_mode>" >> "$xml_file"
			echo "			<executable>$(escape_xml "$service_binary")</executable>"
			echo "			<state>$(escape_xml "$service_state")</state>" >> "$xml_file"
			echo "		</item>" >> "$xml_file"
			} >> "$xml_file"
		fi
	fi
done

echo "	</service>" >> "$xml_file"

########################################################
# SERVER SECTION                                       #
########################################################
if [ "$debugging" -gt "0" ]; then
	echo "Server Info"
fi
echo "	<server>" >> "$xml_file"

test=$(which apache2 2>/dev/null)
if [ -n "$test" ]; then
	if [ "$debugging" -gt "0" ]; then
		echo "	apache"
	fi
	version=$(apache2 -v 2>/dev/null | grep "Server version" | cut -d: -f2 | cut -d/ -f2 | awk '{ print $1 }')
	version_string=$(apache2 -v 2>/dev/null | grep "Server version" | cut -d: -f2)
	apache_status=$(service apache2 status 2>/dev/null | grep Active | awk '{ print $2 }')
	if [ -z "$apache_status" ]; then
		apache_status=$(service apache2 status 2>/dev/null | head -n1)
	fi
	if [ -n "$rev_exists" ]; then
		port=$(netstat -tulpn 2>/dev/null | grep apache | awk '{ print $4 }' | rev | cut -d: -f1 | rev | head -n1)
	else
		port=""
	fi
	config_file=$(apachectl -S 2>/dev/null | grep ServerRoot | cut -d\" -f2)
	if [ -n "$config_file" ]; then
		certificates=$(sudo grep -r -h -i SSLCertificateFile "$config_file"/* 2>/dev/null | sed -e 's/^[ \t]*//' | grep -v ^# | sed 's/SSLCertificateFile//' | sed -e 's/^[ \t]*//' | sort | uniq)
		if [ -n "$certificates" ]; then
			for file in $(echo "$certificates"); do
				cert_dirs[${#cert_dirs[@]}]="$file"
			done
		fi
	fi
	{
	echo "		<item>"
	echo "			<type>web</type>"
	echo "			<name>Apache</name>"
	echo "			<version>$(escape_xml "$version")</version>"
	echo "			<version_string>$(escape_xml "$version_string")</version_string>"
	echo "			<status>$(escape_xml "$apache_status")</status>"
	echo "			<port>$(escape_xml "$port")</port>"
	echo "			<certificates>$(escape_xml "$certificates")</certificates>"
	echo "		</item>"
	} >> "$xml_file"
fi

test=$(which httpd 2>/dev/null)
if [ -n "$test" ]; then
	if [ "$debugging" -gt "0" ]; then
		echo "	httpd"
	fi
	version=$(httpd -v 2>/dev/null | grep "Server version" | cut -d: -f2 | cut -d/ -f2 | awk '{ print $1 }')
	version_string=$(httpd -v 2>/dev/null | grep "Server version" | cut -d: -f2)
	apache_status=$(service httpd status 2>/dev/null | grep Active | awk '{ print $2 }')
	config_file=$(httpd -S 2>/dev/null | grep ServerRoot | cut -d\" -f2)
	if [ -n "$config_file" ]; then
		certificates=$(sudo grep -r -h -i SSLCertificateFile "$config_file"/* 2>/dev/null | sed -e 's/^[ \t]*//' | grep -v ^# | sed 's/SSLCertificateFile//' | sed -e 's/^[ \t]*//' | sort | uniq)
		if [ -n "$certificates" ]; then
			for file in $(echo "$certificates"); do
				cert_dirs[${#cert_dirs[@]}]="$file"
			done
		fi
	fi
	if [ -n "$rev_exists" ]; then
		port=$(netstat -tulpn 2>/dev/null | grep httpd | awk '{ print $4 }' | rev | cut -d: -f1 | rev | head -n1)
	else
		port=""
	fi
	{
	echo "		<item>"
	echo "			<type>web</type>"
	echo "			<name>Apache</name>"
	echo "			<version>$(escape_xml "$version")</version>"
	echo "			<version_string>$(escape_xml "$version_string")</version_string>"
	echo "			<status>$(escape_xml "$apache_status")</status>"
	echo "			<port>$(escape_xml "$port")</port>"
	echo "		</item>"
	} >> "$xml_file"
fi

# fix mysqld instead of mysql to prevent mysql-client false positive
test=$(which mysqld 2>/dev/null)
if [ -n "$test" ]; then
	if [ "$debugging" -gt "0" ]; then
		echo "	mysql"
	fi
	# fix for mysql 8
	# version=$(mysql --version | awk '{ print $5 }' | cut -d, -f1)
	version=$(mysqld --version | awk '{ print $3 }' | cut -d"-" -f1)
	version_string=$(mysql --version 2>/dev/null)
	if mysql --version 2>/dev/null | grep -iq mariadb; then
		dbname="MariaDB"
	else 
		dbname="MySQL"
	fi
	status=$(service mysql status 2>/dev/null | grep Active | awk '{ print $2 }')
	if [ -z "$status" ]; then
		status=$(service mysql status 2>/dev/null | grep Uptime | cut -d: -f2 2>/dev/null)
		if [ -n "$status" ]; then
			status="active"
		fi
	fi
	if [ -n "$rev_exists" ]; then
		port=$(netstat -tulpn 2>/dev/null | grep mysql | awk '{ print $4 }' | rev | cut -d: -f1 | rev | head -n1)
	else
		port=""
	fi
	ip=$(netstat -tulpn 2>/dev/null | grep mysql | awk '{ print $4 }' | cut -d: -f1 | head -n1)
	{
	echo "		<item>"
	echo "			<type>database</type>"
	echo "			<name>$(escape_xml "$dbname")</name>"
	echo "			<version>$(escape_xml "$version")</version>"
	echo "			<version_string>$(escape_xml "$version_string")</version_string>"
	echo "			<status>$(escape_xml "$status")</status>"
	echo "			<ip>$(escape_xml "$ip")</ip>"
	echo "			<port>$(escape_xml "$port")</port>"
	echo "		</item>"
	} >> "$xml_file"
fi

# Custom addition - postgresql
test=$(which psql 2>/dev/null)
if [ -n "$test" ]; then
	if [ "$debugging" -gt "0" ]; then
		echo "	psql"
	fi
	version=$(psql --version | head -1 | awk '{ print $3 }' | cut -d, -f1)
	version_string=$(psql --version 2>/dev/null | head -1)
	status=$(service postgresql status 2>/dev/null | grep Active | awk '{ print $2 }')
	if [ -z "$status" ]; then
		status=$(service postgresql status 2>/dev/null | grep Uptime | cut -d: -f2 2>/dev/null)
		if [ -n "$status" ]; then
			status="active"
		fi
	fi
	if [ -n "$rev_exists" ]; then
		port=$(netstat -tulpn 2>/dev/null | grep postgres | awk '{ print $4 }' | rev | cut -d: -f1 | rev | head -n1)
	else
		port=""
	fi
	ip=$(netstat -tulpn 2>/dev/null | grep postgres | awk '{ print $4 }' | cut -d: -f1 | head -n1)
	{
	echo "		<item>"
	echo "			<type>database</type>"
	echo "			<name>PostgreSQL</name>"
	echo "			<version>$(escape_xml "$version")</version>"
	echo "			<version_string>$(escape_xml "$version_string")</version_string>"
	echo "			<status>$(escape_xml "$status")</status>"
	echo "			<ip>$(escape_xml "$ip")</ip>"
	echo "			<port>$(escape_xml "$port")</port>"
	echo "		</item>"
	} >> "$xml_file"
fi

# Custom addition - alexander.szele@umanitoba.ca
# Pull web server info from nginx
test=$(which nginx 2>/dev/null)
if [ -n "$test" ]; then
	if [ "$debugging" -gt "0" ]; then
		echo "	nginx"
	fi
	version=$(nginx -v 2>&1 | cut -d/ -f2)
	version_string=$(nginx -v 2>&1 | cut -d: -f2 | sed -e 's/^[[:space:]]*//')
	nginx_status=$(service nginx status 2>/dev/null | grep Active | awk '{ print $2 }')
	if [ -n "$rev_exists" ]; then
		port=$(netstat -tulpn 2>/dev/null | grep nginx | awk '{ print$4 }' | rev | cut -d: -f1 | rev | head -n1)
	else
		port=""
	fi
	{
	echo "		<item>"
	echo "			<type>web</type>"
	echo "			<name>NGINX</name>"
	echo "			<version>$(escape_xml "$version")</version>"
	echo "			<version_string>$(escape_xml "$version_string")</version_string>"
	echo "			<status>$(escape_xml "$nginx_status")</status>"
	echo "			<port>$(escape_xml "$port")</port>"
	echo "		</item>"
	} >> "$xml_file"
fi

# Custom addition - alexander.szele@umanitoba.ca
# Pull web server info from tomcat
# test = PID of java tomcat process
test=""
if [ "$busybox" = "n" ]; then
	test=$(ps -ef | grep java | grep catalina | grep -v grep | awk '{ print $2 }' 2>/dev/null)
fi
if [ -n "$test" ]; then
	if [ "$debugging" -gt "0" ]; then
		echo "	tomcat"
	fi
	instance=0
	for pid in $test
	do
		instance=$(expr $instance + 1)
	
		if [ $instance -gt 1 ]
	        then
			name="Tomcat-instance$instance"
	        else
			name="Tomcat"
	        fi
	
		catalina_home=$(ps -fp $pid | sed -n -e 's/^.*Dcatalina\.home=//p' | awk '{ print $1 }')
		catalina_base=$(ps -fp $pid | sed -n -e 's/^.*Dcatalina\.base=//p' | awk '{ print $1 }')
		version_text=$(unzip -q -c $catalina_home/lib/catalina.jar META-INF/MANIFEST.MF | grep "Implementation-Title:" | cut -d":" -f2 | sed -e 's/^[[:space:]]*//' | tr -d '\r')
		version=$(unzip -q -c $catalina_home/lib/catalina.jar META-INF/MANIFEST.MF | grep "Implementation-Version:" | cut -d":" -f2 | sed -e 's/^[[:space:]]*//' | tr -d '\r')
		version_string="$version_text/$version"
		description="Catalina.home=$catalina_home; Catalina.base=$catalina_base"
		# ServerInfo.properties is sometimes manually mangled by developers as a security measure.
		# If the above fails, these can be tried.
		# version=$(java -cp $catalina_home/lib/catalina.jar org.apache.catalina.util.ServerInfo 2>/dev/null | grep "Server number" | cut -d":" -f2 | sed -e 's/^[[:space:]]*//')
		# version_string=$(java -cp $catalina_home/lib/catalina.jar org.apache.catalina.util.ServerInfo 2>/dev/null | grep "Server version" | cut -d":" -f2 | sed -e 's/^[[:space:]]*//')
		tomcat_status=$(service tomcat status 2>/dev/null | grep Active | awk '{ print $2 }')
		# Port information causes issues on import. If multiple instances claim the same port, then the xml import process causes missed information.
		# Open-Audit does not appear to allow multiple servers to claim the same port, and due to the vagueries of tomcat's port listings
		# It is best to leave this blank.
		# port=$(netstat -tulpn 2>/dev/null | grep java | awk '{ print$4 }' | rev | cut -d: -f1 | rev | head -n1)
		{
		echo "		<item>"
		echo "			<type>web</type>"
		echo "			<name>$(escape_xml "$name")</name>"
		echo "			<version>$(escape_xml "$version")</version>"
		echo "			<version_string>$(escape_xml "$version_string")</version_string>"
		echo "			<description>$(escape_xml "$description")</description>"
		echo "			<status>$(escape_xml "$tomcat_status")</status>"
		echo "			<port></port>"
		echo "		</item>"
		} >> "$xml_file"
	done
fi

# Custom addition - alexander.szele@umanitoba.ca
# Pull db server info from mongodb
test=$(which mongo 2>/dev/null)
if [ -n "$test" ]; then
	if [ "$debugging" -gt "0" ]; then
		echo "	mongo"
	fi
	version=$(mongo --version | grep -i mongodb | awk '{ print $4 }')
	version_string=$(mongo --version | grep -i mongodb)
	status=$(service mongod status 2>/dev/null | grep Active | awk '{ print $2 }')
	if [ -z "$status" ]; then
		status=$(service mongod status 2>/dev/null | grep Uptime | cut -d: -f2 2>/dev/null)
		if [ -n "$status" ]; then
			status="active"
		fi
	fi
	if [ -n "$rev_exists" ]; then
		port=$(netstat -tulpn 2>/dev/null | grep mongod | awk '{ print $4 }' | rev | cut -d: -f1 | rev | head -n1)
	else
		port=""
	fi
	ip=$(netstat -tulpn 2>/dev/null | grep mongod | awk '{ print $4 }' | cut -d: -f1 | head -n1)
	{
	echo "		<item>"
	echo "			<type>database</type>"
	echo "			<name>MongoDB</name>"
	echo "			<version>$(escape_xml "$version")</version>"
	echo "			<version_string>$(escape_xml "$version_string")</version_string>"
	echo "			<status>$(escape_xml "$status")</status>"
	echo "			<ip>$(escape_xml "$ip")</ip>"
	echo "			<port>$(escape_xml "$port")</port>"
	echo "		</item>"
	} >> "$xml_file"
fi
echo "	</server>" >> "$xml_file"

if [ "$debugging" -gt "0" ]; then
	echo "Server Items"
fi

echo "	<server_item>" >> "$xml_file"
if [ -e "/etc/mysql/mysql.conf.d/mysqld.cnf" ]; then
	if [ "$debugging" -gt "0" ]; then
		echo "	mysqld using /etc/mysql/mysql.conf.d/mysqld.cnf"
	fi
	datadir=$(grep datadir /etc/mysql/mysql.conf.d/mysqld.cnf 2>/dev/null | awk '{ print $3 }')
	if [ -n "$datadir" ]; then
		if [ -n "$rev_exists" ]; then
			for i in $(find "$datadir" -type d 2>/dev/null | rev | cut -d/ -f1 | rev); do
				size=$(ls -lk "$datadir"/"$i" 2>/dev/null | awk '{ total += $5 }; END { print total/1024/1024 }')
				{
				echo "		<item>"
				echo "			<type>database</type>"
				echo "			<parent_name>$(escape_xml "$dbname")</parent_name>"
				echo "			<name>$(escape_xml "$i")</name>"
				echo "			<description></description>"
				echo "			<id_internal>$(escape_xml "$i")</id_internal>"
				echo "			<instance>$(escape_xml "$dbname")</instance>"
				echo "			<path>$(escape_xml "$datadir")/$(escape_xml "$i")</path>"
				echo "			<size>$(escape_xml "$size")</size>"
				echo "		</item>"
				} >> "$xml_file"
			done
		fi
	fi
fi

if [ -e "/etc/my.cnf" ]; then
	if [ "$debugging" -gt "0" ]; then
		echo "	mysql using /etc/my.cnf"
	fi
	datadir=$(grep datadir /etc/my.cnf 2>/dev/null | cut -d= -f2)
	if [ -n "$datadir" ]; then
		if [ -n "$rev_exists" ]; then
			for i in $(find "$datadir" -type d 2>/dev/null | rev | cut -d/ -f1 | rev); do
				size=$(ls -lk "$datadir"/"$i" | awk '{ total += $5 }; END { print total/1024/1024 }')
				{
				echo "		<item>"
				echo "			<type>database</type>"
				echo "			<parent_name>$(escape_xml "$dbname")</parent_name>"
				echo "			<name>$(escape_xml "$i")</name>"
				echo "			<description></description>"
				echo "			<id_internal>$(escape_xml "$i")</id_internal>"
				echo "			<instance>$(escape_xml "$dbname")</instance>"
				echo "			<path>$(escape_xml "$datadir")/$(escape_xml "$i")</path>"
				echo "			<size>$(escape_xml "$size")</size>"
				echo "		</item>"
				} >> "$xml_file"
			done
		fi
	fi
fi

if [ -e "/etc/mysql/my.cnf" ]; then
	if [ "$debugging" -gt "0" ]; then
		echo "	mysql using /etc/mysql/my.cnf"
	fi
	datadir=$(grep datadir /etc/mysql/my.cnf 2>/dev/null | awk '{ print $3 }')
	if [ -n "$datadir" ]; then
		if [ -n "$rev_exists" ]; then
			for i in $(find "$datadir" -type d 2>/dev/null | rev | cut -d/ -f1 | rev); do
				size=$(ls -lk "$datadir"/"$i" | awk '{ total += $5 }; END { print total/1024/1024 }')
				{
				echo "		<item>"
				echo "			<type>database</type>"
				echo "			<parent_name>$(escape_xml "$dbname")</parent_name>"
				echo "			<name>$(escape_xml "$i")</name>"
				echo "			<description></description>"
				echo "			<id_internal>$(escape_xml "$i")</id_internal>"
				echo "			<instance>$(escape_xml "$dbname")</instance>"
				echo "			<path>$(escape_xml "$datadir")/$(escape_xml "$i")</path>"
				echo "			<size>$(escape_xml "$size")</size>"
				echo "		</item>"
				} >> "$xml_file"
			done
		fi
	fi
fi


datadir=$(grep -IR datadir /etc/mysql/mariadb.conf.d/ 2>/dev/null | cut -d= -f2 | cut -d" " -f2)
if [ -n "$datadir" ]; then
	if [ "$debugging" -gt "0" ]; then
		echo "	mariadb using /etc/mysql/mariadb.conf.d"
	fi
	if [ -n "$rev_exists" ]; then
		for i in $(find "$datadir" -type d 2>/dev/null | rev | cut -d/ -f1 | rev); do
			size=$(ls -lk "$datadir"/"$i" | awk '{ total += $5 }; END { print total/1024/1024 }')
			{
			echo "		<item>"
			echo "			<type>database</type>"
			echo "			<parent_name>$(escape_xml "$dbname")</parent_name>"
			echo "			<name>$(escape_xml "$i")</name>"
			echo "			<description></description>"
			echo "			<id_internal>$(escape_xml "$i")</id_internal>"
			echo "			<instance>$(escape_xml "$dbname")</instance>"
			echo "			<path>$(escape_xml "$datadir")/$(escape_xml "$i")</path>"
			echo "			<size>$(escape_xml "$size")</size>"
			echo "		</item>"
			} >> "$xml_file"
		done
	fi
fi

# Custom addition - postgres data_directory 
datadir=$(grep -IR data_directory /etc/postgresql/ 2>/dev/null | cut -d= -f2 | cut -d" " -f2 | cut -d"'" -f2)

# if above fails, try to get datadir from running process command line
if [ ! -d "$datadir" ]; then
	datadir=$(ps -ef | grep postgres | grep '\-D .*' -o | awk '{print $2}')
fi

oid2name=$(which oid2name 2>/dev/null)
if [ -d "$datadir" ]; then
	if [ "$debugging" -gt "0" ]; then
		echo "	postgresql using /etc/postgresql/"
	fi
	if [ -n "$rev_exists" ]; then
		for i in $(find "$datadir/base/" -type d 2>/dev/null | rev | cut -d/ -f1 | rev | grep -v tmp); do
			size=$(ls -lk "$datadir/base/"/"$i" | awk '{ total += $5 }; END { print total/1024/1024 }')
			
			if [ ! "$oid2name" ]; then
				# try to find oid2name in path (for ubuntu)
				oid2name=$(find /usr/lib/postgresql/ -name oid2name 2>/dev/null)
			fi
			
			if [ -x "$oid2name" ]; then
				myname=$(sudo -u postgres $oid2name 2>/dev/null | grep -w $i | tr -s ' ' | cut -d" " -f3)
			else
				myname=$i
			fi
			{
			echo "		<item>"
			echo "			<type>database</type>"
			echo "			<parent_name>PostgreSQL</parent_name>"
			echo "			<name>$(escape_xml "$myname")</name>"
			echo "			<description></description>"
			echo "			<id_internal>$(escape_xml "$i")</id_internal>"
			echo "			<instance>PostgreSQL</instance>"
			echo "			<path>$(escape_xml "$datadir/base")/$(escape_xml "$i")</path>"
			echo "			<size>$(escape_xml "$size")</size>"
			echo "		</item>"
			} >> "$xml_file"
		done
	fi
fi

# Custom addition - tomcat instances
instance=0
	
for i in $(ps -ef | grep java | grep catalina | grep -v grep | awk '{ print $2 }' 2>/dev/null); do
	if [ "$debugging" -gt "0" ]; then
		echo "	tomcat instances"
	fi

	if [ -n "$i" ]; then
		instance=$(expr $instance + 1)
		if [ $instance -gt 1 ]
	        then
			parent="Tomcat-instance$instance"
	        else
			parent="Tomcat"
	        fi
		
		# iterate over every port of tomcat pid
		for j in $(netstat -pln | grep "$i"/java | tr -s ' ' | cut -d" " -f4); do
			# rev makes port work with tcp and tcp6 output
			port=$(echo "$j" | rev | cut -d":" -f1 | rev)
			ip=$(echo "$j" | cut -d":" -f1)
			path=$(ps -fp "$i" | sed -n -e 's/^.*Dcatalina\.home=//p' | awk '{ print $1 }')
			description=""

			if (grep $port "$path"/conf/server.xml | grep -i -q shutdown); then
				description="Shutdown"
			fi

			name=$(basename "$path")
			{
			echo "		<item>"
			echo "			<type>website</type>"
			echo "			<parent_name>$(escape_xml "$parent")</parent_name>"
			echo "			<name>$(escape_xml "$name")</name>"
			echo "			<description>$(escape_xml "$description")</description>"
			echo "			<id_internal></id_internal>"
			echo "			<ip>$(escape_xml "$ip")</ip>"
			echo "			<hostname></hostname>"
			echo "			<port>$(escape_xml "$port")</port>"
			echo "			<status>$(escape_xml "$tomcat_status")</status>"
			echo "			<instance></instance>"
			echo "			<path>$(escape_xml "$path")</path>"
			echo "		</item>"
			} >> "$xml_file"
		done
	fi
done

for i in $(apachectl -S 2>/dev/null  | grep port); do
	if [ "$debugging" -gt "0" ]; then
		echo "	apache using apachectl"
	fi
	if [ -n "$i" ]; then
		name=$(echo "$i" | awk '{ print $4 }')
		port=$(echo "$i" | awk '{ print $2 }')
		config_file=$(echo "$i" | cut -d\( -f2 | cut -d: -f1)
		config_line=$(echo "$i" | cut -d\( -f2 | cut -d: -f2 | cut -d\) -f1)
		path=$(tail --lines=+"$config_line" "$config_file" | grep -i documentroot | head -n1 | awk '{ print $2 }')
		{
		echo "		<item>"
		echo "			<type>website</type>"
		echo "			<parent_name>Apache</parent_name>"
		echo "			<name>$(escape_xml "$name")</name>"
		echo "			<description></description>"
		echo "			<id_internal>$(escape_xml "$name")</id_internal>"
		echo "			<ip></ip>"
		echo "			<hostname>$(escape_xml "$name")</hostname>"
		echo "			<port>$(escape_xml "$port")</port>"
		echo "			<status>$(escape_xml "$apache_status")</status>"
		echo "			<instance></instance>"
		echo "			<path>$(escape_xml "$path")</path>"
		echo "		</item>"
		} >> "$xml_file"
	fi
done

for i in $(apachectl -S 2>/dev/null  | grep "\*:[[:digit:]]*[[:space:]]" | grep -v NameVirtualHost); do
	if [ "$debugging" -gt "0" ]; then
		echo "	apache using apachectl for VirtualHosts"
	fi
	if [ -n "$i" ]; then
		name=$(echo "$i" | awk '{ print $2 }')
		port=$(echo "$i" | awk '{ print $1 }' | cut -d: -f2)
		config_file=$(echo "$i" | cut -d\( -f2 | cut -d: -f1)
		config_line=$(echo "$i" | cut -d\( -f2 | cut -d: -f2 | cut -d\) -f1)
		path=$(tail --lines=+"$config_line" "$config_file" | grep -i documentroot | head -n1 | awk '{ print $2 }')
		{
		echo "		<item>"
		echo "			<type>website</type>"
		echo "			<parent_name>Apache</parent_name>"
		echo "			<name>$(escape_xml "$name")</name>"
		echo "			<description></description>"
		echo "			<id_internal>$(escape_xml "$name")</id_internal>"
		echo "			<ip></ip>"
		echo "			<hostname>$(escape_xml "$name")</hostname>"
		echo "			<port>$(escape_xml "$port")</port>"
		echo "			<status>$(escape_xml "$apache_status")</status>"
		echo "			<instance></instance>"
		echo "			<path>$(escape_xml "$path")</path>"
		echo "		</item>"
		} >> "$xml_file"
	fi
done

# Custom addition - alexander.szele@umanitoba.ca
# Pull db server info from mongodb
# Inconsistent results if non-standard configurations are used.
if [ -e "/etc/mongod.conf" ]; then
	datadir=$(grep "^[^#][[:space:]]dbPath" /etc/mongod.conf 2>/dev/null | awk '{ print $2 }')
	if [ -n "$datadir" ]; then
		if [ "$debugging" -gt "0" ]; then
			echo "	mongod using /etc/mongod.conf"
		fi
		for i in $(grep "^[^#][[:space:]]dbPath" /etc/mongod.conf 2>/dev/null | awk '{ print $2 }'); do
			if [ -n "$rev_exists" ]; then
				name=$(echo $i | rev | cut -d/ -f1 | rev)
			else
				name=""
			fi
			size=$(ls -lk "$i" | awk '{ total += $5 }; END { print int(total/1024/1024) }')
			{
			echo "		<item>"
			echo "			<type>database</type>"
			echo "			<parent_name>MongoDB</parent_name>"
			echo "			<name>$(escape_xml "$name")</name>"
			echo "			<description></description>"
			echo "			<id_internal>$(escape_xml "$i")</id_internal>"
			echo "			<instance>MongoDB</instance>"
			echo "			<path>$(escape_xml "$i")</path>"
			echo "			<size>$(escape_xml "$size")</size>"
			echo "		</item>"
			} >> "$xml_file"
		done
	fi
fi

# Custom addition - alexander.szele@umanitoba.ca
# Pull website info from nginx
for i in $(find /etc/nginx/ -type f -name "*.conf" -print0 2>/dev/null | xargs -0 egrep '^([[:space:]])*server_name ' | awk '{ print $1 }' | cut -d':' -f1 | sort | uniq); do
	if [ -n "$i" ]; then
		if [ "$debugging" -gt "0" ]; then
			echo "	nginx using /etc/nginx"
		fi
		name=""
		if [ -n "$rev_exists" ]; then
			name=$(echo "$i" | rev | cut -d/ -f1 | rev)
			name=${name%.conf}
		fi
		hostname=$(egrep '^([[:space:]])*server_name ' $i | awk '{ print $2 }' | cut -d';' -f1)
		port=$(egrep '^([[:space:]])*listen ' $i | awk '{ print $2 }' | cut -d: -f2 | cut -d';' -f1)
		path=$(awk '/location \/ {/,/}/{ print $0 }' $i | grep root | awk '{ print $2 }' | cut -d';' -f1)
		if [ -z $path ]; then
		path=$(awk '/^([[:space:]])*root /' $i | awk '{ print $2 }' | cut -d';' -f1)
	fi
        {
		echo "		<item>"
		echo "			<type>website</type>"
		echo "			<parent_name>NGINX</parent_name>"
		echo "			<name>$(escape_xml "$name")</name>"
		echo "			<description></description>"
		echo "			<id_internal>$(escape_xml "$name")</id_internal>"
		echo "			<ip></ip>"
		echo "			<hostname>$(escape_xml "$hostname")</hostname>"
		echo "			<port>$(escape_xml "$port")</port>"
		echo "			<status>$(escape_xml "$apache_status")</status>"
		echo "			<instance></instance>"
		echo "			<path>$(escape_xml "$path")</path>"
		echo "		</item>"
		} >> "$xml_file"
	fi
done

echo "	</server_item>" >> "$xml_file"



##################################
# CERTIFICATES SECTION           #
##################################
if [ "$debugging" -gt "0" ]; then
	echo "Certificate Info"
fi
IFS="$NEWLINEIFS"
echo "	<certificate>" >> "$xml_file"
for dir in ${cert_dirs[@]}; do
	thesefiles=$(ls "$dir" 2>/dev/null)
	for file in $(echo "$thesefiles"); do
		name="$file"
		details=$(openssl x509 -text -noout -in "$file" 2>/dev/null)
		if [ -n "$details" ]; then
			serial=$(echo "$details" | grep "Serial" | cut -d: -f2-)
			if [ -z "$serial" ]; then
				serial=$(trim "$(echo "$details" | grep "Serial" -A1 | grep -v Serial)")
			else
				serial=$(trim "$(echo "$details" | grep "Serial" | cut -d: -f2-)")
			fi
			issuer=$(echo "$details" | grep "Issuer" | cut -d: -f2-)
			valid_from_raw=$(echo "$details" | grep "Not Before" | cut -d: -f2-)
			valid_to_raw=$(echo "$details" | grep "Not After" | cut -d: -f2-)
			algorithm=$(echo "$details" | grep "Signature Algorithm" | head -n1 | cut -d: -f2-)
			encryption=""
			version=$(echo "$details" | grep Version | cut -d: -f2)
			{
			echo "		<item>"
			echo "			<name>$(escape_xml "$name")</name>"
			echo "			<serial>$(escape_xml "$serial")</serial>"
			echo "			<issuer>$(escape_xml "$issuer")</issuer>"
			echo "			<valid_from_raw>$(escape_xml "$valid_from_raw")</valid_from_raw>"
			echo "			<valid_to_raw>$(escape_xml "$valid_to_raw")</valid_to_raw>"
			echo "			<algorithm>$(escape_xml "$algorithm")</algorithm>"
			echo "			<encryption>$(escape_xml "$encryption")</encryption>"
			echo "			<version>$(escape_xml "$version")</version>"
			echo "		</item>"
			} >> "$xml_file"
		fi
	done
done
echo "	</certificate>" >> "$xml_file"


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
# if [ -n "$(which route 2>/dev/null)" ] && [ -n "$(which ip 2>/dev/null)" ]; then
# 	#route_mask=$(cidr2mask `ip r | grep "default via" | cut -d" " -f1 | cut -d"\"" -f2`)
# 	route_next_hop=$(ip r | grep "default via" | cut -d" " -f3)
# 	route_metric=$(ip r | grep "default via" | cut -d" " -f10)
# 	{
# 	echo "		<item>"
# 	echo "			<destination>0.0.0.0</destination>"
# 	echo "			<mask></mask>"
# 	echo "			<metric>$(escape_xml "$route_metric")</metric>"
# 	echo "			<next_hop>$(escape_xml "$route_next_hop")</next_hop>"
# 	echo "		</item>"
# 	} >> "$xml_file"
# fi
echo "	</route>" >> "$xml_file"


########################################################
# NETSTAT LISTENING PORTS                              #
########################################################
if [ "$debugging" -gt "0" ]; then
	echo "Netstat Info"
fi
netstatdump=$(netstat -lntup 2>/dev/null | grep -v "(only servers)" | grep -v "Foreign Address")
echo "	<netstat>" >> "$xml_file"
for line in $netstatdump; do
	protocol=$(echo "$line" | awk '{print $1}')
	ip=$(echo "$line" | awk '{print $4}')
	ip=${ip%:*}
	if [  "$ip" = "" ]; then
		ip="0.0.0.0"
	fi
	port=$(echo "$line" | awk '{print $4}')
	port=${port##*:}
	program=$(echo "$line" | awk '{print $6}')
	if [ "$program" != "LISTEN" ]; then
		program=$(echo "$program" | cut -d\/ -f2)
	else
		program=$(echo "$line" | awk '{print $7}' | cut -d\/ -f2)
	fi
	{
	echo "		<item>"
	echo "			<protocol>$(escape_xml "$protocol")</protocol>"
	echo "			<ip>$(escape_xml "$ip")</ip>"
	echo "			<port>$(escape_xml "$port")</port>"
	echo "			<program>$(escape_xml "$program")</program>"
	echo "		</item>"
	} >> "$xml_file"
done
echo "	</netstat>" >> "$xml_file"


# End the XML because busybox is likely to choke on the below
if [ "$busybox" = "y" ]; then
	echo "</system>" >> "$xml_file"
fi


########################################################
# CUSTOM FILES                                         #
########################################################
if [ "$debugging" -gt "0" ]; then
	echo "Custom Files Info"
fi
if [ "$busybox" = "n" ]; then
	echo "	<file>" >> "$xml_file"
	for dir in ${files[@]}; do
		for file in $(find "$dir"  -maxdepth 1 -type f 2>/dev/null); do
			file_size=$(stat --printf="%s" "$file")
			file_directory=$(dirname "${file}")
			file_hash=$(sha1sum "$file" | cut -d" " -f1)
			file_last_changed=$(stat -c %y "$file" | cut -d. -f1)
			file_meta_last_changed=$(stat -c %z "$file" | cut -d. -f1)
			file_permissions=$(stat -c "%a" "$file")
			file_owner=$(ls -ld "$file" | awk '{print $3}')
			file_group=$(ls -ld "$file" | awk '{print $4}')
			inode=$(ls -li "$file" | awk '{print $1}')
			file_name=$(basename "$file")
			{
			echo "		<item>"
			echo "			<name>$(escape_xml "$file_name")</name>"
			echo "			<full_name>$(escape_xml "$file")</full_name>"
			echo "			<size>$(escape_xml "$file_size")</size>"
			echo "			<directory>$(escape_xml " $file_directory")</directory>"
			echo "			<hash>$(escape_xml "$file_hash")</hash>"
			echo "			<last_changed>$(escape_xml "$file_last_changed")</last_changed>"
			echo "			<meta_last_changed>$(escape_xml "$file_meta_last_changed")</meta_last_changed>"
			echo "			<permission>$(escape_xml "$file_permissions")</permission>"
			echo "			<owner>$(escape_xml "$file_owner")</owner>"
			echo "			<group>$(escape_xml "$file_group")</group>"
			echo "			<inode>$(escape_xml "$inode")</inode>"
			echo "		</item>"
			} >> "$xml_file"
		done
	done
	echo "	</file>" >> "$xml_file"
fi


########################################################
# EXECUTABLES                                         #
########################################################
if [ "$debugging" -gt "0" ]; then
	echo "Executable Files Info"
fi
if [ "$busybox" = "n" ]; then
	echo "	<executable>" >> "$xml_file"
	for dir in ${executables[@]}; do
		command="find \"$dir\" -type f | cut -d: -f1"
		if [ -n "$exclusions" ]; then
			command="$command | grep -Ev \"$exclusions\""
		fi
		for file in $(eval "$command"); do
			description=""
			description=$(file -b "$file" | grep executable)
			package=""

			if [ -n "$description" ]; then
				case $system_os_family in
					'Ubuntu' | 'Debian' | 'LinuxMint' | 'Raspbian' )
						package=$(dpkg -S "$file" 2>/dev/null | cut -d: -f1)
					;;
					'CentOS' | 'RedHat' | 'Fedora' | 'Suse' | 'Amazon' | 'Mariner' | 'AlmaLinux' )
						package=$(rpm -qf "$file" 2>/dev/null | grep -v "is not owned by any package")
					;;
				esac
			fi

			if [ -z "$package" ] && [ -n "$description" ]; then
				file_size=$(stat --printf="%s" "$file")
				file_directory=$(dirname "$file")
				file_hash=$(sha1sum "$file" | cut -d" " -f1)
				file_last_changed=$(stat -c %y "$file" | cut -d. -f1)
				file_meta_last_changed=$(stat -c %z "$file" | cut -d. -f1)
				file_permissions=$(stat -c "%a" "$file")
				file_owner=$(ls -ld "$file" | awk '{print $3}')
				file_group=$(ls -ld "$file" | awk '{print $4}')
				inode=$(ls -li "$file" | awk '{print $1}')

				file_name=$(basename "$file")
				{
				echo "		<item>"
				echo "			<name>$(escape_xml "$file_name")</name>"
				echo "			<full_name>$(escape_xml "$file")</full_name>"
				echo "			<size>$(escape_xml "$file_size")</size>"
				echo "			<directory>$(escape_xml "$file_directory")</directory>"
				echo "			<description>$(escape_xml "$description")</description>"
				echo "			<hash>$(escape_xml "$file_hash")</hash>"
				echo "			<last_changed>$(escape_xml "$file_last_changed")</last_changed>"
				echo "			<meta_last_changed>$(escape_xml "$file_meta_last_changed")</meta_last_changed>"
				echo "			<permission>$(escape_xml "$file_permissions")</permission>"
				echo "			<package>$(escape_xml "$package")</package>"
				echo "			<owner>$(escape_xml "$file_owner")</owner>"
				echo "			<group>$(escape_xml "$file_group")</group>"
				echo "			<inode>$(escape_xml "$inode")</inode>"
				echo "		</item>"
				} >> "$xml_file"
			fi
		done
	done
	echo "	</executable>" >> "$xml_file"
fi


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

	if [ "$display" = "y" ]; then
		url="$url/display"
		debugging=4
	fi

	sed -i -e 's/+/%2B/g' "$xml_file"
	sed -i -e 's/"/%22/g' "$xml_file"
	sed -i -e 's/&/%26/g' "$xml_file"

	if [ -n "$(which curl 2>/dev/null)" ]; then
		if [ "$debugging" -gt 1 ]; then
			echo "Submitting results to server using cURL"
			echo "URL: $url"
		fi
		if [ "$debugging" -gt 3 ]; then
			if [ "$ignore_invalid_ssl" = "y" ]; then
				curl -k -o add_system --data-binary "@$xml_file" "$url"
			else
				curl -o add_system --data-binary "@$xml_file" "$url"
			fi
			cat add_system
			rm add_system
		else
			if [ "$ignore_invalid_ssl" = "y" ]; then
				curl -k --data-binary "@$xml_file" "$url" >/dev/null 2>&1
			else
				curl --data-binary "@$xml_file" "$url" >/dev/null 2>&1
			fi
		fi
	else
		if [ -n "$(which wget 2>/dev/null)" ]; then
			if [ "$debugging" -gt 1 ]; then
				echo "Submitting results to server using wget"
				echo "URL: $url"
			fi
			if [ "$debugging" -gt 3 ]; then
				if [ "$ignore_invalid_ssl" = "y" ]; then
					wget --no-check-certificate -O add_system --post-file="$xml_file" "$url"
				else
					wget -O add_system --post-file="$xml_file" "$url"
				fi
				cat add_system
				rm add_system
			else
				if [ "$ignore_invalid_ssl" = "y" ]; then
					wget --no-check-certificate --delete-after --post-file="$xml_file" "$url" 2>/dev/null
				else
					wget --delete-after --post-file="$xml_file" "$url" 2>/dev/null
				fi
			fi
		fi
	fi
fi

sed -i -e 's/data=//g' "$xml_file"
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
