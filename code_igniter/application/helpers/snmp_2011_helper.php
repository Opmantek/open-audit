<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
#
#  Copyright 2003-2014 Opmantek Limited (www.opmantek.com)
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
 * @version 1.2
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

# Vendor Huawei
if (!function_exists('get_oid_details')) {

	function get_oid_details($details){
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.6.5.21') { $details->model = 'MA5105(BSL)'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.6.5.22') { $details->model = 'MA5100V2'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.22.6') { $details->model = 'ESRV5R3'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.6.4') { $details->model = 'MD5500V1'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.37') { $details->model = 'UA5000'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.72') { $details->model = 'UA5000'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.22.7') { $details->model = 'ESR8850V5R5'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.22.8') { $details->model = 'ESR8850V5R5'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.6.5') { $details->model = 'MA5100V1'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.6.6.1') { $details->model = 'MA5300'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.22.5') { $details->model = 'ISN8850V5R2'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.22.3') { $details->model = 'ISN8850V5R2'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.22.2') { $details->model = 'ISN8850V5R2'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.1.2.1') { $details->model = 'Radium8750'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.27.10') { $details->model = 'UA5000(PVMV1)'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.76') { $details->model = 'UA5000(PVU)'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.80') { $details->model = 'MA5600V3'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.80.8') { $details->model = 'MA5600T(SCU)'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.78') { $details->model = 'UA5000(IPMB)'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.80.1') { $details->model = 'MA5605'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.115') { $details->model = 'MA5680T'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.133') { $details->model = 'MA5683T'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.195') { $details->model = 'MA5662'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.205.1') { $details->model = 'SRG3230'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.205.3') { $details->model = 'SRG3240'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.205.4') { $details->model = 'SRG3240-D'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.205.5') { $details->model = 'SRG3250'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.205.6') { $details->model = 'SRG3260'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.109') { $details->model = 'MA5606T'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2') { $details->model = 'MDU'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.118') { $details->model = 'MA5615'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.132') { $details->model = 'MA5626E'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.128') { $details->model = 'MA5620E'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.137') { $details->model = 'MA5651'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.134') { $details->model = 'MA5620G'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.135') { $details->model = 'MA5626G'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.136') { $details->model = 'MA5651G'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.167') { $details->model = 'MA5610'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.169') { $details->model = 'MA5616'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.172') { $details->model = 'MA5603U'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.168') { $details->model = 'MA5652G'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.123') { $details->model = 'MA5603T'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.185') { $details->model = 'MA5620'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.186') { $details->model = 'MA5626'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.191') { $details->model = 'ATN930'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.190') { $details->model = 'MA5635'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.188') { $details->model = 'MA5632'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.184') { $details->model = 'MA5612'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.193.5') { $details->model = 'SRG2220'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.193.6') { $details->model = 'SRG2220-D'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.193.7') { $details->model = 'SRG2210'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.75.3') { $details->model = 'BITS'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.75.5') { $details->model = 'BITS'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.75.6') { $details->model = 'BITS'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.206') { $details->model = 'WS6603'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.213') { $details->model = 'MA5628'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.221') { $details->model = 'MA5652'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.219') { $details->model = 'MA5631'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.228') { $details->model = 'MA5632'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.225') { $details->model = 'MA5621'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.230') { $details->model = 'MA5612A'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.232') { $details->model = 'MA5669'; $details->type = 'unknown'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.233') { $details->model = 'MA5621A'; $details->type = 'unknown'; }

		if ($details->snmp_verion == '2') {
			$details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.47.1.1.1.1.11" ));
		}
	}
}
