#!/bin/bash

if [ "$(id -u)" != "0" ]; then
    echo "This script should be run by root or using sudo." >&2
    exit 1
fi

version="5.6.5"

ORIGIFS=$IFS
NEWLINEIFS=$(echo -en "\n\b");
IFS="$NEWLINEIFS";

advanced="n"
agentId=""
audit="n"
debug="n"
help="n"
install="n"
uninstall="n"
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
    echo "This powershell script is normally called from launchctl."
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
    echo ""
fi

execute_audit ()
{
    location_id="$1"
    org_id="$2"
    debugging="$3"
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
        echo "Attempting to download audit_macos.sh from $url/scripts/macos/download" > `tty`
        echo "And store it in $programPath/audit_macos.sh" > `tty`
        echo "" > `tty`
    fi
    test=$(execute_download "$url/scripts/macos/download" "$programPath/audit_macos.sh")
    if [ "$debug" = "y" ] && [ -f "$programPath/audit_macos.sh" ]; then
        echo "Audit script downloaded successfully." > `tty`
        echo "" > `tty`
    fi
    if [ ! -f "$programPath/audit_macos.sh" ]; then
        echo "Audit script not downloaded." >&2
        exit 1
    fi
    # Make the audit script executable
    `chmod 777 $programPath/audit_macos.sh`
    command="$programPath/audit_macos.sh"
    # Build the command
    # No need to set the URL here as we download from $url and 
    #        Open-AudIT will set it in the audit script for us
    if [ "$debugging" = "y" ]; then
        command="$command debugging=5"
    fi
    if [ "$location_id" = "y" ]; then
        command="$command location_id=$location_id"
    fi
    if [ "$org_id" = "y" ]; then
        command="$command org_id=$org_id"
    fi
    if [ "$debug" = "y" ]; then
        echo "Running: $command" > `tty`
        echo "" > `tty`
    fi
    # Run the audit
    if [ "$debug" = "y" ]; then
        eval $command > `tty`
    else
        eval $command
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
        eval $command > `tty`
    else
        eval $command
    fi
}

execute_download ()
{
    url="$1"
    if [ ! "$url" ]; then
        return
    fi
    file="$2"
    if [ ! "$file" ]; then
        return
    fi
    if [ "$debug" = "y" ]; then
        echo "Downloading: $url" > `tty`
    fi
    if [ ! -f  ]; then
        mkdir "$programPath"
    fi
    if [ "$debug" = "y" ]; then
        echo "Saving to: $file" > `tty`
    fi
    if [ "$debug" = "y" ]; then
        curl "$url" --output "$file" > `tty`
    else
        curl -s "$url" --output "$file"
    fi
}


execute_install ()
{
    if [ "$debug" = "y" ]; then
        echo "Installing into $programPath." > `tty`
    fi

    # Create the install directory if it doesn't already exist
    if [ ! -d "$programPath" ]; then
        test=$(mkdir "$programPath")
    fi
    if [ ! -d "$programPath" ]; then
        echo "ERROR - Could not create $programPath" >&2
        echo "$test" >&2
        exit 1
    fi
    if [ "$debug" = "y" ]; then
        echo "$programPath directory created." > `tty`
    fi
    # Create the downloads directory if it doesn't already exist
    if [ ! -d "$programPath/downloads" ]; then
        test=$(mkdir "$programPath/downloads")
    fi
    if [ ! -d "$programPath/downloads" ]; then
        echo "ERROR - Could not create $programPath/downloads" >&2
        echo "$test" >&2
        exit 1
    fi
    if [ "$debug" = "y" ]; then
        echo "$programPath/downloads directory created." > `tty`
    fi
    # Copy the agent into this directory
    test=$(cp "$scriptPath/agent.sh" "$programPath/agent.sh")
    if [ ! -f "$programPath/agent.sh" ]; then
        echo "ERROR - Could not copy $scriptPath/agent.sh to $programPath/agent.sh" >&2
        echo "$test" >&2
        exit 1
    fi
    if [ "$debug" = "y" ]; then
        echo "Agent copied." > `tty`
    fi

#     if [ "$debug" = "y" ]; then
#         echo "Install task into cron" > `tty`
#     fi
#     if [ -f /etc/cron.d/open-audit-agent ]; then
#         if [ "$debug" = "y" ]; then
#             echo "Open-AudIT Agent cron file exists, moving to /tmp/cron.d.open-audit." > `tty`
#             echo "If you have changed this file, you will need to update the new cron.d /etc/cron.d/open-audit-agent file." > `tty`
#         fi
#         mv /etc/cron.d/open-audit-agent /tmp/cron.d.open-audit-agent
#     fi

#     if [ ! -f /etc/cron.d/open-audit-agent ]; then
#         # Setup a new cron
#         minute=$(date +%M)
#         echo "# m h dom month dow user command
# # run the task checker every 13:01
# $minute 13 * * *   root    php /usr/local/open-audit/public/index.php tasks execute >/dev/null 2>&1" > /etc/cron.d/open-audit-agent
#     fi
}

