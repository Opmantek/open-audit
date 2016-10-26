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
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * 
 * @version 1.12.8
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

# Vendor Alcatel

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new stdClass();
    if ($oid == '1.3.6.1.4.1.800.3.1.1.1') {
        $details->model = 'Alcatel OmniSwitch 5';
        $details->type = '';
    }
    if ($oid == '1.3.6.1.4.1.800.3.1.1.16') {
        $details->model = 'Alcatel OmniStack 5024';
        $details->type = '';
    }
    if ($oid == '1.3.6.1.4.1.800.3.1.1.17') {
        $details->model = 'Alcatel OmniStack 4024G';
        $details->type = '';
    }
    if ($oid == '1.3.6.1.4.1.800.3.1.1.2') {
        $details->model = 'Alcatel OmniSwitch 9';
        $details->type = '';
    }
    if ($oid == '1.3.6.1.4.1.800.3.1.1.3') {
        $details->model = 'Alcatel OmniStack 4024G/5024C';
        $details->type = '';
    }
    if ($oid == '1.3.6.1.4.1.800.3.1.1.9') {
        $details->model = 'Alcatel OmniStack 6024';
        $details->type = '';
    }
    return($details);
};
