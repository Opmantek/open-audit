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
' @author Mark Unwin <marku@opmantek.com> and others
' @version 1.12.6
' @copyright Copyright (c) 2014, Opmantek
' @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3

forceCScriptExecution

start_time = Timer

' NOTE - Scheduled Tasks and Share Sizes can only be retrieved when running locally.
' below are the default settings

' default to localhost
strcomputer = "."

' submit the audit to the OAv2 server
submit_online = "y"

' create an XML text file of the result in the current directory
create_file = "n"

' the address of the OAv2 server "submit" page
url = "http://localhost/open-audit/index.php/system/add_system"

' submit via a proxy (using the settings of the user running the script)
use_proxy = "n"

' the username (if not using the user running the script)
struser = ""

' the password (if not using the user running the script)
strpass = ""

' optional - assign any PCs audited to this Org - take the OrgId from OAv2 interface
org_id = ""

' optional - query this Active Directory attribute to determine the users work unit
' if attribute #1 produces nothing, then try attribute #2
windows_user_work_1 = "physicalDeliveryOfficeName"
windows_user_work_2 = "company"

' do not attempt to query mount points
skip_mount_point = "n"

' do not enumerate printers
skip_printer = "n"

' audit installed software
skip_software = "n"

' use the win32_product WMI class (not recommended by Microsoft).
' https://support.microsoft.com/kb/974524
' added and set to disabled by default in 1.5.2
win32_product = "n"

' retrieve all DNS names
skip_dns = "n"

' run netstat on the target
' n = no
' y = yes
' s = servers only
run_netstat = "s"

' if set then delete the audit script upon completion
' useful when starting the script on a remote machine and leaving no trace
self_delete = "n"

' 0 = no debug
' 1 = basic debug
' 2 = verbose debug
' 3 = very verbose debug
debugging = "1"

' In normal use, DO NOT SET THIS.
' This value is passed in when running the audit_domain script.
' Only set this value if your audit host is on a different domain than audit targets and you are not using audit_domain.vbs - IE, you are running "cscript audit_windows.vbs COMPUTER" where COMPUTER is on a seperate domain than the PC you are running the command on. This would then apply to ALL systems audited like this. This would be the exception rather than the rule. Do not do this unless you know what you are doing :-)
ldap = ""

' set this greater than 0 if you wish to insert systems from AD that have only been seen in the last XX days
ldap_seen_days = "0"

' set this greater than 2000-01-01 if you wish to insert systems from AD that have only been seen since XX date
ldap_seen_date = "2012-06-30"

' attempt to ping a target computer before audit?
ping_target = "n"

' set by the Discovery function - do not normally set this manually
system_id = ""

details_to_lower = "y"

help = "n"

hide_audit_window = "n"

' Should we attempt to audit any connected SAN's
audit_san="y"

' If we detect the san management software, should we run an auto-discover before the query
run_san_discover = "n"

' below we take any command line arguements
' to override the variables above, simply include them on the command line like submit_online=n
' NOTE - argurments are case sensitive
Set objArgs = WScript.Arguments
For Each strArg in objArgs
    if instr(strArg, "=") then
	argName = lcase(left(strArg,inStr(strArg,"=")-1))
	argValue = mid(strArg,inStr(strArg,"=")+1)
	select case argName

	case "create_file"
	create_file = argValue

	case "debugging"
	debugging = argValue

	case "help"
	help = argValue

	case "ldap"
	ldap = argvalue

	case "org_id"
	org_id = argValue

	case "ping_target"
	ping_target = argValue

	case "run_netstat"
	run_netstat = argValue

	case "self_delete"
	self_delete = argvalue

	case "skip_printer"
	skip_printer = argvalue

	case "skip_software"
	skip_software = argvalue

	case "skip_dns"
	skip_dns = argvalue

	case "skip_mount_point"
	skip_mount_point = argvalue

	case "strcomputer"
	strcomputer = argvalue

	case "struser"
	struser = argvalue

	case "strpass"
	strpass = argvalue

	case "submit_online"
	submit_online = argValue

	case "system_id"
	system_id = argValue

	case "url"
	url = argValue

	case "use_proxy"
	use_proxy = argValue

	case "windows_user_work_1"
	windows_user_work_1 = argvalue

	case "windows_user_work_2"
	windows_user_work_2 = argvalue

	case "win32_product"
	win32_product = argvalue

	case "details_to_lower"
	details_to_lower = argvalue

	case "hide_audit_window"
	hide_audit_window = argvalue

	case "audit_san"
	audit_san = argvalue

	case "run_san_discover"
	run_san_discover = argvalue

	end select
	else
	if (strArg = "/help") or (strArg = "/?") then
	help = "y"
	else
	strcomputer = strArg
	end if
	end if
next

if (help = "y") then
	wscript.echo "------------------------------"
	wscript.echo "Open-AudIT Domain Audit Script"
	wscript.echo "(c) Opmantek, 2014."
	wscript.echo "------------------------------"
	wscript.echo "This script should be run against a Windows based computer. It audits the target Windows computer and creates a result which can be submitted to the Open-AudIT server or saved as an XML file."
	wscript.echo ""
	wscript.echo "Valid command line options are below (items containing * are the defaults) and should take the format name=value (eg: debugging=1)."
	wscript.echo ""
	wscript.echo "  create_file"
	wscript.echo "     y - Create an XML file containing the audit result."
	wscript.echo "    *n - Do not create an XML result file."
	wscript.echo ""
	wscript.echo "  debugging"
	wscript.echo "     0 - No output."
	wscript.echo "    *1 - Minimal Output."
	wscript.echo "     2 - Verbose output."
	wscript.echo "     3 - Very Verbose output."
	wscript.echo ""
	wscript.echo "  /? or /help or help=y"
	wscript.echo "      y - Display this help output."
	wscript.echo "     *n - Do not display this output."
	wscript.echo ""
	wscript.echo "  ladp"
	wscript.echo "       - Set by the audit_domain or discover_domain scripts. Do not set."
	wscript.echo ""
	wscript.echo "  local_domain"
	wscript.echo "        - The domain you wish to audit. Should be in the format LDAP://your.domain.name"
	wscript.echo ""
	wscript.echo "  org_id"
	wscript.echo "        - The org_id (an integer) taken from Open-AudIT. If set all devices found will be associated to that Organisation."
	wscript.echo ""
	wscript.echo "  ping_target"
	wscript.echo "      *n - Attempt to ping the target computer to determine if it is online."
	wscript.echo ""
	wscript.echo "  run_netstat"
	wscript.echo "     *s - Run Netstat against 'server' class systems."
	wscript.echo "      n - Do not run against any computers."
	wscript.echo "      y - Run against all computers."
	wscript.echo ""
	wscript.echo "  self_delete"
	wscript.echo "     *n - Do not delete the audit_windows script upon completion."
	wscript.echo "      y - Delete the audit script file upon script completion."
	wscript.echo ""
	wscript.echo "  skip_*"
	wscript.echo "     *n - Do not skip detecting attributes in this section of the audit script."
	wscript.echo "      y - Skip detection of this particular section."
	wscript.echo "     Valid sections are dns, printer, software, mount_point."
	wscript.echo ""
	wscript.echo "  strcomputer"
	wscript.echo "       *. - The name (or IP address) of the computer being audited. Default is '.', which means the local system upon which the script is being run."
	wscript.echo ""
	wscript.echo "  struser / strpass"
	wscript.echo "          - The username (in the format domain/username) and password of the account running the script. Defaults are not set, which means it will run in the context of the account running the script."
	wscript.echo ""
	wscript.echo "  submit_online"
	wscript.echo "      *y - Submit the audit result to the Open-AudIT server."
	wscript.echo "       n - Don't submit the audit result."
	wscript.echo ""
	wscript.echo "  use_proxy"
	wscript.echo "      *n - Do not use the system or user level proxy to submit the audit result."
	wscript.echo "       y - Use the proxy to submit the result."
	wscript.echo ""
	wscript.echo "  windows_user_work_1"
	wscript.echo "      physicalDeliveryOfficeName - The Active Directory field to assign the computer to (first preference)."
	wscript.echo ""
	wscript.echo "  windows_user_work_2"
	wscript.echo "      company - The Active Directory field to assign the computer to (second preference)."
	wscript.echo ""
	wscript.echo "  win32_product"
	wscript.echo "      *n - Tells the audit script to NOT query the win32_product class. It is recommended by Microsoft not to use this class as is causes Windows to check the integrity of all installed packages (resulting in 1035 events in the log) and can cause performance issues."
	wscript.echo "       y - Do query win32_product anyway and use the result to add to the list of installed software."
	wscript.echo ""
	wscript.echo "  details_to_lower"
	wscript.echo "      *y - Convert the hostname to lower."
	wscript.echo "       n - Keep the hostname as per retrieved."
	wscript.echo ""
	wscript.echo "  hide_window"
	wscript.echo "      *n - Do not hide the audit script window when executing."
	wscript.echo "       y - Hide the audit script window when executing."
	wscript.echo ""
	wscript.echo "  audit_san"
	wscript.echo "     *y - Should we audit a SAN if it is detected"
	wscript.echo "      n - Do not attempt to audit any attached SANs"
	wscript.echo ""
	wscript.echo "  run_san_discover"
	wscript.echo "     *n - Do not run smcli -A if we detect the SAN management software"
	wscript.echo "      Y - Run the command and update the list of any connected SANs"
	wscript.echo ""
	wscript.echo "  url"
	wscript.echo "    *http://localhost/open-audit/index.php/discovery/process_subnet - The http url of the Open-AudIT Server used to submit the result to."
	wscript.echo ""
	wscript.echo "The name of the resulting XML file will be in the format HOSTNAME-YYMMDDHHIISS.xml, as in the hostname of the machine the complete timestamp the audit was started."
	wscript.quit
end if

if hide_audit_window = "y" then
	hiddenExecution
end if

' ensure we have the correct function (add_system) in the system controller
' the url variable should be formatted like the following
' url = "http://SERVERNAME/open-audit/index.php/system/add_system"
if (right(url, 10) <> "add_system") then
	if (right(url, 1) = "/") then
	url = url & "add_system"
	else
	url = url & "/add_system"
	end if
end if'

' start the script
if debugging > "0" then wscript.echo "starting audit - " & strcomputer end if

if debugging > "2" then
	wscript.echo "Argurments"
	wscript.echo "-------------------"
	wscript.echo "create_file: " & create_file
	wscript.echo "debugging: " & debugging
	wscript.echo "ldap: " & ldap
	wscript.echo "org_id: " & org_id
	wscript.echo "ping_target: " & ping_target
	wscript.echo "run_netstat: " & run_netstat
	wscript.echo "self_delete: " & self_delete
	wscript.echo "skip_printer: " & skip_printer
	wscript.echo "skip_software: " & skip_software
	wscript.echo "skip_dns: " & skip_dns
	wscript.echo "skip_mount_point: " & skip_mount_point
	wscript.echo "strcomputer: " & strcomputer
	wscript.echo "struser: " & struser
	wscript.echo "strpass: " & strpass
	wscript.echo "submit_online: " & submit_online
	wscript.echo "system_id: " & system_id
	wscript.echo "url: " & url
	wscript.echo "use_proxy: " & use_proxy
	wscript.echo "windows_user_work_1: " & windows_user_work_1
	wscript.echo "windows_user_work_2: " & windows_user_work_2
	wscript.echo "details_to_lower: " & details_to_lower
	wscript.echo "hide_audit_window: " & hide_audit_window
	wscript.echo "-------------------"
end if

system_timestamp = Year(Now()) & "-" & Right("0" & Month(Now()),2) & "-" & Right("0" & Day(Now()),2) & " " & Right("0" & Hour(Now()),2) & ":" & Right("0" & Minute(Now()),2) & ":" & Right("0" & Second(Now()),2)

''''''''''''''''''''''''''''''''''''''''
' Don't change the settings below here '
''''''''''''''''''''''''''''''''''''''''
const HKEY_CLASSES_ROOT  	= &H80000000
const HKEY_CURRENT_USER  	= &H80000001
const HKEY_LOCAL_MACHINE 	= &H80000002
const HKEY_USERS         	= &H80000003
const FOR_READING        	= 1
const FOR_WRITING        	= 2
const FOR_APPENDING      	= 8
Const ADS_NAME_INITTYPE_GC 	= 3
Const ADS_NAME_TYPE_NT4 	= 3
Const ADS_NAME_TYPE_1779 	= 1
Const ADS_SECURE_AUTHENTICATION = 1
Const ADS_USE_ENCRYPTION 	= 2
Const ADS_SCOPE_SUBTREE 	= 2
Const wbemConnectFlagUseMaxWait = 128
Const wbemFlagReturnImmediately = &h10
Const wbemFlagForwardOnly = &h20
Const TristateTrue          = -1

dim objTrans, objDomain
dim dt : dt = Now()
set objFSO = CreateObject("Scripting.FileSystemObject")
set objShell = CreateObject("WScript.Shell")
set wshNetwork = WScript.CreateObject("WScript.Network")
dim local_hostname : local_hostname = wshNetwork.ComputerName

audit_wmi_fails = ""

set result = CreateObject("ADODB.Stream")
result.Type = 2
result.Open
result.Position = 0
result.Charset = "UTF-8"

