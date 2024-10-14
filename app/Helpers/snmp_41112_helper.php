<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Ubiquiti

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Ubiquiti Networks Inc.';
    $temp = my_snmp_walk($ip, $credentials, "1.3.6.1.2.1.25.4.2.1.5");
    if (!empty($temp) and is_array($temp) and count($temp) > 0) {
        foreach ($temp as $line) {
            if (stripos($line, 'UniFi-Gateway') !== false) {
                $details->model = 'Unifi Security Gateway';
                $details->manufacturer = 'Ubiquiti Networks Inc.';
                $details->type = 'gateway';
                $details->os_name = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.1.1.0");
                if (stripos($details->os_name, 'edgeos') !== false) {
                    $details->os_family = 'EdgeOS';
                    $details->os_group = 'Linux';
                }
            }
        }
    }
    if (empty($details->model)) {
        $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.41112.1.6.3.3");
    }
    if (empty($details->model)) {
        $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.41112.1.10.1.3.2");
    }
    if (!empty($details->model) and stripos($details->model, 'AirFiber') !== false) {
        $details->type = 'wireless link';
    }
    return($details);
};
