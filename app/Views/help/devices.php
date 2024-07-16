<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>Devices and their configuration are what Open-AudIT is all about.</p>
<br>
<h2>Match Process</h2>
<p>When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.</p>
<br>
<h2>Duplicate Devices / Missing Devices</h2>
<p>It is important to note that when Open-AudIT determines a match any properties set to \'y\' must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked \'y\' match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.</p>
<br>
<p>Devices will not be matched if their status is set to "deleted". Any other status will allow a match to occur.</p>
<br>
<h2>Exporting a Device</h2>
<p>There is no button to do this, however if you view a device\'s details, then add <strong>?format=json_data</strong> to the URL, you will get the full database entry, including all component tables, of a given device.</p><br>';
$body ='<h2>Matching Linux Devices</h2>
<p>When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the why\'s of hardware IDs. <a target="_blank" href="http://0pointer.de/blog/projects/ids.html">http://0pointer.de/blog/projects/ids.html</a>.</p>
<br>
<h2>Matching Devices - Including OrgID</h2>
<p>This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.<br>
<br>
When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.<br>
<br>
When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:<br>
<ul>
    <li>match_dbus</li>
    <li>match_fqdn</li>
    <li>match_dns_fqdn</li>
    <li>match_hostname</li>
    <li>match_dns_hostname</li>
    <li>match_ip</li>
    <li>match_ip_no_data</li>
    <li>match_serial</li>
    <li>match_serial_type</li>
    <li>match_sysname</li>
</ul>
You might have noticed these match rules are for items that might not be globally unique. Some examples:<br>
<ul>
    <li>DBus - if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.</li>
    <li>FQDN - This should be globally unique, but I have seen instances where it is not.</li>
    <li>Hostname - Think of mail.domain1.com and mail.domain2.com - same hostname.</li>
    <li>IP - It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.</li>
    <li>Serial - It is very common for second tier motherboard manufacturers to not set this, to set it to all 0\'s or even all F\'s.</li>
    <li>Sysname - This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.</li>
</ul>
What does this actually mean to you?<br>
<br>
If you don\'t normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.<br>
<br>
If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.<br>
<br>
If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT "these devices from this discovery belong to Org X", but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.<br>
<br>
If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.<br>
</p>
<h2>Match Order</h2>
<p>The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here: /usr/local/open-audit/app/Helpers<br>
<br>
Matching is conducted in the following order:<br>
<ol>
    <li>Match the Opmantek UUID (not configurable)</li>
    <li>Match the Google Cloud ID (not configurable)</li>
    <li>match_hostname_uuid</li>
    <li>match_hostname_dbus</li>
    <li>match_hostname_serial</li>
    <li>match_dbus</li>
    <li>match_dns_fqdn</li>
    <li>match_dns_hostname</li>
    <li>match_fqdn</li>
    <li>match_serial_type</li>
    <li>match_serial</li>
    <li>match_sysname_serial</li>
    <li>match_sysname</li>
    <li>match_mac (ip table)</li>
    <li>match_mac (network table)</li>
    <li>match_mac (addresses)</li>
    <li>match_ip</li>
    <li>match_hostname</li>
    <li>match_ip_no_data</li>
</ol></p>
';
