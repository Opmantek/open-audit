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

forceCScriptExecution

' the number of audits to run concurrently
number_of_audits = 25

' this tells the script to run the audit from this PC or
' to copy the files to the remote pc and run the script remotely using PSexec

' NOTE - make sure if using the "remote" option that network comms are allowed
' to be initated at the remote PC, connecting to the Open-AudIT host
audit_run_type = "remote"
audit_run_type = "local"

' the below are needed for remote audits as PSexec takes them as command line arguements
' I don't think (could be wrong) that PSexec can use the local logged on users credentials
' If it can, someone please provide me with a "how to"
' NOTE - if using the "local" option, the below are not needed
remote_user = ""
remote_password = ""

' the name and path of the audit script to use
script_name = "c:\xampplite\open-audit\other\audit_windows.vbs"

' set the below to your active directory domain
' you can add multiple domains in the array below.
'domain_array = array("LDAP://your.domain.here", "LDAP://domain.number.2", "LDAP://another.domain.org")
domain_array = array("")

debugging = 3

' the limit to the number of machines we want retrieved from AD
limit = 1000000

' if operating_system has a value,
' restricts the audit to only systems with the specified operating system

operating_system = "Windows 2000 Professional"
operating_system = "Windows Vista"
operating_system = "Windows 2000 Server"
operating_system = "Windows Server 2008"
operating_system = "Windows Server 2003"
operating_system = "Windows 7"
operating_system = "Windows 8"
operating_system = "Server"
operating_system = "Windows"

' if set, create an output file of all retrieved systems from active directory
output_file = ""

' update with any submitted command line switches
Set objArgs = WScript.Arguments

For Each strArg in objArgs
    if instr(strArg, "=") then
		varArray = split(strArg, "=")
		select case varArray(0)

			case "audit_run_type"
				audit_run_type = varArray(1)

			case "debugging"
				debugging = varArray(1)

			case "help"
				help = varArray(1)

			case "local_domain"
				local_domain = varArray(1)

			case "number_of_audits"
				number_of_audits = varArray(1)

			case "operating_system"
				operating_system = varArray(1)

			case "script_name"
				script_name = varArray(1)

			case "remote_password"
				remote_password = varArray(1)

			case "remote_user"
				remote_user = varArray(1)

			case "struser"
				struser = varArray(1)

			case "strpass"
				strpass = varArray(1)

			case "url"
				url = varArray(1)

			case "limit"
				limit = varArray(1)

		end select
	else
		if (strArg = "/?" or strArg = "/help") then
			help = "y"
		end if
	end if
next

if (help = "y") then
	wscript.echo "------------------------------"
	wscript.echo "Open-AudIT Domain Audit Script"
	wscript.echo "(c) Opmantek, 2014."
	wscript.echo "------------------------------"
	wscript.echo "This script should be used on a Windows based computer to discover Active Directory computers."
	wscript.echo "It queries Active Directory and spawns an audit for each Windows computer found."
	wscript.echo "This script is designed to be called by the Open-AudIT web GUI, not run directly from the command line."
	wscript.echo ""
	wscript.echo "Valid command line options are below (items containing * are the defaults) and should take the format name=value (eg: debugging=1)."
	wscript.echo ""
	wscript.echo "  audit_run_type"
	wscript.echo "   *local - Run the audit_windows script from this PC, targetting a remote PC."
	wscript.echo "   remote - Copy the audit_windows script to the remote PC and start it remotely."
	wscript.echo ""
	wscript.echo "  debugging"
	wscript.echo "     0 - No output."
	wscript.echo "     1 - Minimal Output."
	wscript.echo "    *2 - Verbose output."
	wscript.echo ""
	wscript.echo "  /? or help=y"
	wscript.echo "      y - Display this help output."
	wscript.echo "     *n - Do not display this output."
	wscript.echo ""
	wscript.echo "  local_domain"
	wscript.echo "        - The domain you wish to audit. Should be in the format LDAP://your.domain.name"
	wscript.echo ""
	wscript.echo "  number_of_audits"
	wscript.echo "    *25 - The number of concurrently spawned Windows audits."
	wscript.echo ""
	wscript.echo "  operating_system"
	wscript.echo " *Windows - A string to match against each computer in the Active Directory domain. The provided script should match any part of a computers operating system name. Samples provided in the script."
	wscript.echo ""
	wscript.echo "  script_name"
	wscript.echo "   c:\xampplite\open-audit\other\audit_windows.vbs - The full path to and file name of audit_windows.vbs."
	wscript.echo ""
	wscript.echo "  remote_password"
	wscript.echo "        - The password of the supplied username (if any). Only used when audit_run_type = remote."
	wscript.echo ""
	wscript.echo "  remote_user"
	wscript.echo "        - The domain and username credentials used to perform the windows audits. Should be in the format domain/username. Only used when audit_run_type = remote."
	wscript.echo ""
	wscript.echo "  struser"
	wscript.echo "        - The username credential. Only used when audit_run_type = local."
	wscript.echo ""
	wscript.echo "  strpass"
	wscript.echo "        - The password credential. Only used when audit_run_type = local."
	wscript.echo ""
	wscript.quit
