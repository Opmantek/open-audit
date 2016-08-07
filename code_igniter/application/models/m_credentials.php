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
        if (!empty($CI->response->meta->properties)) {
            $temp = explode(',', $CI->response->meta->properties);
            for ($i=0; $i<count($temp); $i++) {
                if (strpos($temp[$i], '.') === false) {
                    $temp[$i] = 'credentials.'.trim($temp[$i]);
                } else {
                    $temp[$i] = trim($temp[$i]);
                }
            }
            $properties = implode(',', $temp);
        }
        return($properties);
    }

    private function build_filter() {
        $CI = & get_instance();
        $reserved = ' properties limit resource action sort current offset format ';
        $filter = '';
        if (!empty($CI->response->meta->filter)) {
            foreach ($CI->response->meta->filter as $item) {
                if (strpos(' '.$item->name.' ', $reserved) === false) {
                    $filter .= ' AND ' . $item->name . ' ' . $item->operator . ' ' . '"' . $item->value . '"';
                }
            }
            if ($filter != '') {
                $filter = substr($filter, 5);
                $filter = ' WHERE ' . $filter;
            }
        }
        return($filter);
    }

    public function read($id = '')
    {
        $CI = & get_instance();
        if ($id == '') {
            $id = @intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        if (empty($id)) {
            return null;
        }
        $sql = "SELECT * FROM credentials WHERE id = ?";
        $result = $this->run_sql($sql, array($id));
        $result = $this->format_data($result, 'credentials');
        if (!empty($result[0]->attributes->credentials)) {
            $result[0]->attributes->credentials = json_decode($this->encrypt->decode($result[0]->attributes->credentials));
        }
        if ($result) {
            return($result);
        } else {
            return null;
        }
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
        if (!empty($CI->response->meta->collection) and $CI->response->meta->collection == 'credentials') {
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
        } else {
            $properties = '*';
            $filter = '';
            $sort = '';
            $limit = '';
        }
        # get the total count
        $sql = "SELECT COUNT(*) as `count` FROM `credentials`";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();
        if (!empty($CI->response->meta->total)) {
            $CI->response->meta->total = intval($result[0]->count);
        }
        # get the response data
        $sql = "SELECT " . $properties . " FROM `credentials` " . $filter . " " . $sort . " " . $limit;
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'credentials');
        for ($i=0; $i < count($result); $i++) { 
            if (!empty($result[$i]->attributes->credentials)) {
                $result[$i]->attributes->credentials = json_decode($this->encrypt->decode($result[$i]->attributes->credentials));
            }
        }
        return ($result);
    }

    public function delete()
    {
        $CI = & get_instance();
        $sql = "DELETE FROM `credentials` WHERE id = ?";
        $data = array(intval($CI->response->meta->id));
        $this->run_sql($sql, $data);
        return true;
    }

    public function create()
    {
        $CI = & get_instance();
        $log = new stdClass();
        $log->severity = 7;
        $log->file = 'system';

        if (!empty($CI->response->meta->received_data->attributes->type)) {
            $type = $CI->response->meta->received_data->attributes->type;
            $log->message = "Using type from received_data.";
            stdlog($log);
        } else {
            $type = $CI->response->meta->collection;
            $log->message = "Using type from collection.";
            stdlog($log);
        }

        # Required
        if (!empty($CI->response->meta->received_data->attributes->credentials)) {
            $credentials = (string)$this->encrypt->encode(json_encode($CI->response->meta->received_data->attributes->credentials));
            $log->message = "Using credentials from received_data.";
            stdlog($log);
        } else {
            $log->message = "Credentials not supplied - exiting." . json_encode($CI->response->meta);
            stdlog($log);
            return false;
        }

        # Required
        if (!empty($CI->response->meta->received_data->attributes->name)) {
            $name = (string)$CI->response->meta->received_data->attributes->name;
            $log->message = "Using name from received_data.";
            stdlog($log);
        } else {
            $log->message = "Name not supplied - exiting.";
            stdlog($log);
            return false;
        }

        # Optional
        if (!empty($CI->response->meta->received_data->attributes->description)) {
            $description = (string)$CI->response->meta->received_data->attributes->description;
            $log->message = "Using description from received_data.";
            stdlog($log);
        } else {
            $description = '';
        }

        # check to see if we already have a set of credentials with the same name
        $sql = "SELECT COUNT(id) AS count FROM `credentials` WHERE `name` = ?";
        $data = array($name);
        $result = $this->run_sql($sql, $data);
        if (intval($result[0]->count) != 0) {
            $log->message = "Duplicate name found - exiting.";
            stdlog($log);
            log_error('ERR-0010', 'm_credentials::create');
            return false;
        }

        # Insert the new item
        $sql = "INSERT INTO `credentials` (id, name, description, type, credentials, org_id, edited_by, edited_date) VALUES (NULL, ?, ?, ?, ?, ?, ?, NOW())";
        $data = array($name, $description, $type, $credentials, "0", $CI->user->full_name);
        $this->run_sql($sql, $data);
        $id = @$this->db->insert_id();
        if (!empty($id)) {
            $log->message = "Credentials created.";
            stdlog($log);
            return $id;
        } else {
            $log->message = "Credentials NOT created.";
            stdlog($log);
            return false;
        }
    }
}
