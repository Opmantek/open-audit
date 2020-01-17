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
$this->response->data = $this->{'m_'.$this->response->meta->collection}->read($this->response->meta->id);
$this->response->meta->total = 0;
$this->response->meta->filtered = 0;
if (!empty($this->response->data) and is_array($this->response->data)) {
    $this->response->meta->total = count($this->response->data);
    $this->response->meta->filtered = count($this->response->data);
}

if ($this->response->meta->format == 'screen') {
    $table = $this->response->meta->collection;
    if ($table == 'database') {
        $table = $this->response->meta->id;
    }
    include 'include_dictionary.php';
    $this->response->dictionary = $dictionary;
}

# Add the Org if it's in the result
 if (!empty($this->response->data[0]->attributes->org_id)) {
    $this->load->model('m_orgs');
    $this->response->included = array_merge($this->response->included, $this->m_orgs->read($this->response->data[0]->attributes->org_id));
}

# Add the location if it's in the result.
if (!empty($this->response->data[0]->attributes->location_id)) {
    $this->load->model('m_locations');
    $this->response->included = array_merge($this->response->included, $this->m_locations->read($this->response->data[0]->attributes->location_id));
}

# All orgs if screen
if ($this->response->meta->format == 'screen') {
    $this->orgs = $this->m_orgs->collection($this->user->id);
}

# configuration
# Leave this here and not in the controller because we load the response->data above (in this file) and not in the controller
if ($this->response->meta->collection == 'configuration') {
    if (!empty($this->response->data) and $this->response->data[0]->attributes->name == 'discovery_default_scan_option') {
        $this->load->model('m_discovery_scan_options');
        $options = $this->m_discovery_scan_options->collection($this->user->id);
        $this->response->included = array_merge($this->response->included, $options);
    }
}

$timer_end = microtime(true);
$entry = new stdClass();
$entry->time = ($timer_end - $timer_start);
$entry->detail = 'include_read::read';
$entry->time_now = time();
$GLOBALS['timer_log'][] = $entry;

# required for the templates
if ($this->m_users->get_user_permission("", $this->response->meta->collection, "u")) {
    $this->response->edit = true;
}

if (empty($this->response->data) or !is_array($this->response->data) or count($this->response->data) == 0) {
    log_error('ERR-0002', $this->response->meta->collection . ':read');
    $this->session->set_flashdata('error', 'No object could be retrieved when ' . $this->response->meta->collection . ' called m_' . $this->response->meta->collection . '->read.');
    if ($this->response->meta->format != 'json') {
        redirect($this->response->meta->collection);
    }
} else {
    output($this->response);
}

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
