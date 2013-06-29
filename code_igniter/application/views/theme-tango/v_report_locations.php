<?php
$sortcolumn = 2; 
if (count($query) > 0)
{
?>		
<table cellspacing="1" class="tablesorter">
	<thead>
		<tr>
			<?php foreach ($column as $value) { echo "\t\t\t<th>" . $value->column_name . "</th>\n"; } ?>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach ($query as $key) {
		echo "\t\t<tr>\n";
		foreach ($column as $value) {	
			$i = $value->column_variable;
			if (property_exists($key, $i)) {
				if (is_numeric($key->$i)) {
					echo "\t\t\t<td align='center'>" . $key->$i . "</td>\n";
				} else {
					echo "\t\t\t<td>" . $key->$i . "</td>\n";
				}
			} else {
				echo "\t\t\t<td></td>\n";
			}
		}
		echo "\t\t</tr>\n";
	} ?>
	</tbody>
</table>
<?php
} else {
	echo "<br />" . __('There are no current locations') . ".<br />";
}
?>