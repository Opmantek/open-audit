<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/create_functions.php';
include 'shared/common_functions.php';
$application_id = '';
if (!empty($_GET['application_id'])) {
    $application_id = $_GET['application_id'];
} else {
    log_message('warning', 'No application id provided to applications component create form.');
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= create_card_header('applications', 'icon-app-window', $user); ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row" style="padding-top:16px">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <h6>
                                    <?= __('Add Applicaiton Component') ?>
                                    </h6>
                                </div>
                            </div>
                            <form class="form-horizontal" method="post" action="<?= url_to($meta->collection . 'Create') ?>?type=application" accept-charset="utf-8" enctype="multipart/form-data">
                                <input type="hidden" value="<?= $meta->access_token ?>" id="data[access_token]" name="data[access_token]" />
                                <input type="hidden" value="<?= $application_id ?>" id="data[attributes][application_id]" name="data[attributes][application_id]" />
                                <input type="hidden" value="<?= $application_id ?>" id="data[attributes][primary_internal_id_a]" name="data[attributes][primary_internal_id_a]" />


                                <?= create_text_field('data[attributes][name]', __('Name'), $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][description]', __('Description'), $dictionary->attributes->create) ?>

                                <hr>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label for="data[attributes][primary_type]" class="form-label"><?= __('Choose a Type') ?></label><br>
                                        <div class="input-group">
                                            <select class="form-select" name="data[attributes][primary_type]" id="data[attributes][primary_type]" >
                                                <option value=""><?= __('Choose a Type') ?></option>
                                                <option value="aws"><?= __('AWS Service') ?></option>
                                                <option value="azure"><?= __('Azure Service') ?></option>
                                                <option value="" disabled>-----------------</option>
                                                <?php foreach ($dictionary->types as $key => $value) {
                                                    echo "<option value=\"" . $key . "\">" . $key . "</option>\n";
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" id="primary_external_provider_div" style="padding-top:16px; display:none;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label class="form-label" for="data[attributes][primary_external_provider]"><?= __('External Povider') ?></label>
                                        <input class="form-control" type="text" id="data[attributes][primary_external_provider]" name="data[attributes][primary_external_provider]">
                                    </div>
                                </div>

                                <div class="row" id="primary_external_service_div" style="padding-top:16px; display:none;">
                                    <div class="offset-2 col-8">
                                        <label for="data[attributes][primary_external_service]" class="form-label"><?= __('External Service') ?></label><br>
                                        <div class="input-group">
                                            <select class="form-select select2" name="data[attributes][primary_external_service]" id="data[attributes][primary_external_service]">
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div id="device_search" style="display:none;">
                                    <div class="row" style="padding-top:16px">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="hostname" class="form-label"><?= __('Search For a Device') ?></label><br>
                                            <div class="input-group">
                                                <input class="form-control" type="text" id="hostname_primary" name="hostname_primary" placeholder="Device Name" value="apollo"/>
                                                <div class="pull-right" style="padding-left:4px;">
                                                    <button type="button" class="btn btn-primary search_button" id="search_primary_internal_id_a" name="search_primary_internal_id_a"><?= __('Search For a Device') ?></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" id="primary_internal_id_b_div" style="padding-top:16px; display:none;">
                                    <div class="offset-2 col-8">
                                        <label for="data[attributes][primary_internal_id_b]" class="form-label"></label><br>
                                        <div class="input-group">
                                            <select class="form-select" name="data[attributes][primary_internal_id_b]" id="data[attributes][primary_internal_id_b]">
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" id="primary_owner_div" style="padding-top:16px; display:none;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label class="form-label" for="data[attributes][primary_owner]"><?= __('Owner') ?></label>
                                        <input class="form-control" type="text" id="data[attributes][primary_owner]" name="data[attributes][primary_owner]">
                                    </div>
                                </div>

                                <div class="row" id="primary_description_div" style="padding-top:16px; display:none;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label class="form-label" for="data[attributes][primary_description]"><?= __('Description') ?></label>
                                        <input class="form-control" type="text" id="data[attributes][primary_description]" name="data[attributes][primary_description]">
                                    </div>
                                </div>








                                <hr>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label for="data[attributes][relationship]" class="form-label"><?= __('Choose a Relationship') ?></label><br>
                                        <div class="input-group">
                                            <select class="form-select" name="data[attributes][relationship]" id="data[attributes][relationship]" >
                                                <option value=""><?= __('Choose a Relationship') ?></option>
                                                <?php foreach ($dictionary->relationships as $key => $value) {
                                                    echo "<option value=\"" . $key . "\">" . $key . "</option>\n";
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <hr>
<!--


                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label for="data[attributes][type2]" class="form-label"><?= __('Choose a Type') ?></label><br>
                                        <div class="input-group">
                                            <select class="form-select" name="data[attributes][type2]" id="data[attributes][type2]" >
                                                <option value=""><?= __('Choose a Type') ?></option>
                                                <?php foreach ($dictionary->types as $key => $value) {
                                                    echo "<option value=\"" . $key . "\">" . $key . "</option>\n";
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div id="secondary" style="display:none;">
                                    <div id="device_search">
                                        <div class="row" style="padding-top:16px">
                                            <div class="offset-2 col-8" style="position:relative;">
                                                <label for="hostname2" class="form-label"><?= __('Search For a Device') ?></label><br>
                                                <div class="input-group">
                                                    <input class="form-control" type="text" id="hostname2" name="hostname2" placeholder="Device Name"/>
                                                    <div class="pull-right" style="padding-left:4px;">
                                                        <button type="button" class="btn btn-primary" id="search2" name="search2"><?= __('Search For a Device') ?></button>
                                                        <button type="button" class="btn btn-outline-secondary" id="check" name="check"><span class="icon-x"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="device_component2" style="padding-top:16px; display:none;">
                                            <div class="offset-2 col-8">
                                                <label for="data[attributes][secondary2]" class="form-label"></label><br>
                                                <div class="input-group">
                                                    <select class="form-select" name="data[attributes][secondary2]" id="data[attributes][secondary2]">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div id="alt">
                                        <div class="row" style="padding-top:16px">
                                            <div class="offset-2 col-8" style="position:relative;">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label class="form-label" for="data[attributes][primary_alt]"><?= __('Or An External Service Provider') ?></label>
                                                        <input class="form-control" type="text" id="data[attributes][primary_alt]" name="data[attributes][primary_alt]">
                                                    </div>
                                                    <div class="col-6">
                                                        <label class="form-label" for="data[attributes][primary_alt]"><?= __('And External Service') ?></label>
                                                        <input class="form-control" type="text" id="data[attributes][secondary_alt]" name="data[attributes][secondary_alt]">
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
-->
                                <br>
                                <div class="row">
                                    <div class="offset-2 col-8">
                                        <br>
                                        <label for="submit" class="form-label">&nbsp;</label>
                                        <button id="submit" name="submit" type="submit" class="btn btn-primary"><?= __('Submit'); ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-3">
                            <div class="offset-2 col-8">
                                <h4 class="text-center">Types</h4><br><p>
                                <?php foreach ($dictionary->types as $key => $value) {
                                    echo "<strong>" . $key . ":</strong>&nbsp;" . $value . "<br><br>";
                                } ?>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="offset-2 col-8">
                                <h4 class="text-center">Relationships</h4><br><p>
                                <?php foreach ($dictionary->relationships as $key => $value) {
                                    echo "<strong>" . $key . ":</strong>&nbsp;" . $value . "<br><br>";
                                } ?>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>


<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {

        //$("#alt").css("display", "none");
        //$("#device_search").css("display", "none");
        //$("#submit").attr("disabled", true);

        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

        $('#data\\[attributes\\]\\[primary_type\\]').change(function() {
            if ($('#data\\[attributes\\]\\[primary_type\\]').val() == "aws") {
                $('#data\\[attributes\\]\\[primary_external_provider\\]').val('AWS');
                $('#data\\[attributes\\]\\[primary_external_service\\]').val('');
                getCloudService('aws', 'primary_external_service');
                $('#primary_external_provider_div').css("display", "block");
                $('#primary_external_service_div').css("display", "block");
                $('#device_search').css("display", "none");

            } else if ($('#data\\[attributes\\]\\[primary_type\\]').val() == "azure") {
                $('#data\\[attributes\\]\\[primary_external_provider\\]').val('Azure');
                $('#data\\[attributes\\]\\[primary_external_service\\]').val('');
                getCloudService('azure', 'primary_external_service');
                $('#primary_external_provider_div').css("display", "block");
                $('#primary_external_service_div').css("display", "block");
                $('#device_search').css("display", "none");

            } else if ($('#data\\[attributes\\]\\[primary_type\\]').val().includes('_external')) {
                $('#primary_external_service_div').css("display", "none");
                $('#data\\[attributes\\]\\[primary_external_provider\\]').val('');
                $('#data\\[attributes\\]\\[primary_external_service\\]').val('');
                $('#data\\[attributes\\]\\[primary_external_service\\]').find('option').remove().end();
                $('#primary_external_service_div').html('<div class="offset-2 col-8" style="position:relative;"><label class="form-label" for="data[attributes][primary_external_service]">External Povider</label><input class="form-control" type="text" id="data[attributes][primary_external_service]" name="data[attributes][primary_external_service]"></div>');
                $('#primary_external_provider_div').css("display", "block");
                $('#primary_external_service_div').css("display", "block");
                $("#device_search").css("display", "none");
                $("#primary_internal_id_b_div").css("display", "none");

            } else {
                $('#data\\[attributes\\]\\[primary_external_provider\\]').val('');
                $('#data\\[attributes\\]\\[primary_external_service\\]').val('');
                $('#data\\[attributes\\]\\[primary_external_service\\]').find('option').remove().end();
                $('#primary_external_provider_div').css("display", "none");
                $('#primary_external_service_div').css("display", "none");
                $("#device_search").css("display", "block");
                $("#primary_owner_div").css("display", "block");
                $("#primary_description_div").css("display", "block");
            }
        });



        function getCloudService($id, $section) {
            var $url = '<?= url_to('home') ?>cloudServices/'+$id;
            console.log("URL: " + $url);
            $.ajax({
              type: 'GET',
              url: $url,
            }).done(function(data) {
                $('#data\\[attributes\\]\\[' + $section + '\\]').find('option').remove().end();
                if (data) {
                    var hit = false;
                    console.log("getCloudService success");
                    console.log(data);
                    data.forEach(service => {
                        hit = true;
                        $("#data\\[attributes\\]\\[" + $section + "\\]").append($('<option></option>').val(service).html(service));
                    });
                } else {
                    console.log("getCloudService fail");
                }
                if (!hit) {
                    $("#data\\[attributes\\]\\[" + $section + "\\]").append($('<option></option>').val("").html('No services returned.'));
                }
            })
            .fail( function(jqXHR, textStatus, errorThrown ) {
                console.log("fail");
            });
        }




        // Retrieve the device list once we click Search and activate the "device_id" select
        $('.search_button').click(function($this) {
            var $url = '<?= url_to('devicesCollection') ?>?properties=devices.id,devices.name&format=json&devices.name=like'+$("#hostname_primary").val();
            $target = 'secondary'
            if ($(this).attr('id').includes('primary')) {
                $target = 'primary';
            }

            $("#search_" + $target + "_internal_id_a").html('<div class="spinner-border spinner-border-sm text-light" role="status"><span class="visually-hidden">Loading...</span></div>');

            $include = $('#data\\[attributes\\]\\[' + $target + '_type\\]').val();

            $.ajax({
              type: 'GET',
              url: $url,
            })
            .done(function(data) {
                console.log("search done");
                if (data.data[0]) {
                    $("#hostname_primary").val(data.data[0].attributes.name);
                    $('#data\\[attributes\\]\\[primary_internal_id_b\\]').find('option').remove().end();
                    console.log('Length: ' + data.data.length);
                    if (data.data.length === 1) {
                        $("#data\\[attributes\\]\\[" + $target + "_internal_id_a\\]").val(data.data[0].id);
                        getDevice(data.data[0].id, $include, $target);
                    } else {
                        console.log('more than one');
                        // TODO - Select from one of these devices
                    }

                } else {
                    // $("#check").removeClass();
                    // $("#check").addClass("btn");
                    // $("#check").addClass("btn-outline-danger");
                    // $("#check").html("<span class=\"icon-x\"></span>");
                    // $("#device_id").val();
                    if (data.warning) {
                        console.log(data.warning);
                    }
                    $("#liveToastSuccess-header").text("Error");
                    $("#liveToastSuccess-body").text(data.warning);
                    var toastElList = [].slice.call(document.querySelectorAll('.toast-danger'));
                    var toastList = toastElList.map(function(toastEl) {
                        return new bootstrap.Toast(toastEl)
                    });
                    toastList.forEach(toast => toast.show());
                    console.log("search error");
                }
            })
            .fail( function(jqXHR, textStatus, errorThrown ) {
                // $("#check").removeClass();
                // $("#check").addClass("btn");
                // $("#check").addClass("btn-outline-danger");
                // $("#check").html("<span class=\"icon-x\"></span>");
                // $("#device_id").val();
                alert(jqXHR.responseJSON.errors[0].code + ": " + jqXHR.responseJSON.errors[0].detail);
                console.log("search fail");
            });
        });


        function getDevice($id, $field, $target) {
            $include = 'all';
            if ($field === 'api') { $include = 'server_item'; }
            if ($field === 'application') { $include = 'software'; }
            if ($field === 'database') { $include = 'server_item'; }
            var $url = '<?= url_to('devicesCollection') ?>/'+$id+'?format=json&include=' + $include;
            $result = new Array();
            $.ajax({
              type: 'GET',
              url: $url,
            }).done(function(data) {
                
                if (data) {
                    $included = data.included;
                    $newData = $included[$include];
                    $("#" + $target + "_internal_id_b_div").css("display", "block");
                    $newData.forEach((obj) => {
                        if ($field === 'api' && obj.type === 'website') {
                            $("#data\\[attributes\\]\\[" + $target + "_internal_id_b\\]").append($('<option></option>').val(obj.name).html(obj.parent_name + ' :: ' + obj.name + ' (on port ' + obj.port + ')'));
                        }
                        if ($field === 'database' && obj.type === 'database') {
                            $("#data\\[attributes\\]\\[" + $target + "_internal_id_b\\]").append($('<option></option>').val(obj.name).html(obj.parent_name + ' :: ' + obj.name + ' (on port ' + obj.port + ')'));
                        }
                    });
                    $("#search_" + $target + "_internal_id_a").html('<?= __('Search For a Device') ?>');
                } else {
                    console.log("getDevice fail");
                }
            })
            .fail( function(jqXHR, textStatus, errorThrown ) {
                console.log("fail");
            });
        }


    });
}
</script>