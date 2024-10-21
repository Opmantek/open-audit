'  Copyright 2022 Firstwave (www.firstwave.com)
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
'  www.firstwave.com or email sales@firstwave.com
'
' *****************************************************************************

' @package Open-AudIT
' @author Mark Unwin <mark.unwin@firstwave.com>
' @version   GIT: Open-AudIT_5.6.0
' @copyright Copyright (c) 2022, Firstwave
' @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3

Option Explicit

forceCScriptExecution

' these can be overridden on the command line
dim user, debugging, help, arg, arg_name, arg_value

' script variables
dim colItems, objItem, objArgs, objNetwork, objConnection, objCommand, objRecordSet 
dim objUser, colMembers, strMember, strPath, objNestedGroup
dim colGroups, objGroups, objGroup, oReg
dim temp, temp2, temp3
dim test_domain

const wbemFlagReturnImmediately = &h10
const wbemFlagForwardOnly       = &h20
const HKEY_CLASSES_ROOT         = &H80000000
const HKEY_CURRENT_USER         = &H80000001
const HKEY_LOCAL_MACHINE        = &H80000002
const HKEY_USERS                = &H80000003

debugging = 0
test_domain = 1

' below we take any command line arguements
' to override the variables above, simply include them on the command line like submit_online=n
' NOTE - argurments are case sensitive
Set objArgs = wscript.arguments
for each arg in objArgs
    if instr(arg, "=") then
        arg_name = lcase(left(arg,inStr(arg,"=")-1))
        arg_value = mid(arg,inStr(arg,"=")+1)
        select case lcase(arg_name)

            'case "user"
            '    user = arg_value

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
wscript.echo "(c) Firstwave, 2022."
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
    wscript.echo "To run the script and test another user (useful if having a 'normal' user run this on their PC, run the script like 'cscript test_windows_target.vbs user=administrator@your_domain'. NOTE - no need to specificy the complete domain name, the short version should not be supplied. IE - mydomain, not mydomain.com"
    wscript.echo ""
    wscript.echo "Valid command line options are below (items containing * are the defaults) and should take the format name=value (eg: user=user@domain)."
    wscript.echo ""
    'wscript.echo "  user"
    'wscript.echo "     - This is not set by default. If supplied it will test the supplied user. If not set it will test the user runninng this script. Format should be user@domain."
    'wscript.echo ""
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

On Error Resume Next
Set objNetwork = WScript.CreateObject("WScript.Network")
If Err.Number <> 0 Then ShowError("Cannot create wscript.network.") end if

dim objWMIService
On Error Resume Next
Set objWMIService = GetObject("winmgmts:\\.\root\CIMV2")
If Err.Number <> 0 Then ShowError("Cannot connect to local WMI.") end if

dim objShell
set objShell = CreateObject("WScript.Shell")

dim hostname, running_user, running_user_domain, objWMIService2

hostname = objNetwork.ComputerName
If Err.Number <> 0 Then ShowError("Cannot retrieve local computer name.") end if

running_user = objNetwork.userName
If Err.Number <> 0 Then ShowError("Cannot retrieve user name of user running this script.") end if

running_user_domain = objNetwork.userDomain
If Err.Number <> 0 Then ShowError("Cannot retrieve user domain of user running this script.") end if

