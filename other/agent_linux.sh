#!/bin/bash

version="6.0.0"

ORIGIFS=$IFS
NEWLINEIFS=$(echo -en "\n\b");
IFS="$NEWLINEIFS";

advanced="n"
agentId=""
audit="n"
debug="n"
help="n"
install="n"
location_id=""
org_id=""
uninstall="n"
update="n"
url=""

# Not setable by user
programPath="/usr/local/Open-AudIT-Agent"
scriptPath="$( cd -- "$(dirname "$0")" >/dev/null 2>&1 ; pwd -P )"

json ()
{
    result="$1"
    # remove line feed / carriage return
    result=$(echo "$result" | tr -d -c '\n\r -~')
    # trim leading/trailing spaces
    result=$(trim "$result")
    echo "$result"
}

trim ()
{
    result=$(echo "$1" | sed 's/^ *//g' | sed 's/ *$//g')
    echo "$result"
}

lcase ()
{
    result=$(echo "$1" | awk '{print tolower($0)}')
    echo "$result"
}

i=$(($#-1))
while [ $i -ge 0 ]; do
    case ${BASH_ARGV[$i]} in
        "--audit" )
            audit="y" ;;
        "--debug" )
            debug="y" ;;
        "--help" )
            help="y" ;;
        "--install" )
            install="y" ;;
        "--uninstall" )
            uninstall="y" ;;
        "--url" )
            url=${BASH_ARGV[$i-1]} ;;
    esac
    i=$((i-1))
done

if [ "$help" = "y" ]; then
    echo ""
    echo "This is the Open-AudIT Agent version $version."
    echo "This powershell script is normally called from cron."
    echo "Options for calling directly from the command line are:"
    echo " --debug: Set the debug output (default n)."
    echo " --uninstall: Uninstall this agent (default n)."
    echo " --audit: Audit the local computer and submit the result (default n)."
    echo " --help: These options."
    echo " --url \$url: Hard set a URL to report in to. (default empty)"
    echo ""
    echo "Running from $scriptPath"
    exit 0
fi

if [ "$install" = "y" ]; then
    audit="y"
fi


if [ "$debug" = "y" ]; then
    echo ""
    echo "----------------------------"
    echo "Open-AudIT Agent Script"
    echo "Version: $version"
    echo "----------------------------"
    echo "Running with the below options"
    echo "Audit: $audit"
    echo "Debug: $debug"
    echo "Install: $install"
    echo "Uninstall: $uninstall"
    echo "Update: $update"
    echo "URL: $url"
    echo "----------------------------"
    echo ""
fi

execute_audit ()
{
    location_id="$1"
    org_id="$2"
    debugging="$3"

    if [ "$debug" = "y" ]; then
        echo "Auditing" > `tty`
    fi

    # Make sure we have a directory
    if [ ! -d "$programPath" ]; then
        test=$(mkdir "$programPath")
    fi
    if [ ! -d "$programPath" ]; then
        echo "Could not create $programPath, exiting" >&2
        echo "$test" >&2
        exit 1
    fi
    if [ "$debug" = "y" ]; then
        echo "Attempting to download audit_linux.sh from ${url}/scripts/linux/download" > `tty`
        echo "And store it in ${programPath}/audit_linux.sh" > `tty`
        echo "" > `tty`
    fi

    test=$(execute_download "$url/scripts/linux/download" "${programPath}/audit_linux.sh")
    if [ "$debug" = "y" ] && [ -f "${programPath}/audit_linux.sh" ]; then
        echo "Audit script downloaded successfully." > `tty`
        echo "" > `tty`
    fi
    if [ ! -f "${programPath}/audit_linux.sh" ]; then
        echo "Audit script not downloaded." >&2
        exit 1
    fi
    # Make the audit script executable
    `chmod 777 ${programPath}/audit_linux.sh`
    command="${programPath}/audit_linux.sh"
    # Build the command
    # No need to set the URL here as we download from $url and 
    #        Open-AudIT will set it in the audit script for us
    if [ "$debugging" = "y" ]; then
        command="$command debugging=5"
    fi
    if [ "$location_id" ]; then
        command="$command location_id=$location_id"
    fi
    if [ "$org_id" ]; then
        command="$command org_id=$org_id"
    fi
    if [ "$debug" = "y" ]; then
        echo "Running: $command" > `tty`
        echo "" > `tty`
    fi

    # Run the audit
    if [ "$debug" = "y" ]; then
        eval $command
        echo "Audit complete." > `tty`
        echo "---------------" > `tty`
        echo "" > `tty`
    else
        eval $command > /dev/null
    fi
}

