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
if (isset($error_message)) {
    $error_message = "<font color='red'>&nbsp;".$error_message."</font>";
} else {
    $error_message = "";
}
echo form_open('networks')."\n"; ?>
<fieldset id="details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Network Details')?></span></legend>
	<img class='section_image' src='<?php echo $oa_theme_images;?>/48_home.png' alt='' title='' />
	<?php foreach ($this->response->data as $item) {
    ?>
	<table cellpadding = "0" cellspacing="0">
		<tr>
			<td>
				<p><label for='id'><?php echo __("ID")?>: </label><input type='text' id='id' name='id' tabindex='1' title='ID' value="<?php echo $item->id; ?>" disabled /><?php echo $error_message; ?></p>
				<p><label for='name'><?php echo __("Name")?>: </label><input type='text' id='name' name='name' tabindex='2' title='Name' value="<?php echo $item->name; ?>" disabled /><?php echo $error_message; ?></p>
				<p><label for='description'><?php echo __("Description")?>: </label><input type='text' id='description' name='description' tabindex='3' title='Level'  value="<?php echo $item->description; ?>"/></p>
				<p><label for='edited_by'><?php echo __("Edited By")?>: </label><input type='text' id='edited_by' name='edited_by' tabindex='4' title='Edited By' value="<?php echo $item->edited_by; ?>" disabled /><?php echo $error_message; ?></p>
				<p><label for='edited_date'><?php echo __("Edited Date")?>: </label><input type='text' id='edited_date' name='edited_date' tabindex='5' title='Edited Date' value="<?php echo $item->edited_date; ?>" disabled /><?php echo $error_message; ?></p>
				<p><label style="width: 30px;" for='submit'></label><?php echo form_submit(array('id' => 'submit', 'name' => 'submit', 'tabindex' => '6'), __('Submit') ); ?></p>
			</td>
		</tr>
	</table>
	<p><?php echo $this->session->flashdata('message');
    ?></p>
	<?php } ?>
</fieldset>
<?php echo form_close(); ?>
</div>
</div>
