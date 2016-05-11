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
if (isset($error_message)) {
    $error_message = "<font color='red'>&nbsp;".$error_message."</font>";
} else {
    $error_message = "";
}
?>

<?php echo form_open($url)."\n"; ?>

<fieldset id="group_details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('User Details')?></span></legend>
	<?php
    foreach ($user as $key) {
        if ($key->admin == 'y') {
            $value_admin = 'checked="checked"';
        } else {
            $value_admin = '';
        }
        ?>
	<table width="100%">
		<tr>
			<td style="width:50%;">
				<p><label for='name'><?php echo __('User Name'); ?>: </label><input type='text' id='name' name='name' tabindex='1' title='User Name' value="<?php echo htmlentities($key->name); ?>"/></p>
				<p><label for='full_name'><?php echo __('Full Name'); ?>: </label><input type='text' id='full_name' name='full_name' tabindex='2' title='Full Name'  value="<?php echo htmlentities($key->full_name); ?>"/></p>
				<p><label for='password'><?php echo __('Password'); ?>: </label><input type='password' id='password' name='password' tabindex='3' title='Password'  value="<?php echo htmlentities(set_value('password')); ?>"/></p>
				<p><label for='password_confirm'><?php echo __('Confirm Password'); ?>: </label><input type='password' id='password_confirm' name='password_confirm' tabindex='3' title='Password'  value="<?php echo htmlentities(set_value('password_confirm')); ?>"/></p>
				<p><label for='email'><?php echo __('Email Address'); ?>: </label><input type='text' id='email' name='email' tabindex='4' title='Email Address'  value="<?php echo htmlentities($key->email); ?>"/></p>
			</td>
			<td style="width:50%;">
				<p><label for='lang'><?php echo __('Language'); ?>: </label>
					<select id='lang' name='lang' tabindex='5' title='Is Admin' />
						<option value="en"<?php if ($key->lang == 'en') { echo ' selected'; } ?>>English</option>
						<option value="pt-br"<?php if ($key->lang == 'pt-br') { echo ' selected'; } ?>>Brazilian Portuguese</option>
						<option value="fr"<?php if ($key->lang == 'fr') { echo ' selected'; } ?>>French</option>
						<option value="de"<?php if ($key->lang == 'de') { echo ' selected'; } ?>>German</option>
						<option value="es"<?php if ($key->lang == 'es') { echo ' selected'; } ?>>Spanish</option>
					</select></p>
				<p><label for='theme'><?php echo __('Theme'); ?>: </label><input type='text' id='theme' name='theme' tabindex='7' title='Theme' value="<?php echo htmlentities($key->theme); ?>"/></p>
				<?php if ($this->user->admin == 'y') { ?>
					<p><label for='admin'><?php echo __('User is Admin'); ?>: </label><input type='checkbox' id='admin' name='admin' tabindex='8' title='Is Admin' <?php echo htmlentities($value_admin)?> /></p>
				<?php } else { ?>
					<p></p>
				<?php } ?>
				<p><label for='sam'><?php echo __('User SAM Access Level'); ?>: </label>
					<select id='sam' name='sam' tabindex='8' title='Is Admin'>
						<option value="0"<?php if ($key->sam == '0') { echo " selected=\"selected\""; } ?>>No Access</option>
						<option value="1"<?php if ($key->sam == '1') { echo " selected=\"selected\""; } ?>>View Reports Only</option>
						<option value="2"<?php if ($key->sam == '2') { echo " selected=\"selected\""; } ?>>Update Counts</option>
						<option value="3"<?php if ($key->sam == '3') { echo " selected=\"selected\""; } ?>>Create Licenses</option>
					</select></p>
				<p><label for='submit'></label><?php echo form_submit(array('id' => 'submit', 'name' => 'submit'), __('Submit') ); ?></p>
			</td>
		</tr>
	</table>
	<input type="hidden" value="<?php echo $key->id; ?>" name="id" id="id" />
	<?php } ?>
	<p><?php echo $error_message; ?>&nbsp;</p>
	<p><?php echo $this->session->flashdata('message'); ?>&nbsp;</p>
	<br />
	<br />
</fieldset>

<?php if (isset($user_group)) {
    ?>
<fieldset class="niceform">
	<br />
	<br />
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Group Access Details'); ?></span></legend>
	<table cellspacing="1" class="tablesorter">
		<thead>
			<tr>
				<th align='center' style='width:120px;'><?php echo __('Systems')?></th>
				<th><?php echo __('Group Name')?></th>
				<th><?php echo __('Group Type')?></th>
				<th><?php echo __('Group Description')?></th>
				<th align='center' class='{sorter: false}'><?php echo __('Access Level')?> - <?php echo group_dropdown(0, 0)?></th>
			</tr>
		</thead>
		<tbody>
			<?php
            foreach ($user_group as $key):
                $tag = 'User Defined';
                if (!isset($key->access_level) or is_null($key->access_level)) {
                    $key->access_level = '0';
                }
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
            				<td align=\"center\">".$key->total."</td>
            				<td><a href=\"".base_url()."index.php/main/list_devices/".$key->group_id."\">".htmlentities($key->group_name)."</a></td>
            				<td>".$tag."</td>
            				<td>".htmlentities($key->group_description)."</td>
            				<td align=\"center\">".group_dropdown(intval($key->group_id), intval($key->access_level))."</td>
            			</tr>";
            endforeach;
            ?>
		</tbody>
	</table>
</fieldset>
<?php } ?>

<?php
function group_dropdown($group_id, $access_level)
{
    if ($group_id == '0') {
        $js = "onchange=\"alter_all_groups();\"";
    } else {
        $js = '';
    }
    if ($access_level == '0') {
        $option_0 =  "<option value='0' selected=\"selected\">";
    } else {
        $option_0 = "<option value='0'>";
    }
    if ($access_level == '3') {
        $option_3 =  "<option value='3' selected=\"selected\">";
    } else {
        $option_3 = "<option value='3'>";
    }
    if ($access_level == '5') {
        $option_5 =  "<option value='5' selected=\"selected\">";
    } else {
        $option_5 = "<option value='5'>";
    }
    if ($access_level == '7') {
        $option_7 =  "<option value='7' selected=\"selected\">";
    } else {
        $option_7 = "<option value='7'>";
    }
    if ($access_level == '10') {
        $option_10 = "<option value='10' selected=\"selected\">";
    } else {
        $option_10 = "<option value='10'>";
    }
    $string = "<select class=\"{sorter: false}\" id=\"group_id_$group_id\" name=\"group_id_$group_id\" $js >
		".$option_0."&nbsp;</option>
		".$option_3.__('List View Only')."</option>
		".$option_5.__('View Basic Details')."</option>
		".$option_7.__('View Sensitive Details')."</option>
		".$option_10.__('Edit Details')."</option>
	</select>\n";
    $string = str_replace("\t", "", $string);
    $string = str_replace("\n", "", $string);

    return $string;
}
?>

<?php if ($this->user->admin == 'y') { ?>
    <script type="text/javascript">
    function alter_all_groups() {
    	totalArray = new Array();
    	var count = 0;
    	<?php $count = 0;
        echo "\n";
        foreach ($user_group as $key) {
            $count++;
            echo "	totalArray[$count] = ".$key->group_id."\n";
        }
        ?>
    	var i=1;
    	for (i=1;i<=<?php echo $count;
        ?>;i++) {
    		document.getElementById("group_id_"+totalArray[i]).value = document.getElementById("group_id_0").value;
    	}
    }
    </script>
<?php } ?>
</form>
</div>
