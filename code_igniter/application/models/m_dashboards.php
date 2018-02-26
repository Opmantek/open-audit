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
* @version   2.2
* @link      http://www.open-audit.org
 */
class M_dashboards extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
    }

    public function create()
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'creating data';
        stdlog($this->log);
        $CI = & get_instance();

        # name check
        if (empty($CI->response->meta->received_data->attributes->name)) {
            return false;
        } else {
            $name = $CI->response->meta->received_data->attributes->name;
        }

        if (empty($CI->response->meta->received_data->attributes->org_id)) {
            $org_id = intval($this->user->org_id);
        } else {
            $org_id = intval($CI->response->meta->received_data->attributes->org_id);
        }
        if (empty($CI->response->meta->received_data->attributes->type)) {
            $type = "user";
        } else {
            $type = $CI->response->meta->received_data->attributes->type;
        }
        if ($type != 'default' and $type != 'org' and $type != 'user') {
            $type = "user";
        }
        if (empty($CI->response->meta->received_data->attributes->user_id)) {
            $user_id = '0';
        } else {
            $user_id = intval($CI->response->meta->received_data->attributes->user_id);
        }
        if (empty($CI->response->meta->received_data->attributes->description)) {
            $description = '';
        } else {
            $description = $CI->response->meta->received_data->attributes->description;
        }
        if (empty($CI->response->meta->received_data->attributes->options)) {
            $options = '';
        } else {
            $options = $CI->response->meta->received_data->attributes->options;
        }
        $options = json_encode($options);

        if (empty($CI->user->name)) {
            $user = '';
        } else {
            $user = $CI->user->name;
        }
        $sql = "INSERT INTO `dashboards` VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, NOW())";
        $data = array("$name", intval($org_id), "$type", intval($user_id), $description, $options, $user);
        $id = intval($this->run_sql($sql, $data));
        return ($id);
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
        $sql = "SELECT * FROM dashboards WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        if (!empty($result[0]->options)) {
            $result[0]->options = json_decode($result[0]->options);
        }
        $result = $this->format_data($result, 'dashboards');
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
        if ($id != 0) {
            // do NOT allow deleting the default roles
            $sql = "SELECT type FROM dashboards WHERE id = ?";
            $data = array($id);
            $result = $this->run_sql($sql, $data);
            if ($result[0]->type == 'default') {
                log_error('ERR-0013', 'm_dashboards::delete');
                return false;
            }
            // attempt to delete the item
            $sql = "DELETE FROM `dashboards` WHERE id = ?";
            $data = array($id);
            $this->run_sql($sql, $data);
            return true;
        } else {
            log_error('ERR-0013', 'm_dashboards::delete');
            return false;
        }
    }

    public function collection()
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $CI = & get_instance();
        if (!$this->db->table_exists('dashboards')) {
            return;
        }
        if (!empty($CI->response->meta->collection) and $CI->response->meta->collection == 'dashboards') {
            $filter = $this->build_filter();
            $properties = $this->build_properties();
            if ($CI->response->meta->sort == '') {
                $sort = 'ORDER BY id';
            } else {
                $sort = 'ORDER BY ' . $CI->response->meta->sort;
            }
            if ($CI->response->meta->limit == '') {
                $limit = '';
            } else {
                $limit = 'LIMIT ' . intval($CI->response->meta->limit);
                if ($CI->response->meta->offset != '') {
                    $limit = $limit . ', ' . intval($CI->response->meta->offset);
                }
            }
            # get the total count
            $sql = "SELECT COUNT(*) as `count` FROM `dashboards`";
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql);
            $result = $query->result();
            if (!empty($CI->response->meta->total)) {
                $CI->response->meta->total = intval($result[0]->count);
            }
        } else {
            $properties = '*';
            $filter = '';
            $sort = '';
            $limit = '';
        }
        # get the response data
        $sql = "SELECT " . $properties . " FROM `dashboards` " . $filter . " " . $sort . " " . $limit;
        #$sql = "SELECT * FROM `dashboards`";
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'dashboards');
        return ($result);
    }

    private function build_properties() {
        $CI = & get_instance();
        $properties = '';
        $temp = explode(',', $CI->response->meta->properties);
        for ($i=0; $i<count($temp); $i++) {
            if (strpos($temp[$i], '.') === false) {
                $temp[$i] = 'roles.'.trim($temp[$i]);
            } else {
                $temp[$i] = trim($temp[$i]);
            }
        }
        $properties = implode(',', $temp);
        return($properties);
    }

    private function build_filter() {
        $CI = & get_instance();
        $reserved = ' properties limit resource action sort current offset format ';
        $filter = '';
        foreach ($CI->response->meta->filter as $item) {
            if (strpos(' '.$item->name.' ', $reserved) === false) {
                $filter .= ' AND ' . $item->name . ' ' . $item->operator . ' ' . '"' . $item->value . '"';
            }
        }
        if ($filter != '') {
            $filter = substr($filter, 5);
            $filter = ' WHERE ' . $filter;
        }
        return($filter);
    }
}
