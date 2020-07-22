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
* @version   GIT: Open-AudIT_3.4.0
* @link      http://www.open-audit.org
*/
$timer_start = microtime(true);
$this->load->model('m_database');
$db_table = $this->response->meta->collection;
if ($this->response->meta->collection === 'devices') {
	$db_table = 'system';
}
$this->response->data = $this->m_database->read($db_table);

$timer_end = microtime(true);
$entry = new stdClass();
$entry->time = ($timer_end - $timer_start);
$entry->detail = 'include_import_form::import_form';
$entry->time_now = time();
$GLOBALS['timer_log'][] = $entry;

output($this->response);

// End of file include_import_form.php
// Location: ./controllers/include_import_form.php
