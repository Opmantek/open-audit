#!/bin/bash
#'''''''''''''''''''''''''''''''''''''''''''''''''''''''
#' Open Audit                                          '
#' Software and Hardware Inventory                     '
#' (c) Open-Audit.org 2003-2009                        '
#' http://www.open-audit.org                           '
#' Licensed under the AGPL v3                          '
#' http://www.fsf.org/licensing/licenses/agpl-3.0.html '
#  Release: 2013-06-20 v1.0.3                          '
#'''''''''''''''''''''''''''''''''''''''''''''''''''''''

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
url="http://localhost/index.php/system/add_system"

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
	OA_ECHO=`which echo 2>/dev/null`
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

function timer()
# Returns the elapsed time in seconds.
#
# usage :
#
#   start=$(timer)
#   # commands...
#   total_seconds=$(timer "$start")
#
{
if [[ $# -eq 0 ]]; then
	$OA_ECHO $($OA_DATE '+%s')
else
	local  stime=$1
	etime=$($OA_DATE '+%s')
	if [[ -z "$stime" ]]; then stime=$etime; fi
	dt=$((etime - stime))
	$OA_ECHO $dt
fi
}

function lcase()
# Returns the lower case version of the argument.
#
# usage :
#
#   lower_version=$(lcase "$var")
#
{
	result=$($OA_ECHO "$1" | $OA_AWK '{print tolower($0)}')
	$OA_ECHO $result
}

function ucase()
# Returns the upper case version of the argument.
#
# usage :
#
#   upper_version=$(ucase "$var")
#
{
	result=$($OA_ECHO "$1" | $OA_AWK '{print toupper($0)}')
	$OA_ECHO $result
}

function pcase()
# Returns the propper case version of the argument.
#
# usage :
#
#   proper_version=$(pcase "$var")
#
{
	result=`lcase "$1" |  $OA_AWK '{ for ( i=1; i <= NF; i++) {   sub(".", substr(toupper($i),1,1) , $i) } print }'`
	$OA_ECHO $result
}

function trim()
# Remove the leading/trailing spaces from the argument.
#
# usage :
#
#   trimmed_version=$(trim "$var")
#
{
	result=`$OA_ECHO "$1" | $OA_SED 's/^ *//g' | $OA_SED 's/ *$//g'`
	$OA_ECHO $result
}

function escape_xml()
# If a special character exists in the string, escape the XML.
#
# usage :
#
#   xml_version=$(escape_xml "$var")
#
{
	# escape characters 
	result=`$OA_ECHO "$1"`
	if [[ "$result" == *"&"* ]] || [[ "$result" == *"<"* ]] || [[ "$result" == *">"* ]] || [[ "$result" == *"\""* ]] || [[ "$result" == *"'"* ]]; then
		result="<![CDATA[$result]]>"
	fi

	# Trim leading/trailing spaces
	result=`trim "$result"`
	$OA_ECHO $result
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
	parameter=$($OA_ECHO "$arg" | $OA_CUT -d= -f1)
	parameter=$(lcase "$parameter")
	parameter=$(trim "$parameter")

	parameter_value=$($OA_ECHO "$arg" | $OA_CUT -d= -f2)
	parameter_value=$(trim "$parameter_value")

	case "$parameter" in
		"check_commands" )
			check_commands="$parameter_value" ;;
		"create_file" )
			create_file="$parameter_value" ;;
		"debugging" )
			debugging="$parameter_value" ;;
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
	$OA_ECHO "Checking commands on $strComputer"
	$OA_ECHO "----------------------" 
	$OA_ECHO "awk                  : $OA_AWK"
	$OA_ECHO "bc                   : $OA_BC"
	$OA_ECHO "cat                  : $OA_CAT"
	$OA_ECHO "cdrdao               : $OA_CDRDAO"
	$OA_ECHO "cut                  : $OA_CUT"
	$OA_ECHO "date                 : $OA_DATE"
	$OA_ECHO "df                   : $OA_DF"
	$OA_ECHO "dmesg                : $OA_DMESG"
	$OA_ECHO "dmidecode            : $OA_DMIDECODE"
	$OA_ECHO "dpkg                 : $OA_DPKG"
	$OA_ECHO "echo                 : $OA_ECHO"
	$OA_ECHO "ethtool              : $OA_ETHTOOL"
	$OA_ECHO "expr                 : $OA_EXPR"
	$OA_ECHO "find                 : $OA_FIND"
	$OA_ECHO "fdisk                : $OA_FDISK"
	$OA_ECHO "grep                 : $OA_GREP"
	$OA_ECHO "head                 : $OA_HEAD"
	$OA_ECHO "hostname             : $OA_HOSTNAME"
	$OA_ECHO "ifconfig             : $OA_IFCONFIG"
	$OA_ECHO "ip                   : $OA_IP"
	$OA_ECHO "iwlist               : $OA_IWLIST"
	$OA_ECHO "lsb_release          : $OA_LSB_RELEASE"
	$OA_ECHO "lshw                 : $OA_LSHW"
	$OA_ECHO "lspci                : $OA_LSPCI"
	$OA_ECHO "lvm                  : $OA_LVM"
	$OA_ECHO "mdadm                : $OA_MDADM"
	$OA_ECHO "partprobe            : $OA_PARTPROBE"
	$OA_ECHO "ping                 : $OA_PING"
	$OA_ECHO "ps                   : $OA_PS"
	$OA_ECHO "rev                  : $OA_REV"
	$OA_ECHO "rm                   : $OA_RM"
	$OA_ECHO "sed                  : $OA_SED"
	$OA_ECHO "sort                 : $OA_SORT"
	$OA_ECHO "swapon               : $OA_SWAPON"
	$OA_ECHO "tail                 : $OA_TAIL"
	$OA_ECHO "test                 : $OA_TEST"
	$OA_ECHO "uname                : $OA_UNAME"
	$OA_ECHO "wc                   : $OA_WC"
	$OA_ECHO "wget                 : $OA_WGET"
	$OA_ECHO "whoami               : $OA_WHOAMI"

	exit
