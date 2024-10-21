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
# Contributors to this script
# Open-AudIT forum users pjanzen (Paul)
# Open-AudIT users
#       Mark Unwin mark.unwin@gmail.com

########################################################
# DEFINE SCRIPT PARAMETERS                             #
########################################################

# Below are the default settings

# submit the audit to the Open-AudIT server
submit_online="y"

# create an XML text file of the result in the current directory
create_file="n"

discovery_id=""

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

last_seen_by="audit"
# ORIGIFS=$IFS
# NEWLINEIFS=$(echo -en "\n\b");
# IFS="$NEWLINEIFS";

# Setting PATH
export PATH=$PATH:/usr/bin:/usr/sbin:/usr/sfw/bin

# DO NOT REMOVE THE LINE BELOW
# Configuration from web UI here

########################################################
# DEFINE SCRIPT FUNCTIONS                              #
########################################################


########################################################
# DEFINE SCRIPT FUNCTIONS                              #
########################################################
function lcase()
# Returns the lower case version of the argument.
#
# usage :
#
#   lower_version=$(lcase "$var")
#
{
        result=$(echo "$1" | awk '{print tolower($0)}')
        echo $result
}

function ucase()
# Returns the upper case version of the argument.
#
# usage :
#
#   upper_version=$(ucase "$var")
#
{
        result=$(echo "$1" | awk '{print toupper($0)}')
        echo $result
}

function pcase()
# Returns the propper case version of the argument.
#
# usage :
#
#   proper_version=$(pcase "$var")
#
{
        result=`lcase "$1" |  awk '{ for ( i=1; i <= NF; i++) {   sub(".", substr(toupper($i),1,1) , $i) } print }'`
        echo $result
}

function trim()
# Remove the leading/trailing spaces from the argument.
#
# usage :
#
#   trimmed_version=$(trim "$var")
#
{
        result=`echo "$1" | sed 's/^ *//g' | sed 's/ *$//g'`
        echo $result
}
function escape_xml()
# Transform special characters to their xml versions.
#
# usage :
#
#   xml_version=$(escape_xml "$var")
#
{
        # escape characters 
        result=`echo "$1" | sed "s/&/\&amp;/g"`
        result=`echo "$result" | sed -e "s/</\&lt;/g"`
        result=`echo "$result" | sed -e "s/>/\&gt;/g"`
        result=`echo "$result" | sed -e 's/"/\&quot;/g'`
        result=`echo "$result" | sed -e "s/'/\&apos;/g"`
        result=`echo "$result" | sed -e "s/®//g"`

        # Trim leading/trailing spaces
        result=`trim "$result"`
        if [ "$result" != "$1" ]; then
            result="<![CDATA[$result]]>"
        fi
        echo $result
}

function calcSubnetmask() {
  local i mask=""
  subnet_mask=$1
  aa=`echo ${subnet_mask:0:2} | tr [:lower:] [:upper:]`
  bb=`echo ${subnet_mask:2:2} | tr [:lower:] [:upper:]`
  cc=`echo ${subnet_mask:4:2} | tr [:lower:] [:upper:]`
  dd=`echo ${subnet_mask:6:2} | tr [:lower:] [:upper:]`
  a1=`echo "ibase=16; $aa" | bc`
  b1=`echo "ibase=16; $bb" | bc`
  c1=`echo "ibase=16; $cc" | bc`
  d1=`echo "ibase=16; $dd" | bc`

  mask="$a1.$b1.$c1.$d1"
  echo $mask
}

# Function calculates number of bit in a netmask
#
mask2cidr() {
    nbits=0
    IFS=.
    for dec in $1 ; do
        case $dec in
            255) let nbits+=8;;
            254) let nbits+=7;;
            252) let nbits+=6;;
            248) let nbits+=5;;
            240) let nbits+=4;;
            224) let nbits+=3;;
            192) let nbits+=2;;
            128) let nbits+=1;;
            0);;
            *) echo "Error: $dec is not recognised"; exit 1
        esac
    done
    echo "$nbits"
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
                "discovery_id" )
                        discovery_id="$parameter_value" ;;
                "org_id" )
                        org_id="$parameter_value" ;;
                "self_delete" )
                        self_delete="$parameter_value" ;;
                "submit_online" )
                        submit_online="$parameter_value" ;;
                "url" )
                        url="$parameter_value" ;;
        esac
done

if [ "$help" = "y" ]; then
    echo ""
    echo "-----------------------------"
    echo "Open-AudIT Solaris Audit script"
    echo "Version: $version"
    echo "-----------------------------"
    echo "This script should be run on a Solaris based computer using root or sudo access rights."
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
    echo "  debugging"
    echo "     0 - No output."
    echo "     1 - Minimal Output."
    echo "    *2 - Verbose output."
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
    echo "NOTE - The netstat section can take a few minutes to complete."
    echo ""
    echo "The name of the resulting XML file will be in the format HOSTNAME-YYMMDDHHIISS.xml, as in the hostname of the machine the the complete timestamp the audit was started."
    exit
fi

########################################################
# CREATE THE AUDIT FILE                                #
########################################################

# Set the TimeSamp
system_timestamp=`date +'%F %T'`

