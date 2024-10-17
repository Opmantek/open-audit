<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Microsoft

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Microsoft';
    $details->type = 'computer';
    $details->model = '';
    $details->os_group = 'Windows';
    $details->os_family = '';
    $details->os_name = '';
    $details->icon = 'computer';
    # try to determine if this is a VMware virtual machine
    $i = my_snmp_walk($ip, $credentials, "1.3.6.1.2.1.25.6.3.1.2");
    if (!empty($i) and is_array($i) and count($i) > 0) {
        for ($k = 0; $k < count($i); $k++) {
            if (mb_strpos($i[$k], "VMware Tools") !== false) {
                $details->model = 'VMware Virtual Platform';
                $details->manufacturer = 'VMware, Inc.';
            }
        }
    }
    $details->description = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.77.1.2.1.0");
    return($details);
};
