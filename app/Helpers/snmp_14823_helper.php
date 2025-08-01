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
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.14823.2.2.1.1.1.12.0");

    $sysDescr = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.1.1.0");

    if (strpos($sysDescr, 'MODEL: ')) {
        $temp = explode('MODEL: ', $sysDescr);
        $temp2 = explode(')', $temp[1]);
        $details->model = $temp2[0];
    }

    if (empty($details->os_version)) {
        if (strpos($sysDescr, ' Version  ')) {
            $temp = explode(' Version ', $sysDescr);
            $temp2 = explode(' ', $temp[1]);
            $details->os_version = $temp2[0];
        }
    }

    if (stripos($sysDescr, 'ArubaOS') !== false) {
        $details->os_cpe = (!empty($details->os_version)) ? 'cpe:2.3:o:arubanetworks:arubaos:' . $details->os_version : 'cpe:2.3:o:arubanetworks:arubaos';
    }

    return($details);
};