execute_command ()
{
    command="$1"
    if [ "$debug" = "y" ]; then
        echo "Running: $command" > `tty`
        echo "" > `tty`
    fi
    if [ "$debug" = "y" ]; then
        eval $command
    else
        eval $command > /dev/null
    fi
}

execute_download ()
{
    this_url="$1"
    if [ ! "$this_url" ]; then
        return
    fi
    file="$2"
    if [ ! "$file" ]; then
        return
    fi
    if [ "$debug" = "y" ]; then
        echo "Downloading: $this_url" > `tty`
    fi
    if [ ! -f  ]; then
        mkdir "$programPath"
    fi
    if [ "$debug" = "y" ]; then
        echo "Saving to: $file" > `tty`
    fi
    curl -s "$this_url" --output "$file"
}


execute_install ()
{
    # Only root
    if [ "$(id -u)" != "0" ]; then
        echo "This script should be run by root or using sudo, exiting." >&2
        exit 1
    fi

    if [ -d "$programPath" ]; then
        echo "ERROR - $programPath exists, not installing." >&2
        return;
    fi

    if [ "$debug" = "y" ]; then
        echo "Installing into ${programPath}" > `tty`
    fi

    # Create the install directory if it doesn't already exist
    if [ ! -d "${programPath}" ]; then
        if [ "$debug" = "y" ]; then
            echo "Creating ${{programPath}}" > `tty`
        fi
        test=$(mkdir "${programPath}")
    fi
    if [ ! -d "${programPath}" ]; then
        echo "ERROR - Could not create ${programPath}" >&2
        echo "$test" >&2
        exit 1
    fi

    # Create the downloads directory if it doesn't already exist
    if [ ! -d "$programPath/downloads" ]; then
        if [ "$debug" = "y" ]; then
            echo "Creating ${programPath}/downloads" > `tty`
        fi
        test=$(mkdir "${programPath}/downloads")
    fi
    if [ ! -d "$programPath/downloads" ]; then
        echo "ERROR - Could not create $programPath/downloads" >&2
        echo "$test" >&2
        exit 1
    fi

    # Copy the agent into this directory
    if [ ! -f "$scriptPath/agent.sh" ]; then
        path="${url}agents/linux/download"
        if [ "$agentId" ]; then
            path="${url}agents/${agentId}/download/linux"
        fi
        if [ "$debug" = "y" ]; then
            echo "Downloading agent from ${path} to ${programPath}/agent.sh" > `tty`
        fi
        execute_download "${path}" "${programPath}/agent.sh"
        if [ ! -f "$programPath/agent.sh" ]; then
            echo "ERROR - Could not download agent from ${path} to ${programPath}/agent.sh" >&2
            echo "$test" >&2
            exit 1
        fi
    else
        if [ "$debug" = "y" ]; then
            echo "Copying agent from ${scriptPath}/agent.sh to ${programPath}/agent.sh" > `tty`
        fi
        test=$(cp "${scriptPath}/agent.sh" "${programPath}/agent.sh")
        if [ ! -f "$programPath/agent.sh" ]; then
            echo "ERROR - Could not copy ${scriptPath}/agent.sh to ${programPath}/agent.sh" >&2
            echo "$test" >&2
            exit 1
        fi
    fi

    chmod 777 "${programPath}"
    chmod 777 "${programPath}/downloads"
    chmod 755 "${programPath}/agent.sh"

    if [ "$debug" = "y" ]; then
        echo "Install task into cron" > `tty`
    fi
    if [ -f /etc/cron.d/open-audit-agent ]; then
        if [ "$debug" = "y" ]; then
            echo "Open-AudIT Agent cron file exists, moving to /tmp/cron.d.open-audit." > `tty`
            echo "If you have changed this file, you will need to update the new cron.d /etc/cron.d/open-audit-agent file." > `tty`
        fi
        mv /etc/cron.d/open-audit-agent /tmp/cron.d.open-audit-agent
    fi

    if [ ! -f /etc/cron.d/open-audit-agent ]; then
        # Setup a new cron
        minute=$(($RANDOM % 60))
        hour=$(($RANDOM % 24))
        echo "# m h dom month dow user command
# run the task checker every $hour:$minute
$minute $hour * * *   root    /usr/local/Open-AudIT-Agent/agent.sh >/dev/null 2>&1" > /etc/cron.d/open-audit-agent
    fi

    if [ "$debug" = "y" ]; then
        echo "Agent copied." > `tty`
        echo "Install complete." > `tty`
        echo "-----------------" > `tty`
        echo "" > `tty`
    fi
}

