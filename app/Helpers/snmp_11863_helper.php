<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor TP-Link

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'TP-Link';
    // generic types here
    if (strpos($oid, '1.3.6.1.4.1.11863.1') !== false) {
        $details->type = 'switch';
    }
    if (strpos($oid, '1.3.6.1.4.1.11863.2') !== false) {
        $details->type = 'router';
    }
    if (strpos($oid, '1.3.6.1.4.1.11863.3') !== false) {
        $details->type = 'wap';
    }
    if (strpos($oid, '1.3.6.1.4.1.11863.4') !== false) {
        $details->type = 'adsl modem';
    }
    if (empty($details->model)) {
        $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.16.19.3.0");
    }
    return($details);
};
