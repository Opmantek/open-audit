<?php
# Copyright © 2022 Mark Unwin <mark.unwin@gmail.com>
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
include 'shared/collection_functions.php';
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

                            <?= read_field('full_name', $resource->full_name, $dictionary->columns->full_name, $update) ?>
                            <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, __('Organisation'), $orgs) ?>
                            <?= read_field('password', '*removed*', $dictionary->columns->password, $update) ?>
                            <?= read_field('email', $resource->email, $dictionary->columns->email, $update) ?>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="lang" class="form-label"><?= __('Language') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="lang" name="lang" data-original-value="<?= $resource->lang ?>" disabled>
                                        <option value='cs'><?php echo __('Czech'); ?></option>
                                        <option value='de'><?php echo __('German'); ?></option>
                                        <option value='en'><?php echo __('English'); ?></option>
                                        <option value='es'><?php echo __('Spanish'); ?></option>
                                        <option value='fr'><?php echo __('French'); ?></option>
                                        <option value='pt-br'><?php echo __('Brazilian Portuguese'); ?></option>
                                        <option value='zh-tw'><?php echo __('Traditional Chinese'); ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="pull-right" style="padding-left:4px;">
                                            <div data-attribute="lang" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="lang" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="lang" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="lang" data-dictionary="<?= $dictionary->columns->lang ?>"><span><br /></span></div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="toolbar_style" class="form-label"><?= __('Toolbar Style') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="toolbar_style" name="toolbar_style" data-original-value="<?= $resource->toolbar_style ?>" disabled>
                                        <option value='icontext'><?php echo __('Icon and Text'); ?></option>
                                        <option value='icon'><?php echo __('Icon'); ?></option>
                                        <option value='text'><?php echo __('Text'); ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="pull-right" style="padding-left:4px;">
                                            <div data-attribute="toolbar_style" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="toolbar_style" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="toolbar_style" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="lang" data-dictionary="<?= $dictionary->columns->lang ?>"><span><br /></span></div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="roles" class="form-label"><?= __('Roles') ?></label>
                                    <div class="input-group">
                                     <select multiple size="6" class="form-select" id="roles" name="roles" disabled>
                                        <?php foreach ($included as $role) {
                                            if ($role->type === 'roles') {
                                                $selected = '';
                                                foreach ($resource->roles as $user_role) {
                                                    if ($role->attributes->name === $user_role) {
                                                        $selected = 'selected';
                                                    }
                                                } ?>
                                                <option value="<?= $role->attributes->name ?>" <?= $selected ?>><?= __($role->attributes->name) ?></option>
                                            <?php } ?>
                                        <?php } ?>
                                    </select>
                                        <?php if ($update) { ?>
                                        <div class="pull-right" style="padding-left:4px;">
                                            <div data-attribute="roles" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="roles" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="roles" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="roles" data-dictionary="<?= $dictionary->columns->roles ?>"><span><br /></span></div>
                                </div>
                            </div>

                            <?php // TODO - dashboard and default display columns ?>

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
                                    <?php $fields = array('name', 'full_name', 'org_id', 'edited_by', 'edited_date') ?>
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
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-2 clearfix">
                                        <h6 style="padding-top:10px;"><?= __('Organisations') ?></h6>
                                </div>
                                <div class="col-4">
                                </div>
                                <div class="col-6">
                                    <div class="btn-group btn-group-sm float-end" role="group">
                                        <div class="page-title-right">
                                        <?php if ($user->toolbar_style === 'icontext') { ?>
                                            <button type="button" class="btn btn-light mb-2" title="<?= __('Edit') ?>"><a href="#"><span style="margin-right:6px;" class="fa fa-edit"></span><?= __("Edit") ?></a></button>
                                        <?php } else if ($user->toolbar_style === 'icon') { ?>
                                            <button type="button" class="btn btn-light mb-2" title="<?= __('Edit') ?>"><a href="#"><span class="fa fa-edit"></span></a></button>
                                        <?php } else { ?>
                                            <button type="button" class="btn btn-light mb-2" title="<?= __('Edit') ?>"><a href="#"><?= __("Edit") ?></a></button>
                                        <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <span class="text-center">Note - Selecting a parent will automatically provide access to its children (although it won't be shown here).<br /><br /></span>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                        <thead>
                                            <tr>
                                                <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                                <th><?= __('Name') ?></th>
                                                <th><?= __('Parent') ?></th>
                                                <?php if ($update) { ?>
                                                <th data-orderable="false" class="text-center"><?= __('Grant Permission') ?></th>
                                                <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($orgs as $org) {
                                            $checked = '';
                                            if (in_array($org->id, $resource->orgs)) {
                                                $checked = 'checked';
                                            } ?>
                                            <tr>
                                                <?= collection_button_read('orgs', $org->id) ?>
                                                <td><?= $org->attributes->name ?></td>
                                                <td><?= $org->attributes->parent_name ?></td>
                                                <?php if ($update) { ?>
                                                    <td class="text-center"><input name="orgs" title="orgs" type="checkbox" value="<?= $org->id ?>" <?= $checked ?> disabled></td>
                                                <?php } ?>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row" style="height:46px;">
                                <div class="col-12 clearfix">
                                    <div class="btn-group btn-group-sm" role="group">
                                        <h6 style="padding-top:10px;"><?= __('Roles') ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                        <thead>
                                            <tr>
                                                <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                                <th><?= __('Name') ?></th>
                                                <th><?= __('Description') ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($included as $role) {
                                            if ($role->type === 'roles') { ?>
                                            <tr>
                                                <?= collection_button_read('roles', $role->id) ?>
                                                <td><?= $role->attributes->name ?></td>
                                                <td><?= $role->attributes->description ?></td>
                                            </tr>
                                            <?php }
                                        } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

<script>
$(document).ready(function() {
    $("#lang").val("<?= $resource->lang ?>");
    $("#toolbar_style").val("<?= $resource->toolbar_style ?>");
});
</script>
