<?php
/**
 * @package Open-AudIT
 * @author Mark Unwin
 * @version 1.0.4
 * @copyright Opmantek, 2013
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

if ( !isset($user_theme) or $user_theme == '' ) { $user_theme = 'tango'; }
include "theme-" . $user_theme . "/v_template.php";
?>