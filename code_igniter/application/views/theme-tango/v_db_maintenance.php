<form class="niceforms" onsubmit="return newdays();">
<div style="float:left;"><?php echo __("Days"); ?> 
	<input id="days" name="days" type="text" value="<?php echo $days; ?>" /> 
	<input type="submit" value="Go" name="Go" id="Go" /></div>
<div style="float: right;">
	<?php if (isset($flashdata)) { echo $flashdata; } ?>
</div>
<br />&nbsp;
<br />&nbsp;
<br />&nbsp;
<div id="test"></div>
<fieldset id="details" class="niceforms">
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Maintenance')?></span></legend>
	<table cellspacing="1" class="tablesorter">
		<thead>
			<tr>
				<th>Item</th>
				<th style="text-align: center;" width="10%">Count</th>
				<th style="text-align: center;" width="10%">Delete</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo __("All Non Production Devices")?></td>
				<td style="text-align: center;"><?php echo $count_non_prod; ?></td>
				<td style="text-align: center;"><a href="<?php echo base_url()?>index.php/admin_db/delete_non_production_systems/<?php echo $days; ?>"><img src='<?php echo $image_path; ?>16_delete.png' alt='' title='' width='16'/></a></td>
			</tr>
			<tr>
				<td><?php echo __("All Alerts"); ?></td>
				<td style="text-align: center;"><?php echo $count_alerts; ?></td>
				<td style="text-align: center;"><a href="<?php echo base_url()?>index.php/admin_db/delete_all_alerts/<?php echo $days; ?>"><img src='<?php echo $image_path; ?>16_delete.png' alt='' title='' width='16'/></a></td>
			</tr>
			<tr>
				<td><?php echo __("Alerts older than") . " " . $days . " " . __("Days"); ?></td>
				<td style="text-align: center;"><?php echo $count_alerts_days; ?></td>
				<td style="text-align: center;"><a href="<?php echo base_url()?>index.php/admin_db/delete_alerts_days/<?php echo $days; ?>"><img src='<?php echo $image_path; ?>16_delete.png' alt='' title='' width='16'/></a></td>
			</tr>
			<tr>
				<td><?php echo __("Noncurrent Attributes older than") . " " . $days . " " . __("Days"); ?></td>
				<td style="text-align: center;"><?php echo $count_non_current_attributes; ?></td>
				<td style="text-align: center;"><a href="<?php echo base_url()?>index.php/admin_db/delete_all_non_current_attributes/<?php echo $days; ?>"><img src='<?php echo $image_path; ?>16_delete.png' alt='' title='' width='16'/></a></td>
			</tr>
			<tr>
				<td><?php echo __("Devices Not Seen For") . " " . $days . " " . __("Days"); ?></td>
				<td style="text-align: center;"><?php echo $count_not_seen_days; ?></td>
				<td style="text-align: center;"><a href="<?php echo base_url()?>index.php/admin_db/delete_systems_not_seen_days/<?php echo $days; ?>"><img src='<?php echo $image_path; ?>16_delete.png' alt='' title='' width='16'/></a></td>
			</tr>
		</tbody>
	</table>
</fieldset>
<br />
<fieldset id="details" class="niceforms">
	<legend><span style="font-size: 12pt;">&nbsp;Attributes that are not current and are older than <?php echo $days ?> days.</span></legend>
	<table cellspacing="1" class="tablesorter">
		<thead>
			<tr>
				<th>Table</th>
				<th style="text-align: center;" width="10%">Count</th>
				<th style="text-align: center;" width="10%">Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($non_current_attributes as $attribute) { ?><tr>
				<td><?php echo $attribute->table; ?></td>
				<td style="text-align: center;"><?php echo $attribute->count; ?></td>
				<td style="text-align: center;"><a href="<?php echo base_url(); ?>index.php/admin_db/delete_table_non_current_attributes/<?php echo $attribute->table; ?>/<?php echo $days; ?>"><img src='<?php echo $image_path; ?>16_delete.png' alt='' title='' width='16'/></a></td>
			</tr><?php } ?>
		</tbody>
	</table>
</fieldset>


<script type="text/javascript">
	function newdays(e){
		window.location.href = "<?php echo base_url()?>index.php/admin_db/maintenance/" + document.getElementById("days").value;
		return false;
	}
</script>