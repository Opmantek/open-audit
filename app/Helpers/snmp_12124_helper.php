<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Isilon

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Isilon Ststems';
    if ($oid == '1.3.6.1.4.1.12124.1') {
        $details->type = 'storage misc';
    }
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.12124.2.51.1.3.1");
    $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.12124.2.51.1.4.1");
    return($details);
};
