'  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
'
'  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
'
'  This file is part of Open-AudIT.
'
'  Open-AudIT is free software: you can redistribute it and/or modify
'  it under the terms of the GNU Affero General Public License as published
'  by the Free Software Foundation, either version 3 of the License, or
'  (at your option) any later version.
'
'  Open-AudIT is distributed in the hope that it will be useful,
'  but WITHOUT ANY WARRANTY; without even the implied warranty of
'  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
'  GNU Affero General Public License for more details.
'
'  You should have received a copy of the GNU Affero General Public License
'  along with Open-AudIT (most likely in a file named LICENSE).
'  If not, see <http://www.gnu.org/licenses/>
'
'  For further information on Open-AudIT or for a license other than AGPL please see
'  www.opmantek.com or email contact@opmantek.com
'
' *****************************************************************************

' @package Open-AudIT
' @author Mark Unwin <marku@opmantek.com>
' 
' @version   3.2.2

' @copyright Copyright (c) 2014, Opmantek
' @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3

Option Explicit

dim log_entry, error_returned, error_description, exit_status, command, timestamp, exit_text, objExecObject, line, line_split, result_file, help

' TODO -
'   log each non responding IP - option

' debugging values
' 0 = no debug
' 1 = basic debug
' 2 = verbose debug

dim create_file : create_file = "y"
dim debugging : debugging = "2"
dim echo_output : echo_output = "y"
dim log_no_response : log_no_response = "n"
dim org_id : org_id = ""
dim submit_online : submit_online = "n"
dim subnet_range : subnet_range = ""
dim discovery_id : discovery_id = ""
dim syslog : syslog = "y"
dim url : url = "http://localhost/open-audit/index.php/input/discoveries"
dim objHTTP
dim hosts
dim hosts_in_subnet
dim host
dim mac_address : mac_address = ""
dim manufacturer : manufacturer = ""
dim description : description = ""
dim i
dim result : result = ""
dim host_is_up
dim snmp_status : snmp_status = "false"
dim ssh_status : ssh_status = "false"
dim wmi_status : wmi_status = "false"
dim nmap_ports
dim temp
dim port
dim program
dim script_timer : script_timer = Timer
dim version: version="3.2.2"

dim hosts_scanned : hosts_scanned = 0
dim host_timer : host_timer = 0

dim nmap_version : nmap_version = ""
dim nmap_path : nmap_path = ""
' nmap path on a default install is - C:\Program Files (x86)\Nmap\nmap.exe
' Only set the above if you have installed into a custom directory AND it is not on your users $path

dim db_log_ip : db_log_ip = "127.0.0.1"
dim db_log_message : db_log_message = ""
dim db_log_duration : db_log_duration = 0
dim db_log_status : db_log_status = ""
dim db_log_severity : db_log_severity = 6
dim db_log_output : db_log_output = ""
dim db_log_level : db_log_level = 5
dim db_log_command : db_log_command = ""

' new options for 2.3.2'
dim exclude_ip : exclude_ip = ""
dim exclude_tcp_ports : exclude_tcp_ports = ""
dim exclude_udp_ports : exclude_udp_ports = ""
dim filtered : filtered = ""
dim nmap_tcp_ports : nmap_tcp_ports = ""
dim nmap_udp_ports : nmap_udp_ports = ""
dim ping : ping = ""
dim service_version : service_version = ""
dim tcp_ports : tcp_ports = ""
dim timeout : timeout = ""
dim timing : timing = ""
dim udp_ports : udp_ports = ""
dim response_reason : response_reason = ""

dim ip_list : ip_list = ""
dim ips
dim ip

' below we take any command line arguements
' to override the variables above, simply include them on the command line like submit_online=n
' NOTE - argurments are case sensitive
dim objArgs, strArg, varArray
Set objArgs = WScript.Arguments
for each strArg in objArgs
    if instr(strArg, "=") then
        varArray = split(strArg, "=")
        select case varArray(0)

            case "create_file"
                create_file = varArray(1)

            case "debugging"
                debugging = varArray(1)

            case "discovery_id"
                discovery_id = varArray(1)

            case "echo_output"
                echo_output = varArray(1)

            case "exclude_ip"
                exclude_ip = varArray(1)

            case "filtered"
                filtered = varArray(1)

            case "help"
                help = varArray(1)

            case "log_no_response"
                log_no_response = varArray(1)

            case "nmap_tcp_ports"
                nmap_tcp_ports = varArray(1)

            case "nmap_udp_ports"
                nmap_udp_ports = varArray(1)

            case "org_id"
                org_id = varArray(1)

            case "ping"
                ping = varArray(1)

            case "service_version"
                service_version = varArray(1)

            case "submit_online"
                submit_online = varArray(1)

            case "subnet_range"
                subnet_range = varArray(1)

            case "syslog"
                syslog = varArray(1)

            case "tcp_ports"
                tcp_ports = varArray(1)

            case "timing"
                timing = varArray(1)

            case "udp_ports"
                udp_ports = varArray(1)

            case "url"
                url = varArray(1)

        end select
    else
        if (strArg = "/?" or strArg = "/help") then
            help = "y"
        end if
    end if
