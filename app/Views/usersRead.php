<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
include 'shared/common_functions.php';
include 'shared/collection_functions.php';
$self_update = $update;
if ($resource->id === $user->id) {
    $self_update = true;
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <?= read_field('name', $resource->name, $dictionary->columns->name, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_field('full_name', $resource->full_name, $dictionary->columns->full_name, $self_update, '', '', '', '', $meta->collection) ?>
                            <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, '', $orgs, $meta->collection) ?>
                            <?= read_field('password', '', $dictionary->columns->password, $self_update, '', '', '', 'password', $meta->collection) ?>
                            <?= read_field('email', $resource->email, $dictionary->columns->email, $self_update, '', '', '', '', $meta->collection) ?>
                            <?php
                            $value = $resource->devices_default_display_columns;
                            if (empty($value)) {
                                $value = __('Please set using') . ' ' . __('Manage') . ' -> ' . __('Devices') . ' -> ' . __('List Devices') . '.';
                            }
                            ?>
                            <?= read_field('devices_default_display_columns', $resource->devices_default_display_columns, $dictionary->columns->devices_default_display_columns, $update, '', '', $value, '', $meta->collection) ?>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <?= read_field_header($meta->collection, 'lang', $dictionary->columns->lang, 'Language') ?>
                                    <div class="input-group">
                                        <select class="form-select" id="lang" name="lang" data-original-value="<?= $resource->lang ?>" disabled>
                                        <option value='cs' <?php if ($resource->lang === 'cs') { echo 'selected'; } ?>><?php echo __('Czech'); ?></option>
                                        <option value='de' <?php if ($resource->lang === 'de') { echo 'selected'; } ?>><?php echo __('German'); ?></option>
                                        <option value='en' <?php if ($resource->lang === 'en') { echo 'selected'; } ?>><?php echo __('English'); ?></option>
                                        <option value='es' <?php if ($resource->lang === 'es') { echo 'selected'; } ?>><?php echo __('Spanish'); ?></option>
                                        <option value='fr' <?php if ($resource->lang === 'fr') { echo 'selected'; } ?>><?php echo __('French'); ?></option>
                                        <option value='pt-br' <?php if ($resource->lang === 'pt-br') { echo 'selected'; } ?>><?php echo __('Brazilian Portuguese'); ?></option>
                                        <option value='zh-tw' <?php if ($resource->lang === 'zh-tw') { echo 'selected'; } ?>><?php echo __('Traditional Chinese'); ?></option>
                                        </select>
                                        <?php if ($self_update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="lang" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="lang" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="lang" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <?= read_field_header($meta->collection, 'toolbar_style', $dictionary->columns->toolbar_style) ?>
                                    <div class="input-group">
                                        <select class="form-select" id="toolbar_style" name="toolbar_style" data-original-value="<?= $resource->toolbar_style ?>" disabled>
                                        <option value='icontext'><?php echo __('Icon and Text'); ?></option>
                                        <option value='icon'><?php echo __('Icon'); ?></option>
                                        <option value='text'><?php echo __('Text'); ?></option>
                                        </select>
                                        <?php if ($self_update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="toolbar_style" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="toolbar_style" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="toolbar_style" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <?= read_field_header($meta->collection, 'list_table_format', $dictionary->columns->list_table_format, 'Table Sizing') ?>
                                    <div class="input-group">
                                        <select class="form-select" id="list_table_format" name="list_table_format" data-original-value="<?= $resource->list_table_format ?>" disabled>
                                        <option value=''><?= __('Standard') ?></option>
                                        <option value='compact'><?= __('Compact') ?></option>
                                        </select>
                                        <?php if ($self_update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="list_table_format" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="list_table_format" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="list_table_format" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <?= read_field_header($meta->collection, 'roles', $dictionary->columns->roles) ?>
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
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="roles" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="roles" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="roles" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <?= read_field_header($meta->collection, 'orgs', $dictionary->columns->orgs) ?>
                                    <div class="input-group">
                                     <select multiple size="6" class="form-select" id="orgs" name="orgs" disabled>
                                        <?php foreach ($orgs as $org) {
                                            $selected = '';
                                            if (in_array(intval($org->id), $resource->orgs)) {
                                                $selected = 'selected';
                                            }
                                            echo '<option value="' . $org->id . "\" $selected >" . __($org->attributes->name) . "</option>\n";
                                        } ?>
                                    </select>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="orgs" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="orgs" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="orgs" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <?php // TODO - dashboard and default display columns ?>
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

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {
        $("#lang").val("<?= $resource->lang ?>");
        $("#toolbar_style").val("<?= $resource->toolbar_style ?>");
        $("#list_table_format").val("<?= $resource->list_table_format ?>");
        <?php if (isset($resource->password)) {
            if ($resource->password !== '') { ?>
                $("#password").attr("placeholder", "<?= __("removed from display, but has been set") ?>");
            <?php } else { ?>
                $("#password").attr("placeholder", "<?= __("has not been set") ?>");
            <?php }
        } ?>
    });
}
</script>
