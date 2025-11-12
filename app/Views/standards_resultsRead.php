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
                                    <?= read_field_header($meta->collection, 'description', '') ?>
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
                                            <label for="applied" class="form-label"><?= __('Linked Files') ?></label>
                                        </div>
                                        <div class="col-6 clearfix">
                                            <dlv class="float-end">
                                                <div class="page-title-right" style="padding-right:20px;">
                                                    <button id="link_add" class="btn btn-sm btn-success"><span class="icon-plus"></span></button>
                                                </div>
                                            </dlv>
                                        </div>
                                    </div>
                                    <br><br>
                                    <table class="table">
                                        <tbody>
                                        <?php if (!empty($resource->links)) {
                                            foreach ($resource->links as $link) { ?>
                                            <tr>
                                                <td><img src="<?= @$link->icon ?>"></td>
                                                <td><a href="<?= @$link->link ?>" target="_blank" title="<?= @$link->link ?>"><?= @$link->name ?></a></td>
                                                <td><button class="btn btn-sm btn-danger link_delete" data-name="<?= str_replace('"', '\"', @$link->name) ?>"><span class="icon-trash-2"></span></button></td>
                                            </tr>
                                        <?php } } ?>
                                        </tbody>
                                    </table>
                                    <div id="links" style="display: none;"><br><br><div class="col-12" style="position:relative;"><div class="row"><div class="col-12 clearfix"><label for="link_name" class="form-label" title="link_name">Name</label></div></div><div class="input-group"><input type="text" class="form-control" id="link_name" value="" /></div></div><br><div class="col-12" style="position:relative;"><div class="row"><div class="col-12 clearfix"><label for="link_name" class="form-label" title="link_name">Link</label></div></div><div class="input-group"><input type="text" class="form-control" id="link_link" value="" /></div></div><br><button class="btn btn-primary link_add_item" type="button"><?= __('Submit') ?></button></div>
                                </div>
                            </div>

                        </div>
                        <div class="col-6">


                           <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <?= read_field_header($meta->collection, 'applied', $dictionary->columns->applied) ?>
                                    <div class="input-group">
                                        <select class="form-select" id="applied" name="applied" data-original-value="<?= $resource->applied ?>" disabled>
                                            <option value='y'><?php echo __('Yes'); ?></option>
                                            <option value='n'><?php echo __('No'); ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="applied" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='icon-pencil'></span></div>
                                            <div data-attribute="applied" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='icon-check'></span></div>
                                            <div data-attribute="applied" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='icon-x'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="applied" data-dictionary="<?= $dictionary->columns->applied ?>"><span><br></span></div>
                                </div>
                            </div>


                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <?= read_field_header($meta->collection, 'result', $dictionary->columns->result) ?>
                                    <div class="input-group">
                                        <select class="form-select" id="result" name="result" data-original-value="<?= $resource->result ?>" disabled>
                                            <option value=''>&nbsp;</option>
                                            <option value='pass'           <?php if ($resource->{'result'} === 'pass') { ?>selected<?php } ?>><?php echo __('Pass'); ?></option>
                                            <option value='fail'           <?php if ($resource->{'result'} === 'fail') { ?>selected<?php } ?>><?php echo __('Fail'); ?></option>
                                            <option value='not applicable' <?php if ($resource->{'result'} === 'not applicable') { ?>selected<?php } ?>><?php echo __('Not Applicable'); ?></option>
                                            <option value='excluded'       <?php if ($resource->{'result'} === 'excluded') { ?>selected<?php } ?>><?php echo __('Excluded'); ?></option>
                                            <option value='other'          <?php if ($resource->{'result'} === 'other') { ?>selected<?php } ?>><?php echo __('Other'); ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="result" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='icon-pencil'></span></div>
                                            <div data-attribute="result" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='icon-check'></span></div>
                                            <div data-attribute="result" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='icon-x'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="result" data-dictionary="<?= $dictionary->columns->result ?>"><span><br></span></div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <?= read_field_header($meta->collection, 'maturity_level', $dictionary->columns->maturity_level) ?>
                                    <div class="input-group">
                                        <select class="form-select" id="maturity_level" name="maturity_level" data-original-value="<?= $resource->maturity_level ?>" disabled>
                                            <option value=''>&nbsp;</option>
                                            <option value='incomplete' <?php if ($resource->{'maturity_level'} === 'incomplete') { ?>selected<?php } ?>><?php echo __('Incomplete'); ?></option>
                                            <option value='performed'  <?php if ($resource->{'maturity_level'} === 'performed')  { ?>selected<?php } ?>><?php echo __('Performed'); ?></option>
                                            <option value='managed'    <?php if ($resource->{'maturity_level'} === 'managed')    { ?>selected<?php } ?>><?php echo __('Managed'); ?></option>
                                            <option value='established'<?php if ($resource->{'maturity_level'} === 'established'){ ?>selected<?php } ?>><?php echo __('Established'); ?></option>
                                            <option value='predictable'<?php if ($resource->{'maturity_level'} === 'predictable'){ ?>selected<?php } ?>><?php echo __('Predictable'); ?></option>
                                            <option value='optimized'  <?php if ($resource->{'maturity_level'} === 'optimized')  { ?>selected<?php } ?>><?php echo __('Optimized'); ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="maturity_level" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='icon-pencil'></span></div>
                                            <div data-attribute="maturity_level" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='icon-check'></span></div>
                                            <div data-attribute="maturity_level" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='icon-x'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="maturity_level" data-dictionary="<?= $dictionary->columns->result ?>"><span><br></span></div>
                                </div>
                            </div>

                            <?php
                            $columns = array('exclusion_reasons', 'responsibility', 'legal_requirements', 'contractual_obligations', 'business_requirements', 'best_practises', 'risk_assesment_result', 'implementation_notes', 'notes');
                            foreach ($columns as $column) {
                            ?>
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <?= read_field_header($meta->collection, $column, $dictionary->columns->{$column}) ?>
                                    <div class="input-group">
                                        <textarea class="form-control" rows="6" id="<?= $column ?>" name="<?= $column ?>" data-original-value="<?= $resource->$column ?>" disabled><?= html_entity_decode($resource->$column) ?></textarea>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="<?= $column ?>" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='icon-pencil'></span></div>
                                            <div data-attribute="<?= $column ?>" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='icon-check'></span></div>
                                            <div data-attribute="<?= $column ?>" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='icon-x'></span></div>
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
        $("#maturity_level").val("<?= $resource->maturity_level ?>");
        $("#button_export_csv").remove();
        $("#button_export_json").remove();
        $("#button_delete").remove();
        $("#button_list").attr("href", "<?= base_url() ?>standards/<?= $resource->standard_id ?>#results");

        <?php if (!empty($resource->links)) {
        echo "\n" . '        var $links = \''. json_encode($resource->links) . '\';' . "\n";
        echo '        $links = JSON.parse($links);' . "\n";
        } ?>

        // $(document).on('click', '#add_link', function (e) {
        $( "#link_add" ).on( "click", function() {
            $('#links').attr("style", "display: block;");
            
        });

        $(".link_add_item").on( "click", function() {
            var item = {};
            item.name = $("#link_name").val();
            item.link = $("#link_link").val();
            $links.push(item);
            linksSend = JSON.stringify($links);
            var data = {};
            data["data"] = {};
            data["data"]["id"] = <?= intval($resource->id) ?>;
            data["data"]["type"] = 'standards_results';
            data["data"]["attributes"] = {};
            data["data"]["attributes"]["links"] = linksSend;
            data = JSON.stringify(data);
            $.ajax({
                type: "PATCH",
                url: <?= intval($resource->id) ?>,
                contentType: "application/json",
                data: {data : data},
                success: function (data) {
                    $("#liveToastSuccess-header").text("Update Succeeded");
                    $("#liveToastSuccess-body").text("Links have been updated. Refresh page to update display.");
                    var toastElList = [].slice.call(document.querySelectorAll('.toast-success'));
                    var toastList = toastElList.map(function(toastEl) {
                        return new bootstrap.Toast(toastEl)
                    });
                    toastList.forEach(toast => toast.show());
                    $("#link_name").val("");
                    $("#link_link").val("");
                    $('#links').attr("style", "display: none;");
                    location.reload(true);
                },
                error: function (data) {
                    data = JSON.parse(data.responseText);
                    $("#liveToastFailure-header").text("Update Failed");
                    $("#liveToastFailure-body").text(data.message);
                    var toastElList = [].slice.call(document.querySelectorAll('.toast-failure'));
                    var toastList = toastElList.map(function(toastEl) {
                        return new bootstrap.Toast(toastEl)
                    });
                    toastList.forEach(toast => toast.show());
                    $("#"+attribute).val($("#"+attribute).attr("data-original-value"));

                }
            }); 
        });


        $(".link_delete").on( "click", function() {
            var $link_name = $(this).attr("data-name");
            var row = $(this);
            var linksSend = '';
            for (let index = 0; index < $links.length; ++index) {
                if ($links[index].name == $link_name) {
                    $links.splice(index, 1);
                    linksSend = JSON.stringify($links);
                }
            }
            if (linksSend > "") {
                var data = {};
                data["data"] = {};
                data["data"]["id"] = <?= intval($resource->id) ?>;
                data["data"]["type"] = 'standards_results';
                data["data"]["attributes"] = {};
                data["data"]["attributes"]["links"] = linksSend;
                data = JSON.stringify(data);
                $.ajax({
                    type: "PATCH",
                    url: <?= intval($resource->id) ?>,
                    contentType: "application/json",
                    data: {data : data},
                    success: function (data) {
                        $("#liveToastSuccess-header").text("Update Succeeded");
                        $("#liveToastSuccess-body").text("Links have been updated.");
                        var toastElList = [].slice.call(document.querySelectorAll('.toast-success'));
                        var toastList = toastElList.map(function(toastEl) {
                            return new bootstrap.Toast(toastEl)
                        });
                        toastList.forEach(toast => toast.show());
                        row.closest('tr').remove();
                    },
                    error: function (data) {
                        data = JSON.parse(data.responseText);
                        $("#liveToastFailure-header").text("Update Failed");
                        $("#liveToastFailure-body").text(data.message);
                        var toastElList = [].slice.call(document.querySelectorAll('.toast-failure'));
                        var toastList = toastElList.map(function(toastEl) {
                            return new bootstrap.Toast(toastEl)
                        });
                        toastList.forEach(toast => toast.show());
                        $("#"+attribute).val($("#"+attribute).attr("data-original-value"));

                    }
                });                        
            }

        });






    });
}
</script>
