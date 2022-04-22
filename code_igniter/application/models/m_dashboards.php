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
* @package   Dashboards
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.3.2
* @link      http://www.open-audit.org
*/

/**
* Base Model Dashboards
*
* @access   public
* @category Model
* @package  Dashboards
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_dashboards extends MY_Model
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
            // good to go - stringified JSON
        } else {
            if (empty($data->options)) {
                $options = new stdClass();
                $options->widget_count = 0;
                $options->widgets = new stdClass();
            } else {
                $options = $data->options;
            }
            $my_options = new stdClass();
            $my_options->layout = '3x2';
            if ( ! empty($options->widget_count)) {
                $my_options->widget_count = intval($options->widget_count);
            } else {
                $my_options->widget_count = 0;
            }
            $my_options->widgets = array();
            for ($i=1; $i <= $my_options->widget_count; $i++) {
                $widget = new stdClass();
                foreach ($options->widgets->$i as $key => $value) {
                    $widget->{$key} = $value;
                }
                $my_options->widgets[] = $widget;
            }
            $data->options = json_encode($my_options);
        }
        if ($id = $this->insert_collection('dashboards', $data)) {
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
    public function read($id = 0)
    {
        $id = intval($id);
        $sql = 'SELECT * FROM dashboards WHERE id = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        if ( ! empty($result[0]->options)) {
            $result[0]->options = json_decode($result[0]->options);
        }
        $result = $this->format_data($result, 'dashboards');
        return ($result);
    }

    /**
     * Read the associated items from the DB by ID
     *
     * @param  int $id The ID of the dashboard
     * @return array The array of devices assigned to this application
     */
    public function read_sub_resource($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        if ($id === '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $return = array();
        $sql = 'SELECT options FROM dashboards WHERE id = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $options = json_decode($result[0]->options);
        foreach ($options->widgets as $widget) {
            $sql = 'SELECT * FROM widgets WHERE id = ?';
            $data = array(intval($widget->widget_id));
            $result = $this->run_sql($sql, $data);
            if ( ! empty($result[0])) {
                $return[] = $result[0];
            } else {
                return array();
            }
        }
        $return = $this->format_data($return, 'widgets');
        return $return;
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return bool True = success, False = fail
     */
    public function delete($id = '')
    {
        $data = array(intval($id));
        // do NOT allow deleting the default roles
        $sql = 'SELECT type FROM dashboards WHERE id = ?';
        $result = $this->run_sql($sql, $data);
        if ($result[0]->type === 'default') {
            log_error('ERR-0013', 'm_dashboards::delete');
            return false;
        }
        // Update any users default dashboard
        $sql = "UPDATE users SET dashboard_id = 1 WHERE dashboard_id = ?";
        $test = $this->run_sql($sql, $data);
        // attempt to delete the item
        $sql = 'DELETE FROM `dashboards` WHERE id = ?';
        $test = $this->run_sql($sql, $data);
        if ( ! empty($test)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Count the number of rows a user is allowed to see
     * @return int The count
     */
    public function count()
    {
        $CI = & get_instance();
        $org_list = implode(',', array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($CI->user->id))));
        $sql = "SELECT COUNT(id) AS `count` FROM dashboards WHERE org_id IN ({$org_list})";
        $result = $this->run_sql($sql, array());
        return intval($result[0]->count);
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
            $org_list = implode(',', array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($user_id))));
            $sql = '/* m_dashboards::collection */ ' . "SELECT * FROM dashboards WHERE org_id IN ({$org_list})";
            // NOTE - running this here because on early version of Open-AudIT, the dashboard table does exist
            //        and our run_sql function will throw an error and cause a redirect loop
            $temp_debug = $this->db->db_debug;
            $this->db->db_debug = false;
            $query = $this->db->query($sql);
            $this->db->db_debug = $temp_debug;
            unset($temp_debug);
            $CI->response->meta->sql[] = $this->db->last_query();
            if (!empty($query)) {
                $result = @$query->result();
            }
            if ( ! empty($result)) {
                $result = $this->format_data($result, 'dashboards');
            } else {
                $result = array();
            }
            return $result;
        }
        if ( ! empty($response)) {
            $CI->response->meta->total = $this->count();
            $sql = "SELECT {$CI->response->meta->internal->properties}, orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM dashboards LEFT JOIN orgs ON (dashboards.org_id = orgs.id) " . 
                    $CI->response->meta->internal->filter . ' ' . 
                    $CI->response->meta->internal->groupby . ' ' . 
                    $CI->response->meta->internal->sort . ' ' . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            if ( ! empty($result)) {
                for ($i=0; $i < count($result); $i++) {
                    $result[$i]->options = json_decode($result[$i]->options);
                }
            }
            $CI->response->data = $this->format_data($result, 'dashboards');
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
        $collection = 'dashboards';
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
        $dictionary->sentence = "Open-AudIT Professional and Enterprises' interactive Dashboard provides a single point of access to audit status and results. The ability to customize and create Dashboards is an Enterprise feature.";
        $dictionary->marketing = "<p>Simple, intuitive, dynamic - just some of the words used to describe Open-AudIT Enterprises' interactive dashboard. The dashboard provides a single point of access to audit status, new software installs, device breakdowns, and fast access to missing devices.<br /><br />" . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->about = '<p>Quickly view the status of devices on your network.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->product = 'enterprise';
        $dictionary->notes = '                                <br /><br />
                                    <h4 class="text-center">Layout</h4>
                                    <br />
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td rowspan="2">Sidebar</td>
                                                <td>Widget #1</td>
                                                <td>Widget #2</td>
                                                <td>Widget #3</td>
                                            </tr>
                                            <tr>
                                                <td>Widget #4</td>
                                                <td>Widget #5</td>
                                                <td>Widget #6</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>';

        $dictionary->columns->id = $CI->temp_dictionary->id;
        $dictionary->columns->name = $CI->temp_dictionary->name;
        $dictionary->columns->org_id = $CI->temp_dictionary->org_id;
        $dictionary->columns->description = $CI->temp_dictionary->description;
        $dictionary->columns->sidebar = 'Do you wish to see the standard sidebar on the left.';
        $dictionary->columns->user_id = 'unused';
        $dictionary->columns->options = 'Contains a JSON object details the associated widgets and their positions.';
        $dictionary->columns->edited_by = $CI->temp_dictionary->edited_by;
        $dictionary->columns->edited_date = $CI->temp_dictionary->edited_date;
        return $dictionary;
    }
}
// End of file m_dashboards.php
// Location: ./models/m_dashboards.php
