<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
include 'shared/common_functions.php';
include 'shared/widget_functions.php';
$summary_id = 0;
$os_systems_id = 0;
if (!empty($queries) and $resource->sidebar === 'y') {
    foreach ($queries as $query) {
        if ($query->attributes->name === 'Device Types' and $query->type === 'summaries') {
            $summary_id = $query->id;
        }
        if ($query->attributes->name === 'Operating System Names' and $query->type === 'summaries') {
            $os_systems_id = $query->id;
        }
    }
}
$checks = prereqCheck();
$display = false;
foreach ($checks as $key => $value) {
    if ($value !== 'y') {
        $display = true;
    }
}
$temp = explode('x', $resource->options->layout);
$columns = intval($temp[0]);
$rows = intval($temp[1]);
if ($columns === 6) {
    $colWidth = 'col-2';
}
if ($columns === 4) {
    $colWidth = 'col-3';
}
if ($columns === 3) {
    $colWidth = 'col-4';
}
$message = '';
if ($resource->name === 'Windows Security Dashboard') {
    $message = 'NOTE - The queries for Latest Build must be kept up-to-date by the user. Edit and update the build numbers for the Windows x Latest Build <a href="' . url_to('queriesCollection') . '?queries.name=LIKELatest Build">queries</a> as Microsoft updates them.';
}

?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php if ($resource->sidebar === 'y') { ?>
                        <div class="col-3">
                             <ul class="list-group list-group-flush">
                                <?php if (!empty($user->permissions['devices']) and strpos($user->permissions['devices'], 'r') !== false) { ?>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="oa-menu-icon icon-computer"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('devicesCollection') ?>"><?= __('Devices') ?></a></div>
                                    </div>
                                </li>
                                <?php } ?>
                                <?php if (!empty($summary_id)) { ?>
                                    <?php if (!empty($user->permissions['devices']) and strpos($user->permissions['devices'], 'r') !== false) { ?>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="oa-menu-icon icon-router"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('summariesExecute', $summary_id) ?>"><?= __('Device Types') ?></a></div>
                                    </div>
                                </li>
                                    <?php } ?>
                                <?php } ?>
                                <?php if (!empty($os_systems_id)) { ?>
                                    <?php if (!empty($user->permissions['devices']) and strpos($user->permissions['devices'], 'r') !== false) { ?>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="oa-menu-icon icon-monitor-cloud"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('summariesExecute', $os_systems_id) ?>"><?= __('Operating Systems') ?></a></div>
                                    </div>
                                </li>
                                    <?php } ?>
                                <?php } ?>
                                <?php if (!empty($user->permissions['maps']) and strpos($user->permissions['maps'], 'r') !== false) { ?>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="oa-menu-icon icon-map"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('mapsCollection') ?>"><?= __('Map') ?></a></div>
                                    </div>
                                </li>
                                <?php } ?>
                                <?php if (!empty($user->permissions['discoveries']) and strpos($user->permissions['discoveries'], 'r') !== false) { ?>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="oa-menu-icon icon-binoculars"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('discoveriesCollection') ?>"><?= __('Discoveries') ?></a></div>
                                    </div>
                                </li>
                                <?php } ?>
                                <?php if (!empty($user->permissions['devices']) and strpos($user->permissions['devices'], 'r') !== false) { ?>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="oa-menu-icon icon-screen-share"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('devicesCollection') ?>?devices.first_seen=like<?= date('Y-m-d') ?>%&properties=audit_status,devices.id,devices.icon,devices.ip,devices.type,devices.name,devices.manufacturer,devices.first_seen,locations.name"><?= __('Devices Found Today') ?></a></div>
                                    </div>
                                </li>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="oa-menu-icon icon-screen-share"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('devicesCollection') ?>?devices.first_seen=like<?= date('Y-m-d', strtotime('-1 days')) ?>%&properties=audit_status,devices.id,devices.icon,devices.ip,devices.type,devices.name,devices.manufacturer,devices.first_seen,locations.name"><?= __('Devices Found Yesterday') ?></a></div>
                                    </div>
                                </li>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="oa-menu-icon icon-screen-share"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('devicesCollection') ?>?devices.first_seen=><?= date('Y-m-d', strtotime('-7 days')) ?>&properties=audit_status,devices.id,devices.icon,devices.ip,devices.type,devices.name,devices.manufacturer,devices.first_seen,locations.name"><?= __('Devices Found Last 7 Days') ?></a></div>
                                    </div>
                                </li>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="oa-menu-icon icon-chart-bar-increasing"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('devicesCollection') ?>?change_log.db_table=software&change_log.db_action=create&change_log.timestamp=like<?= date('Y-m-d') ?>%&properties=devices.id,devices.icon,devices.ip,devices.name,devices.os_family,change_log.details,change_log.timestamp"><?= __('Software Found Today') ?></a></div>
                                    </div>
                                </li>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="oa-menu-icon icon-chart-bar-increasing"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('devicesCollection') ?>?change_log.db_table=software&change_log.db_action=create&change_log.timestamp=like<?= date('Y-m-d', strtotime('-1 days')) ?>%&properties=devices.id,devices.icon,devices.ip,devices.name,devices.os_family,change_log.details,change_log.timestamp"><?= __('Software Found Yesterday') ?></a></div>
                                    </div>
                                </li>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="oa-menu-icon icon-chart-bar-increasing"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('devicesCollection') ?>?change_log.db_table=software&change_log.db_action=create&change_log.timestamp=>=<?= date('Y-m-d', strtotime('-7 days')) ?>&properties=devices.id,devices.icon,devices.ip,devices.name,devices.os_family,change_log.details,change_log.timestamp"><?= __('Software Found Last 7 Days') ?></a></div>
                                    </div>
                                </li>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="oa-menu-icon icon-laptop"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('devicesCollection') ?>?devices.last_seen=<=<?= date('Y-m-d', strtotime('-7 days')) ?>&properties=audit_status,devices.id,devices.icon,devices.ip,devices.type,devices.name,devices.manufacturer,devices.last_seen,locations.name"><?= __('Devices Not Seen 7 Days') ?></a></div>

                                    </div>
                                </li>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="oa-menu-icon icon-laptop"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('devicesCollection') ?>?devices.last_seen=<=<?= date('Y-m-d', strtotime('-30 days')) ?>&properties=audit_status,devices.id,devices.icon,devices.ip,devices.type,devices.name,devices.manufacturer,devices.last_seen,locations.name"><?= __('Devices Not Seen 30 Days') ?></a></div>
                                    </div>
                                </li>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="oa-menu-icon icon-laptop"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('devicesCollection') ?>?devices.last_seen=<=<?= date('Y-m-d', strtotime('-90 days')) ?>&properties=audit_status,devices.id,devices.icon,devices.ip,devices.type,devices.name,devices.manufacturer,devices.last_seen,locations.name"><?= __('Devices Not Seen 90 Days') ?></a></div>
                                    </div>
                                </li>
                                <?php } ?>

                                <?php if ($display) {
                                    echo "<li class=\"list-group-item\">\n"; ?>
                                    <br><h5><?= __('Issues') ?></h5>
                                </li>
                                    <?php foreach ($checks as $key => $value) {
                                        if ($value === 'n') {
                                            echo "<li class=\"list-group-item\">\n"; ?>
                                    <div class="row">
                                        <div class="col-1"><span class="icon-triangle-alert text-danger"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><?= $key ?>: <a href="<?= url_to('prereq') . '#' . $key ?>"><?= __('Fix') ?></a></div>
                                    </div>
                                </li>
                                        <?php }
                                    }
                                }
                                echo "</ul>\n";
                                ?>
                        </div>
                        <div class="col-9" id="dashboard">
                        <?php } ?>

                        <?php if ($resource->sidebar !== 'y') { ?>
                        <div class="col-12" id="dashboard">
                        <?php }


                        for ($row = 0; $row < $rows; $row++) {
                            echo "<div class=\"row\">\n";
                            for ($col = 1; $col < ($columns + 1); $col++) {
                                foreach ($resource->options->widgets as $widget) {
                                    if ($widget->position == (($row * $columns) + $col)) {
                                        echo "                               <div data-num=\"col $col, row $row, pos $widget->position\" id=\"widget_" . @$widget->widget_id . "\" class=\"$colWidth\" style=\"padding: 10px 10px;\"></div>\n";
                                    }
                                }
                            }
                            echo "</div>\n";
                        }
                        ?>


                    </div>
                </div>
            </div>
            <?php if (!empty($message)) { ?>
                <div class="container-fluid">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?= $message ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            <?php } ?>
        </main>

