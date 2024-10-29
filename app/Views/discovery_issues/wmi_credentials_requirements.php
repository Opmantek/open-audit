<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
?>
<br>
<h2>WMI Credentials Requirements</h2>
<br>
<p>To audit a machine, you must have credentials and administrator level access.<br>
<ul class="list-group list-group-flush">
    <li class="list-group-item">To audit a remote machine that is not in a domain, you must use the Administrator account (not "an" admin account, "the" Administrator account) on the target PC. #1 and #2</li>
    <li class="list-group-item">To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).</li>
    <li class="list-group-item">To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.</li>
    <li class="list-group-item">The account must have a password; WMI does not allow blank passwords.</li>
    <li class="list-group-item">The account password must NOT contain " (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.</li>
</ul>
<strong>#1 NOTE</strong> - To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.<br>
<strong>#2 NOTE</strong> - You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.<br>
<code>\HKEY_USERS\.DEFAULT\Software\Microsoft\Windows Script\Settings</code>
</p>