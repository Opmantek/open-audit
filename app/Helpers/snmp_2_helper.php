<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor IBM

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'IBM';
    $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.2.3.51.2.2.21.1.1.2.0");
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.2.3.51.2.2.21.1.1.3.0");
    $details->os_version = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.2.3.51.2.2.21.3.1.1.3.1");
    $details->os_name = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.2.3.51.2.2.21.3.1.1.2.1");
    return($details);
};
