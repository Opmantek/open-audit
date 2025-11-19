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
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $data->name, $meta->action) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                        <div id="widget_<?= $meta->id ?>" class="offset-2 col-8" style="padding: 10px 15px;"></div>
                        <?= $html ?>
                        </div>
                        <div class="col-6">
                            <br>
                            <div class="offset-2 col-8">
                                <?= aboutNotesDiv ($meta->collection, $dictionary) ?>
                                <?= fieldsInfoDiv ($dictionary) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>


<script {csp-script-nonce} defer src="<?= base_url('js/highcharts-9.3.1.min.js') ?>"></script>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {
        $("#button_execute").remove();
        $(".delete_link").remove();
        $('.chart-raw-legend').css('overflow-y','visible');

        <?php
        // foreach ($included as $widget) {
        //     if (!empty($data->type) and $data->type === 'traffic') {
        //         echo "$(\"#widget_" . $widget->id . "\").html('" . traffic_widget($widget) . "');\n";
        //     }
        // }
        // if (!empty($data->type) and $data->type === 'status') {
        //     echo "$(\"#widget_" . $data->id . "\").html('" . status_widget($data) . "');\n";
        // }

        ?>


        <?php if ($data->type !== 'traffic') { ?>
            Highcharts.generictheme = {
                colors: ['#1f284f', '#4a3165', '#7a3671', '#a83a71', '#d14565', '#ef5c51', '#ff7e35', '#ffa600'],
                chart: {
                    backgroundColor: '#fff',
                },
                title: {
                    style: {
                        color: '#404040',
                        // font: '16px "Trebuchet MS", Verdana, sans-serif'
                    }
                },
                subtitle: {
                    style: {
                        color: '#404040',
                        // font: '12px "Trebuchet MS", Verdana, sans-serif'
                    }
                },
                legend: {
                    itemStyle: {
                        color: '#404040',
                        // font: '9pt Trebuchet MS, Verdana, sans-serif',
                    },
                    itemHoverStyle: {
                        // color: 'gray'
                    }
                }
            };

            Highcharts.darktheme = {
                colors: ['#2162F6', '#50ACF0', '#BA7DF0', '#8462FA', '#BC1EF0','#DF82FA', '#F3A8E8','#FF928C','#FF5465', '#FFAC81'],
                chart: {
                    backgroundColor: '#222',
                },
                title: {
                    style: {
                        color: '#fff',
                    }
                },
                subtitle: {
                    style: {
                        color: '#fff',
                    }
                },
                legend: {
                    itemStyle: {
                    color: '#fff'
                    },
                    itemHoverStyle: {
                        color: 'gray'
                    }
                }
            };

            Highcharts.setOptions(Highcharts.generictheme);
            if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                Highcharts.setOptions(Highcharts.darktheme);
            }

            <?php
            if (!empty($data->formatted)) {
                $wf = json_encode($data->formatted);
                $wf = htmlspecialchars_decode($wf, ENT_QUOTES);
                $wf = str_replace('"function(event){location.href = this.options.url;}"', 'function(event){location.href = this.options.url;}', $wf);
                echo "\n\tHighcharts.chart(" . html_entity_decode($wf) . ");\n";
            } ?>

        <?php } ?>

        /* Enable pop-over's */
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        });
    })
};
</script>

