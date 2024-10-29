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
                                <?= create_text_field('data[attributes][description]', __('Description'), $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][notes]', __('Notes'), $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][documentation]', __('Documentation'), $dictionary->attributes->create) ?>

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
window.onload = function () {
    $(document).ready(function() {
        $("#data\\[attributes\\]\\[name\\]").focus();
        <?php if (!empty($org_id)) { ?>
        $('#data\\[attributes\\]\\[org_id\\]').val('<?= $org_id ?>');
        <?php } ?>

        // Retrieve the device list once we click Search and activate the "device_id" select
        $('#search').click(function() {
            console.log("Hostname: " + $("#hostname").val());
            var $url = '<?= url_to('devicesCollection') ?>?properties=devices.id,devices.name&format=json&devices.name=like'+$("#hostname").val();
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
</script>
