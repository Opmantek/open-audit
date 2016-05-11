<?php
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
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
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.12.6
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
$sortcolumn = 2;
?>
<form action="#" method="post" class='niceforms'>
	<fieldset id="stats" class='niceforms'>
		<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Statistics')?></span></legend>
		<?php echo __('Your Open-AudIT database contains the following devices in a production state:')?>
		<table class="tablesorter">
			<thead>
				<tr>
					<th><?php echo __('Type')?></th>
					<th><?php echo __('OS Family')?></th>
					<th><?php echo __('Count')?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($stats as $stat) {
                    echo "<tr>\n";
                    echo "<td>".htmlentities($stat->type)."</td>\n";
                    echo "<td>".htmlentities($stat->os_family)."</td>\n";
                    echo "<td>".htmlentities($stat->count)."</td>\n";
                    echo "</tr>\n";
                } ?>
			</tbody>
		</table>
		<?php
        $stat_submit = "<stats>%0A";
        $stat_submit .= "<id>".md5($_SERVER['HTTP_HOST'])."</id>%0A";
        $stat_submit .= "<stat>%0A";
        foreach ($stats as $stat) {
            $stat_submit .= "<row>";
            $stat_submit .= "<type>".$stat->type."&lt;/type>";
            $stat_submit .= "<os_family>".$stat->os_family."&lt;/os_family>";
            $stat_submit .= "<count>".$stat->count."&lt;/count>";
            $stat_submit .= "</row>%0A";
        }
        $stat_submit .= "</stat>%0A";
        $stat_submit .= "</stats>%0A";

        echo "Please consider submitting your statistics to help the project. Copy and paste the below into an email to <a href=\"mailto:open.audit@gmail.com?subject=Open-AudIT Stats&body=".$stat_submit."\" style=\"color:blue;\">open.audit@gmail.com</a>. It would be most appreciated and enable the project to have some gauge on its success.<br /><br />\n";
        echo "FYI - the 'id' field is the MD5 of the hostname you are running Open-AudIT on. This is not able to be linked to you in any way and is simply to differentiate the submitted statistics.<br />\n";
        if (md5(php_uname('n')) == "421aa90e079fa326b6494f812ad13e79") {
            echo "<br /><span style=\"color:red;\">Please use the actual name of your server and not localhost when submitting statistics.<br />Using http://localhost/open-audit/index.php does not allow for differentiation of your statistics from other installations. This is required to obtain an accurate count of total systems using Open-AudIT (worldwide). Please call this page (and submit your stats) using the actual hostname of the server running Open-AudIT.</span><br /><br />\n";
        }
        echo "<pre>\n";
        echo "&lt;stats>\n";
        echo "\t&lt;id>".md5(php_uname('n'))."&lt;/id>\n";
        echo "\t&lt;stat>\n";
        foreach ($stats as $stat) {
            echo "\t\t&lt;row>";
            echo "&lt;type>".$stat->type."&lt;/type>";
            echo "&lt;os_family>".$stat->os_family."&lt;/os_family>";
            echo "&lt;count>".$stat->count."&lt;/count>";
            echo "&lt;/row>";
            echo "\n";
        }
        echo "\t&lt;/stat>\n";
        echo "&lt;/stats>\n";
        echo "</pre>\n";
        ?>
		Please visit the homepage at <a href="http://www.open-audit.org" style="color:blue;">http://www.open-audit.org</a>, and don't be shy to sign up to the forums.<br />
		Consulting, implementation and other services are available from <a href="https://opmantek.com" style="color:blue;">Opmantek</a>.<br /><br />
		We hope you find Open-AudIT as useful as we do.<br />
	</fieldset>
</form>
