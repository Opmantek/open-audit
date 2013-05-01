<?php $sortcolumn = 1; 
if (count($query) > 1) { ?>		
<pre>
<?php #print_r($query); ?>
</pre>
<table cellspacing="1" class="tablesorter">
	<thead>
		<tr>
			<th><?php echo __('Name')?></th>
			<th align="center" width="120" class="{sorter: false}"><?php echo __('Activate Report')?></th>
			<th align="center" width="120" ><?php echo __('Already Active')?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($query as $key): ?>
			<?php if ($key['report_name'] > '') { ?>
				<tr>
					<td><?php echo $key['report_name']; ?></td>
					<?php if ($key['activated']) { ?>
						<td align="center"><a href="action_deactivate_report/<?php echo $key['activated'];?>"><img src="<?php echo $image_path; ?>16_delete.png" alt="" title="" width="16"/></a></td>
						<td align="center"><?php echo __('yes')?></td>
					<?php } else { ?>
						<td align="center"><a href="action_activate_report/<?php echo $key['file']; ?>"><img src="<?php echo $image_path; ?>16_true.png"   alt="" title="" width="16"/></a></td>
						<td align="center"></td>
					<?php } ?>
				</tr>
				<?php } ?>
		<?php endforeach; ?>
	</tbody>
</table>
<?php } ?>