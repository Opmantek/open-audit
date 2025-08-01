<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Arista

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Arista';
    $details->type = '';
    $details->model = '';
    $details->os_group = 'Arista EOS';
    $details->os_family = 'Arista EOS';
    $details->os_name = 'Arista EOS';
    $sysDescr = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.1.1.0");
    $temp = explode('running on an Arista Networks', $sysDescr);
    $details->model = trim($temp[1]);
    $temp2 = explode('Arista Networks EOS version ', $temp[0]);
    $details->os_version = trim($temp2[1]);
    $details->os_cpe = (!empty($details->os_version)) ? 'cpe:2.3:o:arista:eos:' . $details->os_version : 'cpe:2.3:o:arista:eos';

    return($details);
};
