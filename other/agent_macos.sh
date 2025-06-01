#!/bin/sh

version="5.6.5"

O=$IFS
IFS=$'\n'


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
    echo "----------------------------"
    echo ""
fi

execute_audit ()
{
    location_id="$1"
    org_id="$2"
    debugging="$3"

    if [ "$debug" = "y" ]; then
        echo "Auditing"
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
        echo "Attempting to download audit_macos.sh from ${url}scripts/macos/download"
        echo "And store it in $programPath/audit_macos.sh"
        echo ""
    fi

    execute_download "${url}scripts/macos/download" "$programPath/audit_macos.sh"
    if [ "$debug" = "y" ] && [ -f "$programPath/audit_macos.sh" ]; then
        echo "Audit script downloaded successfully."
        echo ""
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
    if [ "$location_id" ]; then
        command="$command location_id=$location_id"
    fi
    if [ "$org_id" ]; then
        command="$command org_id=$org_id"
    fi
    if [ "$debug" = "y" ]; then
        echo "Running: $command"
        echo ""
    fi

    # Run the audit
    if [ "$debug" = "y" ]; then
        eval $command
        echo "Audit complete."
        echo "---------------"
        echo ""
    else
        eval $command > /dev/null
    fi
}

execute_command ()
{
    command="$1"
    if [ "$debug" = "y" ]; then
        echo "Running: $command"
        echo ""
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
        echo "Downloading: $this_url"
    fi
    if [ ! -f  ]; then
        mkdir "$programPath"
    fi
    if [ "$debug" = "y" ]; then
        echo "Saving to: $file"
    fi
    curl -s "$this_url" --output "$file"
}


execute_install ()
{
    # Only root
    if [ "$(id -u)" -ne 0 ]; then
        echo "This script should be run by root or using sudo, exiting." >&2
        exit 1
    fi

    if [ -d "$programPath" ]; then
        echo "ERROR - $programPath exists, not installing." >&2
        return;
    fi

    if [ "$debug" = "y" ]; then
        echo "Installing into ${programPath}"
    fi

    # Create the install directory if it doesn't already exist
    if [ ! -d "${programPath}" ]; then
        if [ "$debug" = "y" ]; then
            echo "Creating ${programPath}"
        fi
        test=$(mkdir "${programPath}")
    fi
    if [ ! -d "${programPath}" ]; then
        echo "ERROR - Could not create ${programPath}" >&2
        echo "$test" >&2
        exit 1
    fi

    # Create the downloads directory if it doesn't already exist
    if [ ! -d "${programPath}/downloads" ]; then
        if [ "$debug" = "y" ]; then
            echo "Creating ${programPath}/downloads"
        fi
        test=$(mkdir "${programPath}/downloads")
    fi
    if [ ! -d "${programPath}/downloads" ]; then
        echo "ERROR - Could not create ${programPath}/downloads" >&2
        echo "$test" >&2
        exit 1
    fi

    # Copy the agent into this directory
    if [ ! -f "$scriptPath/agent.sh" ]; then
        path="${url}agents/macos/download"
        if [ "$agentId" ]; then
            path="${url}agents/${agentId}/download/macos"
        fi
        if [ "$debug" = "y" ]; then
            echo "Downloading agent from ${path} to ${programPath}/agent.sh"
        fi
        execute_download "${path}" "${programPath}/agent.sh"
        if [ ! -f "$programPath/agent.sh" ]; then
            echo "ERROR - Could not download agent from ${path} to ${programPath}/agent.sh" >&2
            echo "$test" >&2
            exit 1
        fi
    else
        if [ "$debug" = "y" ]; then
            echo "Copying agent from ${scriptPath}/agent.sh to ${programPath}/agent.sh"
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
        echo "Creating crontab entry"
    fi
    minute=$(date +%M)
    echo "

# m h dom month dow user command
# run the Open-AudIT Agent at 13:$minute every day
$minute 13 * * *   root    /usr/local/Open-AudIT-Agent/agent.sh >/dev/null 2>&1" > /etc/crontab

    if [ "$debug" = "y" ]; then
        echo "Agent copied."
        echo "Install complete."
        echo "-----------------"
        echo ""
    fi

    #     launch_file="<?xml version=\"1.0\" encoding=\"UTF-8\"?>
    # <!DOCTYPE plist PUBLIC \"-//Apple//DTD PLIST 1.0//EN\" \"http://www.apple.com/DTDs/PropertyList-1.0.dtd\">
    # <plist version=\"1.0\">
    # <dict>
    #     <key>Label</key>
    #     <string>com.firstwave.open-audit-agent</string>

    #     <key>ProgramArguments</key>
    #     <array>
    #         <string>/usr/local/Open-AudIT-Agent/agent.sh</string>
    #     </array>

    #     <key>Nice</key>
    #     <integer>1</integer>

    #     <key>Minute</key>
    #     <integer>${minute}</integer>

    #     <key>Hour</key>
    #     <integer>14</integer>


    #     <key>StandardErrorPath</key>
    #     <string>/tmp/Open-AudIT-Agent.err</string>

    #     <key>StandardOutPath</key>
    #     <string>/tmp/Open-AudIT-Agent.out</string>
    # </dict>
    # </plist>"

    # echo "${launchfile}" >> "/Library/LaunchDaemons/com.firstwave.open-audit-agent.plist"
    # $(xattr -d com.apple.provenance /Library/LaunchDaemons/com.firstwave.open-audit-agent.plist)
    # $(launchctl enable system/com.firstwave.open-audit-agent.plist)
    # $(launchctl bootstrap system /Library/LaunchDaemons/com.firstwave.open-audit-agent.plist)

    # cd /Library/LaunchDaemons
    # launchctl print-disabled system
    # launchctl print system/com.firstwave.open-audit-agent


    # launchctl enable system/com.firstwave.open-audit-agent
    # launchctl load /Library/LaunchDaemons/com.firstwave.open-audit-agent.plist
    # launchctl kickstart -kp system/com.firstwave.open-audit-agent
}

