<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $included['standards_policies'][0]->attributes->name) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <?= read_field('standard', $included['standards'][0]->attributes->name, false) ?>
                            <?= read_field('type', $included['standards_policies'][0]->attributes->type, false) ?>
                            <?= read_field('class', $included['standards_policies'][0]->attributes->class, false) ?>
                            <?= read_field('section', $included['standards_policies'][0]->attributes->section, false) ?>
                            <?= read_field('name', $included['standards_policies'][0]->attributes->name, false) ?>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="sql" class="form-label"><?= __('Description') ?></label>
                                    <div class="input-group">
                                        <textarea class="form-control" rows="14" id="description" name="description" disabled><?= html_entity_decode($included['standards_policies'][0]->attributes->description) ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false) ?>
                            <br>
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <div class="row">
                                        <div class="col-6 clearfix">
                                            <label for="applied" class="form-label"><?= __('Links') ?></label>
                                        </div>
                                        <div class="col-6 clearfix">
                                            <dlv class="float-end">
                                                <div class="page-title-right" style="padding-right:20px;">
                                                    <button class="btn btn-sm btn-success"><span class="fa fa-add"></span></button>
                                                </div>
                                            </dlv>
                                        </div>
                                    </div>
                                    <br><br>
                                    <table class="table" id="links">
                                        <tbody>
                                        <?php if (!empty($resource->links)) { foreach ($resource->links as $link) { ?>
                                            <tr>
                                                <td><img src="<?= $link->icon ?>"></td>
                                                <td><a href="<?= $link->link ?>" target="_blank" title="<?= $link->link ?>"><?= $link->name ?></a></td>
                                                <td><button class="btn btn-sm btn-danger"><span class="fa fa-trash"></span></button></td>
                                            </tr>
                                        <?php } } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="applied" class="form-label"><?= __('Applied') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="applied" name="applied" data-original-value="<?= $resource->applied ?>" disabled>
                                            <option value='y'><?php echo __('Yes'); ?></option>
                                            <option value='n'><?php echo __('No'); ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="applied" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="applied" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="applied" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="applied" data-dictionary="<?= $dictionary->columns->applied ?>"><span><br></span></div>
                                </div>
                            </div>


                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="result" class="form-label"><?= __('Result') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="result" name="result" data-original-value="<?= $resource->result ?>" disabled>
                                            <option value=''>&nbsp;</option>
                                            <option value='pass'><?php echo __('Pass'); ?></option>
                                            <option value='fail'><?php echo __('Fail'); ?></option>
                                            <option value='not applicable'><?php echo __('Not Applicable'); ?></option>
                                            <option value='excluded'><?php echo __('Excluded'); ?></option>
                                            <option value='other'><?php echo __('Other'); ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="result" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="result" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="result" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="result" data-dictionary="<?= $dictionary->columns->result ?>"><span><br></span></div>
                                </div>
                            </div>

                            <?php
                            $columns = array('exclusion_reasons', 'responsibility', 'legal_requirements', 'contractual_obligations', 'business_requirements', 'best_practises', 'risk_assesment_result', 'implementation_notes', 'notes');
                            foreach ($columns as $column) {
                            ?>
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="<?= $column ?>" class="form-label"><?= ucwords(str_replace('_', ' ', __($column))) ?></label>
                                    <div class="input-group">
                                        <textarea class="form-control" rows="6" id="<?= $column ?>" name="<?= $column ?>" data-original-value="<?= $resource->$column ?>" disabled><?= html_entity_decode($resource->$column) ?></textarea>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="<?= $column ?>" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="<?= $column ?>" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="<?= $column ?>" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position:absolute; right:0;" data-attribute="<?= $column ?>" data-dictionary="<?= $dictionary->columns->$column ?>"><span><br></span></div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {
        $("#applied").val("<?= $resource->applied ?>");
        $("#result").val("<?= $resource->result ?>");
        $("#button_export_csv").remove();
        $("#button_export_json").remove();
        $("#button_delete").remove();
        $("#button_list").attr("href", "<?= base_url() ?>standards/<?= $resource->standard_id ?>#results");
    });
}
</script>
