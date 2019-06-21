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
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************

/**
* @category  View
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   3.1.1
* @link      http://www.open-audit.org
 */
$item = $this->response->data[0];
?>
<form class="form-horizontal" id="form_update" method="post" action="<?php echo htmlspecialchars( $this->response->links->self , REPLACE_FLAGS, CHARSET); ?>">
    <div class="panel panel-default">
        <?php include('include_read_panel_header.php'); ?>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="id" class="col-sm-3 control-label"><?php echo __('ID'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="id" name="id" value="<?php echo htmlspecialchars($item->attributes->id, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label"><?php echo __('Name'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_name" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="name"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="org_id" class="col-sm-3 control-label"><?php echo __('Organisation'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="org_id" name="org_id" disabled>
                                <?php
                                foreach ($this->response->included as $org) {
                                    if ($org->type == 'orgs') { ?>
                                        <option value="<?php echo intval($org->id); ?>"<?php if ($item->attributes->org_id == $org->id) { echo " selected"; } ?>><?php echo htmlspecialchars($org->attributes->name, REPLACE_FLAGS, CHARSET); ?></option>
                                <?php
                                    }
                                } ?>
                                </select>
                                <?php if (!empty($edit)) { ?>
                                <span class="input-group-btn">
                                    <button id="edit_org_id" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="org_id"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                                </span>
                                <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="org_descendants" class="col-sm-3 control-label"><?php echo __('Organisation Descendants'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="org_descendants" name="org_descendants" disabled>
                            <option value="y"<?php if ($item->attributes->org_descendants === 'y') { echo ' selected'; } ?>><?php echo __('Yes'); ?></option>
                            <option value="n"<?php if ($item->attributes->org_descendants === 'n') { echo ' selected'; } ?>><?php echo __('No'); ?></option>
                            </select>
                                <?php if (!empty($edit)) { ?>
                                <span class="input-group-btn">
                                    <button id="edit_org_descendants" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="org_descendants"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                                </span>
                                <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="purchase_count" class="col-sm-3 control-label"><?php echo __('Purchase Count'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="purchase_count" name="purchase_count" value="<?php echo htmlspecialchars($item->attributes->purchase_count, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_purchase_count" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="purchase_count"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <?php if ($item->attributes->used_count > $item->attributes->purchase_count) { ?>
                    <div class="form-group has-error">
                    <?php } else { ?>
                    <div class="form-group has-success">
                    <?php } ?>
                        <label for="used_count" class="col-sm-3 control-label"><?php echo __('Used Count'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="used_count" name="used_count" value="<?php echo htmlspecialchars($item->attributes->used_count, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label"><?php echo __('Description'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="description" name="description" value="<?php echo htmlspecialchars($item->attributes->description, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_description" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="description"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="match_string" class="col-sm-3 control-label"><?php echo __('Match String'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="match_string" name="match_string" value="<?php echo htmlspecialchars($item->attributes->match_string, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_match_string" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="match_string"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edited_by" class="col-sm-3 control-label"><?php echo __('Edited By'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="edited_by" name="edited_by" value="<?php echo htmlspecialchars($item->attributes->edited_by, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edited_date" class="col-sm-3 control-label"><?php echo __('Edited Date'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="edited_date" name="edited_date" value="<?php echo htmlspecialchars($item->attributes->edited_date, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center"><?php echo __('Device ID'); ?></th>
                            <th><?php echo __('Device Name'); ?></th>
                            <th><?php echo __('Software Name'); ?></th>
                            <th><?php echo __('Software Version'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($this->response->included as $item) {
                            if ($item->type == 'licenses') {
                                echo "<tr>\n";
                                echo '    <td class="text-center"><a class="btn btn-sm btn-success" href="../devices/' . htmlspecialchars($item->id, REPLACE_FLAGS, CHARSET) . '">' . htmlspecialchars($item->id, REPLACE_FLAGS, CHARSET) . '</a></td>';
                                echo "    <td>" . htmlspecialchars( $item->{'attributes'}->{'system.name'}, REPLACE_FLAGS, CHARSET) . "</td>\n";
                                echo "    <td>" . htmlspecialchars( $item->{'attributes'}->{'software.name'}, REPLACE_FLAGS, CHARSET) . "</td>\n";
                                echo "    <td>" . htmlspecialchars( $item->{'attributes'}->{'software.version'}, REPLACE_FLAGS, CHARSET) . "</td>\n";
                                echo "</tr>\n";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
