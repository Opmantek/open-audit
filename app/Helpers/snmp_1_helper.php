<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor NxNetworks

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();

    # TP-LINK adsl modem
    if ($details->sysDescr == 'TD-W8951ND') {
        $details->model = 'TD-W8951ND';
        $details->manufacturer = 'TP-Link Technology';
        $details->type = 'adsl modem';
    }
    return($details);
};
