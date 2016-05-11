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

wscript.echo "-------ATTENTION------"
wscript.echo "This script has been deprecated. Please use the discover_subnet.vbs script instead."
wscript.echo "----------------------"
wscript.echo ""

create_file = "n"
debugging = "1"
echo_output = "n"
help="n"
submit_online = "y"
subnet = ""
syslog = "y"
url = "http://localhost/open-audit/index.php/system/add_nmap"

' only set the below if your PATH variable (in Windows) does not include this
'nmap_exe = "C:\program files(x86)\Nmap\"
nmap_exe = ""

' below we take any command line arguements
' to override the variables above, simply include them on the command line like submit_online=n
' NOTE - argurments are case sensitive
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

			case "nmap_exe"
				nmap_exe = varArray(1)

			case "submit_online"
				submit_online = varArray(1)

			case "subnet"
				subnet = varArray(1)

			case "syslog"
				syslog = varArray(1)

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
	wscript.echo ""
	wscript.echo "-------ATTENTION------"
	wscript.echo "This script has been deprecated. Please use the discover_subnet.vbs script instead."
	wscript.echo "----------------------"
	wscript.echo ""
	wscript.echo "This script should be used on a Windows based computer to discover hosts in a subnet."
	wscript.echo "It will run nmap against the target subnet and submit the result."
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
	wscript.echo "  echo_output"
	wscript.echo "    *n - Do not echo the result to the screen."
	wscript.echo "     y - Echo the result to the screen."
	wscript.echo ""
	wscript.echo "  /? or help=y"
	wscript.echo "     y - Display this help output."
	wscript.echo "    *n - Do not display this output."
	wscript.echo ""
	wscript.echo "  subnet"
	wscript.echo "      - The subnet in to audit."
	wscript.echo ""
	wscript.echo "  syslog"
	wscript.echo "    *y - Log the script details to the Open-AudIT log file."
	wscript.echo "     n - Do not log to the Open-AudIT log file."
	wscript.echo ""
	wscript.quit
end if

' leave the below settings
const HKEY_CLASSES_ROOT  = &H80000000
const HKEY_CURRENT_USER  = &H80000001
const HKEY_LOCAL_MACHINE = &H80000002
const HKEY_USERS         = &H80000003
const FOR_APPENDING      = 8
const ads_scope_subtree  = 2
strComputer = "."
count = 0

system_timestamp = Year(Now()) & "-" & Right("0" & Month(Now()),2) & "-" & Right("0" & Day(Now()),2) & " " & Right("0" & Hour(Now()),2) & ":" & Right("0" & Minute(Now()),2) & ":" & Right("0" & Second(Now()),2)

set objWMIService = GetObject("winmgmts:root\cimv2") 
set objWMIService2 = GetObject("winmgmts:root\WMI")
set objShell = CreateObject("wscript.shell")
set objFSO = CreateObject("Scripting.FileSystemObject")
set wshNetwork = WScript.CreateObject( "WScript.Network" )

if instr(lcase(objShell.ExpandEnvironmentStrings( "PATH=%PATH%" )), "\Nmap") then
	if debugging > "1" then wscript.echo "Nmap path not found." end if
	wscript.quit
end if

on error resume next
set objTS = objFSO.OpenTextFile("c:\xampplite\open-audit\other\log_system.log", FOR_APPENDING, True)
error_returned = Err.Number
error_description = Err.Description
on error goto 0
if (error_returned <> 0) then 
	if debugging > "0" then wscript.echo "Problem opening log file." end if
	if debugging > "0" then wscript.echo "Error Number:" & error_returned end if
	if debugging > "0" then wscript.echo "Error Description:" & error_description end if
	syslog = "n"
	Err.Clear
end if
objTS.Close
Set objTS = Nothing



set objlocalwmiservice = getobject("winmgmts:root\cimv2")
set colitems = objlocalwmiservice.execquery("select * from win32_process",,48)
for each objitem in colitems
	if instr (objitem.commandline, wscript.scriptname) <> 0 then
		current_pid = objitem.processid
	end if
