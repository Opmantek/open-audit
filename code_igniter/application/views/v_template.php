<?php
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
* @category  View
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   2.0.10
* @link      http://www.open-audit.org
 */

if ($this->config->config['internal_version'] < $this->config->config['web_internal_version'] and $include != 'v_database_update' and $include != 'v_database_update_form') {
    redirect('database?action=update');
}

# Define our constans for use in htmlspecialchars
if (!defined('CHARSET')) {
    define('CHARSET', 'UTF-8');
    if (phpversion() >= 5.4) {
        define('REPLACE_FLAGS', ENT_COMPAT | ENT_XHTML);
    } else {
        define('REPLACE_FLAGS', ENT_COMPAT);
    }
}

include "theme-bootstrap/v_template.php";