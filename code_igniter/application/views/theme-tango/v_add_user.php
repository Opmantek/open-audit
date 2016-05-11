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
echo form_open('admin_user/add_user')."\n";
?>
<fieldset id="group_details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('User Details')?></span></legend>
	<img class='section_image' src='<?php echo $oa_theme_images;?>/48_users.png' alt='' title='' />
	<table style='width:780' cellpadding='0' cellspacing='0'>
		<tr>
			<td style='width:50%'>
				<p><label for='name'><?php echo __("User Name")?>: </label><input type='text' id='name' name='name' tabindex='1' title='User Name' value="<?php echo set_value('name'); ?>"/><?php echo $error_message; ?></p>
				<p><label for='full_name'><?php echo __("Full Name")?>: </label><input type='text' id='full_name' name='full_name' tabindex='2' title='Full Name'  value="<?php echo set_value('full_name'); ?>"/></p>
				<p><label for='password'><?php echo __("Password")?>: </label><input type='password' id='password' name='password' tabindex='3' title='Password'  value="<?php echo set_value('password'); ?>"/></p>
				<p><label for='email'><?php echo __("Email Address")?>: </label><input type='text' id='email' name='email' tabindex='4' title='Email Address'  value="<?php echo set_value('email'); ?>"/></p>
			</td>
			<td style='width:50%'>
				<p><label for='lang'><?php echo __("Language")?>: </label>
					<select id='lang' name='lang' tabindex='5' title='Is Admin' />
						<option value="en" selected>English</option>
						<option value="pt-br">Brazilian Portuguese</option>
						<option value="fr">French</option>
						<option value="de">German</option>
						<option value="es">Spanish</option>
					</select>
                </p>
				<p><label for='theme'><?php echo __("Theme")?>: </label><input type='text' id='theme' name='theme' tabindex='7' title='Theme' value="<?php echo set_value('theme', 'tango'); ?>"/></p>
				<p><label for='admin'><?php echo __("User is Admin")?>: </label><input type='checkbox' id='admin' name='admin' tabindex='8' title='Is Admin' /></p>
				<p><label for='sam'><?php echo __("User SAM Access Level")?>: </label>
					<select id='sam' name='sam' tabindex='8' title='<?php echo __('Is Admin'); ?>' />
						<option value="0"><?php echo __('No Access'); ?></option>
						<option value="1" selected><?php echo __('View Reports Only'); ?></option>
						<option value="2"><?php echo __('Update Counts'); ?></option>
						<option value="3"><?php echo __('Create Licenses'); ?></option>
					</select></p>
				<p><label for='submit'>&nbsp;</label><?php echo form_submit(array('id' => 'submit', 'name' => 'submit'), __('Submit') ); ?></p>
			</td>
		</tr>
	</table>
	<p><?php echo $this->session->flashdata('message'); ?>&nbsp;</p>
</fieldset>

<br />
<br />

<fieldset class="niceform">
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __("Group Access Details")?></span></legend>

<table cellspacing="1" class="tablesorter">
	<thead>
		<tr>
			<th align='center' width="120"><?php echo __('Systems')?></th>
			<th><?php echo __('Group Name')?></th>
			<th><?php echo __('Group Type')?></th>
			<th><?php echo __('Group Description')?></th>
			<th align='center' class='{sorter: false}'><?php echo __('Access Level')?> - <?php echo group_dropdown(0)?></th>
		</tr>
	</thead>
	<tbody>
		<?php
        foreach ($query as $key):
            $tag = 'User Defined';
            if ($key->group_id < '1000') {
                $tag = 'Built-in';
            }
            if ($key->group_id == '1') {
                $tag = 'Built-in';
            }
            if (mb_strpos($key->group_name, 'Network - ') !== false) {
                $tag = 'Auto Generated';
            }
            echo "
		<tr>
			<td align=\"center\">".intval($key->total)."</td>
			<td><a href=\"".$this->config->item('oa_web_index')."/main/list_devices/".intval($key->group_id)."\">".htmlentities($key->group_name)."</a></td>
			<td>".htmlentities($tag)."</td>
			<td>".htmlentities($key->group_description)."</td>
			<td align=\"center\">".group_dropdown($key->group_id)."</td>
		</tr>";
        endforeach; ?>
	</tbody>
</table>

</fieldset>










<?php
function group_dropdown($id)
{
    if ($id == '0') {
        $js = "onchange='alter_all_groups();'";
    } else {
        $js = '';
    }
    $string = "<select id='group_id_$id' name='group_id_$id' title='' $js >
		<option value='0' selected>".__("No Access")."</option>
		<option value='3'>".__("List View Only")."</option>
		<option value='5'>".__("View Basic Details")."</option>
		<option value='7'>".__("View Sensitive Details")."</option>
		<option value='10'>".__("Edit Details")."</option>
	</select>\n";
    $string = str_replace("\t", "", $string);
    $string = str_replace("\n", "", $string);

    return $string;
}
?>

<script type="text/javascript">
function alter_all_groups()
{
	totalArray = new Array();
	var count = 0;
	<?php
    $count = 0;
    foreach ($query as $key):
        $count++;
        echo "	totalArray[$count] = ".$key->group_id."\n";
    endforeach;
    ?>
	var i=1;
	for (i=1;i<=<?php echo $total_count;?>;i++)
	{
		document.getElementById("group_id_"+totalArray[i]).value = document.getElementById("group_id_0").value;
	}
}
</script>

<?php echo form_close(); ?>

<script type='text/javascript'>
function createRequestObject()
{
	var req;
	if(window.XMLHttpRequest){
		// Firefox, Safari, Opera...
		req = new XMLHttpRequest();
	} else if(window.ActiveXObject) {
		// Internet Explorer 5+
		req = new ActiveXObject("Microsoft.XMLHTTP");
	} else {
		// There is an error creating the object,
		// just as an old browser is being used.
		alert('Problem creating the XMLHttpRequest object');
	}
	return req;
}
var http = createRequestObject();
</script>
