<?php $sortcolumn = 3; 
# check to see if user_access_level for this group is > 7
$manual_edit = 'y';


if ($manual_edit == 'y') {
	echo "<div style=\"float:left; width:100%;\">\n";
	$attributes = array('id' => 'change_form', 'name' => 'change_form');
	echo form_open('admin/export_nmis', $attributes) . "\n"; 
	echo "<input type=\"hidden\" name=\"group_id\" value=\"" . $group_id . "\" />\n";
}
echo "<table cellspacing=\"1\" class=\"tablesorter\">\n";
echo "\t<thead>\n";
echo "\t\t<tr>\n";
foreach($column as $key):
if ($key->column_type > '') {
	if ($key->column_align == 'right') {
		$style = 'style="padding-right: 20px;"';
	} else {
		$style = '';
	}
	if ($key->column_name == "system_id") { $system_id = "set"; } else { $system_id = "not set"; }
	echo "<th align=\"" . $key->column_align . "\" $style>" . $key->column_name . "</th>";
}
endforeach; 
if ( ($manual_edit == 'y') and ($system_id = "set") ){
		echo "<th align=\"center\" class=\"{sorter: false}\"><button id='export' name='export' onClick=\"document.alertform.submit();\">Export</button>";
		echo "<input type=\"checkbox\" id=\"system_id_0\" name=\"system_id_0\" onchange=\"check_all_systems();\"/></th>";
}
echo "\t\t</tr>\n";
echo "\t</thead>\n";
$id = 0;
if (count($query) > 0) {
	echo "\t<tbody>\n";
	$i = 0;
	foreach($query as $key):
		$i++;
		echo "\t\t<tr>\n";
		$id = $id + 1;
		#echo "<td>$id</td>\n";
		foreach($column as $col): 
			$colname = $col->column_variable;
			$colname_sec = $col->column_secondary;
			$colname_ter = $col->column_ternary;
			$collink = $col->column_link;
			$colalign = $col->column_align;
			if ($colalign == '') { $colalign = 'left'; }
			if (!property_exists($key, 'system_id')) { $key->system_id = "$id"; }
			if (!isset($key->system_id)) { $key->system_id = "$id"; }
			switch($col->column_type) {	
				case "":
					break;

				case "link":
					if ($key->$colname == '') { $key->$colname = '-'; }
					if ($col->column_secondary == 'system_id' or $col->column_secondary == 'linked_sys') {
						$col->column_link = str_replace('$group_id', $group_id, $col->column_link);
						echo "\t\t\t<td align=\"$colalign\">" . $key->$colname . "</td>\n";
					} else {
						$col->column_link = str_replace('$group_id', $group_id, $col->column_link);
						echo "\t\t\t<td align=\"$colalign\">" . htmlentities($key->$colname, ENT_QUOTES, "UTF-8") . "</td>\n";
					}
					break;

				case "text":
					switch($colname)
					{
					case "tag":
						echo "\t\t\t<td align=\"center\"><a class=\"TagPopupTrigger\" rel=\"" . $key->system_id . "\" href=\"#\"><img src=\"" . $image_path . "16_link.png\" style='border-width:0px;' title=\"\" alt=\"\" /></a></td>\n";
						break;

					default:
						$output = $key->$colname;
						if (is_numeric($output)) { 
							if ((strpos($colname, "serial") === false) and (strpos($colname, "model") === false)) { $output = number_format($output); }
							echo "\t\t\t<td align=\"$colalign\"><span style=\"display: none;\">" . mb_substr("0000000000" . $output, -10) . "</span>" . $output . "</td>\n";
						} else {
							if ($key->$colname == ''){ $key->$colname = ' '; }
							if (isset($key->system_id)) {
								echo "\t\t\t<td align=\"$colalign\">" . htmlentities($key->$colname, ENT_QUOTES, "UTF-8") . "</td>\n";
							} else {
								echo "\t\t\t<td align=\"$colalign\">" . htmlentities($key->$colname, ENT_QUOTES, "UTF-8") . "</td>\n";
							}
						}
						break;
					}
					break;

				case "image":
					if ( $key->$colname == "") { $key->$colname = "unknown"; }
					echo "\t\t\t<td align=\"center\"><img src=\"" . $image_path . "16_" . $key->$colname . ".png\" style='border-width:0px;' title=\"" . $key->$colname_sec . "\" alt=\"" . $key->$colname_sec . "\" /></td>\n";
					break;

				case "ip_address":
					echo "\t\t\t<td align=\"$colalign\"><span style=\"display: none;\">" . $key->man_ip_address . "&nbsp;</span>" . ip_address_from_db($key->man_ip_address) . "</td>\n";
					break;
					
				case "timestamp":
					echo "\t\t\t<td align=\"$colalign\">" . $key->$colname . "</td>\n";
					break;
				
				case "url":
					$href = '';
					if ($colname_ter > '') {
						$image = $image_path . "16_" . $colname_ter . ".png";
					} else {
						$image = $image_path . "16_browser.png";
					}
					
					if (isset($key->$colname)) { 
						$href = str_replace("&", "&amp;", str_replace("&amp;", "&", $key->$colname));
					}
					if (($colname == '') && ($collink > '')) {
						#$href = str_replace("&", "&amp;", str_replace("&amp;", "&", $collink));
						$href = htmlentities($collink, ENT_QUOTES, "UTF-8");
					}
					if ($colname_sec > '') {
						#$href .= str_replace("&", "&amp;", str_replace("&amp;", "&", $key->$colname_sec));
						$href .= htmlentities($key->$colname_sec, ENT_QUOTES, "UTF-8");
					}
					$href = str_replace(" ", "%20", $href);
					if ($href > '') {
						echo "\t\t\t<td align=\"$colalign\"><a href=\"" . $href . "\"><img src=\"" . $image . "\" border=\"0\" title=\"\" alt=\"\" /></a></td>";
					} else {
						echo "\t\t\t<td align=\"$colalign\"></td>\n";
					}
					break;
			}
		endforeach;
	if ( $manual_edit == 'y') { 
		echo "\t\t\t<td align=\"center\"><input type=\"checkbox\" id=\"system_id_" . $key->system_id . "\" name=\"system_id_" . $key->system_id . "\" /></td>\n";
	}
	echo "\n\t\t</tr>\n";
	endforeach;
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

function check_all_systems()
{
	if (document.getElementById("system_id_0").checked == true) 
	{
		<?php
		foreach($query as $key):
			if (isset($key->system_id)) {
				echo "\tdocument.getElementById(\"system_id_" . $key->system_id . "\").checked = true;\n";
			}
		endforeach;
		?>
	} else {
		<?php
		foreach($query as $key):
			if (isset($key->system_id)) {
				echo "\tdocument.getElementById(\"system_id_" . $key->system_id . "\").checked = false;\n";
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