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
?>


<script src="<?php echo $oa_theme_files; ?>/jqplot/jquery.jqplot.js'; ?>" type="text/javascript"></script>
<script src="<?php echo $oa_theme_files; ?>/jqplot/plugins/jqplot.logAxisRenderer.js'; ?>" type="text/javascript"></script>
<script src="<?php echo $oa_theme_files; ?>/jqplot/plugins/jqplot.canvasTextRenderer.js'; ?>" type="text/javascript"></script>
<script src="<?php echo $oa_theme_files; ?>/jqplot/plugins/jqplot.canvasAxisLabelRenderer.js'; ?>" type="text/javascript"></script>
<script src="<?php echo $oa_theme_files; ?>/jqplot/plugins/jqplot.canvasAxisTickRenderer.js'; ?>" type="text/javascript"></script>
<script src="<?php echo $oa_theme_files; ?>/jqplot/plugins/jqplot.dateAxisRenderer.js'; ?>" type="text/javascript"></script>
<script src="<?php echo $oa_theme_files; ?>/jqplot/plugins/jqplot.categoryAxisRenderer.js'; ?>" type="text/javascript"></script>
<script src="<?php echo $oa_theme_files; ?>/jqplot/plugins/jqplot.barRenderer.js'; ?>" type="text/javascript"></script>
<script src="<?php echo $oa_theme_files; ?>/jqplot/plugins/jqplot.trendline.min.js'; ?>" type="text/javascript"></script>

<script src="<?php echo $oa_theme_files; ?>/jqplot/plugins/jqplot.highlighter.min.js'; ?>" type="text/javascript"></script>
<script src="<?php echo $oa_theme_files; ?>/jqplot/plugins/jqplot.cursor.min.js'; ?>" type="text/javascript"></script>

<?php
$line1 = "[";
foreach ($query as $database) {
    $line1 .= "['".$database->timestamp."', ".$database->used."], ";
}
$line1 = mb_substr($line1, 0, (mb_strlen($line1) - 2));
$line1 .= "];";
$graph_title = "test";
?>

<script type="text/javascript" language="javascript">
$(document).ready(function(){

	$.jqplot.config.enablePlugins = true;
	line1 = <?php echo $line1."\n"; ?>
	plot1 = $.jqplot('chart1', [line1], {
		title:'<?php echo htmlentities($graph_title); ?>',
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
