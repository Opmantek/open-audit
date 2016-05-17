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

echo form_open('admin_org/edit_org')."\n";
?>
<fieldset id="org_details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Organisation Details')?></span></legend>
	<img class='section_image' src='<?php echo $oa_theme_images;?>/48_home.png' alt='' title='' />
	<?php
    if ($org->parent_id == '0') { $org->parent_id = ''; } ?>
	<table width="90%" cellpadding = "0" cellspacing="0">
		<tr>
			<td style='width:50%'>
				<p><label for='org_name'><?php echo __("Name")?>: </label><input type='text' id='name' name='name' tabindex='1' title='<?php echo __('Organisation Name'); ?>' value="<?php echo htmlentities($org->name); ?>"/><?php echo htmlentities($error_message); ?></p>
				<p><label for='parent_id'><?php echo __("Parent")?>: </label>
					<select id='parent_id' name='parent_id' tabindex='2' title='Parent'/>
					<?php
                    if (count($org_names) > 0) {
                        foreach ($org_names as $value) {
                            if ($value->id == $org->parent_id) {
                                echo "\n\t\t\t\t\t\t<option value='".intval($value->id)."' selected>".htmlentities($value->name)."</option>";
                            } elseif ($value->id == $org->id) {
                                # do not output itself to be a potential parent.
                            } else {
                                echo "\n\t\t\t\t\t\t<option value='".intval($value->id)."'>".htmlentities($value->name)."</option>";
                            }
                        }
                        echo "\n";
                    } ?>
					</select>
				</p>
				<p><label for='comments'><?php echo __('Comments')?>: </label><input type='text' id='comments' name='comments' tabindex='4' title='<?php echo __('Comments'); ?>'  value="<?php echo htmlentities($org->comments); ?>"/></p>
				<p><label for='submit'></label><?php echo form_submit(array('id' => 'submit', 'name' => 'submit'), __('Submit') ); ?></p>
			</td>
		</tr>
	</table>
<input type="hidden" value="<?php echo intval($org->id); ?>" name="id" id="id" />
</fieldset>
<?php echo form_close(); ?>
</div>
</div>
