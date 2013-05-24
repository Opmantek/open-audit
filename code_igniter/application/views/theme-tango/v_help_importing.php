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
	<b>import_access_tokens.xls</b> - Access tokens like RSA hardware keys.<br />
	<b>import_computers.xls</b> - Computers.<br />
	<b>import_networked_devices</b> - Generic devices on your network, usually containing a hostname &amp;/or ip address.<br />
	<br />
	We are adding more device types all the time. If you have a specific device type you would like catered for, please let us know via the forums. Valid types of items in the Open-AudIT database are:
	<ul>
		<li>access token</li>
		<li>cable modem</li>
		<li>cell phone</li>
		<li>computer</li>
		<li>firewall</li>
		<li>game console</li>
		<li>ip phone</li>
		<li>mobile modem</li>
		<li>network printer</li>
		<li>phone</li>
		<li>printer</li>
		<li>router</li>
		<li>satellite phone</li>
		<li>smart phone</li>
		<li>switch</li>
		<li>tablet</li>
	<ul>
	<br />
	</fieldset>
</div>
</form>