end if

' leave the below settings
strComputer = "."
const HKEY_CLASSES_ROOT  = &H80000000
const HKEY_CURRENT_USER  = &H80000001
const HKEY_LOCAL_MACHINE = &H80000002
const HKEY_USERS         = &H80000003
const FOR_APPENDING 	 = 8
const ads_scope_subtree  = 2

set objWMIService = GetObject("winmgmts:\\" & strComputer & "\root\cimv2")
set objWMIService2 = GetObject("winmgmts:\\" & strComputer & "\root\WMI")
set oReg = GetObject("winmgmts:{impersonationLevel=impersonate}!\\" & strComputer & "\root\default:StdRegProv")
set objShell = CreateObject("WScript.Shell")
set objFSO = CreateObject("Scripting.FileSystemObject")
set wshNetwork = WScript.CreateObject( "WScript.Network" )

set objlocalwmiservice = getobject("winmgmts:root\cimv2")
set colitems = objlocalwmiservice.execquery("select * from win32_process",,48)
for each objitem in colitems
	if instr (objitem.commandline, wscript.scriptname) <> 0 then
		current_pid = objitem.processid
	end if
next

if (domain_array(0) = "") and (local_domain = "") then
	set colItems = objWMIService.ExecQuery("Select * from Win32_OperatingSystem",,32)
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " local (Win32_OperatingSystem)" end if
	for each objItem in colItems
		windows_build_number = objItem.BuildNumber
	next
	set colItems = objWMIService.ExecQuery("Select * from Win32_ComputerSystem",,32)
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (	Win32_ComputerSystem)" : audit_wmi_fails = audit_wmi_fails & "Win32_ComputerSystem " : end if
	for each objItem in colItems
		local_domain = "LDAP://" & objItem.Domain
		windows_part_of_domain = False
		if (windows_build_number >= 2600) then windows_part_of_domain = objItem.PartOfDomain end if
		if (windows_part_of_domain <> True) then
			wscript.echo "No domain provided and not part of a domain, exiting."
			wscript.quit
		end if
	next
end if

if (domain_array(0) = "") and (local_domain = "") then
	wscript.echo "No domain provided and not part of a domain, exiting."
	wscript.quit
end if


if (domain_array(0) = "") and (local_domain > "") then
	domain_array(0) = local_domain
else
	if local_domain > "" then
		number_of_domains = ubound(domain_array)+1
		redim Preserve domain_array(number_of_domains)
		domain_array(number_of_domains) = local_domain
	end if
end if


