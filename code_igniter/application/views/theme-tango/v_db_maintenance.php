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
<form class='niceforms' onsubmit="return newdays();">
<div style="float:left;"><?php echo __("Days"); ?>
	<input id="days" name="days" type="text" value="<?php echo $days; ?>" />
	<input type="submit" value="Go" name="Go" id="Go" /></div>
	<?php if (isset($flashdata)) { echo '<div style="float: right;">' . $flashdata . '</div>'; } ?>
<br />&nbsp;
<br />&nbsp;
<br />&nbsp;
<div id="test"></div>
<fieldset id="details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Maintenance')?></span></legend>
	<table cellspacing="1" class="tablesorter">
		<thead>
			<tr>
				<th><?php echo __('Item')?></th>
				<th style="text-align: center;" width="10%"><?php echo __('Count')?></th>
				<th style="text-align: center;" width="10%"><?php echo __('Delete')?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo __("Devices with 'Deleted' status")?></td>
				<td style="text-align: center;"><?php echo $count_status_deleted; ?></td>
				<td style="text-align: center;"><a href="<?php echo $oa_web_index; ?>/admin_db/delete_status_deleted/<?php echo $days; ?>"><img src='<?php echo $oa_theme_images; ?>/16_delete.png' alt='' title='' style='width:16'/></a></td>
			</tr>
			<tr>
				<td><?php echo __("Devices with 'Retired' status")?></td>
				<td style="text-align: center;"><?php echo $count_status_retired; ?></td>
				<td style="text-align: center;"><a href="<?php echo $oa_web_index; ?>/admin_db/delete_status_retired/<?php echo $days; ?>"><img src='<?php echo $oa_theme_images; ?>/16_delete.png' alt='' title='' style='width:16'/></a></td>
			</tr>
			<tr>
				<td><?php echo __("Devices with 'Maintenance' status")?></td>
				<td style="text-align: center;"><?php echo $count_status_maintenance; ?></td>
				<td style="text-align: center;"><a href="<?php echo $oa_web_index; ?>/admin_db/delete_status_maintenance/<?php echo $days; ?>"><img src='<?php echo $oa_theme_images; ?>/16_delete.png' alt='' title='' style='width:16'/></a></td>
			</tr>
			<tr>
				<td><?php echo __("All Alerts"); ?></td>
				<td style="text-align: center;"><?php echo $count_alerts; ?></td>
				<td style="text-align: center;"><a href="<?php echo $oa_web_index; ?>/admin_db/delete_all_alerts/<?php echo $days; ?>"><img src='<?php echo $oa_theme_images; ?>/16_delete.png' alt='' title='' style='width:16'/></a></td>
			</tr>
			<tr>
				<td><?php echo __("Alerts older than")." ".$days." ".__("Days"); ?></td>
				<td style="text-align: center;"><?php echo $count_alerts_days; ?></td>
				<td style="text-align: center;"><a href="<?php echo $oa_web_index; ?>/admin_db/delete_alerts_days/<?php echo $days; ?>"><img src='<?php echo $oa_theme_images; ?>/16_delete.png' alt='' title='' style='width:16'/></a></td>
			</tr>
			<tr>
				<td><?php echo __("Non Current Attributes older than")." ".$days." ".__("Days"); ?></td>
				<td style="text-align: center;"><?php echo $count_non_current_attributes; ?></td>
				<td style="text-align: center;"><a href="<?php echo $oa_web_index; ?>/admin_db/delete_all_non_current_attributes/<?php echo $days; ?>"><img src='<?php echo $oa_theme_images; ?>/16_delete.png' alt='' title='' style='width:16'/></a></td>
			</tr>
			<tr>
				<td><?php echo __("Devices Not Seen For")." ".$days." ".__("Days"); ?></td>
				<td style="text-align: center;"><?php echo $count_not_seen_days; ?></td>
				<td style="text-align: center;"><a href="<?php echo $oa_web_index; ?>/admin_db/delete_systems_not_seen_days/<?php echo $days; ?>"><img src='<?php echo $oa_theme_images; ?>/16_delete.png' alt='' title='' style='width:16'/></a></td>
			</tr>
			<tr>
				<td><?php echo __("Rows in Temp Table"); ?></td>
				<td style="text-align: center;"><?php echo $count_temp; ?></td>
				<td style="text-align: center;"><a href="<?php echo $oa_web_index; ?>/admin_db/delete_all_temp/<?php echo $days; ?>"><img src='<?php echo $oa_theme_images; ?>/16_delete.png' alt='' title='' style='width:16'/></a></td>
			</tr>



			<tr>
				<td><?php echo __("Network Groups with subnets above ") . $this->config->config['network_group_subnet']; ?></td>
				<td style="text-align: center;"><?php echo $network_group_subnet; ?></td>
				<td style="text-align: center;"><a href="<?php echo $oa_web_index; ?>/admin_db/delete_network_group_subnet"><img src='<?php echo $oa_theme_images; ?>/16_delete.png' alt='' title='' style='width:16'/></a></td>
			</tr>

			<tr>
				<td><?php echo __("Network Groups with 0 devices") ?></td>
				<td style="text-align: center;"><?php echo $network_group_count_zero; ?></td>
				<td style="text-align: center;"><a href="<?php echo $oa_web_index; ?>/admin_db/delete_network_group_count_zero"><img src='<?php echo $oa_theme_images; ?>/16_delete.png' alt='' title='' style='width:16'/></a></td>
			</tr>



		</tbody>
	</table>
</fieldset>
<br />
<fieldset id="details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;Attributes that are not current and are older than <?php echo $days ?> days.</span></legend>
	<table cellspacing="1" class="tablesorter">
		<thead>
			<tr>
				<th><?php echo __('Table'); ?></th>
				<th style="text-align: center;" width="10%"><?php echo __('Count')?></th>
				<th style="text-align: center;" width="10%"><?php echo __('Delete')?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($non_current_attributes as $attribute) { ?>
			<tr>
				<td><?php echo $attribute->table; ?></td>
				<td style="text-align: center;"><?php echo $attribute->count; ?></td>
				<td style="text-align: center;"><a href="<?php echo base_url(); ?>index.php/admin_db/delete_table_non_current_attributes/<?php echo $attribute->table; ?>/<?php echo $days; ?>"><img src='<?php echo $oa_theme_images; ?>/16_delete.png' alt='' title='' style='width:16'/></a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</fieldset>
<br />
<fieldset id="details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('All Attributes'); ?></span></legend>
	<table cellspacing="1" class="tablesorter">
		<thead>
			<tr>
				<th>Table</th>
				<th style="text-align: center;" width="10%">Count</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($all_hw_attributes as $attribute) { ?>
			<tr>
				<td><?php echo $attribute->table; ?></td>
				<td style="text-align: center;"><?php echo $attribute->count; ?></td>
			</tr>
			<?php } ?>
			<?php foreach ($all_sw_attributes as $attribute) { ?>
			<tr>
				<td><?php echo $attribute->table; ?></td>
				<td style="text-align: center;"><?php echo $attribute->count; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</fieldset>

<script type="text/javascript">
	function newdays(e){
		window.location.href = "<?php echo $oa_web_index; ?>/admin_db/maintenance/" + document.getElementById("days").value;
		return false;
	}
</script>
