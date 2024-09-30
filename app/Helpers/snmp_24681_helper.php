<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor QNAP

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Qnap Systems, Inc';
    $details->type = 'nas';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.11.1");
    $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.7.1");
    if (empty($details->model)) {
        $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.24681.1.3.12.0");
    }
    return($details);
};
