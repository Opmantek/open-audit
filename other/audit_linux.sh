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
# @version 1.4
# @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3

########################################################
# CREDITS                                              #
########################################################

# Timer Function Code was based on an article By Mitch Frazier
#
# http://www.linuxjournal.com/content/use-date-command-measure-elapsed-time
#
# Contributors to this script
# Open-AudIT forum users jpa, ihashacks, a.arenas, ginorh, RedDevils and others.
# Open-AudIT users 
#       Brandon Pierce brandon@ihashacks.com 
#       Fábio Chicout fabio.chicout@ufpe.br

#set -x
########################################################
# DEFINE SCRIPT PARAMETERS                             #
########################################################

# Below are the default settings

# default to localhost
strComputer='.'

# submit the audit to the OAv2 server
submit_online='y'

# check availability of required commands and exit.
check_commands="n"

# create an XML text file of the result in the current directory
create_file="n"

# the address of the OAv2 server "submit" page
url="http://localhost/open-audit/index.php/system/add_system"

# submit via a proxy (using the settings of the user running the script)
use_proxy="n"

# the username (if not using the user running the script)
strUser=''

# the password (if not using the user running the script)
strPass=''

# optional - assign any PCs audited to this Org - take the OrgId from OAv2 interface
org_id=''

# optional - query this Active Directory attribute to determine the users work unit
# if attribute #1 produces nothing, then try attribute #2
windows_user_work_1="physicalDeliveryOfficeName"
windows_user_work_2="company"

# do not attempt to query mount points
skip_mount_point='n'

# do not enumerate printers
skip_printer='n'

# audit installed software
skip_software='n'

# retrieve all DNS names
skip_dns='n'

# if set then delete the audit script upon completion
# useful when starting the script on a remote machine and leaving no trace
self_delete='n'

# 0 = no debug
# 1 = basic debug
# 2 = verbose debug
debugging=2

# Display help
help="n"

# In normal use, DO NOT SET THIS.
# This value is passed in when running the audit_domain script.
# Only set this value if your audit host is on a different domain than audit targets and you are not using audit_domain.vbs - IE, you are running "cscript audit_windows.vbs COMPUTER" where COMPUTER is on a seperate domain that the PC you are running the command on. This would then apply to ALL systems audited like this. This would be the exception rather than the rule. Do not do this unless you know what you are doing :-)
ldap=''

# set this greater than 0 if you wish to insert systems from AD that have only been seen in the last XX days
ldap_seen_days='0'

# set this greater than 2000-01-01 if you wish to insert systems from AD that have only been seen since XX date
ldap_seen_date='2012-06-30'

# attempt to ping a target computer before audit?
ping_target='y'

# set by the Discovery function - do not normally set this manually
system_id=""

PATH="$PATH:/sbin:/usr/sbin"
export PATH


########################################################
# DEFINE COMAMND LOCATIONS                             #
########################################################

	OA_AWK=`which awk 2>/dev/null`
	OA_BC=`which bc 2>/dev/null`
	OA_CAT=`which cat 2>/dev/null`
	OA_CDRDAO=`which cdrdao 2>/dev/null`
	OA_CHKCONFIG=`which chkconfig 2>/dev/null`
	OA_CUT=`which cut 2>/dev/null`
	OA_DATE=`which date 2>/dev/null`
	OA_DF=`which df 2>/dev/null`
	OA_DMESG=`which dmesg 2>/dev/null`
	OA_DMIDECODE=`which dmidecode 2>/dev/null`
	if [ "$OA_DMIDECODE" = "" ] || [ "$OA_DMIDECODE" = " " ] || [ -z "$OA_DMIDECODE" ]; then
		if [ -f "/usr/local/sbin/dmidecode" ]; then
			OA_DMIDECODE="/usr/local/sbin/dmidecode"
		fi
	fi
	OA_DPKG=`which dpkg 2>/dev/null`
	OA_DPKGQUERY=`which dpkg-query 2>/dev/null`
	OA_ETHTOOL=`which ethtool 2>/dev/null`
	OA_EXPR=`which expr 2>/dev/null`
	OA_FDISK=`which fdisk 2>/dev/null`
	OA_FIND=`which find 2>/dev/null`
	OA_GREP=`which grep 2>/dev/null`
	OA_HEAD=`which head 2>/dev/null`
	OA_HOSTNAME=`which hostname 2>/dev/null`
	OA_IFCONFIG=`which ifconfig 2>/dev/null`
	OA_IP=`which ip 2>/dev/null`
	OA_IWLIST=`which iwlist 2>/dev/null`
	OA_LS=`which ls --skip-alias 2>/dev/null`
	OA_LSB_RELEASE=`which lsb_release 2>/dev/null`
	OA_LSCPU=`which lscpu 2>/dev/null`
	OA_LSHAL=`which lshal 2>/dev/null`
	OA_LSHW=`which lshw 2>/dev/null`
	OA_LSPCI=`which lspci 2>/dev/null`
	OA_LVM=`which lvm 2>/dev/null`
	OA_MDADM=`which mdadm 2>/dev/null`
	OA_PARTPROBE=`which partprobe 2>/dev/null`
	OA_PING=`which ping 2>/dev/null`
	OA_PS=`which ps 2>/dev/null`
	OA_REV=`which rev 2>/dev/null`
	OA_RM=`which rm --skip-alias 2>/dev/null`
	OA_ROUTE=`which route 2>/dev/null`
	OA_RPM=`which rpm 2>/dev/null`
	OA_SED=`which sed 2>/dev/null`
	OA_SERVICE=`which service 2>/dev/null`
	OA_SORT=`which sort 2>/dev/null`
	OA_SWAPON=`which swapon 2>/dev/null`
	OA_TAIL=`which tail 2>/dev/null`
	OA_TEST=`which test 2>/dev/null`
	OA_UNAME=`which uname 2>/dev/null`
	OA_UNIQ=`which uniq 2>/dev/null`
	OA_WC=`which wc 2>/dev/null`
	OA_WGET=`which wget 2>/dev/null`
	OA_WHOAMI=`which whoami 2>/dev/null`

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
	echo $($OA_DATE '+%s')
else
	local  stime=$1
	etime=$($OA_DATE '+%s')
	if [ -z "$stime" ]; then stime=$etime; fi
	dt=$((etime - stime))
	echo $dt
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
	result=$(echo "$1" | $OA_AWK '{print tolower($0)}')
	echo $result
}

ucase ()
# Returns the upper case version of the argument.
#
# usage :
#
#   upper_version=$(ucase "$var")
#
{
	result=$(echo "$1" | $OA_AWK '{print toupper($0)}')
	echo $result
}

pcase ()
# Returns the propper case version of the argument.
#
# usage :
#
#   proper_version=$(pcase "$var")
#
{
	result=`lcase "$1" |  $OA_AWK '{ for ( i=1; i <= NF; i++) {   sub(".", substr(toupper($i),1,1) , $i) } print }'`
	echo $result
}

trim ()
# Remove the leading/trailing spaces from the argument.
#
# usage :
#
#   trimmed_version=$(trim "$var")
#
{
	result=`echo "$1" | $OA_SED 's/^ *//g' | $OA_SED 's/ *$//g'`
	echo $result
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
	result=`echo "$1"`
	if echo "$result" | grep -Eq -e '[&<>"]' -e "'"; then
		result="<![CDATA[$result]]>"
	fi

	# Trim leading/trailing spaces
	result=`trim "$result"`
	echo $result
}

function cidr2mask() {
  local i mask=""
  local full_octets=$(($1/8))
  local partial_octet=$(($1%8))

  for ((i=0;i<4;i+=1)); do
    if [ $i -lt $full_octets ]; then
      mask+=255
    elif [ $i -eq $full_octets ]; then
      mask+=$((256 - 2**(8-$partial_octet)))
    else
      mask+=0
    fi  
    test $i -lt 3 && mask+=.
  done

  echo $mask
}

########################################################
# PROCESS COMMAND-LINE PARAMETERS                      #
########################################################

# Below we take any command line arguements
# to override the variables above, simply include them on the command line like submit_online=n
# NOTE - argurments are case sensitive

