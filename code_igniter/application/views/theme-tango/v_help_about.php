<?php
$sortcolumn = 2;


if (php_uname('s') == "Windows NT") {
	exec("echo. |WMIC OS Get Caption", $output);
	if (isset($output[1])) {
		$operating_system = $output[1];
	} else {
		$operating_system = "unknown (You must run XAMPPLite as an administrator on Windows to determine this)";
	}
	
} else {
	$operating_system = php_uname('s');
}

$upgrade_message = "";
if (($config->display_version != $this->config->item('web_display_version')) AND ($this->session->userdata('user_admin') == 'y')) {
	$upgrade_message = "<span style='color: blue;'>You should <a style='color: red;' href='" . site_url() . "/admin/upgrade'>upgrade</a> your database.</span>";
}
if (($config->display_version != $this->config->item('web_display_version')) AND ($this->session->userdata('user_admin') != 'y')) {
	$upgrade_message = "<br /><span style='color: blue;'>The database version and web version are inconsistent. <br />Please have an Open-AudIT administrator logon and upgrade the database.</span>";
}
?>
<form action="vars.php" method="post" class="niceforms">
	<fieldset id="about" class="niceforms">
		<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('About')?></span></legend>
		You are running version <?php echo $config->display_version; ?> of Open-AudIT. <?php echo $upgrade_message; ?><br />
		<?php if ($this->session->userdata('user_admin') == 'y') { ?>
		Your Host is: <?php echo php_uname('n'); ?>, and it's OS is <?php echo $operating_system; ?>.<br />
		Your database platform is <?php echo $this->db->platform() . " (version " . $this->db->version() . ")"; ?>.<br />
		Your web server is <?php echo getenv("SERVER_SOFTWARE"); ?> .
		<?php } ?>
		<br /><br />
		Open-AudIT is :
		<ul>
			<li>Licensed under with GNU AGPL.</li>
			<li>Written in the PHP scripting language.</li>
			<li>Using the CodeIgniter PHP Framework.</li>
		</ul>
		<br />
		Some other technologies Open-AudIT uses are:
		<ul>
			<li>jQuery javascript framework</li>
			<li>MySQL - our default database</li>
			<li>Apache - our default webserver</li>
			<li>xHTML W3C standards</li>
		</ul>
		Please visit the homepage at <a href="http://www.open-audit.org" style="color: blue;">http://www.open-audit.org</a>, and don't be shy to sign up to the forums.<br />
		Consulting, implementation and other services are available through <a href="https://opmantek.com" style="color: blue;">Opmantek</a>.<br /><br />
		We hope you find Open-AudIT as useful as we do.<br />
	</fieldset>
</form>
<table>
	<tr style="height:200px;">
		<td style="vertical-align: middle;"><a href="http://www.fsf.org/licensing/licenses/agpl.html"><img src='<?php echo $image_path;?>logo-agpl.png' width='120' alt=''/></a></td>
		<td style="vertical-align: middle;"><a href="http://www.php.net"><img src='<?php echo $image_path;?>logo-php.png' width='120' alt=''/></a></td>
		<td style="vertical-align: middle;"><a href="http://www.codeigniter.com"><img src='<?php echo $image_path;?>logo-code_igniter.png' width='120' alt=''/></a></td>
		<td style="vertical-align: middle;"><a href="http://jquery.com/"><img src='<?php echo $image_path;?>logo-jquery.png' width='120' alt=''/></a></td>
		<!--
		<td style="vertical-align: middle;"><a href="http://www.mysql.com/"><img src='<?php echo $image_path;?>logo-mysql.png' width='120' alt=''></a></td>
		<td style="vertical-align: middle;"><a href="http://www.apache.org/"><img src='<?php echo $image_path;?>logo-apache.jpg' width='120' alt=''></a></td>
		-->
		<td style="vertical-align: middle;"><a href="http://www.w3.org/"><img src='<?php echo $image_path;?>logo-w3c.png' width='120' alt=''/></a></td>
		<td style="vertical-align: middle;"><a href="http://mapicons.nicolasmollet.com/"><img src='<?php echo $image_path;?>logo-miclogo-88x31.gif' width='120' alt=''/></a></td>
	</tr>
</table>