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
# @author Mark Unwin <marku@opmantek.com>
# @version 1.12.6
# @copyright Copyright (c) 2014, Opmantek
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

O=$IFS; IFS=$'\n'

# Below are the default settings
start=`date +'%F %T'`

# default to localhost
strComputer="."

# submit the audit to the OAv2 server
submit_online="n"

# check availability of required commands and exit.
check_commands="n"

# create an XML text file of the result in the current directory
create_file="y"

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
if [[ $# -eq 0 ]]; then
	echo $($OA_DATE '+%s')
else
	local  stime=$1
	etime=$($OA_DATE '+%s')
	if [[ -z "$stime" ]]; then stime=$etime; fi
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
	if [[ "$result" == *"&"* ]] || [[ "$result" == *"<"* ]] || [[ "$result" == *">"* ]] || [[ "$result" == *"\""* ]] || [[ "$result" == *"'"* ]]; then
		result="<![CDATA[$result]]>"
	fi

	# Trim leading/trailing spaces
	result=`trim "$result"`
	echo $result
}

# Uset the "vim-cmd hostsvc/hosthardware pci" command with a supplied device id 
# and attribute to retrieve the attribute value
# 
# useage :
# 
# valueName=$(hosthardware "$deviceId" "$attributeName")
# 
hosthardware ()
{
	device_id="$1"
	attribute="$2"
	return_value=$(vim-cmd hostsvc/hosthardware pci | grep "id = \"$device_id\"," -A12 | grep "$attribute = " | cut -d= -f2- | sed 's/ "//' | sed 's/",//')
	echo "$return_value"
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
		"echo_output" )
			echo_output="$parameter_value" ;;
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
	exit 0
fi

if [ "$help" = "y" ]; then
	echo ""
	echo "----------------------------"
	echo "Open-AudIT ESXi Audit script"
	echo "----------------------------"
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
	echo "The name of the resulting XML file will be in the format HOSTNAME-YYMMDDHHIISS.xml, as in the hostname of the machine the the complete timestamp the audit was started."
	exit 0
fi

# STARTING
start_time=$(timer)
system_timestamp=`date +'%F %T'`
if [ $debugging -gt 0 ]; then 
	echo "Starting audit - $strComputer"
	echo "Audit Start Time : $system_timestamp"
	echo "-------------------" 
fi

# SYSTEM
if [ "$debugging" -gt "0" ]; then
	echo "System Info"
fi
hostsummaryHardware=$(vim-cmd hostsvc/hostsummary | sed -n '/^   hardware = (vim.host.Summary.HardwareSummary) {/,/^   \},/p')
quickStats=$(vim-cmd hostsvc/hostsummary | sed -n '/^   quickStats = (vim.host.Summary.QuickStats) {/,/^   \},/p')
smbiosDump=$(smbiosDump)
storageDeviceList=$(esxcli storage core device list)






system_uuid=""
system_uuid=$(trim `echo "$hostsummaryHardware" | grep uuid | cut -d= -f2 | sed 's/,//g' | sed 's/\"//g'`)
system_hostname=""
system_hostname=`hostname -s 2>/dev/null`
if [ "$system_hostname" = "" ]; then
	system_hostname=`hostname 2>/dev/null`
	system_domain=""
else
	system_domain=`hostname -d 2>/dev/null`
fi 
system_description=""
system_type="computer"
man_class="hypervisor"
system_os_group="VMware"
system_os_family="VMware ESXi"
system_os_name=`uname -r`
system_os_name="Vmware ESXi $system_os_name"
system_os_icon="vmware"
system_os_version=`vmware -v`
system_serial=$(trim `echo "$smbiosDump" | sed -n '/^  System Info:/,/^  [A-Za-z]/p' | grep '    Serial' | cut -d":" -f2 | sed 's/"//g'`)
system_model=$(trim `echo "$smbiosDump" | sed -n '/^  System Info:/,/^  [A-Za-z]/p' | grep '    Product' | cut -d":" -f2 | sed 's/"//g'`)
system_manufacturer=$(trim `echo "$smbiosDump" | sed -n '/^  System Info:/,/^  [A-Za-z]/p' | grep '    Manufacturer' | cut -d":" -f2 | sed 's/"//g'`)
system_uptime=$(trim `echo "$quickstats" | grep uptime | cut -d= -f2 | sed 's/,//g' | sed 's/\"//g'`)
system_form_factor=$(trim `echo "$smbiosDump" | sed -n '/^  Chassis Info:/,/^  [A-Za-z]/p' | grep '    Type' | cut -d":" -f2 | cut -d" " -f3 | sed 's/"//g' | sed 's/(//g' | sed 's/)//g'`)
system_pc_os_bit=`uname -m | grep x86_64 | cut -d_ -f2`

system_pc_memory=0
for temp in $(cim-diagnostic.sh 2>/dev/null | grep "OMC_PhysicalMemory" -A21 | grep Capacity |  sed 's/^ *//g' | sed 's/ *$//g' | cut -d" " -f3); do
	temp=`expr $temp / 1024 / 1024`
	system_pc_memory=`expr $system_pc_memory + $temp`
done

#system_pc_memory=$(trim `echo "$smbiosDump" | sed -n '/^  Physical Memory Array:/,/^  [A-Za-z]/p' | grep '    Max. Size' | cut -d":" -f2 | cut -d" " -f2`)
#system_memory_size=$(trim `echo "$smbiosDump" | sed -n '/^  Physical Memory Array:/,/^  [A-Za-z]/p' | grep '    Max. Size' | cut -d":" -f2 | cut -d" " -f3`)
#if [ "$system_memory_size" = "GB" ]; then
#	system_pc_memory=`expr $system_pc_memory \* 1024`
#fi

system_pc_threads=$(trim `echo "$hostsummaryHardware" | grep numCpuThreads | cut -d= -f2 | sed 's/,//g'`)
system_pc_cores=$(trim `echo "$hostsummaryHardware" | grep numCpuCores | cut -d= -f2 | sed 's/,//g'`)
system_pc_processors=$(trim `echo "$hostsummaryHardware" | grep numCpuPkgs | cut -d= -f2 | sed 's/,//g'`)
system_pc_date_os_installation=`esxcli software profile get | grep '^   Creation Time:' | sed 's/Creation Time://g' | sed 's/^ *//g' | sed 's/T/ /g'`
xml_file="$system_hostname"-`date +%Y%m%d%H%M%S`.xml
echo "<?xml version="\"1.0\"" encoding="\"UTF-8\""?>" > $xml_file
echo "<system>" >> $xml_file
echo "	<sys>" >> $xml_file
echo "		<timestamp>"$(escape_xml "$system_timestamp")"</timestamp>" >> $xml_file
echo "		<uuid>"$(escape_xml "$system_uuid")"</uuid>" >> $xml_file
echo "		<hostname>"$(escape_xml "$system_hostname")"</hostname>" >> $xml_file
echo "		<domain>"$(escape_xml "$system_domain")"</domain>" >> $xml_file
echo "		<description></description>" >> $xml_file
echo "		<type>computer</type>" >> $xml_file
echo "		<man_type>computer</man_type>" >> $xml_file
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
echo "		<pc_num_processor>"$(escape_xml "$system_pc_processors")"</pc_num_processor>" >> $xml_file
echo "		<pc_date_os_installation>"$(escape_xml "$system_pc_date_os_installation")"</pc_date_os_installation>" >> $xml_file
echo "		<man_org_id>"$(escape_xml "$org_id")"</man_org_id>" >> $xml_file
echo "		<system_id>"$(escape_xml "$system_id")"</system_id>" >> $xml_file
echo "		<last_seen_by>audit</last_seen_by>" >> $xml_file
echo "		<man_class>hypervisor</man_class>" >> $xml_file
echo "	</sys>" >> $xml_file



# BIOS
if [ "$debugging" -gt "0" ]; then
	echo "BIOS Info"
fi
bios_manufacturer=""
bios_manufacturer=$(trim `echo "$smbiosDump" | sed -n '/^  BIOS Info:/,/^  [A-Za-z]/p' | grep '    Vendor' | cut -d":" -f2 | sed 's/"//g'`)
bios_firm_rev=""
bios_firm_rev=$(trim `echo "$smbiosDump" | sed -n '/^  BIOS Info:/,/^  [A-Za-z]/p' | grep '    Version' | cut -d":" -f2 | sed 's/"//g'`)
# Make the BIOS Description using the manufacturer - Firmware Rev
if [ "$bios_firm_rev" != "" ]; then
	bios_description=$(echo $bios_manufacturer | $OA_CUT -d" " -f1)" BIOS - Firmware Rev. $bios_firm_rev"
else
	bios_description=$(echo $bios_manufacturer | $OA_CUT -d" " -f1)" BIOS"
fi
bios_serial="$system_serial"
bios_smversion=""
bios_version="$bios_firm_rev"
echo "	<bios>" >> $xml_file
echo "		<item>" >> $xml_file
echo "			<description>"$(escape_xml "$bios_description")"</description>" >> $xml_file
echo "			<manufacturer>"$(escape_xml "$bios_manufacturer")"</manufacturer>" >> $xml_file
echo "			<serial>"$(escape_xml "$bios_serial")"</serial>" >> $xml_file
echo "			<smversion>"$(escape_xml "$bios_smversion")"</smversion>" >> $xml_file
echo "			<version>"$(escape_xml "$bios_version")"</version>" >> $xml_file
echo "		</item>" >> $xml_file
echo "	</bios>" >> $xml_file


# PROCESSOR
if [ "$debugging" -gt "0" ]; then
	echo "Processor Info"
fi
processor_description=$(echo "$smbiosDump" | sed -n '/^  Processor Info:/,/^  [A-Za-z]/p' | grep '    Version:' | cut -d: -f2)
processor_description=$(echo "$processor_description" | sed 's/(R)//g' | sed 's/(TM)//g' | sed 's/"//g' | sed 's/(tm)//g' | sed 's/(r)//g')
processor_socket=$(trim `echo "$smbiosDump" | sed -n '/^  Processor Info:/,/^  [A-Za-z]/p' | grep '    Socket Type:' | cut -d: -f2 | sed 's/"//g' | sed 's/(//g' | sed 's/)//g' | cut -d" " -f3`)
processor_speed=$(trim `echo "$smbiosDump" | sed -n '/^  Processor Info:/,/^  [A-Za-z]/p' | grep '    Current Speed:' | cut -d: -f2 | sed 's/"//g'`)
processor_speed=$(echo "$processor_speed" | sed 's/ MHz//g')
processor_manufacturer=$(trim `echo "$smbiosDump" | sed -n '/^  Processor Info:/,/^  [A-Za-z]/p' | grep '    Manufacturer:' | cut -d: -f2 | sed 's/"//g'`)
echo "	<processor>" >> $xml_file
echo "		<item>" >> $xml_file
echo "			<physical_count>"$(escape_xml "$system_pc_processors")"</physical_count>" >> $xml_file
echo "			<core_count>"$(escape_xml "$system_pc_cores")"</core_count>" >> $xml_file
echo "			<logical_count>"$(escape_xml "$system_pc_threads")"</logical_count>" >> $xml_file
echo "			<socket>"$(escape_xml "$processor_socket")"</socket>" >> $xml_file
echo "			<description>"$(escape_xml "$processor_description")"</description>" >> $xml_file
echo "			<speed>"$(escape_xml "$processor_speed")"</speed>" >> $xml_file
echo "			<manufacturer>"$(escape_xml "$processor_manufacturer")"</manufacturer>" >> $xml_file
echo "		</item>" >> $xml_file
echo "	</processor>" >> $xml_file


# DISKS
if [ "$debugging" -gt "0" ]; then
	echo "Disk Info"
fi
if [ "$storageDeviceList" != "" ]; then
	eachDevice=$(echo "$storageDeviceList" | sed -n '/^ t/,/^\n/p')
fi


# MEMORY
if [ "$debugging" -gt "0" ]; then
	echo "Memory Info"
fi
memory_slots="0"
memory_slots=$(echo "$smbiosDump" | sed -n '/^  Physical Memory Array:/,/^  [A-Za-z]/p' | grep '    Slots' | cut -d":" -f2)
if [ "$memory_slots" != "0" ]; then
	echo "	<memory>">> $xml_file
	for memory_handle in $(echo "$smbiosDump" | grep "^  Memory Device: #"); do
		bank=$(echo $memory_handle | cut -d"#" -f2)
		bank="  Memory Device: #$bank"

		memory_detail=""
		memory_detail=$(trim `echo "$smbiosDump" | sed -n "/^$bank/,/^  [A-Za-z]/p" | grep '    Data Width' | grep ECC | cut -d: -f2 | sed 's/\"//g'`)
		if [ "$memory_detail" != "" ]; then
			memory_detail="ECC"
		fi
		memory_bank=""
		memory_bank=$(trim `echo "$smbiosDump" | sed -n "/^$bank/,/^  [A-Za-z]/p" | grep '    Bank' | cut -d: -f2 | sed 's/\"//g'`)
		memory_form_factor=""
		memory_form_factor=$(trim `echo "$smbiosDump" | sed -n "/^$bank/,/^  [A-Za-z]/p" | grep '    Form Factor' | cut -d: -f2 | sed 's/(//g' | sed 's/)//g' | cut -d" " -f3`)
		memory_type=""
		memory_type=$(trim `echo "$smbiosDump" | sed -n "/^$bank/,/^  [A-Za-z]/p" | grep '    Type:' | cut -d: -f2 | sed 's/(//g' | sed 's/)//g' | cut -d" " -f3`)
		memory_capacity=""
		memory_capacity=$(trim `echo "$smbiosDump" | sed -n "/^$bank/,/^  [A-Za-z]/p" | grep '    Size:' | cut -d: -f2 | cut -d" " -f2`)
		memory_size=$(trim `echo "$smbiosDump" | sed -n "/^$bank/,/^  [A-Za-z]/p" | grep '    Size:' | cut -d: -f2 | cut -d" " -f3`)
		if [ "$memory_capacity" != "" ]; then
			if [ "$memory_size" = "GB" ]; then
				memory_capacity=`expr $memory_capacity \* 1024`
			fi
		fi
		memory_speed=""
		memory_speed=$(trim `echo "$smbiosDump" | sed -n "/^$bank/,/^  [A-Za-z]/p" | grep '    Speed:' | cut -d: -f2`)
		memory_tag=""
		memory_tag=$(trim `echo "$smbiosDump" | sed -n "/^$bank/,/^  [A-Za-z]/p" | grep '    Part Number:' | cut -d: -f2` | sed 's/\"//g')
		memory_serial=""
		memory_serial=$(trim `echo "$smbiosDump" | sed -n "/^$bank/,/^  [A-Za-z]/p" | grep '    Serial:' | cut -d: -f2` | sed 's/\"//g')
		# Ignore empty slots
		if [ "$memory_capacity" != "" ]; then
			#echo "3: $memory_capacity"
			echo "		<item>">> $xml_file
			echo "			<bank>"$(escape_xml "$memory_bank")"</bank>">> $xml_file
			echo "			<type>"$(escape_xml "$memory_type")"</type>">> $xml_file
			echo "			<form_factor>"$(escape_xml "$memory_form_factor")"</form_factor>">> $xml_file
			echo "			<detail>"$(escape_xml "$memory_detail")"</detail>">> $xml_file
			echo "			<size>"$(escape_xml "$memory_capacity")"</size>">> $xml_file
			echo "			<speed>"$(escape_xml "$memory_speed")"</speed>">> $xml_file
			echo "			<tag>"$(escape_xml "$memory_tag")"</tag>">> $xml_file
			echo "			<serial>"$(escape_xml "$memory_serial")"</serial>">> $xml_file
			echo "		</item>">> $xml_file
		fi
	done
	echo "	</memory>">> $xml_file
fi




# VM Guests
if [ "$debugging" -gt "0" ]; then
	echo "VM Guest Info"
fi
echo "	<vm>" >> $xml_file
for vm in $(vim-cmd vmsvc/getallvms | grep -v ^Vmid | sed 's/ \+/ /g'); do
	vm_id=$(echo "$vm" | cut -d" " -f1)
	#if [ "$vm_id" =~ ^?[0-9]+$ ]; then
	if expr "$vm_id" : '[0-9]\+$' >/dev/null
		then
		vm_name=$(echo "$vm" | cut -d" " -f2)
		vm_uuid=$(vim-cmd vmsvc/get.config $vm_id | grep uuid | cut -d= -f2- | sed 's/ "//' | sed 's/", //')
		vm_memory=$(vim-cmd vmsvc/get.summary $vm_id | grep memorySizeMB | cut -d= -f2 | sed 's/ //g' | sed 's/,//')
		vm_cpu=$(vim-cmd vmsvc/get.summary $vm_id | grep numCpu | cut -d= -f2 | sed 's/ //g' | sed 's/,//')
		vm_status=$(vim-cmd vmsvc/get.summary $vm_id | grep powerState | cut -d= -f2 | sed 's/ "//' | sed 's/", //')
		vm_config_file=$(echo "$vm" | cut -d" " -f4)
		temp_dir=$(vim-cmd vmsvc/get.config $vm_id | grep datastoreUrl -A5 | grep url | cut -d= -f2- | sed 's/ "//' | sed 's/", //')
		vm_config_file=$(echo "$temp_dir$vm_config_file")
		echo "		<item>" >> $xml_file
		echo "			<vm_id>"$(escape_xml "$vm_id")"</vm_id>" >> $xml_file
		echo "			<name>"$(escape_xml "$vm_name")"</name>" >> $xml_file
		echo "			<uuid>"$(escape_xml "$vm_uuid")"</uuid>" >> $xml_file
		echo "			<memory_count>"$(escape_xml "$vm_memory")"</memory_count>" >> $xml_file
		echo "			<cpu_count>"$(escape_xml "$vm_cpu")"</cpu_count>" >> $xml_file
		echo "			<status>"$(escape_xml "$vm_status")"</status>" >> $xml_file
		echo "			<config_file>"$(escape_xml "$vm_config_file")"</config_file>" >> $xml_file
		echo "			<vm_group></vm_group>" >> $xml_file
		echo "		</item>" >> $xml_file
	fi
done
echo "	</vm>" >> $xml_file







# MOTHERBOARD
if [ "$debugging" -gt "0" ]; then
	echo "Motherboard Info"
fi
mobo_manufacturer=""
mobo_manufacturer=$(trim `echo "$smbiosDump" | sed -n '/^  Board Info:/,/^  [A-Za-z]/p' | grep '    Manufacturer' | cut -d":" -f2 | sed 's/"//g'`)
if [ "$mobo_manufacturer" != "" ]; then
	mobo_model=$(trim `echo "$smbiosDump" | sed -n '/^  Board Info:/,/^  [A-Za-z]/p' | grep '    Product' | cut -d":" -f2 | sed 's/"//g'`)
	mobo_serial=$(trim `echo "$smbiosDump" | sed -n '/^  Board Info:/,/^  [A-Za-z]/p' | grep '    Serial' | cut -d":" -f2 | sed 's/"//g'`)

	echo "	<motherboard>">> $xml_file
	echo "		<item>">> $xml_file
	echo "			<manufacturer>"$(escape_xml "$mobo_manufacturer")"</manufacturer>" >> $xml_file
	echo "			<model>"$(escape_xml "$mobo_model")"</model>" >> $xml_file
	echo "			<serial>"$(escape_xml "$mobo_serial")"</serial>" >> $xml_file
	echo "			<processor_type>"$(escape_xml "$processor_socket")"</processor_type>" >> $xml_file
	echo "			<memory_slot_count>"$(escape_xml "$memory_slots")"</memory_slot_count>" >> $xml_file
	echo "		</item>">> $xml_file
	echo "	</motherboard>" >> $xml_file
fi



# VIDEO
if [ "$debugging" -gt "0" ]; then
	echo "Video Cards Info"
fi
video_description=""
video_description=$(trim `esxcli graphics device list 2>/dev/null | grep 'Device Name' | cut -d: -f2`)
if [ "$video_description" != "" ]; then
	video_manufacturer=""
	video_manufacturer=$(trim `esxcli graphics device list 2>/dev/null | grep 'Vendor Name' | cut -d: -f2`)
	video_memory=""
	video_memory=$(trim `esxcli graphics device list 2>/dev/null | grep 'Memory Size' | cut -d: -f2`)
	video_memory=`expr $video_memory \* 1024`
	echo "	<video>" >> $xml_file
		echo "		<item>" >> $xml_file
		echo "			<model>"$(escape_xml "$video_description")"</model>" >> $xml_file
		echo "			<manufacturer>"$(escape_xml "$video_manufacturer")"</manufacturer>" >> $xml_file
		echo "			<size>"$(escape_xml "$video_memory")"</size>" >> $xml_file
		echo "		</item>" >> $xml_file
	echo "	</video>" >> $xml_file
fi


# NETWORK
if [ "$debugging" -gt "0" ]; then
	echo "Network Cards Info"
fi
# Name    PCI           Driver      Link Speed     Duplex MAC Address       MTU    Description
# vmnic0  0000:01:00.00 e1000e      Up   1000Mbps  Full   68:05:ff:23:69:aa 1500   Intel Corporation 82574L Gigabit Network Connection
addr_info=""
echo "	<network>" >> $xml_file
# for card in `esxcfg-nics -l | grep -v ^Name`; do
	# icard=$(echo "$card" | sed 's/ \+/ /g')
	# net_index=$(echo "$icard" | cut -d" " -f1)
	# net_mac_address=$(echo "$icard" | cut -d" " -f7)
	# net_ip_enabled=$(echo "$icard" | cut -d" " -f4)
	# net_connection_id=$(echo "$icard" | cut -d" " -f1)
	# net_connection_status=$(echo "$icard" | cut -d" " -f4)
	# net_speed=$(echo "$icard" | cut -d" " -f5 | sed 's/Mbps//')
	# net_speed=`expr $net_speed \* 1000 \* 1000`
	# net_device_id=$(echo "$icard" | cut -d" " -f2 | cut -d: -f2- | sed -e 's/\.00/\.0/')
	# net_manufacturer=$(hosthardware "$net_device_id" "vendorName")
	# net_model=$(hosthardware "$net_device_id" "deviceName")

for card in `esxcli network ip interface list | grep -v "^ " | grep .`; do
	net_index="$card"
	net_mac_address=`esxcli network ip interface list | grep "Name: $card" -A1 | grep "MAC Address: " | sed 's/ \+/ /g' | cut -d" " -f4`
	net_ip_enabled=`esxcli network ip interface list | grep "Name: $card" -A2 | grep "Enabled: " | sed 's/ \+/ /g' | cut -d" " -f3`
	#net_connection_id="$card"
	net_connection_id=`esxcli network nic list | grep "$net_mac_address" | cut -d" " -f1`
	net_connection_status=`esxcli network ip interface list | grep "Name: $card" -A2 | grep "Enabled: " | sed 's/ \+/ /g' | cut -d" " -f3`
	icard=`esxcfg-nics -l | grep -v ^Name | grep "$net_mac_address" | sed 's/ \+/ /g'`
	net_speed=$(echo "$icard" | cut -d" " -f5 | sed 's/Mbps//')
	net_speed=`expr $net_speed \* 1000 \* 1000 2>/dev/null`
	net_device_id=$(echo "$icard" | cut -d" " -f2 | cut -d: -f2- | sed -e 's/\.00/\.0/')
	net_manufacturer=$(hosthardware "$net_device_id" "vendorName")
	net_model=$(hosthardware "$net_device_id" "deviceName")

	if [ -z "$net_manufacturer" ]; then
		net_manufacturer="VMware"
	fi

	if [ -z "$net_model" ]; then
		net_model="VMware Virtual Adapter"
	fi

	net_description=$(esxcli network ip interface list | grep "$net_mac_address" -B1 | grep "Name: " | cut -d: -f2 | sed 's/ //')
	for ip in $(esxcli network ip interface ipv4 get | grep "$net_description" | sed 's/ \+/ /g'); do
		net_ip_enabled="True"
		net_card_enabled_ip4_addr=$(echo "$ip" | cut -d" " -f2)
	 	net_card_enabled_ip_subnet=$(echo "$ip" | cut -d" " -f3)
		addr_info=$addr_info"		<item>\n"
		addr_info=$addr_info"			<mac>$(escape_xml "$net_mac_address")</mac>\n"
		addr_info=$addr_info"			<net_index>$(escape_xml "$net_index")</net_index>\n"
		addr_info=$addr_info"			<ip>$(escape_xml "$net_card_enabled_ip4_addr")</ip>\n"
		addr_info=$addr_info"			<netmask>$(escape_xml "$net_card_enabled_ip_subnet")</netmask>\n"
		addr_info=$addr_info"			<version>4</version>\n"
		addr_info=$addr_info"		</item>\n"
	done

	echo "		<item>" >> $xml_file
	echo "			<net_index>"$(escape_xml "$net_index")"</net_index>" >> $xml_file
	echo "			<mac>"$(escape_xml "$net_mac_address")"</mac>" >> $xml_file
	echo "			<manufacturer>"$(escape_xml "$net_manufacturer")"</manufacturer>" >> $xml_file
	echo "			<model>"$(escape_xml "$net_model")"</model>" >> $xml_file
	echo "			<description>"$(escape_xml "$net_model")"</description>" >> $xml_file
	echo "			<ip_enabled>"$(escape_xml "$net_ip_enabled")"</ip_enabled>" >> $xml_file
	echo "			<connection>"$(escape_xml "$net_connection_id")"</connection>" >> $xml_file
	echo "			<connection_status>"$(escape_xml "$net_connection_status")"</connection_status>" >> $xml_file
	echo "			<speed>"$(escape_xml "$net_speed")"</speed>" >> $xml_file
	echo "		</item>" >> $xml_file
done
echo "	</network>" >> $xml_file

if [ -n "$addr_info" ]; then
	{
	echo "	<ip>"
	echo -e "$addr_info"
	echo "	</ip>"
	} >> "$xml_file"
fi



# NETWORK ADDRESSES
# if [ "$addr_info" != "" ]; then
# 	echo "	<addresses>" >> $xml_file
# 	echo -e $addr_info"	</addresses>" >>  $xml_file
# fi



# LOGS
# if [ "$debugging" -gt "0" ]; then
# 	echo "Log Info"
# fi
# echo "	<logs>" >> $xml_file
# for log in $(ls -1 /etc/logrotate.d/) ; do\
# 	echo -e "\t\t<log>\n\t\t\t<log_name>$log</log_name>\n\t\t\t<log_file_name>\
# 		`$OA_GREP -m 1 -E "^/" /etc/logrotate.d/$log | $OA_SED -e 's/\ {//g'`\
# 			</log_file_name>\n\t\t\t<log_file_size></log_file_size>\n\t\t\t<log_max_file_size>\
# 			`$OA_GREP -E '\ size\ ' /etc/logrotate.d/$log |\
# 			$OA_GREP -oE '[[:digit:]]*'`</log_max_file_size>\n\t\t</log>" ; done >>\
# 	$xml_file
# echo "	</logs>" >> $xml_file


# SWAP
# if [ "$debugging" -gt "0" ]; then
# 	echo "Swap Info"
# fi
# FS=$'\n'; for swap in `$OA_CAT /proc/swaps |\
# 	$OA_TAIL -n +2` ; do\
# 		echo $swap |\
# 		$OA_AWK ' { print "\t<pagefile>\n\t\t<file_name>"$1"</file_name>\n\t\t<initial_size>"$3"</initial_size>\n\t\t<max_size>"$3"</max_size>\n\t</pagefile>" } ' ; done >>\
# 		$xml_file



# USERS
# if [ "$debugging" -gt "0" ]; then
# 	echo "User Info"
# fi
# echo "	<users>" >> $xml_file
# ORIGIFS=$IFS
# IFS=`echo -en "\n\b"`; \
# 	for i in `$OA_CAT /etc/passwd` ; do\
# 		echo $i |\
# 		$OA_AWK -F: ' { print "\t\t<user>\n" "\t\t\t<user_name>"$1"</user_name>\n" "\t\t\t<user_full_name>"$5"</user_full_name>\n" "\t\t\t<user_sid>"$3"</user_sid>\n" "\t\t</user>" } ' >> $xml_file ;\
# 	done
# IFS=$ORIGIFS
# echo "	</users>" >> $xml_file



# SOFTWARE
if [ "$debugging" -gt "0" ]; then
	echo "Software Info"
fi

echo "	<software>" >> $xml_file
for package in `esxcli software vib list | grep -v -e ^--------- -e ^Name` ; do
	package=`echo "$package" | sed 's/ \+/\ /g'`
	software_name=`echo "$package" | cut -d" " -f1`
	software_version=`echo "$package" | cut -d" " -f2`
	software_publisher=`echo "$package" | cut -d" " -f3`
	software_install_date=`echo "$package" | cut -d" " -f5`
	software_installed_on=`echo "$package" | cut -d" " -f5`
	echo "		<item>" >> $xml_file
	echo "			<name>"$(escape_xml "$software_name")"</name>" >> $xml_file
	echo "			<version>"$(escape_xml "$software_version")"</version>" >> $xml_file
	echo "			<install_date>"$(escape_xml "$software_install_date")"</install_date>" >> $xml_file
	echo "			<installed_on>"$(escape_xml "$software_installed_on")"</installed_on>" >> $xml_file
	echo "			<publisher>"$(escape_xml "$software_publisher")"</publisher>" >> $xml_file
	echo "		</item>" >> $xml_file
done
echo "	</software>" >> $xml_file




end=`date +'%F %T'`
#echo "Start: $start"
#echo "End: $end"
#cat $xml_file
IFS=$O
#exit 0





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

if [ "$echo_output" = "y" ]; then
	cat $xml_file
fi

# if [ "$submit_online" = "y" ]; then
# 	sed -i -e 's/+/%2B/g' $xml_file
# 	if [ $debugging -gt 1 ]; then
# 		echo "Submitting results to server"
# 		echo "URL: $url"
# 	fi
# 	$OA_WGET --delete-after --post-file="$xml_file" $url 2>/dev/null
# fi

sed -i -e 's/form_systemXML=//g' $xml_file
sed -i -e 's/%2B/+/g' $xml_file
if [ "$create_file" != "y" ]; then
	`rm $PWD/$xml_file`
fi


if [ $debugging -gt 0 ]; then
	echo 'Audit Completed in ' $(timer $start_time) ' seconds.' 
fi

