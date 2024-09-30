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
                    <?php if (empty($included['software'])) { ?>
                    <div class="row">
                        <div class="col-md-6">
                            <form class="form-horizontal" method="post" action="<?= url_to($meta->collection.'Create') ?>">
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
                                <?php $show = array('name', 'org_id', 'description', 'type', 'software_name', 'software_version', 'os'); ?>
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
        console.log('here');
        <?php } ?>
    });
}
</script>
<?php } ?>


<?php if (!empty($included['software'])) {
    $count = count($included['software']);
    for ($i=0; $i < $count; $i++) {
        foreach (['antivirus', 'backup', 'firewall', 'approved', 'banned', 'ignored'] as $key) {
            $button = 'btn-outline-success';
            $fa = __('Add');
            $action = 'create';
            if ($included['software'][$i]->type === $key) {
                $button = 'btn-danger';
                $fa = __('Remove');
                $action = 'delete';
            }
            $included['software'][$i]->{$key} = '<button style="min-width:6em;" class="btn btn-sml ' . $button . ' btnedit" id="' . $included['software'][$i]->name . '_' . $key . '_' . $action . '" data-type="' . $key . '" data-name="' . $included['software'][$i]->name . '" data-action="' . $action . '" data-id="' . $included['software'][$i]->id . '">' . $fa . '</button>';
        }
    }


    $columns = array();
    foreach (['name', 'packages entry', 'found', 'type', 'antivirus', 'backup', 'firewall', 'approved', 'banned', 'ignored'] as $key) {
        $column = new \stdClass();
        $column->title = ucwords($key);
        $column->data = $key;
        $columns[] = $column;
    }
    ?>
<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {
        var dataSet = <?= json_encode($included['software'], JSON_PRETTY_PRINT) ?>;
        $('#example').dataTable( {
            "lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ],
            "paging": true,
            "searching": true,
            "order": [[ 1, 'desc' ]],
            "info": true,
            "pageLength": 50,
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
            if ($(this).attr('data-action') == 'create') {
                console.log('Create');
            }
            if ($(this).attr('data-action') == 'delete') {
                console.log('Delete');
                id = $(this).attr('data-id');
                var $url = baseurl + '/packages/' + id;
                console.log($url);
                //$(this).attr('class', 'btn btn-outline-success');
                //$(this).html('Add');
                
                //$("button").find(`[data-id='${id}']`).attr('class', 'btn btn-outline-success');
                //$("button").find(`[data-id='${id}']`).html('Add');

                $("button[data-id='" + id +"']").attr('class', 'btn btn-outline-success');
                $("button[data-id='" + id +"']").html('Add');


                // $.ajax({
                //     type: 'DELETE',
                //     url: $url,
                //     dataType: 'json',
                //     success: function(data, textStatus) { 
                //         $(this).attr('class') = 'btn btn-outline-success' },
                //     error: function (jqXHR, textStatus, errorThrown) {
                //         console.log("Status: " + textStatus);
                //         console.log("errorThrown: " + errorThrown);
                //         console.log(JSON.stringify(jqXHR));
                //         alert(jqXHR.responseJSON.errors[0].code + ": " + jqXHR.responseJSON.errors[0].detail);
                //         return false; }
                // });
            }
        });

    });
}
</script>
<?php } ?>