for arg in "$@"; do
	parameter=$(echo "$arg" | $OA_CUT -d= -f1)
	parameter=$(lcase "$parameter")
	parameter=$(trim "$parameter")

	parameter_value=$(echo "$arg" | $OA_CUT -d= -f2)
	parameter_value=$(trim "$parameter_value")

	case "$parameter" in
		"check_commands" )
			check_commands="$parameter_value" ;;
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
		"ldap" )
			ldap="$parameter_value" ;;
		"org_id" )
			org_id="$parameter_value" ;;
		"ping_target" )
			ping_target="$parameter_value" ;;
		"self_delete" )
			self_delete="$parameter_value" ;;
		"skip_printer" )
			skip_printer="$parameter_value" ;;
		"skip_software" )
			skip_software="$parameter_value" ;;
		"skip_dns" )
			skip_dns="$parameter_value" ;;
		"skip_mount_point" )
			skip_mount_point="$parameter_value" ;;
		"strcomputer" )
			strComputer="$parameter_value" ;;
		"struser" )
			strUser="$parameter_value" ;;
		"strpass" )
			strPass="$parameter_value" ;;
		"submit_online" )
			submit_online="$parameter_value" ;;
		"system_id" )
			system_id="$parameter_value" ;;
		"url" )
			url="$parameter_value" ;;
		"use_proxy" )
			use_proxy="$parameter_value" ;;
		"windows_user_work_1" )
			windows_user_work_1="$parameter_value" ;;
		"windows_user_work_2" )
			windows_user_work_2="$parameter_value" ;;
		"$parameter_value" )
			strComputer="$parameter_value" ;;
	esac
done

########################################################
# CHECK COMMANDS                                       #
########################################################

if [ "$check_commands" = "y" ]; then
	echo "Checking commands on $strComputer"
	echo "----------------------" 
	echo "awk                  : $OA_AWK"
	echo "bc                   : $OA_BC"
	echo "cat                  : $OA_CAT"
	echo "cdrdao               : $OA_CDRDAO"
	echo "cut                  : $OA_CUT"
	echo "date                 : $OA_DATE"
	echo "df                   : $OA_DF"
	echo "dmesg                : $OA_DMESG"
	echo "dmidecode            : $OA_DMIDECODE"
	echo "dpkg                 : $OA_DPKG"
	echo "echo                 : echo"
	echo "ethtool              : $OA_ETHTOOL"
	echo "expr                 : $OA_EXPR"
	echo "find                 : $OA_FIND"
	echo "fdisk                : $OA_FDISK"
	echo "grep                 : $OA_GREP"
	echo "head                 : $OA_HEAD"
	echo "hostname             : $OA_HOSTNAME"
	echo "ifconfig             : $OA_IFCONFIG"
	echo "ip                   : $OA_IP"
	echo "iwlist               : $OA_IWLIST"
	echo "lsb_release          : $OA_LSB_RELEASE"
	echo "lshal                : $OA_LSHAL"
	echo "lshw                 : $OA_LSHW"
	echo "lspci                : $OA_LSPCI"
	echo "lvm                  : $OA_LVM"
	echo "mdadm                : $OA_MDADM"
	echo "partprobe            : $OA_PARTPROBE"
	echo "ping                 : $OA_PING"
	echo "ps                   : $OA_PS"
	echo "rev                  : $OA_REV"
	echo "rm                   : $OA_RM"
	echo "sed                  : $OA_SED"
	echo "sort                 : $OA_SORT"
	echo "swapon               : $OA_SWAPON"
	echo "tail                 : $OA_TAIL"
	echo "test                 : $OA_TEST"
	echo "uname                : $OA_UNAME"
	echo "wc                   : $OA_WC"
	echo "wget                 : $OA_WGET"
	echo "whoami               : $OA_WHOAMI"

	exit
fi

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
	server=`echo "$url" | cut -d"/" -f3 | cut -d: -f1`
	test=`ping $server -n -c 3 | grep "100% packet loss"`
	if [ "$test" != "" ]; then
		if [ $debugging > 0 ]; then
			echo "Server $server is not responding to a ping. Cannot submit audit result. Exiting."
		fi
		exit
	fi
fi

########################################################
# CREATE THE AUDIT FILE                                #
########################################################


start_time=$(timer)

if [ $debugging -gt 0 ]; then
	echo "Starting audit - $strComputer"
fi

pc_alive=0
if [ "$ping_target" = "y" ]; then
	if [ "$strComputer" = "." ]; then
		pc_alive=1
	else
		ping_result=`$OA_PING -c1 $strComputer 2>/dev/null | $OA_GREP "time"`
		if [ "$ping_result" != "" ]; then
			pc_alive=1
		fi
	fi
fi

if [ $debugging -gt 0 ]; then
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
local_hostname=`hostname -s 2>/dev/null`

if [ "$local_hostname" = "" ]; then
	local_hostname=`hostname 2>/dev/null`
fi

if [ "$strComputer" = "." ] || [ "$strComputer" = "127.0.0.1" ] || [ $(lcase $strComputer) = $(lcase $local_hostname) ]; then
	audit_location="local"
else
	audit_location="remote"
fi

# Set the TimeSamp
system_timestamp=`$OA_DATE +'%F %T'`

# Get the script name
sScriptName=`echo $0 | $OA_REV | $OA_CUT -d/ -f1 | rev`

# Set the Process ID
nPID="$BASHPID"

