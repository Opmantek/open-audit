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
* @version   2.1
* @link      http://www.open-audit.org
 */
?>
<div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title"><?php echo __("About"); ?></h3></div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                Open-AudIT Enterprise is now available.<br /><br />
                Scheduled Reports, Interactive Dashboards, Maps, Baseline Comparisons, Scheduled Discoveries and more.<br /><br />
                All purchases go to further Open-AudIT for all of us. Contact <a href='https://opmantek.com' style='color: blue'>Opmantek</a> today or click <a href='<?php echo $this->config->config['oae_url']; ?>' style='color: blue;'>here</a> to enter your license details.<br /><br />
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo $this->config->config['oa_web_folder']; ?>/images/oae_audit_dashboard.png" width="400px" />
            </div>
            <div class="col-md-6">
                <img src="<?php echo $this->config->config['oa_web_folder']; ?>/images/oae_geographical_maps.png" width="400px" />
            </div>
        </div>
    </div>
</div>