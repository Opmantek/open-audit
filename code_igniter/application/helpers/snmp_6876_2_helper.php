<?php  if (!defined('BASEPATH')) {
     exit('No direct script access allowed');
 }
#
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************

/*
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * @version 1.12.6
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

# Vendor VMware - virtual machines only

# get the guest details
# mac  - 1.3.6.1.4.1.6876.2.4.1.7
# name - 1.3.6.1.4.1.6876.2.1.1.2
# uuid - 1.3.6.1.4.1.6876.2.1.1.10
# memory - 1.3.6.1.4.1.6876.2.1.1.5
# CPUs - 1.3.6.1.4.1.6876.2.1.1.9
# Status - 1.3.6.1.4.1.6876.2.1.1.6
# Config file - 1.3.6.1.4.1.6876.2.1.1.3

$guest_name = @snmp2_real_walk($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.6876.2.1.1.2");
if (is_array($guest_name) and count($guest_name) > 0) {
    $details->class = 'hypervisor';
    $guests = array();
    foreach ($guest_name as $key => $value) {
        $guest = new stdClass();
        $guest->name = snmp_clean($value);
        $guest->vm_id = str_replace('.1.3.6.1.4.1.6876.2.1.1.2.', '', $key);
        $guest->net = array();
        $guest_mac = snmp2_real_walk($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.6876.2.4.1.7.".$guest->vm_id);
        if (isset($guest_mac) and is_array($guest_mac) and count($guest_mac) > 0) {
            if (isset($guest_mac[0]) and $guest_mac[0] != '') {
                foreach ($guest_mac[0] as $k => $v) {
                    if ($v != '') {
                        $mk = str_replace(".1.3.6.1.4.1.6876.2.4.1.7.".$guest['id'].'.', '', $k);
                        $guest->net[$mk]['mac'] = snmp_clean($v);
                        $guest->net[$mk]['mac'] = strtolower(str_replace(" ", ":", $guest['net'][$mk]['mac']));
                        $guest->net[$mk]['desc'] = snmp_clean(snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.6876.2.4.1.4.".$guest->vm_id.".".$mk));
                    }
                }
            }
        }
        $guest->uuid = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.6876.2.1.1.10.".$guest->vm_id));
        $guest->memory = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.6876.2.1.1.5.".$guest->vm_id));
        $guest->cpu = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.6876.2.1.1.9.".$guest->vm_id));
        $guest->status = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.6876.2.1.1.6.".$guest->vm_id));
        $guest->config_file = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.6876.2.1.1.3.".$guest->vm_id));
        $guest->vm_group = '';
        $guests[] = $guest;
        unset($guest);
        unset($guest_mac);
    }
}
unset($guest_name);
