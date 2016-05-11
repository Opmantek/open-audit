<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
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
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * @version 1.12.6
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

# Vendor Cisco

$get_oid_details = function($details) {
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1') { $details->model = 'Cisco Gateway Server'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.2') { $details->model = 'Cisco Terminal Server'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.3') { $details->model = 'Cisco 2500'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.4') { $details->model = 'Cisco Protocol Translator'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.5') { $details->model = 'Cisco 3000 IGS'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.6') { $details->model = 'Cisco 3000'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.7') { $details->model = 'Cisco 4000'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.8') { $details->model = 'Cisco 7000'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.9') { $details->model = 'Cisco CS500'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.10') { $details->model = 'Cisco 2000'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.11') { $details->model = 'Cisco AGS plus'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.13') { $details->model = 'Cisco 2500'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.14') { $details->model = 'Cisco 4500'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.15') { $details->model = 'Cisco 2102'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.16') { $details->model = 'Cisco 2202'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.17') { $details->model = 'Cisco 2501'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.18') { $details->model = 'Cisco 2502'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.19') { $details->model = 'Cisco 2503'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.20') { $details->model = 'Cisco 2504'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.21') { $details->model = 'Cisco 2505'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.22') { $details->model = 'Cisco 2506'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.23') { $details->model = 'Cisco 2507'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.24') { $details->model = 'Cisco 2508'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.25') { $details->model = 'Cisco 2509'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.26') { $details->model = 'Cisco 2510'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.27') { $details->model = 'Cisco 2511'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.28') { $details->model = 'Cisco 2512'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.29') { $details->model = 'Cisco 2513'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.30') { $details->model = 'Cisco 2514'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.31') { $details->model = 'Cisco 2515'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.33') { $details->model = 'Cisco 3102'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.34') { $details->model = 'Cisco 3103'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.35') { $details->model = 'Cisco 3104'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.36') { $details->model = 'Cisco 3202'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.37') { $details->model = 'Cisco 3204'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.38') { $details->model = 'Cisco Access Pro RC'; $details->type = 'access point'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.39') { $details->model = 'Cisco Access Pro EC'; $details->type = 'access point'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.40') { $details->model = 'Cisco 1000'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.41') { $details->model = 'Cisco 1003'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.42') { $details->model = 'Cisco 2516'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.43') { $details->model = 'Cisco 1020'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.44') { $details->model = 'Cisco 1004'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.45') { $details->model = 'Cisco 7507'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.46') { $details->model = 'Cisco 7513'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.47') { $details->model = 'Cisco 7506'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.48') { $details->model = 'Cisco 7505'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.49') { $details->model = 'Cisco 1005'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.50') { $details->model = 'Cisco 4700'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.51') { $details->model = 'Cisco 1003 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.52') { $details->model = 'Cisco 1004 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.53') { $details->model = 'Cisco 1005 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.54') { $details->model = 'Cisco 1020 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.55') { $details->model = 'Cisco 2500 PCE Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.56') { $details->model = 'Cisco 2501 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.57') { $details->model = 'Cisco 2503 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.58') { $details->model = 'Cisco 2505 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.59') { $details->model = 'Cisco 2507 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.60') { $details->model = 'Cisco 2509 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.61') { $details->model = 'Cisco 2511 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.62') { $details->model = 'Cisco 2514 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.63') { $details->model = 'Cisco 2516 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.64') { $details->model = 'Cisco 2519 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.65') { $details->model = 'Cisco 2521 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.66') { $details->model = 'Cisco 4500 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.67') { $details->model = 'Cisco 2517'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.68') { $details->model = 'Cisco 2518'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.69') { $details->model = 'Cisco 2519'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.70') { $details->model = 'Cisco 2520'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.71') { $details->model = 'Cisco 2521'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.72') { $details->model = 'Cisco 2522'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.73') { $details->model = 'Cisco 2523'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.74') { $details->model = 'Cisco 2524'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.75') { $details->model = 'Cisco 2525'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.76') { $details->model = 'Cisco 751 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.77') { $details->model = 'Cisco 752 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.78') { $details->model = 'Cisco 753 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.81') { $details->model = 'Cisco 751'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.82') { $details->model = 'Cisco 752'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.83') { $details->model = 'Cisco 753'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.84') { $details->model = 'Cisco 741 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.85') { $details->model = 'Cisco 742 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.86') { $details->model = 'Cisco 743 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.87') { $details->model = 'Cisco 744 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.88') { $details->model = 'Cisco 761 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.89') { $details->model = 'Cisco 762 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.92') { $details->model = 'Cisco 765 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.93') { $details->model = 'Cisco 766 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.94') { $details->model = 'Cisco 741'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.95') { $details->model = 'Cisco 742'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.96') { $details->model = 'Cisco 743'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.97') { $details->model = 'Cisco 744'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.98') { $details->model = 'Cisco 761'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.99') { $details->model = 'Cisco 762'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.102') { $details->model = 'Cisco 765'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.103') { $details->model = 'Cisco 766'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.104') { $details->model = 'Cisco 2520 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.105') { $details->model = 'Cisco 2522 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.106') { $details->model = 'Cisco 2524 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.107') { $details->model = 'Cisco LS 1010'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.108') { $details->model = 'Cisco 7206'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.109') { $details->model = 'Cisco AS 5200'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.110') { $details->model = 'Cisco 3640'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.111') { $details->model = 'Cisco Catalyst 3500'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.112') { $details->model = 'Cisco WSX 3011'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.113') { $details->model = 'Cisco 1601'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.114') { $details->model = 'Cisco 1602'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.115') { $details->model = 'Cisco 1603'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.116') { $details->model = 'Cisco 1604'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.117') { $details->model = 'Cisco 1601 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.118') { $details->model = 'Cisco 1602 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.119') { $details->model = 'Cisco 1603 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.120') { $details->model = 'Cisco 1604 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.122') { $details->model = 'Cisco 3620'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.123') { $details->model = 'Cisco 3620 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.124') { $details->model = 'Cisco 3640 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.125') { $details->model = 'Cisco 7204'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.126') { $details->model = 'Cisco 771'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.127') { $details->model = 'Cisco 772'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.128') { $details->model = 'Cisco 775'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.129') { $details->model = 'Cisco 776'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.130') { $details->model = 'Cisco 2502 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.131') { $details->model = 'Cisco 2504 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.132') { $details->model = 'Cisco 2506 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.133') { $details->model = 'Cisco 2508 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.134') { $details->model = 'Cisco 2510 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.135') { $details->model = 'Cisco 2512 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.136') { $details->model = 'Cisco 2513 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.137') { $details->model = 'Cisco 2515 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.138') { $details->model = 'Cisco 2517 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.139') { $details->model = 'Cisco 2518 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.140') { $details->model = 'Cisco 2523 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.141') { $details->model = 'Cisco 2525 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.142') { $details->model = 'Cisco 4700 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.147') { $details->model = 'Cisco 316T Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.148') { $details->model = 'Cisco 316C Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.149') { $details->model = 'Cisco 3116 Pro'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.150') { $details->model = 'Cisco Catalyst 116T'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.151') { $details->model = 'Cisco Catalyst 116C'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.152') { $details->model = 'Cisco Catalyst 1116'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.153') { $details->model = 'Cisco AS 2509RJ'; $details->type = 'access server'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.154') { $details->model = 'Cisco AS 2511RJ'; $details->type = 'access server'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.157') { $details->model = 'Cisco 3810 MC'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.160') { $details->model = 'Cisco 1503'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.161') { $details->model = 'Cisco 1502'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.162') { $details->model = 'Cisco AS 5300'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.164') { $details->model = 'Cisco LS 1015'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.165') { $details->model = 'Cisco 2501 FRADFX'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.166') { $details->model = 'Cisco 2501 LANFRADFX'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.167') { $details->model = 'Cisco 2502 LANFRADFX'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.168') { $details->model = 'Cisco Catalyst 5302'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.169') { $details->model = 'Cisco FastHub 216T'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.170') { $details->model = 'Cisco Catalyst 2908 xl'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.171') { $details->model = 'Cisco Catalyst 2916 m-xl'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.172') { $details->model = 'Cisco 1605'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.173') { $details->model = 'Cisco 12012'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.175') { $details->model = 'Cisco Catalyst 1912 C'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.176') { $details->model = 'Cisco Micro WebServer 2'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.177') { $details->model = 'Cisco Fast Hub BMMTX'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.178') { $details->model = 'Cisco Fast Hub BMMFX'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.179') { $details->model = 'Cisco 7246 UBR'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.180') { $details->model = 'Cisco 6400'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.181') { $details->model = 'Cisco 12004'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.182') { $details->model = 'Cisco 12008'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.183') { $details->model = 'Cisco Catalyst 2924 XL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.184') { $details->model = 'Cisco Catalyst 2924 CXL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.185') { $details->model = 'Cisco 2610'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.186') { $details->model = 'Cisco 2611'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.187') { $details->model = 'Cisco 2612'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.188') { $details->model = 'Cisco AS 5800'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.189') { $details->model = 'Cisco SC 3640'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.190') { $details->model = 'Cisco Catalyst 8510'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.191') { $details->model = 'Cisco UBR 904'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.192') { $details->model = 'Cisco 6200'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.194') { $details->model = 'Cisco 7202'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.195') { $details->model = 'Cisco 2613'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.196') { $details->model = 'Cisco Catalyst 8515'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.197') { $details->model = 'Cisco Catalyst 9006'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.198') { $details->model = 'Cisco Catalyst 9009'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.199') { $details->model = 'Cisco RPM'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.200') { $details->model = 'Cisco 1710'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.201') { $details->model = 'Cisco 1720'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.202') { $details->model = 'Cisco Catalyst 8540 msr'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.203') { $details->model = 'Cisco Catalyst 8540 csr'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.204') { $details->model = 'Cisco 7576'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.205') { $details->model = 'Cisco 3660'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.206') { $details->model = 'Cisco 1401'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.207') { $details->model = 'Cisco Catalyst 8500'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.208') { $details->model = 'Cisco 2620'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.209') { $details->model = 'Cisco 2621'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.210') { $details->model = 'Cisco 7223 UBR'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.211') { $details->model = 'Cisco 6400 Nrp'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.212') { $details->model = 'Cisco 801'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.213') { $details->model = 'Cisco 802'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.214') { $details->model = 'Cisco 803'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.215') { $details->model = 'Cisco 804'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.216') { $details->model = 'Cisco 1750'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.217') { $details->model = 'Cisco Catalyst 2924 XLv'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.218') { $details->model = 'Cisco Catalyst 2924 CXLv'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.219') { $details->model = 'Cisco Catalyst 2912 XL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.220') { $details->model = 'Cisco Catalyst 2924 MXL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.221') { $details->model = 'Cisco Catalyst 2912 MfXL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.222') { $details->model = 'Cisco 7206 VXR'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.223') { $details->model = 'Cisco 7204 VXR'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.224') { $details->model = 'Cisco 1538 M'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.225') { $details->model = 'Cisco 1548 M'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.226') { $details->model = 'Cisco Fast hub 100'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.227') { $details->model = 'Cisco PIX Firewall'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.228') { $details->model = 'Cisco MGX 8850'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.229') { $details->model = 'Cisco MGX 8830'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.230') { $details->model = 'Cisco Catalyst 8510 msr'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.231') { $details->model = 'Cisco Catalyst 8515 msr'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.232') { $details->model = 'Cisco IGX 8410'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.233') { $details->model = 'Cisco IGX 8420'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.234') { $details->model = 'Cisco IGX 8430'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.235') { $details->model = 'Cisco IGX 8450'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.237') { $details->model = 'Cisco BPX 8620'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.238') { $details->model = 'Cisco BPX 8650'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.239') { $details->model = 'Cisco BPX 8680'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.240') { $details->model = 'Cisco Cache Engine'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.241') { $details->model = 'Cisco Catalyst 6000'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.242') { $details->model = 'Cisco BPX Ses'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.243') { $details->model = 'Cisco IGX Ses'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.244') { $details->model = 'Cisco Local Director'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.245') { $details->model = 'Cisco 805'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.246') { $details->model = 'Cisco Catalyst 3508 GXL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.247') { $details->model = 'Cisco Catalyst 3512 XL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.248') { $details->model = 'Cisco Catalyst 3524 XL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.249') { $details->model = 'Cisco 1407'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.250') { $details->model = 'Cisco 1417'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.251') { $details->model = 'Cisco 6100'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.252') { $details->model = 'Cisco 6130'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.253') { $details->model = 'Cisco 6260'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.254') { $details->model = 'Cisco Optical Regenerator'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.255') { $details->model = 'Cisco UBR 924'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.256') { $details->model = 'Cisco WSX 6302 Msm'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.257') { $details->model = 'Cisco Catalyst 5k Rsfc'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.258') { $details->model = 'Cisco Catalyst 6k Msfc'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.259') { $details->model = 'Cisco 7120 Quadt1'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.260') { $details->model = 'Cisco 7120 T3'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.261') { $details->model = 'Cisco 7120 E3'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.262') { $details->model = 'Cisco 7120 At3'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.263') { $details->model = 'Cisco 7120 Ae3'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.264') { $details->model = 'Cisco 7120 Smi3'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.265') { $details->model = 'Cisco 7140 Dualt3'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.266') { $details->model = 'Cisco 7140 Duale3'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.267') { $details->model = 'Cisco 7140 Dualat3'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.268') { $details->model = 'Cisco 7140 Dualae3'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.269') { $details->model = 'Cisco 7140 Dualmm3'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.270') { $details->model = 'Cisco 827 QuadV'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.271') { $details->model = 'Cisco 7246 UBR VXR'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.272') { $details->model = 'Cisco 10400'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.273') { $details->model = 'Cisco 12016'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.274') { $details->model = 'Cisco AS 5400'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.275') { $details->model = 'Cisco Catalyst 2948 gL3'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.276') { $details->model = 'Cisco 7140 Octt1'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.277') { $details->model = 'Cisco 7140 Dualfe'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.278') { $details->model = 'Cisco Catalyst 3548 XL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.279') { $details->model = 'Cisco VG200'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.280') { $details->model = 'Cisco Catalyst 6006'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.281') { $details->model = 'Cisco Catalyst 6009'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.282') { $details->model = 'Cisco Catalyst 6506'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.283') { $details->model = 'Cisco Catalyst 6509'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.284') { $details->model = 'Cisco 827'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.285') { $details->model = 'Cisco Management Engine 1100'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.286') { $details->model = 'Cisco 3810 MC V3'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.287') { $details->model = 'Cisco Catalyst 3524 tXLEn'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.288') { $details->model = 'Cisco 7507 z'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.289') { $details->model = 'Cisco 7513 z'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.290') { $details->model = 'Cisco 7507 mx'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.291') { $details->model = 'Cisco 7513 mx'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.292') { $details->model = 'Cisco UBR 912C'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.293') { $details->model = 'Cisco UBR 912S'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.294') { $details->model = 'Cisco UBR 914'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.295') { $details->model = 'Cisco 802 J'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.296') { $details->model = 'Cisco 804 J'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.297') { $details->model = 'Cisco 6160'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.298') { $details->model = 'Cisco Catalyst 4908 gL3'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.300') { $details->model = 'Cisco Catalyst 4232 L3'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.301') { $details->model = 'Cisco Catalyst 6k Msfc2'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.302') { $details->model = 'Cisco 7750 Mrp200'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.303') { $details->model = 'Cisco 7750 Ssp80'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.304') { $details->model = 'Cisco MGX 8230'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.305') { $details->model = 'Cisco MGX 8250'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.306') { $details->model = 'Cisco CVA 122'; $details->type = 'voip adapter'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.307') { $details->model = 'Cisco CVA 124'; $details->type = 'voip adapter'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.308') { $details->model = 'Cisco AS 5850'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.310') { $details->model = 'Cisco Catalyst 6509 Sp'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.311') { $details->model = 'Cisco MGX 8240'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.312') { $details->model = 'Cisco Catalyst 4840 gL3'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.313') { $details->model = 'Cisco AS 5350'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.314') { $details->model = 'Cisco 7750'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.315') { $details->model = 'Cisco MGX 8950'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.316') { $details->model = 'Cisco UBR 925'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.317') { $details->model = 'Cisco UBR 10012'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.318') { $details->model = 'Cisco Catalyst 4k Gateway'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.319') { $details->model = 'Cisco 2650'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.320') { $details->model = 'Cisco 2651'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.321') { $details->model = 'Cisco 826 QuadV'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.322') { $details->model = 'Cisco 826'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.323') { $details->model = 'Cisco Catalyst 2950 12'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.324') { $details->model = 'Cisco Catalyst 2950 24'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.325') { $details->model = 'Cisco Catalyst 2950 24C'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.326') { $details->model = 'Cisco 1751'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.329') { $details->model = 'Cisco 626'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.330') { $details->model = 'Cisco 627'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.331') { $details->model = 'Cisco 633'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.332') { $details->model = 'Cisco 673'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.333') { $details->model = 'Cisco 675'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.334') { $details->model = 'Cisco 675e'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.335') { $details->model = 'Cisco 676'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.336') { $details->model = 'Cisco 677'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.337') { $details->model = 'Cisco 678'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.338') { $details->model = 'Cisco 3661 Ac'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.339') { $details->model = 'Cisco 3661 Dc'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.340') { $details->model = 'Cisco 3662 Ac'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.341') { $details->model = 'Cisco 3662 Dc'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.342') { $details->model = 'Cisco 3662 AcCo'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.343') { $details->model = 'Cisco 3662 DcCo'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.344') { $details->model = 'Cisco UBR 7111'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.345') { $details->model = 'Cisco UBR 7111E'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.346') { $details->model = 'Cisco UBR 7114'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.347') { $details->model = 'Cisco UBR 7114E'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.348') { $details->model = 'Cisco 12010'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.349') { $details->model = 'Cisco 8110'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.351') { $details->model = 'Cisco UBR905'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.353') { $details->model = 'Cisco SOHO 77'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.354') { $details->model = 'Cisco SOHO 76'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.355') { $details->model = 'Cisco 7150 Dualfe'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.356') { $details->model = 'Cisco 7150 Octt1'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.357') { $details->model = 'Cisco 7150 Dualt3'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.358') { $details->model = 'Cisco Olympus'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.359') { $details->model = 'Cisco Catalyst 2950 t24'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.360') { $details->model = 'Cisco VPS 1110'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.361') { $details->model = 'Cisco Content Engine'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.362') { $details->model = 'Cisco IAD 2420'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.363') { $details->model = 'Cisco 677i'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.364') { $details->model = 'Cisco 674'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.365') { $details->model = 'Cisco DPA 7630'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.366') { $details->model = 'Cisco Catalyst 3550 24'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.367') { $details->model = 'Cisco Catalyst 3550 48'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.368') { $details->model = 'Cisco Catalyst 3550 12T'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.369') { $details->model = 'Cisco Catalyst 2924 LREXL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.370') { $details->model = 'Cisco Catalyst 2912 LREXL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.371') { $details->model = 'Cisco CVA 122E'; $details->type = 'voip adapter'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.372') { $details->model = 'Cisco CVA 124E'; $details->type = 'voip adapter'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.373') { $details->model = 'Cisco URM'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.374') { $details->model = 'Cisco URM 2FE'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.375') { $details->model = 'Cisco URM 2FE2V'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.376') { $details->model = 'Cisco 7401 VXR'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.379') { $details->model = 'Cisco CAP 340'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.380') { $details->model = 'Cisco CAP 350'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.381') { $details->model = 'Cisco DPA 7610'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.382') { $details->model = 'Cisco 828'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.384') { $details->model = 'Cisco 806'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.385') { $details->model = 'Cisco 12416'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.386') { $details->model = 'Cisco Catalyst 2948 gL3Dc'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.387') { $details->model = 'Cisco Catalyst 4908 gL3Dc'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.388') { $details->model = 'Cisco 12406'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.389') { $details->model = 'Cisco PIX Firewall 506'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.390') { $details->model = 'Cisco PIX Firewall 515'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.391') { $details->model = 'Cisco PIX Firewall 520'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.392') { $details->model = 'Cisco PIX Firewall 525'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.393') { $details->model = 'Cisco PIX Firewall 535'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.394') { $details->model = 'Cisco 12410'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.395') { $details->model = 'Cisco 811'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.396') { $details->model = 'Cisco 813'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.397') { $details->model = 'Cisco 10720'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.398') { $details->model = 'Cisco MWR 1900'; $details->type = 'wireless router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.399') { $details->model = 'Cisco Catalyst 4224'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.400') { $details->model = 'Cisco Catalyst 6513'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.401') { $details->model = 'Cisco 7603 OSR'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.402') { $details->model = 'Cisco 7606 OSR'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.403') { $details->model = 'Cisco 7401 ASR'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.404') { $details->model = 'Cisco VG248'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.405') { $details->model = 'Cisco HSE'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.406') { $details->model = 'Cisco ONS 15540 ESP'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.407') { $details->model = 'Cisco SN 5420'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.409') { $details->model = 'Cisco Ce 507'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.410') { $details->model = 'Cisco Ce 560'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.411') { $details->model = 'Cisco Ce 590'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.412') { $details->model = 'Cisco Ce 7320'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.413') { $details->model = 'Cisco 2691'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.414') { $details->model = 'Cisco 3725'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.416') { $details->model = 'Cisco 1760'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.417') { $details->model = 'Cisco PIX Firewall 501'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.418') { $details->model = 'Cisco 2610 M'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.419') { $details->model = 'Cisco 2611 M'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.423') { $details->model = 'Cisco 12404'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.424') { $details->model = 'Cisco 9004'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.425') { $details->model = 'Cisco 3631 Co'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.427') { $details->model = 'Cisco Catalyst 2950 12G'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.428') { $details->model = 'Cisco Catalyst 2950 24G'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.429') { $details->model = 'Cisco Catalyst 2950 48G'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.430') { $details->model = 'Cisco Catalyst 2950 24S'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.431') { $details->model = 'Cisco Catalyst 3550 12G'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.432') { $details->model = 'Cisco Ce 507AV'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.433') { $details->model = 'Cisco Ce 560AV'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.434') { $details->model = 'Cisco IE 2105'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.435') { $details->model = 'Cisco MGX 8850 Pxm1E'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.436') { $details->model = 'Cisco 3745'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.437') { $details->model = 'Cisco 10005'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.438') { $details->model = 'Cisco 10008'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.439') { $details->model = 'Cisco 7304'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.440') { $details->model = 'Cisco RpmXf'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.444') { $details->model = 'Cisco 1721'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.446') { $details->model = 'Cisco 827 H'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.448') { $details->model = 'Cisco Catalyst 4006'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.449') { $details->model = 'Cisco Catalyst 6503'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.450') { $details->model = 'Cisco PIX Firewall 506E'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.451') { $details->model = 'Cisco PIX Firewall 515E'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.452') { $details->model = 'Cisco Catalyst 3550 24DC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.453') { $details->model = 'Cisco Catalyst 3550 24MMF'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.454') { $details->model = 'Cisco Ce 2636'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.455') { $details->model = 'Cisco DwCE'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.456') { $details->model = 'Cisco 7750 MRP300'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.457') { $details->model = 'Cisco RPMPR'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.458') { $details->model = 'Cisco 14MGX8830Pxm1E'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.459') { $details->model = 'Cisco Wlse'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.460') { $details->model = 'Cisco ONS 15530'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.461') { $details->model = 'Cisco ONS 15530 NEBS'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.462') { $details->model = 'Cisco ONS 15530 ETSI'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.464') { $details->model = 'Cisco 6400 UAC'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.466') { $details->model = 'Cisco 2610 XM'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.467') { $details->model = 'Cisco 2611 XM'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.468') { $details->model = 'Cisco 2620 XM'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.469') { $details->model = 'Cisco 2621 XM'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.470') { $details->model = 'Cisco 2650 XM'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.471') { $details->model = 'Cisco 2651 XM'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.472') { $details->model = 'Cisco Catalyst 2950 24GDC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.474') { $details->model = 'Cisco AIR AP1200'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.475') { $details->model = 'Cisco SN 5428'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.476') { $details->model = 'Cisco 7301'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.477') { $details->model = 'Cisco 12816'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.478') { $details->model = 'Cisco 12810'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.479') { $details->model = 'Cisco 3250'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.480') { $details->model = 'Cisco Catalyst 2950 24SX'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.481') { $details->model = 'Cisco ONS 15540 ESPx'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.482') { $details->model = 'Cisco Catalyst 2950 24LRESt'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.483') { $details->model = 'Cisco Catalyst 2950 8LRESt'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.484') { $details->model = 'Cisco Catalyst 2950 24LREG'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.485') { $details->model = 'Cisco Catalyst 3550 24PWR'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.486') { $details->model = 'Cisco CDM 4630'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.487') { $details->model = 'Cisco CDM 4650'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.488') { $details->model = 'Cisco Catalyst 2955 T12'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.489') { $details->model = 'Cisco Catalyst 2955 C12'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.490') { $details->model = 'Cisco Ce 508'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.491') { $details->model = 'Cisco Ce 565'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.492') { $details->model = 'Cisco Ce 7325'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.493') { $details->model = 'Cisco ONS 15454'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.494') { $details->model = 'Cisco ONS 15327'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.495') { $details->model = 'Cisco 837'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.496') { $details->model = 'Cisco SOHO 97'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.497') { $details->model = 'Cisco 831'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.498') { $details->model = 'Cisco SOHO 91'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.499') { $details->model = 'Cisco 836'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.500') { $details->model = 'Cisco SOHO 96'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.501') { $details->model = 'Cisco Catalyst 4507'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.502') { $details->model = 'Cisco Catalyst 4506'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.503') { $details->model = 'Cisco Catalyst 4503'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.504') { $details->model = 'Cisco Ce 7305'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.505') { $details->model = 'Cisco Ce 510'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.507') { $details->model = 'Cisco AIR AP1100'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.508') { $details->model = 'Cisco Catalyst 2955 S12'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.509') { $details->model = 'Cisco 7609'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.511') { $details->model = 'Cisco Catalyst 3750 24'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.512') { $details->model = 'Cisco Catalyst 3750 48'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.513') { $details->model = 'Cisco Catalyst 3750 24TS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.514') { $details->model = 'Cisco Catalyst 3750 24T'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.516') { $details->model = 'Cisco Catalyst 37xx Stack'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.517') { $details->model = 'Cisco GSS'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.518') { $details->model = 'Cisco Primary GSSM'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.519') { $details->model = 'Cisco Standby GSSM'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.520') { $details->model = 'Cisco MWR 1941DC'; $details->type = 'wireless router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.521') { $details->model = 'Cisco DSC 9216 K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.522') { $details->model = 'Cisco Catalyst 6500 Firewall Sm'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.524') { $details->model = 'Cisco CSM'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.525') { $details->model = 'Cisco AIR AP1210'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.527') { $details->model = 'Cisco Catalyst 2970 24'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.528') { $details->model = 'Cisco 7613'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.530') { $details->model = 'Cisco Catalyst 3750 Ge12Sfp'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.531') { $details->model = 'Cisco CR 4430'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.532') { $details->model = 'Cisco CR 4450'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.533') { $details->model = 'Cisco AIR BR1410'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.534') { $details->model = 'Cisco 6509 neba'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.535') { $details->model = 'Cisco Catalyst 3750 48PS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.536') { $details->model = 'Cisco Catalyst 3750 24PS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.537') { $details->model = 'Cisco Catalyst 4510'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.538') { $details->model = 'Cisco 1711'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.539') { $details->model = 'Cisco 1712'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.540') { $details->model = 'Cisco Catalyst 2940 8TT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.542') { $details->model = 'Cisco Catalyst 2940 8TF'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.543') { $details->model = 'Cisco 3825'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.544') { $details->model = 'Cisco 3845'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.545') { $details->model = 'Cisco 2430 Iad24Fxs'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.546') { $details->model = 'Cisco 2431 Iad8Fxs'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.547') { $details->model = 'Cisco 2431 Iad16Fxs'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.548') { $details->model = 'Cisco 2431 Iad1T1E1'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.549') { $details->model = 'Cisco 2432 Iad24Fxs'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.550') { $details->model = 'Cisco 1701'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.551') { $details->model = 'Cisco Catalyst 2950 St24LRE997'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.552') { $details->model = 'Cisco AIR Ap350IOS'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.553') { $details->model = 'Cisco 3220'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.554') { $details->model = 'Cisco Catalyst 6500 SslSm'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.555') { $details->model = 'Cisco SIMSE'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.556') { $details->model = 'Cisco ESSE'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.557') { $details->model = 'Cisco Catalyst 6k Sup720'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.558') { $details->model = 'Cisco VG224'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.559') { $details->model = 'Cisco Catalyst 2950 48T'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.560') { $details->model = 'Cisco Catalyst 2950 48SX'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.561') { $details->model = 'Cisco Catalyst 2970 24TS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.562') { $details->model = 'Cisco Nm Nam'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.563') { $details->model = 'Cisco Catalyst 3560 24PS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.564') { $details->model = 'Cisco Catalyst 3560 48PS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.565') { $details->model = 'Cisco AIR BR1300'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.566') { $details->model = 'Cisco 851'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.567') { $details->model = 'Cisco 857'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.568') { $details->model = 'Cisco 876'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.569') { $details->model = 'Cisco 877'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.570') { $details->model = 'Cisco 878'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.571') { $details->model = 'Cisco 871'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.573') { $details->model = 'Cisco Catalyst 6k Gateway'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.574') { $details->model = 'Cisco Catalyst 3750 24ME'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.575') { $details->model = 'Cisco Catalyst 4000 NAM'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.576') { $details->model = 'Cisco 2811'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.577') { $details->model = 'Cisco 2821'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.578') { $details->model = 'Cisco 2851'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.582') { $details->model = 'Cisco MCS 7815I'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.583') { $details->model = 'Cisco MCS 7825H'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.584') { $details->model = 'Cisco MCS 7835H'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.585') { $details->model = 'Cisco MCS 7835I'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.586') { $details->model = 'Cisco MCS 7845H'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.587') { $details->model = 'Cisco MCS 7845I'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.588') { $details->model = 'Cisco MCS 7855I'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.589') { $details->model = 'Cisco MCS 7865I'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.590') { $details->model = 'Cisco 12006'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.591') { $details->model = 'Cisco Catalyst 3750 G16TD'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.592') { $details->model = 'Cisco IGESM'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.593') { $details->model = 'Cisco CCM'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.595') { $details->model = 'Cisco Ce 511K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.596') { $details->model = 'Cisco Ce 566K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.598') { $details->model = 'Cisco MGX 8880'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.599') { $details->model = 'Cisco WsSvc WLAN1K9'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.600') { $details->model = 'Cisco Ce 7306K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.601') { $details->model = 'Cisco Ce 7326K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.602') { $details->model = 'Cisco Catalyst 3750 G24PS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.603') { $details->model = 'Cisco Catalyst 3750 G48PS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.604') { $details->model = 'Cisco Catalyst 3750 G48TS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.606') { $details->model = 'Cisco BMG X8830 Pxm45'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.607') { $details->model = 'Cisco BMG X8830 Pxm1E'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.608') { $details->model = 'Cisco BMG X8850 Pxm45'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.609') { $details->model = 'Cisco BMG X8850 Pxm1E'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.611') { $details->model = 'Cisco Network Registrar'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.612') { $details->model = 'Cisco Ce 501K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.613') { $details->model = 'Cisco CRS 16S'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.614') { $details->model = 'Cisco Catalyst 3560 G24PS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.615') { $details->model = 'Cisco Catalyst 3560 G24TS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.616') { $details->model = 'Cisco Catalyst 3560 G48PS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.617') { $details->model = 'Cisco Catalyst 3560 G48TS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.618') { $details->model = 'Cisco AIR AP1130'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.619') { $details->model = 'Cisco 2801'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.620') { $details->model = 'Cisco 1841'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.621') { $details->model = 'Cisco WsSvc MWAM1'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.622') { $details->model = 'Cisco NMC UE'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.623') { $details->model = 'Cisco AIM CUE'; $details->type = 'vpn terminator'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.624') { $details->model = 'Cisco Catalyst 3750 G24TS1U'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.625') { $details->model = 'Cisco 3710 98HP001'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.626') { $details->model = 'Cisco Catalyst 4948'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.630') { $details->model = 'Cisco WLSE 1130'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.631') { $details->model = 'Cisco WLSE 1030'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.632') { $details->model = 'Cisco HSE 1140'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.633') { $details->model = 'Cisco Catalyst 3560 24TS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.634') { $details->model = 'Cisco Catalyst 3560 48TS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.638') { $details->model = 'Cisco 1801'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.639') { $details->model = 'Cisco 1802'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.640') { $details->model = 'Cisco 1803'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.641') { $details->model = 'Cisco 1811'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.642') { $details->model = 'Cisco 1812'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.643') { $details->model = 'Cisco CRS 8S'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.645') { $details->model = 'Cisco IDS 4210'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.646') { $details->model = 'Cisco IDS 4215'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.647') { $details->model = 'Cisco IDS 4235'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.648') { $details->model = 'Cisco IPS 4240'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.649') { $details->model = 'Cisco IDS 4250'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.650') { $details->model = 'Cisco IDS 4250 SX'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.651') { $details->model = 'Cisco IDS 4250 XL'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.652') { $details->model = 'Cisco IPS 4255'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.653') { $details->model = 'Cisco IDS IDSM2'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.654') { $details->model = 'Cisco IDS NMCIDS'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.655') { $details->model = 'Cisco IPS SSM20'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.656') { $details->model = 'Cisco Catalyst 3750 24FS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.657') { $details->model = 'Cisco 6504 E'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.658') { $details->model = 'Cisco 7604'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.659') { $details->model = 'Cisco Catalyst 4948 10GE'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.660') { $details->model = 'Cisco IGESM SFP'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.661') { $details->model = 'Cisco Fe 6326K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.662') { $details->model = 'Cisco IPS SSM10'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.663') { $details->model = 'Cisco Nme 16Es1Ge'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.664') { $details->model = 'Cisco Nme X24Es1Ge'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.665') { $details->model = 'Cisco Nme Xd24Es2St'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.666') { $details->model = 'Cisco Nme Xd48Es2Ge'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.668') { $details->model = 'Cisco AS 5400 XM'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.669') { $details->model = 'Cisco ASA 5510'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.670') { $details->model = 'Cisco ASA 5520'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.671') { $details->model = 'Cisco ASA 5520 sc'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.672') { $details->model = 'Cisco ASA 5540'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.673') { $details->model = 'Cisco ASA 5540 sc'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.674') { $details->model = 'Cisco WsSvc Fwm1sc'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.675') { $details->model = 'Cisco PIX Firewall 535sc'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.676') { $details->model = 'Cisco PIX Firewall 525sc'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.677') { $details->model = 'Cisco PIX Firewall 515Esc'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.678') { $details->model = 'Cisco PIX Firewall 515sc'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.679') { $details->model = 'Cisco AS 5350 XM'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.680') { $details->model = 'Cisco Fe 7326K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.681') { $details->model = 'Cisco Fe 511K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.682') { $details->model = 'Cisco SCE Dispatcher'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.683') { $details->model = 'Cisco SCE 1000'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.684') { $details->model = 'Cisco SCE 2000'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.685') { $details->model = 'Cisco AIR AP1240'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.686') { $details->model = 'Cisco DSC 9120 CLK9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.687') { $details->model = 'Cisco Fe 611K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.688') { $details->model = 'Cisco Catalyst 3750 Ge12SfpDc'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.693') { $details->model = 'Cisco ICM'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.694') { $details->model = 'Cisco Catalyst 2960 24'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.695') { $details->model = 'Cisco Catalyst 2960 48'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.696') { $details->model = 'Cisco Catalyst 2960 G24'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.697') { $details->model = 'Cisco Catalyst 2960 G48'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.702') { $details->model = 'Cisco Nme 16Es1GeNoPwr'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.703') { $details->model = 'Cisco Nme X24Es1GeNoPwr'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.704') { $details->model = 'Cisco Nme Xd24Es2StNoPwr'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.705') { $details->model = 'Cisco Nme Xd48Es2GeNoPwr'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.706') { $details->model = 'Cisco Catalyst 6k Msfc2a'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.707') { $details->model = 'Cisco EDI'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.708') { $details->model = 'Cisco Ce 611K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.709') { $details->model = 'Cisco WLSE s20'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.710') { $details->model = 'Cisco MPX'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.711') { $details->model = 'Cisco NMC UEEC'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.712') { $details->model = 'Cisco WLSE 1132'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.713') { $details->model = 'Cisco ME 6340 ACA'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.714') { $details->model = 'Cisco ME 6340 DCA'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.715') { $details->model = 'Cisco ME 6340 DCB'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.716') { $details->model = 'Cisco Catalyst 2960 24TT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.717') { $details->model = 'Cisco Catalyst 2960 48TT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.718') { $details->model = 'Cisco IGESM SFPT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.719') { $details->model = 'Cisco ME C6524 gs8s'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.720') { $details->model = 'Cisco ME C6524 gt8s'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.723') { $details->model = 'Cisco Paldron'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.724') { $details->model = 'Cisco Catalyst Express 500 24TT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.725') { $details->model = 'Cisco Catalyst Express 500 24LC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.726') { $details->model = 'Cisco Catalyst Express 500 24PC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.727') { $details->model = 'Cisco Catalyst Express 500 12TC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.728') { $details->model = 'Cisco IGESM T'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.730') { $details->model = 'Cisco ACE 10K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.731') { $details->model = 'Cisco 5750'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.732') { $details->model = 'Cisco MWR 1941DCA'; $details->type = 'wireless router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.733') { $details->model = 'Cisco 815'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.734') { $details->model = 'Cisco 2400 24TSA'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.735') { $details->model = 'Cisco 2400 24TSD'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.736') { $details->model = 'Cisco 3400 24TSA'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.737') { $details->model = 'Cisco 3400 24TSD'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.738') { $details->model = 'Cisco CRS 18Linecard'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.739') { $details->model = 'Cisco CRS 1Fabric'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.740') { $details->model = 'Cisco Fe 2636'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.741') { $details->model = 'Cisco IDS 4220'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.742') { $details->model = 'Cisco IDS 4230'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.743') { $details->model = 'Cisco IPS 4260'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.744') { $details->model = 'Cisco WsSvc SAMIBB'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.745') { $details->model = 'Cisco ASA 5505'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.746') { $details->model = 'Cisco MCS 7825I'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.747') { $details->model = 'Cisco 3750 g24ps'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.748') { $details->model = 'Cisco Ws 3020Hpq'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.749') { $details->model = 'Cisco Ws 3030Del'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.750') { $details->model = 'Cisco SpaOc48posSfp'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.752') { $details->model = 'Cisco WLSE 1133'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.753') { $details->model = 'Cisco ASA 5550'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.754') { $details->model = 'Cisco NMA ONK9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.755') { $details->model = 'Cisco NMA ONWS'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.756') { $details->model = 'Cisco NMA ONAPS'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.757') { $details->model = 'Cisco Wae612K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.758') { $details->model = 'Cisco AIR AP1250'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.759') { $details->model = 'Cisco Ce 512K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.760') { $details->model = 'Cisco Fe 512K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.761') { $details->model = 'Cisco Ce 612K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.762') { $details->model = 'Cisco Fe 612K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.763') { $details->model = 'Cisco ASA 5550 sc'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.764') { $details->model = 'Cisco ASA 5520 sy'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.765') { $details->model = 'Cisco ASA 5540 sy'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.766') { $details->model = 'Cisco ASA 5550 sy'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.767') { $details->model = 'Cisco WsSvc Fwm1sy'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.768') { $details->model = 'Cisco PIX Firewall 515sy'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.769') { $details->model = 'Cisco PIX Firewall 515Esy'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.770') { $details->model = 'Cisco PIX Firewall 525sy'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.771') { $details->model = 'Cisco PIX Firewall 535sy'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.772') { $details->model = 'Cisco IpRanOpt4p'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.773') { $details->model = 'Cisco ASA 5510sc'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.774') { $details->model = 'Cisco ASA 5510sy'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.776') { $details->model = 'Cisco Oe 512K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.777') { $details->model = 'Cisco Oe 612K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.778') { $details->model = 'Cisco Catalyst 3750 G24WS25'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.779') { $details->model = 'Cisco Catalyst 3750 G24WS50'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.780') { $details->model = 'Cisco Me 3400 g12CsA'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.781') { $details->model = 'Cisco Me 3400 g12CsD'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.782') { $details->model = 'Cisco 877 M'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.783') { $details->model = 'Cisco 1801 M'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.784') { $details->model = 'Cisco Catalyst BS 3040 FSC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.785') { $details->model = 'Cisco Oe 511K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.786') { $details->model = 'Cisco Oe 611K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.787') { $details->model = 'Cisco Oe 7326K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.788') { $details->model = 'Cisco Me 4924 10GE'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.789') { $details->model = 'Cisco Catalyst 3750 E24TD'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.790') { $details->model = 'Cisco Catalyst 3750 E48TD'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.791') { $details->model = 'Cisco Catalyst 3750 E48PD'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.792') { $details->model = 'Cisco Catalyst 3750 E24PD'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.793') { $details->model = 'Cisco Catalyst 3560 E24TD'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.794') { $details->model = 'Cisco Catalyst 3560 E48TD'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.795') { $details->model = 'Cisco Catalyst 3560 E24PD'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.796') { $details->model = 'Cisco Catalyst 3560 E48PD'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.797') { $details->model = 'Cisco Catalyst 3560 8PC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.798') { $details->model = 'Cisco Catalyst 2960 8TC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.799') { $details->model = 'Cisco Catalyst 2960 G8TC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.800') { $details->model = 'Cisco TSPri'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.801') { $details->model = 'Cisco TSSec'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.802') { $details->model = 'Cisco UW IpPhone 7921G'; $details->type = 'ip phone'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.803') { $details->model = 'Cisco UW IpPhone 7920'; $details->type = 'ip phone'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.804') { $details->model = 'Cisco 3200 WirelessMic'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.805') { $details->model = 'Cisco ISR Wireless'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.806') { $details->model = 'Cisco IPS Virtual'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.807') { $details->model = 'Cisco IDS 4215 Virtual'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.808') { $details->model = 'Cisco IDS 4235 Virtual'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.809') { $details->model = 'Cisco IDS 4250 Virtual'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.810') { $details->model = 'Cisco IDS 4250SX Virtual'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.811') { $details->model = 'Cisco IDS 4250XL Virtual'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.812') { $details->model = 'Cisco IDS 4240 Virtual'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.813') { $details->model = 'Cisco IDS 4255 Virtual'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.814') { $details->model = 'Cisco IDS 4260 Virtual'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.815') { $details->model = 'Cisco IDS IDSM2 Virtual'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.816') { $details->model = 'Cisco IPS SSM20Virtual'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.817') { $details->model = 'Cisco IPS SSM10Virtual'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.818') { $details->model = 'Cisco NM WLCE'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.819') { $details->model = 'Cisco 3205 WirelessMic'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.820') { $details->model = 'Cisco 5720'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.821') { $details->model = 'Cisco 7201'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.822') { $details->model = 'Cisco CRS 14S'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.823') { $details->model = 'Cisco Nm Wae'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.824') { $details->model = 'Cisco ACE 4710K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.825') { $details->model = 'Cisco Me 3400 g2csA'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.826') { $details->model = 'Cisco Nme Nam'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.827') { $details->model = 'Cisco Ubr7225Vxr'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.828') { $details->model = 'Cisco AIR Wlc2106K9'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.830') { $details->model = 'Cisco IPS 4270'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.831') { $details->model = 'Cisco IPS 4270Virtual'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.832') { $details->model = 'Cisco 6509 ve'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.833') { $details->model = 'Cisco 5740'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.834') { $details->model = 'Cisco 861'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.836') { $details->model = 'Cisco 867'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.837') { $details->model = 'Cisco 881'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.838') { $details->model = 'Cisco 881 G'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.839') { $details->model = 'Cisco Iad 881F'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.840') { $details->model = 'Cisco 881 Srst'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.841') { $details->model = 'Cisco Iad 881B'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.842') { $details->model = 'Cisco 886'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.843') { $details->model = 'Cisco 886 G'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.844') { $details->model = 'Cisco Iad 886F'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.845') { $details->model = 'Cisco Iad 886B'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.846') { $details->model = 'Cisco 886 Srst'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.847') { $details->model = 'Cisco 887'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.848') { $details->model = 'Cisco 887 G'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.849') { $details->model = 'Cisco Iad 887F'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.850') { $details->model = 'Cisco Iad 887B'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.851') { $details->model = 'Cisco 887 Srst'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.852') { $details->model = 'Cisco 888'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.853') { $details->model = 'Cisco 888 G'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.854') { $details->model = 'Cisco Iad 888F'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.855') { $details->model = 'Cisco Iad 888B'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.856') { $details->model = 'Cisco 888 Srst'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.857') { $details->model = 'Cisco 891'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.858') { $details->model = 'Cisco 892'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.862') { $details->model = 'Cisco 7603 s'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.863') { $details->model = 'Cisco 7606 s'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.864') { $details->model = 'Cisco 7609 s'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.866') { $details->model = 'Cisco Nme CUE'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.867') { $details->model = 'Cisco AIM 2CUE'; $details->type = 'vpn terminator'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.868') { $details->model = 'Cisco UC500'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.869') { $details->model = 'Cisco 860 Ap'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.870') { $details->model = 'Cisco 880 Ap'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.871') { $details->model = 'Cisco 890 Ap'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.872') { $details->model = 'Cisco 1900 Ap'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.873') { $details->model = 'Cisco 3400 24FSA'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.874') { $details->model = 'Cisco Catalyst 4503e'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.875') { $details->model = 'Cisco Catalyst 4506e'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.876') { $details->model = 'Cisco Catalyst 4507 re'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.877') { $details->model = 'Cisco Catalyst 4510 re'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.878') { $details->model = 'Cisco UC520s 8U4FXOK9'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.879') { $details->model = 'Cisco UC520s 8U4FXOWK9'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.880') { $details->model = 'Cisco UC520s 8U2BRIK9'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.881') { $details->model = 'Cisco UC520s 8U2BRIWK9'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.882') { $details->model = 'Cisco UC520s 16U4FXOK9'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.883') { $details->model = 'Cisco UC520s 16U4FXOWK9'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.884') { $details->model = 'Cisco UC520s 16U2BRIK9'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.885') { $details->model = 'Cisco UC520s 16U2BRIWK9'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.886') { $details->model = 'Cisco UC520m 32U8FXOK9'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.887') { $details->model = 'Cisco UC520m 32U8FXOWK9'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.888') { $details->model = 'Cisco UC520m 32U4BRIK9'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.889') { $details->model = 'Cisco UC520m 32U4BRIWK9'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.890') { $details->model = 'Cisco UC520m 48U12FXOK9'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.891') { $details->model = 'Cisco UC520m 48U12FXOWK9'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.892') { $details->model = 'Cisco UC520m 48U6BRIK9'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.893') { $details->model = 'Cisco UC520m 48U6BRIWK9'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.894') { $details->model = 'Cisco UC520m 48U1T1E1FK9'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.895') { $details->model = 'Cisco UC520m 48U1T1E1BK9'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.896') { $details->model = 'Cisco Catalyst 65xx Virtual Switch'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.897') { $details->model = 'Cisco Catalyst Express 520 8PC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.898') { $details->model = 'Cisco MCS 7816I'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.899') { $details->model = 'Cisco MCS 7828I'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.900') { $details->model = 'Cisco MCS 7816H'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.901') { $details->model = 'Cisco MCS 7828H'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.902') { $details->model = 'Cisco 1861 Uc2BK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.903') { $details->model = 'Cisco 1861 Uc4FK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.904') { $details->model = 'Cisco 1861 Srst2BK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.905') { $details->model = 'Cisco 1861 Srst4FK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.906') { $details->model = 'Cisco Nme Apa'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.907') { $details->model = 'Cisco Oe 7330K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.908') { $details->model = 'Cisco Oe 7350K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.909') { $details->model = 'Cisco BS 3110 gS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.910') { $details->model = 'Cisco BS 3110 gSt'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.911') { $details->model = 'Cisco BS 3110 xS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.912') { $details->model = 'Cisco BS 3110 xSt'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.913') { $details->model = 'Cisco SCE 8000'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.914') { $details->model = 'Cisco ASA 5580'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.915') { $details->model = 'Cisco ASA 5580 sc'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.916') { $details->model = 'Cisco ASA 5580 sy'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.917') { $details->model = 'Cisco Catalyst 4900 M'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.918') { $details->model = 'Cisco Catalyst BS 3120 gS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.919') { $details->model = 'Cisco Catalyst BS 3120 xS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.920') { $details->model = 'Cisco Catalyst BS 3032 Del'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.921') { $details->model = 'Cisco Catalyst BS 3130 gS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.922') { $details->model = 'Cisco Catalyst BS 3130 xS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.923') { $details->model = 'Cisco ASR 1002'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.924') { $details->model = 'Cisco ASR 1004'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.925') { $details->model = 'Cisco ASR 1006'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.926') { $details->model = 'Cisco 520 Wireless Controller'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.927') { $details->model = 'Cisco Catalyst 2960 48TCS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.928') { $details->model = 'Cisco Catalyst 2960 24TCS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.929') { $details->model = 'Cisco Catalyst 2960 24S'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.930') { $details->model = 'Cisco Catalyst 3560 e12d'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.931') { $details->model = 'Cisco Catalyst Rfgw'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.932') { $details->model = 'Cisco Catalyst Express 520 24TT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.933') { $details->model = 'Cisco Catalyst Express 520 24LC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.934') { $details->model = 'Cisco Catalyst Express 520 24PC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.935') { $details->model = 'Cisco Catalyst Express 520 G24TC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.936') { $details->model = 'Cisco CDS cde 100'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.937') { $details->model = 'Cisco CDS cde 200'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.938') { $details->model = 'Cisco CDS cde 300'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.939') { $details->model = 'Cisco 1861 SrstCue2BK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.940') { $details->model = 'Cisco 1861 SrstCue4FK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.941') { $details->model = 'Cisco VFrameDataCenter'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.942') { $details->model = 'Cisco VQEServer'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.943') { $details->model = 'Cisco IPS SSM40Virtual'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.944') { $details->model = 'Cisco IPS SSM40'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.945') { $details->model = 'Cisco Vgd1t3'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.946') { $details->model = 'Cisco CBS 3100'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.947') { $details->model = 'Cisco CBS 3110'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.948') { $details->model = 'Cisco CBS 3120'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.949') { $details->model = 'Cisco CBS 3130'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.950') { $details->model = 'Cisco Catalyst 2960 24PC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.951') { $details->model = 'Cisco Catalyst 2960 24LT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.952') { $details->model = 'Cisco Catalyst 2960 PD8TT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.954') { $details->model = 'Cisco N5k C5020pBa'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.955') { $details->model = 'Cisco N5k C5020pBd'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.956') { $details->model = 'Cisco Catalyst 3560 E12SD'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.957') { $details->model = 'Cisco Oe 674'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.958') { $details->model = 'Cisco IE3000 4TC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.959') { $details->model = 'Cisco IE3000 8TC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.960') { $details->model = 'Cisco RAIE1783MS06T'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.961') { $details->model = 'Cisco RAIE1783MS10T'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.962') { $details->model = 'Cisco 2435 Iad8fxs'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.963') { $details->model = 'Cisco VG204'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.964') { $details->model = 'Cisco VG202'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.965') { $details->model = 'Cisco Catalyst 2918 24TT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.966') { $details->model = 'Cisco Catalyst 2918 24TC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.967') { $details->model = 'Cisco Catalyst 2918 48TT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.968') { $details->model = 'Cisco Catalyst 2918 48TC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.969') { $details->model = 'Cisco VQETools'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.970') { $details->model = 'Cisco UC520m 24U4BRIK9'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.971') { $details->model = 'Cisco UC520m 24U8FXOK9'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.972') { $details->model = 'Cisco UC520s 16U2BRIWK9J'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.973') { $details->model = 'Cisco UC520s 8U2BRIWK9J'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.974') { $details->model = 'Cisco VSIntSp'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.975') { $details->model = 'Cisco VSSP'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.976') { $details->model = 'Cisco VSHydecoder'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.977') { $details->model = 'Cisco VSDecoder'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.978') { $details->model = 'Cisco VSEncoder4P'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.979') { $details->model = 'Cisco VSEncoder1P'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.980') { $details->model = 'Cisco SCS 1000K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.981') { $details->model = 'Cisco 1805'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.982') { $details->model = 'Cisco Ce 7341'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.983') { $details->model = 'Cisco Ce 7371'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.985') { $details->model = 'Cisco Oe 574'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.986') { $details->model = 'Cisco Oe 474'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.987') { $details->model = 'Cisco Oe 274'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.988') { $details->model = 'Cisco Ap 801agn'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.989') { $details->model = 'Cisco Ap 801gn'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.990') { $details->model = 'Cisco 1861 WSrstCue4FK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.991') { $details->model = 'Cisco 1861 WSrstCue2BK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.992') { $details->model = 'Cisco 1861 WSrst4FK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.993') { $details->model = 'Cisco 1861 WSrst2BK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.994') { $details->model = 'Cisco 1861 WUc4FK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.995') { $details->model = 'Cisco 1861 WUc2BK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.996') { $details->model = 'Cisco Ce 674'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.997') { $details->model = 'Cisco VQEIST'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.999') { $details->model = 'Cisco BS 3012 Ibm'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1000') { $details->model = 'Cisco BS 3012 IbmI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1001') { $details->model = 'Cisco BS 3125 gS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1002') { $details->model = 'Cisco BS 3125 xS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1003') { $details->model = 'Cisco TSPri G2'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1004') { $details->model = 'Cisco Catalyst 4928 10GE'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1005') { $details->model = 'Cisco Catalyst 2960 48TTS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1006') { $details->model = 'Cisco Catalyst 2960 8TCS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1007') { $details->model = 'Cisco Me 3400 eg2csA'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1008') { $details->model = 'Cisco Me 3400 eg12csM'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1009') { $details->model = 'Cisco Me 3400 e24tsM'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1010') { $details->model = 'Cisco IPS SSC5 Virtual'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1011') { $details->model = 'Cisco SR 520FE'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1012') { $details->model = 'Cisco SR 520ADSL'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1013') { $details->model = 'Cisco SR 520ADSLi'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1014') { $details->model = 'Cisco MWR 2941DC'; $details->type = 'wireless router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1015') { $details->model = 'Cisco Catalyst 3560 12PCS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1016') { $details->model = 'Cisco Catalyst 2960 48PSTL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1017') { $details->model = 'Cisco ASR 9010'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1018') { $details->model = 'Cisco ASR 9006'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1019') { $details->model = 'Cisco Catalyst 3560 v224tsD'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1020') { $details->model = 'Cisco Catalyst 3560 v224ts'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1021') { $details->model = 'Cisco Catalyst 3560 v224ps'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1022') { $details->model = 'Cisco Catalyst 3750 v224ts'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1023') { $details->model = 'Cisco Catalyst 3750 v224ps'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1024') { $details->model = 'Cisco Catalyst 3560 v248ts'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1025') { $details->model = 'Cisco Catalyst 3560 v248ps'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1026') { $details->model = 'Cisco Catalyst 3750 v248ts'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1027') { $details->model = 'Cisco Catalyst 3750 v248ps'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1028') { $details->model = 'Cisco Hwic CableD2'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1029') { $details->model = 'Cisco Hwic CableEJ2'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1030') { $details->model = 'Cisco Br1430'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1031') { $details->model = 'Cisco AIR BR1430'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1032') { $details->model = 'Cisco Nam App2204'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1033') { $details->model = 'Cisco Nam App2220'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1034') { $details->model = 'Cisco AIR AP1141'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1035') { $details->model = 'Cisco AIR AP1142'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1036') { $details->model = 'Cisco ASR 14K4S'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1037') { $details->model = 'Cisco ASR 14K8S'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1038') { $details->model = 'Cisco 18xxx'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1039') { $details->model = 'Cisco IPS SSC5'; $details->type = 'network ids'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1040') { $details->model = 'Cisco 887 Vdsl2'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1041') { $details->model = 'Cisco 3945'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1042') { $details->model = 'Cisco 3925'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1043') { $details->model = 'Cisco 2951'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1044') { $details->model = 'Cisco 2921'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1045') { $details->model = 'Cisco 2911'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1046') { $details->model = 'Cisco 2901'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1047') { $details->model = 'Cisco 1941'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1048') { $details->model = 'Cisco Sm2k 15Es1GePoe'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1049') { $details->model = 'Cisco Sm3k 15Es1GePoe'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1050') { $details->model = 'Cisco Sm3k 16GePoe'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1051') { $details->model = 'Cisco Sm2k 23Es1Ge'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1052') { $details->model = 'Cisco Sm2k 23Es1GePoe'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1053') { $details->model = 'Cisco Sm3k 23Es1GePoe'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1054') { $details->model = 'Cisco Sm3k 24GePoe'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1055') { $details->model = 'Cisco SmXd 2k48Es2SFP'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1056') { $details->model = 'Cisco SmXd 3k48Es2SFPPoe'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1057') { $details->model = 'Cisco SmXd 3k48Ge2SFPPoe'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1058') { $details->model = 'Cisco Esw 52024pK9'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1059') { $details->model = 'Cisco Esw 54024pK9'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1060') { $details->model = 'Cisco Esw 52048pK9'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1061') { $details->model = 'Cisco Esw 52024K9'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1062') { $details->model = 'Cisco Esw 54024K9'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1063') { $details->model = 'Cisco Esw 52048K9'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1064') { $details->model = 'Cisco Esw 54048K9'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1065') { $details->model = 'Cisco 1861'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1066') { $details->model = 'Cisco UC520'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1067') { $details->model = 'Cisco Catalyst 2975 GS48PSL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1068') { $details->model = 'Cisco Catalyst C2975 Stack'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1069') { $details->model = 'Cisco 5500 Wlc'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1070') { $details->model = 'Cisco SR 520T1'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1071') { $details->model = 'Cisco Pwr C3900Poe'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1072') { $details->model = 'Cisco Pwr C3900AC'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1073') { $details->model = 'Cisco Pwr C2921C2951Poe'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1074') { $details->model = 'Cisco Pwr C2921C2951AC'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1075') { $details->model = 'Cisco Pwr C2911Poe'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1076') { $details->model = 'Cisco Pwr C2911AC'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1077') { $details->model = 'Cisco Pwr C2901Poe'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1078') { $details->model = 'Cisco Pwr C1941C2901AC'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1079') { $details->model = 'Cisco Pwr C1941Poe'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1080') { $details->model = 'Cisco Pwr C3900DC'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1081') { $details->model = 'Cisco Pwr C2921C2951DC'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1082') { $details->model = 'Cisco Pwr C2911DC'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1083') { $details->model = 'Cisco RpsAdptrC2921C2951'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1084') { $details->model = 'Cisco RpsAdptrC2911'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1087') { $details->model = 'Cisco Catalyst BS 3140 XS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1088') { $details->model = 'Cisco Catalyst BS 3140 GS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1089') { $details->model = 'Cisco Catalyst BS 3042 FSC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1090') { $details->model = 'Cisco Catalyst BS 3150 XS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1091') { $details->model = 'Cisco Catalyst BS 3150 GS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1092') { $details->model = 'Cisco Catalyst BS 3052 NEC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1093') { $details->model = 'Cisco CBS 3140 Stack'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1094') { $details->model = 'Cisco CBS 3150 Stack'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1095') { $details->model = 'Cisco 1941 W'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1096') { $details->model = 'Cisco C888 E'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1097') { $details->model = 'Cisco C888 EG'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1098') { $details->model = 'Cisco Iad 888EB'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1099') { $details->model = 'Cisco Iad 888EF'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1100') { $details->model = 'Cisco C888 ESRST'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1102') { $details->model = 'Cisco 3845 nv'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1103') { $details->model = 'Cisco 3825 nv'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1104') { $details->model = 'Cisco Catalyst 2350 48TD'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1105') { $details->model = 'Cisco 887 M'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1112') { $details->model = 'Cisco Ce VirtualBlade'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1113') { $details->model = 'Cisco CDS cde 420'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1114') { $details->model = 'Cisco CDS cde 220'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1115') { $details->model = 'Cisco CDS cde 110'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1116') { $details->model = 'Cisco ASR 1002F'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1117') { $details->model = 'Cisco SecureAccessControlSystem'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1124') { $details->model = 'Cisco AIR AP3501'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1125') { $details->model = 'Cisco AIR AP3502'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1126') { $details->model = 'Cisco CDS cde 400'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1130') { $details->model = 'Cisco Sps 2004B'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1131') { $details->model = 'Cisco Sps 204B'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1135') { $details->model = 'Cisco Ap 541nAK9'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1136') { $details->model = 'Cisco Ap 541nEK9'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1137') { $details->model = 'Cisco Ap 541nNK9'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1138') { $details->model = 'Cisco 887 GVdsl2'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1139') { $details->model = 'Cisco 887 SrstVdsl2'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1140') { $details->model = 'Cisco UC540W FXO K9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1141') { $details->model = 'Cisco UC540W BRI K9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1142') { $details->model = 'Cisco CA Server'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1143') { $details->model = 'Cisco CA Manager'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1144') { $details->model = 'Cisco 3925 SPE200'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1145') { $details->model = 'Cisco 3945 SPE250'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1146') { $details->model = 'Cisco Catalyst 2960 24LCS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1147') { $details->model = 'Cisco Catalyst 2960 24PCS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1148') { $details->model = 'Cisco Catalyst 2960 48PSTS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1149') { $details->model = 'Cisco ISM'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1150') { $details->model = 'Cisco SM'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1151') { $details->model = 'Cisco Nme AXP'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1152') { $details->model = 'Cisco AIM AXP'; $details->type = 'vpn terminator'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1153') { $details->model = 'Cisco AIM 2AXP'; $details->type = 'vpn terminator'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1154') { $details->model = 'Cisco SRP 521'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1155') { $details->model = 'Cisco SRP 526'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1156') { $details->model = 'Cisco SRP 527'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1157') { $details->model = 'Cisco SRP 541'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1158') { $details->model = 'Cisco SRP 546'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1159') { $details->model = 'Cisco SRP 547'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1160') { $details->model = 'Cisco VS510FXO'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1161') { $details->model = 'Cisco Nm Wae 900'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1162') { $details->model = 'Cisco Nm Wae 700'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1163') { $details->model = 'Cisco 5940 RA'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1164') { $details->model = 'Cisco 5940 RC'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1165') { $details->model = 'Cisco ASR 1001'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1166') { $details->model = 'Cisco ASR 1013'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1167') { $details->model = 'Cisco CDS cde 205'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1168') { $details->model = 'Cisco Pwr 1941AC'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1169') { $details->model = 'Cisco Nam WaasVirtualBlade'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1170') { $details->model = 'Cisco Raie1783Rms06t'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1171') { $details->model = 'Cisco Raie1783Rms10t'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1172') { $details->model = 'Cisco 1941 WEK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1173') { $details->model = 'Cisco 1941 WPK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1174') { $details->model = 'Cisco 1941 WNK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1175') { $details->model = 'Cisco MXE 5600'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1176') { $details->model = 'Cisco Esw 5408pK9'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1177') { $details->model = 'Cisco Esw 5208pK9'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1178') { $details->model = 'Cisco Catalyst 4948 e10GE'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1191') { $details->model = 'Cisco 1921 k9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1194') { $details->model = 'Cisco ASA 5585 SSP10'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1195') { $details->model = 'Cisco ASA 5585 SSP20'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1196') { $details->model = 'Cisco ASA 5585 SSP40'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1197') { $details->model = 'Cisco ASA 5585 SSP60'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1198') { $details->model = 'Cisco ASA 5585 SSP10 sc'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1199') { $details->model = 'Cisco ASA 5585 SSP20 sc'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1200') { $details->model = 'Cisco ASA 5585 SSP40 sc'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1201') { $details->model = 'Cisco ASA 5585 SSP60 sc'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1202') { $details->model = 'Cisco ASA 5585 SSP10 sy'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1203') { $details->model = 'Cisco ASA 5585 SSP20 sy'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1204') { $details->model = 'Cisco ASA 5585 SSP40 sy'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1205') { $details->model = 'Cisco ASA 5585 SSP60 sy'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1208') { $details->model = 'Cisco Catalyst 2960S Stack'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1209') { $details->model = 'Cisco OeNm 302'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1210') { $details->model = 'Cisco OeNm 502'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1211') { $details->model = 'Cisco OeNm 522'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1212') { $details->model = 'Cisco OeSmSre 700'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1213') { $details->model = 'Cisco OeSmSre 900'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1214') { $details->model = 'Cisco VsaNam'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1215') { $details->model = 'Cisco MWR 2941DCA'; $details->type = 'wireless router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1220') { $details->model = 'Cisco 1941 WCK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1221') { $details->model = 'Cisco CDS cde 2202 s3'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1222') { $details->model = 'Cisco Catalyst 3750 x24'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1223') { $details->model = 'Cisco Catalyst 3750 x48'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1224') { $details->model = 'Cisco Catalyst 3750 x24P'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1225') { $details->model = 'Cisco Catalyst 3750 x48P'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1226') { $details->model = 'Cisco Catalyst 3560 x24'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1227') { $details->model = 'Cisco Catalyst 3560 x48'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1228') { $details->model = 'Cisco Catalyst 3560 x24P'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1229') { $details->model = 'Cisco Catalyst 3560 x48P'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1230') { $details->model = 'Cisco Nme AIR'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1231') { $details->model = 'Cisco ACE 30K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1232') { $details->model = 'Cisco ASA 5585 SSP IPS 10'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1233') { $details->model = 'Cisco ASA 5585 SSP IPS 20'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1234') { $details->model = 'Cisco ASA 5585 SSP IPS 40'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1235') { $details->model = 'Cisco ASA 5585 SSP IPS 60'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1236') { $details->model = 'Cisco 1841 CK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1237') { $details->model = 'Cisco 2801 CK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1238') { $details->model = 'Cisco 2811 CK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1239') { $details->model = 'Cisco 2821 CK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1241') { $details->model = 'Cisco 3825 CK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1242') { $details->model = 'Cisco 3845 CK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1245') { $details->model = 'Cisco CGS 2520 24TC'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1246') { $details->model = 'Cisco CGS 2520 16S8PC'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1247') { $details->model = 'Cisco AIR AP1262'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1248') { $details->model = 'Cisco AIR AP1261'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1249') { $details->model = 'Cisco 892 F'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1250') { $details->model = 'Cisco ME 3600X-24FS-M'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1251') { $details->model = 'Cisco ME 3600X-24TS-M'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1252') { $details->model = 'Cisco ME 3800X Series Carrier Ethernet Switch Router'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1253') { $details->model = 'Cisco CGR 2010'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1254') { $details->model = 'Cisco Pwr CGR20xxCGS25xxPoeAC'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1255') { $details->model = 'Cisco Pwr CGR20xxCGS25xxPoeDC'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1256') { $details->model = 'Cisco Catalyst 2960 s48tsS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1257') { $details->model = 'Cisco Catalyst 2960 s24tsS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1258') { $details->model = 'Cisco Catalyst 2960 s48fpdL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1259') { $details->model = 'Cisco Catalyst 2960 s48ldpL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1260') { $details->model = 'Cisco Catalyst 2960 s48tdL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1261') { $details->model = 'Cisco Catalyst 2960 s24pdL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1262') { $details->model = 'Cisco Catalyst 2960 s24tdL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1263') { $details->model = 'Cisco Catalyst 2960 s48fpsL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1264') { $details->model = 'Cisco Catalyst 2960 s48lpsL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1265') { $details->model = 'Cisco Catalyst 2960 s24psL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1266') { $details->model = 'Cisco Catalyst 2960 s48tsL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1267') { $details->model = 'Cisco Catalyst 2960 s24tsL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1268') { $details->model = 'Cisco 1906 CK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1269') { $details->model = 'Cisco AIR AP1042'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1270') { $details->model = 'Cisco AIR AP1041'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1274') { $details->model = 'Cisco 887VA Integrated Services Router'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1275') { $details->model = 'Cisco ASA Sm1sc'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1276') { $details->model = 'Cisco ASA Sm1sy'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1277') { $details->model = 'Cisco ASA Sm1'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1278') { $details->model = 'Cisco Catalyst 2960 cPD8TT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1279') { $details->model = 'Cisco AIR Ct2504K9'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1280') { $details->model = 'Cisco ISM AXP'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1281') { $details->model = 'Cisco SMAXP'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1282') { $details->model = 'Cisco Axp SmSre900'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1283') { $details->model = 'Cisco Axp SmSre700'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1284') { $details->model = 'Cisco Axp IsmSre300'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1285') { $details->model = 'Cisco CDS ISM'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1287') { $details->model = 'Cisco Catalyst 4510 RE'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1288') { $details->model = 'Cisco Axp Nme302'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1289') { $details->model = 'Cisco Axp Nme502'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1290') { $details->model = 'Cisco Axp Nme522'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1291') { $details->model = 'Cisco ACE 20K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1292') { $details->model = 'Cisco 2360 48tdS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1294') { $details->model = 'Cisco CDS cde 250'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1296') { $details->model = 'Cisco ANM Virtual App'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1297') { $details->model = 'Cisco ECDS 3100'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1298') { $details->model = 'Cisco ECDS 1100'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1300') { $details->model = 'Cisco Catalyst 3750 v224fsS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1301') { $details->model = 'Cisco OeVWaas'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1302') { $details->model = 'Cisco ASA 5585 SSP10K7'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1303') { $details->model = 'Cisco ASA 5585 SSP20K7'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1304') { $details->model = 'Cisco ASA 5585 SSP40K7'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1305') { $details->model = 'Cisco ASA 5585 SSP60K7'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1306') { $details->model = 'Cisco ASA 5585 SSP10K7 sc'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1307') { $details->model = 'Cisco ASA 5585 SSP20K7 sc'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1308') { $details->model = 'Cisco ASA 5585 SSP40K7 sc'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1309') { $details->model = 'Cisco ASA 5585 SSP60K7 sc'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1310') { $details->model = 'Cisco ASA 5585 SSP10K7 sy'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1311') { $details->model = 'Cisco ASA 5585 SSP20K7 sy'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1312') { $details->model = 'Cisco ASA 5585 SSP40K7 sy'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1313') { $details->model = 'Cisco ASA 5585 SSP60K7 sy'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1314') { $details->model = 'Cisco Sre SmNam'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1319') { $details->model = 'Cisco IE3010 16S8PC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1320') { $details->model = 'Cisco IE3010 24TC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1323') { $details->model = 'Cisco ASA 5585 SSP IPS 10K7'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1324') { $details->model = 'Cisco ASA 5585 SSP IPS 20K7'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1325') { $details->model = 'Cisco ASA 5585 SSP IPS 40K7'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1326') { $details->model = 'Cisco ASA 5585 SSP IPS 60K7'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1327') { $details->model = 'Cisco Catalyst 4948 ef10GE'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1328') { $details->model = 'Cisco Catalyst 2928 24TCC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1329') { $details->model = 'Cisco Catalyst 2928 48TCC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1330') { $details->model = 'Cisco Catalyst 2928 24LTC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1331') { $details->model = 'Cisco CRS 16SB'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1332') { $details->model = 'Cisco Quad'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1334') { $details->model = 'Cisco ASA Sm1K7sc'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1335') { $details->model = 'Cisco ASA Sm1K7sy'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1336') { $details->model = 'Cisco ASA Sm1K7'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1337') { $details->model = 'Cisco Pwr CGR2010PoeAC'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1338') { $details->model = 'Cisco Pwr CGR2010PoeDC'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1339') { $details->model = 'Cisco 1861 eUc2BK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1340') { $details->model = 'Cisco 1861 eUc4FK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1341') { $details->model = 'Cisco C1861 eSrstFK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1342') { $details->model = 'Cisco C1861 eSrstBK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1343') { $details->model = 'Cisco C1861 eSrstCFK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1344') { $details->model = 'Cisco C1861 eSrstCBK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1346') { $details->model = 'Cisco Grwic Des6s'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1347') { $details->model = 'Cisco Grwic Des2s8pc'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1348') { $details->model = 'Cisco UC Virtual Machine'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1349') { $details->model = 'Cisco Wave 8541'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1350') { $details->model = 'Cisco Wave 7571'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1351') { $details->model = 'Cisco Wave 7541'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1352') { $details->model = 'Cisco Wave 694'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1353') { $details->model = 'Cisco Wave 594'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1354') { $details->model = 'Cisco Wave 294'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1355') { $details->model = 'Cisco 5915 RC'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1356') { $details->model = 'Cisco 5915 RA'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1358') { $details->model = 'Cisco 867 VAEK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1359') { $details->model = 'Cisco 866 VAEK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1360') { $details->model = 'Cisco 867 VAE'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1361') { $details->model = 'Cisco 866 VAE'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1362') { $details->model = 'Cisco Ap 802gn'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1363') { $details->model = 'Cisco Ap 802agn'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1364') { $details->model = 'Cisco Catalyst 2960 C8tcS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1365') { $details->model = 'Cisco Catalyst 2960 C8tcL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1366') { $details->model = 'Cisco Catalyst 2960 C8pcL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1367') { $details->model = 'Cisco Catalyst 2960 C12pcL'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1368') { $details->model = 'Cisco Catalyst 3560 CPD8ptS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1369') { $details->model = 'Cisco 1841 ve'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1370') { $details->model = 'Cisco 2811 ve'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1371') { $details->model = 'Cisco 881 WAK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1372') { $details->model = 'Cisco 881 WEK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1373') { $details->model = 'Cisco 881 WPK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1374') { $details->model = 'Cisco 886 VaWEK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1375') { $details->model = 'Cisco 887 VamWEK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1376') { $details->model = 'Cisco 887 VaWAK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1377') { $details->model = 'Cisco 887 VaWEK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1378') { $details->model = 'Cisco 819G UK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1379') { $details->model = 'Cisco 819G SK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1380') { $details->model = 'Cisco 819G VK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1381') { $details->model = 'Cisco 819G BK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1382') { $details->model = 'Cisco 819G 7AK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1383') { $details->model = 'Cisco 819G 7K9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1384') { $details->model = 'Cisco 819H GUK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1385') { $details->model = 'Cisco 819H GSK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1386') { $details->model = 'Cisco 819H GVK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1387') { $details->model = 'Cisco 819H GBK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1388') { $details->model = 'Cisco 819H G7AK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1389') { $details->model = 'Cisco 819H G7K9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1390') { $details->model = 'Cisco 886 Vag7K9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1391') { $details->model = 'Cisco 887 VagSK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1392') { $details->model = 'Cisco 887 Vag7K9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1393') { $details->model = 'Cisco 887 Vamg7K9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1394') { $details->model = 'Cisco 888 Eg7K9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1395') { $details->model = 'Cisco 881 GUK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1396') { $details->model = 'Cisco 881 GSK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1397') { $details->model = 'Cisco 881 GVK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1398') { $details->model = 'Cisco 881 GBK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1399') { $details->model = 'Cisco 881 G7K9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1400') { $details->model = 'Cisco 881 G7AK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1404') { $details->model = 'Cisco Catalyst 3750 x24s'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1405') { $details->model = 'Cisco Catalyst 3750 x12s'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1406') { $details->model = 'Cisco Nme'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1407') { $details->model = 'Cisco ASA 5512-X Adaptive Security Appliance'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1408') { $details->model = 'Cisco ASA 5525'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1409') { $details->model = 'Cisco ASA 5545-X Adaptive Security Appliance'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1410') { $details->model = 'Cisco ASA 5555-X Adaptive Security Appliance'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1412') { $details->model = 'Cisco ASA 5525-X Adaptive Security Appliance'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1413') { $details->model = 'Cisco ASA 5555-X Adaptive Security Appliance'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1414') { $details->model = 'Cisco ASA 5555-X Adaptive Security Appliance'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1420') { $details->model = 'Cisco ASA 5515-X Adaptive Security Appliance'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1421') { $details->model = 'Cisco ASA 5515'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1422') { $details->model = 'Cisco PCM'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1423') { $details->model = 'Cisco Ise 3315K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1424') { $details->model = 'Cisco Ise 3395K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1425') { $details->model = 'Cisco Ise 3355K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1426') { $details->model = 'Cisco Ise VmK9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1432') { $details->model = 'Cisco ECDS VB'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1433') { $details->model = 'Cisco TsCodec G2'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1434') { $details->model = 'Cisco TsCodec G2C'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1435') { $details->model = 'Cisco TSCodec G2RC'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1436') { $details->model = 'Cisco TSCodec G2R'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1437') { $details->model = 'Cisco ASA 5585 SSP IPS 10Virtual'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1438') { $details->model = 'Cisco ASA 5585 SSP IPS 20Virtual'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1439') { $details->model = 'Cisco ASA 5585 SSP IPS 40Virtual'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1440') { $details->model = 'Cisco ASA 5585 SSP IPS 60Virtual'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1441') { $details->model = 'Cisco ASR 903'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1442') { $details->model = 'Cisco ASA 5512-X Adaptive Security Appliance with No Payload Encryption'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1443') { $details->model = 'Cisco ASA 5515-X Adaptive Security Appliance with No Payload Encryption'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1444') { $details->model = 'Cisco ASA 5525-X Adaptive Security Appliance with No Payload Encryption'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1445') { $details->model = 'Cisco ASA 5545-X Adaptive Security Appliance with No Payload Encryption'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1446') { $details->model = 'Cisco ASA 5555-X Adaptive Security Appliance with No Payload Encryption'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1447') { $details->model = 'Cisco ASA 5512-X Adaptive Security Appliance with No Payload Encryption'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1448') { $details->model = 'Cisco ASA 5515-X Adaptive Security Appliance with No Payload Encryption'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1449') { $details->model = 'Cisco ASA 5525-X Adaptive Security Appliance with No Payload Encryption'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1450') { $details->model = 'Cisco ASA 5545-X Adaptive Security Appliance with No Payload Encryption'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1451') { $details->model = 'Cisco ASA 5555-X Adaptive Security Appliance with No Payload Encryption'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1457') { $details->model = 'Cisco ASR 5500'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1462') { $details->model = 'Cisco Xfp10 Ger192IrL'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1463') { $details->model = 'Cisco Xfp10 Glr192SrL'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1464') { $details->model = 'Cisco Xfp10 Gzr192LrL'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1465') { $details->model = 'Cisco Catalyst 3560 C12pcS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1466') { $details->model = 'Cisco Catalyst 3560 C8pcS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1467') { $details->model = 'Cisco CRS FabBP'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1468') { $details->model = 'Cisco IE2000 4TS'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1469') { $details->model = 'Cisco IE2000 4T'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1470') { $details->model = 'Cisco IE2000 4TSG'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1471') { $details->model = 'Cisco IE2000 4TG'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1472') { $details->model = 'Cisco IE2000 8TC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1473') { $details->model = 'Cisco IE2000 8TCG'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1474') { $details->model = 'Cisco IE2000 16TC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1475') { $details->model = 'Cisco IE2000 16TCG'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1476') { $details->model = 'Cisco RAIE1783BMS06SL'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1477') { $details->model = 'Cisco RAIE1783BMS06TL'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1478') { $details->model = 'Cisco RAIE1783BMS06TA'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1479') { $details->model = 'Cisco RAIE1783BMS06SGL'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1480') { $details->model = 'Cisco RAIE1783BMS06SGA'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1481') { $details->model = 'Cisco RAIE1783BMS06TGL'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1482') { $details->model = 'Cisco RAIE1783BMS06TGA'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1483') { $details->model = 'Cisco RAIE1783BMS10CL'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1484') { $details->model = 'Cisco RAIE1783BMS10CA'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1485') { $details->model = 'Cisco RAIE1783BMS10CGL'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1486') { $details->model = 'Cisco RAIE1783BMS10CGA'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1487') { $details->model = 'Cisco RAIE1783BMS10CGP'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1488') { $details->model = 'Cisco RAIE1783BMS10CGN'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1489') { $details->model = 'Cisco RAIE1783BMS20CL'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1490') { $details->model = 'Cisco RAIE1783BMS20CA'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1491') { $details->model = 'Cisco RAIE1783BMS20CGL'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1492') { $details->model = 'Cisco RAIE1783BMS20CGP'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1493') { $details->model = 'Cisco RAIE1783BMS20CGPK'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1494') { $details->model = 'Cisco 819 Hardened Integrated Services Router'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1495') { $details->model = 'Cisco 819G 4GAK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1512') { $details->model = 'Cisco Ucs C200'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1496') { $details->model = 'Cisco 819 Non-Hardened Integrated Services Router'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1513') { $details->model = 'Cisco Ucs C210'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1514') { $details->model = 'Cisco Ucs C250'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1515') { $details->model = 'Cisco Ucs C260'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1516') { $details->model = 'Cisco Ucs C460'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1519') { $details->model = 'Cisco RAIE1783BMS06SA'; $details->type = 'unknown'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1520') { $details->model = 'Cisco IE2000 16TCGX'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1521') { $details->model = 'Cisco ASR 901'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1522') { $details->model = 'Cisco ASR 901E'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1523') { $details->model = 'Cisco OeSmSre 910'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1524') { $details->model = 'Cisco OeSmSre 710'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1527') { $details->model = 'Cisco Nam 2304'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1528') { $details->model = 'Cisco Nam 2320'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1529') { $details->model = 'Cisco Nam 3'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1530') { $details->model = 'Cisco 819H G4GAK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1536') { $details->model = 'Cisco ECDS 50IVB'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1538') { $details->model = 'Cisco ASR 5000'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1539') { $details->model = 'Cisco flowAgent 3000'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1570') { $details->model = 'Cisco 819H GW7EK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1571') { $details->model = 'Cisco 819H GW7NK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1572') { $details->model = 'Cisco 819H GW7AAK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1573') { $details->model = 'Cisco 819H GWVAK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1574') { $details->model = 'Cisco 819H GWSAK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1575') { $details->model = 'Cisco 819H K9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1576') { $details->model = 'Cisco 819H WDEK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1577') { $details->model = 'Cisco 819H WDAK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1578') { $details->model = 'Cisco 812G 7K9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1579') { $details->model = 'Cisco 812G CIFI7EK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1580') { $details->model = 'Cisco 812G CIFI7NK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1581') { $details->model = 'Cisco 812G CIFIVAK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1582') { $details->model = 'Cisco 812G CIFISAK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1583') { $details->model = 'Cisco 819G UMK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1584') { $details->model = 'Cisco 819G SMK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1585') { $details->model = 'Cisco 819G VMK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1586') { $details->model = 'Cisco 819G BMK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1587') { $details->model = 'Cisco 819G 7AMK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1588') { $details->model = 'Cisco 819G 7MK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1589') { $details->model = 'Cisco 819H GUMK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1590') { $details->model = 'Cisco 819H GSMK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1591') { $details->model = 'Cisco 819H GVMK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1592') { $details->model = 'Cisco 819H GBMK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1593') { $details->model = 'Cisco 819H G7AMK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1594') { $details->model = 'Cisco 819H G7MK9'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1595') { $details->model = 'Cisco CDS cde 2502 s6'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1596') { $details->model = 'Cisco CDS cde 2502 m0'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1597') { $details->model = 'Cisco CDS cde 2502 s8'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1600') { $details->model = 'Cisco 881 V'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1601') { $details->model = 'Cisco 887 vaV'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1602') { $details->model = 'Cisco 887 vaVW'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1603') { $details->model = 'Cisco MDE 10XVB'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1604') { $details->model = 'Cisco 5921 Embedded Services Router'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1605') { $details->model = 'Cisco Catalyst 4500 X16'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1606') { $details->model = 'Cisco Catalyst 4500 X32'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1607') { $details->model = 'Cisco CDS cde 2502 s9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1608') { $details->model = 'Cisco CDS cde 2502 s10'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1609') { $details->model = 'Cisco 5930 Embedded Services Router'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1610') { $details->model = 'Cisco ASA 5585 Nm20x1GE'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1611') { $details->model = 'Cisco CDS cde Generic'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1617') { $details->model = 'Cisco ASA 5585 Nm8x10GE'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1618') { $details->model = 'Cisco ASA 5585 Nm4x10GE'; $details->type = 'firewall'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1639') { $details->model = 'Cisco ASR 9001'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1640') { $details->model = 'Cisco ASR 9922'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1646') { $details->model = 'Cisco VSGateway'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1647') { $details->model = 'Cisco Ibiza'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1648') { $details->model = 'Cisco Skyros'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1658') { $details->model = 'Cisco CRS 8SB'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1659') { $details->model = 'Cisco AIR AP2602'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1660') { $details->model = 'Cisco AIR AP1602'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1661') { $details->model = 'Cisco AIR AP3602'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1674') { $details->model = 'Cisco HSE 300K9'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1682') { $details->model = 'Cisco Ucs C220'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1683') { $details->model = 'Cisco Ucs C240'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1684') { $details->model = 'Cisco Ucs C22'; $details->type = 'voip gateway'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1685') { $details->model = 'Cisco Ucs C24'; $details->type = 'voip gateway'; }

	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1876') { $details->model = 'Cisco Prime Virtual Network Analysis Module (ESXi)'; $details->type = 'computer'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.1.1877') { $details->model = 'Cisco Prime Virtual Network Analysis Module (ESXi)'; $details->type = 'computer'; }

	if ($details->snmp_oid == '1.3.6.1.4.1.9.5.5') { $details->model = 'Cisco Catalyst 1200'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.5.7') { $details->model = 'Cisco Catalyst 5000'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.5.12') { $details->model = 'Cisco Catalyst 2900'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.5.17') { $details->model = 'Cisco Catalyst 5500'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.5.20') { $details->model = 'Cisco Catalyst 2820'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.5.29') { $details->model = 'Cisco Catalyst 5002'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.5.34') { $details->model = 'Cisco Catalyst 5505'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.5.36') { $details->model = 'Cisco Catalyst 5509'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.5.38') { $details->model = 'Cisco Catalyst 6006'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.5.39') { $details->model = 'Cisco Catalyst 6009'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.5.40') { $details->model = 'Cisco Catalyst 2948'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.5.42') { $details->model = 'Cisco Catalyst 4003'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.5.44') { $details->model = 'Cisco Catalyst 6509'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.5.45') { $details->model = 'Cisco Catalyst 6506'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.5.46') { $details->model = 'Cisco Catalyst 4006'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.5.47') { $details->model = 'Cisco Catalyst 6509 neb'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.5.48') { $details->model = 'Cisco Catalyst 6k nam'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.5.49') { $details->model = 'Cisco Catalyst 2980 g'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.5.50') { $details->model = 'Cisco Catalyst 6513'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.5.51') { $details->model = 'Cisco Catalyst 2980 ga'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.5.56') { $details->model = 'Cisco Catalyst 6503'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.5.58') { $details->model = 'Cisco Catalyst 4503'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.5.59') { $details->model = 'Cisco Catalyst 4506'; $details->type = 'switch'; }


	if ($details->snmp_oid == '1.3.6.1.4.1.9.6.2.1.1.1.1') { $details->model = 'Cisco MS200X-24 24-Port 10/100 Ethernet Access Switch'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.6.2.1.1.1.2') { $details->model = 'Cisco MS200X-24P 24-Port 10/100 PoE Ethernet Access Switch'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.6.2.1.1.1.3') { $details->model = 'Cisco MS200X-24S 24-Port 10/100 Ethernet Access Switch'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.6.1.23.1.1.1.3') { $details->model = 'Cisco SPA122 VoIP Adapter'; $details->type = 'voip adapter'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.6.1.23.3.17') { $details->model = 'Cisco RV325 Dual Gigabit WAN VPN Router'; $details->type = 'router'; }

	if ($details->snmp_oid == '1.3.6.1.4.1.9.6.1.83.10.1') { $details->model = 'Cisco SG300-10 10-Port Gigabit Managed Switch'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.6.1.83.10.3') { $details->model = 'Cisco SG300-10MP 10-Port Gigabit PoE Managed Switch'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.6.1.83.20.1') { $details->model = 'Cisco SG300-20 20-Port Gigabit Managed Switch'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.6.1.83.28.1') { $details->model = 'Cisco SG300-28 28-Port Gigabit Managed Switch'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.6.1.83.28.2') { $details->model = 'Cisco SG300-28P 28-Port Gigabit PoE Managed Switch'; $details->type = 'switch'; }

	if ($details->snmp_oid == '1.3.6.1.4.1.9.6.1.84.24.1') { $details->model = 'Cisco SF220-24 24-Port 10/100 Smart Plus Switch'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.6.1.84.24.2') { $details->model = 'Cisco SF220-24P 24-Port 10/100 PoE Smart Plus Switch'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.6.1.84.48.1') { $details->model = 'Cisco SF220-48 48-Port 10/100 Smart Plus Switch'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.6.1.84.48.2') { $details->model = 'Cisco SF220-48P 48-Port 10/100 PoE Smart Plus Switch'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.6.1.89.26.1') { $details->model = 'Cisco SG220-26 26-Port Gigabit Smart Plus Switch'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.6.1.89.26.2') { $details->model = 'Cisco SG220-26P 26-Port Gigabit PoE Smart Plus Switch'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.6.1.89.28.3') { $details->model = 'Cisco SG220-28MP 28-Port Gigabit PoE Smart Plus Switch'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.6.1.89.28.5') { $details->model = 'Cisco SG220-28 28-Port Gigabit Smart Plus Switch'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.6.1.89.50.1') { $details->model = 'Cisco SG220-50 50-Port Gigabit Smart Plus Switch'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.6.1.89.50.2') { $details->model = 'Cisco SG220-50P 50-Port Gigabit PoE Smart Plus Switch'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.6.1.89.52.5') { $details->model = 'Cisco SG220-52 52-Port Gigabit Smart Plus Switch'; $details->type = 'switch'; }


	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.1') { $details->model = 'Cisco Other'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.1.1') { $details->model = 'Cisco Other UnknownCard'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.1.2') { $details->model = 'Cisco Other MoH'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.1.3') { $details->model = 'Cisco Other NmeApaLink'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.1.5') { $details->model = 'Cisco Other Sce8000Scm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.1.6') { $details->model = 'Cisco Other Sce8000Sip'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.1.8') { $details->model = 'Cisco Other CscLink'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10') { $details->model = 'Cisco Port '; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.1') { $details->model = 'Cisco Port Unknown'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.10') { $details->model = 'Cisco Port T1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.100') { $details->model = 'Cisco Port GEIP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.101') { $details->model = 'Cisco Port WDM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.102') { $details->model = 'Cisco Port Thru'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.103') { $details->model = 'Cisco Port Filter'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.104') { $details->model = 'Cisco Port Wave'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.105') { $details->model = 'Cisco Port WavePatch'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.106') { $details->model = 'Cisco Port Transparent'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.107') { $details->model = 'Cisco Port DPT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.108') { $details->model = 'Cisco Port Oc12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.109') { $details->model = 'Cisco Port Ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.11') { $details->model = 'Cisco Port E1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.110') { $details->model = 'Cisco Port ChOc12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.111') { $details->model = 'Cisco Port ChOc3Stm1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.112') { $details->model = 'Cisco Port FilterGroup'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.113') { $details->model = 'Cisco Port FilterBand'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.114') { $details->model = 'Cisco Port ChE1T1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.115') { $details->model = 'Cisco Port ASIMod'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.116') { $details->model = 'Cisco Port ASIIn'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.117') { $details->model = 'Cisco Port ASIOut'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.118') { $details->model = 'Cisco Port AimDsp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.119') { $details->model = 'Cisco Port Atm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.12') { $details->model = 'Cisco Port BRI'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.120') { $details->model = 'Cisco Port ChSonet'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.121') { $details->model = 'Cisco Port ChOcX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.123') { $details->model = 'Cisco Port Fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.125') { $details->model = 'Cisco Port Ds3E3Atm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.126') { $details->model = 'Cisco Port Fxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.127') { $details->model = 'Cisco Port Fxo'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.128') { $details->model = 'Cisco Port EM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.129') { $details->model = 'Cisco Port Oc48'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.13') { $details->model = 'Cisco Port AIP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.130') { $details->model = 'Cisco Port Oc192'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.131') { $details->model = 'Cisco Port FibreChannel'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.132') { $details->model = 'Cisco Port GigEthernet'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.133') { $details->model = 'Cisco Port FibreChGigEth'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.134') { $details->model = 'Cisco Port CatEthernet'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.135') { $details->model = 'Cisco Port WaveOsc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.136') { $details->model = 'Cisco Port WaveEthPhy'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.137') { $details->model = 'Cisco Port 10GigEthPhy'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.138') { $details->model = 'Cisco Port EsconPhy'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.139') { $details->model = 'Cisco Port GEFCPhy'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.14') { $details->model = 'Cisco Port CIP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.140') { $details->model = 'Cisco Port VOAIn'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.141') { $details->model = 'Cisco Port VOAOut'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.142') { $details->model = 'Cisco Port VOAFilterIn'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.143') { $details->model = 'Cisco Port VOAFilterOut'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.144') { $details->model = 'Cisco Port VOAByPassIn'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.145') { $details->model = 'Cisco Port VOAByPassOut'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.146') { $details->model = 'Cisco Port GT96K'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.147') { $details->model = 'Cisco Port DSCC4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.15') { $details->model = 'Cisco Port VtyAsync'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.150') { $details->model = 'Cisco Port BaseTEther'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.151') { $details->model = 'Cisco Port GESFP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.152') { $details->model = 'Cisco Port WdmSplit'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.153') { $details->model = 'Cisco Port WavePassThru'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.154') { $details->model = 'Cisco Port DspPVDM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.155') { $details->model = 'Cisco Port iScsi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.156') { $details->model = 'Cisco Port Vic2Did'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.157') { $details->model = 'Cisco Port Wic1Adsl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.158') { $details->model = 'Cisco Port Wic1Shdsl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.159') { $details->model = 'Cisco Port Wic1Ethernet'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.16') { $details->model = 'Cisco Port FEIP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.160') { $details->model = 'Cisco Port 10GigBaseEX4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.161') { $details->model = 'Cisco Port 10GigBaseLR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.162') { $details->model = 'Cisco Port 10GigBaseSX4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.163') { $details->model = 'Cisco Port 10GigBaseER'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.164') { $details->model = 'Cisco Port GigUnsupported'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.165') { $details->model = 'Cisco Port GigBaseZX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.166') { $details->model = 'Cisco Port 10GigBaseCPX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.167') { $details->model = 'Cisco Port 10GigBaseLX4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.168') { $details->model = 'Cisco Port GigBaseLX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.169') { $details->model = 'Cisco Port GigBaseSX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.17') { $details->model = 'Cisco Port AsyncGroup'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.170') { $details->model = 'Cisco Port GigBaseCX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.171') { $details->model = 'Cisco Port GigBaseLH'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.172') { $details->model = 'Cisco Port GigBaseT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.173') { $details->model = 'Cisco Port Dslsar'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.174') { $details->model = 'Cisco Port Atm25'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.175') { $details->model = 'Cisco Port AnalogFxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.176') { $details->model = 'Cisco Port E3Atm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.177') { $details->model = 'Cisco Port Ds3Atm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.178') { $details->model = 'Cisco Port NetworkAnalysis'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.18') { $details->model = 'Cisco Port VTemplate'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.180') { $details->model = 'Cisco Port IntrusionDetect'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.181') { $details->model = 'Cisco Port 10GigBaseLW'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.182') { $details->model = 'Cisco Port 10GigBaseEW'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.183') { $details->model = 'Cisco Port GigBaseUnknown'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.184') { $details->model = 'Cisco Port 10GigBaseUnknown'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.185') { $details->model = 'Cisco Port 10GigBaseUnapproved'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.186') { $details->model = 'Cisco Port GigBaseWdmRxOnly'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.187') { $details->model = 'Cisco Port GigBaseDwdm3033'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.188') { $details->model = 'Cisco Port GigBaseDwdm3112'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.189') { $details->model = 'Cisco Port GigBaseDwdm3190'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.19') { $details->model = 'Cisco Port VAccess'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.190') { $details->model = 'Cisco Port GigBaseDwdm3268'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.191') { $details->model = 'Cisco Port GigBaseDwdm3425'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.192') { $details->model = 'Cisco Port GigBaseDwdm3504'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.193') { $details->model = 'Cisco Port GigBaseDwdm3582'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.194') { $details->model = 'Cisco Port GigBaseDwdm3661'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.195') { $details->model = 'Cisco Port GigBaseDwdm3819'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.196') { $details->model = 'Cisco Port GigBaseDwdm3898'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.197') { $details->model = 'Cisco Port GigBaseDwdm3977'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.198') { $details->model = 'Cisco Port GigBaseDwdm4056'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.199') { $details->model = 'Cisco Port GigBaseDwdm4214'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.2') { $details->model = 'Cisco Port MCIEther'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.20') { $details->model = 'Cisco Port T3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.200') { $details->model = 'Cisco Port GigBaseDwdm4294'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.201') { $details->model = 'Cisco Port GigBaseDwdm4373'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.202') { $details->model = 'Cisco Port GigBaseDwdm4453'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.203') { $details->model = 'Cisco Port GigBaseDwdm4612'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.204') { $details->model = 'Cisco Port GigBaseDwdm4692'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.205') { $details->model = 'Cisco Port GigBaseDwdm4772'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.206') { $details->model = 'Cisco Port GigBaseDwdm4851'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.207') { $details->model = 'Cisco Port GigBaseDwdm5012'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.208') { $details->model = 'Cisco Port GigBaseDwdm5092'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.209') { $details->model = 'Cisco Port GigBaseDwdm5172'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.21') { $details->model = 'Cisco Port VGAnyLAN'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.210') { $details->model = 'Cisco Port GigBaseDwdm5252'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.211') { $details->model = 'Cisco Port GigBaseDwdm5413'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.212') { $details->model = 'Cisco Port GigBaseDwdm5494'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.213') { $details->model = 'Cisco Port GigBaseDwdm5575'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.214') { $details->model = 'Cisco Port GigBaseDwdm5655'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.215') { $details->model = 'Cisco Port GigBaseDwdm5817'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.216') { $details->model = 'Cisco Port GigBaseDwdm5898'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.217') { $details->model = 'Cisco Port GigBaseDwdm5979'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.218') { $details->model = 'Cisco Port GigBaseDwdm6061'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.219') { $details->model = 'Cisco Port 10GigBaseWdmRxOnly'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.22') { $details->model = 'Cisco Port Lance'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.220') { $details->model = 'Cisco Port 10GigBaseDwdm3033'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.221') { $details->model = 'Cisco Port 10GigBaseDwdm3112'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.222') { $details->model = 'Cisco Port 10GigBaseDwdm3190'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.223') { $details->model = 'Cisco Port 10GigBaseDwdm3268'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.224') { $details->model = 'Cisco Port 10GigBaseDwdm3425'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.225') { $details->model = 'Cisco Port 10GigBaseDwdm3504'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.226') { $details->model = 'Cisco Port 10GigBaseDwdm3582'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.227') { $details->model = 'Cisco Port 10GigBaseDwdm3661'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.228') { $details->model = 'Cisco Port 10GigBaseDwdm3819'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.229') { $details->model = 'Cisco Port 10GigBaseDwdm3898'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.23') { $details->model = 'Cisco Port ATMS2000'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.230') { $details->model = 'Cisco Port 10GigBaseDwdm3977'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.231') { $details->model = 'Cisco Port 10GigBaseDwdm4056'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.232') { $details->model = 'Cisco Port 10GigBaseDwdm4214'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.233') { $details->model = 'Cisco Port 10GigBaseDwdm4294'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.234') { $details->model = 'Cisco Port 10GigBaseDwdm4373'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.235') { $details->model = 'Cisco Port 10GigBaseDwdm4453'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.236') { $details->model = 'Cisco Port 10GigBaseDwdm4612'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.237') { $details->model = 'Cisco Port 10GigBaseDwdm4692'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.238') { $details->model = 'Cisco Port 10GigBaseDwdm4772'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.239') { $details->model = 'Cisco Port 10GigBaseDwdm4851'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.24') { $details->model = 'Cisco Port SALI25'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.240') { $details->model = 'Cisco Port 10GigBaseDwdm5012'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.241') { $details->model = 'Cisco Port 10GigBaseDwdm5092'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.242') { $details->model = 'Cisco Port 10GigBaseDwdm5172'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.243') { $details->model = 'Cisco Port 10GigBaseDwdm5252'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.244') { $details->model = 'Cisco Port 10GigBaseDwdm5413'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.245') { $details->model = 'Cisco Port 10GigBaseDwdm5494'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.246') { $details->model = 'Cisco Port 10GigBaseDwdm5575'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.247') { $details->model = 'Cisco Port 10GigBaseDwdm5655'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.248') { $details->model = 'Cisco Port 10GigBaseDwdm5817'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.249') { $details->model = 'Cisco Port 10GigBaseDwdm5898'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.25') { $details->model = 'Cisco Port SonicT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.250') { $details->model = 'Cisco Port 10GigBaseDwdm5979'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.251') { $details->model = 'Cisco Port 10GigBaseDwdm6061'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.252') { $details->model = 'Cisco Port GigBaseBX10D'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.253') { $details->model = 'Cisco Port GigBaseBX10U'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.254') { $details->model = 'Cisco Port T1E1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.255') { $details->model = 'Cisco Port 2GFCPhy'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.256') { $details->model = 'Cisco Port LanWirelessApplication'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.257') { $details->model = 'Cisco Port SEInternalFE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.258') { $details->model = 'Cisco Port CEInternalFE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.259') { $details->model = 'Cisco Port IpsecVpn'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.26') { $details->model = 'Cisco Port OC3SUNI'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.260') { $details->model = 'Cisco Port Ssl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.261') { $details->model = 'Cisco Port Firewall'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.263') { $details->model = 'Cisco Port Dsp5441'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.264') { $details->model = 'Cisco Port Dsp6415'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.265') { $details->model = 'Cisco Port HwicSerial'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.266') { $details->model = 'Cisco Port Asi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.267') { $details->model = 'Cisco Port Qam'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.268') { $details->model = 'Cisco Port GigBaseBT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.269') { $details->model = 'Cisco Port 100BaseUnknown'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.27') { $details->model = 'Cisco Port OC12SUNI'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.270') { $details->model = 'Cisco Port 100BaseUnapproved'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.271') { $details->model = 'Cisco Port 100BaseBX10D'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.272') { $details->model = 'Cisco Port 100BaseBX10U'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.273') { $details->model = 'Cisco Port 100BaseFX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.274') { $details->model = 'Cisco Port 100BaseLX10'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.275') { $details->model = 'Cisco Port 100BaseSX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.276') { $details->model = 'Cisco Port SM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.277') { $details->model = 'Cisco Port T3E3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.278') { $details->model = 'Cisco Port MultiRate'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.279') { $details->model = 'Cisco Port WaveSonetPhy'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.28') { $details->model = 'Cisco Port DS3SUNI'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.280') { $details->model = 'Cisco Port SDCC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.281') { $details->model = 'Cisco Port AdslAnnexA'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.282') { $details->model = 'Cisco Port AdslAnnexB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.285') { $details->model = 'Cisco Port 10GigBaseZR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.286') { $details->model = 'Cisco Port 10GigBaseCX4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.287') { $details->model = 'Cisco Port 10GigBaseSR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.288') { $details->model = 'Cisco Port GigBaseCwdm1610'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.289') { $details->model = 'Cisco Port GigBaseCwdm1590'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.29') { $details->model = 'Cisco Port E3SUNI'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.290') { $details->model = 'Cisco Port GigBaseCwdm1550'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.291') { $details->model = 'Cisco Port GigBaseCwdm1530'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.292') { $details->model = 'Cisco Port GigBaseCwdm1510'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.293') { $details->model = 'Cisco Port GigBaseCwdm1490'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.294') { $details->model = 'Cisco Port GigBaseCwdm1470'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.295') { $details->model = 'Cisco Port GigBaseCwdm1570'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.296') { $details->model = 'Cisco Port USB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.297') { $details->model = 'Cisco Port SslVpn'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.298') { $details->model = 'Cisco Port CableModem'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.299') { $details->model = 'Cisco NmeApaPort'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.3') { $details->model = 'Cisco Port MCISerial'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.30') { $details->model = 'Cisco Port DS3SUNIQUAD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.300') { $details->model = 'Cisco Port 10GigBase'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.301') { $details->model = 'Cisco Port 10GigBaseLRM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.302') { $details->model = 'Cisco Port dot11abg'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.303') { $details->model = 'Cisco Port Dti'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.304') { $details->model = 'Cisco Port 10GigSFPPlus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.305') { $details->model = 'Cisco Port CscPort'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.306') { $details->model = 'Cisco Port GEXFP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.307') { $details->model = 'Cisco Port GigBaseDwdm6141'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.308') { $details->model = 'Cisco Port GigBaseDwdm5736'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.309') { $details->model = 'Cisco Port GigBaseDwdm5332'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.31') { $details->model = 'Cisco Port E3SUNIQUAD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.310') { $details->model = 'Cisco Port GigBaseDwdm4931'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.311') { $details->model = 'Cisco Port GigBaseDwdm4532'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.312') { $details->model = 'Cisco Port GigBaseDwdm4134'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.313') { $details->model = 'Cisco Port GigBaseDwdm3739'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.314') { $details->model = 'Cisco Port GigBaseDwdm3346'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.315') { $details->model = 'Cisco Port 10GigEthernet'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.316') { $details->model = 'Cisco Port SEInternal'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.317') { $details->model = 'Cisco Port GigBaseEX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.318') { $details->model = 'Cisco Port 40GigEthernet'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.319') { $details->model = 'Cisco Port Aces'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.32') { $details->model = 'Cisco Port MK5025'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.321') { $details->model = 'Cisco Port 40GigQSFPPlus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.322') { $details->model = 'Cisco Port 100GECFP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.323') { $details->model = 'Cisco Port PlcG'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.324') { $details->model = 'Cisco Port WimaxG'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.325') { $details->model = 'Cisco Port 3gCdmaG'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.326') { $details->model = 'Cisco Port 3gGsmG'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.327') { $details->model = 'Cisco Port WpanG'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.33') { $details->model = 'Cisco Port TMS380'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.34') { $details->model = 'Cisco Port BSI'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.35') { $details->model = 'Cisco Port ATMZR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.36') { $details->model = 'Cisco Port HD64570'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.37') { $details->model = 'Cisco Port PCBus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.38') { $details->model = 'Cisco Port QuiccEther'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.39') { $details->model = 'Cisco Port QuiccSerial'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.4') { $details->model = 'Cisco Port CBusSerial'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.40') { $details->model = 'Cisco Port AMDP2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.41') { $details->model = 'Cisco Port MIF68840'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.42') { $details->model = 'Cisco Port CYLEPA'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.43') { $details->model = 'Cisco Port S4T68360'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.44') { $details->model = 'Cisco Port IBM2692'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.45') { $details->model = 'Cisco Port Mueslix'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.46') { $details->model = 'Cisco Port CD2430'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.47') { $details->model = 'Cisco Port ILACC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.48') { $details->model = 'Cisco Port NIC100'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.49') { $details->model = 'Cisco Port DCUATM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.5') { $details->model = 'Cisco Port Fddi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.50') { $details->model = 'Cisco Port DCUATMPort'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.51') { $details->model = 'Cisco Port TI1570'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.52') { $details->model = 'Cisco Port POS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.53') { $details->model = 'Cisco Port LoopBack'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.54') { $details->model = 'Cisco Port Lex'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.55') { $details->model = 'Cisco Port Dialer'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.56') { $details->model = 'Cisco Port CIPLANAdapter'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.57') { $details->model = 'Cisco Port BVI'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.58') { $details->model = 'Cisco Port OSPFVL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.59') { $details->model = 'Cisco Port RinconSwitch'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.6') { $details->model = 'Cisco Port Fddit'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.60') { $details->model = 'Cisco Port SynALCATM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.61') { $details->model = 'Cisco Port SynALCBIGA'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.62') { $details->model = 'Cisco Port SwitchTrunk'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.63') { $details->model = 'Cisco Port C2KATM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.64') { $details->model = 'Cisco Port Dec21140A'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.65') { $details->model = 'Cisco Port C5Ether'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.66') { $details->model = 'Cisco Port C5TR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.69') { $details->model = 'Cisco Port Eswitch'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.7') { $details->model = 'Cisco Port CBusTR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.70') { $details->model = 'Cisco Port BITS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.71') { $details->model = 'Cisco Port AdslCap'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.72') { $details->model = 'Cisco Port AdslDmt'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.73') { $details->model = 'Cisco Port Sdsl2b1q'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.74') { $details->model = 'Cisco Port Escon'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.75') { $details->model = 'Cisco Port Parallel'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.76') { $details->model = 'Cisco Port CipVirtual'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.78') { $details->model = 'Cisco Port Ds3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.79') { $details->model = 'Cisco Port E3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.8') { $details->model = 'Cisco Port Async'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.80') { $details->model = 'Cisco Port Oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.82') { $details->model = 'Cisco Port HdvDsp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.83') { $details->model = 'Cisco Port AdslFlexiDmt'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.84') { $details->model = 'Cisco Port AdslFlexiCap'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.85') { $details->model = 'Cisco Port AdslDmtIsdn'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.86') { $details->model = 'Cisco Port RfMac'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.87') { $details->model = 'Cisco Port RfUs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.88') { $details->model = 'Cisco Port RfDs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.89') { $details->model = 'Cisco Port UbrClk'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.9') { $details->model = 'Cisco Port HSSI'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.90') { $details->model = 'Cisco Port ShdslTcpam'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.10.91') { $details->model = 'Cisco Port ShdslTcpamOptis'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.11') { $details->model = 'Cisco Stack'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.11.1') { $details->model = 'Cisco StackUnknown'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.11.12') { $details->model = 'Cisco StackIosXrMultichassis'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.11.2') { $details->model = 'Cisco StackCat37xx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.11.3') { $details->model = 'Cisco Cat65xxVirtualSwitch'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.12') { $details->model = 'Cisco Midplane'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.12.1') { $details->model = 'Cisco MidplaneUmg9820'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.2') { $details->model = 'Cisco Unknown'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3') { $details->model = 'Cisco Chassis '; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1') { $details->model = 'Cisco Chassis Unknown'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.10') { $details->model = 'Cisco Chassis 2507'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.100') { $details->model = 'Cisco Chassis MC3810'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1002') { $details->model = 'Cisco Chassis Cat 236048TdS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1003') { $details->model = 'Cisco Chassis N2kC2232TT10GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1004') { $details->model = 'Cisco Chassis N2kC2232TP10GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1005') { $details->model = 'Cisco Chassis N2kC2248TT1GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1006') { $details->model = 'Cisco Chassis N2kC2224TP1GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1007') { $details->model = 'Cisco Chassis CDScde250'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1008') { $details->model = 'Cisco Chassis Nexus 5548p'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1009') { $details->model = 'Cisco Chassis 881G2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1010') { $details->model = 'Cisco Chassis Cat 3750v224fsS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1011') { $details->model = 'Cisco Chassis OeVWaas'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1012') { $details->model = 'Cisco Chassis Crs16SB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1017') { $details->model = 'Cisco Chassis ECDS1100'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1018') { $details->model = 'Cisco Chassis ECDS3100'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1019') { $details->model = 'Cisco Chassis IE301016S8PC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.102') { $details->model = 'Cisco Chassis IGXSes'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1020') { $details->model = 'Cisco Chassis IE301024TC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1023') { $details->model = 'Cisco Chassis Cat 4948ef10GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1024') { $details->model = 'Cisco Chassis Wave284K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1025') { $details->model = 'Cisco Chassis Wave584K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1026') { $details->model = 'Cisco Chassis Wave684K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1027') { $details->model = 'Cisco Chassis Wave7441K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1028') { $details->model = 'Cisco Chassis Wave7471K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1029') { $details->model = 'Cisco Chassis Wave7626K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.103') { $details->model = 'Cisco Chassis LocalDirector'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1032') { $details->model = 'Cisco Chassis Cat 292848TCC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1033') { $details->model = 'Cisco Chassis Cat 292824TCC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1034') { $details->model = 'Cisco Chassis Cat 292824LTC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1036') { $details->model = 'Cisco Chassis GrwicDes2s8pc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1037') { $details->model = 'Cisco Chassis GrwicDes6s'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1038') { $details->model = 'Cisco Nexus 5596Up'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1039') { $details->model = 'Cisco Chassis C1861eUc2BriK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.104') { $details->model = 'Cisco Chassis 805'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1040') { $details->model = 'Cisco Chassis C1861eUc4FxoK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1041') { $details->model = 'Cisco Chassis C1861eSrstFK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1042') { $details->model = 'Cisco Chassis C1861eSrstBK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1043') { $details->model = 'Cisco Chassis C1861eSrstCFK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1044') { $details->model = 'Cisco Chassis C1861eSrstCBK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1045') { $details->model = 'Cisco Chassis 88XG2DSL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1047') { $details->model = 'Cisco Chassis Wave8541'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1048') { $details->model = 'Cisco Chassis Wave7571'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1049') { $details->model = 'Cisco Chassis Wave7541'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.105') { $details->model = 'Cisco Chassis Cat 3508GXL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1050') { $details->model = 'Cisco Chassis Wave694'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1051') { $details->model = 'Cisco Chassis Wave594'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1052') { $details->model = 'Cisco Chassis Wave294'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1053') { $details->model = 'Cisco Chassis 5915'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1055') { $details->model = 'Cisco Chassis 86xVAE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1056') { $details->model = 'Cisco Chassis Ap802gn'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1058') { $details->model = 'Cisco Chassis N2kB22HPP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1059') { $details->model = 'Cisco Chassis N2kC2248GVP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.106') { $details->model = 'Cisco Chassis Cat 3512XL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1060') { $details->model = 'Cisco Chassis N3kC3064PQ'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1061') { $details->model = 'Cisco Chassis N2kC2232TM10GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1062') { $details->model = 'Cisco Chassis UCSFI6248UP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1063') { $details->model = 'Cisco Chassis UCSFI6296UP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1064') { $details->model = 'Cisco Chassis 2811ve'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1065') { $details->model = 'Cisco Chassis 1841ve'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1066') { $details->model = 'Cisco Chassis 2960c8tcS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1067') { $details->model = 'Cisco Chassis 2960c8tcL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1068') { $details->model = 'Cisco Chassis 2960c8pcL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1069') { $details->model = 'Cisco Chassis 2960c12pcL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.107') { $details->model = 'Cisco Chassis Cat 3524XL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1070') { $details->model = 'Cisco Chassis 3560cpd8ptS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1071') { $details->model = 'Cisco Chassis 886Vag7K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1072') { $details->model = 'Cisco Chassis 887VagSK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1073') { $details->model = 'Cisco Chassis 887Vag7K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1074') { $details->model = 'Cisco Chassis 887Vamg7K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1075') { $details->model = 'Cisco Chassis 888Eg7K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1076') { $details->model = 'Cisco Chassis 881GUK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1077') { $details->model = 'Cisco Chassis 881GSK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1078') { $details->model = 'Cisco Chassis 881GVK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1079') { $details->model = 'Cisco Chassis 881GBK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.108') { $details->model = 'Cisco Chassis Cat 2908XL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1080') { $details->model = 'Cisco Chassis 881G7K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1081') { $details->model = 'Cisco Chassis 881G7AK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1084') { $details->model = 'Cisco Nexus C5548UP'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1085') { $details->model = 'Cisco Chassis 881W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1086') { $details->model = 'Cisco Chassis 886VAW'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1087') { $details->model = 'Cisco Chassis 887VAMW'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1088') { $details->model = 'Cisco Chassis 887VAW'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1089') { $details->model = 'Cisco Chassis 819G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.109') { $details->model = 'Cisco Chassis Cat 2916MXL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1090') { $details->model = 'Cisco Chassis 819HG'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1091') { $details->model = 'Cisco Chassis IAD886VA'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1092') { $details->model = 'Cisco Chassis IAD886VAJ'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1093') { $details->model = 'Cisco Chassis IAD887VA'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1094') { $details->model = 'Cisco Chassis IAD887VAM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1095') { $details->model = 'Cisco Chassis PCM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.11') { $details->model = 'Cisco Chassis 2508'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1102') { $details->model = 'Cisco Chassis DSavsm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1104') { $details->model = 'Cisco Chassis EcdsVB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1105') { $details->model = 'Cisco Chassis N3kC3064PQ10GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1106') { $details->model = 'Cisco Chassis N3kC3048TP1GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1107') { $details->model = 'Cisco Chassis N3kC3016Q40GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.111') { $details->model = 'Cisco Chassis 1417'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1118') { $details->model = 'Cisco Chassis ASR903'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.112') { $details->model = 'Cisco Chassis OpticalRegenerator'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1121') { $details->model = 'Cisco Chassis 3560c12pcS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1122') { $details->model = 'Cisco Chassis 3560c8pcS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1123') { $details->model = 'Cisco Chassis Crs8SB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.113') { $details->model = 'Cisco Chassis 6100'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.114') { $details->model = 'Cisco Chassis 6130'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1145') { $details->model = 'Cisco Chassis ASR5000CHSSYSK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1146') { $details->model = 'Cisco Chassis ASR55CHSSYS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1147') { $details->model = 'Cisco Nexus 7004'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.115') { $details->model = 'Cisco Chassis 6260'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1159') { $details->model = 'Cisco Chassis ASR901'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.116') { $details->model = 'Cisco Chassis Cat 2924XL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1160') { $details->model = 'Cisco Chassis ASR901E'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1161') { $details->model = 'Cisco Chassis OeSmSre710'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1162') { $details->model = 'Cisco Chassis OeSmSre910'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1163') { $details->model = 'Cisco Chassis N3kC3064PQ10GX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1166') { $details->model = 'Cisco Chassis FlowAgent3000'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1168') { $details->model = 'Cisco Chassis NamApp2304'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1169') { $details->model = 'Cisco Chassis NamApp2320'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.117') { $details->model = 'Cisco Chassis Cat 2924CXL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1173') { $details->model = 'Cisco Chassis ECDS50IVB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1175') { $details->model = 'Cisco Nexus 5596T'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1178') { $details->model = 'Cisco Chassis ASR9001'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.118') { $details->model = 'Cisco Chassis Ubr924'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1188') { $details->model = 'Cisco Chassis 819GM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1189') { $details->model = 'Cisco Chassis 819HGM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.119') { $details->model = 'Cisco Chassis WsX6302Msm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1191') { $details->model = 'Cisco Chassis CDScde2502s6'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1192') { $details->model = 'Cisco Chassis CDScde2502m0'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1193') { $details->model = 'Cisco Chassis CDScde2502s8'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1196') { $details->model = 'Cisco Chassis Me3600x24CxM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1197') { $details->model = 'Cisco Chassis A9014CFD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1198') { $details->model = 'Cisco Chassis A9014CFtD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1199') { $details->model = 'Cisco Chassis MDE10XVB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.12') { $details->model = 'Cisco Chassis 2509'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.120') { $details->model = 'Cisco Chassis Cat 5kRsfc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1202') { $details->model = 'Cisco Chassis Cat 4500x16'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1203') { $details->model = 'Cisco Chassis Cat 4500x32'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1205') { $details->model = 'Cisco Chassis N2kC2248PQ10GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1206') { $details->model = 'Cisco Chassis CDScde2502s9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1207') { $details->model = 'Cisco Chassis CDScde2502s10'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1208') { $details->model = 'Cisco Chassis CDScdeGeneric'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1210') { $details->model = 'Cisco Chassis N2kB22FTSP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1211') { $details->model = 'Cisco Chassis N2kB22DELLP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.122') { $details->model = 'Cisco Chassis 7120Quadt1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1225') { $details->model = 'Cisco Chassis ASR9922Dc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1226') { $details->model = 'Cisco Chassis ASR9922Ac'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.123') { $details->model = 'Cisco Chassis 7120T3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1238') { $details->model = 'Cisco Chassis Nexus 3548'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1239') { $details->model = 'Cisco Chassis Nexus 3064 TQ10GT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.124') { $details->model = 'Cisco Chassis 7120E3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1241') { $details->model = 'Cisco Chassis ASR9912AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1242') { $details->model = 'Cisco Chassis ASR9912DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1244') { $details->model = 'Cisco Chassis asr1000'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1245') { $details->model = 'Cisco Chassis CDScde2202s4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.125') { $details->model = 'Cisco Chassis 7120At3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.126') { $details->model = 'Cisco Chassis 7120Ae3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.127') { $details->model = 'Cisco Chassis 7120Smi3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1278') { $details->model = 'Cisco Chassis IE200016TCGP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1279') { $details->model = 'Cisco Chassis IE200016TCGEP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.128') { $details->model = 'Cisco Chassis 7140Dualt3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1280') { $details->model = 'Cisco Chassis IE200016TCGNXP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.129') { $details->model = 'Cisco Chassis 7140Duale3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.13') { $details->model = 'Cisco Chassis 2510'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.130') { $details->model = 'Cisco Chassis 7140Dualat3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.131') { $details->model = 'Cisco Chassis 7140Dualae3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.132') { $details->model = 'Cisco Chassis 7140Dualmm3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.133') { $details->model = 'Cisco Chassis 827QuadV'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.134') { $details->model = 'Cisco Chassis Ubr7246Vxr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.136') { $details->model = 'Cisco Chassis 12016'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.137') { $details->model = 'Cisco Chassis As5400'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.138') { $details->model = 'Cisco Chassis 7140Octt1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.139') { $details->model = 'Cisco Chassis 7140Dualfe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.14') { $details->model = 'Cisco Chassis 2511'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.140') { $details->model = 'Cisco Chassis Cat 3548XL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.141') { $details->model = 'Cisco Chassis Cat 6006'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.142') { $details->model = 'Cisco Chassis Cat 6009'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.143') { $details->model = 'Cisco Chassis Cat 6506'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.144') { $details->model = 'Cisco Chassis Cat 6509'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.145') { $details->model = 'Cisco Chassis 827'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.146') { $details->model = 'Cisco Chassis AS5200'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.147') { $details->model = 'Cisco Chassis 12008'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.148') { $details->model = 'Cisco Chassis 12012'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.149') { $details->model = 'Cisco Chassis Mc3810V3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.1491') { $details->model = 'Cisco Chassis DSC9148SK9'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.15') { $details->model = 'Cisco Chassis 2512'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.151') { $details->model = 'Cisco Chassis 7507z'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.152') { $details->model = 'Cisco Chassis 7513z'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.153') { $details->model = 'Cisco Chassis 7507mx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.154') { $details->model = 'Cisco Chassis 7513mx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.155') { $details->model = 'Cisco Chassis Ubr912C'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.156') { $details->model = 'Cisco Chassis Ubr912S'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.157') { $details->model = 'Cisco Chassis Ubr914'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.16') { $details->model = 'Cisco Chassis 2513'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.160') { $details->model = 'Cisco Chassis 6160'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.161') { $details->model = 'Cisco Chassis Cat 2948gL3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.164') { $details->model = 'Cisco Chassis Cat 4232L3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.165') { $details->model = 'Cisco Chassis OpticalRegeneratorDCPower'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.17') { $details->model = 'Cisco Chassis 2514'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.171') { $details->model = 'Cisco Chassis CVA122'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.172') { $details->model = 'Cisco Chassis CVA124'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.173') { $details->model = 'Cisco Chassis As5850'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.176') { $details->model = 'Cisco Chassis MGX 8240'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.18') { $details->model = 'Cisco Chassis 2515'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.181') { $details->model = 'Cisco Chassis MGX 8950'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.182') { $details->model = 'Cisco Chassis Ubr925'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.183') { $details->model = 'Cisco Chassis Ubr10012'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.184') { $details->model = 'Cisco Chassis Cat 4kGateway'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.185') { $details->model = 'Cisco Chassis 120168r'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.186') { $details->model = 'Cisco Chassis 2650'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.187') { $details->model = 'Cisco Chassis 2651'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.189') { $details->model = 'Cisco Chassis 826'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.19') { $details->model = 'Cisco Chassis 2516'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.190') { $details->model = 'Cisco Chassis Cat 295012'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.191') { $details->model = 'Cisco Chassis Cat 295024'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.193') { $details->model = 'Cisco Chassis 1751'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.194') { $details->model = 'Cisco Chassis 1730Iad8Fxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.195') { $details->model = 'Cisco Chassis 1730Iad16Fxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.196') { $details->model = 'Cisco Chassis 626'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.197') { $details->model = 'Cisco Chassis 627'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.198') { $details->model = 'Cisco Chassis 633'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.199') { $details->model = 'Cisco Chassis 673'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.2') { $details->model = 'Cisco Chassis 2000'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.20') { $details->model = 'Cisco Chassis 2517'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.200') { $details->model = 'Cisco Chassis 675'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.201') { $details->model = 'Cisco Chassis 675e'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.202') { $details->model = 'Cisco Chassis 676'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.203') { $details->model = 'Cisco Chassis 677'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.204') { $details->model = 'Cisco Chassis 678'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.205') { $details->model = 'Cisco Chassis 3661Ac'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.206') { $details->model = 'Cisco Chassis 3661Dc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.207') { $details->model = 'Cisco Chassis 3662Ac'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.208') { $details->model = 'Cisco Chassis 3662Dc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.209') { $details->model = 'Cisco Chassis 3662AcCo'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.21') { $details->model = 'Cisco Chassis 2518'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.210') { $details->model = 'Cisco Chassis 3662DcCo'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.211') { $details->model = 'Cisco Chassis Ubr7111'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.213') { $details->model = 'Cisco Chassis Ubr7114'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.215') { $details->model = 'Cisco Chassis 12010'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.216') { $details->model = 'Cisco Chassis 8110'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.22') { $details->model = 'Cisco Chassis 2519'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.220') { $details->model = 'Cisco Chassis SOHO77'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.221') { $details->model = 'Cisco Chassis SOHO76'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.222') { $details->model = 'Cisco Chassis 7150Dualfe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.223') { $details->model = 'Cisco Chassis 7150Octt1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.224') { $details->model = 'Cisco Chassis 7150Dualt3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.226') { $details->model = 'Cisco Chassis Cat 2950t24'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.227') { $details->model = 'Cisco Chassis VPS1110'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.228') { $details->model = 'Cisco Chassis ContentEngine'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.229') { $details->model = 'Cisco Chassis IAD2420'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.23') { $details->model = 'Cisco Chassis 2520'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.230') { $details->model = 'Cisco Chassis 677i'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.231') { $details->model = 'Cisco Chassis 674'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.232') { $details->model = 'Cisco Chassis DPA7630'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.233') { $details->model = 'Cisco Chassis Cat 355024'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.234') { $details->model = 'Cisco Chassis Cat 355048'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.235') { $details->model = 'Cisco Chassis Cat 355012T'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.238') { $details->model = 'Cisco Chassis CVA122E'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.239') { $details->model = 'Cisco Chassis CVA124E'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.24') { $details->model = 'Cisco Chassis 2521'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.240') { $details->model = 'Cisco Chassis URM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.241') { $details->model = 'Cisco Chassis URM2FE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.242') { $details->model = 'Cisco Chassis URM2FE2V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.245') { $details->model = 'Cisco Chassis CAP340'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.247') { $details->model = 'Cisco Chassis DPA7610'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.248') { $details->model = 'Cisco Chassis 828'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.249') { $details->model = 'Cisco Chassis SOHO78'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.25') { $details->model = 'Cisco Chassis 2522'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.250') { $details->model = 'Cisco Chassis 806'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.251') { $details->model = 'Cisco Chassis 12416'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.252') { $details->model = 'Cisco Chassis Cat 2948gL3Dc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.253') { $details->model = 'Cisco Chassis Cat 4908gL3Dc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.254') { $details->model = 'Cisco Chassis 12406'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.255') { $details->model = 'Cisco Chassis PIX Firewall 506'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.256') { $details->model = 'Cisco Chassis PIX Firewall 515'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.257') { $details->model = 'Cisco Chassis PIX Firewall 520'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.258') { $details->model = 'Cisco Chassis PIX Firewall 525'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.259') { $details->model = 'Cisco Chassis PIX Firewall 535'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.26') { $details->model = 'Cisco Chassis 2523'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.260') { $details->model = 'Cisco Chassis 12410'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.261') { $details->model = 'Cisco Chassis 811'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.262') { $details->model = 'Cisco Chassis 813'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.263') { $details->model = 'Cisco Chassis 10720'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.264') { $details->model = 'Cisco Chassis MWR1900'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.265') { $details->model = 'Cisco Chassis 4224'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.266') { $details->model = 'Cisco Chassis Cat 6513'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.267') { $details->model = 'Cisco Chassis 7603'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.268') { $details->model = 'Cisco Chassis 7606'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.269') { $details->model = 'Cisco Chassis 7401ASR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.27') { $details->model = 'Cisco Chassis 2524'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.271') { $details->model = 'Cisco Chassis 1105'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.272') { $details->model = 'Cisco Chassis ONS 15540ESP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.275') { $details->model = 'Cisco Chassis CE 507'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.276') { $details->model = 'Cisco Chassis CE 560'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.277') { $details->model = 'Cisco Chassis CE 590'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.278') { $details->model = 'Cisco Chassis CE 7320'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.279') { $details->model = 'Cisco Chassis 2691'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.28') { $details->model = 'Cisco Chassis 2525'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.280') { $details->model = 'Cisco Chassis 3725'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.282') { $details->model = 'Cisco Chassis 1760'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.283') { $details->model = 'Cisco Chassis PIX Firewall 501'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.284') { $details->model = 'Cisco Chassis 2610M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.285') { $details->model = 'Cisco Chassis 2611M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.289') { $details->model = 'Cisco Chassis 12404'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.29') { $details->model = 'Cisco Chassis 3000'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.290') { $details->model = 'Cisco Chassis 9004'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.293') { $details->model = 'Cisco Chassis Cat 295012G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.294') { $details->model = 'Cisco Chassis Cat 295024G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.295') { $details->model = 'Cisco Chassis Cat 295048G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.297') { $details->model = 'Cisco Chassis Cat 355012G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.298') { $details->model = 'Cisco Chassis CE 507AV'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.299') { $details->model = 'Cisco Chassis CE 560AV'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.3') { $details->model = 'Cisco Chassis 2500'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.30') { $details->model = 'Cisco Chassis 3104'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.300') { $details->model = 'Cisco Chassis IE2105'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.301') { $details->model = 'Cisco Chassis 3745'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.302') { $details->model = 'Cisco Chassis 10005'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.303') { $details->model = 'Cisco Chassis 10008'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.304') { $details->model = 'Cisco Chassis 7304'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.305') { $details->model = 'Cisco Chassis 7505'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.31') { $details->model = 'Cisco Chassis 3204'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.310') { $details->model = 'Cisco Chassis 1721'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.311') { $details->model = 'Cisco Chassis Cat 4000Sup3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.312') { $details->model = 'Cisco Chassis 827H'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.313') { $details->model = 'Cisco Chassis SOHO77H'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.314') { $details->model = 'Cisco Chassis Cat 4006'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.315') { $details->model = 'Cisco Chassis Cat 355024Mmf'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.316') { $details->model = 'Cisco Chassis Cat 6503'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.317') { $details->model = 'Cisco Chassis PIX Firewall 506E'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.318') { $details->model = 'Cisco Chassis PIX Firewall 515E'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.319') { $details->model = 'Cisco Chassis Cat 355024Dc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.32') { $details->model = 'Cisco Chassis IGS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.320') { $details->model = 'Cisco Chassis CE 2636'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.321') { $details->model = 'Cisco Chassis CE Dw2636'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.323') { $details->model = 'Cisco Chassis 14MGX8830'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.325') { $details->model = 'Cisco Chassis ONS 15530NEBS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.326') { $details->model = 'Cisco Chassis ONS 15530ETSI'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.327') { $details->model = 'Cisco Chassis SOHO71'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.328') { $details->model = 'Cisco Chassis 6400UAC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.329') { $details->model = 'Cisco Chassis RPMPR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.33') { $details->model = 'Cisco Chassis 2501LANFRADFX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.330') { $details->model = 'Cisco Chassis 2610XM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.331') { $details->model = 'Cisco Chassis 2611XM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.332') { $details->model = 'Cisco Chassis 2620XM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.333') { $details->model = 'Cisco Chassis 2621XM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.334') { $details->model = 'Cisco Chassis 2650XM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.335') { $details->model = 'Cisco Chassis 2651XM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.336') { $details->model = 'Cisco Chassis Cat 295024GDc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.337') { $details->model = 'Cisco Chassis ONS 15540ESPx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.34') { $details->model = 'Cisco Chassis 2501FRADFX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.340') { $details->model = 'Cisco Chassis C7301'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.341') { $details->model = 'Cisco Chassis 12816'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.342') { $details->model = 'Cisco Chassis 12810'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.347') { $details->model = 'Cisco Chassis Cat 295024sx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.348') { $details->model = 'Cisco Chassis As5400HPX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.349') { $details->model = 'Cisco Chassis As5350HPX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.35') { $details->model = 'Cisco Chassis 2502LANFRADFX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.350') { $details->model = 'Cisco Chassis Cat 2955T12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.351') { $details->model = 'Cisco Chassis Cat 2955C12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.354') { $details->model = 'Cisco Chassis 837'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.355') { $details->model = 'Cisco Chassis SOHO97'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.356') { $details->model = 'Cisco Chassis 831'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.357') { $details->model = 'Cisco Chassis SOHO91'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.358') { $details->model = 'Cisco Chassis 836'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.359') { $details->model = 'Cisco Chassis SOHO96'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.36') { $details->model = 'Cisco Chassis WSX3011'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.360') { $details->model = 'Cisco Chassis Cat 4507'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.361') { $details->model = 'Cisco Chassis Cat 4506'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.362') { $details->model = 'Cisco Chassis Cat 4503'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.363') { $details->model = 'Cisco Chassis 7507'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.364') { $details->model = 'Cisco Chassis 7513'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.365') { $details->model = 'Cisco Chassis AIRAP1100'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.367') { $details->model = 'Cisco Chassis Cat 2955S12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.368') { $details->model = 'Cisco Chassis 7609'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.369') { $details->model = 'Cisco Chassis Cat 65509'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.37') { $details->model = 'Cisco Chassis AccessProEC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.370') { $details->model = 'Cisco Chassis Cat 375024'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.371') { $details->model = 'Cisco Chassis Cat 375048'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.372') { $details->model = 'Cisco Chassis Cat 375024TS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.373') { $details->model = 'Cisco Chassis Cat 375024T'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.374') { $details->model = 'Cisco Chassis MWR1941DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.375') { $details->model = 'Cisco Chassis DSC9506'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.376') { $details->model = 'Cisco Chassis DSC9509'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.377') { $details->model = 'Cisco Chassis DSC9513'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.378') { $details->model = 'Cisco Chassis ONS 15201'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.379') { $details->model = 'Cisco Chassis ONS 15252'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.38') { $details->model = 'Cisco Chassis AccessProRC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.380') { $details->model = 'Cisco Chassis MdsDSX9216'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.381') { $details->model = 'Cisco Chassis VG200'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.382') { $details->model = 'Cisco Chassis AIRAP1210'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.383') { $details->model = 'Cisco Chassis Cat 375048PS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.384') { $details->model = 'Cisco Chassis Cat 375024PS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.385') { $details->model = 'Cisco Chassis CE 510'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.386') { $details->model = 'Cisco Chassis CE 565'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.387') { $details->model = 'Cisco Chassis CE 7305'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.388') { $details->model = 'Cisco Chassis CE 7325'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.389') { $details->model = 'Cisco Chassis CE 4630'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.39') { $details->model = 'Cisco Chassis WSX5301'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.390') { $details->model = 'Cisco Chassis CE 4650'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.391') { $details->model = 'Cisco Chassis Cat 297024'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.392') { $details->model = 'Cisco Chassis 7613'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.394') { $details->model = 'Cisco Chassis Cat 3750Ge12Sfp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.395') { $details->model = 'Cisco Chassis Cr4450'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.396') { $details->model = 'Cisco Chassis AIRBR1410'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.397') { $details->model = 'Cisco Chassis Cat 6509neba'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.398') { $details->model = 'Cisco Chassis Cat 4510'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.399') { $details->model = 'Cisco Chassis 1711'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.4') { $details->model = 'Cisco Chassis 2501'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.40') { $details->model = 'Cisco Chassis AS2509RJ'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.400') { $details->model = 'Cisco Chassis 1712'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.401') { $details->model = 'Cisco Chassis 1701'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.402') { $details->model = 'Cisco Chassis 29408TT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.403') { $details->model = 'Cisco Chassis 29408TF'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.404') { $details->model = 'Cisco Chassis 3825'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.405') { $details->model = 'Cisco Chassis 3845'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.406') { $details->model = 'Cisco Chassis 2430Iad24Fxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.407') { $details->model = 'Cisco Chassis 2431Iad8Fxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.408') { $details->model = 'Cisco Chassis 2431Iad16Fxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.409') { $details->model = 'Cisco Chassis 2431Iad1T1E1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.41') { $details->model = 'Cisco Chassis AS2511RJ'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.410') { $details->model = 'Cisco Chassis 2432Iad24Fxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.411') { $details->model = 'Cisco Chassis DSC9140K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.412') { $details->model = 'Cisco Chassis AirAp350IOS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.413') { $details->model = 'Cisco Chassis 3220'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.414') { $details->model = 'Cisco Chassis DSC9120K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.415') { $details->model = 'Cisco Chassis Cat 295024LreSt997'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.416') { $details->model = 'Cisco Chassis Cat 6kSup720'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.417') { $details->model = 'Cisco Chassis VG224'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.418') { $details->model = 'Cisco Chassis Cat 295048T'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.419') { $details->model = 'Cisco Chassis Cat 295048SX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.42') { $details->model = 'Cisco Chassis 3800'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.420') { $details->model = 'Cisco Chassis Cat 297024TS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.421') { $details->model = 'Cisco Chassis Crs116Fabric'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.422') { $details->model = 'Cisco Chassis Crs116LineCard'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.423') { $details->model = 'Cisco Chassis Crs18LineCard'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.424') { $details->model = 'Cisco Chassis Cat 356048PS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.425') { $details->model = 'Cisco Chassis Cat 356024PS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.426') { $details->model = 'Cisco Chassis AIRBR1300'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.427') { $details->model = 'Cisco Chassis 12004'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.428') { $details->model = 'Cisco Chassis 12006'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.429') { $details->model = 'Cisco Chassis 851'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.43') { $details->model = 'Cisco Chassis 3620'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.430') { $details->model = 'Cisco Chassis 857'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.431') { $details->model = 'Cisco Chassis 876'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.432') { $details->model = 'Cisco Chassis 877'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.433') { $details->model = 'Cisco Chassis 878'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.434') { $details->model = 'Cisco Chassis 871'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.435') { $details->model = 'Cisco Chassis Umg9820'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.436') { $details->model = 'Cisco Chassis 2811'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.437') { $details->model = 'Cisco Chassis 2821'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.438') { $details->model = 'Cisco Chassis 2851'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.439') { $details->model = 'Cisco Chassis Cat 375024ME'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.44') { $details->model = 'Cisco Chassis 3640'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.442') { $details->model = 'Cisco Chassis MdsDSC9216AK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.443') { $details->model = 'Cisco Chassis 3201WMIC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.444') { $details->model = 'Cisco Chassis Cat 3750G16TD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.445') { $details->model = 'Cisco Chassis 1718'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.446') { $details->model = 'Cisco Chassis IGESM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.447') { $details->model = 'Cisco Chassis ASA 5510'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.448') { $details->model = 'Cisco Chassis ASA 5520'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.449') { $details->model = 'Cisco Chassis ASA 5540'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.45') { $details->model = 'Cisco Chassis 7204'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.450') { $details->model = 'Cisco Chassis 1841'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.451') { $details->model = 'Cisco Chassis 2801'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.452') { $details->model = 'Cisco Chassis CE 511K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.453') { $details->model = 'Cisco Chassis CE 566K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.454') { $details->model = 'Cisco Chassis ASA 5560'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.455') { $details->model = 'Cisco Chassis MGX 8880'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.456') { $details->model = 'Cisco Chassis CE 7306K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.457') { $details->model = 'Cisco Chassis CE 7326K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.458') { $details->model = 'Cisco Chassis Cat 3750G24PS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.459') { $details->model = 'Cisco Chassis Cat 3750G48PS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.46') { $details->model = 'Cisco Chassis 7206'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.460') { $details->model = 'Cisco Chassis Cat 3750G48TS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.461') { $details->model = 'Cisco Chassis Cat 297048TS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.462') { $details->model = 'Cisco Chassis DSX9132K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.463') { $details->model = 'Cisco Chassis DSX9116K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.464') { $details->model = 'Cisco Chassis BMG X8830'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.465') { $details->model = 'Cisco Chassis BMG X8850'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.466') { $details->model = 'Cisco Chassis Cat 4948'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.467') { $details->model = 'Cisco Chassis CE 501K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.468') { $details->model = 'Cisco Chassis Cat 3560G24PS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.469') { $details->model = 'Cisco Chassis Cat 3560G24TS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.47') { $details->model = 'Cisco Chassis AS5300'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.470') { $details->model = 'Cisco Chassis Cat 3560G48PS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.471') { $details->model = 'Cisco Chassis Cat 3560G48TS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.472') { $details->model = 'Cisco Chassis DSC9216iK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.473') { $details->model = 'Cisco Chassis As5400XM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.474') { $details->model = 'Cisco Chassis As5350XM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.475') { $details->model = 'Cisco Chassis AIRAP1130'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.476') { $details->model = 'Cisco Chassis 7604'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.477') { $details->model = 'Cisco Chassis Cat 494810GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.478') { $details->model = 'Cisco Chassis Cat 3750G24TS1U'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.480') { $details->model = 'Cisco Chassis 371098HP001'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.481') { $details->model = 'Cisco Chassis SB101'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.482') { $details->model = 'Cisco Chassis SB106'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.483') { $details->model = 'Cisco Chassis SB107'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.484') { $details->model = 'Cisco Chassis Cat 356024TS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.485') { $details->model = 'Cisco Chassis Cat 356048TS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.486') { $details->model = 'Cisco Chassis ONS 15310'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.487') { $details->model = 'Cisco Chassis 1801'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.488') { $details->model = 'Cisco Chassis 1802'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.489') { $details->model = 'Cisco Chassis 1803'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.49') { $details->model = 'Cisco Chassis As5800RS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.490') { $details->model = 'Cisco Chassis 1811'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.491') { $details->model = 'Cisco Chassis 1812'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.492') { $details->model = 'Cisco WLSEChassis1130'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.493') { $details->model = 'Cisco WLSEChassis1030'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.495') { $details->model = 'Cisco Chassis IDS4210'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.496') { $details->model = 'Cisco Chassis IDS4215'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.497') { $details->model = 'Cisco Chassis IDS4235'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.498') { $details->model = 'Cisco Chassis IDS4240'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.499') { $details->model = 'Cisco Chassis IDS4250'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.5') { $details->model = 'Cisco Chassis 2502'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.50') { $details->model = 'Cisco Chassis As5800DS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.500') { $details->model = 'Cisco Chassis IDS4250SX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.501') { $details->model = 'Cisco Chassis IDS4250XL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.502') { $details->model = 'Cisco Chassis IDS4255'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.503') { $details->model = 'Cisco Chassis Cat 375024FS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.504') { $details->model = 'Cisco Chassis Cat 6504E'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.505') { $details->model = 'Cisco Chassis IGESMSFP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.506') { $details->model = 'Cisco Chassis Fe6326K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.508') { $details->model = 'Cisco Chassis Fe7326K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.509') { $details->model = 'Cisco Chassis Fe511K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.51') { $details->model = 'Cisco Chassis 7202'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.510') { $details->model = 'Cisco Chassis SCEDispatcher'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.511') { $details->model = 'Cisco Chassis SCE2000'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.512') { $details->model = 'Cisco Chassis SCE1000'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.514') { $details->model = 'Cisco Chassis DSC902020K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.515') { $details->model = 'Cisco Chassis Fe611K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.52') { $details->model = 'Cisco Chassis Rpm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.520') { $details->model = 'Cisco Chassis Cat 3750Ge12SfpDc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.521') { $details->model = 'Cisco Chassis Cat 296024'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.522') { $details->model = 'Cisco Chassis Cat 296048'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.523') { $details->model = 'Cisco Chassis Cat 2960G24'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.524') { $details->model = 'Cisco Chassis Cat 2960G48'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.529') { $details->model = 'Cisco Chassis Cat 6kMsfc2a'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.53') { $details->model = 'Cisco Chassis 1710'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.530') { $details->model = 'Cisco Chassis CE 611K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.531') { $details->model = 'Cisco Chassis ME6340ACA'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.532') { $details->model = 'Cisco Chassis ME6340DCA'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.533') { $details->model = 'Cisco Chassis ME6340DCB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.534') { $details->model = 'Cisco Chassis Cat 296024TT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.535') { $details->model = 'Cisco Chassis Cat 296048TT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.536') { $details->model = 'Cisco Chassis IGESMSFPT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.537') { $details->model = 'Cisco Chassis Mec6524gs8s'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.538') { $details->model = 'Cisco Chassis Mec6524gt8s'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.54') { $details->model = 'Cisco Chassis 1720'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.541') { $details->model = 'Cisco Chassis Paldron'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.542') { $details->model = 'Cisco Chassis IGESMT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.543') { $details->model = 'Cisco Chassis Cat CE50024TT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.544') { $details->model = 'Cisco Chassis Cat CE50024LC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.545') { $details->model = 'Cisco Chassis Cat CE50024PC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.546') { $details->model = 'Cisco Chassis Cat CE50012TC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.547') { $details->model = 'Cisco Chassis 5750'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.548') { $details->model = 'Cisco Chassis MWR1941DCA'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.549') { $details->model = 'Cisco Chassis 815'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.55') { $details->model = 'Cisco Chassis Cat 8540Msr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.550') { $details->model = 'Cisco Chassis 240024TSA'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.551') { $details->model = 'Cisco Chassis 240024TSD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.552') { $details->model = 'Cisco Chassis 340024TSA'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.553') { $details->model = 'Cisco Chassis 340024TSD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.556') { $details->model = 'Cisco Chassis Fe2636'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.557') { $details->model = 'Cisco Chassis IDS4220'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.558') { $details->model = 'Cisco Chassis IDS4230'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.56') { $details->model = 'Cisco Chassis Cat 8540Csr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.560') { $details->model = 'Cisco Chassis ASA 5505'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.561') { $details->model = 'Cisco Chassis WS3020HPQ'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.562') { $details->model = 'Cisco Chassis WS3030DEL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.563') { $details->model = 'Cisco Chassis WLSE1133'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.564') { $details->model = 'Cisco Chassis ASA 5550'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.565') { $details->model = 'Cisco Chassis Wae612K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.567') { $details->model = 'Cisco Chassis Airap1250'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.568') { $details->model = 'Cisco Chassis CE 512K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.569') { $details->model = 'Cisco Chassis Fe512K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.57') { $details->model = 'Cisco Chassis Ubr7246'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.570') { $details->model = 'Cisco Chassis CE 612K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.571') { $details->model = 'Cisco Chassis Fe612K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.573') { $details->model = 'Cisco Chassis Oe512K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.574') { $details->model = 'Cisco Chassis Oe612K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.575') { $details->model = 'Cisco Chassis Cat 3750G24WS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.576') { $details->model = 'Cisco Chassis Crs14LineCard'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.577') { $details->model = 'Cisco Chassis Me3400g12CsA'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.578') { $details->model = 'Cisco Chassis Me3400g12CsD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.579') { $details->model = 'Cisco Chassis 877M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.58') { $details->model = 'Cisco Chassis 7576'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.580') { $details->model = 'Cisco Chassis 1801M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.581') { $details->model = 'Cisco Chassis Cat bs3040Fsc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.582') { $details->model = 'Cisco Chassis SpaIPSEC2g2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.583') { $details->model = 'Cisco Chassis Oe511K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.584') { $details->model = 'Cisco Chassis Oe611K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.585') { $details->model = 'Cisco Chassis Oe7326K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.586') { $details->model = 'Cisco Chassis Me492410GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.587') { $details->model = 'Cisco Chassis DSC9124'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.588') { $details->model = 'Cisco Chassis Cat 3750E48TD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.589') { $details->model = 'Cisco Chassis Cat 3750E24TD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.59') { $details->model = 'Cisco Chassis 3660'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.590') { $details->model = 'Cisco Chassis Cat 3750E24PD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.591') { $details->model = 'Cisco Chassis Cat 3750E48PD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.592') { $details->model = 'Cisco Chassis Cat 3560E24TD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.593') { $details->model = 'Cisco Chassis Cat 3560E48TD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.594') { $details->model = 'Cisco Chassis Cat 3560E24PD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.595') { $details->model = 'Cisco Chassis Cat 3560E48PD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.596') { $details->model = 'Cisco Chassis Cat 35608PC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.597') { $details->model = 'Cisco Chassis Cat 29608TC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.598') { $details->model = 'Cisco Chassis Cat 2960G8TC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.599') { $details->model = 'Cisco Chassis 7606S'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.6') { $details->model = 'Cisco Chassis 2503'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.60') { $details->model = 'Cisco Chassis 1401'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.600') { $details->model = 'Cisco Chassis 7609S'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.601') { $details->model = 'Cisco Chassis DSIBMFC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.602') { $details->model = 'Cisco Chassis IPSVirtual'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.603') { $details->model = 'Cisco Chassis 3250'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.604') { $details->model = 'Cisco Chassis 3205WMIC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.605') { $details->model = 'Cisco Chassis 5720'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.607') { $details->model = 'Cisco Chassis Me3400g2csA'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.608') { $details->model = 'Cisco Chassis 7201'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.609') { $details->model = 'Cisco Chassis NmWae'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.61') { $details->model = 'Cisco Chassis 2613'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.610') { $details->model = 'Cisco Chassis ACE4710K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.612') { $details->model = 'Cisco Nexus 7010'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.613') { $details->model = 'Cisco Chassis Ubr7225Vxr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.615') { $details->model = 'Cisco Chassis Cat 6509ve'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.616') { $details->model = 'Cisco Chassis DSC9134'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.617') { $details->model = 'Cisco Chassis 7603S'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.62') { $details->model = 'Cisco Chassis 2610'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.620') { $details->model = 'Cisco Chassis 5740'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.623') { $details->model = 'Cisco Chassis 867'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.624') { $details->model = 'Cisco Chassis 881'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.625') { $details->model = 'Cisco Chassis 881G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.626') { $details->model = 'Cisco Chassis Iad881F'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.627') { $details->model = 'Cisco Chassis Iad881B'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.628') { $details->model = 'Cisco Chassis 881Srst'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.629') { $details->model = 'Cisco Chassis 886'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.63') { $details->model = 'Cisco Chassis 2612'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.630') { $details->model = 'Cisco Chassis 886G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.631') { $details->model = 'Cisco Chassis Iad886F'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.632') { $details->model = 'Cisco Chassis Iad886B'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.633') { $details->model = 'Cisco Chassis 886Srst'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.634') { $details->model = 'Cisco Chassis 887'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.635') { $details->model = 'Cisco Chassis 887G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.636') { $details->model = 'Cisco Chassis Iad887F'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.637') { $details->model = 'Cisco Chassis Iad887B'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.638') { $details->model = 'Cisco Chassis 887Srst'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.64') { $details->model = 'Cisco Chassis 2611'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.640') { $details->model = 'Cisco Chassis 888G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.641') { $details->model = 'Cisco Chassis Iad888F'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.642') { $details->model = 'Cisco Chassis Iad888B'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.643') { $details->model = 'Cisco Chassis 888Srst'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.644') { $details->model = 'Cisco Chassis 891'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.645') { $details->model = 'Cisco Chassis 892'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.646') { $details->model = 'Cisco Chassis 885D3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.647') { $details->model = 'Cisco Chassis Iad885FD3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.648') { $details->model = 'Cisco Chassis 885EJ3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.649') { $details->model = 'Cisco Chassis 7816H'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.65') { $details->model = 'Cisco Chassis 2620'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.650') { $details->model = 'Cisco Chassis Sce8000'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.651') { $details->model = 'Cisco Chassis MdsDSC9222i'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.653') { $details->model = 'Cisco Chassis 860Ap'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.654') { $details->model = 'Cisco Chassis 880Ap'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.655') { $details->model = 'Cisco Chassis 890Ap'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.656') { $details->model = 'Cisco Chassis 1900Ap'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.657') { $details->model = 'Cisco Chassis 340024FSA'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.658') { $details->model = 'Cisco Chassis Cat 4503e'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.659') { $details->model = 'Cisco Chassis Cat 4506e'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.66') { $details->model = 'Cisco Chassis 2621'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.660') { $details->model = 'Cisco Chassis Cat 4507re'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.661') { $details->model = 'Cisco Chassis Cat 4510re'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.662') { $details->model = 'Cisco Chassis Uc520s8U4FxoK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.663') { $details->model = 'Cisco Chassis Uc520s8U4FxoWK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.664') { $details->model = 'Cisco Chassis Uc520s8U2BriK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.665') { $details->model = 'Cisco Chassis Uc520s8U2BriWK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.666') { $details->model = 'Cisco Chassis Uc520s16U4FxoK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.667') { $details->model = 'Cisco Chassis Uc520s16U4FxoWK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.668') { $details->model = 'Cisco Chassis Uc520s16U2BriK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.669') { $details->model = 'Cisco Chassis Uc520s16U2BriWK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.67') { $details->model = 'Cisco Chassis Cat 8510Csr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.670') { $details->model = 'Cisco Chassis Uc520m32U8FxoK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.671') { $details->model = 'Cisco Chassis Uc520m32U8FxoW'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.672') { $details->model = 'Cisco Chassis Uc520m32U4BriK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.673') { $details->model = 'Cisco Chassis Uc520m32U4BriW'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.674') { $details->model = 'Cisco Chassis Uc520m48U12FxoK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.675') { $details->model = 'Cisco Chassis Uc520m48U12FxoW'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.676') { $details->model = 'Cisco Chassis Uc520m48U6BriK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.677') { $details->model = 'Cisco Chassis Uc520m48U6BriW'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.678') { $details->model = 'Cisco Chassis Uc520m48U1T1E1FK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.679') { $details->model = 'Cisco Chassis Uc520m48U1T1E1BK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.68') { $details->model = 'Cisco Chassis Ubr7223'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.680') { $details->model = 'Cisco Chassis CE 5208PC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.681') { $details->model = 'Cisco Chassis 7828H'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.682') { $details->model = 'Cisco Chassis 7816I'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.683') { $details->model = 'Cisco Chassis 7828I'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.684') { $details->model = 'Cisco Chassis 1861Uc2BK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.685') { $details->model = 'Cisco Chassis 1861Uc4FK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.686') { $details->model = 'Cisco Chassis 1861Srst2BK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.687') { $details->model = 'Cisco Chassis 1861Srst4FK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.688') { $details->model = 'Cisco Chassis Oe7330K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.689') { $details->model = 'Cisco Chassis Oe7350K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.69') { $details->model = 'Cisco Chassis 6400Nrp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.694') { $details->model = 'Cisco Chassis Cat 296048TCS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.695') { $details->model = 'Cisco Chassis Cat 296024TCS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.696') { $details->model = 'Cisco Chassis Cat 296024S'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.697') { $details->model = 'Cisco Chassis Cat 296024PC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.698') { $details->model = 'Cisco Chassis Cat 296024LT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.699') { $details->model = 'Cisco Chassis Cat 2960PD8TT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.7') { $details->model = 'Cisco Chassis 2504'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.70') { $details->model = 'Cisco Chassis 801'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.700') { $details->model = 'Cisco Chassis ASR1002'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.701') { $details->model = 'Cisco Chassis ASR1004'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.702') { $details->model = 'Cisco Chassis ASR1006'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.703') { $details->model = 'Cisco Chassis Cat 4900M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.704') { $details->model = 'Cisco Chassis ASA 5580'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.705') { $details->model = 'Cisco Chassis Cat Rfgw'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.706') { $details->model = 'Cisco Chassis CE 52024PC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.707') { $details->model = 'Cisco Chassis CE 52024LC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.708') { $details->model = 'Cisco Chassis CE 52024TT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.709') { $details->model = 'Cisco Chassis CE 520G24TC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.71') { $details->model = 'Cisco Chassis 802'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.710') { $details->model = 'Cisco Chassis 1861Srst2BCueK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.711') { $details->model = 'Cisco Chassis 1861Srst4FCueK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.712') { $details->model = 'Cisco Chassis Vgd1t3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.718') { $details->model = 'Cisco Chassis Cat 3560e12d'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.719') { $details->model = 'Cisco Nexus C5020pBf'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.72') { $details->model = 'Cisco Chassis 803'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.720') { $details->model = 'Cisco Nexus C5020pBd'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.721') { $details->model = 'Cisco Chassis Cat 3560E12SD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.722') { $details->model = 'Cisco Chassis Oe674'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.723') { $details->model = 'Cisco Chassis IE30004TC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.724') { $details->model = 'Cisco Chassis IE30008TC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.725') { $details->model = 'Cisco Chassis RAIE1783MS06'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.726') { $details->model = 'Cisco Chassis RAIE1783MS10T'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.727') { $details->model = 'Cisco Chassis 2435Iad8Fxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.728') { $details->model = 'Cisco Chassis VG204'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.729') { $details->model = 'Cisco Chassis VG202'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.73') { $details->model = 'Cisco Chassis 804'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.730') { $details->model = 'Cisco Chassis Cat 291824TT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.731') { $details->model = 'Cisco Chassis Cat 291824TC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.732') { $details->model = 'Cisco Chassis Cat 291848TT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.733') { $details->model = 'Cisco Chassis Cat 291848TC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.734') { $details->model = 'Cisco Chassis 1805'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.735') { $details->model = 'Cisco Chassis Uc52024u4briK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.736') { $details->model = 'Cisco Chassis Uc52024u8fxoK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.737') { $details->model = 'Cisco Chassis Uc520s8u2briWJK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.738') { $details->model = 'Cisco Chassis Uc520s16u2briWJK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.739') { $details->model = 'Cisco Chassis VSIntSP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.74') { $details->model = 'Cisco Chassis 7206Vxr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.740') { $details->model = 'Cisco Chassis VSSP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.741') { $details->model = 'Cisco Chassis VSHydecoder'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.742') { $details->model = 'Cisco Chassis VSDecoder'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.743') { $details->model = 'Cisco Chassis VSEncoder1P'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.745') { $details->model = 'Cisco Chassis Mwr2941Dc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.746') { $details->model = 'Cisco Chassis Oe574'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.747') { $details->model = 'Cisco Chassis Oe474'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.748') { $details->model = 'Cisco Chassis Oe274'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.749') { $details->model = 'Cisco Chassis 7816c'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.75') { $details->model = 'Cisco Chassis 7204Vxr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.750') { $details->model = 'Cisco Chassis Ap801agn'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.751') { $details->model = 'Cisco Chassis Ap801gn'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.752') { $details->model = 'Cisco Chassis C1861WSrst4FCueK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.753') { $details->model = 'Cisco Chassis C1861WSrst2BCueK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.754') { $details->model = 'Cisco Chassis C1861WSrst4FK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.755') { $details->model = 'Cisco Chassis C1861WSrst2BK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.756') { $details->model = 'Cisco Chassis C1861WUc4FK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.757') { $details->model = 'Cisco Chassis C1861WUc2BK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.758') { $details->model = 'Cisco Chassis Me3400e24tsM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.759') { $details->model = 'Cisco Chassis Me3400eg12csM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.76') { $details->model = 'Cisco Chassis 1750'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.760') { $details->model = 'Cisco Chassis Me3400eg2csA'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.761') { $details->model = 'Cisco Chassis CE 674'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.762') { $details->model = 'Cisco Chassis CAM35'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.763') { $details->model = 'Cisco Chassis CE 7341'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.764') { $details->model = 'Cisco Chassis CE 7371'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.77') { $details->model = 'Cisco Chassis Cat 2924XLv'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.770') { $details->model = 'Cisco Chassis Cat 492810GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.771') { $details->model = 'Cisco Chassis Cat 296048TTS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.772') { $details->model = 'Cisco Chassis Cat 29608TCS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.774') { $details->model = 'Cisco Chassis Sr520FE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.775') { $details->model = 'Cisco Chassis Sr520ADSL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.776') { $details->model = 'Cisco Chassis Sr520ADSLi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.777') { $details->model = 'Cisco Nexus 7018'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.778') { $details->model = 'Cisco Chassis Cat 356012PCS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.779') { $details->model = 'Cisco Chassis Cat 296048PSTL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.78') { $details->model = 'Cisco Chassis Cat 2924CXLv'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.780') { $details->model = 'Cisco Chassis ASR9010'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.781') { $details->model = 'Cisco Chassis ASR9006'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.782') { $details->model = 'Cisco Chassis ASR14K4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.783') { $details->model = 'Cisco Chassis ASR14K8'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.784') { $details->model = 'Cisco Chassis Cat 3560v224tsD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.785') { $details->model = 'Cisco Chassis Cat 3560v224ts'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.786') { $details->model = 'Cisco Chassis Cat 3560v224ps'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.787') { $details->model = 'Cisco Chassis Cat 3750v224ts'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.788') { $details->model = 'Cisco Chassis Cat 3750v224ps'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.789') { $details->model = 'Cisco Chassis Cat 3560v248ts'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.79') { $details->model = 'Cisco Chassis Cat 2912XL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.790') { $details->model = 'Cisco Chassis Cat 3560v248ps'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.791') { $details->model = 'Cisco Chassis Cat 3750v248ts'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.792') { $details->model = 'Cisco Chassis Cat 3750v248ps'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.793') { $details->model = 'Cisco Chassis Airbr1430'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.794') { $details->model = 'Cisco Chassis NamApp2204rj45'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.795') { $details->model = 'Cisco Chassis NamApp2220'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.796') { $details->model = 'Cisco Chassis AIRAP1141'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.797') { $details->model = 'Cisco Chassis AIRAP1142'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.798') { $details->model = 'Cisco Nexus 5010 pBf'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.799') { $details->model = 'Cisco Chassis ASR9010DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.8') { $details->model = 'Cisco Chassis 2505'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.80') { $details->model = 'Cisco Chassis Cat 2924MXL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.800') { $details->model = 'Cisco Chassis ASR9006DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.801') { $details->model = 'Cisco Chassis 18xxx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.802') { $details->model = 'Cisco Chassis c887Vdsl2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.803') { $details->model = 'Cisco Chassis C1941'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.804') { $details->model = 'Cisco Chassis C2901'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.805') { $details->model = 'Cisco Chassis C2911'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.806') { $details->model = 'Cisco Chassis C2921'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.807') { $details->model = 'Cisco Chassis C2951'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.808') { $details->model = 'Cisco Chassis C3925'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.809') { $details->model = 'Cisco Chassis C3945'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.81') { $details->model = 'Cisco Chassis Cat 2912MfXL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.810') { $details->model = 'Cisco Chassis Esw52024pK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.811') { $details->model = 'Cisco Chassis Esw54024pK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.812') { $details->model = 'Cisco Chassis Esw52048pK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.813') { $details->model = 'Cisco Chassis Esw52024K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.814') { $details->model = 'Cisco Chassis Esw54024K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.815') { $details->model = 'Cisco Chassis Esw52048K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.816') { $details->model = 'Cisco Chassis Esw54048K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.817') { $details->model = 'Cisco Chassis NamApp2204sfp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.818') { $details->model = 'Cisco Chassis SR520T1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.82') { $details->model = 'Cisco Chassis 1538M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.820') { $details->model = 'Cisco Chassis N2kC2148T1GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.827') { $details->model = 'Cisco Chassis C1941W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.828') { $details->model = 'Cisco Chassis C888E'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.829') { $details->model = 'Cisco Chassis C888EG'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.83') { $details->model = 'Cisco Chassis 1548M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.830') { $details->model = 'Cisco Chassis Iad888EF'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.831') { $details->model = 'Cisco Chassis Iad888EB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.832') { $details->model = 'Cisco Chassis C888ESRST'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.833') { $details->model = 'Cisco Chassis 3845nv'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.834') { $details->model = 'Cisco Chassis 3825nv'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.836') { $details->model = 'Cisco Chassis Cat 235048TD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.837') { $details->model = 'Cisco Chassis 887M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.838') { $details->model = 'Cisco Chassis ASR9010AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.839') { $details->model = 'Cisco Chassis ASR9006AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.84') { $details->model = 'Cisco Chassis Fasthub100'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.840') { $details->model = 'Cisco Nexus 1000V'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.841') { $details->model = 'Cisco MDS 9148 Multilayer Fabric Switch'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.843') { $details->model = 'Cisco MDS 9148 Multilayer Fabric Switch'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.847') { $details->model = 'Cisco UCS 6120XP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.848') { $details->model = 'Cisco Chassis CDScde420'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.849') { $details->model = 'Cisco Chassis CDScde220'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.85') { $details->model = 'Cisco Chassis PIX Firewall '; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.850') { $details->model = 'Cisco Chassis CDScde110'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.851') { $details->model = 'Cisco Chassis CeVirtualBlade'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.852') { $details->model = 'Cisco Chassis ASR1002F'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.853') { $details->model = 'Cisco Chassis ADE2120'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.86') { $details->model = 'Cisco Chassis MGX 8850'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.860') { $details->model = 'Cisco Chassis AIRAP3501'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.861') { $details->model = 'Cisco Chassis AIRAP3502'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.862') { $details->model = 'Cisco Chassis CDScde200'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.863') { $details->model = 'Cisco Chassis CDScde100'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.864') { $details->model = 'Cisco Chassis CDScde300'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.865') { $details->model = 'Cisco Chassis CDScde400'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.869') { $details->model = 'Cisco Chassis Sps2004B'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.87') { $details->model = 'Cisco Chassis MGX 8820'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.870') { $details->model = 'Cisco Chassis Sps204B'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.874') { $details->model = 'Cisco Chassis Ap541nAK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.875') { $details->model = 'Cisco Chassis Ap541nEK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.876') { $details->model = 'Cisco Chassis Ap541nNK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.877') { $details->model = 'Cisco Chassis SRP521'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.878') { $details->model = 'Cisco Chassis SRP526'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.879') { $details->model = 'Cisco Chassis SRP527'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.88') { $details->model = 'Cisco Chassis Cat 8510Msr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.880') { $details->model = 'Cisco Chassis SRP541'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.881') { $details->model = 'Cisco Chassis SRP546'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.882') { $details->model = 'Cisco Chassis SRP547'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.883') { $details->model = 'Cisco Chassis VS510FXO'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.884') { $details->model = 'Cisco Chassis 887GVdsl2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.885') { $details->model = 'Cisco Chassis 887SrstVdsl2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.89') { $details->model = 'Cisco Chassis Cat 8515Msr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.895') { $details->model = 'Cisco Chassis 59xx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.896') { $details->model = 'Cisco Chassis Cat 296024LCS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.897') { $details->model = 'Cisco Chassis Cat 296024PCS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.898') { $details->model = 'Cisco Chassis Cat 296048PSTS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.899') { $details->model = 'Cisco UCS 6140XP'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.9') { $details->model = 'Cisco Chassis 2506'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.90') { $details->model = 'Cisco Chassis IGX8410'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.900') { $details->model = 'Cisco Chassis NMWAE900'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.901') { $details->model = 'Cisco Chassis NMWAE700'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.902') { $details->model = 'Cisco Chassis 5940'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.903') { $details->model = 'Cisco Nexus 4001 for IBM BladeCenter'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.904') { $details->model = 'Cisco Chassis ASR1001'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.905') { $details->model = 'Cisco Chassis ASR1013'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.906') { $details->model = 'Cisco Chassis CDScde205'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.907') { $details->model = 'Cisco Nexus 1010'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.908') { $details->model = 'Cisco Chassis Raie1783Rms06t'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.909') { $details->model = 'Cisco Chassis Raie1783Rms10t'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.91') { $details->model = 'Cisco Chassis IGX8420'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.910') { $details->model = 'Cisco Chassis MXE5600'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.911') { $details->model = 'Cisco Chassis Esw5408pK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.912') { $details->model = 'Cisco Chassis Esw5208pK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.913') { $details->model = 'Cisco Chassis N2kC2232PP10GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.914') { $details->model = 'Cisco Chassis N2kC2248TP1GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.915') { $details->model = 'Cisco Chassis Cat 4948e10GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.92') { $details->model = 'Cisco Chassis IGX8430'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.928') { $details->model = 'Cisco Chassis 1921k9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.929') { $details->model = 'Cisco Chassis 1905k9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.93') { $details->model = 'Cisco Chassis IGX8450'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.930') { $details->model = 'Cisco Nexus 4005 for IBM BladeCenter'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.931') { $details->model = 'Cisco Chassis ASA 5585'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.932') { $details->model = 'Cisco Nexus 7009'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.933') { $details->model = 'Cisco Chassis Mwr2941DcA'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.937') { $details->model = 'Cisco Chassis OeNm302'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.938') { $details->model = 'Cisco Chassis OeNm502'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.939') { $details->model = 'Cisco Chassis OeNm522'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.940') { $details->model = 'Cisco Chassis OeSmSre700'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.941') { $details->model = 'Cisco Chassis OeSmSre900'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.944') { $details->model = 'Cisco Chassis CDScde2202s3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.95') { $details->model = 'Cisco Chassis BPX8620'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.957') { $details->model = 'Cisco Chassis 1841Ck9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.958') { $details->model = 'Cisco Chassis 2801Ck9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.959') { $details->model = 'Cisco Chassis 2811Ck9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.96') { $details->model = 'Cisco Chassis BPX8650'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.960') { $details->model = 'Cisco Chassis 2821Ck9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.962') { $details->model = 'Cisco Chassis 3825Ck9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.963') { $details->model = 'Cisco Chassis 3845Ck9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.966') { $details->model = 'Cisco Chassis AIRAP1262'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.967') { $details->model = 'Cisco Chassis AIRAP1261'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.968') { $details->model = 'Cisco Chassis 892F'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.969') { $details->model = 'Cisco Chassis Me3600x24fsM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.97') { $details->model = 'Cisco Chassis BPX8680'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.970') { $details->model = 'Cisco Chassis Me3600x24tsM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.971') { $details->model = 'Cisco Chassis Me3800x24fsM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.972') { $details->model = 'Cisco Chassis CGR2010'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.973') { $details->model = 'Cisco Chassis Cat 2960s48tsS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.974') { $details->model = 'Cisco Chassis Cat 2960s24tsS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.975') { $details->model = 'Cisco Chassis Cat 2960s48fpdL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.976') { $details->model = 'Cisco Chassis Cat 2960s48lpdL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.977') { $details->model = 'Cisco Chassis Cat 2960s48tdL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.978') { $details->model = 'Cisco Chassis Cat 2960s24pdL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.979') { $details->model = 'Cisco Chassis Cat 2960s24tdL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.98') { $details->model = 'Cisco Chassis CacheEngine'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.980') { $details->model = 'Cisco Chassis Cat 2960s48fpsL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.981') { $details->model = 'Cisco Chassis Cat 2960s48lpsL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.983') { $details->model = 'Cisco Chassis Cat 2960s48tsL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.984') { $details->model = 'Cisco Chassis Cat 2960S24tsL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.985') { $details->model = 'Cisco Chassis 1906Ck9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.986') { $details->model = 'Cisco Chassis AIRAP1042'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.987') { $details->model = 'Cisco Chassis AIRAP1041'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.988') { $details->model = 'Cisco Chassis 887Va'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.989') { $details->model = 'Cisco Chassis 886Va'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.99') { $details->model = 'Cisco Chassis Cat 6000'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.990') { $details->model = 'Cisco Chassis 867Va'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.991') { $details->model = 'Cisco Chassis 887VaM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.992') { $details->model = 'Cisco Chassis ASR1001IDC2pOc3Pos'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.993') { $details->model = 'Cisco Chassis ASR1001IDC4pT3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.994') { $details->model = 'Cisco Chassis ASR1001IDC4pGE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.995') { $details->model = 'Cisco Chassis ASR1001IDC8pCT1E1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.996') { $details->model = 'Cisco Chassis ASR1001IDCHDD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.997') { $details->model = 'Cisco Chassis Cat 2960cPD8TT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.998') { $details->model = 'Cisco Chassis CGS252024TC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.3.999') { $details->model = 'Cisco Chassis CGS252016S8PC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4') { $details->model = 'Cisco Backplane '; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.10') { $details->model = 'Cisco Backplane MGX 8820'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.11') { $details->model = 'Cisco Backplane BPX Ses'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.12') { $details->model = 'Cisco Backplane IGX Ses'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.13') { $details->model = 'Cisco Backplane Cat 6000'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.14') { $details->model = 'Cisco Backplane Cat 6500'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.15') { $details->model = 'Cisco Backplane MGX 8950'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.16') { $details->model = 'Cisco Backplane ONS 15540 Fixed'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.18') { $details->model = 'Cisco Backplane Cat 4006'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.19') { $details->model = 'Cisco Backplane MGX 8830'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.20') { $details->model = 'Cisco Backplane ONS 15530'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.23') { $details->model = 'Cisco Backplane Cat 4507'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.24') { $details->model = 'Cisco Backplane Cat 4503'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.25') { $details->model = 'Cisco Backplane Cat 4506'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.26') { $details->model = 'Cisco Backplane DSC 9506'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.27') { $details->model = 'Cisco Backplane DSC 9509'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.28') { $details->model = 'Cisco Backplane DSC 9513'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.29') { $details->model = 'Cisco Backplane ONS 15540 ESPx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.30') { $details->model = 'Cisco Backplane Unknown'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.31') { $details->model = 'Cisco Backplane Cat 4510'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.32') { $details->model = 'Cisco Backplane DSC 9140 K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.33') { $details->model = 'Cisco Backplane BMG X8850'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.34') { $details->model = 'Cisco Backplane BMG X8950'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.35') { $details->model = 'Cisco Backplane 7600'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.36') { $details->model = 'Cisco Backplane BMG X8830'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.37') { $details->model = 'Cisco Backplane DSC 9216AK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.38') { $details->model = 'Cisco Backplane MGX 8880'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.39') { $details->model = 'Cisco Backplane 6Slots RCON 8850'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.4') { $details->model = 'Cisco Backplane Atm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.40') { $details->model = 'Cisco Backplane 4 Slots RCON8850'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.41') { $details->model = 'Cisco Backplane 4 Slots RCON8830'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.42') { $details->model = 'Cisco Backplane DSX 9116K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.43') { $details->model = 'Cisco Backplane ONS 15310'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.48') { $details->model = 'Cisco Backplane Cat 4503e'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.49') { $details->model = 'Cisco Backplane Cat 4506e'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.5') { $details->model = 'Cisco Backplane Cat 5500'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.50') { $details->model = 'Cisco Backplane Cat 4507re'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.51') { $details->model = 'Cisco Backplane Cat 4510re'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.52') { $details->model = 'Cisco Backplane N7K c7010'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.53') { $details->model = 'Cisco Backplane Cat Rfgw'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.55') { $details->model = 'Cisco Backplane N7K c7018'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.56') { $details->model = 'Cisco Backplane MXE 5600'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.57') { $details->model = 'Cisco Backplane N7K c7009'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.6') { $details->model = 'Cisco Backplane Cat 6400'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.61') { $details->model = 'Cisco Backplane N7K c7004'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.7') { $details->model = 'Cisco Backplane Cat 8510'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.8') { $details->model = 'Cisco Backplane Cat 8540'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.4.9') { $details->model = 'Cisco Backplane MGX 8850'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5') { $details->model = 'Cisco Container '; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.1') { $details->model = 'Cisco Container Slot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.100') { $details->model = 'Cisco Container ONS15530CardSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.102') { $details->model = 'Cisco Container ONS15530FanTraySlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.103') { $details->model = 'Cisco Container ONS15530PSSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.104') { $details->model = 'Cisco Container ONS15530SubCardSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.105') { $details->model = 'Cisco Container ONS15530PortSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.106') { $details->model = 'Cisco Container ONS15540PortSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.111') { $details->model = 'Cisco Container Cat4kContainerPSBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.114') { $details->model = 'Cisco Container SPABay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.115') { $details->model = 'Cisco Container SFP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.116') { $details->model = 'Cisco Container GsrAlarmSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.117') { $details->model = 'Cisco Container GsrPowerSupplySlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.118') { $details->model = 'Cisco Container GsrFanBlowerSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.119') { $details->model = 'Cisco Container GsrSwitchFabricSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.12') { $details->model = 'Cisco Container PCMCIA'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.120') { $details->model = 'Cisco Container ONS15252CardSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.121') { $details->model = 'Cisco Container ONS15201CardSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.122') { $details->model = 'Cisco Container SupFabricSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.123') { $details->model = 'Cisco Container LineCardSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.124') { $details->model = 'Cisco Container 9506PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.125') { $details->model = 'Cisco Container 9509PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.126') { $details->model = 'Cisco Container 9513PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.127') { $details->model = 'Cisco Container 9506FanBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.128') { $details->model = 'Cisco Container 9509FanBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.129') { $details->model = 'Cisco Container 9513FanBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.130') { $details->model = 'Cisco Container 9216FanBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.131') { $details->model = 'Cisco Container 9216PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.132') { $details->model = 'Cisco Container C7300CCPA'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.133') { $details->model = 'Cisco Container PABay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.134') { $details->model = 'Cisco Chassis Cr4430'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.135') { $details->model = 'Cisco Mgx2uPlenumFanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.136') { $details->model = 'Cisco Container MDSPowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.137') { $details->model = 'Cisco Container MDSFanTrayBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.138') { $details->model = 'Cisco Container FlashCardSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.139') { $details->model = 'Cisco Container FanTraySlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.140') { $details->model = 'Cisco Container PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.141') { $details->model = 'Cisco Container PowerSupply'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.142') { $details->model = 'Cisco Container Gbic'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.143') { $details->model = 'Cisco Container Crs1RPSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.144') { $details->model = 'Cisco Container Crs1LCDRPSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.145') { $details->model = 'Cisco Container Crs1FabricSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.146') { $details->model = 'Cisco Container Crs1AlarmSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.147') { $details->model = 'Cisco Container Crs1PowerSupplySlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.148') { $details->model = 'Cisco Container Crs1FanSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.149') { $details->model = 'Cisco Container PowerSupplySlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.150') { $details->model = 'Cisco Container Vtt'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.151') { $details->model = 'Cisco Container Clock'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.152') { $details->model = 'Cisco Container 10GigBasePort'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.153') { $details->model = 'Cisco Container Umg9820ProcessorCard'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.154') { $details->model = 'Cisco Container Umg9820PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.155') { $details->model = 'Cisco Container Umg9820QamModuleSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.156') { $details->model = 'Cisco Container Umg9820FanTraySlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.157') { $details->model = 'Cisco Container 9116FanBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.158') { $details->model = 'Cisco Container 9116PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.159') { $details->model = 'Cisco Container ONS15310CardSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.16') { $details->model = 'Cisco Container DSPModuleSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.160') { $details->model = 'Cisco Container GSR6Blwr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.161') { $details->model = 'Cisco Container GSR10GSR16Blwr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.162') { $details->model = 'Cisco Container 9513RearFanBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.163') { $details->model = 'Cisco Container FabricSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.164') { $details->model = 'Cisco Container Crs18RPSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.165') { $details->model = 'Cisco Container Crs18FabricSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.166') { $details->model = 'Cisco Container Crs1FabricShelfControllerSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.167') { $details->model = 'Cisco Container Crs1FabricSwitchFabricSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.168') { $details->model = 'Cisco Container Crs1FabricFiberModuleSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.169') { $details->model = 'Cisco Container Crs1FabricLEDModuleSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.17') { $details->model = 'Cisco Container Cat8500Carrier'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.170') { $details->model = 'Cisco Power Supply Crs1PowerSupplyShelf'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.171') { $details->model = 'Cisco Container Transceiver'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.173') { $details->model = 'Cisco Container 9124PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.174') { $details->model = 'Cisco Container 9124FanBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.175') { $details->model = 'Cisco Container C3KPowerSupply'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.176') { $details->model = 'Cisco Container C3KRemotePowerSupply'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.177') { $details->model = 'Cisco Container C3KBlower'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.178') { $details->model = 'Cisco Container 9222iFanBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.179') { $details->model = 'Cisco Container N7Kc7010PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.18') { $details->model = 'Cisco Container Cat8500CpuSwitchAndFeature'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.180') { $details->model = 'Cisco Container N7KC7010MainFanBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.181') { $details->model = 'Cisco Container N7KC7010FabricFanBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.182') { $details->model = 'Cisco Container ASR1000RPSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.183') { $details->model = 'Cisco Container ASR1000FPSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.184') { $details->model = 'Cisco Container ASR1000CCSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.185') { $details->model = 'Cisco Container ASR1000PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.186') { $details->model = 'Cisco Container N5kC5020FanBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.187') { $details->model = 'Cisco Container N5kC5020PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.188') { $details->model = 'Cisco Container ASR9KFanTraySlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.189') { $details->model = 'Cisco Container ASR9KPowerSupplySlotDC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.19') { $details->model = 'Cisco Container Cat8500CpuSwitchAndFeaturePFQ'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.190') { $details->model = 'Cisco Container ASR9KPowerSupplySlotAC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.191') { $details->model = 'Cisco Container ASR9KRSPSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.192') { $details->model = 'Cisco Container ASR9KLCSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.193') { $details->model = 'Cisco Container N7Kc7018PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.194') { $details->model = 'Cisco Container N7KC7018FanBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.195') { $details->model = 'Cisco Container Crs1PowerShelfSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.196') { $details->model = 'Cisco Container N5kC5010FanBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.197') { $details->model = 'Cisco Container N5kC5010PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.198') { $details->model = 'Cisco Container XFP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.199') { $details->model = 'Cisco Container Asr14kPowerSupplySlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.2') { $details->model = 'Cisco Container DaughterCard'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.20') { $details->model = 'Cisco Container Cat8500SuperCarrier'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.200') { $details->model = 'Cisco Container Asr14kPowerShelfSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.201') { $details->model = 'Cisco Container Asr14kFanTraySlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.202') { $details->model = 'Cisco Container Asr14kFabricCardSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.203') { $details->model = 'Cisco Container Asr14kFPSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.204') { $details->model = 'Cisco Container Asr14kRPSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.205') { $details->model = 'Cisco Container HardDiskSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.206') { $details->model = 'Cisco Container NexusLogicalFabric'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.207') { $details->model = 'Cisco Container N2kC2148T1GEPowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.208') { $details->model = 'Cisco Container N2kC2148T1GEFanBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.209') { $details->model = 'Cisco Container UCSN10S6100FanBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.21') { $details->model = 'Cisco Container Cat8500CpuRoute'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.210') { $details->model = 'Cisco Container UCSN10S6100PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.213') { $details->model = 'Cisco Container MXE5600PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.214') { $details->model = 'Cisco Container MXE5600FanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.218') { $details->model = 'Cisco Container N2kC2248TP1GEPowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.219') { $details->model = 'Cisco Container N7Kc7009PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.22') { $details->model = 'Cisco Container Cat8500Switch10GAndFC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.220') { $details->model = 'Cisco Container N7KC7009FanBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.222') { $details->model = 'Cisco Container FlexStackModuleSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.223') { $details->model = 'Cisco Container MXE5600ShelfManagerBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.224') { $details->model = 'Cisco Container MXE5600NpmSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.225') { $details->model = 'Cisco Container MXE5600MpmSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.226') { $details->model = 'Cisco Container N5KC5548FanBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.227') { $details->model = 'Cisco Container N5kC5548PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.228') { $details->model = 'Cisco Container Crs18PowerShelfVirtual'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.23') { $details->model = 'Cisco Container Cat8500Switch10GNoFC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.230') { $details->model = 'Cisco Container SAMBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.231') { $details->model = 'Cisco Container N5KC5596FanBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.232') { $details->model = 'Cisco Container N5kC5596PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.235') { $details->model = 'Cisco Container N3KC3064FanBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.236') { $details->model = 'Cisco Container UCS6248FanBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.237') { $details->model = 'Cisco Container UCS6248PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.238') { $details->model = 'Cisco Container UCS6296FanBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.239') { $details->model = 'Cisco Container UCS6296PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.24') { $details->model = 'Cisco Container DslamSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.240') { $details->model = 'Cisco Container DIMM8541Slot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.241') { $details->model = 'Cisco Container DIMM7571Slot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.242') { $details->model = 'Cisco Container DIMM7541Slot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.243') { $details->model = 'Cisco Container DIMM694Slot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.244') { $details->model = 'Cisco Container DIMM594Slot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.245') { $details->model = 'Cisco Container DIMM294Slot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.246') { $details->model = 'Cisco Container ASR900RSPSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.247') { $details->model = 'Cisco Container ASR900PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.248') { $details->model = 'Cisco Container ASR900FanTrayBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.249') { $details->model = 'Cisco Container IMBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.25') { $details->model = 'Cisco Container C6260PsSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.250') { $details->model = 'Cisco Container N7Kc7004FanBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.251') { $details->model = 'Cisco Container N7Kc7004PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.252') { $details->model = 'Cisco Container N3KC3048FanBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.26') { $details->model = 'Cisco Container C6260FanSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.264') { $details->model = 'Cisco Container ASR9KSwitchFabricSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.265') { $details->model = 'Cisco Container CFP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.27') { $details->model = 'Cisco Container DslamControllerSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.28') { $details->model = 'Cisco Container DslamNi2DcSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.31') { $details->model = 'Cisco Container PsmSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.32') { $details->model = 'Cisco Container SmSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.33') { $details->model = 'Cisco Container MGX8800FanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.34') { $details->model = 'Cisco Container SrmSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.35') { $details->model = 'Cisco Container MGX8800ACPSTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.36') { $details->model = 'Cisco Container SESFanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.37') { $details->model = 'Cisco Container 12012TopBlowerBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.38') { $details->model = 'Cisco Container 12012BottomBlowerBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.39') { $details->model = 'Cisco Container 12012ModuleBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.40') { $details->model = 'Cisco Container 12012SwitchFabricBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.41') { $details->model = 'Cisco Container 12012PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.42') { $details->model = 'Cisco Container 12008PowerBlowerBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.43') { $details->model = 'Cisco Container 12008MainBlowerBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.44') { $details->model = 'Cisco Container 12008ModuleBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.45') { $details->model = 'Cisco Container 12008SwitchFabricBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.46') { $details->model = 'Cisco Container 12008PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.48') { $details->model = 'Cisco Container C6160PsSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.49') { $details->model = 'Cisco Container C6160FanSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.52') { $details->model = 'Cisco Container MGXXm60Slot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.55') { $details->model = 'Cisco Container Cat8500CMPMCarrier'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.56') { $details->model = 'Cisco Container 12010TopBlowerBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.57') { $details->model = 'Cisco Container 12010BottomBlowerBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.58') { $details->model = 'Cisco Container 12010UpperModuleBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.59') { $details->model = 'Cisco Container 12010LowerModuleBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.60') { $details->model = 'Cisco Container 12010SwitchFabricBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.61') { $details->model = 'Cisco Container 12010PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.62') { $details->model = 'Cisco Container 12010PowerBlowerBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.63') { $details->model = 'Cisco Container 12010MainBlowerBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.64') { $details->model = 'Cisco Container 12406ModuleBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.65') { $details->model = 'Cisco Container 12406FabricAlarmBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.66') { $details->model = 'Cisco Container 12406PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.67') { $details->model = 'Cisco Container 12406MainBlowerBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.68') { $details->model = 'Cisco Container 12410TopBlowerBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.69') { $details->model = 'Cisco Container 12410BottomBlowerBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.70') { $details->model = 'Cisco Container 12410UpperModuleBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.71') { $details->model = 'Cisco Container 12410LowerModuleBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.72') { $details->model = 'Cisco Container 12410SwitchFabricBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.73') { $details->model = 'Cisco Container 12410PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.74') { $details->model = 'Cisco Container 12410PowerBlowerBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.75') { $details->model = 'Cisco Container 12410MainBlowerBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.76') { $details->model = 'Cisco Container ONS15540CardSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.77') { $details->model = 'Cisco Container ONS15540FanTraySlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.78') { $details->model = 'Cisco Container ONS15540TspSubslot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.79') { $details->model = 'Cisco Container ONS15540MDXSubslot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.80') { $details->model = 'Cisco Container ONS15540SubCardSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.81') { $details->model = 'Cisco Container 12404ModuleBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.82') { $details->model = 'Cisco Container 12404FabricAlarmBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.83') { $details->model = 'Cisco Container 12404PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.84') { $details->model = 'Cisco Container 12404MainBlowerBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.85') { $details->model = 'Cisco Container C7304PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.86') { $details->model = 'Cisco Container C10KSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.87') { $details->model = 'Cisco Container C10KPowerSupplySlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.88') { $details->model = 'Cisco Container C10KFanTraySlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.89') { $details->model = 'Cisco Container C10KFlashCardSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.90') { $details->model = 'Cisco Container Cat4kFanTrayBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.91') { $details->model = 'Cisco Container Cat4kPowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.92') { $details->model = 'Cisco Container Cat4kPEMBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.93') { $details->model = 'Cisco Container 12016PowerBlowerBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.94') { $details->model = 'Cisco Container 12016LowerModuleBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.95') { $details->model = 'Cisco Container 12016SwitchFabricBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.96') { $details->model = 'Cisco Container 12016PowerSupplyBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.97') { $details->model = 'Cisco Container 12016TopBlowerBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.98') { $details->model = 'Cisco Container 12016BottomBlowerBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.5.99') { $details->model = 'Cisco Container 12016UpperModuleBay'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6') { $details->model = 'Cisco Power Supply '; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.1') { $details->model = 'Cisco Power Supply AC1360W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.10') { $details->model = 'Cisco Power Supply AC1200W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.100') { $details->model = 'Cisco Power Supply Crs1PowerSupply'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.101') { $details->model = 'Cisco Power Supply Crs1PowerZone'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.102') { $details->model = 'Cisco Power Supply AC6000W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.103') { $details->model = 'Cisco Power Supply Dc150W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.104') { $details->model = 'Cisco Power Supply AC2700W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.105') { $details->model = 'Cisco Power Supply DC2700W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.106') { $details->model = 'Cisco Power Supply PwrC45300AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.107') { $details->model = 'Cisco Power Supply PwrC45300DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.108') { $details->model = 'Cisco Power Supply AC2900WE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.109') { $details->model = 'Cisco Power Supply AC6000WE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.11') { $details->model = 'Cisco Power Supply DC1200W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.110') { $details->model = 'Cisco Power Supply AC8700WE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.111') { $details->model = 'Cisco Power Supply PWR2700AC4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.112') { $details->model = 'Cisco Power Supply PWR2700DC4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.113') { $details->model = 'Cisco Power Supply PWRC49AC300W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.114') { $details->model = 'Cisco Power Supply PWRC49DC300W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.115') { $details->model = 'Cisco Power Supply GSR6PemAC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.116') { $details->model = 'Cisco Power Supply GSR6PemDC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.117') { $details->model = 'Cisco Power Supply GSR10PemAC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.118') { $details->model = 'Cisco Power Supply GSR10PemDC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.119') { $details->model = 'Cisco Power Supply GSR4PemAC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.12') { $details->model = 'Cisco Power Supply Pem'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.120') { $details->model = 'Cisco Power Supply GSR4PemDC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.121') { $details->model = 'Cisco Power Supply GSR16PemAC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.122') { $details->model = 'Cisco Power Supply GSR16PemDC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.123') { $details->model = 'Cisco Power Supply C451400DCSP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.124') { $details->model = 'Cisco Power Supply Ac125W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.125') { $details->model = 'Cisco Power Supply Ac60W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.126') { $details->model = 'Cisco Power Supply C454200ACv'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.127') { $details->model = 'Cisco Power Supply 400wDC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.128') { $details->model = 'Cisco Power Supply Enh12404AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.129') { $details->model = 'Cisco Power Supply Enh12404DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.13') { $details->model = 'Cisco Power Supply AC2000W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.130') { $details->model = 'Cisco Power Supply Enh12406AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.131') { $details->model = 'Cisco Power Supply Enh12406DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.132') { $details->model = 'Cisco Power Supply Enh12410AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.133') { $details->model = 'Cisco Power Supply Enh12410DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.134') { $details->model = 'Cisco Power Supply Enh12416AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.135') { $details->model = 'Cisco Power Supply Enh12416DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.136') { $details->model = 'Cisco Power Supply 76xxDC2500W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.137') { $details->model = 'Cisco Power Supply 76xxAC3000W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.138') { $details->model = 'Cisco Power Supply 76xxAC4000US'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.139') { $details->model = 'Cisco Power Supply 76xxAC4000INT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.14') { $details->model = 'Cisco Power Supply DC2000W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.140') { $details->model = 'Cisco Power Supply 76xxAC6000W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.141') { $details->model = 'Cisco Power Supply DC100W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.144') { $details->model = 'Cisco Power Supply DsCAD6000W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.145') { $details->model = 'Cisco Power Supply Cat2960AC60W12V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.146') { $details->model = 'Cisco Power Supply Cat2960AC125W12V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.147') { $details->model = 'Cisco Power Supply Cat2960AC210W12V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.148') { $details->model = 'Cisco Power Supply 6340PWRDC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.149') { $details->model = 'Cisco Power Supply 6340PWRAC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.15') { $details->model = 'Cisco Power Supply 6260DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.150') { $details->model = 'Cisco Power Supply Ubr10012AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.151') { $details->model = 'Cisco Power Supply Ubr10012DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.152') { $details->model = 'Cisco Power Supply 400wAC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.153') { $details->model = 'Cisco Power Supply CE500AC60W12V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.154') { $details->model = 'Cisco Power Supply CE500AC375W48V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.155') { $details->model = 'Cisco Power Supply CE500AC75W48V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.156') { $details->model = 'Cisco Power Supply CE500AC168W12V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.157') { $details->model = 'Cisco Power Supply Cat3750AC210W12V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.158') { $details->model = 'Cisco Power Supply Cat3750AC375W48V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.159') { $details->model = 'Cisco Power Supply AC50W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.16') { $details->model = 'Cisco Power Supply 6260AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.160') { $details->model = 'Cisco Power Supply DC50W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.161') { $details->model = 'Cisco Power Supply Crs116PowerShelfACDelta'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.162') { $details->model = 'Cisco Power Supply Crs116PowerShelfACWye'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.163') { $details->model = 'Cisco Power Supply Crs116PowerShelfDC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.164') { $details->model = 'Cisco Power Supply Crs116ACRectifier'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.165') { $details->model = 'Cisco Power Supply Crs116DCPEM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.167') { $details->model = 'Cisco Power Supply DsCac3000W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.168') { $details->model = 'Cisco Power Supply PWR6000DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.169') { $details->model = 'Cisco Power Supply Crs18ACRectifier'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.17') { $details->model = 'Cisco Power Supply MGX8800Pem'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.170') { $details->model = 'Cisco Power Supply Crs18DCPem'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.171') { $details->model = 'Cisco Power Supply Crs18ACDelta'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.172') { $details->model = 'Cisco Power Supply Crs18ACW'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.173') { $details->model = 'Cisco Power Supply Crs18DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.174') { $details->model = 'Cisco Power Supply Crs18PduACD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.175') { $details->model = 'Cisco Power Supply Crs18PduACW'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.176') { $details->model = 'Cisco Power Supply Crs18PduDC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.177') { $details->model = 'Cisco Power Supply Crs1FcACD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.178') { $details->model = 'Cisco Power Supply Crs1FcACW'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.179') { $details->model = 'Cisco Power Supply Crs1FcDC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.18') { $details->model = 'Cisco Power Supply 12012DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.180') { $details->model = 'Cisco Power Supply Crs14PowerShelfAC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.181') { $details->model = 'Cisco Power Supply Crs14PowerShelfDC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.182') { $details->model = 'Cisco Power Supply Crs14PowerSupplyDC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.183') { $details->model = 'Cisco Power Supply Crs14PowerSupplyAC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.184') { $details->model = 'Cisco Power Supply C3KPWR265WAC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.185') { $details->model = 'Cisco Power Supply C3KPWR265WDC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.186') { $details->model = 'Cisco Power Supply C3KPWR750WAC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.188') { $details->model = 'Cisco Power Supply Cat2960AC36W12V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.189') { $details->model = 'Cisco Power Supply Cat3560AC173W48V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.19') { $details->model = 'Cisco Power Supply 12012AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.190') { $details->model = 'Cisco Power Supply AC345'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.191') { $details->model = 'Cisco Power Supply C3KPWR1150WAC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.192') { $details->model = 'Cisco Power Supply PwrRPS2300'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.193') { $details->model = 'Cisco Power Supply Crs14DcPim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.194') { $details->model = 'Cisco Power Supply DC1500W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.195') { $details->model = 'Cisco Power Supply C7201AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.196') { $details->model = 'Cisco Power Supply C7201DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.197') { $details->model = 'Cisco Power Supply CE520AC173W48V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.198') { $details->model = 'Cisco Power Supply AC100W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.199') { $details->model = 'Cisco Power Supply N7KAC5600W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.2') { $details->model = 'Cisco Power Supply DC1360W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.20') { $details->model = 'Cisco Power Supply 12008DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.200') { $details->model = 'Cisco Power Supply ASR1002AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.201') { $details->model = 'Cisco Power Supply ASR1002DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.202') { $details->model = 'Cisco Power Supply ASR1004AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.203') { $details->model = 'Cisco Power Supply ASR1004DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.204') { $details->model = 'Cisco Power Supply ASR1006AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.205') { $details->model = 'Cisco Power Supply ASR1006DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.206') { $details->model = 'Cisco Power Supply ASR1000Unknown'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.207') { $details->model = 'Cisco Power Supply C49M1000AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.208') { $details->model = 'Cisco Power Supply C49M1000DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.209') { $details->model = 'Cisco Power Supply N7KAC7500W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.21') { $details->model = 'Cisco Power Supply 12008AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.210') { $details->model = 'Cisco Power Supply CE520LCAC135W12V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.211') { $details->model = 'Cisco Power Supply CE520PCAC558W12V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.212') { $details->model = 'Cisco Power Supply CE520TTAC60W12V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.213') { $details->model = 'Cisco Power Supply CE520GTCAC125W12V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.214') { $details->model = 'Cisco Power Supply N7KAC6000W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.215') { $details->model = 'Cisco Power Supply Dc4500W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.216') { $details->model = 'Cisco Power Supply IE3000AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.217') { $details->model = 'Cisco Power Supply N5kPac1200W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.218') { $details->model = 'Cisco Power Supply Cat2918AC60W12V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.22') { $details->model = 'Cisco Power Supply DC2500W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.220') { $details->model = 'Cisco Power Supply C3KPWR300WAC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.221') { $details->model = 'Cisco Power Supply C3KPWR300WDC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.222') { $details->model = 'Cisco Power Supply DCPowerSupply'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.223') { $details->model = 'Cisco Power Supply ACPowerSupply'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.228') { $details->model = 'Cisco Power Supply N7KAC7500WINT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.229') { $details->model = 'Cisco Power Supply N7KAC7500WUS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.23') { $details->model = 'Cisco Power Supply AC1050W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.230') { $details->model = 'Cisco Power Supply N5kPac550W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.231') { $details->model = 'Cisco Power Supply ASR9KDC2100W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.232') { $details->model = 'Cisco Power Supply ASR9KDC1500W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.233') { $details->model = 'Cisco Power Supply ASR9KAC3KW'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.234') { $details->model = 'Cisco Power Supply Crs16dcPemB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.235') { $details->model = 'Cisco Power Supply C3900PWRPOE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.236') { $details->model = 'Cisco Power Supply C3900PWRAC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.237') { $details->model = 'Cisco Power Supply C2921C2951PWRPOE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.238') { $details->model = 'Cisco Power Supply C2921C2951PWRAC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.239') { $details->model = 'Cisco Power Supply C2911PWRPOE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.24') { $details->model = 'Cisco Power Supply AC2500W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.240') { $details->model = 'Cisco Power Supply C2911PWRAC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.241') { $details->model = 'Cisco Power Supply C2901PWRPOE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.242') { $details->model = 'Cisco Power Supply C1941C2901PWRAC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.243') { $details->model = 'Cisco Power Supply C1941PWRPOE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.244') { $details->model = 'Cisco Power Supply C3900PWRDC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.245') { $details->model = 'Cisco Power Supply C2921C2951PWRDC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.246') { $details->model = 'Cisco Power Supply C2911PWRDC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.247') { $details->model = 'Cisco Power Supply C2921C2951RPSADPTR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.248') { $details->model = 'Cisco Power Supply C2911RPSADPTR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.249') { $details->model = 'Cisco Power Supply N2kPac200W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.25') { $details->model = 'Cisco Power Supply 6160DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.250') { $details->model = 'Cisco Power Supply C456000ACV'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.251') { $details->model = 'Cisco Power Supply UCS N10PAC1550W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.253') { $details->model = 'Cisco Power Supply N7KDC6000W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.254') { $details->model = 'Cisco Power Supply Crs18PowerShelfDCModular'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.255') { $details->model = 'Cisco Power Supply Crs18PowerShelfACModular'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.256') { $details->model = 'Cisco Power Supply Crs116FCCPowerShelfDCModular'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.257') { $details->model = 'Cisco Power Supply Crs116FCCPowerShelfACModular'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.258') { $details->model = 'Cisco Power Supply Crs1DCPowerModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.259') { $details->model = 'Cisco Power Supply Crs1ACPowerModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.260') { $details->model = 'Cisco Power Supply Crs116LCCPowerShelfDCModular'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.261') { $details->model = 'Cisco Power Supply Crs116LCCPowerShelfACModular'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.262') { $details->model = 'Cisco Power Supply Cat2960AC123W12V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.263') { $details->model = 'Cisco Power Supply Cat2960AC370W12V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.264') { $details->model = 'Cisco Power Supply Cat2960AC235W12V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.265') { $details->model = 'Cisco Power Supply Cat2960AC525W12V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.267') { $details->model = 'Cisco Power Supply ASR1001AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.268') { $details->model = 'Cisco Power Supply ASR1001DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.269') { $details->model = 'Cisco Power Supply ASR1013AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.270') { $details->model = 'Cisco Power Supply ASR1013DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.271') { $details->model = 'Cisco Power Supply C1941PWRAC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.272') { $details->model = 'Cisco Power Supply ASR1002DC24V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.28') { $details->model = 'Cisco Power Supply AC4000W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.282') { $details->model = 'Cisco Power Supply PWRME3KXAC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.283') { $details->model = 'Cisco Power Supply PWRME3KXDC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.284') { $details->model = 'Cisco Power Supply CGR20xxCGS25xxPWRACPOE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.285') { $details->model = 'Cisco Power Supply CGR20xxCGS25xxPWRDCPOE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.286') { $details->model = 'Cisco Power Supply MXE5600'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.287') { $details->model = 'Cisco Power Supply C7225AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.288') { $details->model = 'Cisco Power Supply PWRC49EAC300WR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.29') { $details->model = 'Cisco Power Supply DC4000W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.290') { $details->model = 'Cisco Power Supply C2360Pwr135wac'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.291') { $details->model = 'Cisco Power Supply N55Pac750W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.293') { $details->model = 'Cisco Power Supply Crs16PshDcB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.294') { $details->model = 'Cisco Power Supply Crs16PshAcB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.295') { $details->model = 'Cisco Power Supply PWRC49EAC300WF'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.296') { $details->model = 'Cisco Power Supply PWRC49DC300WF'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.297') { $details->model = 'Cisco Power Supply N2kN2200Pdc400W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.298') { $details->model = 'Cisco Power Supply ASR1000PS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.299') { $details->model = 'Cisco Power Supply Cat2928AC60W12V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.3') { $details->model = 'Cisco Power Supply AC1000W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.300') { $details->model = 'Cisco Power Supply Cat2928AC100W12V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.301') { $details->model = 'Cisco Power Supply PwrXPS2200'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.302') { $details->model = 'Cisco Power Supply N55Pac1100W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.303') { $details->model = 'Cisco Power Supply N2kN2200Pac400WB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.306') { $details->model = 'Cisco Power Supply UCS6248UpAC750W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.307') { $details->model = 'Cisco Power Supply UCS6248UpDC750W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.308') { $details->model = 'Cisco Power Supply UCS6296UpDC1100W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.309') { $details->model = 'Cisco Power Supply UCS6296UpAC1100W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.31') { $details->model = 'Cisco Power Supply 12010DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.310') { $details->model = 'Cisco Power Supply N7KDC3KW'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.311') { $details->model = 'Cisco Power Supply Cat2960CAC167W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.312') { $details->model = 'Cisco Power Supply Cat2960CAC36W12V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.313') { $details->model = 'Cisco Power Supply N7KAC3KW'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.314') { $details->model = 'Cisco Power Supply N55Pdc750W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.315') { $details->model = 'Cisco Power Supply Oe8541'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.316') { $details->model = 'Cisco Power Supply Oe7571'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.317') { $details->model = 'Cisco Power Supply Oe7541'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.318') { $details->model = 'Cisco Power Supply Oe694'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.319') { $details->model = 'Cisco Power Supply Oe594'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.32') { $details->model = 'Cisco Power Supply 12010AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.320') { $details->model = 'Cisco Power Supply Oe294'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.325') { $details->model = 'Cisco Power Supply N2kN2200Pac400W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.326') { $details->model = 'Cisco Power Supply N55Pac750WB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.327') { $details->model = 'Cisco Power Supply N55Pac1100WB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.328') { $details->model = 'Cisco Power Supply ASR900DC500W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.33') { $details->model = 'Cisco Power Supply 5850DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.330') { $details->model = 'Cisco Power Supply Crs8PshDcB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.331') { $details->model = 'Cisco Power Supply Crs8PshAcB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.332') { $details->model = 'Cisco Power Supply ASR5KPfu'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.333') { $details->model = 'Cisco Power Supply ASR55PFU'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.337') { $details->model = 'Cisco Power Supply C459000ACV'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.34') { $details->model = 'Cisco Power Supply 12406DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.341') { $details->model = 'Cisco Power Supply ASR9KAC3KWV2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.342') { $details->model = 'Cisco Power Supply ASR9KDC2100WV2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.343') { $details->model = 'Cisco Power Supply ASR9KAC750W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.344') { $details->model = 'Cisco Power Supply ASR9KDC750W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.347') { $details->model = 'Cisco Power Supply C4KXPWR750DCF'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.348') { $details->model = 'Cisco Power Supply C4KXPWR750ACF'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.349') { $details->model = 'Cisco Power Supply C4KXPWR750DCR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.35') { $details->model = 'Cisco Power Supply 12406AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.350') { $details->model = 'Cisco Power Supply C4KXPWR750ACR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.354') { $details->model = 'Cisco Power Supply ASR9000vGenericPm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.36') { $details->model = 'Cisco Power Supply 12410DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.362') { $details->model = 'Cisco Power Supply NXAPAC500W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.363') { $details->model = 'Cisco Power Supply NXAPAC500WB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.365') { $details->model = 'Cisco Power Supply N55PDC1100W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.366') { $details->model = 'Cisco Power Supply ASA5545PSInputSensor'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.367') { $details->model = 'Cisco Power Supply ASA5555PSInputSensor'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.368') { $details->model = 'Cisco Power Supply ASA5545K7PSInputSensor'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.369') { $details->model = 'Cisco Power Supply ASA5555K7PSInputSensor'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.37') { $details->model = 'Cisco Power Supply 12410AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.38') { $details->model = 'Cisco Power Supply AC1900W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.39') { $details->model = 'Cisco Power Supply DC1900W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.4') { $details->model = 'Cisco Power Supply DC1000W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.40') { $details->model = 'Cisco Power Supply DC950W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.41') { $details->model = 'Cisco Power Supply AC950W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.42') { $details->model = 'Cisco Power Supply 12404DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.43') { $details->model = 'Cisco Power Supply 12404AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.44') { $details->model = 'Cisco Power Supply BP7513AC1200W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.45') { $details->model = 'Cisco Power Supply BP7513DC1200W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.46') { $details->model = 'Cisco Power Supply BP7505AC600W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.47') { $details->model = 'Cisco Power Supply BP7505DC600W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.48') { $details->model = 'Cisco Power Supply BP7507AC700W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.49') { $details->model = 'Cisco Power Supply BP7507DC700W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.5') { $details->model = 'Cisco Power Supply Powerone'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.50') { $details->model = 'Cisco Power Supply AC1900W6'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.51') { $details->model = 'Cisco Power Supply C7300AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.52') { $details->model = 'Cisco Power Supply C7300DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.53') { $details->model = 'Cisco Power Supply AC600W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.54') { $details->model = 'Cisco Power Supply DC600W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.55') { $details->model = 'Cisco Power Supply C10KDC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.56') { $details->model = 'Cisco Power Supply C10KAC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.59') { $details->model = 'Cisco Power Supply 15530AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.6') { $details->model = 'Cisco Power Supply Astec'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.60') { $details->model = 'Cisco Power Supply 15530DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.61') { $details->model = 'Cisco Power Supply AC3000W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.63') { $details->model = 'Cisco Power Supply 12016DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.64') { $details->model = 'Cisco Power Supply 12016AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.7') { $details->model = 'Cisco Power Supply Minus48VDC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.70') { $details->model = 'Cisco Power Supply DC3000W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.71') { $details->model = 'Cisco Power Supply Cat3750AC50W12V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.72') { $details->model = 'Cisco Power Supply Cat3750AC102W12V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.73') { $details->model = 'Cisco Power Supply Cat3750AC204W12V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.74') { $details->model = 'Cisco Power Supply Cat3750AC252W12V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.76') { $details->model = 'Cisco Power Supply DsCac2500W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.77') { $details->model = 'Cisco Power Supply RedDsCac2500W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.78') { $details->model = 'Cisco Power Supply DsCdc2500W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.79') { $details->model = 'Cisco Power Supply RedDsCdc2500W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.8') { $details->model = 'Cisco Power Supply Empty'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.80') { $details->model = 'Cisco Power Supply DsCac4000WUs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.81') { $details->model = 'Cisco Power Supply RedDsCac4000WUs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.82') { $details->model = 'Cisco Power Supply DsCac4000WInt'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.83') { $details->model = 'Cisco Power Supply RedDsCac4000WInt'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.84') { $details->model = 'Cisco Power Supply DsCac1900W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.85') { $details->model = 'Cisco Power Supply RedDsCac1900W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.86') { $details->model = 'Cisco Power Supply DsCdc1900W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.87') { $details->model = 'Cisco Power Supply RedDsCdc1900W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.88') { $details->model = 'Cisco Power Supply RedDsCac845W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.89') { $details->model = 'Cisco Power Supply DsCac845W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.9') { $details->model = 'Cisco Power Supply AC1100W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.90') { $details->model = 'Cisco Power Supply Unknown'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.91') { $details->model = 'Cisco Power Supply C2970AC156W12V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.92') { $details->model = 'Cisco Power Supply Ac150W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.93') { $details->model = 'Cisco Power Supply C7200AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.94') { $details->model = 'Cisco Power Supply C7200DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.95') { $details->model = 'Cisco Power Supply Ac465W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.96') { $details->model = 'Cisco Power Supply DsCac300W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.97') { $details->model = 'Cisco Power Supply RedDsCac300W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.98') { $details->model = 'Cisco Power Supply Ac1400W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.6.99') { $details->model = 'Cisco Power Supply C2970AC204W12V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7') { $details->model = 'Cisco Fan '; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.100') { $details->model = 'Cisco Fan ASR1004'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.101') { $details->model = 'Cisco Fan ASR1006'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.102') { $details->model = 'Cisco Fan Ce520Cfm22'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.103') { $details->model = 'Cisco Fan Ce520Cfm32'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.104') { $details->model = 'Cisco Fan N5kC5020Fan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.105') { $details->model = 'Cisco Fan Cat2918Cfm22'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.106') { $details->model = 'Cisco Fan C3KFAN16CFM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.107') { $details->model = 'Cisco Fan PowerSupplyFan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.109') { $details->model = 'Cisco Fan N7Kc7018FanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.11') { $details->model = 'Cisco Fan C6100FanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.110') { $details->model = 'Cisco Fan Crs16lccFntrB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.111') { $details->model = 'Cisco Fan ASR14K4FanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.112') { $details->model = 'Cisco Fan ASR14K8FanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.113') { $details->model = 'Cisco Fan N5kC5010Fan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.114') { $details->model = 'Cisco Fan ASR9KFan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.115') { $details->model = 'Cisco Fan ASR9010'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.116') { $details->model = 'Cisco Fan ASR9006'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.117') { $details->model = 'Cisco Fan ASR14K4Fan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.118') { $details->model = 'Cisco Fan ASR14K8Fan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.119') { $details->model = 'Cisco Fan Crs14Fan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.120') { $details->model = 'Cisco Fan Crs18Fan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.121') { $details->model = 'Cisco Fan Crs116Fan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.122') { $details->model = 'Cisco Fan N2kC2148TFan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.124') { $details->model = 'Cisco Fan UCSN10S6100'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.125') { $details->model = 'Cisco Fan Cat2960CFM32'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.126') { $details->model = 'Cisco Fan UCSN10Fan2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.129') { $details->model = 'Cisco Fan N7Kc7009FanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.13') { $details->model = 'Cisco Fan 12010FanTray3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.130') { $details->model = 'Cisco Fan MEFanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.131') { $details->model = 'Cisco Fan MXE5600'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.132') { $details->model = 'Cisco Fan C2360Fan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.133') { $details->model = 'Cisco Fan ASR1001FanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.134') { $details->model = 'Cisco Fan ASR1000Fan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.135') { $details->model = 'Cisco Fan N5548PFan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.139') { $details->model = 'Cisco Fan Crs16FanTrB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.14') { $details->model = 'Cisco Fan 12406FanTray3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.140') { $details->model = 'Cisco Fan Cat2928Cfm22'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.141') { $details->model = 'Cisco Fan Cat2928Cfm32'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.142') { $details->model = 'Cisco Fan BlwrXPS2200'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.143') { $details->model = 'Cisco Fan N5596UPFan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.144') { $details->model = 'Cisco Fan N2kC2248TBFan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.145') { $details->model = 'Cisco Fan N2kC2232TBFan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.148') { $details->model = 'Cisco Fan N3kC3064Fan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.149') { $details->model = 'Cisco Fan UCS6248UPFan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.15') { $details->model = 'Cisco Fan 12410FanTray3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.150') { $details->model = 'Cisco Fan UCS6296UPFan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.151') { $details->model = 'Cisco Fan Oe694'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.152') { $details->model = 'Cisco Fan Oe594'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.153') { $details->model = 'Cisco Fan Oe294'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.154') { $details->model = 'Cisco Fan Oe7571'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.155') { $details->model = 'Cisco Fan Oe7541'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.156') { $details->model = 'Cisco Fan Oe8541'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.157') { $details->model = 'Cisco Fan Crs16SBFan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.158') { $details->model = 'Cisco Fan Crs16FabricFan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.16') { $details->model = 'Cisco Fan ONS15540FanTray8'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.17') { $details->model = 'Cisco Fan 12404FanTray7'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.173') { $details->model = 'Cisco Fan N3kC3064FanB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.174') { $details->model = 'Cisco Fan ASR903FanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.175') { $details->model = 'Cisco Fan ASR900Fan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.176') { $details->model = 'Cisco Fan ASR5KFANTLW'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.177') { $details->model = 'Cisco Fan ASR5KFANTUP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.178') { $details->model = 'Cisco Fan ASR55FANTF'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.179') { $details->model = 'Cisco Fan ASR55FANTR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.18') { $details->model = 'Cisco Fan BP7513MainFan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.180') { $details->model = 'Cisco Fan N7Kc7004FanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.181') { $details->model = 'Cisco Fan N3kC3048Fan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.182') { $details->model = 'Cisco Fan N3kC3048FanB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.183') { $details->model = 'Cisco Fan ASR9001'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.187') { $details->model = 'Cisco Fan Asr9922Fan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.188') { $details->model = 'Cisco Fan AirstrikeCpuBlower'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.189') { $details->model = 'Cisco Fan Mod13SeFanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.19') { $details->model = 'Cisco Fan BP7513PS1Fan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.194') { $details->model = 'Cisco Fan A9K9912FAN'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.196') { $details->model = 'Cisco Fan Asr9010FanV2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.20') { $details->model = 'Cisco Fan BP7513PS2Fan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.21') { $details->model = 'Cisco Fan 7505Fan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.22') { $details->model = 'Cisco Fan 7507Fan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.23') { $details->model = 'Cisco Fan C7300PowerSupplyFan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.24') { $details->model = 'Cisco Fan C7300FanModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.25') { $details->model = 'Cisco Fan TrayC10008'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.26') { $details->model = 'Cisco Fan TrayC10005'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.27') { $details->model = 'Cisco Fan Cat4kFanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.28') { $details->model = 'Cisco Fan Cat4kPowerSupplyFan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.29') { $details->model = 'Cisco Fan C6160ITempFanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.3') { $details->model = 'Cisco Fan C6260FanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.30') { $details->model = 'Cisco Fan ONS15530FanTray6'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.31') { $details->model = 'Cisco Fan 12016FanTray3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.34') { $details->model = 'Cisco Fan Cat3750CFM26'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.35') { $details->model = 'Cisco Fan Ds6SlotFanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.36') { $details->model = 'Cisco Fan Ds9SlotFanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.37') { $details->model = 'Cisco Fan Ds13SlotFanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.38') { $details->model = 'Cisco Fan TrayUnknown'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.39') { $details->model = 'Cisco Fan Ds2SlotFanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.4') { $details->model = 'Cisco Fan SinglePulse'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.40') { $details->model = 'Cisco Fan Cat3710CFM26'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.41') { $details->model = 'Cisco Fan Cat37xx12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.42') { $details->model = 'Cisco Fan WS9SlotFanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.43') { $details->model = 'Cisco Fan Mod9FanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.44') { $details->model = 'Cisco Fan Cat2970CFM26'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.45') { $details->model = 'Cisco Fan Ds1RUFanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.46') { $details->model = 'Cisco Fan FanMod3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.47') { $details->model = 'Cisco Fan WSC6k6SlotFan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.48') { $details->model = 'Cisco Fan WSC6k6SlotFan2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.49') { $details->model = 'Cisco Fan WSC6k9SlotFan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.5') { $details->model = 'Cisco Fan DualPulse'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.50') { $details->model = 'Cisco Fan WSC6k9SlotFan2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.51') { $details->model = 'Cisco Fan WSC6509NebFan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.52') { $details->model = 'Cisco Fan WSC6k13SlotFan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.53') { $details->model = 'Cisco Fan WSC6k13SlotFan2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.54') { $details->model = 'Cisco Fan FanMod3HS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.55') { $details->model = 'Cisco Fan WSC6509NebFan2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.56') { $details->model = 'Cisco Fan FanMod6'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.57') { $details->model = 'Cisco Fan FanMod6HS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.58') { $details->model = 'Cisco Fan Crs1Fan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.59') { $details->model = 'Cisco Fan Cat3560CFM26'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.6') { $details->model = 'Cisco Fan 12012FanTray3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.60') { $details->model = 'Cisco Fan Ds1RUFanTray9116'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.61') { $details->model = 'Cisco Fan WSC6506eFanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.62') { $details->model = 'Cisco Fan WSC6509eFanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.63') { $details->model = 'Cisco Fan WSC6513eFanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.64') { $details->model = 'Cisco Fan WSC6503eFanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.65') { $details->model = 'Cisco Fan Umg9820FanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.66') { $details->model = 'Cisco Fan Mod4HS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.67') { $details->model = 'Cisco Fan C4kFCFanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.68') { $details->model = 'Cisco Fan 12410EnhFanTray3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.69') { $details->model = 'Cisco Fan 12406EnhFanTray3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.7') { $details->model = 'Cisco Fan 12008FanTray6'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.70') { $details->model = 'Cisco Fan 12416EnhFanTray3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.71') { $details->model = 'Cisco Fan 12404FanTray6'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.72') { $details->model = 'Cisco Fan 12404EnhFanTray6'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.73') { $details->model = 'Cisco Fan 9513FanTrayR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.74') { $details->model = 'Cisco Fan Cat2960CFM22'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.75') { $details->model = 'Cisco Fan Cat2960CFM26'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.76') { $details->model = 'Cisco Fan TrayUbr10012'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.77') { $details->model = 'Cisco Fan C6524'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.78') { $details->model = 'Cisco Fan CatEx500CFM22'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.79') { $details->model = 'Cisco Fan CatEx500CFM32'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.8') { $details->model = 'Cisco Fan 12008FanTray4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.80') { $details->model = 'Cisco Fan Cat3750CFM35'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.81') { $details->model = 'Cisco Fan CFM15'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.82') { $details->model = 'Cisco Fan Crs1FabricFanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.83') { $details->model = 'Cisco Fan Crs116 FanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.84') { $details->model = 'Cisco Fan Crs18 FanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.85') { $details->model = 'Cisco Fan Crs14 FanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.86') { $details->model = 'Cisco Fan C3KBLWR60CFM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.87') { $details->model = 'Cisco Fan Mod6ShsFanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.88') { $details->model = 'Cisco Fan Mod9ShsFanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.89') { $details->model = 'Cisco Fan Mod9StFanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.9') { $details->model = 'Cisco Fan C6160FanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.90') { $details->model = 'Cisco Fan BlwrRPS2300'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.91') { $details->model = 'Cisco Fan ACE4710K9CpuFan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.92') { $details->model = 'Cisco Fan ACE4710K9DimmFan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.93') { $details->model = 'Cisco Fan ACE4710K9PciFan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.94') { $details->model = 'Cisco Fan WSC6509veFan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.95') { $details->model = 'Cisco Fan Mod3ShsFanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.96') { $details->model = 'Cisco Fan Sce8000FanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.97') { $details->model = 'Cisco Fan N7Kc7010MainFanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.98') { $details->model = 'Cisco Fan N7KC7010FabricFanTray'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.7.99') { $details->model = 'Cisco Fan ASR1002'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8') { $details->model = 'Cisco Sensor '; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.11') { $details->model = 'Cisco Sensor MGX8800Temp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.12') { $details->model = 'Cisco Sensor MGX8800PSVoltage'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.13') { $details->model = 'Cisco Sensor MGX8800FanSpeed'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.132') { $details->model = 'Cisco Sensor ModuleDevicePower'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.133') { $details->model = 'Cisco Sensor ModuleDeviceFanRotation'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.134') { $details->model = 'Cisco Sensor ModuleDevicePressure'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.14') { $details->model = 'Cisco Sensor ONS15540Temp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.15') { $details->model = 'Cisco Sensor ONS15540Power'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.16') { $details->model = 'Cisco Sensor 7500ChassisInterface'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.17') { $details->model = 'Cisco Sensor C7300InletTempVoltage'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.18') { $details->model = 'Cisco Sensor C7300OutletTempVoltage'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.19') { $details->model = 'Cisco Sensor C7300HotspotTempVoltage'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.20') { $details->model = 'Cisco Sensor C7300NseDbTempVoltage'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.21') { $details->model = 'Cisco Sensor C7300PSFanState'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.22') { $details->model = 'Cisco Sensor C10KInletTemp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.23') { $details->model = 'Cisco Sensor C10000CoreTemp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.24') { $details->model = 'Cisco Sensor Cat4kTemp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.25') { $details->model = 'Cisco Sensor ONS15530Temp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.26') { $details->model = 'Cisco Sensor ONS15530Power'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.27') { $details->model = 'Cisco Sensor VxsmVoltage'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.28') { $details->model = 'Cisco Sensor VxsmTemp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.29') { $details->model = 'Cisco Sensor 15302701Temp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.30') { $details->model = 'Cisco Sensor Unknown'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.31') { $details->model = 'Cisco Sensor ModuleDeviceTemp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.32') { $details->model = 'Cisco Sensor Clock'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.33') { $details->model = 'Cisco Sensor Vtt'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.34') { $details->model = 'Cisco Sensor ModulePowerOutputFail'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.35') { $details->model = 'Cisco Sensor ModuleOutletTemp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.36') { $details->model = 'Cisco Sensor ModuleInletTemp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.37') { $details->model = 'Cisco Sensor FanTrayStatus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.38') { $details->model = 'Cisco Sensor PSFan'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.39') { $details->model = 'Cisco Sensor PSOutput'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.40') { $details->model = 'Cisco Sensor PSInput'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.41') { $details->model = 'Cisco Sensor Crs1Voltage'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.42') { $details->model = 'Cisco Sensor Crs1Temp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.43') { $details->model = 'Cisco Sensor Crs1Current'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.44') { $details->model = 'Cisco Sensor Crs1FanSpeed'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.45') { $details->model = 'Cisco Sensor ModuleDeviceVoltage'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.46') { $details->model = 'Cisco Sensor TransceiverRxPwr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.47') { $details->model = 'Cisco Sensor TransceiverTxPwr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.48') { $details->model = 'Cisco Sensor TransceiverCurrent'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.49') { $details->model = 'Cisco Sensor TransceiverVoltage'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.50') { $details->model = 'Cisco Sensor TransceiverTemp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.51') { $details->model = 'Cisco Sensor ModuleFanUpgradeRequired'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.52') { $details->model = 'Cisco Sensor ModuleInsufficientCooling'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.55') { $details->model = 'Cisco Sensor PSFanIncompatible'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.56') { $details->model = 'Cisco Sensor ACE4710K9CPUTemp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.57') { $details->model = 'Cisco Sensor ACE4710K9AmbientTemp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.58') { $details->model = 'Cisco Sensor CpuFanSpeed'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.59') { $details->model = 'Cisco Sensor ACE4710K9DimmFanSpeed'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.60') { $details->model = 'Cisco Sensor ACE4710K9PciFanSpeed'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.61') { $details->model = 'Cisco Sensor ModuleDeviceCurrent'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.62') { $details->model = 'Cisco Sensor Crs16dcPemB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.63') { $details->model = 'Cisco Sensor ExternalContact'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.64') { $details->model = 'Cisco Sensor FanSpeed'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.65') { $details->model = 'Cisco Sensor Crs1PwrVoltage'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.66') { $details->model = 'Cisco Sensor Crs1Led'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.67') { $details->model = 'Cisco Sensor MXE5600Temp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.68') { $details->model = 'Cisco Sensor MXE5600FanSpeed'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.69') { $details->model = 'Cisco Sensor MXE5600Voltage'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.8.70') { $details->model = 'Cisco Sensor MXE5600Current'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9') { $details->model = 'Cisco Module'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.1') { $details->model = 'Cisco Module UnknownCard'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.10') { $details->model = 'Cisco Module C25xxType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.11') { $details->model = 'Cisco Module AS5300Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.11.1') { $details->model = 'Cisco AS53004ct1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.11.10') { $details->model = 'Cisco AS 5300PmDtd12m'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.11.11') { $details->model = 'Cisco AS 53008ct14t'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.11.12') { $details->model = 'Cisco AS 53008ce14t'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.11.13') { $details->model = 'Cisco AS 53004ct14t'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.11.14') { $details->model = 'Cisco AS 53004ce14t'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.11.15') { $details->model = 'Cisco AS 5300Amazon2Carrier'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.11.16') { $details->model = 'Cisco AS 5300Dspm6c549'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.11.2') { $details->model = 'Cisco AS 53004ce1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.11.3') { $details->model = 'Cisco Pm DtdCarrier'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.11.4') { $details->model = 'Cisco Pm Dtd6m'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.11.5') { $details->model = 'Cisco AS 5300Carrier'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.11.6') { $details->model = 'Cisco Pm AS5xxx12m'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.11.7') { $details->model = 'Cisco AS 5300VoiceCarrierCard'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.11.8') { $details->model = 'Cisco AS 5300Dspmc542'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.11.9') { $details->model = 'Cisco AS 5300Dsp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.12') { $details->model = 'Cisco Module AS5800Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.12.1') { $details->model = 'Cisco AS5800 Dsc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.12.10') { $details->model = 'Cisco AS5800 Dsp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.12.2') { $details->model = 'Cisco AS5800 E1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.12.3') { $details->model = 'Cisco AS5800 T1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.12.4') { $details->model = 'Cisco AS5800 MicaHmm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.12.5') { $details->model = 'Cisco AS5800 T3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.12.6') { $details->model = 'Cisco AS5800 FeDsi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.12.7') { $details->model = 'Cisco AS5800 MicaDmm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.12.8') { $details->model = 'Cisco AS5800 Vcc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.12.9') { $details->model = 'Cisco AS5800 Dspm6c549'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14') { $details->model = 'Cisco Module Fabric Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.10') { $details->model = 'Cisco 12016Csc16Oc192'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.11') { $details->model = 'Cisco 12010Sfc10'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.12') { $details->model = 'Cisco 12010Csc10'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.13') { $details->model = 'Cisco 12406Sfc6'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.14') { $details->model = 'Cisco 12406Csc6'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.15') { $details->model = 'Cisco 12410Sfc10'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.16') { $details->model = 'Cisco 12410Csc10'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.17') { $details->model = 'Cisco 12404Csc64'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.18') { $details->model = 'Cisco 12816Csc16Oc768'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.19') { $details->model = 'Cisco 12810Csc10Oc768'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.20') { $details->model = 'Cisco 12810Sfc10Oc768'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.21') { $details->model = 'Cisco 12816Sfc16Oc768'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.22') { $details->model = 'Cisco 12006CscAdvncd'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.23') { $details->model = 'Cisco 12010CscAdvncd'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.24') { $details->model = 'Cisco 12016CscAdvncd'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.25') { $details->model = 'Cisco 12006SfcAdvncd'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.26') { $details->model = 'Cisco 12010SfcAdvncd'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.27') { $details->model = 'Cisco 12016SfcAdvncd'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.28') { $details->model = 'Cisco 12004FabAdvncd'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.29') { $details->model = 'Cisco 12816Csc16Oc768B'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.3') { $details->model = 'Cisco 12012Sfc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.30') { $details->model = 'Cisco 12810Csc10Oc768B'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.4') { $details->model = 'Cisco 12012Csc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.5') { $details->model = 'Cisco 12008Sfc8'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.6') { $details->model = 'Cisco 12008Csc8'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.7') { $details->model = 'Cisco 12016Sfc16'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.8') { $details->model = 'Cisco 12016Csc16'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.14.9') { $details->model = 'Cisco 12016Sfc16Oc192'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15') { $details->model = 'Cisco ModuleDaughterCard'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.12') { $details->model = 'Cisco DspmPvdm1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.13') { $details->model = 'Cisco DspmPvdm2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.14') { $details->model = 'Cisco DspmPvdm4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.15') { $details->model = 'Cisco DspmPvdm5'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.17') { $details->model = 'Cisco HdaEm10fxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.18') { $details->model = 'Cisco HdaEm4dsp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.19') { $details->model = 'Cisco C7300Nse100Db'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.24') { $details->model = 'Cisco CeScsi2636'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.25') { $details->model = 'Cisco CeIde2636'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.26') { $details->model = 'Cisco Vic4vpFxs4Did'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.27') { $details->model = 'Cisco C7300Nse100PlusDb'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.28') { $details->model = 'Cisco ModuleCat4000DaughterCardType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.28.1') { $details->model = 'Cisco Cat4kDCWsf4531'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.28.2') { $details->model = 'Cisco Cat4kDCWsu4504FxMt'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.29') { $details->model = 'Cisco Vwic2Mft1T1E1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.30') { $details->model = 'Cisco Vwic2Mft1G703'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.31') { $details->model = 'Cisco Vwic2Mft2T1E1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.32') { $details->model = 'Cisco Vwic2Mft2G703'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.33') { $details->model = 'Cisco EcMft32'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.34') { $details->model = 'Cisco EcMft64'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.35') { $details->model = 'Cisco Em4Fxs4Fxo'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.36') { $details->model = 'Cisco Em6Fxo'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.37') { $details->model = 'Cisco Em4BriNtTe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.38') { $details->model = 'Cisco pvdm2dsphalf'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.39') { $details->model = 'Cisco pvdm2dsp4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.4') { $details->model = 'Cisco DslamNi2Controller'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.40') { $details->model = 'Cisco pvdm2dsp3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.41') { $details->model = 'Cisco pvdm2dsp2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.42') { $details->model = 'Cisco pvdm2dsp1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.43') { $details->model = 'Cisco pvdm2hwecan3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.44') { $details->model = 'Cisco pvdm2hwecan2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.45') { $details->model = 'Cisco pvdm2hwecan1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.46') { $details->model = 'Cisco NetworkProcessor'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.47') { $details->model = 'Cisco Vic2Mft1T1E1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.48') { $details->model = 'Cisco Vic2Mft2T1E1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.49') { $details->model = 'Cisco Em2Hda4Fxo'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.5') { $details->model = 'Cisco Wvic2dsuE1DiG703'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.50') { $details->model = 'Cisco Vic1J1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.51') { $details->model = 'Cisco Wic1amV2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.52') { $details->model = 'Cisco Wic2amV2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.53') { $details->model = 'Cisco PvdmII12dm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.59') { $details->model = 'Cisco Vwic2T1E1Ran'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.6') { $details->model = 'Cisco Wvic1dsuE1G703'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.60') { $details->model = 'Cisco 7300Nse150Db'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.61') { $details->model = 'Cisco Vic3Em2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.62') { $details->model = 'Cisco Vic3FxsDid2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.63') { $details->model = 'Cisco Vic3FxsDid4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.64') { $details->model = 'Cisco HdaEm3FxsDid8'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.65') { $details->model = 'Cisco 1DOCSIS20CableModemDC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.66') { $details->model = 'Cisco 1DOCSIS20CableModemDCEJ'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.67') { $details->model = 'Cisco AsmM2900Top'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.68') { $details->model = 'Cisco Vic3FxsEDid2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.69') { $details->model = 'Cisco ModuleASR9KLCDb'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.7') { $details->model = 'Cisco DspmPvdm3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.70') { $details->model = 'Cisco ModemWan3g'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.73') { $details->model = 'Cisco ModulePVDM3c64'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.74') { $details->model = 'Cisco ModulePVDM3c32'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.75') { $details->model = 'Cisco ModulePVDM3c128'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.76') { $details->model = 'Cisco ModulePVDM3c192'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.77') { $details->model = 'Cisco ModulePVDM3c256'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.78') { $details->model = 'Cisco NM2838'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.79') { $details->model = 'Cisco PANO2838'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.82') { $details->model = 'Cisco Vwic3Mft4T1E1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.83') { $details->model = 'Cisco Vwic3Mft1T1E1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.84') { $details->model = 'Cisco Vwic3Mft1G703'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.85') { $details->model = 'Cisco Vwic3Mft2T1E1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.86') { $details->model = 'Cisco Vwic3Mft2G703'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.15.9') { $details->model = 'Cisco C1700_EM VPN Module'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16') { $details->model = 'Cisco ModuleGBICs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.1') { $details->model = 'Cisco MGBIC1000BaseLX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.16') { $details->model = 'Cisco MGBICDWDM6061'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.17') { $details->model = 'Cisco MGBICDWDM5979'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.18') { $details->model = 'Cisco MGBICDWDM5898'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.19') { $details->model = 'Cisco MGBICDWDM5817'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.2') { $details->model = 'Cisco MGBIC1000BaseSX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.20') { $details->model = 'Cisco MGBICDWDM5655'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.21') { $details->model = 'Cisco MGBICDWDM5575'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.22') { $details->model = 'Cisco MGBICDWDM5494'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.23') { $details->model = 'Cisco MGBICDWDM5413'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.24') { $details->model = 'Cisco MGBICDWDM5252'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.25') { $details->model = 'Cisco MGBICDWDM5172'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.26') { $details->model = 'Cisco MGBICDWDM5092'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.27') { $details->model = 'Cisco MGBICDWDM5012'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.28') { $details->model = 'Cisco MGBICDWDM4851'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.29') { $details->model = 'Cisco MGBICDWDM4772'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.3') { $details->model = 'Cisco MGBIC1000BaseCX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.30') { $details->model = 'Cisco MGBICDWDM4692'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.31') { $details->model = 'Cisco MGBICDWDM4612'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.32') { $details->model = 'Cisco MGBICDWDM4453'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.33') { $details->model = 'Cisco MGBICDWDM4373'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.34') { $details->model = 'Cisco MGBICDWDM4294'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.35') { $details->model = 'Cisco MGBICDWDM4214'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.36') { $details->model = 'Cisco MGBICDWDM4056'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.37') { $details->model = 'Cisco MGBICDWDM3977'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.38') { $details->model = 'Cisco MGBICDWDM3898'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.39') { $details->model = 'Cisco MGBICDWDM3819'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.4') { $details->model = 'Cisco MGBIC1000BaseLH'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.40') { $details->model = 'Cisco MGBICDWDM3661'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.41') { $details->model = 'Cisco MGBICDWDM3582'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.42') { $details->model = 'Cisco MGBICDWDM3504'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.43') { $details->model = 'Cisco MGBICDWDM3425'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.44') { $details->model = 'Cisco MGBICDWDM3268'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.45') { $details->model = 'Cisco MGBICDWDM3190'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.46') { $details->model = 'Cisco MGBICDWDM3112'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.47') { $details->model = 'Cisco MGBICDWDM3033'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.48') { $details->model = 'Cisco MGBICXWDMRxOnly'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.49') { $details->model = 'Cisco MGBIC1490BaseBX10D'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.5') { $details->model = 'Cisco MGBIC1000BaseZX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.50') { $details->model = 'Cisco MGBIC1310BaseBX10U'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.51') { $details->model = 'Cisco MGBICDWDM6141'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.52') { $details->model = 'Cisco MGBICDWDM5736'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.53') { $details->model = 'Cisco MGBICDWDM5332'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.54') { $details->model = 'Cisco MGBICDWDM4931'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.55') { $details->model = 'Cisco MGBICDWDM4532'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.56') { $details->model = 'Cisco MGBICDWDM4134'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.57') { $details->model = 'Cisco MGBICDWDM3739'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.58') { $details->model = 'Cisco MGBICDWDM3346'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.6') { $details->model = 'Cisco MGBIC1000BaseCXSTACK'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.16.7') { $details->model = 'Cisco MGBIC1000BaseT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17') { $details->model = 'Cisco ModuleC6xxxType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.1') { $details->model = 'Cisco C6xxxSlcCap8'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.10') { $details->model = 'Cisco C6xxxOsm1Oc48PosSs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.100') { $details->model = 'Cisco C6xxxEsPfc3CDc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.101') { $details->model = 'Cisco C6xxxEs20GDc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.102') { $details->model = 'Cisco C6xxxEs2TgDc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.103') { $details->model = 'Cisco C6xxxEs40GDc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.104') { $details->model = 'Cisco C6xxxEs4TgDc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.105') { $details->model = 'Cisco C6xxxEsItu2TgDc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.106') { $details->model = 'Cisco C6xxxEsItu4TgDc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.107') { $details->model = 'Cisco C6xxxEsItu2Tg3cxl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.108') { $details->model = 'Cisco C6xxxEsItu4Tg3cxl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.109') { $details->model = 'Cisco C6xxxEsT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.11') { $details->model = 'Cisco C6xxxOsm1Oc48PosSl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.110') { $details->model = 'Cisco C6xxxEsItu2Tg3c'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.111') { $details->model = 'Cisco C6xxxEsItu4Tg3c'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.112') { $details->model = 'Cisco C6xxxEst20gDc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.113') { $details->model = 'Cisco C6xxxEst40gDc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.114') { $details->model = 'Cisco C6xxxEstItu2tgDc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.115') { $details->model = 'Cisco C6xxxEstItu4tgDc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.116') { $details->model = 'Cisco C6xxxEst20G3Cxl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.117') { $details->model = 'Cisco C6xxxEst40G3Cxl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.118') { $details->model = 'Cisco C6xxxEstItu2TG3Cxl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.119') { $details->model = 'Cisco C6xxxEstItu4TG3Cxl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.12') { $details->model = 'Cisco C6xxxOsm1Oc48PosSi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.120') { $details->model = 'Cisco C6xxxEsTXc20G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.121') { $details->model = 'Cisco C6xxxEsTXc40G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.122') { $details->model = 'Cisco C6xxxEsT8Tg'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.123') { $details->model = 'Cisco C6xxxEsXt8TG'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.15') { $details->model = 'Cisco C6xxxOsm2Oc12PosSl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.16') { $details->model = 'Cisco C6xxxOsm4Oc12PosSl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.17') { $details->model = 'Cisco C6xxxOsm2Oc12PosMm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.18') { $details->model = 'Cisco C6xxxOsm4Oc12PosMm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.19') { $details->model = 'Cisco C6xxxOsm2Oc12PosSi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.2') { $details->model = 'Cisco C6xxxNtcOc3si'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.20') { $details->model = 'Cisco C6xxxOsm4Oc12PosSi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.21') { $details->model = 'Cisco C6xxxOsm8Oc3PosSi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.22') { $details->model = 'Cisco C6xxxOsm16Oc3PosSi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.23') { $details->model = 'Cisco C6xxxOsm8Oc3PosMm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.24') { $details->model = 'Cisco C6xxxOsm16Oc3PosMm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.25') { $details->model = 'Cisco C6xxxOsm8Oc3PosSl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.26') { $details->model = 'Cisco C6xxxOsm16Oc3PosSl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.27') { $details->model = 'Cisco C6xxx4GeWanGbic'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.3') { $details->model = 'Cisco C6xxxNtcOc3mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.31') { $details->model = 'Cisco C6xxxOsm4ge4oc12ChDs3SmIr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.32') { $details->model = 'Cisco C6xxxOsm4ge8oc12ChDs3SmIr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.33') { $details->model = 'Cisco C6xxxOsm4geoc48ChDs3SmSr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.34') { $details->model = 'Cisco ceC6xxxOsm4ge2oc48ChDs3SmSr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.35') { $details->model = 'Cisco C6xxxOsm4geoc48ChDs3SmIr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.36') { $details->model = 'Cisco C6xxxOsm4ge2oc48ChDs3SmIr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.37') { $details->model = 'Cisco C6xxxOsm4geoc12ChDs3SmIr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.38') { $details->model = 'Cisco C6xxxOsm4ge2oc12ChDs3SmIr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.4') { $details->model = 'Cisco C6xxxNtcStm1si'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.40') { $details->model = 'Cisco C6xxxOsm2Oc12AtmMmPlus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.41') { $details->model = 'Cisco C6xxxOsm2Oc12AtmSiPlus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.42') { $details->model = 'Cisco C6xxx4GeWanGbicPlus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.43') { $details->model = 'Cisco C6xxxOsm1Oc48PosSsPlus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.44') { $details->model = 'Cisco C6xxxOsm1Oc48PosSiPlus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.45') { $details->model = 'Cisco C6xxxOsm1Oc48PosSlPlus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.46') { $details->model = 'Cisco C6xxxOsm4Oc12PosSiPlus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.47') { $details->model = 'Cisco C6xxxOsm2Oc12PosMmPlus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.48') { $details->model = 'Cisco C6xxxOsm4Oc3PosSiPlus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.49') { $details->model = 'Cisco C6xxxOsm8Oc3PosSiPlus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.5') { $details->model = 'Cisco C6xxxNtcStm1mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.50') { $details->model = 'Cisco C6xxxOsm8Oc3PosSlPlus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.51') { $details->model = 'Cisco C6xxxOsm16Oc3PosSiPlus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.52') { $details->model = 'Cisco C6xxxOsm12Ct3T1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.53') { $details->model = 'Cisco C6xxxCwpa2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.54') { $details->model = 'Cisco C6xxxSIP200'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.55') { $details->model = 'Cisco C6xxxSIP400'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.56') { $details->model = 'Cisco C6xxxSIP600'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.57') { $details->model = 'Cisco C6xxxOsm2Oc12PosSiPlus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.58') { $details->model = 'Cisco C6xxxOsm4Oc3PosSi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.59') { $details->model = 'Cisco C6xxxOsm4Oc3PosSl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.6') { $details->model = 'Cisco C6xxxSlcDmt8'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.60') { $details->model = 'Cisco C6xxxOsm4Oc3PosMm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.61') { $details->model = 'Cisco C6xxxOsm24Ct3T1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.62') { $details->model = 'Cisco Cat6kWsx6600'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.63') { $details->model = 'Cisco C6xxxSSC600'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.64') { $details->model = 'Cisco C6xxxSSC400'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.65') { $details->model = 'Cisco C6xxxRSP720Base'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.66') { $details->model = 'Cisco C6xxxRSP32GEBase'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.67') { $details->model = 'Cisco C6xxxRSP3210GEBase'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.68') { $details->model = 'Cisco C6xxxRSP720'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.69') { $details->model = 'Cisco C6xxxRSP32'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.7') { $details->model = 'Cisco C6xxxSlcDmt16'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.71') { $details->model = 'Cisco C6xxxSIP600DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.72') { $details->model = 'Cisco C6xxxRSP720MsfcNaboo'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.73') { $details->model = 'Cisco C6xxxRSP720PfcGanges'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.74') { $details->model = 'Cisco C6xxxEsm20G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.75') { $details->model = 'Cisco C6xxxEsm20GCpuDc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.76') { $details->model = 'Cisco C6xxxEsm20GPfc3CxlDc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.77') { $details->model = 'Cisco C6xxxEsm20GPfc3CDc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.78') { $details->model = 'Cisco C6xxxEsm20G2x10gDc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.79') { $details->model = 'Cisco C6xxxEsm20G20x1gDc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.8') { $details->model = 'Cisco C6xxxNtcDs3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.80') { $details->model = 'Cisco C6xxxRSP72010GEBase'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.81') { $details->model = 'Cisco C6xxxEs20C3c'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.82') { $details->model = 'Cisco C6xxxEs40C3c'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.83') { $details->model = 'Cisco C6xxxEs20C3cxl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.84') { $details->model = 'Cisco C6xxxEs40C3cxl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.85') { $details->model = 'Cisco C6xxxEs20G3c'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.86') { $details->model = 'Cisco C6xxxEs2Tg3c'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.87') { $details->model = 'Cisco C6xxxEs40G3c'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.88') { $details->model = 'Cisco C6xxxEs4Tg3c'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.89') { $details->model = 'Cisco C6xxxEs20G3cxl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.90') { $details->model = 'Cisco C6xxxEs2Tg3cxl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.91') { $details->model = 'Cisco C6xxxEs40G3cxl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.92') { $details->model = 'Cisco C6xxxEs4Tg3cxl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.93') { $details->model = 'Cisco C6xxxMsfc4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.94') { $details->model = 'Cisco C6xxxPfc3c'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.95') { $details->model = 'Cisco C6xxxPfc3cxl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.96') { $details->model = 'Cisco C6xxxEs2Tg20GDc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.97') { $details->model = 'Cisco C6xxxEs1Tg10GDc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.98') { $details->model = 'Cisco C6xxxEsBase'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.17.99') { $details->model = 'Cisco C6xxxEsPfc3CxlDc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18') { $details->model = 'Cisco ModuleGsrType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.1') { $details->model = 'Cisco GsrOc12Chsts3Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.10') { $details->model = 'Cisco Pos16oc3Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.100') { $details->model = 'Cisco PosEnQoc48SmIrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.101') { $details->model = 'Cisco PosEnQoc48SmVlrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.102') { $details->model = 'Cisco PosEnQoc48SmVlrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.103') { $details->model = 'Cisco PosEnQoc48SmElrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.104') { $details->model = 'Cisco PosEnQoc48SmElrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.105') { $details->model = 'Cisco PosEnOc192Vsr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.106') { $details->model = 'Cisco PosEnOc192SmSr2Sc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.107') { $details->model = 'Cisco PosEnOc192SmSr2Fc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.108') { $details->model = 'Cisco PosEnOc192SmVlrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.109') { $details->model = 'Cisco PosEnOc192SmVlrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.11') { $details->model = 'Cisco Pos16oc3Ir'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.110') { $details->model = 'Cisco PosEnOc192SmElrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.111') { $details->model = 'Cisco PosEnOc192SmElrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.112') { $details->model = 'Cisco GsrEn8Oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.113') { $details->model = 'Cisco Gsr1p10ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.114') { $details->model = 'Cisco GsrE48PosOc48SmIrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.116') { $details->model = 'Cisco GsrEOc192SmLrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.117') { $details->model = 'Cisco GsrEOc192SmVsrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.118') { $details->model = 'Cisco GsrEOc192SmVsrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.119') { $details->model = 'Cisco GsrEOc192SmSrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.12') { $details->model = 'Cisco Pos16oc3Lr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.120') { $details->model = 'Cisco GsrEOc192SmSrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.121') { $details->model = 'Cisco GsrEOc192SmLrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.122') { $details->model = 'Cisco GsrEQoc48SmLrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.123') { $details->model = 'Cisco GsrEQoc48SmLrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.124') { $details->model = 'Cisco GsrEQoc48SmVsrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.125') { $details->model = 'Cisco GsrEQoc48SmVsrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.126') { $details->model = 'Cisco GsrEQoc48SmSrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.127') { $details->model = 'Cisco GsrEQoc48SmSrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.128') { $details->model = 'Cisco GsrEQoc48Vsr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.129') { $details->model = 'Cisco GsrEQoc48SmSr2Sc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.13') { $details->model = 'Cisco Gsr8feTx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.130') { $details->model = 'Cisco GsrEQoc48SmSr2Fc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.131') { $details->model = 'Cisco GsrEQoc48MmSrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.132') { $details->model = 'Cisco GsrEQoc48SmIrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.133') { $details->model = 'Cisco GsrEQoc48SmIrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.134') { $details->model = 'Cisco GsrEQoc48SmVlrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.135') { $details->model = 'Cisco GsrEQoc48SmVlrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.136') { $details->model = 'Cisco GsrEQoc48SmElrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.137') { $details->model = 'Cisco GsrEQoc48SmElrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.138') { $details->model = 'Cisco GsrEOc192Vsr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.139') { $details->model = 'Cisco GsrEOc192SmSr2Sc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.14') { $details->model = 'Cisco Gsr8feFx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.140') { $details->model = 'Cisco GsrEOc192SmSr2Fc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.141') { $details->model = 'Cisco GsrEOc192MmSrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.142') { $details->model = 'Cisco GsrEOc192SmIrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.143') { $details->model = 'Cisco GsrEOc192SmIrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.144') { $details->model = 'Cisco GsrEOc192SmVlrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.145') { $details->model = 'Cisco GsrEOc192SmVlrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.146') { $details->model = 'Cisco GsrEOc192SmElrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.147') { $details->model = 'Cisco GsrEOc192SmElrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.148') { $details->model = 'Cisco Ssrp2Oc48SrpSmSrLc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.149') { $details->model = 'Cisco Ssrp2Oc48SrpSmIrLc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.15') { $details->model = 'Cisco SsrpOc48SmSr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.150') { $details->model = 'Cisco Ssrp2Oc48SrpSmLrLc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.151') { $details->model = 'Cisco Ssrp2Oc48PosSmSrLc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.152') { $details->model = 'Cisco Ssrp2Oc48PosSmIrLc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.153') { $details->model = 'Cisco Ssrp2Oc48PosSmLrLc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.155') { $details->model = 'Cisco GsrE48PosQoc12MmSrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.156') { $details->model = 'Cisco GsrGeFe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.157') { $details->model = 'Cisco GsrE48Atm4oc12SmIrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.158') { $details->model = 'Cisco GsrE48Atm4oc12MmSrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.159') { $details->model = 'Cisco GsrE48Atm4oc3SmIrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.16') { $details->model = 'Cisco SsrpOc48SmLr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.160') { $details->model = 'Cisco GsrE48Atm4oc3MmSrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.162') { $details->model = 'Cisco GsrE48Pos4oc3SmIrLc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.166') { $details->model = 'Cisco GsrE48Pos8oc3SmIrLc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.167') { $details->model = 'Cisco Ssrp2Oc12E48SmIr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.168') { $details->model = 'Cisco Ssrp2Oc12E48SmXr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.169') { $details->model = 'Cisco Ssrp1Oc12E48SmIr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.17') { $details->model = 'Cisco PosQoc12SmLr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.170') { $details->model = 'Cisco Ssrp1Oc12E48SmXr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.171') { $details->model = 'Cisco GsrSIP600'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.173') { $details->model = 'Cisco Gsr4pge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.174') { $details->model = 'Cisco GsrAtmEn8Oc3Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.175') { $details->model = 'Cisco Gsr2Oc192Pos'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.176') { $details->model = 'Cisco Gsr8Oc48Pos'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.177') { $details->model = 'Cisco GsrOc48Msr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.178') { $details->model = 'Cisco PosE2Oc192Vsr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.179') { $details->model = 'Cisco PosE2Oc192SmSr2Sc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.18') { $details->model = 'Cisco PosQoc12MmSr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.180') { $details->model = 'Cisco PosE2Oc192SmSr2Fc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.181') { $details->model = 'Cisco PosE2Oc192SmSrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.182') { $details->model = 'Cisco PosE2Oc192SmSrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.183') { $details->model = 'Cisco PosE2Oc192SmIrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.184') { $details->model = 'Cisco PosE2Oc192SmIrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.185') { $details->model = 'Cisco PosE2Oc192SmLrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.186') { $details->model = 'Cisco PosE2Oc192SmLrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.187') { $details->model = 'Cisco PosE2Oc192SmVlrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.188') { $details->model = 'Cisco PosE2Oc192SmVlrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.189') { $details->model = 'Cisco PosE2Oc192SmElrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.19') { $details->model = 'Cisco PosOc48SmSrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.190') { $details->model = 'Cisco PosE2Oc192SmElrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.191') { $details->model = 'Cisco Gsr6Ds3e3Smb'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.192') { $details->model = 'Cisco Gsr6Ds3e3Ct3Smb'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.193') { $details->model = 'Cisco Gsr2Oc3Chds1ds3e3SmIrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.194') { $details->model = 'Cisco GsrService'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.195') { $details->model = 'Cisco GsrSIP601'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.196') { $details->model = 'Cisco GsrSIP501'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.197') { $details->model = 'Cisco GsrSIP401'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.198') { $details->model = 'Cisco GsrSsrp2Oc48Lc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.2') { $details->model = 'Cisco GsrOc12Chsts3Sm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.20') { $details->model = 'Cisco PosOc48SmLrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.200') { $details->model = 'Cisco GsrE384Cec'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.21') { $details->model = 'Cisco PosOc48SmSrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.22') { $details->model = 'Cisco SrpOc12SmIr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.23') { $details->model = 'Cisco SrpOc12SmLr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.24') { $details->model = 'Cisco SrpOc12Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.25') { $details->model = 'Cisco PosEnOc48SrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.26') { $details->model = 'Cisco PosEnOc48SrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.27') { $details->model = 'Cisco PosEnOc48LrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.28') { $details->model = 'Cisco PosEnOc48LrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.29') { $details->model = 'Cisco PosEnQoc12Sr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.3') { $details->model = 'Cisco GsrQoc12Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.30') { $details->model = 'Cisco PosEnQoc12Ir'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.31') { $details->model = 'Cisco Copper6ds3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.32') { $details->model = 'Cisco Copper12ds3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.33') { $details->model = 'Cisco PosOc192SmIrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.34') { $details->model = 'Cisco PosOc192SmSrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.35') { $details->model = 'Cisco PosOc192SmIrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.36') { $details->model = 'Cisco PosOc192SmSrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.37') { $details->model = 'Cisco Pos4Oc3Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.38') { $details->model = 'Cisco Pos4Oc3Sm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.39') { $details->model = 'Cisco PosOc12Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.4') { $details->model = 'Cisco GsrQoc12Sm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.40') { $details->model = 'Cisco PosOc12Sm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.41') { $details->model = 'Cisco AtmOc12Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.42') { $details->model = 'Cisco AtmOc12Sm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.43') { $details->model = 'Cisco PosOc48MmL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.44') { $details->model = 'Cisco Atm4Oc3Sm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.45') { $details->model = 'Cisco Atm4Oc3Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.46') { $details->model = 'Cisco Oc12ChDs3Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.47') { $details->model = 'Cisco Oc12ChDs3Sm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.48') { $details->model = 'Cisco GsrGe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.49') { $details->model = 'Cisco Gsr3ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.5') { $details->model = 'Cisco PosOc48SmLrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.50') { $details->model = 'Cisco GsrAlarm16'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.51') { $details->model = 'Cisco GsrBusBoard16'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.52') { $details->model = 'Cisco SrpOc12SmXr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.53') { $details->model = 'Cisco PosEnQoc12Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.54') { $details->model = 'Cisco PosEnQoc48SmSrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.55') { $details->model = 'Cisco PosEnQoc48SmSrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.56') { $details->model = 'Cisco PosEnQoc48SmLrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.57') { $details->model = 'Cisco PosEnQoc48SmLrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.58') { $details->model = 'Cisco Gsr6Ct3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.59') { $details->model = 'Cisco PosEnOc192SmLrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.6') { $details->model = 'Cisco PosQoc3SmL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.60') { $details->model = 'Cisco PosEnOc192SmLrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.61') { $details->model = 'Cisco PosEnOc192SmVsrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.62') { $details->model = 'Cisco PosEnOc192SmVsrFc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.66') { $details->model = 'Cisco GsrQoc12Chstsds3SmIrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.67') { $details->model = 'Cisco GsrQoc12Chstsds3MmSrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.68') { $details->model = 'Cisco GsrOc48Chstsds3MmSrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.69') { $details->model = 'Cisco GsrOc48Chstsds3SmIrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.7') { $details->model = 'Cisco Pos8oc3Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.70') { $details->model = 'Cisco GsrOc48Chstsds3SmLrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.71') { $details->model = 'Cisco Gsr16Oc3Chstsds3MmSrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.72') { $details->model = 'Cisco Gsr16Oc3Chstsds3SmIrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.73') { $details->model = 'Cisco Gsr16Oc3Chstsds3SmLrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.74') { $details->model = 'Cisco Gsr2Oc3ChDs1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.75') { $details->model = 'Cisco SsrpOc192SmLr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.76') { $details->model = 'Cisco SsrpOc192SmIr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.77') { $details->model = 'Cisco SsrpOc192SmSr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.78') { $details->model = 'Cisco SsrpOc192SmVsr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.8') { $details->model = 'Cisco Pos8oc3Ir'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.80') { $details->model = 'Cisco 2Oc12ChDs3Sm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.81') { $details->model = 'Cisco GsrAlarm10'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.82') { $details->model = 'Cisco GsrBusBoard10'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.83') { $details->model = 'Cisco GsrOc48Chstsds3SmSrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.84') { $details->model = 'Cisco GsrE48PosOc48SmSrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.85') { $details->model = 'Cisco GsrE48PosOc48SmLrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.86') { $details->model = 'Cisco GsrE48PosQoc12SmIrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.87') { $details->model = 'Cisco GsrE48Pos16oc3SmIrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.88') { $details->model = 'Cisco Copper6e3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.89') { $details->model = 'Cisco Copper12e3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.9') { $details->model = 'Cisco Pos8oc3Lr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.93') { $details->model = 'Cisco GsrE48Pos16oc3SmIrLc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.94') { $details->model = 'Cisco Gsr16oc3Chstsds3SmIrLc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.95') { $details->model = 'Cisco GsrOc12ChDs1SmIrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.96') { $details->model = 'Cisco GsrAlarm6'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.97') { $details->model = 'Cisco PosEnQoc48Vsr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.98') { $details->model = 'Cisco PosEnQoc48MmSrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.18.99') { $details->model = 'Cisco PosEnQoc48SmIrSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.19') { $details->model = 'Cisco ModuleRpmType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.19.1') { $details->model = 'Cisco AtmdxRpm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2') { $details->model = 'Cisco ModuleCommonCards'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.1') { $details->model = 'Cisco WicSerial1t'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.10') { $details->model = 'Cisco WicST2186Leased'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.100') { $details->model = 'Cisco Spa4pCT3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.101') { $details->model = 'Cisco NmAONS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.102') { $details->model = 'Cisco Hwic4fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.103') { $details->model = 'Cisco Hwic9fes'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.104') { $details->model = 'Cisco Hwic4fes'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.105') { $details->model = 'Cisco Hwic4ilp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.106') { $details->model = 'Cisco Hwic9ilp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.107') { $details->model = 'Cisco Spa10pGe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.108') { $details->model = 'Cisco Spa1p10GeXfp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.109') { $details->model = 'Cisco Spa5pGe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.11') { $details->model = 'Cisco VicFxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.115') { $details->model = 'Cisco Spa2pGe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.116') { $details->model = 'Cisco CompactFlash64MB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.117') { $details->model = 'Cisco CompactFlash128MB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.118') { $details->model = 'Cisco CompactFlash256MB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.119') { $details->model = 'Cisco CompactFlash512MB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.12') { $details->model = 'Cisco VicFxo'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.120') { $details->model = 'Cisco CompactFlash'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.121') { $details->model = 'Cisco Spa1pChOc3Stm1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.122') { $details->model = 'Cisco FlashCard48MB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.123') { $details->model = 'Cisco FlashCard64MB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.124') { $details->model = 'Cisco FlashCard128MB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.125') { $details->model = 'Cisco FlashCard256MB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.126') { $details->model = 'Cisco FlashCard512MB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.127') { $details->model = 'Cisco FlashCard'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.128') { $details->model = 'Cisco Hwicdot11abg'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.129') { $details->model = 'Cisco Hwicdot11bg'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.13') { $details->model = 'Cisco VicEm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.130') { $details->model = 'Cisco AimVpnBp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.131') { $details->model = 'Cisco AimVpnEp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.132') { $details->model = 'Cisco NmVpnMp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.133') { $details->model = 'Cisco AimVpnHp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.134') { $details->model = 'Cisco AimVpnBp2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.135') { $details->model = 'Cisco AimVpnEp2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.136') { $details->model = 'Cisco AimVpnHp2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.137') { $details->model = 'Cisco AimVpnBp2Plus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.138') { $details->model = 'Cisco AimVpnEp2Plus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.139') { $details->model = 'Cisco AimVpnHp2Plus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.14') { $details->model = 'Cisco AimCompression'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.140') { $details->model = 'Cisco HwicAdslBriPots'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.141') { $details->model = 'Cisco HwicAdslBriIsdn'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.142') { $details->model = 'Cisco HwicAdslIsdn'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.143') { $details->model = 'Cisco HwicAdslPots'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.144') { $details->model = 'Cisco Spa2pOc48PosRprHH'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.146') { $details->model = 'Cisco NMCueEc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.147') { $details->model = 'Cisco C180xdot11abg'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.148') { $details->model = 'Cisco C180xdot11bg'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.149') { $details->model = 'Cisco C180x8ilp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.150') { $details->model = 'Cisco DfcDl108'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.151') { $details->model = 'Cisco DfcDl60'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.152') { $details->model = 'Cisco NmWlanController'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.153') { $details->model = 'Cisco WicCsuDsuFT1v2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.154') { $details->model = 'Cisco Spa8xfeTx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.155') { $details->model = 'Cisco NMIntegratedServiceEngine'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.156') { $details->model = 'Cisco NmWaEngine'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.157') { $details->model = 'Cisco Spa2pGeV2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.158') { $details->model = 'Cisco Spa5pGeV2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.159') { $details->model = 'Cisco Spa8pGeV2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.16') { $details->model = 'Cisco Wvic1dsuT1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.160') { $details->model = 'Cisco Spa10pGeV2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.161') { $details->model = 'Cisco Spa1p10GeXfpV2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.162') { $details->model = 'Cisco Spa8xfeTxV2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.163') { $details->model = 'Cisco ModuleCrs14OC192IRPlim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.164') { $details->model = 'Cisco Spa8xGe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.166') { $details->model = 'Cisco Spa8xoc3Pos'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.167') { $details->model = 'Cisco Spa4xoc12Pos'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.168') { $details->model = 'Cisco Wic1ShdslV3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.169') { $details->model = 'Cisco UsbFlash'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.17') { $details->model = 'Cisco Wvic1dsuE1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.170') { $details->model = 'Cisco UsbToken'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.171') { $details->model = 'Cisco UsbHub'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.172') { $details->model = 'Cisco VEncM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.173') { $details->model = 'Cisco UsbDevice'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.174') { $details->model = 'Cisco Spa1pOc48PosSfp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.175') { $details->model = 'Cisco Spa4pOc48PosSfp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.176') { $details->model = 'Cisco IpRanOpt4P'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.177') { $details->model = 'Cisco AimIps1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.178') { $details->model = 'Cisco AimIps2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.18') { $details->model = 'Cisco Wvic2dsuT1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.180') { $details->model = 'Cisco NmCips'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.181') { $details->model = 'Cisco Hwic1fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.182') { $details->model = 'Cisco Hwic2fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.183') { $details->model = 'Cisco HwicBriU82912'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.184') { $details->model = 'Cisco HwicBri4bST'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.185') { $details->model = 'Cisco ModuleCrs1RPB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.186') { $details->model = 'Cisco ModuleCrs1FccSCGe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.187') { $details->model = 'Cisco ModuleCrs1SPAInfCard'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.188') { $details->model = 'Cisco Module4OC192DptIr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.189') { $details->model = 'Cisco ModuleCrs116mFabricCard'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.19') { $details->model = 'Cisco Wvic2dsuE1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.190') { $details->model = 'Cisco HwicAdslPotsAnnexM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.191') { $details->model = 'Cisco Spa4pOc3PosV2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.192') { $details->model = 'Cisco CVRX2SFP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.193') { $details->model = 'Cisco SpaIPSEC2g2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.194') { $details->model = 'Cisco Spa8pCt1e1CemAtm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.195') { $details->model = 'Cisco Spa24pCt1e1CemAtm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.196') { $details->model = 'Cisco Spa2pCt3e3CemAtm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.197') { $details->model = 'Cisco Spa1pChoc3CemAtm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.198') { $details->model = 'Cisco Spa1x10geWlV2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.199') { $details->model = 'Cisco Spa1x10geDwdmV2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.20') { $details->model = 'Cisco Wvic2dsuT1Di'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.200') { $details->model = 'Cisco Spa1pChoc48Ds3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.201') { $details->model = 'Cisco Spa1pChoc12Ds0'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.202') { $details->model = 'Cisco AimAtm8'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.203') { $details->model = 'Cisco Spa4xtSerial'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.204') { $details->model = 'Cisco Spa1xOC3AtmV2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.205') { $details->model = 'Cisco Spa2xOC3AtmV2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.206') { $details->model = 'Cisco Spa3xOC3AtmV2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.207') { $details->model = 'Cisco Spa1xOC12AtmV2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.208') { $details->model = 'Cisco NmTransOptSrvcEng1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.209') { $details->model = 'Cisco AimTransOptSrvcEng1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.21') { $details->model = 'Cisco Wvic2dsuE1Di'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.210') { $details->model = 'Cisco NmTransOptSrvcEng2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.211') { $details->model = 'Cisco AimTransOptSrvcEng2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.212') { $details->model = 'Cisco OnboardSe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.213') { $details->model = 'Cisco AimIpsK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.214') { $details->model = 'Cisco NmeApaModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.215') { $details->model = 'Cisco HwicVdslPots'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.216') { $details->model = 'Cisco HwicVdslIsdn'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.217') { $details->model = 'Cisco WsIpsec3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.218') { $details->model = 'Cisco Hwic2as'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.219') { $details->model = 'Cisco Hwic2t'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.22') { $details->model = 'Cisco AimEncryption'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.220') { $details->model = 'Cisco Hwic1t'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.221') { $details->model = 'Cisco Hwic1dsuT1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.222') { $details->model = 'Cisco Dsx930418fk9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.223') { $details->model = 'Cisco C7600SSC400'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.224') { $details->model = 'Cisco WSSSC600'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.225') { $details->model = 'Cisco Spa2pGeSynce'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.226') { $details->model = 'Cisco Spa2pChoc12Ds0'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.227') { $details->model = 'Cisco AimVpnSsl1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.228') { $details->model = 'Cisco AimVpnSsl2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.229') { $details->model = 'Cisco AimVpnSsl3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.23') { $details->model = 'Cisco PmNmToAim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.230') { $details->model = 'Cisco WsIpsec2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.231') { $details->model = 'Cisco CVRX2SFP10G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.232') { $details->model = 'Cisco HardDisk'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.234') { $details->model = 'Cisco IsmSre300K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.237') { $details->model = 'Cisco SmSre700K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.239') { $details->model = 'Cisco SmSre900K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.24') { $details->model = 'Cisco Dfc8ce1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.240') { $details->model = 'Cisco SpaWmaSw'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.242') { $details->model = 'Cisco Hwic4ShdslEfm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.243') { $details->model = 'Cisco AimAxp102'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.244') { $details->model = 'Cisco Aim2Axp104'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.245') { $details->model = 'Cisco NmAxp302'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.246') { $details->model = 'Cisco NmAxp502'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.247') { $details->model = 'Cisco NmAxp522'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.248') { $details->model = 'Cisco WicGshdslEfm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.249') { $details->model = 'Cisco NmeIss'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.25') { $details->model = 'Cisco Dfc8ct1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.250') { $details->model = 'Cisco NmeVmss216'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.251') { $details->model = 'Cisco NmeVmssHp32'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.252') { $details->model = 'Cisco NmeVmss2Hp32'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.253') { $details->model = 'Cisco NmeVmssHp16'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.254') { $details->model = 'Cisco NmeVmss16'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.26') { $details->model = 'Cisco DfcCt3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.260') { $details->model = 'Cisco NamWaasVirtualBlade'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.27') { $details->model = 'Cisco DfcNp108'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.273') { $details->model = 'Cisco SpaDsp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.274') { $details->model = 'Cisco ModuleCrs4S140GFabricCard'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.275') { $details->model = 'Cisco ModuleCrs8S140GFabricCard'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.276') { $details->model = 'Cisco ModuleCrs16S140GFabricCard'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.277') { $details->model = 'Cisco ModuleCrs16S140GFabricCardMulti'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.278') { $details->model = 'Cisco ModuleCrs1140GFCCSFC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.282') { $details->model = 'Cisco Hwic2tC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.283') { $details->model = 'Cisco Hwic1tC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.284') { $details->model = 'Cisco Hwic4fesC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.285') { $details->model = 'Cisco Hwic9fesC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.286') { $details->model = 'Cisco Vwic2Mft1G703C'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.287') { $details->model = 'Cisco Vwic2Mft2G703C'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.288') { $details->model = 'Cisco NmEswitch16C'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.29') { $details->model = 'Cisco WicSerial2as'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.291') { $details->model = 'Cisco C2960sStack'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.292') { $details->model = 'Cisco HardiskIdc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.293') { $details->model = 'Cisco Ehwic4esg'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.294') { $details->model = 'Cisco EhwicD8esg'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.295') { $details->model = 'Cisco EhwicD8esgP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.296') { $details->model = 'Cisco Ehwic4esgP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.297') { $details->model = 'Cisco VmssSmSre700K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.298') { $details->model = 'Cisco VmssSmSre900K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.299') { $details->model = 'Cisco IssSmSre700K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.30') { $details->model = 'Cisco WicCsuDsuFT1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.300') { $details->model = 'Cisco IssSmSre900K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.301') { $details->model = 'Cisco Modem3gGsm504A'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.302') { $details->model = 'Cisco Modem3gGsm504G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.303') { $details->model = 'Cisco CvrCfp4sfp10g'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.304') { $details->model = 'Cisco Modem3gCdma5728V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.305') { $details->model = 'Cisco Modem3gGsmMC8705'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.306') { $details->model = 'Cisco Modem3gGsmMC8795'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.31') { $details->model = 'Cisco IsaIpsecMppe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.313') { $details->model = 'Cisco Modem3gGsmMc8705A'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.314') { $details->model = 'Cisco HardDisk8541'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.315') { $details->model = 'Cisco HardDisk7571'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.316') { $details->model = 'Cisco HardDisk7541'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.317') { $details->model = 'Cisco HardDisk694'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.318') { $details->model = 'Cisco HardDisk594'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.319') { $details->model = 'Cisco HardDisk294'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.32') { $details->model = 'Cisco WicDslsar20150'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.320') { $details->model = 'Cisco ModuleDIMM8541'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.321') { $details->model = 'Cisco ModuleDIMM7541'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.322') { $details->model = 'Cisco ModuleDIMM7571'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.323') { $details->model = 'Cisco ModuleDIMM294'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.324') { $details->model = 'Cisco ModuleDIMM694'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.325') { $details->model = 'Cisco ModuleDIMM594'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.328') { $details->model = 'Cisco ModuleIOM294'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.329') { $details->model = 'Cisco ModuleIOM594'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.330') { $details->model = 'Cisco ModuleIOM694'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.331') { $details->model = 'Cisco ModuleIOM7541'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.332') { $details->model = 'Cisco ModuleIOM7571'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.333') { $details->model = 'Cisco ModuleIOM8541'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.334') { $details->model = 'Cisco IM8pGeCu'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.335') { $details->model = 'Cisco IM8pGeSFP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.336') { $details->model = 'Cisco IM16pT1E1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.337') { $details->model = 'Cisco IM1p10GeXfp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.338') { $details->model = 'Cisco IM4pOc3R1pOc12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.343') { $details->model = 'Cisco Ep1p40GeQsfp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.344') { $details->model = 'Cisco Ep2p40GeQsfp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.350') { $details->model = 'Cisco Mpa2X10GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.351') { $details->model = 'Cisco Mpa4X10GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.352') { $details->model = 'Cisco Mpa20X1GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.353') { $details->model = 'Cisco Mpa1X40GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.354') { $details->model = 'Cisco Mpa2X40GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.359') { $details->model = 'Cisco ModuleNic2x10GeSfp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.360') { $details->model = 'Cisco ModuleNic4x10GeSfp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.361') { $details->model = 'Cisco ModuleNic4x1GeSfp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.362') { $details->model = 'Cisco Module4portNic4x1GeCu'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.363') { $details->model = 'Cisco Module1xNitrox3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.364') { $details->model = 'Cisco Module4xNitrox3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.378') { $details->model = 'Cisco A9kMpa8X10GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.379') { $details->model = 'Cisco A9KMpa8X10GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.47') { $details->model = 'Cisco Wvic2dsuT1DIR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.48') { $details->model = 'Cisco Wvic2dsuE1DIR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.49') { $details->model = 'Cisco Vic4vpFxsDid'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.5') { $details->model = 'Cisco WicST3420'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.50') { $details->model = 'Cisco Vic4fxoUsM1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.51') { $details->model = 'Cisco Vic4fxoM2M3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.52') { $details->model = 'Cisco Vic4fxoCAMA'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.55') { $details->model = 'Cisco WicEthernet'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.56') { $details->model = 'Cisco CeSA6DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.57') { $details->model = 'Cisco CeSA6AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.58') { $details->model = 'Cisco CeSA12AC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.59') { $details->model = 'Cisco C2610XM1Fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.6') { $details->model = 'Cisco WicST2186'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.60') { $details->model = 'Cisco C2611XM2Fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.61') { $details->model = 'Cisco C2620XM1Fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.62') { $details->model = 'Cisco C2621XM2Fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.63') { $details->model = 'Cisco C2650XM1Fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.64') { $details->model = 'Cisco C2651XM2Fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.65') { $details->model = 'Cisco Vic8fxoUsM1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.66') { $details->model = 'Cisco CeSA14'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.67') { $details->model = 'Cisco WicDslsar20174Isdn'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.68') { $details->model = 'Cisco WicDslsar20174Pots'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.69') { $details->model = 'Cisco SpaIpSec2G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.7') { $details->model = 'Cisco WicU3420'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.70') { $details->model = 'Cisco NmSe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.71') { $details->model = 'Cisco AimSe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.72') { $details->model = 'Cisco WicSe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.73') { $details->model = 'Cisco CeDs2100'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.74') { $details->model = 'Cisco Dfc16ce1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.75') { $details->model = 'Cisco Dfc16ct1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.76') { $details->model = 'Cisco Spa2pOc3Atm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.77') { $details->model = 'Cisco Spa4pOc3Atm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.78') { $details->model = 'Cisco Spa1pOc12Atm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.8') { $details->model = 'Cisco WicU2091'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.80') { $details->model = 'Cisco Spa1pOc48Atm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.83') { $details->model = 'Cisco Spa2pOc3Pos'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.84') { $details->model = 'Cisco Spa4pOc3Pos'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.85') { $details->model = 'Cisco Spa1pOc12Pos'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.86') { $details->model = 'Cisco Spa2pOc12Pos'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.87') { $details->model = 'Cisco Spa8pOc12Pos'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.88') { $details->model = 'Cisco Spa4pFe7304'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.89') { $details->model = 'Cisco Spa2pGe7304'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.9') { $details->model = 'Cisco WicU20912081'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.90') { $details->model = 'Cisco WicEswitch4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.91') { $details->model = 'Cisco WicBri3086u'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.92') { $details->model = 'Cisco Spa1pOc192PosRprXfp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.94') { $details->model = 'Cisco Spa1pOc192PosRprSmLr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.95') { $details->model = 'Cisco Spa1pOc192PosRprVsr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.96') { $details->model = 'Cisco Spa2pT3E3Serial'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.97') { $details->model = 'Cisco Spa4pT3E3Serial'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.98') { $details->model = 'Cisco Spa8pCT1E1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.2.99') { $details->model = 'Cisco Spa2pCT3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20') { $details->model = 'Cisco ModuleCat8500Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.1') { $details->model = 'Cisco Cat8500CpuSwitch'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.10') { $details->model = 'Cisco Cat8500FeUTP16p64k'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.11') { $details->model = 'Cisco Cat8500FeMMF16p16k'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.12') { $details->model = 'Cisco Cat8500FeMMF16p64k'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.13') { $details->model = 'Cisco Cat8500GeF1p16k'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.14') { $details->model = 'Cisco Cat8500GeF1p64k'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.15') { $details->model = 'Cisco Cat8500GeF2p16k'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.16') { $details->model = 'Cisco Cat8500GeF2p64k'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.17') { $details->model = 'Cisco Cat8500FeBridge4p'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.18') { $details->model = 'Cisco Cat8500RouteProc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.19') { $details->model = 'Cisco Cat8500Switch10GProc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.2') { $details->model = 'Cisco Cat8500FeatureFpga'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.20') { $details->model = 'Cisco Cat8500FeatureNetClock'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.21') { $details->model = 'Cisco Cat8500FeatureABR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.22') { $details->model = 'Cisco Cat8500FeatureLite'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.23') { $details->model = 'Cisco Cat8500m16pOC3Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.24') { $details->model = 'Cisco Cat8500m16pOC3Sm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.25') { $details->model = 'Cisco Cat8500m4pOC12Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.26') { $details->model = 'Cisco Cat8500m4pOC12Sm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.27') { $details->model = 'Cisco Cat8500m4pOC3Utp5'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.28') { $details->model = 'Cisco Cat8500m4pOC3Mixed'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.29') { $details->model = 'Cisco Cat8500m4pOC3Sm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.3') { $details->model = 'Cisco Cat8500FeatureAsic'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.30') { $details->model = 'Cisco Cat8500m4pOC3Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.31') { $details->model = 'Cisco Cat8500mATM25'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.32') { $details->model = 'Cisco Cat8500m4pE3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.33') { $details->model = 'Cisco Cat8500m4pDs3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.34') { $details->model = 'Cisco Cat8500mCbr75E1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.35') { $details->model = 'Cisco Cat8500mCbr120E1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.36') { $details->model = 'Cisco Cat8500mCbrT1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.37') { $details->model = 'Cisco Cat8500mE1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.38') { $details->model = 'Cisco Cat8500mT1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.39') { $details->model = 'Cisco Cat8500mE1Bnc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.4') { $details->model = 'Cisco Cat8500FeaturePVC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.40') { $details->model = 'Cisco Cat8500mE3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.41') { $details->model = 'Cisco Cat8500mDs3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.42') { $details->model = 'Cisco Cat8500m4pFrCE1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.43') { $details->model = 'Cisco Cat8500m1pFrCT3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.44') { $details->model = 'Cisco Cat8500GeF8p64k'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.45') { $details->model = 'Cisco Cat8500mArm1p64k'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.46') { $details->model = 'Cisco Cat8500mArm2p64k'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.47') { $details->model = 'Cisco Cat8500mOC48c1pSm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.48') { $details->model = 'Cisco Cat8500mIma8pT1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.49') { $details->model = 'Cisco Cat8500mIma8pE1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.5') { $details->model = 'Cisco Cat8500FeUTP8p16k'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.50') { $details->model = 'Cisco Cat8500mATM25m4p'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.51') { $details->model = 'Cisco Cat8500mOC121pMm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.52') { $details->model = 'Cisco Cat8500mOC121pSm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.53') { $details->model = 'Cisco Cat8500m1pOC12Mixed'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.54') { $details->model = 'Cisco Cat8500mFimBridge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.55') { $details->model = 'Cisco Cat8500mFimOC12Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.56') { $details->model = 'Cisco Cat8500Ge1pXpif16k'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.57') { $details->model = 'Cisco Cat8500Ge1pXpif64k'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.58') { $details->model = 'Cisco Cat8500Ge1pXpif256k'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.59') { $details->model = 'Cisco Cat8500Atm1pXpif64kOc12SmIr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.6') { $details->model = 'Cisco Cat8500FeUTP8p64k'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.60') { $details->model = 'Cisco Cat8500Atm1pXpif256kOc12SmIr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.61') { $details->model = 'Cisco Cat8500Atm1pXpif64kOc12Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.62') { $details->model = 'Cisco Cat8500Atm1pXpif256kOc12Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.63') { $details->model = 'Cisco Cat8500Atm1pXpif64kOc3SmIr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.64') { $details->model = 'Cisco Cat8500Atm1pXpif256kOc3SmIr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.65') { $details->model = 'Cisco Cat8500Atm1pXpif64kOc3Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.66') { $details->model = 'Cisco Cat8500Atm1pXpif256kOc3Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.67') { $details->model = 'Cisco Cat8500Pos1pXpif64kOc12SmIr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.68') { $details->model = 'Cisco Cat8500Pos1pXpif256kOc12SmIr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.69') { $details->model = 'Cisco Cat8500Pos1pXpif64kOc12SmLr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.7') { $details->model = 'Cisco Cat8500FeMMF8p16k'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.70') { $details->model = 'Cisco Cat8500Pos1pXpif256kOc12SmLr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.8') { $details->model = 'Cisco Cat8500FeMMF8p64k'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.20.9') { $details->model = 'Cisco Cat8500FeUTP16p16k'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21') { $details->model = 'Cisco ModuleWASCommonCards'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.1') { $details->model = 'Cisco Ausm8t1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.10') { $details->model = 'Cisco Axsm4Oc12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.100') { $details->model = 'Cisco Mpsm16e1Ces'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.101') { $details->model = 'Cisco Mpsm155t3e3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.102') { $details->model = 'Cisco MGXSm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.103') { $details->model = 'Cisco Vxsm48t1e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.104') { $details->model = 'Cisco Vxsm3T3E3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.105') { $details->model = 'Cisco Vxsm6t3e3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.106') { $details->model = 'Cisco Vxsm6t3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.107') { $details->model = 'Cisco Mpsm16t1e1Ppp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.108') { $details->model = 'Cisco Mpsm155t3e3Ppp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.11') { $details->model = 'Cisco Axsm8Oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.12') { $details->model = 'Cisco Axsm16Oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.13') { $details->model = 'Cisco Axsm16T3E3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.14') { $details->model = 'Cisco Cesm1t3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.15') { $details->model = 'Cisco Cesm1e3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.16') { $details->model = 'Cisco Vism8t1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.17') { $details->model = 'Cisco Vism8e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.18') { $details->model = 'Cisco MGXRpm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.19') { $details->model = 'Cisco MGXSrm3t3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.2') { $details->model = 'Cisco Ausm8e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.20') { $details->model = 'Cisco EnhAxsm1oc12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.21') { $details->model = 'Cisco EnhAxsm2oc12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.22') { $details->model = 'Cisco EnhAxsm4oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.23') { $details->model = 'Cisco EnhAxsm8oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.24') { $details->model = 'Cisco EnhAxsm4stm1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.25') { $details->model = 'Cisco EnhAxsm8stm1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.26') { $details->model = 'Cisco EnhAxsm8t3e3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.27') { $details->model = 'Cisco EnhAxsm16t3e3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.28') { $details->model = 'Cisco EnhAxsm8t1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.29') { $details->model = 'Cisco EnhAxsm16t1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.3') { $details->model = 'Cisco Cesm8t1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.30') { $details->model = 'Cisco EnhAxsm8e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.31') { $details->model = 'Cisco EnhAxsm16e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.32') { $details->model = 'Cisco Axsm2oc12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.34') { $details->model = 'Cisco MGXRpmPr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.38') { $details->model = 'Cisco Frsm4V35'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.39') { $details->model = 'Cisco Frsm2Ct3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.4') { $details->model = 'Cisco Cesm8e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.40') { $details->model = 'Cisco Frsm2t3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.41') { $details->model = 'Cisco Frsm2e3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.42') { $details->model = 'Cisco AusmB8t1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.43') { $details->model = 'Cisco AusmB8e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.45') { $details->model = 'Cisco Vixm4oc12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.46') { $details->model = 'Cisco Vixm16oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.49') { $details->model = 'Cisco CesmB8e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.5') { $details->model = 'Cisco Frsm8t1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.50') { $details->model = 'Cisco CesmB8t1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.51') { $details->model = 'Cisco FrsmC8e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.52') { $details->model = 'Cisco FrsmC8t1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.53') { $details->model = 'Cisco FrsmB2hssi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.54') { $details->model = 'Cisco FrsmB12In1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.55') { $details->model = 'Cisco Hsfr12t3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.56') { $details->model = 'Cisco Hsfr12e3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.57') { $details->model = 'Cisco Frsm12t3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.58') { $details->model = 'Cisco Frsm12e3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.59') { $details->model = 'Cisco FrsmB2T3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.6') { $details->model = 'Cisco Frsm8e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.60') { $details->model = 'Cisco MgxSrme1Sts3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.61') { $details->model = 'Cisco MgxSrm3t3NoBc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.62') { $details->model = 'Cisco MgxSrmeNoBc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.63') { $details->model = 'Cisco AxsmEn16t1e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.64') { $details->model = 'Cisco AxsmEn32t1e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.66') { $details->model = 'Cisco FrsmB2e3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.7') { $details->model = 'Cisco Frsm4x21'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.70') { $details->model = 'Cisco VismPr8t1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.71') { $details->model = 'Cisco VismPr8e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.72') { $details->model = 'Cisco MGXSrmE1Oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.73') { $details->model = 'Cisco Axsm2Oc48'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.74') { $details->model = 'Cisco Axsm8Oc12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.8') { $details->model = 'Cisco Frsm2hssi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.81') { $details->model = 'Cisco Vxsm4Oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.82') { $details->model = 'Cisco MGXSrm4Oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.87') { $details->model = 'Cisco Mpsm8t1e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.88') { $details->model = 'Cisco Mpsm8t1Atm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.89') { $details->model = 'Cisco Mpsm8t1Fr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.9') { $details->model = 'Cisco Axsm1Oc48'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.90') { $details->model = 'Cisco Mpsm8t1Ces'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.91') { $details->model = 'Cisco Mpsm8e1Atm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.92') { $details->model = 'Cisco Mpsm8e1Fr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.93') { $details->model = 'Cisco Mpsm8e1Ces'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.94') { $details->model = 'Cisco Mpsm16t1e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.95') { $details->model = 'Cisco Mpsm16t1Atm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.96') { $details->model = 'Cisco Mpsm16t1Fr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.97') { $details->model = 'Cisco Mpsm16t1Ces'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.98') { $details->model = 'Cisco Mpsm16e1Atm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.21.99') { $details->model = 'Cisco Mpsm16e1Fr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.22') { $details->model = 'Cisco Module38xxType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.22.1') { $details->model = 'Cisco Mc3810Vcm3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.22.10') { $details->model = 'Cisco Mc3810ApmFxsDid'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.22.11') { $details->model = 'Cisco Mc3810BvmNtTe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.22.12') { $details->model = 'Cisco Mc3810Hcm1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.22.13') { $details->model = 'Cisco Mc3810Hcm3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.22.14') { $details->model = 'Cisco Mc3810Hcm4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.22.15') { $details->model = 'Cisco Mc3810Hcm5'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.22.17') { $details->model = 'Cisco SmSre710K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.22.18') { $details->model = 'Cisco SmSre910K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.22.2') { $details->model = 'Cisco Mc3810Bvm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.22.3') { $details->model = 'Cisco Mc3810AvmFxoUk'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.22.4') { $details->model = 'Cisco Mc3810AvmFxoGer'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.22.5') { $details->model = 'Cisco Mc3810Hcm2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.22.6') { $details->model = 'Cisco Mc3810Hcm6'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.22.7') { $details->model = 'Cisco Mc3810AvmFxoPr3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.22.8') { $details->model = 'Cisco Mc3810AvmFxoPr2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.22.9') { $details->model = 'Cisco Mc3810Vdm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23') { $details->model = 'Cisco ModuleCat29xxType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.1') { $details->model = 'Cisco X2914'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.10') { $details->model = 'Cisco X2931'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.12') { $details->model = 'Cisco ModuleCat297024'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.13') { $details->model = 'Cisco ModuleCat297024TS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.14') { $details->model = 'Cisco ModuleCat297048TS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.15') { $details->model = 'Cisco ModuleCat296024'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.16') { $details->model = 'Cisco ModuleCat296048'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.17') { $details->model = 'Cisco ModuleCat2960G24'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.18') { $details->model = 'Cisco ModuleCat2960G48'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.19') { $details->model = 'Cisco ModuleCat296024TT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.2') { $details->model = 'Cisco X2922'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.20') { $details->model = 'Cisco ModuleCat296048TT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.21') { $details->model = 'Cisco ModuleCat29608TC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.22') { $details->model = 'Cisco ModuleCat2960G8TC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.23') { $details->model = 'Cisco ModuleCat296048TCS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.24') { $details->model = 'Cisco ModuleCat296024TCS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.25') { $details->model = 'Cisco ModuleCat296024S'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.26') { $details->model = 'Cisco ModuleCat296024PC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.27') { $details->model = 'Cisco ModuleCat296024LT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.28') { $details->model = 'Cisco ModuleCat2960PD8TT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.29') { $details->model = 'Cisco ModuleCat291824TT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.3') { $details->model = 'Cisco X2914V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.30') { $details->model = 'Cisco ModuleCat291824TC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.31') { $details->model = 'Cisco ModuleCat291848TT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.32') { $details->model = 'Cisco ModuleCat291848TC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.33') { $details->model = 'Cisco ModuleCat296048TTS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.34') { $details->model = 'Cisco ModuleCat29608TCS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.35') { $details->model = 'Cisco ModuleCat296048PSTL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.36') { $details->model = 'Cisco ModuleCat296024LCS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.37') { $details->model = 'Cisco ModuleCat296024PCS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.38') { $details->model = 'Cisco ModuleCat296048PSTS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.39') { $details->model = 'Cisco ModuleWsC2960s48tsS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.4') { $details->model = 'Cisco X2922V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.40') { $details->model = 'Cisco ModuleWsC2960s24tsS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.41') { $details->model = 'Cisco ModuleWsC2960s48fpdL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.42') { $details->model = 'Cisco ModuleWsC2960s48lpdL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.43') { $details->model = 'Cisco ModuleWsC2960s48tdL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.44') { $details->model = 'Cisco ModuleWsC2960s24pdL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.45') { $details->model = 'Cisco ModuleWsC2960s24tdL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.46') { $details->model = 'Cisco ModuleWsC2960s48fpsL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.47') { $details->model = 'Cisco ModuleWsC2960s48lpsL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.48') { $details->model = 'Cisco ModuleWsC2960s24psL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.49') { $details->model = 'Cisco ModuleWsC2960s48tsL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.5') { $details->model = 'Cisco X2924V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.50') { $details->model = 'Cisco ModuleWsC2960S24tsL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.51') { $details->model = 'Cisco ModuleCat2960cPD8TT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.54') { $details->model = 'Cisco ModuleCat292824TCC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.55') { $details->model = 'Cisco ModuleCat292824LTC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.56') { $details->model = 'Cisco ModuleCat292848TCC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.57') { $details->model = 'Cisco ModuleWsC2960C8tcS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.58') { $details->model = 'Cisco ModuleWsC2960C8tcL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.59') { $details->model = 'Cisco ModuleWsC2960C8pcL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.6') { $details->model = 'Cisco X2951'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.60') { $details->model = 'Cisco ModuleWsC2960C12pcL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.7') { $details->model = 'Cisco X2961'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.8') { $details->model = 'Cisco X2971'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.23.9') { $details->model = 'Cisco X2972'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.24') { $details->model = 'Cisco ModuleOscillatorType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.24.1') { $details->model = 'Cisco Stratum3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.24.2') { $details->model = 'Cisco Stratum4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25') { $details->model = 'Cisco ModuleDslamType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.1') { $details->model = 'Cisco Ni2WanOc3mmSubOc3mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.10') { $details->model = 'Cisco Atuc1p4Cap'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.11') { $details->model = 'Cisco Stuc1p4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.13') { $details->model = 'Cisco Atuc1p4FlexiDmt'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.14') { $details->model = 'Cisco Atuc1p4FlexiCap'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.15') { $details->model = 'Cisco Atuc1p4Flexi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.16') { $details->model = 'Cisco Atuc1p4DmtIsdn'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.17') { $details->model = 'Cisco Ni2WanOc3smSub2Ds3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.18') { $details->model = 'Cisco Ni2WanOc3mmSub2Ds3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.2') { $details->model = 'Cisco Ni2WanDs3Sub2Ds3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.21') { $details->model = 'Cisco Atuc1p8DmtItemp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.22') { $details->model = 'Cisco Stuc1p8Itemp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.3') { $details->model = 'Cisco Atuc1p2Cap'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.35') { $details->model = 'Cisco Ni2WanDs3Sub2Ds3Rev2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.36') { $details->model = 'Cisco Ni2WanOc3smSubOc3smRev2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.37') { $details->model = 'Cisco Ni2WanOc3mmSubOc3mmRev2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.38') { $details->model = 'Cisco Ni2WanOc3smSub2Ds3Rev2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.39') { $details->model = 'Cisco Ni2WanOc3mmSub2Ds3Rev2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.4') { $details->model = 'Cisco Atuc1p2Dmt'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.40') { $details->model = 'Cisco Ni2WanOc3smSubOc3smItemp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.43') { $details->model = 'Cisco Io6100DS3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.44') { $details->model = 'Cisco Io6160DS3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.45') { $details->model = 'Cisco Io6260OC3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.46') { $details->model = 'Cisco Io6260Ds3T1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.5') { $details->model = 'Cisco Atuc1p4Dmt'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.6') { $details->model = 'Cisco Lim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.7') { $details->model = 'Cisco Ni2WanOc3smSubOc3sm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.8') { $details->model = 'Cisco Ni2WanE3Sub2E3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.25.9') { $details->model = 'Cisco Ni2WanDs3Sub8Ds1Ima'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26') { $details->model = 'Cisco ModuleWASBackCards'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.1') { $details->model = 'Cisco LmBnc2t3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.10') { $details->model = 'Cisco LmSmb8e1R'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.100') { $details->model = 'Cisco LmSmf4Oc12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.101') { $details->model = 'Cisco LmChamp24t1e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.102') { $details->model = 'Cisco LmSmb3t3e3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.103') { $details->model = 'Cisco LmVxsmSmfIr4Oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.104') { $details->model = 'Cisco LmVxsmSmfLr4Oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.105') { $details->model = 'Cisco LmVxsm4Oc3R'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.106') { $details->model = 'Cisco LmVxsmMmf4Oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.107') { $details->model = 'Cisco Lm4V35'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.108') { $details->model = 'Cisco Lm4X21'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.109') { $details->model = 'Cisco LmMgxXfUIB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.11') { $details->model = 'Cisco LmPsmUI'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.110') { $details->model = 'Cisco Lm5efegeTx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.111') { $details->model = 'Cisco LmPsmHDV'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.12') { $details->model = 'Cisco LmMmf4oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.13') { $details->model = 'Cisco LmSmfIr4oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.14') { $details->model = 'Cisco LmSmfLr4oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.15') { $details->model = 'Cisco LmSmfIr1oc12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.16') { $details->model = 'Cisco LmSmfLr1oc12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.17') { $details->model = 'Cisco LmS3Ui'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.18') { $details->model = 'Cisco Lm1feTx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.19') { $details->model = 'Cisco Lm1feFx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.2') { $details->model = 'Cisco LmBnc2e3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.20') { $details->model = 'Cisco Lm1mmfFddi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.21') { $details->model = 'Cisco Lm1smfFddi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.22') { $details->model = 'Cisco LmRj454e'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.23') { $details->model = 'Cisco LmMmf8oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.24') { $details->model = 'Cisco LmSmfIr8oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.25') { $details->model = 'Cisco LmSmfLr8oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.26') { $details->model = 'Cisco LmSmfIr1oc48'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.27') { $details->model = 'Cisco LmSmfLr1oc48'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.28') { $details->model = 'Cisco LmPsmHD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.29') { $details->model = 'Cisco LmSmb8t3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.3') { $details->model = 'Cisco LmDb154x21'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.30') { $details->model = 'Cisco LmSmb8e3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.31') { $details->model = 'Cisco LmSmb4stm1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.32') { $details->model = 'Cisco LmSmfIr2oc12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.33') { $details->model = 'Cisco LmSmfLr2oc12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.34') { $details->model = 'Cisco LmSmfSr1oc48'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.35') { $details->model = 'Cisco LmSmfXlr1oc48'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.36') { $details->model = 'Cisco LmBnc3t3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.37') { $details->model = 'Cisco LmSmfIr1Oc48B'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.38') { $details->model = 'Cisco LmSmfLr1Oc48B'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.39') { $details->model = 'Cisco LmSmfSr1Oc48B'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.4') { $details->model = 'Cisco LmScsi22hssi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.40') { $details->model = 'Cisco LmSmfIr2Oc12B'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.41') { $details->model = 'Cisco LmSmfLr2Oc12B'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.42') { $details->model = 'Cisco LmSmfIr1Oc12C'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.43') { $details->model = 'Cisco LmSmfLr1Oc12C'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.44') { $details->model = 'Cisco LmMmf4Oc3C'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.45') { $details->model = 'Cisco LmSmfIr4Oc3C'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.46') { $details->model = 'Cisco LmSmfLr4Oc3C'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.5') { $details->model = 'Cisco LmRj488t1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.51') { $details->model = 'Cisco LmSmfXlr1Oc48B'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.55') { $details->model = 'Cisco Lm1feTxcp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.58') { $details->model = 'Cisco LmSmfIr8Oc3C'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.59') { $details->model = 'Cisco LmSmfLr8Oc3C'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.6') { $details->model = 'Cisco LmRj488t1R'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.60') { $details->model = 'Cisco LmMmf8Oc3C'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.61') { $details->model = 'Cisco LmSmfIr1Oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.62') { $details->model = 'Cisco LmSmfLr1Oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.63') { $details->model = 'Cisco LmSmb1Stm1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.64') { $details->model = 'Cisco LmScsi2B2hssi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.65') { $details->model = 'Cisco Lm12In18s'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.66') { $details->model = 'Cisco LmSmb6e3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.67') { $details->model = 'Cisco LmComboT3E3Oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.68') { $details->model = 'Cisco LmRj488t1e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.69') { $details->model = 'Cisco LmMcc16e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.7') { $details->model = 'Cisco LmRj488e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.70') { $details->model = 'Cisco LmRj4816t1e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.71') { $details->model = 'Cisco LmSmfIr2Oc12c'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.72') { $details->model = 'Cisco LmSmfLr2Oc12c'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.8') { $details->model = 'Cisco LmRj488e1R'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.82') { $details->model = 'Cisco LmSmb8Stm1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.83') { $details->model = 'Cisco LmSmf8Oc3Sfp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.84') { $details->model = 'Cisco LmRbbn16t1e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.85') { $details->model = 'Cisco LmSmfSr1Oc192'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.86') { $details->model = 'Cisco LmSmfIr1Oc192'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.87') { $details->model = 'Cisco LmSmfLr1Oc192'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.88') { $details->model = 'Cisco LmSmfXlr1Oc192'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.89') { $details->model = 'Cisco LmMcc8oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.9') { $details->model = 'Cisco LmSmb8e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.92') { $details->model = 'Cisco LmRbbn16t1e11N'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.93') { $details->model = 'Cisco LmMcc16e11N'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.94') { $details->model = 'Cisco LmRed16t1e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.95') { $details->model = 'Cisco LmSfp2Oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.96') { $details->model = 'Cisco LmSmb2Oc3EL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.97') { $details->model = 'Cisco LmBnc3t3e3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.98') { $details->model = 'Cisco LmRed2Oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.26.99') { $details->model = 'Cisco LmRed3t3e3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27') { $details->model = 'Cisco ModuleUbrType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.10') { $details->model = 'Cisco UbrMc16e'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.11') { $details->model = 'Cisco UbrMc28c'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.12') { $details->model = 'Cisco UbrMc26'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.13') { $details->model = 'Cisco Ubr912C'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.14') { $details->model = 'Cisco Ubr912S'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.15') { $details->model = 'Cisco Ubr914R'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.16') { $details->model = 'Cisco UbrClk'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.17') { $details->model = 'Cisco Ubr925'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.18') { $details->model = 'Cisco UbrMc26c'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.2') { $details->model = 'Cisco UbrMc16s'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.21') { $details->model = 'Cisco UbrMc28cf'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.22') { $details->model = 'Cisco UbrMc28cBnc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.23') { $details->model = 'Cisco UbrMc26cf'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.24') { $details->model = 'Cisco UbrMc26cBnc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.26') { $details->model = 'Cisco UbrDlc24'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.3') { $details->model = 'Cisco UbrMc11'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.33') { $details->model = 'Cisco UbrMc28j'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.34') { $details->model = 'Cisco UbrMc28u'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.35') { $details->model = 'Cisco UbrMc16u'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.36') { $details->model = 'Cisco UbrMc28x'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.37') { $details->model = 'Cisco UbrMc16x'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.38') { $details->model = 'Cisco UbrMc520uD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.39') { $details->model = 'Cisco UbrMc520uF'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.4') { $details->model = 'Cisco UbrMc11c'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.41') { $details->model = 'Cisco UbrTccPlus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.42') { $details->model = 'Cisco UbrMc16uE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.43') { $details->model = 'Cisco UbrMc28uE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.44') { $details->model = 'Cisco UbrDtcc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.46') { $details->model = 'Cisco UbrMc88v'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.47') { $details->model = 'Cisco Ubrmc2020'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.5') { $details->model = 'Cisco UbrMc12c'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.6') { $details->model = 'Cisco UbrMc14c'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.7') { $details->model = 'Cisco UbrMc16a'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.8') { $details->model = 'Cisco UbrMc16b'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.27.9') { $details->model = 'Cisco UbrMc16c'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.28') { $details->model = 'Cisco ModuleCmccType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.28.1') { $details->model = 'Cisco CmccCip'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.28.2') { $details->model = 'Cisco CmccCip2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.28.3') { $details->model = 'Cisco CmccPa1ec'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.28.4') { $details->model = 'Cisco CmccPa1pc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.28.5') { $details->model = 'Cisco CmccPa1ec4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29') { $details->model = 'Cisco ModuleCat6000Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.10') { $details->model = 'Cisco Cat6kMsfc2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.100') { $details->model = 'Cisco Cat6kWsf6kdfc3b'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.101') { $details->model = 'Cisco Cat6kWsf6700dfc3b'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.102') { $details->model = 'Cisco Cat6kWsf6kpfc3bxl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.103') { $details->model = 'Cisco Cat6kWsf6kdfc3bxl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.104') { $details->model = 'Cisco Cat6kWsf6700dfc3bxl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.105') { $details->model = 'Cisco Cat6kCsg'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.106') { $details->model = 'Cisco Cat6kMsfc2a'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.107') { $details->model = 'Cisco Cat6kWs6340Sup'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.108') { $details->model = 'Cisco Cat6kWs6340LcA'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.109') { $details->model = 'Cisco Cat6kWs6340LcB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.11') { $details->model = 'Cisco Cat6kWsx6316GeTx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.110') { $details->model = 'Cisco Cat6kMec6524gs8s'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.111') { $details->model = 'Cisco Cat6kMec6524gt8s'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.114') { $details->model = 'Cisco Cat6kMec6524Msfc2a'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.115') { $details->model = 'Cisco Cat6kMec6524Pfc3c'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.116') { $details->model = 'Cisco Cat6kWsx6196Rj21'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.117') { $details->model = 'Cisco Cat6kWsx6148FeSfp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.118') { $details->model = 'Cisco Cat6kWsx6148aGeTx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.119') { $details->model = 'Cisco Cat6kWsx6148aRj45'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.12') { $details->model = 'Cisco Cat6kWsx6416Gbic'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.120') { $details->model = 'Cisco Cat6kAce10K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.122') { $details->model = 'Cisco Cat6kWsg6483'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.123') { $details->model = 'Cisco Cat6kWsg6485'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.124') { $details->model = 'Cisco Cat6kWsg6488'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.125') { $details->model = 'Cisco Cat6kWsg6489'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.126') { $details->model = 'Cisco Cat6kWsSvcWebVpnK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.127') { $details->model = 'Cisco Cat6kSAMIBB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.128') { $details->model = 'Cisco Cat6kWsx6708a10ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.129') { $details->model = 'Cisco Cat6kWsx670810ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.13') { $details->model = 'Cisco Cat6kWsx6324100Fx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.131') { $details->model = 'Cisco Cat6kWsf6700Dfc3c'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.132') { $details->model = 'Cisco Cat6kWsf6700Dfc3cxl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.133') { $details->model = 'Cisco Cat6kVsS72010G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.134') { $details->model = 'Cisco Cat6kVsf6kPfc3c'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.135') { $details->model = 'Cisco Cat6kVsf6kPfc3cxl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.136') { $details->model = 'Cisco Cat6kVsF6kMsfc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.137') { $details->model = 'Cisco Cat6kWsF6kPisa'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.138') { $details->model = 'Cisco Cat6kVsF6kPfc4xl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.139') { $details->model = 'Cisco Cat6kWsF6kDfc4exl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.14') { $details->model = 'Cisco Cat6kWsx6348Rj45'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.142') { $details->model = 'Cisco Cat6kWsx671610Ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.143') { $details->model = 'Cisco Cat6kVsF6kPfc4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.144') { $details->model = 'Cisco Cat6kWsF6kDfc4e'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.145') { $details->model = 'Cisco Cat6kWsSup32Pge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.146') { $details->model = 'Cisco Cat6kWsSup32P10ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.148') { $details->model = 'Cisco Cat6kWsx690810g'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.15') { $details->model = 'Cisco Cat6kWsx650210ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.155') { $details->model = 'Cisco Cat6kWsc6513Ecl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.156') { $details->model = 'Cisco Cat6kWsSvcWism'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.157') { $details->model = 'Cisco Cat6kWsSvcNam1S250'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.158') { $details->model = 'Cisco Cat6kWsSvcNam2S250'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.159') { $details->model = 'Cisco Cat6kWsF6kDfc4a'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.16') { $details->model = 'Cisco Cat6kWsx6066SlbApc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.160') { $details->model = 'Cisco Cat6kWsF6kDfc4axl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.163') { $details->model = 'Cisco Cat6kVsSup2t10g'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.164') { $details->model = 'Cisco Cat6kVsF6kMsfc5'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.166') { $details->model = 'Cisco Cat6kWsf6k48At'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.167') { $details->model = 'Cisco Cat6kWsx6148eGe45At'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.168') { $details->model = 'Cisco Cat6kWsx671610T'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.169') { $details->model = 'Cisco Cat6kWsSvcAsaSm1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.172') { $details->model = 'Cisco Cat6kWsx6148eGeTx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.174') { $details->model = 'Cisco Cat6kWsx690440g'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.175') { $details->model = 'Cisco Cat6kWsSvcNam3K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.176') { $details->model = 'Cisco Cat6kWsx6848Tx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.178') { $details->model = 'Cisco Cat6kWsx6848sfp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.179') { $details->model = 'Cisco Cat6kWsx6824sfp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.18') { $details->model = 'Cisco Cat6kWsx6548Rj45'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.181') { $details->model = 'Cisco Cat6kWsx681610ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.182') { $details->model = 'Cisco Cat6kWsx681610t'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.184') { $details->model = 'Cisco Cat6kACE20K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.186') { $details->model = 'Cisco Cat6kWsSvcAsaSm1K7'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.19') { $details->model = 'Cisco Cat6kWsx6248aTel'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.2') { $details->model = 'Cisco Cat6kWsxSup12ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.20') { $details->model = 'Cisco Cat6kWsxSup22ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.21') { $details->model = 'Cisco Cat6kWsc6500SFM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.22') { $details->model = 'Cisco Cat6kWsc6500SFM2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.23') { $details->model = 'Cisco Cat6kWsx6816GBIC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.27') { $details->model = 'Cisco Cat6kWsx6600Audio'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.28') { $details->model = 'Cisco Cat6kWsx6348RJ21'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.29') { $details->model = 'Cisco Cat6kWsx6516GBIC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.3') { $details->model = 'Cisco Cat6kWsx6408Gbic'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.30') { $details->model = 'Cisco Cat6kWsxSup1a2ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.31') { $details->model = 'Cisco Cat6kWsx6548RJ21'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.32') { $details->model = 'Cisco Cat6kWsx6416GEMT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.33') { $details->model = 'Cisco Cat6kWsx6380NAM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.34') { $details->model = 'Cisco Cat6kWsx6248aRJ45'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.35') { $details->model = 'Cisco Cat6kWsx6408aGbic'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.36') { $details->model = 'Cisco Cat6kWsx6381IDS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.37') { $details->model = 'Cisco Cat6kWsx6524MmMT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.38') { $details->model = 'Cisco Cat6kWsx6516GeTx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.39') { $details->model = 'Cisco Cat6kWsx650110Gex4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.4') { $details->model = 'Cisco Cat6kWsx6224Fx100Mt'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.40') { $details->model = 'Cisco Cat6kWsx6816Oc3Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.41') { $details->model = 'Cisco Cat6kWsf6kVpwr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.42') { $details->model = 'Cisco Cat6kWsSvcNam1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.43') { $details->model = 'Cisco Cat6kWsSvcNam2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.44') { $details->model = 'Cisco Cat6kWsSvcFwm1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.45') { $details->model = 'Cisco Cat6kWsSvcSsl1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.46') { $details->model = 'Cisco Cat6kWsx6516aGBIC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.49') { $details->model = 'Cisco Cat6kIpSecVPNSm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.5') { $details->model = 'Cisco Cat6kWsx6248Rj45'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.50') { $details->model = 'Cisco Cat6kWsSup720'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.51') { $details->model = 'Cisco Cat6kWsSup720Base'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.52') { $details->model = 'Cisco Cat6kWsx680210Ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.53') { $details->model = 'Cisco Cat6kWsx6832Sfp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.54') { $details->model = 'Cisco Cat6kWsx6748GeTx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.55') { $details->model = 'Cisco Cat6kWsx670410Ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.56') { $details->model = 'Cisco Cat6kWsx6748Sfp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.57') { $details->model = 'Cisco Cat6kWsx6724Sfp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.58') { $details->model = 'Cisco Cat6kWsf6kPfc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.59') { $details->model = 'Cisco Cat6kWsf6kPfc2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.6') { $details->model = 'Cisco Cat6kWsx6248Tel'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.60') { $details->model = 'Cisco Cat6kWsf6kDfc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.61') { $details->model = 'Cisco Cat6kWsf6kPfc3a'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.62') { $details->model = 'Cisco Cat6kWsf6kDfc3a'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.63') { $details->model = 'Cisco Cat6kWsx6148GeTx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.64') { $details->model = 'Cisco Cat6kWsx6148Rj21'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.65') { $details->model = 'Cisco Cat6kWsx6148Rj45'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.66') { $details->model = 'Cisco Cat6kMWAMBlade'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.67') { $details->model = 'Cisco Cat6kWsx6548GeTx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.68') { $details->model = 'Cisco Cat6kWsf6700dfc3a'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.69') { $details->model = 'Cisco Cat6kWsx6324100FxSm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.7') { $details->model = 'Cisco Cat6kWsx6302Msm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.70') { $details->model = 'Cisco Cat6kWsc6000cl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.71') { $details->model = 'Cisco Cat6kWsc6513cl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.72') { $details->model = 'Cisco Clk7600'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.73') { $details->model = 'Cisco Cat6kWsc6kvtt'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.74') { $details->model = 'Cisco Cat6kWsx6302aMsm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.75') { $details->model = 'Cisco Cat6kMemC6kAta164M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.76') { $details->model = 'Cisco Cat6kMemC6kCptfl64M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.77') { $details->model = 'Cisco Cat6kMemC6kCptfl128M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.78') { $details->model = 'Cisco Cat6kMemC6kCptfl256M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.79') { $details->model = 'Cisco Cat6kMemC6kFlc16M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.80') { $details->model = 'Cisco Cat6kMemC6kFlc24M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.81') { $details->model = 'Cisco Cat6kWsSvcIdsm2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.82') { $details->model = 'Cisco Cat6kWssvcidsupg'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.83') { $details->model = 'Cisco Cat6kWsx6148x2Rj45'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.84') { $details->model = 'Cisco Cat6kWsf6kFe48x2Af'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.85') { $details->model = 'Cisco Cat6kWsf6kFe48Af'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.86') { $details->model = 'Cisco Cat6kWsf6kGe48Af'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.87') { $details->model = 'Cisco Cat6kWsf6kVpwrGe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.88') { $details->model = 'Cisco Cat6kWsf6700cfc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.89') { $details->model = 'Cisco Cat6kWsSvcWlan1K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.9') { $details->model = 'Cisco Cat6kWsx6024Mtrj'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.90') { $details->model = 'Cisco Cat6kWsx6624Fxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.91') { $details->model = 'Cisco Cat6kWsSvcAon1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.92') { $details->model = 'Cisco Cat6kWsSup32ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.93') { $details->model = 'Cisco Cat6kWsSup3210ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.94') { $details->model = 'Cisco Cat6kPSDBlade'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.95') { $details->model = 'Cisco Cat6kWsc6kvtte'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.98') { $details->model = 'Cisco Cat6kWsx6066SlbsK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.29.99') { $details->model = 'Cisco Cat6kWsf6kpfc3b'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3') { $details->model = 'Cisco ModuleC36xxType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.1') { $details->model = 'Cisco PmCpm1e2w'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.10') { $details->model = 'Cisco PmCe1Unbalanced'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.102') { $details->model = 'Cisco Nm1ct1e1Pri'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.103') { $details->model = 'Cisco Nm2ct1e1Pri'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.104') { $details->model = 'Cisco NmCeoip4t1e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.105') { $details->model = 'Cisco NmCeoip4Serial'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.106') { $details->model = 'Cisco Nm1aOc3mmEp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.107') { $details->model = 'Cisco Nm1aOc3smiEp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.108') { $details->model = 'Cisco Nm1aOc3smlEp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.109') { $details->model = 'Cisco NmCids'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.11') { $details->model = 'Cisco Pm2ce1Unbalanced'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.119') { $details->model = 'Cisco Hwic1GeSfp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.12') { $details->model = 'Cisco Pm4bU'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.120') { $details->model = 'Cisco Port HdDsp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.121') { $details->model = 'Cisco Hdv2port0'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.122') { $details->model = 'Cisco Hdv2port2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.123') { $details->model = 'Cisco Hdv2port1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.124') { $details->model = 'Cisco NmAtm25'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.125') { $details->model = 'Cisco NmNam'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.126') { $details->model = 'Cisco Nm8amV2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.127') { $details->model = 'Cisco Nm16amV2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.129') { $details->model = 'Cisco CpuC28112fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.13') { $details->model = 'Cisco Pm4bSt'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.130') { $details->model = 'Cisco CpuC28212ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.131') { $details->model = 'Cisco CpuC28512ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.132') { $details->model = 'Cisco HWicSerial4t'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.133') { $details->model = 'Cisco HWicSerial4as'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.134') { $details->model = 'Cisco HWicSerial8as'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.135') { $details->model = 'Cisco HWicSerial8a'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.136') { $details->model = 'Cisco HWicSerial16a'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.137') { $details->model = 'Cisco Nm1AOc3Pom'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.14') { $details->model = 'Cisco Pm8bU'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.146') { $details->model = 'Cisco HWic1DOCSIS20CableModem'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.148') { $details->model = 'Cisco Nm8ce1t1Pri'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.149') { $details->model = 'Cisco HWic4t1e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.15') { $details->model = 'Cisco Pm8bSt'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.150') { $details->model = 'Cisco HWic2ce1t1Pri'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.151') { $details->model = 'Cisco HWic1ce1t1Pri'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.152') { $details->model = 'Cisco HWic1DOCSIS20CableModemEJ'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.154') { $details->model = 'Cisco Hwic1t1e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.157') { $details->model = 'Cisco Hwic4Shdsl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.158') { $details->model = 'Cisco Hwic2Shdsl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.159') { $details->model = 'Cisco NmRvpnSterra'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.16') { $details->model = 'Cisco Pm4as'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.160') { $details->model = 'Cisco NmRvpn'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.161') { $details->model = 'Cisco NmSpclSrvcEng'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.162') { $details->model = 'Cisco NmIntgrtdSrvcEng2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.163') { $details->model = 'Cisco HWIC1Ser'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.164') { $details->model = 'Cisco HWIC2Ser'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.165') { $details->model = 'Cisco InternalServiceModuleAIM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.167') { $details->model = 'Cisco Sm1nm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.168') { $details->model = 'Cisco Sm2k15Es1GePoe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.169') { $details->model = 'Cisco Sm3k15Es1GePoe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.17') { $details->model = 'Cisco Pm8as'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.170') { $details->model = 'Cisco Sm3k16GePoe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.171') { $details->model = 'Cisco Sm2k23Es1Ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.172') { $details->model = 'Cisco Sm2k23Es1GePoe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.173') { $details->model = 'Cisco Sm3k23Es1GePoe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.174') { $details->model = 'Cisco Sm3k24GePoe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.175') { $details->model = 'Cisco SmXd2k48Es2SFP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.176') { $details->model = 'Cisco SmXd3k48Es2SFPPoe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.177') { $details->model = 'Cisco SmXd3k48Ge2SFPPoe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.18') { $details->model = 'Cisco Pm4e'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.180') { $details->model = 'Cisco Hwic4ce1t1Pri'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.181') { $details->model = 'Cisco EHwic1GeSfpCu'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.182') { $details->model = 'Cisco Ehwic3gEvdo'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.183') { $details->model = 'Cisco Ehwic3gHspaU'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.184') { $details->model = 'Cisco Sm1pa'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.185') { $details->model = 'Cisco Sm1Stm1Smi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.186') { $details->model = 'Cisco Sm1Stm1Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.187') { $details->model = 'Cisco Ehwic3gHspa7'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.19') { $details->model = 'Cisco Pm1e'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.191') { $details->model = 'Cisco Ehwic3gHspa7A'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.193') { $details->model = 'Cisco Ehwic4gLteA'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.194') { $details->model = 'Cisco Ehwic4gLteG'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.197') { $details->model = 'Cisco SM32A'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.2') { $details->model = 'Cisco PmCpm2e2w'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.21') { $details->model = 'Cisco PmM4t'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.22') { $details->model = 'Cisco Pm16a'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.23') { $details->model = 'Cisco Pm32a'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.24') { $details->model = 'Cisco PmC36001fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.25') { $details->model = 'Cisco PmC3600Compression'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.26') { $details->model = 'Cisco PmDmodem'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.27') { $details->model = 'Cisco Pm8admodem'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.28') { $details->model = 'Cisco Pm16admodem'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.29') { $details->model = 'Cisco Vpm2v'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.3') { $details->model = 'Cisco PmCpm1e1r2w'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.30') { $details->model = 'Cisco Vpm4v'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.31') { $details->model = 'Cisco PmC36001feTx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.32') { $details->model = 'Cisco PmC36001feFx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.33') { $details->model = 'Cisco Pm1fe1t1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.34') { $details->model = 'Cisco Pm1fe2t1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.35') { $details->model = 'Cisco Pm1fe1e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.36') { $details->model = 'Cisco Pm1fe2e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.37') { $details->model = 'Cisco Pm1fe1t1Csu'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.38') { $details->model = 'Cisco Pm1fe2t1Csu'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.39') { $details->model = 'Cisco C36xx2feTx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.4') { $details->model = 'Cisco PmCt1Csu'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.40') { $details->model = 'Cisco PmOc3mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.41') { $details->model = 'Cisco PmOc3mmVpd'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.42') { $details->model = 'Cisco PmOc3smiVpd'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.43') { $details->model = 'Cisco PmOc3smlVpd'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.44') { $details->model = 'Cisco PmOc3sml'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.45') { $details->model = 'Cisco PmOc3smi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.46') { $details->model = 'Cisco Vic2fxoEu'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.47') { $details->model = 'Cisco Vic2fxoM3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.48') { $details->model = 'Cisco Vic2fxoM4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.49') { $details->model = 'Cisco Vic2fxoM5'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.5') { $details->model = 'Cisco Pm2ct1Csu'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.50') { $details->model = 'Cisco Vic2fxoM6'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.51') { $details->model = 'Cisco Vic2fxoM7'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.52') { $details->model = 'Cisco Vic2fxoM8'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.53') { $details->model = 'Cisco Vic2ST2086'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.54') { $details->model = 'Cisco Hdv'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.59') { $details->model = 'Cisco Nm1fe2w'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.6') { $details->model = 'Cisco PmCt1Dsx1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.60') { $details->model = 'Cisco Nm2fe2w'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.61') { $details->model = 'Cisco Nm1fe1r2w'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.62') { $details->model = 'Cisco Nm2w'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.63') { $details->model = 'Cisco C36xx1feTx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.64') { $details->model = 'Cisco AimLc4e1Compression'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.65') { $details->model = 'Cisco Vic2fxoM1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.68') { $details->model = 'Cisco Vic2fxoM2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.69') { $details->model = 'Cisco PmDs3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.7') { $details->model = 'Cisco Pm2ct1Dsx1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.70') { $details->model = 'Cisco PmE3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.74') { $details->model = 'Cisco Vic2vpFxsDid'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.75') { $details->model = 'Cisco Vic2ST2086NtTe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.76') { $details->model = 'Cisco NmAic64'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.77') { $details->model = 'Cisco MIX366064'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.78') { $details->model = 'Cisco WicAsync1am'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.79') { $details->model = 'Cisco WicAsync2am'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.8') { $details->model = 'Cisco PmCe1Balanced'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.81') { $details->model = 'Cisco Aim4Dsps'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.82') { $details->model = 'Cisco HdaNm4fxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.84') { $details->model = 'Cisco C2610M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.85') { $details->model = 'Cisco C2611M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.9') { $details->model = 'Cisco Pm2ce1Balanced'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.91') { $details->model = 'Cisco Nm1t3e3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.92') { $details->model = 'Cisco Nm1ct3e3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.93') { $details->model = 'Cisco Nm8ct1e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.94') { $details->model = 'Cisco HdaEm4fxo'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.3.95') { $details->model = 'Cisco Nm16AS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.30') { $details->model = 'Cisco ModuleCat5000Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.30.1') { $details->model = 'Cisco Cat5kRsfc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.31') { $details->model = 'Cisco Module7100Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.31.1') { $details->model = 'Cisco Io2feTxIsl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.31.2') { $details->model = 'Cisco IsmIpsecMppe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.31.3') { $details->model = 'Cisco 7100VPNAccelerator'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.31.4') { $details->model = 'Cisco 7100VPNAcceleratorModule2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.31.5') { $details->model = 'Cisco 7100VPNAcceleratorAES'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.31.6') { $details->model = 'Cisco 7100VPNAM2Plus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32') { $details->model = 'Cisco Module10000Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.1') { $details->model = 'Cisco Pos1oc12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.10') { $details->model = 'Cisco 24feFxSm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.11') { $details->model = 'Cisco SrpOc48SmSr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.12') { $details->model = 'Cisco SrpOc48SmIr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.13') { $details->model = 'Cisco Pos6oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.14') { $details->model = 'Cisco Atm4oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.15') { $details->model = 'Cisco P8E3Ds3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.16') { $details->model = 'Cisco SrpPos1oc48SmSr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.17') { $details->model = 'Cisco SrpPos1oc48SmLr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.18') { $details->model = 'Cisco C10K48MbFlashCard'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.19') { $details->model = 'Cisco C10K128MbFlashCard'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.2') { $details->model = 'Cisco P6Ct3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.22') { $details->model = 'Cisco P24ChE1T1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.23') { $details->model = 'Cisco 4Ge8FeTx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.24') { $details->model = 'Cisco 4Ge8FeFxMm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.25') { $details->model = 'Cisco 4Ge8FeFxSm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.26') { $details->model = 'Cisco SrpOc48SmLr1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.27') { $details->model = 'Cisco SrpOc48SmLr2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.3') { $details->model = 'Cisco Ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.30') { $details->model = 'Cisco P8Fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.31') { $details->model = 'Cisco P8Ds3E3Atm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.32') { $details->model = 'Cisco C10720Mnt'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.34') { $details->model = 'Cisco PosSrpOc48SmSr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.35') { $details->model = 'Cisco PosSrpOc48SmIr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.36') { $details->model = 'Cisco PosSrpOc48SmLr1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.37') { $details->model = 'Cisco PosSrpOc48SmLr2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.38') { $details->model = 'Cisco C10KJacket'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.39') { $details->model = 'Cisco 24feTxB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.4') { $details->model = 'Cisco Atm1Oc12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.40') { $details->model = 'Cisco 4Ge8FeTxB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.41') { $details->model = 'Cisco RprSrpOc48'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.42') { $details->model = 'Cisco P4Ct3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.43') { $details->model = 'Cisco Atm4oc3stm1Lr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.5') { $details->model = 'Cisco P1COc12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.6') { $details->model = 'Cisco P4Chstm1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.8') { $details->model = 'Cisco 24feTx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.32.9') { $details->model = 'Cisco 24feFxMm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.33') { $details->model = 'Cisco ModuleAs5400Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.33.1') { $details->model = 'Cisco As5400DfcCarrier'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.33.2') { $details->model = 'Cisco As5400DfcNp348'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.33.3') { $details->model = 'Cisco As5400DfcNp192'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.33.4') { $details->model = 'Cisco As5400XMDfcCarrier'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.33.5') { $details->model = 'Cisco As5400XMVFC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35') { $details->model = 'Cisco ModuleCat4000Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.1') { $details->model = 'Cisco Cat4232L3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.10') { $details->model = 'Cisco Cat4kWsx4232RjXx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.11') { $details->model = 'Cisco Cat4kWsx4306Gb'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.12') { $details->model = 'Cisco Cat4kWsx4418Gb'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.13') { $details->model = 'Cisco Cat4kWsx44122GbTx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.14') { $details->model = 'Cisco Cat4kWsx4424GbRj45'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.15') { $details->model = 'Cisco Cat4kWsx4448GbLx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.16') { $details->model = 'Cisco Cat4kWsx4448GbRj45'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.17') { $details->model = 'Cisco Cat4kPEM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.18') { $details->model = 'Cisco Cat4kWsx4515'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.19') { $details->model = 'Cisco Cat4kWsx4148LxMt'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.2') { $details->model = 'Cisco Cat4kGateway'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.20') { $details->model = 'Cisco Cat4kWsx4248Rj45V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.21') { $details->model = 'Cisco Cat4kWsx4516'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.22') { $details->model = 'Cisco Cat4kWsx4013Plus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.23') { $details->model = 'Cisco Cat4kWsx4248Rj21V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.24') { $details->model = 'Cisco Cat4kWsx4302Gb'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.25') { $details->model = 'Cisco Cat4kWsx4548GbRj45V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.26') { $details->model = 'Cisco Cat4kWsx4548GbRj45'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.27') { $details->model = 'Cisco Cat4kWsx4712Qam24B'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.28') { $details->model = 'Cisco Cat4kWsx4148FeBdLc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.29') { $details->model = 'Cisco Cat4kWsx4124Rj'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.3') { $details->model = 'Cisco Cat4kWsx4014'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.30') { $details->model = 'Cisco Cat4kWsx4224Rj45V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.31') { $details->model = 'Cisco Cat4kWsx4524GbRj45V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.32') { $details->model = 'Cisco Cat4kWsx4506GBT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.33') { $details->model = 'Cisco Cat4kWsxSvcNam'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.34') { $details->model = 'Cisco Cat4kWsx4448GbSfp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.35') { $details->model = 'Cisco Cat4kWsX4013PlusTS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.36') { $details->model = 'Cisco Cat4kWsx4kClock'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.37') { $details->model = 'Cisco Cat4kWsx4948'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.38') { $details->model = 'Cisco Cat4kWsx451610GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.4') { $details->model = 'Cisco Cat4kWsx4124FxMt'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.40') { $details->model = 'Cisco Cat4kWsx4013Plus10GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.42') { $details->model = 'Cisco Cat4kWsx494810GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.43') { $details->model = 'Cisco Cat4kWsx4kMux'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.44') { $details->model = 'Cisco Cat4kWsx490410ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.45') { $details->model = 'Cisco Cat4kWsx4900M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.46') { $details->model = 'Cisco Cat4kWsx490810ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.47') { $details->model = 'Cisco Cat4kWsx4920Gbrj45'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.48') { $details->model = 'Cisco Cat4kWsx4590'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.49') { $details->model = 'Cisco CatWsx4624SfpE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.5') { $details->model = 'Cisco Cat4kWsx4148FxMt'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.50') { $details->model = 'Cisco Cat4kWsx492810GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.51') { $details->model = 'Cisco Cat4kWsx4548GbRj45VPlus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.52') { $details->model = 'Cisco Cat4kWsx490810GRj45'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.54') { $details->model = 'Cisco Cat4kWsx4948ef10GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.55') { $details->model = 'Cisco Cat4kC4kxNm8'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.56') { $details->model = 'Cisco Cat4kWsx4500x16'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.57') { $details->model = 'Cisco Cat4kWsx4500x32'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.6') { $details->model = 'Cisco Cat4kWsx4148Rj'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.7') { $details->model = 'Cisco Cat4kWsx4148Rj21'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.8') { $details->model = 'Cisco Cat4kWsx4148Rj45V'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.35.9') { $details->model = 'Cisco Cat4kWsx4232GbRj'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.36') { $details->model = 'Cisco ModuleCVAType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.36.1') { $details->model = 'Cisco CVA122'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.36.2') { $details->model = 'Cisco CVA124'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.36.3') { $details->model = 'Cisco CVA122E'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.36.4') { $details->model = 'Cisco CVA124E'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.37') { $details->model = 'Cisco ModuleAs5850Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.37.1') { $details->model = 'Cisco As5850EPM2Ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.37.2') { $details->model = 'Cisco As5850Ct3Up216'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.37.3') { $details->model = 'Cisco As58508Ce1Up216'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.37.4') { $details->model = 'Cisco As58xxUp324'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.37.5') { $details->model = 'Cisco As585024E1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.37.6') { $details->model = 'Cisco As585024T1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.38') { $details->model = 'Cisco ModuleAs5350Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.38.2') { $details->model = 'Cisco As5350XMDfcCarrier'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.39') { $details->model = 'Cisco Module24xxType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.39.1') { $details->model = 'Cisco Iad2420Vm8fxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.39.10') { $details->model = 'Cisco Iad2420Hcm6'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.39.11') { $details->model = 'Cisco Iad2420Cpu'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.39.12') { $details->model = 'Cisco Iad2420MfmE1Unbalanced'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.39.13') { $details->model = 'Cisco Iad2420MfmE1Dsx1Csu'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.39.14') { $details->model = 'Cisco Iad2420MfmT1Dsx1Csu'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.39.15') { $details->model = 'Cisco Iad24208fxo'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.39.18') { $details->model = 'Cisco Iad242016fxsOffPremise'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.39.19') { $details->model = 'Cisco Iad2430Ob8Fxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.39.2') { $details->model = 'Cisco Iad242016fxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.39.20') { $details->model = 'Cisco Iad2430Ob16Fxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.39.21') { $details->model = 'Cisco Iad2430Ob24Fxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.39.22') { $details->model = 'Cisco Iad2430ObT1E1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.39.23') { $details->model = 'Cisco Iad2435ObT1E1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.39.24') { $details->model = 'Cisco Iad2435Ob8Fxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.39.25') { $details->model = 'Cisco VG204Ob4Fxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.39.26') { $details->model = 'Cisco VG202Ob2Fxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.39.3') { $details->model = 'Cisco Iad2420VmPwr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.39.4') { $details->model = 'Cisco Iad2420Adsl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.39.5') { $details->model = 'Cisco Iad2420Hcm1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.39.6') { $details->model = 'Cisco Iad2420Hcm2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.39.7') { $details->model = 'Cisco Iad2420Hcm3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.39.8') { $details->model = 'Cisco Iad2420Hcm4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.39.9') { $details->model = 'Cisco Iad2420Hcm5'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4') { $details->model = 'Cisco ModuleVipPortAdapters'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.1') { $details->model = 'Cisco Pa1fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.10') { $details->model = 'Cisco PaAh2t'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.100') { $details->model = 'Cisco Pa1ce3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.101') { $details->model = 'Cisco Pa2OC3PosSw'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.102') { $details->model = 'Cisco Pa2feFxIsl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.103') { $details->model = 'Cisco Pa4Dtr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.104') { $details->model = 'Cisco PaVmHda8FxsDid'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.105') { $details->model = 'Cisco Pa1OC3PosSw'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.106') { $details->model = 'Cisco PaA6mmOc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.107') { $details->model = 'Cisco PaA6SmiOc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.108') { $details->model = 'Cisco PaA6SmlOc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.109') { $details->model = 'Cisco PaA6Ds3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.110') { $details->model = 'Cisco PaA6E3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.111') { $details->model = 'Cisco PaMcx4te1Q'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.112') { $details->model = 'Cisco PaMct3ec'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.113') { $details->model = 'Cisco PaMc2t3ec'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.114') { $details->model = 'Cisco Pa1t3e3ec'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.115') { $details->model = 'Cisco Pa2t3e3ec'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.12') { $details->model = 'Cisco PaA8tV35'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.13') { $details->model = 'Cisco Pa1feTxIsl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.14') { $details->model = 'Cisco Pa1feFxIsl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.15') { $details->model = 'Cisco Pa1feTxNisl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.16') { $details->model = 'Cisco SaCompression'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.17') { $details->model = 'Cisco PaAtmLite1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.18') { $details->model = 'Cisco PaCt3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.19') { $details->model = 'Cisco PaOc3smMuxCbrt1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.2') { $details->model = 'Cisco Pa8e'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.20') { $details->model = 'Cisco PaOc3smMuxCbr120e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.21') { $details->model = 'Cisco PaOc3smMuxCbr75e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.22') { $details->model = 'Cisco PaOc3mmMuxCbrt1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.23') { $details->model = 'Cisco PaOc3mmMuxCbr120e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.24') { $details->model = 'Cisco PaOc3mmMuxCbr75e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.25') { $details->model = 'Cisco PaDs3MuxCbrt1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.26') { $details->model = 'Cisco PaE3MuxCbr120e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.27') { $details->model = 'Cisco PaE3smMuxCbr75e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.28') { $details->model = 'Cisco Pa8bSt'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.29') { $details->model = 'Cisco Pa4bU'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.3') { $details->model = 'Cisco Pa4e'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.30') { $details->model = 'Cisco PaFddiFd'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.31') { $details->model = 'Cisco PaJt2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.32') { $details->model = 'Cisco PaPosdw'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.33') { $details->model = 'Cisco Pa4me1Bal'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.34') { $details->model = 'Cisco Pa2ce1Balanced'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.35') { $details->model = 'Cisco Pa2ct1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.36') { $details->model = 'Cisco Pa1vg'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.37') { $details->model = 'Cisco PaAtmdxDs3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.38') { $details->model = 'Cisco PaAtmdxE3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.39') { $details->model = 'Cisco PaAtmdxSmlOc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.4') { $details->model = 'Cisco Pa5e'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.40') { $details->model = 'Cisco PaAtmdxSmiOc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.41') { $details->model = 'Cisco PaAtmdxMmOc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.42') { $details->model = 'Cisco PaA8tX21'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.43') { $details->model = 'Cisco PaA8tRs232'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.44') { $details->model = 'Cisco Pa4me1Unbal'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.45') { $details->model = 'Cisco Pa4rFdx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.46') { $details->model = 'Cisco Pa1e3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.47') { $details->model = 'Cisco Pa2e3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.48') { $details->model = 'Cisco Pa1t3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.49') { $details->model = 'Cisco Pa2t3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.5') { $details->model = 'Cisco Pa4t'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.50') { $details->model = 'Cisco Pa2ce1Unbalanced'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.51') { $details->model = 'Cisco Pa14eSwitch'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.52') { $details->model = 'Cisco as58001fedsi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.53') { $details->model = 'Cisco Pa1feFxNisl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.54') { $details->model = 'Cisco PaIo1fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.55') { $details->model = 'Cisco PaIo'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.56') { $details->model = 'Cisco Pa2feTx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.57') { $details->model = 'Cisco Pa2feFx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.59') { $details->model = 'Cisco PaGe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.6') { $details->model = 'Cisco Pa4r'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.60') { $details->model = 'Cisco PaPosswSm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.61') { $details->model = 'Cisco PaPosswMm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.62') { $details->model = 'Cisco PaPosswLr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.63') { $details->model = 'Cisco Pa4ct1Csu'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.64') { $details->model = 'Cisco Pa8ct1Csu'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.65') { $details->model = 'Cisco Pa8ct1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.66') { $details->model = 'Cisco Pa8ce1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.67') { $details->model = 'Cisco PaVxc2t1e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.68') { $details->model = 'Cisco PaVxb2t1e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.69') { $details->model = 'Cisco PaAtmOc12Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.7') { $details->model = 'Cisco PaFddi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.70') { $details->model = 'Cisco PaAtmOc12Smi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.71') { $details->model = 'Cisco PaMct3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.72') { $details->model = 'Cisco PaMc2t3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.73') { $details->model = 'Cisco Pa1t3Plus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.74') { $details->model = 'Cisco Pa2t3Plus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.75') { $details->model = 'Cisco PaPosOc12Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.76') { $details->model = 'Cisco PaPosOc12Sm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.77') { $details->model = 'Cisco PaImaT1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.78') { $details->model = 'Cisco PaImaE1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.79') { $details->model = 'Cisco SrpPaOc12Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.8') { $details->model = 'Cisco SaEncryption'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.80') { $details->model = 'Cisco SrpPaOc12SmIr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.81') { $details->model = 'Cisco SrpPaOc12Lr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.82') { $details->model = 'Cisco Pa2ct1Csu'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.83') { $details->model = 'Cisco Pa2ce1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.84') { $details->model = 'Cisco PaMcx2te1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.85') { $details->model = 'Cisco PaMcx4te1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.86') { $details->model = 'Cisco PaMcx8te1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.87') { $details->model = 'Cisco SrpPaOc12SmXr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.9') { $details->model = 'Cisco PaAh1t'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.90') { $details->model = 'Cisco PaMcStm1Smi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.91') { $details->model = 'Cisco PaMcStm1Mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.92') { $details->model = 'Cisco Pa2feTxI82543'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.93') { $details->model = 'Cisco Pa2feFxI82543'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.94') { $details->model = 'Cisco PaDualWideGe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.95') { $details->model = 'Cisco PaVxa1T1E124'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.96') { $details->model = 'Cisco PaVxa1T1E130'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.97') { $details->model = 'Cisco PaMcT1E1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.4.99') { $details->model = 'Cisco PaMcx8te1M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40') { $details->model = 'Cisco Module10000Bases'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.10') { $details->model = 'Cisco 10GBaseLW'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.11') { $details->model = 'Cisco 10GBaseEW'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.12') { $details->model = 'Cisco 10GBaseSW'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.13') { $details->model = 'Cisco 10GBaseEdc1310'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.14') { $details->model = 'Cisco 10GBaseDwdm3033'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.15') { $details->model = 'Cisco 10GBaseDwdm3112'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.16') { $details->model = 'Cisco 10GBaseDwdm3190'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.17') { $details->model = 'Cisco 10GBaseDwdm3268'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.18') { $details->model = 'Cisco 10GBaseDwdm3425'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.19') { $details->model = 'Cisco 10GBaseDwdm3504'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.2') { $details->model = 'Cisco M10000BaseLX4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.20') { $details->model = 'Cisco 10GBaseDwdm3582'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.21') { $details->model = 'Cisco 10GBaseDwdm3661'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.22') { $details->model = 'Cisco 10GBaseDwdm3819'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.23') { $details->model = 'Cisco 10GBaseDwdm3898'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.24') { $details->model = 'Cisco 10GBaseDwdm3977'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.25') { $details->model = 'Cisco 10GBaseDwdm4056'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.26') { $details->model = 'Cisco 10GBaseDwdm4214'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.27') { $details->model = 'Cisco 10GBaseDwdm4294'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.28') { $details->model = 'Cisco 10GBaseDwdm4373'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.29') { $details->model = 'Cisco 10GBaseDwdm4453'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.3') { $details->model = 'Cisco M10000BaseEX4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.30') { $details->model = 'Cisco 10GBaseDwdm4612'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.31') { $details->model = 'Cisco 10GBaseDwdm4692'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.32') { $details->model = 'Cisco 10GBaseDwdm4772'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.33') { $details->model = 'Cisco 10GBaseDwdm4851'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.34') { $details->model = 'Cisco 10GBaseDwdm5012'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.35') { $details->model = 'Cisco 10GBaseDwdm5092'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.36') { $details->model = 'Cisco 10GBaseDwdm5172'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.37') { $details->model = 'Cisco 10GBaseDwdm5252'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.38') { $details->model = 'Cisco 10GBaseDwdm5413'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.39') { $details->model = 'Cisco 10GBaseDwdm5494'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.4') { $details->model = 'Cisco M10000BaseLR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.40') { $details->model = 'Cisco 10GBaseDwdm5575'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.41') { $details->model = 'Cisco 10GBaseDwdm5655'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.42') { $details->model = 'Cisco 10GBaseDwdm5817'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.43') { $details->model = 'Cisco 10GBaseDwdm5898'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.44') { $details->model = 'Cisco 10GBaseDwdm5979'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.45') { $details->model = 'Cisco 10GBaseDwdm6061'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.46') { $details->model = 'Cisco 10GBaseRec'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.5') { $details->model = 'Cisco M10000BaseER'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.6') { $details->model = 'Cisco M10000BaseSX4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.7') { $details->model = 'Cisco M10000BaseSR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.8') { $details->model = 'Cisco M10000BaseCX4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.40.9') { $details->model = 'Cisco M10000BaseZR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42') { $details->model = 'Cisco ModuleONS15540Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.1') { $details->model = 'Cisco ONS15540LCMBTspProtect'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.10') { $details->model = 'Cisco ONS15540Tsp1Ch0910MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.100') { $details->model = 'Cisco ONS1554010GigITUCh11'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.101') { $details->model = 'Cisco ONS1554010GigITUCh12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.102') { $details->model = 'Cisco ONS1554010GigITUCh13'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.103') { $details->model = 'Cisco ONS1554010GigITUCh14'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.104') { $details->model = 'Cisco ONS1554010GigITUCh15'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.105') { $details->model = 'Cisco ONS1554010GigITUCh16'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.106') { $details->model = 'Cisco ONS1554010GigITUCh17'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.107') { $details->model = 'Cisco ONS1554010GigITUCh18'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.108') { $details->model = 'Cisco ONS1554010GigITUCh19'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.109') { $details->model = 'Cisco ONS1554010GigITUCh20'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.11') { $details->model = 'Cisco ONS15540Tsp1Ch1112MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.110') { $details->model = 'Cisco ONS1554010GigITUCh21'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.111') { $details->model = 'Cisco ONS1554010GigITUCh22'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.112') { $details->model = 'Cisco ONS1554010GigITUCh23'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.113') { $details->model = 'Cisco ONS1554010GigITUCh24'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.114') { $details->model = 'Cisco ONS1554010GigITUCh25'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.115') { $details->model = 'Cisco ONS1554010GigITUCh26'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.116') { $details->model = 'Cisco ONS1554010GigITUCh27'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.117') { $details->model = 'Cisco ONS1554010GigITUCh28'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.118') { $details->model = 'Cisco ONS1554010GigITUCh29'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.119') { $details->model = 'Cisco ONS1554010GigITUCh30'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.12') { $details->model = 'Cisco ONS15540Tsp1Ch1314MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.120') { $details->model = 'Cisco ONS1554010GigITUCh31'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.121') { $details->model = 'Cisco ONS1554010GigITUCh32'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.122') { $details->model = 'Cisco ONS15540OC192cITUCh01'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.123') { $details->model = 'Cisco ONS15540OC192cITUCh02'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.124') { $details->model = 'Cisco ONS15540OC192cITUCh03'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.125') { $details->model = 'Cisco ONS15540OC192cITUCh04'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.126') { $details->model = 'Cisco ONS15540OC192cITUCh05'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.127') { $details->model = 'Cisco ONS15540OC192cITUCh06'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.128') { $details->model = 'Cisco ONS15540OC192cITUCh07'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.129') { $details->model = 'Cisco ONS15540OC192cITUCh08'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.13') { $details->model = 'Cisco ONS15540Tsp1Ch1516MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.130') { $details->model = 'Cisco ONS15540OC192cITUCh09'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.131') { $details->model = 'Cisco ONS15540OC192cITUCh10'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.132') { $details->model = 'Cisco ONS15540OC192cITUCh11'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.133') { $details->model = 'Cisco ONS15540OC192cITUCh12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.134') { $details->model = 'Cisco ONS15540OC192cITUCh13'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.135') { $details->model = 'Cisco ONS15540OC192cITUCh14'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.136') { $details->model = 'Cisco ONS15540OC192cITUCh15'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.137') { $details->model = 'Cisco ONS15540OC192cITUCh16'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.138') { $details->model = 'Cisco ONS15540OC192cITUCh17'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.139') { $details->model = 'Cisco ONS15540OC192cITUCh18'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.14') { $details->model = 'Cisco ONS15540Tsp1Ch1718MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.140') { $details->model = 'Cisco ONS15540OC192cITUCh19'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.141') { $details->model = 'Cisco ONS15540OC192cITUCh20'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.142') { $details->model = 'Cisco ONS15540OC192cITUCh21'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.143') { $details->model = 'Cisco ONS15540OC192cITUCh22'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.144') { $details->model = 'Cisco ONS15540OC192cITUCh23'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.145') { $details->model = 'Cisco ONS15540OC192cITUCh24'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.146') { $details->model = 'Cisco ONS15540OC192cITUCh25'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.147') { $details->model = 'Cisco ONS15540OC192cITUCh26'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.148') { $details->model = 'Cisco ONS15540OC192cITUCh27'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.149') { $details->model = 'Cisco ONS15540OC192cITUCh28'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.15') { $details->model = 'Cisco ONS15540Tsp1Ch1920MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.150') { $details->model = 'Cisco ONS15540OC192cITUCh29'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.151') { $details->model = 'Cisco ONS15540OC192cITUCh30'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.152') { $details->model = 'Cisco ONS15540OC192cITUCh31'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.153') { $details->model = 'Cisco ONS15540OC192cITUCh32'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.154') { $details->model = 'Cisco ONS15540ESPxMDX4ChA'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.155') { $details->model = 'Cisco ONS15540ESPxMDX4ChB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.156') { $details->model = 'Cisco ONS15540ESPxMDX4ChC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.157') { $details->model = 'Cisco ONS15540ESPxMDX4ChD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.158') { $details->model = 'Cisco ONS15540ESPxMDX4ChE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.159') { $details->model = 'Cisco ONS15540ESPxMDX4ChF'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.16') { $details->model = 'Cisco ONS15540Tsp1Ch2122MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.160') { $details->model = 'Cisco ONS15540ESPxMDX4ChG'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.161') { $details->model = 'Cisco ONS15540ESPxMDX4ChH'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.162') { $details->model = 'Cisco ONS15540ESPxMDX8ChAB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.163') { $details->model = 'Cisco ONS15540ESPxMDX8ChCD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.164') { $details->model = 'Cisco ONS15540ESPxMDX8ChEF'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.165') { $details->model = 'Cisco ONS15540ESPxMDX8ChGH'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.166') { $details->model = 'Cisco ONS15540ESPxMDX16ChEH'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.167') { $details->model = 'Cisco ONS15540ESPxMDX4ChAOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.168') { $details->model = 'Cisco ONS15540ESPxMDX4ChBOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.169') { $details->model = 'Cisco ONS15540ESPxMDX4ChCOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.17') { $details->model = 'Cisco ONS15540Tsp1Ch2324MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.170') { $details->model = 'Cisco ONS15540ESPxMDX4ChDOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.171') { $details->model = 'Cisco ONS15540ESPxMDX4ChEOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.172') { $details->model = 'Cisco ONS15540ESPxMDX4ChFOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.173') { $details->model = 'Cisco ONS15540ESPxMDX4ChGOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.174') { $details->model = 'Cisco ONS15540ESPxMDX4ChHOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.175') { $details->model = 'Cisco ONS15540ESPxMDX8ChABOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.176') { $details->model = 'Cisco ONS15540ESPxMDX8ChCDOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.177') { $details->model = 'Cisco ONS15540ESPxMDX8ChEFOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.178') { $details->model = 'Cisco ONS15540ESPxMDX8ChGHOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.179') { $details->model = 'Cisco ONS15540ESPxMDX16ChADOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.18') { $details->model = 'Cisco ONS15540Tsp1Ch2526MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.180') { $details->model = 'Cisco ONS15540ESPxMDX32ChOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.181') { $details->model = 'Cisco ONS15540EspPxPSM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.182') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.183') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.184') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.185') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.186') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh5'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.187') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh6'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.188') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh7'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.189') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh8'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.19') { $details->model = 'Cisco ONS15540Tsp1Ch2728MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.190') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.191') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh10'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.192') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh11'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.193') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.194') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh13'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.195') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh14'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.196') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh15'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.197') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh16'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.198') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh17'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.199') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh18'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.2') { $details->model = 'Cisco ONS15540LCMBTspEast'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.20') { $details->model = 'Cisco ONS15540Tsp1Ch2930MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.200') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh19'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.201') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh20'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.202') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh21'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.203') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh22'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.204') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh23'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.205') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh24'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.206') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh25'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.207') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh26'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.208') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh27'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.209') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh28'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.21') { $details->model = 'Cisco ONS15540Tsp1Ch3132MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.210') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh29'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.211') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh30'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.212') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh31'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.213') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh32'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.214') { $details->model = 'Cisco ONS15540ESPxVOA1ITUCh33'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.215') { $details->model = 'Cisco ONS15540ESPxVOA2ITUCh0102'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.216') { $details->model = 'Cisco ONS15540ESPxVOA2ITUCh0304'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.217') { $details->model = 'Cisco ONS15540ESPxVOA2ITUCh0506'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.218') { $details->model = 'Cisco ONS15540ESPxVOA2ITUCh0708'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.219') { $details->model = 'Cisco ONS15540ESPxVOA2ITUCh0910'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.22') { $details->model = 'Cisco ONS15540Tsp1Ch0102SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.220') { $details->model = 'Cisco ONS15540ESPxVOA2ITUCh1112'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.221') { $details->model = 'Cisco ONS15540ESPxVOA2ITUCh1314'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.222') { $details->model = 'Cisco ONS15540ESPxVOA2ITUCh1516'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.223') { $details->model = 'Cisco ONS15540ESPxVOA2ITUCh1718'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.224') { $details->model = 'Cisco ONS15540ESPxVOA2ITUCh1920'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.225') { $details->model = 'Cisco ONS15540ESPxVOA2ITUCh2122'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.226') { $details->model = 'Cisco ONS15540ESPxVOA2ITUCh2324'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.227') { $details->model = 'Cisco ONS15540ESPxVOA2ITUCh2526'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.228') { $details->model = 'Cisco ONS15540ESPxVOA2ITUCh2728'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.229') { $details->model = 'Cisco ONS15540ESPxVOA2ITUCh2930'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.23') { $details->model = 'Cisco ONS15540Tsp1Ch0304SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.230') { $details->model = 'Cisco ONS15540ESPxVOA2ITUCh3132'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.231') { $details->model = 'Cisco ONS15540ESPxVOA4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.24') { $details->model = 'Cisco ONS15540Tsp1Ch0506SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.25') { $details->model = 'Cisco ONS15540Tsp1Ch0708SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.26') { $details->model = 'Cisco ONS15540Tsp1Ch0910SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.27') { $details->model = 'Cisco ONS15540Tsp1Ch1112SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.28') { $details->model = 'Cisco ONS15540Tsp1Ch1314SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.29') { $details->model = 'Cisco ONS15540Tsp1Ch1516SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.3') { $details->model = 'Cisco ONS15540LCMBTspWest'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.30') { $details->model = 'Cisco ONS15540Tsp1Ch1718SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.31') { $details->model = 'Cisco ONS15540Tsp1Ch1920SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.32') { $details->model = 'Cisco ONS15540Tsp1Ch2122SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.33') { $details->model = 'Cisco ONS15540Tsp1Ch2324SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.34') { $details->model = 'Cisco ONS15540Tsp1Ch2526SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.35') { $details->model = 'Cisco ONS15540Tsp1Ch2728SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.36') { $details->model = 'Cisco ONS15540Tsp1Ch2930SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.37') { $details->model = 'Cisco ONS15540Tsp1Ch3132SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.38') { $details->model = 'Cisco ONS15540MDX4ChA'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.39') { $details->model = 'Cisco ONS15540MDX4ChB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.4') { $details->model = 'Cisco ONS15540MDXMBOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.40') { $details->model = 'Cisco ONS15540MDX4ChC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.41') { $details->model = 'Cisco ONS15540MDX4ChD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.42') { $details->model = 'Cisco ONS15540MDX4ChE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.43') { $details->model = 'Cisco ONS15540MDX4ChF'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.44') { $details->model = 'Cisco ONS15540MDX4ChG'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.45') { $details->model = 'Cisco ONS15540MDX4ChH'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.46') { $details->model = 'Cisco ONS15540MDX8ChAB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.47') { $details->model = 'Cisco ONS15540MDX8ChCD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.48') { $details->model = 'Cisco ONS15540MDX8ChEF'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.49') { $details->model = 'Cisco ONS15540MDX8ChGH'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.5') { $details->model = 'Cisco ONS15540MDXMB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.50') { $details->model = 'Cisco ONS15540MDX4ChAOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.51') { $details->model = 'Cisco ONS15540MDX4ChBOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.52') { $details->model = 'Cisco ONS15540MDX4ChCOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.53') { $details->model = 'Cisco ONS15540MDX4ChDOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.54') { $details->model = 'Cisco ONS15540MDX4ChEOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.55') { $details->model = 'Cisco ONS15540MDX4ChFOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.56') { $details->model = 'Cisco ONS15540MDX4ChGOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.57') { $details->model = 'Cisco ONS15540MDX4ChHOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.58') { $details->model = 'Cisco ONS15540MDX8ChABOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.59') { $details->model = 'Cisco ONS15540MDX8ChCDOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.6') { $details->model = 'Cisco ONS15540Tsp1Ch0102MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.60') { $details->model = 'Cisco ONS15540MDX8ChEFOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.61') { $details->model = 'Cisco ONS15540MDX8ChGHOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.62') { $details->model = 'Cisco ONS15540MDX16ChADOSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.63') { $details->model = 'Cisco ONS15540MDX16ChEH'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.64') { $details->model = 'Cisco ONS15540Tsp2Ch0102'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.65') { $details->model = 'Cisco ONS15540Tsp2Ch0304'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.66') { $details->model = 'Cisco ONS15540Tsp2Ch0506'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.67') { $details->model = 'Cisco ONS15540Tsp2Ch0708'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.68') { $details->model = 'Cisco ONS15540Tsp2Ch0910'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.69') { $details->model = 'Cisco ONS15540Tsp2Ch1112'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.7') { $details->model = 'Cisco ONS15540Tsp1Ch0304MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.70') { $details->model = 'Cisco ONS15540Tsp2Ch1314'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.71') { $details->model = 'Cisco ONS15540Tsp2Ch1516'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.72') { $details->model = 'Cisco ONS15540Tsp2Ch1718'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.73') { $details->model = 'Cisco ONS15540Tsp2Ch1920'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.74') { $details->model = 'Cisco ONS15540Tsp2Ch2122'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.75') { $details->model = 'Cisco ONS15540Tsp2Ch2324'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.76') { $details->model = 'Cisco ONS15540Tsp2Ch2526'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.77') { $details->model = 'Cisco ONS15540Tsp2Ch2728'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.78') { $details->model = 'Cisco ONS15540Tsp2Ch2930'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.79') { $details->model = 'Cisco ONS15540Tsp2Ch3132'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.8') { $details->model = 'Cisco ONS15540Tsp1Ch0506MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.80') { $details->model = 'Cisco ONS15540LCMB10GOC192c'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.81') { $details->model = 'Cisco ONS15540ESPxLCMBTspSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.82') { $details->model = 'Cisco ONS15540ESPxLCMBTsp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.83') { $details->model = 'Cisco ONS15540ESPxLCMB10GOC192cSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.84') { $details->model = 'Cisco ONS15540ESPxLCMB10GOC192c'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.85') { $details->model = 'Cisco ONS15540LCDC10G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.86') { $details->model = 'Cisco ONS15540ESPxMDXMBOsc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.87') { $details->model = 'Cisco ONS15540ESPxMDXMB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.88') { $details->model = 'Cisco ONS15540ESPxMDXMBOscESP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.89') { $details->model = 'Cisco ONS15540ESPxMDXMBESP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.9') { $details->model = 'Cisco ONS15540Tsp1Ch0708MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.90') { $details->model = 'Cisco ONS1554010GigITUCh01'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.91') { $details->model = 'Cisco ONS1554010GigITUCh02'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.92') { $details->model = 'Cisco ONS1554010GigITUCh03'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.93') { $details->model = 'Cisco ONS1554010GigITUCh04'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.94') { $details->model = 'Cisco ONS1554010GigITUCh05'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.95') { $details->model = 'Cisco ONS1554010GigITUCh06'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.96') { $details->model = 'Cisco ONS1554010GigITUCh07'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.97') { $details->model = 'Cisco ONS1554010GigITUCh08'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.98') { $details->model = 'Cisco ONS1554010GigITUCh09'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.42.99') { $details->model = 'Cisco ONS1554010GigITUCh10'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.43') { $details->model = 'Cisco ModuleGsrPortAdapterType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.43.1') { $details->model = 'Cisco GsrPaUnknown'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.43.2') { $details->model = 'Cisco GsrPa1Ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.43.3') { $details->model = 'Cisco GsrPa3Ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.43.4') { $details->model = 'Cisco GsrPa24Fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44') { $details->model = 'Cisco ModuleONS15530Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.1') { $details->model = 'Cisco ONS15530LCMBOsc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.10') { $details->model = 'Cisco ONS15530MDX4ChH'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.100') { $details->model = 'Cisco ONS1553010GCh15Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.101') { $details->model = 'Cisco ONS1553010GCh16Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.102') { $details->model = 'Cisco ONS1553010GCh17Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.103') { $details->model = 'Cisco ONS1553010GCh18Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.104') { $details->model = 'Cisco ONS1553010GCh19Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.105') { $details->model = 'Cisco ONS1553010GCh20Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.106') { $details->model = 'Cisco ONS1553010GCh21Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.107') { $details->model = 'Cisco ONS1553010GCh22Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.108') { $details->model = 'Cisco ONS1553010GCh23Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.109') { $details->model = 'Cisco ONS1553010GCh24Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.11') { $details->model = 'Cisco ONS15530MDX4ChAOsc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.110') { $details->model = 'Cisco ONS1553010GCh25Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.111') { $details->model = 'Cisco ONS1553010GCh26Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.112') { $details->model = 'Cisco ONS1553010GCh27Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.113') { $details->model = 'Cisco ONS1553010GCh28Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.114') { $details->model = 'Cisco ONS1553010GCh29Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.115') { $details->model = 'Cisco ONS1553010GCh30Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.116') { $details->model = 'Cisco ONS1553010GCh31Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.117') { $details->model = 'Cisco ONS1553010GCh32Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.118') { $details->model = 'Cisco ONS1553010GCh01'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.119') { $details->model = 'Cisco ONS1553010GCh02'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.12') { $details->model = 'Cisco ONS15530MDX4ChBOsc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.120') { $details->model = 'Cisco ONS1553010GCh03'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.121') { $details->model = 'Cisco ONS1553010GCh04'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.122') { $details->model = 'Cisco ONS1553010GCh05'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.123') { $details->model = 'Cisco ONS1553010GCh06'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.124') { $details->model = 'Cisco ONS1553010GCh07'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.125') { $details->model = 'Cisco ONS1553010GCh08'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.126') { $details->model = 'Cisco ONS1553010GCh09'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.127') { $details->model = 'Cisco ONS1553010GCh10'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.128') { $details->model = 'Cisco ONS1553010GCh11'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.129') { $details->model = 'Cisco ONS1553010GCh12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.13') { $details->model = 'Cisco ONS15530MDX4ChCOsc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.130') { $details->model = 'Cisco ONS1553010GCh13'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.131') { $details->model = 'Cisco ONS1553010GCh14'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.132') { $details->model = 'Cisco ONS1553010GCh15'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.133') { $details->model = 'Cisco ONS1553010GCh16'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.134') { $details->model = 'Cisco ONS1553010GCh17'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.135') { $details->model = 'Cisco ONS1553010GCh18'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.136') { $details->model = 'Cisco ONS1553010GCh19'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.137') { $details->model = 'Cisco ONS1553010GCh20'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.138') { $details->model = 'Cisco ONS1553010GCh21'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.139') { $details->model = 'Cisco ONS1553010GCh22'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.14') { $details->model = 'Cisco ONS15530MDX4ChDOsc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.140') { $details->model = 'Cisco ONS1553010GCh23'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.141') { $details->model = 'Cisco ONS1553010GCh24'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.142') { $details->model = 'Cisco ONS1553010GCh25'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.143') { $details->model = 'Cisco ONS1553010GCh26'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.144') { $details->model = 'Cisco ONS1553010GCh27'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.145') { $details->model = 'Cisco ONS1553010GCh28'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.146') { $details->model = 'Cisco ONS1553010GCh29'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.147') { $details->model = 'Cisco ONS1553010GCh30'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.148') { $details->model = 'Cisco ONS1553010GCh31'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.149') { $details->model = 'Cisco ONS1553010GCh32'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.15') { $details->model = 'Cisco ONS15530MDX4ChEOsc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.150') { $details->model = 'Cisco ONS15530FCGE8P'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.151') { $details->model = 'Cisco ONS155302p5GCh0102Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.152') { $details->model = 'Cisco ONS155302p5GCh0304Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.153') { $details->model = 'Cisco ONS155302p5GCh0506Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.154') { $details->model = 'Cisco ONS155302p5GCh0708Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.155') { $details->model = 'Cisco ONS155302p5GCh0910Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.156') { $details->model = 'Cisco ONS155302p5GCh1112Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.157') { $details->model = 'Cisco ONS155302p5GCh1314Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.158') { $details->model = 'Cisco ONS155302p5GCh1516Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.159') { $details->model = 'Cisco ONS155302p5GCh1718Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.16') { $details->model = 'Cisco ONS15530MDX4ChFOsc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.160') { $details->model = 'Cisco ONS155302p5GCh1920Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.161') { $details->model = 'Cisco ONS155302p5GCh2122Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.162') { $details->model = 'Cisco ONS155302p5GCh2324Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.163') { $details->model = 'Cisco ONS155302p5GCh2526Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.164') { $details->model = 'Cisco ONS155302p5GCh2728Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.165') { $details->model = 'Cisco ONS155302p5GCh2930Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.166') { $details->model = 'Cisco ONS155302p5GCh3132Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.167') { $details->model = 'Cisco ONS155302p5GCh0102'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.168') { $details->model = 'Cisco ONS155302p5GCh0304'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.169') { $details->model = 'Cisco ONS155302p5GCh0506'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.17') { $details->model = 'Cisco ONS15530MDX4ChGOsc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.170') { $details->model = 'Cisco ONS155302p5GCh0708'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.171') { $details->model = 'Cisco ONS155302p5GCh0910'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.172') { $details->model = 'Cisco ONS155302p5GCh1112'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.173') { $details->model = 'Cisco ONS155302p5GCh1314'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.174') { $details->model = 'Cisco ONS155302p5GCh1516'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.175') { $details->model = 'Cisco ONS155302p5GCh1718'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.176') { $details->model = 'Cisco ONS155302p5GCh1920'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.177') { $details->model = 'Cisco ONS155302p5GCh2122'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.178') { $details->model = 'Cisco ONS155302p5GCh2324'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.179') { $details->model = 'Cisco ONS155302p5GCh2526'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.18') { $details->model = 'Cisco ONS15530MDX4ChHOsc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.180') { $details->model = 'Cisco ONS155302p5GCh2728'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.181') { $details->model = 'Cisco ONS155302p5GCh2930'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.182') { $details->model = 'Cisco ONS155302p5GCh3132'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.183') { $details->model = 'Cisco ONS15530PSM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.184') { $details->model = 'Cisco ONS15530LC2xFC4P'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.185') { $details->model = 'Cisco ONS15530MRC8PCh0102Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.186') { $details->model = 'Cisco ONS15530MRC8PCh0304Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.187') { $details->model = 'Cisco ONS15530MRC8PCh0506Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.188') { $details->model = 'Cisco ONS15530MRC8PCh0708Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.189') { $details->model = 'Cisco ONS15530MRC8PCh0910Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.19') { $details->model = 'Cisco ONS15530Tsp1Ch0102MmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.190') { $details->model = 'Cisco ONS15530MRC8PCh1112Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.191') { $details->model = 'Cisco ONS15530MRC8PCh1314Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.192') { $details->model = 'Cisco ONS15530MRC8PCh1516Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.193') { $details->model = 'Cisco ONS15530MRC8PCh1718Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.194') { $details->model = 'Cisco ONS15530MRC8PCh1920Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.195') { $details->model = 'Cisco ONS15530MRC8PCh2122Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.196') { $details->model = 'Cisco ONS15530MRC8PCh2324Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.197') { $details->model = 'Cisco ONS15530MRC8PCh2526Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.198') { $details->model = 'Cisco ONS15530MRC8PCh2728Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.199') { $details->model = 'Cisco ONS15530MRC8PCh2930Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.2') { $details->model = 'Cisco ONS15530Osc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.20') { $details->model = 'Cisco ONS15530Tsp1Ch0304MmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.200') { $details->model = 'Cisco ONS15530MRC8PCh3132Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.201') { $details->model = 'Cisco ONS15530MRC8PCh0102'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.202') { $details->model = 'Cisco ONS15530MRC8PCh0304'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.203') { $details->model = 'Cisco ONS15530MRC8PCh0506'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.204') { $details->model = 'Cisco ONS15530MRC8PCh0708'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.205') { $details->model = 'Cisco ONS15530MRC8PCh0910'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.206') { $details->model = 'Cisco ONS15530MRC8PCh1112'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.207') { $details->model = 'Cisco ONS15530MRC8PCh1314'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.208') { $details->model = 'Cisco ONS15530MRC8PCh1516'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.209') { $details->model = 'Cisco ONS15530MRC8PCh1718'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.21') { $details->model = 'Cisco ONS15530Tsp1Ch0506MmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.210') { $details->model = 'Cisco ONS15530MRC8PCh1920'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.211') { $details->model = 'Cisco ONS15530MRC8PCh2122'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.212') { $details->model = 'Cisco ONS15530MRC8PCh2324'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.213') { $details->model = 'Cisco ONS15530MRC8PCh2526'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.214') { $details->model = 'Cisco ONS15530MRC8PCh2728'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.215') { $details->model = 'Cisco ONS15530MRC8PCh2930'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.216') { $details->model = 'Cisco ONS15530MRC8PCh3132'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.217') { $details->model = 'Cisco ONS1553010G4ChASp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.218') { $details->model = 'Cisco ONS1553010G4ChBSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.219') { $details->model = 'Cisco ONS1553010G4ChCSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.22') { $details->model = 'Cisco ONS15530Tsp1Ch0708MmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.220') { $details->model = 'Cisco ONS1553010G4ChDSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.221') { $details->model = 'Cisco ONS1553010G4ChESp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.222') { $details->model = 'Cisco ONS1553010G4ChFSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.223') { $details->model = 'Cisco ONS1553010G4ChGSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.224') { $details->model = 'Cisco ONS1553010G4ChHSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.225') { $details->model = 'Cisco ONS1553010G4ChA'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.226') { $details->model = 'Cisco ONS1553010G4ChB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.227') { $details->model = 'Cisco ONS1553010G4ChC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.228') { $details->model = 'Cisco ONS1553010G4ChD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.229') { $details->model = 'Cisco ONS1553010G4ChE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.23') { $details->model = 'Cisco ONS15530Tsp1Ch0910MmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.230') { $details->model = 'Cisco ONS1553010G4ChF'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.231') { $details->model = 'Cisco ONS1553010G4ChG'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.232') { $details->model = 'Cisco ONS1553010G4ChH'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.233') { $details->model = 'Cisco ONS1553010G32ChSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.234') { $details->model = 'Cisco ONS1553010G32Ch'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.24') { $details->model = 'Cisco ONS15530Tsp1Ch1112MmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.25') { $details->model = 'Cisco ONS15530Tsp1Ch1314MmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.26') { $details->model = 'Cisco ONS15530Tsp1Ch1516MmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.27') { $details->model = 'Cisco ONS15530Tsp1Ch1718MmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.28') { $details->model = 'Cisco ONS15530Tsp1Ch1920MmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.29') { $details->model = 'Cisco ONS15530Tsp1Ch2122MmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.3') { $details->model = 'Cisco ONS15530MDX4ChA'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.30') { $details->model = 'Cisco ONS15530Tsp1Ch2324MmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.31') { $details->model = 'Cisco ONS15530Tsp1Ch2526MmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.32') { $details->model = 'Cisco ONS15530Tsp1Ch2728MmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.33') { $details->model = 'Cisco ONS15530Tsp1Ch2930MmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.34') { $details->model = 'Cisco ONS15530Tsp1Ch3132MmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.35') { $details->model = 'Cisco ONS15530Tsp1Ch0102SmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.36') { $details->model = 'Cisco ONS15530Tsp1Ch0304SmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.37') { $details->model = 'Cisco ONS15530Tsp1Ch0506SmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.38') { $details->model = 'Cisco ONS15530Tsp1Ch0708SmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.39') { $details->model = 'Cisco ONS15530Tsp1Ch0910SmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.4') { $details->model = 'Cisco ONS15530MDX4ChB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.40') { $details->model = 'Cisco ONS15530Tsp1Ch1112SmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.41') { $details->model = 'Cisco ONS15530Tsp1Ch1314SmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.42') { $details->model = 'Cisco ONS15530Tsp1Ch1516SmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.43') { $details->model = 'Cisco ONS15530Tsp1Ch1718SmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.44') { $details->model = 'Cisco ONS15530Tsp1Ch1920SmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.45') { $details->model = 'Cisco ONS15530Tsp1Ch2122SmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.46') { $details->model = 'Cisco ONS15530Tsp1Ch2324SmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.47') { $details->model = 'Cisco ONS15530Tsp1Ch2526SmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.48') { $details->model = 'Cisco ONS15530Tsp1Ch2728SmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.49') { $details->model = 'Cisco ONS15530Tsp1Ch2930SmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.5') { $details->model = 'Cisco ONS15530MDX4ChC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.50') { $details->model = 'Cisco ONS15530Tsp1Ch3132SmScSp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.51') { $details->model = 'Cisco ONS15530Tsp1Ch0102MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.52') { $details->model = 'Cisco ONS15530Tsp1Ch0304MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.53') { $details->model = 'Cisco ONS15530Tsp1Ch0506MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.54') { $details->model = 'Cisco ONS15530Tsp1Ch0708MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.55') { $details->model = 'Cisco ONS15530Tsp1Ch0910MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.56') { $details->model = 'Cisco ONS15530Tsp1Ch1112MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.57') { $details->model = 'Cisco ONS15530Tsp1Ch1314MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.58') { $details->model = 'Cisco ONS15530Tsp1Ch1516MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.59') { $details->model = 'Cisco ONS15530Tsp1Ch1718MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.6') { $details->model = 'Cisco ONS15530MDX4ChD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.60') { $details->model = 'Cisco ONS15530Tsp1Ch1920MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.61') { $details->model = 'Cisco ONS15530Tsp1Ch2122MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.62') { $details->model = 'Cisco ONS15530Tsp1Ch2324MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.63') { $details->model = 'Cisco ONS15530Tsp1Ch2526MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.64') { $details->model = 'Cisco ONS15530Tsp1Ch2728MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.65') { $details->model = 'Cisco ONS15530Tsp1Ch2930MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.66') { $details->model = 'Cisco ONS15530Tsp1Ch3132MmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.67') { $details->model = 'Cisco ONS15530Tsp1Ch0102SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.68') { $details->model = 'Cisco ONS15530Tsp1Ch0304SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.69') { $details->model = 'Cisco ONS15530Tsp1Ch0506SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.7') { $details->model = 'Cisco ONS15530MDX4ChE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.70') { $details->model = 'Cisco ONS15530Tsp1Ch0708SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.71') { $details->model = 'Cisco ONS15530Tsp1Ch0910SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.72') { $details->model = 'Cisco ONS15530Tsp1Ch1112SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.73') { $details->model = 'Cisco ONS15530Tsp1Ch1314SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.74') { $details->model = 'Cisco ONS15530Tsp1Ch1516SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.75') { $details->model = 'Cisco ONS15530Tsp1Ch1718SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.76') { $details->model = 'Cisco ONS15530Tsp1Ch1920SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.77') { $details->model = 'Cisco ONS15530Tsp1Ch2122SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.78') { $details->model = 'Cisco ONS15530Tsp1Ch2324SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.79') { $details->model = 'Cisco ONS15530Tsp1Ch2526SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.8') { $details->model = 'Cisco ONS15530MDX4ChF'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.80') { $details->model = 'Cisco ONS15530Tsp1Ch2728SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.81') { $details->model = 'Cisco ONS15530Tsp1Ch2930SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.82') { $details->model = 'Cisco ONS15530Tsp1Ch3132SmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.83') { $details->model = 'Cisco ONS15530LCEscon10'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.84') { $details->model = 'Cisco ONS15500XvrEscon1310MmMTRJ'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.85') { $details->model = 'Cisco ONS15530LC10GESmSc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.86') { $details->model = 'Cisco ONS1553010GCh01Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.87') { $details->model = 'Cisco ONS1553010GCh02Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.88') { $details->model = 'Cisco ONS1553010GCh03Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.89') { $details->model = 'Cisco ONS1553010GCh04Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.9') { $details->model = 'Cisco ONS15530MDX4ChG'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.90') { $details->model = 'Cisco ONS1553010GCh05Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.91') { $details->model = 'Cisco ONS1553010GCh06Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.92') { $details->model = 'Cisco ONS1553010GCh07Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.93') { $details->model = 'Cisco ONS1553010GCh08Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.94') { $details->model = 'Cisco ONS1553010GCh09Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.95') { $details->model = 'Cisco ONS1553010GCh10Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.96') { $details->model = 'Cisco ONS1553010GCh11Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.97') { $details->model = 'Cisco ONS1553010GCh12Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.98') { $details->model = 'Cisco ONS1553010GCh13Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.44.99') { $details->model = 'Cisco ONS1553010GCh14Sp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46') { $details->model = 'Cisco ModuleONS15500Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.1') { $details->model = 'Cisco ONS15500PEQ01A'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.10') { $details->model = 'Cisco ONS15500PEQ02CD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.11') { $details->model = 'Cisco ONS15500PEQ02EF'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.12') { $details->model = 'Cisco ONS15500PEQ02GH'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.13') { $details->model = 'Cisco ONS15500VOA01'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.14') { $details->model = 'Cisco ONS15500VOA02'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.15') { $details->model = 'Cisco ONS15500XvrEscon1310MTRJ'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.16') { $details->model = 'Cisco ONS15500XvrEscon1310LC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.17') { $details->model = 'Cisco ONS15500XvrFC850LC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.18') { $details->model = 'Cisco ONS15500XvrFC850MTRJ'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.19') { $details->model = 'Cisco ONS15500XvrFC1310LC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.2') { $details->model = 'Cisco ONS15500PEQ01B'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.20') { $details->model = 'Cisco ONS15500XvrFC1310MTRJ'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.21') { $details->model = 'Cisco ONS15500XvrGE850LC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.22') { $details->model = 'Cisco ONS15500XvrGE850MTRJ'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.23') { $details->model = 'Cisco ONS15500XvrGE1310LC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.24') { $details->model = 'Cisco ONS15500XvrGE1310MTRJ'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.25') { $details->model = 'Cisco ONS15500XvrGEFC850LC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.26') { $details->model = 'Cisco ONS15500XvrGEFC850MTRJ'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.27') { $details->model = 'Cisco ONS15500XvrGEFC1310LC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.28') { $details->model = 'Cisco ONS15500XvrGEFC1310MTRJ'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.29') { $details->model = 'Cisco ONS15500XvrOC3Son1310MTRJ'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.3') { $details->model = 'Cisco ONS15500PEQ01C'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.30') { $details->model = 'Cisco ONS15500XvrOC3Son1310LC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.31') { $details->model = 'Cisco ONS15500XvrOC12Son1310MTRJ'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.32') { $details->model = 'Cisco ONS15500XvrOC12Son1310LC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.33') { $details->model = 'Cisco ONS15500XvrOC48Son1310MTRJ'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.34') { $details->model = 'Cisco ONS15500XvrOC48Son1310LC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.35') { $details->model = 'Cisco ONS15500XvrLowMM1310LC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.36') { $details->model = 'Cisco ONS15500XvrLowSM1310LC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.37') { $details->model = 'Cisco ONS15500XvrMidMM1310LC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.38') { $details->model = 'Cisco ONS15500XvrMidSM1310LC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.39') { $details->model = 'Cisco ONS15500XvrHighSM1310LC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.4') { $details->model = 'Cisco ONS15500PEQ01D'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.40') { $details->model = 'Cisco ONS15500XvrT1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.41') { $details->model = 'Cisco ONS15500XvrE1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.42') { $details->model = 'Cisco ONS15500XvrDV'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.5') { $details->model = 'Cisco ONS15500PEQ01E'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.6') { $details->model = 'Cisco ONS15500PEQ01F'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.7') { $details->model = 'Cisco ONS15500PEQ01G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.8') { $details->model = 'Cisco ONS15500PEQ01H'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.46.9') { $details->model = 'Cisco ONS15500PEQ02AB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.47') { $details->model = 'Cisco ModuleC4224Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.47.1') { $details->model = 'Cisco C42241FeTx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.47.2') { $details->model = 'Cisco C422424FeTx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.48') { $details->model = 'Cisco ModuleONS15454Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.48.3') { $details->model = 'Cisco ONS15454FeCE100'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.48.4') { $details->model = 'Cisco ONS15454Ge10ML2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.48.5') { $details->model = 'Cisco ONS15454Ge10CE2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.48.9') { $details->model = 'Cisco ONS15454cptPtf25610GX4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5') { $details->model = 'Cisco ModuleCpuType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.1') { $details->model = 'Cisco C7200Io1fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.10') { $details->model = 'Cisco Cpu1400'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.100') { $details->model = 'Cisco Cpu3825ge2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.101') { $details->model = 'Cisco CpuCrs1AsmpRoute'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.102') { $details->model = 'Cisco CpuCrs1DsmpRoute'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.103') { $details->model = 'Cisco CpuCrs1pfeAsic'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.104') { $details->model = 'Cisco CpuCrs1EgressqAsic'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.105') { $details->model = 'Cisco CpuCrs1FabricqAsic'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.106') { $details->model = 'Cisco CpuCrs1IngressqAsic'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.107') { $details->model = 'Cisco CpuCrs1SPLC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.108') { $details->model = 'Cisco CpuCrs1SPFC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.109') { $details->model = 'Cisco Cpu1800Mod'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.11') { $details->model = 'Cisco Cpu800'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.110') { $details->model = 'Cisco CpuPrp2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.111') { $details->model = 'Cisco CpuCat6kWsSup32ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.112') { $details->model = 'Cisco CpuCat6kWsSup3210ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.113') { $details->model = 'Cisco CpuAs5400XM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.114') { $details->model = 'Cisco CpuAs5350XM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.115') { $details->model = 'Cisco Cpu1800'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.118') { $details->model = 'Cisco Cpu7200Npeg2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.119') { $details->model = 'Cisco CpuCat6kMsfc2a'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.12') { $details->model = 'Cisco CpuPSM1Gbps'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.120') { $details->model = 'Cisco CpuC28012fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.121') { $details->model = 'Cisco CpuIXP2350WestportNP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.122') { $details->model = 'Cisco CpuC7300Nse150'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.123') { $details->model = 'Cisco CpuCre1Rp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.124') { $details->model = 'Cisco CpuCre2Rp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.125') { $details->model = 'Cisco CpuCre3Rp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.126') { $details->model = 'Cisco CpuCre1Fp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.127') { $details->model = 'Cisco CpuCre2Fp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.128') { $details->model = 'Cisco CpuCre3Fp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.130') { $details->model = 'Cisco Cpu7600Sip600DC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.131') { $details->model = 'Cisco CpuCat6kVsF6kMsfc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.132') { $details->model = 'Cisco CpuCat6kVsS72010G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.133') { $details->model = 'Cisco Cpu7201Npeg2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.134') { $details->model = 'Cisco CpuSamiDc8548H'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.135') { $details->model = 'Cisco CpuUC500'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.138') { $details->model = 'Cisco CpuBroadcomSB1A'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.139') { $details->model = 'Cisco CpuCrs1SPLCB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.14') { $details->model = 'Cisco Cpu7200Npe175'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.140') { $details->model = 'Cisco CpuUc520s'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.141') { $details->model = 'Cisco CpuUc520m'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.144') { $details->model = 'Cisco Cpu1861'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.145') { $details->model = 'Cisco CpuTraffic'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.146') { $details->model = 'Cisco CpuCat6kWsSup32Pge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.147') { $details->model = 'Cisco CpuCat6kWsSup32P10ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.148') { $details->model = 'Cisco CpuCat6kWsF6kPisa'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.15') { $details->model = 'Cisco Cpu7200Npe225'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.152') { $details->model = 'Cisco CpuCrs1PlimAsic'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.153') { $details->model = 'Cisco Cpu2435Iad8Fxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.154') { $details->model = 'Cisco CpuVG204'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.155') { $details->model = 'Cisco CpuVG202'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.157') { $details->model = 'Cisco Cpu2941'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.158') { $details->model = 'Cisco CPU8641D'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.160') { $details->model = 'Cisco Cpu19412ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.161') { $details->model = 'Cisco Cpu29012ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.162') { $details->model = 'Cisco Cpu29113ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.163') { $details->model = 'Cisco Cpu29213ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.164') { $details->model = 'Cisco Cpu29513ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.165') { $details->model = 'Cisco Cpu39253ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.166') { $details->model = 'Cisco Cpu39453ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.167') { $details->model = 'Cisco CpuSr520T1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.168') { $details->model = 'Cisco Cpu1941w2ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.169') { $details->model = 'Cisco Cpu3825nvge2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.17') { $details->model = 'Cisco Cpu1417'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.170') { $details->model = 'Cisco Cpu3845nvge2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.175') { $details->model = 'Cisco CpuCrs1SPFP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.179') { $details->model = 'Cisco Cpu3900SPE2004ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.18') { $details->model = 'Cisco CpuPsm11oc12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.182') { $details->model = 'Cisco Cpu3900Spe100K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.183') { $details->model = 'Cisco Cpu3900Spe150K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.186') { $details->model = 'Cisco Cpu3900SPE2504ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.187') { $details->model = 'Cisco CpuCrs1FP140'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.188') { $details->model = 'Cisco CpuCrs1MSC140G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.189') { $details->model = 'Cisco CpuC1841C2fek9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.19') { $details->model = 'Cisco CpuOpticalRegenerator'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.190') { $details->model = 'Cisco CpuC2801C2fek9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.191') { $details->model = 'Cisco CpuC2811C2fek9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.192') { $details->model = 'Cisco CpuC2821C2gek9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.194') { $details->model = 'Cisco Cpu3825C2gek9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.195') { $details->model = 'Cisco Cpu3845C2gek9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.198') { $details->model = 'Cisco CpuCGR20102ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.199') { $details->model = 'Cisco Cpu1906Ck9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.2') { $details->model = 'Cisco C7200Io'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.20') { $details->model = 'Cisco CpuUbr924'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.201') { $details->model = 'Cisco CpuDsp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.202') { $details->model = 'Cisco Cpu5915'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.21') { $details->model = 'Cisco Cpu7120'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.212') { $details->model = 'Cisco Cpu86xVAE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.213') { $details->model = 'Cisco CpuCryptoAsic'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.214') { $details->model = 'Cisco Cpu2811ve2fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.215') { $details->model = 'Cisco Cpu1841ve2fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.216') { $details->model = 'Cisco Cpu819HG'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.217') { $details->model = 'Cisco Cpu819G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.218') { $details->model = 'Cisco Cpu881W'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.219') { $details->model = 'Cisco Cpu886VAW'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.22') { $details->model = 'Cisco Cpu7140'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.220') { $details->model = 'Cisco Cpu887VAMW'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.221') { $details->model = 'Cisco Cpu887VAW'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.222') { $details->model = 'Cisco CpuAsaSm1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.223') { $details->model = 'Cisco CpuAsaSm1K7'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.23') { $details->model = 'Cisco CpuPsm12t3e3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.234') { $details->model = 'Cisco CpuCrsLSP140'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.24') { $details->model = 'Cisco CpuPsm14oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.250') { $details->model = 'Cisco Cpu819HGW'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.251') { $details->model = 'Cisco Cpu819H'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.252') { $details->model = 'Cisco Cpu819HWD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.253') { $details->model = 'Cisco Cpu812G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.254') { $details->model = 'Cisco Cpu812GCIFI'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.255') { $details->model = 'Cisco Cpu819HGM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.256') { $details->model = 'Cisco Cpu819GM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.26') { $details->model = 'Cisco Cpu7200Npe100'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.266') { $details->model = 'Cisco CpuCgrSup'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.27') { $details->model = 'Cisco Cpu7200Npe150'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.28') { $details->model = 'Cisco Cpu7200Npe200'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.29') { $details->model = 'Cisco CpuCreRp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.3') { $details->model = 'Cisco CpuAS5300'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.30') { $details->model = 'Cisco CpuCreFp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.31') { $details->model = 'Cisco CpuAs5400'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.34') { $details->model = 'Cisco CpuAS5200'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.35') { $details->model = 'Cisco CpuGrp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.36') { $details->model = 'Cisco CpuMc3810V3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.38') { $details->model = 'Cisco CpuAs5850'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.39') { $details->model = 'Cisco Cpu7200Npe400'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.41') { $details->model = 'Cisco CpuRsp4Plus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.42') { $details->model = 'Cisco CpuUbr91x'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.43') { $details->model = 'Cisco Cpu7150'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.44') { $details->model = 'Cisco CpuPXMB45Gbps'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.47') { $details->model = 'Cisco CpuONS15540'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.48') { $details->model = 'Cisco CpuRsp16'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.49') { $details->model = 'Cisco CpuPrp1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.50') { $details->model = 'Cisco CpuC7300Nse100'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.51') { $details->model = 'Cisco CpuPXM1E1Gbps'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.52') { $details->model = 'Cisco CpuPXM1E2Oc12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.53') { $details->model = 'Cisco CpuPXM1E8Oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.54') { $details->model = 'Cisco CpuPXM1E8T3E3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.55') { $details->model = 'Cisco CpuPXM1EComboT3E3Oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.56') { $details->model = 'Cisco Cpu7200Npeg1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.57') { $details->model = 'Cisco Cpu26912fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.58') { $details->model = 'Cisco Cpu37452fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.59') { $details->model = 'Cisco Cpu37252fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.60') { $details->model = 'Cisco Cpu36311fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.61') { $details->model = 'Cisco Cpu19002fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.62') { $details->model = 'Cisco CpuONS15530SW'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.63') { $details->model = 'Cisco Cpu6400Nsp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.64') { $details->model = 'Cisco Cpu6400Nrp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.65') { $details->model = 'Cisco Cpu6400Nrp2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.66') { $details->model = 'Cisco Cpu6400Nrp2Sv'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.67') { $details->model = 'Cisco CpuPXM1E4Oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.68') { $details->model = 'Cisco Cpu1700'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.7') { $details->model = 'Cisco CpuRpm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.71') { $details->model = 'Cisco Cpu7301Npeg1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.72') { $details->model = 'Cisco CpuPXM1E16t1e1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.73') { $details->model = 'Cisco Cpu7300Nse100Plus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.74') { $details->model = 'Cisco CpuPxm1eB8t3e34Oc3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.75') { $details->model = 'Cisco Cpu4604'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.76') { $details->model = 'Cisco Cpu4224'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.77') { $details->model = 'Cisco CpuAs5400HPX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.78') { $details->model = 'Cisco CpuAs5350HPX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.8') { $details->model = 'Cisco Cpu2600'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.80') { $details->model = 'Cisco CpuAs5850tb'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.81') { $details->model = 'Cisco CpuC7300Npeg100'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.82') { $details->model = 'Cisco CpuMdsCpp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.83') { $details->model = 'Cisco CpuMdsDpp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.84') { $details->model = 'Cisco CpuMdsSup'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.85') { $details->model = 'Cisco Cpu2430Iad24Fxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.86') { $details->model = 'Cisco Cpu2431Iad8Fxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.87') { $details->model = 'Cisco Cpu2431Iad16Fxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.88') { $details->model = 'Cisco Cpu2431Iad1T1E1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.89') { $details->model = 'Cisco Cpu2432Iad24Fxs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.9') { $details->model = 'Cisco Cpu7200Npe300'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.90') { $details->model = 'Cisco Cpu3220'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.91') { $details->model = 'Cisco CpuVG224'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.92') { $details->model = 'Cisco CpuCat6kWsSup720RP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.93') { $details->model = 'Cisco CpuCat6kMsfc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.94') { $details->model = 'Cisco CpuCat6kMsfc2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.95') { $details->model = 'Cisco CpuCat6kWsxSup12ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.96') { $details->model = 'Cisco CpuCat6kWsxSup22ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.97') { $details->model = 'Cisco CpuCat6kWsxSup1a2ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.98') { $details->model = 'Cisco CpuCat6kWsSup720SP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.5.99') { $details->model = 'Cisco Cpu3845ge2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.50') { $details->model = 'Cisco ModuleCat37xxType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.50.1') { $details->model = 'Cisco ModuleCat375024'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.50.10') { $details->model = 'Cisco ModuleCat3750G16TD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.50.11') { $details->model = 'Cisco ModuleCat3750G24PS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.50.12') { $details->model = 'Cisco ModuleCat3750G48PS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.50.13') { $details->model = 'Cisco ModuleCat3750G48TS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.50.14') { $details->model = 'Cisco ModuleCat3750G24TS1U'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.50.16') { $details->model = 'Cisco ModuleCat375024FS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.50.17') { $details->model = 'Cisco ModuleCat3750Ge12SfpDc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.50.18') { $details->model = 'Cisco ModuleCat3750G24WS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.50.19') { $details->model = 'Cisco ModuleCat3750E24TD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.50.2') { $details->model = 'Cisco ModuleCat375048'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.50.20') { $details->model = 'Cisco ModuleCat3750E48TD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.50.21') { $details->model = 'Cisco ModuleCat3750E48PD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.50.22') { $details->model = 'Cisco ModuleCat3750E24PD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.50.23') { $details->model = 'Cisco ModuleCat3750v248ps'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.50.24') { $details->model = 'Cisco ModuleCat3750v248ts'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.50.25') { $details->model = 'Cisco ModuleCat3750v224ps'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.50.26') { $details->model = 'Cisco ModuleCat3750v224ts'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.50.3') { $details->model = 'Cisco ModuleCat375024TS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.50.4') { $details->model = 'Cisco ModuleCat375024T'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.50.6') { $details->model = 'Cisco ModuleCat3750Ge12Sfp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.50.7') { $details->model = 'Cisco ModuleCat375048PS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.50.8') { $details->model = 'Cisco ModuleCat375024PS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.50.9') { $details->model = 'Cisco ModuleCat375024ME'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51') { $details->model = 'Cisco ModuleSFPType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.1') { $details->model = 'Cisco SFPOc3mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.10') { $details->model = 'Cisco SFPCwdm1470'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.100') { $details->model = 'Cisco SFPDwdmXFP3898'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.101') { $details->model = 'Cisco SFPDwdmXFP3819'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.102') { $details->model = 'Cisco SFPDwdmXFP3661'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.103') { $details->model = 'Cisco SFPDwdmXFP3582'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.104') { $details->model = 'Cisco SFPDwdmXFP3504'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.105') { $details->model = 'Cisco SFPDwdmXFP3425'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.106') { $details->model = 'Cisco SFPDwdmXFP3268'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.107') { $details->model = 'Cisco SFPDwdmXFP3190'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.108') { $details->model = 'Cisco SFPDwdmXFP3112'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.109') { $details->model = 'Cisco SFPDwdmXFP3033'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.11') { $details->model = 'Cisco SFPCwdm1490'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.110') { $details->model = 'Cisco SFPDwdm6141'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.111') { $details->model = 'Cisco SFPDwdm5736'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.112') { $details->model = 'Cisco SFPDwdm5332'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.113') { $details->model = 'Cisco SFPDwdm4931'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.114') { $details->model = 'Cisco SFPDwdm4532'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.115') { $details->model = 'Cisco SFPDwdm4134'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.116') { $details->model = 'Cisco SFPDwdm3739'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.117') { $details->model = 'Cisco SFPDwdm3346'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.118') { $details->model = 'Cisco SFPUnknown'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.119') { $details->model = 'Cisco XFPUnknown'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.12') { $details->model = 'Cisco SFPCwdm1510'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.120') { $details->model = 'Cisco SFPStm1E'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.121') { $details->model = 'Cisco XFPmmsr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.122') { $details->model = 'Cisco XFR10gMMSR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.123') { $details->model = 'Cisco SFPTDwdmXfp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.124') { $details->model = 'Cisco XFP10GLR192SRL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.125') { $details->model = 'Cisco XFP10GER192IRL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.126') { $details->model = 'Cisco SFPCiscoSfpT3Ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.127') { $details->model = 'Cisco SFPT1E1Fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.128') { $details->model = 'Cisco SFPT3E3Fe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.129') { $details->model = 'Cisco XFPDWDMXFPC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.13') { $details->model = 'Cisco SFPCwdm1530'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.130') { $details->model = 'Cisco XFP10GLROC192'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.131') { $details->model = 'Cisco XFP10GER192IR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.132') { $details->model = 'Cisco XFP10GZROC192'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.133') { $details->model = 'Cisco XFP10GMMSR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.138') { $details->model = 'Cisco SFPGlcSxMmd'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.139') { $details->model = 'Cisco SFPGlcTe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.14') { $details->model = 'Cisco SFPCwdm1550'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.140') { $details->model = 'Cisco SFPGlcZxSmd'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.141') { $details->model = 'Cisco SFPGlcExSmd'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.142') { $details->model = 'Cisco SFPGlcLhSmd'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.143') { $details->model = 'Cisco SFP100BaseF'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.15') { $details->model = 'Cisco SFPCwdm1570'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.16') { $details->model = 'Cisco SFPCwdm1590'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.17') { $details->model = 'Cisco SFPCwdm1610'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.18') { $details->model = 'Cisco SFP1000BaseLh'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.19') { $details->model = 'Cisco SFP1000BaseCx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.2') { $details->model = 'Cisco SFPOc12mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.20') { $details->model = 'Cisco SFPOc3smir'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.21') { $details->model = 'Cisco SFPOc3smlr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.22') { $details->model = 'Cisco SFPOc12smir'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.23') { $details->model = 'Cisco SFPOc12smlr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.24') { $details->model = 'Cisco SFPOc48smsr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.25') { $details->model = 'Cisco SFPOc48smir'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.26') { $details->model = 'Cisco SFPOc48smlr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.27') { $details->model = 'Cisco XFPOc192smsr1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.28') { $details->model = 'Cisco XFPOc192smir2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.29') { $details->model = 'Cisco XFPOc192smlr2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.3') { $details->model = 'Cisco SFPOc48'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.30') { $details->model = 'Cisco SFPCable50cm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.33') { $details->model = 'Cisco SFPOc48smlr2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.34') { $details->model = 'Cisco SFPOc3smsr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.35') { $details->model = 'Cisco SFPOc12smsr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.36') { $details->model = 'Cisco SFPOc48mm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.37') { $details->model = 'Cisco SFPDwdm3033'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.38') { $details->model = 'Cisco SFPDwdm3112'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.39') { $details->model = 'Cisco SFPDwdm3190'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.4') { $details->model = 'Cisco SFPOc3Oc12'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.40') { $details->model = 'Cisco SFPDwdm3268'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.41') { $details->model = 'Cisco SFPDwdm3425'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.42') { $details->model = 'Cisco SFPDwdm3504'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.43') { $details->model = 'Cisco SFPDwdm3582'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.44') { $details->model = 'Cisco SFPDwdm3661'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.45') { $details->model = 'Cisco SFPDwdm3819'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.46') { $details->model = 'Cisco SFPDwdm3898'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.47') { $details->model = 'Cisco SFPDwdm3977'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.48') { $details->model = 'Cisco SFPDwdm4056'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.49') { $details->model = 'Cisco SFPDwdm4214'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.5') { $details->model = 'Cisco SFPOc3Oc12Oc48'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.50') { $details->model = 'Cisco SFPDwdm4294'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.51') { $details->model = 'Cisco SFPDwdm4373'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.52') { $details->model = 'Cisco SFPDwdm4453'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.53') { $details->model = 'Cisco SFPDwdm4612'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.54') { $details->model = 'Cisco SFPDwdm4692'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.55') { $details->model = 'Cisco SFPDwdm4772'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.56') { $details->model = 'Cisco SFPDwdm4851'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.57') { $details->model = 'Cisco SFPDwdm5012'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.58') { $details->model = 'Cisco SFPDwdm5092'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.59') { $details->model = 'Cisco SFPDwdm5172'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.6') { $details->model = 'Cisco SFP1000BaseSx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.60') { $details->model = 'Cisco SFPDwdm5252'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.61') { $details->model = 'Cisco SFPDwdm5413'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.62') { $details->model = 'Cisco SFPDwdm5494'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.63') { $details->model = 'Cisco SFPDwdm5575'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.64') { $details->model = 'Cisco SFPDwdm5655'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.65') { $details->model = 'Cisco SFPDwdm5817'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.66') { $details->model = 'Cisco SFPDwdm5898'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.67') { $details->model = 'Cisco SFPDwdm5979'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.68') { $details->model = 'Cisco SFPDwdm6061'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.69') { $details->model = 'Cisco SFP1000BaseBX10D'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.7') { $details->model = 'Cisco SFP1000BaseLx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.70') { $details->model = 'Cisco SFP1000BaseBX10U'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.71') { $details->model = 'Cisco SFP100BaseFX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.72') { $details->model = 'Cisco SFP100BaseLX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.73') { $details->model = 'Cisco SFP100BaseSX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.74') { $details->model = 'Cisco SFP100BaseZX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.75') { $details->model = 'Cisco SFP100BaseEX'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.76') { $details->model = 'Cisco SFP100BaseBX10D'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.77') { $details->model = 'Cisco SFP100BaseBX10U'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.78') { $details->model = 'Cisco SFPDwdmXFP6061'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.79') { $details->model = 'Cisco SFPDwdmXFP5979'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.8') { $details->model = 'Cisco SFP1000BaseT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.80') { $details->model = 'Cisco SFPDwdmXFP5898'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.81') { $details->model = 'Cisco SFPDwdmXFP5817'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.82') { $details->model = 'Cisco SFPDwdmXFP5655'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.83') { $details->model = 'Cisco SFPDwdmXFP5575'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.84') { $details->model = 'Cisco SFPDwdmXFP5494'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.85') { $details->model = 'Cisco SFPDwdmXFP5413'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.86') { $details->model = 'Cisco SFPDwdmXFP5252'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.87') { $details->model = 'Cisco SFPDwdmXFP5172'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.88') { $details->model = 'Cisco SFPDwdmXFP5092'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.89') { $details->model = 'Cisco SFPDwdmXFP5012'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.9') { $details->model = 'Cisco SFP1000BaseZx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.90') { $details->model = 'Cisco SFPDwdmXFP4851'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.91') { $details->model = 'Cisco SFPDwdmXFP4772'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.92') { $details->model = 'Cisco SFPDwdmXFP4692'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.93') { $details->model = 'Cisco SFPDwdmXFP4612'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.94') { $details->model = 'Cisco SFPDwdmXFP4453'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.95') { $details->model = 'Cisco SFPDwdmXFP4373'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.96') { $details->model = 'Cisco SFPDwdmXFP4294'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.97') { $details->model = 'Cisco SFPDwdmXFP4214'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.98') { $details->model = 'Cisco SFPDwdmXFP4056'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.51.99') { $details->model = 'Cisco SFPDwdmXFP3977'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.52') { $details->model = 'Cisco ModuleONS15200Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.52.1') { $details->model = 'Cisco ONS15252Clip'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.52.2') { $details->model = 'Cisco ONS15201Clip'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.52.3') { $details->model = 'Cisco ONS15252Ncb'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53') { $details->model = 'Cisco ModuleMDSType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.1') { $details->model = 'Cisco MDSDsX9530Sf1K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.10') { $details->model = 'Cisco MDSDsSfpGeSw'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.11') { $details->model = 'Cisco MDSDsSfpGeLw'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.12') { $details->model = 'Cisco MDSDsC9500Cl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.13') { $details->model = 'Cisco MDSDsX9216K9Sup'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.14') { $details->model = 'Cisco MDSMemFld512M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.15') { $details->model = 'Cisco MDSMemMd1G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.16') { $details->model = 'Cisco MDSDsC9509Cl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.17') { $details->model = 'Cisco MDSDsC9506Cl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.18') { $details->model = 'Cisco MDSDsX9140K9Sup'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.19') { $details->model = 'Cisco MDSDsX9120K9Sup'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.2') { $details->model = 'Cisco MDSRedDsX9530Sf1K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.20') { $details->model = 'Cisco MDSDsX9032Sma'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.21') { $details->model = 'Cisco MDSDsX9216Mgt'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.22') { $details->model = 'Cisco MDSDsX930214K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.23') { $details->model = 'Cisco MDSDsX9202'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.24') { $details->model = 'Cisco MDSDsX9304Smip'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.25') { $details->model = 'Cisco MDSDsX9132K9Sup'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.26') { $details->model = 'Cisco MDSDsX9116K9Sup'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.27') { $details->model = 'Cisco MDSDsX9216IK9Sup'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.28') { $details->model = 'Cisco MDSDsX9530Sf2K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.29') { $details->model = 'Cisco MDSDsX9112'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.3') { $details->model = 'Cisco MDSDsX9016'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.30') { $details->model = 'Cisco MDSDsX9124'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.31') { $details->model = 'Cisco MDSDsX9148'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.32') { $details->model = 'Cisco MDSDsX9704'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.33') { $details->model = 'Cisco MDSDs13SltFab1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.34') { $details->model = 'Cisco MDSDsC9513Cl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.35') { $details->model = 'Cisco MDSDsX9124S2K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.36') { $details->model = 'Cisco MDSDsIBMFC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.37') { $details->model = 'Cisco MDSDsHPFC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.38') { $details->model = 'Cisco MDSDsX9222iK9Sup'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.39') { $details->model = 'Cisco MDSDxX930418K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.4') { $details->model = 'Cisco MDSDsX9032'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.40') { $details->model = 'Cisco MDSDsX9134S2K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.41') { $details->model = 'Cisco MdsDSC9222iK9Sup'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.42') { $details->model = 'Cisco MDSDsX9248FC48Gbps'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.43') { $details->model = 'Cisco MDSDsX9248FC96Gbps'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.44') { $details->model = 'Cisco MDSDsX9316SSM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.45') { $details->model = 'Cisco MDSDs13SltFab2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.46') { $details->model = 'Cisco MDSDsX922496k9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.5') { $details->model = 'Cisco MDSDsX9032Smv'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.52') { $details->model = 'Cisco MDSDsX9716K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.53') { $details->model = 'Cisco MDSDsX9248x256K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.54') { $details->model = 'Cisco MDSDsX9232x256K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.55') { $details->model = 'Cisco MDSDs13SlotFabricEvia3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.56') { $details->model = 'Cisco MDSDsX9530Sf2AK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.57') { $details->model = 'Cisco MDSDs9708HPK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.58') { $details->model = 'Cisco MDSDs9708K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.6') { $details->model = 'Cisco MDSDsX9308Smip'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.7') { $details->model = 'Cisco MDSDsX9560Smc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.8') { $details->model = 'Cisco MDSDsSfpFc2Gsw'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.53.9') { $details->model = 'Cisco MDSDsSfpFc2Glw'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.54') { $details->model = 'Cisco ModuleC3220Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.54.1') { $details->model = 'Cisco C3220Smic'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.54.2') { $details->model = 'Cisco C3220Fesmic'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55') { $details->model = 'Cisco ModuleCrs1Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.1') { $details->model = 'Cisco ModuleCrs1RP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.10') { $details->model = 'Cisco ModuleCrs116mS2FanCtrllrFabric'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.11') { $details->model = 'Cisco ModuleCrs1Alarm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.12') { $details->model = 'Cisco ModuleCrs116mFabricLED'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.13') { $details->model = 'Cisco ModuleCrs1DRPPlim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.14') { $details->model = 'Cisco ModuleCrs116OC48Plim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.15') { $details->model = 'Cisco ModuleCrs14OC192VSRPlim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.16') { $details->model = 'Cisco ModuleCrs14OC192SRPlim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.17') { $details->model = 'Cisco Modulecrs14OC192LRPlim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.18') { $details->model = 'Cisco ModuleCrs1OC768VSRPlim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.19') { $details->model = 'Cisco ModuleCrs1OC768SRPlim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.2') { $details->model = 'Cisco ModuleCrs1DRP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.20') { $details->model = 'Cisco ModuleCrs16x10GePlim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.21') { $details->model = 'Cisco ModuleCrs18x10GePlim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.22') { $details->model = 'Cisco ModuleCrs18RP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.23') { $details->model = 'Cisco ModuleCrs18Fabric'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.24') { $details->model = 'Cisco ModuleCrs1FabricShelfController'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.25') { $details->model = 'Cisco ModuleCrs1FabricSwitchFabric'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.26') { $details->model = 'Cisco ModuleCrs1FabricLEDModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.27') { $details->model = 'Cisco ModuleCrs1FabricOIMSingleSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.28') { $details->model = 'Cisco ModuleCrs1FabricOIMDualSlot'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.29') { $details->model = 'Cisco ModuleCrs18dS123Fabric'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.3') { $details->model = 'Cisco ModuleCrs18sS123Fabric'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.30') { $details->model = 'Cisco ModuleCrs18mS123Fabric'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.31') { $details->model = 'Cisco ModuleCrs116dS123Fabric'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.32') { $details->model = 'Cisco ModuleCrs1FccSc22Ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.33') { $details->model = 'Cisco ModuleCrs1FccSFEc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.34') { $details->model = 'Cisco ModuleCrs14x10GeCDwdmPlim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.35') { $details->model = 'Cisco ModuleCrs14OC192CDwdmPlim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.36') { $details->model = 'Cisco ModuleCrs1OC768CDwdmPlim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.37') { $details->model = 'Cisco ModuleCrs1DRPBPlim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.38') { $details->model = 'Cisco ModuleCrs1DRPB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.39') { $details->model = 'Cisco ModuleCrs1OC768CDwdmDpskC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.4') { $details->model = 'Cisco ModuleCrs116sS123Fabric'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.42') { $details->model = 'Cisco ModuleCrs14FabricCard'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.43') { $details->model = 'Cisco ModuleCrsASPLIM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.44') { $details->model = 'Cisco ModuleCrs4OC192DptLr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.45') { $details->model = 'Cisco ModuleCrs4OC192DptSr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.46') { $details->model = 'Cisco ModuleCrs4OC192DptVs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.47') { $details->model = 'Cisco ModuleCrs14x10GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.48') { $details->model = 'Cisco ModuleCrs142x1GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.49') { $details->model = 'Cisco ModuleCrs120x1GeFl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.5') { $details->model = 'Cisco ModuleCrs116dS123TFabric'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.50') { $details->model = 'Cisco ModuleCrs12x10GeFl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.51') { $details->model = 'Cisco ModuleCrs116Alarm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.52') { $details->model = 'Cisco ModuleCrs14x10GbeWLXfpPlim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.53') { $details->model = 'Cisco ModuleCrs18x10GbeWLXfpPlim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.54') { $details->model = 'Cisco ModuleCrs1LcB40G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.55') { $details->model = 'Cisco ModuleCrs1Lc40G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.56') { $details->model = 'Cisco ModuleCrs114X10GBEWLXFPPlim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.57') { $details->model = 'Cisco ModuleCrs120X10GBEWLXFPPlim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.58') { $details->model = 'Cisco ModuleCrs11X100GBEPlim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.6') { $details->model = 'Cisco ModuleCrs116mS13Fabric'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.63') { $details->model = 'Cisco ModuleCrs16FanCtB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.64') { $details->model = 'Cisco ModuleCrs16AlarmMB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.65') { $details->model = 'Cisco ModuleCrs16LccFCtB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.66') { $details->model = 'Cisco ModuleCrs114X10GBEDwdmXfpPlim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.67') { $details->model = 'Cisco ModuleCrs120X10GBEDwdmXfpPlim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.68') { $details->model = 'Cisco ModuleCrs14X40GBEOtu3Plim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.69') { $details->model = 'Cisco ModuleCrs11X100GBEDwdmPlim'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.7') { $details->model = 'Cisco ModuleCrs116mS2CCFabric'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.8') { $details->model = 'Cisco ModuleCrs116mS2Fabric'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.55.9') { $details->model = 'Cisco ModuleCrs1FanCtrllrLC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.56') { $details->model = 'Cisco ModuleCat35xxType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.56.1') { $details->model = 'Cisco ModuleCat356024PS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.56.10') { $details->model = 'Cisco ModuleCat3560E48TD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.56.11') { $details->model = 'Cisco ModuleCat3560E24PD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.56.12') { $details->model = 'Cisco ModuleCat3560E48PD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.56.13') { $details->model = 'Cisco ModuleCat35608PC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.56.14') { $details->model = 'Cisco ModuleCat3560e12d'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.56.15') { $details->model = 'Cisco ModuleCat3560E12SD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.56.16') { $details->model = 'Cisco ModuleCat356012PCS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.56.17') { $details->model = 'Cisco ModuleCat3560v248ps'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.56.18') { $details->model = 'Cisco ModuleCat3560v248ts'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.56.19') { $details->model = 'Cisco ModuleCat3560v224ps'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.56.2') { $details->model = 'Cisco ModuleCat356048PS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.56.20') { $details->model = 'Cisco ModuleCat3560v224ts'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.56.21') { $details->model = 'Cisco ModuleCat3560v224tsD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.56.28') { $details->model = 'Cisco ModuleWsC3560CPD8ptS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.56.29') { $details->model = 'Cisco ModuleWsC3560C12pcS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.56.3') { $details->model = 'Cisco ModuleCat3560G24PS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.56.30') { $details->model = 'Cisco ModuleWsC3560C8pcS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.56.4') { $details->model = 'Cisco ModuleCat3560G24TS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.56.5') { $details->model = 'Cisco ModuleCat3560G48PS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.56.6') { $details->model = 'Cisco ModuleCat3560G48TS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.56.7') { $details->model = 'Cisco ModuleCat356024TS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.56.8') { $details->model = 'Cisco ModuleCat356048TS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.56.9') { $details->model = 'Cisco ModuleCat3560E24TD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.57') { $details->model = 'Cisco ModuleASA5523Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.57.1') { $details->model = 'Cisco MASA5523IsmSsmIds20K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.57.2') { $details->model = 'Cisco MASA5523PmSsmIO4ge'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.57.3') { $details->model = 'Cisco MASA5523IsmSsmIds10K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.57.4') { $details->model = 'Cisco PmSsmIO4geInc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.57.5') { $details->model = 'Cisco MASA5523IsmSsmCsc10'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.57.6') { $details->model = 'Cisco MASA5523IsmSsmCsc20'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.57.7') { $details->model = 'Cisco MASA5523IsmSsmIds40K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.58') { $details->model = 'Cisco ModuleUmg9820Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.58.1') { $details->model = 'Cisco ModuleUmg9820GigEProc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.58.2') { $details->model = 'Cisco ModuleUmg9820QamCard'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.59') { $details->model = 'Cisco ModuleONS15310Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.59.1') { $details->model = 'Cisco ONS15310FeML100'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.59.2') { $details->model = 'Cisco ONS15310FeCE100'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.59.3') { $details->model = 'Cisco ONS15310Ge8CE2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.6') { $details->model = 'Cisco ModuleCscType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60') { $details->model = 'Cisco ModuleX2s'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.1') { $details->model = 'Cisco MX210GBaseSR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.10') { $details->model = 'Cisco MX2s10GBaseWdmRxOnly'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.11') { $details->model = 'Cisco MX2s10GBaseDwdm3033'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.13') { $details->model = 'Cisco MX2s10GBaseDwdm3112'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.14') { $details->model = 'Cisco MX2s10GBaseDwdm3190'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.15') { $details->model = 'Cisco MX2s10GBaseDwdm3268'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.16') { $details->model = 'Cisco MX2s10GBaseDwdm3425'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.17') { $details->model = 'Cisco MX2s10GBaseDwdm3504'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.18') { $details->model = 'Cisco MX2s10GBaseDwdm3582'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.19') { $details->model = 'Cisco MX2s10GBaseDwdm3661'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.2') { $details->model = 'Cisco MX210GBaseLR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.20') { $details->model = 'Cisco MX2s10GBaseDwdm3819'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.21') { $details->model = 'Cisco MX2s10GBaseDwdm3898'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.22') { $details->model = 'Cisco MX2s10GBaseDwdm3977'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.23') { $details->model = 'Cisco MX2s10GBaseDwdm4056'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.24') { $details->model = 'Cisco MX2s10GBaseDwdm4214'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.25') { $details->model = 'Cisco MX2s10GBaseDwdm4294'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.26') { $details->model = 'Cisco MX2s10GBaseDwdm4373'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.27') { $details->model = 'Cisco MX2s10GBaseDwdm4453'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.28') { $details->model = 'Cisco MX2s10GBaseDwdm4612'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.29') { $details->model = 'Cisco MX2s10GBaseDwdm4692'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.3') { $details->model = 'Cisco MX210GBaseER'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.30') { $details->model = 'Cisco MX2s10GBaseDwdm4772'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.31') { $details->model = 'Cisco MX2s10GBaseDwdm4851'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.32') { $details->model = 'Cisco MX2s10GBaseDwdm5012'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.33') { $details->model = 'Cisco MX2s10GBaseDwdm5092'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.34') { $details->model = 'Cisco MX2s10GBaseDwdm5172'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.35') { $details->model = 'Cisco MX2s10GBaseDwdm5252'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.36') { $details->model = 'Cisco MX2s10GBaseDwdm5413'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.37') { $details->model = 'Cisco MX2s10GBaseDwdm5494'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.38') { $details->model = 'Cisco MX2s10GBaseDwdm5575'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.39') { $details->model = 'Cisco MX2s10GBaseDwdm5655'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.4') { $details->model = 'Cisco MX210GBaseLX4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.40') { $details->model = 'Cisco MX2s10GBaseDwdm5817'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.41') { $details->model = 'Cisco MX2s10GBaseDwdm5898'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.42') { $details->model = 'Cisco MX2s10GBaseDwdm5979'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.43') { $details->model = 'Cisco MX2s10GBaseDwdm6061'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.44') { $details->model = 'Cisco MX210GEBaseT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.5') { $details->model = 'Cisco MX210GBaseCX4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.6') { $details->model = 'Cisco MX210GBaseZR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.7') { $details->model = 'Cisco MX210GBaseLW'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.8') { $details->model = 'Cisco MX210GBaseLRM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.60.9') { $details->model = 'Cisco MX210GBaseT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.63') { $details->model = 'Cisco ModuleCE5xxType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.63.1') { $details->model = 'Cisco ModuleCE50024TT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.63.2') { $details->model = 'Cisco ModuleCE50024LC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.63.3') { $details->model = 'Cisco ModuleCE50024PC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.63.4') { $details->model = 'Cisco ModuleCE500G12TC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.63.5') { $details->model = 'Cisco ModuleCE5208PC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.63.6') { $details->model = 'Cisco ModuleCE52024PC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.63.7') { $details->model = 'Cisco ModuleCE52024TT'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.63.8') { $details->model = 'Cisco ModuleCE52024LC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.63.9') { $details->model = 'Cisco Module520G24TC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.64') { $details->model = 'Cisco ModuleMEType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.64.1') { $details->model = 'Cisco ModuleME240024TS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.64.10') { $details->model = 'Cisco ModuleME3600X24FS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.64.11') { $details->model = 'Cisco ModuleME3600X24TS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.64.12') { $details->model = 'Cisco ModuleME3800X24FS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.64.2') { $details->model = 'Cisco ModuleME340024TS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.64.3') { $details->model = 'Cisco ModuleME3400G12CS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.64.4') { $details->model = 'Cisco ModuleME3400G2CS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.64.5') { $details->model = 'Cisco ModuleME492410GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.64.6') { $details->model = 'Cisco ModuleME340024FS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.64.7') { $details->model = 'Cisco ModuleME3400E24TS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.64.8') { $details->model = 'Cisco ModuleME3400EG12CS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.64.9') { $details->model = 'Cisco ModuleME3400EG2CS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.65') { $details->model = 'Cisco ModuleCat4000EType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.65.1') { $details->model = 'Cisco Cat4kWsx45Sup6e'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.65.10') { $details->model = 'Cisco Cat4kWsx4648Rj45vPlusE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.65.13') { $details->model = 'Cisco Cat4kWsx45Sup6LE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.65.14') { $details->model = 'Cisco Cat4kWsx45Sup7e'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.65.15') { $details->model = 'Cisco Cat4kWsx4748Rj45VPlusE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.65.16') { $details->model = 'Cisco Cat4kWsx4712SfpPlusE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.65.17') { $details->model = 'Cisco Cat4kWsx4612SfpE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.65.18') { $details->model = 'Cisco Cat4kWsx4640CSfpE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.65.19') { $details->model = 'Cisco CatWsX4748Rj45E'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.65.2') { $details->model = 'Cisco Cat4kWsx4648Rj45e'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.65.20') { $details->model = 'Cisco Cat4kWsX4748NgpoeE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.65.3') { $details->model = 'Cisco Cat4kWsx4648Rj45ve'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.65.4') { $details->model = 'Cisco Cat4kWsx4606X2e'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.65.5') { $details->model = 'Cisco Cat4kWsx4624Sfpe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.65.7') { $details->model = 'Cisco Cat4kWsx4590E'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.65.9') { $details->model = 'Cisco Cat4kWsx4648Rj45je'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66') { $details->model = 'Cisco ModuleN7KType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.1') { $details->model = 'Cisco N7KSup1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.10') { $details->model = 'Cisco N7KM148GS11L'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.11') { $details->model = 'Cisco N7KM116XP22L'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.12') { $details->model = 'Cisco N7KM108XP22L'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.13') { $details->model = 'Cisco N7KM132XP12L'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.14') { $details->model = 'Cisco N7Kc7009Fab2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.16') { $details->model = 'Cisco N7Kc7010Fab2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.17') { $details->model = 'Cisco N7Kc7018Fab2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.18') { $details->model = 'Cisco N7KF248XP24'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.19') { $details->model = 'Cisco N7KF248XT24'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.2') { $details->model = 'Cisco N7KM148GT04'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.20') { $details->model = 'Cisco N7KSUP2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.21') { $details->model = 'Cisco N7KM202CF22L'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.22') { $details->model = 'Cisco N7KM206FQ23L'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.23') { $details->model = 'Cisco N7KM148GT11L'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.3') { $details->model = 'Cisco N7KM132XP08'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.31') { $details->model = 'Cisco N7KFabricExtenderConnectionCable'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.32') { $details->model = 'Cisco N7KM224XP23L'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.33') { $details->model = 'Cisco N7KSUP2E'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.34') { $details->model = 'Cisco N7KForwardingEngine'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.4') { $details->model = 'Cisco N7Kc7010Fab40'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.45') { $details->model = 'Cisco N7KF248XT25E'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.46') { $details->model = 'Cisco N7KF248XP25E'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.5') { $details->model = 'Cisco N7KM148GS11'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.6') { $details->model = 'Cisco N7Kc7018Fab1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.7') { $details->model = 'Cisco N7KF132Xp15'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.8') { $details->model = 'Cisco N7KM108X212'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.66.9') { $details->model = 'Cisco N7KM108X212L'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.67') { $details->model = 'Cisco ModuleASA5580Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.67.1') { $details->model = 'Cisco ModuleASA5580Pm4x1geCu'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.67.2') { $details->model = 'Cisco ModuleASA5580Pm4x1geFi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.67.3') { $details->model = 'Cisco ModuleASA5580Pm2x10geFi'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68') { $details->model = 'Cisco ModuleASR1000Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.1') { $details->model = 'Cisco ModuleASR1000RP1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.10') { $details->model = 'Cisco ModuleASR1002Spa4pGe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.11') { $details->model = 'Cisco ModuleASR1002SIP10'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.12') { $details->model = 'Cisco ModuleASR1000SIP40'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.13') { $details->model = 'Cisco ModuleASR1000RP2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.14') { $details->model = 'Cisco ModuleASR1000ESP10N'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.15') { $details->model = 'Cisco ModuleASR1002FESP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.16') { $details->model = 'Cisco ModuleASR1002FSIP10'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.17') { $details->model = 'Cisco ModuleASR1000ESP40'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.18') { $details->model = 'Cisco ModuleASR1001RP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.19') { $details->model = 'Cisco ModuleASR1001ESP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.2') { $details->model = 'Cisco ModuleASR1000ESP10'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.20') { $details->model = 'Cisco ModuleASR1001SIP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.21') { $details->model = 'Cisco ModuleASR1001Spa4pGe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.22') { $details->model = 'Cisco ModuleASR1001IDC2xOc3Pos'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.23') { $details->model = 'Cisco ModuleASR1001IDC4xT3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.24') { $details->model = 'Cisco ModuleASR1001IDC8xChT1E1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.25') { $details->model = 'Cisco ModuleASR1001IDC4xGe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.26') { $details->model = 'Cisco ModuleASR1001IDCHDD'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.3') { $details->model = 'Cisco ModuleASR1000SIP10'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.4') { $details->model = 'Cisco ModuleASR1000UnknownRP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.5') { $details->model = 'Cisco ModuleASR1000UnknownESP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.6') { $details->model = 'Cisco ModuleASR1000UnknownSIP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.7') { $details->model = 'Cisco ModuleASR1002RP1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.8') { $details->model = 'Cisco ModuleASR1000ESP5'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.68.9') { $details->model = 'Cisco ModuleASR1000ESP20'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.69') { $details->model = 'Cisco ModuleCatRfgwType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.69.1') { $details->model = 'Cisco RfgwDtcc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.69.2') { $details->model = 'Cisco RfgwQam48ABC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.69.3') { $details->model = 'Cisco RfgwPort4Qam'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.69.4') { $details->model = 'Cisco RfgwRfswitch'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7') { $details->model = 'Cisco ModuleC7xxxType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.1') { $details->model = 'Cisco C7xxxMc14a'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.10') { $details->model = 'Cisco Vip450'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.11') { $details->model = 'Cisco C7xxxIoEGE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.12') { $details->model = 'Cisco C7xxxIo2FE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.16') { $details->model = 'Cisco C7xxxEIP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.17') { $details->model = 'Cisco C7xxxFIP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.18') { $details->model = 'Cisco C7xxxSrsFIP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.19') { $details->model = 'Cisco C7xxxTRIP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.2') { $details->model = 'Cisco C7xxxMc16a'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.20') { $details->model = 'Cisco C7xxxSrsTRIP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.21') { $details->model = 'Cisco C7xxxFSIP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.22') { $details->model = 'Cisco C7xxxSSIP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.23') { $details->model = 'Cisco C7xxxMIP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.24') { $details->model = 'Cisco C7xxxSMIP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.25') { $details->model = 'Cisco C7xxxVIP2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.26') { $details->model = 'Cisco C7xxxVIP250'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.27') { $details->model = 'Cisco C7xxxRSP1'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.28') { $details->model = 'Cisco C7xxxRSP2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.29') { $details->model = 'Cisco C7xxxRSP4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.3') { $details->model = 'Cisco C7xxxMc11'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.30') { $details->model = 'Cisco C7xxxPosIP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.31') { $details->model = 'Cisco C7xxxFeIP2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.33') { $details->model = 'Cisco C73004Oc3PosMm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.34') { $details->model = 'Cisco C73004Oc3PosSmIr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.35') { $details->model = 'Cisco C73004Oc3PosSmLr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.36') { $details->model = 'Cisco C7300Oc48PosSmSr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.37') { $details->model = 'Cisco C7300Oc48PosSmIr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.38') { $details->model = 'Cisco C7300Oc48PosSmLr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.4') { $details->model = 'Cisco C7xxxMc12a'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.5') { $details->model = 'Cisco C7xxxMc11a'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.58') { $details->model = 'Cisco C7500AIP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.59') { $details->model = 'Cisco C7500CIP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.6') { $details->model = 'Cisco C7xxxIo1feTxIsl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.60') { $details->model = 'Cisco C7500CIP2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.61') { $details->model = 'Cisco C7500GEIP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.62') { $details->model = 'Cisco C7500FEIP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.63') { $details->model = 'Cisco C7xxxSIP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.64') { $details->model = 'Cisco C7xxxRSP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.65') { $details->model = 'Cisco C7xxxHSSI'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.66') { $details->model = 'Cisco C7411'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.67') { $details->model = 'Cisco C7411IoGE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.68') { $details->model = 'Cisco C7301'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.69') { $details->model = 'Cisco C7301IoGE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.70') { $details->model = 'Cisco Vip680'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.76') { $details->model = 'Cisco C7300CCPA'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.77') { $details->model = 'Cisco C7304MSC100'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.78') { $details->model = 'Cisco C73006E3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.79') { $details->model = 'Cisco C73001Oc12Atm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.8') { $details->model = 'Cisco C7xxxMc28'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.81') { $details->model = 'Cisco C7200Vsa'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.7.9') { $details->model = 'Cisco Vip480'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.70') { $details->model = 'Cisco ModuleVgdType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.70.1') { $details->model = 'Cisco VgdDfcCT3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.70.2') { $details->model = 'Cisco VgdDfcVFC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.70.3') { $details->model = 'Cisco VgdDfcCarrier'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.71') { $details->model = 'Cisco ModuleIEType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.71.1') { $details->model = 'Cisco ModuleIE30004TC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.71.13') { $details->model = 'Cisco ModuleRAIE1783RMS06T'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.71.14') { $details->model = 'Cisco ModuleRAIE1783RMS10T'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.71.2') { $details->model = 'Cisco ModuleIE30008TC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.71.3') { $details->model = 'Cisco ModuleIE30008TM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.71.4') { $details->model = 'Cisco ModuleIE30008FM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.71.43') { $details->model = 'Cisco ModuleIE30004SM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.71.44') { $details->model = 'Cisco ModuleIE30008SM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.71.45') { $details->model = 'Cisco ModuleRAIE1783MX04S'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.71.46') { $details->model = 'Cisco ModuleRAIE1783MX08S'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.71.47') { $details->model = 'Cisco ModuleIE200016TCGP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.71.48') { $details->model = 'Cisco ModuleIE200016TCGEP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.71.49') { $details->model = 'Cisco ModuleIE200016TCGNXP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.71.5') { $details->model = 'Cisco ModuleRAIE1783MS06T'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.71.6') { $details->model = 'Cisco ModuleRAIE1783MS10T'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.71.7') { $details->model = 'Cisco ModuleRAIE1783MX08T'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.71.8') { $details->model = 'Cisco ModuleRAIE1783MX08F'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.71.9') { $details->model = 'Cisco ModuleIE301016S8PC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.72') { $details->model = 'Cisco ModuleN5KType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.72.1') { $details->model = 'Cisco N5kM1008'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.72.10') { $details->model = 'Cisco N5kC5548pFixedModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.72.11') { $details->model = 'Cisco N5KN55M16P'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.72.12') { $details->model = 'Cisco N5KN55M8P8FP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.72.13') { $details->model = 'Cisco N5KN55M16UP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.72.14') { $details->model = 'Cisco N5KN55DL2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.72.15') { $details->model = 'Cisco N5KN55D160L3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.72.16') { $details->model = 'Cisco N5KN55M160L3'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.72.17') { $details->model = 'Cisco N5KC5596UpFixedModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.72.18') { $details->model = 'Cisco N5KN55M16FP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.72.19') { $details->model = 'Cisco N5kC5548UPFixedModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.72.2') { $details->model = 'Cisco N5KM1404'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.72.20') { $details->model = 'Cisco N5KN55M160L3V2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.72.21') { $details->model = 'Cisco N5KN55D160L3V2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.72.3') { $details->model = 'Cisco N5kM1Blnk'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.72.4') { $details->model = 'Cisco N5KM1600'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.72.5') { $details->model = 'Cisco N5kC5020FixedModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.72.6') { $details->model = 'Cisco N5kC5010FixedModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.72.7') { $details->model = 'Cisco N5kFabricExtenderConnection'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.73') { $details->model = 'Cisco ModuleASA5505Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.73.1') { $details->model = 'Cisco MASA5505IsmSscIps5K9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74') { $details->model = 'Cisco ModuleASR9KType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.1') { $details->model = 'Cisco ModuleA9K8x10GEB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.2') { $details->model = 'Cisco ModuleA9K8x10GEE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.24') { $details->model = 'Cisco ModuleA9KServiceAcceleratorModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.25') { $details->model = 'Cisco ModuleA9KRsp440Se'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.26') { $details->model = 'Cisco ModuleA9KRsp440Tr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.27') { $details->model = 'Cisco ModuleA9K1X100GeSe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.28') { $details->model = 'Cisco ModuleA9K1X100GeTr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.29') { $details->model = 'Cisco ModuleA9K36X10GeSe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.3') { $details->model = 'Cisco ModuleA9K4x10GEB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.30') { $details->model = 'Cisco ModuleA9K36X10GeTr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.31') { $details->model = 'Cisco ModuleA9K2X100GeSe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.32') { $details->model = 'Cisco ModuleA9K2X100GeTr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.33') { $details->model = 'Cisco ModuleA9K24X10GeSe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.34') { $details->model = 'Cisco ModuleA9K24X10GeTr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.35') { $details->model = 'Cisco ModuleA9KMOD80SE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.36') { $details->model = 'Cisco ModuleA9KMOD80TR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.37') { $details->model = 'Cisco ModuleA9KMOD160SE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.38') { $details->model = 'Cisco ModuleA9KMOD160TR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.39') { $details->model = 'Cisco ModuleA9K9922RpSe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.4') { $details->model = 'Cisco ModuleA9K4x10GEE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.40') { $details->model = 'Cisco ModuleA9K9922RpTr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.41') { $details->model = 'Cisco ModuleA9K9922Sfc110'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.42') { $details->model = 'Cisco ModuleA9KVGenericLc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.43') { $details->model = 'Cisco ModuleA9K9912SFC110'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.44') { $details->model = 'Cisco ModuleA9K9912RpTr'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.45') { $details->model = 'Cisco ModuleA9K9912RpSe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.46') { $details->model = 'Cisco ModuleA9KMODULEv'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.47') { $details->model = 'Cisco ModuleA9K9001Lc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.48') { $details->model = 'Cisco ModuleA9K9001Rp'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.49') { $details->model = 'Cisco ModuleA9KSip7008G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.5') { $details->model = 'Cisco ModuleA9K40x1GEB'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.6') { $details->model = 'Cisco ModuleA9K40x1GEE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.7') { $details->model = 'Cisco ModuleA9KRSP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.8') { $details->model = 'Cisco ModuleA9KRSP4G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.74.9') { $details->model = 'Cisco ModuleASR9KHost'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.75') { $details->model = 'Cisco ModuleASR14KType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.75.1') { $details->model = 'Cisco ModuleASR14K20x1GeFl'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.75.2') { $details->model = 'Cisco ModuleASR14K42x1GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.75.3') { $details->model = 'Cisco ModuleASR14K4x10GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.75.4') { $details->model = 'Cisco ModuleASR14K4FabricCard'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.75.5') { $details->model = 'Cisco ModuleASR14K8FabricCard'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.75.6') { $details->model = 'Cisco ModuleASR14KRP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.75.7') { $details->model = 'Cisco ModuleASR14KFP40'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.75.8') { $details->model = 'Cisco ModuleASR14KFPE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.75.9') { $details->model = 'Cisco ModuleASR14K2x10WLFL'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76') { $details->model = 'Cisco ModuleSFPPlusS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.1') { $details->model = 'Cisco SFP10GLR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.10') { $details->model = 'Cisco SFP10GCU3M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.11') { $details->model = 'Cisco SFP10GCU5M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.12') { $details->model = 'Cisco SFP10GACU7M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.13') { $details->model = 'Cisco SFPH10GbAcu10m'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.14') { $details->model = 'Cisco SFPOe8541'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.15') { $details->model = 'Cisco SFPOe7571'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.16') { $details->model = 'Cisco SFPOe7541'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.17') { $details->model = 'Cisco SFPOe694'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.18') { $details->model = 'Cisco SFPOe594'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.19') { $details->model = 'Cisco SFPOe294'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.2') { $details->model = 'Cisco SFP10GLRM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.20') { $details->model = 'Cisco SFPDwdmSfp10g3190'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.21') { $details->model = 'Cisco SFPDwdmSfp10g3112'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.22') { $details->model = 'Cisco SFPDwdmSfp10g3033'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.23') { $details->model = 'Cisco SFPDwdmSfp10g3582'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.24') { $details->model = 'Cisco SFPDwdmSfp10g3504'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.25') { $details->model = 'Cisco SFPDwdmSfp10g3425'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.26') { $details->model = 'Cisco SFPDwdmSfp10g3347'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.27') { $details->model = 'Cisco SFPDwdmSfp10g3268'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.28') { $details->model = 'Cisco SFPDwdmSfp10g3977'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.29') { $details->model = 'Cisco SFPDwdmSfp10g3898'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.3') { $details->model = 'Cisco SFP10GSR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.30') { $details->model = 'Cisco SFPDwdmSfp10g3819'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.31') { $details->model = 'Cisco SFPDwdmSfp10g3740'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.32') { $details->model = 'Cisco SFPDwdmSfp10g3661'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.33') { $details->model = 'Cisco SFPDwdmSfp10g4373'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.34') { $details->model = 'Cisco SFPDwdmSfp10g4294'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.35') { $details->model = 'Cisco SFPDwdmSfp10g4214'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.36') { $details->model = 'Cisco SFPDwdmSfp10g4135'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.37') { $details->model = 'Cisco SFPDwdmSfp10g4056'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.38') { $details->model = 'Cisco SFPDwdmSfp10g4772'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.39') { $details->model = 'Cisco SFPDwdmSfp10g4692'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.4') { $details->model = 'Cisco SFP10GUSR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.40') { $details->model = 'Cisco SFPDwdmSfp10g4612'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.41') { $details->model = 'Cisco SFPDwdmSfp10g4532'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.42') { $details->model = 'Cisco SFPDwdmSfp10g5172'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.43') { $details->model = 'Cisco SFPDwdmSfp10g5092'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.44') { $details->model = 'Cisco SFPDwdmSfp10g5012'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.45') { $details->model = 'Cisco SFPDwdmSfp10g4932'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.46') { $details->model = 'Cisco SFPDwdmSfp10g4851'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.47') { $details->model = 'Cisco SFPDwdmSfp10g5575'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.48') { $details->model = 'Cisco SFPDwdmSfp10g5494'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.49') { $details->model = 'Cisco SFPDwdmSfp10g5413'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.5') { $details->model = 'Cisco SFP10GER'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.50') { $details->model = 'Cisco SFPDwdmSfp10g5333'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.51') { $details->model = 'Cisco SFPDwdmSfp10g5252'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.52') { $details->model = 'Cisco SFPDwdmSfp10g5979'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.53') { $details->model = 'Cisco SFPDwdmSfp10g5898'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.54') { $details->model = 'Cisco SFPDwdmSfp10g5817'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.55') { $details->model = 'Cisco SFPDwdmSfp10g5736'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.56') { $details->model = 'Cisco SFPDwdmSfp10g5655'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.57') { $details->model = 'Cisco SFPDwdmSfp10g6061'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.58') { $details->model = 'Cisco SFPDwdmSfp10g6141'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.59') { $details->model = 'Cisco SFPDwdmSfp10g4453'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.60') { $details->model = 'Cisco SFPFET10G'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.7') { $details->model = 'Cisco SFP10GLRMSM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.8') { $details->model = 'Cisco SFP10GZR'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.76.9') { $details->model = 'Cisco SFP10GCU1M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.77') { $details->model = 'Cisco DirectAttachCable10Gs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.77.1') { $details->model = 'Cisco SFPH10GBCU1M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.77.10') { $details->model = 'Cisco SFPH10GBACU3M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.77.11') { $details->model = 'Cisco SFPH10GBACU5M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.77.12') { $details->model = 'Cisco SFPH10GBACU15M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.77.13') { $details->model = 'Cisco SFPH10GBACU10M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.77.14') { $details->model = 'Cisco SFPH10GBACU7M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.77.2') { $details->model = 'Cisco SFPH10GBCU5M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.77.3') { $details->model = 'Cisco SFPH10GBCU3M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.77.4') { $details->model = 'Cisco SFPH10GBCU7M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.77.9') { $details->model = 'Cisco SFPH10GBACU1M'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.78') { $details->model = 'Cisco ModuleN2KType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.78.1') { $details->model = 'Cisco N2kC2148T1GEFixedModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.78.10') { $details->model = 'Cisco N2kM2800P'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.78.11') { $details->model = 'Cisco N2kC2232TM10GEFixedModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.78.13') { $details->model = 'Cisco N2kC2248PQ10GEFixedModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.78.14') { $details->model = 'Cisco N2kB22DELLPFixedModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.78.15') { $details->model = 'Cisco N2kB22FTSPFixedModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.78.4') { $details->model = 'Cisco N2kC2224TP1GEFixedModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.78.5') { $details->model = 'Cisco N2kC2232TT10GEFixedModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.78.6') { $details->model = 'Cisco N2kC2232TP10GEFixedModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.78.7') { $details->model = 'Cisco N2kC2248TT1GEFixedModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.78.9') { $details->model = 'Cisco N2kB22HPPFixedModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.79') { $details->model = 'Cisco ModuleN1KVType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.79.1') { $details->model = 'Cisco N1KVVSM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.79.2') { $details->model = 'Cisco N1KVVEM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.8') { $details->model = 'Cisco ModuleC4xxxType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.8.1') { $details->model = 'Cisco C4xxxUnknown'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.8.2') { $details->model = 'Cisco C4xxxNp4Gb'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.8.3') { $details->model = 'Cisco C4wsx4548GbRj45VPlus'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.8.4') { $details->model = 'Cisco Cat4kWsx4948e10GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.8.5') { $details->model = 'Cisco Cat4kWsx45Sup7LE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.80') { $details->model = 'Cisco ModuleUCSType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.80.1') { $details->model = 'Cisco UCSN10S6100FixedModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.80.10') { $details->model = 'Cisco UCSFIDL2'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.80.2') { $details->model = 'Cisco UCSN10E0080'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.80.3') { $details->model = 'Cisco UCSN10E0440'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.80.4') { $details->model = 'Cisco UCSN10E0600'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.80.7') { $details->model = 'Cisco UCSFIE16UP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.80.8') { $details->model = 'Cisco UCSFI6248UPFixedModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.80.9') { $details->model = 'Cisco UCSFI6296UPFixedModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.81') { $details->model = 'Cisco ModuleNexus1010Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.81.1') { $details->model = 'Cisco Nexus1010VSM'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.81.2') { $details->model = 'Cisco NexusN1KVSANam'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.82') { $details->model = 'Cisco ModuleMxeType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.82.1') { $details->model = 'Cisco MxeNpm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.82.2') { $details->model = 'Cisco MxeMpm'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.82.3') { $details->model = 'Cisco Mxe5600ShelfManager'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.83') { $details->model = 'Cisco ModuleASA5585Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.83.1') { $details->model = 'Cisco ASA5585Ssp10'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.83.10') { $details->model = 'Cisco MASA5585Ssp20K7'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.83.11') { $details->model = 'Cisco MASA5585Ssp40K7'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.83.12') { $details->model = 'Cisco MASA5585Ssp60K7'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.83.13') { $details->model = 'Cisco MASA5585IsmSspIps10K7'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.83.14') { $details->model = 'Cisco MASA5585IsmSspIps20K7'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.83.15') { $details->model = 'Cisco MASA5585IsmSspIps40K7'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.83.16') { $details->model = 'Cisco MASA5585IsmSspIps60K7'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.83.17') { $details->model = 'Cisco MASA5585Nm8x10GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.83.18') { $details->model = 'Cisco MASA5585Nm4x10GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.83.19') { $details->model = 'Cisco MASA5585Nm20x1GE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.83.2') { $details->model = 'Cisco ASA5585Ssp20'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.83.3') { $details->model = 'Cisco ASA5585Ssp40'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.83.4') { $details->model = 'Cisco ASA5585Ssp60'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.83.5') { $details->model = 'Cisco ASA5585IsmSspIps10'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.83.6') { $details->model = 'Cisco ASA5585IsmSspIps20'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.83.7') { $details->model = 'Cisco ASA5585IsmSspIps40'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.83.8') { $details->model = 'Cisco ASA5585IsmSspIps60'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.83.9') { $details->model = 'Cisco MASA5585Ssp10K7'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.84') { $details->model = 'Cisco ModuleCFPs'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.84.1') { $details->model = 'Cisco CFP100GLR4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.84.2') { $details->model = 'Cisco CFP40GLR4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.84.3') { $details->model = 'Cisco CFP40GSR4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.84.5') { $details->model = 'Cisco CFP100GSR10'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.85') { $details->model = 'Cisco ModuleN3KType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.85.1') { $details->model = 'Cisco N3kC3064PQfixedModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.85.2') { $details->model = 'Cisco N3kC3064PQ10GEFixedModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.85.3') { $details->model = 'Cisco N3kC3048TP1GEFixedModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.85.4') { $details->model = 'Cisco N3kC3016Q40GEFixedModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.85.5') { $details->model = 'Cisco N3kC3064Pq10GXFixedModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.85.7') { $details->model = 'Cisco N3kC3064TQ10GTFixedModule'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.86') { $details->model = 'Cisco ModuleCGSType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.86.1') { $details->model = 'Cisco ModuleCGS252016S8PC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.86.2') { $details->model = 'Cisco ModuleCGS252024TC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.87') { $details->model = 'Cisco ModuleASR900Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.87.1') { $details->model = 'Cisco ModuleASR903RSP1A'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.87.2') { $details->model = 'Cisco ModuleASR900ESP'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.87.3') { $details->model = 'Cisco ModuleASR903RSP1B'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88') { $details->model = 'Cisco ModuleASR5000Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.1') { $details->model = 'Cisco ModuleASR5K01100eK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.10') { $details->model = 'Cisco ModuleASR5K01OC3MmK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.11') { $details->model = 'Cisco ModuleASR5K01OC3SmK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.12') { $details->model = 'Cisco ModuleASR5K041GeLxK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.13') { $details->model = 'Cisco ModuleASR5K041GeSxK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.14') { $details->model = 'Cisco ModuleASR5K041GeTK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.15') { $details->model = 'Cisco ModuleASR5K042GeLxK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.16') { $details->model = 'Cisco ModuleASR5K042GeSxK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.17') { $details->model = 'Cisco ModuleASR5K042GeTK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.18') { $details->model = 'Cisco ModuleASR5K08100eK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.19') { $details->model = 'Cisco ModuleASR5K4OC3CMmK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.2') { $details->model = 'Cisco ModuleASR5K0110gMmK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.20') { $details->model = 'Cisco ModuleASR5K4OC3CSmK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.21') { $details->model = 'Cisco ModuleASR5KC1OC3MnK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.22') { $details->model = 'Cisco ModuleASR5KC1OC3SmK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.23') { $details->model = 'Cisco ModuleASR5KC4OC3MmK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.24') { $details->model = 'Cisco ModuleASR5KC4OC3SmK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.25') { $details->model = 'Cisco ModuleASR5KppcK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.26') { $details->model = 'Cisco ModuleASR5Kpsc16gK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.27') { $details->model = 'Cisco ModuleASR5Kpsc32gK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.28') { $details->model = 'Cisco ModuleASR5Kpsc64gK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.29') { $details->model = 'Cisco ModuleASR5KpscK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.3') { $details->model = 'Cisco ModuleASR5K0110gSmK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.30') { $details->model = 'Cisco ModuleASR5KsmcK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.31') { $details->model = 'Cisco ModuleASR5KSps3BncK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.32') { $details->model = 'Cisco ModuleASR5KSps33pnK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.33') { $details->model = 'Cisco ModuleASR5KSpioBncK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.34') { $details->model = 'Cisco ModuleASR5KSpio3pnK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.35') { $details->model = 'Cisco ModuleASR5KRccK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.4') { $details->model = 'Cisco ModuleASR5K011G2LxK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.5') { $details->model = 'Cisco ModuleASR5K011G2SxK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.6') { $details->model = 'Cisco ModuleASR5K011G2TK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.7') { $details->model = 'Cisco ModuleASR5K011GELxK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.8') { $details->model = 'Cisco ModuleASR5K011GESxK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.88.9') { $details->model = 'Cisco ModuleASR5K011GETK9'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.89') { $details->model = 'Cisco ModuleASR5500Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.89.1') { $details->model = 'Cisco ModuleASR55DPC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.89.2') { $details->model = 'Cisco ModuleASR55FSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.89.3') { $details->model = 'Cisco ModuleASR55MIO10GL10'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.89.4') { $details->model = 'Cisco ModuleASR55MIO10GL20'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.89.5') { $details->model = 'Cisco ModuleASR55MIO10GS10'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.89.6') { $details->model = 'Cisco ModuleASR55MIO10GS20'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.89.7') { $details->model = 'Cisco ModuleASR55MIOBASE'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.89.8') { $details->model = 'Cisco ModuleASR55SSC'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.9') { $details->model = 'Cisco ModuleAS5200Type'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.9.1') { $details->model = 'Cisco AS5200Carrier'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.9.2') { $details->model = 'Cisco AS5200DtdCarrier'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.9.3') { $details->model = 'Cisco PmAS5xxx12m56k'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.9.4') { $details->model = 'Cisco PmAS5xxx12mV110'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.90') { $details->model = 'Cisco ModuleCSR1000vType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.91') { $details->model = 'Cisco ModuleCgrType'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.91.18') { $details->model = 'Cisco ModuleCGMPlc'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.91.19') { $details->model = 'Cisco ModuleCGMGe'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.93') { $details->model = 'Cisco ModuleQSFPPlusS'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.93.1') { $details->model = 'Cisco QSFP40GLR4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.93.2') { $details->model = 'Cisco QSFP40GSR4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.93.3') { $details->model = 'Cisco QSFP40GSMSR4'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.93.4') { $details->model = 'Cisco QSFP40GCR4Active'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.93.5') { $details->model = 'Cisco QSFP40GCR4Passive'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.9.95') { $details->model = 'Cisco ModuleN6KType'; $details->type = 'cisco module'; }

	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.11.2') { $details->model = 'Cisco Stack Cat 37xx'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.11.3') { $details->model = 'Cisco Stack Cat 65xx Virtual Switch'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.11.12') { $details->model = 'Cisco Stack Ios XrMultichassis'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.12') { $details->model = 'Cisco Midplane'; $details->type = 'cisco module'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.9.12.3.1.12.1') { $details->model = 'Cisco Midplane UMG 9820'; $details->type = 'cisco module'; }

	if (isset($details->snmp_version) and $details->snmp_version == '2' ) {
		# grab some Cisco specific details
		$details->os_version = '';
		$i = explode("$", @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.9.9.25.1.1.1.2.5" ));
		if (isset($i[1]) and $i[1] > '') { $details->os_version = trim($i[1]); }
		$i = @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.9.9.25.1.1.1.2.7" );
		if (stripos($i, "IOS") !== FALSE) {
			$details->os_group = 'Cisco';
			$details->man_os_group = 'Cisco';
			$details->os_family = 'Cisco IOS';
			$details->man_os_family = 'Cisco IOS';
			$details->os_name = "Cisco IOS version " . $details->os_version;
			$details->man_os_name = "Cisco IOS version " . $details->os_version;
		}
		if (stripos($details->description, "Cisco IOS Software") !== FALSE) {
			$details->os_group = 'Cisco';
			$details->man_os_group = 'Cisco';
			$details->os_family = 'Cisco IOS';
			$details->man_os_family = 'Cisco IOS';
			$details->os_name = "Cisco IOS version " . $details->os_version;
			$details->man_os_name = "Cisco IOS version " . $details->os_version;
		}
		if (stripos($details->description, "Cisco Internetwork Operating System Software") !== FALSE) {
			$details->os_group = 'Cisco';
			$details->man_os_group = 'Cisco';
			$details->os_family = 'Cisco IOS';
			$details->man_os_family = 'Cisco IOS';
			$details->os_name = "Cisco IOS version " . $details->os_version;
			$details->man_os_name = "Cisco IOS version " . $details->os_version;
		}
		if (stripos($i, "Catalyst Operating") !== FALSE) {
			$details->os_group = 'Cisco';
			$details->man_os_group = 'Cisco';
			$details->os_family = 'Cisco Catalyst OS';
			$details->man_os_family = 'Cisco Catalyst OS';
			$details->os_name = "Cisco Catalyst OS version " . $details->os_version;
			$details->man_os_name = "Cisco Catalyst OS version " . $details->os_version;
		}
		if (stripos($details->description, "Cisco Systems WS-C") !== FALSE) {
			$details->os_group = 'Cisco';
			$details->man_os_group = 'Cisco';
			$details->os_family = 'Cisco Catalyst OS';
			$details->man_os_family = 'Cisco Catalyst OS';
			$details->os_name = "Cisco Catalyst OS version " . $details->os_version;
			$details->man_os_name = "Cisco Catalyst OS version " . $details->os_version;
		}
		if (stripos($details->description, "Cisco Systems, Inc. WS-C") !== FALSE) {
			$details->os_group = 'Cisco';
			$details->man_os_group = 'Cisco';
			$details->os_family = 'Cisco Catalyst OS';
			$details->man_os_family = 'Cisco Catalyst OS';
			$details->os_name = "Cisco Catalyst OS version " . $details->os_version;
			$details->man_os_name = "Cisco Catalyst OS version " . $details->os_version;
		}
		if (!isset($details->os_group) or $details->os_group == '') {
			if (stripos($details->description, 'NX-OS')) {
				$details->os_group = 'Cisco';
				$details->man_os_group = 'Cisco';
				$details->os_family = 'Cisco Nexus OS';
				$details->man_os_family = 'Cisco Nexus OS';
				$details->os_name = "Cisco Nexus OS version " . $details->os_version;
				$details->man_os_name = "Cisco Nexus OS version " . $details->os_version;
			}
		}

		# Cisco specific model OID
		if ($details->model == '') {
			$details->model = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.47.1.1.1.1.13.1"));
		}

		# catch all for catalyst == switch
		if (stripos($details->model, 'catalyst') !== FALSE OR stripos($details->os_family, 'cataylst') !== FALSE) {
		   $details->type = 'switch';
		   $details->man_type = 'switch';
		}

		# Generic Cisco serial
		if ($details->serial == '') {
			$details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.47.1.1.1.1.11.1"));
		}

		# Generic Cisco serial
		if ($details->serial == '') {
			$details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.47.1.1.1.1.11.1.0"));
		}

		# Cisco 37xx stack serial
		if ($details->serial == '') {
			$details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.9.5.1.2.19.0"));
		}

		if ($details->serial == '') {
			$i_array = @snmp2_walk($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.47.1.1.1.1.11");
			$details->serial = snmp_clean($i_array[0]);
		}
	}
};



/*
// installed modules with serial numbers
$i = @snmp2_walk($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.47.1.1.1.1.11");
if (count($i) > 0) {
	if (($i[0] == 'No more variables left in this MIB View (It is past the end of the MIB tree)') or ($i[0] == '')){unset($i); $i = array();}
	if (count($i) > 0) {
		$count = 0;
		for ($j=0; $j<count($i); $j++) {
			if ((mb_strpos($i[$j], $details->serial) === FALSE) and ($i[$j] != "") and ($i[$j] != "\"\"")){
				$k = $j + 1;
				$k = "1.3.6.1.2.1.47.1.1.1.1.3." . $k;
				$oid = snmp2_get($details->man_ip_address, $details->snmp_community, $k);
				$oid = str_replace("OID: .", "", $oid);
				$module->$count = get_oid($oid);
				$module->$count->serial = str_replace("STRING: ", "", $i[$j]);
				$module->$count->serial = str_replace('"', '', $module->$count->serial);
				$count++;
			}
		}
		$details->modules = $module;
	}
}
*/