execute_uninstall ()
{
    if [ "$debug" = "y" ]; then
        echo "Uninstalling Open-AudIT Agent version $version." > `tty`
    fi
    # Remove the cron
    # if [ -f /etc/cron.d/open-audit-agent ]; then
    #     test=$(rm /etc/cron.d/open-audit-agent)
    # fi
    # if [ -f /etc/cron.d/open-audit-agent ]; then
    #     echo "Could not remove dron file at /etc/cron.d/open-audit-agent, please do this manually." 2>&1
    #     echo "$test" 2>&1
    # else
    #     if [ "$debug" = "y" ]; then
    #         echo "Removed task."
    #     fi
    # fi
    # Remove the directory
    if [ -d "$programPath" ]; then
        test=$(rm -rf "$programPath")
    fi
    if [ -d "$programPath" ]; then
        echo "Could not delete '$programPath', please do this manually." >&2
        echo "$test" >&2
        exit 1
    fi
    echo "Open-AudIT Agent has been uninstalled." > `tty`
    echo
}

execute_update ()
{
    # Update the actual agent script
    test=$(execute_download "$url/agents/macos/download" "$programPath/agent.sh")
    if [ "$debug" = "y" ] && [ -f "$programPath/agent.sh" ]; then
        echo "Agent updated successfully." > `tty`
    fi
}

# This is also at the script end to catch a server response of uninstall
#     but we have it here so if it's passed in on the command line, just
#     do it without bothering to check-in with the Open-AudIT server.
if [ "$uninstall" = "y" ]; then
    test=$(execute_uninstall)
    exit 0
fi

# Populate all our local info - lots taken from audit_osx.sh
system_hostname=$(hostname | cut -d. -f1)
system_uuid=$(system_profiler SPHardwareDataType | grep "Hardware UUID:" | cut -d":" -f2 | sed 's/^ *//g')
system_serial=$(system_profiler SPHardwareDataType | grep 'Serial Number (system):' | cut -d':' -f2 | sed 's/^ *//g')
system_ip=""
for line in $(system_profiler SPNetworkDataType | grep "BSD Device Name: en" | cut -d":" -f2 | cut -d" " -f2); do
    system_ip=`ipconfig getifaddr $line`
    if [ -n "$system_ip" ]; then
        break
    fi
done
system_os_version=$(sw_vers | grep "ProductVersion:" | cut -d: -f2 | xargs)
system_os_name="MacOS $system_os_version"
system_os_family="Apple OSX"



postDetails="{\"version\":\"$version\",\"hostname\":\"$(json "$system_hostname")\",\"uuid\":\"$(json "$system_uuid")\",\"serial\":\"$(json "$system_serial")\",\"ip\":\"$(json "$system_ip")\",\"os_name\":\"$(json "$system_os_name")\",\"os_family\":\"$(json "$system_os_family")\"}"

if [ "$debug" = "y" ]; then
    echo "Sending:"
    echo "$postDetails"
    echo "to: $url/agents/execute"
    echo ""
fi

response=$(curl -s --header "Content-Type: application/json" --data "$postDetails" "$url/agents/execute")

if [ "$debug" = "y" ]; then
    echo "Received:"
    echo "$response"
    echo ""
fi

for line in $(echo $response); do
    # Audit is true
    if [ $(echo "$line" | grep audit) ]; then
        if [ $(echo "$line" | grep true) ]; then
            audit="y"
        fi
    fi

    # Download
    if [ $(echo "$line" | grep uninstall) ]; then
        if [ $(echo "$line" | grep true) ]; then
            uninstall="y"
        fi
    fi

    # Update
    if [ $(echo "$line" | grep update) ]; then
        if [ $(echo "$line" | grep true) ]; then
            update="y"
        fi
    fi

    # Uninstall
    if [ $(echo "$line" | grep uninstall) ]; then
        if [ $(echo "$line" | grep true) ]; then
            uninstall="y"
        fi
    fi
done


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
