<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
$help_button = "";
if ($user->toolbar_style === 'icontext') {
    $help_button = "<a id=\"button_help\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\" href=\"" . url_to($meta->collection . 'Help') . "\"><span style=\"margin-right:6px;\" class=\"fa fa-question text-primary\"></span>" . __("Help") . "</a>";
} elseif ($user->toolbar_style === 'icon') {
    $help_button = "<a id=\"button_help\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\" href=\"" . url_to($meta->collection . 'Help') . "\"><span class=\"fa fa-question text-primary\"></span></a>";
} else {
    $help_button = "<a id=\"button_help\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\" href=\"" . url_to($meta->collection . 'Help') . "\">" . __("Help") . "</a>";
}
$instance = & get_instance();
$colour = '';
?>
        <main class="container-fluid">


            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6 clearfix">
                            <h6 style="padding-top:10px;"><span class="fa fa-chart-bar oa-icon"></span><?= __('Security Status') ?></h6>
                        </div>
                        <div class="col-6 clearfix">
                            <div class="btn-group btn-group-sm float-end" role="group" id="oa_panel_buttons">
                                <div class="page-title-right">
                                    <?= $help_button ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row" style="height:140px;">
                        <?php
                        if (intval($included['windows_client_av']->red) > 0) {
                            $colour = 'text-bg-danger';
                        } elseif (intval($included['windows_client_av']->yellow) > 0) {
                            $colour = 'text-bg-warning';
                        } else {
                            $colour = 'text-bg-success';
                        }
                        ?>
                        <div class="col-md-3 h-100" style="padding-left:20px; padding-right:20px;">
                            <div class="row h-100">
                                <div class="col-4 text-center <?= $colour ?> h-100">
                                    <span class="fa-solid fa-shield-virus" style="font-size:5em; padding-top:30px;"></span>
                                </div>
                                <div class="col-8 border-top border-end border-bottom h-100" style="padding-top:14px;">
                                    <h5>ANTIVIRUS</h5>
                                    <h4>
                                        <a href="<?= url_to('queriesExecute', $included['windows_client_av']->red_id) ?>"><button class="btn btn-danger" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3"><?= $included['windows_client_av']->red ?></span></button></a>&nbsp;
                                        <a href="<?= url_to('queriesExecute', $included['windows_client_av']->yellow_id) ?>"><button class="btn btn-warning" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3"><?= $included['windows_client_av']->yellow ?></span></button></a>&nbsp;
                                        <a href="<?= url_to('queriesExecute', $included['windows_client_av']->green_id) ?>"><button class="btn btn-success" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3"><?= $included['windows_client_av']->green ?></span></button></a>
                                    </h4>
                                    <p><small class="text-body-secondary">Windows 10 & 11</small><br><br><br></p>
                                </div>
                            </div>
                        </div>

                        <?php
                        if (intval($included['windows_client_firewall']->red) > 0) {
                            $colour = 'text-bg-danger';
                        } elseif (intval($included['windows_client_firewall']->yellow) > 0) {
                            $colour = 'text-bg-warning';
                        } else {
                            $colour = 'text-bg-success';
                        }
                        ?>
                        <div class="col-md-3 h-100" style="padding-left:20px; padding-right:20px;">
                            <div class="row h-100">
                                <div class="col-4 text-center <?= $colour ?> h-100">
                                    <span class="fa-solid fa-shield-halved" style="font-size:5em; padding-top:30px;"></span>
                                </div>
                                <div class="col-8 border-top border-end border-bottom h-100" style="padding-top:14px;">
                                    <h5>FIREWALL</h5>
                                    <h4>
                                        <a href="<?= url_to('queriesExecute', $included['windows_client_firewall']->red_id) ?>"><button class="btn btn-danger" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3"><?= $included['windows_client_firewall']->red ?></span></button></a>&nbsp;
                                        <a href="<?= url_to('queriesExecute', $included['windows_client_firewall']->yellow_id) ?>"><button class="btn btn-warning" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3"><?= $included['windows_client_firewall']->yellow ?></span></button></a>&nbsp;
                                        <a href="<?= url_to('queriesExecute', $included['windows_client_firewall']->green_id) ?>"><button class="btn btn-success" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3"><?= $included['windows_client_firewall']->green ?></span></button></a>
                                    </h4>
                                    <p><small class="text-body-secondary">Windows 10 & 11</small><br><br><br></p>
                                </div>
                            </div>
                        </div>

                        <?php
                        if (intval($included['windows_10_build']->red) > 0) {
                            $colour = 'text-bg-danger';
                        } else {
                            $colour = 'text-bg-success';
                        }
                        ?>
                        <div class="col-md-3 h-100" style="padding-left:20px; padding-right:20px;">
                            <div class="row h-100">
                                <div class="col-4 text-center <?= $colour ?> h-100">
                                    <span class="fa-brands fa-windows" style="font-size:5em; padding-top:30px;"></span>
                                </div>
                                <div class="col-8 border-top border-end border-bottom h-100" style="padding-top:14px;">
                                    <h5>LATEST BUILD WINDOWS 10</h5>
                                    <h4>
                                        <a href="<?= url_to('queriesExecute', $included['windows_10_build']->red_id) ?>"><button class="btn btn-danger" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3"><?= $included['windows_10_build']->red ?></span></button></a>&nbsp;
                                        <a href="<?= url_to('queriesExecute', $included['windows_10_build']->green_id) ?>"><button class="btn btn-success" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3"><?= $included['windows_10_build']->green ?></span></button></a>
                                    </h4>
                                    <p><small class="text-body-secondary">Without / With the latest Windows 10</small><br><br><br></p>
                                </div>
                            </div>
                        </div>

                        <?php
                        if (intval($included['windows_11_build']->red) > 0) {
                            $colour = 'text-bg-danger';
                        } else {
                            $colour = 'text-bg-success';
                        }
                        ?>
                        <div class="col-md-3 h-100" style="padding-left:20px; padding-right:20px;">
                            <div class="row h-100">
                                <div class="col-4 text-center <?= $colour ?> h-100">
                                    <span class="fa-brands fa-windows" style="font-size:5em; padding-top:30px;"></span>
                                </div>
                                <div class="col-8 border-top border-end border-bottom h-100" style="padding-top:14px;">
                                    <h5>LATEST BUILD WINDOWS 11</h5>
                                    <h4>
                                        <a href="<?= url_to('queriesExecute', $included['windows_11_build']->red_id) ?>"><button class="btn btn-danger" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3"><?= $included['windows_11_build']->red ?></span></button></a>&nbsp;
                                        <a href="<?= url_to('queriesExecute', $included['windows_11_build']->green_id) ?>"><button class="btn btn-success" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3"><?= $included['windows_11_build']->green ?></span></button></a>
                                    </h4>
                                    <p><small class="text-body-secondary">Without / With the latest Windows 11</small><br><br><br></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br><br>

                    <div class="row" style="height:140px;">

                        <?php
                        if (intval($included['windows_server_av']->red) > 0) {
                            $colour = 'text-bg-danger';
                        } else {
                            $colour = 'text-bg-success';
                        }
                        ?>
                        <div class="col-md-3 h-100" style="padding-left:20px; padding-right:20px;">
                            <div class="row h-100">
                                <div class="col-4 text-center <?= $colour ?> h-100">
                                    <span class="fa-solid fa-shield-virus" style="font-size:5em; padding-top:30px;"></span>
                                </div>
                                <div class="col-8 border-top border-end border-bottom h-100" style="padding-top:14px;">
                                    <h5>ANTIVIRUS</h5>
                                    <h4>
                                        <a href="<?= url_to('queriesExecute', $included['windows_server_av']->red_id) ?>"><button class="btn btn-danger" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3"><?= $included['windows_server_av']->red ?></span></button></a>&nbsp;
                                        <a href="<?= url_to('queriesExecute', $included['windows_server_av']->green_id) ?>"><button class="btn btn-success" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3"><?= $included['windows_server_av']->green ?></span></button></a>
                                    </h4>
                                    <p><small class="text-body-secondary">Windows Server</small><br><br><br></p>
                                </div>
                            </div>
                        </div>



                        <?php
                        if (intval($included['windows_server_firewall']->red) > 0) {
                            $colour = 'text-bg-danger';
                        } else {
                            $colour = 'text-bg-success';
                        }
                        ?>
                        <div class="col-md-3 h-100" style="padding-left:20px; padding-right:20px;">
                            <div class="row h-100">
                                <div class="col-4 text-center <?= $colour ?> h-100">
                                    <span class="fa-solid fa-shield-halved" style="font-size:5em; padding-top:30px;"></span>
                                </div>
                                <div class="col-8 border-top border-end border-bottom h-100" style="padding-top:14px;">
                                    <h5>FIREWALL</h5>
                                    <h4>
                                        <a href="<?= url_to('queriesExecute', $included['windows_server_firewall']->red_id) ?>"><button class="btn btn-danger" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3"><?= $included['windows_server_firewall']->red ?></span></button></a>&nbsp;
                                        <a href="<?= url_to('queriesExecute', $included['windows_server_firewall']->green_id) ?>"><button class="btn btn-success" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3"><?= $included['windows_server_firewall']->green ?></span></button></a>
                                    </h4>
                                    <p><small class="text-body-secondary">Windows Server</small><br><br><br></p>
                                </div>
                            </div>
                        </div>

                        <?php
                        if (intval($included['windows_19_build']->red) > 0) {
                            $colour = 'text-bg-danger';
                        } else {
                            $colour = 'text-bg-success';
                        }
                        ?>
                        <div class="col-md-3 h-100" style="padding-left:20px; padding-right:20px;">
                            <div class="row h-100">
                                <div class="col-4 text-center <?= $colour ?> h-100">
                                    <span class="fa-brands fa-windows" style="font-size:5em; padding-top:30px;"></span>
                                </div>
                                <div class="col-8 border-top border-end border-bottom h-100" style="padding-top:14px;">
                                    <h5>LATEST BUILD SERVER 2019</h5>
                                    <h4>
                                        <a href="<?= url_to('queriesExecute', $included['windows_19_build']->red_id) ?>"><button class="btn btn-danger" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3"><?= $included['windows_19_build']->red ?></span></button></a>&nbsp;
                                        <a href="<?= url_to('queriesExecute', $included['windows_19_build']->green_id) ?>"><button class="btn btn-success" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3"><?= $included['windows_19_build']->green ?></span></button></a>
                                    </h4>
                                    <p><small class="text-body-secondary">Without / With the latest Windows 2019</small><br><br><br></p>
                                </div>
                            </div>
                        </div>

                        <?php
                        if (intval($included['windows_22_build']->red) > 0) {
                            $colour = 'text-bg-danger';
                        } else {
                            $colour = 'text-bg-success';
                        }
                        ?>
                        <div class="col-md-3 h-100" style="padding-left:20px; padding-right:20px;">
                            <div class="row h-100">
                                <div class="col-4 text-center <?= $colour ?> h-100">
                                    <span class="fa-brands fa-windows" style="font-size:5em; padding-top:30px;"></span>
                                </div>
                                <div class="col-8 border-top border-end border-bottom h-100" style="padding-top:14px;">
                                    <h5>LATEST BUILD SERVER 2022</h5>
                                    <h4>
                                        <a href="<?= url_to('queriesExecute', $included['windows_22_build']->red_id) ?>"><button class="btn btn-danger" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3"><?= $included['windows_22_build']->red ?></span></button></a>&nbsp;
                                        <a href="<?= url_to('queriesExecute', $included['windows_22_build']->green_id) ?>"><button class="btn btn-success" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3"><?= $included['windows_22_build']->green ?></span></button></a>
                                    </h4>
                                    <p><small class="text-body-secondary">Without / With the latest Windows 2022</small><br><br><br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>


                    <div class="row" style="height:140px;">
                        <?php
                        if (intval($included['software']->red) > 0) {
                            $colour = 'text-bg-danger';
                        } elseif (intval($included['software']->yellow) > 0) {
                            $colour = 'text-bg-warning';
                        } else {
                            $colour = 'text-bg-success';
                        }
                        ?>
                        <div class="col-md-3 h-100" style="padding-left:20px; padding-right:20px;">
                            <div class="row h-100">
                                <div class="col-4 text-center <?= $colour ?> h-100">
                                    <span class="fa-solid fa-box-open" style="font-size:4em; padding-top:30px;"></span>
                                </div>
                                <div class="col-8 border-top border-end border-bottom h-100" style="padding-top:14px;">
                                    <h5>SOFTWARE</h5>
                                    <h4>
                                        <a href="<?= url_to('queriesExecute', $included['software']->red_id) ?>"><button class="btn btn-danger" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3"><?= $included['software']->red ?></span></button></a>&nbsp;
                                        <a href="<?= url_to('queriesExecute', $included['software']->yellow_id) ?>"><button class="btn btn-warning" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3"><?= $included['software']->yellow ?></span></button></a>&nbsp;
                                        <a href="<?= url_to('queriesExecute', $included['software']->green_id) ?>"><button class="btn btn-success" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3"><?= $included['software']->green ?></span></button></a>
                                    </h4>
                                    <p><small class="text-body-secondary">Banned / Ignored / Approved</small><br><br><br></p>
                                </div>
                            </div>
                        </div>

                        <?php
                        if (intval($included['devices_os_updates']->red) > 0) {
                            $colour = 'text-bg-danger';
                        } else {
                            $colour = 'text-bg-success';
                        }
                        ?>
                        <div class="col-md-3 h-100" style="padding-left:20px; padding-right:20px;">
                            <div class="row h-100">
                                <div class="col-4 text-center <?= $colour ?> h-100">
                                    <span class="fa-solid fa-download" style="font-size:4em; padding-top:30px;"></span>
                                </div>
                                <div class="col-8 border-top border-end border-bottom h-100" style="padding-top:14px;">
                                    <h5>OS UPDATES</h5>
                                    <h4>
                                        <a href="<?= url_to('queriesExecute', $included['devices_os_updates']->red_id) ?>"><button class="btn btn-danger" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3"><?= intval($included['devices_os_updates']->red) ?></span></button></a>
                                    </h4>
                                    <p><small class="text-body-secondary">Last Checked For Updates > 2 weeks</small><br><br><br></p>
                                </div>
                            </div>
                        </div>

                        <?php
                        if (intval($included['devices_not_seen']->red) > 0) {
                            $colour = 'text-bg-danger';
                        } elseif (intval($included['devices_not_seen']->yellow) > 0) {
                            $colour = 'text-bg-warning';
                        } else {
                            $colour = 'text-bg-success';
                        }
                        ?>
                        <div class="col-md-3 h-100" style="padding-left:20px; padding-right:20px;">
                            <div class="row h-100">
                                <div class="col-4 text-center <?= $colour ?> h-100">
                                    <span class="fa-solid fa-computer" style="font-size:4em; padding-top:30px;"></span>
                                </div>
                                <div class="col-8 border-top border-end border-bottom h-100" style="padding-top:14px;">
                                    <h5>DEVICES NOT SEEN</h5>
                                    <h4>
                                        <a href="<?= url_to('queriesExecute', $included['devices_not_seen']->red_id) ?>"><button class="btn btn-danger" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3"><?= $included['devices_not_seen']->red ?></span></button></a>&nbsp;
                                        <a href="<?= url_to('queriesExecute', $included['devices_not_seen']->yellow_id) ?>"><button class="btn btn-warning" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3"><?= $included['devices_not_seen']->yellow ?></span></button></a>&nbsp;
                                        <a href="<?= url_to('queriesExecute', $included['devices_not_seen']->green_id) ?>"><button class="btn btn-success" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3"><?= $included['devices_not_seen']->green ?></span></button></a>
                                    </h4>
                                    <p><small class="text-body-secondary">Not Seen for 30 / 7 / Less than 7 Days</small><br><br><br></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 h-100" style="padding-left:20px; padding-right:20px;">
                            <div class="row h-100">
                                <!--<div class="col-4 text-center <?= $colour ?> h-100">
                                </div>-->
                                <div class="col-12" id="chart">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

        <?php
        $counts = array();
        $dates = array();
        foreach ($included['unknown_devices'] as $item) {
            $counts[] = $item->count;
            $dates[] = $item->date;
        }
        ?>

        var options = {
            series: [{
                name: 'Devices',
                data: <?= json_encode($counts) ?>
            }],
            chart: {
                height: 140,
                type: 'line',
                events: {
                    click(event, chartContext, opts) {
                        if (opts.config.series[opts.seriesIndex].data[opts.dataPointIndex] > 0) {
                            return document.location.href = '/devices?devices.last_seen=LIKE' + opts.config.xaxis.categories[opts.dataPointIndex] + '%&devices.type=in("unknown","unidentified")';
                        }
                    }
                }
            },
            forecastDataPoints: {
                count: 0
            },
            stroke: {
                width: 5,
                curve: 'smooth'
            },
            xaxis: {
                type: 'datetime',
                categories: <?= json_encode($dates) ?>,
                tickAmount: 5,
                labels: {
                    formatter: function(value, timestamp, opts) {
                        return opts.dateFormatter(new Date(timestamp), 'dd MMM')
                    }
                }
            },
            title: {
                text: 'Unknown Devices Found 7 Days',
                align: 'left',
                style: {
                    fontSize: "18px",
                    color: '#666'
                }
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    gradientToColors: ['#da4453', '#ed5565'],
                    shadeIntensity: 1,
                    type: 'horizontal',
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 100, 100, 100]
                },
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    });
}
</script>
