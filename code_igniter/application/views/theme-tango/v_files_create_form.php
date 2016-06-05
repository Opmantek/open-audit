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
 * 
@version 1.14
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
echo form_open('files'); ?>
<fieldset id="details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Create File')?></span></legend>
	<img class='section_image' src='<?php echo $oa_theme_images;?>/48_network.png' alt='' title='' />
		<p><label for='data[id]'><?php echo __("ID")?>: </label><input type='text' id='data[id]' name='data[id]' tabindex='1' title='ID' value="" disabled /> * Will be completed automatically.</p>
        <p><label for='data[org_id]'><?php echo __("Org")?>: </label>
            <select id="data[org_id]" name="data[org_id]">
            <?php foreach ($this->response->orgs as $org) {
                echo "<option value='" . $org->id . "'>" . $org->name . "</option>\n";
            } ?>
            </select></p>
		<p><label for='data[path]'><?php echo __("Path")?>: </label><input type='text' id='data[path]' name='data[path]' tabindex='2' title='Path' value=""  /> The full path to the file or folder.</p>
		<p><label for='data[description]'><?php echo __("Description")?>: </label><input type='text' id='data[description]' name='data[description]' tabindex='3' title='Level'  value=""/> A human readable description to help remind you what this is for.</p>
		<p><label for='data[edited_by]'><?php echo __("Edited By")?>: </label><input type='text' id='data[edited_by]' name='data[edited_by]' tabindex='4' title='Edited By' value="" disabled /> * Will be completed automatically.</p>
		<p><label for='data[edited_date]'><?php echo __("Edited Date")?>: </label><input type='text' id='data[edited_date]' name='data[edited_date]' tabindex='5' title='Edited Date' value="" disabled /> * Will be completed automatically.</p>
		<p><label for='submit'>Submit: </label><?php echo form_submit(array('id' => 'submit', 'name' => 'submit', 'tabindex' => '6'), __('Submit') ); ?></p>
</fieldset>
<?php echo form_close(); ?>
</div>
</div>
<style>
input[type="text"]:disabled {
    background: #dddddd;
}
</style>
<?php
exit();
?>