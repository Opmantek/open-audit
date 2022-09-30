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
* @author    Mark Unwin <mark.unwin@firstwave.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.3.4
* @link      http://www.open-audit.org
 */
$version ='';
$header = "
    connect-src 'self' opmantek.com community.opmantek.com services.opmantek.com;
    font-src 'self';
    form-action 'self';
    frame-ancestors 'none';
    frame-src 'none';
    img-src 'self' data:;
    manifest-src 'none';
    media-src 'none';
    object-src 'none';
    script-src 'self' 'unsafe-inline' maps.googleapis.com maps.google.com;
    style-src 'self' 'unsafe-inline';
    worker-src 'self';
    ";
    # prefetch-src 'self'; # removed as still marked as experimental and not supported in any browsers
    # https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/prefetch-src#browser_compatibility
$header = str_replace(PHP_EOL, "", $header);
header("Content-Security-Policy: {$header}");
header('X-Frame-Options: DENY');
header('X-Content-Type-Options: nosniff');

if (intval($this->config->config['internal_version']) < intval($this->config->config['web_internal_version']) && $this->response->include !== 'v_database_update' && $this->response->include !== 'v_database_update_form') {
    redirect('database?action=update');
}

// Define our constans for use in htmlspecialchars
if (!defined('CHARSET')) {
    define('CHARSET', 'UTF-8');
    define('REPLACE_FLAGS', ENT_COMPAT | ENT_XHTML);
}

if ($version !== 5) {
    function refine($property, $value, $display = '', $align = 'left')
    {
        if ($display === '') {
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

        if (!empty($value)) {
            echo '            <td class="text-' . $align . '"><span class="small glyphicon glyphicon-filter" aria-hidden="true" data-html="true" data-toggle="popover" title="Refine" data-content="<a href=\'' . $exclude_link . '\'>Exclude</a><br /><a href=\'' . $include_link . '\'>Include</a>"></span><span title="' . $value . '">' . $display . "</span></td>\n";
        } else {
            echo '            <td class="text-' . $align . '">' . $display . "</td>\n";
        }
    }
}

include 'theme-bootstrap' . $version . '/v_template.php';
exit;
