<?php
$sortcolumn = 2; 
?>
<form action="#" method="post" class="niceforms">
	<fieldset id="stats" class="niceforms">
		<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Statistics')?></span></legend>
		<?php echo __('Your Open-AudIT v2.0 database contains:')?>
		<table class="tablesorter">
			<thead>
				<tr>
					<th><?php echo __('OS Family')?></th><th><?php echo __('Count')?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($stats as $stat) { echo "\t\t\t\t\t<tr><td>" . $stat->os_family . "</td><td>" . $stat->count . "</td></tr>\n";} ?>
			</tbody>
		</table>
		<?php
		$stat_submit = "<stats>%0A";
		$stat_submit .= "<id>" . md5($_SERVER['HTTP_HOST']) . "</id>%0A";
		$stat_submit .= "<stat>%0A";
		foreach ($stats as $stat) {
			$stat_submit .= "<os_family>";
			$stat_submit .= "<name>" . $stat->os_family . "</name><count>" . $stat->count . "</count>";
			$stat_submit .= "</os_family>%0A";
		}
		$stat_submit .= "</stat>%0A";
		$stat_submit .= "</stats>%0A";
		if (md5(php_uname('n')) == "421aa90e079fa326b6494f812ad13e79") {
			$stat_submit .= "%0A%0ANOTE - using localhost. Please use your server name when calling the URL.";
		}
		echo "Please consider submitting your statistics to help the project. Copy and paste the below into an email to <a href=\"mailto:open.audit@gmail.com?subject=Open-AudIT Stats&body=" . $stat_submit . "\" style=\"color:blue;\">open.audit@gmail.com</a>. It would be most appreciated and enable the project to have some gauge on its success.<br /><br />\n";
		echo "FYI - the 'id' field is the MD5 of the hostname you are running Open-AudIT on. This is not able to be linked to you in any way and is simply to differentiate the submitted statistics.<br />\n";
		if (md5(php_uname('n')) == "421aa90e079fa326b6494f812ad13e79") {
			echo "<br /><span style=\"color:red;\">Please use the actual name of your server and not localhost when submitting statistics.<br />Using http://localhost/index.php does not allow for differentiation of your statistics from other installations. This is required to obtain an accurate count of total systems using Open-AudIT (worldwide). Please call this page (and submit your stats) using the actual hostname of the server running Open-AudIT.</span><br /><br />\n";
		}
		echo "<pre>\n";
		echo "&lt;stats>\n";
		echo "\t&lt;id>" . md5(php_uname('n')) . "&lt;/id>\n";
		echo "\t&lt;stat>\n";
		foreach ($stats as $stat) {
			echo "\t\t&lt;os_family>";
			echo "&lt;name>" . $stat->os_family . "&lt;/name>&lt;count>" . $stat->count . "&lt;/count>";
			echo "&lt;/os_family>\n";
		}
		echo "\t&lt;/stat>\n";
		echo "&lt;/stats>\n";
		echo "</pre>\n";
		?>
		Please visit the homepage at <a href="http://www.open-audit.org">http://www.open-audit.org</a>, and don't be shy to sign up to the forums.<br />
		Consulting, implementation and other services are available.<br /><br />
		We hope you find Open-AudIT v2.0 as useful as we do.<br />
	</fieldset>
</form>
