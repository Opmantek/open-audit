<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
include 'shared/common_functions.php';
include 'shared/widget_functions.php';

$summary_id = 0;
$os_systems_id = 0;
$alertMessage = '';
$widgets = $included['widgets'] ?? [];

if (! empty($queries) && $resource->sidebar === 'y') {
    foreach ($queries as $query) {
        if ($query->attributes->name === 'Device Types' && $query->type === 'summaries') {
            $summary_id = $query->id;
        }
        if ($query->attributes->name === 'Operating System Names' && $query->type === 'summaries') {
            $os_systems_id = $query->id;
        }
    }
}

$checks = prereqCheck();
$hasIssues = false;

foreach ($checks as $key => $value) {
    if ($value !== 'y') {
        $hasIssues = true;
    }
}

$temp = explode('x', $resource->options->layout);
$columns = intval($temp[0]);
$rows = intval($temp[1]);
$colWidth = match ($columns) {
    6 => 'col-2',
    4 => 'col-3',
    3 => 'col-4',
    default => 'col-12',
};

if ($resource->name === 'Windows Security Dashboard') {
    $alertMessage = 'NOTE - The queries for Latest Build must be kept up-to-date by the user. Edit and update the build numbers for the Windows x Latest Build <a href="' . url_to('queriesCollection') . '?queries.name=LIKELatest Build">queries</a> as Microsoft updates them.';
}

