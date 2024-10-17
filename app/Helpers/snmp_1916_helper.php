<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Extreme Networks

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Extreme Networks.';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.2272.1.4.2.0");
    $details->os_version = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.2272.1.1.7.0");
    $details->os_group = 'Extreme Networks';
    $details->os_family = 'Extreme Networks. VOSS';
    if (!empty($details->os_version)) {
        $os_version_parts = explode(' ', $details->os_version, 2);
    }
    $details->os_name = !empty($os_version_parts[0]) ? 'Extreme Networks. VOSS ' . $os_version_parts[0] : 'Extreme Networks. VOSS';
    return($details);
};