fi

########################################################
# CREATE THE AUDIT FILE                                #
########################################################


start_time=$(timer)

if [ $debugging -gt 0 ]; then
	$OA_ECHO "Starting audit - $strComputer"
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
		$OA_ECHO "Not pinging target, attempting to audit."
	else
		if [ "$pc_alive" = "1" ]; then
			$OA_ECHO "PC $strComputer responding to ping"
		else
			$OA_ECHO "PC $strComputer not responding to ping"
		fi
	fi
fi

local_hostname=""
local_hostname=`$OA_HOSTNAME -s 2>/dev/null`

if [ "$local_hostname" = "" ]; then
	local_hostname=`$OA_HOSTNAME 2>/dev/null`
fi

if [ "$strComputer" = "." ] || [ "$strComputer" = "127.0.0.1" ] || [ $(lcase $strComputer) = $(lcase $local_hostname) ]; then
	audit_location="local"
else
	audit_location="remote"
fi

# Set the TimeSamp
system_timestamp=`$OA_DATE +'%F %T'`

# Get the script name
sScriptName=`$OA_ECHO $0 | $OA_REV | $OA_CUT -d/ -f1 | rev`

# Set the Process ID
nPID="$BASHPID"

if [ $debugging -gt 0 ]; then 
	$OA_ECHO "My PID is : $nPID"
	$OA_ECHO "Audit Start Time : $system_timestamp"
	$OA_ECHO "Audit Location: $audit_location" 
	$OA_ECHO "-------------------" 
fi

#========================
#  SYSTEM INFO          #
#========================

if [ "$debugging" -gt "0" ]; then
	$OA_ECHO "System Info"
fi

# Set the UUID

system_uuid=""
system_uuid=`$OA_DMIDECODE -s system-uuid 2>/dev/null`

# Get the hostname & DNS domain
system_hostname=""
system_hostname=`$OA_HOSTNAME -s 2>/dev/null`

if [ "$system_hostname" = "" ]; then
	system_hostname=`$OA_HOSTNAME 2>/dev/null`
	system_domain=""
else
	system_domain=`$OA_HOSTNAME -d 2>/dev/null`
fi 

# Set Description
system_description=""

# Set System type
system_type="computer"

# System OS Icon - Not yet, after finding the System Family

#Get the System OS Group
#system_os_group=`$OA_UNAME -o`
system_os_group="Linux"

# Get System Family (Distro Name) and the OS Name
system_os_family=""
system_os_family=`$OA_LSB_RELEASE -is 2>/dev/null | $OA_CUT -d" " -f1`
system_os_name=`$OA_LSB_RELEASE -ds 2>/dev/null | $OA_AWK '{gsub("\"","");print}'`

# Find the release file
# The release file should be like /etc/distro-release or /etc/distro_version or /etc/lsb-release
system_relase_file=`$OA_LS -la --time-style='long-iso' /etc/*[_-]{version,release} 2>/dev/null | $OA_GREP -Ev '^l' | $OA_HEAD -n1 | $OA_CUT -d"/" -f3`

if [ "$system_os_family" = "" ]; then
	# No lsb-release package not installed... Try with the release file
	# The distro-release file should have the info in the first line
	system_os_family=`$OA_CAT /etc/$system_relase_file | $OA_HEAD -n1 | $OA_CUT -d" " -f1`
	system_os_name=`$OA_CAT /etc/$system_relase_file | $OA_HEAD -n1`

	# DEBIAN: The release file (/etc/debian_version) contains only the version number. /etc/issue.net should have all the required info
	if [ "$system_relase_file" =  "debian_version" ] || [ "$system_relase_file" =  "debian-version" ]; then
	# The right info should be on the /etc/issue.net file
		if $OA_TEST -f /etc/issue.net; then
			system_os_family=`$OA_CAT /etc/issue.net | $OA_HEAD -n1 | $OA_CUT -d" " -f1`
			system_os_name=`$OA_CAT /etc/issue.net | $OA_HEAD -n1`
		else
			# This should never happen... but, this is a Debian-based system anyway
			system_os_family="Debian"
			system_os_name="Debian Based OS"
		fi
	fi

	# SUSE: The result of the system_os_family is going to be different with this method.  Let's change it to match the lsb_release result
	if [ "$system_os_family" = "openSUSE" ]; then
		system_os_family="SUSE"
	fi
fi

# Set the icon as the lower case version of the System Family.
system_os_icon=`lcase $system_os_family`

# Get the System OS Version
system_os_version=`$OA_UNAME -r`

# Get the System Serial Number
system_serial=""
system_serial=`$OA_DMIDECODE -s system-serial-number`

# Get the System Model
system_model=""
system_model=`$OA_DMIDECODE -s system-product-name`

# Get the System Manufacturer
system_manufacturer=""
system_manufacturer=`$OA_DMIDECODE -s system-manufacturer`

# Get the System Uptime
system_uptime=`$OA_CAT /proc/uptime | $OA_CUT -d. -f1`

# Get the System Form factor
system_form_factor=""
if [[ $system_model = "Bochs" || $system_model = "KVM" || $system_model = "Virtual Machine" ]]; then
	system_form_factor="Virtual"
else
	system_form_factor=`$OA_DMIDECODE -s chassis-type`
	if [ "$system_form_factor" = "<OUT OF SPEC>" ]; then
		system_form_factor="Unknown"
	fi
	system_form_factor=`pcase $system_form_factor`
fi

