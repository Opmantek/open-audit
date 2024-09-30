<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Nortel Baystack

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Synoptics';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.45.1.6.3.1.6.0");
    if (empty($details->model)) {
        $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.45.1.6.3.1.2.0");
    }
    return($details);
};
