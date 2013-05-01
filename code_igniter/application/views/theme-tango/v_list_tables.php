<table cellspacing="1" class="tablesorter">
	<thead>
		<tr>
			<th><?php echo __('Table')?></th>
			<th align="center"><?php echo __('Rows')?></th>
			<th align="center" class="{sorter: false}"><?php echo __('Excel')?></th>
			<th align="center" class="{sorter: false}"><?php echo __('Web')?></th>
			<th align="center" class="{sorter: false}"><?php echo __('CSV')?></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		foreach($query as $key)
		{
		?>
			<tr>
			<td><?php echo $key['table']; ?></td>
			<td align="center"><?php echo $key['rows']; ?></td>
			<td align="center"><a href="<?php echo base_url()?>index.php/admin_db/export_table_to_excel/<?php echo $key['table']; ?>" ><img src="<?php echo $image_path; ?>16_excel.png" alt="" title="" width="16"/></a></td>
			<td align="center"><a href="<?php echo base_url()?>index.php/admin_db/export_table_to_html/<?php echo $key['table']; ?>" ><img src="<?php echo $image_path; ?>16_browser.png" alt="" title="" width="16"/></a></td>
			<td align="center"><a href="<?php echo base_url()?>index.php/admin_db/export_table_to_csv/<?php echo $key['table']; ?>" ><img src="<?php echo $image_path; ?>16_csv.png" alt="" title="" width="16"/></a></td>
			</tr>
		<?php 
		}
		?>
	</tbody>
</table>
