<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';

$style = @$user->toolbar_style;
if ($style === 'icontext') {
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab" ><span style="margin-right:6px;" class="fa fa-eye text-success"></span>' . __('Details') . '</a></li>';
    $site_a         = '<li class="nav-item" role="presentation"><a href="#site_a"  class="nav-link" id="site_a-tab" ><span style="margin-right:6px;" class="fa fa-building text-success"></span>' . __('Site A') . '</a></li>';
    $site_b         = '<li class="nav-item" role="presentation"><a href="#site_b"  class="nav-link" id="site_b-tab" ><span style="margin-right:6px;" class="fa fa-building text-success"></span>' . __('Site B') . '</a></li>';
} elseif ($style === 'icon') {
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab" ><span title="' . __('Details') . '" style="margin-right:6px;" class="fa fa-eye text-success"></span></a></li>';
    $site_a         = '<li class="nav-item" role="presentation"><a href="#site_a"  class="nav-link" id="site_a-tab" ><span title="' . __('Site A') . '" style="margin-right:6px;" class="fa fa-building text-success"></span></a></li>';
    $site_b         = '<li class="nav-item" role="presentation"><a href="#site_b"  class="nav-link" id="site_b-tab" ><span title="' . __('Site B') . '" style="margin-right:6px;" class="fa fa-building text-success"></span></a></li>';
} else {
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab" >' . __('Details') . '</a></li>';
    $site_a         = '<li class="nav-item" role="presentation"><a href="#site_a"  class="nav-link" id="site_a-tab" >' . __('Site A') . '</a></li>';
    $site_b         = '<li class="nav-item" role="presentation"><a href="#site_b"  class="nav-link" id="site_b-tab" >' . __('Site B') . '</a></li>';
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
                                <?= $details_button ?>
                                <?= $site_a ?>
                                <?= $site_b ?>
                            </ul>
                        </div>
                    </div>
                    <br/>

                    <div class="tab-content">
                        <div class="tab-pane" id="details" role="tabpanel" tabindex="0">
                            <div class="row">
                                <div class="col-6">
                                    <?= read_field('name', $resource->name, $dictionary->columns->name, $update) ?>
                                    <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, __('Organisation'), $orgs) ?>

                                    <?php $fields = array('description', 'provider', 'service_type', 'product_name', 'service_identifier', 'circuit_status'); ?>
                                    <?php foreach ($fields as $field) { ?>
                                        <?= read_field($field, $resource->{$field}, $dictionary->columns->{$field}, $update) ?>
                                    <?php } ?>
                                    <br>

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
                                        <h4 class="text-center"><?= __('Fields') ?></h4><br>

                                            <?php $fields = array('name', 'org_id', 'description', 'provider', 'service_type', 'product_name', 'service_identifier', 'circuit_status', 'edited_by', 'edited_date') ?>
                                            <?php foreach ($fields as $key) { ?>
                                            <code><?= $key ?>: </code><?= @$dictionary->columns->{$key} ?><br><br>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="site_a" role="tabpanel" tabindex="0">
                            <div class="row">
                                <div class="col-6">
                                    <?= read_select('location_id_a', $resource->location_id_a, $dictionary->columns->location_id_a, $update, __('Location A'), $included['locations']) ?>
                                    <?php
                                    foreach ($included['locations'] as $location) {
                                        if (intval($location->id) === intval($resource->location_id_a)) {
                                            $value = $location->attributes->address . ', ' . $location->attributes->city . ', ' . $location->attributes->state . ', ' . $location->attributes->country;
                                            echo read_field('address', $value, '', '', '');
                                            $value = (!empty($location->attributes->contact)) ? $location->attributes->contact : '';
                                            $value .= (!empty($location->attributes->phone) and !empty($value)) ? ' on ' . $location->attributes->phone : '';
                                            $value .= (!empty($location->attributes->phone) and empty($value)) ? $location->attributes->phone : '';
                                            echo read_field('contact', $value, '', '', '');
                                        }
                                    }
                                    ?>
                                    <?php $fields = array('service_level_a', 'site_hours_a', 'speed_up_a', 'speed_down_a', 'device_id_a', 'line_number_a', 'ip_address_external_a', 'ip_address_internal_a'); ?>
                                    <?php foreach ($fields as $field) {
                                        $link = '';
                                        if ($field === 'device_id_a') {
                                            $href = '';
                                            if (!empty($resource->{'device_id_a'})) {
                                                $href = url_to('devicesRead', intval($resource->{'device_id_a'}));
                                            }
                                            $link = "<a role=\"button\" class=\"btn btn-outline-secondary link_button\" href=\"$href\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>";
                                            if (!empty($resource->{$field})) {
                                                $resource->{$field} = $resource->{$field} . ' (' . $resource->{'devices.device_name_a'} . ')';
                                            } else {
                                                $resource->{$field} = '';
                                            }
                                        }
                                        ?>
                                        <?= read_field($field, $resource->{$field}, $dictionary->columns->{$field}, $update, '', $link) ?>
                                    <?php } ?>
                                    <br>
                                </div>
                                <div class="col-6">
                                    <br>
                                    <div class="offset-2 col-8">
                                        <?php if (!empty($dictionary->columns)) { ?>
                                        <h4 class="text-center"><?= __('Fields') ?></h4><br>

                                            <?php $fields = array('location_id_a', 'service_level_a', 'site_hours_a', 'speed_up_a', 'speed_down_a', 'device_id_a', 'line_number_a', 'ip_address_external_a', 'ip_address_internal_a') ?>
                                            <?php foreach ($fields as $key) { ?>
                                                <code><?= $key ?>: </code><?= @$dictionary->columns->{$key} ?><br><br>
                                            <?php } ?>
                                            <hr>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="site_b" role="tabpanel" tabindex="0">
                            <div class="row">
                                <div class="col-6">
                                    <?= read_select('location_id_b', $resource->location_id_b, $dictionary->columns->location_id_b, $update, __('Location B'), $included['locations']) ?>
                                    <?php
                                    foreach ($included['locations'] as $location) {
                                        if (intval($location->id) === intval($resource->location_id_b)) {
                                            $value = $location->attributes->address . ', ' . $location->attributes->city . ', ' . $location->attributes->state . ', ' . $location->attributes->country;
                                            echo read_field('address', $value, '', '', '');
                                            $value = (!empty($location->attributes->contact)) ? $location->attributes->contact : '';
                                            $value .= (!empty($location->attributes->phone) and !empty($value)) ? ' on ' . $location->attributes->phone : '';
                                            $value .= (!empty($location->attributes->phone) and empty($value)) ? $location->attributes->phone : '';
                                            echo read_field('contact', $value, '', '', '');
                                        }
                                    }
                                    ?>
                                    <?php $fields = array('service_level_b', 'site_hours_b', 'speed_up_b', 'speed_down_b', 'device_id_b', 'line_number_b', 'ip_address_external_b', 'ip_address_internal_b'); ?>
                                    <?php foreach ($fields as $field) {
                                        $link = '';
                                        if ($field === 'device_id_b') {
                                            $href = '';
                                            if (!empty($resource->{'device_id_b'})) {
                                                $href = url_to('devicesRead', intval($resource->{'device_id_b'}));
                                            }
                                            $link = "<a role=\"button\" class=\"btn btn-outline-secondary link_button\" href=\"$href\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>";
                                            if (!empty($resource->{$field})) {
                                                $resource->{$field} = $resource->{$field} . ' (' . $resource->{'devices.device_name_b'} . ')';
                                            } else {
                                                $resource->{$field} = '';
                                            }
                                        }
                                        ?>
                                        <?= read_field($field, $resource->{$field}, $dictionary->columns->{$field}, $update, '', $link) ?>
                                    <?php } ?>
                                    <br>
                                </div>
                                <div class="col-6">
                                    <br>
                                    <div class="offset-2 col-8">
                                        <?php if (!empty($dictionary->columns)) { ?>
                                        <h4 class="text-center"><?= __('Fields') ?></h4><br>

                                            <?php $fields = array('location_id_b', 'site_hours_b', 'service_level_b', 'speed_up_b', 'speed_down_b', 'device_id_b', 'line_number_b', 'ip_address_external_b', 'ip_address_internal_b') ?>
                                            <?php foreach ($fields as $key) { ?>
                                                <code><?= $key ?>: </code><?= @$dictionary->columns->{$key} ?><br><br>
                                            <?php } ?>
                                            <hr>
                                        <?php } ?>
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
            window.location = this.href;
        });

        $(".nav-link").click(function(e) {
            window.scrollTo(0, 0);
        });
    });
}
</script>
