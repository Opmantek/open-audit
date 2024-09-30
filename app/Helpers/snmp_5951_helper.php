<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Buffalo

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Netscaler';
    $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.5951.4.1.1.11.0");
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.5951.4.1.1.14.0");
    return($details);
};