# Set the Process ID
nPID="$$"

system_hostname=""
system_hostname=`uname -n 2>/dev/null`
if [ "$system_hostname" = "" ]; then
        system_hostname=`hostname 2>/dev/null`
fi
xml_file="$system_hostname"-`date +%Y%m%d%H%M%S`.xml
xml_file_full_path=`pwd`"/$xml_file"

if [ $debugging -gt 0 ]; then
    echo "----------------------------"
    echo "Open-AudIT Solaris audit script"
    echo "Version: $version"
    echo "----------------------------"
    echo "My PID is           $nPID"
    echo "Audit Start Time    $system_timestamp"
    echo "Create File         $create_file"
    echo "Submit Online       $submit_online"
    echo "Debugging Level     $debugging"
    echo "Discovery ID        $discovery_id"
    echo "Org Id              $org_id"
    echo "File                $xml_file_full_path"
    echo "----------------------------"
fi

#========================
#  SYSTEM INFO          #
#========================

if [ "$debugging" -gt "0" ]; then
        echo "System Info"
fi

# Get the UUID
system_uuid=""
system_uuid=`smbios -t SMB_TYPE_SYSTEM | grep UUID | awk '{print $2}'`

system_domain=""
system_domain=`domainname 2>/dev/null`
if [ "$system_domain" = "" ]; then
        system_domain=`grep domain /etc/resolv.conf | awk '{print $2}'`
fi
system_fqdn="$system_hostname.$system_domain"

# Get Description
system_description=""

# Get the OS Group
system_os_group=`uname -s`

# Get OS Name
system_os_name=`cat /etc/release | head -n1 | awk '{print $1, $2, $3}'`

# Find the release file
# The release file should be like /etc/distro-release or /etc/distro_version or /etc/lsb-release
# In solaris 10 the release file is always /etc/release
system_relase_file=`ls -la /etc/release 2>/dev/null | grep -v '^l' | head -n1 | cut -d"/" -f3`


# Get the System OS Version
system_os_version=`uname -r`

# Get the System Serial Number
system_serial=""
system_serial=$system_uuid

# Get the System Model
system_model=""
system_model=`smbios -t SMB_TYPE_SYSTEM | grep Product: | cut -d':' -f2,`

# Get the System Manufacturer
system_manufacturer=""
system_manufacturer=`smbios -t SMB_TYPE_SYSTEM | grep Manufacturer: | cut -d':' -f2,`

# Get the System Uptime
system_uptime=`uptime | cut -d" " -f6,7 | sed 's/,//'`

# Get the System Form factor
system_form_factor=""
system_form_factor=`smbios -t SMB_TYPE_CHASSIS | grep "Chassis Type:" | cut -d'(' -f2 | cut -d')' -f1`

# Get OS bits
system_pc_os_bit=`isainfo -kv | awk '{print $1}'`
if [ -z $system_pc_os_bit ]; then
        system_pc_os_bit=32
fi
system_pc_os_arch=`uname -m 2>/dev/null`

# Get the System Memory
system_pc_memory=`prtconf -v | head -3 | grep Mem | cut -d" " -f3,6 2>/dev/null`

# Processor details
`kstat -m cpu_info | egrep "chip_id|core_id|module: cpu_info" | grep -v pkg > /var/tmp/cpu_info.log`
processor_physical_count=`(grep chip_id /var/tmp/cpu_info.log | awk '{ print $2 }' | sort -u | wc -l | tr -d ' ')`
processor_core_count=`(grep core_id /var/tmp/cpu_info.log | awk '{ print $2 }' | sort -u | wc -l | tr -d ' ')`
processor_logical_count=`(grep 'module: cpu_info' /var/tmp/cpu_info.log | awk '{ print $4 }' | sort -u | wc -l | tr -d ' ')`
rm /var/tmp/cpu_info.log

ip=`ifconfig -a | grep inet | grep -v inet6 | grep -v '127.0.0.1' | awk '{print $2}' | head -n1`


# Guess the OS Instalation Date
# There is no way to know for sure the install date.
system_pc_date_os_installation=`grep "**** START ****" /var/sadm/system/logs/install_log | head -n1 | awk '{print $1}'`

#'''''''''''''''''''''''''''''''''
#' Write to the audit file       '
#'''''''''''''''''''''''''''''''''