if [ $debugging -gt 0 ]; then 
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
system_uuid=`$OA_DMIDECODE -s system-uuid 2>/dev/null`
if [ "$system_uuid" = "" ]; then
	if [ "$OA_LSHAL" \> "" ]; then
		system_uuid=$(lshal | grep "system.hardware.uuid" | cut -d\' -f2)
	fi
fi
if [ "$system_uuid" = "" ]; then
	system_uuid=`cat /sys/class/dmi/id/product_uuid 2>/dev/null`
fi

# Get the hostname & DNS domain
system_hostname=""
system_hostname=`hostname -s 2>/dev/null`

if [ "$system_hostname" = "" ]; then
	system_hostname=`hostname 2>/dev/null`
	system_domain=""
else
	system_domain=`hostname -d 2>/dev/null`
fi 

# Get System Family (Distro Name) and the OS Name
# Debian and Ubuntu will match on the below
system_description=""
system_type="computer"
system_os_group="Linux"
system_os_family=`lsb_release -is 2>/dev/null`
system_os_name=`lsb_release -ds 2>/dev/null`
system_os_version=`lsb_release -rs 2>/dev/null`

if [ -z "$system_os_version" ]; then
	for system_release_file in /etc/*[_-]version /etc/*[_-]release; do
		[ -f "$system_release_file" ] || continue;
		system_os_name=`cat $system_release_file`

		# Suse Based
		if echo "$system_os_name" | grep -Fqi "Suse" ; then
			system_os_family="Suse"
		fi

		# RedHat based
		if [ "$system_release_file" = "centos-release" -o "$system_release_file" = "redhat-release" ]; then
			system_os_family="RedHat";
			for i in `cat "$system_release_file" `; do 
				if echo $i | grep -Eq '^[0-9.]+$'; then 
					system_os_version="$i"; 
					break; 
				fi; 
			done
			break;
		fi

	done
fi


# Set the icon as the lower case version of the System Family.
system_os_icon=`lcase $system_os_family`



# Get the System Serial Number
system_serial=""
system_serial=`$OA_DMIDECODE -s system-serial-number 2>/dev/null`
if [ "$system_serial" = "" ]; then
	if [ "$OA_LSHAL" \> "" ]; then
		system_serial=$(lshal | grep "system.hardware.serial" | cut -d\' -f2)
	fi
fi
if [ "$system_serial" = "" ]; then
	system_serial=`cat /sys/class/dmi/id/product_serial 2>/dev/null`
fi


# Get the System Model
system_model=""
system_model=`$OA_DMIDECODE -s system-product-name 2>/dev/null`
if [ "$system_model" = "" ]; then
	if [ "$OA_LSHAL" \> "" ]; then
		system_model=$(lshal | grep "system.hardware.product" | cut -d\' -f2)
	fi
fi
if [ "$system_model" = "" ]; then
	system_model=`cat /sys/devices/virtual/dmi/id/product_name`
fi


# Get the System Manufacturer
system_manufacturer=""
system_manufacturer=`$OA_DMIDECODE -s system-manufacturer 2>/dev/null`
if [ "$system_manufacturer" = "" ]; then
	if [ "$OA_LSHAL" \> "" ]; then
		system_manufacturer=$(lshal | grep "system.hardware.vendor" | cut -d\' -f2)
	fi
fi
if [ "$system_manufacturer" = "" ]; then
	system_manufacturer=`cat /sys/devices/virtual/dmi/id/sys_vendor`
fi


# Get the System Uptime
system_uptime=`$OA_CAT /proc/uptime | $OA_CUT -d. -f1`


# Get the System Form factor
system_form_factor=""
if [ "$system_model" = "Bochs" -o "$system_model" = "KVM" -o "$system_model" = "Virtual Machine" -o "$system_model" = "VMware Virtual Platform" ]; then
	system_form_factor="Virtual"
else
	system_form_factor=`$OA_DMIDECODE -s chassis-type 2>/dev/null`
	if [ "$system_form_factor" = "<OUT OF SPEC>" ]; then
		system_form_factor="Unknown"
	fi
	system_form_factor=`pcase $system_form_factor`
fi
if [ "$system_form_factor" = "" ]; then
	if [ "$OA_LSHAL" \> "" ]; then
		system_form_factor=$(lshal | grep "system.chassis.type" | cut -d\' -f2)
	fi
fi


# Get OS bits
#system_pc_os_bit=`$OA_UNAME -i | $OA_GREP x86_64 | $OA_CUT -d_ -f2`
system_pc_os_bit=`$OA_UNAME -i | $OA_GREP 64 | $OA_CUT -d_ -f2`
if [ -z $system_pc_os_bit ]; then
	system_pc_os_bit=32
fi


# Get the System Memory
system_pc_memory=$(trim `$OA_CAT /proc/meminfo | $OA_GREP MemTotal | $OA_CUT -d: -f2 | $OA_CUT -dk -f1`)

# Get the Number of Physical Processors
#	Each Physical Processor have one or more Processor Cores.
#	Each Processor Core have one or more Threads
#	Each thread appears as one active processor to the OS

# EX:	Two Dual Core Processors with Hyper-Threading enabled will show :
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

system_pc_total_threads=`$OA_CAT /proc/cpuinfo | $OA_GREP "processor" | $OA_WC -l`

system_pc_cores_x_processor=`$OA_CAT /proc/cpuinfo | $OA_GREP cores | $OA_HEAD -n1 | $OA_CUT -d: -f2`
system_pc_cores_x_processor=$(trim "$system_pc_cores_x_processor")

if [ "$system_pc_cores_x_processor" = "" ]; then
	if [ "$OA_LSHAL" \> "" ]; then
		system_pc_cores_x_processor=$(lshal | grep -c "processor.number")
	fi
fi

# RedHat 6.5 doesn't work with the above, so....
if [ "$system_pc_cores_x_processor" = "" ]; then
	system_pc_cores_x_processor=1
fi

# The number of siblings tell us the number of Threads x Physical Processor
system_pc_threads_x_processor=`$OA_CAT /proc/cpuinfo | $OA_GREP siblings | $OA_HEAD -n1 | $OA_CUT -d: -f2`
system_pc_threads_x_processor=$(trim "$system_pc_threads_x_processor")

if [ "$system_pc_threads_x_processor" = "" ]; then
	system_pc_threads_x_processor=1
fi


system_pc_physical_processors=`$OA_EXPR $system_pc_total_threads / $system_pc_threads_x_processor 2>/dev/null`

# Guess the OS Instalation Date
# There is no way to know for sure the install date. /etc/distro-release should give a clue, but it is not really accurate
#

system_pc_date_os_installation=`$OA_LS -lac --time-style="long-iso" /etc/$system_release_file | $OA_CUT -d" " -f6`


#'''''''''''''''''''''''''''''''''
#' Write to the audit file       '
#'''''''''''''''''''''''''''''''''

xml_file="$system_hostname"-`$OA_DATE +%Y%m%d%H%M%S`.xml

echo "form_systemXML=<?xml version="\"1.0\"" encoding="\"UTF-8\""?>" > $xml_file
echo "<system>" >> $xml_file
echo "	<sys>" >> $xml_file
echo "		<timestamp>"$(escape_xml "$system_timestamp")"</timestamp>" >> $xml_file
echo "		<uuid>"$(escape_xml "$system_uuid")"</uuid>" >> $xml_file
echo "		<hostname>"$(escape_xml "$system_hostname")"</hostname>" >> $xml_file
echo "		<domain>"$(escape_xml "$system_domain")"</domain>" >> $xml_file
echo "		<description></description>" >> $xml_file
echo "		<type>"$(escape_xml "$system_type")"</type>" >> $xml_file
echo "		<os_icon>"$(escape_xml "$system_os_icon")"</os_icon>" >> $xml_file
echo "		<os_group>"$(escape_xml "$system_os_group")"</os_group>" >> $xml_file
echo "		<os_family>"$(escape_xml "$system_os_family")"</os_family>" >> $xml_file
echo "		<os_name>"$(escape_xml "$system_os_name")"</os_name>" >> $xml_file
echo "		<os_version>"$(escape_xml "$system_os_version")"</os_version>" >> $xml_file
echo "		<serial>"$(escape_xml "$system_serial")"</serial>" >> $xml_file
echo "		<model>"$(escape_xml "$system_model")"</model>" >> $xml_file
echo "		<manufacturer>"$(escape_xml "$system_manufacturer")"</manufacturer>" >> $xml_file
echo "		<uptime>"$(escape_xml "$system_uptime")"</uptime>" >> $xml_file
echo "		<form_factor>"$(escape_xml "$system_form_factor")"</form_factor>" >> $xml_file
echo "		<pc_os_bit>"$(escape_xml "$system_pc_os_bit")"</pc_os_bit>" >> $xml_file
echo "		<pc_memory>"$(escape_xml "$system_pc_memory")"</pc_memory>" >> $xml_file
echo "		<pc_num_processor>"$(escape_xml "$system_pc_total_threads")"</pc_num_processor>" >> $xml_file
echo "		<pc_date_os_installation>"$(escape_xml "$system_pc_date_os_installation")"</pc_date_os_installation>" >> $xml_file
echo "		<man_org_id>"$(escape_xml "$org_id")"</man_org_id>" >> $xml_file
echo "		<system_id>"$(escape_xml "$system_id")"</system_id>" >> $xml_file
echo "	</sys>" >> $xml_file


##################################
# BIOS SECTION                   #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "BIOS Info"
fi

# Get the BIOS Manufacturer
bios_manufacturer=""
bios_manufacturer=`$OA_DMIDECODE -s bios-vendor 2>/dev/null`
if [ "$bios_manufacturer" = "" ]; then
	if [ "$OA_LSHAL" \> "" ]; then
		bios_manufacturer=$(lshal | grep "smbios.bios.vendor" | cut -d\' -f2)
		if [ "$bios_manufacturer" = "" ]; then
			bios_manufacturer=$(lshal | grep "system.firmware.vendor" | cut -d\' -f2)
		fi
	fi
	if [ "$bios_manufacturer" = "" ]; then
		bios_manufacturer=`cat /sys/class/dmi/id/bios_vendor`
	fi
fi

# Get the BIOS Firmware Revision
bios_firm_rev=""
bios_firm_rev=`$OA_DMIDECODE 2>/dev/null | $OA_GREP "Firmware Revision" | $OA_CUT -d: -f2`
bios_firm_rev=$(trim "$bios_firm_rev")
if [ "$bios_firm_rev" = "" ]; then
	if [ "$OA_LSHAL" \> "" ]; then
		bios_firm_rev=$(lshal | grep "smbios.bios.version" | cut -d\' -f2)
		if [ "$bios_firm_rev" = "" ]; then
			bios_firm_rev=$(lshal | grep "system.firmware.version" | cut -d\' -f2)
		fi
		if [ "$bios_firm_rev" = "" ]; then
			bios_firm_rev=`cat /sys/class/dmi/id/bios_version`
		fi
	fi
fi

# Make the BIOS Description using the manufacturer - Firmware Rev
if [ "$bios_firm_rev" != "" ]; then
	bios_description=$(echo $bios_manufacturer | $OA_CUT -d" " -f1)" BIOS - Firmware Rev. $bios_firm_rev"
else
	bios_description=$(echo $bios_manufacturer | $OA_CUT -d" " -f1)" BIOS"
fi

# Get the BIOS Serial = System Serial
bios_serial="$system_serial"

# Get the SMBIOS Version
bios_smversion=""
bios_smversion=`$OA_DMIDECODE 2>/dev/null | $OA_GREP -i SMBIOS | $OA_CUT -d' ' -f2`
if [ "$bios_smversion" = "" ]; then
	if [ "$OA_LSHAL" \> "" ]; then
		bios_smversion=$(lshal | grep "smbios.bios.version" | cut -d\' -f2)
		if [ "$bios_smversion" = "" ]; then
			bios_smversion=$(lshal | grep "system.firmware.version" | cut -d\' -f2)
		fi
	fi
fi

# Get the BIOS Version
bios_version_p1=`$OA_DMIDECODE -s bios-version 2>/dev/null`
bios_version_p2=`$OA_DMIDECODE 2>/dev/null | $OA_GREP "BIOS Revision" | $OA_CUT -d: -f2`
bios_version_p2=$(trim "$bios_version_p2")
bios_version_p3=`$OA_DMIDECODE -s bios-release-date 2>/dev/null`

if [ "$bios_version_p1" != "" ]; then
	if [ "$bios_version_p2" != "" ]; then
		bios_version="V.$bios_version_p1 Rev.$bios_version_p2 - $bios_version_p3"
	else
		bios_version="V.$bios_version_p1 - $bios_version_p3"
	fi
fi

if [ "$bios_version" = "" ]; then
	if [ "$OA_LSHAL" \> "" ]; then
		bios_version=$(lshal | grep "smbios.bios.version" | cut -d\' -f2)
		if [ "$bios_version" = "" ]; then
			bios_version=$(lshal | grep "system.firmware.version" | cut -d\' -f2)
		fi
	fi
fi

#'''''''''''''''''''''''''''''''''
#' Write to the audit file       '

#'''''''''''''''''''''''''''''''''

echo "	<bios>" >> $xml_file
echo "		<bios_description>"$(escape_xml "$bios_description")"</bios_description>" >> $xml_file
echo "		<bios_manufacturer>"$(escape_xml "$bios_manufacturer")"</bios_manufacturer>" >> $xml_file
echo "		<bios_serial>"$(escape_xml "$bios_serial")"</bios_serial>" >> $xml_file
echo "		<bios_smversion>"$(escape_xml "$bios_smversion")"</bios_smversion>" >> $xml_file
echo "		<bios_version>"$(escape_xml "$bios_version")"</bios_version>" >> $xml_file
echo "	</bios>" >> $xml_file


##################################
# PROCESSOR SECTION              #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "Processor Info"
fi

# Get processor socket type
processor_socket=`$OA_DMIDECODE -t processor 2>/dev/null | $OA_GREP Upgrade | $OA_HEAD -n1 | $OA_CUT -d: -f2 2>/dev/null`

# Get processor description
processor_description=`$OA_CAT /proc/cpuinfo | $OA_GREP "model name" | $OA_HEAD -n1 | $OA_CUT -d: -f2`

# Get processor speed
processor_speed=`$OA_CAT /proc/cpuinfo | $OA_GREP "cpu MHz" | $OA_HEAD -n1 | $OA_CUT -d: -f2 | $OA_AWK '{printf("%d\n",$1 + 0.5)}'`

# Get processor manufacturer
processor_manufacturer=`$OA_CAT /proc/cpuinfo | $OA_GREP vendor_id | $OA_HEAD -n1 | $OA_CUT -d: -f2`

# Get processor power management support
processor_power_management_supported=`$OA_DMIDECODE -t processor 2>/dev/null | $OA_GREP Thermal 2>/dev/null`
if [ "$processor_power_management_supported" = "" ]; then
	if [ "$OA_LSHAL" \> "" ]; then
		processor_power_management_supported=$(lshal | grep -m 1 "processor.can_throttle" | cut -d= -f2 | cut -d" " -f2)
	fi
fi


if [ "$processor_power_management_supported" != "" ]; then
	processor_power_management_supported="True"
else
	processor_power_management_supported="False"
fi

#'''''''''''''''''''''''''''''''''
#' Write to the audit file       '

#'''''''''''''''''''''''''''''''''

let total_cores=$system_pc_cores_x_processor*$system_pc_physical_processors
let total_logical_processors=$system_pc_threads_x_processor*$system_pc_physical_processors

echo "	<processor>" >> $xml_file
echo "		<processor_count>"$(escape_xml "$system_pc_physical_processors")"</processor_count>" >> $xml_file
echo "		<processor_cores>"$(escape_xml "$total_cores")"</processor_cores>" >> $xml_file
echo "		<processor_logical>"$(escape_xml "$total_logical_processors")"</processor_logical>" >> $xml_file
echo "		<processor_socket>"$(escape_xml "$processor_socket")"</processor_socket>" >> $xml_file
echo "		<processor_description>"$(escape_xml "$processor_description")"</processor_description>" >> $xml_file
echo "		<processor_speed>"$(escape_xml "$processor_speed")"</processor_speed>" >> $xml_file
echo "		<processor_manufacturer>"$(escape_xml "$processor_manufacturer")"</processor_manufacturer>" >> $xml_file
echo "		<processor_power_management_supported>"$(escape_xml "$processor_power_management_supported")"</processor_power_management_supported>" >> $xml_file
echo "	</processor>" >> $xml_file


##################################
# MEMORY SECTION                 #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "Memory Info"
fi

memory_slots="0"
memory_slots=`$OA_DMIDECODE -t 17 2>/dev/null | $OA_AWK '/DMI type 17/{print $2}' | $OA_WC -l`

if [ "$memory_slots" != "0" ]; then
	#'''''''''''''''''''''''''''''''''
	#' Write to the audit file       '
	#'''''''''''''''''''''''''''''''''

	echo "	<memory>">> $xml_file

	for memory_handle in $($OA_DMIDECODE -t 17 2>/dev/null | $OA_AWK '/DMI type 17/{print $2}'); do

			# memory_detail and memory_type are switched here to match the Windows results
			bank_info=$($OA_DMIDECODE -t 17 2>/dev/null | $OA_SED -n '/^Handle '"$memory_handle"'/,/^$/p')

			memory_bank=$(echo "$bank_info" | $OA_AWK '/^[^B]+Locator:/{for (u=2; u<=NF; u++){printf("%s ", $u)}printf("\n")}' | $OA_AWK '{gsub(" ","");print}')
			
			memory_detail=$(echo "$bank_info" |\
				$OA_AWK '/Type:/{for (u=2; u<=NF; u++){printf("%s ", $u)}printf("\n")}' |\
				$OA_AWK '{gsub(" ","");print}')

			if [ "$memory_detail" = "<OUT OF SPEC>" ]; then
				system_form_factor="Unknown"
			fi
			
			memory_form_factor=$(echo "$bank_info" |\
				$OA_AWK '/Form Factor/{for (u=3; u<=NF; u++){printf("%s ", $u)}printf("\n")}' |\
				$OA_CUT -d" " -f1)
			
			memory_type=$(echo "$bank_info" |\
				$OA_AWK '/Type Detail:/{for (u=3; u<=NF; u++){printf("%s ", $u)}printf("\n")}' |\
				$OA_CUT -d" " -f1)
			
			memory_capacity=$(echo "$bank_info" |\
				$OA_AWK '/Size:/{print $2}' |\
				$OA_SED 's/[^0-9]//g')
			
			if [ $(echo "$bank_info" |\
				$OA_AWK '/Size:/{print $3}') = "kB" ];then
					memory_capacity=`$OA_EXPR $memory_capacity / 1024`
			fi
			
			memory_speed=$(echo "$bank_info" |\
				$OA_AWK '/Speed:/{for (u=2; u<=NF; u++){printf("%s ", $u)}printf("\n")}' |\
				$OA_SED 's/[[:space:]]MHz.*//g')
			
			memory_tag=$(echo "$bank_info" |\
				$OA_AWK '/Bank L.*:/{for (u=3; u<=NF; u++){printf("%s ", $u)}printf("\n")}')
			
			memory_serial=$(echo "$bank_info" |\
					$OA_AWK '/Serial Number:/{for (u=3; u<=NF; u++){printf("%s ", $u)}printf("\n")}' |\
					$OA_CUT -d" " -f1)
			
			if  [ "$memory_serial" = "Not" ] || [ "$memory_serial" = "Not " ] || [ "$memory_serial" = "Not Specified" ]; then
				memory_serial=""
			fi
			
			# Ignore empty slots
			if [ "$memory_capacity" != "" ]; then
				echo "		<slot>">> $xml_file
				echo "			<bank>"$(escape_xml "$memory_bank")"</bank>">> $xml_file
				echo "			<type>"$(escape_xml "$memory_type")"</type>">> $xml_file
				echo "			<form_factor>"$(escape_xml "$memory_form_factor")"</form_factor>">> $xml_file
				echo "			<detail>"$(escape_xml "$memory_detail")"</detail>">> $xml_file
				echo "			<capacity>"$(escape_xml "$memory_capacity")"</capacity>">> $xml_file
				echo "			<speed>"$(escape_xml "$memory_speed")"</speed>">> $xml_file
				echo "			<tag>"$(escape_xml "$memory_tag")"</tag>">> $xml_file
				echo "			<serial>"$(escape_xml "$memory_serial")"</serial>">> $xml_file
				echo "		</slot>">> $xml_file
			fi
	done

	echo "	</memory>">> $xml_file
fi


##################################
# MOTHERBOARD SECTION            #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "Motherboard Info"
fi

mobo_manufacturer=$($OA_DMIDECODE -s baseboard-manufacturer 2> /dev/null)
mobo_model=$($OA_DMIDECODE -s baseboard-product-name 2> /dev/null)
mobo_version=$($OA_DMIDECODE -s baseboard-version 2> /dev/null | $OA_GREP -v Not)
mobo_serial=$($OA_DMIDECODE -s baseboard-serial-number 2> /dev/null)

if [ "$mobo_version" != "" ]; then
	# Report both Model and Version
	mobo_model="$mobo_model - $mobo_version"
fi

#'''''''''''''''''''''''''''''''''
#' Write to the audit file       '

#'''''''''''''''''''''''''''''''''

if [ "$mobo_manufacturer" != "" ] || [ "$mobo_model" != "" ]; then
	echo "	<motherboard>">> $xml_file
	echo "		<manufacturer>"$(escape_xml "$mobo_manufacturer")"</manufacturer>" >> $xml_file
	echo "		<model>"$(escape_xml "$mobo_model")"</model>" >> $xml_file
	echo "		<serial>"$(escape_xml "$mobo_serial")"</serial>" >> $xml_file
	echo "		<processor_slots>"$(escape_xml "$system_pc_physical_processors")"</processor_slots>" >> $xml_file
	echo "		<processor_type>"$(escape_xml "$processor_socket")"</processor_type>" >> $xml_file
	echo "		<memory_slots>"$(escape_xml "$memory_slots")"</memory_slots>" >> $xml_file
	echo "	</motherboard>" >> $xml_file
fi


##################################
# OPTICAL DRIVES SECTION         #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "Optical Drives Info"
fi
optical_num_devices=`$OA_CDRDAO scanbus 2>&1 | $OA_GREP '/dev' | $OA_WC -l`

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
	
	echo "	<optical_drives>" >> $xml_file

	IFS=$'\n'; for optical_device in $($OA_CDRDAO scanbus 2>&1 | $OA_GREP '/dev'); do
		optical_drive_vendor=$(ucase $(trim `echo $optical_device | $OA_CUT -d: -f2 | $OA_CUT -d, -f1`))
		optical_drive_model=$(trim `echo $optical_device | $OA_CUT -d: -f2 | $OA_CUT -d, -f2`)
		optical_drive_release=$(trim `echo $optical_device | $OA_CUT -d: -f2 | $OA_CUT -d, -f3`)
                if [ "$optical_drive_release" != "" ]; then
                  optical_drive_release="Rel.$optical_drive_release"
                fi
		optical_device_ID=$(trim `echo $optical_device | $OA_CUT -d: -f1`)
		optical_caption="$optical_drive_vendor $optical_drive_model"
		echo "		<optical_drive>">> $xml_file
		echo "			<optical_drive_caption>"$(escape_xml "$optical_caption")"</optical_drive_caption>" >> $xml_file
		echo "			<optical_drive_model>"$(escape_xml "$optical_caption $optical_drive_release")"</optical_drive_model>" >> $xml_file
		echo "			<optical_drive_device_id>"$(escape_xml "$optical_device_ID")" </optical_drive_device_id>" >> $xml_file
		echo "			<optical_drive_mount_point>"$(escape_xml "$optical_drive_mount_point")"</optical_drive_mount_point>" >> $xml_file
		echo "		</optical_drive>" >> $xml_file
	done
	echo "	</optical_drives>" >> $xml_file
fi

##################################
# VIDEO CARDS SECTION            #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "Video Cards Info"
fi

video_pci_adapters=""
video_pci_adapters=`$OA_LSPCI | $OA_GREP VGA | $OA_CUT -d" " -f1`

if [ "$video_pci_adapters" != "" ]; then
	echo "	<video_cards>" >> $xml_file
	for video_adapter in $video_pci_adapters; do 
		video_device_name=`$OA_LSPCI -vms $video_adapter | $OA_GREP '^Device' | $OA_TAIL -n1  | $OA_CUT -d: -f2 | $OA_CUT -c2-`
		video_revision=`$OA_LSPCI -vms $video_adapter | $OA_GREP '^Rev' | $OA_CUT -d: -f2 | $OA_CUT -c2-`
		video_description="$video_device_name"
		# Add the revision
		if [ "$video_revision" != "" ]; then
			video_description="$video_device_name (Rev: $video_revision)"
		fi
		video_manufacturer=`$OA_LSPCI -vms $video_adapter | $OA_GREP '^Vendor' | $OA_CUT -d: -f2 | $OA_CUT -c2-`
		video_memory=`$OA_LSPCI -vs $video_adapter | $OA_GREP Memory | $OA_TAIL -n1 | $OA_CUT -d= -f2 | $OA_SED 's/[^0-9]//g'`

		echo "		<video_card>" >> $xml_file
		echo "			<video_description>"$(escape_xml "$video_description")"</video_description>" >> $xml_file
		echo "			<video_manufacturer>"$(escape_xml "$video_manufacturer")"</video_manufacturer>" >> $xml_file
		echo "			<video_memory>"$(escape_xml "$video_memory")"</video_memory>" >> $xml_file
		echo "		</video_card>" >> $xml_file
	done
	echo "	</video_cards>" >> $xml_file
fi


##################################
# SOUND CARDS SECTION            #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "Sound Cards Info"
fi

sound_pci_adapters=""
sound_pci_adapters=`$OA_LSPCI | $OA_GREP -Ei 'audio | multmedia' | $OA_CUT -d" " -f1`

if [ "$sound_pci_adapters" != "" ]; then
	echo "	<sound_cards>" >> $xml_file
	for sound_adapter in $sound_pci_adapters; do 
		sound_device_name=`$OA_LSPCI -vms $sound_adapter | $OA_GREP '^Device' | $OA_TAIL -n1  | $OA_CUT -d: -f2 | $OA_CUT -c2-`
		sound_revision=`$OA_LSPCI -vms $sound_adapter | $OA_GREP '^Rev' | $OA_CUT -d: -f2 | $OA_CUT -c2-`
		sound_name="$sound_device_name"
		# Add the revision
		if [ "$sound_revision" != "" ]; then
			sound_name="$sound_device_name (Rev: $sound_revision)"
		fi
		sound_manufacturer=`$OA_LSPCI -vms $sound_adapter | $OA_GREP '^Vendor' | $OA_CUT -d: -f2 | $OA_CUT -c2-`

		echo "		<sound_card>" >> $xml_file
		echo "			<sound_name>"$(escape_xml "$sound_name")"</sound_name>" >> $xml_file
		echo "			<sound_manufacturer>"$(escape_xml "$sound_manufacturer")"</sound_manufacturer>" >> $xml_file
		echo "			<sound_device_id>"$(escape_xml "$sound_adapter")"</sound_device_id>" >> $xml_file
		echo "		</sound_card>" >> $xml_file
	done
	echo "	</sound_cards>" >> $xml_file
fi

##################################
# SHARES SECTION                 #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "Shares Info"
fi

echo "	<shares>" >> $xml_file

case $system_os_family in
		'Ubuntu' | 'Debian' )
				$OA_SERVICE smbd status 2> /dev/null |\
				$OA_GREP running > /dev/null &&
					$OA_SED -e '/^$/d' -e 's/^[ \t]*//' -e '/^[#;]/d' /etc/samba/smb.conf |\
					$OA_GREP -E "^\[|^comment|^path" |\
					$OA_SED -e '/^\[global\]/d' -e 's/\]$//' -e 's/^comment = //' -e 's/^path = //' |\
					$OA_AWK 'BEGIN { RS = "[" ; FS = "\n" } { print "\t\t<share>"; print "\t\t\t<share_name>",$1,"</share_name>"; print "\t\t\t<share_caption>",$2,"</share_caption>"; print "\t\t\t<share_path>",$3,"</share_path>"; print "\t\t</share>" }' |\
					$OA_TAIL -n +6 >>\
					$xml_file
			;;
		'CentOS' | 'RedHat' | 'SUSE' | 'Fedora' )
				$OA_SERVICE smb status > /dev/null 2>&1 &&\
					$OA_SED -e '/^$/d' -e 's/^[ \t]*//' -e '/^[#;]/d' /etc/samba/smb.conf |\
					$OA_GREP -E "^\[|^comment|^path" |\
					$OA_SED -e '/^\[global\]/d' -e 's/\]$//' -e 's/^comment = //' -e 's/^path = //' |\
					$OA_AWK 'BEGIN { RS = "[" ; FS = "\n" } { print "\t\t<share>"; print "\t\t\t<share_name>",$1,"</share_name>"; print "\t\t\t<share_caption>",$2,"</share_caption>"; print "\t\t\t<share_path>",$3,"</share_path>"; print "\t\t</share>" }' |\
					$OA_TAIL -n +6 >>\
					$xml_file
			;;
