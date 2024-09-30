<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Allied Telesyn

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Allied Telesis, Inc.';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.207.8.4.4.5.2.1.5");
    return($details);
};
