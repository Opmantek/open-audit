<?php
$sortcolumn = 2; 
if ($query)
{
?>
<table cellspacing="1" class="tablesorter">
	<thead>
		<tr>
			<th align="center" style="width:120px;"><?php echo __('Hostname')?></th>
			<th align="center" style="width:120px;"><?php echo __('Table')?></th>
			<th align="center" style="width:120px;"><?php echo __('Attribute')?></th>
			<th align="center" style="width:120px;"><?php echo __('Result')?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($query as $key): ?>
		<?php 
			// format the table and field names
			$key->table = str_replace("sys_hw_", "", $key->table);
			$key->table = str_replace("sys_sw_", "", $key->table);
			$key->table = str_replace("_", " ", $key->table);
			$key->table = ucwords($key->table);
			
			$key->field = str_replace("sys_hw_", "", $key->field);
			$key->field = str_replace("sys_sw_", "", $key->field);
			$key->field = str_replace("_", " ", $key->field);
			$key->field = ucwords($key->field);
		?>
			
		<tr>
			<td align="center"><a class="SystemPopupTrigger" rel="<?php echo $key->system_id; ?>" href="<?php echo site_url(); ?>/main/system_display/<?php echo $key->system_id; ?>"><?php echo $key->hostname; ?></a></td>
			<td align="center"><?php echo $key->table?></td>
			<td align="center"><?php echo $key->field?></td>
			<td align="center"><?php echo $key->result?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?php
} else {
	echo "<br />" . __('There are no search results') . ".<br />";
}
?>
