<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Synology

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Synology Inc.';
    $details->type = 'nas';
    $details->os_group = 'Linux';
    $details->os_family = 'Synology DSM';
    $details->manufacturer = 'Synology';
    $details->model = 'DiskStation';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.6574.1.5.2.0");
    $details->os_name = 'Synology ' . my_snmp_get($ip, $credentials, "1.3.6.1.4.1.6574.1.5.3.0");
    $temp = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.6574.1.5.1.0");
    if (!empty($temp)) {
        $details->model = trim('DiskStation ' . $temp);
    }
    return($details);
};
