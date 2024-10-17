<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Dell

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Dell Inc.';
    $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.674.10892.2.1.1.2.0");
    if (empty($details->model)) {
        $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.674.10892.5.1.3.12.0");
    }

    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.674.10892.2.1.1.11.0");
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.674.10892.5.1.3.2.0");
    }
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.674.10892.5.1.2.1.0");
    }
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.674.10895.3000.1.2.100.8.1.2.1");
    }
    $details->service_tag = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.674.10895.3000.1.2.100.8.1.4.1");
    if (empty($details->service_tag)) {
        unset($details->service_tag);
    }

    $temp = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.674.10892.5.1.1.4");
    if (!empty($temp)) {
        $details->manufacturer = $temp;
    }

    $details->os_version = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.674.10892.5.1.3.14.0");
    if (empty($details->os_version)) {
        $details->os_version = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.10.2');
    }
    if (empty($details->os_version)) {
        $details->os_version = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.10.1');
    }
    if (empty($details->os_version)) {
        # PowerConnect 6248, 3.3.18.1, VxWorks 6.5
        $sysDescr = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.1.1.0');
        if (!empty($sysDescr) and stripos($sysDescr, 'VXWorks') !== false and substr_count($sysDescr, ', ') === 2) {
            $split = explode(',', $sysDescr);
            $details->os_version = trim($split[1]);
        }
    }
    if (empty($details->os_version)) {
        unset($details->os_version);
    }

    $details->os_name = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.674.10892.5.1.3.6.0");

    return($details);
};
