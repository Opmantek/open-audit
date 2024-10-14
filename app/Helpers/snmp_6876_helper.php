<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor VMware

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Vmware Inc.';
    $model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.6876.1.1.0");
    $version = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.6876.1.2.0");
    $details->model = !empty($model) ? $model : '';
    $details->model = !empty($version) ? $details->model . " (" . $version . ")" : $details->model;
    $details->model = str_replace("\"", "", $details->model);
    $details->os_group = "VMware";
    $details->os_family = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.6876.1.1.0");
    $details->os_family = !empty($details->os_family) ? str_replace("\"", "", $details->os_family) : '';
    $details->os_name = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.1.1.0");
    $details->os_name = !empty($details->os_name) ? str_replace("\"", "", $details->os_name) : '';
    $details->type = 'computer';
    $details->class = 'hypervisor';
    return($details);
};
