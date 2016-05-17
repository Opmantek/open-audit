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
' @version 1.12.6
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
dim subnet_timestamp : subnet_timestamp = ""
dim syslog : syslog = "y"
dim url : url = "http://localhost/open-audit/index.php/discovery/process_subnet"
dim objHTTP
dim sequential : sequential = "y"
dim os_scan : os_scan = "n"
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

            case "echo_output"
                echo_output = varArray(1)

            case "help"
                help = varArray(1)

            case "log_no_response"
                log_no_response = varArray(1)

            case "os_scan"
                os_scan = varArray(1)

            case "org_id"
                org_id = varArray(1)

            case "submit_online"
                submit_online = varArray(1)

            case "subnet_range"
                subnet_range = varArray(1)

            case "subnet_timestamp"
                subnet_timestamp = varArray(1)

            case "syslog"
                syslog = varArray(1)

            case "url"
                url = varArray(1)

            case "sequential"
                sequential = varArray(1)

        end select
    else
        if (strArg = "/?" or strArg = "/help") then
            help = "y"
        end if
    end if
next

if ( os_scan = "y" ) then
    os_scan = "-O"
else
    os_scan = ""
end if

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
    wscript.echo "  os_scan"
    wscript.echo "    *n - Do not use the -O Nmap flag when scanning devices."
    wscript.echo "     y - Use -O (will slow down scan and requires SUID be set on the Nmap binary."
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
    wscript.echo "  sequential"
    wscript.echo "      *n - When we run this script, post each device result and wait for a response before continuing to the next device."
    wscript.echo "       Y - Post each device result and continue on processing the next device without waiting for a response from the Open-AudIT server."
    wscript.echo ""
    wscript.echo "  submit_online"
    wscript.echo "      *y - Submit the audit result to the Open-AudIT server."
    wscript.echo "       n - Don't submit the audit result."
    wscript.echo ""
    wscript.echo "  subnet_range"
    wscript.echo "      - The subnet in to audit."
    wscript.echo ""
    wscript.echo "  subnet_timestamp"
    wscript.echo "       - Set by the web GUI. Not used on the command line."
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

dim nmap_path : nmap_path = ""
if (instr(lcase(objShell.ExpandEnvironmentStrings( "PATH=%PATH%" )), "\nmap")) then
    ' nmap is installed, proceed.
    nmap_path = "nmap"
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
        log_entry = "Nmap not found, aborting."
        write_log()
        wscript.quit 1
    end if
end if



log_entry = "Discovery for " & subnet_range & " submitted at " & subnet_timestamp & " starting"
write_log()

if debugging > "0" then wscript.echo "My PID: " & current_pid
if debugging > "0" then wscript.echo "Scanning Subnet: " & subnet_range
if debugging > "0" then wscript.echo "URL: " & url

exit_status = "y"

command = nmap_path & " -n -sL " & subnet_range
execute_command()
Do Until objExecObject.StdOut.AtEndOfStream
    line = objExecObject.StdOut.ReadLine
    if (instr(lcase(line), "scan report for")) then
        line_split = split(line)
        hosts = hosts & " " & line_split(4)
    end if
Loop

