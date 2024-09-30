<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Radwin

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Radwin Ltd.';
    $details->type = 'wap';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.4458.1000.1.3.2.1.5.0");
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.4458.1000.1.1.29.0");
    }
    $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.4458.1000.1.1.1.0");
    if (empty($details->model)) {
        $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.4458.1000.1.1.30");
    }
    $details->os_version = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.4458.1000.1.1.3.0");
    return($details);
};