for l = 0 to ubound(domain_array)
	local_domain = domain_array(l)
	if debugging > 0 then wscript.echo "Now Auditing: " & local_domain end if
	' retrieve all computers objects from domain
	set objconnection = createobject("adodb.connection")
	set objcommand = createobject("adodb.command")
	objconnection.provider = "adsdsoobject"
	objconnection.open "active directory provider"
	set objcommand.activeconnection = objconnection
	objcommand.commandtext = "select name, location, operatingSystem, lastLogon from '" & local_domain & "' where objectclass='computer'"
	if debugging > 2 then wscript.echo objcommand.commandtext end if
	objcommand.properties("page size") = 1000
	objcommand.properties("searchscope") = ads_scope_subtree
	objcommand.properties("sort on") = "name"
	set objrecordset = objcommand.execute
	objrecordset.movefirst
	totcomp = objrecordset.recordcount
	redim pc_array(totcomp) ' set array to computer count
	if debugging > 0 then wscript.echo "number of systems retrieved from ldap: " & totcomp end if
	count = 0
	do until objrecordset.eof
		strcomputer = objrecordset.fields("name").value
		computer_os = objrecordset.fields("operatingSystem").value
		if (((len(operating_system) > 0) AND (instr(computer_os, operating_system) > 0)) OR (len(operating_system) = 0))then
			pc_array(count) = strcomputer ' feed computers into array
			count = count + 1
		end if
		objrecordset.movenext
	loop
	num_running = HowMany
	if debugging > 0 then wscript.echo "number of filtered systems: " & count end if
	if debugging > 0 then wscript.echo "--------------" end if
	redim Preserve pc_array(count)
	if (int(count) > int(limit)) then
		redim Preserve pc_array(limit-1)
	end if


	' generates a text file of retrieved PCs
	if (output_file > "") then
	for i = 0 to ubound(pc_array)
		retrieved_from_ad = retrieved_from_ad & pc_array(i) & vbcrlf
	next
	set objTS = objFSO.OpenTextFile(output_file, FOR_APPENDING, True)
	objTS.Write retrieved_from_ad
	end if

	if audit_run_type = "local" then
		for i = 0 to ubound(pc_array)
			while int(num_running) > int(number_of_audits)
				if debugging > 0 then wscript.echo("processes running (" & num_running & ") greater than number wanted (" & number_of_audits & ")") end if
				if debugging > 0 then wscript.echo("therefore - sleeping for 4 seconds.") end if
				wscript.sleep 4000
				num_running = HowMany
			wend
			if pc_array(i) <> "" then
				j = i + 1
				if debugging > 0 then wscript.echo(j & " of " & ubound(pc_array)) end if
				if debugging > 0 then wscript.echo("processes running: " & num_running) end if
				if debugging > 0 then wscript.echo("next system: " & pc_array(i)) end if
				if debugging > 0 then wscript.echo("--------------") end if
				command1 = "cscript //nologo " & chr(34) & script_name & chr(34) & " strcomputer=" & pc_array(i) & " submit_online=y debugging=" & debugging & " url=" & url & " ldap=" & local_domain & " struser=" & struser & " strpass=" & strpass
				set sh1=wscript.createobject("wscript.shell")
				sh1.run command1, 6, false
				set sh1 = nothing
				'set objScriptExec = objShell.Exec(command1)
				'strStdOut = objScriptExec.StdOut.ReadAll
				'WScript.Echo strStdOut
				num_running = HowMany
			end if
		next
	end if


	if audit_run_type = "remote" then
		for i = 0 to ubound(pc_array)
			while num_running > number_of_audits
				if debugging > 0 then wscript.echo("processes running (" & num_running & ") greater than number wanted (" & number_of_audits & ") sleeping for 4 seconds.") end if
				wscript.sleep 4000
				num_running = HowMany
			wend
			if pc_array(i) <> "" then
				if debugging > 0 then wscript.echo(i & " of " & ubound(pc_array)) end if
				if debugging > 0 then wscript.echo("processes running: " & num_running) end if
				if debugging > 0 then wscript.echo("next system: " & pc_array(i)) end if
				if debugging > 0 then wscript.echo("--------------") end if
				remote_location = "\\"& pc_array(i) & "\admin$\"
				if debugging > 2 then wscript.echo "Copying to: " & remote_location end if
				on error resume next
				objFSO.CopyFile "audit_windows.vbs", remote_location, True
				error_returned = Err.Number
				error_description = Err.Description
				on error goto 0
				if error_returned <> 0 then
					' we did not copy successfully
					if debugging > 0 then wscript.echo("Error copying file. Audit not attempted. " & error_returned & " - " & error_description)end if
				else
					' copy completed - now try to run the audit
					if debugging > 2 then wscript.echo "Sleeping for two seconds." end if
					wscript.sleep 2000
					Set Command = WScript.CreateObject("WScript.Shell")
					' psexec must be in PATH
					' note - specify -d on the command below to run in non-interactive mode (locally)
					' if you specify -d you will see command windows of the remote processes
					'cmd = "psexec.exe \\" & pc_array(i) & " -u " & remote_user & " -p " & remote_password & " -d cscript.exe " & remote_location & "audit_windows.vbs self_delete=y "
					if remote_user <> "" and remote_password <> "" then
						strRemoteAuth = " -u " & remote_user & " -p " & remote_password
					else
						strRemoteAuth = ""
					end if
					' Both of these work. The second requires the double cmd as only one doesn't expand %SYSTEMROOT%.

					'cmd = "psexec.exe \\" & pc_array(i) & strRemoteAuth & " -s cmd /c ""for /f ""TOKENS=2 DELIMS=="" %i in ('set ^| find /i ""systemroot""') do cscript.exe %i\audit_windows.vbs self_delete=y ldap="  & local_domain & """"

					cmd = "psexec.exe \\" & pc_array(i) & strRemoteAuth & " -s cmd /c ""cmd /c cscript.exe %SYSTEMROOT^%\audit_windows.vbs self_delete=y ldap=" & local_domain & """"

					if debugging > 2 then wscript.echo "Running command: " & cmd end if
					on error resume next
					Command.Run (cmd)
					error_returned = Err.Number
					error_description = Err.Description
					num_running = HowMany
					on error goto 0
					if error_returned <> 0 then
						' we did not successfully start the audit
						if debugging > 0 then wscript.echo("Error running audit. " & error_returned & " - " & error_description)end if
					else
						if debugging > 0 then wscript.echo "Audit started successfully." end if
					end if
					set Command = nothing
				end if
			end if
		next
	end if
next

Function HowMany()
  Dim Proc1,Proc2,Proc3
  ' CheckForHungWMI()
  Set Proc1 = GetObject("winmgmts:{impersonationLevel=impersonate}!\\.\root\cimv2")
  Set Proc2 = Proc1.ExecQuery("select * from win32_process" )
  HowMany=0
  For Each Proc3 in Proc2
    If LCase(Proc3.Caption) = "cscript.exe" or LCase(Proc3.Caption) = "psexec.exe" Then
      HowMany=HowMany + 1
    End If
  Next
End Function

Sub CheckForHungWMI()
    ' Get the current date in UTC format
    Set dtmStart = CreateObject("WbemScripting.SWbemDateTime")
    dtmStart.SetVarDate Now, True

    ' Subtract the script_timeout value
    dtmNew = DateAdd("s", (script_timeout * -1), dtmStart.GetVarDate(True))

    ' Convert our dtmNew time back to UTC format, since that's the format needed for the WMIService query, below.
    Set dtmTarget = CreateObject("WbemScripting.SWbemDateTime")
    dtmTarget.SetVarDate dtmNew, True

    Set objWMIService = GetObject("winmgmts:{impersonationLevel=impersonate}!\\.\root\cimv2")

    ' Pull a list of all processes that are over (script_timeout) seconds old
    Set colProcesses = objWMIService.ExecQuery _
        ("Select * from Win32_Process WHERE CreationDate < '" & dtmTarget & "'")

    For each objProcess in colProcesses
        ' Look for cscript.exe processes only
        if objProcess.Name = "cscript.exe" then
            ' Look for audit.vbs processes with the //Nologo cmd line option.
         ' ATTENTION: The //Nologo cmd line option should NOT be used to start the initial audit, or it will kill itself off after script_timeout seconds
            if InStr(objProcess.CommandLine, "//Nologo") and InStr(objProcess.CommandLine, "audit.vbs") then
            ' The command line looks something like this: "C:\WINDOWS\system32\cscript.exe" //Nologo audit.vbs COMPUTERNAME
            ' Get the position of audit.vbs in the command line, and add 10 to get to the start of the workstation name
            position = InStr(objProcess.CommandLine, "audit.vbs") + 10
            affectedComputer = Mid(objProcess.CommandLine,position)
            if debugging > 0 then echo("" & Now & "," & affectedComputer & " - Hung Process Killed. ") end if
            LogKilledAudit("Hung Process Killed for machine: " & affectedComputer)
                objProcess.Terminate
            end if
        end if
    Next
End Sub


Function LogKilledAudit(txt)
   on error resume next
   dim Today, YYYYmmdd, fp, txtarr, txtline, todaystr
   today = now
   logfilename = "killed_audits.log"
   todaystr = datepart("yyyy", today)&"/"&_
		right("00"&datepart("m", today), 2)&"/"&_
		right("00"&datepart("d", today), 2)&" "&_
		right("00"&datepart("h", today), 2)&":"&_
		right("00"&datepart("n", today), 2)&":"&_
		right("00"&datepart("s", today), 2)
   Set objFSO = CreateObject("Scripting.FileSystemObject")
   set fp = objFSO.OpenTextFile(logfilename, 8, true)
   if (debugging > 0 and err <> 0) then wscript.echo(err.number & " " & err.description) end if
   txtarr=Split(txt, vbcrlf)
   txt=""
   for each txtline in txtarr
		txtline = trim(txtline)
		if txtline <> "" then
			txt = txt & todaystr & " - " & txtline & vbcrlf
		end if
   next
   if debugging > 0 then wscript.echo(left(txt, len(txt)-2)) end if
   fp.write txt
   fp.close
   set fp = nothing
   LogKilledAudit = true
End Function

Sub forceCScriptExecution
	Dim Arg, Str
	if not lcase( Right( wscript.FullName, 12 ) ) = "\cscript.exe" then
		for each arg in WScript.Arguments
			If InStr( Arg, " " ) Then Arg = """" & Arg & """"
				Str = Str & " " & Arg
		Next
		CreateObject("WScript.Shell").Run "cscript //nologo """ & WScript.ScriptFullName & """ " & Str
		WScript.Quit
	End If
End Sub