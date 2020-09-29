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
* @category  Model
* @package   Queue
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.5.0
* @link      http://www.open-audit.org
*/

/**
* Base Model Queue
*
* @access   public
* @category Model
* @package  Queue
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_queue extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'success';
        $this->log->type = 'system';
    }

    /**
     * Create an individual item in the database
     * @param  [type] $type    [description]
     * @param  [type] $details [description]
     * @return [type]          [description]
     */
    public function create($type, $details)
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->action = 'insert';
        $this->log->summary = (string)$type;
        if (empty($details) OR empty($type)) {
            $this->log->status = 'fail';
            $this->log->message = 'Empty type or details supplied.';
            stdlog($this->log);
            return false;
        }
        if (is_string($details)) {
            $details = json_decode($details);
        }
        $name = '';
        $org_id = 1;
        if ( ! empty($details->name)) {
            $name = $details->name;
        }
        if ( ! empty($details->org_id)) {
            $org_id = intval($details->org_id);
        }
        $details = json_encode($details);

        $sql = '/* m_queue::create */ ' . "LOCK TABLES queue WRITE";
        $this->db->query($sql);
        $sql = '/* m_queue::create */ ' . "INSERT INTO `queue` VALUES (null, ?, ?, ?, 0, 'queued', ?, NOW(), '2000-01-01 00:00:00')";
        $data = array($name, $type, $org_id, $details);
        $this->db->query($sql, $data);
        $result = intval($this->db->insert_id());
        $this->log->detail = $this->db->last_query();
        $sql = '/* m_queue::create */ ' . "UNLOCK TABLES";
        $query = $this->db->query($sql);
        if ( ! empty($result)) {
            stdlog($this->log);
            return $result;
        } else {
            $this->log->status = 'fail';
            stdlog($this->log);
            return false;
        }
    }


    # Return a queue item or FALSE
    # If nothing left in queue table, reset auto-inc
    public function pop()
    {
        $queue_item = false;
        $sql = '/* m_queue::pop */ ' . "LOCK TABLES queue WRITE";
        $query = $this->db->query($sql);
        #$sql = '/* m_queue::pop */ ' . 'SELECT * FROM `queue` WHERE type = "ip_scan" ORDER BY `id` LIMIT 1';
        $sql = '/* m_queue::pop */ ' . 'SELECT * FROM `queue` ORDER BY `id` LIMIT 1';
        $query = $this->db->query($sql);
        $result = $query->result();
        if (empty($result)) {
            $sql = '/* m_queue::pop */ ' . 'ALTER TABLE queue AUTO_INCREMENT = 1';
            $query = $this->db->query($sql);
        } else {
            $queue_item = $result[0];
            $sql = '/* m_queue::pop */ ' . 'DELETE FROM `queue` WHERE `id` = ?';
            $data = array($queue_item->id);
            $query = $this->db->query($sql, $data);
        }
        $sql = '/* m_queue::pop */ ' . "UNLOCK TABLES";
        $query = $this->db->query($sql);
        return $queue_item;
    }

    /**
     * [start description]
     * @return [type] [description]
     */
    public function start()
    {
        if (php_uname('s') !== 'Windows NT') {
            $instance = '';
            if ($this->db->database !== 'openaudit') {
                $instance = '/' . $this->db->database;
            }
            $command = $this->config->config['base_path'] . '/other/execute.sh url=http://localhost' . $instance . '/open-audit/index.php/util/queue method=get > /dev/null 2>&1 &';
            if (php_uname('s') === 'Linux') {
                $command = 'nohup ' . $command;
            }
            @exec($command);
        } else {
            $filepath = $this->config->config['base_path'] . '\\other';
            $command = "%comspec% /c start /b cscript //nologo {$filepath}\\execute.vbs url=http://localhost/open-audit/index.php/util/queue method=post";
            pclose(popen($command, 'r'));
        }
    }

    /**
     * [read description]
     * @param  string $id [description]
     * @return [type]     Return a queue object on success or FALSE on failure
     */
    public function read($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->action = 'read';
        $this->log->summary = intval($id);
        $sql = '/* m_queue::read */ ' . 'SELECT * FROM `queue` WHERE `id` = ?';
        $data = array(intval($id));
        $result = $this->run_sql($sql, $data);
        if ( ! empty($result)) {
            stdlog($this->log);
            return ($result[0]);
        } else {
            $this->log->status = 'fail';
            stdlog($this->log);
            return false;
        }
    }

    # Return TRUE on success or FALSE on failure
    public function delete($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->action = 'delete';
        $this->log->summary = intval($id);
        $sql = "/* m_queue::delete */ " . "DELETE FROM `queue` WHERE `id` = ?";
        $data = array(intval($id));
        $this->db->query($sql, $data);
        $affected_rows = $this->db->affected_rows();
        if (!empty($affected_rows)) {
            stdlog($this->log);
            return true;
        } else {
            $this->log->status = 'fail';
            stdlog($this->log);
            return false;
        }
    }

    # Return a queue array on success or FALSE on failure
    public function collection($parameters)
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->action = 'collection';
        $type = '';
        if (!empty($parameters->type)) {
            $type = strtolower($parameters->type);
            $this->log->summary = 'Passed type: ' . $type;
        }
        if ($type != 'discoveries' and $type != 'scans' and $type != 'audits') {
            $sql = "/* m_queue::collection */ " . "SELECT * FROM `queue`";
        } else {
            $sql = "/* m_queue::collection */ " . "SELECT * FROM `queue` WHERE `type` = '$type'";
        }
        $query = $this->db->query($sql);
        $result = $query->result();
        if ( ! empty($result) and is_array($result)) {
            for ($i=0; $i < count($result); $i++) {
                if (!empty($result[$i]->details)) {
                    $result[$i]->details = json_decode($result[$i]->details);
                    foreach ($result[$i]->details as $key => $value) {
                        $result[$i]->{'details.'.$key} = $value;
                    }
                } else {
                    $result[$i]->details = new stdClass();
                }
            }
            stdlog($this->log);
            return $result;
        } else {
            $this->log->status = 'fail';
            stdlog($this->log);
            return false;
        }
    }

    // /**
    //  * Insert an item into the queue table
    //  * @param  [type] $type    [description]
    //  * @param  [type] $details [description]
    //  * @return [type]          Return a queue ID (integer) on success or FALSE on failure
    //  */
    // public function create($type, $details)
    // {
    //     $this->log->function = strtolower(__METHOD__);
    //     $this->log->action = 'insert';
    //     $this->log->summary = (string)$type;
    //     if (empty($details) OR empty($type)) {
    //         $this->log->status = 'fail';
    //         $this->log->message = 'Empty type or details supplied.';
    //         stdlog($this->log);
    //         return false;
    //     }
    //     if (is_string($details)) {
    //         $details = json_decode($details);
    //     }
    //     $name = '';
    //     $org_id = 1;
    //     if ( ! empty($details->name)) {
    //         $name = $details->name;
    //     }
    //     if ( ! empty($details->org_id)) {
    //         $org_id = intval($details->org_id);
    //     }
    //     $details = json_encode($details);

    //     $sql = '/* m_queue::create */ ' . "INSERT INTO `queue` VALUES (null, ?, ?, ?, 0, 'queued', ?, NOW(), '2000-01-01 00:00:00')";
    //     $data = array($name, $type, $org_id, $details);
    //     $this->db->query($sql, $data);
    //     $result = intval($this->db->insert_id());
    //     $this->log->detail = $this->db->last_query();
    //     if ( ! empty($result)) {
    //         stdlog($this->log);
    //         return $result;
    //     } else {
    //         $this->log->status = 'fail';
    //         stdlog($this->log);
    //         return false;
    //     }
    // }
}
