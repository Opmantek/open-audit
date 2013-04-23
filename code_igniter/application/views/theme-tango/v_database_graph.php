


<script src="<?php echo base_url() . 'theme-' . $user_theme . '/' . $user_theme . '-files/jqplot/jquery.jqplot.js'; ?>" type="text/javascript"></script>
<script src="<?php echo base_url() . 'theme-' . $user_theme . '/' . $user_theme . '-files/jqplot/plugins/jqplot.logAxisRenderer.js'; ?>" type="text/javascript"></script>
<script src="<?php echo base_url() . 'theme-' . $user_theme . '/' . $user_theme . '-files/jqplot/plugins/jqplot.canvasTextRenderer.js'; ?>" type="text/javascript"></script>
<script src="<?php echo base_url() . 'theme-' . $user_theme . '/' . $user_theme . '-files/jqplot/plugins/jqplot.canvasAxisLabelRenderer.js'; ?>" type="text/javascript"></script>
<script src="<?php echo base_url() . 'theme-' . $user_theme . '/' . $user_theme . '-files/jqplot/plugins/jqplot.canvasAxisTickRenderer.js'; ?>" type="text/javascript"></script>
<script src="<?php echo base_url() . 'theme-' . $user_theme . '/' . $user_theme . '-files/jqplot/plugins/jqplot.dateAxisRenderer.js'; ?>" type="text/javascript"></script>
<script src="<?php echo base_url() . 'theme-' . $user_theme . '/' . $user_theme . '-files/jqplot/plugins/jqplot.categoryAxisRenderer.js'; ?>" type="text/javascript"></script>
<script src="<?php echo base_url() . 'theme-' . $user_theme . '/' . $user_theme . '-files/jqplot/plugins/jqplot.barRenderer.js'; ?>" type="text/javascript"></script>
<script src="<?php echo base_url() . 'theme-' . $user_theme . '/' . $user_theme . '-files/jqplot/plugins/jqplot.trendline.min.js'; ?>" type="text/javascript"></script>

<script src="<?php echo base_url() . 'theme-' . $user_theme . '/' . $user_theme . '-files/jqplot/plugins/jqplot.highlighter.min.js'; ?>" type="text/javascript"></script>
<script src="<?php echo base_url() . 'theme-' . $user_theme . '/' . $user_theme . '-files/jqplot/plugins/jqplot.cursor.min.js'; ?>" type="text/javascript"></script>

<?php

#echo "<pre>\n";
#print_r($query);
#echo "</pre>\n";

$line1 = "[";
foreach ($query as $database)
{
	$line1 .= "['" . $database->timestamp . "', " . $database->used . "], ";
}
$line1 = mb_substr($line1, 0, (mb_strlen($line1) - 2));
$line1 .= "];";

#foreach ($partition_details as $partition)
#{
#	$graph_title = str_replace("\\", "\\\\", $partition->partition_mount_point) . " (" . $partition->partition_mount_type . ")";
#}
$graph_title = "test";
?>

<script type="text/javascript" language="javascript">
$(document).ready(function(){

	$.jqplot.config.enablePlugins = true;
	line1 = <?php echo $line1 . "\n"; ?>
	plot1 = $.jqplot('chart1', [line1], {
		title:'<?php echo $graph_title; ?>', 
		legend: {show:false},
		axesDefaults: {
			tickRenderer: $.jqplot.CanvasAxisTickRenderer ,
			tickOptions: {
				angle: -45,
				fontSize: '10pt'
			}
		},
		axes:{
			xaxis:{
				autoscale: true,
				renderer:$.jqplot.DateAxisRenderer,
				tickInterval:'1 day'
			},
			yaxis:{
				min:0,
				max:100,
				tickOptions:{formatString:'%% %.2i'}
			}
		},
		highlighter: {sizeAdjust: 7.5},
		cursor: {show: false}
	});

});
</script>



<div class="jqplot" id="chart1"></div>



	