echo "<?xml version="\"1.0\"" encoding="\"UTF-8\""?>" > $xml_file
echo "<system>" >> $xml_file
echo "    <sys>" >> $xml_file
echo "          <script_version>$version</script_version>" >> $xml_file
echo "          <uuid>"$(escape_xml "$system_uuid")"</uuid>" >> $xml_file
echo "          <hostname>"$(escape_xml "$system_hostname")"</hostname>" >> $xml_file
echo "          <domain>"$(escape_xml "$system_domain")"</domain>" >> $xml_file
echo "          <fqdn>"$(escape_xml "$system_fqdn")"</fqdn>" >> $xml_file
echo "          <ip>"$(escape_xml "$ip")"</ip>" >> $xml_file
echo "          <description></description>" >> $xml_file
echo "          <type>computer</type>" >> $xml_file
echo "          <icon>solaris</icon>" >> $xml_file
echo "          <os_group>"$(escape_xml "$system_os_group")"</os_group>" >> $xml_file
echo "          <os_family>Solaris</os_family>" >> $xml_file
echo "          <os_name>"$(escape_xml "$system_os_name")"</os_name>" >> $xml_file
echo "          <os_version>"$(escape_xml "$system_os_version")"</os_version>" >> $xml_file
echo "          <serial>"$(escape_xml "$system_serial")"</serial>" >> $xml_file
echo "          <model>"$(escape_xml "$system_model")"</model>" >> $xml_file
echo "          <manufacturer>"$(escape_xml "$system_manufacturer")"</manufacturer>" >> $xml_file
#echo "          <uptime>"$(escape_xml "$system_uptime")"</uptime>" >> $xml_file
echo "          <form_factor>"$(escape_xml "$system_form_factor")"</form_factor>" >> $xml_file
echo "          <os_bit>"$(escape_xml "$system_pc_os_bit")"</os_bit>" >> $xml_file
echo "          <os_arch>"$(escape_xml "$system_pc_os_arch")"</os_arch>" >> $xml_file
echo "          <memory_count>"$(escape_xml "$system_pc_memory")"</memory_count>" >> $xml_file
echo "          <processor_count>"$(escape_xml "$processor_physical_count")"</processor_count>" >> $xml_file
echo "          <os_installation_date>"$(escape_xml "$system_pc_date_os_installation")"</os_installation_date>" >> $xml_file
echo "          <org_id>"$(escape_xml "$org_id")"</org_id>" >> $xml_file
echo "          <discovery_id>"$(escape_xml "$discovery_id")"</discovery_id>" >> $xml_file
echo "    </sys>" >> $xml_file

############################################
# OBP SECTION, Sparc does not have a BIOS  #
############################################

if [ "$debugging" -gt "0" ]; then
        echo "BIOS Info"
fi

# Get the BIOS Manufacturer
bios_manufacturer=""
bios_manufacturer=`smbios -t SMB_TYPE_BIOS | grep Vendor | cut -d: -f2`

# Get the BIOS Firmware Revision
bios_firm_rev=""
bios_firm_rev=`smbios -t SMB_TYPE_BIOS | grep "Version String" | cut -d: -f2`

# Make the BIOS Description using the manufacturer - Firmware Rev
if [ "$bios_firm_rev" != "" ]; then
        bios_description="$bios_manufacturer System Firmware - Rev. $bios_firm_rev"
else
        bios_description="$bios_manufacturer"
fi

# Get the BIOS Serial = System Serial
bios_serial="$system_serial"

# Get the SMBIOS Version
bios_smversion="$bios_firm_rev"
bios_version="$bios_firm_rev"

#'''''''''''''''''''''''''''''''''
#' Write to the audit file       '
#'''''''''''''''''''''''''''''''''

echo "      <bios>" >> $xml_file
echo "          <item>" >> $xml_file
echo "              <description>"$(escape_xml "$bios_description")"</description>" >> $xml_file
echo "              <manufacturer>"$(escape_xml "$bios_manufacturer")"</manufacturer>" >> $xml_file
echo "              <serial>"$(escape_xml "$bios_serial")"</serial>" >> $xml_file
echo "              <smversion>"$(escape_xml "$bios_smversion")"</smversion>" >> $xml_file
echo "              <version>"$(escape_xml "$bios_version")"</version>" >> $xml_file
echo "          </item>" >> $xml_file
echo "      </bios>" >> $xml_file

##################################
# PROCESSOR SECTION              #
##################################

if [ "$debugging" -gt "0" ]; then
        echo "Processor Info"
fi

# You cannot get the socket type
processor_socket=""

# Get processor description
processor_description=`psrinfo -vp | tail -1`

# Get processor speed
processor_speed=`kstat -m cpu_info | grep clock_MHz | awk '{print $2}'`

# Get processor manufacturer
processor_manufacturer=`kstat -m cpu_info | egrep "vendor_id" | head -n1 | awk '{print $2}'`

#'''''''''''''''''''''''''''''''''
#' Write to the audit file       '
#'''''''''''''''''''''''''''''''''

echo "      <processor>" >> $xml_file
echo "          <item>" >> $xml_file
echo "              <physical_count>$(escape_xml "$processor_physical_count")</physical_count>" >> $xml_file
echo "              <core_count>"$(escape_xml "$processor_core_count")"</core_count>" >> $xml_file
echo "              <logical_count>"$(escape_xml "$processor_logical_count")"</logical_count>" >> $xml_file
echo "              <socket>"$(escape_xml "$processor_socket")"</socket>" >> $xml_file
echo "              <description>"$(escape_xml "$processor_description")"</description>" >> $xml_file
echo "              <speed>"$(escape_xml "$processor_speed")"</speed>" >> $xml_file
echo "              <manufacturer>"$(escape_xml "$processor_manufacturer")"</manufacturer>" >> $xml_file
echo "          </item>" >> $xml_file
echo "      </processor>" >> $xml_file


##################################
# MEMORY SECTION              #
##################################

