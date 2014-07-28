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
' @version 1.3.2
' @copyright Copyright (c) 2014, Opmantek
' @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3

Option Explicit

forceCScriptExecution

' these can be overridden on the command line
dim user, help, arg, arg_name, arg_value, objArgs, debugging
debugging = 0

' below we take any command line arguements
' to override the variables above, simply include them on the command line like submit_online=n
' NOTE - argurments are case sensitive
Set objArgs = wscript.arguments
for each arg in objArgs
    if instr(arg, "=") then
		arg_name = lcase(left(arg,inStr(arg,"=")-1))
		arg_value = mid(arg,inStr(arg,"=")+1)
		select case lcase(arg_name)

			case "user"
				user = arg_value

			case "help"
				help = arg_value

			case "debugging"
				debugging = arg_value

		end select
	else
		if (arg = "/help") or (arg = "/?") then
			help = "y"
		else
			user = arg
		end if
	end if
next

wscript.echo "--------------------------------------------------"
wscript.echo "Open-AudIT Windows Client Connectivity Test Script"
wscript.echo "(c) Opmantek, 2014."
wscript.echo "--------------------------------------------------"

if (help = "y") then
	wscript.echo "This script should be run on a Windows based computer."
	wscript.echo ""
	wscript.echo "It tests the required attributes to determine if the specified user (or the user running this script if no user is specified) has the required permissions to audit this PC remotely."
	wscript.echo ""
	wscript.echo "Also tested are the required firewall rules. No changes are made by this script."
	wscript.echo ""
	wscript.echo "This script should be copied to the target PC and run via 'cscript test_windows_target.vbs'"
	wscript.echo ""
	wscript.echo "To run the script and test another user (useful if having a 'normal' user run this on their PC, run the script like 'cscript test_windows_target.vbs user=administrator@your_domain'. NOTE - no need to specificy the complete domain name, the short version should only be supplied. IE - mydomain, not mydomain.com"
	wscript.echo ""
	wscript.echo "Valid command line options are below (items containing * are the defaults) and should take the format name=value (eg: user=user@domain)."
	wscript.echo ""
	wscript.echo "  user"
	wscript.echo "     - This is not set by default. If supplied it will test the supplied user. If not set it will test the user runninng this script. Format should be user@domain."
	wscript.echo ""
	wscript.echo "  debugging"
	wscript.echo "  *0 - If set to 1 verbose output will be generated."
	wscript.echo ""
	wscript.echo ""
	wscript.echo "NOTE - As there is no need to supply the password for the account being tested, an example of having a remote user run the script to test the audit users credentials and send the result to a text file:"
	wscript.echo ""
	wscript.echo "cscript test_windows_target.vbs user=administrator@domain > output.txt"
	wscript.echo ""
	wscript.echo "This file can the be attached or copied/pasted into an email for easy viewing by the actual administrator."
	wscript.echo ""
	wscript.echo "NOTE - If you run this script to test a domain user account, the user actually running the script must be a domain user."
	wscript.quit
end if

Const wbemFlagReturnImmediately = &h10
Const wbemFlagForwardOnly = &h20
dim objNetwork

On Error Resume Next
Set objNetwork = WScript.CreateObject("WScript.Network")
If Err.Number <> 0 Then ShowError("Cannot create wscript.network.")

dim objWMIService
On Error Resume Next
Set objWMIService = GetObject("winmgmts:\\.\root\CIMV2")
If Err.Number <> 0 Then ShowError("Cannot connect to local WMI.")

dim temp, hostname, colItems, objItem, user_domain, user_name, user_ldap, user_ldap_groups
dim dns_hostname, computer_domain, domain_role, part_of_domain, domain_short, group_domain
dim member_domain, local_administrators, local_admin, domain_admin, colGroups, objGroups, objGroup
dim objUser, ldap_domain, objConnection, objCommand, objRecordSet, temp2, temp3
dim colMembers, strMember, strPath, objNestedGroup, running_user, running_user_domain, short_domain_name

hostname = objNetwork.ComputerName
If Err.Number <> 0 Then ShowError("Cannot retrieve local computer name.")

running_user = objNetwork.userName
If Err.Number <> 0 Then ShowError("Cannot retrieve user name of user running this script.")

