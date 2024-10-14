<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Checkpoint

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Check Point Software Technologies Ltd';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.2620.1.6.16.3.0");
    $temp = intval(my_snmp_get($ip, $credentials, "1.3.6.1.4.1.2620.1.6.7.4.3.0"));
    if (!empty($temp)) {
        $details->memory_count = intval($temp / 1024);
    }
    unset($temp);
    $details->storage_count = intval(my_snmp_get($ip, $credentials, "1.3.6.1.4.1.2620.1.6.7.3.6.0"));
    return($details);
};
