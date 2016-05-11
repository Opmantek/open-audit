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

# Vendor Xerox

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.17.1.1') {
        $details->model = 'Document Centre 450';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.17.1.2') {
        $details->model = 'Document Centre 450';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.17.2.1') {
        $details->model = 'Document Centre 460';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.17.2.2') {
        $details->model = 'Document Centre 460';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.17.2.3') {
        $details->model = 'Document Centre';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.17.3.1') {
        $details->model = 'Document Centre 465';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.17.3.2') {
        $details->model = 'Document Centre 465';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.17.4.1') {
        $details->model = 'Document Centre 470';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.17.4.2') {
        $details->model = 'Document Centre 470';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.17.4.3') {
        $details->model = 'Document Centre';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.17.5.1') {
        $details->model = 'Document Centre 475';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.17.5.2') {
        $details->model = 'Document Centre 475';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.18.1.1') {
        $details->model = 'Document Centre 495';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.18.2.1') {
        $details->model = 'Document Centre Centre 4110';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.19.1.1') {
        $details->model = 'Document Centre 420ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.19.1.2') {
        $details->model = 'Document Centre 420ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.19.1.3') {
        $details->model = 'Document Centre 420ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.19.2.1') {
        $details->model = 'Document Centre';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.19.2.2') {
        $details->model = 'Document Centre';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.20.1.1') {
        $details->model = 'Document Centre 432ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.20.1.2') {
        $details->model = 'Document Centre 432ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.20.1.3') {
        $details->model = 'Document Centre 432ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.20.1.4') {
        $details->model = 'Document Centre';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.20.1.5') {
        $details->model = 'Document Centre';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.20.2.1') {
        $details->model = 'Document Centre';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.21.1.1') {
        $details->model = 'Document Centre 440ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.21.1.2') {
        $details->model = 'Document Centre 440ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.21.1.3') {
        $details->model = 'Document Centre 440ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.22.1.1') {
        $details->model = 'Document Centre 230ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.22.1.2') {
        $details->model = 'Document Centre 230ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.22.1.3') {
        $details->model = 'Document Centre 230ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.23.1.1') {
        $details->model = 'Document Centre 480';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.23.1.2') {
        $details->model = 'Document Centre 480';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.23.1.3') {
        $details->model = 'Document Centre 480';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.23.2.1') {
        $details->model = 'Document Centre 485';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.23.2.2') {
        $details->model = 'Document Centre 485';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.24.1.1') {
        $details->model = 'Document Centre 425ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.27.1') {
        $details->model = 'Document Centre';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.27.1.2') {
        $details->model = 'Document Centre Multi-Function System';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.3.1.1') {
        $details->model = 'Document Centre 230ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.3.1.2') {
        $details->model = 'Document Centre 220/230ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.3.1.3') {
        $details->model = 'Document Center 230ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.3.1.4') {
        $details->model = 'Document Center 230ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.3.1.5') {
        $details->model = 'Document Center 230ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.3.2.1') {
        $details->model = 'Document Center 230LP';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.3.2.2') {
        $details->model = 'Document Center 230LP';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.3.2.3') {
        $details->model = 'Document Center 230LP';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.3.2.4') {
        $details->model = 'Document Center 230LP';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.3.2.5') {
        $details->model = 'Document Center 230LP';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.4.1.1') {
        $details->model = 'Document Center 265ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.4.1.2') {
        $details->model = 'Document Center 265ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.4.1.3') {
        $details->model = 'Document Center 265St';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.4.2.1') {
        $details->model = 'Document Center 265LP';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.4.2.2') {
        $details->model = 'Document Center 265LP';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.4.2.3') {
        $details->model = 'Document Center 265LP';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.5.1.1') {
        $details->model = 'Document Center 240ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.5.1.2') {
        $details->model = 'Document Center 240ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.5.1.3') {
        $details->model = 'Document Center 240ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.6.1.1') {
        $details->model = 'Document Centre 332/340 ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.6.1.2') {
        $details->model = 'Document Centre 340ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.6.1.3') {
        $details->model = 'Document Centre 340ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.6.2.1') {
        $details->model = 'Document Centre 340LP';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.6.2.2') {
        $details->model = 'Document Centre 340LP';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.6.2.3') {
        $details->model = 'Document Centre 340LP';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.7.1.1') {
        $details->model = 'Document Centre 255ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.7.1.2') {
        $details->model = 'Document Centre 255ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.7.1.3') {
        $details->model = 'Document Centre 255ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.7.2.1') {
        $details->model = 'Document Centre 255LP';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.7.2.2') {
        $details->model = 'Document Centre 255LP';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.7.2.3') {
        $details->model = 'Document Centre 255LP';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.8.1.3') {
        $details->model = 'Document Centre 220/230ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.8.1.4') {
        $details->model = 'Document Centre';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.9.1.1') {
        $details->model = 'Document Centre 332/340ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.9.1.2') {
        $details->model = 'Document Centre 332ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.9.1.3') {
        $details->model = 'Document Centre 332ST';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.9.2.1') {
        $details->model = 'Document Centre 332LP';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.9.2.2') {
        $details->model = 'Document Centre 332LP';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.1.9.2.3') {
        $details->model = 'Document Centre 332LP';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.17.17.1.1.1') {
        $details->model = 'Color 800 Press';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.1.24.1.1') {
        $details->model = 'Phaser 4600';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.1.25.1.1') {
        $details->model = 'Phaser 4620';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.1.4.1') {
        $details->model = 'Phaser 3428';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.1.9.1') {
        $details->model = 'Phaser 3600';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.2.1.3') {
        $details->model = 'Phaser 4400DT';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.2.2.1') {
        $details->model = 'Phaser 4500N';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.2.3.2') {
        $details->model = 'Phaser 4510N';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.2.3.3') {
        $details->model = 'Phaser 4510DT';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.3.2.3') {
        $details->model = 'Phaser 5550DN';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.3.2.4') {
        $details->model = 'Phaser 5550DT';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.4.1.3') {
        $details->model = 'Phaser 6200 DP';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.4.1.4') {
        $details->model = 'Phaser 6200 DX';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.4.20.1') {
        $details->model = 'Phaser 6110MFP';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.4.23.1') {
        $details->model = 'Phaser 6130N';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.4.33.2.1') {
        $details->model = 'Phaser 6500DN';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.4.4.3') {
        $details->model = 'Phaser 6300DN';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.4.8.1') {
        $details->model = 'Phaser 6360N';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.4.8.2') {
        $details->model = 'Phaser 6360DN';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.4.8.3') {
        $details->model = 'Phaser 6360DT';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.5.1.1') {
        $details->model = 'Phaser 7300 DN';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.5.3.2') {
        $details->model = 'Phaser 7750DN';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.5.5.3') {
        $details->model = 'Phaser 7500DT';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.6.17.1') {
        $details->model = 'Phaser 8860';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.6.18.1') {
        $details->model = 'Phaser 8860 MFP';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.6.3.2') {
        $details->model = 'Phaser 8850DT';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.6.9.2') {
        $details->model = 'Phaser 8560DN';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.19.6.9.3') {
        $details->model = 'Phaser 8560DT';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.2.1.1.1') {
        $details->model = 'Docuprint 4512';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.2.2.1.1') {
        $details->model = 'DocuPrint';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.2.2.2.1') {
        $details->model = 'DocuPrint N17';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.2.3.1.1') {
        $details->model = 'DocuPrint NC60';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.2.3.1.2') {
        $details->model = 'DocuPrint NC60';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.2.3.2.1') {
        $details->model = 'DocuPrint NC60';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.2.4.1.1') {
        $details->model = 'DocuPrint';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.2.5.1.1') {
        $details->model = 'Phaser 3400';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.1.19.1') {
        $details->model = 'WorkCentre Pro Multifunction System';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.1.2') {
        $details->model = 'WorkCentre Pro';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.1.2.2') {
        $details->model = 'WorkCentre Pro Multifunction System';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.1.20.1') {
        $details->model = 'WorkCentre Pro';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.1.21.1') {
        $details->model = 'WorkCentre Pro C3545';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.1.25.1') {
        $details->model = 'WorkCentre Pro';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.1.29.1') {
        $details->model = 'WorkCentre 7665 v1';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.1.3.1') {
        $details->model = 'WorkCentre Pro Multifunction System';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.1.31.1') {
        $details->model = 'WorkCentre 4118';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.1.4.2') {
        $details->model = 'WorkCentre Pro Multifunction System';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.1.6.2') {
        $details->model = 'WorkCentre Pro 65';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.1.8.2') {
        $details->model = 'WorkCentre Pro Multifunction System';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.2.1') {
        $details->model = 'WorkCentre Pro';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.2.2') {
        $details->model = 'WorkCentre';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.2.22.1') {
        $details->model = 'WorkCentre Pro 123';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.2.25') {
        $details->model = 'WorkCentre';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.2.3') {
        $details->model = 'WorkCentre';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.2.31.1') {
        $details->model = 'WorkCentre Pro 238';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.2.32.1') {
        $details->model = 'WorkCentre 5150';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.2.33.1') {
        $details->model = 'WorkCentre Pro Multifunction System';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.2.4') {
        $details->model = 'WorkCentre';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.2.40.1.2') {
        $details->model = 'WorkCentre 7335';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.2.41.1.2') {
        $details->model = 'WorkCentre 5150';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.2.7') {
        $details->model = 'WorkCentre';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.2.7.1') {
        $details->model = 'WorkCentre M20i';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.3.17.1') {
        $details->model = 'WorkCentre 7235';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.3.35.1') {
        $details->model = 'WorkCentre 5632 v1';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.3.35.1.1') {
        $details->model = 'WorkCentre 5632 v1';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.3.37.1') {
        $details->model = 'WorkCentre 5638 v1 Multifunction System';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.3.37.1.1') {
        $details->model = 'WorkCentre 5638 v1';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.3.38.1') {
        $details->model = 'WorkCentre 5645 v1 Multifunction System';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.3.38.1.1') {
        $details->model = 'WorkCentre 5645 v1 Multifunction System';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.3.39.1') {
        $details->model = 'WorkCentre 5655';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.3.39.1.1') {
        $details->model = 'WorkCentre 5655 v1';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.3.40.1.1') {
        $details->model = 'WorkCentre 5665 v1';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.3.8.1') {
        $details->model = 'WorkCentre 7132';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.3.9.1') {
        $details->model = 'WorkCentre 7228';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.4.19.1') {
        $details->model = 'WorkCentre 7328';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.4.20.1') {
        $details->model = 'WorkCentre 7335';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.4.21.1') {
        $details->model = 'WorkCentre 7345';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.4.22.1') {
        $details->model = 'WorkCentre 7232';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.4.27.1') {
        $details->model = 'Phaser 3635MFP';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.4.6.1') {
        $details->model = 'WorkCentre 5225';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.4.9.1.1') {
        $details->model = 'WorkCentre 5687 v1';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.5.1.1') {
        $details->model = 'WorkCentre 7346';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.5.23.1') {
        $details->model = 'WorkCentre 3220';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.5.29.1.1') {
        $details->model = 'WorkCentre 5735';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.5.3.1') {
        $details->model = 'WorkCentre 7428';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.5.31.1.1') {
        $details->model = 'WorkCentre 5745';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.5.33.1.1') {
        $details->model = 'WorkCentre 5765';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.5.34.1.1') {
        $details->model = 'WorkCentre 5775';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.5.36.1.1') {
        $details->model = 'WorkCentre 7120';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.5.39.1.1') {
        $details->model = 'WorkCentre 7535 v1';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.5.4.1') {
        $details->model = 'WorkCentre 7435';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.5.40.1.1') {
        $details->model = 'WorkCentre 7545 v1 Multifunction System';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.5.5.2.1') {
        $details->model = 'WorkCentre 6400X';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.6.3.1.1') {
        $details->model = 'WorkCentre 5325';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.20.6.4.1.1') {
        $details->model = 'WorkCentre 5330';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.22.1.8.1.1') {
        $details->model = 'Wide Format 6604';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.23.2.5.1') {
        $details->model = 'Nuvera 120';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.23.7.1.1') {
        $details->model = 'Nuvera 288';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.24.1.1.2.1') {
        $details->model = 'ColorQube 9201';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.24.1.2.2.1') {
        $details->model = 'ColorQube 9202';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.24.1.3.2.1') {
        $details->model = 'ColorQube 9203';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.24.2.1.2.1') {
        $details->model = 'ColorQube 8570DN';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.24.2.2.1.1') {
        $details->model = 'ColorQube 8870';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.24.3.2.2.1') {
        $details->model = 'ColorQube 8900X';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.24.4.1.1.1') {
        $details->model = 'ColorQube 9301';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.3.2.1.1') {
        $details->model = 'DocuPrint N24/N32';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.3.2.1.2') {
        $details->model = 'DocuPrint N24/N32';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.3.2.17.1') {
        $details->model = 'DocuPrint N2025';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.3.2.17.2') {
        $details->model = 'DocuPrint N2025';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.3.2.18.1') {
        $details->model = 'DocuPrint N2125';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.3.2.18.2') {
        $details->model = 'DocuPrint N2125';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.3.2.19.1') {
        $details->model = 'DocuPrint';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.3.2.2.1') {
        $details->model = 'DocuPrint N24';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.3.2.2.2') {
        $details->model = 'DocuPrint';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.3.2.20.1') {
        $details->model = 'DocuPrint N2825';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.3.2.20.2') {
        $details->model = 'DocuPrint N2825';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.3.2.21.1') {
        $details->model = 'DocuPrint N3225';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.3.2.21.2') {
        $details->model = 'DocuPrint N3225';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.3.2.22.1') {
        $details->model = 'DocuPrint N4025';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.3.2.22.2') {
        $details->model = 'DocuPrint N4025';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.3.2.3.1') {
        $details->model = 'DocuPrint N40';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.3.2.3.2') {
        $details->model = 'DocuPrint';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.3.2.36.1') {
        $details->model = 'DocuPrint N4525';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.3.3.1.1') {
        $details->model = 'DocuPrint NC1235';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.3.3.2.1') {
        $details->model = 'Phaser 2135';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.4.2.1.1') {
        $details->model = 'Document Centre';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.4.2.1.2') {
        $details->model = 'Document Centre ColorSeries 50';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.5.1.1.1') {
        $details->model = 'DocuTech 6180';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.5.20.3.1') {
        $details->model = '4110 EPS';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.5.21.5.1.1') {
        $details->model = 'Color 550';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.5.22.2.1') {
        $details->model = '4112 EPS';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.253.8.62.1.5.22.4.1') {
        $details->model = '4127 Enterprise Printing System';
        $details->type = 'network printer';
    }
};
