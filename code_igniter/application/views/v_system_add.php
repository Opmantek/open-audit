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

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Open-AudIT System Input</title>
</head>
<body>
<?php
$attributes = array('accept-charset' => 'UTF-8');
echo form_open_multipart('system/add_system', $attributes)."\n";
echo form_fieldset('Paste the XML')."\n";
echo '<p>'.form_textarea(array('name' => 'form_systemXML', 'id' => 'form_systemXML', 'rows' => '15', 'cols' => '100'))."</p>\n";
?>
<p><label for='display'>Debug Display: </label> <input type='checkbox' id='display' name='display' title='Debug Display' /></p>
<?php
echo form_fieldset_close();
echo "<br /><br />or<br /><br />\n";
echo form_fieldset('Select a File')."\n";
echo form_upload('upload_file');
echo form_fieldset_close();
echo '<p>'.form_submit(array('id' => 'submit', 'name' => 'submit'), 'Submit' )."</p>\n";
echo form_close();
?>
</body>
</html>
