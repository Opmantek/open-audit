<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor HPE

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Hewlett Packard';
    $sysDescr = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.1.1.0");
    if (!empty($sysDescr) and strpos($sysDescr, 'HP_3PAR') !== false) {
        $details->type = 'san';
        $explode = explode(',', $sysDescr);
        for ($i = 0; $i < count($explode); $i++) {
            if (strpos($explode[$i], 'HP_3PAR') !== false) {
                $details->model = trim($explode[$i]);
            }
            if (strpos($explode[$i], 'Serial number') !== false) {
                $explode2 = explode(':', $explode[2]);
                $details->serial = trim($explode2[1]);
            }
            if (strpos($explode[$i], 'InForm OS:') !== false) {
                $explode2 = explode(':', $explode[2]);
                $details->os_version = trim($explode2[1]);
                $details->os_group = '3PAR OS';
                $details->os_family = '3PAR OS';
                $details->os_name = 'HPE 3PAR OS ' . $details->os_version;
            }
        }
    }
    return($details);
};
