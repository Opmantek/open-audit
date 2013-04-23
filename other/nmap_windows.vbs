' Open Audit
' Software and Hardware Inventory
' (c) Mark Unwin 2012 
' http://www.open-audit.org
' Licensed under the AGPL v3
' http://www.fsf.org/licensing/licenses/agpl-3.0.html 


Option Explicit

Dim audit_windows, colItems, command, count, current_pid, debugging, ip_address, line, line_split, nmap_exe, nmap_result, nmap_result_array, objArgs, objExecObject, objFSO, objItem, objlocalwmiservice, objShell, objWMIService, objWMIService2, oReg, org_id, output_file, run_audit_windows, shell, snmp_installed, snmp_open, strArg, strComputer, system_hostname, system_mac_address, system_manufacturer, system_model, system_os, system_os_guess, system_running, system_timestamp, system_type, system_uuid, type_guess, varArray, wshNetwork, xml_result, number_of_audits

' the number of audits to run concurrently
number_of_audits = 25

' the name and path of the audit script to use
audit_windows = "c:\xampp\OAv2\other\audit_windows.vbs"

' if set, create an output file of all retrieved systems scanned
output_file = ""

' if we detect a Windows OS, should we run audit_windows?
run_audit_windows = "n"

' only set the below if your PATH variable (in Windows) does not include this
nmap_exe = "C:\program files(x86)\Nmap\"
nmap_exe = ""

' 0 = no debug
' 1 = basic debug
' 2 = verbose debug
debugging = "2"

' below we take any command line arguements
' to override the variables above, simply include them on the command line like submit_online=n
' NOTE - argurments are case sensitive
Set objArgs = WScript.Arguments
for each strArg in objArgs
    if instr(strArg, "=") then
		varArray = split(strArg, "=")
		select case varArray(0)
				
			case "debugging"
				debugging = varArray(1)
				
			case "ip_address"
				ip_address = varArray(1)
				
			case "nmap_exe"
				nmap_exe = varArray(1)
				
			case "run_audit_windows"
				run_audit_windows = varArray(1)
				
		end select
	end if
next 

' leave the below settings
const HKEY_CLASSES_ROOT  = &H80000000
const HKEY_CURRENT_USER  = &H80000001
const HKEY_LOCAL_MACHINE = &H80000002
const HKEY_USERS         = &H80000003
const FOR_APPENDING 	 = 8
const ads_scope_subtree  = 2
strComputer = "."
count = 0

system_timestamp = Year(Now()) & "-" & Right("0" & Month(Now()),2) & "-" & Right("0" & Day(Now()),2) & " " & Right("0" & Hour(Now()),2) & ":" & Right("0" & Minute(Now()),2) & ":" & Right("0" & Second(Now()),2)

set objWMIService = GetObject("winmgmts:\\" & strComputer & "\root\cimv2") 
set objWMIService2 = GetObject("winmgmts:\\" & strComputer & "\root\WMI")
set oReg = GetObject("winmgmts:{impersonationLevel=impersonate}!\\" & strComputer & "\root\default:StdRegProv")
set objShell = CreateObject("wscript.shell")
set objFSO = CreateObject("Scripting.FileSystemObject")
set wshNetwork = WScript.CreateObject( "WScript.Network" )

set objlocalwmiservice = getobject("winmgmts:root\cimv2")
set colitems = objlocalwmiservice.execquery("select * from win32_process",,48)
for each objitem in colitems
	if instr (objitem.commandline, wscript.scriptname) <> 0 then
		current_pid = objitem.processid
	end if
next

if debugging > "0" then wscript.echo "My PID: " & current_pid

'command = nmap_exe & "nmap.exe -sU -O -v " & ip_address
command = nmap_exe & "nmap.exe -vv -O " & ip_address
if debugging > "1" then wscript.echo command end if

set objExecObject = objShell.Exec(command)
do while not objExecObject.StdOut.AtEndOfStream
	nmap_result = objExecObject.StdOut.ReadAll()
loop
nmap_result_array = split(nmap_result, vbcrlf)
for each line in nmap_result_array
	' test for MAC Address
	if (instr(lcase(line), "mac address:") = 1) then
		line_split = split(line)
		system_mac_address = line_split(2)
		system_manufacturer = mid(line, instr(line,"(")+1,instr(line,")")-instr(line,"(")-1)
	end if
	
	' test for Device Type
	if (instr(lcase(line), "device type:") = 1) then
		system_type = replace(line, "Device Type: ", "")
	end if
	
	' test for OS Details
	if (instr(lcase(line), "os details:") = 1) then
		line_split = split(line)
		system_os = line_split(2)
		type_guess = replace(line, "OS Details: ", "")
	end if
	
	' test for Running
	if (instr(lcase(line), "running:") = 1) then
		system_running = replace(line, "Running: ", "")
	end if
	
	' test for Agressive OS guesses
	if (instr(lcase(line), "aggressive os guesses:") = 1) then
		system_os_guess = replace(line, "Aggressive OS guesses: ", "")
	end if
	
