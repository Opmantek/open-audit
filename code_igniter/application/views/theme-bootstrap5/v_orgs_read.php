<?php
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.firstwave.com or email sales@firstwave.com
#
# *****************************************************************************

/**
* @category  View
* @package   Open-AudIT
* @author    Mark Unwin <mark.unwin@firstwave.com>
* @copyright 2022 Firstwave
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.5.3
* @link      http://www.open-audit.org
 */
$item = $data[0];
include 'shared/read_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?php echo card_header($meta->collection, $item->id, $meta->icon, $edit); ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6"><?php echo edit_text_field('id', $item, 0, 'ID', @$dictionary->{'columns'}->{'id'}); ?>
                            <?php echo edit_text_field('name', $item, $edit, '', @$dictionary->{'columns'}->{'name'}); ?>
                            <?php echo edit_text_field('description', $item, $edit, '', @$dictionary->{'columns'}->{'description'}); ?>
                            <?php echo edit_select_org_field('parent_id', $item, $edit, $orgs, 'Parent Org', @$dictionary->{'columns'}->{'parent_id'}); ?>

                            <br />
                            <div class="row g-3 align-items-center">
                                <div class="col-3 text-end">
                                    <label for="type" class="col-form-label"><?php echo __('Type'); ?></label>
                                </div>
                                <div class="col-7">
                                    <div class="input-group">
                                        <select class="form-control form-select" name="type" id="type" data-original-value="<?php echo $item->attributes->type ?>" data-collection="orgs" data-id="<?php echo $item->attributes->id; ?>" disabled>
<?php foreach ($attributes as $type) {
                                                if ($type->attributes->value === $item->attributes->type) { $selected = ' selected'; } else { $selected = ''; }
                                                echo '                                        <option value="' . $type->attributes->value . '"' . $selected . '>' . $type->attributes->name . "</option>\n";
                                            }
                                            ?>
                                        </select>
                                        <?php if (!empty($edit)) { ?><div id="submit_type" data-action="submit" data-attribute="type"></div>
                                        <div id="cancel_type" data-action="cancel" data-attribute="type"></div>
                                        <div class="btn btn-outline-secondary input-group-text edit_button" title="<?php echo __('Edit') ?>" id="edit_type" data-action="edit" data-attribute="type"><i class="fa fa-edit"></i></div>
                                    <?php } ?><div class="btn btn-outline-secondary input-group-text edit_button" title="type" data-bs-toggle="popover" data-bs-content="<?php echo @$dictionary->{'columns'}->{'type'} ?>"><i class="fa fa-info"></i></div>
                                    </div>
                                </div>
                            </div><?php echo edit_text_field('ad_group', $item, $edit, 'AD Group', @$dictionary->{'columns'}->{'ad_group'}); ?>
                            <?php echo edit_text_field('edited_by', $item, 0, '', @$dictionary->{'columns'}->{'edited_by'}); ?>
                            <?php echo edit_text_field('edited_date', $item, 0, '', @$dictionary->{'columns'}->{'edited_date'}); ?>

                        <br />
                        <br />
                        </div>
                        <div class="col-6">
                            <div class="offset-2 col-8">
                                <?php if ( ! empty($dictionary->about)) {
                                    echo "<h4 class=\"text-center\">About</h4><br />";
                                    echo html_entity_decode($dictionary->about);
                                } ?>
                                <?php if ( ! empty($dictionary->notes)) {
                                    echo "<h4 class=\"text-center\">Notes</h4><br />";
                                    echo html_entity_decode($dictionary->notes);
                                } ?>
                                <h4 class="text-center">Fields</h4><br />
                                <?php foreach ($dictionary->{'columns'} as $key => $value) {
                                    echo "<code>$key:</code> " . html_entity_decode($value) . "<br /><br />";
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
