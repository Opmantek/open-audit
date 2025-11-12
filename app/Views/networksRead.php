<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
include 'shared/common_functions.php';
$types = array('Campus Area Network','Cloud Network','Enterprise Private Network','Home Area Network','Local Area Network','Metropolitan Area Network','Passive Optical Local Area Network','Personal Area Network','Storage-Area Network','System-Area Network','Virtual Private Network','Wide Area Network','Wireless Local Area Network');
$environments = array('Development', 'Disaster Recovery', 'Evaluation', 'Pre-Production', 'Production', 'Testing', 'Training', 'User Acceptance Testing');
$statuses = array('allocated', 'delegated', 'planning', 'reserved', 'unallocated', 'unknown', 'unmanaged');
$style = @$user->toolbar_style;
if ($style === 'icontext') {
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab"><span style="margin-right:6px;" class="icon-eye text-success"></span>' . __('Details') . '</a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab"><span style="margin-right:6px;" class="icon-computer text-primary" ></span>' . __('Devices') . '</a></li>';
} elseif ($style === 'icon') {
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab"><span style="margin-right:6px;" title="' . __('Details') . '" class="icon-eye text-success"></span></a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab"><span style="margin-right:6px;" title="' . __('Devices') . '" class="icon-computer text-primary"></span></a></li>';
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
                                    <?= read_field('name', $resource->name, $dictionary->columns->name, $update, '', '', '', '', $meta->collection) ?>
                                    <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, __('Organisation'), $orgs, $meta->collection) ?>
                                    <?= read_field('network', $resource->network, $dictionary->columns->network, $update, '', '', '', '', $meta->collection) ?>
                                    <?= read_select('location_id', $resource->location_id, $dictionary->columns->location_id, $update, __('Location'), $included['locations'], $meta->collection) ?>
                                    <?= read_field('description', $resource->description, $dictionary->columns->description, $update, '', '', '', '', $meta->collection) ?>

                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <?= read_field_header($meta->collection, 'environment', $dictionary->columns->environment) ?>
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
                                                    <div data-attribute="environment" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='icon-pencil'></span></div>
                                                    <div data-attribute="environment" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='icon-check'></span></div>
                                                    <div data-attribute="environment" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='icon-x'></span></div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <?= read_field_header($meta->collection, 'type', $dictionary->columns->type) ?>
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
                                                    <div data-attribute="type" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='icon-pencil'></span></div>
                                                    <div data-attribute="type" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='icon-check'></span></div>
                                                    <div data-attribute="type" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='icon-x'></span></div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <?= read_field_header($meta->collection, 'admin_status', $dictionary->columns->admin_status) ?>
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
                                                    <div data-attribute="admin_status" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='icon-pencil'></span></div>
                                                    <div data-attribute="admin_status" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='icon-check'></span></div>
                                                    <div data-attribute="admin_status" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='icon-x'></span></div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="admin_status" data-dictionary="<?= $dictionary->columns->admin_status ?>"><span><br></span></div>
                                        </div>
                                    </div>
                                    <?php $link_button = "<a role=\"button\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('networksCollection') . "?networks.security_zone=" . urlencode($resource->security_zone) . "\"><span title=\"" . __('View') . "\" class=\"icon-link\" aria-hidden=\"true\"></span></a></div><div class=\"float-end\" style=\"padding-left:4px;\">"; ?>
                                    <?= read_field('security_zone', $resource->security_zone, $dictionary->columns->security_zone, $update, '', $link_button, '', '', $meta->collection) ?>

                                    <?php $link_button = "<a role=\"button\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('networksCollection') . "?networks.network_domain=" . urlencode($resource->network_domain) . "\"><span title=\"" . __('View') . "\" class=\"icon-link\" aria-hidden=\"true\"></span></a></div><div class=\"float-end\" style=\"padding-left:4px;\">"; ?>
                                    <?= read_field('network_domain', $resource->network_domain, $dictionary->columns->network_domain, $update, '', $link_button, '', '', $meta->collection) ?>
                                </div>
                                <div class="col-4">
                                    <?= read_field('DHCP_servers', $resource->dhcp_servers, $dictionary->columns->dhcp_servers, false) ?>
                                    <?= read_field('DNS_servers', $resource->dns_servers, $dictionary->columns->dns_servers, false) ?>
                                    <?= read_field('Gateways', $resource->gateways, $dictionary->columns->gateways, false, '', '', '', '', $meta->collection) ?>
                                    <?= read_field('IPs_total', $resource->ip_total_count, $dictionary->columns->ip_total_count, false) ?>
                                    <?= read_field('IPs_used', $resource->device_count, $dictionary->columns->device_count, false) ?>
                                    <?= read_field('IPs_available', $resource->ip_available_count, $dictionary->columns->ip_available_count, false) ?>
                                    <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false, '', '', '', '', $meta->collection) ?>
                                    <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false, '', '', '', '', $meta->collection) ?>
                                </div>
                                <div class="col-4">
                                    <br>
                                    <div class="offset-2 col-8">
                                        <?= aboutNotesDiv ($meta->collection, $dictionary) ?>
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
                                            <th><?= __('Type') ?></th>
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
                                            <td class="text-center"><a href="<?= url_to('devicesRead', $item->attributes->{'id'}) ?>" role="button" class="btn btn-sm btn-devices" title="<?= __('View') ?>"><i class="icon-computer" aria-hidden="true"></i></a></td>
                                            <td class="text-center"><img src="<?= base_url() ?>device_images/<?= $item->attributes->icon ?>.svg" style="width:40px" alt="<?= $item->attributes->icon ?>"></td>
                                            <td><?= $item->attributes->{'type'} ?></td>
                                            <td><?= $item->attributes->{'name'} ?></td>
                                            <td><?= $item->attributes->{'dns_fqdn'} ?></td>
                                            <td><span style="display:none;"><?= ip_address_to_db($item->attributes->{'ip.ip'}) ?></span><?= $item->attributes->{'ip.ip'} ?></td>
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

    <?php

    if (empty($included['discovery'])) {
        $form_contents = '<input type="hidden" id="data[access_token]" name="data[access_token]" value="' . $meta->access_token . '">\
            <input type="hidden" id="data[type]" name="data[type]" value="discoveries">\
            <input type="hidden" id="data[execute]" name="data[execute]" value="true">\
            <input type="hidden" id="data[attributes][org_id]" name="data[attributes][org_id]" value="' . $resource->org_id . '">\
            <input type="hidden" id="data[attributes][name]" name="data[attributes][name]" value="' . $resource->network . '">\
            <input type="hidden" id="data[attributes][type]" name="data[attributes][type]" value="subnet">\
            <input type="hidden" id="data[attributes][subnet]" name="data[attributes][subnet]" value="' . $resource->network . '">';

        if (!empty($user->toolbar_style) and $user->toolbar_style === 'icontext') { ?>
        $("#oa_panel_buttons").append('<form style="padding-right:4px;" id="discoveriesCreate" method="post" action="<?= url_to('discoveriesCreate') ?>"><?= $form_contents ?><button style="margin-right:6px; margin-left:6px;" id="discoveriesButton" class="btn btn-light mb-2" type="submit" title="<?= __('Discover') ?>"><span class="icon-satellite-dish text-oa-success"></span><?= __('Discover') ?></button></form>');

        <?php } elseif (!empty($user->toolbar_style) and $user->toolbar_style === 'icon') { ?>
        $("#oa_panel_buttons").append('<form style="padding-right:4px;" id="componentsCreate" method="post" action="<?= url_to('discoveriesCreate') ?>"><?= $form_contents ?><button style="margin-right:6px; margin-left:6px;" id="discoveriesButton" class="btn btn-light mb-2" type="submit" title="<?= __('Discover') ?>"><span class="icon-satellite-dish text-oa-success"></span></button></form>');

        <?php } else { ?>
        $("#oa_panel_buttons").append('<form style="padding-right:4px;" id="componentsCreate" method="post" action="<?= url_to('discoveriesCreate') ?>"><?= $form_contents ?><button style="margin-right:6px; margin-left:6px;" id="discoveriesButton" class="btn btn-light mb-2" type="submit" title="<?= __('Discover') ?>"><?= __('Discover') ?></button></form>');
        <?php } ?>
    <?php } else {
        if (!empty($user->toolbar_style) and $user->toolbar_style === 'icontext') { ?>
        $(".page-title-middle").append('<a role="button" id="discoveriesButton" class="btn btn-light mb-2" title="<?= __('Discover') ?>" href="<?= url_to('discoveriesExecute', $included['discovery']) ?>"><span class="icon-satellite-dish text-oa-success"></span><?= __('Discover') ?></a>');

        <?php } elseif (!empty($user->toolbar_style) and $user->toolbar_style === 'icon') { ?>
        $(".page-title-middle").append('<a role="button" id="discoveriesButton" class="btn btn-light mb-2" title="<?= __('Discover') ?>" href="<?= url_to('discoveriesExecute', $included['discovery']) ?>"><span class="icon-satellite-dish text-success"></span></a>');

        <?php } else { ?>
        $(".page-title-middle").append('<a role="button" id="discoveriesButton" class="btn btn-light mb-2" title="<?= __('Discover') ?>" href="<?= url_to('discoveriesExecute', $included['discovery']) ?>"><?= __('Discover') ?></a>');
        <?php } ?>
    <?php } ?>


        $("#discoveriesButton").click(function (e) {
            $("#liveToastSuccess-header").text("Discovery");
            $("#liveToastSuccess-body").text("Discovery is executing. Redirecting shortly.");
            var toastElList = [].slice.call(document.querySelectorAll('.toast-success'));
            var toastList = toastElList.map(function(toastEl) {
                return new bootstrap.Toast(toastEl)
            });
            toastList.forEach(toast => toast.show());
        });


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
