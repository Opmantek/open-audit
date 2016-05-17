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


' the number of audits to run concurrently
number_of_audits = 25

' the name and path of the nmap_windows script
nmap_windows = "c:\xampplite\open-audit\other\nmap_windows.vbs"

' the name and path of the audit_windows script
audit_windows = "c:\xampplite\open-audit\other\audit_windows.vbs"

' 0 = no debug
' 1 = basic debug
' 2 = verbose debug
debugging = 2

' defaults - meant to be populated on the command line
' but can also be set here
' note - command line arguements should take the form
'   network=192.168.0.1 subnet=255.255.255.0
'     OR
'   network=192.168.0.1/24
' you should not provide a / seperated network AND a subnet as well - use one or the other
network = "" ' eg - 192.168.0.1
subnet = ""  ' eg - 255.255.255.0
mask = ""    ' eg - /24

' should I attempt to use Nmap if it is installed?
use_nmap = "y"


Set objArgs = WScript.Arguments
for each strArg in objArgs
    if instr(strArg, "=") then
		varArray = split(strArg, "=")
		select case varArray(0)
				
			case "debugging"
				debugging = varArray(1)

			case "help"
				help = varArray(1)
				
			case "network"
				network = varArray(1)
				
			case "mask"
				mask = varArray(1)
				
			case "subnet"
				subnet = varArray(1)
				
			case "use_nmap"
				use_nmap = varArray(1)
				
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
	wscript.echo "It will run nmap against the target subnet and if a device is a Windows machine it will audit it, else submit the nmap result."
	wscript.echo ""
	wscript.echo "Valid command line options are below (items containing * are the defaults) and should take the format name=value (eg: debugging=1)."
	wscript.echo ""
	wscript.echo "  debugging"
	wscript.echo "     0 - No output."
	wscript.echo "     1 - Minimal Output."
	wscript.echo "    *2 - Verbose output."
	wscript.echo ""
	wscript.echo "  /? or help=y"
	wscript.echo "     y - Display this help output."
	wscript.echo "    *n - Do not display this output."
	wscript.echo ""
	wscript.echo "  network"
	wscript.echo "      - The subnet in to audit. Best to use a / separated network subnet."
	wscript.echo ""
	wscript.echo "  use_nmap"
	wscript.echo "    *y - Use Nmap to detect target if ti is installed."
	wscript.echo "     n - Do not use Nmap."
	wscript.echo ""
	wscript.quit
end if

' leave the below settings
const HKEY_CLASSES_ROOT  = &H80000000
const HKEY_CURRENT_USER  = &H80000001
const HKEY_LOCAL_MACHINE = &H80000002
const HKEY_USERS         = &H80000003
const FOR_APPENDING 	 = 8
const ads_scope_subtree  = 2
strComputer = "."
count = 0

set objWMIService = GetObject("winmgmts:\\.\root\cimv2") 
Set wshShell = CreateObject( "WScript.Shell" )

set objWMIService = GetObject("winmgmts:\\" & strComputer & "\root\cimv2") 
set objWMIService2 = GetObject("winmgmts:\\" & strComputer & "\root\WMI")
set oReg = GetObject("winmgmts:{impersonationLevel=impersonate}!\\" & strComputer & "\root\default:StdRegProv")
set objFSO = CreateObject("Scripting.FileSystemObject")
set wshNetwork = WScript.CreateObject( "WScript.Network" )

set objlocalwmiservice = getobject("winmgmts:root\cimv2")
set colitems = objlocalwmiservice.execquery("select * from win32_process",,48)
for each objitem in colitems
	if instr (objitem.commandline, wscript.scriptname) <> 0 then
		current_pid = objitem.processid
	end if
next

if use_nmap = "y" then
	if instr(lcase(wshShell.ExpandEnvironmentStrings( "PATH=%PATH%" )), "\nmap") then
		nmap_installed = "y"
		if debugging > 0 then wscript.echo "Using NMap."
	else
		nmap_installed = "n"
		if debugging > 0 then wscript.echo "Not using NMap."
	end if
end if


if instr(network, "/") then
	i = split(network, "/")
	network = i(0)
	mask = i(1)
end if

if subnet = "" and mask > "" then
	subnet = MaskLengthToIP(mask)
end if

if subnet > "" and mask = "" then
	mask = MaskLength(subnet)
end if

