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
* @version   2.3.0
* @link      http://www.open-audit.org
 */
?>
<div class="alert alert-success" role="alert"><?php echo htmlspecialchars( $success, REPLACE_FLAGS, CHARSET); ?></div>
<form class="form-horizontal" id="form_update" method="post" action="database">
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <div class="panel-title clearfix">
                <div class="pull-left">
                    <?php echo __('Database Upgrade'); ?>
                </div>
                <div class="pull-right">
                    <div class="btn-group" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                        <a class="btn btn-info btn-sm" href="<?php echo $this->config->config['oae_url']; ?>" role="button"><?php echo __('Go to Enterprise');?></a>
                        <a class="btn btn-info btn-sm" href="https://community.opmantek.com/display/OA/Release+Notes+for+Open-AudIT+v<?php echo $this->config->config['display_version']; ?>" role="button"><?php echo __('Release Notes');?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <pre style="white-space: pre-wrap;"><?php echo htmlspecialchars( $output, REPLACE_FLAGS, CHARSET); ?></pre>
        </div>
    </div>
</form>