# Get OS bits
system_pc_os_bit=`$OA_UNAME -i | $OA_GREP x86_64 | $OA_CUT -d_ -f2`
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
#       system_pc_physical_processors = system_pc_total_threads / system_pc_threads_x_processor
#

system_pc_total_threads=`$OA_CAT /proc/cpuinfo | $OA_GREP "processor" | $OA_WC -l`

system_pc_cores_x_processor=`$OA_CAT /proc/cpuinfo | $OA_GREP cores | $OA_HEAD -n1 | $OA_CUT -d: -f2`
system_pc_cores_x_processor=$(trim "$system_pc_cores_x_processor")

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

system_pc_date_os_installation=`$OA_LS -lac --time-style="long-iso" /etc/$system_relase_file | $OA_CUT -d" " -f6`


#'''''''''''''''''''''''''''''''''
#' Write to the audit file       '
#'''''''''''''''''''''''''''''''''

xml_file="$system_hostname"-`$OA_DATE +%Y%m%d%H%M%S`.xml

$OA_ECHO "form_systemXML=<?xml version="\"1.0\"" encoding="\"UTF-8\""?>" > $xml_file
$OA_ECHO "<system>" >> $xml_file
$OA_ECHO "	<sys>" >> $xml_file
$OA_ECHO "		<timestamp>"$(escape_xml "$system_timestamp")"</timestamp>" >> $xml_file
$OA_ECHO "		<uuid>"$(escape_xml "$system_uuid")"</uuid>" >> $xml_file
$OA_ECHO "		<hostname>"$(escape_xml "$system_hostname")"</hostname>" >> $xml_file
$OA_ECHO "		<domain>"$(escape_xml "$system_domain")"</domain>" >> $xml_file
$OA_ECHO "		<description></description>" >> $xml_file
$OA_ECHO "		<type>"$(escape_xml "$system_type")"</type>" >> $xml_file
$OA_ECHO "		<os_icon>"$(escape_xml "$system_os_icon")"</os_icon>" >> $xml_file
$OA_ECHO "		<os_group>"$(escape_xml "$system_os_group")"</os_group>" >> $xml_file
$OA_ECHO "		<os_family>"$(escape_xml "$system_os_family")"</os_family>" >> $xml_file
$OA_ECHO "		<os_name>"$(escape_xml "$system_os_name")"</os_name>" >> $xml_file
$OA_ECHO "		<os_version>"$(escape_xml "$system_os_version")"</os_version>" >> $xml_file
$OA_ECHO "		<serial>"$(escape_xml "$system_serial")"</serial>" >> $xml_file
$OA_ECHO "		<model>"$(escape_xml "$system_model")"</model>" >> $xml_file
$OA_ECHO "		<manufacturer>"$(escape_xml "$system_manufacturer")"</manufacturer>" >> $xml_file
$OA_ECHO "		<uptime>"$(escape_xml "$system_uptime")"</uptime>" >> $xml_file
$OA_ECHO "		<form_factor>"$(escape_xml "$system_form_factor")"</form_factor>" >> $xml_file
$OA_ECHO "		<pc_os_bit>"$(escape_xml "$system_pc_os_bit")"</pc_os_bit>" >> $xml_file
$OA_ECHO "		<pc_memory>"$(escape_xml "$system_pc_memory")"</pc_memory>" >> $xml_file
$OA_ECHO "		<pc_num_processor>"$(escape_xml "$system_pc_total_threads")"</pc_num_processor>" >> $xml_file
$OA_ECHO "		<pc_date_os_installation>"$(escape_xml "$system_pc_date_os_installation")"</pc_date_os_installation>" >> $xml_file
$OA_ECHO "		<man_org_id>"$(escape_xml "$org_id")"</man_org_id>" >> $xml_file
$OA_ECHO "	</sys>" >> $xml_file


##################################
# BIOS SECTION                   #
##################################

if [ "$debugging" -gt "0" ]; then
	$OA_ECHO "BIOS Info"
fi

# Get the BIOS Manufacturer
bios_manufacturer=""
bios_manufacturer=`$OA_DMIDECODE -s bios-vendor 2>/dev/null`

# Get the BIOS Firmware Revision
bios_firm_rev=""
bios_firm_rev=`$OA_DMIDECODE 2>/dev/null | $OA_GREP "Firmware Revision" | $OA_CUT -d: -f2`
bios_firm_rev=$(trim "$bios_firm_rev")

# Make the BIOS Description using the manufacturer - Firmware Rev
if [ "$bios_firm_rev" != "" ]; then
	bios_description=$($OA_ECHO $bios_manufacturer | $OA_CUT -d" " -f1)" BIOS - Firmware Rev. $bios_firm_rev"
else
	bios_description=$($OA_ECHO $bios_manufacturer | $OA_CUT -d" " -f1)" BIOS"
fi

# Get the BIOS Serial = System Serial
bios_serial="$system_serial"

# Get the SMBIOS Version
bios_smversion=""
bios_smversion=`$OA_DMIDECODE 2>/dev/null | $OA_GREP -i SMBIOS | $OA_CUT -d' ' -f2`

# Get the BIOS Version
bios_version_p1=`$OA_DMIDECODE -s bios-version 2>/dev/null`
bios_version_p2=`$OA_DMIDECODE 2>/dev/null | $OA_GREP "BIOS Revision" | $OA_CUT -d: -f2`
bios_version_p2=$(trim "$bios_version_p2")
bios_version_p3=`$OA_DMIDECODE -s bios-release-date 2>/dev/null`

if [ "$bios_version_p2" != "" ]; then
	bios_version="V.$bios_version_p1 Rev.$bios_version_p2 - $bios_version_p3"
else
	bios_version="V.$bios_version_p1 - $bios_version_p3"
fi

#'''''''''''''''''''''''''''''''''
#' Write to the audit file       '

#'''''''''''''''''''''''''''''''''

