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
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.14
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
if (php_uname('s') == 'Windows NT') {
    $files = "c:%5Cxampplite%5Copen-audit%5Cother%5Clog_system.log,\nc:%5Comk%5Clog%5Coae.log,\nc:%5Comk%5Clog%5CopCommon.log,\nc:%5Comk%5Clog%5CopDaemon.log,\nc:%5Comk%5Clog%5Cperformance.log,\nc:%5Comk%5Cconf%5CopCommon.nmis";
} else {
    $files = "/usr/local/open-audit/other/log_system.log,\n/usr/local/omk/log/oae.log,\n/usr/local/omk/log/opCommon.log,\n/usr/local/omk/log/opDaemon.log,\n/usr/local/omk/log/performance.log,\n/usr/local/omk/conf/opCommon.nmis";
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
            <div class="col-md-12"><br />SESSION USERDATA
            <pre><?php print_r($this->session->userdata); ?></pre>
            </div>
            
            <div class="col-md-12"><br />INTERNAL CONFIG
            <pre><?php print_r($this->config->config); ?></pre>
            </div>
        </div>
    </div>
</div>