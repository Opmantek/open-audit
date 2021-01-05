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
* @version   GIT: Open-AudIT_3.5.3
* @link      http://www.open-audit.org
 */
?>
<form class="form-horizontal" id="form_update" method="post" action="<?php echo $this->response->links->self; ?>">
    <input type="hidden" value="<?php echo $this->response->meta->access_token; ?>" id="data[access_token]" name="data[access_token]" />
    <div class="panel panel-default">
        <?php include('include_read_panel_header.php'); ?>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="data[attributes][name]" class="col-sm-3 control-label"><?php echo __('Name'); ?></label>
                        <div class="col-sm-8 input-group">
                             <input type="text" class="form-control" id="data[attributes][name]" name="data[attributes][name]" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][org_id]" class="col-sm-3 control-label"><?php echo __('Organisation'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="data[attributes][org_id]" name="data[attributes][org_id]" required>
                            <?php
                            foreach ($this->response->included as $item) {
                                if ($item->type == 'orgs') { ?>     <option value="<?php echo $item->id; ?>"><?php echo $item->attributes->name ?></option>
                            <?php
                                }
                            } ?></select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][menu_category]" class="col-sm-3 control-label"><?php echo __('Menu Category'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="data[attributes][menu_category]" name="data[attributes][menu_category]" required>
                                <?php
                                foreach ($this->response->included as $item) {
                                    if ($item->type == 'attributes' and $item->attributes->resource == 'queries' and $item->attributes->type == 'menu_category') {
                                        $selected = '';
                                        if ($item->attributes->name == '') {
                                            $selected = ' selected';
                                        }
                                        $label = $item->attributes->name;
                                        if (empty($label)) {
                                            $label = ' ';
                                        }
                                        echo "                                <option $selected label=\"$label\" value=\"" . $item->attributes->name . "\">" . $item->attributes->value . "</option>\n";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][table]" class="col-sm-3 control-label"><?php echo __('Table'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="data[attributes][table]" name="data[attributes][table]" required>
                            <?php
                            foreach ($this->response->included as $item) {
                                if ($item->type == 'table') { ?>    <option value="<?php echo $item->attributes->name; ?>"><?php echo $item->attributes->name ?></option>
                            <?php
                                }
                            } ?></select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][column]" class="col-sm-3 control-label"><?php echo __('Column'); ?></label>
                        <div class="col-sm-8 input-group">
                             <input type="text" class="form-control" id="data[attributes][column]" name="data[attributes][column]" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][extra_columns]" class="col-sm-3 control-label"><?php echo __('Extra Columns'); ?></label>
                        <div class="col-sm-8 input-group">
                             <input type="text" class="form-control" id="data[attributes][extra_columns]" name="data[attributes][extra_columns]">
                        </div>
                    </div>

                <div class="form-group">
                    <label for="submit" class="col-sm-3 control-label"></label>
                    <div class="col-sm-8 input-group">
                        <input type="hidden" value="connections" id="data[type]" name="data[type]" />
                        <button id="submit" name="submit" type="submit" class="btn btn-default"><?php echo __('Submit'); ?></button>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="col-md-8 col-md-offset-2">
                    <?php if ( ! empty($this->response->dictionary->about)) {
                        echo "<h4 class=\"text-center\">About</h4><br />";
                        echo html_entity_decode($this->response->dictionary->about);
                    } ?>
                    <?php if ( ! empty($this->response->dictionary->notes)) {
                        echo "<h4 class=\"text-center\">Notes</h4><br />";
                        echo html_entity_decode($this->response->dictionary->notes);
                    } ?>
                </div>
            </div>
        </div>
    </div>
</form>