<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>Open-AudIT ' . __('can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.') . '</p>

<br>
<h2>' . __('How Does it Work?') . '</h2>

<p>' . __('When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below') . ':<br><br>

<pre>
# DO NOT REMOVE THE LINE BELOW
# Configuration from web UI here
</pre>

' . __('Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so') . ':<br><br>

<pre>
# DO NOT REMOVE THE LINE BELOW
# Configuration from web UI here
files[1]="/etc/init.d/"
</pre>

' . __('The audit script will use the files[ ] array and retrieve the file details.') . '

<br>' . __('If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation') . ' - <a href="' . url_to('scriptsHelp') . '">' . __('here') . '</a>.</p>';

$body = '<br>

<h2>' . __('Enabling the Feature Under Windows') . '</h2>

<p>' . __('There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.') . '
<br><br>' . __('See our page on enabling') . ' <a href="' . url_to('helpFAQ') . '?name=Running Open-AudIT Apache Service Under Windows">' . 
__('Running Open-AudIT Apache Service Under Windows') . '</a></p><br>';