# if [ "$debugging" -gt "0" ]; then
#     echo "Memory Info"
# fi
# echo "  <memory>">> $xml_file
# memory_bank="RAMslot#0"
# ## Can't find below commands through Terminal
# memory_type="" 
# memory_form_factor="Unknown"
# memory_detail="Unknown"
# memory_speed=""
# memory_capacity=`printf $(($memorycalc))`
#             if [ "$memory_capacity" != "" ]; then
#                 echo "      <item>">> $xml_file
#                 echo "          <bank>"$(escape_xml "$memory_bank")"</bank>">> $xml_file
#                 echo "          <type>"$(escape_xml "$memory_type")"</type>">> $xml_file
#                 echo "          <form_factor>"$(escape_xml "$memory_form_factor")"</form_factor>">> $xml_file
#                 echo "          <detail>"$(escape_xml "$memory_detail")"</detail>">> $xml_file
#                 echo "          <size>"$(escape_xml "$memory_capacity")"</size>">> $xml_file
#                 echo "          <speed>"$(escape_xml "$memory_speed")"</speed>">> $xml_file
#                 echo "          <tag>"$(escape_xml "$memory_tag")"</tag>">> $xml_file
#                 echo "          <serial>"$(escape_xml "$memory_serial")"</serial>">> $xml_file
#                 echo "      </item>">> $xml_file
#             fi
# echo "  </memory>">> $xml_file

##################################################
# Skipping mem, video, shares and sound section  #
##################################################



##################################
# Hard Disk  SECTION             #
##################################
if [ "$debugging" -gt "0" ]; then
        echo "Disk Info"
fi
echo "  <disk>" >> $xml_file
if [ "$debugging" -gt "1" ]; then
    echo "    COMMAND: iostat -E | grep 'Soft Errors' | awk '{print $1}'"
fi
partitions=""
for disk in `iostat -E | grep 'Soft Errors' | awk '{print $1}'`; do
    if [ "$debugging" -gt "1" ]; then
        echo "    COMMAND: iostat -En \"$disk\" | grep 'Soft Errors' | awk '{print \$1}'"
    fi
    caption=`iostat -En "$disk" | grep 'Soft Errors' | awk '{print $1}'`

    if [ "$debugging" -gt "1" ]; then
        echo "    COMMAND: cfgadm -al | grep \"$caption\" | awk '{print \$2}'"
    fi
    type=`cfgadm -al | grep "$caption" | awk '{print $2}'`

    if [ "$type" = "disk" ]; then
        caption="/dev/dsk/$caption"

        if [ "$debugging" -gt "1" ]; then
            echo "    COMMAND: iostat -eEr $disk | grep Vendor"
        fi
        vendor_line=`iostat -eEr "$disk" | grep Vendor | head -n1`

        if [ "$debugging" -gt "1" ]; then
            echo "    COMMAND: echo \"$vendor_line\" | cut -d',' -f4 | cut -d: -f2-"
        fi
        serial=`echo "$vendor_line" | cut -d',' -f4 | cut -d: -f2-`

        if [ "$debugging" -gt "1" ]; then
            echo "    COMMAND: echo \"$vendor_line\" | cut -d',' -f2 | cut -d: -f4-"
        fi
        model=`echo "$vendor_line" | cut -d',' -f2 | cut -d: -f2-`

        if [ "$debugging" -gt "1" ]; then
            echo "    COMMAND: echo \"$vendor_line\" | cut -d',' -f1 | cut -d: -f2-"
        fi
        manufacturer=`echo "$vendor_line" | cut -d',' -f1 | cut -d: -f2-`

        if [ "$debugging" -gt "1" ]; then
            echo "    COMMAND: echo \"$vendor_line\" | cut -d',' -f3 | cut -d: -f2-"
        fi
        firmware=`echo "$vendor_line" | cut -d',' -f3 | cut -d: -f2-`

        if [ "$debugging" -gt "1" ]; then
            echo "    COMMAND: iostat -eEir \"$disk\" | grep Vendor | cut -d',' -f4 | cut -d: -f2-"
        fi
        device=`iostat -eEir "$disk" | grep Vendor | cut -d',' -f4 | cut -d: -f2-`

        if [ "$debugging" -gt "1" ]; then
            echo "    COMMAND: iostat -eE \"$disk\" | grep '^Size' | cut -d'<' -f2 | cut -d'>' -f1 | cut -d' ' -f1"
        fi
        size=`iostat -eE "$disk" | grep '^Size' | cut -d'<' -f2 | cut -d'>' -f1 | cut -d' ' -f1`
        if [ "$debugging" -gt "1" ]; then
            echo "    COMMAND: printf \$(($size/1000/1000))"
        fi
        size=`printf $(($size/1000/1000))`

        if [ "$debugging" -gt "1" ]; then
            echo "    COMMAND: prtvtoc \"$caption\" | grep -v '^*' | awk '{print \$1}' | wc -l"
        fi
        partition_count=`prtvtoc -h "$caption" | wc -l`
        echo "      <item>" >> $xml_file
        echo "          <caption>"$(escape_xml "$caption")"</caption>" >> $xml_file
        echo "          <hard_drive_index>$(escape_xml "$disk")</hard_drive_index>" >> $xml_file
        echo "          <interface_type></interface_type>" >> $xml_file
        echo "          <manufacturer>"$(escape_xml "$manufacturer")"</manufacturer>" >> $xml_file
        echo "          <model>"$(escape_xml "$model")"</model>" >> $xml_file
        echo "          <serial>"$(escape_xml "$serial")"</serial>" >> $xml_file
        echo "          <size>"$(escape_xml "$size")"</size>" >> $xml_file
        echo "          <device>"$(escape_xml "$disk")"</device>" >> $xml_file
        echo "          <partition_count>"$(escape_xml "$partition_count")"</partition_count>" >> $xml_file
        echo "          <status></status>" >> $xml_file
        echo "          <firmware>"$(escape_xml "$firmware")"</firmware>" >> $xml_file
        echo "          <model_family></model_family>" >> $xml_file
        echo "      </item>" >> $xml_file

        # partitions
        IFS=$'\n'; for partition in `prtvtoc -h "$caption"`; do
            temp=`echo "$partition" | awk '{print $5}'`
            temp=`printf $(($temp*512/1024/1024))`
            temp_mount=`echo "$partition" | awk '{print $7}'`
            if [ "$partitions" != "" ]; then
                partitions="$partitions\n\t\t<item>\n\t\t\t<mount_point>"$(escape_xml "$temp_mount")"</mount_point>\n\t\t\t<size>"$(escape_xml "$temp")"</size>\n\t\t\t<device>"$(escape_xml "$caption")"</device>\n\t\t\t<hard_drive_index>$(escape_xml "$disk")</hard_drive_index>\n\t\t\t<partition_disk_index>$(escape_xml "$disk")</partition_disk_index>\n\t\t\t<mount_type>partition</mount_type>\n\t\t\t<type>local</type>\n\t\t</item>"
            else
                partitions="\t\t<item>\n\t\t\t<mount_point>"$(escape_xml "$temp_mount")"</mount_point>\n\t\t\t<size>"$(escape_xml "$temp")"</size>\n\t\t\t<device>"$(escape_xml "$caption")"</device>\n\t\t\t<hard_drive_index>$(escape_xml "$disk")</hard_drive_index>\n\t\t\t<partition_disk_index>$(escape_xml "$disk")</partition_disk_index>\n\t\t\t<mount_type>partition</mount_type>\n\t\t\t<type>local</type>\n\t\t</item>"
            fi
        done
    fi