dim user_domain, user_name, user_from_cs
user_from_cs = "False"
Set colItems = objWMIService.ExecQuery("SELECT * FROM Win32_ComputerSystem", "WQL", wbemFlagReturnImmediately + wbemFlagForwardOnly)
If Err.Number <> 0 Then ShowError("Cannot select from Win32_ComputerSystem (1).") end if
if (user = "") then
    For Each objItem In colItems
        user = objItem.userName
        If Err.Number <> 0 Then ShowError("Cannot select userName.") end if
    Next
    'wscript.echo "User from Win32_ComputerSystem is:     " & user
    If InStr(user, "\") > 0 then
        temp = split(user, "\")
        user_domain = temp(0)
        user_name = temp(1)
        user_from_cs = "True"
    else
        wscript.echo "WARNING - No slash in retrieved userName, using previously detected attributes."
        user_domain = running_user_domain
        user_name = running_user
    end if
    'wscript.echo "User Name from Win32_ComputerSystem:   " & user_name
    'wscript.echo "User Domain from Win32_ComputerSystem: " & user_domain
else
    temp = split(user, "@")
    If Err.Number <> 0 Then ShowError("No @ in supplied user name.") end if
    user_domain = temp(1)
    If Err.Number <> 0 Then ShowError("No domain in supplied user name.") end if
    user_name = temp(0)
    If Err.Number <> 0 Then ShowError("No name in supplied user name.") end if
end if


dim cs_current_timezone, cs_daylight_in_effect, cs_dns_hostname, cs_domain
dim cs_domain_role, cs_enable_ds_time, cs_part_of_domain, cs_workgroup
Set colItems = objWMIService.ExecQuery("SELECT * FROM Win32_ComputerSystem", "WQL", wbemFlagReturnImmediately + wbemFlagForwardOnly)
If Err.Number <> 0 Then ShowError("Cannot select from Win32_ComputerSystem (2).") end if
For Each objItem In colItems

    cs_current_timezone = objItem.CurrentTimeZone
    If Err.Number <> 0 Then ShowError("Cannot select CurrentTimezone from Win32_ComputerSystem.") end if

    cs_daylight_in_effect = objItem.DaylightInEffect
    If Err.Number <> 0 Then ShowError("Cannot select DaylightInEffect from Win32_ComputerSystem.") end if

    cs_dns_hostname = objItem.DNSHostName
    If Err.Number <> 0 Then ShowError("Cannot select DNSHostName from Win32_ComputerSystem.") end if

    cs_domain = objItem.Domain
    If Err.Number <> 0 Then ShowError("Cannot select Domain from Win32_ComputerSystem.") end if

    cs_enable_ds_time = objItem.EnableDaylightSavingsTime
    If Err.Number <> 0 Then ShowError("Cannot select EnableDaylightSavingsTime from Win32_ComputerSystem.") end if

    cs_part_of_domain = objItem.PartOfDomain
    If Err.Number <> 0 Then ShowError("Cannot select PartOfDomain from Win32_ComputerSystem.") end if

    cs_workgroup = objItem.Workgroup
    If Err.Number <> 0 Then ShowError("Cannot select Workgroup from Win32_ComputerSystem.") end if

    if objItem.DomainRole = 0 then cs_domain_role = "Standalone Workstation" end if
    if objItem.DomainRole = 1 then cs_domain_role = "Member Workstation" end if
    if objItem.DomainRole = 2 then cs_domain_role = "Standalone Server" end if
    if objItem.DomainRole = 3 then cs_domain_role = "Member Server" end if
    if objItem.DomainRole = 4 then cs_domain_role = "Backup Domain Controller" end if
    if objItem.DomainRole = 5 then cs_domain_role = "Primary Domain Controller" end if
Next

dim os_number, os_name
Set colItems = objWMIService.ExecQuery("SELECT * FROM Win32_OperatingSystem", "WQL", wbemFlagReturnImmediately + wbemFlagForwardOnly)
If Err.Number <> 0 Then ShowError("Cannot select from Win32_OperatingSystem.") end if
for each objItem In colItems
    os_name = objItem.Caption
    os_number = objItem.BuildNumber
next

dim lt_local_time
set colItems = objWMIService.ExecQuery("SELECT * FROM Win32_LocalTime", "WQL", wbemFlagReturnImmediately + wbemFlagForwardOnly)
If Err.Number <> 0 Then ShowError("Cannot select from Win32_LocalTime.") end if
For Each objItem In colItems
    lt_local_time = objItem.Year & "-" & objItem.Month & "-" & objItem.Day & " " & objItem.Hour & ":" & objItem.Minute & ":" & objItem.Second
    If Err.Number <> 0 Then ShowError("Failed to create local time (1).")
Next

dim group_domain, member_domain, local_administrators
if (test_domain <> 0 ) then
    Set colGroups = GetObject("WinNT://" & hostname & "")
    If Err.Number <> 0 Then ShowError("Cannot select from WinNT.") end if
    colGroups.Filter = Array("group")
    If Err.Number <> 0 Then ShowError("Cannot filter Group from WinNT.") end if
    For Each objGroup In colGroups
        if objGroup.Name = "Administrators" then
            If Err.Number <> 0 Then
                ShowError("Cannot select Name from WinNT.")
            end if
            For Each objUser in objGroup.Members
                group_domain = split(objUser.ADSPath, "/")
                If Err.Number <> 0 Then
                    ShowError("Cannot split ADSPath from WinNT.")
                end if
                    member_domain = group_domain(ubound(group_domain)-1)
                If Err.Number <> 0 Then
                    ShowError("Cannot get domain from split ADSPath.")
                end if
                local_administrators = local_administrators & objUser.name & "@" & member_domain & ","
            Next
        end if
    Next
end if

wscript.echo ""
wscript.echo "Computer Settings"
wscript.echo "================="
wscript.echo "Computer Time:             " & lt_local_time
wscript.echo "Computer Name:             " & hostname
' wscript.echo "User Running Name:         " & running_user
' wscript.echo "User Running Domain:       " & running_user_domain
wscript.echo "User Name:                 " & user_name
wscript.echo "User Domain:               " & user_domain
wscript.echo "User derived from CS:      " & user_from_cs
wscript.echo "Daylight In Effect:        " & cs_daylight_in_effect
wscript.echo "EnableDaylightSavingsTime: " & cs_enable_ds_time
wscript.echo "Current Time Zone:         " & cs_current_timezone
wscript.echo "Computer DNS Name:         " & cs_dns_hostname
wscript.echo "Computer Domain:           " & cs_domain
wscript.echo "Workgroup:                 " & cs_workgroup
wscript.echo "PartOfDomain:              " & cs_part_of_domain
wscript.echo "DomainRole:                " & cs_domain_role
wscript.echo "OS Name:                   " & os_name
wscript.echo "OS Build Number:           " & os_number
wscript.echo "Local Administrators:      " & left(local_administrators,len(local_administrators)-1)
wscript.echo ""

if (test_domain <> 0 ) then
    cs_part_of_domain = "false"
end if

dim ad_client_site_name, ad_dc_site_name, ad_description, ad_dns_forest_name
dim ad_domain_controller_address, ad_domain_controller_address_type, ad_domain_controller_name, ad_domain_name
if (cs_part_of_domain = "True") then
    Set colItems = objWMIService.ExecQuery("SELECT * FROM Win32_NTDomain where domainname = '" & user_domain & "' ", "WQL", wbemFlagReturnImmediately + wbemFlagForwardOnly)
    If Err.Number <> 0 Then
        wscript.echo "-----ERROR-----"
        wscript.echo "Cannot select from Win32_NTDomain."
        wscript.echo "Error Number: " & Err.Number
        wscript.echo "Source: " & Err.Source 
        wscript.echo "Description: " &  Err.Description
        wscript.echo "---------------"
    Else
        For Each objItem In colItems
            ad_client_site_name = objItem.ClientSiteName
            If Err.Number <> 0 Then ShowError("Cannot select ClientSiteName from Win32_NTDomain.") end if

            ad_dc_site_name = objItem.DcSiteName
            If Err.Number <> 0 Then ShowError("Cannot select DcSiteName from Win32_NTDomain.") end if

            ad_description = objItem.Description
            If Err.Number <> 0 Then ShowError("Cannot select Description from Win32_NTDomain.") end if

            ad_dns_forest_name = objItem.DnsForestName
            If Err.Number <> 0 Then ShowError("Cannot select DnsForestName from Win32_NTDomain.") end if

            ad_domain_controller_address = objItem.DomainControllerAddress
            If Err.Number <> 0 Then ShowError("Cannot select DomainControllerAddress from Win32_NTDomain.") end if

            ad_domain_controller_address_type = objItem.DomainControllerAddressType
            If Err.Number <> 0 Then ShowError("Cannot select DomainControllerAddressType from Win32_NTDomain.") end if

            ad_domain_controller_name = objItem.DomainControllerName
            If Err.Number <> 0 Then ShowError("Cannot select DomainControllerName from Win32_NTDomain.") end if

            ad_domain_name = objItem.DomainName
            If Err.Number <> 0 Then ShowError("Cannot select DomainName from Win32_NTDomain.") end if
        Next
    end If
end If


if (cs_part_of_domain = "True" and _
        lcase(user_domain) <> lcase(hostname) and _
        lcase(user_domain) <> lcase(cs_domain) and _
        lcase(user_domain) <> lcase(ad_description) and _
        lcase(user_domain) <> lcase(ad_domain_name)) then
    ' we need to use an Active Directory account to be able to query Active Directory
    wscript.echo vbcrlf & "FAIL - You must use a domain account to run this script if you are querying a domain. Please log on to this computer with a domain account and re-run this script."
    wscript.quit 1
end if

dim ldap_domain, user_ldap, user_ldap_groups
if (cs_part_of_domain = "True" and lcase(user_domain) <> lcase(hostname)) then
    ' this PC belongs to a domain.

    ldap_domain = "dc=" & replace(cs_domain, ".", ",dc=")

    Const ADS_SCOPE_SUBTREE = 2
    Set objConnection = CreateObject("ADODB.Connection")
    If Err.Number <> 0 Then ShowError("Cannot create ADODB.Connection.") end if
    Set objCommand =   CreateObject("ADODB.Command")
    If Err.Number <> 0 Then ShowError("Cannot create ADODB.Command.") end if
    objConnection.Provider = "ADsDSOObject"
    If Err.Number <> 0 Then ShowError("Cannot create ADODB.Provider.") end if
    objConnection.Open "Active Directory Provider"
    If Err.Number <> 0 Then ShowError("Cannot open ADODB.Connection.") end if
    Set objCommand.ActiveConnection = objConnection
    If Err.Number <> 0 Then ShowError("Cannot create objConnection.") end if
    objCommand.Properties("Page Size") = 1000
    If Err.Number <> 0 Then ShowError("Cannot set Page Size.") end if
    objCommand.Properties("Searchscope") = ADS_SCOPE_SUBTREE 
    If Err.Number <> 0 Then ShowError("Cannot set Search Scope.") end if
    dim command_text : command_text = "SELECT distinguishedName FROM 'LDAP://" & ldap_domain & "' WHERE objectCategory='user' AND sAMAccountName='" & user_name & "'"

    objCommand.CommandText = command_text
    If Err.Number <> 0 Then ShowError("Cannot set CommandText.") end if

    Set objRecordSet = objCommand.Execute
    If Err.Number <> 0 Then ShowError("Cannot execute CommandText.") end if

    objRecordSet.MoveFirst
    If Err.Number <> 0 Then ShowError("Cannot moveFirst over CommandText.") end if
    
    
    Do Until objRecordSet.EOF
        user_ldap = objRecordSet.Fields("distinguishedName").Value
        If Err.Number <> 0 Then ShowError("Cannot get distinguishedName.") end if
        objRecordSet.MoveNext
    Loop

    Set objUser = GetObject("LDAP://" & user_ldap) 
    If Err.Number <> 0 Then ShowError("Cannot connect to LDAP.") end if
    Set colGroups = objUser.Groups
    If Err.Number <> 0 Then ShowError("Cannot get Groups from LDAP.") end if
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
end if

if (cs_part_of_domain = "True") then
    wscript.echo "Active Directory Details"
    wscript.echo "========================"
    wscript.echo "AD Client Site Name:               " & ad_client_site_name
    wscript.echo "AD DC Site Name:                   " & ad_dc_site_name
    wscript.echo "AD Description:                    " & ad_description
    wscript.echo "AD Domain Name (short):            " & ad_domain_name
    wscript.echo "AD DNS Forest Name:                " & ad_dns_forest_name
    wscript.echo "AD Domain Controller Address:      " & ad_domain_controller_address
    wscript.echo "AD Domain Controller Name:         " & ad_domain_controller_name
    wscript.echo "AD Domain Controller Address Type: " & ad_domain_controller_address_type
    wscript.echo "LDAP Connect String:               " & command_text
    wscript.echo "LDAP Domain:                       " & ldap_domain
    wscript.echo "LDAP User Account:                 " & user_ldap
    if (user_ldap_groups > "") then
        wscript.echo "User LDAP Groups:                  " & left(user_ldap_groups,len(user_ldap_groups)-1)
    else
        wscript.echo "User LDAP Groups:                  None other than primary."
    end if
end if


dim ad_dc_current_timezone, ad_dc_daylight_in_effect, ad_dc_enable_daylight_savings_time, ad_dc_local_time
' Connect to the AD Controller and retrieve it's time
if (cs_part_of_domain = "True") then
    if (instr(lcase(cs_domain_role), "ontroller") = 0 ) then
        ' we belong to a domain and we are not a domain controller.
        set objWMIService2 = GetObject("winmgmts:\\" & domain_controller_name & "\root\cimv2")
        If Err.Number <> 0 Then ShowError("Problem authenticating to Domain Controller '" & ad_domain_controller_name & "'") end if

        colItems = objWMIService2.ExecQuery("SELECT * FROM Win32_LocalTime", "WQL", wbemFlagReturnImmediately + wbemFlagForwardOnly)
        If Err.Number <> 0 Then ShowError("Cannot select from Win32_LocalTime on " & ad_domain_controller_name) end if
        For Each objItem In colItems
            ad_dc_local_time = objItem.Year & "-" & objItem.Month & "-" & objItem.Day & " " & objItem.Hour & ":" & objItem.Minute & ":" & objItem.Second
            If Err.Number <> 0 Then ShowError("Failed to create local time (2).") end if
        Next

        Set colItems = objWMIService2.ExecQuery("SELECT * FROM Win32_ComputerSystem", "WQL", wbemFlagReturnImmediately + wbemFlagForwardOnly)
        For Each objItem In colItems
            ad_dc_current_timezone = objItem.CurrentTimeZone
            If Err.Number <> 0 Then ShowError("Cannot select CurrentTimezone from Win32_ComputerSystem on " & domain_controller_name) end if

            ad_dc_daylight_in_effect = objItem.DaylightInEffect
            If Err.Number <> 0 Then ShowError("Cannot select DaylightInEffect from Win32_ComputerSystem on " & domain_controller_name) end if

            ad_dc_enable_daylight_savings_time = objItem.EnableDaylightSavingsTime
            If Err.Number <> 0 Then ShowError("Cannot select EnableDaylightSavingsTime from Win32_ComputerSystem on " & domain_controller_name) end if
        next
        wscript.echo "DC Current Time:                 " & ad_dc_local_time
        wscript.echo "DC Current Time Zone:            " & ad_dc_current_timezone
        wscript.echo "DC Daylight In Effect:           " & ad_dc_daylight_in_effect
        wscript.echo "DC Enable Daylight Savings Time: " & ad_dc_enable_daylight_savings_time
        wscript.echo
    end if
end if



wscript.echo
wscript.echo "------------------------"
wscript.echo "Running Tests"
wscript.echo "------------------------"


wscript.echo
wscript.echo "------------------------"
wscript.echo "Testing 64-bit"
wscript.echo "------------------------"
dim address_width
set colItems = objWMIService.ExecQuery("Select * from Win32_Processor where DeviceID = 'CPU0' ", "WQL", wbemFlagReturnImmediately + wbemFlagForwardOnly)
If Err.Number <> 0 Then ShowError("Cannot select from Win32_Processor") end if
for each objItem In colItems
    address_width = objItem.AddressWidth
next
if (address_width = "32") then
    wscript.echo "FAIL - Discovery requires a 64bit Processor."
else
    wscript.echo "PASS - 64bit processor detected."
end if

set colItems = objWMIService.ExecQuery("Select * from Win32_OperatingSystem ", "WQL", wbemFlagReturnImmediately + wbemFlagForwardOnly)
If Err.Number <> 0 Then ShowError("Cannot select from Win32_OperatingSystem") end if
for each objItem In colItems
    address_width = objItem.OSArchitecture
next
if (address_width <> "64-bit") then
    wscript.echo "FAIL - Discovery requires a 64bit operating system."
else
    wscript.echo "PASS - 64bit operating system detected."
end if


wscript.echo
wscript.echo "------------------------"
wscript.echo "Testing Services"
wscript.echo "------------------------"
set colItems = objWMIService.ExecQuery("Select * from Win32_Service Where name = 'RpcSs' ", "WQL", wbemFlagReturnImmediately + wbemFlagForwardOnly)
for each objItem In colItems
    if (objItem.Caption = "Remote Procedure Call (RPC)") then
        if (objItem.State = "Stopped") then
            wscript.echo "FAIL - RPC service not running."
        else
            wscript.echo "PASS - RPC service registered and running."
        end if
    else
        wscript.echo "FAIL - RPC service not returned."
    end if
next

set colItems = objWMIService.ExecQuery("Select * from Win32_Service Where name = 'Netlogon' ", "WQL", wbemFlagReturnImmediately + wbemFlagForwardOnly)
for each objItem In colItems
    if (objItem.Caption = "Netlogon") then
        if (objItem.State = "Stopped") then
            wscript.echo "INFO - Netlogon service not running."
        else
            wscript.echo "PASS - Netlogon service registered and running."
        end if
    else
        wscript.echo "FAIL - Netlogon service not returned."
    end if
next

wscript.echo
wscript.echo "------------------------"
wscript.echo "Testing DNS"
wscript.echo "------------------------"
' Check we can resolve all IPv4 IP's to DNS Names
dim i, ip_address, ip_address_version, strParams, hit, strhost, strText, objExecObj
set colItems = objWMIService.ExecQuery("Select * from Win32_NetworkAdapterConfiguration WHERE IPEnabled = True ", "WQL", wbemFlagReturnImmediately + wbemFlagForwardOnly)
for each objItem in colItems
    if (objItem.MACAddress > "") then
        for i = LBound(objItem.IPAddress) to UBound(objItem.IPAddress)
            if len(objItem.IPAddress(i)) > 15 then
                ip_address_version = "6"
            else
                ip_address_version = "4"
            end if
            if objItem.IPAddress(i) <> "0.0.0.0" and ip_address_version = "4" then
                strParams = "%comspec% /c NSlookup " & objItem.IPAddress(i) & " | findStr Name: "
                wscript.echo "NSLookup for " & objItem.IPAddress(i)
                Set objExecObj = objShell.exec(strParams)
                hit = "false"
                strhost = ""
                do while Not objExecObj.StdOut.AtEndOfStream
                    strText = objExecObj.StdOut.Readline()
                    if (strText <> "") then
                        if (instr (strText, "Name") and instr(lcase(strText), lcase(hostname))) then
                            'hit = "true"
                            'strhost = trim(replace(strText,"Name:",""))
                            wscript.echo "PASS - Could resolve " & objItem.IPAddress(i) & " to " & trim(replace(strText,"Name:",""))
                        elseif (instr (strText, "Name")) then
                            wscript.echo "INFO - Resolved " & objItem.IPAddress(i) & " to " & trim(replace(strText,"Name:","")) & ", but this isn't the hostname"
                        else
                            wscript.echo "FAIL - Could not resolve " & objItem.IPAddress(i)
                        end if
                    end if
                loop
                ' if (hit = "true") then
                '     wscript.echo "PASS - Could resolve " & objItem.IPAddress(i) & " to " & strhost
                ' else
                '     wscript.echo "FAIL - Could not resolve " & objItem.IPAddress(i)
                ' end if
            end if
        next
    end if
next

wscript.echo
wscript.echo "------------------------"
wscript.echo "Testing Account"
wscript.echo "------------------------"
' check localtime versus domain controller time
if (cs_part_of_domain = "True" and instr(lcase(cs_domain_role), "controller") = 0 ) then
    if ( abs(datediff("s", lt_local_time, ad_dc_local_time)) > 300) then
        wscript.echo "FAIL - There is a difference of greater than 5 minutes between your local time and that of your nearest Domain Controller."
    end if
    if (cs_current_timezone <> dc_current_timezone) then
        wscript.echo "FAIL - Local timezone should be the same as your nearest Domain Controller."
    end if
    if (cs_daylight_in_effect <> dc_daylight_in_effect) then
        wscript.echo "FAIL - Daylight Savings in Effect should be the same as your nearest Domain Controller."
    end if
    if (cs_enable_daylight_savings_time <> dc_enable_daylight_savings_time) then
        wscript.echo "FAIL - Enable Daylight Savings should be the same as your nearest Domain Controller."
    end if
end if

' Domain or Non-domain can use the local administrator account
if (lcase(user_domain) = lcase(hostname)) then
    if (lcase(user_name) = "administrator") then
        wscript.echo "PASS - Account is the local Administrator."
    else
        wscript.echo "FAIL - Local account but not the actual Administrator account."
    end if
end if


' The domain user must be a member of the local Administrators group
if (cs_part_of_domain = "True" and lcase(user_domain) <> lcase(hostname) and instr(lcase(local_administrators), lcase(user))) then
    wscript.echo "PASS - Domain account is in the local Administrators group."
end if


' The domain user must be in the local Administrators group
' or in a group that is in the local Administrators group
dim local_admin, domain_admin
if (cs_part_of_domain = "True" and lcase(user_domain) <> lcase(hostname)) then
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
    else
        wscript.echo "FAIL - Account is not a member of the local Administrators group (or subgroup)."
    end if
end if

wscript.echo
wscript.echo "------------------------"
wscript.echo "Connecting to Registry"
wscript.echo "------------------------"
temp = ""
set oReg = GetObject("winmgmts:{impersonationLevel=impersonate}!\\.\root\default:StdRegProv")
If Err.Number <> 0 Then
    ShowError("Cannot connect to local registry.")
else
    wscript.echo "PASS - Can connect to registry"
end if


wscript.echo
wscript.echo "------------------------"
wscript.echo "Testing UAC blocking inbound requests"
wscript.echo "------------------------"
oReg.GetDWORDValue HKEY_LOCAL_MACHINE,"SOFTWARE\Microsoft\Windows\CurrentVersion\Policies\System","EnableLUA", temp
If Err.Number <> 0 Then ShowError("Cannot read local registry.") end if
if (isnull(temp) or temp <> "1") then
    wscript.echo "INFO - UAC is not disabled for remote connections."
    wscript.echo "You can disable it by entering the below in an administrative console window."
    wscript.echo "reg add HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\CurrentVersion\Policies\System /v LocalAccountTokenFilterPolicy /t REG_DWORD /d 1 /f"
    wscript.echo "This registry change will require a restart to take effect."
else
    wscript.echo "PASS - UAC registry entry exists and is set to 1."
end if



wscript.echo
wscript.echo "------------------------"
wscript.echo "Checking SMB1"
wscript.echo "------------------------"
dim smb1
Err.Clear
oreg.GetDWORDValue HKEY_LOCAL_MACHINE, "SYSTEM\CurrentControlSet\Services\LanmanServer\Parameters", "SMB1", smb1
'if Err.Number <> 0 then
''    wscript.echo "INFO - SMB1 not present in registry, therefore enabled."
'else
    if (smb1 = "" or isnull(smb1)) then
        wscript.echo "INFO - SMB1 not present in registry, therefore enabled."
    elseif (smb1 = "1" or smb1 = "" or isnull(smb1)) then
        wscript.echo "INFO - SMB1 configured with a value of 1, therefore enabled."
    elseif (smb1 = "0") then
        wscript.echo "INFO - SMB1 configured with a value of 0, therefore disabled."
    elseif (smb1 <> "0" and smb1 <> "1") then
        wscript.echo "WARNING - SMB1 configured with an invalid value of " & smb1 & ", cannot determine SMB1 status."
    else
        wscript.echo "WARNING - Unknown issue detecting SMB1 in registry."
    end if
'end if






wscript.echo
wscript.echo "------------------------"
wscript.echo "Checking DCOM"
wscript.echo "------------------------"
dim dcom_enabled
oreg.getstringvalue HKEY_LOCAL_MACHINE, "SOFTWARE\Microsoft\Ole", "enableDCOM", dcom_enabled
if (dcom_enabled = "Y") then
    wscript.echo "PASS - DCOM is enabled."
else
    wscript.echo "FAIL - DCOM is disabled."
end if




if (instr(lcase(os_name), "xp")) then
    wscript.echo
    wscript.echo "------------------------"
    wscript.echo "Checking SImple File Sharing on XP"
    wscript.echo "------------------------"
    dim force_guest
    oreg.GetDWORDValue HKEY_LOCAL_MACHINE, "SYSTEM\CurrentControlSet\Control\Lsa", "ForceGuest", force_guest
    if (force_guest = "0") then
        wscript.echo "PASS - Simple File Sharing is disabled."
    else
        wscript.echo "FAIL - Simple File Sharing is enabled."
    end if
end if




wscript.echo
wscript.echo "------------------------"
wscript.echo "Firewall State"
wscript.echo "------------------------"

Dim CurrentProfiles, InterfaceArray, LowerBound, UpperBound
Dim iterate, rule, firewall

' Profile Type
Const NET_FW_PROFILE2_DOMAIN = 1
Const NET_FW_PROFILE2_PRIVATE = 2
Const NET_FW_PROFILE2_PUBLIC = 4

' Protocol
Const NET_FW_IP_PROTOCOL_TCP = 6
Const NET_FW_IP_PROTOCOL_UDP = 17
Const NET_FW_IP_PROTOCOL_ICMPv4 = 1
Const NET_FW_IP_PROTOCOL_ICMPv6 = 58

' Direction
Const NET_FW_RULE_DIR_IN = 1
Const NET_FW_RULE_DIR_OUT = 2

' Action
Const NET_FW_ACTION_BLOCK = 0
Const NET_FW_ACTION_ALLOW = 1

' Create the FwPolicy2 object.
Dim fwPolicy2
Set fwPolicy2 = CreateObject("HNetCfg.FwPolicy2")

CurrentProfiles = fwPolicy2.CurrentProfileTypes
dim fw_profile, fw_active

if ( CurrentProfiles AND NET_FW_PROFILE2_DOMAIN ) then
    fw_profile = "Domain"
    fw_active = fwPolicy2.FirewallEnabled(NET_FW_PROFILE2_DOMAIN)
elseif ( CurrentProfiles AND NET_FW_PROFILE2_PRIVATE ) then
    fw_profile = "Private"
    fw_active = fwPolicy2.FirewallEnabled(NET_FW_PROFILE2_PRIVATE)
elseif ( CurrentProfiles AND NET_FW_PROFILE2_PUBLIC ) then
    fw_profile = "Public"
    fw_active = fwPolicy2.FirewallEnabled(NET_FW_PROFILE2_PUBLIC)
end if

if (fw_active = "True") then
    wscript.echo "INFO - Current firewall profile " & fw_profile & " is active."
else
    wscript.echo "PASS - Current firewall profile " & fw_profile & " is not active."
end if

if (fw_active = "True") then
    Dim RulesObject
    Set RulesObject = fwPolicy2.Rules
    dim rule_service, rule_protocol, rule_port, rule_direction, rule_state, rule_action
    wscript.echo
    wscript.echo "------------------------"
    wscript.echo "Firewall Rules"
    wscript.echo "------------------------"

    for each rule in Rulesobject
        if rule.Profiles and CurrentProfiles then

            rule_service = rule.ServiceName

            select case rule.Protocol
                case NET_FW_IP_PROTOCOL_TCP    rule_protocol = "tcp"
                case NET_FW_IP_PROTOCOL_UDP    rule_protocol = "udp"
                case NET_FW_IP_PROTOCOL_ICMPv4 rule_protocol = "udp"
                case NET_FW_IP_PROTOCOL_ICMPv6 rule_protocol = "udp"
                case Else                      rule_protocol = rule.Protocol
            end select

            if rule.Protocol = NET_FW_IP_PROTOCOL_TCP or _
               rule.Protocol = NET_FW_IP_PROTOCOL_UDP then
                rule_port = rule.LocalPorts
            end if

            select case rule.Direction
                case NET_FW_RULE_DIR_IN  rule_direction = "in"
                case NET_FW_RULE_DIR_OUT rule_direction = "out"
                case else                rule_direction = "unknown"
            end select

            if (rule.Enabled = "True") then
                rule_state = "enabled"
            else
                rule_state = "disabled"
            end if

            select case rule.Action
                case NET_FW_ACTION_ALLOW  rule_action = "allowed"
                case NET_FW_ACTION_BLOCk  rule_action = "blocked"
            end select

            ' test the required rules - WMI
            if (instr(lcase(rule.Name), "windows management instrumentation") and rule_protocol = "tcp" ) then
                if (rule_action = "allowed" and rule_state = "enabled") then
                    wscript.echo "PASS - WMI rule " & replace(rule.Name, "Windows Management Instrumentation ", "") & " for " & rule_direction & "-bound connections on port " & rule_port & " to service " & rule_service & " to be " & rule_action & " is " & rule_state & "."
                else
                    wscript.echo "FAIL - WMI rule " & replace(rule.Name, "Windows Management Instrumentation ", "") & " for " & rule_direction & "-bound connections on port " & rule_port & " to service " & rule_service & " to be " & rule_action & " is " & rule_state & "."
                end if
            end if

            ' test the required rules - File & Printer Sharing
            if (instr(rule.Name, "File and Printer Sharing (Echo Request - ICMPv4-In)")) then
                if (rule_action = "allowed" and rule_state = "enabled") then
                    wscript.echo "PASS - File and Printer Sharing (Echo Request - ICMPv4-In) for " & rule_direction & "-bound connections to be " & rule_action & " is " & rule_state & "."
                else
                    wscript.echo "FAIL - File and Printer Sharing (Echo Request - ICMPv4-In) for " & rule_direction & "-bound connections to be " & rule_action & " is " & rule_state & "."
                end if
            end if

        end if ' rule / profile match
    next ' each rule
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