' some local items
set objWMIService = GetObject("winmgmts:\\.\root\cimv2")
set colItems = objWMIService.ExecQuery("Select * from Win32_OperatingSystem",,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " local (Win32_OperatingSystem)" end if
for each objItem in colItems
	local_windows_build_number = objItem.BuildNumber
next
set colItems = objWMIService.ExecQuery("Select * from Win32_NetworkAdapterConfiguration " _
	& "WHERE IPEnabled = True or (ServiceName<>'' AND ServiceName<>'AsyncMac' " _
	& "AND ServiceName<>'VMnetx' AND ServiceName<>'VMnetadapter' " _
	& "AND ServiceName<>'Rasl2tp' AND ServiceName<>'msloop' " _
	& "AND ServiceName<>'PptpMiniport' AND ServiceName<>'Raspti' " _
	& "AND ServiceName<>'NDISWan' AND ServiceName<>'NdisWan4' AND ServiceName<>'RasPppoe' " _
	& "AND ServiceName<>'NdisIP' AND Description<>'PPP Adapter.') " _
	& "AND MACAddress is not NULL" ,,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " local (Win32_NetworkAdapterConfiguration) 1" end if
local_dns_server = ""
for each objItem in colItems
	if (not isnull(objItem.DNSServerSearchOrder)) then
	local_dns_server = objItem.DNSServerSearchOrder(0)
	end if
next

' enumerate all the ip addresses so we can determine if we are running against localhost
local_net = ""
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
local_net = local_net & " " & local_hostname & " "
if debugging > "1" then
	wscript.echo "LocalNet: " & local_net
	wscript.echo "Target: " & strcomputer
	if (instr(lcase(local_net), lcase(strcomputer)) <> 0) then
	wscript.echo "Match: Auditing localhost."
	else
	wscript.echo "No Match: Auditing remote host."
	end if
end if

' Are we auditing the local machine?
if (instr(lcase(local_net), lcase(strcomputer)) <> 0) and (strcomputer <> ".") then
	if debugging > "0" then wscript.echo "Changed strcomputer from " & strcomputer & " to . because we're auditing this local machine." end if
	strcomputer = "."
end if

' If auditing the local machine, disregard and supplied credentials
if (struser <> "" and strcomputer = ".") then
	if debugging > "0" then wscript.echo "Disregarding username / password as WMI does not support connecting to localhost with credentials." end if
	struser = ""
	strpass = ""
end if

' Ping Test
pc_alive = 0
if ping_target = "y" then
	if (strcomputer = ".") then
	pc_alive = 1
	if debugging > "0" then wscript.echo "Disregarding ping_target because we're auditing localhost." end if
	else
	if (cint(local_windows_build_number) > 2222 and not local_windows_build_number = "3000") then
	On Error Resume Next
	set ping = objWMIService.ExecQuery("SELECT * FROM Win32_PingStatus WHERE Timeout = 200 and Address = '" & strcomputer & "'")
	on error goto 0
	for each item in ping
	if (IsNull(item.StatusCode) or (item.Statuscode <> 0)) then
	' it is not switched on
	pc_alive = 0
	if debugging > "0" then wscript.echo "PC " & strcomputer & " not responding to ping" end if
	else
	pc_alive = 1
	if debugging > "0" then wscript.echo "PC " & strcomputer & " responding to ping" end if
	end if
	next
	else
	pc_alive = 1
	if debugging > "0" then wscript.echo "Auditing PC is older than Win2000, Cannot ping target PC." end if
	end if
	end if
else
	if (strcomputer = ".") then
	pc_alive = 1
	if debugging > "0" then wscript.echo "Not pinging target because we're auditing localhost." end if
	else
	if debugging > "0" then wscript.echo "Not pinging target (override with ping_target=y)." end if
	end if
end if

error_returned = 0
if ((struser <> "") and (instr(lcase(local_net), lcase(strcomputer)) = 0)) then
	' credentials passed and not localhost

	if ((pc_alive = 1) or (ping_target = "n")) then

	if (error_returned = 0) then
	On Error Resume Next
	Set wmiLocator = CreateObject("WbemScripting.SWbemLocator")
	error_returned = Err.Number
	error_description = Err.Description
	on error goto 0
	if (error_returned <> 0) then
	if debugging > "0" then wscript.echo "Problem creating WBEM object (0) to " &  strcomputer end if
	if debugging > "0" then wscript.echo "Error Number:" & error_returned end if
	if debugging > "0" then wscript.echo "Error Description:" & error_description end if
	end if
	end if

	if (error_returned = 0) then
	On Error Resume Next
	Set wmiNameSpace = wmiLocator.ConnectServer(strcomputer, "\root\default", struser, strpass, "", "", wbemConnectFlagUseMaxWait)
	error_returned = Err.Number
	error_description = Err.Description
	on error goto 0
	if (error_returned <> 0) then
	if debugging > "0" then wscript.echo "Problem authenticating (1) to " &  strcomputer end if
	if debugging > "0" then wscript.echo "Error Number:" & error_returned end if
	if debugging > "0" then wscript.echo "Error Description:" & error_description end if
	end if
	end if

	if (error_returned = 0) then
	On Error Resume Next
	wmiNameSpace.Security_.ImpersonationLevel = 3
	error_returned = Err.Number
	error_description = Err.Description
	on error goto 0
	if (error_returned <> 0) then
	if debugging > "0" then wscript.echo "Problem authenticating (2) to " &  strcomputer end if
	if debugging > "0" then wscript.echo "Error Number:" & error_returned end if
	if debugging > "0" then wscript.echo "Error Description:" & error_description end if
	end if
	end if

	if (error_returned = 0) then
	On Error Resume Next
	Set oReg = wmiNameSpace.Get("StdRegProv")
	Set objWMIService = wmiLocator.ConnectServer(strcomputer, "\root\cimv2",struser,strpass, "", "", wbemConnectFlagUseMaxWait)
	error_returned = Err.Number
	error_description = Err.Description
	on error goto 0
	if (error_returned <> 0) then
	if debugging > "0" then wscript.echo "Problem authenticating (3) to " &  strcomputer end if
	if debugging > "0" then wscript.echo "Error Number:" & error_returned end if
	if debugging > "0" then wscript.echo "Error Description:" & error_description end if
	end if
	end if

	if (error_returned = 0) then
	On Error Resume Next
	objWMIService.Security_.ImpersonationLevel = 3
	error_returned = Err.Number
	error_description = Err.Description
	on error goto 0
	if (error_returned <> 0) then
	if debugging > "0" then wscript.echo "Problem authenticating (4) to " &  strcomputer end if
	if debugging > "0" then wscript.echo "Error Number:" & error_returned end if
	if debugging > "0" then wscript.echo "Error Description:" & error_description end if
	end if
	end if

	if (error_returned = 0) then
	On Error Resume Next
	Set objWMIService2 = wmiLocator.ConnectServer(strcomputer, "\root\WMI",struser,strpass, "", "", wbemConnectFlagUseMaxWait)
	error_returned = Err.Number
	error_description = Err.Description
	on error goto 0
	if (error_returned <> 0) then
	if debugging > "0" then wscript.echo "Problem authenticating (5) to " &  strcomputer end if
	if debugging > "0" then wscript.echo "Error Number:" & error_returned end if
	if debugging > "0" then wscript.echo "Error Description:" & error_description end if
	end if
	end if

	if (error_returned = 0) then
	On Error Resume Next
	objWMIService2.Security_.ImpersonationLevel = 3
	error_returned = Err.Number
	error_description = Err.Description
	on error goto 0
	if (error_returned <> 0) then
	if debugging > "0" then wscript.echo "Problem authenticating (6) to " &  strcomputer end if
	if debugging > "0" then wscript.echo "Error Number:" & error_returned end if
	if debugging > "0" then wscript.echo "Error Description:" & error_description end if
	end if
	end if
	end if ' pc_alive or ping_target = n
else
	' localhost or no credentials passed, therefore auditing as the user running this script
	if ((pc_alive = 1) or (ping_target = "n")) then

	if (error_returned = 0) then
	On Error Resume Next
	set objWMIService = GetObject("winmgmts:\\" & strcomputer & "\root\cimv2")
	error_returned = Err.Number
	error_description = Err.Description
	on error goto 0
	if (error_returned <> 0) then
	if debugging > "0" then wscript.echo "Problem authenticating (7) to " &  strcomputer end if
	if debugging > "0" then wscript.echo "Error Number:" & error_returned end if
	if debugging > "0" then wscript.echo "Error Description:" & error_description end if
	end if
	end if

	if (error_returned = 0) then
	On Error Resume Next
	set objWMIService2 = GetObject("winmgmts:\\" & strcomputer & "\root\WMI")
	error_returned = Err.Number
	error_description = Err.Description
	on error goto 0
	if (error_returned <> 0) then
	if debugging > "0" then wscript.echo "Problem authenticating (8) to " &  strcomputer end if
	if debugging > "0" then wscript.echo "Error Number:" & error_returned end if
	if debugging > "0" then wscript.echo "Error Description:" & error_description end if
	end if
	end if

	if (error_returned = 0) then
	On Error Resume Next
	set oReg = GetObject("winmgmts:{impersonationLevel=impersonate}!\\" & strcomputer & "\root\default:StdRegProv")
	error_returned = Err.Number
	error_description = Err.Description
	if error_description = "" then error_description = "Access Denied. Check Firewall and user security permissions."
	on error goto 0
	if (error_returned <> 0) then
	if debugging > "1" then wscript.echo "Problem authenticating (9) to " &  strcomputer end if
	if debugging > "1" then wscript.echo "Error Number:" & error_returned end if
	if debugging > "1" then wscript.echo "Error Description:" & error_description end if
	end if
	end if
	end if ' pc_alive or ping_target = n
end if


if ((error_returned <> 0) or ((pc_alive = 0) and (ping_target = "y"))) then

	if ((pc_alive = 0) and (ping_target = "y")) then
	if debugging > "1" then wscript.echo "Computer " &  strcomputer & " is not responding to ping." end if
	end if

	if (error_returned <> 0) then
	if debugging > "1" then wscript.echo "Cannot connect to " & strcomputer end if
	end if

	if debugging > "1" then wscript.echo "Attempting Active Directory data retrieval." end if

	if ldap = "" then
	if debugging > "1" then wscript.echo "No default LDAP provided, using local settings." end if
	set objWMIService = GetObject("winmgmts:\\.\root\cimv2")
	set colItems = objWMIService.ExecQuery("Select * from Win32_ComputerSystem",,32)
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_ComputerSystem)" : audit_wmi_fails = audit_wmi_fails & "Win32_ComputerSystem " : end if
	for each objItem in colItems
	ldap = "LDAP://" & LCase(objItem.Domain)
	next
	end if

	if ldap > "" then
	if debugging > "1" then wscript.echo "LDAP domain: " & ldap end if
	' retrieve what details we can from AD
	Set objConnection = CreateObject("ADODB.Connection")
	Set objCommand =   CreateObject("ADODB.Command")
	objConnection.Provider = "ADsDSOObject"
	objConnection.Open "Active Directory Provider"
	Set objCOmmand.ActiveConnection = objConnection
	objCommand.CommandText = "Select Name, pwdLastSet, lastlogon, dnshostname, distinguishedName, operatingsystem from '" & ldap & "' Where objectClass='computer' and name = '" & strcomputer & "'"
	objCommand.Properties("Page Size") = 10000
	objCommand.Properties("Searchscope") = ADS_SCOPE_SUBTREE
	Set objRecordSet = objCommand.Execute
	if objRecordSet.RecordCount > 0 then
	if debugging > "1" then wscript.echo "LDAP details retrieved." end if
	objRecordSet.MoveFirst
	Do Until objRecordSet.EOF
	system_hostname = ""
	ip_address = ""
	computer_dns = ""
	family = ""
	os_group = ""
	os_name = ""
	computer_ou = ""
	last_seen = ""
	icon = ""
	last_logon = ""
	dns_hostname = ""
	on error resume next
	set objLastLogon = objRecordSet.Fields("lastlogon").Value
	intLastLogonTime = objLastLogon.HighPart * (2^32) + objLastLogon.LowPart
	intLastLogonTime = intLastLogonTime / (60 * 10000000)
	intLastLogonTime = intLastLogonTime / 1440
	thistime = intLastLogonTime + #1/1/1601#
	last_logon = datepart("yyyy", thistime) & "-" & right("00" & datepart("m", thistime), 2) & "-" & right("00" & datepart("d", thistime), 2)
	on error goto 0
	last_pass = ""
	on error resume next
	set objLastLogon = objRecordSet.Fields("pwdLastSet").Value
	intLastLogonTime = objLastLogon.HighPart * (2^32) + objLastLogon.LowPart
	intLastLogonTime = intLastLogonTime / (60 * 10000000)
	intLastLogonTime = intLastLogonTime / 1440
	thistime = intLastLogonTime + #1/1/1601#
	last_pass = datepart("yyyy", thistime) & "-" & right("00" & datepart("m", thistime), 2) & "-" & right("00" & datepart("d", thistime), 2)
	on error goto 0

	if (last_logon > last_pass) then
	last_seen = last_logon
	else
	last_seen = last_pass
	end if

	if instr(lcase(objRecordSet.Fields("operatingsystem").Value), "windows") then
	os_group = "Windows"
	else
	os_group = ""
	end if

	system_hostname = objRecordSet.Fields("Name").Value
	dns_hostname = objRecordSet.Fields("dnshostname").Value

	if details_to_lower = "y" then
	system_hostname = lcase(system_hostname)
	dns_hostname = lcase(dns_hostname)
	end if

	strParams = "%comspec% /c NSlookup " & dns_hostname
	if debugging > "1" then wscript.echo "Looking up DNS entry for " & dns_hostname end if
	Set objExecObj = objShell.exec(strParams)
	Do While Not objExecObj.StdOut.AtEndOfStream
		strText = objExecObj.StdOut.Readline()
		If instr(strText, "Server") then
			strServer = trim(replace(strText,"Server:",""))
		Elseif instr (strText, "Name") Then
			strhost = trim(replace(strText,"Name:",""))
		Elseif instr (strText, "Address") Then
			man_ip_address = trim(replace(strText,"Address:","")) : stradd = stradd + 1
		End if
	Loop
	if stradd = 1 then man_ip_address = "0.0.0.0" end if

	computer_ou = lcase(ou(objRecordSet.Fields("distinguishedName").Value))
	i = split(computer_ou, ",")
	for j = 1 to ubound(i)
	if instr(i(j), "dc=") then
	computer_dns = computer_dns & "." & i(j)
	end if
	next
	computer_dns = replace(computer_dns, ".dc=", ".")
	computer_dns = mid(computer_dns, 2)

	' i = split(dns_hostname, ".")
	' for j = 1 to ubound(i)
	' 	computer_dns = computer_dns & "." & i(j)
	' next

	if details_to_lower = "y" then
	computer_dns = lcase(computer_dns)
	end if

	os_name = "Microsoft " & objRecordSet.Fields("operatingsystem").Value
	family = os_family(objRecordSet.Fields("operatingsystem").Value)
	icon = lcase(replace(family, " ", "_"))
	if os_group = "Windows" then
	result.WriteText "<?xml version=""1.0"" encoding=""UTF-8""?>" & vbcrlf
	result.WriteText "<system>" & vbcrlf
	result.WriteText "	<sys>" & vbcrlf
	result.WriteText "		<timestamp>" & escape_xml(system_timestamp) & "</timestamp>" & vbcrlf
	result.WriteText "		<hostname>" & escape_xml(system_hostname) & "</hostname>" & vbcrlf
	result.WriteText "		<man_ip_address>" & escape_xml(man_ip_address) & "</man_ip_address>" & vbcrlf
	result.WriteText "		<domain>" & escape_xml(computer_dns) & "</domain>" & vbcrlf
	result.WriteText "		<type>computer</type>" & vbcrlf
	result.WriteText "		<icon>" & escape_xml(icon) & "</icon>" & vbcrlf
	result.WriteText "		<os_group>" & escape_xml(os_group) & "</os_group>" & vbcrlf
	result.WriteText "		<os_family>" & escape_xml(family) & "</os_family>" & vbcrlf
	result.WriteText "		<os_name>" & escape_xml(os_name) & "</os_name>" & vbcrlf
	result.WriteText "		<active_directory_ou>" & escape_xml(computer_ou) & "</active_directory_ou>" & vbcrlf
	result.WriteText "		<last_seen>" & escape_xml(last_seen) & "</last_seen>" & vbcrlf
	result.WriteText "		<last_seen_by>active directory</last_seen_by>" & vbcrlf
	result.WriteText "		<system_id>" & system_id & "</system_id>" & vbcrlf
	result.WriteText "	</sys>" & vbcrlf
	end if
	objRecordSet.MoveNext
	Loop
	result.WriteText "</system>" & vbcrlf
	if debugging > "1" then
	result.position = 0
	result_text = result.readtext
	wscript.echo result_text
	end if
	if debugging > "1" then wscript.echo "LDAP Seen Days: " & ldap_seen_days end if
	if debugging > "1" then wscript.echo "LDAP Actual Days: " & datediff("d", last_seen, Now) end if
	if debugging > "1" then wscript.echo "LDAP Seen Date: " & ldap_seen_date end if
	if debugging > "1" then wscript.echo "LDAP Actual Date: " & last_seen end if
	hit = 0
	if cint(ldap_seen_days) > cint(datediff("d", last_seen, Now)) then
	' hit
	if debugging > "0" then wscript.echo "PC not able to be audited but seen by Active Directory " & datediff("d", last_seen, Now)  & " days ago." & vbcrlf & "As this is less than " & ldap_seen_days & ", using AD details for audit." end if
	hit = 1
	elseif cdate(ldap_seen_date) < cdate(last_seen) then
	' hit
	if debugging > "0" then wscript.echo "PC not able to be audited but seen in Active Directory on " & last_seen & "." & vbcrlf & "As this is after " & ldap_seen_date & ", using AD details for audit." end if
	hit = 1
	else
	if debugging > "0" then wscript.echo "PC not able to be audited and last seen by Active Directory on " & last_seen & "." & vbcrlf & "As this is before " & ldap_seen_date & ", no audit recorded." end if
	hit = 0
	end if

	if (submit_online = "y" and hit = 1) then
	if debugging > "0" then wscript.echo "Submitting audit online" end if
	Err.clear
	XmlObj = "ServerXMLHTTP"
	Set objHTTP = WScript.CreateObject("MSXML2.ServerXMLHTTP.3.0")
	objHTTP.setTimeouts 5000, 5000, 5000, 120000
	objHTTP.SetOption 2, 13056  ' Ignore all SSL errors
	objHTTP.Open "POST", url, False
	objHTTP.setRequestHeader "Content-Type","application/x-www-form-urlencoded"
	result.position = 0
	objHTTP.Send "form_systemXML=" + urlEncode(result.ReadText()) + vbcrlf
	if (objHTTP.ResponseText > "" and debugging > "2") then
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

	if (create_file = "y" and hit = 1) then
	if debugging > "0" then wscript.echo "Creating output File" end if
	' Write the results to a file
	file_timestamp = Year(dt) & Right("0" & Month(dt),2) & Right("0" & Day(dt),2) & Right("0" & Hour(dt),2) & Right("0" & Minute(dt),2) & Right("0" & Second(dt),2)
	OutputFile = system_hostname & "-" & file_timestamp & ".xml"
	if debugging > "0" then wscript.echo "Output file: " & OutputFile end if
	Err.clear
	on error resume next
	result.position = 0
	result.SaveToFile OutputFile, 2 ' Overwrites the file with the data from the currently open Stream object, if the file already exists
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
	else ' count > 0
	if debugging > "0" then
	wscript.echo "PC not able to be audited and not found in Active Directory."
	wscript.echo "Active Directory used for search was: " & ldap
	wscript.echo "No audit recorded."
	end if
	end if ' count > 0
	end if ' ldap > ""
	if debugging > "2" then wscript.sleep 10000 end if
	wscript.quit
end if





if ((strcomputer = ".") or (strcomputer = "127.0.0.1") or (lcase(strcomputer) = lcase(local_hostname))) then
	audit_location = "local"
else
	audit_location = "remote"
end if

sScriptName = wscript.scriptName

nPID = "unknown"
if (cint(local_windows_build_number) > 2222 and not local_windows_build_number = "3000") then
	for each oProc in getObject( "winmgmts:{impersonationLevel=impersonate}!\\.\root\cimv2").instancesOf("Win32_Process")
	if lcase(oProc.name) = "wscript.exe" _
	or lcase(oProc.name) = "cscript.exe" Then
	sCmdLine = oProc.commandLine
	if  instr(1, sCmdLine, "\" & sScriptName, vbTextCompare) > 0 _
	or instr(1, sCmdLine, " " & sScriptName, vbTextCompare) > 0 _
	or instr(1, sCmdLine, """" & sScriptName, vbTextCompare) > 0 then
	nPID = oProc.processId
	end if
	end if
	next
end if

if debugging > "0" then wscript.echo "My PID is : " & nPID end if
if debugging > "0" then wscript.echo "Audit Start Time : " & system_timestamp end if
if debugging > "0" then wscript.echo "Audit Location: " & audit_location end if
if debugging > "0" then wscript.echo "-------------------" end if

if debugging > "0" then wscript.echo "system info" end if

set colItems = objWMIService.ExecQuery("Select * from Win32_OperatingSystem",,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_OperatingSystem)" : audit_wmi_fails = audit_wmi_fails & "Win32_OperatingSystem " : end if
for each objItem in colItems
	system_os_version = objItem.Version
	windows_build_number = objItem.BuildNumber
	windows_service_pack = objItem.ServicePackMajorVersion
	system_os_family = os_family(objItem.Caption)
	system_os_name = objItem.Caption
	system_os_name = replace(system_os_name, "(R)", "")
	system_os_icon = replace(lcase(system_os_family), " ", "_")
	system_description = objItem.Description
	if details_to_lower = "y" then system_description = lcase(system_description) end if
	OSInstall = objItem.InstallDate
	OSInstall = Left(OSInstall, 8)
	OSInstallYear = Left(OSInstall, 4)
	OSInstallMonth = Mid(OSInstall, 5, 2)
	OSInstallDay = Right(OSInstall, 2)
	system_pc_date_os_installation = OSInstallYear & "-" & OSInstallMonth & "-" & OSInstallDay
	windows_boot_device = objItem.BootDevice
	windows_country_code = WMIOSCountry(objItem.CountryCode)
	windows_organisation = objItem.Organization
	windows_language = WMIOSLanguage(objItem.OSLanguage)
	windows_registered_user = objItem.RegisteredUser
	windows_install_directory_split = split(objItem.Name, "|")
	windows_install_directory = windows_install_directory_split(1)
next

mem_size = 0
system_pc_memory = 0
set colItems = objWMIService.ExecQuery("Select Capacity,DeviceLocator,FormFactor,MemoryType,TypeDetail,Speed,Tag FROM Win32_PhysicalMemory",,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_PhysicalMemory)" : audit_wmi_fails = audit_wmi_fails & "Win32_PhysicalMemory " : end if
for each objItem in colItems
	mem_size = int(objItem.Capacity /1024)
	system_pc_memory = system_pc_memory + mem_size
next

' set this ahead of time.
system_pc_num_processor = 0
processor_count = 0
processor_logical = 0

' Only get this value if later OS than XP/2003
if windows_build_number > 3790 then
	set colItems = objWMIService.ExecQuery("Select * from Win32_Processor",,32)
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_Processor)" : audit_wmi_fails = audit_wmi_fails & "Win32_Processor " : end if
	for each objItem in colItems
	system_pc_num_processor = system_pc_num_processor + int(objItem.NumberOfCores)
	processor_count = processor_count + 1
	processor_logical = processor_logical + int(objItem.NumberOfLogicalProcessors)
	next
end if

set colItems = objWMIService.ExecQuery("Select * from Win32_ComputerSystem",,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_ComputerSystem)" : audit_wmi_fails = audit_wmi_fails & "Win32_ComputerSystem " : end if
for each objItem in colItems
	' this is no longer used because it is actually the NetBIOS name, not the hostname
	' we grab it to a temp variable to use below in a last resort situation
	netbiosname = objItem.Name
	'This is not used because it is not available on Win2000 or WinXP
	'system_hostname = LCase(objItem.DNSHostName)
	system_domain = objItem.Domain
	if details_to_lower = "y" then system_domain = lcase(system_domain) end if

	if (windows_build_number =< 3790) or (system_pc_num_processor = 0) then
	system_pc_num_processor = objItem.NumberOfProcessors
	end if

	system_model = objItem.Model
	windows_domain_role = objItem.DomainRole
	' below only checks when OS is XP or later (not 2000 or NT)
	windows_part_of_domain = False
	if (windows_build_number >= 2600) then
	windows_part_of_domain = objItem.PartOfDomain
	end if

	' as at 1.5.3 do not store the workgroup in the domain field
	if (windows_part_of_domain <> True) then
	windows_workgroup = system_domain
	system_domain = ""
	end if
next

system_hostname = ""
set colItems = objWMIService.ExecQuery("Select * from Win32_NetworkAdapterConfiguration",,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_NetworkAdapterConfiguration)" : audit_wmi_fails = audit_wmi_fails & "Win32_NetworkAdapterConfiguration " : end if
for each objItem in colItems
	if (system_hostname = "" or isnull(system_hostname)) then
	system_hostname = objItem.DNSHostName
	end if
next
if system_hostnme = "" then
	system_hostname = netbiosname
end if
if details_to_lower = "y" then system_hostname = lcase(system_hostname) end if


if (cint(windows_build_number)) > 5000 then
	' Win7 or Win2008 last logged on info
	oreg.getstringvalue hkey_local_machine, "software\microsoft\windows\currentversion\authentication\logonui", "lastloggedonuser", windows_user_name
	if isnull(windows_user_name) then
	oreg.getstringvalue hkey_local_machine, "software\microsoft\windows\currentversion\authentication\logonui", "lastloggedonsamuser", windows_user_name
	end if
	if (instr(windows_user_name, "\")) then
	split_user = split(windows_user_name, "\")
	windows_user_name = split_user(1)
	if split_user(0) > "" then
	windows_user_domain = "@" & split_user(0)
	else
	windows_user_domain = ""
	end if
	end if
	if ((windows_user_domain = "@") or (windows_user_domain = ".") or (windows_user_domain = "@.")) then
	' do not add the domain to the username - add the name of the PC (it's a local user)
	windows_user_name = windows_user_name & "@" & system_hostname
	else
	windows_user_name = windows_user_name & windows_user_domain
	end if
else
	' older style user name and domain
	oreg.getstringvalue hkey_local_machine, "software\microsoft\windows nt\currentversion\winlogon", "DefaultUserName", windows_user_name
	oreg.getstringvalue hkey_local_machine, "software\microsoft\windows nt\currentversion\winlogon", "DefaultDomainName", windows_user_domain
	if (instr(windows_user_name, "\")) then
	split_user = split(windows_user_name, "\")
	windows_user_name = split_user(1)
	if ((isnull(windows_user_domain) or (windows_user_domain = "")) and (split_user(0) > "")) then
	windows_user_domain = split_user(0)
	end if
	end if
	if (isnull(windows_user_domain)) then
	windows_user_domain = ""
	else
	windows_user_domain = "@" & windows_user_domain
	end if
	if ((windows_user_domain = "@") or (windows_user_domain = ".") or (windows_user_domain = "@.")) then
	' do not add the domain to the username - add the name of the PC (it's a local user)
	windows_user_name = windows_user_name & "@" & system_hostname
	else
	windows_user_name = windows_user_name & windows_user_domain
	end if
end if
if details_to_lower = "y" then
	windows_user_name = lcase(windows_user_name)
	windows_user_domain = lcase(windows_user_domain)
end if



Set colItems = objWMIService.ExecQuery("Select * from Win32_ComputerSystemProduct",,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_ComputerSystemProduct)" : audit_wmi_fails = audit_wmi_fails & "Win32_ComputerSystemProduct " : end if
for each objItem in colItems
	system_serial = objItem.IdentifyingNumber
	system_manufacturer = objItem.Vendor
	system_uuid = objItem.UUID
	windows_id_number = objItem.IdentifyingNumber
next

set colItems = objWMIService.ExecQuery("Select * from Win32_SystemEnclosure",,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_SystemEnclosure)" : audit_wmi_fails = audit_wmi_fails & "Win32_SystemEnclosure " : end if
for each objItem in colItems
   system_form_factor = form_factor(Join(objItem.ChassisTypes, ","))
   bios_asset_tag = objItem.SMBIOSAssetTag
next

' using "on error" because am getting some errors - breaking the script.
' occuring on Windows XP machines.
' below only checks when OS is XP or later (not 2000 or NT)
system_uptime = ""
if (windows_build_number > 2195) then
	on error resume next
	Set colItems = objWMIService.ExecQuery("Select * From Win32_PerfFormattedData_PerfOS_System",,32)
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_PerfFormattedData_PerfOS_System)" : audit_wmi_fails = audit_wmi_fails & "Win32_PerfFormattedDataPerfOS_System " : end if
	For Each objItem in colItems
	system_uptime = objItem.SystemUpTime
	Next
	on error goto 0
end if

' NOTE - we use the processor address width to determine if we are running 32bit or 64bit Windows
set colItems = objWMIService.ExecQuery("Select AddressWidth from Win32_Processor where DeviceID='CPU0'",,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_Processor)" : audit_wmi_fails = audit_wmi_fails & "Win32_Processor " : end if
for each objItem In colItems
	address_width = objItem.AddressWidth
next

on error resume next
	strKeyPath = "Cluster"
	strKey = "ClusterName"
	oReg.GetStringValue HKEY_LOCAL_MACHINE, strKeyPath, strKey, strValue
	if (not isnull(strValue)) then
	   man_cluster_name = strValue
	else
	   man_cluster_name = ""
	end if
on error goto 0

' ##################################
' ## kolmann@zid.tuwien.ac.at 20150917: Get IP Adress of adapter with default route
' ##################################
man_ip_address = ""
if audit_location = "local" then
	if debugging > "0" then wscript.echo "Get IP Adress of adapter with default route" end if
	on error resume next
	strByteMatch = "(25[0-5]|2[0-4]\d|[01]?\d\d?)"
	strIpMatch = strByteMatch & "\." & strByteMatch & "\." & strByteMatch & "\.(" & strByteMatch & "|(" & strByteMatch & "-" & strByteMatch & "))"
	strPattern = "^" & strIpMatch & "(," & strIpMatch & ")*$"
	Set RegEx = New RegExp
	RegEx.IgnoreCase = True
	RegEx.Global=True
	RegEx.Pattern=strPattern
	Set objExecObj = objShell.exec("route print 0.0.0.0")
	Do While Not objExecObj.StdOut.AtEndOfStream
		strText = objExecObj.StdOut.Readline()
		Do
			If InStr(1, strText, "  ") > 0 Then
				strText = Replace(strText, "  ", " ")
			Else
				Exit Do
			End If
		Loop
		splitLine = Split(strText, " ")
		' IP address is in a row with 5 values, value1 and value2 equals 0.0.0.0 and value4 is a IP Address
		if (ubound(splitLine) = 5) then
			if (splitLine(1) = "0.0.0.0" and splitLine(2) = "0.0.0.0" and RegEx.Test(splitLine(4))) then
				man_ip_address = splitLine(4)
				exit do
			end if
		end if
	Loop
	on error goto 0
end if
' ##################################
' ## kolmann@zid.tuwien.ac.at 20150917: Get IP Adress of adapter with default route
' ##################################






' New for 1.10 - get SAN details if management software installed
if audit_san = "y" and audit_location = "local" then
	smcli = "C:\Program Files\IBM_DS\client\smcli.exe"
	If (objFSO.FileExists(smcli)) Then
		if debugging > "0" then wscript.echo "SAN info" end if
		Dim smcli_output
		if run_san_discover = "y" then
			Set objWshScriptExec = objShell.Exec(smcli & " -A")
			Set objStdOut = objWshScriptExec.StdOut
			While Not objStdOut.AtEndOfStream
				line = objStdOut.ReadLine
				wscript.echo line & vbcrlf
			Wend
		end if
		Set objWshScriptExec = objShell.Exec(smcli & " -d")
		Set objStdOut = objWshScriptExec.StdOut
		While Not objStdOut.AtEndOfStream
			line = objStdOut.ReadLine
			if (line > "" and instr(line, "SMcli") = 0) then
				san_split = split(line)
				wscript.echo line
				san_name = san_split(2)
				if debugging > "0" then wscript.echo "Running command: " & smcli & " " & san_name & " -c ""show storagesubsystem profile;"" " end if
				Set objWshScriptExecSMcli = objShell.Exec(smcli & " " & san_name & " -c ""show storagesubsystem profile;"" ")
				Set objStdOutSMcli = objWshScriptExecSMcli.StdOut
				While Not objStdOutSMcli.AtEndOfStream
					smcli_output = smcli_output & objStdOutSMcli.ReadLine & vbcrlf
				Wend
				' send the output result to the server
				if submit_online = "y" then
				   if debugging > "0" then wscript.echo "Submitting SAN audit online" end if
				   san_url = replace(url, "system/add_system", "san/add_san")
				   Err.clear
				   Set objHTTP = WScript.CreateObject("MSXML2.ServerXMLHTTP.3.0")
				   objHTTP.setTimeouts 5000, 5000, 5000, 480000
				   objHTTP.SetOption 2, 13056  ' Ignore all SSL errors
				   On Error Resume Next
				   objHTTP.Open "POST", san_url, False
				   aErr = Array(Err.Number, Err.Description)
				   On Error GoTo 0
				    If 0 = aErr(0) Then
				      result.position = 0
				      On Error Resume Next
				      objHTTP.setRequestHeader "Content-Type","application/x-www-form-urlencoded"
				      objHTTP.Send "input=" + urlEncode(smcli_output) + vbcrlf
				      aErr = Array(Err.Number, Err.Description)
				      On Error GoTo 0
				      Select Case True
				      Case 0 <> aErr(0)
				         if debugging > "0" then
				            wscript.echo "Error with http request. Audit not submitted."
				         end if
				         if debugging > "1" then
				            wscript.echo "HTTP Error: " & aErr(0)
				            wscript.echo "HTTP Status: " &  aErr(1)
				         end if
				         responseAvailable = False
				      Case 200 = objHTTP.status
				         if debugging > "0" then wscript.echo "Audit Submitted" end if
				         responseAvailable = True
				      Case Else
				         if debugging > "0" then wscript.echo "Error with http request(2). Audit not submitted." end if
				         responseAvailable = True
				      End Select

				      if responseAvailable = True then
				         if (objHTTP.ResponseText > "" and debugging > "1") then
				            wscript.echo
				            wscript.echo
				            wscript.echo "Response"
				            wscript.echo "--------"
				            wscript.echo objHTTP.ResponseText
				            if (inStr(objHTTP.ResponseText, "error")) then
				               wscript.sleep 50000
				            end if
				         end if
				      end if
				   else
				      if debugging > "0" then
				         wscript.echo "Error opening http url. SAN audit not submitted."
				      end if
				      if debugging > "1" then
				         wscript.echo "HTTP Error: " & aErr(0)
				         wscript.echo "HTTP Description: " &  aErr(1)
				      end if
				   end if
				end if ' submit_online'
			end if ' line contains a SAN name / ip'
		Wend ' each line of output from the smcli -c command'
	end if
end if


result.WriteText "<?xml version=""1.0"" encoding=""UTF-8""?>" & vbcrlf
result.WriteText "<system>" & vbcrlf
result.WriteText "	<sys>" & vbcrlf
result.WriteText "		<timestamp>" & escape_xml(system_timestamp) & "</timestamp>" & vbcrlf
result.WriteText "		<uuid>" & escape_xml(system_uuid) & "</uuid>" & vbcrlf
result.WriteText "		<hostname>" & escape_xml(system_hostname) & "</hostname>" & vbcrlf
result.WriteText "		<domain>" & escape_xml(system_domain) & "</domain>" & vbcrlf
result.WriteText "		<man_ip_address>" & escape_xml(man_ip_address) & "</man_ip_address>" & vbcrlf
result.WriteText "		<description>" & escape_xml(system_description) & "</description>" & vbcrlf
result.WriteText "		<type>computer</type>" & vbcrlf
result.WriteText "		<icon>" & system_os_icon & "</icon>" & vbcrlf
result.WriteText "		<os_group>Windows</os_group>" & vbcrlf
result.WriteText "		<os_family>" & escape_xml(system_os_family) & "</os_family>" & vbcrlf
result.WriteText "		<os_name>" & escape_xml(system_os_name) & "</os_name>" & vbcrlf
result.WriteText "		<os_version>" & escape_xml(system_os_version) & "</os_version>" & vbcrlf
result.WriteText "		<serial>" & escape_xml(system_serial) & "</serial>" & vbcrlf
result.WriteText "		<model>" & escape_xml(system_model) & "</model>" & vbcrlf
result.WriteText "		<manufacturer>" & escape_xml(system_manufacturer) & "</manufacturer>" & vbcrlf
result.WriteText "		<uptime>" & escape_xml(system_uptime) & "</uptime>" & vbcrlf
result.WriteText "		<form_factor>" & escape_xml(system_form_factor) & "</form_factor>" & vbcrlf
result.WriteText "		<pc_os_bit>" & escape_xml(address_width) & "</pc_os_bit>" & vbcrlf
result.WriteText "		<pc_memory>" & escape_xml(system_pc_memory) & "</pc_memory>" & vbcrlf
result.WriteText "		<pc_num_processor>" & escape_xml(system_pc_num_processor) & "</pc_num_processor>" & vbcrlf
result.WriteText "		<pc_date_os_installation>" & escape_xml(system_pc_date_os_installation) & "</pc_date_os_installation>" & vbcrlf
result.WriteText "		<man_org_id>" & escape_xml(org_id) & "</man_org_id>" & vbcrlf
result.WriteText "		<system_id>" & escape_xml(system_id) & "</system_id>" & vbcrlf
result.WriteText "		<man_cluster_name>" & escape_xml(man_cluster_name) & "</man_cluster_name>" & vbcrlf
result.WriteText "	</sys>" & vbcrlf


if debugging > "0" then wscript.echo "windows info" end if
if windows_domain_role = "0" then windows_domain_role = "Standalone Workstation" end if
if windows_domain_role = "1" then windows_domain_role = "Workstation" end if
if windows_domain_role = "2" then windows_domain_role = "Standalone Server" end if
if windows_domain_role = "3" then windows_domain_role = "Member Server" end if
if windows_domain_role = "4" then windows_domain_role = "Backup Domain Controller" end if
if windows_domain_role = "5" then windows_domain_role = "Primary Domain Controller" end if

error = 0
if ( windows_part_of_domain = True Or windows_part_of_domain = "True" ) then
	' Get domain NetBIOS name from domain DNS name
	domain_dn = "DC=" & Replace(system_domain,".",",DC=")
	set oTranslate = CreateObject("NameTranslate")
	on error resume next
	oTranslate.Init 3, ""
	oTranslate.set 1, domain_dn
	full_ad_domain = oTranslate.Get(1)
	on error goto 0
	if not isempty(full_ad_domain) then
	full_domain = oTranslate.Get(2)
	domain_nb = oTranslate.Get(3)
	domain_nb = Left(domain_nb,Len(domain_nb)-1)
	set colItems = objWMIService.ExecQuery("Select * from Win32_NTDomain WHERE DomainName='" & domain_nb & "'",,32)
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_NTDomain)" : audit_wmi_fails = audit_wmi_fails & "Win32_NTDomain " : end if
	for each objItem in colItems
	windows_client_site_name = objItem.ClientSiteName
	windows_domain_controller_address = replace(objItem.DomainControllerAddress, "\\", "")
	windows_domain_controller_name = replace(objItem.DomainControllerName, "\\", "")
	next
	set objconnection = createobject("adodb.connection")
	set objcommand = createobject("adodb.command")
	objconnection.provider = "adsdsoobject"
	objconnection.open "active directory provider"
	set objcommand.activeconnection = objconnection
	objcommand.commandtext = "select distinguishedName, name from 'GC://" & full_ad_domain & "' where objectclass = 'computer' and Name = '" & system_hostname & "'"
	objcommand.properties("page size") = 1000
	objcommand.properties("searchscope") = ads_scope_subtree
	objcommand.properties("sort on") = "name"
	set objrecordset = objcommand.execute
	on error resume next
	objrecordset.movefirst
	if err.number <> 0 then
	error = 1
	end if
	do until objrecordset.eof
	windows_active_directory_ou = objrecordset.fields("distinguishedName").value
	objrecordset.movenext
	loop
	on error goto 0
	if error = 1 then
	' we failed when using GC:// - try using LDAP://
	error = 0
	objcommand.commandtext = "select distinguishedName, name from 'LDAP://" & full_ad_domain & "' where objectclass = 'computer' and Name = '" & system_hostname & "'"
	set objrecordset = objcommand.execute
	on error resume next
	objrecordset.movefirst
	if err.number <> 0 then error = 1 end if
	do until objrecordset.eof
	windows_active_directory_ou = objrecordset.fields("distinguishedName").value
	objrecordset.movenext
	loop
	on error goto 0
	end if

	if error = 1 then
	windows_active_directory_ou = full_ad_domain
	else
	stemp = split(replace(windows_active_directory_ou, "\,","X!X"), ",")
	stemp(0) = ""
	ttemp = join(stemp, ",")
	ttemp = mid(ttemp, 2)
	windows_active_directory_ou = replace(ttemp, "X!X",",")
	erase stemp
	ttemp = NULL
	end if
	end if
else
	domain_nb = ""
	windows_client_site_name = ""
	windows_domain_controller_address = ""
	windows_domain_controller_name = ""
	windows_active_directory_ou = ""
end if
if details_to_lower = "y" then windows_active_directory_ou = lcase(windows_active_directory_ou) end if

if ((windows_part_of_domain = True Or windows_part_of_domain = "True") and (windows_user_work_1 > "")) then
	if (instr(windows_user_name, "@")) then
	split_user = split(windows_user_name, "@")
	sam_account_name = split_user(0)
	windows_user_domain = split_user(1)
	else
	sam_account_name = windows_user_name
	windows_user_domain = ""
	end if
	struserDN = ""
	if (windows_user_domain > "") then
	on error resume next
	Set objTrans = CreateObject("NameTranslate")
	objTrans.Init ADS_NAME_INITTYPE_GC, ""
	objTrans.Set ADS_NAME_TYPE_NT4, windows_user_domain & "\" & sam_account_name
	struserDN = objTrans.Get(ADS_NAME_TYPE_1779)
	struserDN = Replace(struserDN, "/", "\/")
	stemp = split(struserDN, ",")
	stemp(0) = ""
	ttemp = join(stemp, ",")
	ttemp = mid(ttemp, 2)
	struserDN = ttemp
	erase stemp
	ttemp = NULL
	' strip off any names before the initial OU
	'find the displacement of the initial OU=
	pos=InStr(struserDN,"OU=")
	struserDN= " " & Right(struserDN,LEN(struserDN)-(pos-1))
	struserDN = ltrim(struserDN)
	on error goto 0
	else
	struserDN = ""
	end if
	if ((struserDN > "") and (struserDN <> " ")) then
	windows_user_company = windows_user_get_attribute (struserDN, windows_user_work_1, sam_account_name)
	if (isnull(windows_user_company) or windows_user_company = "") then
	windows_user_company = windows_user_get_attribute (struserDN, windows_user_work_2, sam_account_name)
	end if
	if (isnull(windows_user_company) or windows_user_company = "") then
	' do not alter the username as we got no information from AD
	else
	windows_user_name = windows_user_name & " (" & windows_user_company & ")"
	end if
	end if
end if

if debugging > "1" then wscript.echo "Windows User: " & windows_user_name end if


function windows_user_get_attribute (full_ad_domain, attribute, sam_account_name)
	if debugging > "2" then wscript.echo "FullAD: " & full_ad_domain end if
	if debugging > "2" then wscript.echo "Attribute: " & attribute end if
	if debugging > "2" then wscript.echo "SAM: " & sam_account_name end if
	if (full_ad_domain > "") then
	const ads_scope_subtree  = 2
	set objconnection = createobject("adodb.connection")
	set objcommand = createobject("adodb.command")
	objconnection.provider = "adsdsoobject"
	objconnection.open "active directory provider"
	set objcommand.activeconnection = objconnection
	' objcommand.commandtext = "select name, " & attribute & " from 'GC://" & full_ad_domain & "' where objectCategory = 'person' and sAMAccountName = '" & sam_account_name & "'"
	objcommand.commandtext = "select name, " & attribute & " from 'GC://" & full_ad_domain & "' where objectCategory = 'person' and sAMAccountName = '" & replace(sam_account_name, "'", "''") & "'"
	if debugging > "2" then wscript.echo objcommand.commandtext end if
	objcommand.properties("page size") = 1000
	objcommand.properties("searchscope") = ads_scope_subtree
	objcommand.properties("sort on") = "name"
	set objrecordset = objcommand.execute
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo "AD command failed"
	if (isobject(objrecordset)) then
	on error resume next
	objrecordset.movefirst
	on error goto 0
	do until objrecordset.eof
	windows_user_get_attribute = objrecordset.fields(attribute).value
	objrecordset.movenext
	loop
	end if
	if ((windows_user_get_attribute = "") and (debugging > "1")) then
	if debugging > "1" then
	wscript.echo "No user data for " & attribute
	end if
	windows_user_get_attribute = ""
	end if
	if (isnull(windows_user_get_attribute) and (debugging > "1")) then
	wscript.echo  "User data is null for " & attribute
	windows_user_get_attribute = ""
	end if
	if ((windows_user_get_attribute > "") and (debugging > "1")) then
	wscript.echo "User data for " & attribute & " is: " & windows_user_get_attribute
	end if
	else
	if debugging > "1" then
	wscript.echo "No full AD passed to 'windows_user_get_attribute'"
	end if
	windows_user_get_attribute = ""
	end if
end function





















set colItems = objWMIService.ExecQuery("Select * from Win32_TimeZone",,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_TimeZone)" : audit_wmi_fails = audit_wmi_fails & "Win32_TimeZone " : end if
for each objItem in colItems
	windows_time_caption = objItem.Caption
	windows_time_daylight = objItem.DaylightName
next

result.WriteText " 	<windows>" & vbcrlf
result.WriteText " 		<item>" & vbcrlf
result.WriteText "			<build_number>" & escape_xml(windows_build_number) & "</build_number>" & vbcrlf
result.WriteText "			<user_name>" & escape_xml(windows_user_name) & "</user_name>" & vbcrlf
result.WriteText "			<client_site_name>" & escape_xml(windows_client_site_name) & "</client_site_name>" & vbcrlf
result.WriteText "			<domain_short>" & escape_xml(domain_nb) & "</domain_short>" & vbcrlf
result.WriteText "			<workgroup>" & escape_xml(windows_workgroup) & "</workgroup>" & vbcrlf
result.WriteText "			<domain_controller_address>" & escape_xml(windows_domain_controller_address) & "</domain_controller_address>" & vbcrlf
result.WriteText "			<domain_controller_name>" & escape_xml(windows_domain_controller_name) & "</domain_controller_name>" & vbcrlf
result.WriteText "			<domain_role>" & escape_xml(windows_domain_role) & "</domain_role>" & vbcrlf
result.WriteText "			<part_of_domain>" & escape_xml(windows_part_of_domain) & "</part_of_domain>" & vbcrlf
result.WriteText "			<id_number>" & escape_xml(windows_id_number) & "</id_number>" & vbcrlf
result.WriteText "			<time_caption>" & escape_xml(windows_time_caption) & "</time_caption>" & vbcrlf
result.WriteText "			<time_daylight>" & escape_xml(windows_time_daylight) & "</time_daylight>" & vbcrlf
result.WriteText "			<boot_device>" & escape_xml(windows_boot_device) & "</boot_device>" & vbcrlf
result.WriteText "			<country_code>" & escape_xml(windows_country_code) & "</country_code>" & vbcrlf
result.WriteText "			<organisation>" & escape_xml(windows_organisation) & "</organisation>" & vbcrlf
result.WriteText "			<language>" & escape_xml(windows_language) & "</language>" & vbcrlf
result.WriteText "			<registered_user>" & escape_xml(windows_registered_user) & "</registered_user>" & vbcrlf
result.WriteText "			<service_pack>" & escape_xml(windows_service_pack) & "</service_pack>" & vbcrlf
result.WriteText "			<version>" & escape_xml(system_os_version) & "</version>" & vbcrlf
result.WriteText "			<install_directory>" & escape_xml(windows_install_directory) & "</install_directory>" & vbcrlf
result.WriteText "			<active_directory_ou>" & escape_xml(windows_active_directory_ou) & "</active_directory_ou>" & vbcrlf
result.WriteText " 		</item>" & vbcrlf
result.WriteText " 	</windows>" & vbcrlf



if debugging > "0" then wscript.echo "bios info" end if
item = ""
set colItems = objWMIService.ExecQuery("Select * FROM Win32_BIOS",,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_Bios)" : audit_wmi_fails = audit_wmi_fails & "Win32_Bios " : end if
for each objItem in colItems
	item = item & "			<description>" & escape_xml(objItem.Description) & "</description>" & vbcrlf
	item = item & "			<manufacturer>" & escape_xml(objItem.Manufacturer) & "</manufacturer>" & vbcrlf
	item = item & "			<serial>" & escape_xml(objItem.SerialNumber) & "</serial>" & vbcrlf
	item = item & "			<smversion>" & escape_xml(objItem.SMBIOSBIOSVersion) & "</smversion>" & vbcrlf
	item = item & "			<version>" & escape_xml(objItem.Version) & "</version>" & vbcrlf
	item = item & "			<asset_tag>" & escape_xml(bios_asset_tag) & "</asset_tag>" & vbcrlf
next
if item > "" then
	result.WriteText "	<bios>" & vbcrlf
	result.WriteText "		<item>" & vbcrlf
	result.WriteText item
	result.WriteText "		</item>" & vbcrlf
	result.WriteText "	</bios>" & vbcrlf
end if


if debugging > "0" then wscript.echo "scsi info" end if
item = ""
set colItems = objWMIService.ExecQuery("Select * from Win32_SCSIController",,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_SCSIController)" : audit_wmi_fails = audit_wmi_fails & "Win32_SCSIController " : end if
for each objItem in colItems
	item = item & "		<item>" & vbcrlf
	item = item & "			<model>" & escape_xml(objItem.Name) & "</model>" & vbcrlf
	item = item & "			<manufacturer>" & escape_xml(objItem.Manufacturer) & "</manufacturer>" & vbcrlf
	item = item & "			<device>" & escape_xml(objItem.PNPDeviceID) & "</device>" & vbcrlf
	item = item & "			<type>other</type>" & vbcrlf
	item = item & "		</item>" & vbcrlf
next
if item > "" then
	result.WriteText "	<scsi>" & vbcrlf
	result.WriteText item
	result.WriteText "	</scsi>" & vbcrlf
end if


if debugging > "0" then wscript.echo "processor info" end if
newpath = "HARDWARE\DESCRIPTION\System\CentralProcessor\0"
newkey = "ProcessorNameString"
oReg.GetStringValue HKEY_LOCAL_MACHINE, newpath, newkey, strValue
processor_description = strValue
processor_description = replace(processor_description, "(R)", "")
processor_description = replace(processor_description, "(TM)", "")
processor_description = replace(processor_description, "(r)", "")
processor_description = replace(processor_description, "(tm)", "")
processor_description = replace(processor_description, "  ", " ")
processor_description = replace(processor_description, "  ", " ")
processor_description = replace(processor_description, "  ", " ")
processor_description = replace(processor_description, "  ", " ")
processor_description = replace(processor_description, "  ", " ")
processor_description = replace(processor_description, "  ", " ")
processor_description = replace(processor_description, "  ", " ")
set colItems = objWMIService.ExecQuery("Select * from Win32_Processor",,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_Processor)" : audit_wmi_fails = audit_wmi_fails & "Win32_Processor " : end if
for each objItem In colItems
	' NOTE - processor_description taken from registry (above)
	' WMI does not seem to update when the processor is changed
	' think virtualising a physical machine
	'processor_description = objItem.Name
	processor_speed = objItem.MaxClockSpeed
	processor_manufacturer = objItem.Manufacturer
	select case  objItem.UpgradeMethod
	case "1"      cpu_socket = "Other"
	case "2"      cpu_socket = "Unknown"
	case "3"      cpu_socket = "Daughter Board"
	case "4"      cpu_socket = "ZIF Socket"
	case "5"      cpu_socket = "Replaceable Piggy Back"
	case "6"      cpu_socket = "None"
	case "7"      cpu_socket = "LIF Socket"
	case "8"      cpu_socket = "Slot 1"
	case "9"      cpu_socket = "Slot 2"
	case "10"     cpu_socket = "370 Pin Socket"
	case "11"     cpu_socket = "Slot A"
	case "12"     cpu_socket = "Slot M"
	case "13"     cpu_socket = "Socket 423"
	case "14"     cpu_socket = "Socket A (462)"
	case "15"     cpu_socket = "Socket 478"
	case "16"     cpu_socket = "Socket 754"
	case "17"     cpu_socket = "Socket 940"
	case "18"     cpu_socket = "Socket 939"
	case "19"     cpu_socket = "Socket mPGA 604"
	case "20"     cpu_socket = "Socket LGA 771"
	case "21"     cpu_socket = "Socket LGA 775"
	case "22"     cpu_socket = "Socket S1"
	case "23"     cpu_socket = "Socket AM2"
	case "24"     cpu_socket = "Socket F (1207)"
	case "25"     cpu_socket = "Socket LGA 1366"
	case "26"     cpu_socket = "Socket G34"
	case "27"     cpu_socket = "Socket AM3"
	case "28"     cpu_socket = "Socket C32"
	case "29"     cpu_socket = "Socket LGA 1156"
	case "30"     cpu_socket = "Socket LGA 1567"
	case "31"     cpu_socket = "Socket PGA 988A"
	case "32"     cpu_socket = "Socket BGA 1288"
	case "33"     cpu_socket = "Socket rPGA 988B"
	case "34"     cpu_socket = "Socket BGA 1023"
	case "35"     cpu_socket = "Socket BGA 1224"
	case "36"     cpu_socket = "Socket LGA 1155"
	case "37"     cpu_socket = "Socket LGA 1356"
	case "38"     cpu_socket = "Socket LGA 2011"
	case "39"     cpu_socket = "Socket FS1"
	case "40"     cpu_socket = "Socket FS2"
	case "41"     cpu_socket = "Socket FM1"
	case "42"     cpu_socket = "Socket FM2"
	case "43"     cpu_socket = "Socket LGA 2011-3"
	case "44"     cpu_socket = "Socket LGA 1356-3"
	case "185"    cpu_socket = "Socket P (478)"
	case Default  cpu_socket = "Unknown"
	end select

   select case  objItem.Architecture
      case "0"      processor_architecture = "x86"
      case "1"      processor_architecture = "MIPS"
      case "2"      processor_architecture = "Alpha"
      case "3"      processor_architecture = "PowerPC"
      case "5"      processor_architecture = "ARM"
      case "6"      processor_architecture = "Itanium-based systems"
      case "9"      processor_architecture = "x64"
      case Default  processor_architecture = "Unknown"
   end select

next
result.WriteText "	<processor>" & vbcrlf
result.WriteText "		<item>" & vbcrlf
result.WriteText "			<physical_count>" & escape_xml(processor_count) & "</physical_count>" & vbcrlf
result.WriteText "			<core_count>" & escape_xml(system_pc_num_processor) & "</core_count>" & vbcrlf
result.WriteText "			<logical_count>" & escape_xml(processor_logical) & "</logical_count>" & vbcrlf
result.WriteText "			<socket>" & escape_xml(cpu_socket) & "</socket>" & vbcrlf
result.WriteText "			<description>" & escape_xml(processor_description) & "</description>" & vbcrlf
result.WriteText "			<speed>" & escape_xml(processor_speed) & "</speed>" & vbcrlf
result.WriteText "			<manufacturer>" & escape_xml(processor_manufacturer) & "</manufacturer>" & vbcrlf
result.WriteText "			<architecture>" & escape_xml(processor_architecture) & "</architecture>" & vbcrlf
result.WriteText "		</item>" & vbcrlf
result.WriteText "	</processor>" & vbcrlf

if debugging > "0" then wscript.echo "memory info" end if
memory = ""
set colItems = objWMIService.ExecQuery("Select Capacity,SerialNumber,DeviceLocator,FormFactor,MemoryType,TypeDetail,Speed,Tag FROM Win32_PhysicalMemory",,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_PhysicalMemory)" : audit_wmi_fails = audit_wmi_fails & "Win32_PhysicalMemory " : end if
for each objItem in colItems
	select case  objItem.FormFactor
	case "1"  mem_formfactor = "Other"
	case "2"  mem_formfactor = "SIP"
	case "3"  mem_formfactor = "DIP"
	case "4"  mem_formfactor = "ZIP"
	case "5"  mem_formfactor = "SOJ"
	case "6"  mem_formfactor = "Proprietary"
	case "7"  mem_formfactor = "SIMM"
	case "8"  mem_formfactor = "DIMM"
	case "9"  mem_formfactor = "TSOP"
	case "10" mem_formfactor = "PGA"
	case "11" mem_formfactor = "RIMM"
	case "12" mem_formfactor = "SODIMM"
	case "13" mem_formfactor = "SRIMM"
	case "14" mem_formfactor = "SMD"
	case "15" mem_formfactor = "SSMP"
	case "16" mem_formfactor = "QFP"
	case "17" mem_formfactor = "TQFP"
	case "18" mem_formfactor = "SOIC"
	case "19" mem_formfactor = "LCC"
	case "20" mem_formfactor = "PLCC"
	case "21" mem_formfactor = "BGA"
	case "22" mem_formfactor = "FPBGA"
	case "23" mem_formfactor = "LGA"
	case else mem_formfactor = "Unknown"
	end select
	select case  objItem.MemoryType
	case "0"  mem_detail = "Unknown"
	case "1"  mem_detail = "Other"
	case "2"  mem_detail = "DRAM"
	case "3"  mem_detail = "Synchronous DRAM"
	case "4"  mem_detail = "Cache DRAM"
	case "5"  mem_detail = "EDO"
	case "6"  mem_detail = "EDRAM"
	case "7"  mem_detail = "VRAM"
	case "8"  mem_detail = "SRAM"
	case "9"  mem_detail = "RAM"
	case "10" mem_detail = "ROM"
	case "11" mem_detail = "Flash"
	case "12" mem_detail = "EEPROM"
	case "13" mem_detail = "FEPROM"
	case "14" mem_detail = "EPROM"
	case "15" mem_detail = "CDRAM"
	case "16" mem_detail = "3DRAM"
	case "17" mem_detail = "SDRAM"
	case "18" mem_detail = "SGRAM"
	case "19" mem_detail = "RDRAM"
	case "20" mem_detail = "DDR"
	case "21" mem_detail = "DDR-2"
	case "22" mem_detail = "DDR-3"
	case else mem_detail = "Unknown"
	end select
	select case  objItem.TypeDetail
	case "1"     mem_typedetail = "Reserved"
	case "2"     mem_typedetail = "Other"
	case "4"     mem_typedetail = "Unknown"
	case "8"     mem_typedetail = "Fast-paged"
	case "16"    mem_typedetail = "Static column"
	case "32"    mem_typedetail = "Pseudo-static"
	case "64"    mem_typedetail = "RAMBUS"
	case "128"   mem_typedetail = "Synchronous"
	case "256"   mem_typedetail = "CMOS"
	case "512"   mem_typedetail = "EDO"
	case "1024"  mem_typedetail = "Window DRAM"
	case "2048"  mem_typedetail = "Cache DRAM"
	case "4096"  mem_typedetail = "Non-volatile"
	case else    mem_typedetail = "Unknown"
	end select
	mem_bank = objItem.DeviceLocator
	mem_size = int(objItem.Capacity /1024 /1024)
	mem_speed = objItem.Speed
	mem_serial = objItem.SerialNumber
	mem_tag = objItem.Tag
	memory = memory & "		<item>" & vbcrlf
	memory = memory & "			<bank>" & escape_xml(mem_bank) & "</bank>" & vbcrlf
	memory = memory & "			<type>" & escape_xml(mem_typedetail) & "</type>" & vbcrlf
	memory = memory & "			<form_factor>" & escape_xml(mem_formfactor) & "</form_factor>" & vbcrlf
	memory = memory & "			<detail>" & escape_xml(mem_detail) & "</detail>" & vbcrlf
	memory = memory & "			<size>" & escape_xml(mem_size) & "</size>" & vbcrlf
	memory = memory & "			<speed>" & escape_xml(mem_speed) & "</speed>" & vbcrlf
	memory = memory & "			<tag>" & escape_xml(mem_tag) & "</tag>" & vbcrlf
	memory = memory & "			<serial>" & escape_xml(mem_serial) & "</serial>" & vbcrlf
	memory = memory & "		</item>" & vbcrlf
next
if memory > "" then
	result.WriteText "	<memory>" & vbcrlf
	result.WriteText memory
	result.WriteText "	</memory>" & vbcrlf
end if

if debugging > "0" then wscript.echo "motherboard info" end if
set colItems = objWMIService.ExecQuery("Select * from Win32_BaseBoard",,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_BaseBoard)" : audit_wmi_fails = audit_wmi_fails & "Win32_BaseBoard " : end if
for each objItem in colItems
	mb_manufacturer = objItem.Manufacturer
	mb_model = objItem.Product
	mb_serial = objItem.SerialNumber
next
' Counting CPU sockets
set colItems = objWMIService.ExecQuery("SELECT * FROM Win32_Processor",,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_Processor)" : audit_wmi_fails = audit_wmi_fails & "Win32_Processor " : end if
CpuSockets = 0
for each objItem In colItems
	if Instr(SocketDesignation, objItem.SocketDesignation) = 0 then
	mb_cpu_sockets = CpuSockets + 1
	end if
next
' Counting RAM slots
set colItems = objWMIService.ExecQuery("Select MemoryDevices FROM Win32_PhysicalMemoryArray ",,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_PhysicalMemoryArray)" : audit_wmi_fails = audit_wmi_fails & "Win32_PhysicalMemoryArray " : end if
for each objItem in colItems
	mb_memory_slots = objItem.MemoryDevices
next
result.WriteText "	<motherboard>" & vbcrlf
result.WriteText "		<item>" & vbcrlf
result.WriteText "			<manufacturer>" & escape_xml(mb_manufacturer) & "</manufacturer>" & vbcrlf
result.WriteText "			<model>" & escape_xml(mb_model) & "</model>" & vbcrlf
result.WriteText "			<serial>" & escape_xml(mb_serial) & "</serial>" & vbcrlf
result.WriteText "			<processor_slot_count>" & escape_xml(mb_cpu_sockets) & "</processor_slot_count>" & vbcrlf
result.WriteText "			<processor_type>" & escape_xml(cpu_socket) & "</processor_type>" & vbcrlf
result.WriteText "			<memory_slot_count>" & escape_xml(mb_memory_slots) & "</memory_slot_count>" & vbcrlf
result.WriteText "		</item>" & vbcrlf
result.WriteText "	</motherboard>" & vbcrlf


' using "on error" because of a Windows bug - see http://support.microsoft.com/kb/823778
if debugging > "0" then wscript.echo "optical info" end if
item = ""
on error resume next
	set colItems = objWMIService.ExecQuery("Select * from Win32_CDROMDrive",,32)
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_CDROMDrive)" : audit_wmi_fails = audit_wmi_fails & "Win32_CDROMDrive " : end if
	for each objItem in colItems
	item = item & "		<item>" & vbcrlf
	item = item & "			<description>" & escape_xml(objItem.Caption) & "</description>" & vbcrlf
	item = item & "			<model>" & escape_xml(objItem.Caption) & "</model>" & vbcrlf
	item = item & "			<device>" & escape_xml(objItem.DeviceID) & "</device>" & vbcrlf
	item = item & "			<mount_point>" & escape_xml(objItem.Drive) & "</mount_point>" & vbcrlf
	item = item & "			<serial>" & escape_xml(objItem.SerialNumber) & "</serial>" & vbcrlf
	item = item & "		</item>" & vbcrlf
	next
	if item > "" then
	result.WriteText "	<optical>" & vbcrlf
	result.WriteText item
	result.WriteText "	</optical>" & vbcrlf
	end if
on error goto 0


' if debugging > "0" then wscript.echo "modem info" end if
' item = ""
' on error resume next
' 	set colItems = objWMIService.ExecQuery("Select * from Win32_POTSModem where status='OK' ",,32)
' 	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_POTSModem)" : audit_wmi_fails = audit_wmi_fails & "Win32_POTSModem " : end if
' 	for each objItem in colItems
' 	item = item & "		<modem>" & vbcrlf
' 	item = item & "			<port>" & escape_xml(objItem.AttachedTo) & "</port>" & vbcrlf
' 	item = item & "			<model>" & escape_xml(objItem.Model) & "</model>" & vbcrlf
' 	item = item & "			<country>" & escape_xml(objItem.CountrySelected) & "</country>" & vbcrlf
' 	item = item & "			<device_id>" & escape_xml(objItem.DeviceID) & "</device_id>" & vbcrlf
' 	item = item & "			<type>" & escape_xml(objItem.DeviceType) & "</type>" & vbcrlf
' 	item = item & "			<manufacturer>" & escape_xml(objItem.ProviderName) & "</manufacturer>" & vbcrlf
' 	item = item & "		</modem>" & vbcrlf
' 	next
' 	if item > "" then
' 	result.WriteText "	<modems>" & vbcrlf
' 	result.WriteText item
' 	result.WriteText "	</modems>" & vbcrlf
' 	end if
' on error goto 0



if debugging > "0" then wscript.echo "video info" end if
item = ""
on error resume next
	set colItems = objWMIService.ExecQuery("Select * from Win32_VideoController",,32)
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_VideoController)" : audit_wmi_fails = audit_wmi_fails & "Win32_VideoController " : end if
	for each objItem in colItems
	if (Instr(objItem.Caption, "vnc") = 0 AND _
	Instr(objItem.Caption, "Microsoft Basic Render Driver") = 0 AND _
	Instr(objItem.Caption, "DameWare") = 0 AND _
	Instr(objItem.Caption, "Innobec SideWindow") = 0 AND _
	Instr(objItem.Caption, "ConfigMgr Remote Control Driver") = 0 AND _
	Instr(objItem.Caption, "Mirage Driver") = 0 AND _
	Instr(objItem.Caption, "VNC Mirror Driver") = 0 AND _
	Instr(objItem.Caption, "Microsoft SMS Mirror Driver") = 0) then
	item = item & "		<item>" & vbcrlf
	item = item & "			<model>" & escape_xml(objItem.Name) & "</model>" & vbcrlf
	item = item & "			<device>" & escape_xml(objItem.PNPDeviceID) & "</device>" & vbcrlf
	item = item & "			<manufacturer>" & escape_xml(objItem.AdapterCompatibility) & "</manufacturer>" & vbcrlf
	item = item & "			<size>" & escape_xml(int(objItem.AdapterRAM /1024 /1024)) & "</size>" & vbcrlf
	item = item & "		</item>" & vbcrlf
	end if
	next
	if item > "" then
	result.WriteText "	<video>" & vbcrlf
	result.WriteText item
	result.WriteText "	</video>" & vbcrlf
	end if
on error goto 0


if debugging > "0" then wscript.echo "monitor info" end if
' note we exclude "monitors" that are plug'n'play types and have no real info
item = ""
dim strarrRawEDID(10)
dim temp_model(10)
dim temp_manuf(10)
intMonitorCount=0
sBaseKey = "SYSTEM\CurrentControlSet\Enum\DISPLAY\"
iRC = oReg.EnumKey(HKEY_LOCAL_MACHINE, sBaseKey, arSubKeys)
item = ""
all_device_serial = ""

if isnull(arSubKeys) then
    ' do nothing
    if debugging > "1" then  wscript.echo "Nothing in arSubKeys" end if
else
    for each sKey In arSubKeys
        if sKey > "" then
            ' note - using the above because the key SYSTEM\CurrentControlSet\Enum\DISPLAY\Default_Monitor is not returning nay value for some reason?
            sBaseKey2 = sBaseKey & sKey & "\"
            iRC2 = oReg.EnumKey(HKEY_LOCAL_MACHINE, sBaseKey2, arSubKeys2)
            for each sKey2 In arSubKeys2
                oReg.GetMultiStringValue HKEY_LOCAL_MACHINE, sBaseKey2 & sKey2 & "\", "HardwareID", sValue
                for tmpctr=0 to ubound(svalue)
                    if lcase (left(svalue(tmpctr),8))="monitor\" then
                        sBaseKey3 = sBaseKey2 & sKey2 & "\"
                        iRC3 = oReg.EnumKey(HKEY_LOCAL_MACHINE, sBaseKey3, arSubKeys3)
                        for each sKey3 In arSubKeys3
                            strRawEDID = ""
                            if skey3="Control" then
                                oReg.GetStringValue HKEY_LOCAL_MACHINE, sbasekey3, "DeviceDesc", temp_model(intMonitorCount)
                                oReg.GetStringValue HKEY_LOCAL_MACHINE, sbasekey3, "Mfg", temp_manuf(intMonitorCount)
                                oReg.GetBinaryValue HKEY_LOCAL_MACHINE, sbasekey3 & "Device Parameters\", "EDID", arrintEDID
                                if VarType(arrintedid) <> 8204 then
                                    strRawEDID="EDID Not Available"
                                else
                                    for each bytevalue in arrintedid
                                        strRawEDID=strRawEDID & chr(bytevalue)
                                    next
                                end if
                                'redim Preserve strarrRawEDID(intMonitorCount)
                                strarrRawEDID(intMonitorCount)=strRawEDID
                                intMonitorCount=intMonitorCount+1
                            end if
                        next
                    end if
                next
            next
        end if
    next

    dim arrMonitorInfo()
    redim arrMonitorInfo(intMonitorCount-1,5)
    dim location(3)
    tmpctr = 0
    all_device_id = ""
    for tmpctr = 0 to intMonitorCount-1
        manufacturer = ""
        device_id = ""
        manufacture_date = ""
        serial = ""
        model = ""
        edid_version = ""
        if strarrRawEDID(tmpctr) <> "EDID Not Available" then
            location(0) = mid(strarrRawEDID(tmpctr),&H36+1,18)
            location(1) = mid(strarrRawEDID(tmpctr),&H48+1,18)
            location(2) = mid(strarrRawEDID(tmpctr),&H5a+1,18)
            location(3) = mid(strarrRawEDID(tmpctr),&H6c+1,18)
            strSerFind = chr(&H00) & chr(&H00) & chr(&H00) & chr(&Hff)
            strMdlFind = chr(&H00) & chr(&H00) & chr(&H00) & chr(&Hfc)
            intSerFoundAt = -1
            intMdlFoundAt = -1
            for findit = 0 to 3
                if instr(location(findit),strSerFind) > 0 then
                    intSerFoundAt = findit
                end if
                if instr(location(findit),strMdlFind) > 0 then
                    intMdlFoundAt = findit
                end if
            next


            ' serial
            serial = ""
            tmp = ""
            if intSerFoundAt <> -1 then tmp = right(location(intSerFoundAt),14)
            if instr(tmp,chr(&H0a)) > 0 then
                serial = trim(left(tmp,InStr(tmp,chr(&H0a))-1))
            else
                serial = trim(tmp)
            end if
            if left(serial,1) = chr(0) then
                serial = right(serial,len(serial)-1)
            else
                serial = "Serial Number Not Found in EDID data"
            end if
            if serial = "" then serial = "Serial Number Not Found in EDID data"



            ' model
            model = ""
            tmp = ""
            if intMdlFoundAt <> -1 then tmp = right(location(intMdlFoundAt),14)
            if instr(tmp,chr(&H0a)) > 0 then
                model = trim(left(tmp,InStr(tmp,chr(&H0a))-1))
            else
                model = trim(tmp)
            end if
            if left(model,1) = chr(0) then
                model = right(model,len(model)-1)
            else
                model = "Model Descriptor Not Found in EDID data"
            end if
            if (model = "Model Descriptor Not Found in EDID data" AND temp_model(tmpctr) <> "") then model = temp_model(tmpctr) end if
            if (model = ""  AND temp_model(tmpctr) <> "") then model = temp_model(tmpctr) end if
            if (model = ""  AND temp_model(tmpctr) =  "") then model = "Model Descriptor Not Found in EDID data"
            model = escape(model)
            model = replace(model, "%00", "")
            model = unescape(model)
            if (instr(model, "Generic PnP Monitor")) then
                model = "Generic PNP Monitor"
            end if


            ' manufacture date
            tmpmfgweek = asc(mid(strarrRawEDID(tmpctr),&H10+1,1))
            tmpmfgyear = (asc(mid(strarrRawEDID(tmpctr),&H11+1,1))) + 1990
            manufacture_date = month(dateadd("ww",tmpmfgweek,datevalue("1/1/" & tmpmfgyear))) & "/" & tmpmfgyear
            ' Inserts a 0 if month < 10
            temp_date = Split(manufacture_date, "/", -1, 1)
            temp_date(0) = right("0" & temp_date(0),2)
            manufacture_date = temp_date(0) & "/" & temp_date(1)


            'edid version
            tmpEDIDMajorVer = asc(mid(strarrRawEDID(tmpctr),&H12+1,1))
            tmpEDIDRev = asc(mid(strarrRawEDID(tmpctr),&H13+1,1))
            edid_version = chr(48+tmpEDIDMajorVer) & "." & chr(48+tmpEDIDRev)


            'device id
            tmpEDIDDev1 = hex(asc(mid(strarrRawEDID(tmpctr),&H0a+1,1)))
            tmpEDIDDev2 = hex(asc(mid(strarrRawEDID(tmpctr),&H0b+1,1)))
            if len(tmpEDIDDev1) = 1 then tmpEDIDDev1 = "0" & tmpEDIDDev1 end if
            if len(tmpEDIDDev2) = 1 then tmpEDIDDev2 = "0" & tmpEDIDDev2 end if
            device_id = tmpEDIDDev2 & tmpEDIDDev1



            ' manufacturer
            manufacturer = ""
            tmpEDIDMfg = mid(strarrRawEDID(tmpctr),&H08+1,2)
            Char1=0 : Char2=0 : Char3=0
            Byte1 = asc(left(tmpEDIDMfg,1))
            Byte2 = asc(right(tmpEDIDMfg,1))
            if (Byte1 and 64)  > 0 then Char1 = Char1 + 16
            if (Byte1 and 32)  > 0 then Char1 = Char1 + 8
            if (Byte1 and 16)  > 0 then Char1 = Char1 + 4
            if (Byte1 and 8)   > 0 then Char1 = Char1 + 2
            if (Byte1 and 4)   > 0 then Char1 = Char1 + 1
            if (Byte1 and 2)   > 0 then Char2 = Char2 + 16
            if (Byte1 and 1)   > 0 then Char2 = Char2 + 8
            if (Byte2 and 128) > 0 then Char2 = Char2 + 4
            if (Byte2 and 64)  > 0 then Char2 = Char2 + 2
            if (Byte2 and 32)  > 0 then Char2 = Char2 + 1
            Char3 = Char3 + (Byte2 and 16)
            Char3 = Char3 + (Byte2 and 8)
            Char3 = Char3 + (Byte2 and 4)
            Char3 = Char3 + (Byte2 and 2)
            Char3 = Char3 + (Byte2 and 1)
            man_id = chr(Char1+64) & chr(Char2+64) & chr(Char3+64)
            std_mon = instr(temp_manuf(tmpctr), "(Standard monitor types)")
            if ( std_mon = 0 AND temp_manuf(tmpctr) <> "" ) then man_id = temp_manuf(tmpctr)
            manufacturer = man_id
            if (man_id = "ACR") then manufacturer = "Acer" end if
            if (man_id = "ACT") then manufacturer = "Targa" end if
            if (man_id = "ADI") then manufacturer = "ADI" end if
            if (man_id = "AOC") then manufacturer = "AOC International" end if
            if (man_id = "API") then manufacturer = "Acer" end if
            if (man_id = "APP") then manufacturer = "Apple" end if
            if (man_id = "ART") then manufacturer = "ArtMedia" end if
            if (man_id = "AST") then manufacturer = "AST Research" end if
            if (man_id = "CPL") then manufacturer = "Compal" end if
            if (man_id = "CPQ") then manufacturer = "Compaq" end if
            if (man_id = "CTX") then manufacturer = "Chuntex" end if
            if (man_id = "DEC") then manufacturer = "Digital Equipment Corporation" end if
            if (man_id = "DEL") then manufacturer = "Dell" end if
            if (man_id = "Dell Inc.") then manufacturer = "Dell" end if
            if (instr(man_id, "Dell Inc.")) then manufacturer = "Dell" end if
            if (man_id = "DPC") then manufacturer = "Delta" end if
            if (man_id = "DWE") then manufacturer = "Daewoo" end if
            if (man_id = "ECS") then manufacturer = "Elitegroup Computer Systems" end if
            if (man_id = "EIZ") then manufacturer = "EIZO" end if
            if (man_id = "EPI") then manufacturer = "Envision" end if
            if (man_id = "FCM") then manufacturer = "Funai" end if
            if (man_id = "FUS") then manufacturer = "Fujitsu Siemens" end if
            if (man_id = "GSM") then manufacturer = "LG Electronics" end if
            if (man_id = "GWY") then manufacturer = "Gateway 2000" end if
            if (man_id = "HEI") then manufacturer = "Hyundai" end if
            if (man_id = "HIT") then manufacturer = "Hitachi" end if
            if (man_id = "HSD") then manufacturer = "Hanns.G" end if
            if (man_id = "HSL") then manufacturer = "Hansol Electronics" end if
            if (man_id = "HTC") then manufacturer = "Hitachi" end if
            if (man_id = "HWP") then manufacturer = "Hewlett Packard" end if
            if (man_id = "IBM") then manufacturer = "IBM" end if
            if (man_id = "ICL") then manufacturer = "Fujitsu" end if
            if (man_id = "IVM") then manufacturer = "Idek Iiyama" end if
            if (man_id = "KFC") then manufacturer = "KFC Computek" end if
            if (man_id = "LEN") then manufacturer = "Lenovo" end if
            if (man_id = "LGD") then manufacturer = "LG Display" end if
            if (man_id = "LKM") then manufacturer = "ADLAS / AZALEA" end if
            if (man_id = "LNK") then manufacturer = "LINK Technologies" end if
            if (man_id = "LTN") then manufacturer = "Lite-On" end if
            if (man_id = "MAG") then manufacturer = "MAG InnoVision" end if
            if (man_id = "MAX") then manufacturer = "Maxdata Computer" end if
            if (man_id = "MEI") then manufacturer = "Panasonic" end if
            if (man_id = "MEL") then manufacturer = "Mitsubishi Electronics" end if
            if (man_id = "MIR") then manufacturer = "Miro" end if
            if (man_id = "MTC") then manufacturer = "MITAC" end if
            if (man_id = "NAN") then manufacturer = "NANAO" end if
            if (man_id = "NEC") then manufacturer = "NEC" end if
            if (man_id = "NOK") then manufacturer = "Nokia" end if
            if (man_id = "OQI") then manufacturer = "Optiquest" end if
            if (man_id = "PBN") then manufacturer = "Packard Bell" end if
            if (man_id = "PGS") then manufacturer = "Princeton Graphic Systems" end if
            if (man_id = "PHL") then manufacturer = "Philips" end if
            if (man_id = "PNP") then manufacturer = "Plug n Play (Microsoft)" end if
            if (man_id = "REL") then manufacturer = "Relisys" end if
            if (man_id = "SAM") then manufacturer = "Samsung" end if
            if (man_id = "SEC") then manufacturer = "Samsung" end if
            if (man_id = "SMI") then manufacturer = "Smile" end if
            if (man_id = "SMC") then manufacturer = "Samtron" end if
            if (man_id = "SNI") then manufacturer = "Siemens Nixdorf" end if
            if (man_id = "SNY") then manufacturer = "Sony Corporation" end if
            if (man_id = "SPT") then manufacturer = "Sceptre" end if
            if (man_id = "SRC") then manufacturer = "Shamrock Technology" end if
            if (man_id = "STN") then manufacturer = "Samtron" end if
            if (man_id = "STP") then manufacturer = "Sceptre" end if
            if (man_id = "TAT") then manufacturer = "Tatung" end if
            if (man_id = "TRL") then manufacturer = "Royal Information Company" end if
            if (man_id = "TOS") then manufacturer = "Toshiba" end if
            if (man_id = "TSB") then manufacturer = "Toshiba" end if
            if (man_id = "UNM") then manufacturer = "Unisys" end if
            if (man_id = "VSC") then manufacturer = "ViewSonic" end if
            if (man_id = "WTC") then manufacturer = "Wen Technology" end if
            if (man_id = "ZCM") then manufacturer = "Zenith Data Systems" end if
            if (man_id = "___") then manufacturer = "Targa"

            manufacturer = replace(manufacturer, "@", "")
            manufacturer = replace(manufacturer, "%", "")
            manufacturer = replace(manufacturer, ";", "")




            screen_size = round((sqr((asc(mid(strarrRawEDID(tmpctr),22,1)) * asc(mid(strarrRawEDID(tmpctr),22,1))) + (asc(mid(strarrRawEDID(tmpctr),23,1)) * asc(mid(strarrRawEDID(tmpctr),23,1)))) * 10 / 25.4), 1)
            'for i = 35 to 37
            '   wscript.echo "Ratio " & i & ": " & asc(mid(strarrRawEDID(tmpctr),i,1))
            'next


            ratio = ""
            if (asc(mid(strarrRawEDID(tmpctr),38,1)) and 128) then ratio = "1:" else ratio = "0:"
            if (asc(mid(strarrRawEDID(tmpctr),38,1)) and 64) then ratio = ratio & "1" else ratio = ratio & "0"

            if ratio = "0:0" then ratio = "16:10"
            if ratio = "0:1" then ratio = "4:3"
            if ratio = "1:0" then ratio = "5:4"
            if ratio = "1:1" then ratio = "16:9"


            'if (instr(all_device_id, device_id) = 0) then
            if (instr(all_device_serial, serial) = 0) then
                ' we don't have this device_id already, so output this entry
                ' note we exclude "monitors" that are plug'n'play types and have no real info
                if (manufacturer <> "" and _
                    manufacture_date <> "01/1990" and _
                    model <> "Model Descriptor Not Found in EDID data") then
                    item = item & "     <item>" & vbcrlf
                    item = item & "         <manufacturer>" & escape_xml(manufacturer) & "</manufacturer>" & vbcrlf
                    item = item & "         <device>" & escape_xml(device_id) & "</device>" & vbcrlf
                    item = item & "         <manufacture_date>" & escape_xml(manufacture_date) & "</manufacture_date>" & vbcrlf
                    item = item & "         <model>" & escape_xml(model) & "</model>" & vbcrlf
                    item = item & "         <serial>" & escape_xml(serial) & "</serial>" & vbcrlf
                    item = item & "         <edid_version>" & escape_xml(edid_version) & "</edid_version>" & vbcrlf
                    item = item & "         <aspect_ratio>" & escape_xml(ratio) & "</aspect_ratio>" & vbcrlf
                    item = item & "         <size>" & escape_xml(screen_size) & "</size>" & vbcrlf
                    item = item & "     </item>" & vbcrlf
                end if
                all_device_id = all_device_id & device_id & " "
                all_device_serial = all_device_serial & serial & " "
            end if

            manufacturer = ""
            device_id = ""
            manufacture_date = ""
            serial = ""
            model = ""
            edid_version = ""

        end if
    next

end if ' ending if we got anything from HKLM\SYSTEM\CurrentControlSet\Enum\DISPLAY\

if item > "" then
    result.WriteText "  <monitor>" & vbcrlf
    result.WriteText item
    result.WriteText "  </monitor>" & vbcrlf
end if


if debugging > "0" then wscript.echo "sound info" end if
item = ""
set colItems = objWMIService.ExecQuery("Select * from Win32_SoundDevice",,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_SoundDevice)" : audit_wmi_fails = audit_wmi_fails & "Win32_SoundDevice " : end if
for each objItem in colItems
	item = item & "		<item>" & vbcrlf
	item = item & "			<model>" & escape_xml(objItem.Name) & "</model>" & vbcrlf
	item = item & "			<manufacturer>" & escape_xml(objItem.Manufacturer) & "</manufacturer>" & vbcrlf
	item = item & "			<device>" & escape_xml(objItem.DeviceID) & "</device>" & vbcrlf
	item = item & "		</item>" & vbcrlf
next
if item > "" then
	result.WriteText "	<sound>" & vbcrlf
	result.WriteText item
	result.WriteText "	</sound>" & vbcrlf
end if



if debugging > "0" then wscript.echo "disk info" end if
result_partition = ""
result_mount_point = ""
item = ""
set colDiskDrives = objWMIService.ExecQuery("Select * FROM Win32_DiskDrive",,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_DiskDrive)" : audit_wmi_fails = audit_wmi_fails & "Win32_DiskDrive " : end if
for each objItem In colDiskDrives
	hard_drive_caption = objItem.Caption
	hard_drive_index = objItem.Index
	hard_drive_interface_type = objItem.InterfaceType
	hard_drive_scsi_logical_unit = objItem.SCSITargetId
	hard_drive_model = objItem.Model
	if hard_drive_model = "VMware, VMware Virtual S SCSI Disk Device" then
	hard_drive_model = "VMware Virtual Disk"
	end if
	hard_drive_serial = ""
	hard_drive_pnp_id = lcase(objItem.PNPDeviceID & "_0")

	' Win 2k3 doesn't support this property
	on error resume next
	hard_drive_firmware = objItem.FirmwareRevision
	on error goto 0
	if ((len(hard_drive_firmware) = 0) or (isnull(hard_drive_firmware))) then
	hard_drive_firmware = ""
	end if

	on error resume next
	hard_drive_serial = objItem.SerialNumber
	on error goto 0
	if ((len(hard_drive_serial) < 2) or (isnull(hard_drive_serial))) then
	hard_drive_serial = ""
	end if
	hard_drive_size = int(objItem.size / 1024 / 1024)
	hard_drive_device_id = objItem.deviceid
	hard_drive_partitions = objItem.Partitions
	hard_drive_manufacturer = objItem.manufacturer
	if (hard_drive_manufacturer = "(Standard disk drives)") then
	if lcase(left(hard_drive_model, 8)) = "hitachi "   then hard_drive_manufacturer = "Hitachi" 	end if
	if lcase(left(hard_drive_model, 6)) = "maxtor" 	then hard_drive_manufacturer = "Maxtor"          	end if
	if lcase(left(hard_drive_model, 7)) = "sandisk"   	then hard_drive_manufacturer = "SanDisk"         	end if
	if lcase(left(hard_drive_model, 2)) = "st"     	then hard_drive_manufacturer = "Seagate"         	end if
	if lcase(left(hard_drive_model, 4)) = "wdc "   	then hard_drive_manufacturer = "Western Digital" 	end if
	if lcase(left(hard_drive_model, 3)) = "wd "   	then hard_drive_manufacturer = "Western Digital" 	end if
	if lcase(left(hard_drive_model, 6)) = "VMware"   	then hard_drive_manufacturer = "VMware" 	end if
	end if

	hard_drive_status = "Not available"
	on error resume next
	set DriveStatus = objWMIService2.ExecQuery("Select * FROM MSStorageDriver_FailurePredictStatus",,16)
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (MSStorageDriver_FailurePredictStatus)" : audit_wmi_fails = audit_wmi_fails & "MSStorageDriver_FailurePredictStatus " : end if
	if isnull(DriveStatus) then
	' do nothing - no return value
	else
	for each objItem2 in DriveStatus
	if (lcase(objItem2.InstanceName) = hard_drive_pnp_id) then
	if (objItem2.PredictFailure <> False and objItem2.Active = True) then
	hard_drive_status = objItem2.PredictFailure & " because of " & objItem2.Reason
	else
	hard_drive_status = "OK"
	end if
	end if
	next
	end if
	on error goto 0

	item = item & "		<item>" & vbcrlf
	item = item & "			<caption>" & escape_xml(hard_drive_caption) & "</caption>" & vbcrlf
	item = item & "			<hard_drive_index>" & escape_xml(hard_drive_index) & "</hard_drive_index>" & vbcrlf
	item = item & "			<interface_type>" & escape_xml(hard_drive_interface_type) & "</interface_type>" & vbcrlf
	item = item & "			<manufacturer>" & escape_xml(hard_drive_manufacturer) & "</manufacturer>" & vbcrlf
	item = item & "			<model>" & escape_xml(hard_drive_model) & "</model>" & vbcrlf
	item = item & "			<serial>" & escape_xml(hard_drive_serial) & "</serial>" & vbcrlf
	item = item & "			<size>" & escape_xml(hard_drive_size) & "</size>" & vbcrlf
	item = item & "			<device>" & escape_xml(hard_drive_device_id) & "</device>" & vbcrlf
	item = item & "			<partition_count>" & escape_xml(hard_drive_partitions) & "</partition_count>" & vbcrlf
	item = item & "			<status>" & escape_xml(hard_drive_status) & "</status>" & vbcrlf
	item = item & "			<firmware>" & escape_xml(hard_drive_firmware) & "</firmware>" & vbcrlf
	item = item & "			<scsi_logical_unit>" & escape_xml(hard_drive_scsi_logical_unit) & "</scsi_logical_unit>" & vbcrlf
	item = item & "		</item>" & vbcrlf
next

if item > "" then
	result.WriteText "	<disk>" & vbcrlf
	result.WriteText 	item
	result.WriteText "	</disk>" & vbcrlf
end if


if debugging > "0" then wscript.echo "partition info" end if
set colPartitions = objWMIService.ExecQuery("Select * FROM Win32_LogicalDisk where DriveType = '2' or DriveType = '3'",,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_LogicalDisk)" : audit_wmi_fails = audit_wmi_fails & "Win32_LogicalDisk " : end if
for each objPartition In colPartitions

	partition_index 	= ""
	partition_mount_point 	= ""
	partition_name 	= ""
	partition_size 	= 0
	partition_free_space 	= 0
	partition_used_space 	= 0
	partition_format 	= ""
	partition_caption 	= ""
	partition_type 	= ""
	partition_quotas_supported 	= ""
	partition_quotas_enabled 	= ""
	partition_serial 	= ""
	partition_bootable 	= ""
	'partition_index 	= objPartition.Index '''''''''''''''''''''''''''''''''
	partition_size 	= int(objPartition.Size /1024 /1024)
	partition_device_id 	= ""
	partition_disk_index 	= ""

	set colLinks = objWMIService.ExecQuery("Select * FROM Win32_LogicalDiskToPartition",,32)
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_LogicalDiskToPartition)" : audit_wmi_fails = audit_wmi_fails & "Win32_LogicalDiskToPartition " : end if
	for each colLink in colLinks
	if (inStr(colLink.Dependent, objPartition.DeviceID) > 0) then
	partition_device_id_array = split(colLink.Antecedent, """")
	partition_device_id = partition_device_id_array(1)
	disk_index_array = split(partition_device_id, "#")
	disk_index_new = disk_index_array(1)
	partition_disk_index = mid(disk_index_new, 1, instr(disk_index_new, ",")-1)
	disk_index_new = ""
	end if
	next


	partition_mount_point 	= objPartition.Caption
	partition_name 	= objPartition.VolumeName
	partition_free_space 	= int(objPartition.FreeSpace /1024 /1024)
	partition_used_space 	= int(partition_size - partition_free_space)
	partition_format 	= objPartition.FileSystem
	partition_caption 	= objPartition.Caption
	partition_serial 	= objPartition.VolumeSerialNumber

	if ( objPartition.DriveType = "2") then
	partition_type = "local removable"
	end if
	if ( objPartition.DriveType = "3") then
	partition_type = "local"
	end if

	if (partition_size > "") then
	result_partition = result_partition & "		<item>" & vbcrlf
	result_partition = result_partition & "			<hard_drive_index>" & escape_xml(partition_disk_index) & "</hard_drive_index>" & vbcrlf
	result_partition = result_partition & "			<mount_type>partition</mount_type>" & vbcrlf
	result_partition = result_partition & "			<mount_point>" & escape_xml(partition_mount_point) & "</mount_point>" & vbcrlf
	result_partition = result_partition & "			<name>" & escape_xml(partition_name) & "</name>" & vbcrlf
	result_partition = result_partition & "			<size>" & escape_xml(partition_size) & "</size>" & vbcrlf
	result_partition = result_partition & "			<free>" & escape_xml(partition_free_space) & "</free>" & vbcrlf
	result_partition = result_partition & "			<used>" & escape_xml(partition_used_space) & "</used>" & vbcrlf
	result_partition = result_partition & "			<format>" & escape_xml(partition_format) & "</format>" & vbcrlf
	result_partition = result_partition & "			<description>" & escape_xml(partition_caption) & "</description>" & vbcrlf
	result_partition = result_partition & "			<device>" & escape_xml(partition_device_id) & "</device>" & vbcrlf
	result_partition = result_partition & "			<partition_disk_index></partition_disk_index>" & vbcrlf
	result_partition = result_partition & "			<type>" & escape_xml(partition_type) & "</type>" & vbcrlf
	result_partition = result_partition & "			<serial>" & escape_xml(partition_serial) & "</serial>" & vbcrlf
	result_partition = result_partition & "		</item>" & vbcrlf
	end if
next

' only Win2003 and above have Win32_MappedLogicalDisk
if (skip_mount_point = "n" and cint(windows_build_number) > 3000) then
	if debugging > "0" then wscript.echo "mapped disks info" end if
	on error resume next
	set colPartitions = objWMIService.ExecQuery("Select * FROM Win32_MappedLogicalDisk",,32)
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_MappedLogicalDisk)" : audit_wmi_fails = audit_wmi_fails & "Win32_MappedLogicalDisk " : end if
	for each objPartition In colPartitions

	partition_mount_point 	= objPartition.Caption
	partition_device_id	= objPartition.DeviceId
	partition_name 	= objPartition.VolumeName
	partition_free_space 	= int(objPartition.FreeSpace /1024 /1024)
	partition_size 	= int(objPartition.Size /1024 /1024)
	partition_used_space 	= int(partition_size - partition_free_space)
	partition_format 	= objPartition.FileSystem
	partition_caption 	= objPartition.Caption
	partition_serial 	= objPartition.VolumeSerialNumber
	partition_provider_name = objPartition.ProviderName

	if (isnull(partition_name)) then
	temp = split(partition_provider_name, "\")
	partition_name = temp(uBound(temp))
	end if

	if (partition_provider_name <> "") then
	partition_name = partition_name & " at " & partition_provider_name
	end if

	if (partition_size > "") then
	result_partition = result_partition & "		<item>" & vbcrlf
	result_partition = result_partition & "			<hard_drive_index></hard_drive_index>" & vbcrlf
	result_partition = result_partition & "			<mount_type>mount point</mount_type>" & vbcrlf
	result_partition = result_partition & "			<mount_point>" & escape_xml(partition_mount_point) & "</mount_point>" & vbcrlf
	result_partition = result_partition & "			<name>" & escape_xml(partition_name) & "</name>" & vbcrlf
	result_partition = result_partition & "			<size>" & escape_xml(partition_size) & "</size>" & vbcrlf
	result_partition = result_partition & "			<free>" & escape_xml(partition_free_space) & "</free>" & vbcrlf
	result_partition = result_partition & "			<used>" & escape_xml(partition_used_space) & "</used>" & vbcrlf
	result_partition = result_partition & "			<format>" & escape_xml(partition_format) & "</format>" & vbcrlf
	result_partition = result_partition & "			<description>" & escape_xml(partition_caption) & "</description>" & vbcrlf
	result_partition = result_partition & "			<device>" & escape_xml(partition_device_id) & "</device>" & vbcrlf
	result_partition = result_partition & "			<partition_disk_index></partition_disk_index>" & vbcrlf
	result_partition = result_partition & "			<bootable></bootable>" & vbcrlf
	result_partition = result_partition & "			<type>smb</type>" & vbcrlf
	result_partition = result_partition & "			<serial>" & escape_xml(partition_serial) & "</serial>" & vbcrlf
	result_partition = result_partition & "		</item>" & vbcrlf
	end if
	next
end if


' only Win2003 and above have win32_volume
if (skip_mount_point = "n" and cint(windows_build_number) > 3000) then
	if debugging > "0" then wscript.echo "mount point info" end if
	on error resume next
	set colMounts = objWMIService.ExecQuery("Select * from Win32_Volume WHERE DriveLetter = NULL",,32)
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_Volume)" : audit_wmi_fails = audit_wmi_fails & "Win32_Volume " : end if
	for each mount in colMounts
	mount_caption	= mount.Caption
	mount_name 		= mount.Label
	mount_size 		= int(mount.Capacity /1024 /1024)
	mount_free_space = int(mount.FreeSpace /1024 /1024)
	mount_used_space = int(mount_size - mount_free_space)
	mount_format 	= mount.FileSystem
	mount_serial 	= mount.SerialNumber
	if (mount_size > "") then
	result_partition = result_partition & "		<item>" & vbcrlf
	result_partition = result_partition & "			<hard_drive_index></hard_drive_index>" & vbcrlf
	result_partition = result_partition & "			<mount_type>mount point</mount_type>" & vbcrlf
	result_partition = result_partition & "			<mount_point>" & escape_xml(mount_caption) & "</mount_point>" & vbcrlf
	result_partition = result_partition & "			<name>" & escape_xml(mount_name) & "</name>" & vbcrlf
	result_partition = result_partition & "			<size>" & escape_xml(mount_size) & "</size>" & vbcrlf
	result_partition = result_partition & "			<free>" & escape_xml(mount_free_space) & "</free>" & vbcrlf
	result_partition = result_partition & "			<used>" & escape_xml(mount_used_space) & "</used>" & vbcrlf
	result_partition = result_partition & "			<format>" & escape_xml(mount_format) & "</format>" & vbcrlf
	result_partition = result_partition & "			<description>" & escape_xml(mount_caption) & "</description>" & vbcrlf
	result_partition = result_partition & "			<device></device>" & vbcrlf
	result_partition = result_partition & "			<partition_disk_index></partition_disk_index>" & vbcrlf
	result_partition = result_partition & "			<type>volume</type>" & vbcrlf
	result_partition = result_partition & "			<serial>" & escape_xml(mount_serial) & "</serial>" & vbcrlf
	result_partition = result_partition & "		</item>" & vbcrlf
	end if
	next
	On Error Goto 0
end if

if result_partition > "" then
	result.WriteText "	<partition>" & vbcrlf
	result.WriteText 	result_partition
	result.WriteText "	</partition>" & vbcrlf
end if



if debugging > "0" then wscript.echo "shares info" end if
' test to see if the share permissions .exe exists
file_exists = False
if audit_location = "local" then
	if objFSO.FileExists("C:\RMTSHARE.exe") then
	file_exists = True
	else
	' copy the file to the machine being audited
	end if
	' TODO: get rmtshare.exe from OA server, if needed
end if

' NOTE - only selecting "Disk Drive" type shares.
' This does not include default shares.
set colItems = objWMIService.ExecQuery("Select * from Win32_Share where type='0'",,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_Share)" : audit_wmi_fails = audit_wmi_fails & "Win32_share " : end if
for each objItem in colItems
	result_users = ""
	share_users = ""
	folder_size = ""
	if ((objItem.Path > "") AND _
	not isnull(objItem.Path) AND _
	objItem.Path <> "C:\WINNT" AND _
	objItem.Path <> "C:\WINDOWS" AND _
	objItem.Path <> "C:\" AND _
	right(objItem.Path, 1) <> "\" AND _
	len(objItem.Path) > 3 AND _
	audit_location = "local" ) then
	on error resume next
	Set objFolder = objFSO.GetFolder(objItem.Path)
	folder_size = int(objFolder.size/1024/1024)
	On Error Goto 0
	' note - removed the below line from the conditions above
	' right(objItem.Name, 1) <> "$" AND _
	else
	folder_size = ""
	end if

	if ((objItem.Path > "") AND _
	not isnull(objItem.Path) AND _
	objItem.Path <> "C:\WINNT" AND _
	objItem.Path <> "C:\WINDOWS" AND _
	objItem.Path <> "C:\" AND _
	right(objItem.Path, 1) <> "\" AND _
	len(objItem.Path) > 3 AND _
	audit_location = "remote" ) then
	on error resume next
	' disabled - causing timeout issues
	remote_share = "\\" & system_hostname & "\" & objItem.Name
	'Set objFolder = objFSO.GetFolder(remote_share)
	'folder_size = int(objFolder.size/1024/1024)
	folder_size = 0
	On Error Goto 0
	end if

	result_share = result_share & "		<item>" & vbcrlf
	result_share = result_share & "			<name>" & escape_xml(objItem.Name) & "</name>" & vbcrlf
	result_share = result_share & "			<caption>" & escape_xml(objItem.Caption) & "</caption>" & vbcrlf
	result_share = result_share & "			<path>" & escape_xml(objItem.Path) & "</path>" & vbcrlf
	result_share = result_share & "			<size>" & escape_xml(folder_size) & "</size>" & vbcrlf

	if file_exists = True then
	strCommand = "c:\RMTSHARE.EXE \\" & system_hostname & "\""" & objItem.Name & """ "
	set objExecObject = objShell.Exec(strCommand)
	do While Not objExecObject.StdOut.AtEndOfStream
	strResults = objExecObject.StdOut.ReadAll()
	Loop
	MyArray = Split(strResults, vbcrlf)
	flag = False
	for each line in MyArray
	if line = "The command completed successfully." then
	flag = False
	end if
	if flag = True then
	newArray = split(line, ":")
	if (left(ltrim(newArray(0)),1) = "\") then
	newArray(0) = mid(trim(newArray(0)), 2)
	end if
	share_users = share_users & trim(newArray(0)) & "(" & trim(newArray(1)) & "), "
	end if
	if line = "Permissions:" then
	flag = True
	end if
	next
	if share_users > "" then
	share_users = left(share_users, len(share_users)-2)
	result_share = result_share & "			<users>" & escape_xml(share_users) & "</users>" & vbcrlf
	end if
	end if
	result_share = result_share & "		</item>" & vbcrlf
next
if result_share > "" then
	result.WriteText "	<share>" & vbcrlf
	result.WriteText 	result_share
	result.WriteText "	</share>" & vbcrlf
end if


if debugging > "0" then wscript.echo "network card info" end if
result.WriteText "	<network>" & vbcrlf
set colItems = objWMIService.ExecQuery("Select * from Win32_NetworkAdapterConfiguration " _
	& "WHERE IPEnabled = True or (ServiceName<>'' AND ServiceName<>'AsyncMac' " _
	& "AND ServiceName<>'VMnetx' AND ServiceName<>'VMnetadapter' " _
	& "AND ServiceName<>'Rasl2tp' AND ServiceName<>'msloop' " _
	& "AND ServiceName<>'PptpMiniport' AND ServiceName<>'Raspti' " _
	& "AND ServiceName<>'NDISWan' AND ServiceName<>'NdisWan4' AND ServiceName<>'RasPppoe' " _
	& "AND ServiceName<>'NdisIP' AND ServiceName<>'tunmp' AND Description<>'PPP Adapter.') " _
	& "AND MACAddress is not NULL" ,,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_NetworkAdapterConfiguration)" : audit_wmi_fails = audit_wmi_fails & "Win32_NetworkAdapterConfiguration " : end if
on error resume next
for each objItem in colItems
	net_dns_server = ""
	net_index = objItem.Index
	if (not isnull(objItem.MACAddress)) then
	net_mac_address = objItem.MACAddress
	else
	net_mac_address = ""
	end if
	net_description = objItem.Description
	net_dhcp_enabled = objItem.DHCPEnabled
	net_dhcp_server = objItem.DHCPServer
	if (not isnull(objItem.DHCPLeaseObtained)) then
	net_dhcp_lease_obtained = WMIDateStringToDate(objItem.DHCPLeaseObtained)
	else
	net_dhcp_lease_obtained = ""
	end if
	if (not isnull(objItem.DHCPLeaseExpires)) then
	net_dhcp_lease_expires = WMIDateStringToDate(objItem.DHCPLeaseExpires)
	else
	net_dhcp_lease_expires = ""
	end if
	if (not isnull(objItem.DNSServerSearchOrder)) then
	net_dns_server = Join(objItem.DNSServerSearchOrder, ",")
	else
	net_dns_server = ""
	end if
	net_dns_host_name = objItem.DNSHostName
	net_dns_domain = objItem.DNSDomain
	net_ip_enabled = objItem.IPEnabled
	net_dns_domain_reg_enabled = objItem.DomainDNSRegistrationEnabled
	net_wins_primary = objItem.WINSPrimaryServer
	net_wins_lmhosts_enabled = objItem.WINSEnableLMHostsLookup
	net_wins_secondary = objItem.WINSSecondaryServer
	set colItems2 = objWMIService.ExecQuery("SELECT * FROM Win32_NetworkAdapter where index='" & net_index & "'", "WQL", wbemFlagReturnImmediately + wbemFlagForwardOnly)
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_NetworkAdapter)" : audit_wmi_fails = audit_wmi_fails & "Win32_NetworkAdapter " : end if
	if (not isnull(colItems2)) then
	for each objItem2 in colItems2
	if (not isnull(objItem2)) then
	net_adapter_type = objItem2.AdapterType
	net_manufacturer = objItem2.Manufacturer
	net_model = objItem2.ProductName
	' below only checks when OS is XP or later (not 2000 or NT)
	if (windows_build_number > 2195) then
	net_connection_id = objItem2.NetConnectionID
	net_connection_status = WMINetConnectorStatus(objItem2.NetConnectionStatus)
	if (objItem2.NetConnectionStatus = "2" or objItem2.NetConnectionStatus = "9") then
	' Found a connected NIC: detecting link speed
	set colItems3 = objWMIService2.ExecQuery("Select * from MSNdis_LinkSpeed WHERE InstanceName = '" & escape_wmi(net_description) & "'",,32)
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (MSNdis_LinkSpeed)" : audit_wmi_fails = audit_wmi_fails & "MSNdis_LinkSpeed " : end if
	for each objItem3 in colItems3
	net_speed = objItem3.NdisLinkSpeed
	next
	end if
	else
	net_connection_id = ""
	net_connection_status = ""
	net_speed = ""
	end if
	if net_manufacturer <> "Microsoft TV/Video Connection" then
	result.WriteText "		<item>" & vbcrlf
	result.WriteText "			<mac>" & escape_xml(net_mac_address) & "</mac>" & vbcrlf
	result.WriteText "			<manufacturer>" & escape_xml(net_manufacturer) & "</manufacturer>" & vbcrlf
	result.WriteText "			<model>" & escape_xml(net_model) & "</model>" & vbcrlf
	result.WriteText "			<description>" & escape_xml(net_description) & "</description>" & vbcrlf
	result.WriteText "			<ip_enabled>" & escape_xml(net_ip_enabled) & "</ip_enabled>" & vbcrlf
	result.WriteText "			<net_index>" & escape_xml(net_index) & "</net_index>" & vbcrlf
	result.WriteText "			<connection>" & escape_xml(net_connection_id) & "</connection>" & vbcrlf
	result.WriteText "			<connection_status>" & escape_xml(net_connection_status) & "</connection_status>" & vbcrlf
	result.WriteText "			<speed>" & escape_xml(net_speed) & "</speed>" & vbcrlf
	result.WriteText "			<type>" & escape_xml(net_adapter_type) & "</type>" & vbcrlf
	result.WriteText "			<dhcp_enabled>" & escape_xml(net_dhcp_enabled) & "</dhcp_enabled>" & vbcrlf
	result.WriteText "			<dhcp_server>" & escape_xml(net_dhcp_server) & "</dhcp_server>" & vbcrlf
	result.WriteText "			<dhcp_lease_obtained>" & escape_xml(net_dhcp_lease_obtained) & "</dhcp_lease_obtained>" & vbcrlf
	result.WriteText "			<dhcp_lease_expires>" & escape_xml(net_dhcp_lease_expires) & "</dhcp_lease_expires>" & vbcrlf
	result.WriteText "			<dns_host_name>" & escape_xml(net_dns_host_name) & "</dns_host_name>" & vbcrlf
	result.WriteText "			<dns_domain>" & escape_xml(net_dns_domain) & "</dns_domain>" & vbcrlf
	result.WriteText "			<dns_domain_reg_enabled>" & escape_xml(net_dns_domain_reg_enabled) & "</dns_domain_reg_enabled>" & vbcrlf
	result.WriteText "			<dns_server>" & escape_xml(net_dns_server) & "</dns_server>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf
	end if
	end if
	next
	end if
next
result.WriteText "	</network>" & vbcrlf
on error goto 0

if debugging > "0" then wscript.echo "network address info" end if
item = ""
dim ip_address_array(100)
count = 0
set colItems = objWMIService.ExecQuery("Select * from Win32_NetworkAdapterConfiguration WHERE IPEnabled = True ",,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_NetworkAdapterConfiguration)" : audit_wmi_fails = audit_wmi_fails & "Win32_NetworkadapterConfiguration " : end if
for each objItem in colItems
	net_mac_address = objItem.MACAddress
	net_index = objItem.Index
	if net_mac_address > "" then
	for i = LBound(objItem.IPAddress) to UBound(objItem.IPAddress)
	ip_address = objItem.IPAddress(i)
	ip_subnet = objItem.IPSubnet(i)
	if len(ip_address) > 15 then
		ip_address_version = "6"
		cidr = ip_subnet
		netmask = ""
	else
		ip_address_version = "4"
		cidr = ""
		netmask = ip_subnet
	end if
	if ip_address <> "0.0.0.0" then
	count = count + 1
	item = item & "		<item>" & vbcrlf
	item = item & "			<mac>" & escape_xml(net_mac_address) & "</mac>" & vbcrlf
	item = item & "			<net_index>" & escape_xml(net_index) & "</net_index>" & vbcrlf
	item = item & "			<ip>" & escape_xml(ip_address) & "</ip>" & vbcrlf
	item = item & "			<netmask>" & escape_xml(netmask) & "</netmask>" & vbcrlf
	item = item & "			<cidr>" & escape_xml(cidr) & "</cidr>" & vbcrlf
	item = item & "			<version>" & escape_xml(ip_address_version) & "</version>" & vbcrlf
	item = item & "		</item>" & vbcrlf
	if ip_address_version = "4" then
	ip_address_array(count) = ip_address_v4
	end if
	end if
	next
	end if
next
if item > "" then
	result.WriteText "	<ip>" & vbcrlf
	result.WriteText item
	result.WriteText "	</ip>" & vbcrlf
end if

if skip_dns = "n" then
    if debugging > "0" then wscript.echo "DNS info" end if
    item = ""
    on error resume next
    set colItems = objWMIService.ExecQuery("Select * from Win32_NetworkAdapterConfiguration WHERE IPEnabled = True AND DHCPEnabled = False ",,32)
    error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_NetworkAdapterConfiguration)" : audit_wmi_fails = audit_wmi_fails & "Win32_NetworkadapterConfiguration " : end if
    for each objItem in colItems
        net_mac_address = objItem.MACAddress
        if debugging > "2" then 
            wscript.echo "  IPEnabled adapter without DHCP enabled"
            wscript.echo "    InterfaceIndex: " & objItem.InterfaceIndex 
            wscript.echo "    Description: " & objItem.Description 
            wscript.echo "    MACAddress: " & net_mac_address 
        end if
        for i = LBound(objItem.IPAddress) to UBound(objItem.IPAddress)
            ip_address = objItem.IPAddress(i)
            ip_subnet = objItem.IPSubnet(i)
            if debugging > "2" then 
                wscript.echo "      IPAddress: " & ip_address
                wscript.echo "      IPSubnet: " & ip_subnet
            end if
            if ((len(ip_address) < 16) and (ip_address <> "0.0.0.0")) then
                Set objWMIService2 = GetObject("winmgmts:\\" & local_dns_server & "\root\MicrosoftDNS")
                Set colItems2 = objWMIService2.ExecQuery("SELECT * FROM MicrosoftDNS_AType where recorddata = '" & ip_address & "' ", "WQL", wbemFlagReturnImmediately + wbemFlagForwardOnly)
                for each objitem2 in colitems2
                    full_name = split(objItem2.OwnerName, ".")
                    hostname = full_name(0)
                    dns_full_name = objItem2.OwnerName
                    if details_to_lower = "y" then
                        hostname = lcase(hostname)
                        dns_full_name = lcase(dns_host_name)
                    end if
                    dns_ip_address = ""
                    dns_ip_address = objItem2.IPAddress
                    if debugging > "2" then 
                        wscript.echo "      Hostname: " & hostname
                        wscript.echo "      DNS Full Name: " & dns_full_name
                        wscript.echo "      DNS IP Address: " & dns_ip_address
                    end if
                    if dns_ip_address <> "" and hostname <> "" then
	                    item = item & "     <item>" & vbcrlf
	                    item = item & "         <name>" & escape_xml(hostname) & "</name>" & vbcrlf
	                    item = item & "         <fqdn>" & escape_xml(dns_full_name) & "</fqdn>" & vbcrlf
	                    item = item & "         <ip>" & escape_xml(dns_ip_address) & "</ip>" & vbcrlf
	                    item = item & "     </item>" & vbcrlf
	                end if
                next
            end if
        next
    next
    on error goto 0
    if item > "" then
        result.WriteText "  <dns>" & vbcrlf
        result.WriteText item
        result.WriteText "  </dns>" & vbcrlf
    end if
    item = ""
end if

Set StdOut = WScript.StdOut
if (skip_printer = "n") then
	' NOTE - we do not record devices we cannot detect (local USB) or ping (network)
	' LPT1 connected printers will be recorded regardless of status
	if debugging > "0" then wscript.echo "printer info" end if
	item = ""
	colItems = Empty
	Dim objExec
	on error resume next
	Set colItems = objWMIService.ExecQuery("Select * FROM Win32_Printer",,32)
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_Printer)" : audit_wmi_fails = audit_wmi_fails & "Win32_Printer " : end if
	on error goto 0

	if IsEmpty(colItems) then
	' do nothing with printers - some error occured trying to query win32_printer
	else
	For Each objItem In colItems

		if (   (Instr(1, objItem.DriverName, "ActiveFax", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "AdobePS Acrobat Distiller", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "Amyuni Document Converter", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "Autodesk DWFWriter", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "Black Ice", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "Canon DM Driver", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "Canon iW Image Driver", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "Citrix Universal Printer", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "Document Publisher Plus Printer Driver", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "DocuWorks Printer Driver", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "e-BRIDGE Viewer", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "Fax", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "FRx Document Image Writer Driver", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "Generic / Text Only", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "HP Universal Printing", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "Journal Note Writer Driver", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "MacromediaFlashPaper", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "Microsoft", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "mimio Print Capture Driver", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "Nitro Reader", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "Nuance Image Printer Driver", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "PaperPort", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "PCL6 Driver for Universal Print", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "PS Driver for Universal Print", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "PDF", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "SnagIt", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "Snapshot 70 Driver", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "OneNote", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "Therefore", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "TIFF Image Printer", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "TP Output Gateway", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "WINPRINT-Kyocera", vbTextCompare)) _
		or (Instr(1, objItem.DriverName, "WebEx", vbTextCompare)) _
		or (Instr(1, objItem.Caption, "PDF", vbTextCompare)) _
		or (InStr(lcase(objItem.PortName), "ts0") = 1) _
		or (InStr(lcase(objItem.PortName), "webex") = 1) _
		or (InStr(lcase(objItem.PortName), "file") = 1) _
		or (InStr(objItem.PortName, "\\") = 1) _
		or (InStr(lcase(objItem.PortName), "oletoadi") = 1) _
		or (InStr(lcase(objItem.PortName), "client/") = 1) _
		or (InStr(lcase(objItem.PortName), "client:") = 1) _
		or (InStr(lcase(objItem.PortName), "lpt1:") = 1) _
		or (InStr(lcase(objItem.PortName), "tpvm:") = 1) _
		or (InStr(1, lcase(objItem.DeviceID), "(copy " , vbTextCompare)) _
		) then
		' software printer or some other non-local or non-network printer - do nothing for now
		' LPT1: is being excluded because this appears when a USB multi-function printer is used.
		' Most new PCs don't even have a printer port anymore.
		' Yes, it may not be 100% exact, but it's good enough for me :-)
		else
			if debugging > "2" then
				wscript.echo "Printer Driver Name: " & objItem.DriverName
				wscript.echo "Printer Port: " & objItem.PortName
			end if

			capabilities = join(objItem.CapabilityDescriptions, ", ")
			printer_color = "False"
			if (instr(1, capabilities, "Color", vbTextCompare) > 0) then
				printer_color = "True"
			end if
			printer_duplex = "False"
			if (instr(1, capabilities, "Duplex", vbTextCompare) > 0) then
				printer_duplex = "True"
			end if

			printer_model = replace(objItem.DriverName, " PCL 5e", "")
			printer_model = replace(printer_model, " PCL 5", "")
			printer_model = replace(printer_model, " PCL5", "")
			printer_model = replace(printer_model, " PCL 6e", "")
			printer_model = replace(printer_model, " PCL 6", "")
			printer_model = replace(printer_model, " PCL6", "")
			printer_model = replace(printer_model, " PCL", "")
			printer_model = replace(printer_model, " PS", "")
			printer_manufacturer = ""
			if (instr(1, printer_model, "Aficio", vbTextCompare) = 1) then printer_manufacturer = "Ricoh" end if
			if (instr(1, printer_model, "AGFA", vbTextCompare) = 1) then printer_manufacturer = "Agfa" end if
			if (instr(1, printer_model, "Apple Laser", vbTextCompare) = 1) then printer_manufacturer = "Apple" end if
			if (instr(1, printer_model, "Brother", vbTextCompare) = 1) then printer_manufacturer = "Brother" end if
			if (instr(1, printer_model, "Canon", vbTextCompare) = 1) then printer_manufacturer = "Canon" end if
			if (instr(1, printer_model, "Color-MFPe", vbTextCompare) = 1) then printer_manufacturer = "Toshiba" end if
			if (instr(1, printer_model, "Datamax", vbTextCompare) = 1) then printer_manufacturer = "Datamax" end if
			if (instr(1, printer_model, "Dell", vbTextCompare) = 1) then printer_manufacturer = "Dell" end if
			if (instr(1, printer_model, "DYMO", vbTextCompare) = 1) then printer_manufacturer = "Dymo" end if
			if (instr(1, printer_model, "EasyCoder", vbTextCompare) = 1) then printer_manufacturer = "Intermec" end if
			if (instr(1, printer_model, "Epson", vbTextCompare) = 1) then printer_manufacturer = "Epson" end if
			if (instr(1, printer_model, "Fiery", vbTextCompare) = 1) then printer_manufacturer = "Konica Minolta" end if
			if (instr(1, printer_model, "Fuji", vbTextCompare) = 1) then printer_manufacturer = "Fuji" end if
			if (instr(1, printer_model, "FX ApeosPort", vbTextCompare) = 1) then printer_manufacturer = "Fuji" end if
			if (instr(1, printer_model, "FX DocuCentre", vbTextCompare) = 1)then printer_manufacturer = "Fuji" end if
			if (instr(1, printer_model, "FX DocuPrint", vbTextCompare) = 1) then printer_manufacturer = "Fuji" end if
			if (instr(1, printer_model, "FX DocuWide", vbTextCompare) = 1)  then printer_manufacturer = "Fuji" end if
			if (instr(1, printer_model, "FX Document", vbTextCompare) = 1) then printer_manufacturer = "Xerox" end if
			if (instr(1, printer_model, "GelSprinter", vbTextCompare) = 1) then printer_manufacturer = "Ricoh" end if
			if (instr(1, printer_model, "HP ", vbTextCompare) = 1) then printer_manufacturer = "Hewlett Packard" end if
			if (instr(1, printer_model, "Konica", vbTextCompare) = 1) then printer_manufacturer = "Konica Minolta" end if
			if (instr(1, printer_model, "Kyocera", vbTextCompare) = 1) then printer_manufacturer = "Kyocera Mita" end if
			if (instr(1, printer_model, "LAN-Fax", vbTextCompare) = 1) then printer_manufacturer = "Ricoh" end if
			if (instr(1, printer_model, "Lexmark", vbTextCompare) = 1) then printer_manufacturer = "Lexmark" end if
			if (instr(1, printer_model, "Mita", vbTextCompare) = 1) then printer_manufacturer = "Kyocera-Mita" end if
			if (instr(1, printer_model, "Muratec", vbTextCompare) = 1) then printer_manufacturer = "Muratec" end if
			if (instr(1, printer_model, "Oce", vbTextCompare) = 1) then printer_manufacturer = "Oce" end if
			if (instr(1, printer_model, "Oki", vbTextCompare) = 1) then printer_manufacturer = "Oki" end if
			if (instr(1, printer_model, "Panaboard", vbTextCompare) = 1) then printer_manufacturer = "Panasonic" end if
			if (instr(1, printer_model, "Ricoh", vbTextCompare) = 1) then printer_manufacturer = "Ricoh" end if
			if (instr(1, printer_model, "Samsung", vbTextCompare) = 1) then printer_manufacturer = "Samsung" end if
			if (instr(1, printer_model, "Sharp", vbTextCompare) = 1) then printer_manufacturer = "Sharp" end if
			if (instr(1, printer_model, "SP 3", vbTextCompare) = 1) then printer_manufacturer = "Ricoh" end if
			if (instr(1, printer_model, "Tektronix", vbTextCompare) = 1) then printer_manufacturer = "Tektronix" end if
			if (instr(1, printer_model, "Toshiba", vbTextCompare) = 1) then printer_manufacturer = "Toshiba" end if
			if (instr(1, printer_model, "Xerox", vbTextCompare) = 1) then printer_manufacturer = "Xerox" end if
			if (instr(1, printer_model, "ZDesigner", vbTextCompare) = 1) then printer_manufacturer = "Zebra" end if
			if (instr(1, printer_model, "Zebra", vbTextCompare) = 1) then printer_manufacturer = "Zebra" end if

			description = ""
			on error resume next
				description = objItem.Comment
			On Error Goto 0

			MarkingTechnology = 2
			printer_type = "Unknown"
			on error resume next
				MarkingTechnology = int(objItem.MarkingTechnology)
			On Error Goto 0
			if MarkingTechnology = 1 then printer_type = "Other" end if
			if MarkingTechnology = 2 then printer_type = "Unknown" end if
			if MarkingTechnology = 3 then printer_type = "Electrophotographic LED" end if
			if MarkingTechnology = 4 then printer_type = "Electrophotographic Laser" end if
			if MarkingTechnology = 5 then printer_type = "Electrophotographic Other" end if
			if MarkingTechnology = 6 then printer_type = "Impact Moving Head Dot Matrix 9pin" end if
			if MarkingTechnology = 7 then printer_type = "Impact Moving Head Dot Matrix 24pin" end if
			if MarkingTechnology = 8 then printer_type = "Impact Moving Head Dot Matrix Other" end if
			if MarkingTechnology = 9 then printer_type = "Impact Moving Head Fully Formed" end if
			if MarkingTechnology = 10 then printer_type = "Impact Band" end if
			if MarkingTechnology = 11 then printer_type = "Impact Other" end if
			if MarkingTechnology = 12 then printer_type = "Inkjet Aqueous" end if
			if MarkingTechnology = 13 then printer_type = "Inkjet Solid" end if
			if MarkingTechnology = 14 then printer_type = "Inkjet Other" end if
			if MarkingTechnology = 15 then printer_type = "Pen" end if
			if MarkingTechnology = 16 then printer_type = "Thermal Transfer" end if
			if MarkingTechnology = 17 then printer_type = "Thermal Sensitive" end if
			if MarkingTechnology = 18 then printer_type = "Thermal Diffusion" end if
			if MarkingTechnology = 19 then printer_type = "Thermal Other" end if
			if MarkingTechnology = 20 then printer_type = "Electroerosion" end if
			if MarkingTechnology = 21 then printer_type = "Electrostatic" end if
			if MarkingTechnology = 22 then printer_type = "Photographic Microfiche" end if
			if MarkingTechnology = 23 then printer_type = "Photographic Imagesetter" end if
			if MarkingTechnology = 24 then printer_type = "Photographic Other" end if
			if MarkingTechnology = 25 then printer_type = "Ion Deposition" end if
			if MarkingTechnology = 26 then printer_type = "eBeam" end if
			if MarkingTechnology = 27 then printer_type = "Typesetter" end if


			status = int(objItem.ExtendedPrinterStatus)
			if status = 1 then printer_status = "Other" end if
			if status = 2 then printer_status = "Unknown" end if
			if status = 3 then printer_status = "Idle" end if
			if status = 4 then printer_status = "Printing" end if
			if status = 5 then printer_status = "Warming Up" end if
			if status = 6 then printer_status = "Stopped Printing" end if
			if status = 7 then printer_status = "Offline" end if
			if status = 8 then printer_status = "Paused" end if
			if status = 9 then printer_status = "Error" end if
			if status = 10 then printer_status = "Busy" end if
			if status = 11 then printer_status = "Not Available" end if
			if status = 12 then printer_status = "Waiting" end if
			if status = 13 then printer_status = "Processing" end if
			if status = 14 then printer_status = "Initialization" end if
			if status = 15 then printer_status = "Power Save" end if
			if status = 16 then printer_status = "Pending Deletion" end if
			if status = 17 then printer_status = "I/O Active" end if
			if status = 18 then printer_status = "Manual Feed" end if


			item = item & "		<item>" & vbcrlf
			on error resume next
			item = item & "			<manufacturer>" & escape_xml(printer_manufacturer) & "</manufacturer>" & vbcrlf
			item = item & "			<model>" & escape_xml(printer_model) & "</model>" & vbcrlf
			item = item & "			<description>" & escape_xml(description) & "</description>" & vbcrlf
			item = item & "			<device>" & escape_xml(objItem.DeviceID) & "</device>" & vbcrlf
			item = item & "			<driver>" & escape_xml(objItem.DriverName) & "</driver>" & vbcrlf
			item = item & "			<name>" & escape_xml(objItem.Name) & "</name>" & vbcrlf
			item = item & "			<port_name>" & escape_xml(objItem.PortName) & "</port_name>" & vbcrlf
			item = item & "			<shared>" & escape_xml(objItem.Shared) & "</shared>" & vbcrlf
			item = item & "			<shared_name>" & escape_xml(objItem.ShareName) & "</shared_name>" & vbcrlf
			item = item & "			<location>" & escape_xml(objItem.Location) & "</location>" & vbcrlf
			item = item & "			<color>" & escape_xml(printer_color) & "</color>" & vbcrlf
			item = item & "			<duplex>" & escape_xml(printer_duplex) & "</duplex>" & vbcrlf
			item = item & "			<type>" & escape_xml(printer_type) & "</type>" & vbcrlf
			item = item & "			<status>" & escape_xml(printer_status) & "</status>" & vbcrlf
			item = item & "			<capabilities>" & escape_xml(capabilities) & "</capabilities>" & vbcrlf
			On Error Goto 0
			item = item & "		</item>" & vbcrlf

		end if
	next
	if item > "" then
	result.WriteText "	<print_queue>" & vbcrlf
	result.WriteText item
	result.WriteText "	</print_queue>" & vbcrlf
	end if
	end if
