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
 * @version 1.14
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_logs extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->severity = 7;
        $this->log->status = 'retrieving data';
        $this->log->type = 'system';
    }

    public function read($id = '') {
        $this->log->function = strtolower(__METHOD__);
        $this->log->detail = "SELECT * FROM logs WHERE id = ?";
        stdlog($this->log);
        if ($id == '') {
            $CI = & get_instance();
            $id = $CI->response->meta->id;
        }
        $sql = "SELECT * FROM logs WHERE id = ?";
        $data = array(intval($id));
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'logs');
        return ($result);
    }

    public function collection()
    {
        $CI = & get_instance();

        $limit = '';
        if (!empty($CI->response->meta->collection) and $CI->response->meta->collection == 'logs') {
            # get the total
            $sql = "SELECT COUNT(*) AS `count` FROM `logs`";
            $result = $this->run_sql($sql);
            $CI->response->meta->total = $result[0]->count;
            # construct our limit and offset if required
            if (!empty($CI->response->meta->limit)) {
                if (!empty($CI->response->meta->offset)) {
                    $limit = 'LIMIT ' . intval($CI->response->meta->offset) . ', ' . intval($CI->response->meta->limit);
                } else {
                    $limit = 'LIMIT ' . intval($CI->response->meta->limit);
                }
            } else {
                if ($CI->response->meta->format == 'screen') {
                    $limit = 'LIMIT 1000';
                } else {
                    $limit = '';
                }
            }
        }

        $this->log->function = strtolower(__METHOD__);
        $this->log->detail = "SELECT * FROM logs ORDER BY `id` $limit";
        stdlog($this->log);
        $CI = & get_instance();
        $sql = "SELECT * FROM logs ORDER BY `id` $limit";
        $data = array(intval($CI->response->meta->limit));
        $result = $this->run_sql($sql, $data);
        $CI->response->meta->filtered = count($result);
        $result = $this->format_data($result, 'logs');
        return ($result);
    }
}