done;
echo "  </disk>" >> $xml_file

##################################
# Partition SECTION              #
##################################
if [ "$debugging" -gt "0" ]; then
        echo "Partition Info"
fi
echo "  <partition>" >> $xml_file
echo "$partitions" >> $xml_file
IFS=$'\n'; for partition in `df -k | more | grep -v '1024-blocks'`; do
    size=`echo "$partition" | awk '{print $2}'`
    size=`printf $(($size/1024))`
    used=`echo "$partition" | awk '{print $3}'`
    used=`printf $(($used/1024))`
    free=`echo "$partition" | awk '{print $4}'`
    free=`printf $(($free/1024))`
    mount_point=`echo "$partition" | awk '{print $6}'`
    format=""
    if [ "$mount_point" != "" ] && [ "$size" != "0" ]; then
        IFS=$'\n'; for item in `grep "$mount_point" /etc/mnttab`; do
            mnttab_mount_point=`echo "$item" | awk '{print $2}'`
            if [ "$mount_point" = "$mnttab_mount_point" ]; then
                format=`echo "$item" | awk '{print $3}'`
                name=`echo "$item" | awk '{print $1}'`
            fi
        done
        echo "    <item>" >> $xml_file
        echo "        <mount_type>mount point</mount_type>" >> $xml_file
        echo "        <mount_point>"$(escape_xml "$mount_point")"</mount_point>" >> $xml_file
        echo "        <size>"$(escape_xml "$size")"</size>" >> $xml_file
        echo "        <free>"$(escape_xml "$free")"</free>" >> $xml_file
        echo "        <used>"$(escape_xml "$used")"</used>" >> $xml_file
        echo "        <format>"$(escape_xml "$format")"</format>" >> $xml_file
        echo "        <name>"$(escape_xml "$name")"</name>" >> $xml_file
        echo "        <type>mount point</type>" >> $xml_file
        echo "    </item>" >> $xml_file
    fi
done
echo "  </partition>" >> $xml_file




##################################
# OPTICAL DRIVES SECTION         #
##################################

if [ "$debugging" -gt "0" ]; then
        echo "Optical Drives Info"
