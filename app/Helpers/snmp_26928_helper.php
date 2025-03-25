<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Extreme Networks

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Extreme Networks';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.26928.1.2.5.0");
    $details->os_version = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.26928.1.2.12.0");
    $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.26928.1.2.6.0");
    if (strpos($details->model, 'AP') === 0) {
        $details->type = 'wap';
    }
    $details->os_group = 'Extreme Networks EIQ';
    $details->os_family = 'EIQ';
    $os_version_parts = explode(' ', $details->os_version);
    $details->os_name = !empty($os_version_parts[2]) ? 'EIQ ' . $os_version_parts[2] : 'EIQ';
    return($details);
};