next
set wshNetwork = WScript.CreateObject("WScript.Network")
system_hostname = wshNetwork.ComputerName

write_log("Job starting - scanning subnet " & subnet)

if debugging > "0" then wscript.echo "My PID: " & current_pid
if debugging > "0" then wscript.echo "Scanning Subnet: " & subnet

command = "C:\Program Files (x86)\Nmap\nmap.exe -sP -PE -PP -n " & subnet
on error resume next
	set objExecObject = objShell.Exec(command)
	error_returned = Err.Number
	error_description = Err.Description
on error goto 0
if (error_returned <> 0) then 
	if debugging > "0" then wscript.echo "No Nmap found." end if
	write_log("Nmap not found, aborting")
	Err.Clear
	WScript.Quit 1
end if

Do Until objExecObject.Status = 0
 WScript.Sleep 100
Loop

Do Until objExecObject.StdOut.AtEndOfStream
	line = objExecObject.StdOut.ReadLine
	if (instr(lcase(line), "scan report for")) then
		line_split = split(line)
		hosts = hosts & " " & line_split(4)
	end if
Loop

hosts = trim(hosts)
hosts_in_subnet = split(hosts)
result = "<devices>" & vbcrlf

for each host in hosts_in_subnet

	if debugging > "0" then wscript.echo "Scanning Host: " & host end if

	write_log(host & " being nmap scanned")

	mac_address = ""
	manufacturer = ""
	system_type = "unknown"
	description = ""
	os_name = ""

	command = "C:\Program Files (x86)\Nmap\nmap.exe -vv -n -O --host-timeout 90 -PN " & host & " 2>/dev/null"
	set objExecObject = objShell.Exec(command)

	Do Until objExecObject.Status = 0
		WScript.Sleep 100
	Loop

	Do Until objExecObject.StdOut.AtEndOfStream
		line = objExecObject.StdOut.ReadLine

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
			i = split(line, ":")
			if instr(line, "|") then
				' could be one of multiple
				' just ignore setting type as it's already set to "unknown" above
				description = trim(i(1))
			else
				system_type = trim(i(1))
				description = ""
			end if
		end if

		if instr(lcase(line), "running:") then
			i = split(line, ":")
			os_name = i(1)
			os_name = replace(os_name, ")", "")
			os_name = replace(os_name, "(", "")
			os_name = trim(os_name)
		end if

		if instr(lcase(line), "running (just guessing):") and os_name = "" then
			i = split(line, ":")
			os_name = i(1)
			os_name = replace(os_name, ")", "")
			os_name = replace(os_name, "(", "")
			os_name = trim(os_name)
		end if

		if instr(lcase(line), "aggressive os guesses:") and os_name = "" then
			i = split(line, ":")
			os_name = i(1)
			os_name = replace(os_name, ")", "")
			os_name = replace(os_name, "(", "")
			os_name = trim(os_name)
			if description = "" then
				description = os_name
			end if
		end if

		if instr(lcase(line), "os details:") and os_name = "" then
			i = split(line, ":")
			os_name = i(1)
			os_name = replace(os_name, ")", "")
			os_name = replace(os_name, "(", "")
			os_name = trim(os_name)
		end if
	Loop

	result = result & "	<device>" & vbcrlf
	result = result & "		<man_ip_address>" & host & "</man_ip_address>" & vbcrlf
	result = result & "		<mac_address>" & mac_address & "</mac_address>" & vbcrlf
	result = result & "		<manufacturer>" & manufacturer & "</manufacturer>" & vbcrlf
	result = result & "		<type>" & system_type & "</type>" & vbcrlf
	result = result & "		<os_name>" & os_name & "</os_name>" & vbcrlf
	result = result & "		<description>" & description & "</description>" & vbcrlf
	result = result & "	</device>" & vbcrlf

