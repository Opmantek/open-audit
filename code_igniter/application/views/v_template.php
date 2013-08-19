<?php
/**
 * OAv2
 *
 * An open source network auditing application
 *
 * @package Open-AudIT
 * @author Mark Unwin <mark.unwin@gmail.com>
 * @version v1.0.4
 * @copyright Copyright (c) 2013, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

if(!isset($user_theme) or $user_theme == '') { $user_theme = 'tango'; }
include "theme-" . $user_theme . "/v_template.php";
?>