esac

echo "	</shares>" >> $xml_file

##################################
# NETWORK CARDS SECTION          #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "Network Cards Info"
fi

net_cards=`for dir in /sys/class/net/*; 
               do [ -e $dir/device ] && {
	          echo "$dir $(readlink -f $dir/device)" | $OA_AWK -F\/ '{ print $9"/"$5 }' | $OA_AWK -F\: '{ print $2":"$3 }' | tr -d '[:blank:]';
	       }; done`;

# $icards=$(ls /sys/class/net/); do
# 	if [ -e "$icards"/device ]; then
# 		icard=`echo 
# 	fi
# done

if [ "$net_cards" != "" ]; then
	# Store the IP Addresses Information in a variable to write it later on the file
	addr_info=""
	echo "	<network_cards>" >> $xml_file;

	IFS=$'\n'; 
	for net_card_connection_id in $net_cards; do 
		net_card_id=`echo $net_card_connection_id | cut -d"/" -f2`
		net_card_pci=`echo $net_card_connection_id | $OA_CUT -d/ -f1`
		net_card_mac=`$OA_CAT /sys/class/net/$net_card_id/address`
		net_index=`$OA_CAT /sys/class/net/$net_card_id/ifindex`

		if [ $net_card_pci = 'virtual' ]; then
			net_card_model="Virtual Interface"
			net_card_manufacturer="Linux"
		else
			if [ "$OA_LSPCI" != "" ]; then
				net_card_model=`$OA_LSPCI -vms $net_card_pci |\
					$OA_GREP -v $net_card_pci |\
					$OA_GREP ^Device |\
					$OA_CUT -d: -f2 |\
					$OA_CUT -c2-`
				net_card_manufacturer=`$OA_LSPCI -vms $net_card_pci |\
					$OA_GREP ^Vendor |\
					$OA_CUT -d: -f2 |\
					$OA_CUT -c2-`
			else
				net_card_model=""
				net_card_manufacturer=""
			fi
		fi
		net_card_description="$net_card_model"

		net_card_speed=""

		if [ -z `echo $net_card_id | $OA_AWK '/^wl/{print $1}'` ]; then
			if [ "$OA_ETHTOOL" = "" ]; then
				# we don't have ethtool installed
				net_card_type="Ethernet 802.3"
			else
				net_card_speed=""
				net_card_speed=`$OA_ETHTOOL $net_card_id 2>/dev/null |\
					$OA_GREP Speed |\
					$OA_CUT -d: -f2 |\
					$OA_SED 's/[^0-9]//g'`
				net_card_type="Ethernet 802.3"
			fi
		else
			# This is a wireless link
			net_card_speed=`$OA_IWLIST $net_card_id bitrate |\
				$OA_GREP Current  |\
				$OA_CUT -d. -f1 |\
				$OA_GREP -oE '[[:digit:]]*'`
			net_card_type="Wireless Ethernet 802.11"
		fi

		# if a speed was detected, it needs to be multiplied to show up in the web
		if [ $net_card_speed ]; then
			net_card_speed=$((net_card_speed * 10000))
		fi

		net_card_status=$(trim `$OA_CAT /sys/class/net/$net_card_id/operstate`)
		if [ "$net_card_status" = "up" ]; then
			net_card_status="Connected" 
		else
			net_card_status="Disconnected"
		fi

		net_card_enabled="False"

		# Get Info on active IPV4 Addresses for this card
		for net_card_enabled_ip4_addr in $($OA_IP addr show $net_card_id |\
			$OA_GREP 'inet ' |\
			$OA_CUT -dt -f2 |\
			$OA_CUT -db -f1 |\
			$OA_CUT -c2- |\
			$OA_CUT -d" " -f1); do
			net_card_enabled="True"
			net_card_enabled_ip6_addr=""
			echo "NCEIA: $net_card_enabled_ip4_addr"
			net_card_enabled_ip_subnet=$(cidr2mask `echo $net_card_enabled_ip4_addr | $OA_CUT -d/ -f2`)
			net_card_enabled_ip_version="4"
			addr_info=$addr_info"\t\t<ip_address>\n"
			addr_info=$addr_info"\t\t\t<net_mac_address>"$(escape_xml "$net_card_mac")"</net_mac_address>\n"
			addr_info=$addr_info"\t\t\t<net_index>"$(escape_xml "$net_index")"</net_index>\n"
			addr_info=$addr_info"\t\t\t<ip_address_v4>"$(escape_xml `echo $net_card_enabled_ip4_addr |\
				$OA_CUT -d/ -f1`)"</ip_address_v4>\n"
			addr_info=$addr_info"\t\t\t<ip_address_v6>"$(escape_xml "$net_card_enabled_ip6_addr")"</ip_address_v6>\n"
			addr_info=$addr_info"\t\t\t<ip_subnet>"$(escape_xml "$net_card_enabled_ip_subnet")"</ip_subnet>\n"
			addr_info=$addr_info"\t\t\t<ip_address_version>"$(escape_xml "$net_card_enabled_ip_version")"</ip_address_version>\n"
			addr_info=$addr_info"\t\t</ip_address>\n"
		done

		# Get Info on active IPV6 Addresses for this card
		for net_card_enabled_ip6_addr in $($OA_IP addr show $net_card_id |\
			$OA_GREP 'inet6' |\
			$OA_CUT -c11- |\
			$OA_CUT -ds -f1); do
			net_card_enabled="True"
			net_card_enabled_ip4_addr=""
		 		net_card_enabled_ip_subnet=`echo $net_card_enabled_ip6_addr |\
				$OA_CUT -d/ -f2`
			net_card_enabled_ip_version="6"

			addr_info=$addr_info"\t\t<ip_address>\n"
			addr_info=$addr_info"\t\t\t<net_mac_address>"$(escape_xml "$net_card_mac")"</net_mac_address>\n"
			addr_info=$addr_info"\t\t\t<net_index>"$(escape_xml "$net_index")"</net_index>\n"
			addr_info=$addr_info"\t\t\t<ip_address_v4>"$(escape_xml "$net_card_enabled_ip4_addr")"</ip_address_v4>\n"
			addr_info=$addr_info"\t\t\t<ip_address_v6>"$(escape_xml `echo $net_card_enabled_ip6_addr |\
				$OA_CUT -d/ -f1`)"</ip_address_v6>\n"
			addr_info=$addr_info"\t\t\t<ip_subnet>"$(escape_xml "$net_card_enabled_ip_subnet")"</ip_subnet>\n"
			addr_info=$addr_info"\t\t\t<ip_address_version>"$(escape_xml "$net_card_enabled_ip_version")"</ip_address_version>\n"
			addr_info=$addr_info"\t\t</ip_address>\n"
		done

		# Check DHCP lease for this card
		# Distros store the lease info in different files/locations, I'm getting the file from the running process
		net_card_lease_file=`$OA_PS -ef |\
		$OA_GREP dhclient |\
		$OA_GREP $net_card_id |\
		$OA_SED -e 's/^.*-lf//' |\
		$OA_CUT -d" " -f2`

		if [ "$net_card_lease_file" = "" ]; then
			net_card_dhcp_enab="False"
			net_card_dhcp_server=""
			net_card_dhcp_lease_expire=""
		else
			net_card_dhcp_enab="True"
			net_card_dhcp_server=`$OA_CAT $net_card_lease_file |\
				$OA_GREP dhcp-server |\
				$OA_TAIL -n1 |\
				$OA_SED 's/;//' |\
				$OA_CUT -d" " -f5`
			net_card_dhcp_lease_expire=`$OA_CAT $net_card_lease_file |\
				$OA_GREP expire |\
				$OA_TAIL -n1 |\
				$OA_SED 's/;//' |\
				$OA_CUT -d" " -f5 |\
				$OA_SED 's|/|-|g'`
			# To get the Obtained date we need to get lease time first
			net_card_dhcp_lease_time=`$OA_CAT $net_card_lease_file |\
				$OA_GREP lease-time |\
				$OA_TAIL -n1 |\
				$OA_SED 's/;//' |\
				$OA_CUT -d" " -f5`
			net_card_dhcp_lease_days=`$OA_EXPR $net_card_dhcp_lease_time / 60 / 60 / 24`
			net_card_dhcp_lease_obtained=`$OA_DATE -d ''$net_card_dhcp_lease_expire' -'$net_card_dhcp_lease_days' days' +%F`
		fi
		
		# TODO: Domain Registration & WINS Info (Samba)
		net_card_domain_reg=""
		net_card_dns_server=`$OA_AWK '/^name/{print $2}' /etc/resolv.conf |\
			$OA_HEAD -n1`
		net_card_dns_domain=`$OA_AWK '/^domain/{print $2}' /etc/resolv.conf |\
			$OA_HEAD -n1`
		if [ "$net_card_dns_domain" = "" ]; then
			net_card_dns_domain=`$OA_AWK '/^search/{print $2}' /etc/resolv.conf |\
			$OA_HEAD -n1`
		fi

		net_card_wins_primary=""

		echo "		<network_card>" >> $xml_file
		echo "			<net_index>"$(escape_xml "$net_index")"</net_index>" >> $xml_file
		echo "			<net_mac_address>"$(escape_xml "$net_card_mac")"</net_mac_address>" >> $xml_file
		echo "			<net_manufacturer>"$(escape_xml "$net_card_manufacturer")"</net_manufacturer>" >> $xml_file
		echo "			<net_model>"$(escape_xml "$net_card_model")"</net_model>" >> $xml_file
		echo "			<net_description>"$(escape_xml "$net_card_description")"</net_description>" >> $xml_file
		echo "			<net_ip_enabled>"$(escape_xml "$net_card_enabled")"</net_ip_enabled>" >> $xml_file
		echo "			<net_connection_id>"$(escape_xml "$net_card_id")"</net_connection_id>" >> $xml_file
		echo "			<net_connection_status>"$(escape_xml "$net_card_status")"</net_connection_status>" >> $xml_file
		echo "			<net_speed>"$(escape_xml "$net_card_speed")"</net_speed>" >> $xml_file
		echo "			<net_adapter_type>"$(escape_xml "$net_card_type")"</net_adapter_type>" >> $xml_file
		echo "			<net_dhcp_enabled>"$(escape_xml "$net_card_dhcp_enab")"</net_dhcp_enabled>" >> $xml_file
		echo "			<net_dhcp_server>"$(escape_xml "$net_card_dhcp_server")"</net_dhcp_server>" >> $xml_file
		echo "			<net_dhcp_lease_obtained>"$(escape_xml "$net_card_dhcp_lease_obtained")"</net_dhcp_lease_obtained>" >> $xml_file
		echo "			<net_dhcp_lease_expires>"$(escape_xml "$net_card_dhcp_lease_expire")"</net_dhcp_lease_expires>" >> $xml_file
		echo "			<net_dns_host_name>"$(escape_xml "$system_hostname")"</net_dns_host_name>" >> $xml_file
		echo "			<net_dns_domain>"$(escape_xml "$net_card_dns_domain")"</net_dns_domain>" >> $xml_file
		echo "			<net_dns_domain_reg_enabled>"$(escape_xml "$net_card_domain_reg")"</net_dns_domain_reg_enabled>" >> $xml_file
		echo "			<net_dns_server>"$(escape_xml "$net_card_dns_server")"</net_dns_server>" >> $xml_file
		echo "			<net_wins_primary>"$(escape_xml "$net_card_wins_primary")"</net_wins_primary>" >> $xml_file
		echo "			<net_wins_secondary></net_wins_secondary>" >> $xml_file
		echo "			<net_wins_lmhosts_enabled></net_wins_lmhosts_enabled>" >> $xml_file
		echo "		</network_card>" >> $xml_file
	done
	echo "	</network_cards>" >> $xml_file
