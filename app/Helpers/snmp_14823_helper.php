<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Arista

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Aruba';
    $details->type = '';
    $details->model = '';
    $details->os_group = 'ArubaOS';
    $details->os_family = 'ArubaOS';
    $details->os_name = 'ArubaOS';
    $details->os_version = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.14823.2.3.3.1.1.4.0");

    return($details);
};
