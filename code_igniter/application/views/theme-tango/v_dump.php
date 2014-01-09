<?php
# dumps out various variables - used in debugging / creating controller functions
?>
<form action="#" method="post" class="niceforms">
	<fieldset id="details" class="niceforms">
		<legend><span style="font-size: 12pt;">&nbsp;Dump</span></legend>
		<pre><?php if (isset($query)) { print_r($query); } ?></pre>
	</fieldset>
</form>
</div>
</div>