fi
optical_num_devices=`iostat -En | grep CD | wc -l`

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

        echo "  <optical>" >> $xml_file

        IFS=$'\n'; for optical_device in $(iostat -En | grep 'CD'); do
                optical_drive_vendor=$(ucase $(trim `echo $optical_device | cut -d: -f2 | cut -d" " -f2`))
                optical_drive_model=$(trim `echo $optical_device | cut -d: -f3 | cut -d" " -f3`)
                optical_drive_release=$(trim `echo $optical_device | cut -d: -f4 | cut -d" " -f2`)
                if [ "$optical_drive_release" != "" ]; then
                  optical_drive_release="Rel.$optical_drive_release"
                fi
                optical_device_ID=$(trim `echo $optical_device | cut -d: -f2`)
                optical_caption="$optical_drive_vendor $optical_drive_model"
                echo "      <item>">> $xml_file
                echo "          <description>"$(escape_xml "$optical_caption")"</description>" >> $xml_file
                echo "          <model>"$(escape_xml "$optical_caption $optical_drive_release")"</model>" >> $xml_file
                echo "          <device>"$(escape_xml "$optical_device_ID")"</device>" >> $xml_file
                echo "          <mount_point>"$(escape_xml "$optical_drive_mount_point")"</mount_point>" >> $xml_file
                echo "      </item>" >> $xml_file
        done
        echo "  </optical>" >> $xml_file
fi

##################################
# NETWORK CARDS SECTION          #
##################################

if [ "$debugging" -gt "0" ]; then
    echo "Network Cards Info"
fi

if [ "$debugging" -gt "1" ]; then
    echo "    COMMAND: dladm show-ether | grep -v 'SPEED-DUPLEX' | awk '{print \$1}'"
fi
net_cards=`dladm show-ether | grep -v 'SPEED-DUPLEX' | awk '{print $1}'`

