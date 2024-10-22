<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Cisco


$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Cisco Systems';
    # the only MIB providing overall RAM is 1.3.6.1.4.1.9.3.6.6.0 which is deprecated
    $temp = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.9.3.6.6.0");
    $details->memory_count = (!empty($temp)) ? intval($temp / 1024) : 0;
    $temp = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.9.2.10.1.0");
    $details->storage_count = (!empty($temp)) ? intval($temp / 1048576) : 0;
    $details->description = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.1.1.0");
    $details->description = (is_string($details->description)) ? $details->description : '';
    $details->os_version = '';
    $details->os_group = '';
    $details->os_family = '';
    $details->os_name = '';
    $details->os_cpe = '';
    $details->os_cpe_manufacturer = 'cisco';
    $details->os_cpe_name = '';
    $details->os_cpe_version = '';

    // $i = explode("$", my_snmp_get($ip, $credentials, "1.3.6.1.4.1.9.9.25.1.1.1.2.5"));
    $temp = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.9.9.25.1.1.1.2.5");
    if (!empty($temp) and !is_array($temp)) {
        $i = explode('$', $temp);
    }
    if (empty($i) or !is_array($i)) {
        $i = array();
    }
    if (!empty($i[1])) {
        $details->os_version = trim((string)$i[1]);
    }

    # Cisco NxOS serial
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.9.9.369.1.1.1");
        $details->serial = !empty($details->serial) ? str_replace('VDH=', '', (string)$details->serial) : '';
    }

    # 3560
    if (empty($details->model)) {
        $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.2.1001");
    }

    # 3560
    if (empty($details->os_version)) {
        $details->os_version = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.10.1001");
    }

    # 3560
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.11.1001");
    }

    # ASR
    if (empty($details->os_version)) {
        $details->os_version = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.10.7000");
    }

    # 9300
    if (empty($details->os_name)) {
        $details->os_name = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.9.9.249.1.1.1.1.2");
    }

    # Wireless Access Controller 9800
    if (empty($details->os_version)) {
        $details->os_version = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.10.1");
    }

    if (!empty($details->os_version)) {
        $details->os_cpe_version = !empty($details->os_version) ? $details->os_version : '';
        if (strpos($details->os_cpe_version, '(') !== false) {
            $details->os_cpe_version = str_replace($details->os_cpe_version, '(', '\(');
        }
        if (strpos($details->os_cpe_version, ')') !== false) {
            $details->os_cpe_version = str_replace($details->os_cpe_version, ')', '\)');
        }
    }
    $details->os_version = !empty($details->os_version) ? $details->os_version : '';
    $i = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.9.9.25.1.1.1.2.7");
    if (stripos((string)$i, "IOS") !== false) {
        $details->os_group = 'Cisco';
        $details->os_family = 'Cisco IOS';
        $details->os_name = "Cisco IOS " . $details->os_version;
        $details->os_cpe_name = 'ios';
    }
    if (stripos($details->description, "Cisco IOS Software") !== false) {
        $details->os_group = 'Cisco';
        $details->os_family = 'Cisco IOS';
        $details->os_name = "Cisco IOS " . $details->os_version;
        $details->os_cpe_name = 'ios';
    }
    if (stripos($details->description, "IOS-XE Software") !== false) {
        $details->os_group = 'Cisco';
        $details->os_family = 'Cisco IOS-XE';
        $details->os_name = "Cisco IOS-XE " . $details->os_version;
        $details->os_cpe_name = 'ios_xe';
    }
    if (stripos($details->description, "Cisco Controller") !== false) {
        $details->os_group = 'Cisco';
        $details->os_family = 'Cisco IOS-XE';
        $temp = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.10.1");
        $details->os_name = (!empty($temp)) ? "Cisco IOS-XE " . $details->os_version : 'Cisco IOS-XE';
        $details->os_cpe_name = 'ios_xe';
    }
    if (stripos($details->description, "Cisco Internetwork Operating System Software") !== false) {
        $details->os_group = 'Cisco';
        $details->os_family = 'Cisco IOS';
        $details->os_name = "Cisco IOS " . $details->os_version;
        $details->os_cpe_name = 'ios';
    }
    if (stripos((string)$i, "Catalyst Operating") !== false) {
        $details->os_group = 'Cisco';
        $details->os_family = 'Cisco Catalyst OS';
        $details->os_name = "Cisco Catalyst OS " . $details->os_version;
        $details->os_cpe_name = 'ios_xe';
    }
    if (stripos($details->description, "Catalyst") !== false and stripos($details->description, "L3 Switch Software") !== false) {
        $details->os_group = 'Cisco';
        $details->os_family = 'Cisco Catalyst OS';
        $details->os_name = "Cisco Catalyst OS " . $details->os_version;
        $details->os_cpe_name = 'ios_xe';
    }
    if (stripos($details->description, "Cisco Systems WS-C") !== false) {
        $details->os_group = 'Cisco';
        $details->os_family = 'Cisco Catalyst OS';
        $details->os_name = "Cisco Catalyst OS " . $details->os_version;
        $details->os_cpe_name = 'ios_xe';
    }
    if (stripos($details->description, "Cisco Systems, Inc. WS-C") !== false) {
        $details->os_group = 'Cisco';
        $details->os_family = 'Cisco Catalyst OS';
        $details->os_name = "Cisco Catalyst OS " . $details->os_version;
        $details->os_cpe_name = 'ios_xe';
    }
    if (empty($details->os_group)) {
        if (stripos($details->description, 'NX-OS')) {
            $details->os_group = 'Cisco';
            $details->os_family = 'Cisco Nexus OS';
            $details->os_name = "Cisco Nexus OS " . $details->os_version;
            $details->os_cpe_name = 'nx-os';
        }
    }

    if (! empty($details->os_cpe_name)) {
        $details->os_cpe = 'o:' . $details->os_cpe_manufacturer . ':' . $details->os_cpe_name . ':' . $details->os_cpe_version;
    } else {
        unset($details->os_cpe);
        unset($details->os_cpe_name);
        unset($details->os_cpe_version);
    }

    # Cisco specific model OID
    if (empty($details->model)) {
        $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.13.1");
    }

    # catch all for catalyst == switch
    if (!empty($details->model) and (stripos($details->model, 'catalyst') !== false or stripos($details->os_family, 'cataylst') !== false)) {
        $details->type = 'switch';
    }

    # Generic Cisco serial
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.11.1");
    }

    # Generic Cisco serial
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.11.1.0");
    }

    # Cisco 37xx stack serial
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.9.5.1.2.19.0");
    }

    if (empty($details->serial)) {
        $i_array = my_snmp_walk($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.11");
        if (!empty($i_array[0])) {
            $details->serial = $i_array[0];
        }
        unset($i_array);
    }

    return($details);
};
