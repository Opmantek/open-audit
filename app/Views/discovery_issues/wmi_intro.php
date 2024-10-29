<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
?>
<br>
<h2>Introduction</h2>
<br>
<p>On Windows, Open-AudIT uses WMI as it's primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either "just work" or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below don't exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.</p>

<p>Download the test_windows_client.vbs script directly <a href="<?= $meta->baseurl ?>index.php/util/test_windows_client">here</a>.<br>
<br>
To run the test script on the target Windows PC:<br>
<ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>NOTE</strong> - The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.</li>
    <li class="list-group-item">Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.</li>
    <li class="list-group-item">Start a web browser and go to <a href="<?= $meta->baseurl ?>index.php/util/test_windows_client"><?= $meta->baseurl ?>index.php/util/test_windows_client</a>. Save the downloaded file.</li>
    <li class="list-group-item">Call up a command prompt by clicking Start and searching for <code>command</code>.</li>
    <li class="list-group-item">In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).</li>
    <li class="list-group-item">Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.</li>
    <li class="list-group-item">Take note of all output and action each item as appropriate.</li>
    <li class="list-group-item">Go back to your Open-AudIT server and create a discovery with the target Windows PC's IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.</li>
    <li class="list-group-item">Repeat until you have a completely discovered and audited Windows PC.</li>
</ul>
<br><br>