$OA_ECHO "	<bios>" >> $xml_file
$OA_ECHO "		<bios_description>"$(escape_xml "$bios_description")"</bios_description>" >> $xml_file
$OA_ECHO "		<bios_manufacturer>"$(escape_xml "$bios_manufacturer")"</bios_manufacturer>" >> $xml_file
$OA_ECHO "		<bios_serial>"$(escape_xml "$bios_serial")"</bios_serial>" >> $xml_file
$OA_ECHO "		<bios_smversion>"$(escape_xml "$bios_smversion")"</bios_smversion>" >> $xml_file
$OA_ECHO "		<bios_version>"$(escape_xml "$bios_version")"</bios_version>" >> $xml_file
$OA_ECHO "	</bios>" >> $xml_file


##################################
# PROCESSOR SECTION              #
##################################

if [ "$debugging" -gt "0" ]; then
	$OA_ECHO "Processor Info"
fi

# Get processor socket type
processor_socket=`$OA_DMIDECODE -t processor |\
	$OA_GREP Upgrade |\
	$OA_HEAD -n1 |\
	$OA_CUT -d: -f2`

# Get processor description
processor_description=`$OA_CAT /proc/cpuinfo |\
	$OA_GREP "model name" |\
	$OA_HEAD -n1 |\
	$OA_CUT -d: -f2`

# Get processor speed
processor_speed=`$OA_CAT /proc/cpuinfo |\
	$OA_GREP "cpu MHz" |\
	$OA_HEAD -n1 |\
	$OA_CUT -d: -f2 |\
	$OA_AWK '{printf("%d\n",$1 + 0.5)}'`

# Get processor manufacturer
processor_manufacturer=`$OA_CAT /proc/cpuinfo |\
	$OA_GREP vendor_id |\
	$OA_HEAD -n1 |\
	$OA_CUT -d: -f2`

# Get processor power management support
processor_power_management_supported=`$OA_DMIDECODE -t processor |\
	$OA_GREP Thermal`

if [ "$processor_power_management_supported" != "" ]; then
	processor_power_management_supported="True"
else
	processor_power_management_supported="False"
fi

#'''''''''''''''''''''''''''''''''
#' Write to the audit file       '

#'''''''''''''''''''''''''''''''''

$OA_ECHO "	<processor>" >> $xml_file
$OA_ECHO "		<processor_cores>"$(escape_xml "$system_pc_cores_x_processor")"</processor_cores>" >> $xml_file
$OA_ECHO "		<processor_socket>"$(escape_xml "$processor_socket")"</processor_socket>" >> $xml_file
$OA_ECHO "		<processor_description>"$(escape_xml "$processor_description")"</processor_description>" >> $xml_file
$OA_ECHO "		<processor_speed>"$(escape_xml "$processor_speed")"</processor_speed>" >> $xml_file
$OA_ECHO "		<processor_manufacturer>"$(escape_xml "$processor_manufacturer")"</processor_manufacturer>" >> $xml_file
$OA_ECHO "		<processor_power_management_supported>"$(escape_xml "$processor_power_management_supported")"</processor_power_management_supported>" >> $xml_file
$OA_ECHO "	</processor>" >> $xml_file


##################################
# MEMORY SECTION                 #
##################################

if [ "$debugging" -gt "0" ]; then
	$OA_ECHO "Memory Info"
fi

memory_slots="0"
memory_slots=`$OA_DMIDECODE -t 17 2>/dev/null |\
	$OA_AWK '/DMI type 17/{print $2}' |\
	$OA_WC -l`

if [ "$memory_slots" != "0" ]; then
	#'''''''''''''''''''''''''''''''''
	#' Write to the audit file       '
	#'''''''''''''''''''''''''''''''''

	$OA_ECHO "	<memory>">> $xml_file
	for memory_handle in $($OA_DMIDECODE -t 17 |\
		$OA_AWK '/DMI type 17/{print $2}'); do
			# memory_detail and memory_type are switched here to match the Windows results
			bank_info=$($OA_DMIDECODE -t 17 |\
				$OA_SED -n '/^Handle '"$memory_handle"'/,/^$/p')
			memory_bank=$($OA_ECHO "$bank_info" |\
				$OA_AWK '/^[^B]+Locator:/{for (u=2; u<=NF; u++){printf("%s ", $u)}printf("\n")}' |\
				$OA_AWK '{gsub(" ","");print}')
			memory_detail=$($OA_ECHO "$bank_info" |\
				$OA_AWK '/Type:/{for (u=2; u<=NF; u++){printf("%s ", $u)}printf("\n")}' |\
				$OA_AWK '{gsub(" ","");print}')
			if [ "$memory_detail" = "<OUT OF SPEC>" ]; then
				system_form_factor="Unknown"
			fi
			memory_form_factor=$($OA_ECHO "$bank_info" |\
				$OA_AWK '/Form Factor/{for (u=3; u<=NF; u++){printf("%s ", $u)}printf("\n")}' |\
				$OA_CUT -d" " -f1)
			memory_type=$($OA_ECHO "$bank_info" |\
				$OA_AWK '/Type Detail:/{for (u=3; u<=NF; u++){printf("%s ", $u)}printf("\n")}' |\
				$OA_CUT -d" " -f1)
			memory_capacity=$($OA_ECHO "$bank_info" |\
				$OA_AWK '/Size:/{print $2}' |\
				$OA_SED 's/[^0-9]//g')
			if [ $($OA_ECHO "$bank_info" |\
				$OA_AWK '/Size:/{print $3}') = "kB" ];then
					memory_capacity=`$OA_EXPR $memory_capacity / 1024`
			fi
			memory_speed=$($OA_ECHO "$bank_info" |\
				$OA_AWK '/Speed:/{for (u=2; u<=NF; u++){printf("%s ", $u)}printf("\n")}' |\
				$OA_SED 's/[[:space:]]MHz.*//g')
			memory_tag=$($OA_ECHO "$bank_info" |\
				$OA_AWK '/Bank L.*:/{for (u=3; u<=NF; u++){printf("%s ", $u)}printf("\n")}')
			memory_serial=$($OA_ECHO "$bank_info" |\
					$OA_AWK '/Serial Number:/{for (u=3; u<=NF; u++){printf("%s ", $u)}printf("\n")}' |\
					$OA_CUT -d" " -f1)
			if  [ "$memory_serial" = "Not" ] || [ "$memory_serial" = "Not " ] || [ "$memory_serial" = "Not Specified" ]; then
				memory_serial=""
			fi
			# Ignore empty slots
			if [ "$memory_capacity" != "" ]; then
				$OA_ECHO "		<slot>">> $xml_file
				$OA_ECHO "			<bank>"$(escape_xml "$memory_bank")"</bank>">> $xml_file
				$OA_ECHO "			<type>"$(escape_xml "$memory_type")"</type>">> $xml_file
				$OA_ECHO "			<form_factor>"$(escape_xml "$memory_form_factor")"</form_factor>">> $xml_file
				$OA_ECHO "			<detail>"$(escape_xml "$memory_detail")"</detail>">> $xml_file
				$OA_ECHO "			<capacity>"$(escape_xml "$memory_capacity")"</capacity>">> $xml_file
				$OA_ECHO "			<speed>"$(escape_xml "$memory_speed")"</speed>">> $xml_file
				$OA_ECHO "			<tag>"$(escape_xml "$memory_tag")"</tag>">> $xml_file
				$OA_ECHO "			<serial>"$(escape_xml "$memory_serial")"</serial>">> $xml_file
				$OA_ECHO "		</slot>">> $xml_file
			fi
	done

	$OA_ECHO "	</memory>">> $xml_file
