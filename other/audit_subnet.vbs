' Open Audit
' Software and Hardware Inventory
' (c) Mark Unwin 2012 
' http://www.open-audit.org
' Licensed under the AGPL v3
' http://www.fsf.org/licensing/licenses/agpl-3.0.html 

'Option Explicit

'Dim audit_windows, colItems, command, count, create_file, current_pid, debugging, ip_address, line, line_split, nmap_exe, nmap_result, nmap_result_array, objArgs, objExecObject, objFSO, objItem, objlocalwmiservice, objShell, objWMIService, objWMIService2, oReg, org_id, output_file, run_audit_windows, shell, snmp_installed, snmp_open, strArg, strComputer, system_hostname, system_mac_address, manufacturer, system_model, system_os, system_os_guess, system_running, system_timestamp, type, system_uuid, type_guess, varArray, wshNetwork, xml_result, number_of_audits, submit_online, subnet, syslog, url, 

'Dim hosts_in_subnet, i, host, hosts, description, os_name 

' 0 = no debug
' 1 = basic debug 
' 2 = verbose debug
debugging = "1"

create_file = "n"
submit_online = "y"
subnet = ""
syslog = "y"
url = "http://localhost/index.php/system/add_nmap"
echo_output = "n"

' only set the below if your PATH variable (in Windows) does not include this
nmap_exe = "C:\program files(x86)\Nmap\"
'nmap_exe = ""

' below we take any command line arguements
' to override the variables above, simply include them on the command line like submit_online=n
' NOTE - argurments are case sensitive
Set objArgs = WScript.Arguments
for each strArg in objArgs
    if instr(strArg, "=") then
		varArray = split(strArg, "=")
		select case varArray(0)

			case "subnet"
				subnet = varArray(1)

			case "create_file"
				create_file = varArray(1)

			case "submit_online"
				submit_online = varArray(1)

			case "syslog"
				syslog = varArray(1)
				
			case "debugging"
				debugging = varArray(1)
				
			case "nmap_exe"
				nmap_exe = varArray(1)
				
			case "echo_output"
				echo_output = varArray(1)

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
set objTS = objFSO.OpenTextFile("c:\xampplite\open-audit\other\open-audit.log", FOR_APPENDING, True)
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



set objlocalwmiservice = getobject("winmgmts:root\cimv2")
set colitems = objlocalwmiservice.execquery("select * from win32_process",,48)
for each objitem in colitems
	if instr (objitem.commandline, wscript.scriptname) <> 0 then
		current_pid = objitem.processid
	end if
next
set wshNetwork = WScript.CreateObject("WScript.Network")
system_hostname = wshNetwork.ComputerName

if syslog = "y" then
	timestamp = get_timestamp()
	log_entry = timestamp & " " & system_hostname & " " & current_pid & " Job Starting" & vbcrlf
	objTS.Write log_entry
	log_entry = timestamp & " " & system_hostname & " " & current_pid & " Scanning Subnet: " & subnet & vbcrlf
	objTS.Write log_entry
end if

if debugging > "0" then wscript.echo "My PID: " & current_pid
if debugging > "0" then wscript.echo "Scanning Subnet: " & subnet

command = "C:\Program Files (x86)\Nmap\nmap.exe -sP -PE -PP -n " & subnet
set objExecObject = objShell.Exec(command)

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

	if syslog = "y" then
		timestamp = get_timestamp()
		log_entry = timestamp & " " & system_hostname & " " & current_pid & " Host: " & host & vbcrlf
		objTS.Write log_entry
	end if

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
		'wscript.echo line

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

if syslog = "y" then
	timestamp = get_timestamp()
	log_entry = timestamp & " " & system_hostname & " " & current_pid & " Scan completed." & vbcrlf
	objTS.Write log_entry
end if

if echo_output = "y" then
	wscript.echo result
end if

if submit_online = "y" then
	if debugging > "0" then wscript.echo "Submitting audit online" end if 

	if syslog = "y" then
		timestamp = get_timestamp()
		log_entry = timestamp & " " & system_hostname & " " & current_pid & " Submitting online." & vbcrlf
		objTS.Write log_entry
	end if

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
	if debugging > "0" then wscript.echo "Creating file." end if
	'echo -e "$result" > $xml_file
	'chmod 777 $xml_file
end if

if syslog = "y" then
	timestamp = get_timestamp()
	log_entry = timestamp & " " & system_hostname & " " & current_pid & " Job complete." & vbcrlf
	objTS.Write log_entry
end if

function get_timestamp()
	get_timestamp = Year(Now()) & "-" & Right("0" & Month(Now()),2) & "-" & Right("0" & Day(Now()),2) & " " & Right("0" & Hour(Now()),2) & ":" & Right("0" & Minute(Now()),2) & ":" & Right("0" & Second(Now()),2)
end function