<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# SNMP Computers

$get_oid_details = function ($ip, $credentials, $oid) {
    // Test for a NextHop device
    $temp = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.32015.0.0");
    if (!empty($temp)) {
        $details = new \StdClass();
        $details->model = 'Next Hop';
        $details->manufacturer = 'ExtraHop Networks, Inc.';
        $details->type = 'Network Device';
        $details->os_version = $temp;
        return($details);
    }
    return;
};
