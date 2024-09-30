<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor 3com

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = '3Com Ltd';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.43.47.1.1.3.1.10.1");
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.43.10.27.1.1.1.13.1");
    }
    return($details);
};
