<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Hitachi

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Hitachi, Ltd.';
    if (!empty($oid) and strpos($oid, '1.3.6.1.4.1.116.3.11') === 0) {
        $details->model = 'Hitachi San';
        $details->type = 'san';
    }
    $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.116.5.11.1.2.1.1.0");
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.116.5.11.1.2.1.3.0");
    return($details);
};