next

if (help = "y") then
    wscript.echo "------------------------------"
    wscript.echo "Open-AudIT Subnet Audit Script"
    wscript.echo "(c) Opmantek, 2014.           "
    wscript.echo "------------------------------"
    wscript.echo "This script should be used on a Windows based computer to discover hosts in a subnet."
    wscript.echo "It will run nmap against the target subnet and submit the result."
    wscript.echo "This script is designed to be called by the Open-AudIT web GUI, not run directly from the command line."
    wscript.echo ""
    wscript.echo "Valid command line options are below (items containing * are the defaults) and should take the format name=value (eg: debugging=1)."
    wscript.echo ""
    wscript.echo "  create_file"
    wscript.echo "     y - Create an XML file containing the result."
    wscript.echo "    *n - Do not create an XML result file."
    wscript.echo ""
    wscript.echo "  debugging"
    wscript.echo "     0 - No output."
    wscript.echo "     1 - Minimal Output."
    wscript.echo "    *2 - Verbose output."
    wscript.echo ""
    wscript.echo "  discovery_id"
    wscript.echo "     * - The Open-AudIT discovery id. This is populated by Open-AudIT when running this script from discovery."
    wscript.echo ""
    wscript.echo "  echo_output"
    wscript.echo "    *n - Do not echo the result to the screen."
    wscript.echo "     y - Echo the result to the screen."
    wscript.echo ""
    wscript.echo "  /? or help=y"
    wscript.echo "     y - Display this help output."
    wscript.echo "    *n - Do not display this output."
    wscript.echo ""
    wscript.echo "  log_no_response"
    wscript.echo "    *n - Do not submit a result if there is no device attached to the given ip address."
    wscript.echo "     y - Submit a result even if nothing is found."
    wscript.echo ""
    wscript.echo "  org_id"
    wscript.echo "        - The org_id (an integer) taken from Open-AudIT. If set all devices found will be associated to that Organisation."
    wscript.echo ""
    wscript.echo "  submit_online"
    wscript.echo "      *y - Submit the audit result to the Open-AudIT server."
    wscript.echo "       n - Don't submit the audit result."
    wscript.echo ""
    wscript.echo "  subnet_range"
    wscript.echo "      - The subnet in to audit."
    wscript.echo ""
    wscript.echo "  syslog"
    wscript.echo "    *y - Log the script details to the Open-AudIT log file."
    wscript.echo "     n - Do not log to the Open-AudIT log file."
    wscript.echo ""
    wscript.echo "  url"
    wscript.echo "    *http://localhost/open-audit/index.php/discovery/process_subnet - The http url of the Open-AudIT Server used to submit the result to."
    wscript.quit
end if

' leave the below settings
const HKEY_CLASSES_ROOT  = &H80000000
const HKEY_CURRENT_USER  = &H80000001
const HKEY_LOCAL_MACHINE = &H80000002
const HKEY_USERS         = &H80000003
const FOR_APPENDING      = 8
const ads_scope_subtree  = 2
dim strComputer : strComputer = "."
dim count : count = 0

dim system_timestamp : system_timestamp = Year(Now()) & "-" & Right("0" & Month(Now()),2) & "-" & Right("0" & Day(Now()),2) & " " & Right("0" & Hour(Now()),2) & ":" & Right("0" & Minute(Now()),2) & ":" & Right("0" & Second(Now()),2)

dim objWMIService : set objWMIService = GetObject("winmgmts:root\cimv2")
dim objWMIService2 : set objWMIService2 = GetObject("winmgmts:root\WMI")
dim objShell : set objShell = CreateObject("wscript.shell")
dim objFSO : set objFSO = CreateObject("Scripting.FileSystemObject")
dim wshNetwork : set wshNetwork = WScript.CreateObject( "WScript.Network" )
dim system_hostname : system_hostname = wshNetwork.ComputerName
dim user : user = wshNetwork.UserName
dim objlocalwmiservice : set objlocalwmiservice = getobject("winmgmts:root\cimv2")
dim colItems : set colitems = objlocalwmiservice.execquery("select * from win32_process",,48)
dim objitem, current_pid
for each objitem in colitems
    if instr (objitem.commandline, wscript.scriptname) <> 0 then
        current_pid = objitem.processid
    end if
next

