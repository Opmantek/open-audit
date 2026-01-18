<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$title = __('Matching Devices');

$intro = '<p>' . __('When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the database resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.') . 
'<br><br></p>';

$body = '<h2>' . __('Duplicate Devices / Missing Devices') . '</h2><p>' .

__('It is important to note that when Open-AudIT determines a match any properties set to <strong>y</strong> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <strong>y</strong> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.') .

'</p><br><br><p>
' .

__('Devices will not be matched if their status is set to "deleted". Any other status will allow a match to occur.') .

'</p><h2>' . __('Matching Linux Devices') . '</h2><p>' .

__('When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the whys of hardware IDs. ') . '<a href="http://0pointer.de/blog/projects/ids.html">http://0pointer.de/blog/projects/ids.html</a><br><br>' .

'</p><br><br><p>' . 

__('In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,') . 

'</p><h2>' . __('Match Order') . '</h2><p>' .

__('The logic for device matching is contained in the device_helper.php file, which on a Linux install can be found here') . 

': <code>/usr/local/open-audit/app/Helpers/device_helper.php</code></p><p>' . 

__('Matching is conducted in the following order:') .

'</p><p>
<ol style="padding-left:80px;">
    <li>Match the Opmantek UUID (not configurable).</li>
    <li>Match the Google Cloud ID (not configurable).</li>
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
</ol></p><br><br>

<h2>match_ip_no_data</h2><p>' .

__('For a special case, we have a match routine that essentially says <i>If all I have is an IP, and that IP belongs to a device in the database and that device has not been audited, match that device regardless of the match_ip rule.</i>The reason for this is in the case of a discovered device that we do not have credentials for, we have virtually no information except the IP and maybe the DNS Hostname. Neither are considered unique (think DHCP). But in the case where we have a device with that lack of data already preset in the database, assume it is the same device so that we do not create many false duplicates. This configuration item is called match_ip_no_data and will be set to <strong>y</strong> by default.') .

'</p><br><br><h2>' . __('Community / Professional Device Matching') . '</h2><p>' .

__('Community and Professional users can set the matching rules globally in the configuration.') .

'</p><br><br><h2>' . __('Enterprise Device Matching') . '</h2><p>' .

__('For Enterprise Users, matching rules are able to be set per individual discovery. If a discovery has a value of <strong>y</strong> or <strong>n</strong> for a match rule, that will be used. If no value is present, the discovery will use the value set in the global configuration.') .

'</p><br><br><h2>' . __('Matching Devices - Including') . ' OrgID</h2><p>' . 

__('This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.') . 

'</p><br><br><p>' .

__('When you create a discovery you have an option <strong>devices_assigned_to_org</strong>. This means that any devices discovered for this discovery will be assigned (have devices.org_id set to) your chosen Organisation. This is taken this into account for devices for a certain defined subset of match rules. These rules are:') .

'</p><p><ul style="padding-left:80px;">
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
</ul></p><p>' . 

__('You might have noticed these match rules are for items that might not be globally unique. Some examples:') .

'</p><br><br><p><ul style="padding-left:80px;">
    <li>DBus - if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.</li>
    <li>FQDN - This should be globally unique, but I have seen instances where it is not.</li>
    <li>Hostname - Think of mail.domain1.com and mail.domain2.com - same hostname.</li>
    <li>IP - It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.</li>
    <li>Serial - It is very common for second tier motherboard manufacturers to not set this, to set it to all 0s or even all Fs.</li>
    <li>Sysname - This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.</li>
</ul></p><p>' . 

__('What does this actually mean to you?') .

'<br><br>' .

__('If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script).') .

'<br><br>' .

__('If you do normally set devices_assigned_to_org, then the OrgID will be used to further refine the match.') .

'<br><br>' .

__('If you subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT "these devices from this discovery belong to Org X", but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.') .

'<br><br>' .

__('If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.') .

'</p><br><br><h2>' . __('Match Properties') . '</h2><p>' .

__('These properties are stored in Open-AudITs configuration; to access them select Admin -> Configuration -> List Configuration from Open-AudITs menu, then use the Search box on the left to search for match_ or go to Menu → Discover → Discoveries → Discovery Match Options. The default values of <strong>y</strong> and <strong>n</strong> simply mean YES and NO. We will use YES and NO in the description, rather than <strong>y</strong> and <strong>n</strong>. The stored value should always be either a lowercase y or n.') . 

'</p><br><br><p>' .

__('The properties and their default values are listed below.') .

'</p><br><br><p>

