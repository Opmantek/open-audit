<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Fortinet

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Fortinet, Inc.';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.12356.1.2.0");
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.12356.100.1.1.1.0");
    }
    $details->os_version = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.12356.101.4.1.1.0");
    $details->os_family = 'FortiOS';
    $details->os_group = 'FortiGate';
    $details->os_name = 'FortiOS ' . $details->os_version;
    return($details);
};
