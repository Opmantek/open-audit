<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Opengear

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'OpenGear, Inc';
    $details->type = 'management console';
    $details->os_group = 'Opengear Operations Manager';
    $details->os_family = 'Opengear Operations Manager';
    $details->os_version = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.25049.17.1.1");
    $details->model =  my_snmp_get($ip, $credentials, "1.3.6.1.4.1.25049.10.19.1.5.0");
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.25049.10.19.1.2.0");
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.25049.17.1.2");
    }
    $details->os_version = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.25049.10.19.1.3.0");
    return($details);
};
