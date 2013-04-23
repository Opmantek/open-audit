<?php
$sortcolumn = 0; 
if (count($query) > 0)
{
?>		
<table cellspacing="1" class="tablesorter">
	<thead>
		<tr>
			<th><?php echo __('Name')?></th>
			<th><?php echo __('Type')?></th>
			<th><?php echo __('Placement')?></th>
			<th><?php echo __('Group')?></th>
			<th align="center"><?php echo __('Edit')?></th>
			<th align="center"><?php echo __('Delete')?></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		if (count($query) > 0)
		{
			foreach($query as $key):
				if ($key->field_id > 0 )
				{
					$edit_pic = "<a href=\"edit_field/" . $key->field_id . "\"><img src='" . $image_path . "16_edit.png' alt='' title='' width='16'/></a>"; 
					$delete_pic = "<a href=\"delete_field/" . $key->field_id . "\"><img src='" . $image_path . "16_delete.png' alt='' title='' width='16'/></a>";
			 ?>
			<tr>
				<td><a href="../admin_field/edit_field/<?php echo $key->field_id?>"><?php echo $key->field_name?></a></td>
				<td><?php echo $key->field_type?></a></td>
				<td><?php echo $key->field_placement?></a></td>
				<td><?php echo $key->group_id?></a></td>
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
			<td></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<?php
} else {
	echo "<br />" . __('There are no current custom fields.') . ".<br />";
}
?>
