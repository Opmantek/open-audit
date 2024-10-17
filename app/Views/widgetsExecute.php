<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';

$html = '';
if ($included[0]->attributes->type === 'traffic') {
    $html = '<div class="row" style="height:140px;">
                <div class="offset-4 col-2 text-center ' .  $data->result->colour . ' h-100">
                    <span class="' . $data->result->icon . '" style="font-size:5em; padding-top:30px;"></span>
                </div>
                <div class="col-6 h-100" style="padding-top:14px;">
                <h5>' . $data->result->title . '</h5>
                <h4>';
    if (is_numeric($data->result->red)) {
        $html .= '&nbsp;<a href="' . url_to('queriesExecute', $data->result->red_id) . '"><button class="btn btn-danger" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3">' . $data->result->red . '</span></button></a>';
    }
    if (is_numeric($data->result->yellow)) {
        $html .= '&nbsp;<a href="' . url_to('queriesExecute', $data->result->yellow_id) . '"><button class="btn btn-warning" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3">' . $data->result->yellow . '</span></button></a>&nbsp;';
    }
    if (is_numeric($data->result->green)) {
        $html .= '<a href="' . url_to('queriesExecute', $data->result->green_id) . '"><button class="btn btn-success" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3">' . $data->result->green . '</span></button></a>';
    }
    $html .= '</h4><p><small class="text-body-secondary">' . $data->result->secondary_text . '</small><br><br><br></p></div></div>';
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $included[0]->attributes->name, $meta->action) ?>
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
                                <?php if (!empty($dictionary->about)) { ?>
                                    <h4 class="text-center"><?= __('About') ?></h4><br>
                                    <?= $dictionary->about ?>
                                <?php } ?>
                                <?php if (!empty($dictionary->notes)) { ?>
                                    <h4 class="text-center"><?= __('Notes') ?></h4><br>
                                    <?= $dictionary->notes ?>
                                <?php } ?>
                                <?php if (!empty($dictionary->columns)) { ?>
                                    <?php $fields = array('name', 'org_id', 'resource', 'type', 'value', 'edited_by', 'edited_date') ?>
                                <h4 class="text-center"><?= __('Fields') ?></h4><br>
                                    <?php foreach ($fields as $key) { ?>
                                    <code><?= $key ?>: </code><?= @$dictionary->columns->{$key} ?><br><br>
                                    <?php } ?>
                                <?php } ?>
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

        <?php if ($included[0]->attributes->type !== 'traffic') { ?>
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
                $wf = str_replace('"function(event){location.href = this.options.url;}"', 'function(event){location.href = this.options.url;}', $wf);
                echo "\n\tHighcharts.chart(" . html_entity_decode($wf) . ");\n";
            } ?>

        <?php } ?>
    })};
</script>

