<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Alcatel
# NOTE - this is VERY much guesswork.
# http://www.zhone.com/support/manuals/docs/AZ/SNMP-A2-GB20-00.pdf
$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Alcatel';
    $i = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.8059.1.1.2.1.1.1.1");
    if ($i == '1') {
        $details->model = '12000';
        $details->type = 'dslam';
    }
    if ($i == '2') {
        $details->model = '4000';
        $details->type = 'dslam';
    }
    if ($i == '3') {
        $details->model = 'Mini DSLAM';
        $details->type = 'dslam';
    }
    if ($i == '4') {
        $details->model = 'Micro DSLAM';
        $details->type = 'dslam';
    }
    if ($i == '5') {
        $details->model = 'Network Extender';
        $details->type = 'network device';
    }
    if ($i == '6') {
        $details->model = '12000E';
        $details->type = 'dslam';
    }
    if ($i == '7') {
        $details->model = '4000E';
        $details->type = 'dslam';
    }
    return($details);
};
