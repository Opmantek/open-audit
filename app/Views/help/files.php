<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>Open-AudIT can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.</p>
    <br>
    <h2>How Does it Work?</h2>
    <p>When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you\'re thinking "but putting a Linux path into a Windows machine will break things!", it won\'t break, you just won\'t receive any data from that file or directory entry.<br>
    Retrieved details will be stored in the "file" database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - \'full_name\', \'hash\', \'inode\', \'last_changed\'. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>
    Attributes recorded are:<br><ul>
    <li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li>
    <br>
    <li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>
    You will see a section in both the Windows and Linux audit scripts as below:<br>
    <pre>
# DO NOT REMOVE THE LINE BELOW
# Configuration from web UI here
</pre>
Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so:<br>
<pre>
# DO NOT REMOVE THE LINE BELOW
# Configuration from web UI here
files[1]="/etc/init.d/"
</pre>
The audit script will use the files[ ] array and retrieve the file details.<br>
If you would like to use the script outside of Discovery we have created another endpoint called "scripts". See the documentation here - <a href="' . url_to('scriptsHelp') . '">Scripts</a>.</p>';

$body = '<h2>Enabling the Feature Under Windows</h2>
<p>There is no need to do anything if you\'re running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="' . url_to('helpFAQ') . '?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>';
