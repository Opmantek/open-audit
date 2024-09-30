<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Frogfoot Networks
# Ubiquiti / Airfiber tend to use this OID :-(

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Ubiquiti Networks Inc.';
    $details->manufacturer = my_snmp_get($ip, $credentials, "1.2.840.10036.3.1.2.1.2.5");
    $details->os_name = my_snmp_get($ip, $credentials, "1.2.840.10036.3.1.2.1.4.5");
    $details->serial = my_snmp_get($ip, $credentials, "1.2.840.10036.1.1.1.1.5");
    $details->model = my_snmp_get($ip, $credentials, "1.2.840.10036.3.1.2.1.3.5");
    if (empty($details->model)) {
        $details->model = my_snmp_get($ip, $credentials, "1.2.840.10036.3.1.2.1.3.10");
    }
    if (empty($details->model)) {
        $details->model = my_snmp_get($ip, $credentials, "1.2.840.10036.3.1.2.1.3.7");
    }
    if (empty($details->model)) {
        $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.41112.1.6.3.3");
    }
    return($details);
};
