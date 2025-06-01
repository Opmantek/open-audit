<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
include 'shared/common_functions.php';
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
                            <?= read_field('name', $resource->name, $dictionary->columns->name, false, '', '', '', '', $meta->collection) ?>
                            <?= read_field('description', $resource->description, $dictionary->columns->description, false, '', '', '', '', $meta->collection) ?>

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



                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false, '', '', '', '', $meta->collection) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false, '', '', '', '', $meta->collection) ?>
                        </div>
                        <div class="col-6">
                            <br>
                            <div class="offset-2 col-8">
                                <?= aboutNotesDiv ($meta->collection, $dictionary) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
