<?php
if (!defined('BASEPATH')) {
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
* @category  Helper
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   2.0.8
* @link      http://www.open-audit.org
 */

# Vendor Checkpoint

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new stdClass();
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.1') {
        $details->type = 'firewall';
        $details->model = 'UTM-1450';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.2') {
        $details->type = 'firewall';
        $details->model = 'UTM-11050';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.3') {
        $details->type = 'firewall';
        $details->model = 'UTM-12050';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.4') {
        $details->type = 'firewall';
        $details->model = 'UTM-1130';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.5') {
        $details->type = 'firewall';
        $details->model = 'UTM-1270';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.6') {
        $details->type = 'firewall';
        $details->model = 'UTM-1570';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.7') {
        $details->type = 'firewall';
        $details->model = 'UTM-11070';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.8') {
        $details->type = 'firewall';
        $details->model = 'UTM-12070';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.9') {
        $details->type = 'firewall';
        $details->model = 'UTM-13070';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.10') {
        $details->type = 'firewall';
        $details->model = 'Power-15070';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.11') {
        $details->type = 'firewall';
        $details->model = 'Power-19070';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.12') {
        $details->type = 'firewall';
        $details->model = 'Power-111000';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.13') {
        $details->type = 'firewall';
        $details->model = 'Smart-15';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.14') {
        $details->type = 'firewall';
        $details->model = 'Smart-125';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.15') {
        $details->type = 'firewall';
        $details->model = 'Smart-150';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.16') {
        $details->type = 'firewall';
        $details->model = 'Smart-1150';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.17') {
        $details->type = 'firewall';
        $details->model = 'IP150';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.18') {
        $details->type = 'firewall';
        $details->model = 'IP280';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.19') {
        $details->type = 'firewall';
        $details->model = 'IP290';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.20') {
        $details->type = 'firewall';
        $details->model = 'IP390';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.21') {
        $details->type = 'firewall';
        $details->model = 'IP560';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.22') {
        $details->type = 'firewall';
        $details->model = 'IP690';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.23') {
        $details->type = 'firewall';
        $details->model = 'IP1280';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.24') {
        $details->type = 'firewall';
        $details->model = 'IP2450';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.25') {
        $details->type = 'firewall';
        $details->model = 'UNIVERGE UnifiedWall 1000';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.26') {
        $details->type = 'firewall';
        $details->model = 'UNIVERGE UnifiedWall 2000';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.27') {
        $details->type = 'firewall';
        $details->model = 'UNIVERGE UnifiedWall 4000';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.28') {
        $details->type = 'firewall';
        $details->model = 'UNIVERGE UnifiedWall 100';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.29') {
        $details->type = 'firewall';
        $details->model = 'DLP-19571';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.30') {
        $details->type = 'firewall';
        $details->model = 'DLP-12571';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.31') {
        $details->type = 'firewall';
        $details->model = 'IPS-12076';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.32') {
        $details->type = 'firewall';
        $details->model = 'IPS-15076';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.33') {
        $details->type = 'firewall';
        $details->model = 'IPS-19076';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.34') {
        $details->type = 'firewall';
        $details->model = '2200';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.35') {
        $details->type = 'firewall';
        $details->model = '4200';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.36') {
        $details->type = 'firewall';
        $details->model = '4400';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.37') {
        $details->type = 'firewall';
        $details->model = '4600';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.38') {
        $details->type = 'firewall';
        $details->model = '4800';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.39') {
        $details->type = 'firewall';
        $details->model = 'TE250';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.40') {
        $details->type = 'firewall';
        $details->model = '12200';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.41') {
        $details->type = 'firewall';
        $details->model = '12400';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.42') {
        $details->type = 'firewall';
        $details->model = '12600';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.43') {
        $details->type = 'firewall';
        $details->model = 'TE1000';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.44') {
        $details->type = 'firewall';
        $details->model = '13500';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.45') {
        $details->type = 'firewall';
        $details->model = '21400';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.46') {
        $details->type = 'firewall';
        $details->model = '21600';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.47') {
        $details->type = 'firewall';
        $details->model = '21700';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.48') {
        $details->type = 'firewall';
        $details->model = 'VMware';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.49') {
        $details->type = 'firewall';
        $details->model = 'OpenServer';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.50') {
        $details->type = 'firewall';
        $details->model = 'Smart-1205';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.51') {
        $details->type = 'firewall';
        $details->model = 'Smart-1210';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.52') {
        $details->type = 'firewall';
        $details->model = 'Smart-1225';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.53') {
        $details->type = 'firewall';
        $details->model = 'Smart-13050';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.54') {
        $details->type = 'firewall';
        $details->model = 'Smart-13150';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.55') {
        $details->type = 'firewall';
        $details->model = '13800';
    }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.56') {
        $details->type = 'firewall';
        $details->model = '21800';
    }
    return($details);
};