if [ "$net_cards" != "" ]; then
        # Store the IP Addresses Information in a variable to write it later on the file
        addr_info=""
        echo "  <network>" >> $xml_file
        #IFS=$'\n'; for net_card_connection_id in `dladm show-dev | awk '{print $1}'`; do
        IFS=$'\n'; for net_card_connection_id in $net_cards; do
            net_card_pci=""
            net_card_id=$net_card_connection_id

            if [ "$debugging" -gt "1" ]; then
                echo "    COMMAND: dladm show-ether $net_card_connection_id | awk '{print \$3}' | grep -v STATE"
            fi
            link_status=`dladm show-ether $net_card_connection_id | awk '{print $3}' | grep -v STATE`
            if [ "$link_status" = "up" ]; then
                if [ "$debugging" -gt "1" ]; then
                    echo "    COMMAND: ifconfig $net_card_connection_id | grep ether | cut -d' ' -f2"
                fi
                net_card_mac=`ifconfig $net_card_connection_id | grep ether | cut -d' ' -f2`
            else
                net_card_mac=""
            fi

            if [ "$net_card_pci" = 'virtual' ]; then
                    net_card_model="Virtual Interface"
                    net_card_manufacturer="Oracle"
            else
                    net_card_model=""
                    net_card_manufacturer=""
            fi
            net_card_description="$net_card_model"

            net_card_speed=""
            if [ -z `echo $net_card_id` ]; then
                    if [ "$debugging" -gt "1" ]; then
                        echo "    COMMAND: dladm show-ether $net_card_connection_id | grep unknown | awk '{print \$5}'"
                    fi
                    net_card_speed=`dladm show-ether $net_card_connection_id | grep unknown | awk '{print $5}'`
                    net_card_type="Ethernet 802.3"
            fi

            # if a speed was detected, it needs to be multiplied to show up in the web
            if [ $net_card_speed ]; then
                    net_card_speed=$((net_card_speed * 10000))
            fi

            if [ "$debugging" -gt "1" ]; then
                echo "    COMMAND: trim \`dladm show-ether $net_card_connection_id | grep -v unknown | awk '{print \$3}'\`"
            fi
            net_card_status=$(trim `dladm show-ether $net_card_connection_id | grep -v unknown | awk '{print $3}'`)

            if [ "$net_card_status" = "up" ]; then
                    net_card_status="Connected"
            else
                    net_card_status="Disconnected"
            fi

            net_card_enabled="False"

            # Get Info on active IPV4 Addresses for this card
            if [ "$debugging" -gt "1" ]; then
                echo "    COMMAND: calcSubnetmask \`ifconfig $net_card_id | grep netmask | awk '{print \$4}'\`"
            fi
            for net_card_enabled_ip4_addr in $(ifconfig $net_card_id | grep 'inet ' | awk '{print $2}'); do
                subnet_mask=$(calcSubnetmask `ifconfig $net_card_id | grep netmask | awk '{print $4}'`)
                nbits=$(mask2cidr $subnet_mask)
                net_card_enabled="True"
                net_card_enabled_ip6_addr=""
                #net_card_enabled_ip_subnet=$(cidr2mask `echo $net_card_enabled_ip4_addr | cut -d/ -f2`)
                net_card_enabled_ip_subnet=$(cidr2mask $nbits)
                net_card_enabled_ip_version="4"
                addr_info=$addr_info"\t\t<item>\n"
                addr_info=$addr_info"\t\t\t<mac>"$(escape_xml "$net_card_mac")"</mac>\n"
                addr_info=$addr_info"\t\t\t<ip>"$(escape_xml `echo $net_card_enabled_ip4_addr | cut -d/ -f1`)"</ip>\n"
                addr_info=$addr_info"\t\t\t<cidr>"$(escape_xml "$net_card_enabled_ip_subnet")"</cidr>\n"
                addr_info=$addr_info"\t\t\t<version>4</version>\n"
                addr_info=$addr_info"\t\t</item>\n"
            done

            # Get Info on active IPV6 Addresses for this card
            if [ "$debugging" -gt "1" ]; then
                echo "    COMMAND: ifconfig $net_card_id | grep 'inet6' | cut -c11- | cut -ds -f1"
            fi
            for net_card_enabled_ip6_addr in $(ifconfig $net_card_id | grep 'inet6' | cut -c11- | cut -ds -f1); do
                net_card_enabled="True"
                net_card_enabled_ip4_addr=""
                net_card_enabled_ip_subnet=`echo $net_card_enabled_ip6_addr | cut -d/ -f2`
                net_card_enabled_ip_version="6"
                addr_info=$addr_info"\t\t<item>\n"
                addr_info=$addr_info"\t\t\t<mac>"$(escape_xml "$net_card_mac")"</mac>\n"
                addr_info=$addr_info"\t\t\t<ip>"$(escape_xml `echo $net_card_enabled_ip6_addr | cut -d/ -f1`)"</ip>\n"
                addr_info=$addr_info"\t\t\t<cidr>"$(escape_xml "$net_card_enabled_ip_subnet")"</cidr>\n"
                addr_info=$addr_info"\t\t\t<version>6</version>\n"
                addr_info=$addr_info"\t\t</item>\n"
            done

            # Check DHCP lease for this card
            if [ "$debugging" -gt "1" ]; then
                echo "    COMMAND: ps -ef | grep dhclient | grep $net_card_id | sed -e 's/^.*-lf//' | cut -d" " -f2"
            fi
            net_card_lease_file=`ps -ef | grep dhclient | grep $net_card_id | sed -e 's/^.*-lf//' | cut -d" " -f2`

            if [ "$net_card_lease_file" = "" ]; then
                net_card_dhcp_enab="False"
                net_card_dhcp_server=""
                net_card_dhcp_lease_expire=""
            else
                net_card_dhcp_enab="True"
                if [ "$debugging" -gt "1" ]; then
                    echo "    COMMAND: cat $net_card_lease_file | grep dhcp-server | tail -n1 | sed 's/;//' | cut -d" " -f5"
                fi
                net_card_dhcp_server=`cat $net_card_lease_file | grep dhcp-server | tail -n1 | sed 's/;//' | cut -d" " -f5`

                if [ "$debugging" -gt "1" ]; then
                    echo "    COMMAND: cat $net_card_lease_file | grep expire | tail -n1 | sed 's/;//' | cut -d" " -f5 | sed 's|/|-|g'"
                fi
                net_card_dhcp_lease_expire=`cat $net_card_lease_file | grep expire | tail -n1 | sed 's/;//' | cut -d" " -f5 | sed 's|/|-|g'`
                
                # To get the Obtained date we need to get lease time first
                if [ "$debugging" -gt "1" ]; then
                    echo "    COMMAND: cat $net_card_lease_file | grep lease-time | tail -n1 | sed 's/;//' | cut -d' ' -f5"
                fi
                net_card_dhcp_lease_time=`cat $net_card_lease_file | grep lease-time | tail -n1 | sed 's/;//' | cut -d' ' -f5`
                
                if [ "$debugging" -gt "1" ]; then
                    echo "    COMMAND: expr $net_card_dhcp_lease_time / 60 / 60 / 24"
                fi
                net_card_dhcp_lease_days=`expr $net_card_dhcp_lease_time / 60 / 60 / 24`

                if [ "$debugging" -gt "1" ]; then
                    echo "    COMMAND: date -d ''$net_card_dhcp_lease_expire' -'$net_card_dhcp_lease_days' days' +%F"
                fi
                net_card_dhcp_lease_obtained=`date -d ''$net_card_dhcp_lease_expire' -'$net_card_dhcp_lease_days' days' +%F`
            fi

            #TODO Domain Registration & WINS Info (Samba)
            net_card_wins_primary=""
            net_card_domain_reg=""
            net_card_dns_server=`awk '/^name/{print $2}' /etc/resolv.conf | head -n1`
            net_card_dns_domain=`awk '/^domain/{print $2}' /etc/resolv.conf | head -n1`
            if [ "$net_card_dns_domain" = "" ]; then
                    net_card_dns_domain=`awk '/^search/{print $2}' /etc/resolv.conf |\
                            head -n1`
            fi

            echo "      <item>" >> $xml_file
            echo "          <mac>"$(escape_xml "$net_card_mac")"</mac>" >> $xml_file
            echo "          <manufacturer>"$(escape_xml "$net_card_manufacturer")"</manufacturer>" >> $xml_file
            echo "          <model>"$(escape_xml "$net_card_description")"</model>" >> $xml_file
            echo "          <description>"$(escape_xml "$net_card_model")"</description>" >> $xml_file
            echo "          <ip_enabled>"$(escape_xml "$net_card_enabled")"</ip_enabled>" >> $xml_file
            echo "          <connection>"$(escape_xml "$net_card_id")"</connection>" >> $xml_file
            echo "          <connection_status>"$(escape_xml "$net_card_status")"</connection_status>" >> $xml_file
            echo "          <speed>"$(escape_xml "$net_card_speed")"</speed>" >> $xml_file
            echo "          <type>"$(escape_xml "$net_card_type")"</type>" >> $xml_file
            echo "          <dhcp_enabled>"$(escape_xml "$net_card_dhcp_enab")"</dhcp_enabled>" >> $xml_file
            echo "          <dhcp_server>"$(escape_xml "$net_card_dhcp_server")"</dhcp_server>" >> $xml_file
            echo "          <dhcp_lease_obtained>"$(escape_xml "$net_card_dhcp_lease_obtained")"</dhcp_lease_obtained>" >> $xml_file
            echo "          <dhcp_lease_expires>"$(escape_xml "$net_card_dhcp_lease_expire")"</dhcp_lease_expires>" >> $xml_file
            echo "          <dns_host_name>"$(escape_xml "$system_hostname")"</dns_host_name>" >> $xml_file
            echo "          <dns_domain>"$(escape_xml "$net_card_dns_domain")"</dns_domain>" >> $xml_file
            echo "          <dns_domain_reg_enabled>"$(escape_xml "$net_card_domain_reg")"</dns_domain_reg_enabled>" >> $xml_file
            echo "          <dns_server>"$(escape_xml "$net_card_dns_server")"</dns_server>" >> $xml_file
            echo "      </item>" >> $xml_file
    done
    echo "  </network>" >> $xml_file
