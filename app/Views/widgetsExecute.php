<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
include 'shared/common_functions.php';
include 'shared/widget_functions.php';

$html = '';
if (!empty($included[0]->attributes->type)) {
    $data = $included[0]->attributes;
} else if (is_array($data) and !empty($data[0]->type)) {
    $data = $data[0];
} else if (!empty($data->type)) {
    $data = $data;
}
if ($data->type === 'traffic') {
    $html = '<div class="col-6 offset-3">' . traffic_widget($data) . '</div>';
}
if ($data->type === 'status') {
    $html = '<div class="col-6 offset-3">' . status_widget($data) . '</div>';
}

?>
<main class="container-fluid">
    <div class="card">
        <div class="card-header">
            <?php echo read_card_header($meta->collection, $meta->id, $meta->icon, $user, $data->name, $meta->action); ?>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                <div id="widget_<?php echo $meta->id; ?>" class="offset-2 col-8 chart-container" style="padding: 10px 15px;"></div>
                <?php echo $html; ?>
                </div>
                <div class="col-6">
                    <br>
                    <div class="offset-2 col-8">
                        <?php echo aboutNotesDiv($meta->collection, $dictionary); ?>
                        <?php echo fieldsInfoDiv($dictionary); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    .chart-container {
        width: 100%;
        aspect-ratio: 4 / 3;
        min-height: 240px;
    }
</style>

<script {csp-script-nonce}>
(function($) {
    $('#button_execute').remove();
    $('.delete_link').remove();
    $('.chart-raw-legend').css('overflow-y','visible');

    <?php if (! empty($data->formatted) && ! empty($data->type) && in_array($data->type, ['line', 'pie'])): ?>
    <?php $widgetEncoded = htmlspecialchars_decode(json_encode($data->formatted), ENT_QUOTES); ?>
    (function() {
        var chartDomId = "widget_<?php echo esc($meta->id, 'js'); ?>";
        var chartDom = document.getElementById(chartDomId);
        if (chartDom) {
            var option = <?php echo $widgetEncoded; ?>;
            var chart = echarts.init(chartDom, window.echartsTheme);

            chart.setOption(option);
            chart.on('click', function (params) {
                if (params.data && params.data.url) {
                    location.href = params.data.url;
                }
            });

            var resizeObserver = new ResizeObserver(function() {
                chart.resize();
            });

            resizeObserver.observe(chartDom);
        }
    })();
    <?php endif; ?>
})(jQuery);
</script>
