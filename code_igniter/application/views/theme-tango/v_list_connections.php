<?php
$sortcolumn = 0; 
if (count($query) > 0)
{
?>		
<table cellspacing="1" class="tablesorter">
	<thead>
		<tr>
			<th><?php echo __('Name')?></th>
			<th><?php echo __('Organisation')?></th>
			<th><?php echo __('Location A')?></th>
			<th><?php echo __('Location B')?></th>
			<th><?php echo __('Provider')?></th>
			<th><?php echo __('Type')?></th>
			<th align="right"><?php echo __('Speed')?>&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="center"><?php echo __('Edit')?></th>
			<th align="center"><?php echo __('Delete')?></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		if (count($query) > 0)
		{
			foreach($query as $key):
				if ($key->connection_id > 0 )
				{
					$edit_pic = "<a href=\"edit_connection/" . $key->connection_id . "\"><img src='" . $image_path . "16_edit.png' alt='' title='' width='16'/></a>"; 
					$delete_pic = "<a href=\"delete_connection/" . $key->connection_id . "\"><img src='" . $image_path . "16_delete.png' alt='' title='' width='16'/></a>";
			 ?>
			<tr>
				<td><?php echo $key->name?></td>
				<td><a href="../admin_org/edit_org/<?php echo $key->org_id?>"><?php echo $key->org_name?></a></td>
				<td><a href="../admin_location/edit_location/<?php echo $key->location_id_a?>"><?php echo $key->location_a?></a></td>
				<td><a href="../admin_location/edit_location/<?php echo $key->location_id_a?>"><?php echo $key->location_b?></a></td>
				<td><?php echo $key->provider?></td>
				<td><?php echo $key->service_type?></td>
				<td align="right"><?php echo $key->speed?></td>
				<td align="center"><?php echo $edit_pic?></td>
				<td align="center"><?php echo $delete_pic?></td>
			</tr>
			<?php } ?>
			<?php endforeach; ?>
		<?php } else { ?>
		<tr>
			<td>&nbsp;</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<?php
} else {
	echo "<br />" . __('There are no current connections.') . ".<br />";
}
?>