end if


' only run this if we are auditing on the local machine
' only run this for build 7600 and newer (Win7 and Win 2008 r2 or later)
' TODO - the database field for task name is only 100 characters long
'        this will need extending to avoid creating false positive alerts
'        because some built in Windows tasks have LONG names
'        Fix the truncated name below and expand the database attribute to 250 characters
if (strcomputer = "." and audit_location = "local" and CInt(windows_build_number) > 7599) then
	if debugging > "0" and strcomputer = "." then wscript.echo "scheduled tasks" end if
	item = ""
	strCommand = "schtasks.exe /query /v /fo csv"
	On Error Resume Next
	set objExecObject = objShell.Exec(strCommand)
	On Error GoTo 0
	if IsObject(objExecObject) then
		do While Not objExecObject.StdOut.AtEndOfStream
			strResults = objExecObject.StdOut.ReadAll()
		Loop
		MyArray = Split(strResults, vbcrlf)
		for each line in MyArray
			sTask = CSVParser(line)
			if UCase(sTask(0)) = UCase(system_hostname) then
				item = item & "      <item>" & vbcrlf
				item = item & "         <name><![CDATA[" & mid(sTask(1), 1, 100) & "]]></name>" & vbcrlf
				item = item & "         <next_run><![CDATA[" & sTask(2) & "]]></next_run>" & vbcrlf
				item = item & "         <status><![CDATA[" & sTask(3) & "]]></status>" & vbcrlf
				item = item & "         <last_run><![CDATA[" & sTask(5) & "]]></last_run>" & vbcrlf
				item = item & "         <last_result><![CDATA[" & sTask(6) & "]]></last_result>" & vbcrlf
				item = item & "         <creator><![CDATA[" & sTask(7) & "]]></creator>" & vbcrlf
				item = item & "         <schedule></schedule>" & vbcrlf
				item = item & "         <task><![CDATA[" & sTask(8) & "]]></task>" & vbcrlf
				item = item & "         <state><![CDATA[" & sTask(11) & "]]></state>" & vbcrlf
				item = item & "         <user><![CDATA[" & sTask(14) & "]]></user>" & vbcrlf
				item = item & "      </item>" & vbcrlf
			end if
		next
	end if
	if item > "" then
	   result.WriteText "   <task>" & vbcrlf
	   result.WriteText item
	   result.WriteText "   </task>" & vbcrlf
	end if
