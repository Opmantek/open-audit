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
* @version   3.2.2
* @link      http://www.open-audit.org
 */
header("Content-Security-Policy: frame-ancestors 'none'");
header("X-Frame-Options: DENY");
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

function refine($property, $value, $display = '', $align = 'left')
{
    if ($display == '') {
        $display = $value;
    }
    $CI = & get_instance();
    if (strlen($display) > 28) {
        $trim = intval($CI->config->config['gui_trim_characters']);
        if (empty($trim)) {
            $trim = 25;
        }
        $display = mb_substr($display, 0, $trim) . ' ...';
    }

    $query_parameters = $CI->response->meta->query_parameters;
    $item = new stdClass();
    $item->name = $property;
    $item->operator = '=';
    $item->value = $value;
    $query_parameters[] = $item;
    $include_link = create_url($query_parameters);
    unset($query_parameters);

    $query_parameters = $CI->response->meta->query_parameters;
    $item = new stdClass();
    $item->name = $property;
    $item->operator = '!=';
    $item->value = $value;
    $query_parameters[] = $item;
    $exclude_link = create_url($query_parameters);
    unset($query_parameters);

    echo '            <td class="text-' . $align . '"><span class="small glyphicon glyphicon-filter" aria-hidden="true" data-html="true" data-toggle="popover" title="Refine" data-content="<a href=\'' . $exclude_link . '\'>Exclude</a><br /><a href=\'' . $include_link . '\'>Include</a>"></span><span title="' . htmlspecialchars($value) . '">' . htmlspecialchars($display, REPLACE_FLAGS, CHARSET) . "</span></td>\n";
}

include "theme-bootstrap/v_template.php";