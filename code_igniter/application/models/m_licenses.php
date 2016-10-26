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
class M_licenses extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function read($id = '')
    {
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "SELECT * FROM licenses WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'licenses');
        return($result);
    }

    public function create()
    {
        $CI = & get_instance();
        if (empty($CI->response->meta->received_data->org_id)) {
            $CI->response->meta->received_data->org_id = 1;
        }
        $CI->response->meta->received_data->attributes->invoice_id = 0;
        $CI->response->meta->received_data->attributes->invoice_item_id = 0;
        $sql = "INSERT INTO `licenses` VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, NOW())";
        $data = array(  $CI->response->meta->received_data->attributes->org_id,
                        $CI->response->meta->received_data->attributes->invoice_id,
                        $CI->response->meta->received_data->attributes->invoice_item_id,
                        $CI->response->meta->received_data->attributes->name,
                        $CI->response->meta->received_data->attributes->description,
                        $CI->response->meta->received_data->attributes->type,
                        $CI->user->full_name);
        $this->run_sql($sql, $data);
        return $this->db->insert_id();
    }

    public function collection()
    {
        $CI = & get_instance();
        $sql = $this->collection_sql('licenses', 'sql');
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'licenses');
        return ($result);
    }

    public function update()
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->file = 'system';
        $CI = & get_instance();

        $sql = 'UPDATE `licenses` SET ';
        $data = array();
        $log->message = json_encode($CI->response->meta->received_data);
        stdlog($log);
        if ( !empty($CI->response->meta->received_data->attributes->options)) {
            $received_options = new stdClass();
            foreach ($CI->response->meta->received_data->attributes->options as $key => $value) {
                    $received_options->$key = $value;
            }
            $select = "SELECT * FROM licenses WHERE id = ?";
            $existing_options = $this->run_sql($select, array($CI->response->meta->id));
            $existing_options = json_decode($existing_options[0]->options);
            $new_options = new stdClass();
            foreach ($existing_options as $existing_key => $existing_value) {
                if (!empty($received_options->$existing_key)) {
                    $new_options->$existing_key = $received_options->$existing_key;
                } else {
                    $new_options->$existing_key = $existing_options->$existing_key;
                }
            }
            $sql .= "`options` = ?, ";
            $data[] = (string)json_encode($new_options);
        }
        
        if (!empty($CI->response->meta->received_data->attributes->name)) {
            $sql .= "`name` = ?, ";
            $data[] = $CI->response->meta->received_data->attributes->name;
        }

        if (!empty($CI->response->meta->received_data->attributes->description)) {
            $sql .= "`description` = ?, ";
            $data[] = $CI->response->meta->received_data->attributes->description;
        }

        if ($sql == 'UPDATE `licenses` SET ') {
            # TODO - THROW AN ERROR, no credentials or name or description supplied for updating
        }
        $sql .= " `edited_by` = ?, `edited_date` = NOW() WHERE id = ?";
        $data[] = (string)$CI->user->full_name;
        $data[] = intval($CI->response->meta->id);
        $this->run_sql($sql, $data);
        return;
    }

    public function delete($id = '')
    {
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "DELETE FROM `licenses` WHERE id = ?";
        $data = array(intval($id));
        $this->run_sql($sql, $data);
        return true;
    }

    private function count_data($result)
    {
        // do we have any retrieved rows?
        $CI = & get_instance();
        $trace = debug_backtrace();
        $caller = $trace[1];
        if (count($result) == 0) {
            log_error('ERR-0005', strtolower(@$caller['class'] . '::' . @$caller['function']));
        }
    }

}
