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
                                <?= create_select('data[attributes][enabled]', __('Enabled'), [], $dictionary->attributes->create) ?>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][type]"><?= __('Type'); ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][type]" id="data[attributes][type]" required>
                                            <option value=""><?= __('Choose') ?></option>
                                            <option value="baselines"><?= __('Baseline') ?></option>
                                            <option value="benchmarks"><?= __('Benchmark') ?></option>
                                            <option value="clouds"><?= __('Cloud Discovery') ?></option>
                                            <option value="discoveries"><?= __('Discovery') ?></option>
                                            <option value="integrations"><?= __('Integration') ?></option>
                                            <option value="reports"><?= __('Report') ?></option>
                                            <option value="queries"><?= __('Query') ?></option>
                                            <!--<option value="summaries"><?= __('Summary') ?></option>-->
                                        </select>
                                    </div>
                                </div>

                                <div id="div_options" style="display:none;"></div>

                                <?php if (empty($config->servers) or (!empty($config->servers->type) and $config->servers->type === 'stand-alone')) { ?>
                                    <?php if (!empty($included['collectors'])) { ?>
                                        <div class="row" style="padding-top:16px;" id="div_collector" style="display:none;">
                                            <div class="offset-2 col-8" style="position:relative;">
                                                <label for="data[attributes][uuid]" class="form-label"><?= __('Collector') ?> <span style="color: #d9534f;">*</span></label>
                                                <select class="form-select" id="data[attributes][uuid]" name="data[attributes][uuid]">
                                                <option value="<?= $config->uuid ?>" selected><?= __('Local') ?></option>
                                                <?php foreach ($included['collectors'] as $item) { ?>
                                                <option value="<?= $item->attributes->uuid ?>"><?= $item->attributes->name ?></option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <input type="hidden" id="data[attributes][uuid]" name="data[attributes][uuid]" value="<?= $config->uuid ?>">
                                    <?php } ?>
                                <?php } else { ?>
                                    <input type="hidden" id="data[attributes][uuid]" name="data[attributes][uuid]" value="<?= $config->uuid ?>">
                                <?php } ?>

                                <?= create_text_field('data[attributes][first_run]', __('First Run'), $dictionary->attributes->create, '', 'date') ?>

                                <?php if (!empty($config->servers) and $config->servers->type === 'collector') { ?>
                                <div class="row" style="padding-top:16px;" id="div_every">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="data[attributes][minute]" class="form-label"><?= __('Every') ?> <span style="color: #d9534f;">*</span></label>
                                        <select required class="form-select" name="data[attributes][minute]" id="data[attributes][minute]">
                                            <option value="*/5"><?= __('5 Minutes') ?></option>
                                            <option value="*/10"><?= __('10 Minutes') ?></option>
                                            <option value="*/15" selected><?= __('15 Minutes') ?></option>
                                            <option value="*/30"><?= __('30 Minutes') ?></option>
                                        </select>
                                    </div>
                                    <input type="hidden" value="*" name="data[attributes][hour]" id="data[attributes][hour]" />
                                    <input type="hidden" value="*" name="data[attributes][day_of_month]" id="data[attributes][day_of_month]" />
                                    <input type="hidden" value="*" name="data[attributes][month]" id="data[attributes][month]" />
                                    <input type="hidden" value="*" name="data[attributes][day_of_week]" id="data[attributes][day_of_week]" />
                                    <input type="hidden" value="0" name="data[attributes][sub_resource_id]" id="data[attributes][sub_resource_id]" />
                                </div>
                                <?php } ?>

                                <?php if (empty($config->servers) or (!empty($config->servers->type) and $config->servers->type === 'stand-alone')) { ?>
                                <div class="row" style="padding-top:16px;" id="div_minute">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="data[attributes][minute][]" class="form-label"><?= __('Minute') ?> <span style="color: #dc3545;">*</span></label><br>
                                        <select class="form-select" multiple name="data[attributes][minute][]" id="data[attributes][minute][]">
                                            <option value="*">*</option>
                                            <option value="0" selected>0</option>
                                            <?php for ($i = 1; $i <= 59; $i++) { ?>
                                            <option value="<?= $i ?>" ><?= $i ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <?php } ?>


                                <?php if (empty($config->servers) or (!empty($config->servers->type) and $config->servers->type === 'stand-alone')) { ?>
                                <div class="row" style="padding-top:16px;" id="div_hour">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="data[attributes][hour][]" class="form-label"><?= __('Hour') ?> <span style="color: #dc3545;">*</span></label><br>
                                        <select class="form-select" multiple name="data[attributes][hour][]" id="data[attributes][hour][]">
                                            <option value="*">*</option>
                                            <option value="0" selected>0</option>
                                            <?php for ($i = 1; $i <= 23; $i++) { ?>
                                            <option value="<?= $i ?>" ><?= $i ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <?php } ?>


                                <?php if (empty($config->servers) or (!empty($config->servers->type) and $config->servers->type === 'stand-alone')) { ?>
                                <div class="row" style="padding-top:16px;" id="div_day_of_month">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="data[attributes][day_of_month][]" class="form-label"><?= __('Day of Month') ?> <span style="color: #dc3545;">*</span></label><br>
                                        <select class="form-select" multiple name="data[attributes][day_of_month][]" id="data[attributes][day_of_month][]">
                                            <option value="*">*</option>
                                            <option value="0" selected>0</option>
                                            <?php for ($i = 1; $i <= 31; $i++) { ?>
                                            <option value="<?= $i ?>" ><?= $i ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <?php } ?>

                                <?php if (empty($config->servers) or (!empty($config->servers->type) and $config->servers->type === 'stand-alone')) { ?>
                                <div class="row" style="padding-top:16px;" id="div_month">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="data[attributes][month][]" class="form-label"><?= __('Month') ?> <span style="color: #dc3545;">*</span></label><br>
                                        <select class="form-select" multiple name="data[attributes][month][]" id="data[attributes][month][]">
                                            <option value="*" selected>*</option>
                                            <option value="1"><?= __('January') ?></option>
                                            <option value="2"><?= __('February') ?></option>
                                            <option value="3"><?= __('March') ?></option>
                                            <option value="4"><?= __('April') ?></option>
                                            <option value="5"><?= __('May') ?></option>
                                            <option value="6"><?= __('June') ?></option>
                                            <option value="7"><?= __('July') ?></option>
                                            <option value="8"><?= __('August') ?></option>
                                            <option value="9"><?= __('September') ?></option>
                                            <option value="10"><?= __('October') ?></option>
                                            <option value="11"><?= __('November') ?></option>
                                            <option value="12"><?= __('December') ?></option>
                                        </select>
                                    </div>
                                </div>
                                <?php } ?>

                                <?php if (empty($config->servers) or (!empty($config->servers->type) and $config->servers->type === 'stand-alone')) { ?>
                                <div class="row" style="padding-top:16px;" id="div_day_of_week">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="data[attributes][day_of_week][]" class="form-label"><?= __('Day Of Week') ?> <span style="color: #dc3545;">*</span></label><br>
                                        <select class="form-select" multiple name="data[attributes][day_of_week][]" id="data[attributes][day_of_week][]">
                                            <option value="*" selected>*</option>
                                            <option value="0"><?= __('Sunday') ?></option>
                                            <option value="1"><?= __('Monday') ?></option>
                                            <option value="2"><?= __('Tuesday') ?></option>
                                            <option value="3"><?= __('Wednesday') ?></option>
                                            <option value="4"><?= __('Thursday') ?></option>
                                            <option value="5"><?= __('Friday') ?></option>
                                            <option value="6"><?= __('Saturday') ?></option>
                                        </select>
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
                                <div class="alert alert-success fade show text-center" role="alert">
                                    <?= __('Current date & time is ') . $meta->timestamp . ' (' . $meta->timezone . ')' ?>
                                </div>
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
    $(document).ready(function () {
        $("#data\\[attributes\\]\\[name\\]").focus();
        $("#data\\[attributes\\]\\[enabled\\]").val('y');
        $('#data\\[attributes\\]\\[first_run\\]').val('2001-01-01');


        $('#data\\[attributes\\]\\[type\\]').change(function() {
            var $type = $(this).val();
            if ($type == "") {
                $("#div_collector").css('display', 'none');
                $("#div_options").css('display', 'none');
                $("#div_options").html('');
            }
            if ($type == "baselines") {
                $("#div_collector").css('display', 'none');
                $("#div_options").css('display', 'block');
                $("#div_options").html(baselines);
            }
            if ($type == "benchmarks") {
                $("#div_collector").css('display', 'none');
                $("#div_options").css('display', 'block');
                $("#div_options").html(benchmarks);
            }
            if ($type == "clouds") {
                $("#div_collector").css('display', 'none');
                $("#div_options").css('display', 'block');
                $("#div_options").html(clouds);
            }
            if ($type == "collector") {
                $("#div_collector").css('display', 'none');
                $("#div_minute").css('display', 'none');
                $("#div_hour").css('display', 'none');
                $("#div_day_of_month").css('display', 'none');
                $("#div_month").css('display', 'none');
                $("#div_day_of_week").css('display', 'none');
                $("#div_every").css('display', 'block');
            }
            if ($type == "discoveries") {
                $("#div_collector").css('display', 'block');
                $("#div_options").css('display', 'block');
                $("#div_options").html(discoveries);
            }
            if ($type == "integrations") {
                $("#div_collector").css('display', 'none');
                $("#div_options").css('display', 'block');
                $("#div_options").html(integrations);
            }
            if ($type == "reports") {
                $("#div_collector").css('display', 'none');
                $("#div_options").css('display', 'block');
                $("#div_options").html(reports);
            }
            if ($type == "queries") {
                $("#div_collector").css('display', 'none');
                $("#div_options").css('display', 'block');
                $("#div_options").html(queries);
            }
            if ($type == "summaries") {
                $("#div_collector").css('display', 'none');
                $("#div_options").css('display', 'block');
                $("#div_options").html(summaries);
            }
        });

        $("form").submit(function(e){
            if ($('#data\\[attributes\\]\\[sub_resource_id\\]').val() == '') {
                alert("No sub resource id");
                e.preventDefault();
            }
        });


        var email_format = '<?= create_text_field('data[attributes][email_address]', __('Email Address'), $dictionary->attributes->create) ?>\
                                <div class=\"row\" style=\"padding-top:16px;\">\
                                    <div class=\"offset-2 col-8\" style=\"position:relative;\">\
                                        <label for=\"data[attributes][format]\" class=\"form-label\"><?= __('Format') ?> <span style=\"color: #dc3545;\">*</span></label><br>\
                                        <select class=\"form-select\" name=\"data[attributes][format]\" id=\"data[attributes][format]\">\
                                            <option value="csv" selected >Excel / CSV</option>\
                                            <option value="json" >JSON</option>\
                                            <option value="html" >HTML</option>\
                                        </select>\
                                    </div>\
                                </div>';

        <?php if (!empty($included['baselines'])) { ?>
        var baselines = '                                <div class="row" style="padding-top:16px;">\
                                    <div class="offset-2 col-8" style="position:relative;">\
                                        <label for="data[attributes][sub_resource_id]" class="form-label"><?= __('Baseline') ?> <span style="color: #dc3545;">*</span></label><br>\
                                        <select class="form-select" name="data[attributes][sub_resource_id]" id="data[attributes][sub_resource_id]">\
                                            <option value=""> </option>\
                                            <?php foreach ($included['baselines'] as $item) { ?><option value="<?= $item->id ?>"><?= $item->attributes->name ?></option><?php } ?>\
                                        </select>\
                                    </div>\
                                </div><br>\
                                                   <div class="offset-2 col-8" style="position:relative;">\
                                        <label for="data[attributes][group_id]" class="form-label"><?= __('Group') ?> <span style="color: #dc3545;">*</span></label><br>\
                                        <select class="form-select" name="data[attributes][group_id]" id="data[attributes][group_id]">\
                                            <option value=""> </option>\
                                            <?php foreach ($included['groups'] as $item) { ?><option value="<?= $item->id ?>"><?= $item->attributes->name ?></option><?php } ?>\
                                        </select>\
                                    </div>\
                                </div>';
        <?php } else { ?>
        var baselines = '                                <div class="row" style="padding-top:16px;">\
                                    <div class="offset-2 col-8" style="position:relative;">\
                                        <label for="data[attributes][sub_resource_id]" class="form-label"><?= __('Baseline') ?></label><br>\
                                        <input readonly required type="text" class="form-control" name="data[attributes][sub_resource_id]" id="data[attributes][sub_resource_id]" value="" placeholder="Please add a Baseline before creating a task." >\
                                    </div>\
                                </div>';
        <?php } ?>

        <?php if (!empty($included['benchmarks'])) { ?>
        var benchmarks = '                                <div class="row" style="padding-top:16px;">\
                                    <div class="offset-2 col-8" style="position:relative;">\
                                        <label for="data[attributes][sub_resource_id]" class="form-label"><?= __('Benchmark') ?> <span style="color: #dc3545;">*</span></label><br>\
                                        <select class="form-select" name="data[attributes][sub_resource_id]" id="data[attributes][sub_resource_id]">\
                                            <option value=""> </option>\
                                            <?php foreach ($included['benchmarks'] as $item) { ?><option value="<?= $item->id ?>"><?= $item->attributes->name ?></option><?php } ?>\
                                        </select>\
                                    </div>\
                                </div>';
        <?php } else { ?>
        var benchmarks = '                                <div class="row" style="padding-top:16px;">\
                                    <div class="offset-2 col-8" style="position:relative;">\
                                        <label for="data[attributes][sub_resource_id]" class="form-label"><?= __('Benchmark') ?></label><br>\
                                        <input readonly required type="text" class="form-control" name="data[attributes][sub_resource_id]" id="data[attributes][sub_resource_id]" value="" placeholder="Please add a Benchmark before creating a task." >\
                                    </div>\
                                </div>';
        <?php } ?>

        <?php if (!empty($included['clouds'])) { ?>
        var clouds = '                                <div class="row" style="padding-top:16px;">\
                                    <div class="offset-2 col-8" style="position:relative;">\
                                        <label for="data[attributes][sub_resource_id]" class="form-label"><?= __('Cloud') ?> <span style="color: #dc3545;">*</span></label><br>\
                                        <select class="form-select" name="data[attributes][sub_resource_id]" id="data[attributes][sub_resource_id]">\
                                            <option value=""> </option>\
                                            <?php foreach ($included['clouds'] as $item) { ?><option value="<?= $item->id ?>"><?= $item->attributes->name ?></option><?php } ?>\
                                        </select>\
                                    </div>\
                                </div>';
        <?php } else { ?>
        var clouds = '                                <div class="row" style="padding-top:16px;">\
                                    <div class="offset-2 col-8" style="position:relative;">\
                                        <label for="data[attributes][sub_resource_id]" class="form-label"><?= __('Cloud') ?></label><br>\
                                        <input readonly required type="text" class="form-control" name="data[attributes][sub_resource_id]" id="data[attributes][sub_resource_id]" value="" placeholder="Please add a Cloud before creating a task." >\
                                    </div>\
                                </div>';
        <?php } ?>

        <?php if (!empty($included['discoveries'])) { ?>
        var discoveries = '                                <div class="row" style="padding-top:16px;">\
                                    <div class="offset-2 col-8" style="position:relative;">\
                                        <label for="data[attributes][sub_resource_id]" class="form-label"><?= __('Discovery') ?> <span style="color: #dc3545;">*</span></label><br>\
                                        <select class="form-select" name="data[attributes][sub_resource_id]" id="data[attributes][sub_resource_id]">\
                                            <option value=""> </option>\
                                            <?php foreach ($included['discoveries'] as $item) { ?><option value="<?= $item->id ?>"><?= $item->attributes->name . " (" . $item->attributes->description . ")" ?></option><?php } ?>\
                                        </select>\
                                    </div>\
                                </div>';
        <?php } else { ?>
        var discoveries = '                                <div class="row" style="padding-top:16px;">\
                                    <div class="offset-2 col-8" style="position:relative;">\
                                        <label for="data[attributes][sub_resource_id]" class="form-label"><?= __('Discovery') ?></label><br>\
                                        <input readonly required type="text" class="form-control" name="data[attributes][sub_resource_id]" id="data[attributes][sub_resource_id]" value="" placeholder="Please add a Discovery before creating a task." >\
                                    </div>\
                                </div>';
        <?php } ?>

        <?php if (!empty($included['integrations'])) { ?>
        var integrations = '                                <div class="row" style="padding-top:16px;">\
                                    <div class="offset-2 col-8" style="position:relative;">\
                                        <label for="data[attributes][sub_resource_id]" class="form-label"><?= __('Integration') ?> <span style="color: #dc3545;">*</span></label><br>\
                                        <select class="form-select" name="data[attributes][sub_resource_id]" id="data[attributes][sub_resource_id]">\
                                            <option value=""> </option>\
                                            <?php foreach ($included['integrations'] as $item) { ?><option value="<?= $item->id ?>"><?= $item->attributes->name ?></option><?php } ?>\
                                        </select>\
                                    </div>\
                                </div>';
        <?php } else { ?>
        var integrations = '                                <div class="row" style="padding-top:16px;">\
                                    <div class="offset-2 col-8" style="position:relative;">\
                                        <label for="data[attributes][sub_resource_id]" class="form-label"><?= __('Integration') ?></label><br>\
                                        <input readonly required type="text" class="form-control" name="data[attributes][sub_resource_id]" id="data[attributes][sub_resource_id]" value="" placeholder="Please add an Integration before creating a task." >\
                                    </div>\
                                </div>';
        <?php } ?>

        <?php if (!empty($included['queries'])) { ?>
        var queries = '                                <div class="row" style="padding-top:16px;">\
                                    <div class="offset-2 col-8" style="position:relative;">\
                                        <label for="data[attributes][sub_resource_id]" class="form-label"><?= __('Query') ?> <span style="color: #dc3545;">*</span></label><br>\
                                        <select class="form-select" name="data[attributes][sub_resource_id]" id="data[attributes][sub_resource_id]">\
                                            <option value=""> </option>\
                                            <?php foreach ($included['queries'] as $item) { ?><option value="<?= $item->id ?>"><?= $item->attributes->name ?></option><?php } ?>\
                                        </select>\
                                    </div>\
                                </div>' + email_format;
        <?php } else { ?>
        var queries = '                                <div class="row" style="padding-top:16px;">\
                                    <div class="offset-2 col-8" style="position:relative;">\
                                        <label for="data[attributes][sub_resource_id]" class="form-label"><?= __('Query') ?></label><br>\
                                        <input readonly required type="text" class="form-control" name="data[attributes][sub_resource_id]" id="data[attributes][sub_resource_id]" value="" placeholder="Please add a Query before creating a task." >\
                                    </div>\
                                </div>';
        <?php } ?>

        <?php if (!empty($included['reports'])) { ?>
        var reports = '                                <div class="row" style="padding-top:16px;">\
                                    <div class="offset-2 col-8" style="position:relative;">\
                                        <label for="data[attributes][sub_resource_id]" class="form-label"><?= __('Report') ?> <span style="color: #dc3545;">*</span></label><br>\
                                        <select class="form-select" name="data[attributes][sub_resource_id]" id="data[attributes][sub_resource_id]">\
                                            <option value=""> </option>\
                                            <?php foreach ($included['reports'] as $item) { ?><option value="<?= $item->id ?>"><?= $item->attributes->name ?></option><?php } ?>\
                                        </select>\
                                    </div>\
                                </div>' + email_format;
        <?php } else { ?>
        var reports = '                                <div class="row" style="padding-top:16px;">\
                                    <div class="offset-2 col-8" style="position:relative;">\
                                        <label for="data[attributes][sub_resource_id]" class="form-label"><?= __('Report') ?></label><br>\
                                        <input readonly required type="text" class="form-control" name="data[attributes][sub_resource_id]" id="data[attributes][sub_resource_id]" value="" placeholder="Please add a Report before creating a task." >\
                                    </div>\
                                </div>';
        <?php } ?>

        <?php if (!empty($included['summaries'])) { ?>
        var summaries = '                                <div class="row" style="padding-top:16px;">\
                                    <div class="offset-2 col-8" style="position:relative;">\
                                        <label for="data[attributes][sub_resource_id]" class="form-label"><?= __('Summary') ?> <span style="color: #dc3545;">*</span></label><br>\
                                        <select class="form-select" name="data[attributes][sub_resource_id]" id="data[attributes][sub_resource_id]">\
                                            <option value=""> </option>\
                                            <?php foreach ($included['summaries'] as $item) { ?><option value="<?= $item->id ?>"><?= $item->attributes->name ?></option><?php } ?>\
                                        </select>\
                                    </div>\
                                </div>' + email_format;
        <?php } else { ?>
        var summaries = '                                <div class="row" style="padding-top:16px;">\
                                    <div class="offset-2 col-8" style="position:relative;">\
                                        <label for="data[attributes][sub_resource_id]" class="form-label"><?= __('Summary') ?></label><br>\
                                        <input readonly required type="text" class="form-control" name="data[attributes][sub_resource_id]" id="data[attributes][sub_resource_id]" value="" placeholder="Please add a Summary before creating a task." >\
                                    </div>\
                                </div>';
        <?php } ?>
    });
}
</script>
