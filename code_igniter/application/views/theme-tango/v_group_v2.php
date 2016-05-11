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
$manual_edit = 'n';
if (isset($this->user->access_level) and $this->user->access_level > '9') {
    # check to see if "system_id" is present in report
    #echo "<pre>SET</pre>\n";
        if (isset($data[0]->id)) {
            # enable group manual editing column
            #echo "<pre>MAN EDIT</pre>\n";
            $manual_edit = 'y';
        }
}

if ($manual_edit == 'y') {
    echo "<div style=\"float:left; width:100%;\">\n";
    $attributes = array('id' => 'change_form', 'name' => 'change_form');
    echo form_open('main/edit_systems', $attributes)."\n";
    echo "<input type=\"hidden\" name=\"group_id\" value=\"".intval($group[0]->group_id)."\" />\n";
}
?>
<table cellspacing="1" class="tablesorter">
    <thead>
        <tr>
            <th>Icon</th>
            <th>Name</th>
            <th>Domain</th>
            <th>Description</th>
            <th>OS Family</th>
            <?php
            if ($manual_edit == 'y') {
                echo "<th align=\"center\" class=\"{sorter: false}\"><button onclick=\"document.change_form.submit();\">Edit</button>";
                echo "<input type=\"checkbox\" id=\"system_id_0\" name=\"system_id_0\" onchange=\"check_all_systems();\"/></th>";
            }
            ?>
        </tr>
    </thead>
<tbody>



<?php
foreach ($query as $device) {
    echo "<tr>\n";
    echo "<td><img src=\"".str_replace("index.php", "", site_url())."theme-tango/tango-images/16_".strtolower(str_replace(" ", "_", htmlentities($device->icon))).".png\" style='border-width:0px;' title=\"".htmlentities($device->icon)."\" alt=\"".htmlentities($device->icon)."\" /></td>\n";
    echo "<td><a href='/devices/" . $device->id . "'>" . $device->name . "</td>\n";
    echo "<td>" . $device->domain . "</td>\n";
    echo "<td>" . $device->description . "</td>\n";
    echo "<td>" . $device->os_family . "</td>\n";
    if ($manual_edit == 'y') {
        echo "\t\t\t<td align=\"center\"><input type=\"checkbox\" id=\"system_id_".intval($device->id)."\" name=\"system_id_".intval($device->id)."\" /></td>\n";
    }
    echo "</tr>\n";
}


echo "\t</tbody>\n";
echo "</table>\n";
if ($manual_edit == 'y') {
    echo "</form>\n";
    echo "</div>\n";
}
?>

<script type="text/javascript">
oa_cell_id = "";
oa_cell_value = "";
var x = new Array(<?php echo count($query); ?>);

function show_modifier(oa_attribute, system_id)
{
	oa_new_cell_id = oa_attribute + "-" + system_id;
	if (oa_cell_id == oa_new_cell_id) {

	} else {
		if (oa_cell_id > "") {
			document.getElementById(oa_cell_id).innerHTML = oa_cell_value;
		}
		oa_cell_id = oa_attribute + "-" + system_id;
		oa_cell_value = document.getElementById(oa_cell_id).innerHTML;
		oa_cell_icon = " <a class='ModifierPopupTrigger' rel='" + oa_attribute + "___" + document.getElementById(oa_cell_id).innerHTML +"' href='#'>***<\/a>";
		oa_cell_text = oa_cell_value + oa_cell_icon;
		document.getElementById(oa_cell_id).innerHTML = oa_cell_text;
	}
}

function check_all_systems()
{
	if (document.getElementById("system_id_0").checked == true)
	{
		<?php
        foreach ($query as $device):
            if (isset($device->id)) {
                echo "\tdocument.getElementById(\"system_id_".intval($device->id)."\").checked = true;\n";
            }
        endforeach;
        ?>
	} else {
		<?php
        foreach ($query as $device):
            if (isset($device->id)) {
                echo "\tdocument.getElementById(\"system_id_".intval($device->id)."\").checked = false;\n";
            }
        endforeach;
        ?>
	}
}
</script>
<div style="display: none;" id="example" title="Edit Systems Manual Data"></div>
