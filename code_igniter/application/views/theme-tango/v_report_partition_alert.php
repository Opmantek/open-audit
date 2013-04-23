<?php 
$sortcolumn = 0;
?>
<table cellspacing="1" class="tablesorter" width="900">
	<thead>
		<tr>
			<th><?php echo __('System Name')?></th>
			<th><?php echo __('Partition Name')?></th>
			<th align="center"><?php echo __('Mount Point')?></th>
			<th align="center"><?php echo __('Environment')?></th>
			<th align="center"><?php echo __('Function')?></th>
			<th align="center"><?php echo __('Size - MiB')?></th>
			<th align="center"><?php echo __('Used - MiB')?></th>
			<th align="center"><?php echo __('Free - MiB')?></th>
			<th align="center"><?php echo __('Free - %')?></th>
			<th align="center"><?php echo __('Change per Day (MiB)')?></th>
			<th align="center"><?php echo __('Days until 100%')?></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($query as $key): 
	if ($key["partition_free_space"] == 0)
	{
		$percent_free = "0";
	} else {
		$percent_free = round((($key["partition_free_space"] / $key["partition_size"]) * 100), 2); 
	}
	if ( ($key["days_until_used"] < $days) && ($key["days_until_used"] != 'unknown') )
	{
	?>
		<tr>
			<td><a href="<?php echo base_url()?>index.php/main/system_display/<?php echo $key["system_id"]?>"><?php echo $key["hostname"]?></a></td>
			<td align="left"><?php echo $key["partition_name"]?></td>
			<td align="center"><a href="<?php echo base_url()?>index.php/main/disk_graph/<?php echo $key["system_id"] . "/" . $key["partition_id"]?>"><?php echo $key["partition_mount_point"] ?></a></td>
			<td align="center"><?php echo $key["man_environment"]?></td>
			<td align="center"><?php echo $key["man_function"]?></td>
			<td align="center"><span style="display: none;"><?php echo ($key["partition_size"] )?></span><?php echo number_format($key["partition_size"])?></td>
			<td align="center"><span style="display: none;"><?php echo ($key["partition_used_space"] )?></span><?php echo number_format($key["partition_used_space"])?></td>
			<td align="center"><span style="display: none;"><?php echo ($key["partition_free_space"])?></span><?php echo number_format($key["partition_free_space"])?></td>
			<td align="center"><?php echo $percent_free;?></td>
			<td align="center"><?php echo "<span style=\"display: none;\">" . $key["change_per_day"] . "</span>" . number_format(round($key["change_per_day"],0));?></td>
			<td align="center"><?php echo $key["days_until_used"];?></td>
		</tr>
	<?php } else {} ?>
	<?php endforeach; ?>
	<?php if (count($query) == 0) { echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>\n"; } ?>
	</tbody>
</table>