end if

if debugging > "0" then wscript.echo "environment variables" end if
item = ""
set colItems = objWMIService.ExecQuery("Select * from Win32_Environment where SystemVariable = True and username = '<SYSTEM>' ",,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_Environment)" : audit_wmi_fails = audit_wmi_fails & "Win32_Environment " : end if
for each objItem in colItems
	item = item & "		<item>" & vbcrlf
	item = item & "			<program>environment</program>" & vbcrlf
	item = item & "			<name>" & escape_xml(objItem.Name) & "</name>" & vbcrlf
	item = item & "			<value>" & escape_xml(objItem.VariableValue) & "</value>" & vbcrlf
	item = item & "		</item>" & vbcrlf
next
if item > "" then
	result.WriteText "	<variable>" & vbcrlf
	result.WriteText item
	result.WriteText "	</variable>" & vbcrlf
end if


if debugging > "0" then wscript.echo "logs" end if
item = ""
set colItems = objWMIService.ExecQuery("Select * from Win32_NTEventLogFile",,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_NTEventLogFile)" : audit_wmi_fails = audit_wmi_fails & "Win32_NTEventLogFile " : end if
for each objItem in colItems
	OverWritePolicy = objItem.OverWritePolicy
	select case  OverWritePolicy
	case "OutDated"    OverWritePolicy = "OutDated (after " & objItem.OverwriteOutDated & " days)"
	case "WhenNeeded"  OverWritePolicy = "As Needed"
	end select
	item = item & "		<item>" & vbcrlf
	item = item & "			<name>"	& escape_xml(objItem.LogFileName) & "</name>" & vbcrlf
	item = item & "			<file_name>" & escape_xml(objItem.Name) & "</file_name>" & vbcrlf
	item = item & "			<file_size>" & escape_xml(objItem.FileSize/1024) & "</file_size>" & vbcrlf
	item = item & "			<max_file_size>" & escape_xml(objItem.MaxFileSize/1024) & "</max_file_size>" & vbcrlf
	item = item & "			<overwrite>" & escape_xml(OverWritePolicy) & "</overwrite>" & vbcrlf
	item = item & "		</item>" & vbcrlf
next
if item > "" then
	result.WriteText "	<log>" & vbcrlf
	result.WriteText item
	result.WriteText "	</log>" & vbcrlf
end if



if debugging > "0" then wscript.echo "pagefile" end if
item = ""
set colItems = objWMIService.ExecQuery("Select * from Win32_PageFile",,32)
error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_PageFile)" : audit_wmi_fails = audit_wmi_fails & "Win32_PageFile " : end if
for each objItem in colItems
	item = item & "		<item>" & vbcrlf
	item = item & "			<name>" & escape_xml(objItem.Name) & "</name>" & vbcrlf
	item = item & "			<initial_size>" & escape_xml(objItem.InitialSize) & "</initial_size>" & vbcrlf
	item = item & "			<size>" & escape_xml(objItem.FileSize) & "</size>" & vbcrlf
	item = item & "			<max_size>" & escape_xml(objItem.MaximumSize) & "</max_size>" & vbcrlf
	item = item & "		</item>" & vbcrlf
next
if item > "" then
	result.WriteText "	<pagefile>" & vbcrlf
	result.WriteText item
	result.WriteText "	</pagefile>" & vbcrlf
end if



if debugging > "0" then wscript.echo "local users info" end if
if ((windows_domain_role <> "Backup Domain Controller") and (windows_domain_role <> "Primary Domain Controller")) then
	result.WriteText "	<user>" & vbcrlf
	set colItems = objWMIService.ExecQuery ("Select * from Win32_UserAccount Where Domain = '" & system_hostname & "'",,32)
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_UserAccount)" : audit_wmi_fails = audit_wmi_fails & "Win32_UserAccount " : end if
	if (not isnull(colItems)) then
	for each objItem in colItems
	result.WriteText "		<item>" & vbcrlf
	result.WriteText "			<name>" & escape_xml(objItem.Name) & "</name>" & vbcrlf
	result.WriteText "			<caption>" & escape_xml(objItem.Caption) & "</caption>" & vbcrlf
	result.WriteText "			<sid>" & escape_xml(objItem.SID) & "</sid>" & vbcrlf
	result.WriteText "			<domain>" & escape_xml(objItem.Domain) & "</domain>" & vbcrlf
	result.WriteText "			<disabled>" & escape_xml(objItem.Disabled) & "</disabled>" & vbcrlf
	result.WriteText "			<full_name>" & escape_xml(objItem.FullName) & "</full_name>" & vbcrlf
	result.WriteText "			<password_changeable>" & escape_xml(objItem.PasswordChangeable) & "</password_changeable>" & vbcrlf
	result.WriteText "			<password_expires>" & escape_xml(objItem.PasswordExpires) & "</password_expires>" & vbcrlf
	result.WriteText "			<password_required>" & escape_xml(objItem.PasswordRequired) & "</password_required>" & vbcrlf
	result.WriteText "			<status>" & escape_xml(objItem.Status) & "</status>" & vbcrlf
	result.WriteText "			<type>local</type>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf
	next
	end if
	' The LocalSystem account
	result.WriteText "		<item>" & vbcrlf
	result.WriteText "			<name>LocalSystem</name>" & vbcrlf
	result.WriteText "			<caption>" & escape_xml(system_hostname) & "\LocalSystem</caption>" & vbcrlf
	result.WriteText "			<sid></sid>" & vbcrlf
	result.WriteText "			<domain>" & ucase (escape_xml(system_hostname)) & "</domain>" & vbcrlf
	result.WriteText "			<disabled>False</disabled>" & vbcrlf
	result.WriteText "			<full_name>LocalSystem</full_name>" & vbcrlf
	result.WriteText "			<password_changeable>False</password_changeable>" & vbcrlf
	result.WriteText "			<password_expires>False</password_expires>" & vbcrlf
	result.WriteText "			<password_required>False</password_required>" & vbcrlf
	result.WriteText "			<status>OK</status>" & vbcrlf
	result.WriteText "			<type>local</type>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf

	' The LocalService account
	result.WriteText "		<item>" & vbcrlf
	result.WriteText "			<name>NT AUTHORITY\LocalService</name>" & vbcrlf
	result.WriteText "			<caption>NT AUTHORITY\LocalService</caption>" & vbcrlf
	result.WriteText "			<sid></sid>" & vbcrlf
	result.WriteText "			<domain>" & ucase (escape_xml(system_hostname)) & "</domain>" & vbcrlf
	result.WriteText "			<disabled>False</disabled>" & vbcrlf
	result.WriteText "			<full_name>LocalSystem</full_name>" & vbcrlf
	result.WriteText "			<password_changeable>False</password_changeable>" & vbcrlf
	result.WriteText "			<password_expires>False</password_expires>" & vbcrlf
	result.WriteText "			<password_required>False</password_required>" & vbcrlf
	result.WriteText "			<status>OK</status>" & vbcrlf
	result.WriteText "			<type>local</type>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf

	' The NetworkService account
	result.WriteText "		<item>" & vbcrlf
	result.WriteText "			<name>NT AUTHORITY\NetworkService</name>" & vbcrlf
	result.WriteText "			<caption>NT AUTHORITY\NetworkService</caption>" & vbcrlf
	result.WriteText "			<sid></sid>" & vbcrlf
	result.WriteText "			<domain>" & ucase (escape_xml(system_hostname)) & "</domain>" & vbcrlf
	result.WriteText "			<disabled>False</disabled>" & vbcrlf
	result.WriteText "			<full_name>LocalSystem</full_name>" & vbcrlf
	result.WriteText "			<password_changeable>False</password_changeable>" & vbcrlf
	result.WriteText "			<password_expires>False</password_expires>" & vbcrlf
	result.WriteText "			<password_required>False</password_required>" & vbcrlf
	result.WriteText "			<status>OK</status>" & vbcrlf
	result.WriteText "			<type>local</type>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf
	result.WriteText "	</user>" & vbcrlf
end if


if (windows_domain_role <> "Backup Domain Controller" and windows_domain_role <> "Primary Domain Controller") then
	result.WriteText "	<user_group>" & vbcrlf
	if debugging > "0" then wscript.echo "local groups info" end if
	if struser = "" then
		dim group_domain
		dim member_domain
		For Each group In GetObject("WinNT://" & system_hostname)
			If group.Class = "Group" Then
				group_members = ""
				result.WriteText "		<item>" & vbcrlf
				result.WriteText "			<name>" & escape_xml(group.Name) & "</name>" & vbcrlf
				result.WriteText "			<description>" & escape_xml(group.Description) & "</description>" & vbcrlf
				result.WriteText "			<sid>" & escape_xml(group.GUID) & "</sid>" & vbcrlf
				For Each member In group.members
					group_domain = split(member.ADSPath, "/")
					member_domain = group_domain(ubound(group_domain)-1)
					group_members = group_members & member.name & "@" & member_domain & ", "
				Next
				'group_members = left(group_members, (len(group_members)-2))
				result.WriteText "			<members>" & escape_xml(group_members) & "</members>" & vbcrlf
				result.WriteText "		</item>" & vbcrlf
			End If
		Next
	end if

	if struser > "" then
		set colItems = objWMIService.ExecQuery("Select * from Win32_Group where Domain = '" & system_hostname & "'",,32)
		error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_Group)" : audit_wmi_fails = audit_wmi_fails & "Win32_Group " : end if
		for Each objItem in colItems
			users = ""
			set objDSO = GetObject("WinNT:")
			set colGroups = objDSO.OpenDSObject("WinNT://" & system_hostname & "", struser, strpass, ADS_USE_ENCRYPTION OR ADS_SECURE_AUTHENTICATION)
			colGroups.Filter = Array("group")
			group_members = ""
			for Each objGroup In colGroups
				if objGroup.Name = objItem.Name then
					for each objUser in objGroup.Members
						group_domain = split(objUser.ADSPath, "/")
						member_domain = group_domain(ubound(group_domain)-1)
						group_members = group_members & objUser.Name & "@" & member_domain & ", "
					next
				end if
			next
			result.WriteText "		<item>" & vbcrlf
			result.WriteText "			<name>" & escape_xml(objItem.Name) & "</name>" & vbcrlf
			result.WriteText "			<description>" & escape_xml(objItem.Description) & "</description>" & vbcrlf
			result.WriteText "			<sid>" & escape_xml(objItem.SID) & "</sid>" & vbcrlf
			result.WriteText "			<members>" & escape_xml(group_members) & "</members>" & vbcrlf
			result.WriteText "		</item>" & vbcrlf
			group_members = ""
		next
	end if
	result.WriteText "	</user_group>" & vbcrlf
end if


