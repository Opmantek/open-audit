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
<h2>Matching Linux Devices</h2>
<p>When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the why\'s of hardware IDs. <a href="http://0pointer.de/blog/projects/ids.html">http://0pointer.de/blog/projects/ids.html</a>.</p>
<br>
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

$body = '<br>';
