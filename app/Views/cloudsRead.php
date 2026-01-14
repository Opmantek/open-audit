<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
include 'shared/common_functions.php';
$style = @$user->toolbar_style;
if ($style === 'icontext') {
    $summary_button = '<li class="nav-item" role="presentation"><a href="#summary" class="nav-link" id="summary-tab"><span style="margin-right:6px;" class="icon-book-check text-primary"></span>' . __('Summary') . '</a></li>';
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab"><span style="margin-right:6px;" class="icon-eye text-success"></span>' . __('Details') . '</a></li>';
    $logs_button    = '<li class="nav-item" role="presentation"><a href="#logs"    class="nav-link" id="logs-tab"><span style="margin-right:6px;" class="icon-logs text-primary" ></span>' . __('Logs')    . '</a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab"><span style="margin-right:6px;" class="icon-computer text-primary" ></span>' . __('Devices') . '</a></li>';
} elseif ($style === 'icon') {
    $summary_button = '<li class="nav-item" role="presentation"><a href="#summary" class="nav-link" id="summary-tab"><span title="' . __('Summary') . '" class="icon-book-check text-primary"></span></a></li>';
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab"><span title="' . __('Details') . '" class="icon-eye text-success"></span></a></li>';
    $logs_button    = '<li class="nav-item" role="presentation"><a href="#logs"    class="nav-link" id="logs-tab"   ><span title="' . __('Logs') .    '" class="icon-logs text-primary"></span></a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab"><span title="' . __('Devices') . '" class="icon-computer text-primary"></span></a></li>';
} else {
    $summary_button = '<li class="nav-item" role="presentation"><a href="#summary" class="nav-link" id="summary-tab">' . __('Summary') . '</a></li>';
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab">' . __('Details') . '</a></li>';
    $logs_button    = '<li class="nav-item" role="presentation"><a href="#logs"    class="nav-link" id="logs-tab"   >' . __('Logs') .    '</a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab">' . __('Devices') . '</a></li>';
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">

                    <div class="row text-center">
                        <div class="col-8 offset-2" style="background-color: rgba(var(--bs-body-color-rgb), 0.03);">
                            <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
                                <?= $summary_button ?>
                                <?= $details_button ?>
                                <?= $logs_button ?>
                                <?= $devices_button ?>
                            </ul>
                        </div>
                    </div>
                    <br/>

                    <div class="tab-content">
                        <div class="tab-pane" id="summary" role="tabpanel" tabindex="0" aria-labelledby="summary">
                            <div class="row">
                                <div class="col-6">
                                    <?= read_field('status', $resource->status, $dictionary->columns->status, false, '', '', '', '', $meta->collection) ?>
                                    <?= read_field('last_run', $included['stats']->last_run, $dictionary->columns->last_run, false, '', '', '', '', $meta->collection) ?>
                                    <?= read_field('duration', $included['stats']->duration . __(' seconds'), $dictionary->columns->duration, false, '', '', '', '', $meta->collection) ?>
                                    <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('locationsCollection') . "?locations.cloud_id=" . $resource->id . "\"><span title=\"" . __('View') . "\" class=\"icon-building\" aria-hidden=\"true\"></span></a>"; ?>
                                    <?= read_field('locations', $included['stats']->locations, $dictionary->columns->locations, false, '', $link) ?>
                                    <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('networksCollection') . "?networks.cloud_id=" . $resource->id . "\"><span title=\"" . __('View') . "\" class=\"icon-wifi\" aria-hidden=\"true\"></span></a>"; ?>
                                    <?= read_field('networks', $included['stats']->networks, $dictionary->columns->networks, false, '', $link) ?>
                                    <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?devices.cloud_id=" . $resource->id . "\"><span title=\"" . __('View') . "\" class=\"icon-computer\" aria-hidden=\"true\"></span></a>"; ?>
                                    <?= read_field('devices_retrieved', $included['stats']->devices_retrieved, $dictionary->columns->devices_retrieved, false, '', $link) ?>
                                    <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?devices.cloud_id=" . $resource->id . "&devices.serial=!=\"><span title=\"" . __('View') . "\" class=\"icon-computer\" aria-hidden=\"true\"></span></a>"; ?>
                                    <?= read_field('devices_audited', $included['stats']->devices_audited, $dictionary->columns->devices_audited, false, '', $link) ?>
                                    <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?devices.cloud_id=" . $resource->id . "&devices.serial=\"><span title=\"" . __('View') . "\" class=\"icon-computer\" aria-hidden=\"true\"></span></a>"; ?>
                                    <?= read_field('devices_not_audited', $included['stats']->devices_not_audited, $dictionary->columns->devices_not_audited, false, '', $link) ?>
                                    <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?devices.cloud_id=" . $resource->id . "&devices.instance_state=running\"><span title=\"" . __('View') . "\" class=\"icon-computer\" aria-hidden=\"true\"></span></a>"; ?>
                                    <?= read_field('devices_running', $included['stats']->devices_running, $dictionary->columns->devices_running, false, '', $link) ?>
                                    <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?devices.cloud_id=" . $resource->id . "&devices.instance_state=!=running\"><span title=\"" . __('View') . "\" class=\"icon-computer\" aria-hidden=\"true\"></span></a>"; ?>
                                    <?= read_field('devices_stopped', $included['stats']->devices_stopped, $dictionary->columns->devices_stopped, false, '', $link) ?>
                                </div>
                                <div class="col-6">
                                    <br>
                                    <div class="offset-2 col-8">
                                        <?= aboutNotesDiv ($meta->collection, $dictionary) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane" id="details" role="tabpanel" tabindex="0" aria-labelledby="details">
                            <div class="row">
                                <div class="col-6">
                                    <?= read_field('name', $resource->name, $dictionary->columns->name, $update, '', '', '', '', $meta->collection) ?>
                                    <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, '', $orgs, $meta->collection) ?>
                                    <?= read_field('description', $resource->description, $dictionary->columns->description, $update, '', '', '', '', $meta->collection) ?>
                                    <?= read_select('options.ssh', $resource->options->ssh, $dictionary->columns->ssh, $update, __('Use SSH'), array(), $meta->collection) ?>
                                    <?= read_select('options.wmi', $resource->options->wmi, $dictionary->columns->wmi, $update, __('Use WMI'), array(), $meta->collection) ?>
                                    <?= read_select('options.snmp', $resource->options->snmp, $dictionary->columns->snmp, $update, __('Use SNMP'), array(), $meta->collection) ?>
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <?= read_field_header($meta->collection, 'type', $dictionary->columns->type) ?>
                                            <div class="input-group">
                                                <select class="form-select" id="type" name="type" data-original-value="<?= $resource->type ?>" disabled>
                                                    <option value="amazon">Amazon AWS</option>
                                                    <option value="google">Google Compute</option>
                                                    <option value="microsoft">Microsoft Azure</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if ($resource->type === 'amazon') {
                                        echo read_field('credentials.key', $resource->credentials->key, $dictionary->columns->key, $update, __('Credentials Key'), '', '', '', $meta->collection);
                                        echo read_field('credentials.secret_key', '', $dictionary->columns->secret_key, $update, __('Credentials Secret Key'), '', '', '', $meta->collection);
                                    } elseif ($resource->type === 'microsoft') {
                                        echo read_field('credentials.subscription_id', $resource->credentials->subscription_id, $dictionary->columns->subscription_id, $update, '', '', '', '', $meta->collection);
                                        echo read_field('credentials.tenant_id', $resource->credentials->tenant_id, $dictionary->columns->tenant_id, $update, '', '', '', '', $meta->collection);
                                        echo read_field('credentials.client_id', $resource->credentials->client_id, $dictionary->columns->client_id, $update, '', '', '', '', $meta->collection);
                                        echo read_field('credentials.client_secret', '', $dictionary->columns->client_secret, $update, '', '', '', 'password', $meta->collection);
                                    } elseif ($resource->type === 'google') {
                                        echo read_field('credentials.json', '', $dictionary->columns->json, $update, __('Google JSON Credentials'), '', '', 'password', $meta->collection);
                                    } ?>
                                    <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false, '', '', '', '', $meta->collection) ?>
                                    <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false, '', '', '', '', $meta->collection) ?>
                                </div>
                                <div class="col-6">
                                    <br>
                                    <div class="offset-2 col-8">
                                        <?= aboutNotesDiv ($meta->collection, $dictionary) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane" id="logs" role="tabpanel" tabindex="0" aria-labelledby="logs">
                            <div class="row">
                                <div class="col-12">
                                    <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[0,"asc"]]'>
                                        <thead>
                                            <tr>
                                                <th><?= __('ID') ?></th>
                                                <th><?= __('Timestamp') ?></th>
                                                <th><?= __('Severity') ?></th>
                                                <th><?= __('Message') ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($included['logs'] as $log) { ?>
                                            <tr>
                                                <td><?= $log->id ?></td>
                                                <td><?= $log->timestamp ?></td>
                                                <td><?= $log->severity_text ?></td>
                                                <td><?= $log->message ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane" id="devices" role="tabpanel" tabindex="0" aria-labelledby="devices">
                            <div class="row">
                                <div class="col-12">
                                    <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[2,"asc"]]'>
                                        <thead>
                                            <tr>
                                                <th style="min-width:6rem;" data-orderable="false" class="text-center"><?= __('View') ?></th>
                                                <th style="min-width:6rem;" data-orderable="false" class="text-center"></th>
                                                <th style="min-width:6rem;"><?= __('IP') ?></th>
                                                <th style="min-width:6rem;"><?= __('Name') ?></th>
                                                <th style="min-width:6rem;"><?= __('OS Group') ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($included['devices'] as $device) { ?>
                                            <tr>
                                                    <td class="text-center"><a title=" <?= __('Devices') ?>" role="button" class="btn btn-sm btn-devices" href="<?= url_to('devicesRead', $device->{'devices.id'}) ?>"><span style="width:1rem;" title="<?= __('Devices') ?>" class="icon-computer" aria-hidden="true"></span></a></td>
                                                <td class="text-center"><img style="width:30px;" src="<?= $meta->baseurl ?>device_images/<?= $device->{'devices.icon'} ?>.svg" alt=""/></td>
                                                <td><span style="display:none;"><?= $device->{'devices.padded_ip'} ?></span><?= $device->{'devices.ip'} ?></td>
                                                <td><?= $device->{'devices.name'} ?></td>
                                                <td><?= $device->{'devices.os_group'} ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {
        $("#type").val("<?= $resource->type ?>");

        <?php if (isset($resource->credentials->client_secret)) {
            if ($resource->credentials->client_secret !== '') { ?>
                $("#credentials\\.client_secret").attr("placeholder", "<?= __('removed from display, but has been set') ?>");
            <?php } else { ?>
                $("#credentials\\.client_secret").attr("placeholder", "<?= __('has not been set') ?>");
            <?php }
        } ?>

        <?php if (isset($resource->credentials->json)) {
            if ($resource->credentials->json !== '') { ?>
                $("#credentials\\.json").attr("placeholder", "<?= __('removed from display, but has been set') ?>");
            <?php } else { ?>
                $("#credentials\\.json").attr("placeholder", "<?= __('has not been set') ?>");
            <?php }
        } ?>

        <?php if (isset($resource->credentials->secret_key)) {
            if ($resource->credentials->secret_key !== '') { ?>
                $("#credentials\\.secret_key").attr("placeholder", "<?= __('removed from display, but has been set') ?>");
            <?php } else { ?>
                $("#credentials\\.secret_key").attr("placeholder", "<?= __('has not been set') ?>");
            <?php }
        } ?>

        var hash = window.location.hash;
        if (hash == "") {
            hash = "#summary"
        }
        hash && $('ul.nav.nav-pills a[href="' + hash + '"]').tab('show');

        $('ul.nav.nav-pills a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
            window.location.hash = this.hash;
        });

        $(".nav-link").click(function(e) {
            window.scrollTo(0, 0);
        });

    });
}
</script>