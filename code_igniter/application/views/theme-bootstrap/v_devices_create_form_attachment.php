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
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.3.4
* @link      http://www.open-audit.org
 */
?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <span class="text-left"><?php echo __('Attachment'); ?></span>
      <span class="pull-right"></span>
    </h3>
  </div>
  <div class="panel-body">
    <form class="form-horizontal" id="form_update" method="post" action="?action=create&sub_resource=attachment" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $this->response->meta->access_token; ?>" id="data[access_token]" name="data[access_token]" />
        <div class="form-group">
            <label for="id" class="col-sm-2 control-label"><?php echo __('ID'); ?></label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="id" name="id" value="" disabled>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="data[attributes][name]" class="col-sm-2 control-label"><?php echo __('Name'); ?></label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input tabindex="1" type="text" class="form-control" id="data[attributes][name]" name="data[attributes][name]" value="">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="attachment" class="col-sm-2 control-label"><?php echo __('File'); ?></label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input tabindex="1" type="file" class="form-control" id="attachment" name="attachment" value="">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="edited_by" class="col-sm-2 control-label"><?php echo __('Edited By'); ?></label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="edited_by" name="edited_by" value="" disabled>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="edited_date" class="col-sm-2 control-label"><?php echo __('Edited Date'); ?></label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="edited_date" name="edited_date" value="" disabled>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="submit" class="col-sm-2 control-label"></label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="hidden" value="attachment" id="data[type]" name="data[type]" />
                    <input type="hidden" value="<?php echo intval($this->response->meta->id); ?>" id="data[system_id]" name="data[system_id]" />
                    <button tabindex="10" id="submit" name="submit" type="submit" class="btn btn-default"><?php echo __('Submit'); ?></button>
                </div>
            </div>
        </div>

    </form>
  </div>
</div>