execute_uninstall ()
{
    # Only root
    if [ "$(id -u)" != "0" ]; then
        echo "This script should be run by root or using sudo, exiting." >&2
        exit 1
    fi
    if [ "$debug" = "y" ]; then
        echo "Uninstalling Open-AudIT Agent version $version." > `tty`
    fi
    # Remove the directory
    if [ -d "$programPath" ]; then
        test=$(rm -rf "$programPath")
    fi
    if [ -d "$programPath" ]; then
        echo "Could not delete '$programPath', please do this manually." >&2
        echo "$test" >&2
        exit 1
    fi
    # Remove the cron
    if [ -f /etc/cron.d/open-audit-agent ]; then
        test=$(rm /etc/cron.d/open-audit-agent)
    fi
    if [ -f /etc/cron.d/open-audit-agent ]; then
        echo "Could not remove cron file at /etc/cron.d/open-audit-agent, please do this manually." 2>&1
        echo "$test" 2>&1
    else
        if [ "$debug" = "y" ]; then
            echo "Removed task." > `tty`
        fi
    fi
    if [ "$debug" = "y" ]; then
        echo "Uninstall complete." > `tty`
        echo "-----------------" > `tty`
        echo "" > `tty`
    fi
}

execute_update ()
{
    if [ "$debug" = "y" ]; then
        echo "Updating"
    fi
    # Update the actual agent script
    test=$(execute_download "$url/agents/linux/download" "$programPath/agent.sh")
    if [ "$debug" = "y" ] && [ -f "$programPath/agent.sh" ]; then
        echo "Agent updated successfully." > `tty`
        echo "Update complete." > `tty`
        echo "----------------" > `tty`
        echo "" > `tty`
    fi
}

# This is also at the script end to catch a server response of uninstall
#     but we have it here so if it's passed in on the command line, just
#     do it without bothering to check-in with the Open-AudIT server.
if [ "$uninstall" = "y" ]; then
    test=$(execute_uninstall)
    exit 0
fi

