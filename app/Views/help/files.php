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

$body = '<br>';
