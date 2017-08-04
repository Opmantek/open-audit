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
 *
 * @version   2.0.4
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_connections extends MY_Model
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
        $id = intval($id);
        if ($id === 0) {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        }
        if ($id !== 0) {
            $sql = "SELECT * FROM connections WHERE id = ?";
            $data = array($id);
            $result = $this->run_sql($sql, $data);
            $result = $this->format_data($result, 'connections');
            return ($result);
        }
        return false;
    }

    public function delete($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        stdlog($this->log);
        $id = intval($id);
        if ($id === 0) {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        }
        if ($id !== 0) {
            $CI = & get_instance();
            $sql = "DELETE FROM `connections` WHERE id = ?";
            $data = array(intval($id));
            $this->run_sql($sql, $data);
            return true;
        }
        return false;
    }

    public function collection()
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        // get a list of Orgs and Locations so we can populate the names
        $sql = "SELECT id, name FROM orgs";
        $result = $this->run_sql($sql, array());
        $orgs = $result;
        $sql = "SELECT id, name FROM locations";
        $result = $this->run_sql($sql, array());
        $items = $result;

        $sql = $this->collection_sql('connections', 'sql');
        $result = $this->run_sql($sql, array());
        if ($result !== false) {
            for ($i=0; $i < count($result); $i++) {
                $result[$i]->location_name_a = '';
                $result[$i]->location_name_b = '';
                foreach ($orgs as $org) {
                    if ($org->id == $result[$i]->org_id) {
                        $result[$i]->org_name = $org->name;
                    }
                }
                foreach ($items as $item) {
                    if ($item->id == $result[$i]->location_id_a) {
                        $result[$i]->location_name_a = $item->name;
                    }
                    if ($item->id == $result[$i]->location_id_b) {
                        $result[$i]->location_name_b = $item->name;
                    }
                }
            }
        }

        $result = $this->format_data($result, 'connections');
        return ($result);
    }
}
