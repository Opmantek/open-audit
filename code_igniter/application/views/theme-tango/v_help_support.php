<?php 
#  Copyright 2003-2014 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published 
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************

/**
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * @version 1.3.1
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

$email = "mailto:support@opmantek.com?subject=Support Page Result for Open-AudIT&body=ISSUE%0APlease describe the issue you are having here:%0A%0AHINTS";
foreach ($hints as $key => $value) {
	$email .= "%0A" . $key . " = " . str_replace("'", "", $value) . "%0A";
}
$email .= "%0A%0ADATA";
foreach ($data as $key => $value) {
	$email .= "%0A" . $key . " = " . str_replace("'", "", $value);
}
?>


<form action="vars.php" method="post" class="niceforms">
	<fieldset id="about" class="niceforms">
		<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Support Data')?></span></legend>
		To email this data to Opmantek for assistance, <a href='<?php echo $email; ?>' style='color:red; text-decoration:underline;'>CLICK HERE</a>. This will open an email in your mail client and will not automatically send the data to opmantek. You should review the data and add your issue to the email.<br />
		<?php
		if (count($hints) > 0) {
			foreach ($hints as $key => $value) {
				echo "<h3>" . $key . "</h3>" . $value . "<br /><br />\n";
			}
		}
		echo "<pre>\n\nDATA\n----\n";
		print_r($data); 
		?>
		</pre>
	</fieldset>
</form>