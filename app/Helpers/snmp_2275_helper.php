<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Big IP

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Vxtreme Inc.';
    $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.3375.2.1.3.5.2.0");
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.3375.2.1.3.3.3.0");
    $details->os_version = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.3375.2.1.4.2.0");
    $details->uptime = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.25.1.1");
    return($details);
};