fi


##################################
# MOTHERBOARD SECTION            #
##################################

if [ "$debugging" -gt "0" ]; then
	$OA_ECHO "Motherboard Info"
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
	$OA_ECHO "	<motherboard>">> $xml_file
	$OA_ECHO "		<manufacturer>"$(escape_xml "$mobo_manufacturer")"</manufacturer>" >> $xml_file
	$OA_ECHO "		<model>"$(escape_xml "$mobo_model")"</model>" >> $xml_file
	$OA_ECHO "		<serial>"$(escape_xml "$mobo_serial")"</serial>" >> $xml_file
	$OA_ECHO "		<processor_slots>"$(escape_xml "$system_pc_physical_processors")"</processor_slots>" >> $xml_file
	$OA_ECHO "		<processor_type>"$(escape_xml "$processor_socket")"</processor_type>" >> $xml_file
	$OA_ECHO "		<memory_slots>"$(escape_xml "$memory_slots")"</memory_slots>" >> $xml_file
	$OA_ECHO "	</motherboard>" >> $xml_file
fi


##################################
# OPTICAL DRIVES SECTION         #
##################################

if [ "$debugging" -gt "0" ]; then
	$OA_ECHO "Optical Drives Info"
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
	
	$OA_ECHO "	<optical_drives>" >> $xml_file

	IFS=$'\n'; for optical_device in $($OA_CDRDAO scanbus 2>&1 | $OA_GREP '/dev'); do
		optical_drive_vendor=$(ucase $(trim `$OA_ECHO $optical_device | $OA_CUT -d: -f2 | $OA_CUT -d, -f1`))
		optical_drive_model=$(trim `$OA_ECHO $optical_device | $OA_CUT -d: -f2 | $OA_CUT -d, -f2`)
		optical_drive_release=$(trim `$OA_ECHO $optical_device | $OA_CUT -d: -f2 | $OA_CUT -d, -f3`)
                if [ "$optical_drive_release" != "" ]; then
                  optical_drive_release="Rel.$optical_drive_release"
                fi
		optical_device_ID=$(trim `$OA_ECHO $optical_device | $OA_CUT -d: -f1`)
		optical_caption="$optical_drive_vendor $optical_drive_model"
		$OA_ECHO "		<optical_drive>">> $xml_file
		$OA_ECHO "			<optical_drive_caption>"$(escape_xml "$optical_caption")"</optical_drive_caption>" >> $xml_file
		$OA_ECHO "			<optical_drive_model>"$(escape_xml "$optical_caption $optical_drive_release")"</optical_drive_model>" >> $xml_file
		$OA_ECHO "			<optical_drive_device_id>"$(escape_xml "$optical_device_ID")" </optical_drive_device_id>" >> $xml_file
		$OA_ECHO "			<optical_drive_mount_point>"$(escape_xml "$optical_drive_mount_point")"</optical_drive_mount_point>" >> $xml_file
		$OA_ECHO "		</optical_drive>" >> $xml_file
	done
	$OA_ECHO "	</optical_drives>" >> $xml_file
fi

##################################
# VIDEO CARDS SECTION            #
##################################

if [ "$debugging" -gt "0" ]; then
	$OA_ECHO "Video Cards Info"
fi

video_pci_adapters=""
video_pci_adapters=`$OA_LSPCI | $OA_GREP VGA | $OA_CUT -d" " -f1`

if [ "$video_pci_adapters" != "" ]; then
	$OA_ECHO "	<video_cards>" >> $xml_file
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
	$OA_ECHO "Sound Cards Info"
fi

sound_pci_adapters=""
sound_pci_adapters=`$OA_LSPCI | $OA_GREP -Ei 'audio | multmedia' | $OA_CUT -d" " -f1`

