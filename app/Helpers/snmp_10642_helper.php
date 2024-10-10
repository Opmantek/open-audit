<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Zebra

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Zebra Technologies Corp.';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.10642.1.9.0");
    $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.10642.1.1.0");
    $details->os_version = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.10642.1.18.0");
    $details->os_group = 'Zebra LinkOS';
    $details->os_family = 'LinkOS';
    $details->os_name = !empty($details->os_version) ? 'LinkOS ' . $details->os_version : 'LinkOS';
    $details->type = 'printer';
    return($details);
};