fi

##################################
# ADDRESSES SECTION              #
##################################

if [ "$addr_info" != "" ]; then
	echo "	<addresses>" >> $xml_file
	echo -e $addr_info"	</addresses>" >>  $xml_file
fi



##################################
# LOG SECTION              #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "Log Info"
fi

echo "	<logs>" >> $xml_file

for log in $(ls -1 /etc/logrotate.d/) ; do\
	echo -e "\t\t<log>\n\t\t\t<log_name>$log</log_name>\n\t\t\t<log_file_name>\
		`$OA_GREP -m 1 -E "^/" /etc/logrotate.d/$log | $OA_SED -e 's/\ {//g'`\
			</log_file_name>\n\t\t\t<log_file_size></log_file_size>\n\t\t\t<log_max_file_size>\
			`$OA_GREP -E '\ size\ ' /etc/logrotate.d/$log |\
			$OA_GREP -oE '[[:digit:]]*'`</log_max_file_size>\n\t\t</log>" ; done >>\
	$xml_file


echo "	</logs>" >> $xml_file


##################################
# SWAP SECTION                   #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "Swap Info"
fi

FS=$'\n'; for swap in `$OA_CAT /proc/swaps |\
	$OA_TAIL -n +2` ; do\
		echo $swap |\
		$OA_AWK ' { print "\t<pagefile>\n\t\t<file_name>"$1"</file_name>\n\t\t<initial_size>"$3"</initial_size>\n\t\t<max_size>"$3"</max_size>\n\t</pagefile>" } ' ; done >>\
		$xml_file


