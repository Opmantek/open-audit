<?php
#
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
$this->benchmark->mark('code_start');
// load our required helpers
$this->load->helper('log');
$this->load->helper('error');
$this->load->model('m_discoveries');
$queue = $this->uri->segment(3, 0);

$log = new stdClass();
$log->type = 'system';
$log->severity = 6;
$log->collection = 'input';
$log->action = 'queue';
$log->status = '';
$log->summary = '';
$log->detail = '';


if ($queue == 'discoveries') {
    $log->function = 'include_input_queue::discoveries';
    $execute = false;
    $discovery = false;
    # So we can output back to the discovery script, and continue processing
    echo "";
    header('Connection: close');
    header('Content-Length: '.ob_get_length());
    ob_end_flush();
    ob_flush();
    flush();

    do {
        $log->status = '';
        $log->summary = '';
        $log->detail = '';
        $sql = '/* input::queue */ ' . "SELECT SQL_NO_CACHE count(*) AS `count` FROM `discoveries` WHERE `status` = 'running'";
        $query = $this->db->query($sql);
        $result = $query->result();
        $running_count = intval($result[0]->count);
        if ($running_count < $this->config->config['discoveries_limit']) {
            $log->status = 'Processing Queue';
            $log->summary = 'Processing - discovery processes are available.';
            $log->detail = 'The number of running discoveries (' . $running_count . ') is less than the config item (' . $this->config->config['discoveries_limit'] . ').';
            stdlog($log);
            $sql = '/* input::queue */ ' . "LOCK TABLES queue WRITE";
            $query = $this->db->query($sql);
            $sql = '/* input::queue */ ' . "SELECT SQL_NO_CACHE * FROM `queue` WHERE `type` = 'discoveries' ORDER BY `id` LIMIT 1";
            $query = $this->db->query($sql);
            $result = $query->result();
            if (!empty($result[0])) {
                $execute = true;
                $discovery = json_decode($result[0]->details);
                // $log->status = 'Selecting';
                // $log->summary = 'Selecting - discovery #' . $discovery->id;
                // $log->detail = 'Selecting and deleting discovery #' . $discovery->id . ' from queue.';
                // stdlog($log);
                $sql = '/* input::queue */ ' . "DELETE FROM `queue` WHERE `id` = ?";
                $data = array($result[0]->id);
                $query = $this->db->query($sql, $data);
                $sql = '/* input::queue */ ' . "UNLOCK TABLES";
                $query = $this->db->query($sql);
                $log->status = 'Executing';
                $log->summary = 'Executing - discovery #' . $discovery->id;
                $log->detail = 'Discovery #' . $discovery->id . ' has been removed from the queue and will now be executed.';
                stdlog($log);
                $sql = '/* input::queue */ ' . "UPDATE `discoveries` SET `status` = 'running', `device_count` = 0, `complete` = 'n', `last_run` = NOW(), last_log = NOW(), `duration` = '00:00:00', pid = ? WHERE id = ?";
                $data = array(intval(getmypid()), intval($discovery->id));
                $query = $this->db->query($sql, $data);
                $this->m_discoveries->run($discovery->id);
            } else {
                $sql = '/* input::queue */ ' . "UNLOCK TABLES";
                $query = $this->db->query($sql);
                $log->status = 'Stopping';
                $log->summary = 'Stopping - no jobs in queue to process.';
                $log->detail = 'There are no discoveries left in the queue to run.';
                stdlog($log);
                $execute = false;
                $discovery = false;
            }
        } else {
            $discovery = false;
            # check if any of the running processes match MY pid
            $sql = "SELECT count(*) AS `count` FROM `discoveries` WHERE `status` = 'running' AND `pid` != ?";
            $data = array(intval(getmypid()));
            $query = $this->db->query($sql, $data);
            $result = $query->result();
            # If there are runniing discoveries AND none have my PID, I am useless, so stop running this thread.
            if (!empty($result[0]->count)) {
                # Terminate
                $execute = false;
                $log->status = 'Terminating';
                $log->summary = 'Terminating - discovery processes are running.';
                $log->detail = 'There are other discovery processes running the discovery queue.';
                stdlog($log);
            } else {
                $sleep = 30;
                $log->status = 'Sleeping';
                $log->summary = 'Sleeping - discovery processes to complete.';
                $log->detail = 'The number of running discoveries (' . $running_count . ') is not less than the config item (' . $this->config->config['discoveries_limit'] . '). Sleeping for ' . $sleep . ' seconds.';
                stdlog($log);
                sleep($sleep);
            }
        }
    } while ($execute);
}

# Reset the autoInc if there is nothing in the table
$sql = '/* input::queue */ ' . "LOCK TABLES queue WRITE";
$query = $this->db->query($sql);
$sql = '/* input::queue */ ' . 'SELECT COUNT(*) AS `count` FROM `queue`';
$query = $this->db->query($sql);
$result = $query->result();
if (empty($result[0]->count)) {
    $sql = '/* input::queue */ ' . 'ALTER TABLE queue AUTO_INCREMENT = 1';
    $query = $this->db->query($sql);
}
$sql = '/* input::queue */ ' . "UNLOCK TABLES";
$query = $this->db->query($sql);
