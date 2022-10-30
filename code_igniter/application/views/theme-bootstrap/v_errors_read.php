<?php
#  Copyright 2022 Firstwave (www.firstwave.com)
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
* @version   GIT: Open-AudIT_4.3.5
* @link      http://www.open-audit.org
 */
$item = $this->response->data[0];
?>
<form class="form-horizontal" id="form_update" method="post" action="#">
    <div class="panel panel-default">
        <?php include('include_read_panel_header.php'); ?>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="code" class="col-sm-3 control-label"><?php echo __('Code'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="code" name="code" value="<?php echo $item->attributes->code; ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-sm-3 control-label"><?php echo __('Title'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="title" name="title" value="<?php echo $item->attributes->title; ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label"><?php echo __('Status'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="status" name="status" value="<?php echo $item->attributes->status; ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="severity" class="col-sm-3 control-label"><?php echo __('Severity'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="severity" name="severity" value="<?php echo $item->attributes->severity; ?> (<?php echo $item->attributes->severity_text; ?>)" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="status_code" class="col-sm-3 control-label"><?php echo __('Status Code'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="status_code" name="status_code" value="<?php echo $item->attributes->status_code; ?>" disabled>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                <strong><?php echo __("Detail"); ?></strong>
                    <p><?php echo $item->attributes->detail; ?></p>
                </div>


            </div>
        </div>
    </div>
</form>

<script type='text/javascript'>
var roles = JSON.parse('<?php echo json_encode($this->user->roles); ?>');
</script>