<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
include 'shared/collection_functions.php';
$style = @$user->toolbar_style;
if ($style === 'icontext') {
    $summary_button = '<li class="nav-item" role="presentation"><a href="#summary" class="nav-link" id="summary-tab"><span style="margin-right:6px;" class="fa-regular fa-rectangle-list text-primary"></span>' . __('Summary') . '</a></li>';
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab"><span style="margin-right:6px;" class="fa fa-eye text-success"></span>' . __('Details') . '</a></li>';
    $scan_op_button = '<li class="nav-item" role="presentation"><a href="#scan"    class="nav-link" id="scan_options-tab"><span style="margin-right:6px;" class="fa-solid fa-wifi text-success"></span>' . __('Scan Options') . '</a></li>';
    $match_o_button = '<li class="nav-item" role="presentation"><a href="#match"   class="nav-link" id="match_options-tab"><span style="margin-right:6px;" class="fa-solid fa-laptop-code text-success"></span>' . __('Match Options') . '</a></li>';
    $logs_button    = '<li class="nav-item" role="presentation"><a href="#logs"    class="nav-link" id="logs-tab"><span style="margin-right:6px;" class="fa fa-bars text-primary" ></span>' . __('Logs')    . '</a></li>';
    $all_ips_button = '<li class="nav-item" role="presentation"><a href="#all_ips" class="nav-link" id="all_ips-tab"><span style="margin-right:6px;" class="fa-solid fa-network-wired text-primary"></span>' . __('ALL IPs') . '</a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab"><span style="margin-right:6px;" class="fa fa-desktop text-primary" ></span>' . __('Devices') . '</a></li>';
    $issues_button  = '<li class="nav-item" role="presentation"><a href="#issues"  class="nav-link" id="issues-tab" ><span style="margin-right:6px;" class="fa-solid fa-triangle-exclamation text-warning"></span>' . __('Issues')  . '</a></li>';
} elseif ($style === 'icon') {
    $summary_button = '<li class="nav-item" role="presentation"><a href="#summary" class="nav-link" id="summary-tab"><span style="margin-right:6px;" title="' . __('Summary') . '" class="fa-regular fa-rectangle-list text-primary"></span></a></li>';
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab"><span style="margin-right:6px;" title="' . __('Details') . '" class="fa fa-eye text-success"></span></a></li>';
    $scan_op_button = '<li class="nav-item" role="presentation"><a href="#scan"    class="nav-link" id="scan_options-tab"><span style="margin-right:6px;" title="' . __('Scan Options') . '" class="fa-solid fa-wifi text-success"></span></a></li>';
    $match_o_button = '<li class="nav-item" role="presentation"><a href="#match"   class="nav-link" id="match_options-tab"><span style="margin-right:6px;" title="' . __('Match Options') . '" class="fa-solid fa-laptop-code text-success"></span></a></li>';
    $logs_button    = '<li class="nav-item" role="presentation"><a href="#logs"    class="nav-link" id="logs-tab"   ><span style="margin-right:6px;" title="' . __('Logs') .    '" class="fa fa-bars text-primary"></span></a></li>';
    $all_ips_button = '<li class="nav-item" role="presentation"><a href="#all_ips" class="nav-link" id="all_ips-tab"><span style="margin-right:6px;" title="' . __('All IPs') . '" class="fa-solid fa-network-wired text-primary"></span></a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab"><span style="margin-right:6px;" title="' . __('Devices') . '" class="fa fa-desktop text-primary"></span></a></li>';
    $issues_button  = '<li class="nav-item" role="presentation"><a href="#issues"  class="nav-link" id="issues-tab" ><span style="margin-right:6px;" title="' . __('Issues') .  '" class="fa-solid fa-triangle-exclamation text-warning"></span></a></li>';
} else {
    $summary_button = '<li class="nav-item" role="presentation"><a href="#summary" class="nav-link" id="summary-tab">' . __('Summary') . '</a></li>';
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab">' . __('Details') . '</a></li>';
    $scan_op_button = '<li class="nav-item" role="presentation"><a href="#scan"    class="nav-link" id="scan_options-tab">' . __('Scan Options') . '</a></li>';
    $match_o_button = '<li class="nav-item" role="presentation"><a href="#match"   class="nav-link" id="match_options-tab">' . __('Match Options') . '</a></li>';
    $logs_button    = '<li class="nav-item" role="presentation"><a href="#logs"    class="nav-link" id="logs-tab"   >' . __('Logs') .    '</a></li>';
    $all_ips_button = '<li class="nav-item" role="presentation"><a href="#all_ips" class="nav-link" id="all_ips-tab">' . __('ALL IPs') . '</a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab">' . __('Devices') . '</a></li>';
    $issues_button  = '<li class="nav-item" role="presentation"><a href="#issues"  class="nav-link" id="issues-tab" >' . __('Issues')  . '</a></li>';
}



if ($style === 'icontext') {
    $support_button = "<a role=\"button\" id=\"button_support\" class=\"btn btn-light mb-2\" title=\"" . __("Support") . "\" href=\"" . url_to('discoveriesDownload', $meta->id) . "?format=json_data\"><span style=\"margin-right:6px;\" class=\"fa-regular fa-comments text-primary\"></span>" . __("Support") . "</a>";
} elseif ($style === 'icon') {
    $support_button = "<a role=\"button\" id=\"button_support\" class=\"btn btn-light mb-2\" title=\"" . __("Support") . "\" href=\"" . url_to('discoveriesDownload', $meta->id) . "?format=json_data\"><span class=\"fa-solid fa-person-circle-exclamation text-primary\"></span></a>";
} else {
    $support_button = "<a role=\"button\" id=\"button_support\" class=\"btn btn-light mb-2\" title=\"" . __("Support") . "\" href=\"" . url_to('discoveriesDownload', $meta->id) . "?format=json_data\">" . __("Support") . "</a>";
}


