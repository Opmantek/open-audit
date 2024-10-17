<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
$types = array('Campus Area Network','Cloud Network','Enterprise Private Network','Home Area Network','Local Area Network','Metropolitan Area Network','Passive Optical Local Area Network','Personal Area Network','Storage-Area Network','System-Area Network','Virtual Private Network','Wide Area Network','Wireless Local Area Network');
$environments = array('Development', 'Disaster Recovery', 'Evaluation', 'Pre-Production', 'Production', 'Testing', 'Training', 'User Acceptance Testing');
$statuses = array('allocated', 'delegated', 'planning', 'reserved', 'unallocated', 'unknown', 'unmanaged');
$style = @$user->toolbar_style;
if ($style === 'icontext') {
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab"><span style="margin-right:6px;" class="fa fa-eye text-success"></span>' . __('Details') . '</a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab"><span style="margin-right:6px;" class="fa fa-desktop text-primary" ></span>' . __('Devices') . '</a></li>';
} elseif ($style === 'icon') {
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab"><span style="margin-right:6px;" title="' . __('Details') . '" class="fa fa-eye text-success"></span></a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab"><span style="margin-right:6px;" title="' . __('Devices') . '" class="fa fa-desktop text-primary"></span></a></li>';
} else {
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab">' . __('Details') . '</a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab">' . __('Devices') . '</a></li>';
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $data[0]->attributes->name) ?>
                </div>
                <div class="card-body">

                    <div class="row text-center">
                        <div class="col-8 offset-2" style="background-color: rgba(var(--bs-body-color-rgb), 0.03);">
                            <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
                                <?= $details_button ?>
                                <?= $devices_button ?>
                            </ul>
                        </div>
                    </div>
                    <br/>

                    <div class="tab-content">
                        <div class="tab-pane" id="details" role="tabpanel" tabindex="0" aria-labelledby="details">
                            <div class="row">
                                <div class="col-4">
                                    <?= read_field('name', $resource->name, $dictionary->columns->name, $update) ?>
                                    <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, __('Organisation'), $orgs) ?>
                                    <?= read_field('network', $resource->network, $dictionary->columns->network, $update) ?>
                                    <?= read_select('location_id', $resource->location_id, $dictionary->columns->location_id, $update, __('Location'), $included['locations']) ?>
                                    <?= read_field('description', $resource->description, $dictionary->columns->description, $update) ?>

                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="type" class="form-label"><?= __('Environment') ?></label>
                                            <div class="input-group">
                                                <select class="form-select" id="environment" name="environment" data-original-value="<?= $resource->environment ?>" disabled>
                                                <?php foreach ($environments as $environment) {
                                                    $selected = '';
                                                    if ($environment === $resource->environment) {
                                                        $selected = ' selected';
                                                    }
                                                    echo "<option value=\"$environment\"$selected>$environment</option>\n";
                                                } ?>
                                                </select>
                                                <?php if ($update) { ?>
                                                <div class="float-end" style="padding-left:4px;">
                                                    <div data-attribute="environment" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                                    <div data-attribute="environment" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                                    <div data-attribute="environment" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="environment" data-dictionary="<?= $dictionary->columns->environment ?>"><span><br></span></div>
                                        </div>
                                    </div>

                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="type" class="form-label"><?= __('Type') ?></label>
                                            <div class="input-group">
                                                <select class="form-select" id="type" name="type" data-original-value="<?= $resource->type ?>" disabled>
                                                <?php foreach ($types as $type) {
                                                    $selected = '';
                                                    if ($type === $resource->type) {
                                                        $selected = ' selected';
                                                    }
                                                    echo "<option value=\"$type\"$selected>$type</option>\n";
                                                } ?>
                                                </select>
                                                <?php if ($update) { ?>
                                                <div class="float-end" style="padding-left:4px;">
                                                    <div data-attribute="type" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                                    <div data-attribute="type" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                                    <div data-attribute="type" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="type" data-dictionary="<?= $dictionary->columns->type ?>"><span><br></span></div>
                                        </div>
                                    </div>

                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="admin_status" class="form-label"><?= __('Admin Status') ?></label>
                                            <div class="input-group">
                                                <select class="form-select" id="admin_status" name="admin_status" data-original-value="<?= $resource->admin_status ?>" disabled>
                                                <?php foreach ($statuses as $status) {
                                                    $selected = '';
                                                    if ($status === $resource->admin_status) {
                                                        $selected = ' selected';
                                                    }
                                                    echo "<option value=\"$status\"$selected>$status</option>\n";
                                                } ?>
                                                </select>
                                                <?php if ($update) { ?>
                                                <div class="float-end" style="padding-left:4px;">
                                                    <div data-attribute="admin_status" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                                    <div data-attribute="admin_status" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                                    <div data-attribute="admin_status" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="admin_status" data-dictionary="<?= $dictionary->columns->admin_status ?>"><span><br></span></div>
                                        </div>
                                    </div>
                                    <?= read_field('security_zone', $resource->security_zone, $dictionary->columns->security_zone, $update) ?>
                                    <?= read_field('network_domain', $resource->network_domain, $dictionary->columns->network_domain, $update) ?>
                                </div>
                                <div class="col-4">
                                    <?= read_field('DHCP_servers', $resource->dhcp_servers, $dictionary->columns->dhcp_servers, false) ?>
                                    <?= read_field('DNS_servers', $resource->dns_servers, $dictionary->columns->dns_servers, false) ?>
                                    <?= read_field('Gateways', $resource->gateways, $dictionary->columns->gateways, false) ?>
                                    <?= read_field('IPs_total', $resource->ip_total_count, $dictionary->columns->ip_total_count, false) ?>
                                    <?= read_field('IPs_used', $resource->device_count, $dictionary->columns->device_count, false) ?>
                                    <?= read_field('IPs_available', $resource->ip_available_count, $dictionary->columns->ip_available_count, false) ?>
                                    <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false) ?>
                                    <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false) ?>
                                </div>
                                <div class="col-4">
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
                                            <?php $fields = array('name', 'org_id', 'network', 'description', 'type', 'edited_by', 'edited_date') ?>
                                        <h4 class="text-center"><?= __('Fields') ?></h4><br>
                                            <?php foreach ($fields as $key) { ?>
                                            <code><?= $key ?>: </code><?= $dictionary->columns->{$key} ?><br><br>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane" id="devices" role="tabpanel" tabindex="0" aria-labelledby="devices">

                            <div class="table-responsive">
                                <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                    <thead>
                                        <tr>
                                            <th class="text-center"><?= __('View') ?></th>
                                            <th class="text-center"><?= __('Icon') ?></th>
                                            <th><?= __('Name') ?></th>
                                            <th><?= __('DNS FQDN') ?></th>
                                            <th><?= __('IP') ?></th>
                                            <th><?= __('IP Set By') ?></th>
                                            <th><?= __('Mac Address') ?></th>
                                            <th><?= __('Interface') ?></th>
                                            <th><?= __('Device Status') ?></th>
                                            <th><?= __('IP Last Seen') ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($included['devices'] as $item) { ?>
                                        <tr>
                                            <td class="text-center"><a href="<?= url_to('devicesRead', $item->attributes->{'id'}) ?>" role="button" class="btn btn-sm btn-devices" title="<?= __('View') ?>"><i class="fa fa-desktop" aria-hidden="true"></i></a></td>
                                            <td><img src="<?= base_url() ?>device_images/<?= $item->attributes->icon ?>.svg" style="width:40px" alt="<?= $item->attributes->icon ?>"></td>
                                            <td><?= $item->attributes->{'name'} ?></td>
                                            <td><?= $item->attributes->{'dns_fqdn'} ?></td>
                                            <td><?= $item->attributes->{'ip.ip'} ?></td>
                                            <td><?= $item->attributes->{'ip.set_by'} ?></td>
                                            <td><?= $item->attributes->{'ip.mac'} ?></td>
                                            <td><?= $item->attributes->{'network.connection'} ?></td>
                                            <td><?= $item->attributes->{'status'} ?></td>
                                            <td><?= $item->attributes->{'ip.last_seen'} ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
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
        $("#environment").val("<?= $resource->environment ?>");
    });
}
</script>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {

        var hash = window.location.hash;
        if (hash == "") {
            hash = "#details"
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
