<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor CyberX

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Cyberx-labs Inc.';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.53313.1");
    $details->model = 'ot sensor';
    $details->os_version = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.53313.2");
    $details->os_license = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.53313.5");
    $details->os_license_mode = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.53313.6");
    return($details);
};
