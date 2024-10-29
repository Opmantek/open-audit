<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

include 'shared/create_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= create_card_header($meta->collection, $meta->icon, $user); ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form class="form-horizontal" method="post" action="<?= url_to($meta->collection . 'Create') ?>">
                                <input type="hidden" value="<?= $meta->access_token ?>" id="data[access_token]" name="data[access_token]" />

                                <?= create_text_field('data[attributes][name]', __('Name'), $dictionary->attributes->create) ?>
                                <?= create_select('data[attributes][org_id]', __('Organisation'), $orgs, $dictionary->attributes->create) ?>
                                <?php $fields = array('description', 'provider', 'service_type', 'product_name', 'service_identifier', 'circuit_status'); ?>
                                <?php foreach ($fields as $field) { ?>
                                    <?= create_text_field('data[attributes][' . $field . ']', create_column_name($field), $dictionary->attributes->create) ?>
                                <?php } ?>
                                <div class="offset-2 col-8"><hr></div>

                                <?= create_select('data[attributes][location_id_a]', __('Location A'), $included['locations'], $dictionary->attributes->create) ?>
                                <?php $fields = array('service_level_a', 'site_hours_a', 'site_contact_a', 'device_id_a', 'speed_down_a', 'speed_up_a', 'line_number_a', 'ip_address_external_a', 'ip_address_internal_a'); ?>
                                <?php foreach ($fields as $field) { ?>
                                    <?= create_text_field('data[attributes][' . $field . ']', create_column_name($field), $dictionary->attributes->create) ?>
                                <?php } ?>
                                <div class="offset-2 col-8"><hr></div>

                                <?= create_select('data[attributes][location_id_b]', __('Location B'), $included['locations'], $dictionary->attributes->create) ?>
                                <?php $fields = array('service_level_b', 'site_hours_b', 'site_contact_b', 'device_id_b', 'speed_down_b', 'speed_up_b', 'line_number_b', 'ip_address_external_b', 'ip_address_internal_b'); ?>
                                <?php foreach ($fields as $field) { ?>
                                    <?= create_text_field('data[attributes][' . $field . ']', create_column_name($field), $dictionary->attributes->create) ?>
                                <?php } ?>

                                <br>
                                <div class="row">
                                    <div class="offset-2 col-8">
                                        <label for="submit" class="form-label">&nbsp;</label>
                                        <button id="submit" name="submit" type="submit" class="btn btn-primary"><?= __('Submit'); ?></button>
                                    </div>
                                </div>


                            </form>
                        </div>

                        <div class="col-md-6">
                            <div class="offset-2 col-8">
                                <?php if (! empty($dictionary->about)) {
                                    echo "<h4 class=\"text-center\">About</h4><br>";
                                    echo html_entity_decode($dictionary->about);
                                } ?>
                                <?php if (! empty($dictionary->notes)) {
                                    echo "<h4 class=\"text-center\">Notes</h4><br>";
                                    echo html_entity_decode($dictionary->notes);
                                } ?>
                                <h4 class="text-center">Fields</h4><br>
                                <?php $fields = array('name', 'org_id', 'description', 'provider', 'service_type', 'product_name', 'service_identifier', 'speed') ?>
                                <?php foreach ($fields as $key) { ?>
                                <code><?= $key ?>: </code><?= @$dictionary->columns->{$key} ?><br><br>
                                <?php } ?>
                                <hr>

                                <?php $fields = array('location_id_a', 'service_level_a', 'site_hours_a', 'site_contact_a', 'device_id_a', 'line_number_a', 'ip_address_external_a', 'ip_address_internal_a') ?>
                                <?php foreach ($fields as $key) { ?>
                                <code><?= $key ?>: </code><?= @$dictionary->columns->{$key} ?><br><br>
                                <?php } ?>
                                <hr>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {
        $("#data\\[attributes\\]\\[name\\]").focus();
    });
}
</script>
