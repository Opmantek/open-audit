<?php
$sortcolumn = 1; 
if ($query) {
	echo "<div style=\"float:left; width:100%;\">\n";
	$attributes = array('id' => 'alertform', 'name' => 'alertform');
	echo form_open('change/edit_alert', $attributes) . "\n"; 
	?>
	<input type="hidden" name="group_id" value="<?php echo $group_id; ?>" />
	<table cellspacing="1" class="tablesorter">
		<thead>
			<tr>
				<th width="130"><?php echo __('Timestamp')?></th>
				<th width="100"><?php echo __('IP address')?></th>
				<th width="110"><?php echo __('System Name')?></th>
				<th width="140"><?php echo __('System Description')?></th>
				<th><?php echo __('Details')?></th>
				<th  width="150" align="middle" class="{sorter: false}">
					<button onClick="document.alertform.submit();"><?php echo __('Acknowledge') ?></button>	
					<input type="checkbox" valign="absmiddle" id="alert_id_0" name="alert_id_0" onchange="alter_all_alerts();"/>
				</th>
			</tr>
		</thead>
		<tbody>
	<?php foreach($query as $key): ?>
			<tr>
				<td><?php echo $key->timestamp?></td>
				<td><span style="display: none;"><?php echo $key->man_ip_address?></span><?php echo ip_address_from_db($key->man_ip_address)?></td>
				<td><a class="SystemPopupTrigger" rel="<?php echo $key->system_id;?>" href="<?php echo base_url()?>index.php/main/system_display/<?php echo $key->system_id?>"><?php echo $key->hostname?></a></td>
				<td><?php echo $key->man_description?></td>
				<td><?php echo $key->alert_details?></td>
				<td align="center"><input type="checkbox" id="alert_id_<?php echo $key->alert_id?>" name="alert_id_<?php echo $key->alert_id?>" /></td>
			</tr>
	<?php endforeach; ?>
		</tbody>
	</table>
	</form>
	</div>
<?php
} else {
	echo "<div>\n<br />" . __('There are no current alerts') . ".<br />\n</div>";
}
?>

<script type="text/javascript">

function alter_all_alerts()
{
if (document.getElementById("alert_id_0").checked == true) 
{
<?php
foreach($query as $key):
echo "\tdocument.getElementById(\"alert_id_" . $key->alert_id . "\").checked = true;\n";
endforeach;
?>
} else {
<?php
foreach($query as $key):
echo "\tdocument.getElementById(\"alert_id_" . $key->alert_id . "\").checked = false;\n";
endforeach;
?>
}

}
</script>