##################################
# USER SECTION                   #
##################################

if [ "$debugging" -gt "0" ]; then
	echo "User Info"
fi

echo "	<users>" >> $xml_file

ORIGIFS=$IFS

IFS=`echo -en "\n\b"`; \
	for i in `$OA_CAT /etc/passwd` ; do\
		echo $i |\
		$OA_AWK -F: ' { print "\t\t<user>\n" "\t\t\t<user_name>"$1"</user_name>\n" "\t\t\t<user_full_name>"$5"</user_full_name>\n" "\t\t\t<user_sid>"$3"</user_sid>\n" "\t\t</user>" } ' >> $xml_file ;\
	done

IFS=$ORIGIFS

echo "	</users>" >> $xml_file


########################################################
# SOFTWARE SECTION                                     #
########################################################

if [ "$debugging" -gt "0" ]; then
	echo "Software Info"
fi

echo "	<software>" >> $xml_file

case $system_os_family in
		'Ubuntu' | 'Debian' | 'LinuxMint' )
			$OA_DPKGQUERY --show --showformat='\t\t<package>\n\t\t\t<software_name>${Package}</software_name>\n\t\t\t<software_version>${Version}</software_version>\n\t\t\t<software_url>${Homepage}</software_url>\n\t\t</package>\n' |\
				$OA_SED -e 's/\&.*</</' |\
				$OA_SED -e 's/url><.*><\/software/url><\/software/' >>\
				$xml_file
			;;
		'CentOS' | 'RedHat' | 'SUSE' | 'Fedora' )
			$OA_RPM -qa --queryformat="\t\t<package>\n\t\t\t<software_name>%{NAME}</software_name>\n\t\t\t<software_version>%{VERSION}</software_version>\n\t\t\t<software_url>%{URL}</software_url>\n\t\t</package>\n" |\
				$OA_SED -e 's/\&.*</</' |\
				$OA_SED -e 's/url><.*><\/software/url><\/software/' >>\
				$xml_file
			;;
