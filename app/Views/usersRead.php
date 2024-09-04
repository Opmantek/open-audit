<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
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
                            <?= read_field('password', '', $dictionary->columns->password, $update, '', '', '', 'password') ?>
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
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="lang" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="lang" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="lang" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="lang" data-dictionary="<?= $dictionary->columns->lang ?>"><span><br></span></div>
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
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="toolbar_style" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="toolbar_style" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="toolbar_style" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="toolbar_style" data-dictionary="<?= $dictionary->columns->toolbar_style ?>"><span><br></span></div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="list_table_format" class="form-label"><?= __('Table Sizing') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="list_table_format" name="list_table_format" data-original-value="<?= $resource->list_table_format ?>" disabled>
                                        <option value=''><?= __('Standard') ?></option>
                                        <option value='compact'><?= __('Compact') ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="list_table_format" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="list_table_format" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="list_table_format" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="list_table_format" data-dictionary="<?= $dictionary->columns->list_table_format ?>"><span><br></span></div>
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
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="roles" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="roles" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="roles" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="roles" data-dictionary="<?= $dictionary->columns->roles ?>"><span><br></span></div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="orgs" class="form-label"><?= __('Orgs') ?></label>
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
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="orgs" data-dictionary="<?= $dictionary->columns->orgs ?>"><span><br></span></div>
                                </div>
                            </div>

                            <?php // TODO - dashboard and default display columns ?>
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
                                <h4 class="text-center"><?= __('Fields') ?></h4><br>
                                    <?php
                                    $do_not_show = array('id', 'dashboard_id', 'active', 'ldap', 'type', 'devices_default_display_columns', 'access_token', 'edited_by', 'edited_date');
                                    foreach ($dictionary->columns as $key => $value) {
                                        if (!in_array($key, $do_not_show)) {
                                            echo "<code>$key:</code> " . html_entity_decode($value) . "<br><br>";
                                        }
                                    }
                                } ?>
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
