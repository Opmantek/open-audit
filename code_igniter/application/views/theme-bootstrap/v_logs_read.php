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
* @version   3.2.2
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
                    <?php foreach (array('id', 'timestamp', 'type', 'severity', 'pid', 'user', 'server') as $attribute) { ?>
                    <div class="form-group">
                        <label for="<?php echo htmlspecialchars( $attribute, REPLACE_FLAGS, CHARSET); ?>" class="col-sm-3 control-label"><?php echo __(htmlspecialchars(ucwords(str_replace('_', ' ', $attribute)), REPLACE_FLAGS, CHARSET)); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="<?php echo htmlspecialchars( $attribute, REPLACE_FLAGS, CHARSET); ?>" name="<?php echo htmlspecialchars( $attribute, REPLACE_FLAGS, CHARSET); ?>" value="<?php echo htmlspecialchars($item->attributes->$attribute, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <div class="col-md-6">
                    <?php foreach (array('ip', 'collection', 'action', 'function', 'status', 'summary') as $attribute) { ?>
                    <div class="form-group">
                        <label for="<?php echo htmlspecialchars( $attribute, REPLACE_FLAGS, CHARSET); ?>" class="col-sm-3 control-label"><?php echo __(htmlspecialchars(ucwords(str_replace('_', ' ', $attribute)), REPLACE_FLAGS, CHARSET)); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="<?php echo htmlspecialchars( $attribute, REPLACE_FLAGS, CHARSET); ?>" name="<?php echo htmlspecialchars( $attribute, REPLACE_FLAGS, CHARSET); ?>" value="<?php echo htmlspecialchars($item->attributes->$attribute, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <div class="col-md-12">
                    <?php
                    // if ($detail = json_decode($item->attributes->detail)) {
                    //     //
                    // } else {
                    //     if ($detail = json_encode($item->attributes->detail)) {
                    //         //
                    //     } else {
                    //         $detail = $item->attributes->detail;
                    //     }
                    // }
                    ?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo __('Detail'); ?></label>
                        <div class="col-sm-8 input-group">
                            <pre>
                            <?php echo htmlspecialchars($item->attributes->detail) ?>
                            </pre>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>