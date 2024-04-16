<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Zyxel

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Zyxel Communications Corp.';
    $details->type = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.890.1.2.11.1.1.1.0");
    return($details);
};
