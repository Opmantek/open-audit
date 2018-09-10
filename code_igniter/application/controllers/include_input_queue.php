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
    $mypid = intval(getmypid());
    $sleep = 30;
    # So we can output back to the discovery script, and continue processing
    echo "";
    header('Connection: close');
    header('Content-Length: '.ob_get_length());
    ob_end_flush();
    ob_flush();
    flush();

    /*
    PID +    running    = terminate
    PID +    no running = overwrite PID, wait 30s, check again and terminate or proceed
    No PID + running    = start
    No PID + no running = start
    */

    $sql = '/* input::queue */ ' . "LOCK TABLES discoveries WRITE, configuration WRITE, logs WRITE";
    $query = $this->db->query($sql);
    $sql = '/* input::queue */ ' . "SELECT SQL_NO_CACHE count(*) AS `count` FROM `discoveries` WHERE `status` = 'running'";
    $query = $this->db->query($sql);
    $result = $query->result();
    $running_count = intval($result[0]->count);
    $start = false;
    if (!empty($this->config->config['discovery_pid']) and !empty($running_count)) {
        # discoveries are currently running under another pid - terminate
        $start = false;
        $log->status = 'Terminating';
        $log->summary = 'Terminating - Not empty PID, not empty discovery count.';
        $log->detail = 'The PID is not empty, there are discoveries running.';
        stdlog($log);
    }
    if (!empty($this->config->config['discovery_pid']) and empty($running_count)) {
        # the PID is not empty, however there are no discoveries running - start and replace PID
        $start = true;
        $log->status = 'Starting';
        $log->summary = 'Starting - Not empty PID, empty discovery count.';
        $log->detail = 'The PID is not empty, there are no discoveries running.';
        stdlog($log);
    }
    if (empty($this->config->config['discovery_pid']) and !empty($running_count)) {
        # No PID, even though discoveries are running - start and process queue
        $start = true;
        $log->status = 'Starting';
        $log->summary = 'Starting - Empty PID, not empty discovery count.';
        $log->detail = 'The PID is empty, there are discoveries running.';
        stdlog($log);
    }
    if (empty($this->config->config['discovery_pid']) and empty($running_count)) {
        # No discoveries running and no PID - start and process queue
        $start = true;
        $log->status = 'Starting';
        $log->summary = 'Starting - Empty PID, empty discovery count.';
        $log->detail = 'The PID is empty, there are no discoveries running.';
        stdlog($log);
    }
    if ($start) {
        # update the DB with THIS pid
        $sql = '/* input::queue */ ' . 'UPDATE `configuration` SET `value` = ? WHERE `name` = "discovery_pid"';
        $data = array($mypid);
        $query = $this->db->query($sql, $data);
        # insert THIS pid into the running config
        $this->config->config['discovery_pid'] = $mypid;
    }
    $sql = '/* input::queue */ ' . "UNLOCK TABLES";
    $query = $this->db->query($sql);

    if ($start) {
        $count = 0;
        do {
            $log->status = '';
            $log->summary = '';
            $log->detail = '';
            $execute = true;

            # get our current count of running discoveries
            $sql = '/* input::queue */ ' . "SELECT SQL_NO_CACHE count(*) AS `count` FROM `discoveries` WHERE `status` = 'running'";
            $query = $this->db->query($sql);
            $result = $query->result();
            $running_count = intval($result[0]->count);

            if ($running_count < $this->config->config['discoveries_limit']) {
                $log->status = 'Processing Queue';
                $log->summary = 'Processing - discovery processes are available.';
                $log->detail = 'The number of running discoveries (' . $running_count . ') is less than the config item (' . $this->config->config['discoveries_limit'] . ').';
                stdlog($log);
                $sql = '/* input::queue */ ' . "LOCK TABLES queue WRITE, logs WRITE";
                $query = $this->db->query($sql);
                $sql = '/* input::queue */ ' . "SELECT SQL_NO_CACHE * FROM `queue` WHERE `type` = 'discoveries' ORDER BY `id` LIMIT 1";
                $query = $this->db->query($sql);
                $result = $query->result();
                if (!empty($result[0]->id)) {
                    $count = 0;
                    $execute = true;
                    $discovery = json_decode($result[0]->details);
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
                    $data = array($mypid, intval($discovery->id));
                    $query = $this->db->query($sql, $data);
                    $this->m_discoveries->run($discovery->id);
                } else {
                    $sql = '/* input::queue */ ' . "UNLOCK TABLES";
                    $query = $this->db->query($sql);
                    $count++;
                    if ($count > 1) {
                        # OK, we have checked twice and there are still no discoveries in the queue - terminate
                        $execute = false;
                        $discovery = false;
                        $log->status = 'Stopping';
                        $log->summary = 'Stopping - no jobs in queue to process.';
                        $log->detail = 'There are no discoveries left in the queue to run.';
                        stdlog($log);
                        # update the DB - remove the PID
                        $sql = '/* input::queue */ ' . 'UPDATE `configuration` SET `value` = \'\' WHERE `name` = "discovery_pid"';
                        $query = $this->db->query($sql);
                        # remove the PID from the running config
                        $this->config->config['discovery_pid'] = '';
                    } else {
                        # first time through. Sleep for X seconds before checking again
                        $execute = true;
                        $log->status = 'Sleeping';
                        $log->summary = 'Sleeping - no jobs in queue to process, first time.';
                        $log->detail = 'This is our first time we have detected no discovieries are running, sleep then check once more.';
                        stdlog($log);
                        sleep($sleep);
                    }
                }
            } else {
                $log->status = 'Sleeping';
                $log->summary = 'Sleeping - discovery processes to complete.';
                $log->detail = 'The number of running discoveries (' . $running_count . ') is not less than the config item (' . $this->config->config['discoveries_limit'] . '). Sleeping for ' . $sleep . ' seconds.';
                stdlog($log);
                sleep($sleep);
            }
        } while ($execute);
    } # end of start
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
