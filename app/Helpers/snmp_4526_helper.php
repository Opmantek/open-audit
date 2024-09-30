<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Netgear

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Netgear';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.4526.10.1.1.1.4.0");
    if (empty($details->serial)) {
        # special case for Netgear cable modems
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.4491.2.4.1.1.1.3.0");
    }
    return($details);
};
