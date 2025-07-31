<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Extreme Networks

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Extreme Networks';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.2272.1.4.2.0");
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.11.1");
    }
    $details->os_version = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.10.3");
    $details->os_group = 'Extreme';
    $details->os_family = 'XOS';
    $details->os_name = 'ExtremeXOS';
    $sysDescr = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.1.1.0");
    if (stripos($sysDescr, 'switch engine') !== false) {
        $details->os_family = 'Switch Engine';
    }
    return($details);
};
