<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
if (empty($update) or $resource->editable !== 'y') {
    $update = false;
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $data[0]->attributes->name) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <?= read_field('name', $resource->name, $dictionary->columns->name, false) ?>
                            <?= read_field('description', $resource->description, $dictionary->columns->description, false) ?>

                                <div class="row" style="padding-top:16px">
                                    <div class="offset-2 col-8">
                                        <label for="collector_name" class="form-label"><?= __('Collector Name') ?></label><br>
                                        <input class="form-control" type="text" id="collector_name" name="collector_name" value="<?= $values->{'collector_name'} || '' ?>" />
                                    </div>
                                </div>


                                <div class="row" style="padding-top:16px">
                                    <div class="offset-2 col-8">
                                        <label for="host" class="form-label"><?= __('Host') ?></label><br>
                                        <input class="form-control" type="text" id="host" name="host" value="<?= $values->{'host'} || 'http://' ?>" />
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px">
                                    <div class="offset-2 col-8">
                                        <label for="community" class="form-label"><?= __('Community') ?></label><br>
                                        <input class="form-control" type="text" id="community" name="community" value="<?= $values->{'community'} || '/open-audit' ?>" />
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px">
                                    <div class="offset-2 col-8">
                                        <label for="username" class="form-label"><?= __('Username') ?></label><br>
                                        <input class="form-control" type="text" id="username" name="username" value="<?= $values->{'username'} || '' ?>" />
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px">
                                    <div class="offset-2 col-8">
                                        <label for="password" class="form-label"><?= __('Password') ?></label><br>
                                        <input class="form-control" type="text" id="password" name="password" value="<?= $values->{'password'} || '' ?>" />
                                    </div>
                                </div>



                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false) ?>
                        </div>
                        <div class="col-6">
                            <br>
                            <div class="offset-2 col-8">
                                <?php if (!empty($dictionary->about)) { ?>
                                    <h4 class="text-center"><?= __('About') ?></h4><br>
                                    <?= $dictionary->about ?>
                                <?php } ?>
                                <?php if (!empty($dictionary->notes)) { ?>
                                    <h4 class="text-center"><?= __('Notes') ?></h4><br>
                                    <?= $dictionary->notes ?>
                                <?php } ?>
                                <?php if (!empty($dictionary->columns)) { ?>
                                    <?php $fields = array('name', 'description', 'editable', 'type', 'value', 'edited_by', 'edited_date') ?>
                                <h4 class="text-center"><?= __('Fields') ?></h4><br>
                                    <?php foreach ($fields as $key) { ?>
                                    <code><?= $key ?>: </code><?= $dictionary->columns->{$key} ?><br><br>
                                    <?php } ?>
                                <?php } ?>
                                <?php if ($resource->name === 'log_level') { ?>
                                <p>
                                    You can enable error logging by setting a threshold over zero. The threshold determines what gets logged. Any values below or equal to the threshold will be logged. Threshold options are:<br>
                                    <ol start="0">
                                        <li>Disables logging - Error logging <b>turned off</b>.</li>
                                        <li>Emergency Messages - System is unusable.</li>
                                        <li>Alert Messages - Action Must Be Taken Immediately.</li>
                                        <li>Critical Messages - Application component unavailable, unexpected exception.</li>
                                        <li>Runtime Errors - Don't need immediate action, but should be monitored.</li>
                                        <li>Warnings - Exceptional occurrences that are not errors, <b>the default</b>.</li>
                                        <li>Notices - Normal but significant events.</li>
                                        <li>Info - Interesting events, like user logging in, etc.</li>
                                        <li>Debug - Detailed debug information.</li>
                                        <li>All Messages.</li>
                                    </ol>
                                </p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
