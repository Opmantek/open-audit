<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Cambium

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Cambium';
    $details->model =  my_snmp_get($ip, $credentials, "1.3.6.1.4.1.2281.10.1.2.10.1.1.2.127");
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.2281.10.1.2.10.1.1.6.127");
    $details->os_version = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.2281.10.4.1.13.1.1.4.1");
    return($details);
};