hosts = trim(hosts)
hosts_in_subnet = split(hosts)
for each host in hosts_in_subnet
    if debugging > "0" then wscript.echo "Scanning Host: " & host end if

    mac_address = ""
    manufacturer = ""
    description = ""
    result = ""
    snmp_status = "false"
    ssh_status = "false"
    wmi_status = "false"
    exit_status = "y"
    host_is_up = "false"
    command = nmap_path & " -vv -n " & os_scan & " --host-timeout 90 " & host
    execute_command()

    Do Until objExecObject.Status = 0
        WScript.Sleep 100
    Loop

    Do Until objExecObject.StdOut.AtEndOfStream
        line = objExecObject.StdOut.ReadLine

        if instr(lcase(line), "host is up") then
            host_is_up = "true"
        end if

        if instr(lcase(line), "mac address:") then
            i = split(line, " ")
            mac_address = i(2)
            manufacturer = i(3)
            i = ""
            i = split(line, "(")
            manufacturer = replace(i(1), ")", "")
            manufacturer = trim(manufacturer)
        end if

        if instr(lcase(line), "device type:") then
            if instr(line, "|") then
                ' could be one of multiple - insert it as the description
                i = split(line, ":")
                description = trim(i(1))
            else
                description = ""
            end if
        end if

        if instr(lcase(line), "22/tcp") then
            if instr(lcase(line), "open") then
                ssh_status = "true"
            end if
        end if

        if instr(lcase(line), "135/tcp") then
            if instr(lcase(line), "open") then
                wmi_status = "true"
            end if
        end if
    Loop

    command = nmap_path & " -n -sU -p161 --host-timeout 90 " & host
    execute_command()
    Do Until objExecObject.Status = 0
        WScript.Sleep 100
    Loop
    Do Until objExecObject.StdOut.AtEndOfStream
        line = objExecObject.StdOut.ReadLine
        if instr(lcase(line), "161/udp") then
            if instr(lcase(line), "open") then
                snmp_status = "true"
            end if
        end if
    Loop

    ' special case of determining WMI on localhost on Windows
    if (instr(local_net, host & " ") > 0) then
        wmi_status = "true"
    end if

    if host_is_up = "true" then
        result =          " <device>" & vbcrlf
        result = result & "     <subnet_range><![CDATA[" & subnet_range & "]]></subnet_range>" & vbcrlf
        result = result & "     <man_ip_address><![CDATA[" & host & "]]></man_ip_address>" & vbcrlf
        result = result & "     <mac_address><![CDATA[" & mac_address & "]]></mac_address>" & vbcrlf
        result = result & "     <manufacturer><![CDATA[" & manufacturer & "]]></manufacturer>" & vbcrlf
        'result = result & "     <description><![CDATA[" & description & "]]></description>" & vbcrlf
        result = result & "     <description></description>" & vbcrlf
        result = result & "     <org_id><![CDATA[" & org_id & "]]></org_id>" & vbcrlf
        result = result & "     <snmp_status><![CDATA[" & snmp_status & "]]></snmp_status>" & vbcrlf
        result = result & "     <ssh_status><![CDATA[" & ssh_status & "]]></ssh_status>" & vbcrlf
        result = result & "     <wmi_status><![CDATA[" & wmi_status & "]]></wmi_status>" & vbcrlf
        result = result & "     <subnet_timestamp><![CDATA[" & subnet_timestamp & "]]></subnet_timestamp>" & vbcrlf
        result = result & " </device>" & vbcrlf
        result_file = result_file & result

        if submit_online = "y" then
            log_entry = "IP " & host & " responding, submitting."
            write_log()
            result = "<devices>" & vbcrlf & result & "</devices>"
            Err.clear
            on error resume next
                Set objHTTP = WScript.CreateObject("MSXML2.ServerXMLHTTP.3.0")
                objHTTP.setTimeouts 5000, 5000, 5000, 120000
                objHTTP.SetOption 2, 13056  ' Ignore all SSL errors
                if sequential = "y" then
                    objHTTP.Open "POST", url, False ' wait for a response before continuing
                else
                    objHTTP.Open "POST", url, True ' do not wait for a respone before continuing
                end if
                objHTTP.setRequestHeader "Content-Type","application/x-www-form-urlencoded"
                objHTTP.Send "form_details=" + result + vbcrlf
            on error goto 0
            if (error_returned <> 0) then
                log_entry = "Result send for " & host & " failed"
                write_log
            else
                log_entry = "Result send for " & host & " succeeded"
                write_log
            end if
            if debugging > 1 and sequential = "n" then
                wscript.echo
                wscript.echo "Response"
                wscript.echo "--------"
                wscript.echo objHTTP.ResponseText
            end if
        else
            log_entry = "IP " & host & " responding."
            write_log()
        end if ' submit_online
    else
        log_entry = "IP " & host & " not responding, ignoring."
        write_log()
    end if ' host_is_up'
next
result =          " <device>" & vbcrlf
result = result & "     <subnet_range><![CDATA[" & subnet_range & "]]></subnet_range>" & vbcrlf
result = result & "     <subnet_timestamp><![CDATA[" & subnet_timestamp & "]]></subnet_timestamp>" & vbcrlf
result = result & "     <complete>y</complete>" & vbcrlf
result = result & " </device>"

result_file = result_file & result
result_file = "<devices>" & vbcrlf & result_file & vbcrlf & "</devices>"


if echo_output = "y" then
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
        if debugging > "0" then wscript.echo "Problem writing to file." end if
        if debugging > "0" then wscript.echo "Error Number:" & error_returned end if
        if debugging > "0" then wscript.echo "Error Description:" & error_description end if
        log_entry = "Failed to create output file named " & OutputFile & " for " & subnet_range & " submitted at " & subnet_timestamp
        write_log
    else
        if debugging > "0" then wscript.echo "Output file created." end if
        log_entry = "Output file named " & OutputFile & " created for " & subnet_range & " submitted at " & subnet_timestamp
        write_log
    end if
