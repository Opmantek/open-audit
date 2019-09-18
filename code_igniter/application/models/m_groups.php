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
* @category  Model
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   3.2.1
* @link      http://www.open-audit.org
 */
class M_groups extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
    }

    public function read($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "SELECT * FROM groups WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'groups');
        return ($result);
    }

    public function delete($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        stdlog($this->log);
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        if ($id != 1) {
            $CI = & get_instance();
            $sql = "DELETE FROM `groups` WHERE id = ?";
            $data = array(intval($id));
            $this->run_sql($sql, $data);
            return true;
        } else {
            log_error('ERR-0013', 'm_groups::delete');
            return false;
        }
    }

    public function collection()
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $CI = & get_instance();
        $sql = "SELECT groups.*, orgs.name AS `org_name` FROM groups LEFT JOIN orgs ON (groups.org_id = orgs.id) WHERE groups.org_id IN (" . $CI->user->org_list . ")";
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'groups');
        return ($result);
    }
}
