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
                            <?= read_field('description', $resource->name, $dictionary->columns->description, $update) ?>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="org_descendants" class="form-label"><?= __('Organisation Descendants') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="org_descendants" name="org_descendants" data-original-value="<?= $resource->org_descendants ?>" disabled>
                                            <option value="y"><?= __('Yes') ?></option>
                                            <option value="n"><?= __('No') ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="float-right" style="padding-left:4px;">
                                            <div data-attribute="org_descendants" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="org_descendants" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="org_descendants" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-right" style="position: absolute; right: 0;" data-attribute="org_descendants" data-dictionary="<?= $dictionary->columns->org_descendants ?>"><span><br></span></div>
                                </div>
                            </div>
                            <?= read_field('purchase_count', $resource->purchase_count, $dictionary->columns->purchase_count, $update) ?>


                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="used_count" class="form-label"><?= __('Used Count') ?></label>
                                    <?php if ($resource->used_count > $resource->purchase_count) {
                                        $valid = "is-invalid";
                                    } else {
                                        $valid = "is-valid";
                                    } ?>
                                        <input disabled type="text" class="form-control <?= $valid ?>" id="used_count" value="<?= $resource->used_count ?>">
                                </div>
                            </div>



                            
                            <?= read_field('match_string', $resource->match_string, $dictionary->columns->match_string, $update) ?>
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
                                    <?php $fields = array('name', 'org_id', 'description', 'org_descendants', 'purchase_count', 'match_string', 'edited_by', 'edited_date') ?>
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
            <br>
            <div class="card">
                <div class="card-header">
                    <div class="row" style="height:46px;">
                        <div class="col-12 clearfix">
                            <h6 style="padding-top:10px;"><?= __('Devices') ?></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center"><?php echo __('View'); ?></th>
                                        <th><?php echo __('Device Name'); ?></th>
                                        <th><?php echo __('Software Name'); ?></th>
                                        <th><?php echo __('Software Version'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($included['devices'] as $item) {
                                        echo "<tr>\n";
                                        echo "<td class=\"text-center\"><a title=\"" . __('Devices') . "\" role=\"button\" class=\"btn btn-sm btn-devices\" href=\"" . url_to('devicesRead', $item->id) . "\"><span style=\"width:1rem;\" title=\"" . __('Devices') . "\" class=\"fa fa-desktop\" aria-hidden=\"true\"></span></a></td>\n";
                                        echo "    <td>" . $item->{'attributes'}->{'devices.name'} . "</td>\n";
                                        echo "    <td>" . $item->{'attributes'}->{'software.name'} . "</td>\n";
                                        echo "    <td>" . $item->{'attributes'}->{'software.version'} . "</td>\n";
                                        echo "</tr>\n";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<script>
$(document).ready(function() {
    $("#org_descendants").val("<?= $resource->org_descendants ?>");
});
</script>