if (skip_software = "n") then
	result.WriteText "	<software>" & vbcrlf

	if debugging > "0" then wscript.echo "Codec info" end if
	set colItems = objWMIService.ExecQuery("Select * FROM Win32_CodecFile", , 48)
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_CodecFile)" : audit_wmi_fails = audit_wmi_fails & "Win32_CodecFile " : end if
	if (not isnull(colItems)) then
		for each objItem In colItems
			if objItem.Manufacturer <> "Microsoft Corporation" then
				result.WriteText "		<item>" & vbcrlf
				result.WriteText "			<name>" & escape_xml(objItem.Group) & " - " & objItem.Filename & "</name>" & vbcrlf
				result.WriteText "			<version>" & escape_xml(objItem.Version) & "</version>" & vbcrlf
				result.WriteText "			<location>" & escape_xml(objItem.Caption) & "</location>" & vbcrlf
				result.WriteText "			<install_date>" & escape_xml(objItem.InstallDate) & "</install_date>" & vbcrlf
				result.WriteText "			<publisher>" & escape_xml(objItem.Manufacturer) & "</publisher>" & vbcrlf
				result.WriteText "			<type>codec</type>" & vbcrlf
				result.WriteText "		</item>" & vbcrlf
			end if
		next
	end if



	if debugging > "0" then wscript.echo "ODBC Driver info" end if
	strKeyPath = "SOFTWARE\ODBC\ODBCINST.INI\ODBC Drivers"
	oReg.EnumValues HKEY_LOCAL_MACHINE, strKeyPath, arrValueNames, arrValueTypes
	if (not isnull(arrValueNames)) then
	for i = 0 to UBound(arrValueNames)
	strValueName = arrValueNames(i)
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,strValueName,strValue
	if strValue = "Installed" then
	oReg.GetStringValue HKEY_LOCAL_MACHINE,"SOFTWARE\ODBC\ODBCINST.INI\" & strValueName,"DriverODBCVer",driver_version
	oReg.GetStringValue HKEY_LOCAL_MACHINE,"SOFTWARE\ODBC\ODBCINST.INI\" & strValueName,"Driver",file_name
	result.WriteText "		<item>" & vbcrlf
	result.WriteText "			<name>" & escape_xml(strValueName) & "</name>" & vbcrlf
	result.WriteText "			<version>" & escape_xml(driver_version) & "</version>" & vbcrlf
	result.WriteText "			<location>" & escape_xml(file_name) & "</location>" & vbcrlf
	result.WriteText "			<type>odbc driver</type>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf
	end if
	next
	end if


	if debugging > "0" then wscript.echo "ODBC Driver info 64bit" end if
	strKeyPath = "SOFTWARE\Wow6432Node\ODBC\ODBCINST.INI\ODBC Drivers"
	oReg.EnumValues HKEY_LOCAL_MACHINE, strKeyPath, arrValueNames, arrValueTypes

	if (isarray(arrValueNames)) then
	for i = 0 to UBound(arrValueNames)
	strValueName = arrValueNames(i)
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,strValueName,strValue
	if strValue = "Installed" then
	oReg.GetStringValue HKEY_LOCAL_MACHINE,"SOFTWARE\Wow6432Node\ODBC\ODBCINST.INI\" & strValueName,"DriverODBCVer",driver_version
	oReg.GetStringValue HKEY_LOCAL_MACHINE,"SOFTWARE\Wow6432Node\ODBC\ODBCINST.INI\" & strValueName,"Driver",file_name
	result.WriteText "		<item>" & vbcrlf
	result.WriteText "			<name>" & escape_xml(strValueName) & "</name>" & vbcrlf
	result.WriteText "			<version>" & escape_xml(driver_version) & "</version>" & vbcrlf
	result.WriteText "			<location>" & escape_xml(file_name) & "</location>" & vbcrlf
	result.WriteText "			<type>odbc driver</type>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf
	end if
	next
	end if


	if debugging > "0" then wscript.echo "MDAC info" end if
	strKeyPath = "SOFTWARE\Microsoft\DataAccess"
	strValueName = "Version"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,strValueName,dac_version
	if (not isnull(dac_version)) then
	if SystemBuildNumber <> "6000" then
	 display_name = "MDAC"
	else
	 display_name = "Windows DAC"
	end if
	result.WriteText "		<item>" & vbcrlf
	result.WriteText "			<name>" & escape_xml(display_name) & "</name>" & vbcrlf
	result.WriteText "			<version>" & escape_xml(dac_version) & "</version>" & vbcrlf
	result.WriteText "			<install_date>" & escape_xml(system_pc_date_os_installation) & "</install_date>" & vbcrlf
	result.WriteText "			<publisher>Microsoft Corporation</publisher>" & vbcrlf
	result.WriteText "			<url>http://msdn2.microsoft.com/en-us/data/default.aspx</url>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf
	end if



	if debugging > "0" then wscript.echo "DirectX info" end if
	strKeyPath = "SOFTWARE\Microsoft\DirectX"
	strValueName = "Version"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,strValueName,dx_version
	if (isnull(dx_version)) then dx_version = "" end if
	dx_name = ""
	if system_os_version > "6" then dx_version = system_os_version end if
	dx_version = replace(dx_version, "6.0.", "6.00.")
	dx_version = replace(dx_version, "6.1.", "6.01.")
	dx_version = replace(dx_version, "6.2.", "6.02.")
	if dx_version = "4.07.00.0700" then dx_name = "DirectX 7" end if
	if dx_version = "4.08.01.0810" then dx_name = "DirectX 8.1" end if
	if dx_version = "4.08.01.0881" then dx_name = "DirectX 8.1" end if
	if dx_version = "4.08.01.0901" then dx_name = "DirectX 8.1a" end if
	if dx_version = "4.08.01.0901" then dx_name = "DirectX 8.1b" end if
	if dx_version = "4.08.02.0134" then dx_name = "DirectX 8.2" end if
	if dx_version = "4.09.00.0900" then dx_name = "DirectX 9" end if
	if dx_version = "4.09.00.0901" then dx_name = "DirectX 9a" end if
	if dx_version = "4.09.00.0902" then dx_name = "DirectX 9b" end if
	if dx_version = "4.09.00.0903" then dx_name = "DirectX 9c" end if
	if dx_version = "4.09.00.0904" then dx_name = "DirectX 9c" end if
	if dx_version = "6.00.6000" then dx_name = "DirectX 10" end if
	if dx_version = "6.00.6001" then dx_name = "DirectX 10.1" end if
	if dx_version = "6.00.6002" then dx_name = "DirectX 10.1" end if
	if dx_version = "6.01.7600" then dx_name = "DirectX 11" end if
	if dx_version = "6.01.7601" then dx_name = "DirectX 11" end if
	if dx_version = "6.00.6002" then dx_name = "DirectX 11" end if
	if dx_version = "6.02.8250" then dx_name = "DirectX 11.1" end if
	if dx_name = "" then dx_name = "DirectX (unknown version)" end if
	result.WriteText "		<item>" & vbcrlf
	result.WriteText "			<name>" & escape_xml(dx_name) & "</name>" & vbcrlf
	result.WriteText "			<version>" & escape_xml(dx_version) & "</version>" & vbcrlf
	result.WriteText "			<install_date>" & escape_xml(system_pc_date_os_installation) & "</install_date>" & vbcrlf
	result.WriteText "			<publisher>Microsoft Corporation</publisher>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf



	if debugging > "0" then wscript.echo "Windows Media Player info" end if
	strKeyPath = "SOFTWARE\Microsoft\MediaPlayer\PlayerUpgrade"
	strValueName = "PlayerVersion"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,strValueName,wmp_version
	if (not isnull(wmp_version)) then
	result.WriteText "		<item>" & vbcrlf
	result.WriteText "			<name>Windows Media Player</name>" & vbcrlf
	result.WriteText "			<version>" & escape_xml(wmp_version) & "</version>" & vbcrlf
	result.WriteText "			<install_date>" & escape_xml(system_pc_date_os_installation) & "</install_date>" & vbcrlf
	result.WriteText "			<publisher>Microsoft Corporation</publisher>" & vbcrlf
	result.WriteText "			<url>http://windows.microsoft.com/en-us/windows/windows-media-player</url>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf
	end if


	if debugging > "0" then wscript.echo "Internet Explorer info" end if
	strKeyPath = "SOFTWARE\Microsoft\Internet Explorer"
	strValueName = "Version"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,strValueName,ie_version
	if (not isnull(ie_version)) then
	result.WriteText "		<item>" & vbcrlf
	result.WriteText "			<name>Internet Explorer</name>" & vbcrlf
	result.WriteText "			<version>" & escape_xml(ie_version) & "</version>" & vbcrlf
	result.WriteText "			<install_date>" & escape_xml(system_pc_date_os_installation) & "</install_date>" & vbcrlf
	result.WriteText "			<publisher>Microsoft Corporation</publisher>" & vbcrlf
	result.WriteText "			<url>http://windows.microsoft.com/en-us/internet-explorer/internet-explorer-help</url>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf
	end if


	if debugging > "0" then wscript.echo "Outlook Express info" end if
	strKeyPath = "SOFTWARE\Microsoft\Outlook Express\Version info"
	strValueName = "Current"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,strValueName,oe_version
	if (isnull(oe_version)) then
	set colFiles = objWMIService.ExecQuery("Select * from CIM_Datafile Where Name = 'c:\\program files\\Outlook Express\\msimn.exe'",,32)
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (CIM_Datafile)" : audit_wmi_fails = audit_wmi_fails & "CIM_Datafile " : end if
	for each objFile in colFiles
	result.WriteText "		<item>" & vbcrlf
	result.WriteText "			<name>Outlook Express</name>" & vbcrlf
	result.WriteText "			<version>" & escape_xml(objFile.Version) & "</version>" & vbcrlf
	result.WriteText "			<install_date>" & escape_xml(system_pc_date_os_installation) & "</install_date>" & vbcrlf
	result.WriteText "			<publisher>Microsoft Corporation</publisher>" & vbcrlf
	result.WriteText "			<url>http://windows.microsoft.com/en-us/windows/outlook-express</url>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf
	next
	else
	oe_version = replace(oe_version, ",", ".")
	result.WriteText "		<item>" & vbcrlf
	result.WriteText "			<name>Outlook Express</name>" & vbcrlf
	result.WriteText "			<version>" & escape_xml(oe_version) & "</version>" & vbcrlf
	result.WriteText "			<install_date>" & escape_xml(system_pc_date_os_installation) & "</install_date>" & vbcrlf
	result.WriteText "			<publisher>Microsoft Corporation</publisher>" & vbcrlf
	result.WriteText "			<url>http://windows.microsoft.com/en-us/windows/outlook-express</url>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf
	end if




	if debugging > "0" then wscript.echo "Software info" end if



	result.WriteText "		<!-- start of normal software -->" & vbcrlf
	' note that I have a system that fails when the below is attempted.
	on error resume next
	Set colItems = objWMIService.ExecQuery("Select Message, User, TimeGenerated FROM Win32_NTLogEvent where logfile = 'Application' and eventcode = '11707'",,0)
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_NTLogEvent)" : audit_wmi_fails = audit_wmi_fails & "Win32_NTLogEvent " : end if
	On Error Goto 0

	strKeyPath = "SOFTWARE\Microsoft\Windows\CurrentVersion\Uninstall"
	oReg.EnumKey HKEY_LOCAL_MACHINE,strKeyPath,arrSubKeys
	if (not Isnull(arrSubKeys)) then
	for each subkey In arrSubKeys
	newpath = strKeyPath & "\" & subkey
	newkey = "DisplayName"
	on error resume next
	strValue = ""
	oReg.GetStringValue HKEY_LOCAL_MACHINE, newpath, newkey, strValue
	on error goto 0
	if strValue <> "" then
	version = ""
	uninstall_string = ""
	install_date = ""
	publisher = ""
	install_source = ""
	install_location = ""
	system_component = ""
	package_name = strValue

	newkey = "DisplayVersion"
	oReg.GetStringValue HKEY_LOCAL_MACHINE, newpath, newkey, strValue
	package_version = strValue
	if (isnull(package_version)) then package_version = "" end if

	newkey = "UninstallString"
	oReg.GetStringValue HKEY_LOCAL_MACHINE, newpath, newkey, strValue
	package_uninstall = strValue
	if (isnull(package_uninstall)) then package_uninstall = "" end if

	newkey = "InstallDate"
	oReg.GetStringValue HKEY_LOCAL_MACHINE, newpath, newkey, strValue
	package_install_date = strValue
	if (isnull(package_install_date)) then package_install_date = "" end if

	newkey = "Publisher"
	oReg.GetStringValue HKEY_LOCAL_MACHINE, newpath, newkey, strValue
	package_publisher = strValue
	if (isnull(package_publisher)) then package_publisher = "" end if

	newkey = "InstallSource"
	oReg.GetStringValue HKEY_LOCAL_MACHINE, newpath, newkey, strValue
	package_install_source = strValue
	if (isnull(package_install_source)) then package_install_source = "" end if

	newkey = "InstallLocation"
	oReg.GetStringValue HKEY_LOCAL_MACHINE, newpath, newkey, strValue
	package_location = strValue
	if (isnull(package_location)) then package_location = "" end if

	newkey = "SystemComponent"
	oReg.GetDWORDValue HKEY_LOCAL_MACHINE, newpath, newkey, strValue
	package_system_component = strValue
	if (isnull(package_system_component)) then package_system_component = "" end if

	newkey = "URLInfoAbout"
	oReg.GetStringValue HKEY_LOCAL_MACHINE, newpath, newkey, strValue
	package_url = strValue
	if (isnull(package_url)) then package_url = "" end if

	newkey = "Comments"
	oReg.GetStringValue HKEY_LOCAL_MACHINE, newpath, newkey, strValue
	package_comments = strValue
	if (isnull(package_comments)) then package_comments = " " end if

	package_installed_by = ""
	package_installed_on = ""

	on error resume next
	for each objItem in colItems
	if objItem.Message <> "" then
	colonPos = InStr(objItem.Message,":")
	dashPos = InStr(objItem.Message,"--")
	message_retrieved = trim(Mid(objItem.Message,colonPos+1,dashPos-colonPos-1))
	if (not isNull(message_retrieved)) then
	if (InStr(message_retrieved, package_name) = 1) then
	package_installed_by = objItem.User
	if details_to_lower = "y" then package_installed_by = lcase(package_installed_by) end if
	package_installed_on = WMIDateStringToDate(objItem.TimeGenerated)
	package_installed_on = datepart("yyyy", package_installed_on) & "-" & datepart("m", package_installed_on) & "-" & datepart("d", package_installed_on) & " " & datepart("h", package_installed_on) & ":" & datepart("n", package_installed_on) & ":" & datepart("s", package_installed_on)
	exit for
	else
	package_installed_by = ""
	package_installed_on = ""
	end if
	end if
	end if
	next
	on error goto 0

	result.WriteText "		<item>" & vbcrlf
	result.WriteText "			<name>" & escape_xml(package_name) & "</name>" & vbcrlf
	result.WriteText "			<version>" & escape_xml(package_version) & "</version>" & vbcrlf
	result.WriteText "			<location>" & escape_xml(package_location) & "</location>" & vbcrlf
	result.WriteText "			<install_date>" & escape_xml(package_install_date) & "</install_date>" & vbcrlf
	result.WriteText "			<publisher>" & escape_xml(package_publisher) & "</publisher>" & vbcrlf
	result.WriteText "			<install_source>" & escape_xml(package_install_source) & "</install_source>" & vbcrlf
	result.WriteText "			<system_component>" & escape_xml(package_system_component) & "</system_component>" & vbcrlf
	result.WriteText "			<url>" & escape_xml(package_url) & "</url>" & vbcrlf
	result.WriteText "			<installed_by>" & escape_xml(package_installed_by) & "</installed_by>" & vbcrlf
	result.WriteText "			<installed_on>" & escape_xml(package_installed_on) & "</installed_on>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf
	end if
	next
	end if
	result.WriteText "		<!-- end of normal -->" & vbcrlf




	' need to test if this is a Win64 machine
	strKeyPath = "SOFTWARE"
	reg_node = "n"
	oReg.EnumKey HKEY_LOCAL_MACHINE, strKeyPath, arrSubKeys
	if (not isnull(arrSubKeys)) then
	For Each subkey In arrSubKeys
	if subkey = "Wow6432Node" then
	reg_node = "y"
	end if
	next
	end if


	if (win32_product = "y") then
	if (address_width = "64" and reg_node = "y") then
	if debugging > "0" then wscript.echo "Software for 64bit" end if
	result.WriteText "		<!-- start of 64 #1 -->" & vbcrlf
	' we enumerate this WMI, that we would not otherwise

	on error resume next
	set colItems2 = objWMIService.ExecQuery("Select * from Win32_Product",,32)
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_Product)" : audit_wmi_fails = audit_wmi_fails & "Win32_Product " : end if
	on error goto 0

	if (error_returned <> 0) then
	' we had an error - skip the next part
	else
	on error resume next
	for each objItem2 in colItems2
	error_returned = Err.Number
	error_message = Err.Message

	package_name = objItem2.name
	package_installed_by = ""
	package_installed_on = ""

	if (system_os_family = "Windows 2008" or system_os_family = "Windows 7" or system_os_family = "Windows Vista" or system_os_family = "Windows 8" or system_os_family = "Windows 2012") then
	software_url = objItem2.URLUpdateInfo
	software_install_source = objItem2.InstallSource
	else
	software_url = ""
	software_install_source = ""
	end if

	for each objItem in colItems
	if objItem.Message <> "" then
	colonPos = InStr(objItem.Message,":")
	dashPos = InStr(objItem.Message,"--")
	message_retrieved = trim(Mid(objItem.Message,colonPos+1,dashPos-colonPos-1))
	if (not isNull(message_retrieved)) then
	if (InStr(message_retrieved, package_name) = 1) then
	package_installed_by = objItem.User
	if details_to_lower = "y" then package_installed_by = lcase(package_installed_by) end if
	package_installed_on = WMIDateStringToDate(objItem.TimeGenerated)
	package_installed_on = datepart("yyyy", package_installed_on) & "-" & datepart("m", package_installed_on) & "-" & datepart("d", package_installed_on) & " " & datepart("h", package_installed_on) & ":" & datepart("n", package_installed_on) & ":" & datepart("s", package_installed_on)
	exit for
	else
	package_installed_by = ""
	package_installed_on = ""
	end if
	end if
	end if
	next

	result.WriteText "		<item>" & vbcrlf
	result.WriteText "			<name>" & escape_xml(package_name) & "</name>" & vbcrlf
	result.WriteText "			<version>" & escape_xml(objItem2.version) & "</version>" & vbcrlf
	result.WriteText "			<location>" & escape_xml(objItem2.InstallLocation) & "</location>" & vbcrlf
	result.WriteText "			<install_date>" & escape_xml(objItem2.InstallDate) & "</install_date>" & vbcrlf
	result.WriteText "			<publisher>" & escape_xml(objItem2.Vendor) & "</publisher>" & vbcrlf
	result.WriteText "			<install_source>" & escape_xml(software_install_source) & "</install_source>" & vbcrlf
	result.WriteText "			<url>" & escape_xml(software_url) & "</url>" & vbcrlf
	result.WriteText "			<installed_by>" & escape_xml(package_installed_by) & "</installed_by>" & vbcrlf
	result.WriteText "			<installed_on>" & escape_xml(package_installed_on) & "</installed_on>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf
	next
	on error goto 0
	end if
	end if
	result.WriteText "		<!-- end of 64 #1 -->" & vbcrlf
	end if


	strKeyPath = "SOFTWARE\Wow6432Node\Microsoft\Windows\CurrentVersion\Uninstall"
	oReg.EnumKey HKEY_LOCAL_MACHINE,strKeyPath,arrSubKeys
	if (not isnull(arrSubKeys)) then
	reg_node = "y"
	else
	reg_node = "n"
	end if





if (reg_node = "y") then
	if debugging > "0" then wscript.echo "Software for 64bit (registry)" end if
	result.WriteText "		<!-- start of 64 #2 -->" & vbcrlf
	' do it all over again for 32bit software installed on a 64bit machine
	' HKEY_LOCAL_MACHINE\SOFTWARE\Wow6432Node\Microsoft\Windows\CurrentVersion\Uninstall
	on error resume next
	Set colItems = objWMIService.ExecQuery("Select Message, User, TimeGenerated FROM Win32_NTLogEvent where logfile = 'Application' and eventcode = '11707'",,0)
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_NTLogEvent)" : audit_wmi_fails = audit_wmi_fails & "Win32_NTLogEvent " : end if
	On Error Goto 0
	if (not isnull(arrSubKeys)) then
	for each subkey In arrSubKeys
	newpath = strKeyPath & "\" & subkey
	newkey = "DisplayName"
	oReg.GetStringValue HKEY_LOCAL_MACHINE, newpath, newkey, strValue
	if strValue <> "" then
	version = ""
	uninstall_string = ""
	install_date = ""
	publisher = ""
	install_source = ""
	install_location = ""
	system_component = ""
	package_name = strValue

	newkey = "DisplayVersion"
	oReg.GetStringValue HKEY_LOCAL_MACHINE, newpath, newkey, strValue
	package_version = strValue
	if (isnull(package_version)) then package_version = "" end if

	newkey = "UninstallString"
	oReg.GetStringValue HKEY_LOCAL_MACHINE, newpath, newkey, strValue
	package_uninstall = strValue
	if (isnull(package_uninstall)) then package_uninstall = "" end if

	newkey = "InstallDate"
	oReg.GetStringValue HKEY_LOCAL_MACHINE, newpath, newkey, strValue
	package_install_date = strValue
	if (isnull(package_install_date)) then package_install_date = "" end if

	newkey = "Publisher"
	oReg.GetStringValue HKEY_LOCAL_MACHINE, newpath, newkey, strValue
	package_publisher = strValue
	if (isnull(package_publisher)) then package_publisher = "" end if

	newkey = "InstallSource"
	oReg.GetStringValue HKEY_LOCAL_MACHINE, newpath, newkey, strValue
	package_install_source = strValue
	if (isnull(package_install_source)) then package_install_source = "" end if

	newkey = "InstallLocation"
	oReg.GetStringValue HKEY_LOCAL_MACHINE, newpath, newkey, strValue
	package_location = strValue
	if (isnull(package_location)) then package_location = "" end if

	newkey = "SystemComponent"
	oReg.GetDWORDValue HKEY_LOCAL_MACHINE, newpath, newkey, strValue
	package_system_component = strValue
	if (isnull(package_system_component)) then package_system_component = "" end if

	newkey = "URLInfoAbout"
	oReg.GetStringValue HKEY_LOCAL_MACHINE, newpath, newkey, strValue
	package_url = strValue
	if (isnull(package_url)) then package_url = "" end if

	newkey = "Comments"
	oReg.GetStringValue HKEY_LOCAL_MACHINE, newpath, newkey, strValue
	package_comments = strValue
	if (isnull(package_comments)) then package_comments = " " end if

	package_installed_by = ""
	package_installed_on = ""

	on error resume next
	for each objItem in colItems
	if objItem.Message <> "" then
	colonPos = InStr(objItem.Message,":")
	dashPos = InStr(objItem.Message,"--")
	message_retrieved = trim(Mid(objItem.Message,colonPos+1,dashPos-colonPos-1))
	if (not isNull(message_retrieved)) then
	if (InStr(message_retrieved, package_name) = 1) then
	package_installed_by = objItem.User
	if details_to_lower = "y" then package_installed_by = lcase(package_installed_by) end if
	package_installed_on = WMIDateStringToDate(objItem.TimeGenerated)
	package_installed_on = datepart("yyyy", package_installed_on) & "-" & datepart("m", package_installed_on) & "-" & datepart("d", package_installed_on) & " " & datepart("h", package_installed_on) & ":" & datepart("n", package_installed_on) & ":" & datepart("s", package_installed_on)
	exit for
	else
	package_installed_by = ""
	package_installed_on = ""
	end if
	end if
	end if
	next
	On Error Goto 0

	result.WriteText "		<item>" & vbcrlf
	result.WriteText "			<name>" & escape_xml(package_name) & "</name>" & vbcrlf
	result.WriteText "			<version>" & escape_xml(package_version) & "</version>" & vbcrlf
	result.WriteText "			<location>" & escape_xml(package_location) & "</location>" & vbcrlf
	result.WriteText "			<install_date>" & escape_xml(package_install_date) & "</install_date>" & vbcrlf
	result.WriteText "			<publisher>" & escape_xml(package_publisher) & "</publisher>" & vbcrlf
	result.WriteText "			<install_source>" & escape_xml(package_install_source) & "</install_source>" & vbcrlf
	result.WriteText "			<system_component>" & escape_xml(package_system_component) & "</system_component>" & vbcrlf
	result.WriteText "			<url>" & escape_xml(package_url) & "</url>" & vbcrlf
	result.WriteText "			<installed_by>" & escape_xml(package_installed_by) & "</installed_by>" & vbcrlf
	result.WriteText "			<installed_on>" & escape_xml(package_installed_on) & "</installed_on>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf
	end if
	next
	end if
end if
result.WriteText "		<!-- end of 64 #2 -->" & vbcrlf





if address_width = "64" then
	if debugging > "0" then wscript.echo "Software for 64bit (registry) #3" end if
	' do it all over again for 32bit software installed on a 64bit machine
	' this accounts for running the script directly from a webpage on a 64bit machine
	' HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\CurrentVersion\Uninstall
	result.WriteText "	<!-- end of 64 #3 -->" & vbcrlf
	Set objCtx = CreateObject("WbemScripting.SWbemNamedValueSet")
	objCtx.Add "__ProviderArchitecture", 64
	objCtx.Add "__RequiredArchitecture", True
	Set objLocator = CreateObject("Wbemscripting.SWbemLocator")

	if ((struser <> "") and (instr(local_net, strcomputer) = 0)) then
	' Username & Password provided - assume not a domain local PC.
	Set objServices = objLocator.ConnectServer(strcomputer, "root\default", struser, strpass, "", "", wbemConnectFlagUseMaxWait, objCtx)
	else
	Set objServices = objLocator.ConnectServer(strcomputer, "root\default", "", "", "", "", wbemConnectFlagUseMaxWait, objCtx)
	end if

	Set o64reg = objServices.Get("StdRegProv")

	'Set Inparams = o64reg.Methods_("GetStringValue").Inparameters
	Set Inparams = o64reg.Methods_("EnumKey").Inparameters
	Inparams.Hdefkey = HKEY_LOCAL_MACHINE
	Inparams.Ssubkeyname = "SOFTWARE\Microsoft\Windows\CurrentVersion\Uninstall"
	set Outparams = o64reg.ExecMethod_("EnumKey", Inparams,,objCtx)

	if (not isnull(Outparams.Snames)) then
	for each reg_name in Outparams.Snames
	'wscript.echo "Key Name: " & reg_name

	package_name = ""
	package_version = ""
	package_uninstall = ""
	package_install_date = ""
	package_install_source = ""
	package_location = ""
	package_system_component = ""
	package_url = ""
	package_comments = ""

	Set Inparams2 = o64reg.Methods_("GetStringValue").Inparameters
	Inparams2.Hdefkey = HKEY_LOCAL_MACHINE
	Inparams2.Ssubkeyname = "SOFTWARE\Microsoft\Windows\CurrentVersion\Uninstall" & "\" & reg_name
	Inparams2.Svaluename = "DisplayName"
	set Outparams2 = o64reg.ExecMethod_("GetStringValue", Inparams2,,objCtx)
	package_name = Outparams2.SValue
	if (isnull(package_name) or package_name = "") then
	' do nothing
	else
	' grab the version, etc
	'wscript.echo "Name: " & package_name

	Inparams2.Svaluename = "DisplayVersion"
	set Outparams2 = o64reg.ExecMethod_("GetStringValue", Inparams2,,objCtx)
	package_version = Outparams2.SValue
	if (isnull(package_version)) then package_version = "" end if
	'wscript.echo "Package Version: " & package_version

	Inparams2.Svaluename = "UninstallString"
	set Outparams2 = o64reg.ExecMethod_("GetStringValue", Inparams2,,objCtx)
	package_uninstall = Outparams2.SValue
	if (isnull(package_uninstall)) then package_uninstall = "" end if

	Inparams2.Svaluename = "InstallDate"
	set Outparams2 = o64reg.ExecMethod_("GetStringValue", Inparams2,,objCtx)
	package_install_date = Outparams2.SValue
	if (isnull(package_install_date)) then package_install_date = "" end if

	Inparams2.Svaluename = "Publisher"
	set Outparams2 = o64reg.ExecMethod_("GetStringValue", Inparams2,,objCtx)
	package_publisher = Outparams2.SValue
	if (isnull(package_publisher)) then package_publisher = "" end if

	Inparams2.Svaluename = "InstallSource"
	set Outparams2 = o64reg.ExecMethod_("GetStringValue", Inparams2,,objCtx)
	package_install_source = Outparams2.SValue
	if (isnull(package_install_source)) then package_install_source = "" end if

	Inparams2.Svaluename = "InstallLocation"
	set Outparams2 = o64reg.ExecMethod_("GetStringValue", Inparams2,,objCtx)
	package_location = Outparams2.SValue
	if (isnull(package_location)) then package_location = "" end if

	Inparams2.Svaluename = "SystemComponent"
	set Outparams2 = o64reg.ExecMethod_("GetStringValue", Inparams2,,objCtx)
	package_system_component = Outparams2.SValue
	if (isnull(package_system_component)) then package_system_component = "" end if

	Inparams2.Svaluename = "URLInfoAbout"
	set Outparams2 = o64reg.ExecMethod_("GetStringValue", Inparams2,,objCtx)
	package_url = Outparams2.SValue
	if (isnull(package_url)) then package_url = "" end if

	Inparams2.Svaluename = "Comments"
	set Outparams2 = o64reg.ExecMethod_("GetStringValue", Inparams2,,objCtx)
	package_comments = Outparams2.SValue
	if (isnull(package_comments)) then package_comments = "" end if

	package_installed_by = ""
	package_installed_on = ""

	on error resume next
	for each objItem in colItems
	if objItem.Message <> "" then
	colonPos = InStr(objItem.Message,":")
	dashPos = InStr(objItem.Message,"--")
	message_retrieved = trim(Mid(objItem.Message,colonPos+1,dashPos-colonPos-1))
	if (not isNull(message_retrieved)) then
	if (InStr(message_retrieved, package_name) = 1) then
	package_installed_by = objItem.User
	if details_to_lower = "y" then package_installed_by = lcase(package_installed_by) end if
	package_installed_on = WMIDateStringToDate(objItem.TimeGenerated)
	package_installed_on = datepart("yyyy", package_installed_on) & "-" & datepart("m", package_installed_on) & "-" & datepart("d", package_installed_on) & " " & datepart("h", package_installed_on) & ":" & datepart("n", package_installed_on) & ":" & datepart("s", package_installed_on)
	exit for
	else
	package_installed_by = ""
	package_installed_on = ""
	end if
	end if
	end if
	next
	on error goto 0

	result.WriteText "		<item>" & vbcrlf
	result.WriteText "			<name>" & escape_xml(package_name) & "</name>" & vbcrlf
	result.WriteText "			<version>" & escape_xml(package_version) & "</version>" & vbcrlf
	result.WriteText "			<location>" & escape_xml(package_location) & "</location>" & vbcrlf
	result.WriteText "			<install_date>" & escape_xml(package_install_date) & "</install_date>" & vbcrlf
	result.WriteText "			<publisher>" & escape_xml(package_publisher) & "</publisher>" & vbcrlf
	result.WriteText "			<install_source>" & escape_xml(package_install_source) & "</install_source>" & vbcrlf
	result.WriteText "			<system_component>" & escape_xml(package_system_component) & "</system_component>" & vbcrlf
	result.WriteText "			<url>" & escape_xml(package_url) & "</url>" & vbcrlf
	result.WriteText "			<installed_by>" & escape_xml(package_installed_by) & "</installed_by>" & vbcrlf
	result.WriteText "			<installed_on>" & escape_xml(package_installed_on) & "</installed_on>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf
	end if
	next
	end if
end if





	' hotfixes
	if (system_os_family = "Windows 2008" or system_os_family = "Windows 7" or system_os_family = "Windows Vista" or system_os_family = "Windows 8" or system_os_family = "Windows 2012") then
	if debugging > "0" then wscript.echo "Hotfix info" end if
	set colItems2 = objWMIService.ExecQuery("Select * from Win32_QuickFixEngineering",,32)
	if (not isnull(colItems2)) then
	for each objItem2 in colItems2
	package_installed_by = objItem2.InstalledBy
	if details_to_lower = "y" then package_installed_by = lcase(package_installed_by) end if
	result.WriteText "		<item>" & vbcrlf
	result.WriteText "			<name>" & escape_xml(objItem2.HotFixID) & "</name>" & vbcrlf
	result.WriteText "			<install_date>" & escape_xml(objItem2.InstalledOn) & "</install_date>" & vbcrlf
	result.WriteText "			<publisher>Microsoft</publisher>" & vbcrlf
	result.WriteText "			<url>" & escape_xml(objItem2.Caption) & "</url>" & vbcrlf
	result.WriteText "			<type>update</type>" & vbcrlf
	result.WriteText "			<installed_by>" & escape_xml(package_installed_by) & "</installed_by>" & vbcrlf
	result.WriteText "			<installed_on>" & escape_xml(objItem2.InstalledOn) & "</installed_on>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf
	next
	end if
	end if
	result.WriteText "	</software>" & vbcrlf
end if


if debugging > "0" then wscript.echo "Services info" end if
en_sql_server = "n"
en_sql_express = "n"
result.WriteText "	<service>" & vbcrlf
set colItems = objWMIService.ExecQuery("Select * from Win32_Service",,32)
for each objItem in colItems
	result.WriteText "		<item>" & vbcrlf
	'result.WriteText "			<service_description>" & escape_xml(objItem.Description) & "</service_description>" & vbcrlf
	result.WriteText "			<description>" & escape_xml(objItem.DisplayName) & "</description>" & vbcrlf
	result.WriteText "			<name>" & escape_xml(objItem.Name) & "</name>" & vbcrlf
	result.WriteText "			<executable>" & escape_xml(objItem.PathName) & "</executable>" & vbcrlf
	result.WriteText "			<user>" & escape_xml(objItem.StartName) & "</user>" & vbcrlf
	result.WriteText "			<start_mode>" & escape_xml(objItem.StartMode) & "</start_mode>" & vbcrlf
	result.WriteText "			<state>" & escape_xml(objItem.State) & "</state>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf

	service_name = objItem.Name
	if details_to_lower = "y" then service_name = lcase(service_name) end if

	' to account for SQL server instances not named "sql server (mssqlserver)", named "sql server (something else)"
	'if (instr(service_name, "mssql$" ) = 1) then service_name = "mssqlserver": wscript.echo "in" end if

	select case service_name

	case "iisadmin"
	iis = True

	case "w3svc"
	iis_w3svc = True

	case "msftpsvc"
	iis_ftpsvc = True

	case "smtpsvc"
	iis_smtpsvc = True

	case "nntpsvc"
	iis_nntpsvc = True

	case "mssqlserver"
	en_sql_server = "y"
	en_sql_server_state = objItem.State
	if debugging > "1" then wscript.echo service_name end if

	case "sql server (mssqlserver)"
	en_sql_server = "y"
	en_sql_server_state = objItem.State
	if debugging > "1" then wscript.echo service_name end if

	case "mssql$sqlexpress"
	en_sql_express = "y"
	en_sql_server_state = objItem.State
	if debugging > "1" then wscript.echo service_name end if

	case "sql server (sqlexpress)"
	en_sql_express = "y"
	en_sql_server_state = objItem.State
	if debugging > "1" then wscript.echo service_name end if

	end select

	if lcase(objItem.DisplayName) = "sql server (sqlexpress)" then
	en_sql_express = "y"
	en_sql_server_state = objItem.State
	end if

	if lcase(objItem.DisplayName) = "sql server (mssqlserver)"  then
	en_sql_server = "y"
	en_sql_server_state = objItem.State
	end if

	if (instr(objItem.DisplayName, "SQL Server (") = 1)  then
	en_sql_server = "y"
	en_sql_server_state = objItem.State
	end if

next
result.WriteText "	</service>" & vbcrlf

