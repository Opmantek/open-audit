<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Aruba / Silver Peak Routers

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Silver Peak Systems, Inc.';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.23867.3.1.1.1.6.0");
    $details->serial = str_replace('-', '', $details->serial);
    $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.23867.3.1.1.1.2.0");
    $details->os_version = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.23867.3.1.1.1.1.0");
    $details->os_group = 'Aruba ECOS';
    $details->os_family = 'ECOS';
    $details->os_name = !empty($details->os_version) ? 'ECOS ' . $details->os_version : 'ECOS';
    $details->type = 'router';
    return($details);
};