if [ "$sound_pci_adapters" != "" ]; then
	$OA_ECHO "	<sound_cards>" >> $xml_file
	for sound_adapter in $sound_pci_adapters; do 
		sound_device_name=`$OA_LSPCI -vms $sound_adapter | $OA_GREP '^Device' | $OA_TAIL -n1  | $OA_CUT -d: -f2 | $OA_CUT -c2-`
		sound_revision=`$OA_LSPCI -vms $sound_adapter | $OA_GREP '^Rev' | $OA_CUT -d: -f2 | $OA_CUT -c2-`
		sound_name="$sound_device_name"
		# Add the revision
		if [ "$sound_revision" != "" ]; then
			sound_name="$sound_device_name (Rev: $sound_revision)"
		fi
		sound_manufacturer=`$OA_LSPCI -vms $sound_adapter | $OA_GREP '^Vendor' | $OA_CUT -d: -f2 | $OA_CUT -c2-`

		$OA_ECHO "		<sound_card>" >> $xml_file
		$OA_ECHO "			<sound_name>"$(escape_xml "$sound_name")"</sound_name>" >> $xml_file
		$OA_ECHO "			<sound_manufacturer>"$(escape_xml "$sound_manufacturer")"</sound_manufacturer>" >> $xml_file
		$OA_ECHO "			<sound_device_id>"$(escape_xml "$sound_adapter")"</sound_device_id>" >> $xml_file
		$OA_ECHO "		</sound_card>" >> $xml_file
	done
	$OA_ECHO "	</sound_cards>" >> $xml_file
fi

##################################
# SHARES SECTION                 #
##################################

if [ "$debugging" -gt "0" ]; then
	$OA_ECHO "Shares Info"
fi

$OA_ECHO "	<shares>" >> $xml_file

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
		'CentOS' | 'RedHat' | 'SUSE' )
				$OA_SERVICE smb status > /dev/null 2>&1 &&\
					$OA_SED -e '/^$/d' -e 's/^[ \t]*//' -e '/^[#;]/d' /etc/samba/smb.conf |\
					$OA_GREP -E "^\[|^comment|^path" |\
					$OA_SED -e '/^\[global\]/d' -e 's/\]$//' -e 's/^comment = //' -e 's/^path = //' |\
					$OA_AWK 'BEGIN { RS = "[" ; FS = "\n" } { print "\t\t<share>"; print "\t\t\t<share_name>",$1,"</share_name>"; print "\t\t\t<share_caption>",$2,"</share_caption>"; print "\t\t\t<share_path>",$3,"</share_path>"; print "\t\t</share>" }' |\
					$OA_TAIL -n +6 >>\
					$xml_file
			;;
esac

$OA_ECHO "	</shares>" >> $xml_file

##################################
# NETWORK CARDS SECTION          #
##################################

if [ "$debugging" -gt "0" ]; then
	$OA_ECHO "Network Cards Info"
fi

net_cards=`for dir in /sys/class/net/*; 
               do [ -e $dir/device ] && {
	          $OA_ECHO "$dir $(readlink -f $dir/device)" | $OA_AWK -F\/ '{ print $9"/"$5 }' | $OA_AWK -F\: '{ print $2":"$3 }' | tr -d '[:blank:]';
	       }; done`;