binSNM=str2bin(subnet) 
binIP=str2bin(network) 

'IP <AND> SN to find Network addresses
for c=32 to 1 step -1
  temp=(cint(mid(binIP,c, 1)) and cint(mid(binSNM,c, 1))) & temp
next
netwAdd=temp : temp=""

'IP <OR> SN to find blocks of all "ones" - these addresss are broadcast addresses
for c=32 to 1 step -1
  temp=(cint(mid(binIP,c, 1)) or cint(mid(binSNM,c, 1))) & temp
next
bcCheck=temp : temp=""

'Calc 1st. host address in range (Network Address + 1)
ist=binAdd(netwAdd,string(31, "0")&"1")

'Calc Last host address in range (111111...1 - bcCheck + IP - 0...000001)
lst=binSub(string(32,"1"),bcCheck) 
lst=binadd(lst,binIP)
lst=binsub(lst,string(31, "0")&"1" )

first_ip = bin2str(ist)
last_ip = bin2str(lst)
host_count = Bin2Dec(binsub(lst,ist))

if debugging > 0 then
	wscript.echo "Network: " & network
	wscript.echo "Mask: " & mask
	wscript.echo "Subnet: " & subnet
	wscript.echo "First address: " & first_ip
	wscript.echo "Last Address: " & last_ip
	wscript.echo "Scanning " & host_count & " hosts."
end if

redim pc_array(host_count)
first_split = split(first_ip, ".")
last_split = split(last_ip, ".")


if nmap_installed = "y" then
	' run a ping scan only - no port detection - to determine which hosts are up
	' using nmap is faster than using Windows WMI ping.
	command = nmap_exe & "nmap.exe -sn -n " & network & "/" & mask
	if debugging > 1 then wscript.echo command end if
	set objExecObject = wshShell.Exec(command)
	do while not objExecObject.StdOut.AtEndOfStream
		nmap_result = objExecObject.StdOut.ReadAll()
	loop
	nmap_result_array = split(nmap_result, vbcrlf)
	' count the number of hosts up so we can set the array size
	for each line in nmap_result_array
		if (instr(lcase(line), "nmap scan report for") = 1) then
			if debugging > 2 then wscript.echo "HIT: " & line end if
			count = count + 1
		end if
	next
	count = count - 1
	redim pc_array(count)
	count = 0
	' feed the hosts into the array
	for each line in nmap_result_array
		if (instr(lcase(line), "nmap scan report for") = 1) then
			' we have a host responding
			ip_split = split(line)
			' add it to the array of devices to nmap scan
			pc_array(count) = ip_split(4)
			count = count + 1
			if debugging > 2 then wscript.echo "HIT: " & ip_split(4) end if
		end if
	next
else
	' no nmap installed - use Windows WMI ping.
	for a = first_split(0) to last_split(0)
		for b = first_split(1) to last_split(1)
			for c = first_split(2) to last_split(2)
				for d = first_split(3) to last_split(3)
					current_ip = a & "." & b & "." & c & "." & d
					set ping = objWMIService.ExecQuery("SELECT * FROM Win32_PingStatus WHERE Timeout = 200 and Address = '" & current_ip & "'")
					for each item in ping
						if (IsNull(item.StatusCode) or (item.Statuscode <> 0)) then
							' it is not switched on
							if debugging > 2 then wscript.echo "Miss: " & d end if
						else
							if debugging > 2 then wscript.echo "Hit: " & current_ip end if
							pc_array(count) = current_ip
							count = count + 1
						end if
					next
				next
			next
		next
	next
	count = count -1
	redim Preserve pc_array(count)
end if

num_running = HowMany

if nmap_installed = "y" then
	' call the nmap_windows script for each host in the array - this will call audit_windows if needed
	for i = 0 to ubound(pc_array)
		while num_running > number_of_audits
			wscript.echo("processes running (" & num_running & ") greater than number wanted (" & number_of_audits & ")")
			wscript.echo("therefore - sleeping for 4 seconds.")
			wscript.sleep 4000
			num_running = HowMany
		wend
		if pc_array(i) <> "" then
			wscript.echo(i & " of " & ubound(pc_array))
			wscript.echo("processes running: " & num_running)
			wscript.echo("next system: " & pc_array(i))
			wscript.echo("--------------")
			command = "cscript //nologo " & chr(34) & nmap_windows & chr(34) & " ip_address=" & pc_array(i)
			set shell = wscript.createobject("wscript.shell")
			shell.run command, 6, false
			set shell = nothing
			num_running = HowMany
		end if
	next


