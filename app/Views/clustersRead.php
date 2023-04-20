<?php
# Copyright © 2022 Mark Unwin <mark.unwin@gmail.com>
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

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="type" class="col-sm-4 control-label"><?= __('Type') ?></label><br />
                                    <div class="col-sm-7 input-group">
                                        <select class="form-select" id="type" name="type" data-original-value="<?= $resource->type ?>" disabled>
                                            <option value="" label=" "></option>
                                            <option value="high availability"><?= __('High Availability') ?></option>
                                            <option value="load balancing"><?= __('Load Balancing') ?></option>
                                            <option value="performance"><?= __('Performance') ?></option>
                                            <option value="storage"><?= __('Storage') ?></option>
                                            <option value="other"><?= __('Other') ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="pull-right" style="padding-left:4px;">
                                            <div data-attribute="type" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="type" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="type" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } else { ?>
                                        <div class="pull-right" style="padding-left:30px; padding-top:5px;">
                                            <div data-attribute="name" class="btn btn-outline" style="color:fff;"></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="type" data-dictionary="<?= $dictionary->columns->type ?>"><span><br /></span></div>
                                </div>
                            </div>


                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="purpose" class="col-sm-4 control-label"><?= __('Purpose') ?></label><br />
                                    <div class="col-sm-7 input-group">
                                        <select class="form-select" id="purpose" name="purpose" data-original-value="<?= $resource->purpose ?>" disabled>
                                            <option value="" label=" "></option>
                                            <option value="application"><?= __('Application') ?></option>
                                            <option value="compute"><?= __('Compute') ?></option>
                                            <option value="database"><?= __('Database') ?></option>
                                            <option value="storage"><?= __('Storage') ?></option>
                                            <option value="virtualisation"><?= __('Virtualisation') ?></option>
                                            <option value="web"><?= __('Web') ?></option>
                                            <option value="other"><?= __('Other') ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="pull-right" style="padding-left:4px;">
                                            <div data-attribute="purpose" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="purpose" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="purpose" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } else { ?>
                                        <div class="pull-right" style="padding-left:30px; padding-top:5px;">
                                            <div data-attribute="purpose" class="btn btn-outline" style="color:fff;"></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="purpose" data-dictionary="<?= $dictionary->columns->purpose ?>"><span><br /></span></div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="status" class="col-sm-4 control-label"><?= __('Status') ?></label><br />
                                    <div class="col-sm-7 input-group">
                                        <select class="form-select" id="status" name="status" data-original-value="<?= $resource->{'status'} ?>" disabled>
                                            <option value="" label=" "></option>
                                            <option value="active"><?= __('Active') ?></option>
                                            <option value="inactive"><?= __('Inactive') ?></option>
                                            <option value="other"><?= __('Other') ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="pull-right" style="padding-left:4px;">
                                            <div data-attribute="status" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="status" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="status" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } else { ?>
                                        <div class="pull-right" style="padding-left:30px; padding-top:5px;">
                                            <div data-attribute="status" class="btn btn-outline" style="color:fff;"></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="status" data-dictionary="<?= $dictionary->columns->status ?>"><span><br /></span></div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="scaling" class="col-sm-4 control-label"><?= __('Scaling') ?></label><br />
                                    <div class="col-sm-7 input-group">
                                        <select class="form-select" id="scaling" name="scaling" data-original-value="<?= $resource->{'scaling'} ?>" disabled>
                                            <option value="" label=" "></option>
                                            <option value="auto"><?= __('Auto') ?></option>
                                            <option value="fixed"><?= __('Fixed') ?></option>
                                            <option value="other"><?= __('Other') ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="pull-right" style="padding-left:4px;">
                                            <div data-attribute="scaling" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="scaling" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="scaling" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } else { ?>
                                        <div class="pull-right" style="padding-left:30px; padding-top:5px;">
                                            <div data-attribute="scaling" class="btn btn-outline" style="color:fff;"></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="scaling" data-dictionary="<?= $dictionary->columns->scaling ?>"><span><br /></span></div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="configuration" class="col-sm-4 control-label"><?= __('Configuration') ?></label><br />
                                    <div class="col-sm-7 input-group">
                                        <select class="form-select" id="configuration" name="configuration" data-original-value="<?= $resource->configuration ?>" disabled>
                                            <option value="" label=" "></option>
                                            <option value="active/active"><?= __('Active / Active') ?></option>
                                            <option value="active/passive"><?= __('Active / Passive') ?></option>
                                            <option value="N+1"><?= __('N+1') ?></option>
                                            <option value="N+M"><?= __('N+M') ?></option>
                                            <option value="N-to-1"><?= __('N-to-1') ?></option>
                                            <option value="N-to-N"><?= __('N-to-N') ?></option>
                                            <option value="other"><?= __('Other') ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="pull-right" style="padding-left:4px;">
                                            <div data-attribute="configuration" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="configuration" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="configuration" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } else { ?>
                                        <div class="pull-right" style="padding-left:30px; padding-top:5px;">
                                            <div data-attribute="configuration" class="btn btn-outline" style="color:fff;"></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="configuration" data-dictionary="<?= $dictionary->columns->configuration ?>"><span><br /></span></div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="environment" class="col-sm-4 control-label"><?= __('Environment') ?></label><br />
                                    <div class="col-sm-7 input-group">
                                        <select class="form-select" id="environment" name="environment" data-original-value="<?= $resource->{'environment'} ?>" disabled>
                                        <option value="" label=" "></option>
                                        <?php foreach ($included['types'] as $type) { ?>
                                            <option value="<?= $type->{'attributes'}->{'value'} ?>"><?= $type->{'attributes'}->{'name'} ?></option>
                                        <?php } ?>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="pull-right" style="padding-left:4px;">
                                            <div data-attribute="environment" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="environment" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="environment" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } else { ?>
                                        <div class="pull-right" style="padding-left:30px; padding-top:5px;">
                                            <div data-attribute="environment" class="btn btn-outline" style="color:fff;"></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="environment" data-dictionary="<?= $dictionary->columns->environment ?>"><span><br /></span></div>
                                </div>
                            </div>












                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false) ?>
                        </div>
                        <div class="col-6">
                            <br />
                            <div class="offset-2 col-8">
                                <?php if (!empty($dictionary->about)) { ?>
                                    <h4 class="text-center"><?= __('About') ?></h4><br />
                                    <?= $dictionary->about ?>
                                <?php } ?>
                                <?php if (!empty($dictionary->notes)) { ?>
                                    <h4 class="text-center"><?= __('Notes') ?></h4><br />
                                    <?= $dictionary->notes ?>
                                <?php } ?>
                                <?php if (!empty($dictionary->columns)) { ?>
                                    <?php $fields = array('name', 'org_id', 'description', 'edited_by', 'edited_date') ?>
                                <h4 class="text-center"><?= __('Fields') ?></h4><br />
                                    <?php foreach ($fields as $key) { ?>
                                    <code><?= $key ?>: </code><?= @$dictionary->columns->{$key} ?><br /><br />
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <div class="card">
                <div class="card-header">
                    <div class="row" style="height:46px;">
                        <div class="col-12 clearfix">
                            <h6 style="padding-top:10px;"><?= __('Hosts') ?></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                    <thead>
                                        <tr>
                                            <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                            <th><?= __('Name') ?></th>
                                            <th><?= __('IP') ?></th>
                                            <th><?= __('OS') ?></th>
                                            <th><?= __('Hyperthreading') ?></th>
                                            <th><?= __('Physical Count') ?></th>
                                            <th><?= __('Core Count') ?></th>
                                            <th><?= __('Logical Count') ?></th>
                                            <th><?= __('Cluster Role') ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if (!empty($included['members'])) { ?>
                                        <?php foreach ($included['members'] as $device) { ?>
                                        <tr>
                                            <td class="text-center"><a title="<?= __('View Device') ?>" role="button" class="btn btn-sm btn-devices" href="<?= url_to('devicesRead', $device->attributes->{'devices.id'}) ?>"><span style="width:1rem;" title="<?= __('Devices') ?>" class="fa fa-desktop" aria-hidden="true"></span></a></td>
                                            <td><?= $device->attributes->{'devices.name'} ?></td>
                                            <td><?= $device->attributes->{'devices.ip'} ?></td>
                                            <td><?= $device->attributes->{'devices.os_family'} ?></td>
                                            <td><?= $device->attributes->{'processor.hyperthreading'} ?></td>
                                            <td><?= $device->attributes->{'processor.physical_count'} ?></td>
                                            <td><?= $device->attributes->{'processor.core_count'} ?></td>
                                            <td><?= $device->attributes->{'processor.logical_count'} ?></td>
                                            <td><?= $device->attributes->{'clusters_devices.role'} ?></td>
                                        </tr>
                                        <?php } ?>
                                    <?php } ?>
                                    </tbody>
                                </table>
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
                            <h6 style="padding-top:10px;"><?= __('Guests') ?></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                    <thead>
                                        <tr>
                                            <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                            <th><?= __('Guest Name') ?></th>
                                            <th><?= __('Allocated CPU') ?></th>
                                            <th><?= __('Allocated Memory') ?></th>
                                            <th><?= __('OS') ?></th>
                                            <th><?= __('Status') ?></th>
                                            <th><?= __('Servers') ?></th>
                                            <th><?= __('Host Name') ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if (!empty($included['guests'])) { ?>
                                        <?php foreach ($included['guests'] as $device) { ?>
                                        <tr>
                                            <td class="text-center"><a title="<?= __('View Device') ?>" role="button" class="btn btn-sm btn-devices" href="<?= url_to('devicesRead', $device->details->guest_system_id) ?>"><span style="width:1rem;" title="<?= __('Devices') ?>" class="fa fa-desktop" aria-hidden="true"></span></a></td>
                                            <td><?= @$device->hostname ?></td>
                                            <td><?= @$device->details->cpu_count ?></td>
                                            <td><?= @$device->details->memory_count ?></td>
                                            <td><?= @$device->os_family ?></td>
                                            <td><?= @$device->details->status ?></td>
                                            <td><?= @$device->servers ?></td>
                                            <td><?= @$device->{'host.name'} ?></td>
                                        </tr>
                                        <?php } ?>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
<pre>
    <?php print_r($included) ?>
</pre>
<script>
$(document).ready(function() {
    $("#type").val("<?= $resource->type ?>");
    $("#purpose").val("<?= $resource->purpose ?>");
    $("#status").val("<?= $resource->status ?>");
    $("#scaling").val("<?= $resource->scaling ?>");
    $("#configuration").val("<?= $resource->configuration ?>");
    $("#environment").val("<?= $resource->environment ?>");
});
</script>