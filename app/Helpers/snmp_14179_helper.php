<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Airespace, Inc (formerly Black Storm Networks)

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $test = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.9.9.23.1.2.1.1.5.29.2");
    if (!empty($test)) {
        if (stripos($test, 'Cisco IOS Software') !== false) {
            $details->manufacturer = 'Cisco Systems';
            $temp2 = explode(',', $test);
            foreach ($temp2 as $test2) {
                if (strpos($test2, 'Version') !== false) {
                    $version = str_ireplace('Version', '', $test2);
                    $version = trim((string)$version);
                }
            }
            if ($version != '') {
                $details->os_name = 'Cisco IOS ' . $version;
            } else {
                $details->os_name = 'Cisco IOS (unknown verison)';
            }
        }
    }
    unset($test);
    # Cisco specific model OID
    if (empty($details->model)) {
        $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.13.1");
    }
    if (!empty($details->model)) {
        $details->manufacturer = 'Cisco Systems';
    }
    # Generic Cisco serial
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.11.1");
    # Second Generic Cisco serial
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.11.1.0");
    }
    if (!empty($details->serial)) {
        $details->manufacturer = 'Cisco Systems';
    }

    $details->description = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.1.1.0");
    if (!empty($details->description) and stripos($details->description, "Cisco Controller") !== false) {
        $details->os_group = 'Cisco';
        $details->os_family = 'Cisco IOS-XE';
        $temp = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.10.1");
        $details->os_version = (!empty($temp)) ? $temp : '';
        $details->os_name = (!empty($temp)) ? "Cisco IOS-XE " . $temp : 'Cisco IOS-XE';
        $details->os_cpe_name = 'ios_xe';
    }

    return($details);
};
