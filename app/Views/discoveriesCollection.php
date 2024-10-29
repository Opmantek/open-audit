<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
$advanced_button_color = '';
if (intval($config->queue_count) > 0 or
    !empty($included['ip_scan']) or
    !empty($included['ip_audit']) or
    intval($included['queue_items'])) {
    $advanced_button_color = 'text-primary';
}
$issues_button_color = '';
if (count($included['issues']) > 0) {
    $issues_button_colour = 'text-warning';
}
?>
        <main class="container-fluid">
            <?php if (!empty($config->license) and $config->license !== 'none') { ?>
            <div class="card">
                <div class="card-header" style="height:57px;">
                    <div class="row">
                        <div class="col-9 clearfix">
                            <h6 style="padding-top:10px;"><span class="fa fa-sliders oa-icon"></span><?= __('Advanced') ?></h6>
                        </div>
                        <div class="col-3 clearfix pull-right">
                            <div class="btn-group btn-group-sm float-end mb-2" role="group">
                                <button class="btn btn-outline-secondary panel-button c_change_primary" type="button" data-bs-toggle="collapse" data-bs-target="#advanced" aria-expanded="false" aria-controls="advanced"><span class="fa fa-angle-down <?= $advanced_button_color ?>"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body collapse" id="advanced">
                    <div class="row">
                        <div class="col-4">
                            <div class="row">
                                <div class="offset-3 col-6">
                                    <label for="queue_limit" class="form-label"><?= __('Queue Limit') ?></label>
                                    <div class="input-group">
                                        <input disabled title="<?= __('Queue Limit') ?>" type="text" class="form-control"  id="queue_limit" name="queue_limit" value="<?= $config->queue_limit ?>">
                                        <span class="pull-right">
                                            <?php if (strpos($user->permissions['configuration'], 'u') !== false) { ?>
                                            <a href="<?= url_to('configurationCollection') ?>/queue_limit" role="button" class="btn btn-default" title="<?= __('Discovery Queue Limit') ?>"><span style="width:1rem;" class="fa fa-cog" aria-hidden="true"></span></a>
                                            <?php } ?>
                                            <button type="button" class="btn btn-default" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="The maximum number of parrallel discovery threads.">?</button>
                                        </span>
                                    </div>
                                </div>
                                <span><br></span>

                                <div class="offset-3 col-6">
                                    <label for="queue_count" class="form-label"><?= __('Current Discovery Processes') ?></label>
                                    <div class="input-group">
                                        <input disabled title="<?= __('Current Discovery Processes') ?>" type="text" class="form-control"  id="queue_count" name="queue_count" value="<?= $config->queue_count ?>">
                                        <span class="pull-right">
                                            <?php if (strpos($user->permissions['configuration'], 'u') !== false and intval($config->queue_count) > 0) { ?>
                                            <a id="delete_queue_count" href="#" role="button" class="btn btn-default" title="<?= __('Discovery Queue Count') ?>"><span style="width:1rem;" class="fa fa-trash" aria-hidden="true"></span></a>
                                            <?php } ?>
                                            <button type="button" class="btn btn-default" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="The number of running discovery threads.">?</button>
                                        </span>
                                    </div>
                                </div>
                                <span><br></span>

                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">


                                <div class="offset-3 col-6">
                                    <label for="ip_scan" class="form-label"><?= __('Queued IP Scans') ?></label>
                                    <div class="input-group">
                                        <input disabled title="<?= __('Queued IP Scans') ?>" type="text" class="form-control"  id="ip_scan" name="ip_scan" value="<?= (!empty($included['ip_scan'])) ? $included['ip_scan'] : 0; ?>">
                                        <span class="pull-right">
                                            <button type="button" class="btn btn-default" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="The number of IPs waiting to be scanned in the queue.">?</button>
                                        </span>
                                    </div>
                                </div>
                                <span><br></span>

                                <div class="offset-3 col-6">
                                    <label for="ip_audit" class="form-label"><?= __('Queued Device Audits') ?></label>
                                    <div class="input-group">
                                        <input disabled title="<?= __('Queued Device Audits') ?>" type="text" class="form-control"  id="ip_audit" name="ip_audit" value="<?= (!empty($included['ip_audit'])) ? $included['ip_audit'] : 0; ?>">
                                        <span class="pull-right">
                                            <button type="button" class="btn btn-default" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="The number of devices waiting to be audited in the queue.">?</button>
                                        </span>
                                    </div>
                                </div>
                                <span><br></span>

                            </div>
                        </div>

                        <div class="col-4">
                            <div class="row">


                                <div class="offset-3 col-6">
                                    <label for="queue_items" class="form-label"><?= __('All Queued Items') ?></label>
                                    <div class="input-group">
                                        <input disabled title="<?= __('Queued Items') ?>" type="text" class="form-control"  id="queue_items" name="queue_items" value="<?= $included['queue_items'] ?>">
                                        <span class="pull-right">
                                            <?php if (strpos($user->permissions['configuration'], 'u') !== false and $included['queue_items'] > 0) { ?>
                                            <a id="delete_queue" href="#" role="button" class="btn btn-default" title="<?= __('All Queued Items') ?>"><span style="width:1rem;" class="fa fa-trash" aria-hidden="true"></span></a>
                                            <?php } ?>
                                            <button type="button" class="btn btn-default" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="The number of discovery queue items waiting to be processed.">?</button>
                                        </span>
                                    </div>
                                </div>
                                <span><br></span>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <br>
            <?php } ?>

            <?php if (!empty($config->license) and $config->license !== 'none' and !empty($included['issues'])) { ?>
            <div class="card">
                <div class="card-header" style="height:57px;">
                    <div class="row">
                        <div class="col-9 clearfix">
                            <h6 style="padding-top:10px;"><span class="fa-solid fa-triangle-exclamation oa-icon"></span><?= __('Discovery Issues') . ' (<span style="color: #cc9a06;;">' . count($included['issues']) . '</span>)' ?></h6>
                        </div>
                        <div class="col-3 clearfix pull-right">
                            <div class="btn-group btn-group-sm float-end mb-2" role="group">
                                <button class="btn btn-outline-secondary panel-button c_change_warning" type="button" data-bs-toggle="collapse" data-bs-target="#issues" aria-expanded="false" aria-controls="advanced"><span class="fa fa-angle-down <?= $issues_button_colour ?>"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body collapse" id="issues">
                    <?php if (count($included['issues']) > 99) { ?>
                        <div class="alert alert-warning alert-dismissable fade show" role="alert">
                            <?= __('Limited to 100 rows.') ?>'
                            <button type="button" class="btn-close pull-right" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>
                    <form class="form-horizontal">
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTableIssues" id="table_issue" data-order='[[3,"asc"]]'>
                                    <thead>
                                        <tr>
                                            <th data-orderable="false" class="text-center"><?= __('View Discovery') ?></th>
                                            <th><?= __('Discovery Name') ?></th>
                                            <th data-orderable="false" class="text-center"><?= __('View Device') ?></th>
                                            <th><?= __('IP') ?></th>
                                            <th></th>
                                            <th><?= __('Name') ?></th>
                                            <th><?= __('Issue') ?></th>
                                            <th><?= __('Description') ?></th>
                                            <th data-orderable="false" class="text-center"><?= __('Action') ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($included['issues'] as $issue) { ?>
                                        <?php if (!empty($issue->{'devices.id'})) { ?>
                                        <tr>
                                            <td class="text-center col-md-1"><a title="<?= __('Discovery') ?>" role="button" class="btn btn-sm btn-primary" href="<?= url_to('discoveriesRead', $issue->discovery_id) ?>"><span class="fa fa-eye" aria-hidden="true"></span></a></td>
                                            <td class="col-md-1"><?= $issue->discovery_name ?></td>
                                            <td class="text-center col-md-1"><a title="<?= __('Devices') ?>"role="button" class="btn btn-sm btn-devices" href="<?= url_to('devicesRead', $issue->{'devices.id'}) ?>"><span class="fa fa-desktop" aria-hidden="true"></span></a></td>
                                            <td class="col-md-1"><span style="display:none;"><?= $issue->{'devices.ip_padded'} ?></span><?= $issue->{'devices.ip'} ?><br>
                                            <?php if ($issue->{'devices.type'} === 'unknown') { ?>
                                                <span class="text-danger"><em><?= $issue->{'devices.type'} ?></em></span>
                                            <?php } elseif ($issue->{'devices.type'} === 'unclassified') { ?>
                                                <span class="text-warning"><em><?= $issue->{'devices.type'} ?></em></span>
                                            <?php } else { ?>
                                                <span class="text-success"><em><?= $issue->{'devices.type'} ?></em></span>
                                            <?php } ?>
                                            </td>
                                            <?php if ($issue->{'devices.icon'}) { ?>
                                            <td class="text-center"><img width="30" src="<?= $meta->baseurl ?>device_images/<?= $issue->{'devices.icon'} ?>.svg" alt=""/></td>
                                            <?php } else { ?>
                                            <td class="text-center"></td>
                                            <?php } ?>
                                            <td class="col-md-1"><?= $issue->{'devices.name'} ?></td>
                                            <td class="col-md-3"><?= $issue->output ?></td>
                                            <td class="col-md-4"><?= html_entity_decode($issue->description) ?></td>
                                            <td class="text-center col-md-1">
                                            <?php if ($issue->action === 'add credentials') { ?>
                                                <a role="button" class="btn btn-default btn-sm" href="<?= url_to('credentialsCreateForm') ?>"><?= __('Add Credentials') ?></a>
                                            <?php } ?>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <?php } ?>

            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user, '', $meta->query_string) ?>
                </div>
                <div class="card-body">
                    <br>
                    <div class="table-responsive">
                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[3,"asc"]]'>
                            <thead>
                                <tr>
                                    <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                    <th data-orderable="false" class="text-center"><?= __('Devices') ?></th>
                                    <th data-orderable="false" class="text-center"><?= __('Execute') ?></th>
                                    <?php foreach ($meta->data_order as $key) {
                                        if ($key === 'id' or $key === 'orgs.id') {
                                            continue;
                                        } ?>
                                        <th><?= collection_column_name($key) ?></th>
                                    <?php } ?>
                                    <?php if (strpos($user->permissions[$meta->collection], 'd') !== false) { ?>
                                    <th data-orderable="false" class="text-center"><?= __('Delete') ?></th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($data)) { ?>
                                <?php foreach ($data as $item) { ?>
                                <tr>
                                    <?= collection_button_read($meta->collection, $item->id) ?>
                                    <?= collection_button_devices(url_to('devicesCollection') . '?devices.discovery_id=' . $item->id) ?>
                                    <?= collection_button_execute($meta->collection, intval($item->id)) ?>
                                    <?php foreach ($meta->data_order as $key) {
                                        if ($key === 'id' or $key === 'orgs.id') {
                                            continue;
                                        }
                                        if ($key === 'orgs.name' and !empty($item->attributes->{'orgs.id'})) {
                                            echo "<td><a href=\"" . url_to($meta->collection . 'Collection') . "?" . $meta->collection . ".org_id=" . $item->attributes->{'orgs.id'} . "\">" . $item->attributes->{$key} . "</a></td>\n";
                                        } else {
                                            echo "<td>" . $item->attributes->{$key} . "</td>\n";
                                        }
                                        ?>
                                    <?php } ?>
                                    <?php if (strpos($user->permissions[$meta->collection], 'd') !== false) { ?>
                                        <?= collection_button_delete(intval($item->id)) ?>
                                    <?php } ?>
                                </tr>
                                <?php } ?>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php
            if (count($data) === 2) {
                @include 'help/' . $meta->collection . '.php';
                echo collection_intro_header('Introduction to ' . $meta->heading, $meta->collection, $meta->icon, @$intro, @$body);
            }
            ?>
        </main>


<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {

    $('.dataTableIssues').dataTable( {
        "paging": true,
        "searching": true,
        "order": [[ 1, 'asc' ]],
        "info": true,
        "pageLength": 10,
        "autoWidth": false
    });

        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

        $("#delete_queue").click(function () {
            if (confirm("<?= __('Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.') ?>") !== true) {
                return;
            }
            var $id = $(this).attr("data-id");
            var $name = $(this).attr("data-name");
            $.ajax({
                type: "DELETE",
                url: web_folder + "index.php/database/queue",
                dataType: "json",
                success: function (data) {
                    window.location.reload(true);
                },
                error: function (data) {
                    console.log(data.responseText);
                    alert("An error occurred when deleting the queue");
                }
            });
        });

        $("#delete_queue_count").click(function () {
            if (confirm("<?= __('Are you sure? This will reset the queue processing count and could cause load on the server.') ?>") !== true) {
                return;
            }
            var data = {};
            data["data"] = {};
            data["data"]["id"] = <?= $included['queue_id'] ?>;
            data["data"]["type"] = 'configuration';
            data["data"]["attributes"] = {};
            data["data"]["attributes"]['value'] = 0;
            data = JSON.stringify(data);
            $.ajax({
                type: "PATCH",
                url: web_folder + "index.php/configuration/<?= $included['queue_id'] ?>",
                contentType: "application/json",
                data: {data : data},
                success: function (data) {
                    window.location.reload(true);
                },
                error: function (data) {
                    var json = JSON.parse(data.responseText);
                    console.log(json);
                    alert(json.errors[0].code + "\n\n" + json.errors[0].title + "\n\n" + json.errors[0].detail + "\n\n" + json.errors[0].message);
                }
            });
        });
    });
}
</script>