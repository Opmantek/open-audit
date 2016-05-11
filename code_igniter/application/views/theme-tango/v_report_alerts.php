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
$sortcolumn = 1;
if ($query) {
    echo "<div style=\"float:left; width:100%;\">\n";
    $attributes = array('id' => 'alertform', 'name' => 'alertform');
    echo form_open('change/edit_alert', $attributes)."\n";
    ?>
	<input type="hidden" name="group_id" value="<?php echo $group_id;
    ?>" />
	<table cellspacing="1" class="tablesorter">
		<thead>
			<tr>
				<th><?php echo __('Timestamp')?></th>
				<th><?php echo __('IP address')?></th>
				<th style="text-align: center;">Icon</th>
				<th><?php echo __('System Name')?></th>
				<th><?php echo __('DB Table')?></th>
				<th><?php echo __('DB Action')?></th>
				<th><?php echo __('Details')?></th>
				<th  width="150" align="middle" class='{sorter: false}'>
					<button onclick="document.alertform.submit();"><?php echo __('Acknowledge') ?></button>
					<input type="checkbox" valign="absmiddle" id="alert_id_0" name="alert_id_0" onchange="alter_all_alerts();"/>
				</th>
			</tr>
		</thead>
		<tbody>
	<?php foreach ($query as $key): ?>
			<tr>
				<td><?php echo $key->timestamp?></td>
				<td><span style="display: none;"><?php echo $key->man_ip_address?></span><?php echo ip_address_from_db($key->man_ip_address)?></td>
				<td style="text-align: center;"><img src="<?php echo $oa_theme_images ?>/16_<?php echo $key->icon; ?>.png" style='border-width:0px;' title="" alt=""/></td>
				<td><a class="SystemPopupTrigger" rel="<?php echo intval($key->system_id); ?>" href="<?php echo base_url()?>index.php/main/system_display/<?php echo intval($key->system_id)?>"><?php echo htmlentities($key->hostname)?></a></td>
				<td><?php echo htmlentities($key->db_table)?></td>
				<td><?php echo htmlentities($key->db_action)?></td>
				<td><?php echo htmlentities($key->details)?></td>
				<td align='center'><input type="checkbox" id="alert_id_<?php echo intval($key->id)?>" name="alert_id_<?php echo intval($key->id)?>" /></td>
			</tr>
	<?php endforeach;
    ?>
		</tbody>
	</table>
	</form>
	</div>
<?php

} else {
    echo "<div>\n<br />".__('There are no current alerts').".<br />\n</div>";
}
?>

<script type="text/javascript">

function alter_all_alerts()
{
if (document.getElementById("alert_id_0").checked == true)
{
<?php
foreach ($query as $key):
echo "\tdocument.getElementById(\"alert_id_".$key->alert_id."\").checked = true;\n";
endforeach;
?>
} else {
<?php
foreach ($query as $key):
echo "\tdocument.getElementById(\"alert_id_".$key->alert_id."\").checked = false;\n";
endforeach;
?>
}

}
</script>