esac
#				$OA_SED -e 's/+/%2B/g' |\

echo "	</software>" >> $xml_file


########################################################
# SERVICE SECTION                                      #
########################################################

if [ "$debugging" -gt "0" ]; then
	echo "Service Info"
fi

echo "	<services>" >> $xml_file

case $system_os_family in
		'Ubuntu' | 'Debian' )
			if [ -r /etc/inittab ]; then
				INITDEFAULT=$($OA_AWK -F: '/id:/,/:initdefault:/ { print $2 }' /etc/inittab)
			else
				INITDEFAULT=$($OA_AWK -F= ' /^env\ DEFAULT_RUNLEVEL/ { print $2 } ' /etc/init/rc-sysinit.conf)
			fi
			# upstart services
			for s in $(q 2>/dev/null | $OA_AWK ' { print $1 } ' | $OA_SORT | $OA_UNIQ) ; do\
				if [ "$s" = "rc" ]; then
					service_start_mode="Auto"
				else
					service_start_mode="Manual"
				fi 
				service_name=`escape_xml "$s"`
				echo -e "\t\t<service>\n\t\t\t<service_name>$service_name</service_name>\n\t\t\t<service_start_mode>$service_start_mode</service_start_mode>\n\t\t</service>" ;\
				done >>\
			$xml_file
			# sysv services
			for s in `$OA_LS -l /etc/init.d/ |\
			$OA_GREP -Ev '^total|README|upstart' |\
			$OA_AWK ' { print $9 } '` ; do
				service_name=`escape_xml "$s"`
				echo -e "\t\t<service>\n\t\t\t<service_name>$service_name</service_name>" ;\
			if ! $OA_LS -1 /etc/rc$INITDEFAULT\.d |\
			$OA_GREP $s > /dev/null ; then\
				echo -e "\t\t\t<service_start_mode>Manual</service_start_mode>" ;
			else
				echo -e "\t\t\t<service_start_mode>Auto</service_start_mode>" ;
			fi ;\
			echo -e "\t\t</service>" ;\
			done >>\
			$xml_file
			;;
		'CentOS' | 'RedHat' | 'SUSE' )
			INITDEFAULT=$($OA_AWK -F: '/id:/,/:initdefault:/ { print $2 }' /etc/inittab)
			$OA_CHKCONFIG --list |\
				$OA_SED -e '/^$/d' -e '/xinetd based services:/d' |\
				$OA_AWK -v ID="$INITDEFAULT" ' { sub(/:/, "", $1); print "\t\t<service>\n\t\t\t<service_name>"$1"</service_name>"; if ($2 =="on" || $5 ==ID":on") print "\t\t\t<service_start_mode>Auto</service_start_mode>"; else if ($2 =="off" || $5 ==ID":off") print "\t\t\t<service_start_mode>Manual</service_start_mode>"; print "\t\t</service>" } ' >>\
			$xml_file
			;;
