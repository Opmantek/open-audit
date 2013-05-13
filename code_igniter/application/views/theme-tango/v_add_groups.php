<?php
$sortcolumn = 3; 
if (count($query) > 1)
{
?>


		<?php #echo "<pre>"; print_r($query); echo "</pre>\n"; ?>

<table cellspacing="1" class="tablesorter">
	<thead>
		<tr>
			<th><?php echo __('Icon')?></th>
			<th><?php echo __('Name')?></th>
			<th><?php echo __('Description')?></th>
			<th align="center" width="120" class="{sorter: false}"><?php echo __('Activate Group')?></th>
			<th align="center" width="120" ><?php echo __('Already Active')?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($query as $key): ?>
			<?php if ($key['group_name'] > '') { ?>
			<tr>
				<td align="center" width="20"><img src="<?php echo $image_path . '16_' . $key['group_icon']; ?>.png"/></td>
				<td><?php echo $key['group_name']; ?></td>
				<td><?php echo preg_replace("/(\w+) attribute/", "<i>$1</i> attribute", $key['group_description']); ?></td>
				
				<?php if ($key['activated']) { ?>
					<?php if ($key['activated'] != '1') { ?>
						<td align="center"><?php echo "<a href=\"action_delete_group/" . $key['activated'] . "\"><img src='" . $image_path . "16_delete.png' alt='' title='' width='16'/></a>";?></td>
						<td align="center">yes</td>
					<?php } else { ?>
						<td align="center"></td>
						<td align="center">yes</td>
					<?php } ?>
				<?php } else { ?>
					<td align="center"><?php echo "<a href=\"action_activate_group/" . $key['file'] . "\"><img src='" . $image_path . "16_true.png' alt='' title='' width='16'/></a>";?></td>
					<td align="center"></td>
				<?php } ?>
			</tr>
			<?php } ?>
			<?php endforeach; ?>
		<?php } ?>
	</tbody>
</table>
