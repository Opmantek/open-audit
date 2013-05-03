<form action="vars.php" method="post" class="niceforms">
<div id="i1" >
	<br />
	<fieldset class="niceforms">
		<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Importing Devices ?')?></span></legend>
	When importing devices using an Excel spreadsheet, it is best to use the templates provided in /other/imports.<br />
	Some templates can be used for importing multiple device types. For example the "import_phones.xls" template can be used for: 
	3g modems, cell phones, ip phones, mobile modems, phones, satellite phones and smart phones.<br />
	The columns in the templates are coloured to reflect the following:<br />
	<span style="color:red;">RED</span> columns are for attributes that are mandatory and have to be unique.<br />
	<span style="color:blue;">BLUE</span> columns are where the attribute is mandatory but not necessarily unique.<br />
	<span style="color:black;">BLACK</span> columns are for optional items.<br />
	Naturally the more columns you can complete, the better your datastore will be.<br />
	These items (once imported) can be reported on and changed via the web interface. You can also export them via a Report.<br />
	Device Types per supplied spreadsheets are:<br />
	<b>import_phones.xls</b> - 3g modem, cell phone, ip phone, mobile modem, phone, satellite phone, smart phone.<br />
	<br />
	<br />
	</fieldset>
</div>
</form>