execute_uninstall ()
{
    # Only root
    if [ "$(id -u)" != "0" ]; then
        echo "This script should be run by root or using sudo, exiting." >&2
        exit 1
    fi
    if [ "$debug" = "y" ]; then
        echo "Uninstalling Open-AudIT Agent version ${version}"
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
    if [ -f "/etc/crontab" ]; then
        grep -v "Open-AudIT" /etc/crontab > tmpfile && mv tmpfile /etc/crontab
    fi
    if [ "$debug" = "y" ]; then
        echo "Uninstall complete."
        echo "-----------------"
        echo ""
    fi
}

execute_update ()
{
    if [ "$debug" = "y" ]; then
        echo "Updating"
    fi
    # Update the actual agent script
    test=$(execute_download "${url}agents/macos/download" "$programPath/agent.sh")
    if [ "$debug" = "y" ] && [ -f "$programPath/agent.sh" ]; then
        echo "Agent updated successfully."
        echo "Update complete."
        echo "----------------"
        echo ""
    fi
}

# This is also at the script end to catch a server response of uninstall
#     but we have it here so if it's passed in on the command line, just
#     do it without bothering to check-in with the Open-AudIT server.
if [ "$uninstall" = "y" ]; then
    # test=$(execute_uninstall)
    execute_uninstall
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


if [ "$agentId" ]; then
    postDetails="{\"version\":\"$version\",\"hostname\":\"$(json "$system_hostname")\",\"uuid\":\"$(json "$system_uuid")\",\"serial\":\"$(json "$system_serial")\",\"ip\":\"$(json "$system_ip")\",\"os_name\":\"$(json "$system_os_name")\",\"os_family\":\"$(json "$system_os_family")\",\"agentId\":\"$agentId\"}"
else
    postDetails="{\"version\":\"$version\",\"hostname\":\"$(json "$system_hostname")\",\"uuid\":\"$(json "$system_uuid")\",\"serial\":\"$(json "$system_serial")\",\"ip\":\"$(json "$system_ip")\",\"os_name\":\"$(json "$system_os_name")\",\"os_family\":\"$(json "$system_os_family")\"}"
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

IFS=$'\t'

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
    execute_install
fi

if [ "$update" = "y" ]; then
    execute_update
fi

if [ "$audit" = "y" ]; then
    execute_audit "$location_id" "$org_id" ""
fi

if [ "$uninstall" = "y" ]; then
    execute_uninstall
fi

IFS=$O
exit 0
