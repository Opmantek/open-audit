<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
$firstwave_fields = array('nmis_active', 'nmis_collect', 'nmis_model', 'nmis_netType', 'nmis_ping', 'nmis_port', 'activated_NMIS', 'activated_opConfig', 'activated_opEvents');
$included['nmis_fields'] = array();
if (!empty($included['fields'])) {
    foreach ($included['fields'] as $field) {
        if (in_array($field->name, $firstwave_fields)) {
            $included['nmis_fields'][] = $field;
        }
    }
}
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
                                                    <li class="list-group-item section_toggle" data-section="applications_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/applications.svg" alt=""> <a href="#"><?= __('Applications') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="attachments_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/attachments.svg" alt=""> <a href="#"><?= __('Attachments') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="audit_log_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/audit_log.svg" alt=""> <a href="#"><?= __('Audit Log') ?></a><?= count_button(@$included['audit_log']) ?></li>
                                                    <li class="list-group-item section_toggle" data-section="cell_details_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/cell_details.svg" alt=""> <a href="#"><?= __('Cellular Details') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="change_log_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/change_log.svg" alt=""> <a href="#"><?= __('Change Log') ?></a><?= count_button(@$included['change_log']) ?></li>
                                                    <?php if (!empty($resource->instance_type)) { ?>
                                                    <li class="list-group-item section_toggle" data-section="cloud_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/cloud.svg" alt=""> <a href="#"><?= __('Cloud Details') ?></a></li>
                                                    <?php } ?>
                                                    <li class="list-group-item section_toggle" data-section="cluster_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/cluster.svg" alt=""> <a href="#"><?= __('Cluster') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="credentials_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/credentials.svg" alt=""> <a href="#"><?= __('Credentials') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="discovery_log_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/discovery_log.svg" alt=""> <a href="#"><?= __('Discovery Log') ?></a><?= count_button(@$included['discovery_log']) ?></li>
                                                    <li class="list-group-item section_toggle" data-section="edit_log_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/edit_log.svg" alt=""> <a href="#"><?= __('Edit Log') ?></a><?= count_button(@$included['edit_log']) ?></li>
                                                    <li class="list-group-item section_toggle" data-section="fields_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/fields.svg" alt=""> <a href="#"><?= __('Fields') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="firstwave_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/opmantek_details.svg" alt=""> <a href="#"><?= __('FirstWave') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="images_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/images.svg" alt=""> <a href="#"><?= __('Images') ?></a></li>
                                                    <?php if (!empty(@$included['ip'])) { ?>
                                                    <li class="list-group-item section_toggle" data-section="ip_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/ip.svg" alt=""> <a href="#"><?= __('IP Addresses') ?></a><?= count_button(@$included['ip']) ?></li>
                                                    <?php } ?>
                                                    <li class="list-group-item section_toggle" data-section="location_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/location.svg" alt=""> <a href="#"><?= __('Location') ?></a></li>
                                                    <li class="list-group-item section_toggle" data-section="purchase_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/purchase.svg" alt=""> <a href="#"><?= __('Purchase') ?></a></li>
                                                    <?php if (!empty($resource->snmp_oid)) { ?>
                                                    <li class="list-group-item section_toggle" data-section="snmp_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/snmp_details.svg" alt=""> <a href="#"><?= __('SNMP Details') ?></a></li>
                                                    <?php } ?>
                                                    <?php if ($config->product === 'enterprise') { ?>
                                                    <li class="list-group-item section_toggle" data-section="tags_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/tags.svg" alt=""> <a href="#"><?= __('Tags') ?></a></li>
                                                    <?php } ?>
                                                    <?php if ($config->product === 'enterprise' and !empty($included['warranty'])) { ?>
                                                    <li class="list-group-item section_toggle" data-section="warranty_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/warranty.svg" alt=""> <a href="#"><?= __('Warranty') ?></a></li>
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
                                    $sections = array('access_point', 'bios', 'disk', 'memory', 'module', 'monitor', 'motherboard', 'network', 'optical', 'partition', 'processor', 'radio', 'san', 'scsi', 'sound', 'usb', 'video');
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
                                                        <li class="list-group-item section_toggle" data-section="<?= $section ?>_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/<?= $section ?>.svg" alt=""> <a href="#"><?= __(read_column_name($section)) ?></a><?= count_button($included[$section]) ?></li>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>

                                    <?php
                                    $show = false;
                                    $sections = array('antivirus', 'firewall', 'firewall_rule', 'server', 'service', 'software', 'software_key');
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
                                                        <li class="list-group-item section_toggle" data-section="<?= $section ?>_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/<?= $section ?>.svg" alt=""> <a href="#"><?= __(read_column_name($section)) ?></a><?= count_button($included[$section]) ?></li>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>

                                    <?php
                                    $show = false;
                                    $sections = array('certificate', 'dns', 'file', 'executable', 'ip', 'log', 'netstat', 'nmap', 'pagefile', 'policy', 'print_queue', 'route', 'share', 'task', 'user', 'user_group', 'variable', 'vm', 'windows');
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
                                                        <li class="list-group-item section_toggle" data-section="<?= $section ?>_section"><img class="device-menu-icon" src="<?= base_url() ?>icons/<?= $section ?>.svg" alt=""> <a href="#"><?= __(read_column_name($section)) ?></a><?= count_button($included[$section]) ?></li>
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
                                            <?= read_field('os_group', $resource->os_group, '', $update, __('OS Group'), $link) ?>
                                            <?php if (!empty($resource->type) and stripos($resource->type, 'printer') !== false and !empty($resource->snmp_oid)) { ?>
                                                <?= read_field('printer_color', $resource->printer_color, '', false, __('Color')) ?>
                                            <?php } ?>

                                        </div>
                                        <div class="col-4">
                                            <?= read_field('ip', $resource->ip, '', $update, 'IP') ?>
                                            <?= read_select('status', $resource->status, '', $update, __('Status'), $included['status']) ?>
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?devices.model=" . urlencode($resource->model) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('model', $resource->model, '', $update, '', $link) ?>
                                            <?= read_field('os_name', $resource->os_name, '', $update, 'OS Name') ?>
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
                                            <?= read_field('os_family', $resource->os_family, '', $update, __('OS Family')) ?>
                                            <?= read_field('processor_count', $resource->processor_count, '', false, __('Processors')) ?>
                                            <?= read_field('uptime', $resource->uptime) ?>
                                        </div>
                                        <div class="col-4">
                                            <?= read_field('domain', $resource->domain, '', $update) ?>
                                            <?= read_field('dns_domain', $resource->dns_domain, '', $update, 'DNS Domain') ?>
                                            <?= read_select('class', $resource->class, '', $update, __('Class'), $included['class']) ?>
                                            <?= read_field('os_version', $resource->os_version, '', false, __('OS Version')) ?>
                                            <?= read_field('memory_count', ($resource->memory_count / 1024 / 1024) . ' GB', '', false, __('Memory')) ?>
                                            <?= read_field('os_installation_date', $resource->os_installation_date, '', $update, __('OS Installed On')) ?>
                                            <?= read_field('service_tag', $resource->service_tag, '', '', __('Service Tag')) ?>
                                        </div>
                                        <div class="col-4">
                                            <?= read_field('fqdn', $resource->fqdn, '', $update, __('FQDN')) ?>
                                            <?= read_field('dns_fqdn', $resource->dns_fqdn, '', $update, __('DNS FQDN')) ?>
                                            <?= read_field('function', $resource->function, '', $update) ?>
                                            <?= read_field('uuid', $resource->uuid, '', false, __('UUID')) ?>
                                            <?= read_field('first_seen', $resource->first_seen, '', false, __('First Seen On')) ?>
                                            <?= read_field('last_seen', $resource->last_seen, '', false, __('Last Seen On')) ?>
                                            <?= read_field('last_seen_by', $resource->last_seen_by) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="applications_section">
                                <?=  device_panel('applications', $user->toolbar_style, $resource->id, '', $update); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Description') ?></th>
                                                    <th class="text-center"><?= __('Delete') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['application'])) {
                                                foreach ($included['application'] as $row) { ?>
                                                <tr>
                                                    <td class="text-center"><a class="btn btn-sm btn-primary" title="<?= __('View') ?>" role="button" href="<?= url_to('applicationsRead', $row->application_id) ?>"><span class="fa fa-eye" aria-hidden="true"></span></a></td>
                                                    <td><?= $row->{'applications.name'} ?></td>
                                                    <td><?= $row->{'applications.description'} ?></td>
                                                    <td class="text-center"><button type="button" class="btn btn-sm btn-danger delete_component_link" data-type="components" data-component_type="application" data-id="<?= $row->id ?>"><span style="width:1rem;" title="<?= __('Delete') ?>" class="fa fa-trash"></span></button></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="attachments_section">
                                <?=  device_panel('attachments', $user->toolbar_style, $resource->id, '', $update); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center"><?= __('Download') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Filename') ?></th>
                                                    <th><?= __('Edited By') ?></th>
                                                    <th><?= __('Edited Date') ?></th>
                                                    <th class="text-center"><?= __('Delete') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['attachment'])) {
                                                foreach ($included['attachment'] as $row) { ?>
                                                <tr id="components_attachment_<?= $row->id ?>">
                                                    <td class="text-center"><a href="<?= url_to('componentsRead', $row->id) ?>/attachment/download?components.type=attachment" role="button" class="btn btn-sm btn-primary"><span style="width:1rem;" title="<?= __('Download') ?>" class="fa-solid fa-download"></span></button></td>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->filename ?></td>
                                                    <td><?= $row->edited_by ?></td>
                                                    <td><?= $row->edited_date ?></td>
                                                    <td class="text-center"><button type="button" class="btn btn-sm btn-danger delete_component_link" data-type="components" data-component_type="attachment" data-id="<?= $row->id ?>"><span style="width:1rem;" title="<?= __('Delete') ?>" class="fa fa-trash"></span></button></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="audit_log_section">
                                <?php $count = !empty($included['audit_log']) ? count($included['audit_log']) : 0; ?>
                                <?= device_panel('audit_log', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
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
                                                    <?= device_component_button_read('audit_log', $row->id) ?>
                                                    <td><?= $row->timestamp ?></td>
                                                    <td><?= $row->username ?></td>
                                                    <td><?= $row->type ?></td>
                                                    <td><?= ip_address_from_db($row->ip) ?></td>
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
                                <?php $count = !empty($included['change_log']) ? count($included['change_log']) : 0; ?>
                                <?=  device_panel('change_log', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
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
                                                    <?= device_component_button_read('change_log', $row->id) ?>
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

                            <div style="margin-bottom:20px; display:none;" class="card" id="cloud_section">
                                <?=  device_panel('cloud', $user->toolbar_style); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?devices.instance_provider=" . urlencode($resource->instance_provider) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('instance_provider', $resource->instance_provider, '', false, '', $link) ?>

                                            <?= read_field('instance_ident', $resource->instance_ident) ?>

                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?devices.instance_state=" . $resource->instance_state . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('instance_state', $resource->instance_state, '', false, '', $link) ?>

                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?devices.instance_type=" . $resource->instance_type . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('instance_type', $resource->instance_type, '', false, '', $link) ?>
                                        </div>
                                        <div class="col-4">
                                            <div class="row" style="padding-top:16px;">
                                                <div class="offset-2 col-8" style="position:relative;">
                                                    <label for="sql" class="form-label"><?= __('API Result') ?></label>
                                                    <div class="input-group">
                                                        <textarea class="form-control" rows="12" id="instance_options" name="instance_options" disabled><?= html_entity_decode(json_encode($resource->instance_options, JSON_PRETTY_PRINT)) ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <?php $tags = $resource->instance_tags;
                                            if ($resource->{'instance_provider'} === 'Microsoft Azure') {
                                                foreach ($tags as $key => $value) {
                                                    echo read_field(__('Tags :: ') . $key, $value);
                                                }
                                            }
                                            if ($resource->{'instance_provider'} === 'Google Compute') {
                                                foreach ($tags as $key => $value) {
                                                    echo read_field(__('Tags :: ') . $key, $value);
                                                }
                                            }
                                            if ($resource->instance_provider === 'Amazon AWS') {
                                                foreach ($tags as $tag) {
                                                    echo read_field(__('Tags') . ' :: ' . $tag->Key, $tag->Value);
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="cluster_section">
                                <?= device_panel('cluster', $user->toolbar_style, $resource->id, '', $update); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Purpose') ?></th>
                                                    <th><?= __('Role') ?></th>
                                                    <?php if ($update) { ?>
                                                    <th class="text-center"><?= __('Delete') ?></th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['cluster'])) {
                                                foreach ($included['cluster'] as $row) { ?>
                                                <tr>
                                                    <td class="text-center"><a class="btn btn-sm btn-primary" title="<?= __('View') ?>" role="button" href="<?= url_to('clustersRead', $row->id) ?>"><span class="fa fa-eye" aria-hidden="true"></span></a></td>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->purpose ?></td>
                                                    <td><?= $row->role ?></td>
                                                    <?php if ($update) { ?>
                                                    <td class="text-center" data-orderable="false"><button type="button" class="btn btn-sm btn-danger delete_component_link" data-type="cluster" data-component_type="cluster" data-id="<?= $row->{'cluster.id'} ?>"><span style="width:1rem;" title="<?= __('Delete') ?>" class="fa fa-trash"></span></button></td>
                                                    <?php } ?>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="credentials_section">
                                <?=  device_panel('credentials', $user->toolbar_style, $resource->id, '', $update); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Type') ?></th>
                                                    <th><?= __('Description') ?></th>
                                                    <th class="text-center" data-orderable="false"><?= __('Delete') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['credential'])) {
                                                foreach ($included['credential'] as $row) { ?>
                                                <tr id="components_credential_<?= $row->id ?>">
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->type ?></td>
                                                    <td><?= $row->description ?></td>
                                                    <?php if ($update) { ?>
                                                    <td class="text-center" data-orderable="false"><button type="button" class="btn btn-sm btn-danger delete_component_link" data-type="components" data-component_type="credential" data-id="<?= $row->id ?>"><span style="width:1rem;" title="<?= __('Delete') ?>" class="fa fa-trash"></span></button></td>
                                                    <?php } ?>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="discovery_log_section">
                                <?php $count = !empty($included['discovery_log']) ? count($included['discovery_log']) : 0; ?>
                                <?=  device_panel('discovery_log', $user->toolbar_style, $resource->id, '', $update, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center"><?= __('View') ?></th>
                                                    <th class="text-center"><?= __('ID') ?></th>
                                                    <th><?= __('Discovery Name') ?></th>
                                                    <th><?= __('Timestamp') ?></th>
                                                    <th class="text-center"><?= __('Status') ?></th>
                                                    <th><?= __('Message') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['discovery_log'])) {
                                                foreach ($included['discovery_log'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('discovery_log', $row->id) ?>
                                                    <td><?= $row->{'id'} ?></td>
                                                    <td><?= $row->{'discoveries.name'} ?></td>
                                                    <td><?= $row->timestamp ?></td>
                                                    <?php if ($row->command_status === 'warning') { ?>
                                                    <td class="text-center"><span class="text-warning"><?= __('Warning') ?></span></td>
                                                    <?php } elseif ($row->command_status === 'error') { ?>
                                                    <td class="text-center"><span class="text-danger"><?= __('Error') ?></span></td>
                                                    <?php } elseif ($row->command_status === 'fail') { ?>
                                                    <td class="text-center"><span class="text-danger"><?= __('Fail') ?></span></td>
                                                    <?php } elseif ($row->command_status === 'success') { ?>
                                                    <td class="text-center"><span class="text-success"><?= __('Success') ?></span></td>
                                                    <?php } elseif ($row->command_status === 'notice') { ?>
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
                                <?php $count = !empty($included['edit_log']) ? count($included['edit_log']) : 0; ?>
                                <?=  device_panel('edit_log', $user->toolbar_style, $resource->id, '', $update, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
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
                                                    <?= device_component_button_read('edit_log', $row->id) ?>
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
                                <?=  device_panel('fields', $user->toolbar_style, $resource->id, '', $update); ?>
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
                                                echo read_field($field->{'name'}, $field->{'field.value'}, '', $update);
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
                                                echo read_select($field->name, $field->{'field.value'}, '', $update, '', $values);
                                            }

                                            if ($field->{'type'} == 'date') {
                                                echo read_field($field->{'name'}, $field->{'field.value'}, '', $update, '', '', '', 'date') ;
                                            }
                                            echo "</div>\n";
                                        }
                                    } ?>
                                    </div>
                                </div>
                            </div>


                            <div style="margin-bottom:20px; display:none;" class="card" id="firstwave_section">
                                <?=  device_panel('firstwave', $user->toolbar_style, $resource->id, base_url() . 'icons/opmantek_details.svg', $update); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <?= read_select('nmis_manage', $resource->nmis_manage, '', $update, __('Manage in NMIS'), []) ?>
                                            <?= read_field('nmis_name', $resource->nmis_name, '', $update) ?>
                                            <?= read_field('nmis_notes', $resource->nmis_notes, '', $update) ?>
                                            <?= read_field('omk_uuid', $resource->omk_uuid, '', $update) ?>
                                            <?= read_select('nmis_group', $resource->nmis_group, '', $update, __('NMIS Group'), $included['nmis_groups']) ?>
                                            <?= read_select('nmis_role', $resource->nmis_role, '', $update, __('NMIS Role'), $included['nmis_roles']) ?>
                                        </div>
                                        <div class="col-4">
                                            <?= read_select('nmis_business_service', $resource->nmis_business_service, '', $update, __('NMIS Business Service'), $included['nmis_business_services']) ?>
                                            <?= read_select('nmis_customer', $resource->nmis_customer, '', $update, __('NMIS Customer'), $included['nmis_customers']) ?>
                                            <?= read_select('nmis_poller_uuid', $resource->nmis_poller_uuid, '', $update, __('NMIS Poller'), $included['nmis_pollers']) ?>




                                    <?php if (!empty($included['nmis_fields'])) {
                                        for ($i = 0; $i < 3; $i++) {
                                            $field = $included['nmis_fields'][$i];
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
                                                echo read_select($field->name, (string)$field->{'field.value'}, '', $update, '', $values);
                                            }

                                            if ($field->{'type'} == 'date') {
                                                echo read_field($field->{'name'}, (string)$field->{'field.value'}, '', $update, '', '', '', 'date') ;
                                            }

                                            if ($field->{'type'} == 'varchar') {
                                                echo read_field($field->{'name'}, (string)$field->{'field.value'}, '', $update, '', '', '', 'text') ;
                                            }
                                        }
                                    } ?>

                                        </div>
                                        <div class="col-4">

                                    <?php if (!empty($included['nmis_fields'])) {
                                        for ($i = 3; $i < count($included['nmis_fields']); $i++) {
                                            $field = $included['nmis_fields'][$i];
                                            if (!in_array($field->name, $firstwave_fields)) {
                                                continue;
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
                                                echo read_select($field->name, (string)$field->{'field.value'}, '', $update, '', $values);
                                            }

                                            if ($field->{'type'} == 'varchar') {
                                                echo read_field($field->{'name'}, (string)$field->{'field.value'}, '', $update, '', '', '', 'text') ;
                                            }

                                            if ($field->{'type'} == 'date') {
                                                echo read_field($field->{'name'}, (string)$field->{'field.value'}, '', $update, '', '', '', 'date') ;
                                            }
                                        }
                                    } ?>
                                </div>

                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="images_section">
                                <?=  device_panel('images', $user->toolbar_style, $resource->id, '', $update); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th></th>
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
                                                    <td class="text-center"><a href="<?= $meta->baseurl ?>custom_images/<?= $row->filename ?>"><img src="<?= $meta->baseurl ?>custom_images/<?= $row->filename ?>" width="200px" /></a></td>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->filename ?></td>
                                                    <td><?= $row->edited_by ?></td>
                                                    <td><?= $row->edited_date ?></td>
                                                    <td class="text-center"><button type="button" class="btn btn-sm btn-danger delete_component_link" data-type="components" data-component_type="image" data-id="<?= $row->id ?>"><span style="width:1rem;" title="<?= __('Delete') ?>" class="fa fa-trash"></span></button></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="ip_section">
                                <?php $count = !empty($included['ip']) ? count($included['ip']) : 0; ?>
                                <?=  device_panel('ip', $user->toolbar_style, $resource->id, base_url() . 'icons/ip.svg', $update, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Interface') ?></th>
                                                    <th><?= __('Index') ?></th>
                                                    <th><?= __('IP') ?></th>
                                                    <th><?= __('Mac') ?></th>
                                                    <th><?= __('Netmask') ?></th>
                                                    <th><?= __('CIDR') ?></th>
                                                    <th><?= __('Version') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['ip'])) {
                                                foreach ($included['ip'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('ip', $row->id) ?>
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
                            # If we have an invalid location_id, set it to 1 and populate as per the default location
                            if (empty($location->attributes)) {
                                $resource->location_id = 1;
                                foreach ($included['locations'] as $included_location) {
                                    if ($included_location->id == $resource->location_id) {
                                        $location = $included_location;
                                    }
                                }
                            }
                            ?>
                            <div style="margin-bottom:20px; display:none;" class="card" id="location_section">
                                <?=  device_panel('location', $user->toolbar_style, 0, '', $update); ?>
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
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?devices.owner=" . urlencode($resource->owner) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('owner', $resource->owner, '', $update, '', $link) ?>
                                            <?= read_select('org_id_2', $resource->org_id, '', false, __('Organisation'), $orgs) ?>
                                        </div>
                                        <div class="col-4">
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?devices.switch_device_id=" . urlencode($resource->switch_device_id) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('switch_device_id', $resource->switch_device_id, '', $update, '', $link) ?>
                                            <?= read_field('switch_port', $resource->switch_port, '', $update, '') ?>
                                            <?= read_field('patch_panel', $resource->patch_panel, '', $update, '', $link) ?>
                                            <?= read_field('patch_panel_port', $resource->patch_panel_port, '', $update, '') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="purchase_section">
                                <?=  device_panel('purchase', $user->toolbar_style, 0, '', $update); ?>
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
                                <?=  device_panel('snmp', $user->toolbar_style, 0, base_url() . "icons/snmp_details.svg", $update); ?>
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

                            <?php if ($config->product === 'enterprise') { ?>
                            <div style="margin-bottom:20px; display:none;" class="card" id="tags_section">
                                <?=  device_panel('tags', $user->toolbar_style, 0, base_url() . "icons/tags.svg", $update); ?>
                                <div class="card-body">
                                        <?php foreach ($resource->tags as $tag) {
                                            $othertags = array();
                                            foreach ($resource->tags as $mytag) {
                                                if ($mytag !== $tag) {
                                                    $othertags[] = $mytag;
                                                }
                                            }
                                            $othertags = json_encode($othertags);
                                            echo '<button type="button" class="btn btn-primary rounded-pill" style="margin-right:20px;"><strong><a style="color:white;" href="' . url_to('devicesCollection') . '?devices.tags=' . html_entity_decode($tag, ENT_QUOTES | ENT_HTML5, 'UTF-8') . '">' . html_entity_decode($tag, ENT_QUOTES | ENT_HTML5, 'UTF-8') . '</a>&nbsp;&nbsp;&nbsp;</strong><a href="#" class="delete_tags" style="color:white;" data-tags=\'' . $othertags . '\'><span class="badge text-bg-secondary"><i class="close white-text fas fa-times"></i></span></a>';
                                        }
                                        ?>
                                </div>
                            </div>
                            <?php } ?>

                            <?php if ($config->product === 'enterprise' and !empty($included['warranty'])) { ?>
                            <div style="margin-bottom:20px; display:none;" class="card" id="warranty_section">
                                <?=  device_panel('warranty', $user->toolbar_style, 0, base_url() . "icons/warranty.svg", $update); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[2,"asc"],[3,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Vendor') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('End Date') ?></th>
                                                    <?php if ($included['warranty'][0]->vendor === 'Cisco') { ?>
                                                    <th><?= __('Description') ?></th>
                                                    <th><?= __('End OF Life Product ID') ?></th>
                                                    <?php } ?>
                                                    <?php if ($included['warranty'][0]->vendor === 'HP') { ?>
                                                    <th><?= __('Start Date') ?></th>
                                                    <?php } ?>
                                                    <?php if ($included['warranty'][0]->vendor === 'Dell') { ?>
                                                    <th><?= __('Start Date') ?></th>
                                                    <th><?= __('Entitlement Type') ?></th>
                                                    <th><?= __('Ship Date') ?></th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($included['warranty'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('warranty', $row->id) ?>
                                                    <td><?= $row->vendor ?></td>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->end_date ?></td>
                                                    <?php if ($row->vendor === 'Cisco') { ?>
                                                    <td><?= $row->description ?></td>
                                                    <td><?= $row->tag_1 ?></td>
                                                    <?php } ?>
                                                    <?php if ($row->vendor === 'HP') { ?>
                                                    <td><?= $row->start_date ?></td>
                                                    <?php } ?>
                                                    <?php if ($row->vendor === 'Dell') { ?>
                                                    <td><?= $row->start_date ?></td>
                                                    <td><?= $row->tag_1 ?></td>
                                                    <td><?= $row->tag_2 ?></td>
                                                    <?php } ?>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <div style="margin-bottom:20px; display:none;" class="card" id="windows_section">
                                <?= device_panel('windows', $user->toolbar_style, $resource->id, '', $update, 1); ?>
                                <div class="card-body">
                                <?php if (!empty($included['windows'])) { ?>
                                    <div class="row">
                                        <?php if ($included['windows'][0]->part_of_domain !== 'True') { ?>
                                        <div class="col-6">
                                        <?php } else { ?>
                                        <div class="col-4">
                                        <?php } ?>
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
                                        <?php if ($included['windows'][0]->part_of_domain !== 'True') { ?>
                                        <div class="col-6">
                                        <?php } else { ?>
                                        <div class="col-4">
                                        <?php } ?>
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.boot_device=" . urlencode($included['windows'][0]->boot_device) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('boot_device', $included['windows'][0]->boot_device, '', false, '', $link) ?>

                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.user_name=" . urlencode($included['windows'][0]->user_name) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('user_name', $included['windows'][0]->user_name, '', false, '', $link) ?>

                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.service_pack=" . urlencode($included['windows'][0]->service_pack) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('service_pack', $included['windows'][0]->service_pack, '', false, '', $link) ?>

                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.build_number=" . urlencode($included['windows'][0]->build_number) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('build_number', $included['windows'][0]->build_number, '', false, '', $link) ?>

                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.part_of_domain=" . urlencode($included['windows'][0]->part_of_domain) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('part_of_domain', $included['windows'][0]->part_of_domain, '', false, '', $link) ?>

                                            <?php if ($included['windows'][0]->part_of_domain !== 'True') { ?>
                                                <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.workgroup=" . urlencode($included['windows'][0]->workgroup) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                                <?= read_field('workgroup', $included['windows'][0]->workgroup, '', false, '', $link) ?>
                                            <?php } ?>
                                        </div>
                                        <?php if ($included['windows'][0]->part_of_domain === 'True') { ?>
                                        <div class="col-4">

                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.domain_role=" . urlencode($included['windows'][0]->domain_role) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('domain_role', $included['windows'][0]->domain_role, '', false, '', $link) ?>

                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.domain_short=" . urlencode($included['windows'][0]->domain_short) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('domain_short', $included['windows'][0]->domain_short, '', false, '', $link) ?>

                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.active_directory_ou=" . urlencode($included['windows'][0]->active_directory_ou) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('active_directory_ou', $included['windows'][0]->active_directory_ou, '', false, '', $link) ?>

                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.domain_controller_address=" . urlencode($included['windows'][0]->domain_controller_address) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('domain_controller_address', $included['windows'][0]->domain_controller_address, '', false, '', $link) ?>

                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?windows.domain_controller_name=" . urlencode($included['windows'][0]->domain_controller_name) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('domain_controller_name', $included['windows'][0]->domain_controller_name, '', false, '', $link) ?>
                                        </div>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="access_point_section">
                                <?php $count = !empty($included['access_point']) ? count($included['access_point']) : 0; ?>
                                <?=  device_panel('access_point', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Model') ?></th>
                                                    <th><?= __('Serial') ?></th>
                                                    <th><?= __('MAC') ?></th>
                                                    <th><?= __('IP') ?></th>
                                                    <th><?= __('Location') ?></th>
                                                    <th><?= __('Status') ?></th>
                                                    <th><?= __('IOS Version') ?></th>
                                                    <th><?= __('Software Version') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['access_point'])) {
                                                foreach ($included['access_point'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('access_point', $row->id) ?>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->model ?></td>
                                                    <td><?= $row->serial ?></td>
                                                    <td><?= $row->mac ?></td>
                                                    <td><?= $row->ip ?></td>
                                                    <td><?= $row->location ?></td>
                                                    <td><?= $row->status ?></td>
                                                    <td><?= $row->ios_version ?></td>
                                                    <td><?= $row->software_version ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="bios_section">
                                <?php $count = !empty($included['bios']) ? count($included['bios']) : 0; ?>
                                <?= device_panel('bios', $user->toolbar_style, $resource->id, '', $update, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <?php if (!empty($included['bios'])) { ?>
                                        <div class="col-4">
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?bios.manufacturer=" . urlencode($included['bios'][0]->manufacturer) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('bios_manufacturer', $included['bios'][0]->manufacturer, '', false, __('Manufacturer'), $link) ?>
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?bios.model=" . urlencode($included['bios'][0]->model) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('bios_model', $included['bios'][0]->model, '', false, __('Model'), $link) ?>
                                        </div>
                                        <div class="col-4">
                                            <?= read_field('bios_serial', $included['bios'][0]->serial, '', false, __('Serial'), $link) ?>
                                            <?= read_field('smversion', $included['bios'][0]->smversion, '', false, __('SM Version')) ?>
                                        </div>
                                        <div class="col-4">
                                            <?= read_field('version', $included['bios'][0]->version) ?>
                                            <?= read_field('bios_asset_tag', $included['bios'][0]->asset_tag, '', false, __('Asset Tag')) ?>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="disk_section">
                                <?php $count = !empty($included['disk']) ? count($included['disk']) : 0; ?>
                                <?=  device_panel('disk', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Index') ?></th>
                                                    <th><?= __('Manufacturer') ?></th>
                                                    <th><?= __('Model') ?></th>
                                                    <th><?= __('Family') ?></th>
                                                    <th><?= __('Caption') ?></th>
                                                    <th><?= __('Serial') ?></th>
                                                    <th><?= __('Size') ?></th>
                                                    <th><?= __('Smart Status') ?></th>
                                                    <th><?= __('Interface') ?></th>
                                                    <th><?= __('Firmware') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['disk'])) {
                                                foreach ($included['disk'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('disk', $row->id) ?>
                                                    <td><?= $row->hard_drive_index ?></td>
                                                    <td><?= $row->manufacturer ?></td>
                                                    <td><?= $row->model ?></td>
                                                    <td><?= $row->model_family ?></td>
                                                    <td><?= $row->caption ?></td>
                                                    <td><?= $row->serial ?></td>
                                                    <td><?= number_format($row->size / 1024) ?> GB</td>
                                                    <td><?= $row->status ?></td>
                                                    <td><?= $row->interface_type ?></td>
                                                    <td><?= $row->firmware ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="memory_section">
                                <?php $count = !empty($included['memory']) ? count($included['memory']) : 0; ?>
                                <?=  device_panel('memory', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Bank') ?></th>
                                                    <th><?= __('Type') ?></th>
                                                    <th><?= __('Form Factor') ?></th>
                                                    <th><?= __('Detail') ?></th>
                                                    <th><?= __('Serial') ?></th>
                                                    <th><?= __('Capacity') ?></th>
                                                    <th><?= __('Speed') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['memory'])) {
                                                foreach ($included['memory'] as $row) { ?>
                                                    <?php
                                                    $size = intval($row->size);
                                                    if ($size >= 1024) {
                                                        $size = number_format($size / 1024) . ' GB';
                                                    } else {
                                                        $size = number_format($size / 1024) . ' MB';
                                                    }
                                                    ?>
                                                <tr>
                                                    <?= device_component_button_read('memory', $row->id) ?>
                                                    <td><?= $row->bank ?></td>
                                                    <td><?= $row->type ?></td>
                                                    <td><?= $row->form_factor ?></td>
                                                    <td><?= $row->detail ?></td>
                                                    <td><?= $row->serial ?></td>
                                                    <td><?= $size ?></td>
                                                    <?php $speed = (!empty($row->speed)) ? number_format($row->speed) . ' MHz' : ''; ?>
                                                    <td><?= $speed ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="module_section">
                                <?php $count = !empty($included['module']) ? count($included['module']) : 0; ?>
                                <?=  device_panel('module', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th class="text-center"><?= __('Index') ?></th>
                                                    <th class="text-center"><?= __('Connected To') ?></th>
                                                    <th><?= __('Class') ?></th>
                                                    <th><?= __('Description') ?></th>
                                                    <th><?= __('HW Revision') ?></th>
                                                    <th><?= __('FW Revision') ?></th>
                                                    <th><?= __('SW Revision') ?></th>
                                                    <th><?= __('Serial') ?></th>
                                                    <th><?= __('Asset ID') ?></th>
                                                    <th class="text-center"><?= __('Is FRU') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['module'])) {
                                                foreach ($included['module'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('module', $row->id) ?>
                                                    <td class="text-center"><?= $row->module_index ?></td>
                                                    <td class="text-center"><?= $row->contained_in ?></td>
                                                    <td><?= $row->class_text ?></td>
                                                    <td><?= $row->description ?></td>
                                                    <td><?= $row->hardware_revision ?></td>
                                                    <td><?= $row->firmware_revision ?></td>
                                                    <td><?= $row->software_revision ?></td>
                                                    <td><?= $row->serial ?></td>
                                                    <td><?= $row->asset_ident ?></td>
                                                    <td class="text-center"><?= $row->is_fru ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="monitor_section">
                                <?php $count = !empty($included['monitor']) ? count($included['monitor']) : 0; ?>
                                <?=  device_panel('monitor', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Model') ?></th>
                                                    <th><?= __('Manufacturer') ?></th>
                                                    <th><?= __('Serial') ?></th>
                                                    <th><?= __('Manufacture Date') ?></th>
                                                    <th><?= __('Size') ?></th>
                                                    <th><?= __('Description') ?></th>
                                                    <th><?= __('Aspect Ratio') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['monitor'])) {
                                                foreach ($included['monitor'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('monitor', $row->id) ?>
                                                    <td><?= $row->model ?></td>
                                                    <td><?= $row->manufacturer ?></td>
                                                    <td><?= $row->serial ?></td>
                                                    <td><?= $row->manufacture_date ?></td>
                                                    <td><?= $row->size ?></td>
                                                    <td><?= $row->description ?></td>
                                                    <td><?= $row->aspect_ratio ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="motherboard_section">
                                <?php $count = !empty($included['motherboard']) ? count($included['motherboard']) : 0; ?>
                                <?=  device_panel('motherboard', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <?php if (!empty($included['motherboard'])) { ?>
                                        <div class="col-4">
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?motherboard.manufacturer=" . urlencode($included['motherboard'][0]->manufacturer) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('mb_manufacturer', $included['motherboard'][0]->manufacturer, '', false, __('Manufacturer'), $link) ?>
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?motherboard.model=" . urlencode($included['motherboard'][0]->model) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('mb_model', $included['motherboard'][0]->model, '', false, __('Model'), $link) ?>
                                        </div>
                                        <div class="col-4">
                                            <?= read_field('mb_serial', $included['motherboard'][0]->serial, '', false, __('Serial')) ?>
                                            <?= read_field('memory_slot_count', $included['motherboard'][0]->memory_slot_count) ?>
                                        </div>
                                        <div class="col-4">
                                            <?= read_field('processor_slot_count', $included['motherboard'][0]->processor_slot_count) ?>
                                            <?= read_field('processor_type', $included['motherboard'][0]->processor_type) ?>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="network_section">
                                <?php $count = !empty($included['network']) ? count($included['network']) : 0; ?>
                                <?=  device_panel('network', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Connection') ?></th>
                                                    <th><?= __('MAC Address') ?></th>
                                                    <th><?= __('Model') ?></th>
                                                    <th><?= __('Manufacturer') ?></th>
                                                    <th><?= __('Speed') ?></th>
                                                    <th><?= __('Status') ?></th>
                                                    <th><?= __('Type') ?></th>
                                                    <th><?= __('DHCP') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['network'])) {
                                                foreach ($included['network'] as $row) { ?>
                                                    <?php
                                                    $speed = intval($row->speed);
                                                    if (intval($speed) < 1000) {
                                                        $speed = $speed . ' b/s';
                                                    } elseif ($speed > 1000 and $speed <= 1000000) {
                                                        $speed = number_format($speed / 1000) . ' Kb/s';
                                                    } elseif ($speed > 1000000 and $speed <= 1000000000) {
                                                        $speed = number_format($speed / 1000 / 1000) . ' Mb/s';
                                                    } elseif ($speed >= 1000000000) {
                                                        $speed = number_format($speed / 1000 / 1000 / 1000) . ' Gb/s';
                                                    } ?>
                                                <tr>
                                                    <?= device_component_button_read('network', $row->id) ?>
                                                    <td><?= $row->connection ?></td>
                                                    <td><?= $row->mac ?></td>
                                                    <td><?= $row->model ?></td>
                                                    <td><?= $row->manufacturer ?></td>
                                                    <td><?= $speed ?></td>
                                                    <td><?= $row->connection_status ?></td>
                                                    <td><?= $row->type ?></td>
                                                    <td><?= $row->dhcp_enabled ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="optical_section">
                                <?php $count = !empty($included['optical']) ? count($included['optical']) : 0; ?>
                                <?=  device_panel('optical', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Description') ?></th>
                                                    <th><?= __('Model') ?></th>
                                                    <th><?= __('Mount Point') ?></th>
                                                    <th><?= __('Device') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['optical'])) {
                                                foreach ($included['optical'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('optical', $row->id) ?>
                                                    <td><?= $row->description ?></td>
                                                    <td><?= $row->model ?></td>
                                                    <td><?= $row->mount_point ?></td>
                                                    <td><?= $row->device ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="partition_section">
                                <?php $count = !empty($included['partition']) ? count($included['partition']) : 0; ?>
                                <?=  device_panel('partition', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Disk') ?></th>
                                                    <th><?= __('Index') ?></th>
                                                    <th><?= __('Type') ?></th>
                                                    <th><?= __('Mount Point') ?></th>
                                                    <th><?= __('Size') ?></th>
                                                    <th><?= __('Free') ?></th>
                                                    <th><?= __('Used') ?></th>
                                                    <th><?= __('Format') ?></th>
                                                    <th><?= __('Serial') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['partition'])) {
                                                foreach ($included['partition'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('partition', $row->id) ?>
                                                    <td><?= $row->hard_drive_index ?></td>
                                                    <td><?= $row->partition_disk_index ?></td>
                                                    <td><?= $row->type ?></td>
                                                    <td><?= $row->mount_point ?></td>
                                                    <td><?= number_format($row->size / 1000) ?> GB</td>
                                                    <td><?= number_format($row->free / 1000) ?> GB</td>
                                                    <td><?= number_format($row->used / 1000) ?> GB</td>
                                                    <td><?= $row->format ?></td>
                                                    <td><?= $row->serial ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="processor_section">
                                <?php $count = !empty($included['processor']) ? count($included['processor']) : 0; ?>
                                <?=  device_panel('processor', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <?php if (!empty($included['processor'])) { ?>
                                        <div class="col-4">
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?processor.manufacturer=" . urlencode($included['processor'][0]->manufacturer) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('proc_manufacturer', $included['processor'][0]->manufacturer, '', false, __('Manufacturer'), $link) ?>
                                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?processor.description=" . urlencode($included['processor'][0]->description) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                            <?= read_field('proc_description', $included['processor'][0]->description, '', false, __('Description'), $link) ?>
                                            <?= read_field('speed', number_format($included['processor'][0]->speed) . ' MHz') ?>
                                        </div>
                                        <div class="col-4">
                                            <?= read_field('architecture', $included['processor'][0]->architecture) ?>
                                            <?= read_field('socket', $included['processor'][0]->socket) ?>
                                            <?= read_field('hyperthreading', $included['processor'][0]->hyperthreading) ?>
                                        </div>
                                        <div class="col-4">
                                            <?= read_field('physical_count', $included['processor'][0]->physical_count) ?>
                                            <?= read_field('core_count', $included['processor'][0]->core_count) ?>
                                            <?= read_field('logical_count', $included['processor'][0]->logical_count) ?>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="radio_section">
                                <?php $count = !empty($included['radio']) ? count($included['radio']) : 0; ?>
                                <?=  device_panel('radio', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Index') ?></th>
                                                    <th><?= __('RX Level') ?></th>
                                                    <th><?= __('RX Profile') ?></th>
                                                    <th><?= __('RX Freq') ?></th>
                                                    <th><?= __('RX Power') ?></th>
                                                    <th><?= __('RX Bitrate') ?></th>
                                                    <th><?= __('TX Level') ?></th>
                                                    <th><?= __('TX Profile') ?></th>
                                                    <th><?= __('TX Freq') ?></th>
                                                    <th><?= __('TX Power') ?></th>
                                                    <th><?= __('TX Bitrate') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['radio'])) {
                                                foreach ($included['radio'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('radio', $row->id) ?>
                                                    <td><?= $row->net_index ?></td>
                                                    <td><?= $row->rx_level ?></td>
                                                    <td><?= $row->rx_profile ?></td>
                                                    <td><?= $row->rx_freq ?></td>
                                                    <td><?= $row->rx_power ?></td>
                                                    <td><?= $row->rx_bitrate ?></td>
                                                    <td><?= $row->tx_level ?></td>
                                                    <td><?= $row->tx_profile ?></td>
                                                    <td><?= $row->tx_freq ?></td>
                                                    <td><?= $row->tx_power ?></td>
                                                    <td><?= $row->tx_bitrate ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="scsi_section">
                                <?php $count = !empty($included['scsi']) ? count($included['scsi']) : 0; ?>
                                <?=  device_panel('scsi', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Manufacturer') ?></th>
                                                    <th><?= __('Type') ?></th>
                                                    <th><?= __('Device') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['scsi'])) {
                                                foreach ($included['scsi'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('scsi', $row->id) ?>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->manufacturer ?></td>
                                                    <td><?= $row->type ?></td>
                                                    <td><?= $row->device ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="sound_section">
                                <?php $count = !empty($included['sound']) ? count($included['sound']) : 0; ?>
                                <?=  device_panel('sound', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Manufacturer') ?></th>
                                                    <th><?= __('Device') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['sound'])) {
                                                foreach ($included['sound'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('sound', $row->id) ?>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->manufacturer ?></td>
                                                    <td><?= $row->device ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="usb_section">
                                <?php $count = !empty($included['usb']) ? count($included['usb']) : 0; ?>
                                <?=  device_panel('usb', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Manufacturer') ?></th>
                                                    <th><?= __('Class') ?></th>
                                                    <th><?= __('Description') ?></th>
                                                    <th><?= __('Present') ?></th>
                                                    <th><?= __('Status') ?></th>
                                                    <th><?= __('Availability') ?></th>
                                                    <th><?= __('Error Code') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['usb'])) {
                                                foreach ($included['usb'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('usb', $row->id) ?>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->manufacturer ?></td>
                                                    <td><?= $row->class ?></td>
                                                    <td><?= $row->description ?></td>
                                                    <td><?= $row->present ?></td>
                                                    <td><?= $row->status ?></td>
                                                    <td><?= $row->availability ?></td>
                                                    <td><?= $row->config_manager_error_code ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="video_section">
                                <?php $count = !empty($included['video']) ? count($included['video']) : 0; ?>
                                <?=  device_panel('video', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Model') ?></th>
                                                    <th><?= __('Manufacturer') ?></th>
                                                    <th><?= __('Memory') ?></th>
                                                    <th><?= __('Device') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['video'])) {
                                                foreach ($included['video'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('video', $row->id) ?>
                                                    <td><?= $row->model ?></td>
                                                    <td><?= $row->manufacturer ?></td>
                                                    <td><?= $row->size ?></td>
                                                    <td><?= $row->device ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="antivirus_section">
                                <?php $count = !empty($included['antivirus']) ? count($included['antivirus']) : 0; ?>
                                <?=  device_panel('antivirus', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Status') ?></th>
                                                    <th><?= __('State') ?></th>
                                                    <th><?= __('Executable') ?></th>
                                                    <th><?= __('Reportable') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['antivirus'])) {
                                                foreach ($included['antivirus'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('antivirus', $row->id) ?>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->status ?></td>
                                                    <td><?= $row->state ?></td>
                                                    <td><?= $row->executable ?></td>
                                                    <td><?= $row->reportable ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="firewall_section">
                                <?php $count = !empty($included['firewall']) ? count($included['firewall']) : 0; ?>
                                <?=  device_panel('firewall', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Status') ?></th>
                                                    <th><?= __('State') ?></th>
                                                    <th><?= __('Executable') ?></th>
                                                    <th><?= __('Reportable') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['firewall'])) {
                                                foreach ($included['firewall'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('firewall', $row->id) ?>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->status ?></td>
                                                    <td><?= $row->state ?></td>
                                                    <td><?= $row->executable ?></td>
                                                    <td><?= $row->reportable ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="firewall_rule_section">
                                <?php $count = !empty($included['firewall_rule']) ? count($included['firewall_rule']) : 0; ?>
                                <?=  device_panel('firewall_rule', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Profile') ?></th>
                                                    <th><?= __('Enabled') ?></th>
                                                    <th><?= __('Direction') ?></th>
                                                    <th><?= __('Action') ?></th>
                                                    <th><?= __('Local Port') ?></th>
                                                    <th><?= __('Remote Port') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['firewall_rule'])) {
                                                foreach ($included['firewall_rule'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('firewall_rule', $row->id) ?>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->profile ?></td>
                                                    <td><?= $row->enabled ?></td>
                                                    <td><?= $row->direction ?></td>
                                                    <td><?= $row->action ?></td>
                                                    <td><?= $row->local_port ?></td>
                                                    <td><?= $row->remote_port ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="service_section">
                                <?php $count = !empty($included['service']) ? count($included['service']) : 0; ?>
                                <?=  device_panel('service', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Description') ?></th>
                                                    <th><?= __('Start Mode') ?></th>
                                                    <th><?= __('User') ?></th>
                                                    <th><?= __('State') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['service'])) {
                                                foreach ($included['service'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('service', $row->id) ?>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->description ?></td>
                                                    <td><?= $row->start_mode ?></td>
                                                    <td><?= $row->user ?></td>
                                                    <td><?= $row->state ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="software_section">
                                <?php $count = !empty($included['software']) ? count($included['software']) : 0; ?>
                                <?=  device_panel('software', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Version') ?></th>
                                                    <th><?= __('Publisher') ?></th>
                                                    <?php if ($resource->os_group === 'Windows') { ?>
                                                        <th><?= __('Type') ?>
                                                    <?php } ?>
                                                    <th><?= __('Installed On') ?></th>
                                                    <th><?= __('Installed By') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['software'])) {
                                                foreach ($included['software'] as $row) { ?>
                                                    <?php
                                                    $install_date = $row->installed_on;
                                                    if ($install_date === '2000-01-01 00:00:00' or $install_date === '0000-00-00 00:00:00') {
                                                        $install_date = '';
                                                    }
                                                    if ($install_date === '' and !empty($key->install_date)) {
                                                        $install_date = $key->install_date;
                                                    }
                                                    ?>
                                                <tr>
                                                    <?= device_component_button_read('software', $row->id) ?>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->version ?></td>
                                                    <td><?= $row->publisher ?></td>
                                                    <?php if ($resource->os_group === 'Windows') { ?>
                                                        <td><?= $row->type ?></td>
                                                    <?php } ?>
                                                    <td><?= $install_date ?></td>
                                                    <td><?= $row->installed_by ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="software_key_section">
                                <?php $count = !empty($included['software_key']) ? count($included['software_key']) : 0; ?>
                                <?=  device_panel('software_key', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Text') ?></th>
                                                    <th><?= __('Edition') ?></th>
                                                    <th><?= __('Release') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['software_key'])) {
                                                foreach ($included['software_key'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('software_key', $row->id) ?>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->string ?></td>
                                                    <td><?= $row->edition ?></td>
                                                    <td><?= $row->rel ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="certificate_section">
                                <?php $count = !empty($included['certificate']) ? count($included['certificate']) : 0; ?>
                                <?=  device_panel('certificate', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Issuer') ?></th>
                                                    <th><?= __('Valid From') ?></th>
                                                    <th><?= __('Valid To') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['certificate'])) {
                                                foreach ($included['certificate'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('certificate', $row->id) ?>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->issuer ?></td>
                                                    <td><?= $row->valid_from ?></td>
                                                    <td><?= $row->valid_to ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="dns_section">
                                <?php $count = !empty($included['dns']) ? count($included['dns']) : 0; ?>
                                <?=  device_panel('dns', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('FQDN') ?></th>
                                                    <th><?= __('IP') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['dns'])) {
                                                foreach ($included['dns'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('dns', $row->id) ?>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->fqdn ?></td>
                                                    <td><?= ip_address_from_db($row->ip) ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="executable_section">
                                <?php $count = !empty($included['exceutable']) ? count($included['executable']) : 0; ?>
                                <?=  device_panel('executable', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Full Name') ?></th>
                                                    <th><?= __('Description') ?></th>
                                                    <th><?= __('Size') ?></th>
                                                    <th><?= __('Last Changed') ?></th>
                                                    <th><?= __('Owner') ?></th>
                                                    <th><?= __('Permission') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['executable'])) {
                                                foreach ($included['executable'] as $row) {
                                                    if (intval($row->size > 1048576)) {
                                                        $size = number_format(intval($row->size / 1024 / 1024)) . ' MB';
                                                    } else {
                                                        $size = number_format(intval($row->size / 1024))  . ' KB';
                                                    }
                                                    ?>
                                                <tr>
                                                    <?= device_component_button_read('executable', $row->id) ?>
                                                    <td><?= $row->name ?></td>
                                                    <td style="white-space: nowrap;"><?= $row->full_name ?></td>
                                                    <td><?= $row->description ?></td>
                                                    <td style="white-space: nowrap;"><span style="display:none;"><?= str_pad($row->size, 20, '0', STR_PAD_LEFT) ?></span><?= $size ?></td>
                                                    <td style="white-space: nowrap;"><?= $row->last_changed ?></td>
                                                    <td><?= $row->owner ?></td>
                                                    <td><?= $row->permission ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="file_section">
                                <?php $count = !empty($included['file']) ? count($included['file']) : 0; ?>
                                <?=  device_panel('file', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Directory') ?></th>
                                                    <th><?= __('Full Name') ?></th>
                                                    <th><?= __('Size') ?></th>
                                                    <th><?= __('Last Changed') ?></th>
                                                    <th><?= __('Owner') ?></th>
                                                    <th><?= __('Permission') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['file'])) {
                                                foreach ($included['file'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('file', $row->id) ?>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->directory ?></td>
                                                    <td><?= $row->full_name ?></td>
                                                    <td><?= $row->size ?></td>
                                                    <td><?= $row->last_changed ?></td>
                                                    <td><?= $row->owner ?></td>
                                                    <td><?= $row->permission ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="log_section">
                                <?php $count = !empty($included['log']) ? count($included['log']) : 0; ?>
                                <?=  device_panel('log', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('File Name') ?></th>
                                                    <th><?= __('Size') ?></th>
                                                    <th><?= __('Max Size') ?></th>
                                                    <th><?= __('Overwrite') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['log'])) {
                                                foreach ($included['log'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('log', $row->id) ?>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= str_replace(' /', '<br> /', $row->file_name) ?></td>
                                                    <td><?= $row->file_size ?></td>
                                                    <td><?= $row->max_file_size ?></td>
                                                    <td><?= $row->overwrite ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="netstat_section">
                                <?php $count = !empty($included['netstat']) ? count($included['netstat']) : 0; ?>
                                <?=  device_panel('netstat', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"],[3,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Protocol') ?></th>
                                                    <th><?= __('IP Address') ?></th>
                                                    <th><?= __('Port') ?></th>
                                                    <th><?= __('Program') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['netstat'])) {
                                                foreach ($included['netstat'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('netstat', $row->id) ?>
                                                    <td><?= $row->protocol ?></td>
                                                    <td><?= ip_address_from_db($row->ip) ?></td>
                                                    <td><?= $row->port ?></td>
                                                    <td><?= $row->program ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="nmap_section">
                                <?php $count = !empty($included['nmap']) ? count($included['nmap']) : 0; ?>
                                <?=  device_panel('nmap', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Protocol') ?></th>
                                                    <th><?= __('IP Address') ?></th>
                                                    <th><?= __('Port') ?></th>
                                                    <th><?= __('Program') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['nmap'])) {
                                                foreach ($included['nmap'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('nmap', $row->id) ?>
                                                    <td><?= $row->protocol ?></td>
                                                    <td><?= ip_address_from_db($row->ip) ?></td>
                                                    <td><?= $row->port ?></td>
                                                    <td><?= $row->program ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="pagefile_section">
                                <?php $count = !empty($included['pagefile']) ? count($included['pagefile']) : 0; ?>
                                <?=  device_panel('pagefile', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Initial Size') ?></th>
                                                    <th><?= __('Max Size') ?></th>
                                                    <th><?= __('Size') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['pagefile'])) {
                                                foreach ($included['pagefile'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('pagefile', $row->id) ?>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->initial_size ?></td>
                                                    <td><?= $row->max_size ?></td>
                                                    <td><?= $row->size ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="policy_section">
                                <?php $count = !empty($included['policy']) ? count($included['policy']) : 0; ?>
                                <?=  device_panel('policy', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Type') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Value') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['policy'])) {
                                                foreach ($included['policy'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('policy', $row->id) ?>
                                                    <td><?= $row->type ?></td>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->value ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="print_queue_section">
                                <?php $count = !empty($included['print_queue']) ? count($included['print_queue']) : 0; ?>
                                <?=  device_panel('print_queue', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Model') ?></th>
                                                    <th><?= __('Manufacturer') ?></th>
                                                    <th><?= __('Description') ?></th>
                                                    <th><?= __('Port Name') ?></th>
                                                    <th><?= __('Shared') ?></th>
                                                    <th><?= __('Share Name') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['print_queue'])) {
                                                foreach ($included['print_queue'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('print_queue', $row->id) ?>
                                                    <td><?= $row->model ?></td>
                                                    <td><?= $row->manufacturer ?></td>
                                                    <td><?= $row->description ?></td>
                                                    <td><?= $row->port_name ?></td>
                                                    <td><?= $row->shared ?></td>
                                                    <td><?= $row->shared_name ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="route_section">
                                <?php $count = !empty($included['route']) ? count($included['route']) : 0; ?>
                                <?=  device_panel('route', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Destination') ?></th>
                                                    <th><?= __('Mask') ?></th>
                                                    <th><?= __('Gateway') ?></th>
                                                    <th><?= __('Metric') ?></th>
                                                    <th><?= __('Protocol') ?></th>
                                                    <th><?= __('Type') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['route'])) {
                                                foreach ($included['route'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('route', $row->id) ?>
                                                    <td><?= $row->destination ?></td>
                                                    <td><?= $row->mask ?></td>
                                                    <td><?= $row->next_hop ?></td>
                                                    <td><?= $row->metric ?></td>
                                                    <td><?= $row->protocol ?></td>
                                                    <td><?= $row->type ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <?php if (!empty($included['server'])) { ?>
                            <div style="display:none;" id="server_section">
                                <?php foreach ($included['server'] as $row) { ?>
                                <div style="margin-bottom:20px;" class="card" id="<?= $row->name ?>_section">
                                    <?php $icon = base_url() . 'icons/' . $row->type . '.svg'; ?>
                                    <?php $count = !empty($included['server']) ? count($included['server']) : 0; ?>
                                    <?= device_panel('Server :: ' . $row->name, $user->toolbar_style, $resource->id, $icon, false, $count); ?>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-4">
                                                <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?server.type=" . urlencode($row->type) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                                <?= read_field('server_type_' . $row->id, $row->type, '', false, __('Type'), $link) ?>
                                                <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?server.name=" . urlencode($row->name) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                                <?= read_field('server_name_' . $row->id, $row->name, '', false, '', $link) ?>
                                            </div>
                                            <div class="col-4">
                                                <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?server.version=" . urlencode($row->version) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                                                <?= read_field('server_version_' . $row->id, $row->version, '', false, __('Version'), $link) ?>
                                                <?php if ($row->type === 'web') {
                                                    $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?server.version_string=" . urlencode($row->version_string) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>";
                                                    echo read_field('version_string_' . $row->id, $row->version_string, '', false, __('Version String'), $link);
                                                } elseif ($row->type === 'database') {
                                                    $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?server.status=" . urlencode($row->status) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>";
                                                    echo read_field('server_status_' . $row->id, $row->status, '', false, __('Status'), $link);
                                                } ?>
                                            </div>
                                            <div class="col-4">
                                                <?= read_field('server_ip_' . $row->id, $row->ip, '', false, __('IP')) ?>
                                                <?= read_field('server_port_' . $row->id, $row->port, '', false, __('Port')) ?>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="row">
                                            <div class="col-12">
                                                <?php if ($row->type === 'web') { ?>
                                                <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                                <?php } else { ?>
                                                    <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[3,"asc"]]'>
                                                <?php } ?>
                                                    <thead>
                                                        <tr>
                                                            <?php if ($row->type === 'web') { ?>
                                                                <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                                <th><?= __('Name') ?></th>
                                                                <th><?= __('Description') ?></th>
                                                                <th><?= __('Internal ID') ?></th>
                                                                <th><?= __('IP') ?></th>
                                                                <th><?= __('Hostname') ?></th>
                                                                <th><?= __('Port') ?></th>
                                                                <th><?= __('Status') ?></th>
                                                                <th><?= __('Instance') ?></th>
                                                                <th><?= __('Path') ?></th>
                                                                <th class="text-center"><?= __('View All') ?></th>
                                                            <?php } elseif ($row->type === 'database') { ?>
                                                                <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                                <th><?= __('Name') ?></th>
                                                                <th><?= __('Internal ID') ?></th>
                                                                <th><?= __('Instance') ?></th>
                                                                <th><?= __('Path') ?></th>
                                                                <th><?= __('Size') ?></th>
                                                                <th class="text-center"><?= __('View All') ?></th>
                                                            <?php } ?>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php if (!empty($included['server_item'])) {
                                                        foreach ($included['server_item'] as $server_item) {
                                                            if ($server_item->parent_name == $row->name) {
                                                                if ($row->type === 'web') { ?>
                                                                    <tr>
                                                                        <?= device_component_button_read('server_item', $server_item->id) ?>
                                                                        <td><?= $server_item->name ?></td>
                                                                        <td><?= $server_item->description ?></td>
                                                                        <td><?= $server_item->id_internal ?></td>
                                                                        <td><?= $server_item->ip ?></td>
                                                                        <td><?= $server_item->hostname ?></td>
                                                                        <td><?= $server_item->port ?></td>
                                                                        <td><?= $server_item->status ?></td>
                                                                        <td><?= $server_item->instance ?></td>
                                                                        <td><?= $server_item->path ?></td>
                                                                        <td class="text-center"><a role="button" class="btn btn-sm btn-primary" title="<?= __('View') ?>" href="<?=  url_to('componentsCollection') ?>?components.type=server_item&components.device_id=<?= $resource->id ?>"><span class="fa fa-eye text-primary"></span></a></td>
                                                                    </tr>
                                                                <?php } elseif ($row->type === 'database') { ?>
                                                                    <tr>
                                                                        <?= device_component_button_read('server_item', $server_item->id) ?>
                                                                        <td><?= $server_item->name ?></td>
                                                                        <td><?= $server_item->id_internal ?></td>
                                                                        <td><?= $server_item->instance ?></td>
                                                                        <td><?= $server_item->path ?></td>
                                                                        <td><?= $server_item->size ?></td>
                                                                        <td class="text-center"><a role="button" class="btn btn-sm btn-primary" title="<?= __('View') ?>" href="<?=  url_to('componentsCollection') ?>?components.type=server_item&components.device_id=<?= $resource->id ?>"><span class="fa fa-eye text-primary"></span></a></td>
                                                                    </tr>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <?php } ?>

                            <div style="margin-bottom:20px; display:none;" class="card" id="share_section">
                                <?php $count = !empty($included['share']) ? count($included['share']) : 0; ?>
                                <?=  device_panel('share', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Description') ?></th>
                                                    <th><?= __('Path') ?></th>
                                                    <th><?= __('Size') ?></th>
                                                    <th><?= __('Permissions') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['share'])) {
                                                foreach ($included['share'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('share', $row->id) ?>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->description ?></td>
                                                    <td><?= $row->path ?></td>
                                                    <td><?= $row->size ?></td>
                                                    <td><?= $row->users ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="task_section">
                                <?php $count = !empty($included['task']) ? count($included['task']) : 0; ?>
                                <?=  device_panel('task', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Status') ?></th>
                                                    <th><?= __('State') ?></th>
                                                    <th><?= __('Task') ?></th>
                                                    <th><?= __('Next Run') ?></th>
                                                    <th><?= __('Last Run') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['task'])) {
                                                foreach ($included['task'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('task', $row->id) ?>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->status ?></td>
                                                    <td><?= $row->state ?></td>
                                                    <td><?= $row->task ?></td>
                                                    <td><?= $row->next_run ?></td>
                                                    <td><?= $row->last_run ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="user_section">
                                <?php $count = !empty($included['user']) ? count($included['user']) : 0; ?>
                                <?=  device_panel('user', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <?php if ($resource->os_group === 'Windows') { ?>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Caption') ?></th>
                                                    <th><?= __('Disabled') ?></th>
                                                    <th><?= __('Status') ?></th>
                                                    <th><?= __('Type') ?></th>
                                                    <th><?= __('Password Expires') ?></th>
                                                    <th><?= __('Password Last Changed') ?></th>
                                                    <th><?= __('Last Logon') ?></th>
                                                    <th><?= __('Status') ?></th>
                                                </tr>
                                                <?php } else { ?>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('SID') ?></th>
                                                    <th><?= __('SSH Key') ?></th>
                                                    <th><?= __('Full Name') ?></th>
                                                    <th><?= __('Status') ?></th>
                                                    <th><?= __('Password Required') ?></th>
                                                    <th><?= __('Password Disabled') ?></th>
                                                    <th><?= __('Password Expires') ?></th>
                                                    <th><?= __('Home') ?></th>
                                                    <th><?= __('Shell') ?></th>
                                                </tr>
                                                <?php } ?>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['user'])) {
                                                foreach ($included['user'] as $row) { ?>
                                                    <?php if (!empty($row->password_last_changed) and $row->password_last_changed === '2000-01-01 00:00:00') {
                                                        $row->password_last_changed = '';
                                                    } ?>
                                                    <?php if (!empty($row->last_logon) and $row->last_logon === '2000-01-01 00:00:00') {
                                                        $row->last_logon = '';
                                                    } ?>
                                                    <?php if ($row->keys === '[]') {
                                                        $row->keys = '';
                                                    } ?>
                                                    <?php if (!empty($row->keys)) {
                                                        $row->keys = 'Click View for details';
                                                    } ?>
                                                    <?php if ($resource->os_group === 'Windows') { ?>
                                                    <tr>
                                                        <?= device_component_button_read('user', $row->id) ?>
                                                        <td><?= $row->name ?></td>
                                                        <td><?= $row->caption ?></td>
                                                        <td><?= $row->disabled ?></td>
                                                        <td><?= $row->status ?></td>
                                                        <td><?= $row->type ?></td>
                                                        <td><?= $row->password_expires ?></td>
                                                        <td><?= $row->password_last_changed ?></td>
                                                        <td><?= $row->last_logon ?></td>
                                                        <td><?= $row->status ?></td>
                                                    </tr>
                                                    <?php } else { ?>
                                                    <tr>
                                                        <?= device_component_button_read('user', $row->id) ?>
                                                        <td><?= $row->name ?></td>
                                                        <td><?= $row->sid ?></td>
                                                        <td><?= $row->keys ?></td>
                                                        <td><?= $row->full_name ?></td>
                                                        <td><?= $row->status ?></td>
                                                        <td><?= $row->password_required ?></td>
                                                        <td><?= $row->password_disabled ?></td>
                                                        <td><?= $row->password_expires ?></td>
                                                        <td><?= $row->home ?></td>
                                                        <td><?= $row->shell ?></td>
                                                    </tr>
                                                    <?php } ?>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="user_group_section">
                                <?php $count = !empty($included['user_group']) ? count($included['user_group']) : 0; ?>
                                <?=  device_panel('user_group', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Description') ?></th>
                                                    <th><?= __('SID') ?></th>
                                                    <th><?= __('Members') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['user_group'])) {
                                                foreach ($included['user_group'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('user_group', $row->id) ?>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->description ?></td>
                                                    <td><?= $row->sid ?></td>
                                                    <td><?= str_replace(',', ', ', $row->members) ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="variable_section">
                                <?php $count = !empty($included['variable']) ? count($included['variable']) : 0; ?>
                                <?=  device_panel('variable', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Program') ?></th>
                                                    <th><?= __('Value') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['variable'])) {
                                                foreach ($included['variable'] as $row) { ?>
                                                <tr>
                                                    <?= device_component_button_read('variable', $row->id) ?>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->program ?></td>
                                                    <td><?= str_replace(':', ': ', $row->value) ?></td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:20px; display:none;" class="card" id="vm_section">
                                <?php $count = !empty($included['vm']) ? count($included['vm']) : 0; ?>
                                <?=  device_panel('vm', $user->toolbar_style, $resource->id, '', false, $count); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[2,"asc"]]'>
                                            <thead>
                                                <tr>
                                                    <th class="text-center" data-orderable="false"><?= __('View') ?></th>
                                                    <th class="text-center"><?= __('Icon') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Type') ?></th>
                                                    <th><?= __('Memory') ?></th>
                                                    <th><?= __('CPU') ?></th>
                                                    <th><?= __('Status') ?></th>
                                                    <th><?= __('UUID') ?></th>
                                                    <th><?= __('Config File') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($included['vm'])) {
                                                foreach ($included['vm'] as $row) { ?>
                                                    <?php if ($row->icon !== '') {
                                                        $row->icon = '<img src="' . base_url() . 'device_images/' . $row->{'icon'} . '.svg" alt="' . $row->{'icon'} . '" style="width:24px;">';
                                                    } ?>
                                                <tr>
                                                    <?= device_component_button_read('vm', $row->id) ?>
                                                    <td class="text-center"><?= $row->icon ?></td>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->type ?></td>
                                                    <td><?= $row->memory_count ?></td>
                                                    <td><?= $row->cpu_count ?></td>
                                                    <td><?= $row->status ?></td>
                                                    <td><?= $row->uuid ?></td>
                                                    <td><?= $row->config_file ?></td>
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

<script {csp-script-nonce}>
window.onload = function () {
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

    <?php if (!empty($included['field']) and !empty($included['fields'])) {
        echo "\$(document).ready(function() {\n";
        foreach ($included['field'] as $field) {
            foreach ($included['fields'] as $fields) {
                if ($field->field_id == $fields->id) {
                    echo "\$(\"#" . $fields->name . "\").val(\"" . $field->value . "\");\n";
                }
            }
        }
        echo "});\n";
    } ?>

    $("#nmis_manage").val("<?= $resource->nmis_manage ?>");
    $("#nmis_group").val("<?= $resource->nmis_group ?>");
    $("#nmis_role").val("<?= $resource->nmis_role ?>");
    $("#nmis_business_service").val("<?= $resource->nmis_business_service ?>");
    $("#nmis_customer").val("<?= $resource->nmis_customer ?>");
    $("#nmis_poller_uuid").val("<?= $resource->nmis_poller_uuid ?>");

    <?php $form_contents = '<input type="hidden" id="data[access_token]" name="data[access_token]" value="' . $meta->access_token . '">\
            <input type="hidden" id="data[type]" name="data[type]" value="components">\
            <input type="hidden" id="data[attributes][component_type]" name="data[attributes][component_type]" value="discovery">\
            <input type="hidden" id="data[attributes][device_id]" name="data[attributes][device_id]" value="' . $meta->id . '">'; ?>

    <?php if (!empty($user->toolbar_style) and $user->toolbar_style === 'icontext') { ?>
    $("#oa_panel_buttons").prepend('<form style="padding-right:4px;" id="componentsCreate" method="post" action="<?= url_to('componentsCreate') ?>"><?= $form_contents ?><button id="componentsCreateButton" class="btn btn-light mb-2" type="submit" title="<?= __('Discover') ?>"><span class="fa-solid fa-satellite-dish text-oa-success"></span>&nbsp;<?= __('Discover') ?></button></form>');

    <?php } elseif (!empty($user->toolbar_style) and $user->toolbar_style === 'icon') { ?>
    $("#oa_panel_buttons").append('<form style="padding-right:4px;" id="componentsCreate" method="post" action="<?= url_to('componentsCreate') ?>"><?= $form_contents ?><button id="componentsCreateButton" class="btn btn-light mb-2" type="submit" title="<?= __('Discover') ?>"><span class="fa-solid fa-satellite-dish text-oa-success"></span></button></form>');

    <?php } else { ?>
    $("#oa_panel_buttons").append('<form style="padding-right:4px;" id="componentsCreate" method="post" action="<?= url_to('componentsCreate') ?>"><?= $form_contents ?><button id="componentsCreateButton" class="btn btn-light mb-2" type="submit" title="<?= __('Discover') ?>"><?= __('Discover') ?></button></form>');
    <?php } ?>

    $("#device_panel_tags").append('<div id="tags_control" class="btn-group" style="padding-left:20px; height:40px; display:none;" role="group"><div class="input-group"><input type="text" data-tags=\'<?= json_encode($resource->tags) ?>\' id="tags_add" class="form-control form-control-sm"><div class="float-end" style="padding-left:4px;"><button data-attribute="tags" class="btn btn-outline-success submit" title="Submit" style=""><span style="font-size: 1.2rem;" class="fa fa-check"></span></button></div></div></div>');

    $(document).on('click', '#add_tags', function (e) {
        $("#tags_control").css('display', 'block');
    });

    $('#button_reset').click(function (){
        if (confirm("<?= __('Should I remove all non-current data from this device?') ?>")) {
            $.ajax({
                type: "PATCH",
                url: "<?= base_url() ?>devices/<?= $resource->id ?>/reset",
                contentType: "application/json",
                data: {},
                success: function (data) {
                    $("#liveToastSuccess-header").text("Reset Succeeded");
                    $("#liveToastSuccess-body").text("Reload to view updated device.");
                    var toastElList = [].slice.call(document.querySelectorAll('.toast-success'));
                    var toastList = toastElList.map(function(toastEl) {
                        return new bootstrap.Toast(toastEl)
                    });
                    toastList.forEach(toast => toast.show());
                },
                error: function (data) {
                    // data = JSON.parse(data.responseText);
                    $("#liveToastFailure-header").text("Update Failed");
                    $("#liveToastFailure-body").text("Please check the logfile.");
                    var toastElList = [].slice.call(document.querySelectorAll('.toast-failure'));
                    var toastList = toastElList.map(function(toastEl) {
                        return new bootstrap.Toast(toastEl)
                    });
                    toastList.forEach(toast => toast.show());
                }
            });
        }
    })

}
</script>
