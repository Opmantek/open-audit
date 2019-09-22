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
* @version   3.2.2
* @link      http://www.open-audit.org
 */
class M_queries extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
    }

    public function create($data = null)
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'creating data';
        $this->log->summary = 'start';
        stdlog($this->log);
        $CI = & get_instance();
        $data_array = array();
        $sql = "INSERT INTO `queries` (";
        $sql_data = "";
        if (is_null($data)) {
            if (!empty($CI->response->meta->received_data->attributes)) {
                $data = $CI->response->meta->received_data->attributes;
            } else {
                log_error('ERR-0010', 'm_queries::create');
                return false;
            }
        }
        // TODO - fix the second test below to use a regex to account for multiple spaces
        if (stripos($data->sql, 'where @filter') === false or stripos($data->sql, 'where @filter or') !== false) {
            // We don't have the HIGHLY RECOMMENDED @filter in our SQL
            // Ensure the user creating this query has the admin role
            $allowed = false;
            foreach ($CI->user->roles as $key => $value) {
                if ($value == 'admin') {
                    $allowed = true;
                }
            }
            if (!$allowed) {
                unset($allowed);
                log_error('ERR-0022', 'm_queries::create');
                return false;
            }
            unset($allowed);
        }
        foreach ($this->db->field_data('queries') as $field) {
            if (!empty($data->{$field->name}) and $field->name != 'id') {
                $sql .= "`" . $field->name . "`, ";
                $sql_data .= "?, ";
                $data_array[] = (string)$data->{$field->name};
            }
        }
        if (count($data_array) == 0 or empty($data->org_id) or empty($data->name) or empty($data->sql)) {
            log_error('ERR-0021', 'm_queries::create');
            return false;
        }
        $sql .= 'edited_by, edited_date';        // the user.name and timestamp
        $sql_data .= '?, NOW()';                 // the user.name and timestamp
        $data_array[] = $CI->user->full_name;    // the user.name
        $sql .= ") VALUES (" . $sql_data . ")";
        $id = intval($this->run_sql($sql, $data_array));
        $this->log->summary = 'finish';
        stdlog($this->log);
        return ($id);
    }

    public function read($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->summary = 'start';
        stdlog($this->log);
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "SELECT * FROM queries WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'queries');
        $this->log->summary = 'finish';
        stdlog($this->log);
        return ($result);
    }

    public function update()
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'updating data';
        $this->log->summary = 'start';
        stdlog($this->log);
        $CI = & get_instance();
        $sql = '';
        $data_items = array();
        $fields = ' name org_id description sql ';
        foreach ($CI->response->meta->received_data->attributes as $key => $value) {
            if ($key == 'sql') {
                // TODO - fix the second test below to use a regex to account for multiple spaces
                if (stripos($value, 'where @filter') === false or stripos($value, 'where @filter or') !== false) {
                    // We don't have the HIGHLY RECOMMENDED @filter in our SQL
                    // Ensure the user creating this query has the admin role
                    $allowed = false;
                    foreach ($CI->user->roles as $item => $string) {
                        if ($string == 'admin') {
                            $allowed = true;
                        }
                    }
                    if (!$allowed) {
                        unset($allowed);
                        log_error('ERR-0022', 'm_queries::create');
                        return false;
                    }
                    unset($allowed);
                }
            }
            if (strpos($fields, ' '.$key.' ') !== false) {
                if ($sql == '') {
                    $sql = "SET `" . $key . "` = ?";
                } else {
                    $sql .= ", `" . $key . "` = ?";
                }
                $data_items[] = $value;
            }
        }
        $sql = "UPDATE `queries` " . $sql . " WHERE id = " . intval($CI->response->meta->id);
        $this->run_sql($sql, $data_items);
        $this->log->summary = 'finish';
        stdlog($this->log);
        return;
    }

    public function delete($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        $this->log->summary = 'start';
        stdlog($this->log);
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        if ($id != 1) {
            $CI = & get_instance();
            $sql = "DELETE FROM `queries` WHERE id = ?";
            $data = array(intval($id));
            $this->run_sql($sql, $data);
            $this->log->summary = 'finish';
            stdlog($this->log);
            return true;
        } else {
            log_error('ERR-0013', 'm_queries::delete');
            $this->log->summary = 'finish';
            stdlog($this->log);
            return false;
        }
    }

    public function collection()
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->summary = 'start';
        stdlog($this->log);
        $CI = & get_instance();
        $sql = "SELECT queries.*, orgs.name AS `org_name` FROM queries LEFT JOIN orgs ON (queries.org_id = orgs.id) WHERE queries.org_id IN (" . $CI->user->org_list . ") GROUP BY queries.name";
        $sql = "SELECT queries.*, orgs.name AS `org_name` FROM queries LEFT JOIN orgs ON (queries.org_id = orgs.id) WHERE queries.org_id IN (" . $CI->user->org_list . ") GROUP BY queries.id";
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'queries');
        $this->log->summary = 'finish';
        stdlog($this->log);
        return ($result);
    }

    public function execute($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->summary = 'start';
        stdlog($this->log);
        $CI = & get_instance();
        if ($id == '') {
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        # TODO - add a count for the total returned in response->meta->filtered
        $sql = "SELECT * FROM queries WHERE id = ?";
        $data = array($id);
        $queries = $this->run_sql($sql, $data);
        if (!empty($queries)) {
            $query = $queries[0];
            # below accounts for queries that end in a ; and/or a CR or spaces, etc
            # when we add on LIMIT = 12345, it will break unless we strip those characters
            $sql = trim($query->sql);
            if (strpos($sql, ';') == strlen($sql)-1) {
                $sql = substr($sql, 0, strlen($sql)-1);
                $sql = trim($sql);
            }
            unset($queries);
            $filter = "system.org_id IN (" . $CI->user->org_list . ")";
            $user_filter = $this->build_filter();
            if (!empty($user_filter)) {
                $filter .= $user_filter;
            }
            $sql = str_ireplace('WHERE @filter', "WHERE $filter", $sql);
            $sql .= ' ' . $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'queries');
            $this->log->summary = 'finish';
            stdlog($this->log);
        }
        if (empty($result)) {
            return array();
        }
        if (!empty($CI->response->meta->format) == 'json') {
            if (isset($result[0]->attributes->{'system.credentials'}))  {
                $this->load->library('encrypt');
                $this->load->model('m_credentials');
                $credentials = $this->m_credentials->collection();
                $device_ids = array();
                foreach ($result as $device) {
                    $device_ids[] = $device->attributes->{'system.id'};
                    $credentials_array = json_decode($device->{'attributes'}->{'system.credentials'});
                    if (!empty($credentials_array)) {
                        foreach ($credentials_array as $credential_id) {
                            foreach ($credentials as $credential) {
                                if ($credential->id == $credential_id) {
                                    $type = $credential->attributes->type;
                                    foreach ($credential->attributes->credentials as $key => $value) {
                                        $device->attributes->{'credentials.'.$type.'.'.$key} = $value;
                                    }
                                }
                            }
                        }
                    }
                }
                $ids = implode(',', $device_ids);
                $sql = "SELECT * FROM `credential` WHERE `system_id` IN ($ids)";
                $credentials = $this->run_sql($sql, array());
                foreach ($credentials as $credential) {
                    foreach ($result as $device) {
                        if ($device->{'attributes'}->{'system.id'} == $credential->system_id) {
                            $decoded = json_decode(simpleDecrypt($credential->credentials));
                            $type = $credential->type;
                            foreach ($decoded as $key => $value) {
                                $device->attributes->{'credentials.'.$type.'.'.$key} = $value;
                            }
                        }
                    }
                }
                foreach ($result as $device) {
                    $device->{'attributes'}->{'system.collect'} = 'false';
                    foreach ($device->{'attributes'} as $key => $value) {
                        if (stripos($key, 'credentials.') === 0) {
                            $device->{'attributes'}->{'system.collect'} = 'true';
                        }
                    }
                }
            }
        }
        return $result;
    }

    public function sub_resource($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->summary = 'start';
        stdlog($this->log);
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.description AS `system.description`, system.os_family AS `system.os_family`, system.status AS `system.status` FROM system WHERE system.location_id = ?";
        $data = array((string)$id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'devices');
        $this->log->summary = 'finish';
        stdlog($this->log);
        return $result;
    }







    private function build_filter()
    {
        $CI = & get_instance();
        $reserved = ' properties limit sub_resource action sort current offset format ';
        $filter = '';
        foreach ($CI->response->meta->filter as $item) {
            if (strpos(' '.$item->name.' ', $reserved) === false) {
                if ($item->name == 'id') {
                    $item->name = 'system.id';
                }
                if (!empty($item->name) and $item->operator != 'in') {
                    $filter .= ' AND ' . $item->name . ' ' . $item->operator . ' ' . '"' . $item->value . '"';
                }
                if (!empty($item->name) and $item->operator == 'in') {
                    $filter .= ' AND ' . $item->name . ' in ' . $item->value;
                }
            }
        }
        // if (stripos($filter, ' status ') === false and stripos($filter, ' system.status ') === false) {
        //     $filter .= ' AND system.status = "production"';
        //     $temp = new stdClass();
        //     $temp->name = 'system.status';
        //     $temp->operator = '=';
        //     $temp->value = 'production';
        //     $CI->response->meta->filter[] = $temp;
        //     unset($temp);
        // }
        return($filter);
    }

}
