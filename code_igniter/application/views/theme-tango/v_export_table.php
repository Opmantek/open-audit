<br /><br /><br /><br /><br />
<?php $sortcolumn = 3; ?>
<table cellspacing="1" class="tablesorter">
<?php
// table headers
foreach ($query AS $details) {
	echo "<thead><tr>\n\t";
	foreach ($details as $attribute=>$value) {
		echo "<th>" . $attribute . "</th>";
	}
	echo "</tr></thead>\n";
	break;
}
?>

<?php
// data
foreach ($query AS $details) {
	echo "<tr>\n\t";
	foreach ($details as $attribute=>$value) {
		echo "<td>" . $value . "</td>";
	}
	echo "</tr>\n";
}
?>
