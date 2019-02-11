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
* @version   2.4.0
* @link      http://www.open-audit.org
 */
if (! function_exists('my_json_decode')) {
    function my_json_decode($string = '')
    {
        if (empty($string)) {
            # TODO - log an error
            return '';
        }

        if (stripos($string, '\"') !== false) {
            $string = str_replace('\"', '"', $string);
        }

        $json = @json_decode($string);

        switch (json_last_error()) {
            case JSON_ERROR_NONE:
                $error_message = ''; # No errors
            break;
            case JSON_ERROR_DEPTH:
                $error_message = 'Maximum stack depth exceeded';
            break;
            case JSON_ERROR_STATE_MISMATCH:
                $error_message = 'Underflow or the modes mismatch';
            break;
            case JSON_ERROR_CTRL_CHAR:
                $error_message = 'Unexpected control character found';
            break;
            case JSON_ERROR_SYNTAX:
                $error_message = 'Syntax error, malformed JSON';
            break;
            case JSON_ERROR_UTF8:
                $error_message = 'Malformed UTF-8 characters, possibly incorrectly encoded';
            break;
            default:
                $error_message = 'Unknown error';
            break;
        }

        if (!empty($error_message)) {
            log_error('ERR-0033', strtolower(__METHOD__), $error_message);
        }

        if (!empty($json)) {
            return $json;
        } else {
            return '';
        }
    }
}

/* End of file json_helper.php */
/* Location: ./system/application/helpers/json_helper.php */
