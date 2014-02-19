'  Copyright 2003-2014 Opmantek Limited (www.opmantek.com)
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
' @version 1.2
' @copyright Copyright (c) 2014, Opmantek
' @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3

Option Explicit

dim log_entry, error_returned, error_description, exit_status, command, timestamp, exit_text, objExecObject, line, line_split, result_file

' TODO -
' 	log each non responding IP - option

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
dim subnet : subnet = ""
dim subnet_timestamp : subnet_timestamp = ""
dim syslog : syslog = "y"
dim url : url = "http://localhost/open-audit/index.php/system/process_subnet"

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
				
			case "log_no_response"
				log_no_response = varArray(1)
				
			case "org_id"
				org_id = varArray(1)

			case "submit_online"
				submit_online = varArray(1)

			case "subnet"
				subnet = varArray(1)

			case "subnet_timestamp"
				subnet_timestamp = varArray(1)

			case "syslog"
				syslog = varArray(1)

			case "url"
				url = varArray(1)

		end select
	end if
next 

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



log_entry = "Discovery for " & subnet & " submitted at " & subnet_timestamp & " starting"
write_log()

if debugging > "0" then wscript.echo "My PID: " & current_pid
if debugging > "0" then wscript.echo "Scanning Subnet: " & subnet
if debugging > "0" then wscript.echo "URL: " & url

exit_status = "y"
command = nmap_path & " -v -sP -PE -PP -n " & subnet
execute_command()
dim hosts
Do Until objExecObject.StdOut.AtEndOfStream
	line = objExecObject.StdOut.ReadLine
	line_split = split(line)
	if (instr(lcase(line), "scan report for")) then
		if (instr(lcase(line), "[host down]")) then
			if (log_no_response = "y") then
				log_entry = "Non responsive ip address " & line_split(4) 
				write_log
			end if
		else
			hosts = hosts & " " & line_split(4)
		end if
	end if
Loop

hosts = trim(hosts)
dim hosts_in_subnet : hosts_in_subnet = split(hosts)
dim host
for each host in hosts_in_subnet
	if debugging > "0" then wscript.echo "Scanning Host: " & host end if

	log_entry = "Scanning ip address " & host
	write_log()

	dim mac_address : mac_address = ""
	dim manufacturer : manufacturer = ""
	dim system_type : system_type = "unknown"
	dim description : description = ""
	dim os_name : os_name = ""
	dim i

	exit_status = "y"
	command = nmap_path & " -vv -n -O --host-timeout 90 -PN " & host 
	execute_command()

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


	' test for SNMP
	dim snmp_status : snmp_status = "false"
	exit_status = "n"
	command = nmap_path & " -n -sU -p161 " & host 
	execute_command
	Do Until objExecObject.StdOut.AtEndOfStream
		line = objExecObject.StdOut.ReadLine
		if instr(lcase(line), "161/udp open") then
			snmp_status = "true"
		end if
	Loop

	' test for SSH
	dim ssh_status : ssh_status = "false"
	exit_status = "n"
	command = nmap_path & " -n -p22 " & host 
	execute_command()
	Do Until objExecObject.StdOut.AtEndOfStream
		line = objExecObject.StdOut.ReadLine
		if instr(lcase(line), "22/tcp open") then
			ssh_status = "true"
		end if
	Loop

	' test for WMI
	dim wmi_status : wmi_status = "false"
	exit_status = "n"
	command = nmap_path & " -n -p135 " & host 
	execute_command()
	Do Until objExecObject.StdOut.AtEndOfStream
		line = objExecObject.StdOut.ReadLine
		if instr(lcase(line), "135/tcp open") then
			wmi_status = "true"
		end if
	Loop

	' test for webserver on port 80
	dim p80_status : p80_status = "false"
	exit_status = "n"
	command = nmap_path & " -n -p80 " & host 
	execute_command()
	Do Until objExecObject.StdOut.AtEndOfStream
		line = objExecObject.StdOut.ReadLine
		if instr(lcase(line), "80/tcp open") then
			p80_status = "true"
		end if
	Loop

	' test for webserver on port 443
	dim p443_status : p443_status = "false"
	exit_status = "n"
	command = nmap_path & " -n -p443 " & host 
	execute_command()
	Do Until objExecObject.StdOut.AtEndOfStream
		line = objExecObject.StdOut.ReadLine
		if instr(lcase(line), "443/tcp open") then
			p443_status = "true"
		end if
	Loop

	' test for telnet
	dim tel_status : tel_status = "false"
	exit_status = "n"
	command = nmap_path & " -n -p23 " & host 
	execute_command()
	Do Until objExecObject.StdOut.AtEndOfStream
		line = objExecObject.StdOut.ReadLine
		if instr(lcase(line), "23/tcp open") then
			tel_status = "true"
		end if
	Loop

	' special case of determining WMI on localhost on Windows
	if (instr(local_net, host & " ") > 0) then
		wmi_status = "true"
	end if


	dim result
	
	result = "	<device>" & vbcrlf
	result = result & "		<subnet>" & subnet & "</subnet>" & vbcrlf
	result = result & "		<man_ip_address>" & host & "</man_ip_address>" & vbcrlf
	result = result & "		<mac_address>" & mac_address & "</mac_address>" & vbcrlf
	result = result & "		<manufacturer>" & manufacturer & "</manufacturer>" & vbcrlf
	result = result & "		<type>" & system_type & "</type>" & vbcrlf
	result = result & "		<os_name>" & os_name & "</os_name>" & vbcrlf
	result = result & "		<description>" & description & "</description>" & vbcrlf
	result = result & "		<snmp_status>" & snmp_status & "</snmp_status>" & vbcrlf
	result = result & "		<ssh_status>" & ssh_status & "</ssh_status>" & vbcrlf
	result = result & "		<wmi_status>" & wmi_status & "</wmi_status>" & vbcrlf
	result = result & "		<p80_status>" & p80_status & "</p80_status>" & vbcrlf
	result = result & "		<p443_status>" & p443_status & "</p443_status>" & vbcrlf
	result = result & "		<tel_status>" & tel_status & "</tel_status>" & vbcrlf
	result = result & "		<subnet_timestamp>" & subnet_timestamp & "</subnet_timestamp>" & vbcrlf
	result = result & "	</device>" & vbcrlf
	result_file = result_file & result
	result = "<devices>" & vbcrlf & result & "</devices>" & vbcrlf

	if submit_online = "y" then
		if debugging > "0" then wscript.echo "Submitting audit online" end if 

		log_entry = "Submitting online " & host
		write_log()

		Err.clear
		on error resume next
			dim objHTTP
			Set objHTTP = WScript.CreateObject("MSXML2.ServerXMLHTTP.3.0")
			objHTTP.setTimeouts 5000, 5000, 5000, 120000
			objHTTP.SetOption 2, 13056  ' Ignore all SSL errors
			'objHTTP.Open "POST", url, False
			objHTTP.Open "POST", url, True
			objHTTP.setRequestHeader "Content-Type","application/x-www-form-urlencoded"
			objHTTP.Send "form_details=" + result + vbcrlf
		on error goto 0
		if (error_returned <> 0) then
			if debugging > "0" then wscript.echo "Result send failed (" & host & ")." end if
			log_entry = "Result send failed " & host
			write_log
		else
			if debugging > "0" then wscript.echo "Result sent (" & host & ")." end if
		end if
		if debugging > 1 then
			wscript.echo
			wscript.echo
			wscript.echo "Response"
			wscript.echo "--------"
			wscript.echo objHTTP.ResponseText
		end if
	end if

	if echo_output = "y" then
		wscript.echo result
	end if
