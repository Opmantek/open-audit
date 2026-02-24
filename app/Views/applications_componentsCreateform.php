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
                            <form class="form-horizontal" method="post" action="<?= url_to($meta->collection . 'Create') ?>?type=application" accept-charset="utf-8">
                                <input type="hidden" value="<?= $meta->access_token ?>" id="data[access_token]" name="data[access_token]" />
                                <input type="hidden" value="<?= $application_id ?>" id="data[attributes][application_id]" name="data[attributes][application_id]" />
                                <input type="hidden" value="" id="data[attributes][primary_internal_id_a]" name="data[attributes][primary_internal_id_a]" />
                                <input type="hidden" value="" id="data[attributes][secondary_internal_id_a]" name="data[attributes][secondary_internal_id_a]" />

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <h3>Primary</h3>
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
                                    <div class="offset-2 col-8" style="position:relative;" width="100%">
                                        <label for="data[attributes][primary_external_service]" class="form-label"><?= __('External Service') ?></label><br>
                                        <div class="input-group">
                                            <select class="form-select select2" name="data[attributes][primary_external_service]" id="data[attributes][primary_external_service]">
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div id="primary_device_search" class="row" style="padding-top:16px; display:none;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="hostname" class="form-label"><?= __('Search For a Device') ?></label><br>
                                        <div class="input-group">
                                            <input class="form-control" type="text" id="hostname_primary" name="hostname_primary" placeholder="Device Name"/>
                                            <div class="pull-right" style="padding-left:4px;">
                                                <button type="button" class="btn btn-primary search_button" data-target="primary" id="search_primary_internal_id_a" name="search_primary_internal_id_a"><?= __('Search For a Device') ?></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="primary_device_select" class="row" style="padding-top:16px; display:none;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="primary_hostname_select" class="form-label"><?= __('Select a Device') ?></label><br>
                                        <div class="input-group">
                                            <select class="form-select hostname_select" data-target="primary" name="primary_hostname_select" id="primary_hostname_select">
                                            </select>
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
                                        <h3>Relationship</h3>
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



                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <h3>Secondary</h3>
                                        <div class="input-group">
                                            <select class="form-select" name="data[attributes][secondary_type]" id="data[attributes][secondary_type]" >
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

                                <div class="row" id="secondary_external_provider_div" style="padding-top:16px; display:none;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label class="form-label" for="data[attributes][secondary_external_provider]"><?= __('External Povider') ?></label>
                                        <input class="form-control" type="text" id="data[attributes][secondary_external_provider]" name="data[attributes][secondary_external_provider]">
                                    </div>
                                </div>

                                <div class="row" id="secondary_external_service_div" style="padding-top:16px; display:none;">
                                    <div class="offset-2 col-8">
                                        <label for="data[attributes][secondary_external_service]" class="form-label"><?= __('External Service') ?></label><br>
                                        <div class="input-group">
                                            <select class="form-select select2" name="data[attributes][secondary_external_service]" id="data[attributes][secondary_external_service]">
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div id="secondary_device_search" class="row" style="padding-top:16px; display:none;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="hostname" class="form-label"><?= __('Search For a Device') ?></label><br>
                                        <div class="input-group">
                                            <input class="form-control" type="text" id="hostname_secondary" name="hostname_secondary" placeholder="Device Name"/>
                                            <div class="pull-right" style="padding-left:4px;">
                                                <button type="button" class="btn btn-primary search_button" data-target="secondary" id="search_secondary_internal_id_a" name="search_secondary_internal_id_a"><?= __('Search For a Device') ?></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="secondary_device_select" class="row" style="padding-top:16px; display:none;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="secondary_hostname_select" class="form-label"><?= __('Select a Device') ?></label><br>
                                        <div class="input-group">
                                            <select class="form-select hostname_select" data-target="secondary" name="secondary_hostname_select" id="secondary_hostname_select">
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" id="secondary_internal_id_b_div" style="padding-top:16px; display:none;">
                                    <div class="offset-2 col-8">
                                        <label for="data[attributes][secondary_internal_id_b]" class="form-label"></label><br>
                                        <div class="input-group">
                                            <select class="form-select" name="data[attributes][secondary_internal_id_b]" id="data[attributes][secondary_internal_id_b]">
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" id="secondary_owner_div" style="padding-top:16px; display:none;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label class="form-label" for="data[attributes][secondary_owner]"><?= __('Owner') ?></label>
                                        <input class="form-control" type="text" id="data[attributes][secondary_owner]" name="data[attributes][secondary_owner]">
                                    </div>
                                </div>

                                <div class="row" id="secondary_description_div" style="padding-top:16px; display:none;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label class="form-label" for="data[attributes][secondary_description]"><?= __('Description') ?></label>
                                        <input class="form-control" type="text" id="data[attributes][secondary_description]" name="data[attributes][secondary_description]">
                                    </div>
                                </div>







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

        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

        $("#data\\[attributes\\]\\[primary_external_service\\]").on("change", function(){
            $(".selectDynamic").select2("destroy");
            $(".selectDynamic").html("<option><option>");
            //changeData( data[ $(this).val() ] );
        });

        $("#data\\[attributes\\]\\[secondary_external_service\\]").on("change", function(){
            $(".selectDynamic").select2("destroy");
            $(".selectDynamic").html("<option><option>");
            //changeData( data[ $(this).val() ] );
        });

        $('#data\\[attributes\\]\\[primary_type\\]').change(function() {
            if ($('#data\\[attributes\\]\\[primary_type\\]').val() == "aws") {
                $('#primary_external_service_div').css("display", "none");
                //$('#primary_external_service_div').html('<div class="offset-2 col-8"><label for="data[attributes][primary_external_service]" class="form-label"><?= __('External Service') ?></label><br><div class="input-group"><select class="form-select select2" name="data[attributes][primary_external_service]" id="data[attributes][primary_external_service]"></select></div></div>');
                $('#data\\[attributes\\]\\[primary_external_provider\\]').val('AWS');
                //$('#data\\[attributes\\]\\[primary_external_service\\]').val('');
                $("#primary_internal_id_b_div").css("display", "none");
                getCloudService('aws', 'primary_external_service');
                $('#primary_external_provider_div').css("display", "block");
                $('#primary_external_service_div').css("display", "block");
                $('#primary_device_search').css("display", "none");
                $('#primary_device_select').css("display", "none");

            } else if ($('#data\\[attributes\\]\\[primary_type\\]').val() == "azure") {
                $('#primary_external_service_div').css("display", "none");
                //$('#primary_external_service_div').html('<div class="offset-2 col-8"><label for="data[attributes][primary_external_service]" class="form-label"><?= __('External Service') ?></label><br><div class="input-group"><select class="form-select select2" name="data[attributes][primary_external_service]" id="data[attributes][primary_external_service]"></select></div></div>');
                $('#data\\[attributes\\]\\[primary_external_provider\\]').val('Azure');
                //$('#data\\[attributes\\]\\[primary_external_service\\]').val('');
                $("#primary_internal_id_b_div").css("display", "none");
                getCloudService('azure', 'primary_external_service');
                $('#primary_external_provider_div').css("display", "block");
                $('#primary_external_service_div').css("display", "block");
                $('#primary_device_search').css("display", "none");
                $('#primary_device_select').css("display", "none");

            } else if ($('#data\\[attributes\\]\\[primary_type\\]').val() == "certificate") {
                $('#data\\[attributes\\]\\[primary_external_provider\\]').val('');
                $('#data\\[attributes\\]\\[primary_external_service\\]').val('');
                $('#data\\[attributes\\]\\[primary_external_service\\]').find('option').remove().end();
                $('#primary_external_provider_div').css("display", "none");
                $('#primary_external_service_div').css("display", "none");
                $("#primary_device_search").css("display", "none");
                $("#primary_owner_div").css("display", "block");
                $("#primary_description_div").css("display", "block");
                $('#primary_device_select').css("display", "none");
                $('#data\\[attributes\\]\\[primary_internal_id_b\\]').find('option').remove().end();
                $("#data\\[attributes\\]\\[primary_internal_id_b\\]").val('');
                getCertificates('primary');

            } else if ($('#data\\[attributes\\]\\[primary_type\\]').val() == "cluster") {
                $('#data\\[attributes\\]\\[primary_external_provider\\]').val('');
                $('#data\\[attributes\\]\\[primary_external_service\\]').val('');
                $('#data\\[attributes\\]\\[primary_external_service\\]').find('option').remove().end();
                $('#primary_external_provider_div').css("display", "none");
                $('#primary_external_service_div').css("display", "none");
                $("#primary_device_search").css("display", "none");
                $("#primary_owner_div").css("display", "block");
                $("#primary_description_div").css("display", "block");
                $('#primary_device_select').css("display", "none");
                $('#data\\[attributes\\]\\[primary_internal_id_b\\]').find('option').remove().end();
                $("#data\\[attributes\\]\\[primary_internal_id_b\\]").val('');
                getClusters('primary');

            } else if ($('#data\\[attributes\\]\\[primary_type\\]').val().includes('_external') || $('#data\\[attributes\\]\\[primary_type\\]').val() == "dnsname" || $('#data\\[attributes\\]\\[primary_type\\]').val() == "other") {
                $('#primary_external_service_div').css("display", "none");
                $('#primary_external_service_div').html('<div class="offset-2 col-8" style="position:relative;"><label class="form-label" for="data[attributes][primary_external_service]">External Service</label><input class="form-control" type="text" id="data[attributes][primary_external_service]" name="data[attributes][primary_external_service]"></div>');
                $('#data\\[attributes\\]\\[primary_external_provider\\]').val('');
                $('#data\\[attributes\\]\\[primary_external_service\\]').val('');
                $('#data\\[attributes\\]\\[primary_external_service\\]').find('option').remove().end();
                $('#primary_external_provider_div').css("display", "block");
                $('#primary_external_service_div').css("display", "block");
                $("#primary_device_search").css("display", "none");
                $("#primary_internal_id_b_div").css("display", "none");
                $('#primary_device_select').css("display", "none");

            } else {
                $('#data\\[attributes\\]\\[primary_external_provider\\]').val('');
                $('#data\\[attributes\\]\\[primary_external_service\\]').val('');
                $('#data\\[attributes\\]\\[primary_external_service\\]').find('option').remove().end();
                $('#primary_external_provider_div').css("display", "none");
                $('#primary_external_service_div').css("display", "none");
                $("#primary_device_search").css("display", "block");
                $("#primary_owner_div").css("display", "block");
                $("#primary_description_div").css("display", "block");
                $('#primary_device_select').css("display", "none");
            }
        });

        $('#data\\[attributes\\]\\[secondary_type\\]').change(function() {
            if ($('#data\\[attributes\\]\\[secondary_type\\]').val() == "aws") {
                $('#secondary_external_service_div').css("display", "none");
                // $('#secondary_external_service_div').html('<div class="offset-2 col-8"><label for="data[attributes][secondary_external_service]" class="form-label"><?= __('External Service') ?></label><br><div class="input-group"><select class="form-select select2" name="data[attributes][secondary_external_service]" id="data[attributes][secondary_external_service]"></select></div></div>');
                $('#data\\[attributes\\]\\[secondary_external_provider\\]').val('AWS');
                // $('#data\\[attributes\\]\\[secondary_external_service\\]').val('');
                $("#secondary_internal_id_b_div").css("display", "none");
                getCloudService('aws', 'secondary_external_service');
                $('#secondary_external_provider_div').css("display", "block");
                $('#secondary_external_service_div').css("display", "block");
                $('#secondary_device_search').css("display", "none");

            } else if ($('#data\\[attributes\\]\\[secondary_type\\]').val() == "azure") {
                $('#secondary_external_service_div').css("display", "none");
                // $('#secondary_external_service_div').html('<div class="offset-2 col-8"><label for="data[attributes][secondary_external_service]" class="form-label"><?= __('External Service') ?></label><br><div class="input-group"><select class="form-select select2" name="data[attributes][secondary_external_service]" id="data[attributes][secondary_external_service]"></select></div></div>');
                $('#data\\[attributes\\]\\[secondary_external_provider\\]').val('Azure');
                // $('#data\\[attributes\\]\\[secondary_external_service\\]').val('');
                $("#secondary_internal_id_b_div").css("display", "none");
                getCloudService('azure', 'secondary_external_service');
                $('#secondary_external_provider_div').css("display", "block");
                $('#secondary_external_service_div').css("display", "block");
                $('#secondary_device_search').css("display", "none");

            } else if ($('#data\\[attributes\\]\\[secondary_type\\]').val() == "cluster") {
                $('#data\\[attributes\\]\\[secondary_external_provider\\]').val('');
                $('#data\\[attributes\\]\\[secondary_external_service\\]').val('');
                $('#data\\[attributes\\]\\[secondary_external_service\\]').find('option').remove().end();
                $('#secondary_external_provider_div').css("display", "none");
                $('#secondary_external_service_div').css("display", "none");
                $("#secondary_device_search").css("display", "none");
                $("#secondary_owner_div").css("display", "block");
                $("#secondary_description_div").css("display", "block");
                $('#data\\[attributes\\]\\[secondary_internal_id_b\\]').find('option').remove().end();
                $("#data\\[attributes\\]\\[secondary_internal_id_b\\]").val('');
                getClusters('secondary');

            } else if ($('#data\\[attributes\\]\\[secondary_type\\]').val() == "certificate") {
                $('#data\\[attributes\\]\\[secondary_external_provider\\]').val('');
                $('#data\\[attributes\\]\\[secondary_external_service\\]').val('');
                $('#data\\[attributes\\]\\[secondary_external_service\\]').find('option').remove().end();
                $('#secondary_external_provider_div').css("display", "none");
                $('#secondary_external_service_div').css("display", "none");
                $("#secondary_device_search").css("display", "none");
                $("#secondary_owner_div").css("display", "block");
                $("#secondary_description_div").css("display", "block");
                $('#secondary_device_select').css("display", "none");
                $('#data\\[attributes\\]\\[secondary_internal_id_b\\]').find('option').remove().end();
                $("#data\\[attributes\\]\\[secondary_internal_id_b\\]").val('');
                getCertificates('secondary');

            } else if ($('#data\\[attributes\\]\\[secondary_type\\]').val().includes('_external') || $('#data\\[attributes\\]\\[secondary_type\\]').val() == "dnsname" || $('#data\\[attributes\\]\\[secondary_type\\]').val() == "other") {
                $('#secondary_external_service_div').css("display", "none");
                $('#data\\[attributes\\]\\[secondary_external_provider\\]').val('');
                $('#data\\[attributes\\]\\[secondary_external_service\\]').val('');
                $('#data\\[attributes\\]\\[secondary_external_service\\]').find('option').remove().end();
                $('#secondary_external_service_div').html('<div class="offset-2 col-8" style="position:relative;"><label class="form-label" for="data[attributes][secondary_external_service]">External Povider</label><input class="form-control" type="text" id="data[attributes][secondary_external_service]" name="data[attributes][secondary_external_service]"></div>');
                $('#secondary_external_provider_div').css("display", "block");
                $('#secondary_external_service_div').css("display", "block");
                $("#secondary_device_search").css("display", "none");
                $("#secondary_internal_id_b_div").css("display", "none");

            } else {
                $('#data\\[attributes\\]\\[secondary_external_provider\\]').val('');
                $('#data\\[attributes\\]\\[secondary_external_service\\]').val('');
                $('#data\\[attributes\\]\\[secondary_external_service\\]').find('option').remove().end();
                $('#secondary_external_provider_div').css("display", "none");
                $('#secondary_external_service_div').css("display", "none");
                $("#secondary_device_search").css("display", "block");
                $("#secondary_owner_div").css("display", "block");
                $("#secondary_description_div").css("display", "block");
            }
        });

        function getClusters($target)
        {
            $url = '<?= url_to('clustersCollection') ?>';
            $.ajax({
              type: 'GET',
              url: $url,
            }).done(function(data) {
                if (data) {
                    $clusters = data.data;
                    $("#" + $target + "_internal_id_b_div").css("display", "block");
                    if ($clusters) {
                        $clusters.forEach((obj) => {
                            $("#data\\[attributes\\]\\[" + $target + "_internal_id_b\\]").append($('<option></option>').val(obj.id).html(obj.attributes.name));
                        });
                    }
                }
            });
        }

        function getCertificates($target)
        {
            $url = '<?= url_to('certificatesCollection') ?>';
            $.ajax({
              type: 'GET',
              url: $url,
            }).done(function(data) {
                if (data) {
                    $certificates = data.data;
                    $("#" + $target + "_internal_id_b_div").css("display", "block");
                    if ($certificates) {
                        $certificates.forEach((obj) => {
                            $("#data\\[attributes\\]\\[" + $target + "_internal_id_b\\]").append($('<option></option>').val(obj.id).html(obj.attributes.name));
                        });
                    }
                }
            });
        }

        function getCloudService($id, $section) {
            var $url = '<?= url_to('home') ?>cloudServices/'+$id;
            console.log("URL: " + $url);
            $.ajax({
              type: 'GET',
              url: $url,
            }).done(function(data) {
                // $('#data\\[attributes\\]\\[' + $section + '\\]').find('option').remove().end();
                if (data) {
                    data.forEach(service => {
                        $("#data\\[attributes\\]\\[" + $section + "\\]").append($('<option></option>').val(service).html(service));
                    });
                } else {
                    console.log("getCloudService fail");
                    $("#data\\[attributes\\]\\[" + $section + "\\]").append($('<option></option>').val("").html('No services returned.'));
                }
            })
            .fail( function(jqXHR, textStatus, errorThrown ) {
                console.log("fail");
            });
        }

        $('.hostname_select').change(function(){
            var deviceId = $(this).val();
            $target = $(this).data('target');
            $("#data\\[attributes\\]\\[" + $target + "_internal_id_a\\]").val(deviceId);
            getDevice(deviceId, 'container', $target);
        });

        // Retrieve the device list once we click Search and activate the "device_id" select
        $('.search_button').click(function($this) {
            $target = $(this).data('target');
            var $url = '<?= url_to('devicesCollection') ?>?properties=devices.id,devices.name,devices.ip,devices.os_group&format=json&devices.name=like'+$("#hostname_"+$target).val() + "&sort=name";
            $("#search_" + $target + "_internal_id_a").html('<div class="spinner-border spinner-border-sm text-light" role="status"><span class="visually-hidden">Loading...</span></div>');
            $include = $('#data\\[attributes\\]\\[' + $target + '_type\\]').val();
            $("#" + $target + "_device_select").css('display', 'none');
            $.ajax({
              type: 'GET',
              url: $url,
            })
            .done(function(data) {
                if (data.data[0]) {
                    $("#hostname_" + $target).val(data.data[0].attributes.name);
                    $('#data\\[attributes\\]\\[' + $target + '_internal_id_b\\]').find('option').remove().end();
                    if (data.data.length === 1) {
                        $("#data\\[attributes\\]\\[" + $target + "_internal_id_a\\]").val(data.data[0].id);
                        getDevice(data.data[0].id, $include, $target);

                    } else if (data.data.length > 1) {
                        $('#' + $target + '_hostname_select').find('option').remove().end();
                        $('#' + $target + '_hostname_select').append($('<option></option>').val("").html("Choose"));
                        data.data.forEach((obj) => {
                            $('#' + $target + '_hostname_select').append($('<option></option>').val(obj.id).html(obj.attributes.name + ' :: ' + obj.attributes.ip + ' :: ' + obj.attributes.os_group));
                        });
                        $("#search_" + $target + "_internal_id_a").html('<?= __('Search For a Device') ?>');
                        $('#' + $target + '_device_select').css("display", "block");
                        $("#" + $target + "_internal_id_b_div").css("display", "none");
                    } else if (data.data == false) {
                        // no data returned from device search
                        $('#' + $target + '_hostname_select').find('option').remove().end();
                        $('#' + $target + '_hostname_select').append($('<option></option>').val("").html("No devices found"));
                        $('#' + $target + '_device_select').css("display", "block");
                        $("#search_" + $target + "_internal_id_a").html('<?= __('Search For a Device') ?>');
                        $("#" + $target + "_internal_id_b_div").css("display", "none");
                    } else {
                        // no data returned from device search
                        $('#' + $target + '_hostname_select').find('option').remove().end();
                        $('#' + $target + '_hostname_select').append($('<option></option>').val("").html("No devices found"));
                        $('#' + $target + '_device_select').css("display", "block");
                        $("#search_" + $target + "_internal_id_a").html('<?= __('Search For a Device') ?>');
                        $("#" + $target + "_internal_id_b_div").css("display", "none");
                    }
                } else {
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
                    // search error
                    $('#' + $target + '_hostname_select').find('option').remove().end();
                    $('#' + $target + '_hostname_select').append($('<option></option>').val("").html("No devices found"));
                    $('#' + $target + '_device_select').css("display", "block");
                    $("#search_" + $target + "_internal_id_a").html('<?= __('Search For a Device') ?>');
                    $("#" + $target + "_internal_id_b_div").css("display", "none");
                }
            })
            .fail( function(jqXHR, textStatus, errorThrown ) {
                alert(jqXHR.responseJSON.errors[0].code + ": " + jqXHR.responseJSON.errors[0].detail);
                console.log("search fail");
            });
        });


        function getDevice($id, $field, $target) {
            $include = 'all';
            if ($field === 'api') { $include = 'server_item'; }
            if ($field === 'application') { $include = 'software'; }
            if ($field === 'authentication') { $include = 'service'; }
            if ($field === 'client') { $include = 'software'; }
            if ($field === 'container') { $include = 'vm'; }
            if ($field === 'database') { $include = 'server_item'; }
            if ($field === 'device') { $include = 'devices'; }
            if ($field === 'program') { $include = 'executable'; }
            if ($field === 'queue') { $include = 'service'; }
            if ($field === 'service') { $include = 'service'; }
            if ($field === 'storage') { $include = 'share'; }
            if ($field === 'website') { $include = 'server_item'; }

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
                    if ($newData) {
                        $newData.forEach((obj) => {
                            if ($field === 'api' && obj.type === 'website') {
                                $("#data\\[attributes\\]\\[" + $target + "_internal_id_b\\]").append($('<option></option>').val(obj.name).html(obj.parent_name + ' :: ' + obj.name + ' (on port ' + obj.port + ')'));
                            }
                            if ($field === 'application') {
                                $("#data\\[attributes\\]\\[" + $target + "_internal_id_b\\]").append($('<option></option>').val(obj.name).html(obj.name));
                            }
                            if ($field === 'authentication') {
                                $("#data\\[attributes\\]\\[" + $target + "_internal_id_b\\]").append($('<option></option>').val(obj.name).html(obj.name));
                            }
                            if ($field === 'client') {
                                $("#data\\[attributes\\]\\[" + $target + "_internal_id_b\\]").append($('<option></option>').val(obj.name).html(obj.name));
                            }
                            if ($field === 'container') {
                                $("#data\\[attributes\\]\\[" + $target + "_internal_id_b\\]").append($('<option></option>').val(obj.name).html(obj.name));
                            }
                            if ($field === 'database' && obj.type === 'database') {
                                $("#data\\[attributes\\]\\[" + $target + "_internal_id_b\\]").append($('<option></option>').val(obj.name).html(obj.parent_name + ' :: ' + obj.name + ' (on port ' + obj.port + ')'));
                            }
                            if ($field === 'program') {
                                $("#data\\[attributes\\]\\[" + $target + "_internal_id_b\\]").append($('<option></option>').val(obj.name).html(obj.name));
                            }
                            if ($field === 'queue') {
                                $("#data\\[attributes\\]\\[" + $target + "_internal_id_b\\]").append($('<option></option>').val(obj.name).html(obj.name));
                            }
                            if ($field === 'service') {
                                $("#data\\[attributes\\]\\[" + $target + "_internal_id_b\\]").append($('<option></option>').val(obj.name).html(obj.name));
                            }
                            if ($field === 'storage') {
                                $("#data\\[attributes\\]\\[" + $target + "_internal_id_b\\]").append($('<option></option>').val(obj.name).html(obj.name));
                            }
                            if ($field === 'website' && obj.type === 'website') {
                                $("#data\\[attributes\\]\\[" + $target + "_internal_id_b\\]").append($('<option></option>').val(obj.name).html(obj.parent_name + ' :: ' + obj.name + ' (on port ' + obj.port + ')'));
                            }
                        });
                        $("#search_" + $target + "_internal_id_a").html('<?= __('Search For a Device') ?>');
                    } else {
                        $("#data\\[attributes\\]\\[" + $target + "_internal_id_b\\]").append($('<option></option>').val("").html("<?= __('No') ?> " + $field + " <?= __('found') ?>"));
                        $("#search_" + $target + "_internal_id_a").html('<?= __('Search For a Device') ?>');
                    }
                } else {
                    console.log("getDevice fail");
                }
            })
            .fail( function(jqXHR, textStatus, errorThrown ) {
                console.log("fail");
            });
            // $("#data\\[attributes\\]\\[" + $target + "_internal_id_b\\]").select2().trigger('change');
            // initSelect();
        }
    });
}
</script>
