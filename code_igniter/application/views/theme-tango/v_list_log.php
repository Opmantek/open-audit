<?php
$sortcolumn = 2; 
echo $comment;
echo "<p>Refresh this page for updated logs.<br />Most recent entries are at the top.</p>\n";
if (count($query) > 0) { ?>		
<table cellspacing="1" class="tablesorter">
	<tbody>
		<?php foreach ($query as $line) {
		echo "\t\t<tr>\n";
		echo "\t\t\t<td>" . $line . "</td>\n";
		echo "</tr>\n";
		} ?>
	</tbody>
</table>
<?php } else {
	echo "No Logs.";
}
?>