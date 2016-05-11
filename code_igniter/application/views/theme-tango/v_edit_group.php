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
?>
<div id="groups" style="background: #FFFFFF; padding: 10px; display: block;">
<?php
echo form_open('admin_group/process_edit_group')."\n";
foreach ($group as $group_data):
    $group_sql = $group_data->group_dynamic_select;
    $group_sql = str_replace("\t", '', $group_data->group_dynamic_select);
    $group_sql = str_replace('SELECT ', "SELECT \n\t", $group_sql);
    $group_sql = str_replace('FROM ', "\nFROM \n\t", $group_sql);
    $group_sql = str_replace('WHERE ', "\nWHERE \n\t", $group_sql);
    $group_sql = str_replace('AND ', "AND \n\t", $group_sql);
    $group_sql = str_replace('OR ', "OR \n\t", $group_sql);
    $group_sql = str_replace('GROUP BY ', "\nGROUP BY \n\t", $group_sql);

    $group_display_sql = str_replace("\t", '', $group_data->group_display_sql);
    $group_display_sql = str_replace('SELECT ', "SELECT \n\t", $group_display_sql);
    $group_display_sql = str_replace('FROM ', "\nFROM \n\t", $group_display_sql);
    $group_display_sql = str_replace('WHERE ', "\nWHERE \n\t", $group_display_sql);
    $group_display_sql = str_replace('AND ', "AND \n\t", $group_display_sql);
    $group_display_sql = str_replace('OR ', "OR \n\t", $group_display_sql);
    $group_display_sql = str_replace('GROUP BY ', "\nGROUP BY \n\t", $group_display_sql);
?>

<fieldset id="group_details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Group Details')?></span></legend>
	<?php echo '<p>'.$this->session->flashdata('message').'</p>'; ?>
	<p><label for="group_id_display"><?php echo __('Group ID')?>: </label><input size='40' type='text' id='group_id_display' name='group_id_display' tabindex='1' title='Group ID' value='<?php echo $group_data->group_id?>' disabled /></p>
	<p><label for='group_name'><?php echo __('Group Name')?>: </label><input size='40' type='text' id='group_name' name='group_name' tabindex='1' title='Group Name'  value='<?php echo str_replace("'", "&apos;", $group_data->group_name); ?>'/></p>
	<p><label for='group_padded_name'><?php echo __('Group Padded Name')?>: </label><input size='40' type='text' id='group_padded_name' name='group_padded_name' tabindex='1' title='Group Padded Name'  value='<?php echo str_replace("'", "&apos;", $group_data->group_padded_name); ?>'/> NOTE - it's best to pad out names with IP Addresses for correct sorting - ie 192.168.020.034</p>
	<p><label for='group_description'><?php echo __('Group Description')?>: </label><input size='40' type='text' id='group_description' name='group_description' tabindex='2' title='Group Description' value='<?php echo str_replace("'", "&apos;", $group_data->group_description); ?>'/></p>
	<p>
		<label for='group_icon'><?php echo __('Group Icon')?>: </label><input size='40' type='text' id='group_icon' name='group_icon' tabindex='2' title='Group Icon' value='<?php echo $group_data->group_icon?>'/>
		<img src='<?php echo $oa_theme_images;?>/16_<?php echo $group_data->group_icon; ?>.png' alt='' title='' style='width:16'/>
	</p>
	<label for='group_category'><?php echo __('Group Category')?>: </label>
	<select id='group_category' name='group_category' title='Group Category' >
		<option value='application' <?php if ($group_data->group_category == 'application') { echo "selected";} ?>><?php echo __('Application')?></option>
		<option value='device' <?php if ($group_data->group_category == 'device') { echo "selected";} ?>><?php echo __('Device')?></option>
		<option value='general' <?php if ($group_data->group_category == 'general') { echo "selected";} ?>><?php echo __('General')?></option>
		<option value='location' <?php if ($group_data->group_category == 'location') { echo "selected";} ?>><?php echo __('Location')?></option>
		<option value='network' <?php if ($group_data->group_category == 'network') { echo "selected";} ?>><?php echo __('Network')?></option>
		<option value='org' <?php if ($group_data->group_category == 'org') { echo "selected";} ?>><?php echo __('Organisation')?></option>
		<option value='os' <?php if ($group_data->group_category == 'os') { echo "selected";} ?>><?php echo __('Operating System')?></option>
		<option value='owner' <?php if ($group_data->group_category == 'owner') { echo "selected";} ?>><?php echo __('Owner')?></option>
	</select>
	<p><label for='group_dynamic_select'><?php echo __('Select SQL')?>: </label><textarea name='group_dynamic_select' id='group_dynamic_select' rows='12' cols='120'><?php echo $group_sql?></textarea></p>
	<p><label for='group_display_sql'><?php echo __('Display SQL')?>: </label><textarea name='group_display_sql' id='group_display_sql' rows='12' cols='120'><?php echo $group_display_sql?></textarea></p>
	<input type='hidden' id='group_parent' name='group_parent' value='1' />
	<input type='hidden' id='group_id' name='group_id' value='<?php echo $group_data->group_id?>' />
</fieldset>
<br />
<br />
<p><?php echo form_submit(array('id' => 'submit', 'name' => 'submit'), __('Submit') ); ?><br />&nbsp;</p>
<?php echo form_close(); ?>
<?php endforeach; ?>
</div>
