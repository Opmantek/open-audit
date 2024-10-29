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
                            <form class="form-horizontal" method="post" action="<?= url_to($meta->collection . 'Create') ?>" id="thisform">
                                <input type="hidden" value="<?= $meta->access_token ?>" id="data[access_token]" name="data[access_token]" />
                                <?= create_text_field('data[attributes][name]', __('Name'), $dictionary->attributes->create) ?>
                                <?= create_select('data[attributes][org_id]', __('Organisation'), $orgs, $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][description]', __('Description'), $dictionary->attributes->create) ?>
                                <?= create_select('data[attributes][menu_display]', __('Menu Display'), '', $dictionary->attributes->create) ?>
                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][menu_category]"><?= __('Menu Category'); ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][menu_category]" id="data[attributes][menu_category]" required>
                                            <option value=""><?= __('Choose') ?></option>
                                            <?php foreach ($included['attributes'] as $category) { ?>
                                                <option value="<?= $category->attributes->value ?>"><?= __($category->attributes->name); ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <?php if (!empty($config->feature_queries_advanced) and $config->feature_queries_advanced === 'y') { ?>
                                    <?= create_select('data[attributes][advanced]', __('Advanced'), '', $dictionary->attributes->create) ?>
                                <?php } ?>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <hr>
                                    </div>
                                </div>


                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][sql]"><?= __('SQL'); ?></label>
                                        <textarea class="form-control" rows="10" name="data[attributes][sql]" id="data[attributes][sql]"></textarea>
                                    </div>
                                </div>
                                <br>


                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <p><?= __('Or select from the below fields.') ?></p>
                                        <hr>
                                    </div>
                                </div>



                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-4">
                                        <p><?= __('SELECT') ?></p>
                                    </div>
                                </div>
                                <fieldset>
                                    <div class="row">
                                        <div class="offset-2 col-4">
                                            <select class="form-select" multiple aria-label="tables" id="tables" name="tables" size="10">
                                                <option selected>devices</option>
                                                <option value="">------</option>
                                                <?php foreach ($included['tables'] as $table => $fields) {
                                                    if ($table !== 'devices') { ?>
                                                    <option value="<?= $table ?>"><?= $table ?></option>
                                                    <?php }
                                                } ?>
                                            </select>
                                        </div>
                                        <?php foreach ($included['tables'] as $table => $fields) { ?>
                                        <div style="display:none;" class="col-4" id="attributes_block_<?= $table ?>">
                                            <select class="form-select" id="attributes_<?= $table ?>" name="attributes_<?= $table ?>" multiple aria-label="attributes_<?= $table ?>" size="10">
                                            <?php foreach ($fields as $field) { ?>
                                                <option value="<?= $table . '.' . $field ?>"><?= $field ?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" id="select_div">
                                        </div>
                                    </div>
                                </fieldset>
                                <br>




                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-4">
                                        <p><?= __('WHERE') ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="offset-2 col-8">
                                        <fieldset id="where_div">
                                            <div class="row">
                                                <div class="col-3">
                                                    <select class="form-select" id="where[0][field]" name="where[0][field]">
                                                        <option value=""></option>
                                                        <?php foreach ($included['tables'] as $table => $fields) { ?>
                                                            <?php foreach ($fields as $field) { ?>
                                                                <option value="<?= $table . '.' . $field ?>"><?= $table . '.' . $field ?></option>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-3">
                                                    <select class="form-select" id="where[0][operator]" name="where[0][operator]">
                                                        <option value="="><?= __('Equals') ?></option>
                                                        <option value="!="><?= __('Not Equals') ?></option>
                                                        <option value="LIKE"><?= __('Like') ?></option>
                                                        <option value="NOT LIKE"><?= __('Not Like') ?></option>
                                                        <option value=">"><?= __('Greater Than') ?></option>
                                                        <option value=">="><?= __('Greater Than or Equals') ?></option>
                                                        <option value="<"><?= __('Less Than') ?></option>
                                                        <option value="=<"><?= __('Less Than or Equals') ?></option>
                                                        <option value="IN"><?= __('In') ?></option>
                                                        <option value="NOT IN"><?= __('Not In') ?></option>
                                                    </select>
                                                </div>
                                                <div class="col-3">
                                                    <input class="form-control" type="text" id="where[0][value]" name="where[0][value]">
                                                </div>
                                                <div class="col-1">
                                                    <button id="add_where" class="btn btn-primary">+</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <br>



                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-4">
                                        <p><?= __('ORDER BY') ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="offset-2 col-2">
                                        <select class="form-select" id="order_by" name="order_by">
                                        <option value=""></option>
                                        <?php foreach ($included['tables'] as $table => $fields) { ?>
                                            <?php foreach ($fields as $field) { ?>
                                                <option value="<?= $table . '.' . $field ?>"><?= $table . '.' . $field ?></option>
                                            <?php } ?>
                                        <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <br>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-4">
                                        <p><?= __('GROUP BY') ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="offset-2 col-2">
                                    <select class="form-select" id="group_by" name="group_by">
                                        <option value=""></option>
                                        <?php foreach ($included['tables'] as $table => $fields) { ?>
                                            <?php foreach ($fields as $field) { ?>
                                                <option value="<?= $table . '.' . $field ?>"><?= $table . '.' . $field ?></option>
                                            <?php } ?>
                                        <?php } ?>
                                        </select>
                                    </div>
                                </div>
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
                                <?php $fields = array('name', 'org_id', 'description', 'menu_display', 'menu_category', 'sql', 'advanced'); ?>
                                <?php foreach ($dictionary->columns as $key => $value) {
                                    if (in_array($key, $fields)) {
                                        echo "<code>$key:</code> " . html_entity_decode($value) . "<br><br>";
                                    }
                                } ?>
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
        $("#data\\[attributes\\]\\[menu_display\\]").val("y");
        $("#data\\[attributes\\]\\[advanced\\]").val("n");
        $('#attributes_block_devices').css("display", "block");
        $select = 0;
        $where = 0;

        $('#tables').change(function(){
            $("[id^=attributes_block_]").css("display", "none");
            $("#attributes_block_" + $("#tables").val()).css("display", "block");
            console.log('Displaying attributes_block_' + $("#tables").val());
        });

        $("[id^=attributes_]").change(function(){
            if ($(this).val() != '') {
                $("#select_div").append('<input type="hidden" value="' + $(this).val() + '" id="select_' + $select + '" name="select[]" />');
                $("#select_div").append('<a href="#select_div" style="margin-right:5px; margin-bottom:5px;" class="btn btn-primary select_delete" data-delete_index="' + $select + '" role="button">' + $(this).val() + '<span style="padding-left:10px;" class="fa-solid fa-xmark"></span></a>');
                $select = $select + 1;
            }
        });

        $('#select_div').on( "click", ".select_delete", function() {
            console.log("Deleting");
            $("#select_" + $(this).attr('data-delete_index')).remove();
            $(this).remove();
        });

        $("#add_where").click(function(e){
            $where = $where + 1;
            $new = '<br>\
                    <div class="row">\
                        <div class="col-3">\
                            <select class="form-select" id="where[' + $where + '][field]" name="where[' + $where + '][field]">\
                            <option value=""></option>\
                            <?php foreach ($included['tables'] as $table => $fields) {
                                foreach ($fields as $field) {
                                    echo '<option value="' . $table . '.' . $field . '">' . $table . '.' . $field . '</option>\\' . "\n";
                                }
                            } ?>\
                            </select>\
                        </div>\
                        <div class="col-3">\
                            <select class="form-select" id="where[' + $where + '][operator]" name="where[' + $where + '][operator]">\
                                <option value="="><?= __('Equals') ?></option>\
                                <option value="!="><?= __('Not Equals') ?></option>\
                                <option value="LIKE"><?= __('Like') ?></option>\
                                <option value="NOT LIKE"><?= __('Not Like') ?></option>\
                                <option value=">"><?= __('Greater Than') ?></option>\
                                <option value=">="><?= __('Greater Than or Equals') ?></option>\
                                <option value="<"><?= __('Less Than') ?></option>\
                                <option value="=<"><?= __('Less Than or Equals') ?></option>\
                                <option value="IN"><?= __('In') ?></option>\
                                <option value="NOT IN"><?= __('Not In') ?></option>\
                            </select>\
                        </div>\
                        <div class="col-3">\
                            <input class="form-control" type="text" id="where[' + $where + '][value]" name="where[' + $where + '][value]">\
                        </div>\
                    </div>';
            $("#where_div").append($new);
            e.preventDefault();
        });


    });
}
</script>
