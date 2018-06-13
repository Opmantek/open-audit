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
* @version   2.2.3
* @link      http://www.open-audit.org
 */
if (php_uname('s') == 'Windows NT') {
    $files = "c:\\omk\\log\\open-audit.log,\nc:\\omk\\log\\opCommon.log,\nc:\\omk\\log\\opDaemon.log,\nc:\\omk\\log\\performance.log,\nc:\\omk\\conf\\opCommon.nmis";
} else {
    $files = "/usr/local/omk/log/open-audit.log,\n/usr/local/omk/log/opCommon.log,\n/usr/local/omk/log/opDaemon.log,\n/usr/local/omk/log/performance.log,\n/usr/local/omk/conf/opCommon.nmis";
}

?>
<div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title"><?php echo __("Support"); ?></h3></div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                If you are emailing this result to Opmantek, please go into the menu -> Admin -> Database -> List and select the Logs table, export it to SQL and attach it.<br /><br />
                Please also attach the files below and the data below and add them as attachments to the email.<br /><pre><?php echo $files; ?></pre>
            </div>
            <div class="col-md-12"><br /><?php echo __('SESSION USERDATA'); ?>
            <pre><?php print_r($this->session->userdata); ?></pre>
            </div>

            <div class="col-md-12"><br /><?php echo __('INTERNAL CONFIG'); ?>
            <pre><?php print_r($this->config->config); ?></pre>
            </div>

            <div class="col-md-12"><br /><?php echo __('OS'); ?>
            <pre><?php print_r($this->response->data[0]->os); ?></pre>
            </div>

            <div class="col-md-12"><br /><?php echo __('DATABASE'); ?>
            <pre><?php print_r($this->response->data[0]->database); ?></pre>
            </div>

            <div class="col-md-12"><br /><?php echo __('WEBSERVER'); ?>
            <pre><?php print_r($this->response->data[0]->webserver); ?></pre>
            </div>

            <div class="col-md-12"><br /><?php echo __('PHP'); ?>
            <pre><?php print_r($this->response->data[0]->php); ?></pre>
            </div>

            <div class="col-md-12"><br /><?php echo __('PREREQUISITES'); ?>
            <pre><?php print_r($this->response->data[0]->prereq); ?></pre>
            </div>

            <div class="col-md-12"><br /><?php echo __('PERMISSIONS'); ?>
            <pre><?php print_r($this->response->data[0]->permissions); ?></pre>
            </div>

            <div class="col-md-12"><br /><?php echo __('DEVICES'); ?>
            <pre><?php print_r($this->response->data[0]->devices); ?></pre>
            </div>
        </div>
    </div>
</div>