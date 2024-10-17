<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor NxNetworks

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->sysDescr = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.1.1.0');

    # TP-LINK adsl modem
    if (!empty($details->sysDescr) and stripos($details->sysDescr, 'TD-W8951ND') !== false) {
        $details->model = 'TD-W8951ND';
        $details->manufacturer = 'TP-Link Technology';
        $details->type = 'adsl modem';
    }
    return($details);
};
