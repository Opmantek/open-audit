<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Mikrotik

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Mikrotik';
    $details->type = 'router';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.14988.1.1.7.3.0");
    $temp = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.1.1.0");
    if (!empty($temp) and $temp === "RouterOS CHR") {
        $details->model = "Cloud Hosted Router";
    } else {
        $temp = explode(' ', $temp);
        unset($temp[0]);
        $details->model = implode(' ', $temp);
        unset($temp);
    }
    $details->os_group = 'Linux';
    $details->os_family = 'RouterOS';
    $details->os_name = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.14988.1.1.17.1.1.4.1");
    if (!empty($details->model) and stripos($details->model, 'RB921UAGS-5SHPacT')) {
        $details->type = 'wireless router';
    }
    return($details);
};
