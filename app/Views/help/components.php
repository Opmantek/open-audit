<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = "<p>Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br>
<br>
When a device is audited, attributes are divided into sections which correspond to tables in the database.<br>
<br>
Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br>
<br>
When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br>
<br>
For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br>
<br>
If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br>
<br>
At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to 'n' and a change_log entry is generated.<br>
<br>
So, we can determine if something is currently installed - the current column is 'y'.<br>
<br>
We can determine when something was initially detected - the 'first_seen'.<br>
<br>
We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br>
<br>
We can determine if something is not currently installed, but previously was - current = 'n'.<br>
<br>
We can determine the last time we detected an item - last_seen.<br>
<br>
At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br>
<br>
Each section and its matching key columns are below.<br>
<br>
NOTE - There are some exceptions as detailed below.<br>
<br>
*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br>
<br>
*2 - For partitions, f the computer is an AIX machine, we use the partition name.<br></p>";

$components = array('bios', 'certificate', 'disk', 'dns', 'executable', 'file', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'ip', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'radio', 'route', 'san', 'scsi', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'usb', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
$table = '';
foreach ($components as $component) {
    $table .= '<tr><td><strong>' . $component . '</strong></td>';
    $columns = match_columns($component);
    foreach ($columns as $column) {
        $table .= '<td>' . $column . '</td>';
    }
    $table .= "</tr>\n";
}

$body = '<br><br><table class="table">
    <thead>
        <tr>
            <th>Table</th>
            <th>Attribute #1</th>
            <th>Attribute #2</th>
            <th>Attribute #3</th>
            <th>Attribute #4</th>
            <th>Attribute #5</th>
        </tr>
    </thead>
    <tbody>' . $table . '
    </tbody>
</table>
<br>';
