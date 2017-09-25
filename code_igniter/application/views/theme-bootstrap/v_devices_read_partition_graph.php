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
 *
 * @version   2.0.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
?>
<div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title"><?php echo __("Partition Graph"); ?></h3></div>
    <div class="panel-body">
        <div class="col-md-12">
            <div class="ct-chart ct-major-eleventh"></div>
        </div>
    </div>
</div>


<script src="<?php echo $this->config->config['oa_web_folder']; ?>/js/chartist.min.js"></script>

<?php
$series = '';
$labels = '';
if (count($this->response->data) > 0) {
    foreach ($this->response->data as $partition) {
        if ($series != '') {
            $series .= ",{x: " . str_replace('-', '', $partition->attributes->timestamp) . ", y: " . $partition->attributes->used_percent . "}";
        } else {
            $series .= "{x: " . str_replace('-', '', $partition->attributes->timestamp) . ", y: " . $partition->attributes->used_percent . "}";
        }
        if ($labels != '') {
            $labels .= ", '" . str_replace('-', '', $partition->attributes->timestamp) . "'";
        } else {
            $labels = "'" . str_replace('-', '', $partition->attributes->timestamp) . "'";
        }
    }
}
$series = '[[' . $series . ']]';
$labels = '[' . $labels . ']';
?>

<script type="text/javascript" language="javascript">
$(document).ready(function(){
    new Chartist.Line('.ct-chart', {
        labels: <?php echo $labels; ?>,
        series: <?php echo $series; ?>
        }, {
            axisX: {
                type: Chartist.AutoScaleAxis,
                onlyInteger: true,
                labelInterpolationFnc: function(value) {
                    console.log(value);
                    return value;
                }

        },
            axisY: {
                type: Chartist.FixedScaleAxis,
                ticks: [0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100],
                low: 0,
                high: 100
        },
        showPoint: true
    });
});
</script>