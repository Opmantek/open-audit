<?php
/**
 * OAv2
 *
 * An open source network auditing application
 *
 * @package OAv2
 * @author Mark Unwin <mark.unwin@gmail.com>
 * @version beta 8
 * @copyright Copyright (c) 2011, Mark Unwin
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */


if(!isset($user_theme) or $user_theme == '') { $user_theme = 'tango'; }
include "theme-" . $user_theme . "/v_template.php";

?>