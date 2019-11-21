<?php
/**
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
*
* PHP version 5.3.3
* 
* @category  Controller
* @package   All
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.3.0
* @link      http://www.open-audit.org
*/
$timer_start = microtime(true);
unset($this->response->data);
$this->load->model('m_collection');

$this->{'m_'.$this->response->meta->collection}->collection(0,1);

# If we have less than 100 license entries, run them all and include the used count.
# Can't do this in the controller, as we load the response->data above (in this file)
if ($this->response->meta->collection === 'licenses') {
    if (intval($this->response->meta->total) < 100) {
        for ($i=0; $i < count($this->response->data); $i++) {
            $temp = $this->m_licenses->execute($this->response->data[$i]->attributes->id);
            $this->response->data[$i]->attributes->used_count = intval(count($temp));
        }
    }
}

$timer_end = microtime(true);
$entry = new stdClass();
$entry->time = ($timer_end - $timer_start);
$entry->detail = 'include_collection::collection.';
$entry->time_now = time();
$GLOBALS['timer_log'][] = $entry;

$this->response->meta->links = $this->response->links;
output($this->response);

$log = new stdClass();
$log->object = $this->response->meta->collection;
$log->function = strtolower($this->response->meta->collection) . '::' . strtolower($this->response->meta->action);
$log->severity = 7;
$log->status = 'success';
$log->summary = 'finish';
$log->type = 'access';
if ($this->config->config['log_level'] == 7) {
    $log->detail = json_encode($this->response->meta);
}
stdLog($log);
