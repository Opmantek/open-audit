<?php
$sortcolumn = 2; 
if (count($query) > 0)
{
?>
<table cellspacing="1" class="tablesorter">
	<thead>
		<tr>
<?php
		foreach($query[0] as $key => $value) {
			if ( strpos($key, "timestamp") !== FALSE OR strpos($key, "install") !== FALSE) {
				echo "\t\t\t<th align=\"center\">" . ucwords(str_replace("_", " ", $key)) . "</th>\n";
			} else {
				echo "\t\t\t<th>" . ucfirst(str_replace("_", " ", $key)) . "</th>\n";
			}
		} ?>
		</tr>
	</thead>
	<tbody>
	<?php
	$i = 1;
	foreach ($query as $line) {
		echo "\t\t\t\t<tr>";
		foreach ($line as $key => $value) {
			$i++;
			if ( strpos($key, "timestamp") !== FALSE OR strpos($key, "install") !== FALSE) {
				$align="center";
			} else {
				$align="left";
			}
			if ($value == ''){ $value = ' '; }
			if ($value == 'n') {
				echo "\t\t\t\t\t<td align=\"$align\"><span id=\"id-" . $i . "\" onMouseOver=\"show_modifier('id-" . $i . "', '" . $key . "');\" style=\"font-weight: bold; color: red;\" >" . htmlentities($value, ENT_QUOTES, "UTF-8") . "</span><span id=\"id-$i\">&nbsp;&nbsp;&nbsp;</span></td>\n";
			} elseif ($value == "y") {
				echo "\t\t\t\t\t<td align=\"$align\"><span id=\"id-" . $i . "\" onMouseOver=\"show_modifier('id-" . $i . "', '" . $key . "');\" style=\"font-weight: bold; color: green;\" >" . htmlentities($value, ENT_QUOTES, "UTF-8") . "</span><span id=\"id-$i\">&nbsp;&nbsp;&nbsp;</span></td>\n";
			} else {
				echo "\t\t\t\t\t<td align=\"$align\"><span id=\"id-" . $i . "\" onMouseOver=\"show_modifier('id-" . $i . "', '" . $key . "');\"  >" . htmlentities($value, ENT_QUOTES, "UTF-8") . "</span><span id=\"id-$i\">&nbsp;&nbsp;&nbsp;</span></td>\n";
			}
		}
		echo "</tr>\n";
	}
	?>
	</tbody>
</table>
<?php
} else {
	echo "<br />" . __('There is no current data for that system and table') . ".<br />";
}
?>

<script type="text/javascript">
oa_cell_id = "";
oa_cell_value = "";
var x = new Array(<?php echo count($query); ?>);

function show_modifier(cell_id, attribute)
{
	oa_new_cell_id = cell_id;
	if (oa_cell_id == oa_new_cell_id) {
		
	} else {
		if (oa_cell_id > "") {
			document.getElementById(oa_cell_id).innerHTML = oa_cell_value;
		}
		oa_cell_id = cell_id;
		oa_cell_value = document.getElementById(oa_cell_id).innerHTML;
		oa_cell_icon = " <a class='ModifierPopupTrigger' rel='" + attribute + "___" + document.getElementById(oa_cell_id).innerHTML +"' href='#'>***<\/a>";
		oa_cell_text = oa_cell_value + oa_cell_icon;
		document.getElementById(oa_cell_id).innerHTML = oa_cell_text;
	}
}
</script>
				