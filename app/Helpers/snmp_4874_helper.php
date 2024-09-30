<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Juniper

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Juniper Networks';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.4874.2.2.2.1.3.4.1.9.0");
    return($details);
};