next

result = result & "</devices>" & vbcrlf

write_log("Scan of " & host & " completed")

if echo_output = "y" then
	wscript.echo result
end if

if submit_online = "y" then
	if debugging > "0" then wscript.echo "Submitting audit online" end if 

	write_log("Submitting scan result for " & host & " online")

	Err.clear
	XmlObj = "ServerXMLHTTP"
	Set objHTTP = WScript.CreateObject("MSXML2.ServerXMLHTTP.3.0")
	objHTTP.setTimeouts 5000, 5000, 5000, 120000
	objHTTP.SetOption 2, 13056  ' Ignore all SSL errors
	objHTTP.Open "POST", url, False
	objHTTP.setRequestHeader "Content-Type","application/x-www-form-urlencoded"
	objHTTP.Send "form_nmap=" + result + vbcrlf
	'if (objHTTP.ResponseText > "" and debugging > "2") then
	if debugging > "2" then
		wscript.echo
		wscript.echo
		wscript.echo "Response"
		wscript.echo "--------"
		wscript.echo objHTTP.ResponseText
		if (inStr(objHTTP.ResponseText, "error")) then
			wscript.sleep 50000
		end if
	end if
	if debugging > "0" then wscript.echo "Audit Submitted" end if 
end if

if create_file = "y" then
	if debugging > "0" then wscript.echo "Creating output File" end if
	' Write the results to a file
	file_timestamp = Year(dt) & Right("0" & Month(dt),2) & Right("0" & Day(dt),2) & Right("0" & Hour(dt),2) & Right("0" & Minute(dt),2) & Right("0" & Second(dt),2)
	OutputFile = "subnet-" & subnet & "-" & file_timestamp & ".xml"
	OutputFile = replace(OutputFile, "/", "-")
	if debugging > "0" then wscript.echo "Output file: " & OutputFile end if
	Err.clear
	on error resume next
	Set objFileToWrite = CreateObject("Scripting.FileSystemObject").OpenTextFile(OutputFile,2,true)
	objFileToWrite.WriteLine(result)
	objFileToWrite.Close
	Set objFileToWrite = Nothing
	error_returned = Err.Number
	error_description = Err.Description
	on error goto 0
	if (error_returned <> 0) then
		if debugging > "0" then wscript.echo "Problem writing to file." end if
		if debugging > "0" then wscript.echo "Error Number:" & error_returned end if
		if debugging > "0" then wscript.echo "Error Description:" & error_description end if
	else
		if debugging > "0" then wscript.echo "Output file created." end if
	end if
end if

write_log("Job complete - scanning subnet " & subnet)

wscript.quit

function get_timestamp()
	' removed the below and using month short name, no year, as per other logging
	' get_timestamp = Year(Now()) & "-" & Right("0" & Month(Now()),2) & "-" & Right("0" & Day(Now()),2) & " " & Right("0" & Hour(Now()),2) & ":" & Right("0" & Minute(Now()),2) & ":" & Right("0" & Second(Now()),2)

	get_timestamp = monthname(month(now()), True) & " " & Right("0" & Day(Now()),2) & " " & Right("0" & Hour(Now()),2) & ":" & Right("0" & Minute(Now()),2) & ":" & Right("0" & Second(Now()),2)
end function

function write_log(log_message)
	if syslog = "y" then
		set objTS = objFSO.OpenTextFile("c:\xampplite\open-audit\other\log_system.log", FOR_APPENDING, True)
		timestamp = monthname(month(now()), True) & " " & Right("0" & Day(Now()),2) & " " & Right("0" & Hour(Now()),2) & ":" & Right("0" & Minute(Now()),2) & ":" & Right("0" & Second(Now()),2)
		log_entry = timestamp & " " & system_hostname & " " & current_pid & " 7 " & "S:audit_subnet M:" & log_message & vbcrlf
		objTS.Write log_entry
		objTS.Close
		Set objTS = Nothing
	end if
end function
