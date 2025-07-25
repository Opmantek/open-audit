<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/create_functions.php';
include 'shared/common_functions.php';
$type = 'device';
if (stripos($meta->query_string, 'type=application') !== false) {
    $type = 'application';
}
if (empty($included['applications'])) {
    echo '        <div class="container-fluid">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                You need to create an application before assigning a device. Click <a href="' . url_to('applicationsCreateForm') . '">here</a> to create an application.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>';
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= create_card_header('applications', 'fa fa-th-list', $user); ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row" style="padding-top:16px">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <h6>
                                    <?php if ($type === 'device') {
                                        echo __('Assign Device to Application');
                                    } ?>
                                    <?php if ($type === 'application') {
                                        echo __('Add Device to Application');
                                    } ?>
                                    </h6>
                                </div>
                            </div>
                            <form class="form-horizontal" method="post" action="<?= url_to($meta->collection . 'Create') ?>?type=<?= $type ?>" accept-charset="utf-8" enctype="multipart/form-data">
                                <input type="hidden" value="<?= $meta->access_token ?>" id="data[access_token]" name="data[access_token]" />
                                <input type="hidden" value="application" id="data[attributes][component_type]" name="data[attributes][component_type]" />

                                <?php if ($type === 'device') { ?>
                                    <?= create_select('data[attributes][application_id]', __('Application'), $included['applications'], $dictionary->attributes->create) ?>
                                <?php } ?>

                                <?php if ($type === 'application') { ?>
                                <div class="row" style="padding-top:16px">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="hostname" class="form-label"><?= __('Search For a Device') ?></label><br>
                                        <div class="input-group">
                                            <input class="form-control" type="text" id="hostname" name="hostname" />
                                            <div class="pull-right" style="padding-left:4px;">
                                                <button type="button" class="btn btn-secondary" id="search" name="search"><?= __('Search for Device') ?></button>
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
                                <?php } ?>

                                <br>
                                <div class="row">
                                    <div class="offset-2 col-8">
                                        <label for="submit" class="form-label">&nbsp;</label>
                                        <button id="submit" name="submit" type="submit" class="btn btn-primary" <?php if (empty($included['applications'])) { echo " disabled"; } ?>><?= __('Submit'); ?></button>
                                    </div>
                                </div>

                                <?php if (!empty($meta->id)) { ?>
                                    <?php if ($type === 'device') { ?>
                                        <input type="hidden" value="<?php echo intval($meta->id); ?>" id="data[attributes][device_id]" name="data[attributes][device_id]" />
                                    <?php } ?>
                                    <?php if ($type === 'application') { ?>
                                        <input type="hidden" value="<?php echo intval($meta->id); ?>" id="data[attributes][application_id]" name="data[attributes][application_id]" />
                                    <?php } ?>
                                <?php } ?>
                            </form>
                        </div>

                        <div class="col-md-6">
                            <div class="offset-2 col-8">
                                <?= aboutNotesDiv ($meta->collection, $dictionary) ?>
                                <?= fieldsInfoDiv ($dictionary) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>


<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {
        <?php if ($type === 'device' and empty($included['applications'])) { ?>
        $('#data\\[attributes\\]\\[application_id\\]').attr("disabled", true);
        <?php } ?>

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