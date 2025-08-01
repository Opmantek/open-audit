<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Dell

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->os_group = 'Dell Networking OS';
    $details->os_family = 'Dell OS';
    $details->os_name = 'OS10';
    $details->os_version = my_snmp_get($ip, $credentials, '1.3.6.1.4.1.674.10895.3000.1.2.100.4');
    $temp = substr($details->os_version, 0, 1);
    if (intval($temp) === 9) {
        $details->os_family = 'Dell OS9';
        $details->os_name = 'OS9';
    }
    $details->serial = my_snmp_get($ip, $credentials, '1.3.6.1.4.1.674.10895.3000.1.2.100.8.1.2');
    $details->service_tag = my_snmp_get($ip, $credentials, '1.3.6.1.4.1.674.10895.3000.1.2.100.8.1.4');
    $details->os_cpe = (!empty($details->os_version)) ? 'cpe:2.3:o:dell:networking_' . strtolower($details->osname) . ':' . $details->os_version : 'cpe:2.3:o:dell:networking_' . strtolower($details->osname);
    return($details);
};
