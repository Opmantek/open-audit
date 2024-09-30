<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Riverbed

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Riverbed Technology, Inc.';
    $details->type = 'wan accelerator';
    $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.17163.1.1.1.1.0");
    if (empty($details->model)) {
        $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.17163.1.51.1.1.0");
    }
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.17163.1.1.1.2.0");
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.17163.1.51.1.2.0");
    }
    return($details);
};