esac

echo "	</services>" >> $xml_file

########################################################
# ROUTE SECTION                                        #
########################################################

if [ "$debugging" -gt "0" ]; then
	echo "Route Info"
fi

echo "	<routes>" >> $xml_file
if [ "$OA_ROUTE" != "" ]; then
	IFS=$'\n'; for i in `$OA_ROUTE -n | $OA_TAIL -n +3` ; do echo $i | $OA_AWK ' { print "\t\t<route>\n\t\t\t<destination>"$1"</destination>\n\t\t\t<mask>"$3"</mask>\n\t\t\t<metric>"$5"</metric>\n\t\t\t<next_hop>"$2"</next_hop>\n\t\t\t<type>"$4"</type>\n\t\t</route>" } ' ; done >> $xml_file
fi
if [ "$OA_ROUTE" = "" ] && [ $OA_IP != "" ]; then
	#route_mask=$(cidr2mask `$OA_IP r | grep "default via" | cut -d" " -f1 | cut -d"\"" -f2`)
	route_next_hop=`$OA_IP r | grep "default via" | cut -d" " -f3`
	route_metric=`$OA_IP r | grep "default via" | cut -d" " -f10`
	echo "		<route>" >> $xml_file
	echo "			<destination>0.0.0.0</destination>" >> $xml_file
	echo "			<mask></mask>" >> $xml_file
	echo "			<metric>$route_metric</metric>" >> $xml_file
	echo "			<next_hop>$route_next_hop</next_hop>" >> $xml_file
	echo "		</route>" >> $xml_file
fi
echo "	</routes>" >> $xml_file


########################################################
# NETSTAT LISTENING PORTS                              #
########################################################
if [ "$debugging" -gt "0" ]; then
	echo "Netstat Info"
fi
netstatdump=`netstat -lntup 2>/dev/null | grep -v "(only servers)" | grep -v "Foreign Address"`
echo "	<netstat>" >> $xml_file
echo "		<![CDATA[$netstatdump]]>" >> $xml_file
echo "	</netstat>" >> $xml_file







########################################################
# CLOSE THE AUDIT FILE                                 #
########################################################

echo "</system>" >> $xml_file

########################################################
# SUBMIT RESULTS                                       #
########################################################

if [ $debugging -gt 0 ]; then
	echo 'Audit Generated in ' $(timer $start_time) ' seconds.' 
fi

if [ "$submit_online" = "y" ]; then
	sed -i -e 's/+/%2B/g' $xml_file
	if [ $debugging -gt 1 ]; then
		echo "Submitting results to server"
		echo "URL: $url"
	fi
	$OA_WGET --delete-after --post-file="$xml_file" $url 2>/dev/null
fi

sed -i -e 's/form_systemXML=//g' $xml_file
sed -i -e 's/%2B/+/g' $xml_file
if [ "$create_file" != "y" ]; then
	`$OA_RM -f $PWD/$xml_file`
fi


if [ $debugging -gt 0 ]; then
	echo 'Audit Completed in ' $(timer $start_time) ' seconds.' 
fi

