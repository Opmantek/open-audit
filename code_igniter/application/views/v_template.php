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
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.12.6
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
if ($this->config->config['internal_version'] < $this->config->config['web_internal_version'] and $include != 'v_help_about' and $include != 'v_upgrade') {
    $include = "v_help_about";
    $heading = "You must upgrade";
}
if (!isset($this->user->theme) or $this->user->theme == '') {
    $this->user->theme = 'tango';
}

if (file_exists("/usr/local/open-audit/code_igniter/application/views/theme-bootstrap/".$include.".php")) {
    $this->user->theme = 'bootstrap';
}

$oa_web_index    = htmlentities($this->config->item('oa_web_index'));
$oa_web_folder   = htmlentities($this->config->item('oa_web_folder'));
$oa_theme_images = htmlentities($oa_web_folder.'/theme-'.$this->user->theme.'/'.$this->user->theme.'-images');
$oa_theme_files  = htmlentities($oa_web_folder.'/theme-'.$this->user->theme.'/'.$this->user->theme.'-files');
$GLOBALS['oa_theme_images'] = $oa_theme_images;
$GLOBALS['oa_theme_files'] = $oa_theme_files;

include "theme-".$this->user->theme."/v_template.php";
