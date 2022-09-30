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
* @version   GIT: Open-AudIT_4.3.4
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
                            <input type="text" class="form-control" id="data[attributes][name]" name="data[attributes][name]" value="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][parent_id]" class="col-sm-3 control-label"><?php echo __('Parent Org'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="data[attributes][parent_id]" name="data[attributes][parent_id]" required>
                            <?php
                            foreach ($this->response->included as $item) {
                                if ($item->type == 'orgs') { ?>     <option value="<?php echo $item->id; ?>"><?php echo $item->attributes->name ?></option>
                            <?php
                                }
                            } ?></select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][description]" class="col-sm-3 control-label"><?php echo __('Description'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][description]" name="data[attributes][description]" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][type]" class="col-sm-3 control-label"><?php echo __('Type'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" name="data[attributes][type]" id="data[attributes][type]">
                                <?php foreach ($this->response->included as $item) {
                                if ($item->type === 'attributes') {
                                    if ($item->attributes->resource === 'orgs' && $item->attributes->type === 'type') {
                                        if ($item->attributes->value === 'organisation') { $selected = ' selected'; } else { $selected = ''; }
                                            echo '<option value="' . $item->attributes->value . '"' . $selected . '>' . $item->attributes->name . "</option>\n";
                                        }
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="submit" class="col-sm-3 control-label"></label>
                        <div class="col-sm-8 input-group">
                            <input type="hidden" value="orgs" id="data[type]" name="data[type]" />
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