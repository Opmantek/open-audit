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
                                <input type="hidden" value="front" id="data[attributes][orientation]" name="data[attributes][orientation]" />

                                <?= create_select('data[attributes][rack_id]', __('Rack'), $included['racks'], $dictionary->attributes->create) ?>

                                <div class="row" style="padding-top:16px">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="hostname" class="form-label"><?= __('Search For a Device') ?></label><br>
                                        <div class="input-group">
                                            <input class="form-control" type="text" id="hostname" name="hostname" placeholder="hostname" />
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

                                <?= create_text_field('data[attributes][position]', __('Position'), $dictionary->attributes->create, '', 'number') ?>
                                <?= create_text_field('data[attributes][height]', __('Height'), $dictionary->attributes->create, '', 'number') ?>

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
        $("#hostname").focus();
        <?php if (!empty($meta->filter[0]->name) and $meta->filter[0]->name === 'rack_id') { ?>
            $('#data\\[attributes\\]\\[rack_id\\]').val('<?= $meta->filter[0]->value ?>');
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
    });
}
</script>
