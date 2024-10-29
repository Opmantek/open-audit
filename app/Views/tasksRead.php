<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <?= read_field('name', $resource->name, $dictionary->columns->name, $update) ?>
                            <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, __('Organisation'), $orgs) ?>
                            <?= read_field('description', $resource->description, $dictionary->columns->description, $update) ?>
                            <?= read_select('enabled', $resource->enabled, $dictionary->columns->enabled, $update, __('Enabled'), array()) ?>
                            <?= read_field('last_run', $resource->last_run, $dictionary->columns->last_run) ?>
                            <?= read_field('first_run', $resource->first_run, $dictionary->columns->first_run, $update) ?>
                            <?= read_field('type', $resource->type, $dictionary->columns->type) ?>
                            <?= read_select('sub_resource_id', $resource->sub_resource_id, '', $update, ucwords($resource->type) . ' ' . __('Name'), $included[$resource->type]) ?>

                            <?php if (!empty($included['collectors']) and $resource->type === 'discoveries') { ?>
                                <?= read_select('uuid', $resource->uuid, $dictionary->columns->uuid, $update, __('Collector (UUID)'), $included['collectors']) ?>
                            <?php } else { ?>
                            <input type="hidden" value="<?= $config->uuid ?>" id="uuid" name="uuid" />
                            <?php } ?>

                            <?php if ($resource->type === 'queries' or $resource->type === 'reports' or $resource->type === 'summaries') { ?>
                                <?= read_field('email_address', $resource->email_address, $dictionary->columns->{'email_address'}, $update, __('Email Address')) ?>
                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="format" class="form-label"><?= __('Format') ?></label>
                                        <div class="input-group">
                                            <select class="form-select" id="format" name="format" disabled>
                                                <option value="csv" <?php if ($resource->format === 'csv') { echo "selected"; } ?>>CSV</option>
                                                <option value="json" <?php if ($resource->format === 'json') { echo "selected"; } ?>>JSON</option>
                                                <option value="html" <?php if ($resource->format === 'html') { echo "selected"; } ?>>HTML</option>
                                                <option value="xml" <?php if ($resource->format === 'xml') { echo "selected"; } ?>>XML</option>
                                            </select>
                                            <?php if ($update) { ?>
                                            <div class="pull-right" style="padding-left:4px;">
                                                <div data-attribute="format" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                                <div data-attribute="format" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                                <div data-attribute="format" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="format[]" data-dictionary="<?= $dictionary->columns->format ?>"><span><br></span></div>
                                    </div>
                                </div>
                            <?php } ?>


                            <?php if ($resource->type === 'baselines') { ?>
                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="group_id" class="form-label"><?= __('Group') ?></label>
                                        <div class="input-group">
                                            <select class="form-select" id="group_id" name="group_id" disabled>
                                                <?php foreach ($included['groups'] as $group) { ?>
                                                <option value="<?= intval($group->id) ?>" <?php if (intval($resource->group_id) === intval($group->id)) { echo "selected"; } ?>><?= $group->attributes->name ?></option>
                                                <?php } ?>
                                            </select>
                                            <?php if ($update) { ?>
                                            <div class="pull-right" style="padding-left:4px;">
                                                <div data-attribute="group_id" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                                <div data-attribute="group_id" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                                <div data-attribute="group_id" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="group_id[]" data-dictionary="<?= $dictionary->columns->group_id ?>"><span><br></span></div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if (strpos($resource->minute, "*/") === false) { ?>
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="minute[]" class="form-label"><?= __('Minute') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="minute[]" name="minute[]" multiple disabled>
                                            <?php $split = explode(',', $resource->minute); ?>
                                            <option value="*" <?php if ($resource->minute === '*') { echo "selected"; } ?>>*</option>
                                            <?php for ($i = 0; $i <= 59; $i++) { ?>
                                            <option value="<?= $i ?>" <?php if (in_array((string)$i, $split)) { echo "selected"; } ?>><?= $i ?></option>
                                            <?php } ?>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="pull-right" style="padding-left:4px;">
                                            <div data-attribute="minute[]" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="minute[]" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="minute[]" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="minute[]" data-dictionary="<?= $dictionary->columns->minute ?>"><span><br></span></div>
                                </div>
                            </div>
                            <?php } else { ?>
                                <?= read_field('minute', $resource->minute, $dictionary->columns->minute, $update) ?>
                            <?php } ?>
  
                            <?php if (strpos($resource->hour, "*/") === false) { ?>
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="hour[]" class="form-label"><?= __('Hour') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="hour[]" name="hour[]" multiple disabled>
                                            <?php $split = explode(',', $resource->hour); ?>
                                            <option value="*" <?php if ($resource->hour === '*') { echo "selected"; } ?>>*</option>
                                            <?php for ($i = 0; $i <= 23; $i++) { ?>
                                            <option value="<?= $i ?>" <?php if (in_array((string)$i, $split)) { echo "selected"; } ?>><?= $i ?></option>
                                            <?php } ?>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="pull-right" style="padding-left:4px;">
                                            <div data-attribute="hour[]" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="hour[]" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="hour[]" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="hour[]" data-dictionary="<?= $dictionary->columns->hour ?>"><span><br></span></div>
                                </div>
                            </div>
                            <?php } else { ?>
                                <?= read_field('hour', $resource->hour, $dictionary->columns->hour, $update) ?>
                            <?php } ?>

                            <?php if (strpos($resource->day_of_month, "*/") === false) { ?>
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="day_of_month[]" class="form-label"><?= __('Day of Month') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="day_of_month[]" name="day_of_month[]" multiple disabled>
                                            <?php $split = explode(',', $resource->day_of_month); ?>
                                            <option value="*" <?php if ($resource->day_of_month === '*') { echo "selected"; } ?>>*</option>
                                            <?php for ($i = 0; $i <= 31; $i++) { ?>
                                            <option value="<?= $i ?>" <?php if (in_array((string)$i, $split)) { echo "selected"; } ?>><?= $i ?></option>
                                            <?php } ?>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="pull-right" style="padding-left:4px;">
                                            <div data-attribute="day_of_month[]" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="day_of_month[]" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="day_of_month[]" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="day_of_month[]" data-dictionary="<?= $dictionary->columns->day_of_month ?>"><span><br></span></div>
                                </div>
                            </div>
                            <?php } else { ?>
                                <?= read_field('day_of_month', $resource->day_of_month, $dictionary->columns->day_of_month, $update) ?>
                            <?php } ?>


                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="month[]" class="form-label"><?= __('Month') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="month[]" name="month[]" multiple disabled>
                                            <?php $split = explode(',', $resource->month); ?>
                                            <option value="*" <?php if ($resource->month == '*') { ?> selected<?php } ?>>*</option>
                                            <option value="1" <?php if (in_array('1', $split)) { ?>selected<?php } ?>><?= __('January') ?></option>
                                            <option value="2" <?php if (in_array('2', $split)) { ?>selected<?php } ?>><?= __('February') ?></option>
                                            <option value="3" <?php if (in_array('3', $split)) { ?>selected<?php } ?>><?= __('March') ?></option>
                                            <option value="4" <?php if (in_array('4', $split)) { ?>selected<?php } ?>><?= __('April') ?></option>
                                            <option value="5" <?php if (in_array('5', $split)) { ?>selected<?php } ?>><?= __('May') ?></option>
                                            <option value="6" <?php if (in_array('6', $split)) { ?>selected<?php } ?>><?= __('June') ?></option>
                                            <option value="7" <?php if (in_array('7', $split)) { ?>selected<?php } ?>><?= __('July') ?></option>
                                            <option value="8" <?php if (in_array('8', $split)) { ?>selected<?php } ?>><?= __('August') ?></option>
                                            <option value="9" <?php if (in_array('9', $split)) { ?>selected<?php } ?>><?= __('September') ?></option>
                                            <option value="10" <?php if (in_array('10', $split)) { ?>selected<?php } ?>><?= __('October') ?></option>
                                            <option value="11" <?php if (in_array('11', $split)) { ?>selected<?php } ?>><?= __('November') ?></option>
                                            <option value="12" <?php if (in_array('12', $split)) { ?>selected<?php } ?>><?= __('December') ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="pull-right" style="padding-left:4px;">
                                            <div data-attribute="month[]" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="month[]" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="month[]" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="month[]" data-dictionary="<?= $dictionary->columns->month ?>"><span><br></span></div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="day_of_week[]" class="form-label"><?= __('Day Of Week') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="day_of_week[]" name="day_of_week[]" multiple disabled>
                                            <?php $split = explode(',', $resource->day_of_week); ?>
                                            <option value="*" <?php if ($resource->{'day_of_week'} === '*') { ?> selected<?php } ?>>*</option>
                                            <option value="0" <?php if (in_array('0', $split)) { ?>selected<?php } ?>><?= __('Sunday') ?></option>
                                            <option value="1" <?php if (in_array('1', $split)) { ?>selected<?php } ?>><?= __('Monday') ?></option>
                                            <option value="2" <?php if (in_array('2', $split)) { ?>selected<?php } ?>><?= __('Tuesday') ?></option>
                                            <option value="3" <?php if (in_array('3', $split)) { ?>selected<?php } ?>><?= __('Wednesday') ?></option>
                                            <option value="4" <?php if (in_array('4', $split)) { ?>selected<?php } ?>><?= __('Thursday') ?></option>
                                            <option value="5" <?php if (in_array('5', $split)) { ?>selected<?php } ?>><?= __('Friday') ?></option>
                                            <option value="6" <?php if (in_array('6', $split)) { ?>selected<?php } ?>><?= __('Saturday') ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="pull-right" style="padding-left:4px;">
                                            <div data-attribute="day_of_week[]" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="day_of_week[]" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="day_of_week[]" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="day_of_week[]" data-dictionary="<?= $dictionary->columns->day_of_week ?>"><span><br></span></div>
                                </div>
                            </div>

                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false) ?>
                        </div>
                        <div class="col-6">
                            <div class="offset-2 col-8">
                                <div class="alert alert-success fade show text-center" role="alert">
                                    <?= __('Current date & time is ') . $meta->timestamp . ' (' . $meta->timezone . ')' ?>
                                </div>
                                <?php if (!empty($dictionary->about)) { ?>
                                    <h4 class="text-center"><?= __('About') ?></h4><br>
                                    <?= $dictionary->about ?>
                                <?php } ?>
                                <?php if (!empty($dictionary->notes)) { ?>
                                    <h4 class="text-center"><?= __('Notes') ?></h4><br>
                                    <?= $dictionary->notes ?>
                                <?php } ?>
                                <?php if (!empty($dictionary->columns)) { ?>
                                    <?php $fields = array('name', 'org_id', 'resource', 'type', 'value', 'edited_by', 'edited_date') ?>
                                <h4 class="text-center"><?= __('Fields') ?></h4><br>
                                    <?php foreach ($fields as $key) { ?>
                                    <code><?= $key ?>: </code><?= @$dictionary->columns->{$key} ?><br><br>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
