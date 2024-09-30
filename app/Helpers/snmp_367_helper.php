<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Ricoh

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Ricoh Co. Ltd.';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.367.3.2.1.2.1.4.0");
    $details->hostname = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.367.3.2.1.6.1.1.7.1");
    return($details);
};
