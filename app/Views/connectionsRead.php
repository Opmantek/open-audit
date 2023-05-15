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
                        <div class="col-6">
                            <?= read_field('name', $resource->name, $dictionary->columns->name, $update) ?>
                            <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, __('Organisation'), $orgs) ?>
                            

                            <?php $fields = array('description', 'provider', 'service_type', 'product_name', 'service_identifier', 'speed'); ?>
                            <?php foreach ($fields as $field) { ?>
                                <?= read_field($field, $resource->{$field}, $dictionary->columns->{$field}, $update) ?>
                            <?php } ?>
                            <br>
                            <div class="offset-2 col-8"><hr /></div>

                            <?= read_select('location_id_a', $resource->location_id_a, $dictionary->columns->location_id_a, $update, __('Location A'), $included['locations']) ?>
                            <?php $fields = array('device_id_a', 'line_number_a', 'ip_address_external_a', 'ip_address_internal_a'); ?>
                            <?php foreach ($fields as $field) {
                                $link = '';
                                if ($field === 'device_id_a') {
                                    $link = "<a role=\"button\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesRead', $resource->{'device_id_a'}) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>";
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
                            <div class="offset-2 col-8"><hr /></div>

                            <?= read_select('location_id_b', $resource->location_id_b, $dictionary->columns->location_id_b, $update, __('Location B'), $included['locations']) ?>
                            <?php $fields = array('device_id_b', 'line_number_b', 'ip_address_external_b', 'ip_address_internal_b'); ?>
                            <?php foreach ($fields as $field) {
                                $link = '';
                                if ($field === 'device_id_b') {
                                    $link = "<a role=\"button\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesRead', $resource->{'device_id_b'}) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>";
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
                            <div class="offset-2 col-8"><hr /></div>

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

                                    <?php $fields = array('name', 'org_id', 'description', 'provider', 'service_type', 'product_name', 'service_identifier', 'speed', 'edited_by', 'edited_date') ?>
                                    <?php foreach ($fields as $key) { ?>
                                    <code><?= $key ?>: </code><?= @$dictionary->columns->{$key} ?><br><br>
                                    <?php } ?>
                                    <hr />

                                    <?php $fields = array('location_id_a', 'device_id_a', 'line_number_a', 'ip_address_external_a', 'ip_address_internal_a') ?>
                                    <?php foreach ($fields as $key) { ?>
                                    <code><?= $key ?>: </code><?= @$dictionary->columns->{$key} ?><br><br>
                                    <?php } ?>
                                    <hr />


                                    <?php $fields = array('location_id_b', 'device_id_b', 'line_number_b', 'ip_address_external_b', 'ip_address_internal_b') ?>
                                    <?php foreach ($fields as $key) { ?>
                                    <code><?= $key ?>: </code><?= @$dictionary->columns->{$key} ?><br><br>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
