<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <div class="card">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <div class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Summary
                                            </button>
                                        </div>
                                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul class="list-group">
                                                    <li class="list-group-item section_toggle" data-section="summary"><img class="device-menu-icon" src="<?= base_url() ?>device_images/<?= $resource->icon ?>.svg" alt=""> <a href="#"><?= __('Summary') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="details"><img class="device-menu-icon" src="<?= base_url() ?>icons/details.svg" alt=""> <a href="#"><?= __('Details') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="attachments"><img class="device-menu-icon" src="<?= base_url() ?>icons/attachments.svg" alt=""> <a href="#"><?= __('Attachments') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="audit_log"><img class="device-menu-icon" src="<?= base_url() ?>icons/audit_log.svg" alt=""> <a href="#"><?= __('Audit Log') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="cell_details"><img class="device-menu-icon" src="<?= base_url() ?>icons/cell_details.svg" alt=""> <a href="#"><?= __('Cellular Details') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="change_log"><img class="device-menu-icon" src="<?= base_url() ?>icons/change_log.svg" alt=""> <a href="#"><?= __('Change Log') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="cluster"><img class="device-menu-icon" src="<?= base_url() ?>icons/cluster.svg" alt=""> <a href="#"><?= __('Cluster') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="credentials"><img class="device-menu-icon" src="<?= base_url() ?>icons/credentials.svg" alt=""> <a href="#"><?= __('Credentials') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="discovery_log"><img class="device-menu-icon" src="<?= base_url() ?>icons/discovery_log.svg" alt=""> <a href="#"><?= __('Discovery Log') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="edit_log"><img class="device-menu-icon" src="<?= base_url() ?>icons/edit_log.svg" alt=""> <a href="#"><?= __('Edit Log') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="fields"><img class="device-menu-icon" src="<?= base_url() ?>icons/fields.svg" alt=""> <a href="#"><?= __('Fields') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="images"><img class="device-menu-icon" src="<?= base_url() ?>icons/images.svg" alt=""> <a href="#"><?= __('Images') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="ip"><img class="device-menu-icon" src="<?= base_url() ?>icons/ip.svg" alt=""> <a href="#"><?= __('IP Addresses') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="location"><img class="device-menu-icon" src="<?= base_url() ?>icons/location.svg" alt=""> <a href="#"><?= __('Location') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="opmantek"><img class="device-menu-icon" src="<?= base_url() ?>icons/opmantek_details.svg" alt=""> <a href="#"><?= __('Opmantek Details') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="purchase"><img class="device-menu-icon" src="<?= base_url() ?>icons/purchase.svg" alt=""> <a href="#"><?= __('Purchase') ?></a></li>
                                                    <?php if (!empty($resource->snmp_oid)) { ?>
                                                    <li class="list-group-item section_toggle" data-section="snmp"><img class="device-menu-icon" src="<?= base_url() ?>icons/snmp_details.svg" alt=""> <a href="#"><?= __('SNMP Details') ?></a></li>
                                                    <?php } ?>
                                                    <?php if ($resource->os_group === 'Windows') { ?>
                                                    <li class="list-group-item section_toggle" data-section="windows"><img class="device-menu-icon" src="<?= base_url() ?>icons/windows.svg" alt=""> <a href="#"><?= __('Windows') ?></a></li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Hardware
                                            </button>
                                        </div>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul class="list-group">
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Software
                                            </button>
                                        </div>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul class="list-group">
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-10">
                            <div style="margin-bottom:20px; display:block;" class="card" id="summary">
                                <?=  device_panel('summary', $user->toolbar_style); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <?= read_field('name', $resource->name, '', $update) ?>
                                            <?= read_select('org_id', $resource->org_id, '', $update, __('Organisation'), $orgs) ?>
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?devices.manufacturer=" . urlencode($resource->manufacturer) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('manufacturer', $resource->manufacturer, '', $update, '', $link) ?>
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?devices.os_group=" . urlencode($resource->os_group) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('os_group', $resource->manufacturer, '', false, __('OS Group'), $link) ?>
                                            <?php if (!empty($resource->type) and stripos($resource->type, 'printer') !== false and !empty($resource->snmp_oid)) { ?>
                                                <?= read_field('printer_color', $resource->printer_color, '', false, __('Color')) ?>
                                            <?php } ?>

                                        </div>
                                        <div class="col-4">
                                            <?= read_field('ip', $resource->ip, '', $update, 'IP') ?>
                                            <?= read_select('status', $resource->status, '', $update, __('Status'), $included['status']) ?>
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?devices.model=" . urlencode($resource->model) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('model', $resource->model, '', $update, '', $link) ?>
                                            <?= read_field('os_name', $resource->os_name, '', false, 'OS Name') ?>
                                            <?php if (!empty($resource->type) and stripos($resource->type, 'printer') !== false and !empty($resource->snmp_oid)) { ?>
                                                <?= read_field('printer_duplex', $resource->printer_duplex, '', false, __('Duplex')) ?>
                                            <?php } ?>
                                        </div>
                                        <div class="col-4">
                                            <?= read_select('type', $resource->type, '', $update, __('Type'), $included['type']) ?>
                                            <?= read_select('environment', $resource->environment, '', $update, __('Environment'), $included['environment']) ?>
                                            <?= read_field('serial', $resource->serial, '', $update) ?>
                                            <?= read_field('description', $resource->description, '', $update) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="details">
                                <?=  device_panel('details', $user->toolbar_style); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <?= read_field('hostname', $resource->hostname, '', $update) ?>
                                            <?= read_field('dns_name', $resource->dns_hostname, '', $update, __('DNS Hostname')) ?>
                                            <?= read_field('form_factor', $resource->form_factor, '', $update) ?>
                                            <?= read_field('os_family', $resource->os_family, '', false, __('OS Family')) ?>
                                            <?= read_field('processor_count', $resource->processor_count, '', false, __('Processors')) ?>
                                            <?= read_field('uptime', $resource->uptime, '', false) ?>
                                        </div>
                                        <div class="col-4">
                                            <?= read_field('domain', $resource->domain, '', $update) ?>
                                            <?= read_field('dns_domain', $resource->dns_domain, '', $update, 'DNS Domain') ?>
                                            <?= read_select('class', $resource->class, '', $update, __('Class'), $included['class']) ?>
                                            <?= read_field('os_version', $resource->dns_domain, '', false, __('OS Version')) ?>
                                            <?= read_field('memory_count', ($resource->memory_count / 1024 / 1024) . ' GB', '', false, __('Memory')) ?>
                                            <?= read_field('last_seen', $resource->last_seen, '', false, __('Last Seen On')) ?>
                                        </div>
                                        <div class="col-4">
                                            <?= read_field('fqdn', $resource->fqdn, '', $update, __('FQDN')) ?>
                                            <?= read_field('dns_fqdn', $resource->dns_fqdn, '', $update, __('DNS FQDN')) ?>
                                            <?= read_field('function', $resource->function, '', $update) ?>
                                            <?= read_field('os_installation_date', $resource->os_installation_date, '', $update, __('OS Installed On')) ?>
                                            <?= read_select('oae_manage', $resource->oae_manage, '', $update, __('Manage in Enterprise'), []) ?>
                                            <?= read_field('last_seen_by', $resource->last_seen_by, '', false) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="attachments">
                                <?=  device_panel('attachments', $user->toolbar_style, $resource->id); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <td><?= __('Download') ?></td>
                                                    <td><?= __('Name') ?></td>
                                                    <td><?= __('Filename') ?></td>
                                                    <td><?= __('Edited By') ?></td>
                                                    <td><?= __('Edited Date') ?></td>
                                                    <td><?= __('Delete') ?></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['attachments'])) {
                                                foreach ($included['attachments'] as $row) { ?>
                                                <tr>
                                                    <td><?= $row->id ?></td>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->filename ?></td>
                                                    <td><?= $row->edited_by ?></td>
                                                    <td><?= $row->edited_date ?></td>
                                                    <td><?= $row->id ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="audit_log">
                                <?=  device_panel('audit_log', $user->toolbar_style, $resource->id); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="text-center"><?= __('View') ?></th>
                                                    <th><?= __('On') ?></th>
                                                    <th><?= __('By') ?></th>
                                                    <th><?= __('Type') ?></th>
                                                    <th><?= __('Submitted From') ?></th>
                                                    <th><?= __('Version') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['audit_log'])) {
                                                foreach ($included['audit_log'] as $row) { ?>
                                                <tr>
                                                    <td><?= $row->id ?></td>
                                                    <td><?= $row->timestamp ?></td>
                                                    <td><?= $row->username ?></td>
                                                    <td><?= $row->type ?></td>
                                                    <td><?= $row->ip ?></td>
                                                    <td><?= $row->version ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="cell_details">
                                <?=  device_panel('cell_details', $user->toolbar_style); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <?= read_field('service_number', $resource->service_number, '', $update) ?>
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?devices.service_network=" . urlencode($resource->service_network) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('service_network', $resource->service_network, '', $update, '', $link) ?>
                                            <?= read_field('serial_imei', $resource->serial_imei, '', $update, '') ?>
                                        </div>
                                        <div class="col-4">
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?devices.service_type=" . $resource->service_type . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('service_type', $resource->service_type, '', $update, '', $link) ?>
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?devices.service_provider=" . $resource->service_provider . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('service_provider', $resource->service_provider, '', $update, '', $link) ?>
                                            <?= read_field('serial_sim', $resource->serial_sim, '', $update) ?>
                                        </div>
                                        <div class="col-4">
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?devices.service_plan=" . $resource->service_plan . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('service_plan', $resource->service_plan, '', $update, '', $link) ?>
                                            <?= read_field('unlock_pin', $resource->unlock_pin, '', $update) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="change_log">
                                <?=  device_panel('change_log', $user->toolbar_style, $resource->id); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="text-center"><?= __('View') ?></th>
                                                    <th class="text-center"><?= __('ID') ?></th>
                                                    <th><?= __('Timestamp') ?></th>
                                                    <th><?= __('Type') ?></th>
                                                    <th><?= __('Table') ?></th>
                                                    <th><?= __('Details') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['change_log'])) {
                                                foreach ($included['change_log'] as $row) { ?>
                                                <tr>
                                                    <td class="text-center"><a class="btn btn-sm btn-primary" title="<?= __('View') ?>" role="button" href="<?= url_to('componentsRead', $row->id) . "?components.type=change_log" ?>"><span class="fa fa-eye" aria-hidden="true"></span></a></td>
                                                    <td class="text-center"><?= $row->id ?></td>
                                                    <td><?= $row->timestamp ?></td>
                                                    <td><?= $row->db_action ?></td>
                                                    <td><?= $row->db_table ?></td>
                                                    <td><?= $row->details ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="cluster">
                                <?=  device_panel('cluster', $user->toolbar_style, $resource->id); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="text-center"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Purpose') ?></th>
                                                    <th><?= __('Role') ?></th>
                                                    <th><?= __('Delete') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['cluster'])) {
                                                foreach ($included['cluster'] as $row) { ?>
                                                <tr>
                                                    <td class="text-center"><a class="btn btn-sm btn-primary" title="<?= __('View') ?>" role="button" href="<?= url_to('clustersRead', $row->cluster_id) ?>"><span class="fa fa-eye" aria-hidden="true"></span></a></td>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->purpose ?></td>
                                                    <td><?= $row->role ?></td>
                                                    <td><?= $row->id ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="credentials">
                                <?=  device_panel('credentials', $user->toolbar_style, $resource->id); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Type') ?></th>
                                                    <th><?= __('Description') ?></th>
                                                    <th><?= __('Delete') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['credential'])) {
                                                foreach ($included['credential'] as $row) { ?>
                                                <tr>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->type ?></td>
                                                    <td><?= $row->description ?></td>
                                                    <td><?= $row->id ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="discovery_log">
                                <?=  device_panel('discovery_log', $user->toolbar_style, $resource->id); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th><?= __('ID') ?></th>
                                                    <th><?= __('Discovery Name') ?></th>
                                                    <th><?= __('Timestamp') ?></th>
                                                    <th><?= __('Status') ?></th>
                                                    <th><?= __('Message') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['discovery_log'])) {
                                                foreach ($included['discovery_log'] as $row) { ?>
                                                <tr>
                                                    <td><?= $row->id ?></td>
                                                    <td><?= $row->{'discoveries.name'} ?></td>
                                                    <td><?= $row->timestamp ?></td>
                                                    <?php if ($row->command_status === 'warning') { ?>
                                                    <td class="text-center"><span class="text-warning"><?= __('Warning') ?></span></td>
                                                    <?php } else if ($row->command_status === 'error') { ?>
                                                    <td class="text-center"><span class="text-danger"><?= __('Error') ?></span></td>
                                                    <?php } else if ($row->command_status === 'fail') { ?>
                                                    <td class="text-center"><span class="text-danger"><?= __('Fail') ?></span></td>
                                                    <?php } else if ($row->command_status === 'success') { ?>
                                                    <td class="text-center"><span class="text-success"><?= __('Success') ?></span></td>
                                                    <?php } else if ($row->command_status === 'notice') { ?>
                                                    <td class="text-center"><span class="text-primary"><?= __('Notice') ?></span></td>
                                                    <?php } else { ?>
                                                    <td class="text-center"><?= $row->command_status ?></td>
                                                    <?php } ?>
                                                    <td><?= $row->message ?><br>
                                                        <?php if (!empty($row->command)) {
                                                            echo '<strong>' . __('Command') . '</strong>: ' . $row->command . '<br>';
                                                        }
                                                        if (!empty($row->command_output)) {
                                                            echo '<strong>' . __('Output') . '</strong>: ' . $row->command_output . '</td>';
                                                        } ?>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </main>

<script>
/* Show / Hide section on device details */
$(document).on('click', '.section_toggle', function (e) {
    var section = $(this).attr("data-section");
    var status = $("#" + section).css('display');
    if (status === 'none') {
        $("#" + section).css('display', 'block');
    } else {
        $("#" + section).css('display', 'none');
    }
});
</script>