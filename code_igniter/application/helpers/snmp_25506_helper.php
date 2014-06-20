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
 * @version 1.3.2
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

# Vendor Hewlett Packard

$get_oid_details = function($details){

	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.1') { $details->model = '7502'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.2') { $details->model = '7503S'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.3') { $details->model = '7503'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.4') { $details->model = '7506'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.5') { $details->model = '7506V'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.6') { $details->model = '7510'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.7') { $details->model = 'A36002POLT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.8') { $details->model = 'V190524'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.9') { $details->model = 'V190524POE'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.10') { $details->model = 'V190548'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.11') { $details->model = 'A512016GSI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.12') { $details->model = 'A512024GSI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.13') { $details->model = 'A512048GSI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.14') { $details->model = 'A512024GPPOESI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.15') { $details->model = 'A512024GPOESI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.16') { $details->model = 'A580024G'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.17') { $details->model = 'A580024GPoEPlus'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.18') { $details->model = 'A580048G'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.19') { $details->model = 'A580048GPoEPlus'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.20') { $details->model = 'A580024GSFP'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.21') { $details->model = 'A580048GPoEPlus2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.22') { $details->model = 'A5820X14XGSFPPlus2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.23') { $details->model = 'A5820X24XGSFPPlus'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.24') { $details->model = 'A550024GEI2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.25') { $details->model = 'A550048GEI2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.26') { $details->model = 'A550024GPoEPlusEI2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.27') { $details->model = 'A550048GPoEPlusEI2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.28') { $details->model = 'A550024GSFPEI2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.29') { $details->model = 'A550024GSI2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.30') { $details->model = 'A550048GSI2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.31') { $details->model = 'A550024GPoEPlusSI2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.32') { $details->model = 'A550048GPoEPlusSI2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.33') { $details->model = 'A512024GEI2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.34') { $details->model = 'A512048GEI2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.35') { $details->model = 'A512024GPoEPlusEI2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.36') { $details->model = 'A512048GPoEPlusEI2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.37') { $details->model = 'A512024GEI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.38') { $details->model = 'A512048GEI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.39') { $details->model = '9505'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.40') { $details->model = '9508V'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.41') { $details->model = '9508'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.42') { $details->model = '9512'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.43') { $details->model = '12508'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.44') { $details->model = '12518'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.45') { $details->model = '12504AC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.46') { $details->model = 'A5800AF48G'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.47') { $details->model = 'A5820AF24XG'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.51') { $details->model = '6125GXG'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.52') { $details->model = 'A31008SI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.53') { $details->model = 'A310016SI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.54') { $details->model = 'A310024SI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.55') { $details->model = 'A31008EI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.56') { $details->model = 'A310016EI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.57') { $details->model = 'A310024EI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.58') { $details->model = 'A31008POEEI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.59') { $details->model = 'A310016POEEI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.60') { $details->model = 'A310024POEEI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.61') { $details->model = 'A580024GTAA'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.62') { $details->model = 'A580024GPoEPlusTAA'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.63') { $details->model = 'A580024GSFPTAA'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.64') { $details->model = 'A580048GTAA'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.65') { $details->model = 'A580048GPoEPlusTAA2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.66') { $details->model = 'A580048GPoEPlusTAA'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.67') { $details->model = 'A5820X14XGSFPPlusTAA2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.68') { $details->model = 'A5820X24XGSFPPlusTAA'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.69') { $details->model = 'A512024GEITAA2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.70') { $details->model = 'A512048GEITAA2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.71') { $details->model = 'A512024GPoEPlusEITAA2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.72') { $details->model = 'A512048GPoEPlusEITAA2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.73') { $details->model = 'A550024GSFPEITAA2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.74') { $details->model = 'A550024GEITAA2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.75') { $details->model = 'A550048GEITAA2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.76') { $details->model = 'A550024GPoEPlusEITAA2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.77') { $details->model = 'A550048GPoEPlusEITAA2SLOT'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.78') { $details->model = '5920AF24XG'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.79') { $details->model = 'A5830AF48G'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.80') { $details->model = 'A5830AF96G'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.81') { $details->model = 'V191016G'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.82') { $details->model = 'V191024G'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.83') { $details->model = 'V191024GPoE365W'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.84') { $details->model = 'V191024GPoE170W'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.85') { $details->model = 'V191048G'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.86') { $details->model = '10504'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.87') { $details->model = '10508'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.88') { $details->model = '10508V'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.89') { $details->model = '10512'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.90') { $details->model = 'A360024V2EI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.91') { $details->model = 'A360048V2EI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.92') { $details->model = 'A360024PoEPlusV2EI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.93') { $details->model = 'A360048PoEPlusV2EI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.94') { $details->model = 'A360024SFPV2EI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.95') { $details->model = 'A360024V2SI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.96') { $details->model = 'A360048V2SI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.97') { $details->model = 'A360024PoEPlusV2SI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.98') { $details->model = 'A360048PoEPlusV2SI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.99') { $details->model = 'A310048V2'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.100') { $details->model = '5900AF48XG4QSFPPlus'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.101') { $details->model = 'A550024G4SFPHI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.102') { $details->model = 'A550048G4SFPHI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.103') { $details->model = '6125G'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.104') { $details->model = 'A51208GSI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.105') { $details->model = 'A51208GPoEPlusSI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.106') { $details->model = 'A51208GPPoEPlusSI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.107') { $details->model = 'A5120AF48GHI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.108') { $details->model = '12504DC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.109') { $details->model = '12508DC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.110') { $details->model = '12518DC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.111') { $details->model = '12508AC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.112') { $details->model = '12518AC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.113') { $details->model = '5900AF48XGT4QSFPPlus'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.114') { $details->model = '19108G'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.115') { $details->model = '19108GPoEPlus65W'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.116') { $details->model = '19108GPoEPlus180W'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.117') { $details->model = '5830AF48GTAA'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.118') { $details->model = '5830AF96GTAA'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.119') { $details->model = '7508H'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.120') { $details->model = '5900AF48G4XG2QSFPPlus'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.121') { $details->model = '550048GPoEPlus4SFPHI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.122') { $details->model = '550024GPoEPlus4SFPHI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.123') { $details->model = '550024GSFPHI'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.124') { $details->model = '12504ACV7'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.125') { $details->model = '12504DCV7'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.126') { $details->model = '12508ACV7'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.127') { $details->model = '12508DCV7'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.128') { $details->model = '12518ACV7'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.129') { $details->model = '12518DCV7'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.130') { $details->model = '5900AF48XG4QSFPPlusTAA'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.131') { $details->model = '5920AF24XGTAA'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.132') { $details->model = 'V19108'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.133') { $details->model = 'V19108PoEPlus'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.134') { $details->model = 'V191024'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.135') { $details->model = 'V191024PoEPlus'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.136') { $details->model = 'V191048'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.137') { $details->model = '6125XGXLG'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.138') { $details->model = '11908V'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.139') { $details->model = '550048GPoEPlus4SFPHITAA2Slot'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.140') { $details->model = '550024GPoEPlus4SFPHITAA2Slot'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.141') { $details->model = '550024GSFPHITAA2Slot'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.142') { $details->model = 'Moonshot45XGc'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.143') { $details->model = '12910AC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.144') { $details->model = 'FF593032QSFPPlus'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.145') { $details->model = 'FF593032QSFPPlusTAA'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.146') { $details->model = 'FF7904'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.147') { $details->model = '12916AC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.148') { $details->model = '12916DC'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.149') { $details->model = 'FF5900CP48XG4QSFPPlus'; $details->type = 'switch'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.1.150') { $details->model = '5900CP48XG4QSFPPlus8GbFCBF'; $details->type = 'switch'; }


	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.1') { $details->model = 'AMSR 900'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.2') { $details->model = 'AMSR 920'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.3') { $details->model = 'AMSR 2010'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.4') { $details->model = 'AMSR 2011'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.5') { $details->model = 'AMSR 2012'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.6') { $details->model = 'AMSR 2012T'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.7') { $details->model = 'AMSR 2013'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.8') { $details->model = 'AMSR 2020'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.9') { $details->model = 'AMSR 2021'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.10') { $details->model = 'AMSR 2040'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.11') { $details->model = 'AMSR 3010'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.12') { $details->model = 'AMSR 3011E'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.13') { $details->model = 'AMSR 3011F'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.14') { $details->model = 'AMSR 3016'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.15') { $details->model = 'AMSR 3020'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.16') { $details->model = 'AMSR 3040'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.17') { $details->model = 'AMSR 3060'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.18') { $details->model = 'AMSR 5040'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.19') { $details->model = 'AMSR 5060'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.20') { $details->model = 'A6602'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.21') { $details->model = 'A6604'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.22') { $details->model = 'A6608'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.23') { $details->model = 'A6616'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.24') { $details->model = 'AMSR 900W'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.25') { $details->model = 'AMSR 900WNA'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.26') { $details->model = 'AMSR 920W'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.27') { $details->model = 'AMSR 920WNA'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.28') { $details->model = 'AMSR 2012W'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.29') { $details->model = 'AMSR 2012TW'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.30') { $details->model = 'AMSR 2012TWNA'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.31') { $details->model = 'AMSR 2013W'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.32') { $details->model = 'AMSR 2013WNA'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.33') { $details->model = 'AMSR 2020S'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.34') { $details->model = 'AMSR 2021S'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.35') { $details->model = 'AMSR 2040S'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.36') { $details->model = 'AMSR 3010DC'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.37') { $details->model = 'AMSR 3016POE'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.38') { $details->model = 'AMSR 3020AS'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.39') { $details->model = 'AMSR 3020POE'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.40') { $details->model = 'AMSR 3020DC'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.41') { $details->model = 'AMSR 3040AS'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.42') { $details->model = 'AMSR 3040POE'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.43') { $details->model = 'AMSR 3040DC'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.44') { $details->model = 'AMSR 3060AS'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.45') { $details->model = 'AMSR 3060POE'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.46') { $details->model = 'AMSR 3060DC'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.47') { $details->model = 'AMSR 5040DC'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.48') { $details->model = 'AMSR 5060DC'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.49') { $details->model = 'A8805'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.50') { $details->model = 'A8808'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.51') { $details->model = 'A8812'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.52') { $details->model = 'AOA PFICV2'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.53') { $details->model = 'AOA PMIMV2'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.54') { $details->model = 'AOA PSMIMV2'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.55') { $details->model = 'MSR 2003AC'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.56') { $details->model = 'MSR 3012AC'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.57') { $details->model = 'MSR 3012DC'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.58') { $details->model = 'MSR 3024AC'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.59') { $details->model = 'MSR 3024DC'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.60') { $details->model = 'MSR 3024POE'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.61') { $details->model = 'MSR 3044'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.62') { $details->model = 'MSR 3064'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.63') { $details->model = 'MSR 4060'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.64') { $details->model = 'MSR 4080'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.65') { $details->model = 'HSR 6602G'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.66') { $details->model = 'HSR 6602XG'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.67') { $details->model = 'HSR 6802'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.68') { $details->model = 'HSR 6804'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.69') { $details->model = 'HSR 6808'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.70') { $details->model = 'MSR 930'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.71') { $details->model = 'MSR 930G'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.72') { $details->model = 'MSR 931'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.73') { $details->model = 'MSR 931G'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.74') { $details->model = 'MSR 931GG'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.75') { $details->model = 'MSR 930W'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.76') { $details->model = 'MSR 9304GLTEV'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.77') { $details->model = 'MSR 933'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.78') { $details->model = 'MSR 933G'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.79') { $details->model = 'MSR 935'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.80') { $details->model = 'MSR 935W'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.81') { $details->model = 'MSR 935G'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.82') { $details->model = 'MSR 936W'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.83') { $details->model = 'MSR 9304GLTEG'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.84') { $details->model = 'MSR 930LE'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.85') { $details->model = 'MSR 930GLE'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.86') { $details->model = 'MSR 931LE'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.87') { $details->model = 'MSR 931GLE'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.88') { $details->model = 'MSR 931DGLE'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.89') { $details->model = 'MSR 930WLE'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.90') { $details->model = 'MSR 9304GLTEA'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.91') { $details->model = 'MSR 933GLE'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.92') { $details->model = 'MSR 935LE'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.93') { $details->model = 'MSR 935WLE'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.94') { $details->model = 'MSR 935GLE'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.95') { $details->model = 'MSR 9304GLTEGLE'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.96') { $details->model = 'VSR'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.97') { $details->model = 'VSR 1001'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.98') { $details->model = 'VSR 1004'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.99') { $details->model = 'VSR 1008'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.100') { $details->model = 'MSR 10038'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.101') { $details->model = 'MSR 100414'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.102') { $details->model = 'VSR 1000'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.103') { $details->model = 'MSR 200424'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.104') { $details->model = 'MSR 200448'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.105') { $details->model = 'HSR 6602GTAA'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.106') { $details->model = 'HSR 6602XGTAA'; $details->type = 'router'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.2.107') { $details->model = 'MSR 10024'; $details->type = 'router'; }


	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.3.1') { $details->model = 'AWA 2610EAGNFAT'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.3.2') { $details->model = 'AWA 2620EAGNFAT'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.3.3') { $details->model = 'AWA 2620AGNFAT'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.3.4') { $details->model = 'A75 00LSQM3WCMB0'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.3.5') { $details->model = 'A95 00LSRM2WCM2A1'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.3.6') { $details->model = 'A58 00LSWM2WCM10'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.3.7') { $details->model = 'A58 00LSWM2WCM20'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.3.8') { $details->model = 'AWX 5004EWPXZ65004'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.3.9') { $details->model = 'AWX 5002EWPXZ75002'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.3.10') { $details->model = 'A30 00E'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.3.11') { $details->model = 'A30 00ELSW'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.3.12') { $details->model = 'AWA 3620AGN'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.3.13') { $details->model = 'AWA 3622AGN'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.3.14') { $details->model = 'AWA 3610GN'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.3.15') { $details->model = 'AWA 2620XAGN'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.3.16') { $details->model = 'LSU3 WCMD0'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.3.17') { $details->model = 'WX3024 EWCM'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.3.18') { $details->model = 'WX3024 ELSW'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.3.19') { $details->model = 'WX3010 EWCM'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.3.20') { $details->model = 'WX3010 ELSW'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.3.21') { $details->model = 'LSU3 WCMD0 TAA'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.3.22') { $details->model = 'WX3024 ETAAWCM'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.3.23') { $details->model = 'WX3024 ETAALSW'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.3.24') { $details->model = 'WX3010 ETAAWCM'; $details->type = 'wap'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.3.25') { $details->model = 'WX3010 ETAALSW'; $details->type = 'wap'; }


	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.4.1') { $details->model = 'Security Blade IMFWII'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.4.2') { $details->model = 'Security Blade IMSSL'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.4.3') { $details->model = 'Security Blade IMLB'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.4.4') { $details->model = 'Security Blade LSQ1FWBSC0'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.4.5') { $details->model = 'Security Blade LSQM1LBC0'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.4.6') { $details->model = 'Security Blade LSQ1NSMSC0'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.4.7') { $details->model = 'Security Blade LSR1FW2A1'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.4.8') { $details->model = 'Security Blade LSR1LB1A1'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.4.9') { $details->model = 'Security Blade LSR1NSM1A1'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.4.10') { $details->model = 'Security Blade LST1FW2A1'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.4.11') { $details->model = 'Security Blade LST1LB1A1'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.4.12') { $details->model = 'Security Blade LST1NSM1A1'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.4.13') { $details->model = 'Security Blade LSWM1FW10'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.4.14') { $details->model = 'Security Blade SPEFWM200'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.4.15') { $details->model = 'AF 5000'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.4.16') { $details->model = 'AF 1000E'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.4.17') { $details->model = 'AU 200S'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.4.18') { $details->model = 'AU 200A'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.4.19') { $details->model = 'AF 1000SEI'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.4.20') { $details->model = 'AF 1000AEI'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.4.21') { $details->model = 'Security Blade LST1FW3A1'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.4.22') { $details->model = 'Security Blade LSU1FWCEA0'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.4.23') { $details->model = 'F50 00C'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.4.24') { $details->model = 'F50 00S'; $details->type = 'network device'; }
	if ($details->snmp_oid == '1.3.6.1.4.1.25506.11.4.25') { $details->model = 'VFW 1000'; $details->type = 'network device'; }

	if ($details->snmp_version == '2') {
		# serial
		$details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.47.1.1.1.1.11.1"));
	}

	if ($details->snmp_version == '1') {
		# serial
		$details->serial = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.47.1.1.1.1.11.1"));
	}

};