else 
	' use the audit_windows script
	for i = 0 to ubound(pc_array)
		while num_running > number_of_audits
			wscript.echo("processes running (" & num_running & ") greater than number wanted (" & number_of_audits & ")")
			wscript.echo("therefore - sleeping for 4 seconds.")
			wscript.sleep 4000
			num_running = HowMany
		wend
		if pc_array(i) <> "" then
			wscript.echo(i & " of " & ubound(pc_array))
			wscript.echo("processes running: " & num_running)
			wscript.echo("next system: " & pc_array(i))
			wscript.echo("--------------")
			command = "cscript //nologo " & chr(34) & audit_windows & chr(34) & " " & pc_array(i) & " ldap=" & local_domain
			set shell = wscript.createobject("wscript.shell")
			shell.run command, 6, false
			set shell = nothing
			num_running = HowMany
		end if
	next
end if

' end of the main script
wscript.quit

Function Bin2Dec(strBin)
	'Plain old binary to decimal function
	result = 0
	for intIndex = len(strBin) to 1 step -1
		strDigit = mid(strBin, intIndex, 1)
		if strDigit = "0" then
			'do nothing
		elseif strDigit = "1" then
			result = result + (2 ^ (len(strBin)-intIndex))
		else
			Bin2Dec = 0
		exit for
		end if
	next
	Bin2Dec = result
End Function


Function bin2str(strBinary)
	'special binary to decimal function
	'input 32bit binary number
	'output 4 octet ip address 
   For iPosOct = 1 To 4 
      strOctBin = Right(Left(strBinary, iPosOct * 8), 8) 
      intOctet = 0 
      intValue = 1 
      For iPosBin = 1 To Len(strOctBin) 
         If Left(Right(strOctBin, iPosBin), 1) = "1" Then 
            intOctet = intOctet + intValue 
         end if
         intValue = intValue * 2 
      Next 
      If bin2str = Empty Then 
         bin2str = CStr(intOctet) 
      Else 
         bin2str = bin2str & "." & CStr(intOctet)
      end if 
   Next 

End Function 

Function str2bin(strAddress) 
	'special decimal to binary function
	'input 4 octet ip address 
	'output 32bit binary number
	objAddress = Split(strAddress, ".") 
	For Each strOctet In objAddress 
		intOctet = CInt(strOctet)
		strOctBin = "" 
		For x = 1 To 8 
			If intOctet Mod 2 > 0 Then 
				strOctBin = "1" & strOctBin 
			Else 
				strOctBin = "0" & strOctBin 
			End If 
				intOctet = Int(intOctet / 2) 
		Next 
		str2bin = str2bin & strOctBin 
	Next 

End Function 

function binSub(binA,binB)
	'subtract one 32bit binary number from another
	'binA must be biggest
	c=0
	for i=32 to 1 step-1
		a=cint(mid(binA,i,1))
		b=cint(mid(binB,i,1))
		if a=0 and b=0 and c=0 then 
			subt=0  : c=0 
		elseif a=1 and b=0 and c=0 then 
			subt=1  : c=0 
		elseif a=0 and b=1 and c=0 then 
			subt=1  : c=1 
		elseif a=1 and b=1 and c=0 then 
			subt=0  : c=0 
		elseif a=1 and b=1 and c=1 then 
			subt=1  : c=1
		elseif a=1 and b=0 and c=1 then 
			subt=0  : c=0
		elseif a=0 and b=1 and c=1 then 
			subt=0  : c=0 
		elseif a=0 and b=0 and c=1 then 
			subt=1  : c=1
		else
			wscript.echo "This function is only for subtracting 2 32bit binary numbers"
			binSub=0 : exit function
		end if            
		total=subt&total
		'wscript.echo "a-"&BinA&" "&a&vbcrlf&"b-"&BinB&" "&b&vbcrlf&"subtraction "&subt&vbcrlf&"carry "& c&vbcrlf&"x-"&total&vbcrlf&cvcrlf
	next
	if c=1 then 
		wscript.echo "Error you are subtracting a larger number from a smaller number"&vbcrlf&binA&vbcrlf&binB
	end if
	binsub=total
end function

