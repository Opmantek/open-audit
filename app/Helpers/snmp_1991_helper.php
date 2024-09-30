<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Brocade Foundry

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Brocade Communication Systems';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.1991.1.1.1.1.2.0");
    return($details);
};
