<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor SonicWall

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'SonicWall';
    $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.8741.2.1.1.1.0");
    $details->type = 'firewall';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.8741.2.1.1.2.0");
    return($details);
};
