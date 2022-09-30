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
#  www.firstwave.com or email sales@firstwave.com
#
# *****************************************************************************
*
* PHP version 5.3.3
* 
* @category  Model
* @package   Logs
* @author    Mark Unwin <mark.unwin@firstwave.com>
* @copyright 2022 Firstwave
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.3.2
* @link      http://www.open-audit.org
*/

/**
* Base Model Logs
*
* @access   public
* @category Model
* @package  Logs
* @author   Mark Unwin <mark.unwin@firstwave.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
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

    public function read($id = '')
    {
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

    /**
     * Count the number of rows a user is allowed to see
     * @return int The count
     */
    public function count()
    {
        $sql = 'SELECT COUNT(id) AS `count` FROM logs';
        $result = $this->run_sql($sql, array());
        return intval($result[0]->count);
    }

    public function collection($user_id = null, $response = null)
    {
        $CI = & get_instance();
        if (!empty($user_id)) {
            $sql = "SELECT * FROM logs";
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'logs');
            return $result;
        }
        if (!empty($response)) {
            $CI->response->meta->total = $this->count();
            $sql = "SELECT " . $CI->response->meta->internal->properties . " FROM logs " . 
                    $CI->response->meta->internal->filter . " " . 
                    $CI->response->meta->internal->groupby . " " . 
                    $CI->response->meta->internal->sort . " " . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'logs');
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }

    /**
     * [dictionary description]
     * @return [type] [description]
     */
    public function dictionary()
    {
        $CI = & get_instance();
        $collection = 'logs';
        $CI->temp_dictionary->link = str_replace('$collection', $collection, $CI->temp_dictionary->link);
        $this->load->helper('collections');

        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->about = '';
        $dictionary->marketing = '';
        $dictionary->notes = '';
        $dictionary->columns = new stdClass();
        $dictionary->attributes = new stdClass();
        $dictionary->attributes->fields = $this->db->list_fields($collection);
        $dictionary->attributes->create = mandatory_fields($collection);
        $dictionary->attributes->update = update_fields($collection);
        $dictionary->sentence = "";
        $dictionary->marketing = '<p><br /><br /></p>';
        $dictionary->about = '<p><br /><br /></p>';
        $dictionary->product = 'community';
        $dictionary->notes = '<br /><br />';

        $dictionary->columns->id = $CI->temp_dictionary->id;
        $dictionary->columns->timestamp = 'The date and time of the logs entry.';
        $dictionary->columns->request_microtime = 'The microtime of the entire request this log entry is associated with.';
        $dictionary->columns->type = 'system or access. System denotes regular logs where-as access denotes a user access log.';
        $dictionary->columns->severity = 'Standard Unix style log levels - 0: Emergency, 1: Alert, 2: Critical, 3: Error, 4: Warning, 5: Notice, 6: Info, 7: Debug.';
        $dictionary->columns->severity_text = 'The matching text as per the severity entry. Automatically set.';
        $dictionary->columns->pid = 'The process ID of the entire request this log entry is associated with.';
        $dictionary->columns->user = 'The user associated with the request.';
        $dictionary->columns->server = 'Unused';
        $dictionary->columns->ip = 'The user IP associated with this request.';
        $dictionary->columns->collection = 'The collection requested.';
        $dictionary->columns->action = 'The action requested (create, read, update, delete, execute, etc).';
        $dictionary->columns->function = 'The internal file and function logging this entry.';
        $dictionary->columns->status = 'The overall status of this log entry.';
        $dictionary->columns->summary = 'A short description of this entry.';
        $dictionary->columns->detail = 'A more detailed entry often containing data about this entry.';
        return $dictionary;
    }

}