server = ""
server_item = ""
if ((en_sql_server = "y") or (en_sql_express = "y")) then
	if debugging > "0" then wscript.echo "SQL info" end if
	oReg.GetStringValue HKEY_LOCAL_MACHINE,    "SOFTWARE\Microsoft\MSSQLServer\MSSQLServer\CurrentVersion\","CSDVersion", db_version
	If (IsNull(db_version)) Then
	oReg.GetStringValue HKEY_LOCAL_MACHINE,"SOFTWARE\Microsoft\MSSQLServer\MSSQLServer\CurrentVersion\","CurrentVersion", db_version
	End If
	If (IsNull(db_version)) Then
	oReg.GetStringValue HKEY_LOCAL_MACHINE,"SOFTWARE\Microsoft\Microsoft SQL Server\MSSQL.1\MSSQLSERVER\CurrentVersion","CurrentVersion", db_version
	End If
	If (IsNull(db_version) and en_sql_express = "y") Then
	oReg.GetStringValue HKEY_LOCAL_MACHINE,"SOFTWARE\Microsoft\Microsoft SQL Server\SQLEXPRESS\MSSQLSERVER\CurrentVersion","CurrentVersion", db_version
	End If

	' attempt to determine the edition of SQL
	db_edition = ""
	' first try SQL 2008 r2
	oReg.GetStringValue HKEY_LOCAL_MACHINE,"SOFTWARE\Microsoft\Microsoft SQL Server\MSSQL10_50.MSSQLSERVER\Setup","Edition", db_edition
	if (isnull(db_edition) or db_edition = "") then
	' SQL 2008
	oReg.GetStringValue HKEY_LOCAL_MACHINE,"SOFTWARE\Microsoft\Microsoft SQL Server\MSSQL10.MSSQLSERVER\Setup","Edition", db_edition
	end if
	if (isnull(db_edition) or db_edition = "") then
	' SQL 2005
	oReg.GetStringValue HKEY_LOCAL_MACHINE,"SOFTWARE\Microsoft\Microsoft SQL Server\MSSQL.1\Setup","Edition", db_edition
	end if
	if (isnull(db_edition) or db_edition = "") then
	' SQL 2000
	oReg.GetStringValue HKEY_LOCAL_MACHINE,"SOFTWARE\Microsoft\Microsoft SQL Server\Setup","Edition", db_edition
	end if
	if (isnull(db_edition) or db_edition = "") then
	' SQL 2000
	oReg.GetStringValue HKEY_LOCAL_MACHINE,"SOFTWARE\Microsoft\MSSQLServer\Setup","Edition", db_edition
	end if
	if (instr(lcase(db_edition), "express")) then
	en_sql_express = "y"
	en_sql_server = "n"
	end if

	if ((en_sql_express = "y") and (db_edition = "" or isnull(db_edition))) then
	db_edition = "Express Edition"
	end if

	if debugging > "1" then wscript.echo "SQL Express: " & en_sql_express end if
	if debugging > "1" then wscript.echo "SQL Server: " & en_sql_server end if
	if debugging > "1" then wscript.echo "DB Version: " & db_version end if
	if debugging > "1" then wscript.echo "DB Edition: " & db_edition end if

	' enumerate the instances of SQL
	strKeyPath = "SOFTWARE\Microsoft\Microsoft SQL Server\Instance Names\SQL"
	oReg.EnumValues HKEY_LOCAL_MACHINE, strKeyPath, sql_instances, arrValueTypes

	if isnull(sql_instances) then
	' we did not return any instances - maybe SQL 2000 or SQL Express?
	sql_instances = array("MSSQLSERVER")
	else
	For Each value In sql_instances
	if debugging > "1" then wscript.echo "Instance: " & value end if
	next
	end if

	i = ""
	db_login_type = "Not in registry (possibly SQL Express)."
	oReg.GetDWORDValue HKEY_LOCAL_MACHINE,"SOFTWARE\Microsoft\MSSQLServer\MSSQLServer\","LoginMode", i

	if (IsNull(i) or i = "") then
	oReg.GetStringValue HKEY_LOCAL_MACHINE,"SOFTWARE\Microsoft\Microsoft SQL Server\Instance Names\SQL\","MSSQLSERVER", db_instance
	oReg.GetDWORDValue HKEY_LOCAL_MACHINE,"SOFTWARE\Microsoft\Microsoft SQL Server\" & db_instance & "\MSSQLServer\","LoginMode", i
	end if

	if (IsNull(i) or i = "") then
	oReg.GetDWORDValue HKEY_LOCAL_MACHINE,"SOFTWARE\Microsoft\Microsoft SQL Server\" & sql_instances(0) & "\MSSQLServer\","LoginMode", i
	end if

	if (IsNull(i) or i = "") then
	oReg.GetDWORDValue HKEY_LOCAL_MACHINE,"SOFTWARE\Microsoft\Microsoft SQL Server\MSSQL.1\MSSQLServer\","LoginMode", i
	end if

	Select Case i
	Case 0
	db_login_type = "Allow SQL Server Authentication only"
	' note - if we hit this, because we don't have SQL credentials, we don't enumerate databases
	Case 1
	db_login_type = "Allow Windows Authentication only"
	Case 2
	db_login_type = "Allow Windows Authentication or SQL Server Authentication"
	Case 9
	db_login_type = "Security type unknown"
	' note - if we hit this, we don't enumerate databases
	Case default
	db_login_type = "Unknown"
	' note - if we hit this, we cannot log in to the DB Server, therefore, we don't enumerate databases
	' this might occur if we connect to SQL 2000. TODO: check this.
	End Select

	if debugging > "1" then wscript.echo "DB Login Type: " & db_login_type end if

	db_port = ""
	oReg.GetStringValue HKEY_LOCAL_MACHINE,"SOFTWARE\Microsoft\MSSQLServer\MSSQLServer\SuperSocketNetLib\Tcp\","TcpPort", db_port

	if (isnull(db_port) or db_port = "") then
	oReg.GetStringValue HKEY_LOCAL_MACHINE,"SOFTWARE\Microsoft\Microsoft SQL Server\MSSQL.1\MSSQLServer\SuperSocketNetLib\Tcp\IPAll\","TcpPort", db_port
	end if

	if ((isnull(db_port) or db_port = "") and (en_sql_express = "y")) then
	oReg.GetStringValue HKEY_LOCAL_MACHINE,"SOFTWARE\Microsoft\Microsoft SQL Server\SQLEXPRESS\MSSQLServer\SuperSocketNetLib\Tcp\IPAll\","TcpPort", db_port
	end if

	if ((isnull(db_port) or db_port = "") and (en_sql_express = "y")) then
	oReg.GetStringValue HKEY_LOCAL_MACHINE,"SOFTWARE\Microsoft\Microsoft SQL Server\" & sql_instances(0) & "\MSSQLServer\SuperSocketNetLib\Tcp\IPAll\","TcpPort", db_port
	end if

	if (IsNull(db_port) or db_port = "") then
	db_port = "unknown"
	end if

	if debugging > "1" then wscript.echo "DB Port: " & db_port end if

	if en_sql_express = "y" then
	db_type = "SQL Server Express"
	else
	db_type = "SQL Server"
	end if

	if debugging > "1" then wscript.echo "DB Type: " & db_type end if
	if debugging > "1" then wscript.echo "SQL State: " & en_sql_server_state end if

	if ( (en_sql_server_state = "Running") and (((i = 1) or (i = 2)) or db_type = "SQL Server Express")) then
	which_instance = ""
	for each instance in sql_instances
	if instance = "MSSQLSERVER" then which_instance = "MSSQLSERVER" end if
	next

	if ((which_instance = "") and (sql_instances(0) <> "")) then which_instance = sql_instances(0)

	if ((db_type = "SQL Server") and (which_instance = "MSSQLSERVER")) then
	strBaseConnection ="Provider=SQLOLEDB;Integrated Security=SSPI;Persist Security Info=False;Data Source=" & system_hostname & ";DATABASE=master"
	end if

	if ((db_type = "SQL Server") and (which_instance <> "MSSQLSERVER")) then
	strBaseConnection ="Provider=SQLOLEDB;Integrated Security=SSPI;Persist Security Info=False;Data Source=" & system_hostname & "\" & which_instance & ";DATABASE=master"
	end if

	if ((db_type = "SQL Server Express") and (which_instance = "MSSQLSERVER")) then
	strBaseConnection = "Provider=SQLOLEDB;Integrated Security=SSPI;Persist Security Info=False;Data Source=" & system_hostname & "\SQLEXPRESS;Initial Catalog=master;"
	end if

	if ((db_type = "SQL Server Express") and (which_instance <> "MSSQLSERVER")) then
	strBaseConnection = "Provider=SQLOLEDB;Integrated Security=SSPI;Persist Security Info=False;Data Source=" & system_hostname & "\" & which_instance & ";Initial Catalog=master;"
	end if

	if debugging > "1" then wscript.echo "Which Instance: " & which_instance end if
	if debugging > "1" then wscript.echo strBaseConnection end if

	Set objDBConnection = CreateObject("ADODB.Connection")
	on error resume next
	objDBConnection.Open(strBaseConnection)
	error_returned = Err.Number
	objDBConnection.Close
	on error goto 0
	if (error_returned <> 0) then
	if debugging > "1" then wscript.echo "Could not connect to SQL (possibly Express, SSRS, SSIS or SSAS)" end if
	if debugging > "1" then wscript.echo "Description: " & error_description end if
	end if
	end if


	server = server & "		<item>" & vbcrlf
	server = server & "			<type>database</type>" & vbcrlf
	server = server & "			<name>" & escape_xml(db_type) & "</name>" & vbcrlf
	server = server & "			<version>" & escape_xml(db_version) & "</version>" & vbcrlf
	server = server & "			<edition>" & escape_xml(db_edition) & "</edition>" & vbcrlf
	server = server & "			<port>" & escape_xml(db_port) & "</port>" & vbcrlf
	server = server & "			<status>" & escape_xml(en_sql_server_state) & "</status>" & vbcrlf
	server = server & "		</item>" & vbcrlf



	if ( (en_sql_server_state = "Running") and (((i = 1) or (i = 2)) or db_type = "SQL Server Express") and error_returned = 0) then
	for each instance in sql_instances
	if ((db_type = "SQL Server") and (which_instance = "MSSQLSERVER")) then
	strBaseConnection ="Provider=SQLOLEDB;Integrated Security=SSPI;Persist Security Info=False;DATA SOURCE=" & system_hostname & ";DATABASE=master"
	end if

	if ((db_type = "SQL Server") and (which_instance <> "MSSQLSERVER")) then
	strBaseConnection ="Provider=SQLOLEDB;Integrated Security=SSPI;Persist Security Info=False;DATA SOURCE=" & system_hostname & "\" & which_instance & ";DATABASE=master"
	end if

	if ((db_type = "SQL Server Express") and (which_instance = "MSSQLSERVER")) then
	strBaseConnection = "Provider=SQLOLEDB;Integrated Security=SSPI;Data Source=" & system_hostname & "\SQLEXPRESS;Initial Catalog=master;"
	end if

	if ((db_type = "SQL Server Express") and (which_instance <> "MSSQLSERVER")) then
	strBaseConnection = "Provider=SQLOLEDB;Integrated Security=SSPI;Data Source=" & system_hostname & "\" & which_instance & ";Initial Catalog=master;"
	end if

	if debugging > "1" then wscript.echo "DB Instance: " & instance end if
	Set objDBConnection = CreateObject("ADODB.Connection")
	Set objRS = CreateObject("ADODB.RecordSet")
	objDBConnection.Open(strBaseConnection)
	strQuery = "Select name, dbid, cmptlevel, filename, CONVERT(VARCHAR(19), crdate, 120) as crdate from sysdatabases order by name"
	objRS.open strQuery, objDBConnection, 1
	number_of_databases = cInt(objRS.RecordCount)
	if debugging > "1" then wscript.echo "DB Count: " & number_of_databases end if
	if (number_of_databases > 0) then

	Do Until objRS.Eof
	' get the filesize
	if (not isnull(objRS.Fields("filename")) and objRS.Fields("filename") > "") then
	filename = replace(objRS.Fields("filename"), "\", "\\")
	set colFiles = objWMIService.ExecQuery ("Select FileSize from CIM_Datafile Where name = '" & filename & "'")
	for each objFile in colFiles
	filesize = int(objFile.FileSize / 1024 / 1024)
	next
	database_name = CStr(objRS("Name"))
	if debugging > "1" then wscript.echo "DB Name: " & database_name end if
	server_item = server_item & "		<item>" & vbcrlf
	server_item = server_item& "			<type>database</type>" & vbcrlf
	server_item = server_item & "			<parent_name>" & escape_xml(db_type) & "</parent_name>" & vbcrlf
	server_item = server_item & "			<name>" & escape_xml(database_name) & "</name>" & vbcrlf
	server_item = server_item & "			<id_internal>" & escape_xml(objRS("dbid")) & "</id_internal>" & vbcrlf
	server_item = server_item & "			<instance>" & escape_xml(instance) & "</instance>" & vbcrlf
	server_item = server_item & "			<filename>" & escape_xml(objRS("FileName")) & "</filename>" & vbcrlf
	server_item = server_item & "			<size>" & escape_xml(filesize) & "</size>" & vbcrlf
	server_item = server_item & "			<details_creation_date>" & escape_xml(objRS("crdate")) & "</details_creation_date>" & vbcrlf
	server_item = server_item & "		</item>" & vbcrlf
	end if
	objRS.Movenext
	Loop
	end if
	'On Error Goto 0
	objRS.Close
	objDBConnection.Close
	next
	end if
end if

if ((iis_w3svc = True) and (iis = True) and ((cint(windows_build_number) = 2195) or (cint(windows_build_number) = 2600)) ) then
	' IIS 5 or 5.1
	if debugging > "1" then wscript.echo "IIS 5 Installed" end if
	server = server & "		<item>" & vbcrlf
	server = server & "			<type>web</type>" & vbcrlf
	server = server & "			<name>IIS</name>" & vbcrlf
	server = server & "			<version>5</version>" & vbcrlf
	server = server & "			<status>running</status>" & vbcrlf
	server = server & "		</item>" & vbcrlf

	result_site = ""
	if audit_location = "local" then iis_connect = "localhost" else iis_connect = strcomputer end if
	on error resume next
	set objWMIService_IIS = GetObject( "IIS://" & iis_connect & "/W3SVC" )
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (W3SVC)" : audit_wmi_fails = audit_wmi_fails & "W3SVC " : end if
	if objWMIService_IIS.count = 0 then
	' do nothing
	else
	for each objitem in objWMIService_IIS
	if objitem.class = "IIsWebServer" then
	server_item = server_item & "	<item>" & vbcrlf
	server_item = server_item & "		<type>website</type>" & vbcrlf
	server_item = server_item & "		<name>" & escape_xml(objitem.name) & "</name>" & vbcrlf
	server_item = server_item & "		<parent_name>IIS</parent_name>" & vbcrlf
	server_item = server_item & "		<id_internal>" & escape_xml(objitem.name) & "</id_internal>" & vbcrlf
	server_item = server_item & "		<description>" & escape_xml(objItem.servercomment) & "</description>" & vbcrlf
	Select Case objItem.serverstate
	Case 1:       server_item = server_item & "			<status>Starting</status>" & vbcrlf
	Case 2:       server_item = server_item & "			<status>Running</status>" & vbcrlf
	Case 3:       server_item = server_item & "			<status>Stopping</status>" & vbcrlf
	Case 4:       server_item = server_item & "			<status>Stopped</status>" & vbcrlf
	Case 5:       server_item = server_item & "			<status>Pausing</status>" & vbcrlf
	Case 6:       server_item = server_item & "			<status>Paused</status>" & vbcrlf
	Case 7:       server_item = server_item & "			<status>Continuing</status>" & vbcrlf
	Case Default: server_item = server_item & "			<status>Unknown</status>" & vbcrlf
	End Select
	Select Case objItem.LogType
	Case 0:       server_item = server_item & "			<log_status>disabled</log_status>" & vbcrlf
	Case 1:       server_item = server_item & "			<log_status>enabled</log_status>" & vbcrlf
	Case Default: server_item = server_item & "			<log_status>undefined</log_status>" & vbcrlf
	End Select
	server_item = server_item & "		<log_path>" & escape_xml(objItem.logfiledirectory) & "</log_path>" & vbcrlf
	Select Case objItem.LogFilePeriod
	Case 0: If objItem.LogFileTruncateSize = -1 Then
	server_item = server_item & "		<log_rotation>Unlimited file size</log_rotation>" & vbcrlf
	Else
	server_item = server_item & "		<log_rotation>When file size reaches " & (objItem.LogFileTruncateSize/1048576) & " MB</log_rotation>" & vbcrlf
	End If
	Case 1:       server_item = server_item & "			<log_rotation>daily</log_rotation>" & vbcrlf
	Case 2:       server_item = server_item & "			<log_rotation>weekly</log_rotation>" & vbcrlf
	Case 3:       server_item = server_item & "			<log_rotation>monthly</log_rotation>" & vbcrlf
	Case 4:       server_item = server_item & "			<log_rotation>hourly</log_rotation>" & vbcrlf
	Case Default: server_item = server_item & "			<log_rotation>undefined</log_rotation>" & vbcrlf
	End Select
	server_item = server_item & "	</item>" & vbcrlf
	end if
	next
	end if
	on error goto 0
end if


if ((iis_w3svc = True) and (iis = True) and (cint(windows_build_number) > 3000)) then
	' IIS 6 or greater
	if debugging > "1" then wscript.echo "IIS 6 Installed" end if

	iis_wmi = True

	on error resume next
	if struser > "" then
	set objWMIService_IIS = wmiLocator.ConnectServer(strcomputer, "root/MicrosoftIISv2", struser, strpass, "", "", wbemConnectFlagUseMaxWait)
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (MicrosoftIISv2)" : audit_wmi_fails = audit_wmi_fails & "MicrosoftIISv2 " : end if
	objWMIService_IIS.Security_.authenticationLevel = 6
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (objWMIService_IIS.Security_.authenticationLevel)" : audit_wmi_fails = audit_wmi_fails & "objWMIService_IIS.Security_.authenticationLevel " : end if
	else
	Set objWMIService_IIS = GetObject("winmgmts:{AuthenticationLevel=pktPrivacy}!\\" & strcomputer & "\root\MicrosoftIISv2")
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (MicrosoftIISv2)" : audit_wmi_fails = audit_wmi_fails & "MicrosoftIISv2 " : end if
	end if
	on error goto 0

	if isnull(objWMIService_IIS) then iis_wmi = False
	if isempty(objWMIService_IIS) then iis_wmi = False

	if iis_wmi = True then
	iis_version = ""
	on error resume next
	Set colItems = objWMIService_IIS.ExecQuery("SELECT * FROM IIsWebInfo",,32)
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (IISWebInfo)" : audit_wmi_fails = audit_wmi_fails & "IISWebInfo " : end if
	For Each objItem in colItems
	iis_version = objItem.MajorIIsVersionNumber & "." & objItem.MinorIIsVersionNumber
	Next
	server = server & "		<item>" & vbcrlf
	server = server & "			<type>web</type>" & vbcrlf
	server = server & "			<name>IIS</name>" & vbcrlf
	server = server & "			<version>" & escape_xml(iis_version) & "</version>" & vbcrlf
	server = server & "			<status>running</status>" & vbcrlf
	server = server & "		</item>" & vbcrlf
	if iis_version > "." then iis_wmi = True else iis_wmi = False
	on error goto 0
	end if

	if iis_wmi = True then
	Set colItems = objWMIService_IIS.ExecQuery("Select * from IIsWebServerSetting",,32)
	For Each objItem in colItems
	result_site = result_site & "	<item>" & vbcrlf
	ArgSiteIndex = objItem.Name
	' Stripping out "w3svc/"
	site_id = Mid(ArgSiteIndex, 7)

	log_status = ""
	Select Case objItem.LogType
	Case 0:       log_status = "disabled"
	Case 1:       log_status = "enabled"
	Case Default: log_status = "undefined"
	End Select

	log_path = objItem.LogFileDirectory

	server_item = server_item & "		<item>" & vbcrlf
	server_item = server_item & "			<type>website</type>" & vbcrlf
	server_item = server_item & "			<name>" & escape_xml(site_id) & "</name>" & vbcrlf
	server_item = server_item & "			<parent_name>IIS</parent_name>" & vbcrlf
	server_item = server_item & "			<id_internal>" & escape_xml(objItem.Name) & "</id_internal>" & vbcrlf
	server_item = server_item & "			<description>" & escape_xml(objItem.ServerComment) & "</description>" & vbcrlf


	' Status
	strQuery = "SELECT * FROM IIsWebServer WHERE Name = '" & ArgSiteIndex & "'"
	Set colItems1 = objWMIService_IIS.ExecQuery(strQuery,,32)
	For Each objItem1 in colItems1
	Select Case objItem1.ServerState
	Case 1:       server_item = server_item & "			<status>Starting</status>" & vbcrlf
	Case 2:       server_item = server_item & "			<status>Running</status>" & vbcrlf
	Case 3:       server_item = server_item & "			<status>Stopping</status>" & vbcrlf
	Case 4:       server_item = server_item & "			<status>Stopped</status>" & vbcrlf
	Case 5:       server_item = server_item & "			<status>Pausing</status>" & vbcrlf
	Case 6:       server_item = server_item & "			<status>Paused</status>" & vbcrlf
	Case 7:       server_item = server_item & "			<status>Continuing</status>" & vbcrlf
	Case Default: server_item = server_item & "			<status>Unknown</status>" & vbcrlf
	End Select
	Next

	' Logging
	log_format = ""
	strQuery = "SELECT * FROM IIsLogModuleSetting WHERE LogModuleId = '" & objItem.LogPluginClsid & "'"
	Set colItems1 = objWMIService_IIS.ExecQuery(strQuery,,32)
	For Each objItem1 in colItems1
	LogFormat = Split(objItem1.Name, "/")
	log_format = LogFormat(1)
	Next

	log_rotation = ""
	Select Case objItem.LogFilePeriod
	Case 0: If objItem.LogFileTruncateSize = -1 Then
	log_rotation = "Unlimited file size"
	Else
	log_rotation = objItem.LogFileTruncateSize/1048576 & " MB"
	End If
	Case 1:       log_rotation = "daily"
	Case 2:       log_rotation = "weekly"
	Case 3:       log_rotation = "monthly"
	Case 4:       log_rotation = "hourly"
	Case Default: log_rotation = "undefined"
	End Select

	server_item = server_item & "			<log_status>" & escape_xml(log_status) & "</log_status>" & vbcrlf
	server_item = server_item & "			<log_format>" & escape_xml(log_format) & "</log_format>" & vbcrlf
	server_item = server_item & "			<log_path>" & escape_xml(log_path) & "</log_path>" & vbcrlf
	server_item = server_item & "			<log_rotation>" & escape_xml(log_rotation) & "</log_rotation>" & vbcrlf

	' Host Headers
	result_host_headers = ""
	site_ip = ""
	site_port = ""
	site_hostname = ""
	if IsArray(objItem.ServerBindings) then
	For i = 0 to Ubound(objItem.ServerBindings)
	site_ip = objItem.ServerBindings(i).IP
	site_port = objItem.ServerBindings(i).Port
	site_hostname = objItem.ServerBindings(i).Hostname
	Next
	end if

	' the web site directory'
	Set colItems2 = objWMIService_IIS.ExecQuery("SELECT * FROM IIsWebVirtualDirSetting WHERE Name = '" & ArgSiteIndex & "/ROOT'",,32)
	For Each objItem2 in colItems2
	iis_path = objItem2.Path
	next

	site_size = ""
	on error resume next
	if audit_location = "local" then
	if objFSO.FolderExists(iis_path) then
	Set objFolder = objFSO.GetFolder(iis_path)
	site_size = int(objFolder.size / 1024 / 1024) ' NOTE - only works when run locally. Returns in MB.
	else
	site_size = ""
	end if
	end if
	on error goto 0
	server_item = server_item & "			<ip>" & escape_xml(site_ip) & "</ip>" & vbcrlf
	server_item = server_item & "			<port>" & escape_xml(site_port) & "</port>" & vbcrlf
	server_item = server_item & "			<hostname>" & escape_xml(site_hostname) & "</hostname>" & vbcrlf
	server_item = server_item & "			<path>" & escape_xml(iis_path) & "</path>" & vbcrlf
	server_item = server_item & "			<size>" & escape_xml(site_size) & "</size>" & vbcrlf
	server_item = server_item & "			<instance>" & escape_xml(objItem.AppPoolId) & "</instance>" & vbcrlf
	server_item = server_item & "		</item>" & vbcrlf
	Next
	end if
end if

' now enumerate our servers and server items'
if server > "" then
	result.WriteText "	<server>" & vbcrlf
	result.WriteText server
	result.WriteText "	</server>" & vbcrlf
end if
if server_item > "" then
	result.WriteText "	<server_item>" & vbcrlf
	result.WriteText server_item
	result.WriteText "	</server_item>" & vbcrlf
end if


result.WriteText "	<software_key>" & vbcrlf

if debugging > "0" then wscript.echo "CD Keys" end if
win_cd_key = "n"

'''''''''''''''''''''''''''''''''''''''''''''''''
'   MS CD Keys for Windows 2000 onwards         '
'''''''''''''''''''''''''''''''''''''''''''''''''
if debugging > "1" then wscript.echo "Win 2000 Key" end if
path = "SOFTWARE\Microsoft\Windows NT\CurrentVersion"
subKey = "DigitalProductId"
oReg.GetBinaryValue HKEY_LOCAL_MACHINE,path,subKey,key
key_text = getkey(key, 1)
if (IsNull(key_text) or key_text = "") then
	' do nothing
else
	result.WriteText "		<item>" & vbcrlf
	result.WriteText "			<name>" & escape_xml(system_os_name) & "</name>" & vbcrlf
	result.WriteText "			<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "			<rel>" & escape_xml(windows_build_number) & "</rel>" & vbcrlf
	result.WriteText "			<edition>" & escape_xml(system_os_version) & "</edition>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf
	strOffXPRUKey = ""
	release_type = ""
	edition_type = ""
	win_cd_key = "y"
end if






'''''''''''''''''''''''''''''''''''''''''''''''''
'   MS CD Keys for Windows 64bit                '
'''''''''''''''''''''''''''''''''''''''''''''''''
if debugging > "1" then wscript.echo "Win 64bit Key" end if
if address_width = "64" then
	Subhive = "SOFTWARE\Microsoft\Windows NT\CurrentVersion"
	Set objCtx = CreateObject("WbemScripting.SWbemNamedValueSet")
	objCtx.Add "__ProviderArchitecture", 64
	objCtx.Add "__RequiredArchitecture", True
	Set objLocator = CreateObject("Wbemscripting.SWbemLocator")

	if ((struser <> "") and (instr(local_net, strcomputer) = 0)) then
	' Username & Password provided - assume not a domain local PC.
	Set objServices = objLocator.ConnectServer(strcomputer, "root\default", struser, strpass, "", "", wbemConnectFlagUseMaxWait, objCtx)
	else
	Set objServices = objLocator.ConnectServer(strcomputer, "root\default", "", "", "", "", wbemConnectFlagUseMaxWait, objCtx)
	end if
	Set o64reg = objServices.Get("StdRegProv")
	key_text = null
	Set Inparams = o64reg.Methods_("GetStringValue").Inparameters
	Inparams.Hdefkey = HKEY_LOCAL_MACHINE
	Inparams.Ssubkeyname = Subhive
	Inparams.Svaluename = "DigitalProductID"
	set Outparams = o64reg.ExecMethod_("GetBinaryValue", Inparams,,objCtx)
	key_text = getkey(Outparams.uValue, 1)
	if (IsNull(key_text) or (win_cd_key = "y") or (key_text = "")) then
	' do nothing
	else
	win_cd_key = "y"
	result.WriteText "		<item>" & vbcrlf
	result.WriteText "			<name>" & escape_xml(system_os_name) & "</name>" & vbcrlf
	result.WriteText "			<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "			<rel>" & escape_xml(windows_build_number) & "</rel>" & vbcrlf
	result.WriteText "			<edition>" & escape_xml(system_os_version) & "</edition>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf
	end if
	Inparams.Svaluename = "DigitalProductID4"
	set Outparams = o64reg.ExecMethod_("GetBinaryValue", Inparams,,objCtx)
	if IsNull(Outparams.uValue) then
	key_text = NULL
	else
	key_text = getkey(Outparams.uValue, 1)
	end if
	if (IsNull(key_text) or (win_cd_key = "y") or (key_text = "")) then
	' do nothing
	else
	win_cd_key = "y"
	result.WriteText "		<item>" & vbcrlf
	result.WriteText "			<name>" & escape_xml(system_os_name) & "</name>" & vbcrlf
	result.WriteText "			<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "			<rel>" & escape_xml(windows_build_number) & "</rel>" & vbcrlf
	result.WriteText "			<edition>" & escape_xml(system_os_version) & "</edition>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf
	end if
end if







''''''''''''''''''''''''''''''''
'   MS CD Keys for Office XP   '
''''''''''''''''''''''''''''''''
if debugging > "1" then wscript.echo "Office XP Key" end if
strKeyPath = "SOFTWARE\Microsoft\Office\10.0\Registration"
oReg.EnumKey HKEY_LOCAL_MACHINE, strKeyPath, arrSubKeys
if (not isnull(arrSubKeys)) then
	For Each subkey In arrSubKeys
	key_name = get_sku_xp(subkey)
	key_release = get_release_type(subkey)
	key_edition = get_edition_type(subkey)
	path = strKeyPath & "\" & subkey
	subKey = "DigitalProductId"
	oReg.GetBinaryValue HKEY_LOCAL_MACHINE,path,subKey,key
	if IsNull(key) then
	else
	key_text = getkey(key, 1)
	result.WriteText "		<item>" & vbcrlf
	result.WriteText "			<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "			<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "			<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "			<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
	end if
	next
end if

'''''''''''''''''''''''''''''''''''''
'   MS CD Keys for Office XP 64bit'
'''''''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Wow6432Node\Microsoft\Office\10.0\Registration"
oReg.EnumKey HKEY_LOCAL_MACHINE, strKeyPath, arrSubKeys
if (not isnull(arrSubKeys)) then
	For Each subkey In arrSubKeys
	key_name = get_sku_xp(subkey)
	key_release = get_release_type(subkey)
	key_edition = get_edition_type(subkey)
	path = strKeyPath & "\" & subkey
	subKey = "DigitalProductId"
	oReg.GetBinaryValue HKEY_LOCAL_MACHINE,path,subKey,key
	if IsNull(key) then
	' do nothing - no key retrieved
	else
	key_text = getkey(key, 1)
	result.WriteText "		<item>" & vbcrlf
	result.WriteText "			<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "			<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "			<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "			<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf
	key_name = ""
	key_text = ""
	key_release = ""
	key_edition = ""
	end if
	Next
end if

''''''''''''''''''''''''''''''''
'   MS CD Keys for Office 2003 '
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Microsoft\Office\11.0\Registration"
oReg.EnumKey HKEY_LOCAL_MACHINE, strKeyPath, arrSubKeys
if (not isnull(arrSubKeys)) then
	for each subkey In arrSubKeys
	key_name = get_sku_2003(subkey)
	key_release = get_release_type(subkey)
	key_edition = get_edition_type(subkey)
	path = strKeyPath & "\" & subkey
	subKey = "DigitalProductId"
	oReg.GetBinaryValue HKEY_LOCAL_MACHINE,path,subKey,key
	if IsNull(key) then
	' do nothing
	else
	key_text = getkey(key, 1)
	result.WriteText "		<item>" & vbcrlf
	result.WriteText "			<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "			<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "			<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "			<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
	end if
	next
end if

'''''''''''''''''''''''''''''''''''''
'   MS CD Keys for Office 2003 64bit'
'''''''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Wow6432Node\Microsoft\Office\11.0\Registration"
oReg.EnumKey HKEY_LOCAL_MACHINE, strKeyPath, arrSubKeys
if (not isnull(arrSubKeys)) then
	For Each subkey In arrSubKeys
	key_name = get_sku_2003(subkey)
	key_release = get_release_type(subkey)
	key_edition = get_edition_type(subkey)
	path = strKeyPath & "\" & subkey
	subKey = "DigitalProductId"
	oReg.GetBinaryValue HKEY_LOCAL_MACHINE,path,subKey,key
	if IsNull(key) then
	' do nothing - no key retrieved
	else
	key_text = getkey(key, 1)
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_name = ""
	key_text = ""
	key_release = ""
	key_edition = ""
	end if
	Next
end if

''''''''''''''''''''''''''''''''
'   MS CD Keys for Office 2007 '
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Microsoft\Office\12.0\Registration"
oReg.EnumKey HKEY_LOCAL_MACHINE, strKeyPath, arrSubKeys
if (not isnull(arrSubKeys)) then
	For Each subkey In arrSubKeys
	key_name = get_sku_2007(subkey)
	key_release = get_release_type(subkey)
	key_edition = get_edition_type(subkey)
	path = strKeyPath & "\" & subkey
	subKey = "DigitalProductId"
	oReg.GetBinaryValue HKEY_LOCAL_MACHINE,path,subKey,key
	if IsNull(key) then
	' do nothing
	else
	key_text = getkey(key, 1)
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
	end if
	Next
end if

'''''''''''''''''''''''''''''''''''''
'   MS CD Keys for Office 2007 64bit'
'''''''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Wow6432Node\Microsoft\Office\12.0\Registration"
oReg.EnumKey HKEY_LOCAL_MACHINE, strKeyPath, arrSubKeys
if (not isnull(arrSubKeys)) then
	For Each subkey In arrSubKeys
	key_name = get_sku_2007(subkey)
	key_release = get_release_type(subkey)
	key_edition = get_edition_type(subkey)
	path = strKeyPath & "\" & subkey
	subKey = "DigitalProductId"
	oReg.GetBinaryValue HKEY_LOCAL_MACHINE,path,subKey,key
	if IsNull(key) then
	' do nothing - no key retrieved
	else
	key_text = getkey(key, 1)
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_name = ""
	key_text = ""
	key_release = ""
	key_edition = ""
	end if
	Next
end if

''''''''''''''''''''''''''''''''
'   MS CD Keys for Office 2010 '
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Microsoft\Office\14.0\Registration"
oReg.EnumKey HKEY_LOCAL_MACHINE, strKeyPath, arrSubKeys
if (not isnull(arrSubKeys)) then
	For Each subkey In arrSubKeys
	key_name = get_sku_2010(subkey)
	key_release = get_release_type(subkey)
	key_edition = get_edition_type(subkey)
	path = strKeyPath & "\" & subkey
	subKey = "DigitalProductId"
	oReg.GetBinaryValue HKEY_LOCAL_MACHINE,path,subKey,key
	if IsNull(key) then
	' do nothing
	else
	key_text = getkey(key, 2)
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
	end if
	Next
end if

'''''''''''''''''''''''''''''''''''''
'   MS CD Keys for Office 2010 64bit'
'''''''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Wow6432Node\Microsoft\Office\14.0\Registration"
oReg.EnumKey HKEY_LOCAL_MACHINE, strKeyPath, arrSubKeys
if (not isnull(arrSubKeys)) then
	For Each subkey In arrSubKeys
	key_name = get_sku_2010(subkey)
	key_release = get_release_type(subkey)
	key_edition = get_edition_type(subkey)
	path = strKeyPath & "\" & subkey
	subKey = "DigitalProductId"
	oReg.GetBinaryValue HKEY_LOCAL_MACHINE,path,subKey,key
	if IsNull(key) then
	' do nothing - no key retrieved
	else
	key_text = getkey(key, 2)
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_name = ""
	key_text = ""
	key_release = ""
	key_edition = ""
	end if
	Next
end if

''''''''''''''''''''''''''''''''
'   MS CD Keys for Office 2013 '
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Microsoft\Office\15.0\Registration"
oReg.EnumKey HKEY_LOCAL_MACHINE, strKeyPath, arrSubKeys
if (not isnull(arrSubKeys)) then
	For Each subkey In arrSubKeys
	key_name = get_sku_2013(subkey)
	key_release = get_release_type(subkey)
	key_edition = get_edition_type(subkey)
	path = strKeyPath & "\" & subkey
	subKey = "DigitalProductId"
	oReg.GetBinaryValue HKEY_LOCAL_MACHINE,path,subKey,key
	if IsNull(key) then
	' do nothing
	else
	key_text = getkey(key, 2)
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
	end if
	Next
end if

'''''''''''''''''''''''''''''''''''''
'   MS CD Keys for Office 2013 64bit'
'''''''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Wow6432Node\Microsoft\Office\15.0\Registration"
oReg.EnumKey HKEY_LOCAL_MACHINE, strKeyPath, arrSubKeys
if (not isnull(arrSubKeys)) then
	For Each subkey In arrSubKeys
	key_name = get_sku_2013(subkey)
	key_release = get_release_type(subkey)
	key_edition = get_edition_type(subkey)
	path = strKeyPath & "\" & subkey
	subKey = "DigitalProductId"
	oReg.GetBinaryValue HKEY_LOCAL_MACHINE,path,subKey,key
	if IsNull(key) then
	' do nothing - no key retrieved
	else
	key_text = getkey(key, 2)
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_name = ""
	key_text = ""
	key_release = ""
	key_edition = ""
	end if
	Next
end if

''''''''''''''''''''''''''''''''
'    SQL Svr 2000              '
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Microsoft\Microsoft SQL Server\80\Registration"
key_name = "SQL Server 2000"
key_release = ""
key_edition = ""
subKey = "CD_Key"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''''
'    SQL Svr 2005              '
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Microsoft\Microsoft SQL Server\MSSQL.1\Setup"
key_edition = ""
subKey = "Edition"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_edition

strKeyPath = "SOFTWARE\Microsoft\Microsoft SQL Server\90\ProductID\"
key_name = "Microsoft SQL Server 2005"
key_release = ""
subKey = "DigitalProductID77556"
subKey = "DigitalProductID77591"
key_text = GetSN(strcomputer,HKEY_LOCAL_MACHINE,strKeyPath,subKey)
if (IsNull(key_text) or key_text = "") then
	strKeyPath = "SOFTWARE\Microsoft\Microsoft SQL Server\MSSQL10.MSSQLSERVER\Setup\"
	subKey = "DigitalProductID"
	key_text = GetSN(strcomputer,HKEY_LOCAL_MACHINE,strKeyPath,subKey)
	if (IsNull(key_text) or key_text = "") then
	' nothing returned
	else
	result.WriteText "      <item>" & vbcrlf
	result.WriteText "         <name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "         <string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "         <rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "         <edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "      </item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
	end if
else
	result.WriteText "      <item>" & vbcrlf
	result.WriteText "         <name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "         <string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "         <rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "         <edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "      </item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''''
'    SQL Svr 2008              '
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Microsoft\Microsoft SQL Server\100\Tools\Setup"
key_edition = ""
subKey = "Edition"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_edition

strKeyPath = "SOFTWARE\Microsoft\Microsoft SQL Server\100\Tools\Setup"
key_name = "SQL Server 2008"
key_release = ""
subKey = "DigitalProductID"
oReg.GetBinaryValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key
if IsNull(key) then
	' do nothing
else
	key_text = getkey(key, 1)
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if



''''''''''''''''''''''''''''''''
'    Visual Studio 2010        '
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Wow6432Node\Microsoft\VisualStudio\10.0\Registration"
key_name = "Microsoft Visual Studio 2010"
key_release = ""
key_edition = ""
subKey = "ProductID"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key
If IsNull(key) OR key = "" then
	strKeyPath = "SOFTWARE\Wow6432Node\Microsoft\VisualStudio\10.0\Registration\01018"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key
	if IsNull(key) OR key = "" then
	else
	key_text = key
	result.WriteText "      <item>" & vbcrlf
	result.WriteText "         <name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "         <string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "         <rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "         <edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "      </item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
	end if
else
	key_text = key
	result.WriteText "      <item>" & vbcrlf
	result.WriteText "         <name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "         <string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "         <rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "         <edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "      </item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''''
'    Visual Studio 2008        '
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Wow6432Node\Microsoft\VisualStudio\9.0\Registration"
key_name = "Microsoft Visual Studio 2008"
key_edition = ""
key_release = ""
subKey = "ProductID"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) or key_text = "" then
	' do nothing
else
	result.WriteText "      <item>" & vbcrlf
	result.WriteText "         <name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "         <string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "         <rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "         <edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "      </item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''''
'    Visual Studio 2005        '
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Wow6432Node\Microsoft\VisualStudio\8.0\Registration"
key_name = "Microsoft Visual Studio 2005"
key_edition = ""
key_release = ""
subKey = "ProductID"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) or key_text = "" then
	' do nothing
else
	result.WriteText "      <item>" & vbcrlf
	result.WriteText "         <name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "         <string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "         <rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "         <edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "      </item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if



'''''''''''''''''''''''''
' Adobe keys            '
'''''''''''''''''''''''''
' this will extract all keys for  Adobe licensed products from the sqlite database,
' which seems to be where the later versions store the keys
' Thanks to JBS in the Open-AudIT.org forums.
' http://www.open-audit.org/phpBB3/viewtopic.php?f=20&t=5993

if objFSO.FileExists("sqlite3.Exe") then

	if (strComputer = ".") then
	if objFSO.FileExists ("c:\Program Files\Common Files\Adobe\Adobe PCD\cache\cache.db") then
	dbfile = "c:\Program Files\Common Files\Adobe\Adobe PCD\cache\cache.db"
	db_present = 1
	elseif objFSO.FileExists ("c:\Program Files (x86)\Common Files\Adobe\Adobe PCD\cache\cache.db") then
	dbfile = "c:\Program Files (x86)\Common Files\Adobe\Adobe PCD\cache\cache.db"
	db_present = 1
	end if
	else
	if objFSO.FileExists ("\\" & strcomputer & "\c$\Program Files\Common Files\Adobe\Adobe PCD\cache\cache.db") then
	dbfile = "\\" & strcomputer & "\c$\Program Files\Common Files\Adobe\Adobe PCD\cache\cache.db"
	db_present = 1
	elseif objFSO.FileExists ("\\" & strcomputer & "\c$\Program Files (x86)\Common Files\Adobe\Adobe PCD\cache\cache.db") then
	dbfile = "\\" & strcomputer & "\c$\Program Files (x86)\Common Files\Adobe\Adobe PCD\cache\cache.db"
	db_present = 1
	end if
	end if

	if db_present then

	cmd = chr(34) & "sqlite3.exe" & chr(34) & " "   & chr(34) & dbfile & chr(34) & " " & chr(34) & "select T1.key,T2.value from domain_data AS T1 JOIN domain_data AS T2 on T1.Subdomain=T2.subdomain where T1.value='licensed' and (T2.Key='EPIC_SERIAL' OR T2.KEY='SN' OR T2.KEY='SERIAL')" & chr(34)

	set rexec= objShell.exec(cmd)
	do while not rexec.StdOut.AtEndofStream
	strtext = rexec.stdout.readline()
	'get rid of any line breaks and cr, then trim off any spaces
	strtext = replace(strtext,vbCr,"")
	strtext = replace(strtext,vbLf,"")
	strtext = trim(strtext)
	ArryTxt = split(strtext,"|")

	if (IsArray(ArryTxt)) then
	Product = ArryTxt(0)
	key_text = get_adobe(ArryTxt(1))
	else
	if (strtext > "") then
	Product = strtext
	key_text = get_adobe(strtext)
	else
	Product = ""
	key_text = ""
	end if
	end if

	' we dont necessarily get Adobe as part of the name so add it if it is not there
	if (instr(1,Product,"ADOBE",1) = 0) then
	Product = "Adobe_" & Product
	end if

	key_name = replace(Product,"_"," ")
	key_release = ""
	key_edition = "Licensed"
	if (key_name > "" and key_name <> "Adobe " and key_text > "") then
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	end if
	key_text = ""
	key_release = ""
	key_edition = ""
	loop
	else
	if debugging > "1" then wscript.echo "No Adobe license database found" end if
	end if
else
	if debugging > "1" then wscript.echo "sqlite3.exe not found" end if
end if




''''''''''''''''''''''''''''''''
' Adobe Illustrator 10.0 '
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Adobe\Illustrator\10\Registration"
key_name = "Adobe Illustrator 10.0"
key_edition = "10.0"
key_release = ""
subKey = "SERIAL"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if



''''''''''''''''''''''''''''''''
'    Adobe Photoshop 7.0       '
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Adobe\Photoshop\7.0\Registration"
key_name = "Adobe Photoshop 7"
key_edition = "7.0"
key_release = ""
subKey = "SERIAL"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''''
'    Adobe Photoshop 5.0 LE    '
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Microsoft\Windows\CurrentVersion\Uninstall\Adobe Photoshop 5.0 Limited Edition"
key_name = "Adobe Photoshop 5.0 LE"
key_edition = "5.0 LE"
key_release = ""
subKey = "ProductID"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if

''''''''''''''''''''''''''''''''
'    Adobe Acrobat 5           '
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Microsoft\Windows\CurrentVersion\Uninstall\Adobe Acrobat 5.0"
key_name = "Adobe Acrobat 5"
key_edition = "5.0"
key_release = ""
subKey = "ProductID"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''''
'Adobe Acrobat 6
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Adobe\Adobe Acrobat\6.0\Registration"
key_name = "Adobe Acrobat 6"
key_edition = "6.0"
key_release = ""
subKey = "SERIAL"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''''
' Adobe Acrobat 7              '
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Adobe\Adobe Acrobat\7.0\Registration"
key_name = "Adobe Acrobat 7"
key_edition = "7.0"
key_release = ""
subKey = "SERIAL"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key
if IsNull(key) then
	' do nothing
else
	key_text = get_adobe(key)
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''''
' Adobe Acrobat 8              '
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Adobe\Adobe Acrobat\8.0\Registration"
key_name = "Adobe Acrobat 8"
key_edition = "8.0"
key_release = ""
subKey = "SERIAL"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key
if IsNull(key) then
	' do nothing