$options = array();
$no = new stdClass();
$no->id = 'n';
$no->type = 'discovery_scan_options';
$no->attributes = new stdClass();
$no->attributes->id = 'n';
$no->attributes->name = __('No');
$options[] = $no;
$yes = new stdClass();
$yes->id = 'y';
$yes->type = 'discovery_scan_options';
$yes->attributes = new stdClass();
$yes->attributes->id = 'y';
$yes->attributes->name = __('Yes');
$options[] = $yes;
$scan_options_default = new stdClass();
$scan_options_name = '';
foreach ($included['discovery_scan_options'] as $item) {
    if ($resource->scan_options->id == $item->id) {
        $scan_options_default = $item->attributes;
        $scan_options_name = $item->attributes->name;
    }
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
                                <?= $scan_op_button ?>
                                <?= $match_o_button ?>
                                <?= $logs_button ?>
                                <?= $all_ips_button ?>
                                <?= $devices_button ?>
                                <?= $issues_button ?>
                            </ul>
                        </div>
                    </div>
                    <br/>


                    <div class="tab-content">
                        <div class="tab-pane" id="summary" role="tabpanel" tabindex="0" aria-labelledby="summary">
                            <div class="row">
                                <div class="col-6">
                                    <?= read_field('name_orig', $resource->name, '', '', 'Name') ?>
                                    <?= read_field('status', $resource->status) ?>
                                    <?= read_field('last_run', $resource->last_run, '', false, __('Started On')) ?>
                                    <?= read_field('duration', $resource->duration) ?>
                                    <?= read_field('last_finished', $resource->last_finished, '', false, __('Completed On')) ?>
                                    <?= read_field('all_ips_orig', $resource->ip_all_count, '', false, __('All IPS in Network')) ?>
                                    <?= read_field('responding_ip_count', $resource->ip_responding_count, '', false, __('IPs Responding')) ?>
                                    <?= read_field('ip_scanned_count', $resource->ip_scanned_count, '', false, __('IPs Nmap Scanned')) ?>
                                    <?= read_field('discovered_devices', $resource->ip_discovered_count, '', false, __('IPs Successfully Discovered')) ?>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane" id="details" role="tabpanel" tabindex="0" aria-labelledby="details">
                            <div class="row">
                                <div class="col-6">
                                    <?= read_field('name', $resource->name, $dictionary->columns->name, $update) ?>
                                    <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, __('Organisation'), $orgs) ?>
                                    <?= read_field('description', $resource->description, $dictionary->columns->description, $update) ?>
                                    <?= read_field('type', $resource->type, $dictionary->columns->type) ?>
                                    <?php if ($resource->type === 'subnet' or $resource->type === 'seed') { ?>
                                        <?= read_field('subnet', $resource->subnet, $dictionary->columns->subnet, $update) ?>
                                    <?php } ?>
                                    <?php if ($resource->type === 'seed') { ?>
                                        <?= read_select('seed_restrict_to_subnet', $resource->seed_restrict_to_subnet, $dictionary->columns->seed_restrict_to_subnet, $update, __('Restrict to Subnet'), []) ?>
                                        <?= read_select('seed_restrict_to_private', $resource->seed_restrict_to_private, $dictionary->columns->seed_restrict_to_private, $update, __('Restrict to Private'), []) ?>
                                    <?php } ?>
                                    <?php if ($resource->type === 'active directory') { ?>
                                        <?= read_field('ad_domain', $resource->ad_domain, $dictionary->columns->ad_domain, $update) ?>
                                        <?= read_field('ad_server', $resource->ad_server, $dictionary->columns->ad_server, $update) ?>
                                    <?php } ?>
                                    <?= read_select('require_port', $resource->require_port, $dictionary->columns->require_port, $update, __('Require an Open Port'), []) ?>
                                    <?= read_select('devices_assigned_to_org', $resource->devices_assigned_to_org, $dictionary->columns->devices_assigned_to_org, $update, __('Assign Devices to Organisation'), $orgs) ?>
                                    <?= read_select('devices_assigned_to_location', $resource->devices_assigned_to_location, $dictionary->columns->devices_assigned_to_location, $update, __('Assign Devices to Location'), $included['locations']) ?>
                                    <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false) ?>
                                    <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false) ?>
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
                                            <?php $fields = array('name', 'org_id', 'description', 'type', 'subnet', 'require_port', 'devices_assigned_to_org', 'devices_assigned_to_location', 'edited_by', 'edited_date') ?>
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

                    <div class="tab-content">
                        <div class="tab-pane" id="scan" role="tabpanel" tabindex="0" aria-labelledby="scan">
                            <div class="row">
                                <div class="col-6">
                                    <?php if ($config->product === 'professional' or $config->product === 'enterprise') { ?>
                                        <?= read_select('scan_options.id', $resource->scan_options->id, $dictionary->columns->{'scan_options.id'}, $update, __('Scan Options'), $included['discovery_scan_options']) ?>
                                    <?php } else { ?>
                                        <?= read_field('scan_options_orig', $resource->scan_options->{'discovery_scan_options.name'}, $dictionary->columns->{'scan_options.id'}) ?>
                                    <?php }

                                    $scan_options = array();
                                    $scan_options['ping'] = 'Must Respond to Ping';
                                    $scan_options['service_version'] = 'Use Service Version Detection';
                                    $scan_options['open|filtered'] = 'Consider Open|Filtered Ports Open';
                                    $scan_options['filtered'] = 'Consider Filtered Ports Open';

                                    foreach ($scan_options as $key => $value) {
                                        $default = new stdClass();
                                        $default->id = '';
                                        $default->type = 'discovery_scan_options';
                                        $default->attributes = new stdClass();
                                        $default->attributes->id = '';
                                        if (empty($resource->scan_options->{$key}) and $resource->scan_options->{'discovery_scan_options.name'} !== 'Custom') {
                                            $default->attributes->name = $resource->scan_options->{'discovery_scan_options.name'} . __(' Default, currently \'') . $scan_options_default->{$key} . '\'';
                                        } else {
                                            $default->attributes->name = 'Not Set';
                                        }
                                        $new_options = $options;
                                        $new_options[] = $default;
                                        if ($config->product === 'enterprise') {
                                            echo read_select('scan_options.' . $key, $resource->scan_options->{$key}, $dictionary->columns->{'scan_options.' . $key}, $update, __($value), $new_options);
                                        } else {
                                            echo read_field('scan_options.' . $key, $default->attributes->name, '', false, __($value));
                                        }
                                    } ?>

                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="scan_options.timing" class="form-label"><?= __('Timing') ?></label>
                                            <div class="input-group">
                                                <select class="form-select" id="scan_options.timing" name="scan_options.timing" data-original-value="<?= $resource->scan_options->timing ?>" disabled>
                                                    <?php if (empty($resource->scan_options->timing) and $resource->scan_options->{'discovery_scan_options.name'} !== 'Custom') { ?>
                                                    <option value="" selected><?= $resource->scan_options->{'discovery_scan_options.name'} . __(' Default, currently \'') . $scan_options_default->timing . '\'' ?></option>
                                                    <?php } else { ?>
                                                    <option value=""><?= __('Not Set') ?></option>
                                                    <?php } ?>
                                                    <option value="0" <?php if (!empty($resource->scan_options->timing) and $resource->scan_options->timing == '0') { echo "selected"; } ?>><?= __('Paranoid') ?></option>
                                                    <option value="1" <?php if (!empty($resource->scan_options->timing) and $resource->scan_options->timing == '1') { echo "selected"; } ?>><?= __('Sneaky') ?></option>
                                                    <option value="2" <?php if (!empty($resource->scan_options->timing) and $resource->scan_options->timing == '2') { echo "selected"; } ?>><?= __('Polite') ?></option>
                                                    <option value="3" <?php if (!empty($resource->scan_options->timing) and $resource->scan_options->timing == '3') { echo "selected"; } ?>><?= __('Normal') ?></option>
                                                    <option value="4" <?php if (!empty($resource->scan_options->timing) and $resource->scan_options->timing == '4') { echo "selected"; } ?>><?= __('Aggressive') ?></option>
                                                    <option value="5" <?php if (!empty($resource->scan_options->timing) and $resource->scan_options->timing == '5') { echo "selected"; } ?>><?= __('Insane') ?></option>
                                                </select>
                                                <?php if ($update and $config->product === 'enterprise') { ?>
                                                <div class="pull-right" style="padding-left:4px;">
                                                    <div data-attribute="scan_options.timing" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class="fa fa-pencil"></span></div>
                                                    <div data-attribute="scan_options.timing" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-check"></span></div>
                                                    <div data-attribute="scan_options.timing" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-remove"></span></div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="scan_options.timing" data-dictionary="<?= $dictionary->columns->{'scan_options.timing'} ?>"><span><br></span></div>
                                        </div>
                                    </div>

                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="scan_options.nmap_tcp_ports" class="form-label"><?= __('Top Nmap TCP Ports') ?></label>
                                            <div class="input-group">
                                                <select class="form-select" id="scan_options.nmap_tcp_ports" name="scan_options.nmap_tcp_ports" data-original-value="<?= $resource->scan_options->nmap_tcp_ports ?>" disabled>
                                                    <?php if (empty($resource->scan_options->nmap_tcp_ports) and $resource->scan_options->{'discovery_scan_options.name'} !== 'Custom') { ?>
                                                    <option value="" selected><?= $resource->scan_options->{'discovery_scan_options.name'} . __(' Default, currently \'') . $scan_options_default->nmap_tcp_ports . '\'' ?></option>
                                                    <?php } else { ?>
                                                    <option value=""><?= __('Not Set') ?></option>
                                                    <?php } ?>
                                                    <option value="0" <?php if (!empty($resource->scan_options->nmap_tcp_ports) and $resource->scan_options->nmap_tcp_ports == '0') { echo "selected"; } ?>><?= __('None') ?></option>
                                                    <option value="10" <?php if (!empty($resource->scan_options->nmap_tcp_ports) and $resource->scan_options->nmap_tcp_ports == '1') { echo "selected"; } ?>>10</option>
                                                    <option value="100" <?php if (!empty($resource->scan_options->nmap_tcp_ports) and $resource->scan_options->nmap_tcp_ports == '2') { echo "selected"; } ?>>100</option>
                                                    <option value="1000" <?php if (!empty($resource->scan_options->nmap_tcp_ports) and $resource->scan_options->nmap_tcp_ports == '3') { echo "selected"; } ?>>1000</option>
                                                </select>
                                                <?php if ($update and $config->product === 'enterprise') { ?>
                                                <div class="pull-right" style="padding-left:4px;">
                                                    <div data-attribute="scan_options.nmap_tcp_ports" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class="fa fa-pencil"></span></div>
                                                    <div data-attribute="scan_options.nmap_tcp_ports" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-check"></span></div>
                                                    <div data-attribute="scan_options.nmap_tcp_ports" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-remove"></span></div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="scan_options.nmap_tcp_ports" data-dictionary="<?= $dictionary->columns->{'scan_options.nmap_tcp_ports'} ?>"><span><br></span></div>
                                        </div>
                                    </div>

                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="scan_options.nmap_udp_ports" class="form-label"><?= __('Top Nmap UDP Ports') ?></label>
                                            <div class="input-group">
                                                <select class="form-select" id="scan_options.nmap_udp_ports" name="scan_options.nmap_udp_ports" data-original-value="<?= $resource->scan_options->nmap_udp_ports ?>" disabled>
                                                    <?php if (empty($resource->scan_options->nmap_udp_ports) and $resource->scan_options->{'discovery_scan_options.name'} !== 'Custom') { ?>
                                                    <option value="" selected><?= $resource->scan_options->{'discovery_scan_options.name'} . __(' Default, currently \'') . $scan_options_default->nmap_udp_ports . '\'' ?></option>
                                                    <?php } else { ?>
                                                    <option value=""><?= __('Not Set') ?></option>
                                                    <?php } ?>
                                                    <option value="0" <?php if (!empty($resource->scan_options->nmap_udp_ports) and $resource->scan_options->nmap_udp_ports == '0') { echo "selected"; } ?>><?= __('None') ?></option>
                                                    <option value="10" <?php if (!empty($resource->scan_options->nmap_udp_ports) and $resource->scan_options->nmap_udp_ports == '1') { echo "selected"; } ?>>10</option>
                                                    <option value="100" <?php if (!empty($resource->scan_options->nmap_udp_ports) and $resource->scan_options->nmap_udp_ports == '2') { echo "selected"; } ?>>100</option>
                                                    <option value="1000" <?php if (!empty($resource->scan_options->nmap_udp_ports) and $resource->scan_options->nmap_udp_ports == '3') { echo "selected"; } ?>>1000</option>
                                                </select>
                                                <?php if ($update and $config->product === 'enterprise') { ?>
                                                <div class="pull-right" style="padding-left:4px;">
                                                    <div data-attribute="scan_options.nmap_udp_ports" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class="fa fa-pencil"></span></div>
                                                    <div data-attribute="scan_options.nmap_udp_ports" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-check"></span></div>
                                                    <div data-attribute="scan_options.nmap_udp_ports" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-remove"></span></div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="scan_options.nmap_udp_ports" data-dictionary="<?= $dictionary->columns->{'scan_options.nmap_udp_ports'} ?>"><span><br></span></div>
                                        </div>
                                    </div>

                                    <?php
                                    unset($scan_options);
                                    $scan_options = array();
                                    $scan_options['tcp_ports'] = 'Custom TCP Ports';
                                    $scan_options['udp_ports'] = 'Custom UDP Ports';
                                    $scan_options['timeout'] = 'Nmap Timeout Per Target';
                                    $scan_options['exclude_tcp_ports'] = 'Exclude TCP Ports';
                                    $scan_options['exclude_udp_ports'] = 'Exclude UDP Ports';
                                    $scan_options['exclude_ip'] = 'Exclude IP Addresses';
                                    $scan_options['ssh_ports'] = 'SSH Running on Ports';
                                    foreach ($scan_options as $key => $value) {
                                        if (empty($resource->scan_options->{$key}) and $resource->scan_options->{'discovery_scan_options.name'} !== 'Custom') {
                                            $placeholder = $resource->scan_options->{'discovery_scan_options.name'} . __(' Default, currently \'') . $scan_options_default->{$key} . '\'';
                                        } else {
                                            $placeholder = 'Not Set';
                                        }
                                        if ($config->product === 'enterprise') {
                                            echo read_field('scan_options.' . $key, $resource->scan_options->{$key}, $dictionary->columns->{'scan_options.' . $key}, $update, $value, '', $placeholder);
                                        } else {
                                            echo read_field('scan_options.' . $key, $resource->scan_options->{$key}, $dictionary->columns->{'scan_options.' . $key}, false, $value, '', $placeholder);
                                        }
                                    } ?>
                                </div>
                                <div class="col-6">
                                    <br>
                                    <div class="offset-2 col-8">
                                    <?php if (!empty($dictionary->columns)) { ?>
                                        <h4 class="text-center"><?= __('Scan Options') ?></h4><br>
                                        <?php foreach ($dictionary->columns as $key => $value) {
                                            if (strpos($key, 'scan_options.') === 0) { ?>
                                            <code><?= str_replace('scan_options.', '', $key) ?>: </code><?= @$dictionary->columns->{$key} ?><br><br>
                                            <?php } ?>
                                        <?php } ?>
                                    <?php } ?>
                                    <h4 class="text-center"><?= __('Common Ports') ?></h4><br>
                                    <code>TCP 22</code>: SSH, typically used by Linux and Unix based machines.<br><br>
                                    <code>TCP 135</code>: Windows remote procedure call.<br><br>
                                    <code>TCP 62078</code>: IOS (Apple) lockdown / sync port.<br><br>
                                    <code>UDP 161</code>: SNMP, typically used by network devices (switches, routers, et al).<br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane" id="match" role="tabpanel" tabindex="0" aria-labelledby="match">
                            <div class="row">
                                <div class="col-6">
                                    <?php $matches = array('match_dbus', 'match_fqdn', 'match_dns_fqdn', 'match_dns_hostname', 'match_hostname', 'match_hostname_dbus', 'match_hostname_serial', 'match_hostname_uuid', 'match_ip', 'match_ip_no_data', 'match_mac', 'match_mac_vmware', 'match_serial', 'match_serial_type', 'match_sysname', 'match_sysname_serial', 'match_uuid');
                                    foreach ($matches as $match) {
                                        $field = (!empty($resource->match_options->{$match})) ? $resource->match_options->{$match} : ''; ?>
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="match_options.<?= $match ?>" class="form-label"><?= ucwords(str_replace('_', ' ', $match)) ?></label>
                                            <div class="input-group">
                                                <select class="form-select" id="match_options.<?= $match ?>" name="match_options.<?= $match ?>" data-original-value="<?= $field ?>" disabled>
                                                    <option value="y" <?php if ($field === 'y') { echo 'selected'; } ?>><?= __('Yes') ?></option>
                                                    <option value="n" <?php if ($field === 'n') { echo 'selected'; } ?>><?= __('No')  ?></option>
                                                    <option value=""  <?php if ($field === '') { echo 'selected'; } ?>><?= __('Config Default, currently \'' . $config->{$match} . '\'') ?></option>
                                                </select>
                                                <?php if ($update and $config->product === 'enterprise') { ?>
                                                <div class="pull-right" style="padding-left:4px;">
                                                    <div data-attribute="match_options.<?= $match ?>" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class="fa fa-pencil"></span></div>
                                                    <div data-attribute="match_options.<?= $match ?>" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-check"></span></div>
                                                    <div data-attribute="match_options.<?= $match ?>" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-remove"></span></div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="match_options.<?= $match ?>" data-dictionary="<?= @$dictionary->columns->{'scan_options.' . $match} ?>"><span><br></span></div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="col-6">
                                    <br>
                                    <div class="offset-2 col-8">
                                        <?php if (!empty($dictionary->columns)) { ?>
                                            <h4 class="text-center"><?= __('Match Options') ?></h4><br>
                                            <?php foreach ($matches as $key) { ?>
                                                <code><?= $key ?>: </code><?= @$dictionary->columns->{$key} ?><br><br>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane" id="logs" role="tabpanel" tabindex="0" aria-labelledby="logs">
                            <div class="row">
                                <div class="col-12">
                                    <div id="logs_notice" class="container-fluid" style="display:none;">
                                        <div id="logs_alert" class="alert alert-warning alert-dismissible fade show" role="alert">
                                        </div>
                                    </div>
                                    <?php $log_data_order = ['view', 'id', 'timestamp', 'ip', 'command_status', 'message']; ?>
                                    <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTableAjax" data-order='[[1,"asc"]]'>
                                        <thead>
                                            <?php foreach ($log_data_order as $key) {
                                                $align = '';
                                                if ($key === 'id' or $key === 'view' or strpos($key, '_id') !== false) {
                                                    $align = 'text-center dt-body-center';
                                                } ?>
                                                <th class="<?= $align ?>"><?= collection_column_name($key) ?></th>
                                            <?php } ?>
                                        </thead>
                                        <thead>
                                            <?php foreach ($log_data_order as $key) { ?>
                                                <th>
                                                    <div class="input-group">
                                                        <?php if ($key !== 'id' and $key !== 'view') { ?>
                                                        <input id="alllog<?= $key ?>" type="search" class="form-control form-control-sm dataTablesearchField" placeholder="Search <?= collection_column_name($key) ?>" />
                                                        <?php } ?>
                                                    </div>
                                                </th>
                                            <?php } ?>
                                        </thead>
                                        <tbody>
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
                                    <div id="dev_notice" class="container-fluid" style="display:none;">
                                        <div id="dev_alert" class="alert alert-warning alert-dismissible fade show" role="alert">
                                        </div>
                                    </div>
                                    <?php $device_data_order = ['view', 'icon', 'ip', 'name', 'message', 'command_time_to_execute']; ?>
                                    <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTableDev" data-order='[[2,"asc"]]'>
                                        <thead>
                                            <?php foreach ($device_data_order as $key) {
                                                $align = '';
                                                if ($key === 'id' or $key === 'view' or strpos($key, '_id') !== false) {
                                                    $align = 'text-center dt-body-center';
                                                } ?>
                                                <th class="<?= $align ?>"><?= collection_column_name($key) ?></th>
                                            <?php } ?>
                                        </thead>
                                        <thead>
                                            <?php foreach ($device_data_order as $key) { ?>
                                                <th>
                                                    <div class="input-group">
                                                        <?php if ($key !== 'icon' and $key !== 'view' and $key !== 'command_time_to_execute') { ?>
                                                        <input id="alldev<?= $key ?>" type="search" class="form-control form-control-sm dataTablesearchFieldDev" placeholder="Search <?= collection_column_name($key) ?>" />
                                                        <?php } ?>
                                                    </div>
                                                </th>
                                            <?php } ?>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                    <?php if ($resource->status === 'running' and empty($included['devices'])) {
                                        echo "<p class=\"text-center\">Your discovery is running, however no devices have been interogated yet. Click the Refresh button in your browser to update this page and check the Logs tab for more detailed information.</p>";
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane" id="all_ips" role="tabpanel" tabindex="0" aria-labelledby="all_ips">
                            <div class="row">
                                <div class="col-12">
                                    <div id="ip_notice" class="container-fluid" style="display:none;">
                                        <div id="ip_alert" class="alert alert-warning alert-dismissible fade show" role="alert">
                                        </div>
                                    </div>
                                    <?php $ip_data_order = ['view', 'icon', 'ip', 'name', 'message', 'command_time_to_execute']; ?>
                                    <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTableIP" data-order='[[2,"asc"]]'>
                                        <thead>
                                            <?php foreach ($ip_data_order as $key) {
                                                $align = '';
                                                if ($key === 'icon' or $key === 'view' or strpos($key, '_id') !== false) {
                                                    $align = 'text-center dt-body-center';
                                                } ?>
                                                <th class="<?= $align ?>"><?= collection_column_name($key) ?></th>
                                            <?php } ?>
                                        </thead>
                                        <thead>
                                            <?php foreach ($ip_data_order as $key) { ?>
                                                <th>
                                                    <div class="input-group">
                                                        <?php if ($key !== 'icon' and $key !== 'view' and $key !== 'command_time_to_execute') { ?>
                                                        <input id="allip<?= $key ?>" type="search" class="form-control form-control-sm dataTablesearchFieldIP" placeholder="Search <?= collection_column_name($key) ?>" />
                                                        <?php } ?>
                                                    </div>
                                                </th>
                                            <?php } ?>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane" id="issues" role="tabpanel" tabindex="0" aria-labelledby="issues">
                            <div class="row">
                                <div class="col-12">
                                    <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[2,"asc"]]'>
                                        <thead>
                                            <tr>
                                                <th style="min-width:6rem;" data-orderable="false" class="text-center"><?= __('View') ?></th>
                                                <th style="min-width:6rem;" data-orderable="false" class="text-center"></th>
                                                <th style="min-width:6rem;"><?= __('IP') ?></th>
                                                <th style="min-width:6rem;"><?= __('Name') ?></th>
                                                <th><?= __('Issue') ?></th>
                                                <th style="min-width:6rem;"><?= __('Action') ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($included['issues'] as $issue) { ?>
                                                <?php
                                                $link = url_to('devicesCollection');
                                                if (!empty($issue->{'devices.id'})) {
                                                    $link = url_to('devicesRead', $issue->{'devices.id'});
                                                } ?>
                                                <tr>
                                                    <td class="text-center"><a title=" <?= __('Devices') ?>" role="button" class="btn btn-sm btn-devices" href="<?= $link ?>"><span style="width:1rem;" title="<?= __('Devices') ?>" class="fa fa-desktop" aria-hidden="true"></span></a></td>
                                                    <td class="text-center"><img style="width:30px;" src="<?= $meta->baseurl ?>device_images/<?= $issue->{'devices.icon'} ?>.svg" alt=""/></td>
                                                    <td><span style="display:none;"><?= @$issue->{'devices.ip_padded'} ?></span><?= $issue->{'devices.ip'} . '<br>' . $issue->{'devices.type'} ?></td>
                                                    <td><?= $issue->{'devices.name'} ?></td>
                                                    <td><?= $issue->{'output'} . '<br>' . html_entity_decode($issue->{'description'}) ?></td>
                                                    <td><?php if ($issue->action === 'add credentials') { ?>
                                                        <a role="button" class="btn btn-default btn-sm" href="<?= url_to('credentialsCreateForm') ?>"><?= __('Add Credentials') ?></a>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {
        $("#devices_assigned_to_org").append($('<option>', { value: '', text: ''}));
        $("#devices_assigned_to_location").append($('<option>', { value: '', text: ''}));
        $("#devices_assigned_to_org").val("<?= $resource->devices_assigned_to_org ?>");
        $("#devices_assigned_to_location").val("<?= $resource->devices_assigned_to_location ?>");

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

        $(".page-title-middle").append('<?= $support_button ?>');



        let logSort = {};
        var myDataTable = new DataTable('.dataTableAjax', {
            lengthChange: true,
            lengthMenu: [ [25, 50, <?= $config->page_size ?>], [25, 50, 'All'] ],
            order: [[ 1, 'asc' ]],
            pageLength: 25,
            processing: true,
            searching: true,
            search: {
                return: true
            },
            serverSide: true,
            ajax: {
                url: '<?= base_url() ?>index.php/discovery_log?discovery_id=<?= $meta->id ?>&format=json',
                dataSrc: 'data',
                data: function (d) {
                    d.limit = d.length;
                    d.offset = d.start;
<?php foreach ($log_data_order as $key) { ?>
                    if ($("#alllog<?= $key ?>").val() != '') {
                        d["<?= $key ?>"] = $("#alllog<?= $key ?>").val();
                    }
<?php } ?>
                    if (d.order[0]) {
                        if (d.columns[d.order[0].column].data == 'attributes.id') {
                            // d.sort = 'discovery_log.id ' + d.order[0].dir;
                            logSort.column = 'discovery_log.id';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'discovery_log.id';
                            } else {
                                d.sort = '-discovery_log.id';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.timestamp') {
                            // d.sort = 'discovery_log.timestamp ' + d.order[0].dir;
                            logSort.column = 'discovery_log.timestamp';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'discovery_log.timestamp';
                            } else {
                                d.sort = '-discovery_log.timestamp';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.ip') {
                            // d.sort = 'discovery_log.ip ' + d.order[0].dir;
                            logSort.column = 'discovery_log.ip';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'discovery_log.ip';
                            } else {
                                d.sort = '-discovery_log.ip';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.command_status') {
                            // d.sort = 'discovery_log.command_status ' + d.order[0].dir;
                            logSort.column = 'discovery_log.command_status';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'discovery_log.command_status';
                            } else {
                                d.sort = '-discovery_log.command_status';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.message') {
                            // d.sort = 'discovery_log.message ' + d.order[0].dir;
                            logSort.column = 'discovery_log.message';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'discovery_log.message';
                            } else {
                                d.sort = '-discovery_log.message';
                            }
                        }
                    } else {
                        if (logSort.direction == 'asc') {
                            // d.sort = logSort.column + ' desc';
                            d.sort = '-' + logSort.column;
                            logSort.direction = 'desc';
                        } else {
                            // d.sort = logSort.column + ' asc';
                            d.sort = logSort.column;
                            logSort.direction = 'asc';
                        }
                    }
                    delete d.start;
                    delete d.length;
                    delete d.order;
                    delete d.columns;
                }
            },
            autoWidth: false,
            columns: [
                { data: 'attributes.view', 
                    render: function (data, type, row, meta) {
                        return "<a title=\"View\" role=\"button\" class=\"btn btn-sm btn-primary\" href=\"<?= base_url() ?>index.php/components/" + row.attributes.id + "?components.type=discovery_log\"><span style=\"width:1rem;\" title=\"View\" class=\"fa fa-eye\" aria-hidden=\"true\"></span></a>";
                    }
                },
                { data: 'attributes.id' },
                { data: 'attributes.timestamp',
                    render: function (data, type, row, meta) {
                        return data;
                    }
                },
                { data: 'attributes.ip' },
                { data: 'attributes.command_status',
                    render: function (data, type, row, meta) {
                        if (row.attributes.command_status == 'success') {
                            data = '<span class="text-success"><strong>' + data + '</strong></span>';
                        } else if (row.attributes.command_status == 'fail') {
                            data = '<span class="text-danger"><strong>' + data + '</strong></span>';
                        } else if (row.attributes.command_status == 'warning') {
                            data = '<span class="text-warning"><strong>' + data + '</strong></span>';
                        } else if (row.attributes.command_status == 'notice') {
                            data = '<span class="text-info"><strong>' + data + '</strong></span>';
                        } else {
                            data = '<span class="text- "><strong>' + data + '</strong></span>';
                        }
                        return data;
                    }
                },
                { data: 'attributes.message',
                    render: function (message, type, row, meta) {
                        if (row.attributes.command != '') {
                            message = message + '<br><strong><em><?= __('Command') ?>: </em></strong><code>' + row.attributes.command + '</code>';
                        }
                        if (row.attributes.command_output != '') {
                            message = message + '<br><strong><em><?= __('Output') ?>: </em></strong><span class="output">' + row.attributes.command_output + '</span>';
                        }
                        if (row.attributes.message.includes('Nmap Command') || row.attributes.message.includes('IP Scan finish') || row.attributes.message.includes('IP Audit finish') || row.attributes.message.includes('Updating discovery log with non-responding IPs') || row.attributes.message.includes('Nmap response scanning completed')) {
                            if (row.attributes.command_time_to_execute != '0.000000') {
                                message = message + '<br><strong><em><?= __('Time to Execute') ?>: </em></strong><span class="output">' + row.attributes.command_time_to_execute + '</span>';
                            }
                        }
                        return message;
                    }
                },
            ],
            columnDefs: [
                {className: "text-center", target: 0, width: "10em"},
                {className: "text-center", target: 1, width: "10em"},
                {className: "text-start", target: 2},
                {className: "text-start", target: 3, width: "10em"},
                {className: "text-start", title: "Status", target: 4, width: "10em"},
                {className: "text-start", target: 5}
            ],
            info: true,
            language: {
                infoFiltered: ""
            },
            layout: {
                bottomStart: {
                    info: {
                        text: 'Showing _START_ to _END_ of _TOTAL_ entries'
                    }
                },
                bottomEnd: {
                    paging: {
                        type: 'full_numbers'
                    }
                }
            }
        });

        /* This stops the sort when clicking in a search text box in the table header */
        $('.dataTablesearchField').on('click', function(e) { e.stopPropagation() });

        /* And don't automatically send the result - wait for the user to press <enter> / <return> */
        $(".dataTablesearchField").on("keypress", function (evtObj) {
            if (evtObj.keyCode == 13) {
                myDataTable.ajax.reload();
            }
        });

        myDataTable.on('xhr', function (e, settings, json) {
            if (json.warning) {
                $("#logs_notice").show();
                $("#logs_alert").html(json.warning + '<button id="logs_button" type="button" class="btn-close" aria-label="Close"></button>');
                $("#logs_alert").show();
            } else {
                $("#logs_alert").hide();
            }
        });
        $(document).on('click', '#logs_button', function() {
            $(this).parent().hide();
        });




        let ipSort = {};
        var myDataTableIP = new DataTable('.dataTableIP', {
            lengthChange: true,
            lengthMenu: [ [25, 50, <?= $config->page_size ?>], [25, 50, 'All'] ],
            order: [[ 1, 'asc' ]],
            pageLength: 25,
            paging: true,
            processing: true,
            searching: true,
            search: {
                return: true
            },
            serverSide: true,
            ajax: {
                url: '<?= base_url() ?>index.php/discovery_log?discovery_id=<?= $meta->id ?>&groupby=discovery_log.ip&format=json',
                dataSrc: 'data',
                data: function (d) {
                    d.limit = d.length;
                    d.offset = d.start;
<?php foreach ($ip_data_order as $key) { ?>
                    if ($("#allip<?= $key ?>").val() != '') {
                        d.<?= $key ?> = $("#allip<?= $key ?>").val();
                    }
<?php } ?>
                    if (d.order[0]) {
                        if (d.columns[d.order[0].column].data == 'attributes.ip') {
                            // d.sort = 'discovery_log.ip ' + d.order[0].dir;
                            ipSort.column = 'discovery_log.ip';
                            ipSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'discovery_log.ip';
                            } else {
                                d.sort = '-discovery_log.ip';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.name') {
                            // d.sort = 'devices.name ' + d.order[0].dir;
                            ipSort.column = 'devices.name';
                            ipSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'devices.name';
                            } else {
                                d.sort = '-devices.name';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.message') {
                            // d.sort = 'discovery_log.message ' + d.order[0].dir;
                            ipSort.column = 'discovery_log.message';
                            ipSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'discovery_log.message';
                            } else {
                                d.sort = '-discovery_log.message';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.command_time_to_execute') {
                            // d.sort = 'discovery_log.command_time_to_execute ' + d.order[0].dir;
                            ipSort.column = 'discovery_log.command_time_to_execute';
                            ipSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'discovery_log.command_time_to_execute';
                            } else {
                                d.sort = '-discovery_log.command_time_to_execute';
                            }
                        }
                    } else {
                        if (ipSort.direction == 'asc') {
                            // d.sort = ipSort.column + ' desc';
                            d.sort = '-' + ipSort.column;
                            ipSort.direction = 'desc';
                        } else {
                            // d.sort = ipSort.column + ' asc';
                            d.sort = ipSort.column;
                            ipSort.direction = 'asc';
                        }
                    }
                    delete d.start;
                    delete d.length;
                    delete d.order;
                    delete d.columns;
                }
            },
            autoWidth: false,
            columns: [
                { data: 'attributes.view', 
                    render: function (data, type, row, meta) {
                        if (row.attributes.device_id > 0) {
                            return "<a title=\"View\" role=\"button\" class=\"btn btn-sm btn-primary\" href=\"<?= base_url() ?>index.php/devices/" + row.attributes.device_id + "\"><span style=\"width:1rem;\" title=\"View\" class=\"fa fa-eye\" aria-hidden=\"true\"></span></a>";
                        } else {
                            return "";
                        }
                    }
                },
                { data: 'attributes.icon',
                    render: function (icon) {
                        return icon
                            ? '<img style="width:30px;" src="<?= base_url() ?>device_images/' + icon + '.svg"/>'
                            : '';
                    }
                },
                { data: 'attributes.ip',
                    render: function (data, type, row, meta) {
                        if (row.attributes.ip_padded) {
                            data = '<span style="display:none;">' + row.attributes.ip_padded + '</span>' + data;
                        }
                        if (row.attributes.type) {
                            if (row.attributes.type == 'unknown') {
                                data = data + '<br><span class="text-danger"><i>' + row.attributes.type + '</i></span>';
                            } else if (row.attributes.type == 'unclassified') {
                                data = data + '<br><span class="text-warning"><i>' + row.attributes.type + '</i></span>';
                            } else {
                                data = data + '<br><span class="text-success"><i>' + row.attributes.type + '</i></span>';
                            }
                        }
                        return data;
                    }
                },
                { data: 'attributes.name',
                    render: function (data, type, row, meta) {
                        return data
                            ? data + '<br><span class="text-primary"><i>' + row.attributes.domain + '</i></span>'
                            : data;
                    }
                },
                { data: 'attributes.message' },
                { data: 'attributes.command_time_to_execute',
                    render: function (data, type, row, meta) {
                        return data + ' seconds';
                    }
                },
            ],
            columnDefs: [
                {className: "text-center", target: 0, width: "10em"},
                {className: "text-center", target: 1, width: "10em"},
                {className: "text-start", target: 2},
                {className: "text-start", target: 3},
                {className: "text-start", target: 4},
                {className: "text-start", target: 5, width: "15em", title: "Duration"}
            ],
            info: true,
            language: {
                infoFiltered: ""
            },
            layout: {
                bottomStart: {
                    info: {
                        text: 'Showing _START_ to _END_ of _TOTAL_ entries'
                    }
                },
                bottomEnd: {
                    paging: {
                        type: 'full_numbers'
                    }
                }
            }
        });

        /* This stops the sort when clicking in a search text box in the table header */
        $('.dataTablesearchFieldIP').on('click', function(e) { e.stopPropagation() });

        /* And don't automatically send the result - wait for the user to press <enter> / <return> */
        $(".dataTablesearchFieldIP").on("keypress", function (evtObj) {
            if (evtObj.keyCode == 13) {
                myDataTableIP.ajax.reload();
            }
        });

        myDataTableIP.on('xhr', function (e, settings, json) {
            if (json.warning) {
                $("#ip_notice").show();
                $("#ip_alert").html(json.warning + '<button id="dev_button" type="button" class="btn-close" aria-label="Close"></button>');
                $("#ip_alert").show();
            } else {
                $("#ip_alert").hide();
            }
        });
        $(document).on('click', '#ip_button', function() {
            $(this).parent().hide();
        });





        let devSort = {};
        var myDataTableDev = new DataTable('.dataTableDev', {
            lengthChange: true,
            lengthMenu: [ [25, 50, <?= $config->page_size ?>], [25, 50, 'All'] ],
            order: [[ 1, 'asc' ]],
            pageLength: 25,
            paging: true,
            processing: true,
            searching: true,
            search: {
                return: true
            },
            serverSide: true,
            devSort: {},
            ajax: {
                url: '<?= base_url() ?>index.php/discovery_log?discovery_id=<?= $meta->id ?>&groupby=discovery_log.device_id&format=json',
                dataSrc: 'data',
                data: function (d) {
                    d.limit = d.length;
                    d.offset = d.start;
<?php foreach ($device_data_order as $key) { ?>
                    if ($("#alldev<?= $key ?>").val() != '') {
                        d.<?= $key ?> = $("#alldev<?= $key ?>").val();
                    }
<?php } ?>

                    if (d.order[0]) {
                        if (d.columns[d.order[0].column].data == 'attributes.ip') {
                            // d.sort = 'discovery_log.ip ' + d.order[0].dir;
                            devSort.column = 'discovery_log.ip';
                            devSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'discovery_log.ip';
                            } else {
                                d.sort = '-discovery_log.ip';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.name') {
                            // d.sort = 'devices.name ' + d.order[0].dir;
                            devSort.column = 'devices.name';
                            devSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'devices.name';
                            } else {
                                d.sort = '-devices.name';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.message') {
                            // d.sort = 'discovery_log.message ' + d.order[0].dir;
                            devSort.column = 'discovery_log.message';
                            devSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'discovery_log.message';
                            } else {
                                d.sort = '-discovery_log.message';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.command_time_to_execute') {
                            // d.sort = 'discovery_log.command_time_to_execute ' + d.order[0].dir;
                            devSort.column = 'discovery_log.command_time_to_execute';
                            devSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'discovery_log.command_time_to_execute';
                            } else {
                                d.sort = '-discovery_log.command_time_to_execute';
                            }
                        }
                    } else {
                        if (devSort.direction == 'asc') {
                            // d.sort = devSort.column + ' desc';
                            d.sort = '-' + devSort.column;
                            devSort.direction = 'desc';
                        } else {
                            // d.sort = devSort.column + ' asc';
                            d.sort = devSort.column;
                            devSort.direction = 'asc';
                        }
                    }
                    delete d.start;
                    delete d.length;
                    delete d.order;
                    delete d.columns;
                }
            },
            autoWidth: false,
            columns: [
                { data: 'attributes.view', 
                    render: function (data, type, row, meta) {
                        return "<a title=\"View\" role=\"button\" class=\"btn btn-sm btn-primary\" href=\"<?= base_url() ?>index.php/devices/" + row.attributes.id + "\"><span style=\"width:1rem;\" title=\"View\" class=\"fa fa-eye\" aria-hidden=\"true\"></span></a>";
                    }
                },
                { data: 'attributes.icon',
                    render: function (icon) {
                        return icon
                            ? '<img style="width:30px;" src="<?= base_url() ?>device_images/' + icon + '.svg"/>'
                            : '';
                    }
                },
                { data: 'attributes.ip',
                    render: function (data, type, row, meta) {
                        if (row.attributes.ip_padded) {
                            data = '<span style="display:none;">' + row.attributes.ip_padded + '</span>' + data;
                        }
                        if (row.attributes.type) {
                            if (row.attributes.type == 'unknown') {
                                data = data + '<br><span class="text-danger"><i>' + row.attributes.type + '</i></span>';
                            } else if (row.attributes.type == 'unclassified') {
                                data = data + '<br><span class="text-warning"><i>' + row.attributes.type + '</i></span>';
                            } else {
                                data = data + '<br><span class="text-success"><i>' + row.attributes.type + '</i></span>';
                            }
                        }
                        return data;
                    }
                },
                { data: 'attributes.name',
                    render: function (data, type, row, meta) {
                        return data
                            ? data + '<br><span class="text-primary"><i>' + row.attributes.domain + '</i></span>'
                            : data;
                    }
                },
                { data: 'attributes.message' },
                { data: 'attributes.command_time_to_execute',
                    render: function (data, type, row, meta) {
                        return data;
                    }
                },
            ],
            columnDefs: [
                {className: "text-center", target: 0, width: "10em"},
                {className: "text-center", target: 1, width: "10em"},
                {className: "text-start", target: 2},
                {className: "text-start", target: 3},
                {className: "text-start", target: 4},
                {className: "text-start", target: 5, width: "15em", title: "Duration (h:m:s)"}
            ],
            info: true,
            language: {
                infoFiltered: ""
            },
            layout: {
                bottomStart: {
                    info: {
                        text: 'Showing _START_ to _END_ of _TOTAL_ entries'
                    }
                },
                bottomEnd: {
                    paging: {
                        type: 'full_numbers'
                    }
                }
            }
        });

        /* This stops the sort when clicking in a search text box in the table header */
        $('.dataTablesearchFieldDev').on('click', function(e) { e.stopPropagation() });

        /* And don't automatically send the result - wait for the user to press <enter> / <return> */
        $(".dataTablesearchFieldDev").on("keypress", function (evtObj) {
            if (evtObj.keyCode == 13) {
                myDataTableDev.ajax.reload();
            }
        });

        myDataTableDev.on('xhr', function (e, settings, json) {
            if (json.warning) {
                $("#dev_notice").show();
                $("#dev_alert").html(json.warning + '<button id="dev_button" type="button" class="btn-close" aria-label="Close"></button>');
                $("#dev_alert").show();
            } else {
                $("#dev_alert").hide();
            }
        });
        $(document).on('click', '#dev_button', function() {
            $(this).parent().hide();
        });
    });
}
</script>