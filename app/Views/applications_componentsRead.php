<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
include 'shared/common_functions.php';
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


if (!empty($resource->{'primary_devices.name'})) {
    # $primary_notes = ucfirst($resource->primary_type) . ' ' . $resource->primary_internal_id_b . ' ' . __('on') . ' ' . $resource->{'primary_devices.name'};
    $primary_notes = $resource->primary_internal_id_b . ' ' . __('on') . ' ' . $resource->{'primary_devices.name'};
    if (empty($resource->primary_icon)) {
        $resource->primary_icon = 'auto-assigned based on type';
    }
    $primary_dictionary = $dictionary->columns->secondary_internal_id_b;
} else if ($resource->primary_type === 'cluster') {
    $primary_notes = $resource->{'primary_clusters.name'};
    $primary_dictionary = ' ';
    $resource->primary_internal_id_b = $resource->{'primary_clusters.name'};
} else {
    if (empty($resource->primary_icon)) {
        $resource->primary_icon = 'auto-assigned based on external service';
    }
    #$primary_notes = $resource->primary_external_service . ' ' . __('on') . ' ' . $resource->primary_external_provider;
    $primary_notes = $resource->primary_external_service;
    $primary_dictionary = $dictionary->columns->primary_external_service;
}


if (!empty($resource->{'secondary_devices.name'})) {
    #$secondary_notes = ucfirst($resource->secondary_type) . ' ' . $resource->secondary_internal_id_b . ' ' . __('on') . ' ' . $resource->{'secondary_devices.name'};
    $secondary_notes = $resource->secondary_internal_id_b . ' ' . __('on') . ' ' . $resource->{'secondary_devices.name'};
    if (empty($resource->secondary_icon)) {
        $resource->secondary_icon = 'auto-assigned based on type';
    }
    $secondary_dictionary = $dictionary->columns->secondary_internal_id_b;
} else if ($resource->secondary_type === 'cluster') {
    $secondary_notes = $resource->{'secondary_clusters.name'};
    $secondary_dictionary = ' ';
    $resource->secondary_internal_id_b = $resource->{'secondary_clusters.name'};
} else {
    #$secondary_notes = $resource->secondary_external_service . ' ' . __('on') . ' ' . $resource->secondary_external_provider;
    $secondary_notes = $resource->secondary_external_service;
    if (empty($resource->secondary_icon)) {
        $resource->secondary_icon = 'auto-assigned based on external service';
    }
    $secondary_dictionary = $dictionary->columns->secondary_external_service;
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <?php $link_button = "<a role=\"button\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('applicationsRead', $resource->{'applications.id'}) . "\"><span title=\"" . $resource->{'applications.name'}  . "\" class=\"icon-link\" aria-hidden=\"true\"></span></a></div><div class=\"float-end\" style=\"padding-left:4px;\">";
                            ?>
                            <?= read_field('application', $resource->{'applications.name'}, '', false, '', $link_button, '', '', $meta->collection) ?>
                            <?= read_field('name', $resource->name, $dictionary->columns->name, $update, '', '', '', '', $meta->collection) ?>
                        </div>
                        <div class="col-4">
                            <?= read_field('description', $resource->description, $dictionary->columns->description, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_field('org.name', $resource->{'orgs.name'}, $dictionary->columns->org_id, false, 'Org', '', '', '', $meta->collection) ?>
                        </div>
                        <div class="col-4">
                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false, '', '', '', '', $meta->collection) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false, '', '', '', '', $meta->collection) ?>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <hr>
                        <div class="col-4">
                            <?= read_field('primary_type', $primary_notes, $primary_dictionary, false, $resource->primary_type, '', '', '', $meta->collection) ?>
                        </div>
                        <div class="col-4">
                            <div class="row" style="padding-top:1rem;">
                                <div class="offset-2 col-8" style="position:relative;" width="100%">
                                    <div class="row">
                                        <div class="col-10 clearfix">
                                            <label for="relationship" class="form-label" title="relationship"><?= __('Relationship') ?></label>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <select class="form-select " id="relationship" name="relationship" data-original-value="<?= $resource->relationship ?>" disabled>
                                            <option value=""> </option>
                                            <?php
                                            foreach ($dictionary->relationships as $key => $value) {
                                                $selected = '';
                                                if ($key === $resource->relationship) {
                                                    $selected = 'selected';
                                                }
                                                echo '<option value="' . $key . '" ' . $selected . '>' . $key . '</option>' . "\n";
                                            }
                                            ?>
                                        </select>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="relationship" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class="icon-pencil"></span></div>
                                            <div data-attribute="relationship" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class="icon-check"></span></div>
                                            <div data-attribute="relationship" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class="icon-x"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <?= read_field('secondary_type', $secondary_notes, $secondary_dictionary, false, $resource->secondary_type, '', '', '', $meta->collection) ?>
                        </div>
                    </div>

                    <br><hr><br>
                    <div class="row">
                        <div class="col-6">
                            <?php if (empty($resource->primary_external_provider)) { ?>
                            <?= read_field('primary_internal_id_b', $resource->primary_internal_id_b, $dictionary->columns->primary_internal_id_b, false, ucfirst($resource->primary_type), '', '', '', $meta->collection) ?>
                                <?php if ($resource->primary_type !== 'cluster') { ?>
                                <?= read_field('device', $resource->{'primary_devices.name'}, '', false, '', '', '', '', $meta->collection) ?>
                                <?php } ?>
                            <?php } else { ?>
                            <?= read_field('primary_external_provider', $resource->primary_external_provider, $dictionary->columns->primary_external_provider, false, '', '', '', '', $meta->collection) ?>
                            <?= read_field('primary_external_service', $resource->primary_external_service, $dictionary->columns->primary_external_service, false, '', '', '', '', $meta->collection) ?>
                            <?php } ?>
                            <?= read_field('primary_description', $resource->primary_description, $dictionary->columns->primary_description, $update, __('Description'), '', '', '', $meta->collection) ?>

                            <?= read_field('primary_owner', $resource->primary_owner, $dictionary->columns->primary_owner, $update, __('Owner'), '', '', '', $meta->collection) ?>
                            <?= read_field('primary_icon', $resource->primary_icon, $dictionary->columns->primary_icon, $update, __('Icon'), '', '', '', $meta->collection) ?>
                        </div>
                        <div class="col-6">
                            <?php if (empty($resource->secondary_external_provider)) { ?>
                            <?= read_field('secondary_internal_id_b', $resource->secondary_internal_id_b, $dictionary->columns->secondary_internal_id_b, false, ucfirst($resource->secondary_type), '', '', '', $meta->collection) ?>
                                <?php if ($resource->secondary_type !== 'cluster') { ?>
                                    <?= read_field('device', $resource->{'secondary_devices.name'}, '', false, '', '', '', '', $meta->collection) ?>
                                <?php } ?>
                            <?php } else { ?>
                            <?= read_field('secondary_external_provider', $resource->secondary_external_provider, $dictionary->columns->secondary_external_provider, false, '', '', '', '', $meta->collection) ?>
                            <?= read_field('secondary_external_service', $resource->secondary_external_service, $dictionary->columns->secondary_external_service, false, '', '', '', '', $meta->collection) ?>
                            <?php } ?>

                            <?= read_field('secondary_description', $resource->secondary_description, $dictionary->columns->secondary_description, $update, __('Description'), '', '', '', $meta->collection) ?>
                            <?= read_field('secondary_owner', $resource->secondary_owner, $dictionary->columns->secondary_owner, $update, __('Owner'), '', '', '', $meta->collection) ?>
                            <?= read_field('secondary_icon', $resource->secondary_icon, $dictionary->columns->secondary_icon, $update, __('Icon'), '', '', '', $meta->collection) ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>

