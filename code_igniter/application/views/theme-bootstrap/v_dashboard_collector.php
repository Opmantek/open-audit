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
foreach ($tasks as $task) {
	if ($task->{'attributes'}->{'type'} == "collector") {
		$this_task = $task;
	}
}
$every = "";
if (stripos($this_task->{'attributes'}->{'hour'}, '*/') !== false) {
    $every = str_replace('*/', '', $this_task->{'attributes'}->{'hour'}) . ' hours';
}
if (stripos($this_task->{'attributes'}->{'minute'}, '*/') !== false) {
    $minute = str_replace('*/', '', $this_task->{'attributes'}->{'minute'});
    if ($every != "") {
        $every .= ', ' . $minute . ' minutes';
    } else {
        $every = $minute . ' minutes';
    }
}
?><h3><?php echo __('Dashboard'); ?></h3>
<div class="container-fluid">
    <form class="form-horizontal" id="form_update" method="post" action="/en/omk/open-audit/configuration/servers/update">
		<div class="row box_margin">
		    <div class="panel panel-default">
		        <div class="panel-heading clearfix">
		            <div class="panel-title">
		                <?php echo __('Collector'); ?>
		                <?php if ($this->m_users->get_user_permission('', 'configuration', 'u')) { ?>
		                <div class="pull-right">
		                    <button class="btn btn-sm btn-default decomission_link" type="button"><?php echo __('Decomission'); ?></button>
		                </div>
		                <?php } ?>
		            </div>
		        </div>
		        <div class="panel-body">
		            <p class="text-center"><br />
		                <?php if ($every != '') { ?>
		                    This collector requests tasks every <?php echo $every ?>.<br /><br />
		                    <?php if ($this_task->{'attributes'}->{'last_run'} != "2000-01-01 00:00:00") { ?>
		                        The last time this task was run was <?php echo $this_task->{'attributes'}->{'last_run'}; ?>.<br /><br />
		                    <?php } else { ?>
		                        This task has not yet been run.<br /><br />
		                    <?php } ?>
		                <?php } else { ?>
		                <b>This collector is not requesting tasks.</b><br /><br />
		                <?php } ?>
		                The number of devices discovered by this collector is <?php echo $this->config->config['device_count']; ?>.
		            </p>
		        </div>
		    </div>
		</div>
	</form>
</div>
