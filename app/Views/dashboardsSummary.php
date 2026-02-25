<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
$instance = & get_instance();
?>
        <main class="container-fluid" id="icon">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-4 clearfix">
                                <h6 style="padding-top:10px;"><span class="icon-router oa-icon"></span><?= __('Device Types') ?></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                    <?php
                    $i = 0;
                    foreach ($included['devices'] as $os) {
                        $i++;
                        if ($os->attributes->type === '') {
                            $os->attributes->icon = 'unknown';
                        }
                        if ($os->attributes->type === 'computer') {
                            $os->attributes->icon = 'computer';
                        }
                        ?>
                        <div class="col-lg-1 text-center">
                            <div>
                                <a href="<?= url_to('devicesCollection') ?>?devices.type=<?= $os->attributes->type ?>" class="position-relative">
                                    <img style="width:4rem;" class="img-responsive center-block" src="<?= $meta->baseurl ?>device_images/<?= $os->attributes->icon ?>.svg" alt="<?= $os->attributes->icon ?>">
                                    <br><?= $os->attributes->type ?>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background:#3bafda"><?= $os->attributes->count ?></span>
                                </a>
                            </div>
                        </div>
                        <?php
                        if ($i === 12 or $i === 24 or $i === 36) {
                            echo "</div><br><div class=\"row\">";
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <br>

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-4 clearfix">
                                <h6 style="padding-top:10px;"><span class="icon-monitor-cloud oa-icon"></span><?= __('OS Families') ?></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                    <?php
                    $i = 0;
                    foreach ($included['os'] as $os) {
                        $i++;
                        ?>
                        <div class="col-lg-1 text-center">
                            <div>
                                <a href="<?= url_to('devicesCollection') ?>?devices.os_family=<?= $os->attributes->os_family ?>" class="position-relative">
                                    <img style="width:4rem;" class="img-responsive center-block" src="<?= $meta->baseurl ?>device_images/<?= $os->attributes->icon ?>.svg" alt="<?= $os->attributes->icon ?>">
                                    <br><?= $os->attributes->os_family ?>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background:#3bafda"><?= $os->attributes->count ?></span>
                                </a>
                            </div>
                        </div>
                        <?php
                        if ($i === 12 or $i === 24 or $i === 36) {
                            echo "</div><br><div class=\"row\">";
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <br>









            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-4 clearfix">
                                <h6 style="padding-top:10px;"><span class="icon-layers-2 oa-icon"></span><?= __('Resources') ?></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                    <?php
                    $i = 0;
                    foreach ($included['collections'] as $name => $collection) {
                        $i++;
                        $color = 'darkgrey';
                        $link = '#';
                        $pill = 'background:dimgrey';
                        $badge = 'color: RGBA(108, 117, 125, var(--bs-bg-opacity, 1)) !important;';
                        $toast = 'toast' . $collection->edition;
                        if ($collection->edition === 'Community') {
                            $link = url_to($name . 'Collection');
                        }
                        if ($collection->edition === 'Professional' and $config->product === 'professional' or $config->product === 'enterprise') {
                            $link = url_to($name . 'Collection');
                            $toast = '';
                        }
                        if ($collection->edition === 'Enterprise' and $config->product === 'enterprise') {
                            $link = url_to($name . 'Collection');
                            $toast = '';
                        }
                        if ($collection->name === 'Discovery Log') {
                            $link = 'discoveries';
                        }
                        if ($collection->name === 'Baselines Policies') {
                            $collection->name = 'Base Policies';
                        }
                        if ($collection->name === 'Baselines Results') {
                            $collection->name = 'Base Results';
                        }
                        ?>
                        <div class="col-lg-1 text-center">
                            <div>
                                <a href="<?= $link ?>" class="position-relative <?= $toast ?>">
                                    <img style="width:4rem;" class="img-responsive center-block" src="<?= $meta->baseurl ?>icons/<?= $name ?>.svg" alt="<?= $name ?>">
                                    <br><?= __($collection->name) ?>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background:#3bafda"><?= $collection->count ?></span>
                                </a>
                            </div>
                        </div>
                        <?php
                        if ($i === 12 or $i === 24 or $i === 36) {
                            echo "</div><br><div class=\"row\">";
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <br>


            <?php if (!empty($config->license) and $config->license !== 'none') { ?>
            <div class="card">
                <div class="card-header" style="height:57px;">
                    <div class="row">
                        <div class="col-9 clearfix">
                                <h6 style="padding-top:10px;"><span class="icon-layers oa-icon"></span><?= __('Components (All Devices)') ?></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body" id="advanced">
                    <div class="row">
                        <?php
                        $components = array('arp', 'audit_log', 'bios', 'change_log', 'cli_config', 'disk', 'dns', 'edit_log', 'ip', 'license', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'route', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
                        if (!empty($instance->config->feature_executables) and $instance->config->feature_executables === 'y') {
                            $components = array('arp', 'audit_log', 'bios', 'change_log', 'cli_config', 'disk', 'dns', 'edit_log', 'executable', 'ip', 'license', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'route', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
                        }
                        $i = 0;
                        foreach ($components as $component) {
                            $i++; ?>
                        <div class="col-lg-1 text-center">
                            <div>
                                <a href="<?= url_to('componentsCollection') ?>?components.type=<?= $component ?>" class="position-relative">
                                    <img style="width:4rem;" class="img-responsive center-block" src="<?= $meta->baseurl ?>icons/<?= $component ?>.svg" alt="<?= $component ?>">
                                    <br><?= __(ucwords(str_replace('_', ' ', $component))) ?>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background:#3bafda"><?= $included[$component] ?></span>
                                </a>
                            </div>
                        </div>
                        <?php
                            if ($i === 12 or $i === 24 or $i === 36) {
                                echo "</div><br><div class=\"row\">";
                            }
                        } ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </main>

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
    });
};
</script>
