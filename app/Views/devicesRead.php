<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
$firstwave_fields = array('nmis_active', 'nmis_collect', 'nmis_model', 'nmis_netType', 'nmis_ping', 'nmis_port', 'activated_NMIS', 'activated_opConfig', 'activated_opEvents',)
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
                                                    <li class="list-group-item section_toggle" data-section="summary_section"><img class="device-menu-icon" src="<?= base_url() ?>device_images/<?= $resource->icon ?>.svg" alt=""> <a href="#"><?= __('Summary') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="details_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/details.svg" alt=""> <a href="#"><?= __('Details') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="attachments_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/attachments.svg" alt=""> <a href="#"><?= __('Attachments') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="audit_log_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/audit_log.svg" alt=""> <a href="#"><?= __('Audit Log') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="cell_details_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/cell_details.svg" alt=""> <a href="#"><?= __('Cellular Details') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="change_log_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/change_log.svg" alt=""> <a href="#"><?= __('Change Log') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="cluster_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/cluster.svg" alt=""> <a href="#"><?= __('Cluster') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="credentials_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/credentials.svg" alt=""> <a href="#"><?= __('Credentials') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="discovery_log_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/discovery_log.svg" alt=""> <a href="#"><?= __('Discovery Log') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="edit_log_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/edit_log.svg" alt=""> <a href="#"><?= __('Edit Log') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="fields_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/fields.svg" alt=""> <a href="#"><?= __('Fields') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="firstwave_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/opmantek_details.svg" alt=""> <a href="#"><?= __('Firstwave Details') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="images_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/images.svg" alt=""> <a href="#"><?= __('Images') ?></a></li>
                                                    <?php if (!empty($included['ip'])) { ?>
                                                    <li class="list-group-item section_toggle" data-section="ip_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/ip.svg" alt=""> <a href="#"><?= __('IP Addresses') ?></a></li>
                                                    <?php } ?>
                                                    <li class="list-group-item section_toggle" data-section="location_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/location.svg" alt=""> <a href="#"><?= __('Location') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="purchase_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/purchase.svg" alt=""> <a href="#"><?= __('Purchase') ?></a></li>
                                                    <?php if (!empty($resource->snmp_oid)) { ?>
                                                    <li class="list-group-item section_toggle" data-section="snmp_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/snmp_details.svg" alt=""> <a href="#"><?= __('SNMP Details') ?></a></li>
                                                    <?php } ?>
                                                    <?php if (!empty($included['windows'])) { ?>
                                                    <li class="list-group-item section_toggle" data-section="windows_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/windows.svg" alt=""> <a href="#"><?= __('Windows') ?></a></li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $show = false;
                                    $sections = array('bios', 'disk', 'memory', 'module', 'monitor', 'motherboard', 'network', 'optical', 'partition', 'processor', 'radio', 'san', 'scsi', 'sound', 'usb', 'video');
                                    foreach ($sections as $section) {
                                        if (!empty($included[$section])) {
                                            $show = true;
                                        }
                                    }
                                    if ($show) { ?>
                                    <div class="accordion-item">
                                        <div class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Hardware
                                            </button>
                                        </div>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul class="list-group">
                                                    <?php foreach ($sections as $section) { ?>
                                                        <?php if (!empty($included[$section])) { ?>
                                                        <li class="list-group-item section_toggle" data-section="<?= $section ?>_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/<?= $section ?>.svg" alt=""> <a href="#"><?= __(read_column_name($section)) ?></a></li>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>

                                    <?php
                                    $show = false;
                                    $sections = array('service', 'software', 'software_key');
                                    foreach ($sections as $section) {
                                        if (!empty($included[$section])) {
                                            $show = true;
                                        }
                                    }
                                    if ($show) { ?>
                                    <div class="accordion-item">
                                        <div class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Software
                                            </button>
                                        </div>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul class="list-group">
                                                    <?php foreach ($sections as $section) { ?>
                                                        <?php if (!empty($included[$section])) { ?>
                                                        <li class="list-group-item section_toggle" data-section="<?= $section ?>_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/<?= $section ?>.svg" alt=""> <a href="#"><?= __(read_column_name($section)) ?></a></li>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>

                                    <?php
                                    $show = false;
                                    $sections = array('certificate', 'dns', 'file', 'ip', 'log', 'netstat', 'nmap', 'pagefile', 'policy', 'print_queue', 'route', 'server', 'server_item', 'share', 'task', 'user', 'user_group', 'variable', 'vm', 'windows');
                                    foreach ($sections as $section) {
                                        if (!empty($included[$section])) {
                                            $show = true;
                                        }
                                    }
                                    if ($show) { ?>
                                    <div class="accordion-item">
                                        <div class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Settings
                                            </button>
                                        </div>
                                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul class="list-group">
                                                    <?php foreach ($sections as $section) { ?>
                                                        <?php if (!empty($included[$section])) { ?>
                                                        <li class="list-group-item section_toggle" data-section="<?= $section ?>_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/<?= $section ?>.svg" alt=""> <a href="#"><?= __(read_column_name($section)) ?></a></li>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-10">
                            <div style="margin-bottom:20px; display:block;" class="card" id="summary_section">
                                <?php $icon = base_url() . 'device_images/' . $resource->icon . '.svg'; ?>
                                <?=  device_panel('summary', $user->toolbar_style, 0, $icon); ?>
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

                            <div style="margin-bottom:20px; display:none;" class="card" id="details_section">
                                <?=  device_panel('details', $user->toolbar_style); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <?= read_field('hostname', $resource->hostname, '', $update) ?>
                                            <?= read_field('dns_name', $resource->dns_hostname, '', $update, __('DNS Hostname')) ?>
                                            <?= read_field('form_factor', $resource->form_factor, '', $update) ?>
                                            <?= read_field('os_family', $resource->os_family, '', false, __('OS Family')) ?>
                                            <?= read_field('processor_count', $resource->processor_count, '', false, __('Processors')) ?>
                                            <?= read_field('uptime', $resource->uptime) ?>
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
                                            <?= read_field('last_seen_by', $resource->last_seen_by) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="attachments_section">
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

                            <div style="margin-bottom:20px; display:none;" class="card" id="audit_log_section">
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

                            <div style="margin-bottom:20px; display:none;" class="card" id="cell_details_section">
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

                            <div style="margin-bottom:20px; display:none;" class="card" id="change_log_section">
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

                            <div style="margin-bottom:20px; display:none;" class="card" id="cluster_section">
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

                            <div style="margin-bottom:20px; display:none;" class="card" id="credentials_section">
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

                            <div style="margin-bottom:20px; display:none;" class="card" id="discovery_log_section">
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

                            <div style="margin-bottom:20px; display:none;" class="card" id="edit_log_section">
                                <?=  device_panel('edit_log', $user->toolbar_style, $resource->id); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th><?= __('View') ?></th>
                                                    <th><?= __('On') ?></th>
                                                    <th><?= __('By') ?></th>
                                                    <th><?= __('Attribute') ?></th>
                                                    <th><?= __('Previous Value') ?></th>
                                                    <th><?= __('Value') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['edit_log'])) {
                                                foreach ($included['edit_log'] as $row) { ?>
                                                <tr>
                                                    <td><?= $row->id ?></td>
                                                    <td><?= $row->timestamp ?></td>
                                                    <td><?= $row->source ?></td>
                                                    <td><?= $row->db_column ?></td>
                                                    <td><?= $row->previous_value ?></td>
                                                    <td><?= $row->value ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="fields_section">
                                <?=  device_panel('fields', $user->toolbar_style, $resource->id); ?>
                                <div class="card-body">
                                    <div class="row">
                                    <?php if (!empty($included['fields'])) {
                                        $count = 0;
                                        foreach ($included['fields'] as $field) {
                                            if (in_array($field->name, $firstwave_fields)) {
                                                continue;
                                            }
                                            $count += 1;
                                            if ($count > 3) {
                                                echo "</div><div class=\"row\">\n";
                                                $count = 1;
                                            }
                                            echo "<div class=\"col-4\">\n";
                                            if ($field->{'type'} == 'varchar') {
                                                echo read_field($field->{'name'}, '', '', $update);
                                            }

                                            if ($field->{'type'} == 'list') {
                                                $values = array();
                                                // Put an empty value in for 'not set'.
                                                $item = new \stdClass();
                                                $item->id = '';
                                                $item->name = '';
                                                $item->type = '';
                                                $item->attributes = new \stdClass();
                                                $item->attributes->name = '';
                                                $values[] = $item;
                                                $valid_values = explode(',', $field->values);
                                                foreach ($valid_values as $key => $value) {
                                                    $item = new \stdClass();
                                                    $item->id = $value;
                                                    $item->name = $value;
                                                    $item->type = '';
                                                    $item->attributes = new \stdClass();
                                                    $item->attributes->name = $value;
                                                    $values[] = $item;
                                                }
                                                echo read_select($field->name, '', '', $update, '', $values);
                                            }

                                            if ($field->{'type'} == 'date') {
                                                echo read_field($field->{'name'}, '', '', $update, '', '', '', 'date') ;
                                            }
                                            echo "</div>\n";
                                        }
                                    } ?>
                                    </div>
                                </div>
                            </div>


                            <div style="margin-bottom:20px; display:none;" class="card" id="firstwave_section">
                                <?=  device_panel('firstwave', $user->toolbar_style, $resource->id, base_url() . 'icons/opmantek_details.svg'); ?>
                                <div class="card-body">
                                    <div class="row">
                                    <?php if (!empty($included['fields'])) {
                                        $count = 0;
                                        foreach ($included['fields'] as $field) {
                                            if (!in_array($field->name, $firstwave_fields)) {
                                                continue;
                                            }
                                            $count += 1;
                                            if ($count > 3) {
                                                echo "</div><div class=\"row\">\n";
                                                $count = 1;
                                            }
                                            echo "<div class=\"col-4\">\n";
                                            if ($field->{'type'} == 'varchar') {
                                                echo read_field($field->{'name'}, '', '', $update);
                                            }

                                            if ($field->{'type'} == 'list') {
                                                $values = array();
                                                // Put an empty value in for 'not set'.
                                                $item = new \stdClass();
                                                $item->id = '';
                                                $item->name = '';
                                                $item->type = '';
                                                $item->attributes = new \stdClass();
                                                $item->attributes->name = '';
                                                $values[] = $item;
                                                $valid_values = explode(',', $field->values);
                                                foreach ($valid_values as $key => $value) {
                                                    $item = new \stdClass();
                                                    $item->id = $value;
                                                    $item->name = $value;
                                                    $item->type = '';
                                                    $item->attributes = new \stdClass();
                                                    $item->attributes->name = $value;
                                                    $values[] = $item;
                                                }
                                                echo read_select($field->name, '', '', $update, '', $values);
                                            }

                                            if ($field->{'type'} == 'date') {
                                                echo read_field($field->{'name'}, '', '', $update, '', '', '', 'date') ;
                                            }
                                            echo "</div>\n";
                                        }
                                    } ?>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="images_section">
                                <?=  device_panel('images', $user->toolbar_style, $resource->id); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th><?= __('Download') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Filename') ?></th>
                                                    <th><?= __('Edited By') ?></th>
                                                    <th><?= __('Edited Date') ?></th>
                                                    <th><?= __('Delete') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['image'])) {
                                                foreach ($included['image'] as $row) { ?>
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

                            <div style="margin-bottom:20px; display:none;" class="card" id="ip_section">
                                <?=  device_panel('ip', $user->toolbar_style, $resource->id, base_url() . 'icons/ip.svg'); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th><?= __('View') ?></th>
                                                    <th><?= __('Interface') ?></th>
                                                    <th><?= __('Index') ?></th>
                                                    <th><?= __('IP') ?></th>
                                                    <th><?= __('Mac') ?></th>
                                                    <th><?= __('Net Mask') ?></th>
                                                    <th><?= __('CIDR') ?></th>
                                                    <th><?= __('Version') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['ip'])) {
                                                foreach ($included['ip'] as $row) { ?>
                                                <tr>
                                                    <td><?= $row->id ?></td>
                                                    <td><?= $row->interface ?></td>
                                                    <td><?= $row->net_index ?></td>
                                                    <td><?= ip_address_from_db($row->ip) ?></td>
                                                    <td><?= $row->mac ?></td>
                                                    <td><?= $row->netmask ?></td>
                                                    <td><?= $row->cidr ?></td>
                                                    <td><?= $row->version ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <?php
                            $location = new \stdClass();
                            foreach ($included['locations'] as $included_location) {
                                if ($included_location->id == $resource->location_id) {
                                    $location = $included_location;
                                }
                            }
                            ?>
                            <div style="margin-bottom:20px; display:none;" class="card" id="location_section">
                                <?=  device_panel('location', $user->toolbar_style); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <?= read_select('location_id', $resource->location_id, '', $update, __('Location'), $included['locations']) ?>
                                            <?= read_field('address', $location->attributes->address) ?>
                                            <?= read_field('city', $location->attributes->city) ?>
                                            <?= read_field('state', $location->attributes->state) ?>
                                            <?= read_field('country', $location->attributes->country) ?>
                                        </div>
                                        <div class="col-4">
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?devices.switch_system_id=" . urlencode($resource->switch_device_id) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('switch_system_id', $resource->switch_device_id, '', $update, '', $link) ?>
                                            <?= read_field('switch_port', $resource->switch_port, '', $update, '') ?>
                                        </div>
                                        <div class="col-4">
                                            <?= read_field('patch_panel', $resource->patch_panel, '', $update, '', $link) ?>
                                            <?= read_field('patch_panel_port', $resource->patch_panel_port, '', $update, '') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="purchase_section">
                                <?=  device_panel('purchase', $user->toolbar_style); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <?= read_field('purchase_invoice', $resource->purchase_invoice, '', $update, '') ?>
                                            <?= read_field('purchase_order_number', $resource->purchase_order_number, '', $update, '') ?>
                                            <?= read_field('purchase_cost_center', $resource->purchase_cost_center, '', $update, '') ?>
                                            <?= read_field('purchase_vendor', $resource->purchase_vendor, '', $update, '') ?>
                                            <?= read_field('purchase_amount', $resource->purchase_amount, '', $update, '') ?>
                                            <?= read_field('purchase_date', $resource->purchase_date, '', $update, '', '', '', 'date') ?>
                                            <?= read_field('purchase_service_contract_number', $resource->purchase_service_contract_number, '', $update, '') ?>
                                        </div>
                                        <div class="col-4">
                                            <?= read_field('asset_number', $resource->asset_number, '', $update, '') ?>
                                            <?= read_field('asset_tag', $resource->asset_tag, '', $update, '') ?>
                                            <?= read_field('lease_expiry_date', $resource->lease_expiry_date, '', $update, '', '', '', 'date') ?>
                                            <?= read_field('end_of_production', $resource->end_of_production, '', $update, '', '', '', 'date') ?>
                                            <?= read_field('end_of_service', $resource->end_of_service, '', $update, '', '', '', 'date') ?>
                                            <?= read_field('end_of_life', $resource->end_of_life, '', $update, '', '', '', 'date') ?>
                                        </div>
                                        <div class="col-4">
                                            <?= read_field('warranty_duration', $resource->warranty_duration, '', $update, '') ?>
                                            <?= read_field('warranty_expires', $resource->warranty_expires, '', $update, '', '', '', 'date') ?>
                                            <?= read_field('warranty_status', $resource->warranty_status, '', $update, '') ?>
                                            <?= read_field('maintenance_expires', $resource->maintenance_expires, '', $update, '', '', '', 'date') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="snmp_section">
                                <?=  device_panel('SNMP', $user->toolbar_style); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <?= read_field('sysName', $resource->sysName) ?>
                                            <?= read_field('snmp_version', $resource->snmp_version, '', false, __('SNMP Version')) ?>
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?devices.snmp_oid=" . urlencode($resource->snmp_oid) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('snmp_oid', $resource->snmp_oid, '', false, __('SNMP OID'), $link) ?>
                                        </div>
                                        <div class="col-4">
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?devices.sysDescr=" . urlencode($resource->sysDescr) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('sysDescr', $resource->sysDescr, '', false, '', $link) ?>
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?devices.sysContact=" . urlencode($resource->sysContact) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('sysContact', $resource->sysContact, '', false, '', $link) ?>
                                        </div>
                                        <div class="col-4">
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?devices.sysLocation=" . urlencode($resource->sysLocation) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('sysLocation', $resource->sysLocation, '', false, '', $link) ?>
                                            <?= read_field('sysUptime', $resource->sysUpTime) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div style="margin-bottom:20px; display:none;" class="card" id="windows_section">
                                <?=  device_panel('Windows', $user->toolbar_style); ?>
                                <div class="card-body">
                                <?php if (!empty($included['windows'])) { ?>
                                    <div class="row">
                                        <div class="col-4">
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.registered_user=" . urlencode($included['windows'][0]->registered_user) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('registered_user', $included['windows'][0]->registered_user, '', false, '', $link) ?>

                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.organisation=" . urlencode($included['windows'][0]->organisation) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('organisation', $included['windows'][0]->organisation, '', false, '', $link) ?>

                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.language=" . urlencode($included['windows'][0]->language) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('language', $included['windows'][0]->language, '', false, '', $link) ?>

                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.time_caption=" . urlencode($included['windows'][0]->time_caption) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('time_caption', $included['windows'][0]->time_caption, '', false, '', $link) ?>

                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.time_daylight=" . urlencode($included['windows'][0]->time_daylight) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('time_daylight', $included['windows'][0]->time_daylight, '', false, '', $link) ?>

                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.install_directory=" . urlencode($included['windows'][0]->install_directory) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('install_directory', $included['windows'][0]->install_directory, '', false, '', $link) ?>
                                        </div>
                                        <div class="col-4">
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.boot_device=" . urlencode($included['windows'][0]->boot_device) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('boot_device', $included['windows'][0]->boot_device, '', false, '', $link) ?>


                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.user_name=" . urlencode($included['windows'][0]->user_name) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('user_name', $included['windows'][0]->user_name, '', false, '', $link) ?>


                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.part_of_domain=" . urlencode($included['windows'][0]->part_of_domain) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('part_of_domain', $included['windows'][0]->part_of_domain, '', false, '', $link) ?>


                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.domain_role=" . urlencode($included['windows'][0]->domain_role) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('domain_role', $included['windows'][0]->domain_role, '', false, '', $link) ?>


                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.domain_short=" . urlencode($included['windows'][0]->domain_short) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('domain_short', $included['windows'][0]->domain_short, '', false, '', $link) ?>


                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.workgroup=" . urlencode($included['windows'][0]->workgroup) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('workgroup', $included['windows'][0]->workgroup, '', false, '', $link) ?>
                                        </div>
                                        <div class="col-4">
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.active_directory_ou=" . urlencode($included['windows'][0]->active_directory_ou) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('active_directory_ou', $included['windows'][0]->active_directory_ou, '', false, '', $link) ?>


                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.domain_controller_address=" . urlencode($included['windows'][0]->domain_controller_address) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('domain_controller_address', $included['windows'][0]->domain_controller_address, '', false, '', $link) ?>


                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.domain_controller_name=" . urlencode($included['windows'][0]->domain_controller_name) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('domain_controller_name', $included['windows'][0]->domain_controller_name, '', false, '', $link) ?>


                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.service_pack=" . urlencode($included['windows'][0]->service_pack) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('service_pack', $included['windows'][0]->service_pack, '', false, '', $link) ?>


                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.build_number=" . urlencode($included['windows'][0]->build_number) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('build_number', $included['windows'][0]->build_number, '', false, '', $link) ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="bios_section">
                                <?=  device_panel('bios', $user->toolbar_style); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?bios.manufacturer=" . urlencode($included['bios'][0]->manufacturer) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('manufacturer', $included['bios'][0]->manufacturer, '', false, '', $link) ?>
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?bios.model=" . urlencode($included['bios'][0]->model) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('model', $included['bios'][0]->model, '', false, '', $link) ?>
                                        </div>
                                        <div class="col-4">
                                            <?= read_field('serial', $included['bios'][0]->serial) ?>
                                            <?= read_field('smversion', $included['bios'][0]->smversion, '', false, __('SM Version')) ?>
                                        </div>
                                        <div class="col-4">
                                            <?= read_field('version', $included['bios'][0]->version) ?>
                                            <?= read_field('asset_tag', $included['bios'][0]->asset_tag) ?>
                                        </div>
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

$(document).ready(function() {
    <?php
    if (!empty($included['field']) and !empty($included['fields'])) {
        foreach ($included['field'] as $field) {
            foreach ($included['fields'] as $fields) {
                if ($field->fields_id == $fields->id) {
                    echo "\$(\"#" . $fields->name . "\").val(\"" . $field->value . "\");\n";
                }
            }
        }
    }
    ?>
    
});


</script>