<form action="vars.php" method="post" class="niceforms">
	<fieldset id="about" class="niceforms">
		<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Upgrade Details')?></span></legend>
		<h4>Upgrade Message</h4>
		<hr />
		<?php echo $message; ?>
		<hr /><br /><br /><h4>Database Queries</h4>
		<?php echo $output; ?>
	</fieldset>
</form>
