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
 * @version   1.14.2

 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_credentials extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
        $this->load->library('encrypt');
    }

    public function create($data = null)
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'creating data';
        stdlog($this->log);
        $CI = & get_instance();
        $data_array = array();
        $sql = "INSERT INTO `credentials` (";
        $sql_data = "";
        $this->load->library('encrypt');

        if (is_null($data)) {
            if (!empty($CI->response->meta->received_data->attributes)) {
                $data = $CI->response->meta->received_data->attributes;
            } else {
                log_error('ERR-0010', 'm_credentials::create');
                return false;
            }
        }
        foreach ($this->db->field_data('credentials') as $field) {
            if (!empty($data->{$field->name}) and $field->name != 'id') {
                $sql .= "`" . $field->name . "`, ";
                $sql_data .= "?, ";
                if ($field->name == 'credentials') {
                    if (is_string($data->credentials)) {
                        $data->credentials = str_replace("'", '"', $data->credentials);
                    }
                    $data_array['credentials'] = (string)$this->encrypt->encode(json_encode($data->credentials));
                } else {
                    $data_array[] = (string)$data->{$field->name};
                }
            }
        }
        if (count($data_array) == 0 or empty($data->org_id) or empty($data->name) or empty($data->type) or empty($data->credentials)) {
            echo "<pre>\n"; print_r($data); echo "</pre>\n";
            log_error('ERR-0021', 'm_credentials::create');
            return false;
        }
        $data_array['credentials'] = (string)$this->encrypt->encode(json_encode($data->credentials));
        $sql .= 'edited_by, edited_date';        // the user.name and timestamp
        $sql_data .= '?, NOW()';                 // the user.name and timestamp
        $data_array[] = $CI->user->full_name;    // the user.name
        $sql .= ") VALUES (" . $sql_data . ")";
        $id = intval($this->run_sql($sql, $data_array));
        return ($id);
    }

    public function read($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
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
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'updating data';
        stdlog($this->log);
        $log = new stdClass();
        $log->severity = 7;
        $log->file = 'system';
        $CI = & get_instance();

        $sql = 'UPDATE `credentials` SET ';
        $data = array();

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

    public function delete()
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        stdlog($this->log);
        $CI = & get_instance();
        $sql = "DELETE FROM `credentials` WHERE id = ?";
        $data = array(intval($CI->response->meta->id));
        $this->run_sql($sql, $data);
        return true;
    }

    public function collection()
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $CI = & get_instance();
        $sql = $this->collection_sql('credentials', 'sql');
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'credentials');
        for ($i=0; $i < count($result); $i++) { 
            if (!empty($result[$i]->attributes->credentials)) {
                $result[$i]->attributes->credentials = json_decode($this->encrypt->decode($result[$i]->attributes->credentials));
            }
        }
        return ($result);
    }
}
