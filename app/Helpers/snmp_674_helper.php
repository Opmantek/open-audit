<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Dell

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.674.10892.2.1.1.2.0");
    if (empty($details->model)) {
        $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.674.10892.5.1.3.12.0");
    }
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.674.10892.2.1.1.11.0");
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.674.10892.5.1.3.2.0");
    }
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.674.10892.5.1.2.1.0");
    }
    $details->os_name = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.674.10892.5.1.3.6.0");
    $details->os_version = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.674.10892.5.1.3.14.0");
    $temp = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.674.10892.5.1.1.4");
    if (!empty($temp)) {
        $details->manufacturer = $temp;
    }
    return($details);
};
