<?php
$sortcolumn = 2; 
if ($query)
{
?>		
<table cellspacing="1" class="tablesorter">
	<thead>
		<tr>
			<th><?php echo __('User Name')?></th>
			<th><?php echo __('User Full Name')?></th>
			<th><?php echo __('User Email')?></th>
			<th align="center"><?php echo __('User Admin')?></th>
			<th align="center" class="{sorter: false}"><?php echo __('Edit')?></th>
			<th align="center" class="{sorter: false}"><?php echo __('Deactivate')?></th>
			<th align="center" class="{sorter: false}"><?php echo __('Activate')?></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		foreach($query as $key):
			$edit_pic = "<a href=\"edit_user/" . $key->user_id . "\"><img src='" . $image_path . "16_edit.png' alt='' title='' width='16'/></a>"; 
			$delete_pic = "<a href=\"delete_user/" . $key->user_id . "\"><img src='" . $image_path . "16_delete.png' alt='' title='' width='16'/></a>";
			if ($key->user_admin == 'y') {
				$admin_pic = "<img src='" . $image_path . "16_true.png' alt='' title='' width='16'/>";
			} else {
				$admin_pic = "<img src='" . $image_path . "16_false.png' alt='' title='' width='16'/>";
				$admin_pic = "";
			}
			if ($key->user_active == 'y') {
				$deactivate_pic = "<a href=\"deactivate_user/" . $key->user_id . "\"><img src='" . $image_path . "16_delete.png' alt='' title='' width='16'/></a>";
				$activate_pic = "";
			} else {
				$deactivate_pic = "";
				$activate_pic = "<a href=\"activate_user/" . $key->user_id . "\"><img src='" . $image_path . "16_true.png' alt='' title='' width='16'/></a>";
			}

		 ?>
			<tr>
				<td><?php echo $key->user_name?></td>
				<td><?php echo $key->user_full_name?></td>
				<td><?php echo $key->user_email?></td>
				<td align="center"><?php echo $admin_pic?></td>
				<td align="center"><?php echo $edit_pic?></td>
				<td align="center"><?php echo $deactivate_pic?></td>
				<td align="center"><?php echo $activate_pic?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<?php
} else {
	echo "<br />" . __('There are no current users') . ".<br />";
}
?>