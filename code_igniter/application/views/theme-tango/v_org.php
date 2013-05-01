<?php
# comment
?>
<form action="#" method="post" class="niceforms">
	<fieldset id="org_details" class="niceforms">
		<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Organisation Details')?></span></legend>
		<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_home.png' alt='' title='' width='48'/>
		<?php #if ($org->org_parent_id == '0') { $org->org_parent_id = ''; } ?>
		<?php if ($org->org_parent_id == '0') { $org->org_parent_name = 'Default Organisation'; } ?>
		<?php $org->org_picture = "<img id='org_picture' name='org_picture' title='Picture' src='<?php echo $org->org_picture?>' />"; ?>
		<?php $org->org_picture = ""; ?>
		<table cellpadding = "0" cellspacing="0">
			<tr>
				<td>
					<p><label for='org_name'><?php echo __("Name")?>: </label><span id='org_name' name='org_name'><?php echo $org->org_name?></span></p>
					<p><label for='org_devices'><?php echo __("# Devices")?>: </label><span id='org_devices' name='org_devices'><?php echo $org->total?></span></p>
					<p><label for='org_parent'><?php echo __("Parent Org")?>: </label><span id='org_parent' name='org_parent'><a href='<?php echo $org->org_parent_id?>'><?php echo $org->org_parent_name?></a></span></p>
					<p><label for='org_comments'><?php echo __("Comments")?>: </label><span id='org_comments' name='org_comments'><?php echo $org->org_comments?></span></p>	
					<p><label for='org_picture'><?php echo __("Picture")?>: </label><?php echo $org->org_picture?></p>
				</td>
			</tr>
		</table>
	</fieldset>
</form>
</div>
</div>
