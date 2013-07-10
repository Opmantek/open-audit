<div id="view_summary_alerts" style="float: left; width: 100%;">
	<br />
	<form action="#" method="post" class="niceforms">
	<fieldset id="config_details">
		<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Config')?></span></legend>
		<div style="min-width: 50px; float: right;">
		</div>
		<div style="width: 100%; float:left;">
		<table cellspacing="1" class="tablesorter" width="100%">
			<thead>
				<tr>
					<th><?php echo __('Config Name')?></th>
					<th><?php echo __('Config Value')?></th>
					<th><?php echo __('Description')?></th>
					<th><?php echo __('Last Editied By')?></th>
					<th><?php echo __('Last Edited On')?></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($query as $item) { ?>
				<tr>
					<td width='150px' align="right"><br /><label for='<?php echo __($item->config_name)?>'><?php echo __($item->config_name)?>: </label></td>
					<td align='left' width='250px'><br />
						<?php if ($item->config_editable == "y") {
							if ($item->config_value == '') { $item->config_value = '-'; } ?>
							<span id='<?php echo __($item->config_name)?>' name='<?php echo __($item->config_name)?>' class="editText" style="color:blue;"><?php echo $item->config_value; ?></span>
						<?php } else { ?>
							<span id='<?php echo __($item->config_name)?>' name='<?php echo __($item->config_name)?>'><?php echo $item->config_value; ?></span>
						<?php } ?>
					</td>
					<td><br /><?php echo $item->config_description; ?></td>
					<td><br /><?php echo $item->user_full_name; ?></td>
					<td><br /><?php echo $item->config_edited_date; ?></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</fieldset>
</div>

</div>
</div>
