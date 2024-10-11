<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor APC

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'American Power Conversion Corp.';
    $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.318.1.1.1.1.1.1.0");
    if (empty($details->model)) {
        $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.33.1.1.2.0");
    }
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.318.1.1.1.1.2.3.0");
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.318.1.1.4.1.5.0");
    }
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.318.1.1.12.1.6.0");
    }
    $details->os_name = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.318.1.1.1.1.2.1.0");
    return($details);
};