end if

if submit_online = "y" then
    result = "<devices>" & vbcrlf & result & "</devices>"
    Err.clear
    on error resume next
        Set objHTTP = WScript.CreateObject("MSXML2.ServerXMLHTTP.3.0")
        objHTTP.setTimeouts 5000, 5000, 5000, 120000
        objHTTP.SetOption 2, 13056  ' Ignore all SSL errors
        objHTTP.Open "POST", url, FALSE ' as at 1.8.2, wait for the output
        'objHTTP.Open "POST", url, TRUE
        objHTTP.setRequestHeader "Content-Type","application/x-www-form-urlencoded"
        ' reverted the below (changed in 1/8/2 and back in 1.8.4) to send the final subnet
        ' finished result instead of the entire result file
        'objHTTP.Send "form_details=" + result_file + vbcrlf
        objHTTP.Send "form_details=" + result + vbcrlf
    on error goto 0
    if (error_returned <> 0) then
        if debugging > "0" then wscript.echo "Result complete send failed for " & subnet_range & " submitted at " & subnet_timestamp end if
        log_entry = "Result send failed for " & subnet_range & " submitted at " & subnet_timestamp
        write_log
        if (not isempty(objHTTP.ResponseText) and objHTTP.ResponseText > "" and debugging > "1") then
            wscript.echo objHTTP.ResponseText
        end if
    else
        if debugging > "0" then wscript.echo "Result complete send succeeded for " & subnet_range & " submitted at " & subnet_timestamp end if
        log_entry = "Result send successful for " & subnet_range & " submitted at " & subnet_timestamp
        write_log
        if (not isempty(objHTTP.ResponseText) and objHTTP.ResponseText > "" and debugging > "2") then
            wscript.echo objHTTP.ResponseText
        end if
    end if
end if

log_entry = "Discovery for " & subnet_range & " submitted at " & subnet_timestamp & " completed"
write_log()


function get_timestamp()
    get_timestamp = monthname(month(now()), True) & " " & Right("0" & Day(Now()),2) & " " & Right("0" & Hour(Now()),2) & ":" & Right("0" & Minute(Now()),2) & ":" & Right("0" & Second(Now()),2)
end function


function write_log()
    timestamp = get_timestamp()
    if debugging > 1 then
        wscript.echo "Writing Log (if required): " & timestamp & " " & system_hostname & " " & current_pid & " S:discover_subnet U:" & user & " " & log_entry & vbcrlf
    end if
    if syslog = "y" then
        on error resume next
        dim objTS
        set objTS = objFSO.OpenTextFile("c:\xampplite\open-audit\other\log_system.log", FOR_APPENDING, True)
        error_returned = Err.Number
        error_description = Err.Description
        on error goto 0
        if (error_returned <> 0) then
            if debugging > "0" then wscript.echo "Problem opening log file." end if
            if debugging > "0" then wscript.echo "Error Number:" & error_returned end if
            if debugging > "0" then wscript.echo "Error Description:" & error_description end if
            Err.Clear
        else
            log_entry = timestamp & " " & system_hostname & " " & current_pid & " U:" & user & " S:discover_subnet M:" & log_entry & vbcrlf
            objTS.Write log_entry
            objTS.Close
            Set objTS = Nothing
        end if
    end if
end function


function execute_command()
    if debugging > 1 then wscript.echo "Executing: " & command end if
    on error resume next
        set objExecObject = objShell.Exec(command)
        Do Until objExecObject.Status = 0
            WScript.Sleep 1000
        Loop
        error_returned = Err.Number
        error_description = Err.Description
    on error goto 0
    if (error_returned <> 0) then
        if debugging > "0" then wscript.echo "Discovery command failed (" & command & "). Error Number: " & error_returned & " Error Description: " & error_description end if
        'if syslog = "y" then
            if exit_status = "y" then
                exit_text = " Aborting script."
            else
                exit_text = ""
            end if
            timestamp = get_timestamp()
            log_entry = timestamp & " " & system_hostname & " " & current_pid & " Discovery command failed (" & command & ")." & exit_text & vbcrlf
            write_log()
        'end if
        Err.Clear
        if exit_status = "y" then
            wscript.quit 1
        end if
    end if
end function

