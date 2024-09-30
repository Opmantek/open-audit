<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Gemtek Systems Holding

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Gemtek Systems Holding Bv';
    $details->type = 'unknown';
    $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.10529.300.1.3.1.0");
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.10529.300.1.3.5.0");
    return($details);
};
