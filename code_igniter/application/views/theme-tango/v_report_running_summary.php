<?php 
$sortcolumn = 0;
?>
<table cellspacing="1" class="tablesorter" width="900">
	<thead>
		<tr>
			<th><?php echo __('Business Unit')?></th>
			<th><?php echo __('System Class')?></th>
			<th align="center"><?php echo __('Jan')?></th>
			<th align="center"><?php echo __('Feb')?></th>
			<th align="center"><?php echo __('Mar')?></th>
			<th align="center"><?php echo __('Apr')?></th>
			<th align="center"><?php echo __('May')?></th>
			<th align="center"><?php echo __('Jun')?></th>
			<th align="center"><?php echo __('Jul')?></th>
			<th align="center"><?php echo __('Aug')?></th>
			<th align="center"><?php echo __('Sep')?></th>
			<th align="center"><?php echo __('Oct')?></th>
			<th align="center"><?php echo __('Nov')?></th>
			<th align="center"><?php echo __('Dec')?></th>
		</tr>
	</thead>
	<tbody>
<?php
foreach ($query as $line){
	echo "<tr>";
	echo "<td>" . $line->business_unit . "</td>";
	echo "<td>" . $line->class . "</td>";
	echo "<td>" . $line->Jan . "</td>";
	echo "<td>" . $line->Feb . "</td>";
	echo "<td>" . $line->Mar . "</td>";
	echo "<td>" . $line->Apr . "</td>";
	echo "<td>" . $line->May . "</td>";
	echo "<td>" . $line->Jun . "</td>";
	echo "<td>" . $line->Jul . "</td>";
	echo "<td>" . $line->Aug . "</td>";
	echo "<td>" . $line->Sep . "</td>";
	echo "<td>" . $line->Oct . "</td>";
	echo "<td>" . $line->Nov . "</td>";
	echo "<td>" . $line->Dec . "</td>";
	echo "</tr>";
	
}
/*
foreach($query as $group_name=>$group){
	if ($group_name > '') {
		foreach($group as $version=>$values){
			if ($version > '') {
				echo "<tr><td>" . $group_name . "</td>";
				echo '<td>'.$version.'</td>';
				$line = array();
				for ($i=1; $i<13; $i++) {
					$line[$i] = '';
					foreach($values as $key=>$value){
						if ($key == $i) {
							$line[$i] = $value;
						}
					}
				}
				for ($i=1; $i<13; $i++) {
					echo "<td>" . $line[$i] . "</td>";
				}
				echo '</tr>';
			}
		}
	}
}
*/
?>
</tbody>
</table>
<?php

#echo "<pre>\n";
#print_r($query);
#echo "</pre>\n";