<table class="table" style="width:90%">
    <thead>
        <tr>
            <th>' . __('Property') . '</th>
            <th>' . __('Default Value') . '</th>
            <th>' . __('Description') . '</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>match_dbus</td>
            <td>n</td>
            <td>' . __('Linux based devices only. The DBUS id is supposed to be unique on each Linux device. It is set to NO by default because ESX, upon cloning a guest virtual machine, does not tell the operating system to recreate this identifier. We were receiving reports of discovered devices overwriting one another and this was the culprit.') . '</td>
        </tr>
        <tr>
            <td>match_fqdn</td>
            <td>y</td>
            <td>' . __('Should we match a device based on its fqdn.') . '</td>
        </tr>
        <tr>
            <td>match_dns_fqdn</td>
            <td>n</td>
            <td>' . __('Should we match a device based on its DNS fqdn.') . '</td>
        </tr>
        <tr>
            <td>match_dns_hostname</td>
            <td>n</td>
            <td>' . __('Should we match a device based on its DNS hostname.') . '</td>
        </tr>
        <tr>
            <td>match_hostname</td>
            <td>y</td>
            <td>' . __('Should we match a device based on its hostname? Set to YES as hostnames should be unique to a network. This may be a candidate for changing as some users may wish to audit disparate networks (say several different customers networks) that contain hostnames that are identical to others already in Open-AudIT. Say <strong>web</strong> or <strong>mail</strong> or <strong>dns</strong>, etc. Certain hostnames are not uncommon to use.') . '</td>
        </tr>
        <tr>
            <td>match_hostname_dbus</td>
            <td>y</td>
            <td>' . __('Linux based devices only. Should we use the combination of the hostname (as determined by Open-AudIT) and DBUS id (as reported by an audit script or SSH command) to determine a device match? Set to YES as this is considered a reliable combination.') . '</td>
        </tr>
        <tr>
            <td>match_hostname_serial</td>
            <td>y</td>
            <td>' . __('Should we use the combination of the hostname (as determined by Open-AudIT) and serial (as reported by an audit script, SSH command or SNMP query) to determine uniqueness. Set to YES as this is considered a reliable combination.') . '</td>
        </tr>
        <tr>
            <td>match_hostname_uuid</td>
            <td>y</td>
            <td>' . __('Should we use the combination of the type (as determined by Open-AudIT) and serial (as reported by an audit script, SSH command or WMI command) to determine uniqueness. Set to YES as this is considered a reliable combination.') . '</td>
        </tr>
        <tr>
            <td>match_ip</td>
            <td>n</td>
            <td>' . __('Should we match based only on the devices IP address? Set to NO because DHCP will cause false positive matches. This may be acceptable to set to YES if you can guarantee no devices will change IP addresses. You may only ever audit a server network for example. In most cases, it is best to leave this to NO.') . '</td>
        </tr>
        <tr>
            <td>match_ip_no_data</td>
            <td>y</td>
            <td>' . __('Should we match a device based on its ip if we have an existing device with no data.') . '</td>
        </tr>
        <tr>
            <td>match_mac</td>
            <td>y</td>
            <td>' . __('Should we match a device based only on its discovered MAC addresses. Set to NO prior to 3.3.0. Post 3.3.0 will be set to YES. A MAC address should be unique on a network. See below for an exception to the rule.') . '</td>
        </tr>
        <tr>
            <td>match_mac_vmware</td>
            <td>n</td>
            <td>' . __('VMware Workstation tends to use MAC addresses that are not globally unique. IE - Two different workstations may be running VMware Workstation and have two different virtual machines that have the same MAC address. These machines will not ever need to perform networking outside their hosts using this MAC address, but Open-AudIT will discover the MAC addresses upon an audit. Should we determine uniqueness based on these mac addresses? These MAC addresses typically start with one of the following: 00:0c:29, 00:50:56, 00:05:69, 00:1c:14.') . '</td>
        </tr>
        <tr>
            <td>match_serial</td>
            <td>y</td>
            <td>' . __('Should we use the serial (as reported by an audit script, SSH command, WMI command or SNMP query) to determine a device match? Set to YES as this is considered a reliable attribute.') . '</td>
        </tr>
        <tr>
            <td>match_serial_type</td>
            <td>y</td>
            <td>' . __('Should we use the combination of the type (as determined by Open-AudIT) and serial (as reported by an audit script, SSH command, WMI command or SNMP query) to determine uniqueness. Set to YES as this is considered a reliable combination.') . '</td>
        </tr>
        <tr>
            <td>match_sysname</td>
            <td>y</td>
            <td>' . __('Should we match a device based only on its SNMP sysName.') . '</td>
        </tr>
        <tr>
            <td>match_sysname_serial</td>
            <td>y</td>
            <td>' . __('Should we match a device based only on its SNMP sysName and serial.') . '</td>
        </tr>
        <tr>
            <td>match_uuid</td>
            <td>y</td>
            <td>' . __('Should we use the UUID (as reported by an audit script, SSH command or WMI command) to determine a device match? Set to YES as this is considered a reliable attribute.') . '</td>
        </tr>
    </tbody>
</table></p>';