?>
<main class="container-fluid">
    <div class="card">
        <div class="card-header">
            <?php echo read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name); ?>
        </div>
        <div class="card-body">
            <div class="row">
            <?php if ($resource->sidebar === 'y'): ?>
                <div class="col-3">
                    <ul class="list-group list-group-flush">
                        <?php if (! empty($user->permissions['devices']) && str_contains($user->permissions['devices'], 'r')): ?>
                        <li class="list-group-item oa-li-hover">
                            <div class="row">
                                <div class="col-1"><span class="oa-menu-icon icon-computer"></span></div>
                                <div class="col-10 col-offset-1" style="padding-left:1rem;">
                                    <a href="<?php echo url_to('devicesCollection'); ?>"><?php echo __('Devices'); ?></a>
                                </div>
                            </div>
                        </li>
                        <?php endif; ?>
                        <?php if (! empty($summary_id) && ! empty($user->permissions['devices']) && str_contains($user->permissions['devices'], 'r')): ?>
                        <li class="list-group-item oa-li-hover">
                            <div class="row">
                                <div class="col-1"><span class="oa-menu-icon icon-router"></span></div>
                                <div class="col-10 col-offset-1" style="padding-left:1rem;">
                                    <a href="<?php echo url_to('summariesExecute', $summary_id); ?>"><?php echo __('Device Types'); ?></a>
                                </div>
                            </div>
                        </li>
                        <?php endif; ?>
                        <?php if (! empty($os_systems_id) && ! empty($user->permissions['devices']) && str_contains($user->permissions['devices'], 'r')): ?>
                        <li class="list-group-item oa-li-hover">
                            <div class="row">
                                <div class="col-1"><span class="oa-menu-icon icon-monitor-cloud"></span></div>
                                <div class="col-10 col-offset-1" style="padding-left:1rem;">
                                    <a href="<?php echo url_to('summariesExecute', $os_systems_id); ?>"><?php echo __('Operating Systems'); ?></a>
                                </div>
                            </div>
                        </li>
                        <?php endif; ?>
                        <?php if (! empty($user->permissions['maps']) && str_contains($user->permissions['maps'], 'r')): ?>
                        <li class="list-group-item oa-li-hover">
                            <div class="row">
                                <div class="col-1"><span class="oa-menu-icon icon-map"></span></div>
                                <div class="col-10 col-offset-1" style="padding-left:1rem;">
                                    <a href="<?php echo url_to('mapsCollection'); ?>"><?php echo __('Map'); ?></a>
                                </div>
                            </div>
                        </li>
                        <?php endif; ?>
                        <?php if (! empty($user->permissions['discoveries']) && str_contains($user->permissions['discoveries'], 'r')): ?>
                        <li class="list-group-item oa-li-hover">
                            <div class="row">
                                <div class="col-1"><span class="oa-menu-icon icon-binoculars"></span></div>
                                <div class="col-10 col-offset-1" style="padding-left:1rem;">
                                    <a href="<?php echo url_to('discoveriesCollection'); ?>"><?php echo __('Discoveries'); ?></a>
                                </div>
                            </div>
                        </li>
                        <?php endif; ?>
                        <?php if (! empty($user->permissions['devices']) && str_contains($user->permissions['devices'], 'r')): ?>
                        <li class="list-group-item oa-li-hover">
                            <div class="row">
                                <div class="col-1"><span class="oa-menu-icon icon-screen-share"></span></div>
                                <div class="col-10 col-offset-1" style="padding-left:1rem;">
                                    <a href="<?php echo url_to('devicesCollection'); ?>?devices.first_seen=like<?php echo date('Y-m-d'); ?>%&properties=audit_status,devices.id,devices.icon,devices.ip,devices.type,devices.name,devices.manufacturer,devices.first_seen,locations.name"><?php echo __('Devices Found Today'); ?></a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item oa-li-hover">
                            <div class="row">
                                <div class="col-1"><span class="oa-menu-icon icon-screen-share"></span></div>
                                <div class="col-10 col-offset-1" style="padding-left:1rem;">
                                    <a href="<?php echo url_to('devicesCollection'); ?>?devices.first_seen=like<?php echo date('Y-m-d', strtotime('-1 days')); ?>%&properties=audit_status,devices.id,devices.icon,devices.ip,devices.type,devices.name,devices.manufacturer,devices.first_seen,locations.name"><?php echo __('Devices Found Yesterday'); ?></a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item oa-li-hover">
                            <div class="row">
                                <div class="col-1"><span class="oa-menu-icon icon-screen-share"></span></div>
                                <div class="col-10 col-offset-1" style="padding-left:1rem;">
                                    <a href="<?php echo url_to('devicesCollection'); ?>?devices.first_seen=><?php echo date('Y-m-d', strtotime('-7 days')); ?>&properties=audit_status,devices.id,devices.icon,devices.ip,devices.type,devices.name,devices.manufacturer,devices.first_seen,locations.name"><?php echo __('Devices Found Last 7 Days'); ?></a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item oa-li-hover">
                            <div class="row">
                                <div class="col-1"><span class="oa-menu-icon icon-chart-bar-increasing"></span></div>
                                <div class="col-10 col-offset-1" style="padding-left:1rem;">
                                    <a href="<?php echo url_to('devicesCollection'); ?>?change_log.db_table=software&change_log.db_action=create&change_log.timestamp=like<?php echo date('Y-m-d'); ?>%&properties=devices.id,devices.icon,devices.ip,devices.name,devices.os_family,change_log.details,change_log.timestamp"><?php echo __('Software Found Today'); ?></a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item oa-li-hover">
                            <div class="row">
                                <div class="col-1"><span class="oa-menu-icon icon-chart-bar-increasing"></span></div>
                                <div class="col-10 col-offset-1" style="padding-left:1rem;">
                                    <a href="<?php echo url_to('devicesCollection'); ?>?change_log.db_table=software&change_log.db_action=create&change_log.timestamp=like<?php echo date('Y-m-d', strtotime('-1 days')); ?>%&properties=devices.id,devices.icon,devices.ip,devices.name,devices.os_family,change_log.details,change_log.timestamp"><?php echo __('Software Found Yesterday'); ?></a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item oa-li-hover">
                            <div class="row">
                                <div class="col-1"><span class="oa-menu-icon icon-chart-bar-increasing"></span></div>
                                <div class="col-10 col-offset-1" style="padding-left:1rem;">
                                    <a href="<?php echo url_to('devicesCollection'); ?>?change_log.db_table=software&change_log.db_action=create&change_log.timestamp=>=<?php echo date('Y-m-d', strtotime('-7 days')); ?>&properties=devices.id,devices.icon,devices.ip,devices.name,devices.os_family,change_log.details,change_log.timestamp"><?php echo __('Software Found Last 7 Days'); ?></a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item oa-li-hover">
                            <div class="row">
                                <div class="col-1"><span class="oa-menu-icon icon-laptop"></span></div>
                                <div class="col-10 col-offset-1" style="padding-left:1rem;">
                                    <a href="<?php echo url_to('devicesCollection'); ?>?devices.last_seen=<=<?php echo date('Y-m-d', strtotime('-7 days')); ?>&properties=audit_status,devices.id,devices.icon,devices.ip,devices.type,devices.name,devices.manufacturer,devices.last_seen,locations.name"><?php echo __('Devices Not Seen 7 Days'); ?></a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item oa-li-hover">
                            <div class="row">
                                <div class="col-1"><span class="oa-menu-icon icon-laptop"></span></div>
                                <div class="col-10 col-offset-1" style="padding-left:1rem;">
                                    <a href="<?php echo url_to('devicesCollection'); ?>?devices.last_seen=<=<?php echo date('Y-m-d', strtotime('-30 days')); ?>&properties=audit_status,devices.id,devices.icon,devices.ip,devices.type,devices.name,devices.manufacturer,devices.last_seen,locations.name"><?php echo __('Devices Not Seen 30 Days'); ?></a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item oa-li-hover">
                            <div class="row">
                                <div class="col-1"><span class="oa-menu-icon icon-laptop"></span></div>
                                <div class="col-10 col-offset-1" style="padding-left:1rem;">
                                    <a href="<?php echo url_to('devicesCollection'); ?>?devices.last_seen=<=<?php echo date('Y-m-d', strtotime('-90 days')); ?>&properties=audit_status,devices.id,devices.icon,devices.ip,devices.type,devices.name,devices.manufacturer,devices.last_seen,locations.name"><?php echo __('Devices Not Seen 90 Days'); ?></a>
                                </div>
                            </div>
                        </li>
                        <?php endif; ?>

                        <?php if ($hasIssues): ?>
                            <li class="list-group-item">
                                <br><h5><?php echo __('Issues'); ?></h5>
                            </li>
                            <?php foreach ($checks as $key => $value): ?>
                                <?php if ($value === 'n'): ?>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-1"><span class="icon-triangle-alert text-danger"></span></div>
                                            <div class="col-10 col-offset-1" style="padding-left:1rem;">
                                                <?php echo $key; ?>: <a href="<?php echo url_to('prereq'); ?>#<?php echo $key; ?>"><?php echo __('Fix'); ?></a>
                                            </div>
                                        </div>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="<?php echo $resource->sidebar === 'y' ? 'col-9' : 'col-12'; ?>" id="dashboard">
                <?php for ($row = 0; $row < $rows; $row++): ?>
                    <div class="row">
                    <?php for ($col = 1; $col < ($columns + 1); $col++): ?>
                        <?php foreach ($resource->options->widgets as $widget): ?>
                            <?php if ($widget->position == (($row * $columns) + $col)): ?>
                                <div class="<?php echo $colWidth; ?>" data-num="col <?php echo $col; ?>, row <?php echo $row; ?>, pos <?php echo $widget->position; ?>" style="padding: 10px 10px;">
                                    <div id="widget_<?php echo $widget->widget_id ?? ''; ?>" class="chart-container"></div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endfor; ?>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
    <?php if (! empty($alertMessage)): ?>
        <div class="container-fluid">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo $alertMessage; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    <?php endif; ?>
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
    var userId = "<?php echo esc($user->id, 'js') ?>";
    var dashboardId = "<?php echo esc($meta->id, 'js') ?>";

    $('#button_export_json').remove();
    $('#button_execute').remove();
    $('.delete_link').remove();

    $(document).on('click', '#make_my_dashboard_button', function (e) {
        var payload = {
            data: {
                id: userId,
                type: 'users',
                attributes: {
                    dashboard_id: dashboardId
                }
            }
        };

        $.ajax({
            type: 'PATCH',
            url: "<?php echo url_to('usersRead', $user->id) ?>",
            contentType: 'application/json',
            data: {data: JSON.stringify(payload)},
            success: function (data) {
                $('#make_my_dashboard_button').attr('disabled', 'disabled');
                $('#liveToastSuccess-header').text('Default Dashboard Updated');
                $('#liveToastSuccess-body').text('Your default dashboard has been updated.');
                $('.toast-success').each(function() {
                    $(this).toast('show');
                });
            },
            error: function (xhr) {
                var response = JSON.parse(xhr.responseText);
                if (response.message) {
                    $('#liveToastFailure-header').text('Update Failed');
                    $('#liveToastFailure-body').text(response.message);
                    $('.toast-failure').each(function() {
                        $(this).toast('show');
                    });
                }
            }
        });
    });
})(jQuery);
</script>

<script {csp-script-nonce}>
    (function($) {
        <?php foreach ($widgets as $widget): ?>
            <?php if (! empty($widget->formatted) && ! empty($widget->type) && in_array($widget->type, ['line', 'pie'])): ?>
                <?php $widgetEncoded = htmlspecialchars_decode(json_encode($widget->formatted), ENT_QUOTES); ?>
                    (function() {
                        var chartDomId = "<?php echo esc($widget->formatted->domId, 'js'); ?>";
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

            <?php if (! empty($widget->type) && in_array($widget->type, ['status', 'traffic'])): ?>
                <?php $chartHtml = $widget->type === 'status' ? status_widget($widget) : traffic_widget($widget); ?>
                    (function() {
                        var chartHtml = "<?php echo esc($chartHtml, 'js'); ?>";
                        var chartDomId = "widget_<?php echo esc($widget->id, 'js'); ?>";
                        var chartDom = $('#' + chartDomId);
                        if (chartDom.length) {
                            chartDom.html(chartHtml);
                        }
                    })();
            <?php endif; ?>
        <?php endforeach; ?>
})(jQuery);
</script>
