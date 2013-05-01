<?php
$sortcolumn = 2; 
if (count($query) > 0)
{
?>		
<table cellspacing="1" class="tablesorter">
	<thead>
		<tr>
			<th><?php echo __('Name')?></th>
			<th align="center" width="120" class="{sorter: false}"><?php echo __('Edit Report')?></th>
			<th align="center" width="120" class="{sorter: false}"><?php echo __('Export Report')?></th>
			<th align="center" width="120" class="{sorter: false}"><?php echo __('Delete Report')?></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		if (count($query) > 0)
		{
			foreach($query as $key):
				if ($key->report_id > 0 )
				{
					$edit_pic = "<a href=\"edit_report/" . $key->report_id . "\"><img src='" . $image_path . "16_edit.png' alt='' title='' width='16'/></a>"; 
					$export_pic = "<a href=\"export_report/" . $key->report_id . "\"><img src='" . $image_path . "16_text-x-generic-template.png' alt='' title='' width='16'/></a>";
					$delete_pic = "<a href=\"delete_report/" . $key->report_id . "\"><img src='" . $image_path . "16_delete.png' alt='' title='' width='16'/></a>";
			 ?>
			<tr>
				<td><?php echo $key->report_name?></td>
				<td align="center"><?php echo $edit_pic?></td>
				<td align="center"><?php echo $export_pic?></td>
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
		</tr>
		<?php } ?>
	</tbody>
</table>
<?php
} else {
	echo "<br />" . __('There are no current reports') . ".<br />";
}
?>
