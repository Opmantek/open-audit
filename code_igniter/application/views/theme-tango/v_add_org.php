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
 * @version 1.10
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
if (isset($error_message)) {
    $error_message = "<font color='red'>&nbsp;".$error_message."</font>";
} else {
    $error_message = "";
}

echo form_open('admin_org/add_org')."\n";
?>
<fieldset id="org_details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Organisation Details')?></span></legend>
	<img class='section_image' src='<?php echo $oa_theme_images;?>/48_home.png' alt='' title='' />
	<table style='width:780' cellpadding='0' cellspacing='0'>
		<tr>
			<td style='width:50%'>
				<p><label for='org_name'><?php echo __('Name'); ?>: </label><input type='text' id='org_name' name='org_name' tabindex='1' title='Organisation Name' value="<?php echo set_value('org_name'); ?>"/><?php echo $error_message; ?></p>
				<p><label for='org_parent_id'><?php echo __('Parent'); ?>: </label>
					<select id='org_parent_id' name='org_parent_id' tabindex='2' title='Parent'>
					<?php foreach ($org_names as $value) {
					    echo "<option value='".intval($value->org_id)."'>".htmlentities($value->org_name)."&nbsp;</option>\n";
					} ?>
					</select>
				</p>
				<!-- <p><label for='org_contact'><?php echo __('Contact'); ?>: </label><input type='text' id='org_contact' name='org_contact' tabindex='3' title='Contact'  value="<?php echo set_value('org_contact'); ?>"/></p> -->
				<p><label for='org_picture'><?php echo __('Picture'); ?>: </label><input type='text' id='org_picture' name='org_picture' tabindex='4' title='Picture'  value="<?php echo set_value('org_picture'); ?>"/></p>
				<p><label for='org_comments'><?php echo __('Comments'); ?>: </label><input type='text' id='org_comments' name='org_comments' tabindex='5' title='Comments'  value="<?php echo set_value('org_comments'); ?>"/></p>
				<p><label for='org_group'><?php echo __('Activate Group'); ?>: </label><input type='checkbox' id='org_group' name='org_group' tabindex='12' title='Activate Group' checked /></p>
				<p><label for='submit'>&nbsp;</label><?php echo form_submit(array('id' => 'submit', 'name' => 'submit'), __('Submit') ); ?></p>
			</td>
		</tr>
	</table>
	<p><?php echo $this->session->flashdata('message'); ?>&nbsp;</p>
	<input type="hidden" value="" name="contact_id" id="contact_id" />
</fieldset>
<?php echo form_close(); ?>