if [ "$net_cards" != "" ]; then
	# Store the IP Addresses Information in a variable to write it later on the file
	addr_info=""
	$OA_ECHO "	<network_cards>" >> $xml_file;
	
	#IFS=$'\n'; for net_card_connection_id in `$OA_LS -l /sys/class/net/ |\
		##$OA_GREP -Ev 'bonding_masters|lo|total' |\
		##$OA_SED -re 's/virtio[0-9]+\///' |\
		##$OA_REV |\
		##$OA_CUT -d/ -f1,3 |\
		##$OA_REV |\
		##$OA_CUT -d: -f2,3`; do
	#IFS=$'\n'; for net_card_connection_id in `$OA_LS -l /sys/class/net/ |\
		#$OA_GREP -Ev 'bonding_masters|lo|total' |\
		#$OA_SED -re 's/virtio[0-9]+\///' |\
		#$OA_REV |\
		#$OA_AWK '{ print $1 }' |\
		#$OA_REV`; do
	IFS=$'\n'; for net_card_connection_id in $net_cards; do 

			net_card_id=`$OA_ECHO $net_card_connection_id |\
				$OA_CUT -d/ -f2`
			net_card_pci=`$OA_ECHO $net_card_connection_id |\
				$OA_CUT -d/ -f1`
			net_card_mac=`$OA_CAT /sys/class/net/$net_card_id/address`
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

	if [ -z `$OA_ECHO $net_card_id | $OA_AWK '/^wl/{print $1}'` ]; then
		if [ "$OA_ETHTOOL" = "" ]; then
			# we don't have ethtool installed
			net_card_type="Ethernet 802.3"
		else
			net_card_speed=`$OA_ETHTOOL $net_card_id |\
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
		$OA_CUT -c2-); do
			net_card_enabled="True"
			net_card_enabled_ip6_addr=""
			net_card_enabled_ip_subnet=$(cidr2mask `$OA_ECHO $net_card_enabled_ip4_addr |\
				$OA_CUT -d/ -f2`)
			net_card_enabled_ip_version="4"
			addr_info=$addr_info"\t\t<ip_address>\n"
			addr_info=$addr_info"\t\t\t<net_mac_address>"$(escape_xml "$net_card_mac")"</net_mac_address>\n"
			addr_info=$addr_info"\t\t\t<ip_address_v4>"$(escape_xml `$OA_ECHO $net_card_enabled_ip4_addr |\
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
   		 		net_card_enabled_ip_subnet=`$OA_ECHO $net_card_enabled_ip6_addr |\
					$OA_CUT -d/ -f2`
    			net_card_enabled_ip_version="6"

				addr_info=$addr_info"\t\t<ip_address>\n"
				addr_info=$addr_info"\t\t\t<net_mac_address>"$(escape_xml "$net_card_mac")"</net_mac_address>\n"
				addr_info=$addr_info"\t\t\t<ip_address_v4>"$(escape_xml "$net_card_enabled_ip4_addr")"</ip_address_v4>\n"
				addr_info=$addr_info"\t\t\t<ip_address_v6>"$(escape_xml `$OA_ECHO $net_card_enabled_ip6_addr |\
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

			$OA_ECHO "		<network_card>" >> $xml_file
			$OA_ECHO "			<net_mac_address>"$(escape_xml "$net_card_mac")"</net_mac_address>" >> $xml_file
			$OA_ECHO "			<net_manufacturer>"$(escape_xml "$net_card_manufacturer")"</net_manufacturer>" >> $xml_file
			$OA_ECHO "			<net_model>"$(escape_xml "$net_card_description")"</net_model>" >> $xml_file
			$OA_ECHO "			<net_description>"$(escape_xml "$net_card_model")"</net_description>" >> $xml_file
			$OA_ECHO "			<net_ip_enabled>"$(escape_xml "$net_card_enabled")"</net_ip_enabled>" >> $xml_file
			$OA_ECHO "			<net_connection_id>"$(escape_xml "$net_card_id")"</net_connection_id>" >> $xml_file
			$OA_ECHO "			<net_connection_status>"$(escape_xml "$net_card_status")"</net_connection_status>" >> $xml_file
			$OA_ECHO "			<net_speed>"$(escape_xml "$net_card_speed")"</net_speed>" >> $xml_file
			$OA_ECHO "			<net_adapter_type>"$(escape_xml "$net_card_type")"</net_adapter_type>" >> $xml_file
			$OA_ECHO "			<net_dhcp_enabled>"$(escape_xml "$net_card_dhcp_enab")"</net_dhcp_enabled>" >> $xml_file
			$OA_ECHO "			<net_dhcp_server>"$(escape_xml "$net_card_dhcp_server")"</net_dhcp_server>" >> $xml_file
			$OA_ECHO "			<net_dhcp_lease_obtained>"$(escape_xml "$net_card_dhcp_lease_obtained")"</net_dhcp_lease_obtained>" >> $xml_file
			$OA_ECHO "			<net_dhcp_lease_expires>"$(escape_xml "$net_card_dhcp_lease_expire")"</net_dhcp_lease_expires>" >> $xml_file
			$OA_ECHO "			<net_dns_host_name>"$(escape_xml "$system_hostname")"</net_dns_host_name>" >> $xml_file
			$OA_ECHO "			<net_dns_domain>"$(escape_xml "$net_card_dns_domain")"</net_dns_domain>" >> $xml_file
			$OA_ECHO "			<net_dns_domain_reg_enabled>"$(escape_xml "$net_card_domain_reg")"</net_dns_domain_reg_enabled>" >> $xml_file
			$OA_ECHO "			<net_dns_server>"$(escape_xml "$net_card_dns_server")"</net_dns_server>" >> $xml_file
			$OA_ECHO "			<net_wins_primary>"$(escape_xml "$net_card_wins_primary")"</net_wins_primary>" >> $xml_file
			$OA_ECHO "			<net_wins_secondary></net_wins_secondary>" >> $xml_file
			$OA_ECHO "			<net_wins_lmhosts_enabled></net_wins_lmhosts_enabled>" >> $xml_file
			$OA_ECHO "		</network_card>" >> $xml_file
		done
	$OA_ECHO "	</network_cards>" >> $xml_file
fi

##################################
# ADDRESSES SECTION              #
##################################

if [ "$addr_info" != "" ]; then
	$OA_ECHO "	<addresses>" >> $xml_file
	$OA_ECHO -e $addr_info"	</addresses>" >>  $xml_file
fi



##################################
# LOG SECTION              #
##################################

if [ "$debugging" -gt "0" ]; then
	$OA_ECHO "Log Info"
fi

$OA_ECHO "	<logs>" >> $xml_file

for log in `$OA_LS -1 /etc/logrotate.d/` ; do\
	$OA_ECHO -e "\t\t<log>\n\t\t\t<log_name>$log</log_name>\n\t\t\t<log_file_name>\
		`$OA_GREP -m 1 -E "^/" /etc/logrotate.d/$log | $OA_SED -e 's/\ {//g'`\
			</log_file_name>\n\t\t\t<log_file_size></log_file_size>\n\t\t\t<log_max_file_size>\
			`$OA_GREP -E '\ size\ ' /etc/logrotate.d/$log |\
			$OA_GREP -oE '[[:digit:]]*'`</log_max_file_size>\n\t\t</log>" ; done >>\
	$xml_file


$OA_ECHO "	</logs>" >> $xml_file


##################################
# SWAP SECTION                   #
##################################

if [ "$debugging" -gt "0" ]; then
	$OA_ECHO "Swap Info"
fi

FS=$'\n'; for swap in `$OA_CAT /proc/swaps |\
	$OA_TAIL -n +2` ; do\
		$OA_ECHO $swap |\
		$OA_AWK ' { print "\t<pagefile>\n\t\t<file_name>"$1"</file_name>\n\t\t<initial_size>"$3"</initial_size>\n\t\t<max_size>"$3"</max_size>\n\t</pagefile>" } ' ; done >>\
		$xml_file


##################################
# USER SECTION                   #
##################################

if [ "$debugging" -gt "0" ]; then
	$OA_ECHO "User Info"
fi

$OA_ECHO "	<users>" >> $xml_file

ORIGIFS=$IFS

IFS=`$OA_ECHO -en "\n\b"`; \
	for i in `$OA_CAT /etc/passwd` ; do\
		$OA_ECHO $i |\
		$OA_AWK -F: ' { print "\t\t<user>\n" "\t\t\t<user_name>"$1"</user_name>\n" "\t\t\t<user_full_name>"$5"</user_full_name>\n" "\t\t\t<user_sid>"$3"</user_sid>\n" "\t\t</user>" } ' >> $xml_file ;\
	done

IFS=$ORIGIFS

$OA_ECHO "	</users>" >> $xml_file


########################################################
# SOFTWARE SECTION                                     #
########################################################

if [ "$debugging" -gt "0" ]; then
	$OA_ECHO "Software Info"
fi

$OA_ECHO "	<software>" >> $xml_file

case $system_os_family in
		'Ubuntu' | 'Debian' | 'LinuxMint' )
			$OA_DPKGQUERY --show --showformat='\t\t<package>\n\t\t\t<software_name>${Package}</software_name>\n\t\t\t<software_version>${Version}</software_version>\n\t\t\t<software_url>${Homepage}</software_url>\n\t\t</package>\n' |\
				$OA_SED -e 's/\&.*</</' |\
				$OA_SED -e 's/url><.*><\/software/url><\/software/' >>\
				$xml_file
			;;
		'CentOS' | 'RedHat' | 'SUSE' )
			$OA_RPM -qa --queryformat="\t\t<package>\n\t\t\t<software_name>%{NAME}</software_name>\n\t\t\t<software_version>%{VERSION}</software_version>\n\t\t\t<software_url>%{URL}</software_url>\n\t\t</package>\n" |\
				$OA_SED -e 's/\&.*</</' |\
				$OA_SED -e 's/url><.*><\/software/url><\/software/' >>\
				$xml_file
			;;
esac

$OA_ECHO "	</software>" >> $xml_file

########################################################
# SERVICE SECTION                                      #
########################################################

if [ "$debugging" -gt "0" ]; then
	$OA_ECHO "Service Info"
fi

$OA_ECHO "	<services>" >> $xml_file

case $system_os_family in
		'Ubuntu' | 'Debian' )
			if [ -r /etc/inittab ]; then
				INITDEFAULT=$($OA_AWK -F: '/id:/,/:initdefault:/ { print $2 }' /etc/inittab)
			else
				INITDEFAULT=$($OA_AWK -F= ' /^env\ DEFAULT_RUNLEVEL/ { print $2 } ' /etc/init/rc-sysinit.conf)
			fi
			# upstart services
			for s in `initctl list |\
			$OA_AWK ' { print $1 } ' |\
			$OA_SORT |\
			$OA_UNIQ` ; do\
				if [ "$s" = "rc" ]; then
					service_start_mode="Auto"
				else
					service_start_mode="Manual"
				fi 
				$OA_ECHO -e "\t\t<service>\n\t\t\t<service_name>$s</service_name>\n\t\t\t<service_start_mode>$service_start_mode</service_start_mode>\n\t\t</service>" ;\
				done >>\
			$xml_file
			# sysv services
			for s in `$OA_LS -l /etc/init.d/ |\
			$OA_GREP -Ev '^total|README|upstart' |\
			$OA_AWK ' { print $9 } '` ; do\
				$OA_ECHO -e "\t\t<service>\n\t\t\t<service_name>$s</service_name>" ;\
			if ! $OA_LS -1 /etc/rc$INITDEFAULT\.d |\
			$OA_GREP $s > /dev/null ; then\
				$OA_ECHO -e "\t\t\t<service_start_mode>Manual</service_start_mode>" ;
			else
				$OA_ECHO -e "\t\t\t<service_start_mode>Auto</service_start_mode>" ;
			fi ;\
			$OA_ECHO -e "\t\t</service>" ;\
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

$OA_ECHO "	</services>" >> $xml_file

########################################################
# ROUTE SECTION                                        #
########################################################

if [ "$debugging" -gt "0" ]; then
	$OA_ECHO "Route Info"
fi

$OA_ECHO "	<routes>" >> $xml_file

IFS=$'\n'; for i in `$OA_ROUTE -n | $OA_TAIL -n +3` ; do $OA_ECHO $i | $OA_AWK ' { print "\t\t<route>\n\t\t\t<destination>"$1"</destination>\n\t\t\t<mask>"$3"</mask>\n\t\t\t<metric>"$5"</metric>\n\t\t\t<next_hop>"$2"</next_hop>\n\t\t\t<type>"$4"</type>\n\t\t</route>" } ' ; done >>\
$xml_file

$OA_ECHO "	</routes>" >> $xml_file

########################################################
# NETSTAT LISTENING PORTS                              #
########################################################
if [ "$debugging" -gt "0" ]; then
	$OA_ECHO "Netstat Info"
fi
netstatdump=`netstat -lntup | grep -v "(only servers)" | grep -v "Foreign Address"`
$OA_ECHO "	<netstat>" >> $xml_file
$OA_ECHO "		<![CDATA[$netstatdump]]>" >> $xml_file
$OA_ECHO "	</netstat>" >> $xml_file







########################################################
# CLOSE THE AUDIT FILE                                 #
########################################################

$OA_ECHO "</system>" >> $xml_file

########################################################
# SUBMIT RESULTS                                       #
########################################################

if [ $debugging -gt 0 ]; then
	$OA_ECHO 'Audit Generated in ' $(timer $start_time) ' seconds.' 
fi

if [ "$submit_online" = "y" ]; then
	$OA_ECHO "Submitting results to server"
	$OA_WGET --delete-after --post-file="$xml_file" $url 2>/dev/null
fi

sed -i -e 's/form_systemXML=//g' $xml_file
if [ "$create_file" != "y" ]; then
	`$OA_RM -f $PWD/$xml_file`
fi


if [ $debugging -gt 0 ]; then
	$OA_ECHO 'Audit Completed in ' $(timer $start_time) ' seconds.' 
fi

