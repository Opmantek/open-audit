<table cellspacing="1" class="tablesorter">
	<thead>
		<tr>
			<th align="center" class="{sorter: false}">Icon</th>
			<th align="center" style="width:100px;"><?php echo __('Systems')?></th>
			<th><?php echo __('Name')?></th>
			<th><?php echo __('Type')?></th>
			<th><?php echo __('Description')?></th>
			<th><?php echo __('Category')?></th>
			<th align="center" class="{sorter: false}"><?php echo __('Edit')?></th>
			<th align="center" class="{sorter: false}"><?php echo __('Export')?></th>
			<th align="center" class="{sorter: false}"><?php echo __('Update')?></th>
			<th align="center" class="{sorter: false}"><?php echo __('Delete')?></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		foreach($query as $key):
			$tag = 'User Defined'; 
			$edit_pic = "<a href=\"edit_group/" . $key->group_id . "\"><img src='" . $image_path . "16_edit.png' alt='' title='' width='16'/></a>"; 
			$export_pic = "<a href=\"export_group/" . $key->group_id . "\"><img src='" . $image_path . "16_text-x-generic-template.png' alt='' title='' width='16'/></a>";
			$delete_pic = "<a href=\"delete_group/" . $key->group_id . "\"><img src='" . $image_path . "16_delete.png' alt='' title='' width='16'/></a>";
			$update_pic = "<a href=\"update_group/" . $key->group_id . "\"><img src='" . $image_path . "16_update.png' alt='' title='' width='16'/></a>";
		 ?>
		<tr>
			<td align="center"><img src="<?php echo $image_path;?>16_<?php echo $key->group_icon;?>.png" border="0" title="<?php echo $key->group_icon;?>" alt="<?php echo $key->group_icon;?>" /></td>
			<td align="center"><?php echo $key->total?></td>
			<?php if ($key->group_padded_name > "") { ?>
				<td><span style="display: none;"><?php echo $key->group_padded_name?></span><a href="<?php echo base_url()?>index.php/main/list_devices/<?php echo $key->group_id?>"><?php echo $key->group_name?></a></td>
			<?php } else { ?>
				<td><a href="<?php echo base_url()?>index.php/main/list_devices/<?php echo $key->group_id?>"><?php echo $key->group_name?></a></td>
			<?php } ?>
			<td align="center"><?php echo $key->group_category?></td>
			<td><?php echo $key->group_description?></td>
			<td align="center"><?php echo $key->group_category?></td>
			<td align="center"><?php echo $edit_pic?></td>
			<td align="center"><?php echo $export_pic?></td>
			<td align="center"><?php echo $update_pic?></td>
			<td align="center"><?php if ($key->group_id != '1') {echo $delete_pic; } ?> </td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
