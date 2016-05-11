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
$sortcolumn = 3;
# check to see if user_access_level for this group is > 7


if (!file_exists("/usr/local/nmis8/admin/import_nodes.pl")) {
    $warning = "<span style='color: red;'>" . __('NOTE') . "</span> - " . __('You do not have nmis installed on this system. A file will be provided that you can copy to the nmis server and run with the nmis8/admin/import_nodes.pl script.') . "<br /><span style='color: red;'>" . __('NOTE') . "</span> - " . __('Any attributes that are blank have had default values substituted in') . " <span style='color: blue;'>" . __('blue') . "</span>.";
} else {
    $warning = "";
}

$manual_edit = 'y';
echo "<div style=\"float:left; width:100%;\">\n";
$attributes = array('id' => 'change_form', 'name' => 'change_form');
#$attributes = array('id' => 'alertform', 'name' => 'alertform');
echo form_open('admin/export_nmis', $attributes)."\n";
echo "<input type=\"hidden\" name=\"group_id\" value=\"".$group_id."\" />\n";

echo "<span id=\"warning\">".$warning."</span>\n";
echo "<table cellspacing=\"1\" class=\"tablesorter\">\n";
echo "\t<thead>\n";
echo "\t\t<tr>\n";
echo "<th width=\"30%\" align=\"left\">" . __('Name') . "</th>";
echo "<th width=\"20%\" align=\"left\">" . __('Host') . "</th>";
echo "<th width=\"20%\" align=\"left\">" . __('Group') . "</th>";
echo "<th width=\"10%\" align=\"left\">" . __('Role') . "</th>";
echo "<th width=\"10%\" align=\"left\">" . __('SNMP Community') . "</th>";
echo "<th width=\"10%\" align=\"left\">" . __('SNMP Version') . "</th>";

# edit column
#echo "<th align=\"center\" class=\"{sorter: false}\"><button onclick=\"document.change_form.submit();\">Edit</button>";
#echo "<input type=\"checkbox\" id=\"system_id_0\" name=\"system_id_0\" onchange=\"check_all_systems();\"/></th>";

# export column
echo "<th align=\"center\" class=\"{sorter: false}\"><button id='submit' name='submit' onclick=\"document.alertform.submit();\">Export</button>";
echo "<input type=\"checkbox\" id=\"system_id_0\" name=\"system_id_0\" onchange=\"check_all_systems();\"/></th>";

echo "\t\t</tr>\n";
echo "\t</thead>\n";
$id = 0;
$blank_attributes = 'n';
if (count($query) > 0) {
    echo "\t<tbody>\n";
    $i = 0;
    foreach ($query as $key) {
        if (isset($this->config->config['show_snmp_community']) and $this->config->config['show_snmp_community'] == 'y' and isset($key->nmis_community)) {
            $nmis_community = $key->nmis_community;
        } else {
            $nmis_community = str_replace($key->nmis_community, str_repeat("*", strlen($key->nmis_community)), $key->nmis_community);
        }
        echo "\t\t<tr>\n";
        echo "\t\t\t<td align=\"left\"><a class=\"SystemPopupTrigger\" rel=\"".intval($key->system_id)."\" href=\"".site_url()."/main/system_display/".intval($key->system_id)."\">".$key->nmis_name."</a></td>\n";
        echo "\t\t\t<td align=\"left\">".$key->nmis_host."</td>\n";
        echo "\t\t\t<td align=\"left\">".$key->nmis_group."</td>\n";
        echo "\t\t\t<td align=\"left\">".$key->nmis_role."</td>\n";
        echo "\t\t\t<td align=\"left\">".$nmis_community."</td>\n";
        echo "\t\t\t<td align=\"left\">".$key->nmis_snmp_version."</td>\n";
        if ($manual_edit == 'y') {
            echo "\t\t\t<td align=\"center\"><input type=\"checkbox\" id=\"system_id_";
            echo intval($key->system_id)."\" name=\"system_id_".intval($key->system_id)."\"";
            if ((string)$key->nmis_export == 'true') {
                echo "checked";
            }
            echo "/></td>\n";
        }
        echo "\n\t\t</tr>\n";
    }
    echo "\t</tbody>\n";
} else {
    echo "\t\t<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>\n";
}
echo "</table>\n";
if ($manual_edit == 'y') {
    echo "</form>\n";
    echo "</div>\n";
}
?>

<script type="text/javascript">

function check_all_systems() {
	if (document.getElementById("system_id_0").checked == true) {
		<?php
        foreach ($query as $key):
            if (isset($key->system_id)) {
                echo "\tdocument.getElementById(\"system_id_".intval($key->system_id)."\").checked = true;\n";
            }
        endforeach;
        ?>
	} else {
		<?php
        foreach ($query as $key):
            if (isset($key->system_id)) {
                echo "\tdocument.getElementById(\"system_id_".intval($key->system_id)."\").checked = false;\n";
            }
        endforeach;
        ?>
	}
}
</script>


<?php
function replace_amp($string)
{
    $replaced_amp = str_replace("&amp;", "&", $string);
    $replaced_amp = str_replace("&", "&amp;", $replaced_amp);

    return $replaced_amp;
}
?>
