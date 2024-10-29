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
                    <form class="form-horizontal" method="post" action="<?= url_to($meta->collection . 'Create') ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="hidden" value="<?= $meta->access_token ?>" id="data[access_token]" name="data[access_token]" />
                                <input type="hidden" value="" id="data[attributes][os_family]" name="data[attributes][os_family]" />
                                <input type="hidden" value="" id="data[attributes][os_version]" name="data[attributes][os_version]" />

                                <?= create_text_field('data[attributes][name]', __('Name'), $dictionary->attributes->create) ?>


                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][os]"><?= __('OS'); ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][os]" id="data[attributes][os]" required>
                                            <option value=""><?= __('Choose') ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][type]"><?= __('Type'); ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][type]" id="data[attributes][type]" required>
                                            <option value=""><?= __('Choose (select OS first)') ?></option>
                                        </select>
                                    </div>
                                </div>

                                <?= create_select('data[attributes][install]', __('Install OpenScap if required'), null, $dictionary->attributes->create) ?>


                            </div>
                            <div class="col-md-6">

                            <?= create_text_field('data[attributes][description]', __('Description'), $dictionary->attributes->create) ?>
                            <?= create_select('data[attributes][org_id]', __('Organisation'), $orgs, $dictionary->attributes->create) ?>


                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="data[attributes][day_of_week][]" class="form-label"><?= __('Day Of Week') ?> <span style="color: #dc3545;">*</span></label><br>
                                        <select class="form-select" multiple name="data[attributes][day_of_week][]" id="data[attributes][day_of_week][]">
                                            <option value="*">*</option>
                                            <option value="0"><?= __('Sunday') ?></option>
                                            <option value="1" selected><?= __('Monday') ?></option>
                                            <option value="2"><?= __('Tuesday') ?></option>
                                            <option value="3"><?= __('Wednesday') ?></option>
                                            <option value="4"><?= __('Thursday') ?></option>
                                            <option value="5"><?= __('Friday') ?></option>
                                            <option value="6"><?= __('Saturday') ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="data[attributes][hour][]" class="form-label"><?= __('Hour') ?> <span style="color: #dc3545;">*</span></label><br>
                                        <select class="form-select" name="data[attributes][hour][]" id="data[attributes][hour][]">
                                            <option value="0">0</option>
                                            <option value="1" selected>1</option>
                                            <?php for ($i = 2; $i <= 23; $i++) { ?>
                                            <option value="<?= $i ?>" ><?= $i ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                    <br>
                                        <?= html_entity_decode($dictionary->notes) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="offset-1 col-md-10">
                                <br>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;"><?= __('View') ?></th>
                                            <th><?= __('Device') ?></th>
                                            <th><?= __('IP') ?></th>
                                            <th><?= __('OS') ?></th>
                                            <th style="text-align: center;"><?= __('OpenScap is Installed') ?></th>
                                            <th style="text-align: center;"><?= __('Working Credentials') ?></th>
                                            <th><?= __('Organisation') ?></th>
                                            <th data-orderable="false" class="text-center"><?= __('Select') ?>
                                                <input aria-label="<?=__('Select All') ?>" type="checkbox" name="select_all" id="select_all">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="devicesTable">
                                    </tbody>
                                </table>
                                <br><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="offset-2 col-8">
                                    <label for="submit" class="form-label">&nbsp;</label>
                                    <button id="submit" name="submit" type="submit" class="btn btn-primary"><?= __('Submit'); ?></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>





        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {
        $("#data\\[attributes\\]\\[name\\]").focus();
        $('#data\\[attributes\\]\\[install\\]').val('y');
        <?php
        $oss = [];
        foreach ($included['ssg_definitions'] as $ssg) {
            if (strpos($ssg->os_family, 'Windows') !== false) {
                $oss[] = $ssg->os_family;
            } else {
                $oss[] = $ssg->os_family . ' ' . $ssg->os_version;
            }
        }
        $oss = array_unique($oss);
        foreach ($oss as $os) {
            echo "\$(\"#data\\\\[attributes\\\\]\\\\[os\\\\]\").append(\$('<option>', { value: '$os', text: '$os' }));\n        ";
        }
        echo "\n";
        ?>

        $(document).on('change', "#data\\[attributes\\]\\[os\\]", function () {
            $("#data\\[attributes\\]\\[type\\]").children().remove();
            if ($("#data\\[attributes\\]\\[os\\]").val() != "") {
                $("#data\\[attributes\\]\\[type\\]").append($('<option>', { value: '', text: 'Choose' }));
            } else {
                $("#data\\[attributes\\]\\[type\\]").append($('<option>', { value: '', text: 'Choose (select OS first)' }));
            }
            
            <?php
            foreach ($oss as $os) {
                echo "        if ($(\"#data\\\\[attributes\\\\]\\\\[os\\\\]\").val() == '$os') {\n";
                foreach ($included['ssg_definitions'] as $ssg) {
                    if ($ssg->os_family . ' ' . $ssg->os_version === $os or $ssg->os_family === $os) {
                        echo "            \$(\"#data\\\\[attributes\\\\]\\\\[type\\\\]\").append(\$('<option>', { value: '$ssg->title', text: '$ssg->title' }));\n        ";
                    }
                }
                echo "        }\n";
            }
            ?>
            var str = $("#data\\[attributes\\]\\[os\\]").val();
            var ret = str.split(" ");
            $("#data\\[attributes\\]\\[os_family\\]").val(ret[0]);
            $("#data\\[attributes\\]\\[os_version\\]").val(ret[1]);
            if (ret[0] == 'Windows') {
                $("#data\\[attributes\\]\\[hour\\]\\[\\]").attr("disabled", true);

            }
        });

        $name = '';
        $description = '';
        $(document).on('change', "#data\\[attributes\\]\\[type\\]", function () {
            if ($("#data\\[attributes\\]\\[name\\]").val() == "") {
                $("#data\\[attributes\\]\\[name\\]").val($("#data\\[attributes\\]\\[type\\]").val());
                $name = 'set';

            } else if ($("#data\\[attributes\\]\\[name\\]").val() != "" && $name == 'set') {
                $("#data\\[attributes\\]\\[name\\]").val($("#data\\[attributes\\]\\[type\\]").val());

            } else if ($("#data\\[attributes\\]\\[description\\]").val() == "") {
                $("#data\\[attributes\\]\\[description\\]").val($("#data\\[attributes\\]\\[type\\]").val());
                $description = 'set';

            } else if ($("#data\\[attributes\\]\\[description\\]").val() != "" && $description == 'set') {
                $("#data\\[attributes\\]\\[description\\]").val($("#data\\[attributes\\]\\[type\\]").val());

            }
        });

        $(document).on('change', "#data\\[attributes\\]\\[os\\]", function () {
            $("#devicesTable").empty();
            $value = $("#data\\[attributes\\]\\[os\\]").val();
            $properties = "?devices.os_family=" + $value.replace(' ', '&devices.os_version=') + "&format=json";
            if ($value.indexOf('Windows') !== -1) {
                $properties = "?devices.os_family=" + $value + "%25&devices.os_version=&format=json";
            }
            $.ajax({
                type: "GET",
                url: '<?= base_url()?>index.php/queries/<?= $included['query'] ?>/execute' + $properties,
                success: function (data) {
                    populate_device_table(data.data);
                },
                error: function (data) {
                    // console.log(JSON.parse(data.responseText));
                    alert(JSON.parse(data.responseText));
                }
            });
        });

        function populate_device_table(devices) {
            $("#devicesTable").append('<fieldset>');
            for (const device of devices) {
                installed = '<span class="fa-solid fa-xmark text-danger"><\/span>';
                if (device.attributes['software.name'] != '') {
                    installed = '<span class="fa-solid fa-check text-success"><\/span>';
                }
                disabled = '<td><\/td>';
                credentials = '<span class="fa-solid fa-xmark text-danger"><\/span>';
                if (device.attributes['c1.type'].includes('ssh') || device.attributes['c2.type'].includes('ssh') || device.attributes['c3.type'].includes('ssh')) {
                    disabled = '<td style="text-align: center;"><input aria-label="<?= __('Select') ?>" type="checkbox" id="data[attributes][devices][' + device.id + ']" value="' + device.id + '" name="data[attributes][devices][' + device.id + ']" checked><\/td>';
                    credentials = '<span class="fa-solid fa-check text-success"><\/span>';
                }
                if (device.attributes['devices.os_family'].indexOf('Windows') !== -1) {
                    installed = 'N/A';
                    credentials = 'N/A';
                    disabled = '<td style="text-align: center;"><input aria-label="<?= __('Select') ?>" type="checkbox" id="data[attributes][devices][' + device.id + ']" value="' + device.id + '" name="data[attributes][devices][' + device.id + ']" checked><\/td>';
                }
                $("#devicesTable").append('<tr>\
                <td class="text-center"><a title="<?= __('View') ?>" role="button" class="btn <?= $GLOBALS['button'] ?> btn-devices" href="<?= $meta->baseurl ?>index.php/devices/' + device.id + '"><span style="width:1rem;" title="<?= __('View') ?>" class="fa fa-desktop" aria-hidden="true"><\/span><\/a><\/td>\
                <td><strong>' + device.attributes['devices.name'] + '<\/strong><\/td>\
                <td>' + device.attributes['devices.ip'] + '<\/td>\
                <td>' + device.attributes['devices.os_family'] + ' ' + device.attributes['devices.os_version'] + '<\/td>\
                <td style="text-align: center;">' + installed + '<\/td>\
                <td style="text-align: center;">' + credentials + '<\/td>\
                <td>' + device.attributes['orgs.name'] + '<\/td>\
                ' + disabled + '\
                <\/tr>');
            }
            $("#devicesTable").append('<\/fieldset>');
        }













    });
};
</script>
