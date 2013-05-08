<?php
# comment
?>
<form action="#" method="post" class="niceforms">
	<fieldset id="org_details" class="niceforms">
		<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Error')?></span></legend>
		<?php if (isset($error)) { echo $error . "<br />\n"; } ?>
		<br /><a href="javascript:history.back();" style="color:blue;">Go back</a> and try again.<br />
		<pre><?php if (isset($query)) { print_r($query); } ?></pre>
	</fieldset>
</form>
</div>
</div>