running_user_domain = objNetwork.userDomain
If Err.Number <> 0 Then ShowError("Cannot retrieve user domain of user running this script.")

wscript.echo
wscript.echo "------------------------"
wscript.echo "Collecting Attributes   "
wscript.echo "------------------------"
wscript.echo "Hostname: " & hostname
wscript.echo "User running this script: " & running_user
wscript.echo "Domain of user running this script: " & running_user_domain

Set colItems = objWMIService.ExecQuery("SELECT * FROM Win32_ComputerSystem", "WQL", wbemFlagReturnImmediately + wbemFlagForwardOnly)
If Err.Number <> 0 Then ShowError("Cannot select from Win32_ComputerSystem (1).")

if (user = "") then
	For Each objItem In colItems
		user = objItem.userName
		If Err.Number <> 0 Then ShowError("Cannot select userName.")
	Next
	temp = split(user, "\")
	If Err.Number <> 0 Then ShowError("No slash in retrieved userName.")
	user_domain = temp(0)
	If Err.Number <> 0 Then ShowError("Cannot select userName, domain.")
	user_name = temp(1)
	If Err.Number <> 0 Then ShowError("Cannot select userName name.")
else
	temp = split(user, "@")
	If Err.Number <> 0 Then ShowError("No @ in supplied user name.")
	user_domain = temp(1)
	If Err.Number <> 0 Then ShowError("No domain in supplied user name.")
	user_name = temp(0)
	If Err.Number <> 0 Then ShowError("No name in supplied user name.")
end if

wscript.echo "User Name: " & user_name
wscript.echo "User Domain: " & user_domain

Set colItems = objWMIService.ExecQuery("SELECT * FROM Win32_ComputerSystem", "WQL", wbemFlagReturnImmediately + wbemFlagForwardOnly)
If Err.Number <> 0 Then ShowError("Cannot select from Win32_ComputerSystem (2).")
For Each objItem In colItems
	wscript.echo "CurrentTimeZone: " & objItem.CurrentTimeZone
	If Err.Number <> 0 Then ShowError("Cannot select CurrentTimezone from Win32_ComputerSystem.")

	wscript.echo "DaylightInEffect: " & objItem.DaylightInEffect
	If Err.Number <> 0 Then ShowError("Cannot select DaylightInEffect from Win32_ComputerSystem.")

	dns_hostname = objItem.DNSHostName
	If Err.Number <> 0 Then ShowError("Cannot select DNSHostName from Win32_ComputerSystem.")
	wscript.echo "DNSHostName: " & dns_hostname

	computer_domain = objItem.Domain
	If Err.Number <> 0 Then ShowError("Cannot select Domain from Win32_ComputerSystem.")
	wscript.echo "Domain: " & computer_domain

	domain_role = "unknown"
	if objItem.DomainRole = 0 then domain_role = "Standalone Workstation" end if
	if objItem.DomainRole = 1 then domain_role = "Member Workstation"
	if objItem.DomainRole = 2 then domain_role = "Standalone Server"
	if objItem.DomainRole = 3 then domain_role = "Member Server"
	if objItem.DomainRole = 4 then domain_role = "Backup Domain Controller"
	if objItem.DomainRole = 5 then domain_role = "Primary Domain Controller"
	wscript.echo "DomainRole: " & domain_role

	wscript.echo "EnableDaylightSavingsTime: " & objItem.EnableDaylightSavingsTime
	If Err.Number <> 0 Then ShowError("Cannot select EnableDaylightSavingsTime from Win32_ComputerSystem.")

	wscript.echo "Name: " & objItem.Name
	If Err.Number <> 0 Then ShowError("Cannot select Name from Win32_ComputerSystem.")

	part_of_domain = objItem.PartOfDomain
	If Err.Number <> 0 Then ShowError("Cannot select PartOfDomain from Win32_ComputerSystem.")
	wscript.echo "PartOfDomain: " & part_of_domain

	wscript.echo "Workgroup: " & objItem.Workgroup
	If Err.Number <> 0 Then ShowError("Cannot select Workgroup from Win32_ComputerSystem.")
Next

Set colItems = objWMIService.ExecQuery("SELECT * FROM Win32_NTDomain where domainname > '' ", "WQL", wbemFlagReturnImmediately + wbemFlagForwardOnly)
If Err.Number <> 0 Then ShowError("Cannot select from Win32_NTDomain.")
For Each objItem In colItems
	wscript.echo "ClientSiteName: " & objItem.ClientSiteName
	If Err.Number <> 0 Then ShowError("Cannot select ClientSiteName from Win32_NTDomain.")

	wscript.echo "DcSiteName: " & objItem.DcSiteName
	If Err.Number <> 0 Then ShowError("Cannot select DcSiteName from Win32_NTDomain.")

	domain_short = objItem.Description
	If Err.Number <> 0 Then ShowError("Cannot select Description from Win32_NTDomain.")
	wscript.echo "Description: " & domain_short

	wscript.echo "DnsForestName: " & objItem.DnsForestName
	If Err.Number <> 0 Then ShowError("Cannot select DnsForestName from Win32_NTDomain.")

	wscript.echo "DomainControllerAddress: " & objItem.DomainControllerAddress
	If Err.Number <> 0 Then ShowError("Cannot select DomainControllerAddress from Win32_NTDomain.")

	wscript.echo "DomainControllerAddressType: " & objItem.DomainControllerAddressType
	If Err.Number <> 0 Then ShowError("Cannot select DomainControllerAddressType from Win32_NTDomain.")

	wscript.echo "DomainControllerName: " & objItem.DomainControllerName
	If Err.Number <> 0 Then ShowError("Cannot select DomainControllerName from Win32_NTDomain.")

	short_domain_name = objItem.DomainName
	If Err.Number <> 0 Then ShowError("Cannot select DomainName from Win32_NTDomain.")
	wscript.echo "DomainName: " & short_domain_name

	wscript.echo "DSDirectoryServiceFlag: " & objItem.DSDirectoryServiceFlag
	If Err.Number <> 0 Then ShowError("Cannot select DSDirectoryServiceFlag from Win32_NTDomain.")

	wscript.echo "DSDnsControllerFlag: " & objItem.DSDnsControllerFlag
	If Err.Number <> 0 Then ShowError("Cannot select DSDnsControllerFlag from Win32_NTDomain.")

	wscript.echo "DSDnsDomainFlag: " & objItem.DSDnsDomainFlag
	If Err.Number <> 0 Then ShowError("Cannot select DSDnsDomainFlag from Win32_NTDomain.")

	wscript.echo "DSDnsForestFlag: " & objItem.DSDnsForestFlag
	If Err.Number <> 0 Then ShowError("Cannot select DSDnsForestFlag from Win32_NTDomain.")

	wscript.echo "DSPrimaryDomainControllerFlag: " & objItem.DSPrimaryDomainControllerFlag
	If Err.Number <> 0 Then ShowError("Cannot select DSPrimaryDomainControllerFlag from Win32_NTDomain.")

	wscript.echo "Name: " & objItem.Name
	If Err.Number <> 0 Then ShowError("Cannot select Name from Win32_NTDomain.")

	wscript.echo "Status: " & objItem.Status
	If Err.Number <> 0 Then ShowError("Cannot select Status from Win32_NTDomain.")
Next

Set colGroups = GetObject("WinNT://" & hostname & "")
If Err.Number <> 0 Then ShowError("Cannot select from WinNT.")
colGroups.Filter = Array("group")
If Err.Number <> 0 Then ShowError("Cannot filter Group from WinNT.")
For Each objGroup In colGroups
	if objGroup.Name = "Administrators" then
	If Err.Number <> 0 Then ShowError("Cannot select Name from WinNT.")
	    For Each objUser in objGroup.Members
	    	group_domain = split(objUser.ADSPath, "/")
	    	If Err.Number <> 0 Then ShowError("Cannot split ADSPath from WinNT.")
			member_domain = group_domain(ubound(group_domain)-1)
			If Err.Number <> 0 Then ShowError("Cannot get domain from split ADSPath.")
	        local_administrators = local_administrators & objUser.name & "@" & member_domain & ","
	    Next
	    wscript.echo "Local Administrators: " & left(local_administrators,len(local_administrators)-1)
    end if
Next

if (part_of_domain = "True" and _
		lcase(user_domain) <> lcase(hostname) and _
		lcase(running_user_domain) <> lcase(computer_domain) and _
		lcase(running_user_domain) <> lcase(short_domain_name)) then

	' we need to use an Active Directory account to be able to query Active Directory
	wscript.echo vbcrlf & "FAIL - You must use a domain account to run this script if you are querying a domain. Please log on to this computer with a domain account and re-run this script."
	wscript.echo "PartOfDomain: " & part_of_domain
	wscript.echo "UserDomain: " & lcase(user_domain)
	wscript.echo "Hostname: " & lcase(hostname)
	wscript.echo "User Running Domain: " & lcase(running_user_domain)
	wscript.echo "Computer Domain: " & lcase(computer_domain)
	wscript.quit 1
end if

if (part_of_domain = "True" and lcase(user_domain) <> lcase(hostname)) then
	' this PC belongs to a domain.

	ldap_domain = "dc=" & replace(computer_domain, ".", ",dc=")
	wscript.echo "LDAP Domain: " & ldap_domain

	Const ADS_SCOPE_SUBTREE = 2
	Set objConnection = CreateObject("ADODB.Connection")
	If Err.Number <> 0 Then ShowError("Cannot create ADODB.Connection.")
	Set objCommand =   CreateObject("ADODB.Command")
	If Err.Number <> 0 Then ShowError("Cannot create ADODB.Command.")
	objConnection.Provider = "ADsDSOObject"
	If Err.Number <> 0 Then ShowError("Cannot create ADODB.Provider.")
	objConnection.Open "Active Directory Provider"
	If Err.Number <> 0 Then ShowError("Cannot open ADODB.Connection.")
	Set objCommand.ActiveConnection = objConnection
	If Err.Number <> 0 Then ShowError("Cannot create objConnection.")
	objCommand.Properties("Page Size") = 1000
	If Err.Number <> 0 Then ShowError("Cannot set Page Size.")
	objCommand.Properties("Searchscope") = ADS_SCOPE_SUBTREE 
	If Err.Number <> 0 Then ShowError("Cannot set Search Scope.")
	dim command_text : command_text = "SELECT distinguishedName FROM 'LDAP://" & ldap_domain & "' WHERE objectCategory='user' AND sAMAccountName='" & user_name & "'"
	wscript.echo "LDAP Connect String: " & command_text

	objCommand.CommandText = command_text
	If Err.Number <> 0 Then ShowError("Cannot set CommandText.")

	Set objRecordSet = objCommand.Execute
	If Err.Number <> 0 Then ShowError("Cannot execute CommandText.")

	objRecordSet.MoveFirst
	If Err.Number <> 0 Then ShowError("Cannot moveFirst over CommandText.")
	
	
	Do Until objRecordSet.EOF
		user_ldap = objRecordSet.Fields("distinguishedName").Value
		If Err.Number <> 0 Then ShowError("Cannot get distinguishedName.")
		wscript.echo "User LDAP Account: " & user_ldap
		objRecordSet.MoveNext
	Loop

	if (debugging = 1) then wscript.echo VBCRLF & "-----Domain PC and User------" end if
	Set objUser = GetObject("LDAP://" & user_ldap) 
	If Err.Number <> 0 Then ShowError("Cannot connect to LDAP.")
	Set colGroups = objUser.Groups
	If Err.Number <> 0 Then ShowError("Cannot get Groups from LDAP.")
	For Each objGroup in colGroups
		if (debugging = 1) then wscript.echo "objGroup.CN: " & objGroup.CN end if
	    if (instr(lcase(user_ldap_groups), lcase(objGroup.CN & ",")) > 0) then
	    	if (debugging = 1) then wscript.echo "Not Adding 1  " & objGroup.CN end if
	    else
	    	if (debugging = 1) then wscript.echo "Adding 1  " & objGroup.CN end if
	    	user_ldap_groups = user_ldap_groups & objGroup.CN & ","
	    	GetNested(objGroup)
	    end if
	Next
	Function GetNested(objGroup)
		if (debugging = 1) then wscript.echo "objGroup.CN: " & objGroup.CN end if
	    if (instr(lcase(user_ldap_groups), lcase(objGroup.CN & ",")) > 0) then
	    	if (debugging = 1) then wscript.echo "Not Adding 2 " & objGroup.CN end if
	    else
	    	if (debugging = 1) then wscript.echo "Adding 2 " & objGroup.CN end if
	    	user_ldap_groups = user_ldap_groups & objGroup.CN & ","
	    end if
	    On Error Resume Next
	    colMembers = objGroup.GetEx("memberOf")
	    For Each strMember in colMembers
	        strPath = "LDAP://" & strMember
	        Set objNestedGroup = GetObject(strPath)
	        if (debugging = 1) then wscript.Echo "objNestedGroup.CN: " & objNestedGroup.CN end if
	        if (instr(lcase(user_ldap_groups), lcase(objNestedGroup.CN & ",")) > 0) then
		    	if (debugging = 1) then wscript.echo "Not Adding 3 " & objNestedGroup.CN end if
		    else
	        	if (debugging = 1) then wscript.echo "Adding 3 " & objNestedGroup.CN end if
		        user_ldap_groups = user_ldap_groups & objNestedGroup.CN & ","
		        GetNested(objNestedGroup)
		    end if
	    Next
	End Function
	if (user_ldap_groups > "") then
		wscript.echo "User LDAP Groups: " & left(user_ldap_groups,len(user_ldap_groups)-1)
	else
		wscript.echo "User LDAP Groups: None other than primary."
	end if
end if

wscript.echo
wscript.echo "------------------------"
wscript.echo "Running Tests"
wscript.echo "------------------------"

' Domain or Non-domain can use the local administrator account
if (lcase(user_domain) = lcase(hostname)) then
	if (lcase(user_name) = "administrator") then
		wscript.echo "PASS - Account is the local Administrator."
		wscript.quit
	else
		wscript.echo "FAIL - Local account but not the actual Administrator account."
		wscript.quit
	end if
end if


' The domain user must be a member of the local Administrators group
if (part_of_domain = "True" and lcase(user_domain) <> lcase(hostname) and instr(lcase(local_administrators), lcase(user))) then
	wscript.echo "PASS - Domain account is in the local Administrators group."
	wscript.quit
end if


' The domain user must be in the local Administrators group
' or in a group that is in the local Administrators group
if (part_of_domain = "True" and lcase(user_domain) <> lcase(hostname)) then
	temp = split(local_administrators, ",")
	temp2 = split(user_ldap_groups, ",")
	dim hit_la, d_group

	for each local_admin in temp
		if (local_admin <> "") then
			temp3 = split(local_admin, "@")
			local_admin = temp3(0)
			if (debugging = 1) then wscript.echo "" end if
			for each domain_admin in temp2
				if (domain_admin <> "") then
					if (lcase(local_admin) = lcase(domain_admin)) then
						if (debugging = 1) then wscript.echo "Local Admin (" & local_admin & "), Domain Group (" & domain_admin & ") - MATCH." end if
						hit_la = "y"
						d_group = domain_admin
					else
						if (debugging = 1) then wscript.echo "Local Admin (" & local_admin & "), Domain Group (" & domain_admin & ") - NO MATCH." end if
					end if
				end if
			next
		end if
	next
	if (hit_la = "y") then
		wscript.echo "PASS - Domain account is a member of " & d_group & " which is a member of the local Administrators group."
		wscript.quit
	else
		wscript.echo "FAIL - Account is not a member of the local Administrators group (or subgroup)."
		qscript.quit
	end if
end if

Sub forceCScriptExecution
	Dim Arg, Str
	if not lcase( Right( wscript.FullName, 12 ) ) = "\cscript.exe" then
		for each arg in WScript.Arguments
			If InStr( Arg, " " ) Then Arg = """" & Arg & """"
			Str = Str & " " & Arg
		Next
		CreateObject("WScript.Shell").Run "cscript //nologo """ & WScript.ScriptFullName & """ " & Str
    	wscript.quit
	end if
End Sub



Sub ShowError(strMessage)
	wscript.echo "-----ERROR-----"
    wscript.echo strMessage
    wscript.echo "Error Number: " & Err.Number
    wscript.echo "Source: " & Err.Source 
    wscript.echo "Description: " &  Err.Description
    wscript.echo "---------------"
    Err.Clear
    wscript.quit
End Sub
