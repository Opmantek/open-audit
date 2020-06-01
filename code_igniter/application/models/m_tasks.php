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
* @package   Tasks
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.3.2
* @link      http://www.open-audit.org
*/

/**
* Base Model Tasks
*
* @access   public
* @category Model
* @package  Tasks
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_tasks extends MY_Model
{
    /**
    * Constructor
    *
    * @access public
    */
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
    }

    /**
     * Create an individual item in the database
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function create($data = null)
    {
        if ( ! empty($data->options) && is_string($data->options)) {
            $data->options = str_replace('\"', '"', $data->options);
            $data->options = my_json_decode($data->options);
            $data->options = json_encode($data->options);
        } else if ( ! empty($data->options)) {
            $data->options = json_encode($data->options);
        } else {
            $data->options = new stdClass();
            $data->options = json_encode($data->options);
        }
        if ( ! empty($data->minute) && is_array($data->minute)) {
            $data->minute = implode(',', $data->minute);
        }
        if ( ! empty($data->hour) && is_array($data->hour)) {
            $data->hour = implode(',', $data->hour);
        }
        if ( ! empty($data->day_of_month) && is_array($data->day_of_month)) {
            $data->day_of_month = implode(',', $data->day_of_month);
        }
        if ( ! empty($data->month) && is_array($data->month)) {
            $data->month = implode(',', $data->month);
        }
        if ( ! empty($data->day_of_week) && is_array($data->day_of_week)) {
            $data->day_of_week = implode(',', $data->day_of_week);
        }
        if (empty($data->uuid)) {
            $data->uuid = $this->config->config['uuid'];
        }
        if ($id = $this->insert_collection('tasks', $data)) {
            return intval($id);
        } else {
            return false;
        }
    }

    /**
     * Read an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return array The array of requested items
     */
    public function read($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        if ($id === '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = 'SELECT * FROM `tasks` WHERE `id` = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);

        if ($result !== false) {
            for ($i=0; $i < count($result); $i++) {
                if ($result[$i]->type !== 'reports' && $result[$i]->type !== 'collector') {
                    $sql = 'SELECT id, name FROM `' . $result[$i]->type . '` WHERE id = ?';
                    $data = array($result[$i]->sub_resource_id);
                    $data_result = $this->run_sql($sql, $data);
                    if ( ! empty($data_result[0]->name)) {
                        $result[$i]->{$result[$i]->type.'.id'} = $data_result[0]->id;
                        $result[$i]->{$result[$i]->type.'.name'} = $data_result[0]->name;
                        $result[$i]->sub_resource_name = $data_result[0]->name;
                    } else {
                        $result[$i]->sub_resource_name = '';
                    }
                } else {
                    $result[$i]->sub_resource_name = '';
                }
            }
        }
        $result = $this->format_data($result, 'tasks');
        if ( ! empty($result[0]->attributes->options)) {
            $result[0]->attributes->options = my_json_decode($result[0]->attributes->options);
        }
        return ($result);
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return bool True = success, False = fail
     */
    public function delete($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        stdlog($this->log);
        if ($id === '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        if ($id !== 0) {
            $CI = & get_instance();
            $sql = 'DELETE FROM `tasks` WHERE `id` = ?';
            $data = array(intval($id));
            $this->run_sql($sql, $data);
            return true;
        } else {
            return false;
        }
    }

    /**
     * Read the collection from the database
     *
     * @param  int $user_id  The ID of the requesting user, no $response->meta->filter used and no $response->data populated
     * @param  int $response A flag to tell us if we need to use $response->meta->filter and populate $response->data
     * @return bool True = success, False = fail
     */
    public function collection($user_id = null, $response = null)
    {
        $CI = & get_instance();
        if ( ! empty($user_id)) {
            $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($user_id)));
            $sql = 'SELECT * FROM tasks WHERE org_id IN (' . implode(',', $org_list) . ')';
            $result = $this->run_sql($sql, array());
            if ( ! empty($result) && is_array($result)) {
                for ($i=0; $i < count($result); $i++) {
                    if ( ! empty($result[$i]->options)) {
                        $result[$i]->options = json_decode($result[$i]->options);
                        foreach ($result[$i]->options as $key => $value) {
                            $result[$i]->{'options.'.$key} = $value;
                        }
                    }
                    if ($this->db->table_exists($result[$i]->type)) {
                        $sql = 'SELECT name AS `name` FROM `' . $result[$i]->type . '` WHERE id = ?';
                        $data = array($result[$i]->sub_resource_id);
                        $data_result = $this->run_sql($sql, $data);
                        if ( ! empty($data_result[0]->name)) {
                            $result[$i]->sub_resource_name = $data_result[0]->name;
                        } else {
                            $result[$i]->sub_resource_name = '';
                        }
                    } else {
                        $result[$i]->sub_resource_name = '';
                    }
                }
            }
            $result = $this->format_data($result, 'tasks');
            return $result;
        }
        if ( ! empty($response)) {
            $total = $this->collection($CI->user->id);
            $CI->response->meta->total = count($total);
            $sql = "SELECT {$CI->response->meta->internal->properties}, orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM tasks LEFT JOIN orgs ON (tasks.org_id = orgs.id) " .
                    $CI->response->meta->internal->filter . ' ' .
                    $CI->response->meta->internal->groupby . ' ' .
                    $CI->response->meta->internal->sort . ' ' .
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            if ( ! empty($result) && is_array($result)) {
                for ($i=0; $i < count($result); $i++) {
                    if ( ! empty($result[$i]->options)) {
                        $result[$i]->options = json_decode($result[$i]->options);
                        foreach ($result[$i]->options as $key => $value) {
                            $result[$i]->{'options.'.$key} = $value;
                        }
                    } else {
                        $result[$i]->options = new stdCLass();
                    }
                    if ($this->db->table_exists($result[$i]->type)) {
                        $sql = 'SELECT id, name FROM `' . $result[$i]->type . '` WHERE id = ?';
                        $data = array($result[$i]->sub_resource_id);
                        $data_result = $this->run_sql($sql, $data);
                        if ( ! empty($data_result[0]->name)) {
                            $result[$i]->{$result[$i]->type.'.id'} = $data_result[0]->id;
                            $result[$i]->{$result[$i]->type.'.name'} = $data_result[0]->name;
                            $result[$i]->sub_resource_name = $data_result[0]->name;
                        } else {
                            $result[$i]->sub_resource_name = '';
                        }
                    } else {
                        $result[$i]->sub_resource_name = '';
                    }
                }
            }
            $CI->response->data = $this->format_data($result, 'tasks');
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
        $collection = 'tasks';
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
        $dictionary->sentence = 'Open-AudIT Professional and Enterprise include Task Scheduling. Schedule device discovery, report generation, or run a baseline check on any schedule you need, as often as you need, or run them on-demand from one interface.';
        $dictionary->about = '<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br /><br />Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->marketing = '<p>Open-AudIT can send you a report, run a discovery or test  a baseline on a schedule of your choosing. Have Open-AudIT email you a report of any new devices found for the week, every Friday. Simple, quick and easy.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->notes = '<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br /><br />The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br /><br />If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discovery\'s ID in <code>sub_resource_id</code>.<br /><br />The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br /><br />The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br /><br /></p>';

        $dictionary->columns->id = $CI->temp_dictionary->id;
        $dictionary->columns->name = $CI->temp_dictionary->name;
        $dictionary->columns->org_id = $CI->temp_dictionary->org_id;
        $dictionary->columns->description = $CI->temp_dictionary->description;
        $dictionary->columns->type = 'The type of task to run.';
        $dictionary->columns->sub_resource_id = 'The ID of the item of type (discoveries, reports, etc).';
        $dictionary->columns->uuid = 'The unique identifier of this server.';
        $dictionary->columns->enabled = 'Is this task enabled (y/n).';
        $dictionary->columns->minute = 'The minute of the hour when this task should execute (* for every minute).';
        $dictionary->columns->hour = 'The hour of the day when this task should execute (* for every hour).';
        $dictionary->columns->day_of_month = 'The day of the month when this task should execute (* for every day).';
        $dictionary->columns->month = 'The month of the year when this task should execute (* for every month).';
        $dictionary->columns->day_of_week = 'The day of the week when this task should execute (* for every day).';
        $dictionary->columns->delay_minutes = 'unused';
        $dictionary->columns->expire_minutes = 'unused';
        $dictionary->columns->first_run = "The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to '2017-06-01 09:59:00'. This value should be zero padded (ie, 09, not 9). This value defaults to '2001-01-01 00:00:00' which means by default, a scheduled task will run at next scheduled execution time.";
        $dictionary->columns->last_run = 'The last date and time this task was executed (read only).';
        $dictionary->columns->edited_by = $CI->temp_dictionary->edited_by;
        $dictionary->columns->edited_date = $CI->temp_dictionary->edited_date;
        return $dictionary;
    }
}
// End of file m_tasks.php
// Location: ./models/m_tasks.php