next



if submit_online = "y" then
	WScript.Sleep 5000
	dim resultcomplete : resultcomplete="<devices><device><subnet>" & subnet & "</subnet><subnet_timestamp>" & subnet_timestamp & "</subnet_timestamp><complete>y</complete></device></devices>"
	Err.clear
	on error resume next
		Set objHTTP = WScript.CreateObject("MSXML2.ServerXMLHTTP.3.0")
		objHTTP.setTimeouts 5000, 5000, 5000, 120000
		objHTTP.SetOption 2, 13056  ' Ignore all SSL errors
		objHTTP.Open "POST", url, False
		objHTTP.setRequestHeader "Content-Type","application/x-www-form-urlencoded"
		objHTTP.Send "form_details=" + resultcomplete + vbcrlf
	on error goto 0
	if (error_returned <> 0) then
		if debugging > "0" then wscript.echo "Result complete send failed for " & subnet & " submitted at " & subnet_timestamp end if
		log_entry = "Result complete send failed for " & subnet & " submitted at " & subnet_timestamp
		write_log
	else
		if debugging > "0" then wscript.echo "Result complete send succeeded for " & subnet & " submitted at " & subnet_timestamp end if
		log_entry = "Result complete send succeeded for " & subnet & " submitted at " & subnet_timestamp
		write_log
	end if
end if


if create_file = "y" then
	result_file = "<devices>" & vbcrlf & result_file & "</devices>"
	if debugging > "0" then wscript.echo "Creating output File" end if
	' Write the results to a file
	dim file_timestamp
	file_timestamp = Right("0" & Year(Now()),2) & _ 
					Right("0" & Month(Now()),2) & _ 
					Right("0" & Day(Now()),2) & _ 
					Right("0" & Hour(Now()),2) & _ 
					Right("0" & Minute(Now()),2) & _ 
					Right("0" & Second(Now()),2)
	dim OutputFile : OutputFile = "subnet-" & subnet & "-" & file_timestamp & ".xml"
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
	else
		if debugging > "0" then wscript.echo "Output file created." end if
	end if
end if



log_entry = "Discovery for " & subnet & " submitted at " & subnet_timestamp & " completed"
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
		set objTS = objFSO.OpenTextFile("c:\xampplite\open-audit\other\open-audit.log", FOR_APPENDING, True)
		error_returned = Err.Number
		error_description = Err.Description
		on error goto 0
		if (error_returned <> 0) then 
			if debugging > "0" then wscript.echo "Problem opening log file." end if
			if debugging > "0" then wscript.echo "Error Number:" & error_returned end if
			if debugging > "0" then wscript.echo "Error Description:" & error_description end if
			Err.Clear
		else
			log_entry = timestamp & " " & system_hostname & " " & current_pid & " S:discover_subnet U:" & user & " " & log_entry & vbcrlf
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

