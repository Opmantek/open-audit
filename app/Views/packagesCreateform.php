<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/create_functions.php';
$os = !empty($_GET['os']) ? 'os=' . $_GET['os'] : '';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= create_card_header($meta->collection, $meta->icon, $user); ?>
                </div>
                <div class="card-body">
                    <?php if (empty($included['software'])) { ?>
                    <div class="row">
                        <div class="col-md-6">
                            <form class="form-horizontal" method="post" action="<?= url_to($meta->collection . 'Create') ?>">
                                <input type="hidden" value="<?= $meta->access_token ?>" id="data[access_token]" name="data[access_token]" />

                                <?= create_text_field('data[attributes][name]', __('Name'), $dictionary->attributes->create) ?>
                                <?= create_select('data[attributes][org_id]', __('Organisation'), $orgs, $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][description]', __('Description'), $dictionary->attributes->create) ?>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][type]"><?= __('Type'); ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][type]" id="data[attributes][type]" required>
                                            <option value=""><?= __('Choose') ?></option>
                                            <option value="antivirus"><?= __('AntiVirus') ?></option>
                                            <option value="backup"><?= __('Backup') ?></option>
                                            <option value="firewall"><?= __('Firewall') ?></option>
                                            <option value="approved"><?= __('Approved') ?></option>
                                            <option value="banned"><?= __('Banned') ?></option>
                                            <option value="ignored"><?= __('Ignored') ?></option>
                                        </select>
                                    </div>
                                </div>

                                <?= create_text_field('data[attributes][software_name]', __('Software Name'), $dictionary->attributes->create) ?>
                                <!--
                                <?= create_text_field('data[attributes][software_version]', __('Software Version'), $dictionary->attributes->create) ?>
                                -->

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
                                <?php $show = array('name', 'org_id', 'description', 'type', 'software_name'); ?>
                                <?php foreach ($dictionary->columns as $key => $value) {
                                    if (in_array($key, $show)) {
                                        echo "<code>$key:</code> " . html_entity_decode($value) . "<br><br>";
                                    }
                                } ?>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if (!empty($included['software'])) { ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped">
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </main>


<?php if (empty($included['software'])) { ?>
<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {
        <?php if (!empty($included['software'])) { ?>
        $("#createform").hide();
        <?php } ?>
    });
}
</script>
<?php } ?>


<?php if (!empty($included['software'])) {
    $count = count($included['software']);
    for ($i = 0; $i < $count; $i++) {
        $type = new stdClass();
        if (is_string($included['software'][$i]->type)) {
            try {
                $included['software'][$i]->type = json_decode($included['software'][$i]->type, false, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException $e) {
                log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
            }
        }

        foreach (['antivirus', 'backup', 'firewall', 'approved', 'banned', 'ignored'] as $key) {
            foreach ($included['software'][$i]->type as $value) {
                if (!empty($value->$key)) {
                    $type->{$key} = intval($value->{$key});
                }
            }

            $button = 'btn-outline-success';
            $fa = __('Add');
            $action = 'create';
            $id = '';
            if (!empty($type->{$key})) {
                $button = 'btn-danger';
                $fa = __('Remove');
                $action = 'delete';
                $id = $type->{$key};
            }

            $included['software'][$i]->{$key} = '<button style="min-width:6em;" class="btn btn-sml ' . $button . ' btnedit" data-type="' . $key . '" data-name="' . $included['software'][$i]->name . '" data-action="' . $action . '" data-id="' . $id . '">' . $fa . '</button>';
        }
    }


    $columns = array();
    foreach (['name', 'software_name', 'found', 'antivirus', 'backup', 'firewall', 'approved', 'banned', 'ignored'] as $key) {
        $column = new \stdClass();
        $column->title = ucwords(str_replace('_', ' ', $key));
        $column->data = $key;
        $columns[] = $column;
    }
    ?>
<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {

        <?php
            echo '        $("#oa_panel_buttons").append("&nbsp;|")' . "\n";
        foreach (range('a', 'z') as $letter) {
            echo '        $("#oa_panel_buttons").append("&nbsp;<a href=\"' . url_to('packagesCreateForm') . '?' . $os . '&range=' . $letter . '\">' . $letter . "</a>&nbsp|\");";
        }
        ?>

        var access_token = "<?= $meta->access_token ?>";
        var dataSet = <?= json_encode($included['software'], JSON_PRETTY_PRINT) ?>;
        $('#example').dataTable( {
            "lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ],
            "paging": true,
            "searching": true,
            "order": [[ 1, 'desc' ]],
            "info": true,
            "pageLength": -1,
            "autoWidth": false,
            "oSearch": {
                "bSmart": false,
                "bRegex": true,
                "sSearch": ""
            },
            columns: <?= json_encode($columns, JSON_PRETTY_PRINT) ?>,
            data: dataSet
        });

        $(".btnedit").click(function (e) {
            //console.log($(this).attr('id'));
            //console.log($(this).attr('data-name'));
            //console.log($(this).attr('data-type'));
            //console.log($(this).attr('data-action'));
            //console.log("Clicked AccessToken: " + access_token);
            var button = $(this);
            if ($(this).attr('data-action') == 'create') {
                var data = {};
                data["data"] = {};
                data["data"]["type"] = 'packages';
                data["data"]["attributes"] = {};
                data["data"]["attributes"]["name"] = $(this).attr('data-name');
                data["data"]["attributes"]["description"] = '';
                data["data"]["attributes"]["org_id"] = 1;
                data["data"]["attributes"]["org_descendants"] = 'y';
                data["data"]["attributes"]["match_string"] = '';
                data["data"]["attributes"]["software_name"] = $(this).attr('data-name');
                data["data"]["attributes"]["type"] = $(this).attr('data-type');
                data["data"]["attributes"]["sql"] = '';
                data["data"]["access_token"] = "<?= $meta->access_token ?>";
                var newPackage = new FormData();
                newPackage.append('data', JSON.stringify(data['data']));
                $.ajax({
                    type: 'POST',
                    url: baseurl + '/packages',
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    data: newPackage,
                    success: function(data, textStatus) {
                        button.attr('data-action', '');
                        button.attr("class","btn btn-sml btn-success");
                        button.text("Added");
                        access_token = data.meta.access_token;
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log("Status: " + textStatus);
                        console.log("errorThrown: " + errorThrown);
                        console.log(JSON.stringify(jqXHR));
                        alert(jqXHR.responseJSON.errors[0].code + ": " + jqXHR.responseJSON.errors[0].detail);
                        return false; }
                });
            }
            if ($(this).attr('data-action') == 'delete') {
                id = $(this).attr('data-id');
                var $url = baseurl + '/packages/' + id;
                $.ajax({
                    type: 'DELETE',
                    url: $url,
                    dataType: 'json',
                    success: function(data, textStatus) {
                        button.attr('data-action', '');
                        button.attr("class","btn btn-sml btn-success");
                        button.text("Removed");
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log("Status: " + textStatus);
                        console.log("errorThrown: " + errorThrown);
                        console.log(JSON.stringify(jqXHR));
                        alert(jqXHR.responseJSON.errors[0].code + ": " + jqXHR.responseJSON.errors[0].detail);
                        return false; }
                });
            }
        });

    });
}
</script>
<?php } ?>