next

' some hacks below to try to guess some details
if system_os = "" and system_os_guess > "" then
	if (instr(lcase(system_os_guess), "cisco") > 0) then
		line_split = split(system_os_guess, "(")
		system_os = line_split(0)
	end if
end if

if (instr(lcase(system_os), "cisco") > 0) and system_manufacturer = "" then
	system_manufacturer = "Cisco"
end if

if (system_type = "" and type_guess = "" and system_os > "") then
	line_split = split(system_os)
	system_type = line_split(ubound(line_split)-1)
end if

if system_type = "" then
	if (instr(lcase(type_guess), "router") > 0) then
		system_type = "router"
	end if
end if

if system_type = "" then
	if (instr(lcase(type_guess), "switch") > 0) then
		system_type = "switch"
	end if
end if

if (system_type = "printer" and system_os = "HP" and system_manufacturer = "") then
	system_manufacturer = "HP"
end if


' hacks end above this line



wscript.echo "MAC Address: " & system_mac_address
wscript.echo "Type: " & system_type
wscript.echo "OS: " & system_os & "."
if system_os_guess > "" then wscript.echo "Aggressive OS Guess: " & system_os_guess end if
wscript.echo "Running: " & system_running
wscript.echo "Manufacturer: " & system_manufacturer

'wscript.quit

if instr(lcase(system_running), "microsoft windows") then
	' a windows machine - assume it's on our domain and we have Admin level access to audit
	' start the audit_windows script
	command = "cscript //nologo " & audit_windows & " " & ip_address
	wscript.echo command
	set shell = wscript.createobject("wscript.shell")
	shell.run command, 6, false
	set shell = nothing
else
	' not a windows machine - check for SNMP running
	snmp_open = "n"
	command = nmap_exe & "nmap.exe -vv -sU -p161-162 " & ip_address
	set objExecObject = objShell.Exec(command)
	do while not objExecObject.StdOut.AtEndOfStream
		nmap_result = objExecObject.StdOut.ReadAll()
	loop
	nmap_result_array = split(nmap_result, vbcrlf)
	for each line in nmap_result_array
		' test for MAC Address
		if (instr(lcase(line), "161/udp open") = 1) then
			snmp_open = "y"
		end if
	next
	if snmp_open = "y" then
		snmp_installed = "n"
		' need to check if SNMP installed locally
		
		' if snmp installed
		if snmp_installed = "y" then
		
		end if
	end if
	xml_result = "<?xml version=""1.0"" encoding=""UTF-8""?>" & vbcrlf
	xml_result = xml_result & "<system>" & vbcrlf
	xml_result = xml_result & "	<system_timestamp>" & escape_xml(system_timestamp) & "</system_timestamp>" & vbcrlf
	xml_result = xml_result & "	<system_ip_address>" & escape_xml(ip_address) & "</system_ip_address>" & vbcrlf
	xml_result = xml_result & "	<system_uuid>" & escape_xml(system_uuid) & "</system_uuid>" & vbcrlf
	xml_result = xml_result & "	<system_hostname>" & escape_xml(system_hostname) & "</system_hostname>" & vbcrlf
	xml_result = xml_result & "	<system_type>" & system_type & "</system_type>" & vbcrlf
	xml_result = xml_result & "	<system_manufacturer>" & escape_xml(system_manufacturer) & "</system_manufacturer>" & vbcrlf
	xml_result = xml_result & "	<system_model>" & escape_xml(system_model) & "</system_model>" & vbcrlf
	xml_result = xml_result & "	<man_org_id>" & escape_xml(org_id) & "</man_org_id>" & vbcrlf
	xml_result = xml_result & "</system>" & vbcrlf
end if

wscript.echo
wscript.echo xml_result


'wscript.sleep 20000
wscript.quit

function escape_xml(data)
	if IsNull(data) then
		escape_xml = ""
	else
		data = replace(data, "®", "")
		data = replace(data,"&","&amp;")
		data = replace(data,"<","&lt;")
		data = replace(data,">","&gt;")
		data = replace(data,"""","&quot;")
		data = replace(data,"'","&apos;")
		escape_xml = trim(data)
	end if
end function

