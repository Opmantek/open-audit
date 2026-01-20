<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$title = __('Windows Discovery Issues');

$intro = '<p>' . __('On Windows, Open-AudIT uses Powershell as it is primary method of auditing, after connections (on Linux) using winexe (which in turn uses port 135). Windows has a notorious reputation where remote connections are concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing.') . '</p>';

$body = '<h2>Windows Client Test Script</h2>
<p>' . __('If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended. Download the test_windows_client.vbs script directly') . 
' <a href="' . $meta->baseurl . 'index.php/util/test_windows_client">' . __('here') . 
'</a>.<br>' . 
__('To run the test script on the target Windows PC') . ':</p><br>
<p>
<ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>' . __('NOTE') . '</strong> - ' .
    __('The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.') . '</li>
    <li class="list-group-item">' . __('Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.') . '</li>
    <li class="list-group-item">' . __('Start a web browser and go to') . ' <a href="' . $meta->baseurl . 'index.php/util/test_windows_client">' . $meta->baseurl . 'index.php/util/test_windows_client</a>. ' .
    __('Save the downloaded file.') . '</li>
    <li class="list-group-item">' . __('Call up a command prompt by clicking Start and searching for <code>command</code>') . '.</li>
    <li class="list-group-item">' . __('In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).') . '</li>
    <li class="list-group-item">' . __('Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.') . '</li>
    <li class="list-group-item">' . __('Take note of all output and action each item as appropriate.') . '</li>
    <li class="list-group-item">' . __('Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.') . '</li>
    <li class="list-group-item">' . __('Repeat until you have a completely discovered and audited your Windows PCs.') . '</li>
</ul>
<br></p>

<h2>DCOM on Windows</h2>
<p>
<p>' . __('On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.') .
'<br>
<br>' .
__('Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab') .
'<br>
<ul>
    <li>' . __('Enable Distributed COM on this computer - Option is checked') . '</li>
    <li>' . __('Default Authentication Level - Set to Connect') . '</li>
    <li>' . __('Default Impersonation Level - Set to Identify') . '</li>
</ul>

<br>'
. __('Select the COM Security tab, then click on Access Permissions Edit Default') . '<br>
<ul>
    <li>' . __('Add') . ' "Anonymous", "Everyone", "Interactive", "Network", "System" ' . __('with Local and Remote access permissions set.') . '</li>
</ul>

<br>'
. __('Click on Launch and Activation Permissions then Edit Default') . 
'<br>
<ul>
    <li>' . __('Add') . ' "Anonymous", "Everyone", "Interactive", "Network", "System" ' .
    __('with Local and Remote access permissions set.') . '</li>
</ul>
<br>' .
__('Click on OK and close the DCOMCNFG window. The above changes will require a reboot to take effect.') . '<br>
<br>
<br></p>

<h2>WMI Credentials Requirements</h2>
<p>' . __('To audit a machine, you must have credentials and administrator level access.') . '</p><br>
<ul class="list-group list-group-flush">

    <li class="list-group-item">' . __('To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2') . '</li>

    <li class="list-group-item">' . __('To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).') . '</li>

    <li class="list-group-item">' . __('To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.') . '</li>

    <li class="list-group-item">' . __('The account must have a password; WMI does not allow blank passwords.') . '</li>

    <li class="list-group-item">' . __('The account password must NOT contain " (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.') . '</li>
</ul><p><br>
' . __('NOTE - To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.') . '<br><br>

' . __('NOTE - You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.') . '<br><br><code>\HKEY_USERS\.DEFAULT\Software\Microsoft\Windows Script\Settings</code>
<br><br>
</p>




<h2>ERROR: Failed to open connection - NT_STATUS_LOGON_FAILURE</h2>
<br>
<p>' . __('This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.') . '<br><br></p>

<h2>ERROR: Failed to open connection - NT_STATUS_CONNECTION_RESET</h2>
<br>
<p>' . __('This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see') . ' <a href="../discovery_issues/1">' . __('here') . '</a>.<br><br></p>

<h2>ERROR: Failed to save ADMIN$/winexesvc.exe - NT_STATUS_ACCESS_DENIED</h2>
<br>
<p>' . __('When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use') . ' <a href="https://sourceforge.net/p/winexe/wiki/Home/">Winexe</a>. ' . __('This code relys on the great work done by the') . ' <a hre="https://www.samba.org/">Samba</a> ' . __('team') . '. ' . __('Winexe page on Samba') . ' <a href="https://www.samba.org/samba/docs/current/man-html/winexe.1.html" target="_blank">' . __('here') . '</a>.<br></p>

<p>' . __('When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use') . ' <a href="https://www.poweradmin.com/paexec/">PAExec</a>. ' . __('PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.') . '<br></p>

<p>' . __('Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).') . '<br>
<br>
' . __('Access to the admin$ share and RPC uses the SMB2 protocol.') . '<br>
<br>
' . __('This is also the way that PAExec works.') . '<br>
<br>' . __('As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.') . '<br><br>
</p>

<h2>ERROR: Connection Failed - NT_STATUS_NO_LOGON_SERVERS</h2>
<br>
<p>' . __('When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use') . ' <a href="https://sourceforge.net/p/winexe/wiki/Home/">Winexe</a>. ' . __('This code relys on the great work done by the') . ' <a hre="https://www.samba.org/">Samba</a> ' . __('team') . '. ' . __('Winexe page on Samba') . ' <a href="https://www.samba.org/samba/docs/current/man-html/winexe.1.html" target="_blank">' . __('here') . '</a>.<br></p>

<p>Winexe <strong>' . __('must') . '</strong> ' . __('have a working reverse DNS resolvable IP to the target Windows PC.') . '<br>
<br>
' . __('Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.') . '<br><br>
</p>

<h2>ERROR: Failed to open connection - NT_STATUS_CONNECTION_REFUSED</h2>
<br>
<p>' . __('Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.') . '<br><br></p>


<h2>ERROR: NT_STATUS_NETLOGON_NOT_STARTED</h2>
<br>
<p>' . __('Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.') . '<br><br></p>


<h2>ERROR: StartService failed. NT_STATUS_CANT_WAIT</h2>
<br>

<p>' . __('This issue is under investigation.') . '</p>

<p>' . __('The Windows log may say the following') . ': <br>

The <i>reevert Communication Agent</i> ' . __('service failed to start due to the following error') . ': <code>Access is denied</code>.<br>
<br>
The machine-default permission settings do not grant Local Activation permission for the COM Server application with CLSID {C2F03A33-21F5-47FA-B4BB-156362A2F239} and APPID {316CDED5-E4AE-4B15-9113-7055D84DCC97}
 to the user HELPAR\opDev SID (S-1-5-21-3343678625-1228429338-2497688395-1001) from address LocalHost (Using LRPC) running in the application container Microsoft.Windows.ShellExperienceHost_10.0.19041.1023_neutral_neutral_cw5n1h2txyewy SID (S-1-15-2-155514346-2573954481-755741238-1654018636-1233331829-3075935687-2861478708). This security permission can be modified using the Component Services administrative tool.<br><br></p>

 <h2>ERROR: StartService failed. NT_STATUS_CANT_WAIT</h2>
<br>

<p>' . __('Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).') . '<br>

<img src="' . $meta->baseurl . 'images/winexesvc_allow_01.png" style="width: 1024px;" alt="Allow WinExeSvc to run" /><br><br></p>


<h2>ERROR: Failed to open connection - NT_STATUS_NO_MEMORY</h2>
<br>
<p>' . __('This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.') . '<br><br></p>

';