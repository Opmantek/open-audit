<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/create_functions.php';
$type = 'single';
if (stripos($meta->query_string, 'source=device') !== false) {
    $type = 'device';
}
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
                                <input type="hidden" value="<?= $included['baseline'][0]->attributes->org_id ?>" id="data[attributes][org_id]" name="data[attributes][org_id]" />
                                <input type="hidden" value="<?= $included['baseline'][0]->attributes->id ?>" id="data[attributes][baseline_id]" name="data[attributes][baseline_id]" />
                                <input type="hidden" value="<?= $type ?>" id="data[attributes][type]" name="data[attributes][type]" />

                                <?= create_text_field('baseline', __('Baseline'), array(), $included['baseline'][0]->attributes->name) ?>

                                <?php if ($type === 'single') { ?>
                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][table]"><?= __('Table'); ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][table]" id="data[attributes][table]" required>
                                            <option value=""><?= __('Choose'); ?></option>
                                            <option value="netstat"><?= __('Netstat'); ?></option>
                                            <option value="software"><?= __('Software'); ?></option>
                                            <option value="user"><?= __('User'); ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][notes]"><?= __('Notes'); ?></label>
                                        <textarea class="form-control" rows="6" name="data[attributes][notes]" id="data[attributes][notes]"></textarea>
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][documentation]"><?= __('Documentation'); ?></label>
                                        <textarea class="form-control" rows="6" name="data[attributes][documentation]" id="data[attributes][documentation]"></textarea>
                                    </div>
                                </div>


                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][priority]"><?= __('Priority'); ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][priority]" id="data[attributes][priority]" required>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5" selected>5</option>
                                        </select>
                                    </div>
                                </div>

                                <div id="policy_tests">
                                </div>
                                <?php } ?>

                                <?php if ($type === 'device') { ?>
                                <div class="row" style="padding-top:16px">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="hostname" class="form-label"><?= __('Search For a Device') ?></label><br>
                                        <div class="input-group">
                                            <input class="form-control" type="text" id="hostname" name="hostname" />
                                            <div class="pull-right" style="padding-left:4px;">
                                                <button type="button" class="btn btn-secondary" id="search" name="search"><?= __('Search') ?></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label for="data[attributes][device_id]" class="form-label"><?= __('Choose a Device') ?></label><br>
                                        <div class="input-group">
                                            <select class="form-select" name="data[attributes][device_id]" id="data[attributes][device_id]" disabled>
                                                <option value=""><?= __('Choose a Device') ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label for="data[attributes][table]" class="form-label"><?= __('Select a Table') ?></label><br>
                                        <div class="input-group">
                                            <select class="form-select" name="data[attributes][table]" id="data[attributes][table]" disabled>
                                                <option value=""><?= __('Choose a Table') ?></option>
                                                <option value="software"><?= __('Software') ?></option>
                                                <option value="user"><?= __('User') ?></option>
                                                <option value="netstat"><?= __('Netstat') ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label for="data[attributes][operator]" class="form-label"><?= __('Assign an Operator') ?></label><br>
                                        <div class="input-group">
                                            <select class="form-select" name="data[attributes][operator]" id="data[attributes][operator]" disabled>
                                            </select>
                                        </div>
                                    </div>
                                </div>
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
                                <?php foreach ($dictionary->columns as $key => $value) {
                                    echo "<code>$key:</code> " . html_entity_decode($value) . "<br><br>";
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<script {csp-script-nonce}>
<?php if ($type === 'single') { ?>
window.onload = function () {
    $(document).ready(function () {

        $("#baseline").prop('disabled', true);

       var $netstat_tests = "                                <div  id='netstat' style='display:block;'>\
                                    <div class='row' style='padding-top:16px;'>\
                                        <div class='offset-2 col-4'>\
                                            <label class='form-label' for='data[attributes][tests][protocol][operator]'><?= __('Protocol'); ?> <span style='color: #dc3545;'>*</span></label>\
                                            <select class='form-select' name='data[attributes][tests][protocol][operator]' id='data[attributes][tests][protocol][operator]' required>\
                                                <option value='=' selected>Equal To</option>\
                                            </select>\
                                        </div>\
                                        <div class='col-4' style='position:relative;'>\
                                            <label class='form-label' for='data[attributes][tests][protocol][value]'>&nbsp;</label>\
                                            <input class='form-control' type='text' value='' id='data[attributes][tests][protocol][value]' name='data[attributes][tests][protocol][value]' />\
                                        </div>\
                                    </div>\
                                    <div class='row' style='padding-top:16px;'>\
                                        <div class='offset-2 col-4'>\
                                            <label class='form-label' for='data[attributes][tests][program][operator]'><?= __('Program'); ?> <span style='color: #dc3545;'>*</span></label>\
                                            <select class='form-select' name='data[attributes][tests][program][operator]' id='data[attributes][tests][program][operator]' required>\
                                                <option value='='><?= __('Equal To') ?></option>\
                                            </select>\
                                        </div>\
                                        <div class='col-4' style='position:relative;'>\
                                            <label class='form-label' for='data[attributes][tests][program][value]'>&nbsp;</label>\
                                            <input class='form-control' type='text' value='' id='data[attributes][tests][program][value]' name='data[attributes][tests][program][value]' />\
                                        </div>\
                                    </div>\
                                    <div class='row' style='padding-top:16px;'>\
                                        <div class='offset-2 col-4'>\
                                            <label class='form-label' for='data[attributes][tests][port][operator]'><?= __('Port'); ?> <span style='color: #dc3545;'>*</span></label>\
                                            <select class='form-select' name='data[attributes][tests][port][operator]' id='data[attributes][tests][port][operator]' required>\
                                                <option value='='><?= __('Equal To') ?></option>\
                                            </select>\
                                        </div>\
                                        <div class='col-4' style='position:relative;'>\
                                            <label class='form-label' for='data[attributes][tests][port][value]'>&nbsp;</label>\
                                            <input class='form-control' type='text' value='' id='data[attributes][tests][port][value]' name='data[attributes][tests][port][value]' />\
                                        </div>\
                                    </div>\
                                </div>";

        var $software_tests = "                                <div id='software' style='display:block;'>\
                                    <div class='row' style='padding-top:16px;'>\
                                        <div class='offset-2 col-4'>\
                                            <label class='form-label' for='data[attributes][tests][name][operator]'><?= __('Name'); ?> <span style='color: #dc3545;'>*</span></label>\
                                            <select class='form-select' name='data[attributes][tests][name][operator]' id='data[attributes][tests][name][operator]' required>\
                                                <option value='=' selected>Equal To</option>\
                                            </select>\
                                        </div>\
                                        <div class='col-4' style='position:relative;'>\
                                            <label class='form-label' for='data[attributes][tests][name][value]'>&nbsp;</label>\
                                            <input class='form-control' type='text' value='' id='data[attributes][tests][name][value]' name='data[attributes][tests][name][value]' />\
                                        </div>\
                                    </div>\
                                    <div class='row' style='padding-top:16px;'>\
                                        <div class='offset-2 col-4'>\
                                            <label class='form-label' for='data[attributes][tests][version][operator]'><?= __('Version'); ?> <span style='color: #dc3545;'>*</span></label>\
                                            <select class='form-select' name='data[attributes][tests][version][operator]' id='data[attributes][tests][version][operator]' required>\
                                                <option value='='><?= __('Equal To') ?></option>\
                                                <option value='>=' selected><?= __('Equal To or Greater Than') ?></option>\
                                                <option value='>'><?= __('Greater Than') ?></option>\
                                                <option value='<='><?= __('Equal To or Less Than') ?></option>\
                                                <option value='<'><?= __('Less Than') ?></option>\
                                            </select>\
                                        </div>\
                                        <div class='col-4' style='position:relative;'>\
                                            <label class='form-label' for='data[attributes][tests][version][value]'>&nbsp;</label>\
                                            <input class='form-control' type='text' value='' id='data[attributes][tests][version][value]' name='data[attributes][tests][version][value]' />\
                                        </div>\
                                    </div>\
                                </div>";

       var $user_tests = "                                <div  id='user' style='display:block;'>\
                                    <div class='row' style='padding-top:16px;'>\
                                        <div class='offset-2 col-4'>\
                                            <label class='form-label' for='data[attributes][tests][name][operator]'><?= __('Name'); ?> <span style='color: #dc3545;'>*</span></label>\
                                            <select class='form-select' name='data[attributes][tests][name][operator]' id='data[attributes][tests][name][operator]' required>\
                                                <option value='=' selected>Equal To</option>\
                                            </select>\
                                        </div>\
                                        <div class='col-4' style='position:relative;'>\
                                            <label class='form-label' for='data[attributes][tests][name][value]'>&nbsp;</label>\
                                            <input class='form-control' type='text' value='' id='data[attributes][tests][name][value]' name='data[attributes][tests][name][value]' />\
                                        </div>\
                                    </div>\
                                    <div class='row' style='padding-top:16px;'>\
                                        <div class='offset-2 col-4'>\
                                            <label class='form-label' for='data[attributes][tests][status][operator]'><?= __('Status'); ?> <span style='color: #dc3545;'>*</span></label>\
                                            <select class='form-select' name='data[attributes][tests][status][operator]' id='data[attributes][tests][status][operator]' required>\
                                                <option value='='><?= __('Equal To') ?></option>\
                                            </select>\
                                        </div>\
                                        <div class='col-4' style='position:relative;'>\
                                            <label class='form-label' for='data[attributes][tests][status][value]'>&nbsp;</label>\
                                            <input class='form-control' type='text' value='' id='data[attributes][tests][status][value]' name='data[attributes][tests][status][value]' />\
                                        </div>\
                                    </div>\
                                    <div class='row' style='padding-top:16px;'>\
                                        <div class='offset-2 col-4'>\
                                            <label class='form-label' for='data[attributes][tests][type][operator]'><?= __('Type'); ?> <span style='color: #dc3545;'>*</span></label>\
                                            <select class='form-select' name='data[attributes][tests][type][operator]' id='data[attributes][tests][type][operator]' required>\
                                                <option value='='><?= __('Equal To') ?></option>\
                                            </select>\
                                        </div>\
                                        <div class='col-4' style='position:relative;'>\
                                            <label class='form-label' for='data[attributes][tests][type][value]'>&nbsp;</label>\
                                            <input class='form-control' type='text' value='' id='data[attributes][tests][type][value]' name='data[attributes][tests][type][value]' />\
                                        </div>\
                                    </div>\
                                    <div class='row' style='padding-top:16px;'>\
                                        <div class='offset-2 col-4'>\
                                            <label class='form-label' for='data[attributes][tests][password_expires][operator]'><?= __('Password Expires'); ?> <span style='color: #dc3545;'>*</span></label>\
                                            <select class='form-select' name='data[attributes][tests][password_expires][operator]' id='data[attributes][tests][password_expires][operator]' required>\
                                                <option value='=' selected>Equal To</option>\
                                            </select>\
                                        </div>\
                                        <div class='col-4' style='position:relative;'>\
                                            <label class='form-label' for='data[attributes][tests][password_expires][value]'>&nbsp;</label>\
                                            <input class='form-control' type='text' value='' id='data[attributes][tests][password_expires][value]' name='data[attributes][tests][password_expires][value]' />\
                                        </div>\
                                    </div>\
                                    <div class='row' style='padding-top:16px;'>\
                                        <div class='offset-2 col-4'>\
                                            <label class='form-label' for='data[attributes][tests][password_changeable][operator]'><?= __('Password Changeable'); ?> <span style='color: #dc3545;'>*</span></label>\
                                            <select class='form-select' name='data[attributes][tests][password_changeable][operator]' id='data[attributes][tests][password_changeable][operator]' required>\
                                                <option value='='><?= __('Equal To') ?></option>\
                                            </select>\
                                        </div>\
                                        <div class='col-4' style='position:relative;'>\
                                            <label class='form-label' for='data[attributes][tests][password_changeable][value]'>&nbsp;</label>\
                                            <input class='form-control' type='text' value='' id='data[attributes][tests][password_changeable][value]' name='data[attributes][tests][password_changeable][value]' />\
                                        </div>\
                                    </div>\
                                    <div class='row' style='padding-top:16px;'>\
                                        <div class='offset-2 col-4'>\
                                            <label class='form-label' for='data[attributes][tests][password_required][operator]'><?= __('Password Required'); ?> <span style='color: #dc3545;'>*</span></label>\
                                            <select class='form-select' name='data[attributes][tests][password_required][operator]' id='data[attributes][tests][password_required][operator]' required>\
                                                <option value='='><?= __('Equal To') ?></option>\
                                            </select>\
                                        </div>\
                                        <div class='col-4' style='position:relative;'>\
                                            <label class='form-label' for='data[attributes][tests][password_required][value]'>&nbsp;</label>\
                                            <input class='form-control' type='text' value='' id='data[attributes][tests][password_required][value]' name='data[attributes][tests][password_required][value]' />\
                                        </div>\
                                    </div>\
                                </div>";

        $("#data\\[attributes\\]\\[table\\]").change(function() {
            if ($("#data\\[attributes\\]\\[table\\]").val() == "netstat") {
                $("#policy_tests").html($netstat_tests);
            }
            if ($("#data\\[attributes\\]\\[table\\]").val() == "software") {
                $("#policy_tests").html($software_tests);
            }
            if ($("#data\\[attributes\\]\\[table\\]").val() == "user") {
                $("#policy_tests").html($user_tests);
            }
        });


    });
}
<?php } ?>

<?php if ($type === 'device') { ?>
window.onload = function () {
    $(document).ready(function() {
        <?php if (!empty($org_id)) { ?>
        $('#data\\[attributes\\]\\[org_id\\]').val('<?= $org_id ?>');
        <?php } ?>

        // Retrieve the device list once we click Search and activate the "device_id" select
        $('#search').click(function() {
            console.log("Hostname: " + $("#hostname").val());
            var $url = '<?= url_to('devicesCollection') ?>?properties=devices.id,devices.name&format=json&sort=devices.name&devices.name=like'+$("#hostname").val();
            $.ajax({
              type: 'GET',
              url: $url,
            })
            .done(function(data) {
              $( "#data\\[attributes\\]\\[device_id\\]" ).empty();
              var items = [];
              items.push( "<option value=\"\">Choose a Device</option>" );
              $.each( data.data, function( key, val ) {
                items.push( "<option value='" + val.attributes['id'] + "'>" + val.attributes['name'] + "</option>" );
              });
              $("#data\\[attributes\\]\\[device_id\\]").append( items.join( "" ) );
              $("#data\\[attributes\\]\\[device_id\\]").removeAttr("disabled");
              $("#data\\[attributes\\]\\[table\\]").attr("disabled", true);
              $("#data\\[attributes\\]\\[table\\]").val("");
              $("#data\\[attributes\\]\\[operator\\]").attr("disabled", true);
              $("#data\\[attributes\\]\\[operator\\]").val("");
              $("#modal_submit").attr("disabled", true);
            })
            .fail( function(jqXHR, textStatus, errorThrown ) {
              //alert("An error occurred when deleting item:" + $name);
              alert(jqXHR.responseJSON.errors[0].code + ": " + jqXHR.responseJSON.errors[0].detail);
            });
        });

        // Activate the "table" select once we have chosen a device
        $("#data\\[attributes\\]\\[device_id\\]").change(function() {
            $("#data\\[attributes\\]\\[table\\]").removeAttr("disabled");
            $("#data\\[attributes\\]\\[operator\\]").attr("disabled", true);
            $("#data\\[attributes\\]\\[operator\\]").val("");
            $("#modal_submit").attr("disabled", true);
        });

        // Activate the "operator" select once we have chosen a table
        $("#data\\[attributes\\]\\[table\\]" ).change(function() {
          $('#data\\[attributes\\]\\[operator\\]').empty();
          $('#data\\[attributes\\]\\[operator\\]').append($('<option>', { value: "", text: 'Choose an Operator' }));
          $('#data\\[attributes\\]\\[operator\\]').append($('<option>', { value: "=", text: 'Equals' }));
          if ( $("#data\\[attributes\\]\\[table\\]").val() == "software" ) {
            $('#data\\[attributes\\]\\[operator\\]').append($('<option>', { value: ">=", text: 'Equal To or Greater Than' }));
            $('#data\\[attributes\\]\\[operator\\]').append($('<option>', { value: ">", text: 'Greater Than' }));
          }
          $("#data\\[attributes\\]\\[operator\\]").removeAttr("disabled");
          $("#modal_submit").attr("disabled", true);
        });

    });
}
<?php } ?>
</script>