fi

##################################
# ADDRESSES SECTION              #
##################################

if [ "$addr_info" != "" ]; then
        echo "      <ip>" >> $xml_file
        echo -e $addr_info" </ip>" >>  $xml_file
fi

##################################
# USER SECTION                   #
##################################

if [ "$debugging" -gt "0" ]; then
        echo "User Info"
fi

echo "  <user>" >> $xml_file

ORIGIFS=$IFS

#IFS=`echo -en "\n\b"`; \
        # for i in `cat /etc/passwd` ; do\
        #         echo $i |\
        #         awk -F: ' { print "\t\t<item>\n" "\t\t\t<name>"$1"</name>\n" "\t\t\t<full_name>"$5"</full_name>\n" "\t\t\t<sid>"$3"</sid>\n" "\t\t</item>" } ' >> $xml_file ;\
        # done

IFS=$'\n'; for i in `cat /etc/passwd`; do
        name=`echo "$i" | cut -d: -f1`
        full_name=`echo "$i" | cut -d: -f5`
        sid=`echo "$i" | cut -d: -f3`
        echo "      <item>" >> $xml_file
        echo "          <name>"$(escape_xml "$name")"</name>" >> $xml_file
        echo "          <full_name>"$(escape_xml "$full_name")"</full_name>" >> $xml_file
        echo "          <sid>"$(escape_xml "$sid")"</sid>" >> $xml_file
        echo "      </item>" >> $xml_file
done

IFS=$ORIGIFS

echo "  </user>" >> $xml_file

########################################################
# SOFTWARE SECTION                                     #
########################################################

if [ "$debugging" -gt "0" ]; then
        echo "Software Info"
fi

packages=`pkginfo | awk '{print $2}'`

echo "      <software>" >> $xml_file
# include OS in software
echo "      <item><name>$system_os_name</name><version>$system_os_version</version><description>Operating System</description><publisher>Oracle</publisher></item>" >> $xml_file
for info in $packages; do
    softwarename=$info
    version=`pkgparam $info VERSION`
    homepage=`pkgparam $info HOTLINE`
    if [ "$homepage" = "Please contact your local service provider" ]; then
        homepage=""
    fi
    echo "<item><name>$softwarename</name><version>$version</version><url>$homepage</url></item>" >> $xml_file
done

echo "      </software>" >> $xml_file

########################################################
# SERVICE SECTION                                      #
########################################################

if [ "$debugging" -gt "0" ]; then
        echo "Service Info"
fi

echo "      <service>" >> $xml_file

for service in $(svcs -a | grep online | awk '{print $3}'); do
    echo "      <item><name>$service</name></item>" >> $xml_file
done
echo "      </service>" >> $xml_file

########################################################
# ROUTE SECTION                                        #
########################################################

if [ "$debugging" -gt "0" ]; then
        echo "Route Info"
fi

echo "      <route>" >> $xml_file

IFS=$'\n'; for i in `netstat -rn | tail +3` ; do echo $i | awk ' { print "\t\t<item>\n\t\t\t<destination>"$1"</destination>\n\t\t\t<mask></mask>\n\t\t\t<metric>"$5"</metric>\n\t\t\t<next_hop>"$2"</next_hop>\n\t\t\t<type>"$3"</type>\n\t\t</item>" } ' ; done >>\
$xml_file

echo "      </route>" >> $xml_file

########################################################
# CLOSE THE AUDIT FILE                                 #
########################################################

echo "</system>" >> $xml_file

########################################################
# SUMBIT RESULTS                                       #
########################################################

if [ "$submit_online" = "y" ]; then
        echo "Submitting results to server"
        curl -k --data-urlencode data@"$xml_file" $url
        # wget --no-check-certificate --post-file="$xml_file" $url 2>/dev/null
fi



if [ "$create_file" != "y" ]; then
        `rm -f $PWD/$xml_file`
fi

if [ "$debugging" -gt "0" ]; then
    echo "Audit Completed"
fi