else
	key_text = get_adobe(key)
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if

''''''''''''''''''''''''''''''''
' Adobe Acrobat 9              '
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Adobe\Adobe Acrobat\9.0\Registration"
key_name = "Adobe Acrobat 9"
key_edition = "9.0"
key_release = ""
subKey = "SERIAL"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key
if IsNull(key) then
	' do nothing
else
	key_text = get_adobe(key)
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if





''''''''''''''''''''''''''''''''
' Autocad 2004 LT
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Autodesk\AutoCAD LT\R9\ACLT-201:409"
key_name = "Autocad 2004 LT"
key_edition = "2004 LT"
key_release = ""
subKey = "SerialNumber"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if

''''''''''''''''''''''''''''''''
' Autocad 2005 LT
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Autodesk\AutoCAD LT\R10\ACLT-301:409"
key_name = "Autocad 2005 LT"
key_edition = "2005 LT"
key_release = ""
subKey = "SerialNumber"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if

''''''''''''''''''''''''''''''''
' Autocad 2006 LT
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Autodesk\AutoCAD LT\R11\ACLT-4001:409"
key_name = "Autocad 2006 LT"
key_edition = "2006 LT"
key_release = ""
subKey = "SerialNumber"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''''
' Autocad 2007
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Autodesk\AutoCAD\R17.0\ACAD-5001:409"
key_name = "AutoCAD 2007"
key_edition = ""
key_release = ""
subKey = "SerialNumber"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	subKey = "Release"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_release
	subKey = "ProductId"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_edition
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''''
' Autocad 2008 (1)
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Autodesk\AutoCAD\R17.1\ACAD-6001:409"
key_name = "AutoCAD 2008"
key_edition = ""
key_release = ""
subKey = "SerialNumber"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	subKey = "Release"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_release
	subKey = "ProductId"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_edition
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''''
' Autocad 2008 (2)
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Autodesk\AutoCAD\R17.1\ACAD-6014:409"
key_name = "AutoCAD 2008 "
key_edition = ""
key_release = ""
subKey = "SerialNumber"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	subKey = "Release"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_release
	subKey = "ProductId"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_edition
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''''
' Autocad 2008 LT
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Autodesk\AutoCAD LT\R13\ACLT-6001:409"
key_name = "AutoCAD 2008 LT"
key_edition = ""
key_release = ""
subKey = "SerialNumber"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	subKey = "Release"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_release
	subKey = "ProductId"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_edition
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''''
' Autocad 2009
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Autodesk\AutoCAD\R17.2\ACAD-7001:409"
key_name = "AutoCAD 2009"
key_edition = ""
key_release = ""
subKey = "SerialNumber"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	subKey = "Release"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_release
	subKey = "ProductId"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_edition
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''
' Autocad 2009 LT
''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Autodesk\AutoCAD LT\R14\ACADLT-7001:409"
key_name = "AutoCAD 2009 LT"
key_edition = ""
key_release = ""
subKey = "SerialNumber"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	subKey = "Release"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_release
	subKey = "ProductId"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_edition
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''''
' Autocad 2010 (1)
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Autodesk\AutoCAD\R18.0\ACAD-8005:40C"
key_name = "AutoCAD 2010"
key_edition = "2010"
key_release = ""
subKey = "SerialNumber"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	subKey = "Release"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_release
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if




''''''''''''''''''''''''''''''''
' Autocad 2010 (2)
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Autodesk\AutoCAD\R18.0\ACAD-8001:409"
key_name = "AutoCAD 2010 "
key_edition = "2010"
key_release = ""
subKey = "SerialNumber"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	subKey = "Release"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_release
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if




''''''''''''''''''''''''''''''''
' Autocad 2011
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Autodesk\AutoCAD\R18.1\ACAD-9001:409"
key_name = "AutoCAD 2011"
key_edition = "2011"
key_release = ""
subKey = "SerialNumber"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	subKey = "Release"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_release
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if



''''''''''''''''''''''''''''''''
' Inventor 2008
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Autodesk\Inventor\RegistryVersion10.0"
key_name = "Inventor 2008"
key_edition = "2008"
key_release = ""
subKey = "SerialNumberPrefix"
oReg.GetStringValue HKEY_LOCAL_MACHINE, strKeyPath, subKey, key1
subKey = "SerialNumberSuffix"
oReg.GetStringValue HKEY_LOCAL_MACHINE, strKeyPath, subKey, key2
key_text = key1 & "-" & key2
if IsNull(key_text) or key_text = "-" then
	' do nothing
else
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''''
' SolidWorks 2008
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\SolidWorks\Security"
key_name = "SolidWorks 2008"
key_edition = "2008"
key_release = ""
subKey = "Serial Number"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if

''''''''''''''''''''''''''''''''
' MathCAD 2008
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Mathsoft\Mathcad 14\Install"
key_name = "MathCAD 2008"
key_edition = "2008"
key_release = ""
on error resume next
subKey = "SERIALNUMBER1"
oReg.GetStringValue HKEY_LOCAL_MACHINE, Path, subKey, key1
subKey = "SERIALNUMBER2"
oReg.GetStringValue HKEY_LOCAL_MACHINE, Path, subKey, key2
subKey = "SERIALNUMBER3"
oReg.GetStringValue HKEY_LOCAL_MACHINE, Path, subKey, key3
key_text = key1 & "-" & key2 & "-" & key3
On Error goto 0
if IsNull(key_text) or key_text = "--" then
	' do nothing
else
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''''
' Crystal Reports 9
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Crystal Decisions\9.0\Crystal Reports\Keycodes"
oReg.EnumKey HKEY_LOCAL_MACHINE, strKeyPath, arrSubKeys
if IsNull(arrSubKeys) then
	' do nothing
else
	For Each subkey In arrSubKeys
	key_name = "Crystal Reports 9.0 " & subkey
	key_release = ""
	key_edition = subkey
	path = strKeyPath & "\" & subkey
	subKey = ""
	oReg.GetStringValue HKEY_LOCAL_MACHINE,Path,subKey,key_text
	if IsNull(key_text) then
	' do nothing
	else
	key_text = Mid(key_text,3,21)
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
	 end if
	Next
end if



''''''''''''''''''''''''''''''''
' Crystal Reports 11
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Business Objects\Suite 11.0\Crystal Reports"
key_name = "Crystal Reports 11"
key_edition = "11"
key_release = ""
subKey = "PIDKEY"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	subKey = "Version"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_release
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "		<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "		<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "		<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "		<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if







''''''''''''''''''''''''''''''''
' PowerDVD
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\CyberLink\PowerDVD"
key_name = "PowerDVD "
key_edition = ""
key_release = ""
subKey = "CDKey"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	subKey = "Version"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_release
	key_name = key_name & key_release
	subKey = "VType"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_edition
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "		<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "		<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "		<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "		<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if



''''''''''''''''''''''''''''''''
' Nero 6
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Ahead\Nero - Burning Rom\Info"
key_name = "Nero Burning Rom 6.0"
key_edition = ""
key_release = "6.0"
subKey = "Serial6"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "		<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "		<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "		<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "		<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''''
' VMWare Workstation 4
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\VMware, Inc.\VMware Workstation\License.ws.4.0"
key_name = "VMWare Workstation 4"
key_edition = ""
key_release = "4.0"
subKey = "Serial"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "		<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "		<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "		<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "		<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''''
' VMWare Workstation 5
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\VMware, Inc.\VMware Workstation\License.ws.5.0"
key_name = "VMWare Workstation 5"
key_edition = ""
key_release = "5.0"
subKey = "Serial"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "		<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "		<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "		<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "		<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''''
' VMWare Workstation 6
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Vmware, Inc.\Vmware Workstation\License.ws.6.0.200610"
key_name = "VMWare Workstation 6"
key_edition = ""
key_release = "6.0"
subKey = "Serial"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	subKey = "LicenseVersion"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_release
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "		<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "		<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "		<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "		<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''''
' VMWare Workstation 6
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Vmware, Inc.\Vmware Workstation\License.ws.6.0.200907"
key_name = "VMWare Workstation 6"
key_edition = ""
key_release = "6.0"
subKey = "Serial"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	subKey = "LicenseVersion"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_release
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "		<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "		<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "		<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "		<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''''
' VMWare Workstation 7
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\VMware, Inc.\VMware Workstation\License.ws.7.0.e1.200904"
key_name = "VMWare Workstation 7"
key_edition = ""
key_release = "7.0.1.227600"
subKey = "Serial"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	subKey = "LicenseVersion"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_release
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "		<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "		<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "		<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "		<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''''
' TeamViewer 5
''''''''''''''''''''''''''''''''
strKeyPath = "Software\TeamViewer\Version5"
key_name = "TeamViewer 5"
key_edition = ""
key_release = "5"
subKey = "ClientID"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	subKey = "LicenseVersion"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_release
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "		<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "		<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "		<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "		<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


strKeyPath = "Software\Wow6432Node\TeamViewer\Version5"
key_name = "TeamViewer 5"
key_edition = ""
key_release = "5"
subKey = "ClientID"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	subKey = "LicenseVersion"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_release
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "		<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "		<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "		<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "		<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''''
' TeamViewer 6
''''''''''''''''''''''''''''''''
strKeyPath = "Software\TeamViewer\Version6"
key_name = "TeamViewer 6"
key_edition = ""
key_release = "6"
subKey = "ClientID"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	subKey = "LicenseVersion"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_release
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "		<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "		<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "		<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "		<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "		</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


strKeyPath = "Software\Wow6432Node\TeamViewer\Version6"
key_name = "TeamViewer 6"
key_edition = ""
key_release = "6"
subKey = "ClientID"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	subKey = "LicenseVersion"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_release
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "		<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "		<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "		<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "		<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''''
' TeamViewer 7
''''''''''''''''''''''''''''''''
strKeyPath = "Software\TeamViewer\Version7"
key_name = "TeamViewer 7"
key_edition = ""
key_release = "7"
subKey = "ClientID"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	subKey = "LicenseVersion"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_release
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "		<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "		<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "		<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "		<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


strKeyPath = "Software\Wow6432Node\TeamViewer\Version7"
key_name = "TeamViewer 7"
key_edition = ""
key_release = "7"
subKey = "ClientID"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	subKey = "LicenseVersion"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_release
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "		<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "		<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "		<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "		<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


''''''''''''''''''''''''''''''''
' TeamViewer 8
''''''''''''''''''''''''''''''''
strKeyPath = "Software\TeamViewer\Version8"
key_name = "TeamViewer 8"
key_edition = ""
key_release = "8"
subKey = "ClientID"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	subKey = "LicenseVersion"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_release
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "		<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "		<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "		<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "		<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if


strKeyPath = "Software\Wow6432Node\TeamViewer\Version8"
key_name = "TeamViewer 8"
key_edition = ""
key_release = "8"
subKey = "ClientID"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) then
	' do nothing
else
	subKey = "LicenseVersion"
	oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_release
	result.WriteText "	<item>" & vbcrlf
	result.WriteText "		<name>" & escape_xml(key_name) & "</name>" & vbcrlf
	result.WriteText "		<string>" & escape_xml(key_text) & "</string>" & vbcrlf
	result.WriteText "		<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
	result.WriteText "		<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
	result.WriteText "	</item>" & vbcrlf
	key_text = ""
	key_release = ""
	key_edition = ""
end if

''''''''''''''''''''''''''''''''
' Snag It '
''''''''''''''''''''''''''''''''
strKeyPath = "SOFTWARE\Wow6432Node\TechSmith\SnagIt\11\"
key_name = "Snagit 11"
key_edition = ""
key_release = ""
subKey = "RegistrationKey"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) or key_text = "" then
   ' do nothing
else
   key_text = AddDashes(key_text, 5)
   result.WriteText " <item>" & vbcrlf
   result.WriteText " 	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
   result.WriteText " 	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
   result.WriteText " 	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
   result.WriteText " 	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
   result.WriteText " </item>" & vbcrlf
   key_text = ""
   key_release = ""
   key_edition = ""
end if

strKeyPath = "SOFTWARE\TechSmith\SnagIt\11\"
key_name = "Snagit 11"
key_edition = ""
key_release = ""
subKey = "RegistrationKey"
oReg.GetStringValue HKEY_LOCAL_MACHINE,strKeyPath,subKey,key_text
if IsNull(key_text) or key_text = "" then
   ' do nothing
else
   key_text = AddDashes(key_text, 5)
   result.WriteText " <item>" & vbcrlf
   result.WriteText " 	<name>" & escape_xml(key_name) & "</name>" & vbcrlf
   result.WriteText " 	<string>" & escape_xml(key_text) & "</string>" & vbcrlf
   result.WriteText " 	<rel>" & escape_xml(key_release) & "</rel>" & vbcrlf
   result.WriteText " 	<edition>" & escape_xml(key_edition) & "</edition>" & vbcrlf
   result.WriteText " </item>" & vbcrlf
   key_text = ""
   key_release = ""
   key_edition = ""
end if

result.WriteText "	</software_key>" & vbcrlf

if ((run_netstat = "y") or (run_netstat = "s" and instr(lcase(system_os_name), "server"))) then
	if debugging > "0" then wscript.echo "netstat info" end if
	cmd = "netstat -abn"
	on error resume next
	set rexec = objShell.exec(cmd)
	on error goto 0
	old_line = ""
	new_line = ""
	if (isobject(rexec)) then
		result.WriteText "	<netstat>" & vbcrlf
		result.WriteText "	<![CDATA["
		do while not rexec.StdOut.AtEndofStream
			strtext = rexec.stdout.readline()
			if (instr(strtext, "Active Connections") or instr(strtext, "Proto  Local Address")) then
				' do noting - these are header lines
			else
				if ((instr(strtext, "  TCP") = 1) or (instr(strtext, "  UDP") = 1)) then
					' we have a new line, write out the old line
					if (instr(old_line, "LISTENING") or instr(old_line, "  UDP") = 1) then
						' only write out the line if it's a "listening" port
						result.WriteText old_line & vbcrlf
					end if
					old_line = strText
				else
					' we have to add on to the previous line
					old_line = old_line & " " & strText
				end if
			end if
		loop
		result.WriteText "]]>" & vbcrlf
		result.WriteText "	</netstat>" & vbcrlf
	end if
end if


' NOTE - Have moved to end of audit incase processing fails.
'        The rest of the audit data should be processed fine.

'function route()
' below only checks when OS is XP or later (not 2000 or NT)
if (windows_build_number > 2195) then
	if debugging > "0" then wscript.echo "network routing info" end if
	result.WriteText "	<route>" & vbcrlf
	set colItems = objWMIService.ExecQuery("Select * from Win32_IP4RouteTable",,32)
	error_returned = Err.Number : if (error_returned <> 0 and debugging > "0") then wscript.echo check_wbem_error(error_returned) & " (Win32_IP4RouteTable)" : audit_wmi_fails = audit_wmi_fails & "Win32_IP4RouteTable " : end if
	for each objItem in colItems
	  Protocol = objItem.Protocol
	  select case  Protocol
		case "1"  Protocol = "Other"
		case "2"  Protocol = "Local"
		case "3"  Protocol = "Netmgmt"
		case "4"  Protocol = "icmp"
		case "5"  Protocol = "egp"
		case "6"  Protocol = "ggp"
		case "7"  Protocol = "hello"
		case "8"  Protocol = "rip"
		case "9"  Protocol = "is-is"
		case "10" Protocol = "es-is"
		case "11" Protocol = "CiscoIgrp"
		case "12" Protocol = "bbnSpfIgp"
		case "13" Protocol = "ospf"
		case "14" Protocol = "bgp"
		case else Protocol = "unknown"
		end select
		RouteType = objItem.Type
		select case  RouteType
		case "1"  RouteType = "Other"
		case "2"  RouteType = "Invalid"
		case "3"  RouteType = "Direct"
		case "4"  RouteType = "Indirect"
		case else RouteType = "unknown"
	end select
	ip_hit = "0"
	for i = 1 to ubound(ip_address_array)
	if (objItem.NextHop = ip_address_array(i))  then
	ip_hit = "1"
	end if
	next
	if ( (ip_hit = "1") or (objItem.NextHop = "127.0.0.1") ) then
	' do nothing
	else
	  result.WriteText "		<item>" & vbcrlf
	  result.WriteText "			<destination>" & objItem.Destination & "</destination>" & vbcrlf
	  result.WriteText "			<mask>" & objItem.Mask & "</mask>" & vbcrlf
	  result.WriteText "			<metric>" & objItem.Metric1 & "</metric>" & vbcrlf
	  result.WriteText "			<next_hop>" & objItem.NextHop & "</next_hop>" & vbcrlf
	  result.WriteText "			<protocol>" & Protocol & "</protocol>" & vbcrlf
	  result.WriteText "			<type>" & RouteType & "</type>" & vbcrlf
	  result.WriteText "		</item>" & vbcrlf
	  end if
	  ip_hit = "0"
	next
	result.WriteText "	</route>" & vbcrlf
end if
'end function

' List all the WMI failed calls
if audit_wmi_fails > "" then
	result.WriteText "	<audit_wmi_fail>" & vbcrlf
	result.WriteText "	<audit_wmi_fails>" & audit_wmi_fails & "</audit_wmi_fails>" & vbcrlf
	result.WriteText "	</audit_wmi_fail>" & vbcrlf
end if












'end of the audit
result.WriteText "</system>"
audit_time = Timer
elapsed_time = audit_time - start_time
if debugging > "0" then wscript.echo "Audit Generated in " & int(elapsed_time) & " seconds." end if

if create_file = "y" then
	if debugging > "0" then wscript.echo "Creating output File" end if
	' Write the results to a file
	file_timestamp = Year(dt) & Right("0" & Month(dt),2) & Right("0" & Day(dt),2) & Right("0" & Hour(dt),2) & Right("0" & Minute(dt),2) & Right("0" & Second(dt),2)
	OutputFile = system_hostname & "-" & file_timestamp & ".txt"
	if debugging > "0" then wscript.echo "Output file: " & OutputFile end if
	Err.clear
	on error resume next
	result.position = 0
	result.SaveToFile OutputFile, 2 ' Overwrites the file with the data from the currently open Stream object, if the file already exists
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

if submit_online = "y" then
   if debugging > "0" then wscript.echo "Submitting audit online" end if
   Err.clear
   Set objHTTP = WScript.CreateObject("MSXML2.ServerXMLHTTP.3.0")
   objHTTP.setTimeouts 5000, 5000, 5000, 480000
   objHTTP.SetOption 2, 13056  ' Ignore all SSL errors
   On Error Resume Next
   objHTTP.Open "POST", url, False
   aErr = Array(Err.Number, Err.Description)
   On Error GoTo 0
    If 0 = aErr(0) Then
      result.position = 0
      On Error Resume Next
      objHTTP.setRequestHeader "Content-Type","application/x-www-form-urlencoded"
      objHTTP.Send "form_systemXML=" + urlEncode(result.ReadText()) + vbcrlf
      aErr = Array(Err.Number, Err.Description)
      On Error GoTo 0
      Select Case True
	      Case 0 <> aErr(0)
	         if debugging > "0" then
	            wscript.echo "Error with http request. Audit not submitted."
	         end if
	         if debugging > "1" then
	            wscript.echo "HTTP Error: " & aErr(0)
	            wscript.echo "HTTP Status: " &  aErr(1)
	         end if
	         responseAvailable = False
	      Case 200 = objHTTP.status
	         if debugging > "0" then wscript.echo "Audit Submitted" end if
	         responseAvailable = True
	      Case Else
	         if debugging > "0" then wscript.echo "Error with http request(2). Audit not submitted." end if
	         responseAvailable = True
      End Select

      if responseAvailable = True then
         if (objHTTP.ResponseText > "" and debugging > "1") then
            wscript.echo
            wscript.echo
            wscript.echo "Response"
            wscript.echo "--------"
            wscript.echo objHTTP.ResponseText
            if (inStr(objHTTP.ResponseText, "error")) then
               wscript.sleep 50000
            end if
         end if
      end if
   else
      if debugging > "0" then
         wscript.echo "Error opening http url. Audit not submitted."
      end if
      if debugging > "1" then
         wscript.echo "HTTP Error: " & aErr(0)
         wscript.echo "HTTP Description: " &  aErr(1)
      end if
   end if
end if

end_time = Timer
elapsed_time = end_time - start_time

if debugging > "0" then wscript.echo "Total Execution Time: " & int(elapsed_time) & " seconds." end if
wscript.sleep 2000

if self_delete = "y" then
	objFSO.DeleteFile WScript.ScriptFullName
end if

wscript.quit





Function urlEncode(sString)
	Dim nIndex, aCode, theString
	Set theString = CreateObject("ADODB.Stream")
	theString.Type = 2
	theString.Open
	theString.Position = 0
	For nIndex = 1 to Len(sString)
	aCode = AscW(Mid(sString,nIndex,1))
	'convert from twos complement
	If aCode < 0 Then
	aCode = 65536 + aCode
	End If
	If ((aCode >= 48 and aCode <= 57) or (aCode >= 65 and aCode <=90) or (aCode >= 97 and aCode <= 122)) then
	' Alphanumerics
	theString.WriteText Chr(aCode)
	elseif (aCode = 45 or aCode = 46 or aCode = 95 or aCode = 126) then
	' Following characters: - / . / _ / ~
	theString.WriteText Chr(aCode)
	elseif (aCode < 16) then
	theString.WriteText "%0" & Hex(aCode)
	elseif (aCode < 128) then
	theString.WriteText "%" & Hex(aCode)
	elseif (aCode < 2048) then
	theString.WriteText "%" & hex(((aCode) \ 2^6) or 192)
  	theString.WriteText "%" & hex(((aCode and 63)) or 128)
	elseif (aCode < 65536) then
	theString.WriteText "%" & hex(((aCode) \ 2^12) or 224)
	theString.WriteText "%" & hex(((aCode and 4032) \ 2^6) or 128)
	theString.WriteText "%" & hex(((aCode and 63)) or 128)
	end if
	Next
	theString.position = 0
	urlEncode = theString.ReadText()
End Function