function binAdd(binA,binB)
	'add two 32bit binary numbers together
	c=0
	for i=32 to 1 step-1
		a=cint(mid(binA,i,1))
		b=cint(mid(binB,i,1))
		if a=0 and b=0 and c=0 then 
			add=0  : c=0 
		elseif a=1 and b=0 and c=0 then 
			add=1  : c=0 
		elseif a=0 and b=1 and c=0 then 
			add=1  : c=0 
		elseif a=1 and b=1 and c=0 then 
			add=0  : c=1 
		elseif a=1 and b=1 and c=1 then 
			add=1  : c=1
		elseif a=1 and b=0 and c=1 then 
			add=0  : c=1
		elseif a=0 and b=1 and c=1 then 
			add=0  : c=1 
		elseif a=0 and b=0 and c=1 then 
			add=1  : c=0
		else
			wscript.echo "Error this function is only for adding 2 32bit binary numbers together"
			binAdd=0 : exit function
		end if
		total=add&total
		'wscript.echo "a-"&BinA&" "&a&vbcrlf&"b-"&BinB&" "&b&vbcrlf&"addition "&add&vbcrlf&"carry "& c&vbcrlf&"x-"&total
	next
	binAdd=total
end function

Function MaskLength(strMask)
	' Converts an subnet mask into a mask length in bits
	Dim arrOctets : arrOctets = Split(strMask, ".")
	Dim i
	For i = 0 to UBound(arrOctets)
		Dim intOctet : intOctet = CInt(arrOctets(i))
		Dim j, intMaskLength
		For j = 0 To 7
			If intOctet And (2^(7 -j)) Then
				intMaskLength = intMaskLength + 1
			End If
		Next
	Next
	MaskLength = intMaskLength
End Function

Function MaskLengthToIP(intMask)
	' Converts a mask length to the decimal format mask
	Dim arrOctets(3)
	Dim intFullOctets : intFullOctets = (intMask - (intMask Mod 8)) / 8
	Dim i
	For i = 0 To (intFullOctets - 1)
		arrOctets(i) = "255"
	Next
	Dim intPartialOctetLen : intPartialOctetLen = intMask Mod 8
	Dim j
	If intPartialOctetLen > 0 Then
		Dim intOctet
		For j = 0 To (intPartialOctetLen - 1)
			intOctet = intOctet + 2^(7 - j)
		Next
		arrOctets(i) = intOctet : i = i + 1
	End If
	For j = i To 3
		arrOctets(j) = "0"
	Next
	MaskLengthToIP = Join(arrOctets, ".")
End Function


Function HowMany()
	Dim Proc1,Proc2,Proc3
	CheckForHungWMI()
	Set Proc1 = GetObject("winmgmts:{impersonationLevel=impersonate}!\\.\root\cimv2")
	Set Proc2 = Proc1.ExecQuery("select * from win32_process" )
	HowMany=0
	For Each Proc3 in Proc2
		If LCase(Proc3.Caption) = "cscript.exe" Then
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
            Echo("" & Now & "," & affectedComputer & " - Hung Process Killed. ")
            LogKilledAudit("Hung Process Killed for machine: " & affectedComputer)
                objProcess.Terminate
            end if
        end if
    Next
End Sub

Function LogKilledAudit(txt)
   on error resume next
   dim Today, YYYYmmdd, fp, txtarr, txtline, todaystr
   today=Now
   logfilename="killed_audits.log"
   todaystr=datepart("yyyy", today)&"/"&_
		right("00"&datepart("m", today), 2)&"/"&_
		right("00"&datepart("d", today), 2)&" "&_
		right("00"&datepart("h", today), 2)&":"&_
		right("00"&datepart("n", today), 2)&":"&_
		right("00"&datepart("s", today), 2)
   Set objFSO = CreateObject("Scripting.FileSystemObject")
   set fp=objFSO.OpenTextFile(logfilename, 8, true)
   If err<>0 then wscript.echo err.number&" "&err.description
   txtarr=Split(txt, vbcrlf)
   txt=""
   For each txtline in txtarr
		txtline=trim(txtline)
		if txtline<>"" then
			txt=txt&todaystr&" - "&txtline&vbcrlf
		End if
   Next
   WScript.Echo(left(txt, len(txt)-2))
   fp.write txt
   fp.Close
   set fp=Nothing
   LogKilledAudit=True
End Function 