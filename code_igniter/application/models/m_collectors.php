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
* @version   2.0.12
* @link      http://www.open-audit.org
 */
class M_collectors extends MY_Model
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
        $sql = "SELECT * FROM `collectors` WHERE `id` = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'collectors');
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
            $CI = & get_instance();
            $sql = "DELETE FROM `collectors` WHERE `id` = ?";
            $data = array(intval($id));
            $this->run_sql($sql, $data);
            return true;
        } else {
            return false;
        }
    }

    public function upsert()
    {
        $CI = & get_instance();
        $sql = "/* logon */ " . "SELECT * FROM `collectors` WHERE uuid = ?";
        $query = $this->db->query($sql, array($CI->input->post('uuid')));
        $CI->response->meta->sql[] = $this->db->last_query();
        $result = $query->result();
        if (!empty($result)) {
            if ($result[0]->ip != $_SERVER['REMOTE_ADDR']) {
                log_error('ERR-0031', current_url());
                $CI->response->errors[0]->detail = "A collector can only log in from a single IP address. Supplied IP (" . $_SERVER['REMOTE_ADDR'] . ") does not match IP on record (" . $result[0]->ip . ").";
                // header($this->response->meta->header);
                // header('Content-Type: application/json');
                // print_r(json_encode($this->response));
                // $this->session->sess_destroy();
                // exit();
                return;
            }
            $sql = "/* logon */ " . "UPDATE `collectors` SET `status` = 'pending' WHERE id = " . $result[0]->id;
            $query = $this->db->query($sql);
            $CI->response->meta->sql[] = $this->db->last_query();
            $result[0]->status = 'pending';
            unset($result[0]->password);
            $return = array();
            foreach ($result as $entry) {
                $item = new stdClass();
                $item->id = intval($entry->id);
                $item->type = 'collectors';
                $item->attributes = $entry;
                $item->links = new stdClass();
                $item->links->self = $this->config->config['base_url'] . 'index.php/collectors/' . $item->id;
                $return[] = $item;
                unset($item);
            }
            $CI->response->data = $return;
            // header('Content-Type: application/json');
            // print_r(json_encode($this->response));
            // exit();
            return;
        } else {
            # create our collector item
            $sql = "/* logon */ " . "INSERT INTO `collectors` VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
            $temp = @$CI->input->post('collector_name');
            if (empty($temp)) {
                $name = $CI->input->post('username') . ' from ' . $_SERVER['REMOTE_ADDR'];
            } else {
                $name = $CI->input->post('collector_name');
            }
            $description = $CI->input->post('username') . ' from ' . $_SERVER['REMOTE_ADDR'] . ' using ' . $CI->input->post('uuid');
            $data = array($name, intval($CI->user->org_id), $description, (string)$_SERVER['REMOTE_ADDR'], 'created', $this->config->config['collector_check_minutes'], $CI->user->id, $CI->input->post('uuid'), '', 'system');
            $query = $this->db->query($sql, $data);
            $CI->response->meta->sql[] = $this->db->last_query();
            # return this new collector
            $sql = "/* logon */ " . "SELECT * FROM `collectors` WHERE id = ?";
            $query = $this->db->query($sql, array($this->db->insert_id()));
            $CI->response->meta->sql[] = $this->db->last_query();
            $result = $query->result();
            $return = array();
            foreach ($result as $entry) {
                $item = new stdClass();
                $item->id = intval($entry->id);
                $item->type = 'collectors';
                $item->attributes = $entry;
                $item->links = new stdClass();
                $item->links->self = $this->config->config['base_url'] . 'index.php/collectors/' . $item->id;
                $return[] = $item;
                unset($item);
            }
            $CI->response->data = $return;
            // header('Content-Type: application/json');
            // print_r(json_encode($this->response));
            // exit();
            return;
        }
    }
}