function escape_xml(ByVal data)
	if IsNull(data) then
	escape_xml = ""
	else
	data = replace(data, chr(174), "")
	if (instr(data, "&") or instr(data, "<") or instr(data, ">") or instr(data, """") or instr(data, "'")) then
	escape_xml = "<![CDATA[" & trim(data) & "]]>"
	else
	escape_xml = trim(data)
	end if
	end if
end function

function escape_wmi(ByVal data)
	if IsNull(data) then
	escape_wmi = ""
	else
	escape_wmi = replace(data, "'", "\'")
	end if
end function

function form_factor(system_form_factor)
	if system_form_factor = "1" then system_form_factor = "Other" end if
	if system_form_factor = "2" then system_form_factor = "Unknown" end if
	if system_form_factor = "3" then system_form_factor = "Desktop" end if
	if system_form_factor = "4" then system_form_factor = "Low Profile Desktop" end if
	if system_form_factor = "5" then system_form_factor = "Pizza Box" end if
	if system_form_factor = "6" then system_form_factor = "Mini Tower" end if
	if system_form_factor = "7" then system_form_factor = "Tower" end if
	if system_form_factor = "8" then system_form_factor = "Portable" end if
	if system_form_factor = "9" then system_form_factor = "Laptop" end if
	if system_form_factor = "10" then system_form_factor = "Notebook" end if
	if system_form_factor = "11" then system_form_factor = "Hand Held" end if
	if system_form_factor = "12" then system_form_factor = "Docking Station" end if
	if system_form_factor = "13" then system_form_factor = "All in One" end if
	if system_form_factor = "14" then system_form_factor = "sub Notebook" end if
	if system_form_factor = "15" then system_form_factor = "Space-Saving" end if
	if system_form_factor = "16" then system_form_factor = "Lunch Box" end if
	if system_form_factor = "17" then system_form_factor = "Main System Chassis" end if
	if system_form_factor = "18" then system_form_factor = "Expansion Chassis" end if
	if system_form_factor = "19" then system_form_factor = "SubChassis" end if
	if system_form_factor = "20" then system_form_factor = "Bus Expansion Chassis" end if
	if system_form_factor = "21" then system_form_factor = "Peripheral Chassis" end if
	if system_form_factor = "22" then system_form_factor = "Storage Chassis" end if
	if system_form_factor = "23" then system_form_factor = "Rack Mount Chassis" end if
	if system_form_factor = "24" then system_form_factor = "Sealed-case PC"  end if
	form_factor = system_form_factor
end function


function os_family(os)
	os = replace(os, chr(160), " ")
	if InStr(os, " 95")        then os_family="Windows 95"
	if InStr(os, " 98")        then os_family="Windows 98"
	if InStr(os, " NT")        then os_family="Windows NT"
	if InStr(os, "2000")       then os_family="Windows 2000"
	if InStr(os, " XP")        then os_family="Windows XP"
	if InStr(os, "2003")       then os_family="Windows 2003"
	if InStr(os, "Vista")      then os_family="Windows Vista"
	if InStr(os, "2008")       then os_family="Windows 2008"
	if InStr(os, "Windows 7")  then os_family="Windows 7"
	if InStr(os, "Windows 8")  then os_family="Windows 8"
	if InStr(os, "2012")       then os_family="Windows 2012"
	if InStr(os, "Windows 10") then os_family="Windows 10"
end function


function WMIDateStringToDate(dtmDate)
	WMIDateStringToDate = CDate(Mid(dtmDate, 5, 2) & "/" & _
	Mid(dtmDate, 7, 2) & "/" & Left(dtmDate, 4) _
	& " " & Mid (dtmDate, 9, 2) & ":" & Mid(dtmDate, 11, 2) & ":" & Mid(dtmDate,13, 2))
end function


function WMINetConnectorStatus(status)
	if status = 0 then WMINetConnectorStatus = "Disconnected" end if
	if status = 1 then WMINetConnectorStatus = "Connecting" end if
	if status = 2 then WMINetConnectorStatus = "Connected" end if
	if status = 3 then WMINetConnectorStatus = "Disconnecting" end if
	if status = 4 then WMINetConnectorStatus = "Hardware not present" end if
	if status = 5 then WMINetConnectorStatus = "Hardware disabled" end if
	if status = 6 then WMINetConnectorStatus = "Hardware malfunction" end if
	if status = 7 then WMINetConnectorStatus = "Media disconnected" end if
	if status = 8 then WMINetConnectorStatus = "Authenticating" end if
	if status = 9 then WMINetConnectorStatus = "Authentication succeeded" end if
	if status = 10 then WMINetConnectorStatus = "Authentication failed" end if
	if status = 11 then WMINetConnectorStatus = "Invalid address" end if
	if status = 12 then WMINetConnectorStatus = "Credentials required" end if
end function


function WMIOSLanguage(lang)
	if lang = "1" then WMIOSLanguage = "Arabic" end if
	if lang = "4" then WMIOSLanguage = "Chinese (Simplified)– China" end if
	if lang = "9" then WMIOSLanguage = "English" end if
	if lang = "1025" then WMIOSLanguage = "Arabic - Saudi Arabia" end if
	if lang = "1026" then WMIOSLanguage = "Bulgarian" end if
	if lang = "1027" then WMIOSLanguage = "Catalan" end if
	if lang = "1028" then WMIOSLanguage = "Chinese (Traditional) - Taiwan" end if
	if lang = "1029" then WMIOSLanguage = "Czech" end if
	if lang = "1030" then WMIOSLanguage = "Danish" end if
	if lang = "1031" then WMIOSLanguage = "German – Germany" end if
	if lang = "1032" then WMIOSLanguage = "Greek" end if
	if lang = "1033" then WMIOSLanguage = "English - United States" end if
	if lang = "1034" then WMIOSLanguage = "Spanish - Traditional Sort" end if
	if lang = "1035" then WMIOSLanguage = "Finnish" end if
	if lang = "1036" then WMIOSLanguage = "French - France" end if
	if lang = "1037" then WMIOSLanguage = "Hebrew" end if
	if lang = "1038" then WMIOSLanguage = "Hungarian" end if
	if lang = "1039" then WMIOSLanguage = "Icelandic" end if
	if lang = "1040" then WMIOSLanguage = "Italian - Italy" end if
	if lang = "1041" then WMIOSLanguage = "Japanese" end if
	if lang = "1042" then WMIOSLanguage = "Korean" end if
	if lang = "1043" then WMIOSLanguage = "Dutch - Netherlands" end if
	if lang = "1044" then WMIOSLanguage = "Norwegian - Bokmal" end if
	if lang = "1045" then WMIOSLanguage = "Polish" end if
	if lang = "1046" then WMIOSLanguage = "Portuguese - Brazil" end if
	if lang = "1047" then WMIOSLanguage = "Rhaeto-Romanic" end if
	if lang = "1048" then WMIOSLanguage = "Romanian" end if
	if lang = "1049" then WMIOSLanguage = "Russian" end if
	if lang = "1050" then WMIOSLanguage = "Croatian" end if
	if lang = "1051" then WMIOSLanguage = "Slovak" end if
	if lang = "1052" then WMIOSLanguage = "Albanian" end if
	if lang = "1053" then WMIOSLanguage = "Swedish" end if
	if lang = "1054" then WMIOSLanguage = "Thai" end if
	if lang = "1055" then WMIOSLanguage = "Turkish" end if
	if lang = "1056" then WMIOSLanguage = "Urdu" end if
	if lang = "1057" then WMIOSLanguage = "Indonesian" end if
	if lang = "1058" then WMIOSLanguage = "Ukrainian" end if
	if lang = "1059" then WMIOSLanguage = "Belarusian" end if
	if lang = "1060" then WMIOSLanguage = "Slovenian" end if
	if lang = "1061" then WMIOSLanguage = "Estonian" end if
	if lang = "1062" then WMIOSLanguage = "Latvian" end if
	if lang = "1063" then WMIOSLanguage = "Lithuanian" end if
	if lang = "1065" then WMIOSLanguage = "Persian" end if
	if lang = "1066" then WMIOSLanguage = "Vietnamese" end if
	if lang = "1069" then WMIOSLanguage = "Basque" end if
	if lang = "1070" then WMIOSLanguage = "Serbian" end if
	if lang = "1071" then WMIOSLanguage = "Macedonian (FYROM)" end if
	if lang = "1072" then WMIOSLanguage = "Sutu" end if
	if lang = "1073" then WMIOSLanguage = "Tsonga" end if
	if lang = "1074" then WMIOSLanguage = "Tswana" end if
	if lang = "1076" then WMIOSLanguage = "Xhosa" end if
	if lang = "1077" then WMIOSLanguage = "Zulu" end if
	if lang = "1078" then WMIOSLanguage = "Afrikaans" end if
	if lang = "1080" then WMIOSLanguage = "Faeroese" end if
	if lang = "1081" then WMIOSLanguage = "Hindi" end if
	if lang = "1082" then WMIOSLanguage = "Maltese" end if
	if lang = "1084" then WMIOSLanguage = "Gaelic" end if
	if lang = "1085" then WMIOSLanguage = "Yiddish" end if
	if lang = "1086" then WMIOSLanguage = "Malay - Malaysia" end if
	if lang = "2049" then WMIOSLanguage = "Arabic - Iraq" end if
	if lang = "2052" then WMIOSLanguage = "Chinese (Simplified) – PRC" end if
	if lang = "2055" then WMIOSLanguage = "German - Switzerland" end if
	if lang = "2057" then WMIOSLanguage = "English - United Kingdom" end if
	if lang = "2058" then WMIOSLanguage = "Spanish - Mexico" end if
	if lang = "2060" then WMIOSLanguage = "French - Belgium" end if
	if lang = "2064" then WMIOSLanguage = "Italian - Switzerland" end if
	if lang = "2067" then WMIOSLanguage = "Dutch - Belgium" end if
	if lang = "2068" then WMIOSLanguage = "Norwegian - Nynorsk" end if
	if lang = "2070" then WMIOSLanguage = "Portuguese - Portugal" end if
	if lang = "2072" then WMIOSLanguage = "Romanian - Moldova" end if
	if lang = "2073" then WMIOSLanguage = "Russian - Moldova" end if
	if lang = "2074" then WMIOSLanguage = "Serbian - Latin" end if
	if lang = "2077" then WMIOSLanguage = "Swedish - Finland" end if
	if lang = "3073" then WMIOSLanguage = "Arabic - Egypt" end if
	if lang = "3076" then WMIOSLanguage = "Chinese (Traditional) Hong Kong SAR" end if
	if lang = "3079" then WMIOSLanguage = "German - Austria" end if
	if lang = "3081" then WMIOSLanguage = "English - Australia" end if
	if lang = "3082" then WMIOSLanguage = "Spanish - International Sort" end if
	if lang = "3084" then WMIOSLanguage = "French - Canada" end if
	if lang = "3098" then WMIOSLanguage = "Serbian - Cyrillic" end if
	if lang = "4097" then WMIOSLanguage = "Arabic - Libya" end if
	if lang = "4100" then WMIOSLanguage = "Chinese (Simplified) Singapore" end if
	if lang = "4103" then WMIOSLanguage = "German - Luxembourg" end if
	if lang = "4105" then WMIOSLanguage = "English - Canada" end if
	if lang = "4106" then WMIOSLanguage = "Spanish - Guatemala" end if
	if lang = "4108" then WMIOSLanguage = "French - Switzerland" end if
	if lang = "5121" then WMIOSLanguage = "Arabic - Algeria" end if
	if lang = "5127" then WMIOSLanguage = "German - Liechtenstein" end if
	if lang = "5129" then WMIOSLanguage = "English - New Zealand" end if
	if lang = "5130" then WMIOSLanguage = "Spanish - Costa Rica" end if
	if lang = "5132" then WMIOSLanguage = "French - Luxembourg" end if
	if lang = "6145" then WMIOSLanguage = "Arabic - Morocco" end if
	if lang = "6153" then WMIOSLanguage = "English - Ireland" end if
	if lang = "6154" then WMIOSLanguage = "Spanish - Panama" end if
	if lang = "7169" then WMIOSLanguage = "Arabic - Tunisia" end if
	if lang = "7177" then WMIOSLanguage = "English - South Africa" end if
	if lang = "7178" then WMIOSLanguage = "Spanish - Dominican Republic" end if
	if lang = "8193" then WMIOSLanguage = "Arabic - Oman" end if
	if lang = "8201" then WMIOSLanguage = "English - Jamaica" end if
	if lang = "8202" then WMIOSLanguage = "Spanish - Venezuela" end if
	if lang = "9217" then WMIOSLanguage = "Arabic - Yemen" end if
	if lang = "9226" then WMIOSLanguage = "Spanish - Colombia" end if
	if lang = "10241" then WMIOSLanguage = "Arabic - Syria" end if
	if lang = "10249" then WMIOSLanguage = "English - Belize" end if
	if lang = "10250" then WMIOSLanguage = "Spanish - Peru" end if
	if lang = "11265" then WMIOSLanguage = "Arabic - Jordan" end if
	if lang = "11273" then WMIOSLanguage = "English - Trinidad" end if
	if lang = "11274" then WMIOSLanguage = "Spanish - Argentina" end if
	if lang = "12289" then WMIOSLanguage = "Arabic - Lebanon" end if
	if lang = "12298" then WMIOSLanguage = "Spanish - Ecuador" end if
	if lang = "13313" then WMIOSLanguage = "Arabic - Kuwait" end if
	if lang = "13322" then WMIOSLanguage = "Spanish - Chile" end if
	if lang = "14337" then WMIOSLanguage = "Arabic - U.A.E." end if
	if lang = "14346" then WMIOSLanguage = "Spanish - Uruguay" end if
	if lang = "15361" then WMIOSLanguage = "Arabic - Bahrain" end if
	if lang = "15370" then WMIOSLanguage = "Spanish - Paraguay" end if
	if lang = "16385" then WMIOSLanguage = "Arabic - Qatar" end if
	if lang = "16394" then WMIOSLanguage = "Spanish - Bolivia" end if
	if lang = "17418" then WMIOSLanguage = "Spanish - El Salvador" end if
	if lang = "18442" then WMIOSLanguage = "Spanish - Honduras" end if
	if lang = "19466" then WMIOSLanguage = "Spanish - Nicaragua" end if
	if lang = "20490" then WMIOSLanguage = "Spanish - Puerto Rico" end if
end function


function WMIOSCountry(country)
	if country = "1" then WMIOSCountry = "UNITED STATES" end if
	if country = "2" then WMIOSCountry = "CANADA" end if
	if country = "7" then WMIOSCountry = "RUSSIAN FEDERATION" end if
	if country = "20" then WMIOSCountry = "EGYPT" end if
	if country = "27" then WMIOSCountry = "SOUTH AFRICA" end if
	if country = "30" then WMIOSCountry = "GREECE" end if
	if country = "31" then WMIOSCountry = "NETHERLANDS" end if
	if country = "32" then WMIOSCountry = "BELGIUM" end if
	if country = "33" then WMIOSCountry = "FRANCE" end if
	if country = "34" then WMIOSCountry = "SPAIN" end if
	if country = "36" then WMIOSCountry = "HUNGARY" end if
	if country = "39" then WMIOSCountry = "ITALY" end if
	if country = "40" then WMIOSCountry = "ROMANIA" end if
	if country = "41" then WMIOSCountry = "SWITZERLAND" end if
	if country = "43" then WMIOSCountry = "AUSTRIA" end if
	if country = "44" then WMIOSCountry = "UNITED KINGDOM" end if
	if country = "45" then WMIOSCountry = "DENMARK" end if
	if country = "46" then WMIOSCountry = "SWEDEN" end if
	if country = "47" then WMIOSCountry = "NORWAY" end if
	if country = "48" then WMIOSCountry = "POLAND" end if
	if country = "49" then WMIOSCountry = "GERMANY" end if
	if country = "51" then WMIOSCountry = "PERU" end if
	if country = "52" then WMIOSCountry = "MEXICO" end if
	if country = "54" then WMIOSCountry = "ARGENTINA" end if
	if country = "55" then WMIOSCountry = "BRAZIL" end if
	if country = "56" then WMIOSCountry = "CHILE" end if
	if country = "57" then WMIOSCountry = "COLOMBIA" end if
	if country = "58" then WMIOSCountry = "VENEZUELA" end if
	if country = "60" then WMIOSCountry = "MALAYSIA" end if
	if country = "61" then WMIOSCountry = "AUSTRALIA" end if
	if country = "62" then WMIOSCountry = "INDONESIA" end if
	if country = "63" then WMIOSCountry = "PHILIPPINES" end if
	if country = "64" then WMIOSCountry = "NEW ZEALAND" end if
	if country = "65" then WMIOSCountry = "SINGAPORE" end if
	if country = "81" then WMIOSCountry = "JAPAN" end if
	if country = "82" then WMIOSCountry = "KOREA, REPUBLIC OF" end if
	if country = "84" then WMIOSCountry = "VIET NAM" end if
	if country = "86" then WMIOSCountry = "CHINA" end if
	if country = "90" then WMIOSCountry = "TURKEY" end if
	if country = "91" then WMIOSCountry = "INDIA" end if
	if country = "92" then WMIOSCountry = "PAKISTAN" end if
	if country = "212" then WMIOSCountry = "MOROCCO" end if
	if country = "213" then WMIOSCountry = "ALGERIA" end if
	if country = "216" then WMIOSCountry = "TUNISIA" end if
	if country = "218" then WMIOSCountry = "LIBYAN ARAB JAMAHIRIYA" end if
	if country = "254" then WMIOSCountry = "KENYA" end if
	if country = "263" then WMIOSCountry = "ZIMBABWE" end if
	if country = "298" then WMIOSCountry = "FAROE ISLANDS" end if
	if country = "351" then WMIOSCountry = "PORTUGAL" end if
	if country = "352" then WMIOSCountry = "LUXEMBOURG" end if
	if country = "353" then WMIOSCountry = "IRELAND" end if
	if country = "354" then WMIOSCountry = "ICELAND" end if
	if country = "355" then WMIOSCountry = "ALBANIA" end if
	if country = "358" then WMIOSCountry = "FINLAND" end if
	if country = "359" then WMIOSCountry = "BULGARIA" end if
	if country = "370" then WMIOSCountry = "LITHUANIA" end if
	if country = "371" then WMIOSCountry = "LATVIA" end if
	if country = "372" then WMIOSCountry = "ESTONIA" end if
	if country = "374" then WMIOSCountry = "ARMENIA" end if
	if country = "375" then WMIOSCountry = "BELARUS" end if
	if country = "380" then WMIOSCountry = "UKRAINE" end if
	if country = "381" then WMIOSCountry = "SERBIA" end if
	if country = "385" then WMIOSCountry = "CROATIA" end if
	if country = "386" then WMIOSCountry = "SLOVENIA" end if
	if country = "389" then WMIOSCountry = "MACEDONIA" end if
	if country = "420" then WMIOSCountry = "CZECH REPUBLIC" end if
	if country = "421" then WMIOSCountry = "SLOVAKIA (Slovak Republic)" end if
	if country = "501" then WMIOSCountry = "BELIZE" end if
	if country = "502" then WMIOSCountry = "GUATEMALA" end if
	if country = "503" then WMIOSCountry = "EL SALVADOR" end if
	if country = "504" then WMIOSCountry = "HONDURAS" end if
	if country = "505" then WMIOSCountry = "NICARAGUA" end if
	if country = "506" then WMIOSCountry = "COSTA RICA" end if
	if country = "507" then WMIOSCountry = "PANAMA" end if
	if country = "591" then WMIOSCountry = "BOLIVIA" end if
	if country = "593" then WMIOSCountry = "ECUADOR" end if
	if country = "595" then WMIOSCountry = "PARAGUAY" end if
	if country = "598" then WMIOSCountry = "URUGUAY" end if
	if country = "673" then WMIOSCountry = "BRUNEI DARUSSALAM" end if
	if country = "852" then WMIOSCountry = "HONG KONG" end if
	if country = "853" then WMIOSCountry = "MACAU" end if
	if country = "874" then WMIOSCountry = "THAILAND" end if
	if country = "886" then WMIOSCountry = "TAIWAN" end if
	if country = "960" then WMIOSCountry = "MALDIVES" end if
	if country = "961" then WMIOSCountry = "LEBANON" end if
	if country = "962" then WMIOSCountry = "JORDAN" end if
	if country = "963" then WMIOSCountry = "SYRIAN ARAB REPUBLIC" end if
	if country = "964" then WMIOSCountry = "IRAQ" end if
	if country = "965" then WMIOSCountry = "KUWAIT" end if
	if country = "966" then WMIOSCountry = "SAUDI ARABIA" end if
	if country = "967" then WMIOSCountry = "YEMEN" end if
	if country = "968" then WMIOSCountry = "OMAN" end if
	if country = "971" then WMIOSCountry = "UNITED ARAB EMIRATES" end if
	if country = "972" then WMIOSCountry = "ISRAEL" end if
	if country = "973" then WMIOSCountry = "BAHRAIN" end if
	if country = "974" then WMIOSCountry = "QATAR" end if
	if country = "976" then WMIOSCountry = "MONGOLIA" end if
	if country = "981" then WMIOSCountry = "IRAN" end if
	if country = "994" then WMIOSCountry = "AZERBAIJAN" end if
	if country = "995" then WMIOSCountry = "GEORGIA" end if
	if country = "996" then WMIOSCountry = "KYRGYZSTAN" end if
end function

' http://support.microsoft.com/kb/302663
function get_sku_xp(value)
	vers = mid(value,4,2)
	if vers = "11" then vers_name = "Microsoft Office XP Professional" end if
	if vers = "12" then vers_name = "Microsoft Office XP Standard" end if
	if vers = "13" then vers_name = "Microsoft Office XP Small Business" end if
	if vers = "14" then vers_name = "Microsoft Office XP Web Server" end if
	if vers = "15" then vers_name = "Microsoft Access 2002" end if
	if vers = "16" then vers_name = "Microsoft Excel 2002" end if
	if vers = "17" then vers_name = "Microsoft FrontPage 2002" end if
	if vers = "18" then vers_name = "Microsoft PowerPoint 2002" end if
	if vers = "19" then vers_name = "Microsoft Publisher 2002" end if
	if vers = "1A" then vers_name = "Microsoft Outlook 2002" end if
	if vers = "1B" then vers_name = "Microsoft Word 2002" end if
	if vers = "1C" then vers_name = "Microsoft Access 2002 Runtime" end if
	if vers = "1D" then vers_name = "Microsoft FrontPage Server Extensions 2002" end if
	if vers = "1E" then vers_name = "Microsoft Office Multilingual User Interface Pack" end if
	if vers = "1F" then vers_name = "Microsoft Office Proofing Tools Kit" end if
	if vers = "20" then vers_name = "System Files Update" end if
	if vers = "22" then vers_name = "unused" end if
	if vers = "23" then vers_name = "Microsoft Office Multilingual User Interface Pack Wizard" end if
	if vers = "24" then vers_name = "Microsoft Office XP Resource Kit" end if
	if vers = "25" then vers_name = "Microsoft Office XP Resource Kit Tools (download from Web)" end if
	if vers = "26" then vers_name = "Microsoft Office Web Components" end if
	if vers = "27" then vers_name = "Microsoft Project 2002" end if
	if vers = "28" then vers_name = "Microsoft Office XP Professional with FrontPage" end if
	if vers = "29" then vers_name = "Microsoft Office XP Professional Subscription" end if
	if vers = "2A" then vers_name = "Microsoft Office XP Small Business Edition Subscription" end if
	if vers = "2B" then vers_name = "Microsoft Publisher 2002 Deluxe Edition" end if
	if vers = "2F" then vers_name = "Standalone IME (JPN Only)" end if
	if vers = "30" then vers_name = "Microsoft Office XP Media Content" end if
	if vers = "31" then vers_name = "Microsoft Project 2002 Web Client" end if
	if vers = "32" then vers_name = "Microsoft Project 2002 Web Server" end if
	if vers = "33" then vers_name = "Microsoft Office XP PIPC1 (Pre Installed PC) (JPN Only)" end if
	if vers = "34" then vers_name = "Microsoft Office XP PIPC2 (Pre Installed PC) (JPN Only)" end if
	if vers = "35" then vers_name = "Microsoft Office XP Media Content Deluxe" end if
	if vers = "3A" then vers_name = "Project 2002 Standard" end if
	if vers = "3B" then vers_name = "Project 2002 Professional" end if
	if vers = "51" then vers_name = "Microsoft Visio Professional 2002" end if
	if vers = "54" then vers_name = "Microsoft Visio Standard 2002" end if
	if vers = "5F" then vers_name = "Microsoft Visual Studio .NET Enterprise Architect 2003" end if
	if vers = "60" then vers_name = "Microsoft Visual Studio .NET Enterprise Developer 2003" end if
	if vers = "61" then vers_name = "Microsoft Visual Studio .NET Professional 2003" end if
	if vers = "62" then vers_name = "Microsoft Visual Basic .NET Standard 2003" end if
	if vers = "63" then vers_name = "Microsoft Visual C# .NET Standard 2003" end if
	if vers = "64" then vers_name = "Microsoft Visual C++ .NET Standard 2003" end if
	if vers = "65" then vers_name = "Microsoft Visual J# .NET Standard 2003" end if
	get_sku_xp = vers_name
end function

' http://support.microsoft.com/kb/832672
function get_sku_2003(subkey)
	vers = mid(subkey,4,2)
	if vers = "11" then vers_name = "Microsoft Office Professional Enterprise Edition 2003" end if
	if vers = "12" then vers_name = "Microsoft Office Standard Edition 2003" end if
	if vers = "13" then vers_name = "Microsoft Office Basic Edition 2003" end if
	if vers = "14" then vers_name = "Microsoft Windows SharePoint Services 2.0" end if
	if vers = "15" then vers_name = "Microsoft Office Access 2003" end if
	if vers = "16" then vers_name = "Microsoft Office Excel 2003" end if
	if vers = "17" then vers_name = "Microsoft Office FrontPage 2003" end if
	if vers = "18" then vers_name = "Microsoft Office PowerPoint 2003" end if
	if vers = "19" then vers_name = "Microsoft Office Publisher 2003" end if
	if vers = "1A" then vers_name = "Microsoft Office Outlook Professional 2003" end if
	if vers = "1B" then vers_name = "Microsoft Office Word 2003" end if
	if vers = "1C" then vers_name = "Microsoft Office Access 2003 Runtime" end if
	if vers = "1E" then vers_name = "Microsoft Office 2003 User Interface Pack" end if
	if vers = "1F" then vers_name = "Microsoft Office 2003 Proofing Tools" end if
	if vers = "23" then vers_name = "Microsoft Office 2003 Multilingual User Interface Pack" end if
	if vers = "24" then vers_name = "Microsoft Office 2003 Resource Kit" end if
	if vers = "26" then vers_name = "Microsoft Office XP Web Components" end if
	if vers = "2E" then vers_name = "Microsoft Office 2003 Research Service SDK" end if
	if vers = "3A" then vers_name = "Microsoft Office Project Standard 2003" end if
	if vers = "3B" then vers_name = "Microsoft Office Project Professional 2003" end if
	if vers = "32" then vers_name = "Microsoft Office Project Server 2003" end if
	if vers = "44" then vers_name = "Microsoft Office InfoPath 2003" end if
	if vers = "49" then vers_name = "Microsoft Office 2003 Primary Interop Assemblies" end if
	if vers = "51" then vers_name = "Microsoft Office Visio Professional 2003" end if
	if vers = "52" then vers_name = "Microsoft Office Visio Viewer 2003" end if
	if vers = "53" then vers_name = "Microsoft Office Visio Standard 2003" end if
	if vers = "55" then vers_name = "Microsoft Office Visio for Enterprise Architects" end if
	if vers = "5E" then vers_name = "Microsoft Office Visio 2003 Multilingual User Interface Pack" end if
	if vers = "5F" then vers_name = "Microsoft Visual Studio .NET Enterprise Architect 2003" end if
	if vers = "60" then vers_name = "Microsoft Visual Studio .NET Enterprise Developer 2003" end if
	if vers = "61" then vers_name = "Microsoft Visual Studio .NET Professional 2003" end if
	if vers = "62" then vers_name = "Microsoft Visual Basic .NET Standard 2003" end if
	if vers = "63" then vers_name = "Microsoft Visual C# .NET Standard 2003" end if
	if vers = "64" then vers_name = "Microsoft Visual C++ .NET Standard 2003" end if
	if vers = "65" then vers_name = "Microsoft Visual J# .NET Standard 2003" end if
	if vers = "83" then vers_name = "Microsoft Office 2003 HTML Viewer" end if
	if vers = "92" then vers_name = "Windows SharePoint Services 2.0 English Template Pack" end if
	if vers = "93" then vers_name = "Microsoft Office 2003 English Web Parts and Components" end if
	if vers = "A1" then vers_name = "Microsoft Office OneNote 2003" end if
	if vers = "A4" then vers_name = "Microsoft Office 2003 Web Components" end if
	if vers = "A5" then vers_name = "Microsoft SharePoint Migration Tool 2003" end if
	if vers = "AA" then vers_name = "Microsoft Office PowerPoint 2003 Presentation Broadcast" end if
	if vers = "AB" then vers_name = "Microsoft Office PowerPoint 2003 Template Pack 1" end if
	if vers = "AC" then vers_name = "Microsoft Office PowerPoint 2003 Template Pack 2" end if
	if vers = "AD" then vers_name = "Microsoft Office PowerPoint 2003 Template Pack 3" end if
	if vers = "AE" then vers_name = "Microsoft Organization Chart 2.0" end if
	if vers = "CA" then vers_name = "Microsoft Office Small Business Edition 2003" end if
	if vers = "D0" then vers_name = "Microsoft Office Access 2003 Developer Extensions" end if
	if vers = "DC" then vers_name = "Microsoft Office 2003 Smart Document SDK" end if
	if vers = "E0" then vers_name = "Microsoft Office Outlook Standard 2003" end if
	if vers = "E3" then vers_name = "Microsoft Office Professional Edition 2003 (with InfoPath 2003)" end if
	if vers = "FF" then vers_name = "Microsoft Office 2003 Edition Language Interface Pack" end if
	if vers = "F8" then vers_name = "Remove Hidden Data Tool" end if
	get_sku_2003 = vers_name
end function

' http://support.microsoft.com/kb/928516
function get_sku_2007(subkey)
	vers = mid(subkey,11,4)
	if vers = "0011" then vers_name = "Microsoft Office Professional Plus 2007" end if
	if vers = "0012" then vers_name = "Microsoft Office Standard 2007" end if
	if vers = "0013" then vers_name = "Microsoft Office Basic 2007" end if
	if vers = "0014" then vers_name = "Microsoft Office Professional 2007" end if
	if vers = "0015" then vers_name = "Microsoft Office Access 2007" end if
	if vers = "0016" then vers_name = "Microsoft Office Excel 2007" end if
	if vers = "0017" then vers_name = "Microsoft Office SharePoint Designer 2007" end if
	if vers = "0018" then vers_name = "Microsoft Office PowerPoint 2007" end if
	if vers = "0019" then vers_name = "Microsoft Office Publisher 2007" end if
	if vers = "001A" then vers_name = "Microsoft Office Outlook 2007" end if
	if vers = "001B" then vers_name = "Microsoft Office Word 2007" end if
	if vers = "001C" then vers_name = "Microsoft Office Access Runtime 2007" end if
	if vers = "0020" then vers_name = "Microsoft Office Compatibility Pack for Word, Excel, and PowerPoint 2007 File Formats" end if
	if vers = "0021" then vers_name = "Microsoft Visual Studio Web Authoring Component" end if
	if vers = "0026" then vers_name = "Microsoft Expression Web" end if
	if vers = "0029" then vers_name = "Microsoft Office Excel 2007" end if
	if vers = "002B" then vers_name = "Microsoft Office Word 2007" end if
	if vers = "002E" then vers_name = "Microsoft Office Ultimate 2007" end if
	if vers = "002F" then vers_name = "Microsoft Office Home and Student 2007" end if
	if vers = "0030" then vers_name = "Microsoft Office Enterprise 2007" end if
	if vers = "0031" then vers_name = "Microsoft Office Professional Hybrid 2007" end if
	if vers = "0033" then vers_name = "Microsoft Office Personal 2007" end if
	if vers = "0035" then vers_name = "Microsoft Office Professional Hybrid 2007" end if
	if vers = "0037" then vers_name = "Microsoft Office PowerPoint 2007" end if
	if vers = "003A" then vers_name = "Microsoft Office Project Standard 2007" end if
	if vers = "003B" then vers_name = "Microsoft Office Project Professional 2007" end if
	if vers = "0044" then vers_name = "Microsoft Office InfoPath 2007" end if
	if vers = "0051" then vers_name = "Microsoft Office Visio Professional 2007" end if
	if vers = "0052" then vers_name = "Microsoft Office Visio Viewer 2007" end if
	if vers = "0053" then vers_name = "Microsoft Office Visio Standard 2007" end if
	if vers = "00A1" then vers_name = "Microsoft Office OneNote 2007" end if
	if vers = "00A3" then vers_name = "Microsoft Office OneNote Home Student 2007" end if
	if vers = "00A7" then vers_name = "Calendar Printing Assistant for Microsoft Office Outlook 2007" end if
	if vers = "00A9" then vers_name = "Microsoft Office InterConnect 2007" end if
	if vers = "00AF" then vers_name = "Microsoft Office PowerPoint Viewer 2007 (English)" end if
	if vers = "00B0" then vers_name = "The Microsoft Save as PDF add-in" end if
	if vers = "00B1" then vers_name = "The Microsoft Save as XPS add-in" end if
	if vers = "00B2" then vers_name = "The Microsoft Save as PDF or XPS add-in" end if
	if vers = "00BA" then vers_name = "Microsoft Office Groove 2007" end if
	if vers = "00CA" then vers_name = "Microsoft Office Small Business 2007" end if
	if vers = "00E0" then vers_name = "Microsoft Office Outlook 2007" end if
	if vers = "10D7" then vers_name = "Microsoft Office InfoPath Forms Services" end if
	if vers = "110D" then vers_name = "Microsoft Office SharePoint Server 2007" end if
	get_sku_2007 = vers_name
end function

' http://support.microsoft.com/kb/2186281
function get_sku_2010(subkey)
	vers = mid(subkey,11,4)
	if vers = "0011" then vers_name = "Microsoft Office Professional Plus 2010" end if
	if vers = "011D" then vers_name = "Microsoft Office Professional Plus Subscription 2010" end if
	if vers = "0012" then vers_name = "Microsoft Office Standard 2010" end if
	if vers = "0013" then vers_name = "Microsoft Office Home and Business 2010" end if
	if vers = "0014" then vers_name = "Microsoft Office Professional 2010" end if
	if vers = "0015" then vers_name = "Microsoft Office Access 2010" end if
	if vers = "0016" then vers_name = "Microsoft Office Excel 2010" end if
	if vers = "0017" then vers_name = "Microsoft Office SharePoint Designer 2010" end if
	if vers = "0018" then vers_name = "Microsoft Office PowerPoint 2010" end if
	if vers = "0019" then vers_name = "Microsoft Office Publisher 2010" end if
	if vers = "001A" then vers_name = "Microsoft Office Outlook 2010" end if
	if vers = "001B" then vers_name = "Microsoft Office Word 2010" end if
	if vers = "001C" then vers_name = "Microsoft Office Access Runtime 2010" end if
	if vers = "0020" then vers_name = "Microsoft Office Compatibility Pack for Word, Excel, and PowerPoint 2010 File Formats" end if
	if vers = "0026" then vers_name = "Microsoft Expression Web" end if
	if vers = "0029" then vers_name = "Microsoft Office Excel 2010" end if
	if vers = "002B" then vers_name = "Microsoft Office Word 2010" end if
	if vers = "002E" then vers_name = "Microsoft Office Ultimate 2010" end if
	if vers = "002F" then vers_name = "Microsoft Office Home and Student 2010" end if
	if vers = "0030" then vers_name = "Microsoft Office Enterprise 2010" end if
	if vers = "0031" then vers_name = "Microsoft Office Professional Hybrid 2010" end if
	if vers = "0033" then vers_name = "Microsoft Office Personal 2010" end if
	if vers = "0035" then vers_name = "Microsoft Office Professional Hybrid 2010" end if
	if vers = "0037" then vers_name = "Microsoft Office PowerPoint 2010" end if
	if vers = "003A" then vers_name = "Microsoft Office Project Standard 2010" end if
	if vers = "003B" then vers_name = "Microsoft Office Project Professional 2010" end if
	if vers = "003D" then vers_name = "Microsoft Office Professional 2010" end if
	if vers = "0044" then vers_name = "Microsoft Office InfoPath 2010" end if
	if vers = "0051" then vers_name = "Microsoft Office Visio Professional 2010" end if
	if vers = "0052" then vers_name = "Microsoft Office Visio Viewer 2010" end if
	if vers = "0053" then vers_name = "Microsoft Office Visio Standard 2010" end if
	if vers = "0057" then vers_name = "Microsoft Office Visio Premium 2010" end if
	if vers = "00A1" then vers_name = "Microsoft Office OneNote 2010" end if
	if vers = "00A3" then vers_name = "Microsoft Office OneNote Home Student 2010" end if
	if vers = "00A7" then vers_name = "Calendar Printing Assistant for Microsoft Office Outlook 2010" end if
	if vers = "00A9" then vers_name = "Microsoft Office InterConnect 2010" end if
	if vers = "00AF" then vers_name = "Microsoft Office PowerPoint Viewer 2010 (English)" end if
	if vers = "00B0" then vers_name = "The Microsoft Save as PDF add-in" end if
	if vers = "00B1" then vers_name = "The Microsoft Save as XPS add-in" end if
	if vers = "00B2" then vers_name = "The Microsoft Save as PDF or XPS add-in" end if
	if vers = "00BA" then vers_name = "Microsoft Office Groove 2010" end if
	if vers = "00CA" then vers_name = "Microsoft Office Small Business 2010" end if
	if vers = "00E0" then vers_name = "Microsoft Office Outlook 2010" end if
	if vers = "10D7" then vers_name = "Microsoft Office InfoPath Forms Services" end if
	if vers = "110D" then vers_name = "Microsoft Office SharePoint Server 2010" end if
	if vers = "110F" then vers_name = "Microsoft Project Server 2010" end if
	get_sku_2010 = vers_name
end function

' http://support.microsoft.com/kb/2786054
function get_sku_2013(subkey)
	vers = mid(subkey,11,4)
	if vers = "0011" then vers_name = "Microsoft Office Professional Plus 2013" end if
	if vers = "0012" then vers_name = "Microsoft Office Standard 2013" end if
	if vers = "0013" then vers_name = "Microsoft Office Home and Business 2013" end if
	if vers = "0014" then vers_name = "Microsoft Office Professional 2013" end if
	if vers = "0015" then vers_name = "Microsoft Office Access 2013" end if
	if vers = "0016" then vers_name = "Microsoft Office Excel 2013" end if
	if vers = "0017" then vers_name = "Microsoft Office SharePoint Designer 2013" end if
	if vers = "0018" then vers_name = "Microsoft Office PowerPoint 2013" end if
	if vers = "0019" then vers_name = "Microsoft Office Publisher 2013" end if
	if vers = "001A" then vers_name = "Microsoft Office Outlook 2013" end if
	if vers = "001B" then vers_name = "Microsoft Office Word 2013" end if
	if vers = "001C" then vers_name = "Microsoft Office Access Runtime 2013" end if
	if vers = "001F" then vers_name = "Microsoft Office Proofing Tools Kit Compilation 2013" end if
	if vers = "0020" then vers_name = "Microsoft Office Compatibility Pack for Word, Excel, and PowerPoint 2013 File Formats" end if
	if vers = "0026" then vers_name = "Microsoft Expression Web" end if
	if vers = "0029" then vers_name = "Microsoft Office Excel 2013" end if
	if vers = "002B" then vers_name = "Microsoft Office Word 2013" end if
	if vers = "002E" then vers_name = "Microsoft Office Ultimate 2013" end if
	if vers = "002F" then vers_name = "Microsoft Office Home and Student 2013" end if
	if vers = "0030" then vers_name = "Microsoft Office Enterprise 2013" end if
	if vers = "0031" then vers_name = "Microsoft Office Professional Hybrid 2013" end if
	if vers = "0033" then vers_name = "Microsoft Office Personal 2013" end if
	if vers = "0035" then vers_name = "Microsoft Office Professional Hybrid 2013" end if
	if vers = "0037" then vers_name = "Microsoft Office PowerPoint 2013" end if
	if vers = "003A" then vers_name = "Microsoft Office Project Standard 2013" end if
	if vers = "003B" then vers_name = "Microsoft Office Project Professional 2013" end if
	if vers = "0044" then vers_name = "Microsoft Office InfoPath 2013" end if
	if vers = "0051" then vers_name = "Microsoft Office Visio Professional 2013" end if
	if vers = "0052" then vers_name = "Microsoft Office Visio Viewer 2013" end if
	if vers = "0053" then vers_name = "Microsoft Office Visio Standard 2013" end if
	if vers = "0057" then vers_name = "Microsoft Office Visio Premium 2013" end if
	if vers = "00A1" then vers_name = "Microsoft Office OneNote 2013" end if
	if vers = "00A3" then vers_name = "Microsoft Office OneNote Home Student 2013" end if
	if vers = "00A7" then vers_name = "Calendar Printing Assistant for Microsoft Office Outlook 2013" end if
	if vers = "00A9" then vers_name = "Microsoft Office InterConnect 2013" end if
	if vers = "00AF" then vers_name = "Microsoft Office PowerPoint Viewer 2013 (English)" end if
	if vers = "00B0" then vers_name = "The Microsoft Save as PDF add-in" end if
	if vers = "00B1" then vers_name = "The Microsoft Save as XPS add-in" end if
	if vers = "00B2" then vers_name = "The Microsoft Save as PDF or XPS add-in" end if
	if vers = "00BA" then vers_name = "Microsoft Office SharePoint Workspace 2013" end if
	if vers = "00CA" then vers_name = "Microsoft Office Small Business 2013" end if
	if vers = "00E0" then vers_name = "Microsoft Office Outlook 2013" end if
	if vers = "10D7" then vers_name = "Microsoft Office InfoPath Forms Services" end if
	if vers = "110D" then vers_name = "Microsoft Office SharePoint Server 2013" end if
	if vers = "110F" then vers_name = "Microsoft Office Project Server 2013" end if
	if vers = "012B" then vers_name = "Microsoft Office Lync 2013" end if
get_sku_2013 = vers_name
end function


function get_release_type(value)
	vers = mid(value,2,1)
	if vers = "0" then release_type = "Any release before Beta 1" end if
	if vers = "1" then release_type = "Beta 1" end if
	if vers = "2" then release_type = "Beta 2" end if
	if vers = "3" then release_type = "RC0" end if
	if vers = "4" then release_type = "RC1/OEM Preview Release" end if
	if vers = "5" then release_type = "Reserved - Not Defined by Microsoft" end if
	if vers = "6" then release_type = "Reserved - Not Defined by Microsoft" end if
	if vers = "7" then release_type = "Reserved - Not Defined by Microsoft" end if
	if vers = "8" then release_type = "Reserved - Not Defined by Microsoft" end if
	if vers = "9" then release_type = "RTM (first shipped version)" end if
	if vers = "A" then release_type = "SR1 (unused if the product code is not changed after RTM)" end if
	if vers = "B" then release_type = "SR2 (unused if the product code is not changed after RTM)" end if
	if vers = "C" then release_type = "SR3 (unused if the product code is not changed after RTM)" end if
	get_release_type = release_type
end function


function get_edition_type(value)
	vers = mid(value,3,1)
	if vers = "0" then release_type = "Enterprise" end if
	if vers = "1" then release_type = "Retail/OEM" end if
	if vers = "2" then release_type = "Trial" end if
	get_edition_type = release_type
end function

Function getkey(Key, ver)
	' http://forums.mydigitallife.info/threads/20816-The-Ultimate-PID-Checker?p=584892&viewfull=1#post584892
	' and
	' location of key in DigitalProductID changed in Office 2010.
	' http://code.google.com/p/msoffice-product-key-decoder/
	if (isarray(Key)) then
	if ver = "1" then
	KeyOffset = 52
	else
	KeyOffset = 808
	end if
	isWin8 = (Key(66) \ 6) And 1
	Key(66) = (Key(66) And &HF7) Or ((isWin8 And 2) * 4)
	i = 24
	Chars = "BCDFGHJKMPQRTVWXY2346789"
	Do
	Cur = 0
	X = 14
	Do
	Cur = Cur * 256
	Cur = Key(X + KeyOffset) + Cur
	Key(X + KeyOffset) = (Cur \ 24)
	Cur = Cur Mod 24
	X = X -1
	Loop While X >= 0
	i = i -1
	KeyOutput = Mid(Chars, Cur + 1, 1) & KeyOutput
	Last = Cur
	Loop While i >= 0
	If (isWin8 = 1) Then
	keypart1 = Mid(KeyOutput, 2, Last)
	insert = "N"
	KeyOutput = Replace(KeyOutput, keypart1, keypart1 & insert, 2, 1, 0)
	If Last = 0 Then KeyOutput = insert & KeyOutput
	End If
	a = Mid(KeyOutput, 1, 5)
	b = Mid(KeyOutput, 6, 5)
	c = Mid(KeyOutput, 11, 5)
	d = Mid(KeyOutput, 16, 5)
	e = Mid(KeyOutput, 21, 5)
	getkey = a & "-" & b & "-" & c & "-" & d & "-" & e
	else
	getkey = ""
	end if
End Function

Function GetSN(sComputer,sRoot,sKeyPath,sValueName)
	On Error Resume Next
	Set objRegistry = GetObject("winmgmts:\\" & sComputer & "\root\default:StdRegProv")
	If Err.Number = 0 Then
	'On Error Resume Next
	'HexBuf = WshShell.RegRead(sRegLocation)
	intReturn = objRegistry.GetBinaryValue(sRoot, sKeyPath, sValueName, Hexbuf)
	If intReturn = 0 Then
	'If Err.Number = 0 Then
	'On Error GoTo 0
	For l = LBound(HexBuf) To UBound(HexBuf)
	tmp=tmp & " "& Hex (HexBuf(l))
	Next

	StartOffset = 52
	EndOffset =67
	Dim Digits (24)

	Digits (0) = "B" : Digits (1) = "C": Digits (2) = "D": Digits (3) = "F":
	Digits (4) = "G": Digits (5) = "H": Digits (6) = "J": Digits (7) = "K":
	Digits (8) = "M": Digits (9) = "P": Digits (10) = "Q": Digits (11) = "R":
	Digits (12) = "T": Digits (13) = "V": Digits (14) = "W": Digits (15) = "X":
	Digits (16) = "Y": Digits (17) = "2": Digits (18) = "3": Digits (19) = "4":
	Digits (20) = "6" : Digits (21) = "7" : Digits (22) = "8": Digits (23) = "9"

	dLen = 29
	sLen = 15
	Dim HexDigitalPID (15)
	Dim Des (30)
	For i = StartOffset To EndOffset
	HexDigitalPID (i-StartOffset) = HexBuf(i)
	tmp2=tmp2 & " "& Hex (HexDigitalPID(i-StartOffset))
	Next

	KEYSTRING =""
	For i=dLen-1 To 0 Step -1
	If ((i + 1) mod 6) = 0 Then
	Des (i) = "-"
	KEYSTRING =KEYSTRING & "-"
	Else
	HN = 0
	For N = (sLen -1) To 0 Step -1
	Value = ( (HN *2^8 ) Or HexDigitalPID (N))
	HexDigitalPID (N) = Value \ 24
	HN    = (Value mod 24)
	Next
	Des(i) = Digits(HN)
	KEYSTRING =KEYSTRING & Digits(HN)
	End If
	Next
	KEYSTRING2 = StrReverse (KEYSTRING)
	GetSN = KEYSTRING2
	Else
	'Err.Clear
	'On Error GoTo 0
	'GetSN = sProduct & " is not installed"
	End If
	Else
	Err.Clear
	On Error GoTo 0
	'GetSN = "Error reading registry of " & sComputer
	End If
End Function

function get_adobe(key)
	'This script decrypts any adobe serial stored in
	'the windows registry into a key that can be used
	Dim strValueName, strEncryptedKey
	Dim strDecryptedKey, CipherIndex, i, strFormattedKey
	' Adobe Substitution Cipher Key
	Dim AdobeSubCipherKey(24)
	AdobeSubCipherKey(0) = ""
	AdobeSubCipherKey(1) = "0000000001"
	AdobeSubCipherKey(2) = "5038647192"
	AdobeSubCipherKey(3) = "1426053789"
	AdobeSubCipherKey(4) = "2604371895"
	AdobeSubCipherKey(5) = "4753896210"
	AdobeSubCipherKey(6) = "8145962073"
	AdobeSubCipherKey(7) = "0319728564"
	AdobeSubCipherKey(8) = "7901235846"
	AdobeSubCipherKey(9) = "7901235846"
	AdobeSubCipherKey(10) = "0319728564"
	AdobeSubCipherKey(11) = "8145962073"
	AdobeSubCipherKey(12) = "4753896210"
	AdobeSubCipherKey(13) = "2604371895"
	AdobeSubCipherKey(14) = "1426053789"
	AdobeSubCipherKey(15) = "5038647192"
	AdobeSubCipherKey(16) = "3267408951"
	AdobeSubCipherKey(17) = "5038647192"
	AdobeSubCipherKey(18) = "2604371895"
	AdobeSubCipherKey(19) = "8145962073"
	AdobeSubCipherKey(20) = "7901235846"
	AdobeSubCipherKey(21) = "3267408951"
	AdobeSubCipherKey(22) = "1426053789"
	AdobeSubCipherKey(23) = "4753896210"
	AdobeSubCipherKey(24) = "0319728564"
	strEncryptedKey = key
	' We will build the decrypted key here
	' Take the numeric value of char at index i of the encrypted
	' key. That value provides an index within the string
	' AdobeSubCipherKey(i). The char located at that index
	' is the properly decrypted char.
	For i = 1 To 24
	CipherIndex = Cint(Mid(strEncryptedKey,i,1)) + 1
	strDecryptedKey = strDecryptedKey & Mid(AdobeSubCipherKey(i),CipherIndex,1)
	Next
	'Include dashes for readability
	get_adobe = Mid(strDecryptedKey,1,4) & "-" & Mid(strDecryptedKey,5,4) & "-" & Mid(strDecryptedKey,9,4) & _
	"-" & Mid(strDecryptedKey,13,4) & "-" & Mid(strDecryptedKey,17,4) & "-" & Mid(strDecryptedKey,21,4)
end function

function CSVParser(CSVDataToProcess)
   'Declaring variables for text delimiter and text qualifyer
    dim TextDelimiter, TextQualifyer
   'Declaring the variables used in determining action to be taken
    dim ProcessQualifyer, NewRecordCreate
   'Declaring variables dealing with input string
    dim CharMaxNumber, CharLocation, CharCurrentVal, CharCounter, CharStorage
   'Declaring variables that handle array duties
    dim CSVArray(), CSVArrayCount
   'Setting default values for various variables
    TextDelimiter = "," '<- Text delimiter is a comma
    TextQualifyer = Chr(34) '<- Chr(34) is the ascii code for "
    ProcessQualifyer = False '<- Determining how record should be processed
    CharMaxNumber = Len(CSVDataToProcess) '<- Calculating no. of characters in variable
    NewRecordCreate = 0 '<- Determining how to handle record at different stages of operation
   '   0 = Don't create new record
   '   1 = Write data to existing record
   '   2 = Close record and open new one
    CSVArrayCount = 0 '<- Priming the array counter
    Redim Preserve CSVArray(CSVArrayCount) '<- Initializing the array
    CharCounter = 0 '<- Record character counter
    for CharLocation = 1 to CharMaxNumber 'Starting the main loop
      'Retrieving the next character in sequence from CSVDataToProcess
       CharCurrentVal = Mid(CSVDataToProcess, CharLocation, 1)
      'This will figure out if the record uses a text qualifyer or not
       if CharCurrentVal = TextQualifyer and CharCounter = 0 then
         ProcessQualifyer = True
         CharCurrentVal = ""
       end if
      'Advancing the record 'letter count' counter
       CharCounter = CharCounter + 1
      'Choosing data extraction method (text qualifyer or no text qualifyer)
       if ProcessQualifyer = True then
          'This section handles records with a text qualifyer and text delimiter
          'It is also handles the special case  scenario, where the qualifyer is
          'part of the data.  In the CSV file, a double quote represents a single
          'one  ie.  "" = "
           if Len(CharStorage) <> 0 then
              if CharCurrentVal = TextDelimiter then
                 CharStorage = ""
                 ProcessQualifyer = False
                 NewRecordCreate = 2
              else
                 CharStorage = ""
                 NewRecordCreate = 1
              end if
           else
              if CharCurrentVal = TextQualifyer then
                 CharStorage = CharStorage & CharCurrentVal
                 NewRecordCreate = 0
              else
                 NewRecordCreate = 1
              end if
           end if
      'This section handles a regular CSV record.. without the text qualifyer
       else
           if CharCurrentVal = TextDelimiter then
              NewRecordCreate = 2
           else
              NewRecordCreate = 1
           end if
       end if
      'Writing the data to the array
       select case  NewRecordCreate
        'This section just writes the info to the array
         case 1
           CSVArray(CSVArrayCount) = CSVArray(CSVArrayCount) & CharCurrentVal
        'This section closes the current record and creates a new one
         case 2
           CharCounter = 0
           CSVArrayCount = CSVArrayCount + 1
           redim preserve CSVArray(CSVArrayCount)
       end select
    next
   'Finishing Up
    CSVParser = CSVArray
end function

Function AddDashes( strInput, intDashInterval)
	if intDashInterval <= 0 then
	AddDashes = strInput
	Exit Function
	end if
	For i=1 to Len(strInput) step intDashInterval
	if i <> 1 then
	temp = temp & "-"
	end if
	temp = temp & Mid(strInput,i,intDashInterval)
	Next
	AddDashes = temp
End Function

function check_wbem_error(error)
	if abs(error) = 2147217392 then check_wbem_error = "wbemErrInvalidClass - class does not exist on this system."
	if abs(error) = 2147217394 then check_wbem_error = "wbemErrInvalidNamespace - could not connect."
	if abs(error) = 2147749891 then check_wbem_error = "wbemErrAccessDenied - Current user does not have the permission to view the result set."
	if abs(error) = 2147749889 then check_wbem_error = "wbemErrFailed - Unspecified error."
	if abs(error) = 2147749896 then check_wbem_error = "wbemErrInvalidParameter - Invalid parameter was specified."
	if abs(error) = 2147749911 then check_wbem_error = "wbemErrInvalidQuery - Query syntax is not valid."
	if abs(error) = 2147749912 then check_wbem_error = "wbemErrInvalidQueryType - Requested query language is not supported."
	if abs(error) = 2147749894 then check_wbem_error = "wbemErrOutOfMemory - Not enough memory to complete the operation."
	if check_wbem_error = "" then check_wbem_error = "Unspecified wbem error: " & error end if
end function

function ou(dn)
	dn = split(dn, ",")
	for i = 1 to ubound(dn)
	ou = ou & dn(i) & ","
	next
	ou = mid(ou, 1, len(ou)-1)
end function

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

Sub hiddenExecution
	Dim Arg, Str
	for each Arg in WScript.Arguments
	If Not InStr( Arg, "hide_audit_window" ) then
	If InStr( Arg, " " ) Then Arg = """" & Arg & """"
	Str = Str & " " & Arg
	End If
	Next
	Str = Str & " hide_audit_window=n"
	CreateObject("WScript.Shell").Run "cscript //nologo """ & WScript.ScriptFullName & """ " & Str, 0
	WScript.Quit
End Sub



' windows build numbers
' 528 - Win NT 3.1
' 807 - Win NT 3.5
' 950 - Win 95
' 1057 - Win NT 3.51
' 1381 - NT 4.0
' 1998 - Win 98
' 2195 - Win 2000
' 2222 - Win 98 SE
' 2600 - Win XP
' 3000 - Win ME
' 3790 - Win XP 64bit, 2003, 2003 r2, Win Home Server
' 6000 - Win Vista
' 6001 - Win Vista sp1, Win 2008 sp1
' 6002 - Win Vista sp2, Win 2008 sp2
' 7600 - Win7,     Win 2008 r2
' 7601 - Win7 sp1, Win 2008 r2 sp1
' 8400 - Windows Home Server 2011
' 9200 - Win 8, Server 2012
' 9900 - Win Phone 8