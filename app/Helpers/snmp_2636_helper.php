<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Juniper

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Juniper Networks, Inc.';
    $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.2636.3.1.2.0");
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.2636.3.1.3.0");
    $details->os_cpe = '';

    // Juniper Networks, Inc. mx80-48t internet router, kernel JUNOS 13.3R8.7, Build date: 2015-10-23 23:05:34 UTC Copyright (c) 1996-2015 Juniper Networks, Inc.
    $sysDescr = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.1.1.0");
    if (stripos($sysDescr, 'junose') !== false) {
        $details->os_name = 'JunOSe';
        $details->os_cpe = 'cpe:2.3:o:juniper:junose';
    } else if (stripos($sysDescr, 'junos') !== false) {
        $details->os_name = 'JunOS';
        $details->os_cpe = 'cpe:2.3:o:juniper:junos';
    }
    $temp = explode(',', $sysDescr);
    foreach ($temp as $piece) {
        if (strpos($piece, 'kernel JUNOS') !== false) {
            $details->os_version = trim(str_replace('kernel JUNOS', '', $piece));
        }
    }

    $details->os_cpe = (!empty($details->os_cpe) and !empty($details->os_version)) ? $details->os_cpe . ':' . $details->os_version : $details->os_cpe;
    
    // TODO
    // $software = 1.3.6.1.2.1.25.6.3.1.2



    return($details);
};
