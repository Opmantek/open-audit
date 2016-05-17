<?php
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

    /**
     * @author Mark Unwin <marku@opmantek.com>
     *
     * @version 1.12.6
     *
     * @copyright Copyright (c) 2014, Opmantek
     * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     */

    /**
     * Base Object Admin.
     *
     * @access   public
     *
     * @category Object
     *
     * @author   Mark Unwin <marku@opmantek.com>
     * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link     http://www.open-audit.org
     *
     * @return Admin
     */
    $device_types = array();
    $device_types[''] = '&nbsp;';
    $device_types['access control'] = 'Access Control';
    $device_types['access point'] = 'Access Point';
    $device_types['access server'] = 'Access Server';
    $device_types['access token'] = 'Access Token';
    $device_types['adsl modem'] = 'ADSL Modem';
    $device_types['alarm'] = 'Alarm';
    $device_types['bdsl modem'] = 'BDSL Modem';
    $device_types['bridge'] = 'Bridge';
    $device_types['broadband router'] = 'Broadband Router';
    $device_types['building management'] = 'Building Management';
    $device_types['cable modem'] = 'Cable Modem';
    $device_types['cell phone'] = 'Cell Phone';
    $device_types['cisco module'] = 'Cisco Module';
    $device_types['computer'] = 'Computer';
    $device_types['chassis'] = 'Chassis';
    $device_types['dsl modem'] = 'DSL Modem';
    $device_types['dslam'] = 'DSLAM';
    $device_types['environment monitor'] = 'Environment Monitor';
    $device_types['firewall'] = 'Firewall';
    $device_types['game console'] = 'Game Console';
    $device_types['gateway'] = 'Gateway';
    $device_types['general purpose'] = 'General Purpose';
    $device_types['hub'] = 'Hub';
    $device_types['ip phone'] = 'IP Phone';
    $device_types['kvm'] = 'KVM (Keyboard, Video, Mouse switch)';
    $device_types['load balancer'] = 'Load Balancer';
    $device_types['media device'] = 'Media Device';
    $device_types['mobile modem'] = 'Mobile Modem';
    $device_types['nas'] = 'NAS (Network Attached Storage)';
    $device_types['network device'] = 'Network Device';
    $device_types['network ids'] = 'Network IDS (Intrusion Detection)';
    $device_types['network printer'] = 'Network Printer';
    $device_types['network scanner'] = 'Network Scanner';
    $device_types['pbx'] = 'PBX';
    $device_types['pda'] = 'PDA';
    $device_types['pdu'] = 'Power Distribution Unit';
    $device_types['phone'] = 'Phone';
    $device_types['point of sale'] = 'Point of Sale';
    $device_types['power device'] = 'Power Device';
    $device_types['printer'] = 'Printer';
    $device_types['print server'] = 'Print Server';
    $device_types['projector'] = 'Projector';
    $device_types['proxy'] = 'Proxy';
    $device_types['proxy server'] = 'Proxy Server';
    $device_types['remote access controller'] = 'Remote Access Controller (ILO / RSA)';
    $device_types['remote management'] = 'Remote Management';
    $device_types['router'] = 'Router';
    $device_types['san'] = 'SAN (Storage Area Network)';
    $device_types['satellite phone'] = 'Satellite Phone';
    $device_types['satellite receiver'] = 'Satellite Receiver';
    $device_types['scanner'] = 'Scanner';
    $device_types['security camera'] = 'Security Camera';
    $device_types['security misc'] = 'Security Misc';
    $device_types['serial to ethernet'] = 'Serial to Ethernet Adapter';
    $device_types['smart phone'] = 'Smart Phone';
    $device_types['specialized'] = 'Specialized';
    $device_types['storage misc'] = 'Storage Misc';
    $device_types['switch'] = 'Switch';
    $device_types['tablet'] = 'Tablet';
    $device_types['tape library'] = 'Tape Library';
    $device_types['telecom misc'] = 'Telecom Misc';
    $device_types['terminal'] = 'Terminal';
    $device_types['terminal server'] = 'Terminal Server';
    $device_types['time clock'] = 'Time Clock';
    $device_types['ups'] = 'UPS (Uninterruptible Power Supply)';
    $device_types['video conference'] = 'Video Conference';
    $device_types['voip adapter'] = 'VoIP Adapter';
    $device_types['voip gateway'] = 'VoIP Gateway';
    $device_types['voip phone'] = 'VoIP Phone';
    $device_types['vpn terminator'] = 'VPN Terminator';
    $device_types['wan accelerator'] = 'WAN Accelerator';
    $device_types['wap'] = 'WAP (Wireless Access Point)';
    $device_types['wdm'] = 'WDM (Wavelength Division Multiplexer)';
    $device_types['web cache'] = 'Web Cache';
    $device_types['webcam'] = 'Web Camera';
    $device_types['wireless router'] = 'Wireless Router';

    $device_class = array();
    $device_class[''] = '&nbsp;';
    $device_class['desktop'] = 'Desktop';
    $device_class['laptop'] = 'Laptop';
    $device_class['tablet'] = 'Tablet';
    $device_class['workstation'] = 'Workstation';
    $device_class['server'] = 'Server';
    $device_class['hypervisor'] = 'Hypervisor';
    $device_class['virtual server'] = 'Virtual Server';
    $device_class['virtual desktop'] = 'Virtual Desktop';

    $device_environment = array();
    $device_environment['production'] = 'Production';
    $device_environment['dev'] = 'Development';
    $device_environment['dr'] = 'Disaster Recovery';
    $device_environment['eval'] = 'Evaluation';
    $device_environment['pre-prod'] = 'Pre-Production';
    $device_environment['test'] = 'Testing';
    $device_environment['train'] = 'Training';
    $device_environment['uat'] = 'User Acceptance Testing';

    $device_status = array();
    $device_status['deleted'] = 'Deleted';
    $device_status['lost'] = 'Lost';
    $device_status['maintenance'] = 'Maintenance';
    $device_status['production'] = 'Production';
    $device_status['retired'] = 'Retired';
    $device_status['unallocated'] = 'Unallocated';