' enumerate all the ip addresses so we can determine if we are running against localhost
dim local_net : local_net = ""
dim net_mac_address : net_mac_address = ""
set colItems = objWMIService.ExecQuery("Select * from Win32_NetworkAdapterConfiguration WHERE IPEnabled = True ",,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " local (Win32_NetworkAdapterConfiguration) 2" end if
for each objItem in colItems
    net_mac_address = objItem.MACAddress
    if net_mac_address > "" then
        for i = LBound(objItem.IPAddress) to UBound(objItem.IPAddress)
            local_net = local_net & " " & objItem.IPAddress(i) & " "
        next
    end if
next
local_net = local_net & " " & system_hostname & " "

if debugging > 0 then wscript.echo "Log Level: " & debugging & vbcrlf end if

db_log_status = "start"
db_log_message = "Discovery for " & subnet_range & " submitted for discovery " & discovery_id & " starting"
db_log()

if nmap_path = "" then
    if (instr(lcase(objShell.ExpandEnvironmentStrings( "PATH=%PATH%" )), "\nmap")) then
        ' nmap is installed, proceed.
        temp = split(objShell.ExpandEnvironmentStrings("PATH=%PATH%"), ";")
        dim test
        for each test in temp
            if instr(lcase(test),"nmap") then
                nmap_path = test & "\nmap.exe"
            end if
        next
    else
        'nmap not in path - check a couple of default folders.
        nmap_path = "c:\Program Files\Nmap\nmap.exe"
        if (objFSO.FileExists(nmap_path)) then
            ' found it
        else
            nmap_path = ""
        end if
        if (nmap_path = "") then
            nmap_path = "C:\Program Files (x86)\Nmap\nmap.exe"
            if (objFSO.FileExists(nmap_path)) then
                ' found it
            else
                nmap_path = ""
            end if
        end if
        if (nmap_path = "") then
            db_log_severity = 5
            db_log_status = "finish"
            db_log_message "Nmap binary not on path, aborting."
            db_log()
            wscript.quit 1
        end if
    end if
end if

exit_status = "n"
command = nmap_path & " --version"
execute_command()
do until objExecObject.StdOut.AtEndOfStream
    line = objExecObject.StdOut.ReadLine
    if instr(lcase(line), "nmap version") then
        temp = split(line)
        nmap_version = temp(2)
    end if
loop

db_log_severity = 7
db_log_status = ""
db_log_message = "Starting discovery for " & subnet_range
db_log()

db_log_message = "Discovery for " & subnet_range & " using Nmap version " & nmap_version & " at " & nmap_path
db_log()

if (ping = "n") then
    ping = "-Pn"
else
    ping = ""
end if

if (exclude_ip <> "") then
    exclude_ip = "--exclude " & exclude_ip
end if

if (timeout <> "") then
    timeout = "--host-timeout " & timeout
end if

if (timing <> "") then
    timing = "-T" & timing
else
    timing = "-T4"
end if

if (exclude_tcp_ports <> "") then
    exclude_tcp_ports = "--exclude-ports T:" & exclude_tcp_ports
end if

if (exclude_udp_ports <> "") then
    exclude_udp_ports = "--exclude-ports U:" & exclude_udp_ports
end if

if (nmap_tcp_ports <> "") then
    nmap_tcp_ports = "--top-ports " & nmap_tcp_ports
end if

if (nmap_udp_ports <> "") then
    nmap_udp_ports = "--top-ports " & nmap_udp_ports
end if

if (tcp_ports <> "") then
    tcp_ports = "-p T:" & tcp_ports
end if

if (udp_ports <> "") then
    udp_ports = "-p U:" & udp_ports
end if

if (service_version = "y") then
    service_version = "-sV"
else
    service_version = ""
end if


if debugging > "0" then
    wscript.echo "----------------------------"
    wscript.echo "Open-AudIT Discover Subnet script"
    wscript.echo "Version: " & version
    wscript.echo "----------------------------"
    wscript.echo "Create File:        " & create_file
    wscript.echo "Custom TCP Ports:   " & tcp_ports
    wscript.echo "Custom UDP Ports:   " & udp_ports
    wscript.echo "Discovery ID:       " & discovery_id
    wscript.echo "Exclude IPs:        " & exclude_ip
    wscript.echo "Excluded TCP Ports: " & exclude_tcp_ports
    wscript.echo "Excluded UDP Ports: " & exclude_udp_ports
    wscript.echo "Filtered as Open:   " & filtered
    wscript.echo "Log Level:          " & debugging
    wscript.echo "Nmap Binary:        " & nmap_path
    wscript.echo "Nmap Version:       " & nmap_version
    wscript.echo "PID                 " & current_pid
    wscript.echo "Ping:               " & ping
    wscript.echo "Service Version:    " & service_version
    wscript.echo "Submit Online:      " & submit_online
    wscript.echo "Subnet Range:       " & subnet_range
    wscript.echo "Timing:             " & timing
    wscript.echo "Top TCP Ports:      " & nmap_tcp_ports
    wscript.echo "Top UDP Ports:      " & nmap_udp_ports
    wscript.echo "URL:                " & url
    wscript.echo "----------------------------"
end if

exit_status = "y"
command = nmap_path & " -n -sL " & subnet_range
'command = nmap_path & " -n -sL " & subnet_range
execute_command()
do until objExecObject.StdOut.AtEndOfStream
    line = objExecObject.StdOut.ReadLine
    if (instr(lcase(line), "nmap done")) then
        line_split = split(line)
        hosts_in_subnet = line_split(2)
    end if
loop
db_log_message = "IPs in subnet: " & hosts_in_subnet
db_log_command = command
db_log()


command = nmap_path & " -n -sL " & exclude_ip & " " & subnet_range
'command = nmap_path & " -n -sL --exclude '" & exclude_ip & "' " & subnet_range
execute_command()
do until objExecObject.StdOut.AtEndOfStream
    line = objExecObject.StdOut.ReadLine
    if (instr(lcase(line), "nmap done")) then
        line_split = split(line)
        hosts_in_subnet = line_split(2)
    end if
loop
db_log_message = "IPs after exclusions in subnet: " & hosts_in_subnet
db_log_command = command
db_log()

if (ping <> "") then
    ' Scan these IPs, ignoring their ping (or not) response
    command = nmap_path & " -n -sL " & exclude_ip & " " & subnet_range
    execute_command()
    do until objExecObject.StdOut.AtEndOfStream
        line = objExecObject.StdOut.ReadLine
        if (instr(lcase(line), "scan report for")) then
            line_split = split(line)
            hosts = hosts & " " & line_split(4)
            count = count + 1
        end if
    loop
    db_log_message = "IPs after ignoring ping in subnet (to be scanned): " & count
    db_log_command = command
    hosts_in_subnet = count
    db_log()
else
    ' Run a scan on all IPs and return only those responding to an Nmap ping
    command = nmap_path & " -n -oG - -sP " & exclude_ip & " " & subnet_range
    db_log_command = command
    execute_command()
    do until objExecObject.StdOut.AtEndOfStream
        line = objExecObject.StdOut.ReadLine
        if (instr(lcase(line), "host:")) then
            line_split = split(line)
            hosts = hosts & " " & line_split(1)
            count = count + 1
        end if
    loop
    db_log_message = "IPs responding to Nmap ping in subnet (to be scanned): " & count
    hosts_in_subnet = count
    db_log()

    command = nmap_path & " -n -sL " & exclude_ip & " " & subnet_range
    execute_command()
    do until objExecObject.StdOut.AtEndOfStream
        line = objExecObject.StdOut.ReadLine
        if (instr(lcase(line), "scan report for")) then
            line_split = split(line)
            ip_list = ip_list & " " & line_split(4)
        end if
    loop
    ips = split(trim(ip_list))
end if

hosts = split(trim(hosts))
db_log_command = ""
' In the case of only scnning devices responding to an Nmap ping,
'    send a log line that this IP didn't respond
dim response : response = ""
if (ip_list <> "") then
    for each ip in ips
        response = ""
        for each host in hosts
            if (host = ip) then
                response = "true"
            end if
        next
        if (response = "") then
            if debugging > 1 then 
                wscript.echo "IP " & ip & " not responding, ignoring."
            end if
            db_log_status = ""
            db_log_severity = 6
            db_log_message = "IP " & ip & " not responding, ignoring."
            db_log_output = ""
            db_log_ip = ip
            db_log()
            db_log_severity = 7
        end if
    next
end if



for each host in hosts
    hosts_scanned = hosts_scanned + 1
    db_log_status = ""
    if debugging > "0" then
        wscript.echo "----------------------------"
        wscript.echo "----------------------------"
        wscript.echo "Scanning Host: " & host
    end if
    db_log_duration = 0
    host_timer = Timer

    mac_address = ""
    manufacturer = ""
    description = ""
    result = ""
    snmp_status = "false"
    ssh_status = "false"
    wmi_status = "false"
    exit_status = "y"
    host_is_up = "false"
    response_reason = ""
    if ping = "" then
        response_reason = "ping reply"
    end if


    nmap_ports = ""
    db_log_severity = 7
    db_log_level = 7
    db_log_ip = host
    db_log_message = "Scanning Host: " & host
    db_log_command = ""
    db_log()


    if (nmap_tcp_ports <> "") then
        host_timer = Timer
        command = nmap_path & " -n " & timing & " " & ping & " -sS " & service_version & " " & exclude_ip & " " & exclude_tcp_ports & " " & nmap_tcp_ports & " " & timeout & " " & host & " :: Top TCP Ports"
        db_log_message = "Nmap Command"
        db_log_severity = 7
        db_log_level = 7
        db_log_command = command
        execute_command()
        do until objExecObject.Status = 0
            WScript.Sleep 100
        loop
        db_log_duration = Timer - host_timer
        db_log()
        do until objExecObject.StdOut.AtEndOfStream
            db_log_command = command
            line = objExecObject.StdOut.ReadLine
            check_output()
        loop
    end if

    if (nmap_udp_ports <> "") then
        host_timer = Timer
        command = nmap_path & " -n " & timing & " " & ping & " -sU " & service_version & " " & exclude_ip & " " & exclude_udp_ports & " " & nmap_udp_ports & " " & timeout & " " & host & " :: Top UDP Ports"
        db_log_message = "Nmap Command"
        db_log_severity = 7
        db_log_level = 7
        db_log_command = command
        execute_command()
        do until objExecObject.Status = 0
            WScript.Sleep 100
        loop
        db_log_duration = Timer - host_timer
        db_log()
        do until objExecObject.StdOut.AtEndOfStream
            db_log_command = command
            line = objExecObject.StdOut.ReadLine
            check_output()
        loop
    end if

    if (tcp_ports <> "") then
        host_timer = Timer
        command = nmap_path & " -n " & timing & " " & ping & " -sS " & service_version & " " & exclude_ip & " " & exclude_tcp_ports & " " & tcp_ports & " " & timeout & " " & host & " :: Custom TCP Ports"
        db_log_message = "Nmap Command"
        db_log_severity = 7
        db_log_level = 7
        db_log_command = command
        execute_command()
        do until objExecObject.Status = 0
            WScript.Sleep 100
        loop
        db_log_duration = Timer - host_timer
        db_log()
        do until objExecObject.StdOut.AtEndOfStream
            db_log_command = command
            line = objExecObject.StdOut.ReadLine
            check_output()
        loop
    end if

    if (udp_ports <> "") then
        host_timer = Timer
        command = nmap_path & " -n " & timing & " " & ping & " -sU " & service_version & " " & exclude_ip & " " & exclude_udp_ports & " " & udp_ports & " " & timeout & " " & host & " :: Custom UDP Ports"
        db_log_severity = 7
        db_log_level = 7
        db_log_command = command
        execute_command()
        do until objExecObject.Status = 0
            WScript.Sleep 100
        loop
        db_log_duration = Timer - host_timer
        db_log()
        do until objExecObject.StdOut.AtEndOfStream
            db_log_command = command
            line = objExecObject.StdOut.ReadLine
            check_output()
        loop
    end if

    ' special case of determining WMI on localhost on Windows
    if (instr(local_net, host & " ") > 0) then
        wmi_status = "true"
        db_log_message = "Scanning localhost, so setting WMI status to true"
        db_log_output = ""
        db_log()
    end if

    if host_is_up = "true" or ping = "" then
        if len(nmap_ports) > 0 then
            nmap_ports = Right(nmap_ports,Len(nmap_ports)-1)
        else
            db_log_message = "No detected ports, but device is up for IP: " & host
            db_log_output = ""
            db_log()
            if debugging > "0" then
                wscript.echo "No detected ports, but device is up for IP: " & host
            end if
        end if
        result =          " <device>" & vbcrlf
        result = result & "     <subnet_range><![CDATA[" & subnet_range & "]]></subnet_range>" & vbcrlf
        result = result & "     <ip><![CDATA[" & host & "]]></ip>" & vbcrlf
        result = result & "     <mac_address><![CDATA[" & mac_address & "]]></mac_address>" & vbcrlf
        result = result & "     <manufacturer></manufacturer>" & vbcrlf
        result = result & "     <description></description>" & vbcrlf
        result = result & "     <org_id><![CDATA[" & org_id & "]]></org_id>" & vbcrlf
        result = result & "     <snmp_status><![CDATA[" & snmp_status & "]]></snmp_status>" & vbcrlf
        result = result & "     <ssh_status><![CDATA[" & ssh_status & "]]></ssh_status>" & vbcrlf
        result = result & "     <wmi_status><![CDATA[" & wmi_status & "]]></wmi_status>" & vbcrlf
        result = result & "     <discovery_id><![CDATA[" & discovery_id & "]]></discovery_id>" & vbcrlf
        if debugging > 0 then
            result = result & "     <debug>true</debug>" & vbcrlf
        else
            result = result & "     <debug>false</debug>" & vbcrlf
        end if
        result = result & "     <nmap_ports><![CDATA[" & nmap_ports & "]]></nmap_ports>" & vbcrlf
        result = result & " </device>" & vbcrlf
        result_file = result_file & result

        db_log_duration = Timer - host_timer
        if submit_online = "y" then
            if ping = "" and response_reason = "" then
                response_reason = "ping response"
            end if
            if debugging > 0 then
                wscript.echo "IP " & host & " responding, " & response_reason & ", adding to device list. SSH Status: " & ssh_status & ", WMI Status: " & wmi_status & ", SNMP Status: " & snmp_status & "."
            end if
            db_log_status = "(" & hosts_scanned & " of " & hosts_in_subnet & ")"
            db_log_severity = 6
            db_log_message = "IP " & host & " responding, " & response_reason & ", adding to device list. SSH Status: " & ssh_status & ", WMI Status: " & wmi_status & ", SNMP Status: " & snmp_status & "."
            db_log_output = ""
            db_log_command = url
            db_log()
            db_log_severity = 7
            result = "<devices>" & vbcrlf & result & "</devices>"
            Err.clear
            error_returned = 0
            on error resume next
            Set objHTTP = WScript.CreateObject("MSXML2.ServerXMLHTTP.3.0")
            objHTTP.setTimeouts 5000, 5000, 5000, 120000
            objHTTP.SetOption 2, 13056  ' Ignore all SSL errors
            'objHTTP.Open "POST", url, True ' do not wait for a respone before continuing
            ' 3.0.0 seems to require us to wait for a response
            objHTTP.Open "POST", url, False
            error_returned = Err.Number
            error_description = Err.Description
            on error goto 0
            if error_returned <> 0 then
                if debugging > 0 then
                    wscript.echo "Cannot open URL: " & url
                    wscript.echo "Error Returned: " & error_returned
                    wscript.echo "Error Description: " & error_description
                    wscript.echo "Cannot submit online as requested - ABORTING."
                end if
                db_log_message "Error when opening URL to submit"
                db_log_status = "fail"
                db_log_command = url
                db_log_severity = 3
                db_log_output = error_description
                db_log()
                wscript.exit 1
            end if
            on error resume next
            objHTTP.setRequestHeader "Content-Type","application/x-www-form-urlencoded"
            objHTTP.Send "data=" + result + vbcrlf
            error_returned = Err.Number
            error_description = Err.Description
            on error goto 0
            db_log_ip = host
            if (error_returned <> 0 or objHTTP.responseText <> "") then
                db_log_message = "IP " & host & " had an error when sending data to URL to submit. " & error_returned & " Discovery script continuing to next IP."
                db_log_status = "fail"
                db_log_command = "Error Description: " & error_description & " URL: " & url
                db_log_severity = 3
                db_log_output = "Status: " & objHTTP.Status & " Response: " & objHTTP.responseText
            else
                db_log_message = "IP " & host & " has successfully been sent to the server. Discovery script continuing to next IP."
                db_log_status = "success"
                db_log_command = "Status: " & objHTTP.Status & " URL: " & url
                db_log_severity = 7
                db_log_output = "Response: " & objHTTP.responseText
            end if
            db_log()
        else
            if debugging > 0 then
                wscript.echo "IP " & host & " responding."
            end if
        end if ' submit_online
    else
        if debugging > 0 then 
            wscript.echo "IP " & host & " not responding, ignoring."
        end if
        db_log_status = "(" & hosts_scanned & " of " & hosts_in_subnet & ")"
        db_log_severity = 6
        db_log_message = "IP " & host & " not responding, ignoring."
        db_log_output = ""
        db_log()
        db_log_severity = 7
    end if ' host_is_up'
next
result =          " <device>" & vbcrlf
result = result & "     <subnet_range><![CDATA[" & subnet_range & "]]></subnet_range>" & vbcrlf
result = result & "     <discovery_id><![CDATA[" & discovery_id & "]]></discovery_id>" & vbcrlf
result = result & "     <complete>y</complete>" & vbcrlf
result = result & " </device>"

result_file = result_file & result
result_file = "<devices>" & vbcrlf & result_file & vbcrlf & "</devices>"


if (echo_output = "y") then
    wscript.echo result_file
end if

if create_file = "y" then
    if debugging > "0" then wscript.echo "Creating output File" end if
    ' Write the results to a file
    dim file_timestamp
    file_timestamp = Right("0" & Year(Now()),2) & _
                    Right("0" & Month(Now()),2) & _
                    Right("0" & Day(Now()),2) & _
                    Right("0" & Hour(Now()),2) & _
                    Right("0" & Minute(Now()),2) & _
                    Right("0" & Second(Now()),2)
    dim OutputFile : OutputFile = "subnet-" & subnet_range & "-" & file_timestamp & ".xml"
    OutputFile = replace(OutputFile, "/", "-")
    if debugging > "0" then wscript.echo "Output file: " & OutputFile end if
    Err.clear
    on error resume next
        dim objFileToWrite
        Set objFileToWrite = CreateObject("Scripting.FileSystemObject").OpenTextFile(OutputFile,2,true)
        objFileToWrite.WriteLine(result_file)
        objFileToWrite.Close
        Set objFileToWrite = Nothing
        error_returned = Err.Number
        error_description = Err.Description
    on error goto 0
    if (error_returned <> 0) then
        if debugging > "0" then wscript.echo "Failed to create output file named " & OutputFile & " for " & subnet_range & " submitted for discovery " & discovery_id
        if debugging > "0" then wscript.echo "Problem writing to file." end if
        if debugging > "0" then wscript.echo "Error Number:" & error_returned end if
        if debugging > "0" then wscript.echo "Error Description:" & error_description end if
    else
        if debugging > "0" then wscript.echo "Output file named " & OutputFile & " created for " & subnet_range & " submitted for discovery " & discovery_id
    end if
end if

if submit_online = "y" then
    result = "<devices>" & vbcrlf & result & "</devices>"
    Err.clear
    on error resume next
        Set objHTTP = WScript.CreateObject("MSXML2.ServerXMLHTTP.3.0")
        objHTTP.setTimeouts 5000, 5000, 5000, 120000
        objHTTP.SetOption 2, 13056  ' Ignore all SSL errors
        objHTTP.Open "POST", url, FALSE ' wait for the output
        objHTTP.setRequestHeader "Content-Type","application/x-www-form-urlencoded"
        objHTTP.Send "data=" + result + vbcrlf
        while objHTTP.readyState <> 4
            objHTTP.waitForResponse 5
        wend
        error_returned = objHTTP.Status
    on error goto 0
    if (error_returned <> 200) then
        if debugging > "0" then
            wscript.echo "Result complete send failed for " & subnet_range & " submitted for discovery " & discovery_id
        end if
    else
        if debugging > "0" then
            wscript.echo "Result complete send succeeded for " & subnet_range & " submitted for discovery " & discovery_id
        end if
    end if
    if (echo_output = "y" and debugging > "0") then
        wscript.echo objHTTP.ResponseText
    end if
end if

db_log_ip = "127.0.0.1"
db_log_message = "Completed discovery, scanned " & hosts_scanned & " IP addresses"
db_log_duration = Timer - script_timer
db_log_status = "finish"
db_log()


function get_timestamp()
    get_timestamp = monthname(month(now()), True) & " " & Right("0" & Day(Now()),2) & " " & Right("0" & Hour(Now()),2) & ":" & Right("0" & Minute(Now()),2) & ":" & Right("0" & Second(Now()),2)
end function

function db_log()
    ' db_log_message (string),
    ' db_log_duration (seconds),
    ' db_log_status (1 of 256)
    ' db_log_severity (1-7)
    ' db_log_output (the command output)
    ' db_log_level (1-5)
    ' db_log_command (the actual command that was executed)
    ' db_log_ip is usually the host, but in some cases 127.0.0.1
    timestamp = get_timestamp()
    if (db_log_status = "") then
        db_log_status = "notice"
    end if
    if (db_log_ip = "") then
        db_log_ip = "127.0.0.1"
    end if
    on error resume next
        Set objHTTP = WScript.CreateObject("MSXML2.ServerXMLHTTP.3.0")
        objHTTP.setTimeouts 5000, 5000, 5000, 120000
        objHTTP.SetOption 2, 13056  ' Ignore all SSL errors
        objHTTP.Open "POST", "http://localhost/open-audit/index.php/input/logs", FALSE
        objHTTP.setRequestHeader "Content-Type","application/x-www-form-urlencoded"
        objHTTP.Send "type=discovery&timestamp=" & timestamp & "&discovery_id=" & discovery_id & "&severity=" & db_log_severity & "&pid=" & current_pid & "&ip=" & db_log_ip & "&file=discover_subnet.vbs&message=" & db_log_message & "&command_time_to_execute=" & db_log_duration & "&command_status=" & db_log_status & "&command_output=" & db_log_output & "&command=" & db_log_command
    on error goto 0
    if (debugging > "0") then
        wscript.echo "Log Status: " & db_log_status
        wscript.echo "Log Command: " & db_log_command
        wscript.echo "Log Message: " & db_log_message
        wscript.echo "Log Output: " & db_log_output
        wscript.echo ""
    end if
    db_log_message = ""
    db_log_command = ""
    db_log_output = ""
end function

function execute_command()
    if debugging > 1 then wscript.echo "Executing: " & command end if
    on error resume next
        set objExecObject = objShell.Exec(command)
        do until objExecObject.Status = 0
            WScript.Sleep 1000
        loop
        error_returned = Err.Number
        error_description = Err.Description
    on error goto 0
    if (error_returned <> 0) then
        if debugging > "0" then wscript.echo "Discovery command failed (" & command & "). Error Number: " & error_returned & " Error Description: " & error_description end if
        if exit_status = "y" then
            db_log_message = "Discovery command failed (Aborting script)."
        else
            db_log_message = "Discovery command failed."
        end if
        db_log_duration = 0
        db_log_severity = 4
        db_log_output = error_description
        db_log_level = 5
        db_log_command = command
        db_log()
        Err.Clear
        if exit_status = "y" then
            wscript.quit 1
        end if
    end if
end function


function check_output()
    db_log_duration = ""
    dim line_temp
    temp = line
    do while InStr(1, temp, "  ")
        temp = Replace(temp, "  ", " ")
    loop

    if debugging > "1" then
        wscript.echo "Nmap Line Output: " & temp
    end if

    if instr(temp, "/tcp open ") then
        host_is_up = "true"
        line_temp = split(temp, " ")
        port = line_temp(0)
        program = line_temp(2)
        nmap_ports = nmap_ports & "," & port & "/" & program
        if response_reason = "" then
            response_reason = "received open TCP port (" & port & ", " & program & ")"
        end if
        if (port = "22/tcp") then
            ssh_status = "true"
            db_log_message = "Host " & host & " is up, received ssh (TCP port 22 open) response"
        elseif (port = "135/tcp") then
            wmi_status = "true"
            db_log_message = "Host " & host & " is up, received wmi (TCP port 135 open) response"
        else
            db_log_message = "Host " & host & " is up, received port " & port & " response"
        end if
        db_log_output = line
        db_log()
    end if

    if instr(temp, "/tcp open|filtered") and (filtered = "y") then
        host_is_up = "true"
        line_temp = split(temp, " ")
        port = line_temp(0)
        program = line_temp(2)
        nmap_ports = nmap_ports & "," & port & "/" & program
        if response_reason = "" then
            response_reason = "received filtered TCP port (" & port & ", " & program & ")"
        end if
        if (port = "22/tcp") then
            ssh_status = "true"
            db_log_message = "Host " & host & " is up, received open|filtered ssh (TCP port 22 open|filtered) response"
        elseif (port = "135/tcp") then
            wmi_status = "true"
            db_log_message = "Host " & host & " is up, received open|filtered wmi (TCP port 135 open|filtered) response"
        else
            db_log_message = "Host " & host & " is up, received open|filtered port " & port & " response"
        end if
        db_log_output = line
        db_log()
    end if

    if instr(temp, "/udp open ") then
        host_is_up = "true"
        line_temp = split(temp, " ")
        port = line_temp(0)
        program = line_temp(2)
        nmap_ports = nmap_ports & "," & port & "/" & program
        if response_reason = "" then
            response_reason = "received open UDP port (" & port & ", " & program & ")"
        end if
        if (port = "161/udp") then
            snmp_status = "true"
            db_log_message = "Host " & host & " is up, received snmp (UDP port 161 open) response"
        else
            db_log_message = "Host " & host & " is up, received UDP port $port open response"
        end if
        db_log_output = line
        db_log()
    end if

    if instr(temp, "/udp open|filtered") and (filtered = "y") then
        host_is_up = "true"
        line_temp = split(temp, " ")
        port = line_temp(0)
        program = line_temp(2)
        nmap_ports = nmap_ports & "," & port & "/" & program
        if response_reason = "" then
            response_reason = "received filtered UDP port (" & port & ", " & program & ")"
        end if
        if (port = "161/udp") then
            snmp_status = "true"
            db_log_message = "Host " & host & " is up, received open|filtered snmp (UDP port 161 open|filtered) response"
        else
            db_log_message = "Host " & host & " is up, received open|filtered UDP port $port open|filtered response"
        end if
        db_log_output = line
        db_log()
    end if

    if instr(lcase(temp), "Host " & host & " is up, received arp-response") then
        host_is_up = "true"
        if response_reason = "" then
            response_reason = "arp response received"
        end if
        db_log_message = "Host " & host & " is up, received arp-response"
        db_log_output = line
        db_log()
    end if

    if instr(lcase(temp), "mac address:") then
        host_is_up = "true"
        if response_reason = "" then
            response_reason = "MAC address retrieved (" & mac_address & ")"
        end if
        i = split(temp, " ")
        mac_address = i(2)
        manufacturer = i(3)
        i = ""
        i = split(line, "(")
        manufacturer = replace(i(1), ")", "")
        manufacturer = trim(manufacturer)
        db_log_message = "Host " & host & " is up, received arp-response from " & mac_address
        db_log_output = line
        db_log()
    end if

    if (instr(lcase(temp), "Nmap done: 1 IP address (1 host up)") and ping = "") then
        host_is_up = "true"
        if response_reason = "" then
            response_reason = "ping reply"
        end if
        db_log_message = "Host " & host & " is up, received Nmap ping response"
        db_log_output = line
        db_log()
    end if

    if (instr(lcase(temp), "due to host timeout") and ping = "") then
        host_is_up = "true"
        if response_reason = "" then
            response_reason = "host responded but timed out"
        end if
        db_log_message = "Host " & host & " timed out. Exceeded " & timeout & " seconds."
        db_log_output = line
        db_log()
    end if

end function