<script {csp-script-nonce} defer src="<?= base_url('js/highcharts-9.3.1.min.js') ?>"></script>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {

        /* Only on the dashboardsExecute template */
        $(document).on('click', '#make_my_dashboard_button', function (e) {
            var data = {};
            data["data"] = {};
            data["data"]["id"] = <?= $user->id ?>;
            data["data"]["type"] = 'users';
            data["data"]["attributes"] = {};
            data["data"]["attributes"]['dashboard_id'] = <?= $meta->id ?>;
            data = JSON.stringify(data);
            $.ajax({
                type: "PATCH",
                url: "<?= url_to('usersRead', $user->id) ?>",
                contentType: "application/json",
                data: {data : data},
                success: function (data) {
                    $("#make_my_dashboard_button").attr("disabled", "disabled");
                    $("#liveToastSuccess-header").text("Default Dashboard Updated");
                    $("#liveToastSuccess-body").text("Your default dashboard has been updated.");
                    var toastElList = [].slice.call(document.querySelectorAll('.toast-success'));
                    var toastList = toastElList.map(function(toastEl) {
                        return new bootstrap.Toast(toastEl)
                    });
                    toastList.forEach(toast => toast.show());
                },
                error: function (data) {
                    data = JSON.parse(data.responseText);
                    alert(data.errors[0].code + "\n\n" + data.errors[0].title + "\n\n" + data.errors[0].detail + "\n\n" + data.errors[0].message);
                }
            });
        });

        $("#button_export_json").remove();
        $("#button_execute").remove();
        $(".delete_link").remove();

        $('.chart-raw-legend').css('overflow-y','visible');

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
        foreach ($included['widgets'] as $widget) {
            if (!empty($widget->formatted) and !empty($widget->type) and $widget->type !== 'traffic' and $widget->type !== 'status') {
                $wf = json_encode($widget->formatted);
                $wf = htmlspecialchars_decode($wf, ENT_QUOTES);
                $wf = str_replace('"function(event){location.href = this.options.url;}"', 'function(event){location.href = this.options.url;}', $wf);
                // echo "\n\tHighcharts.chart(" . html_entity_decode($wf) . ");\n";
                echo "\n\tHighcharts.chart(" . $wf . ");\n";
            }
        } ?>

        <?php
        foreach ($included['widgets'] as $widget) {
            if (!empty($widget->type) and $widget->type === 'traffic') {
                echo "$(\"#widget_" . $widget->id . "\").html('" . traffic_widget($widget) . "');\n";
            }
            if (!empty($widget->type) and $widget->type === 'status') {
                echo "$(\"#widget_" . $widget->id . "\").html('" . status_widget($widget) . "');\n";
            }
        }
        ?>

        /* Enable pop-over's */
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        });

    });
}
</script>