# Populate all our local info - lots taken from audit_linux.sh
busybox="n"
system_os_family=$(cat /etc/os-release 2>/dev/null | grep -i ^NAME | cut -d= -f2 | cut -d\" -f2)
if [ -f "/etc/redhat-release" ]; then
    # To cater to a RHEL 7 machine that has RHEL in /etc/os-release PRETTY_NAME
    system_os_name=$(cat /etc/redhat-release 2>/dev/null)
fi
if [ -z "$system_os_name" ]; then
    system_os_name=$(cat /etc/os-release 2>/dev/null | grep -i ^PRETTY_NAME | cut -d= -f2 | cut -d\" -f2)
fi

if [ -z "$system_os_family" ]; then
    if [ -f "/etc/motd" ] && [ $(grep -qi 'DD-WRT' /etc/motd) ]; then
        system_os_family="DD-WRT"
        system_os_version=$(grep DD-WRT /etc/motd | cut -dv -f2)
        system_os_version="v$system_os_version"
        system_os_name="DD-WRT $system_os_version"
        system_ip_address=$(nvram get lan_ipaddr)
        busybox="y"
    fi
fi

if [ -z "$system_os_family" ] && [ -f "/etc/avahi/services/dsminfo.service" ]; then
    if [ -f "/etc/synoinfo.conf" ]; then
        system_os_family="Synology DSM"
        major=`grep version_major /etc/avahi/services/dsminfo.service 2>/dev/null | cut -d= -f2 | cut -d\< -f1`
        minor=`grep version_minor /etc/avahi/services/dsminfo.service 2>/dev/null | cut -d= -f2 | cut -d\< -f1`
        build=`grep version_build /etc/avahi/services/dsminfo.service 2>/dev/null | cut -d= -f2 | cut -d\< -f1`
        system_os_version="$major.$minor-$build"
        system_os_name="Synology DSM $major.$minor-$build"
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

system_serial=""
if [ -z "$system_os_family" ] && [ -f "/etc/avahi/services/dsminfo.service" ]; then
    if [ -f "/etc/synoinfo.conf" ]; then
        system_serial=`grep serial /etc/avahi/services/dsminfo.service 2>/dev/null | cut -d= -f2 | cut -d\< -f1`;
    fi
fi
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


system_ip_address=""
if [ "$busybox" = "n" ] && [ -z "$system_ip_address" ]; then
    system_ip_address=$(ip route get $(ip route show 0.0.0.0/0 2>/dev/null | grep -oP 'via \K\S+') 2>/dev/null | grep -oP 'src \K\S+')
fi

if [ "$busybox" = "y" ] && [ -z "$system_ip_address" ]; then
    system_ip_address=$(ip route show 0.0.0.0/0 2>/dev/null | head -n1 | awk '{print $3}')
fi

if [ -z "$system_ip_address" ]; then
    system_ip_address=$(ip addr | grep 'state UP' -A2 | grep inet | awk '{print $2}' | cut -f1  -d'/' | head -n 1)
fi



if [ "$busybox" = "n" ]; then
    for system_release_file in /etc/*[_-]version /etc/*[_-]release; do

        [ -f "$system_release_file" ] || continue;
        [ "$system_release_file" = "/etc/os-release" ] && continue;

        if [ -z "$system_os_name" ]; then
            system_os_name=$(head -n1 "$system_release_file")
        fi

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

if [ "$agentId" ]; then
    postDetails="{\"version\":\"$version\",\"hostname\":\"$(json "$system_hostname")\",\"uuid\":\"$(json "$system_uuid")\",\"serial\":\"$(json "$system_serial")\",\"ip\":\"$(json "$system_ip_address")\",\"os_name\":\"$(json "$system_os_name")\",\"os_family\":\"$(json "$system_os_family")\",\"agentId\":\"$agentId\"}"
else
    postDetails="{\"version\":\"$version\",\"hostname\":\"$(json "$system_hostname")\",\"uuid\":\"$(json "$system_uuid")\",\"serial\":\"$(json "$system_serial")\",\"ip\":\"$(json "$system_ip_address")\",\"os_name\":\"$(json "$system_os_name")\",\"os_family\":\"$(json "$system_os_family")\"}"
fi

if [ "$debug" = "y" ]; then
    if [ "$agentId" ]; then
        echo "Sending to: ${url}agents/${agentId}/execute"
    else
        echo "Sending to: ${url}agents/execute"
    fi
    echo ""
    echo "$postDetails"
    echo "----------------"
    echo ""
fi

if [ "$agentId" ]; then
    response=$(curl -s --header "Content-Type: application/json" --data "$postDetails" "${url}agents/${agentId}/execute")
else
    response=$(curl -s --header "Content-Type: application/json" --data "$postDetails" "${url}agents/execute")
fi

if [ "$debug" = "y" ]; then
    echo "Received:"
    echo "$response"
    echo "----------------"
    echo ""
fi

if [ "$debug" = "y" ]; then
    echo "Processing response"
fi

for line in $(echo $response); do

    # Audit
    if [ $(echo "$line" | grep "\"audit\": true") ]; then
        audit="y"
        if [ "$debug" = "y" ]; then
            echo "Audit sent from server"
        fi
    fi

    # Update
    if [ $(echo "$line" | grep "\"update\": true") ]; then
        update="y"
        if [ "$debug" = "y" ]; then
            echo "Update sent from server"
        fi
    fi

    # Uninstall
    if [ $(echo "$line" | grep "\"uninstall\": true") ]; then
        uninstall="y"
        if [ "$debug" = "y" ]; then
            echo "Uninstall sent from server"
        fi
    fi

    # Location ID
    if [ $(echo $line | grep "\"location_id\"" | cut -d: -f2 | cut -d, -f1) ]; then
        location_id=$(echo $line | grep "\"location_id\"" | cut -d: -f2 | cut -d, -f1)
        location_id=$(trim $location_id)
        if [ "$debug" = "y" ]; then
            echo "LocationID sent from server: $location_id"
        fi
    fi

    # Org ID
    if [ $(echo $line | grep "\"org_id\"" | cut -d: -f2 | cut -d, -f1) ]; then
        org_id=$(echo $line | grep "\"org_id\"" | cut -d: -f2 | cut -d, -f1)
        org_id=$(trim $org_id)
        if [ "$debug" = "y" ]; then
            echo "OrgID sent from server: $org_id"
        fi
    fi
done

if [ "$debug" = "y" ]; then
    echo "Completed processing response"
    echo "----------------"
    echo ""
fi

# Our actions to take
if [ "$install" = "y" ]; then
    test=$(execute_install)
fi

if [ "$update" = "y" ]; then
    test=$(execute_update)
fi

if [ "$audit" = "y" ]; then
    test=$(execute_audit "$location_id" "$org_id" "")
fi

if [ "$uninstall" = "y" ]; then
    test=$(execute_uninstall)
fi

IFS="$ORIGIFS"
exit 0
