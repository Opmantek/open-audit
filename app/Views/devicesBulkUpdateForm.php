<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
include 'shared/collection_functions.php';
$id = array();
foreach ($data as $item) {
    $id[] = $item->id;
}
$ids = implode(',', $id);
?>
        <main class="container-fluid">
            <div style="display:none" id="ids" data-value="<?= $ids ?>"></div>
            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user, 'Bulk Update') ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                        <?php foreach (['asset_number', 'attached_device_id'] as $attribute) { ?>
                            <?= read_field($attribute, '', '', 1) ?>
                        <?php } ?>
                        <?= read_select('class', '', '', true, __('Class'), $included['class']) ?>
                        <?php foreach (['cluster_name', 'cluster_type', 'comments', 'contact_name', 'description', 'dns_domain', 'domain'] as $attribute) { ?>
                            <?= read_field($attribute, '', '', 1) ?>
                        <?php } ?>
                        <?= read_select('environment', '', '', true, __('Environment'), $included['environment']) ?>
                        <?php foreach (['form_factor', 'function', 'lease_expiry_date'] as $attribute) { ?>
                            <?= read_field($attribute, '', '', 1) ?>
                        <?php } ?>
                        <?= read_select('location_id', '', '', true, __('Location'), $included['locations']) ?>
                        <?php foreach (['locations', 'manufacturer', 'model', 'nmis_manage', 'nmis_group', 'nmis_name', 'nmis_role', 'nmis_business_service', 'nmis_poller', 'oae_manage'] as $attribute) { ?>
                            <?= read_field($attribute, '', '', 1) ?>
                        <?php } ?>
                        <?= read_select('org_id', '', '', true, __('Organisation'), $included['orgs']) ?>
                        <?php foreach (['os_bit', 'os_family', 'os_group', 'os_installation_date', 'os_name'] as $attribute) { ?>
                            <?= read_field($attribute, '', '', 1) ?>
                        <?php } ?>


                        </div>
                        <div class="col-6">
                        <?php foreach (['os_version', 'owner', 'patch_panel', 'patch_panel_port', 'printer_color', 'purchase_amount', 'purchase_cost_center', 'purchase_date', 'purchase_invoice', 'purchase_order_number', 'purchase_service_contract_number', 'purchase_vendor', 'serial', 'serial_imei', 'serial_sim', 'service_network', 'service_number', 'service_plan', 'service_provider', 'service_type'] as $attribute) { ?>
                            <?= read_field($attribute, '', '', 1) ?>
                        <?php } ?>
                        <?= read_select('status', '', '', true, __('Status'), $included['status']) ?>
                        <?php foreach (['switch_port', 'switch_device_id'] as $attribute) { ?>
                            <?= read_field($attribute, '', '', 1) ?>
                        <?php } ?>
                        <?= read_select('type', '', '', true, __('Type'), $included['type']) ?>
                        <?php foreach (['unlock_pin', 'vm_group', 'vm_server_name', 'wall_port', 'warranty_duration', 'warranty_expires', 'warranty_type'] as $attribute) { ?>
                            <?= read_field($attribute, '', '', 1) ?>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user, 'Fields') ?>
                </div>
                <div class="card-body">
                    <div class="row">
                    <?php if (!empty($included['fields'])) {
                        $count = 0;
                        foreach ($included['fields'] as $field) {
                            $count += 1;
                            if ($count > 3) {
                                echo "</div><div class=\"row\">\n";
                                $count = 1;
                            }
                            echo "<div class=\"col-4\">\n";
                            if ($field->attributes->type == 'varchar') {
                                echo read_field($field->attributes->name, '', '', 1);
                            }

                            if ($field->attributes->type == 'list') {
                                $values = array();
                                // Put an empty value in for 'not set'.
                                $item = new \stdClass();
                                $item->id = '';
                                $item->name = '';
                                $item->type = '';
                                $item->attributes = new \stdClass();
                                $item->attributes->name = '';
                                $values[] = $item;
                                $valid_values = explode(',', $field->attributes->values);
                                foreach ($valid_values as $key => $value) {
                                    $item = new \stdClass();
                                    $item->id = $value;
                                    $item->name = $value;
                                    $item->type = '';
                                    $item->attributes = new \stdClass();
                                    $item->attributes->name = $value;
                                    $values[] = $item;
                                }
                                echo read_select($field->attributes->name, '', '', 1, '', $values);
                            }

                            if ($field->attributes->type == 'date') {
                                echo read_field($field->attributes->name, '', '', 1, '', '', '', 'date') ;
                            }
                            echo "</div>\n";
                        }
                    } ?>
                    </div>
                </div>
            </div>






            <br>
            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user, '', $meta->query_string) ?>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[3,"asc"]]'>
                            <thead>
                                <tr>
                                    <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                    <?php foreach ($meta->data_order as $key) {
                                        if ($key === 'id' or $key === 'orgs.id') {
                                            continue;
                                        } ?>
                                        <th><?= collection_column_name($key) ?></th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($data)) { ?>
                                <?php foreach ($data as $item) { ?>
                                <tr>
                                    <?= collection_button_read($meta->collection, $item->id) ?>
                                    <?php foreach ($meta->data_order as $key) {
                                        if ($key === 'id' or $key === 'orgs.id') {
                                            continue;
                                        }
                                        if ($key === 'icon') {
                                            echo "<td><img src=\"" . base_url() . "device_images/" . $item->attributes->icon . ".svg\" style=\"width:40px\"></td>\n";
                                        } else {
                                            if (is_string($item->attributes->{$key}) or is_numeric($item->attributes->{$key})) {
                                                echo "<td>" . $item->attributes->{$key} . "</td>\n";
                                            } else {
                                                echo "<td>" . json_encode($item->attributes->{$key}) . "</td>\n";
                                            }
                                        }
                                        ?>
                                    <?php } ?>
                                <?php } ?>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>



<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {
        /* Remove these panel header buttons */
        $("#button_export_json").remove();
        $("#button_export_json").remove();
        $("#button_export_json").remove();

        $("#button_import_json").remove();
        $("#button_import_json").remove();
        $("#button_import_json").remove();

        $("#button_export_csv").remove();
        $("#button_export_csv").remove();
        $("#button_export_csv").remove();

        $("#button_import_csv").remove();
        $("#button_import_csv").remove();
        $("#button_import_csv").remove();

        $("#button_create").remove();
        $("#button_create").remove();
        $("#button_create").remove();

        $("#button_help").remove();
        $("#button_help").remove();
        $("#button_help").remove();

        /* Add a blank entry for the select boxes (read_select populates the existing value) */
        $("#class").append('<option></option>');
        $("#class").val("").change();
        $("#environment").append('<option></option>');
        $("#environment").val("").change();
        $("#location_id").append('<option></option>');
        $("#location_id").val("").change();
        $("#org_id").append('<option></option>');
        $("#org_id").val("").change();
        $("#status").append('<option></option>');
        $("#status").val("").change();
        $("#type").append('<option></option>');
        $("#type").val("").change();
    });
}
</script>
