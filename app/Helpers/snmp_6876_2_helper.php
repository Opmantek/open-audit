<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor VMware - virtual machines only

# get the guest details
# mac  - 1.3.6.1.4.1.6876.2.4.1.7
# name - 1.3.6.1.4.1.6876.2.1.1.2
# uuid - 1.3.6.1.4.1.6876.2.1.1.10
# memory - 1.3.6.1.4.1.6876.2.1.1.5
# CPUs - 1.3.6.1.4.1.6876.2.1.1.9
# Status - 1.3.6.1.4.1.6876.2.1.1.6
# Config file - 1.3.6.1.4.1.6876.2.1.1.3


$guest_name = my_snmp_real_walk($ip, $credentials, "1.3.6.1.4.1.6876.2.1.1.2");
if (is_array($guest_name) and count($guest_name) > 0) {
    $details->class = 'hypervisor';
    foreach ($guest_name as $key => $value) {
        $guest = new \StdClass();
        $guest->vm_ident = str_replace('.1.3.6.1.4.1.6876.2.1.1.2.', '', $key);
        $guest->net = array();
        $guest_mac = my_snmp_real_walk($ip, $credentials, "1.3.6.1.4.1.6876.2.4.1.7." . $guest->vm_ident);
        if (isset($guest_mac) and is_array($guest_mac) and count($guest_mac) > 0) {
            if (!empty($guest_mac[0])) {
                foreach ($guest_mac[0] as $k => $v) {
                    if ($v != '') {
                        $mk = str_replace(".1.3.6.1.4.1.6876.2.4.1.7." . $guest['id'] . '.', '', $k);
                        $guest->net[$mk]['mac'] = $v;
                        $guest->net[$mk]['mac'] = strtolower(str_replace(" ", ":", $guest['net'][$mk]['mac']));
                        $guest->net[$mk]['desc'] = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.6876.2.4.1.4." . $guest->vm_ident . "." . $mk);
                    }
                }
            }
        }
        $guest->uuid = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.6876.2.1.1.10." . $guest->vm_ident);
        $guest->memory = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.6876.2.1.1.5." . $guest->vm_ident);
        $guest->cpu = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.6876.2.1.1.9." . $guest->vm_ident);
        $guest->status = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.6876.2.1.1.6." . $guest->vm_ident);
        $guest->config_file = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.6876.2.1.1.3." . $guest->vm_ident);
        $guest->os = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.6876.2.1.1.4." . $guest->vm_ident);
        $guest->vm_group = '';
        $guest->type = 'esx';
        $guests[] = $guest;
        unset($guest);
        unset($guest_mac);
    }
}
unset($guest_name);
