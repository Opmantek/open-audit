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
 * @version 1.12.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_credentials extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('encrypt');
        $this->load->helper('log_helper');
    }

    private function build_properties() {
        $CI = & get_instance();
        $properties = '';
        $temp = explode(',', $CI->response->meta->properties);
        for ($i=0; $i<count($temp); $i++) {
            if (strpos($temp[$i], '.') === false) {
                $temp[$i] = 'credentials.'.trim($temp[$i]);
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

    public function read()
    {
        $CI = & get_instance();
        $properties = $this->build_properties();
        $sql = "SELECT " . $properties . " FROM credentials WHERE id = ?";
        $sql = $this->clean_sql($sql);
        $data = array(intval($CI->response->meta->id));
        $temp_debug = $this->db->db_debug;
        $this->db->db_debug = FALSE;
        $query = $this->db->query($sql, $data);
        if ($CI->response->meta->debug) {
            $CI->response->meta->sql = $this->db->last_query();
        }
        $this->db->db_debug = $temp_debug;
        if ($this->db->_error_message()) {
            if (empty($CI->error)) {
                $CI->error = new stdClass();
            }
            $CI->error->controller = $CI->response->meta->collection . '::' . $CI->response->meta->action;
            $CI->error->function = 'm_credentials::read';
            $CI->error->code = 'ERR-0009';
            log_error($CI->error->code, $CI->error->function);
            $CI->response->error->detail_specific = $this->db->_error_message();
            return false;
        }
        $result = $query->result();
        if (!empty($result[0]->credentials)) {
            $result[0]->credentials = json_decode($this->encrypt->decode($result[0]->credentials));
        }
        $result = $this->format_data($result, 'credentials');
        return($result);
    }

    /*
    ssh - username, password
    windows - username, password
    snmp - community
    snmp_v3 - security_name, security_level, authentication_protocol, authentication_passphrase, privacy_protocol, privacy_passphrase
    */

    public function update()
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->file = 'system';
        $CI = & get_instance();

        $sql = 'UPDATE `credentials` SET ';
        $data = array();
        # echo "<pre>\n"; var_dump($CI->response); exit();
        # credentials object
        #if ( $CI->input->server('REQUEST_METHOD') == 'PATCH' and !empty($CI->response->received_data->attributes->credentials)) {
        if ( !empty($CI->response->meta->received_data->attributes->credentials)) {
            $received_credentials = new stdClass();
            foreach ($CI->response->meta->received_data->attributes->credentials as $key => $value) {
                    $received_credentials->$key = $value;
            }
            $select = "SELECT * FROM credentials WHERE id = ?";
            $existing_credentials = $this->run_sql($select, array($CI->response->meta->id));
            $existing_credentials = json_decode($this->encrypt->decode($existing_credentials[0]->credentials));
            $new_credentials = new stdClass();
            foreach ($existing_credentials as $existing_key => $existing_value) {
                if (!empty($received_credentials->$existing_key)) {
                    $new_credentials->$existing_key = $received_credentials->$existing_key;
                } else {
                    $new_credentials->$existing_key = $existing_credentials->$existing_key;
                }
            }
            $sql .= "`credentials` = ?, ";
            $data[] = (string)$this->encrypt->encode(json_encode($new_credentials));
        }
        
        if (!empty($CI->response->meta->received_data->attributes->name)) {
            $sql .= "`name` = ?, ";
            $data[] = $CI->response->meta->received_data->attributes->name;
        }

        if (!empty($CI->response->meta->received_data->attributes->description)) {
            $sql .= "`description` = ?, ";
            $data[] = $CI->response->meta->received_data->attributes->description;
        }

        if ($sql == 'UPDATE `credentials` SET ') {
            # TODO - THROW AN ERROR, no credentials or name or description supplied for updating
        }
        $sql .= " `edited_by` = ?, `edited_date` = NOW() WHERE id = ?";
        $data[] = (string)$CI->user->full_name;
        $data[] = intval($CI->response->meta->id);
        $this->run_sql($sql, $data);
        return;
    }

    public function collection()
    {
        $CI = & get_instance();
        $filter = $this->build_filter();
        $properties = $this->build_properties();
        if ($CI->response->meta->internal->limit != '') {
            $limit = $CI->response->meta->internal->limit;
        } else {
            $limit = '';
        }

        # get the total credential count
        $sql = "SELECT COUNT(*) as `count` FROM credentials WHERE credentials.org_id IN (" . $CI->user->org_list . ")";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();
        $CI->response->meta->total = intval($result[0]->count);

        $sql = "SELECT " . $properties . " FROM credentials WHERE credentials.org_id IN (" . $CI->user->org_list . ") " . $limit;

        $sql = $this->clean_sql($sql);
        $temp_debug = $this->db->db_debug;
        $this->db->db_debug = FALSE;
        $query = $this->db->query($sql);
        if ($CI->response->meta->debug) {
            $CI->response->meta->sql = $this->db->last_query();
        }
        $this->db->db_debug = $temp_debug;
        if ($this->db->_error_message()) {
            if (empty($CI->error)) {
                $CI->error = new stdClass();
            }
            $CI->error->controller = $CI->response->meta->collection . '::' . $CI->response->meta->action;
            $CI->error->function = 'm_credentials::collection';
            $CI->error->code = 'ERR-0009';
            log_error($CI->error->code, $CI->error->function);
            $CI->response->errors[count($this->response->errors)-1]->detail_specific = $this->db->_error_message();
            return false;
        }
        $result = $query->result();
        for ($i=0; $i < count($result); $i++) { 
            if (!empty($result[$i]->credentials)) {
                $result[$i]->credentials = json_decode($this->encrypt->decode($result[$i]->credentials));
            }
        }
        $result = $this->format_data($result, 'credentials');
        return $result;
    }

    public function delete()
    {
        $CI = & get_instance();
        $sql = "DELETE FROM `credentials` WHERE id = ?";
        $data = array(intval($CI->response->meta->id));
        $this->run_sql($sql, $data);
        return;
    }

    public function create()
    {
        $CI = & get_instance();
        # check to see if we already have a set of credentials with the same name
        $sql = "SELECT COUNT(id) AS count FROM `credentials` WHERE `name` = ?";
        $data = array($CI->response->meta->received_data->attributes->name);
        $result = $this->run_sql($sql, $data);
        if (intval($result[0]->count) != 0) {
            log_error('ERR-0010', 'm_credentials::create');
            return false;
        }
        $sql = "INSERT INTO `credentials` (id, name, description, type, credentials, org_id, edited_by, edited_date) VALUES (NULL, ?, ?, ?, ?, ?, ?, NOW())";
        $data = array($CI->response->meta->received_data->attributes->name, $CI->response->meta->received_data->attributes->description, $CI->response->meta->received_data->attributes->type, (string)$this->encrypt->encode(json_encode($CI->response->meta->received_data->attributes->credentials)), "0", $CI->user->full_name);
        $this->run_sql($sql, $data);
        return $this->db->insert_id();
    }
}
