<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor NetScout

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Netscout Systems, Inc.';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.141.61.1.0");
    $details->type = 'sensor';
    return($details);
};
