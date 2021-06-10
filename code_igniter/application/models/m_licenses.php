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
* @package   Licenses
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.1.2
* @link      http://www.open-audit.org
*/

/**
* Base Model Licenses
*
* @access   public
* @category Model
* @package  Licenses
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_licenses extends MY_Model
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
        if ($id = $this->insert_collection('licenses', $data)) {
            return intval($id);
        } else {
            return false;
        }
    }

    /**
     * [read description]
     * @param  integer $id [description]
     * @return [type]      [description]
     */
    public function read($id = 0)
    {
        $id = intval($id);
        $sql = 'SELECT * FROM licenses WHERE id = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $CI = & get_instance();
        if ($result[0]->org_descendants === 'n') {
            $sql = "SELECT count(software.name) AS `count` FROM system LEFT JOIN software ON (system.id = software.system_id AND software.current = 'y') WHERE system.org_id = ? AND software.name LIKE ?";
            $data = array(intval($result[0]->org_id), (string)$result[0]->match_string);
            $data_result = $this->run_sql($sql, $data);
            if ( ! empty($data_result[0]->count)) {
                $result[0]->used_count = $data_result[0]->count;
            }
            unset($sql, $data, $data_result);
        } else {
            $children = $CI->m_orgs->get_children($result[0]->org_id);
            $children[] = $result[0]->org_id;
            $children = implode(',', $children);
            $sql = "SELECT count(software.name) AS `count` FROM system LEFT JOIN software ON (system.id = software.system_id AND software.current = 'y') WHERE system.org_id IN ({$children}) AND software.name LIKE ?";
            $data = array((string)$result[0]->match_string);
            $data_result = $this->run_sql($sql, $data);
            if ( ! empty($data_result[0]->count)) {
                $result[0]->used_count = $data_result[0]->count;
            }
            unset($sql, $data, $data_result);
        }
        $result = $this->format_data($result, 'licenses');
        return($result);
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return bool True = success, False = fail
     */
    public function delete($id = 0)
    {
        $sql = 'DELETE FROM `licenses` WHERE `id` = ?';
        $data = array($id);
        $test = $this->run_sql($sql, $data);
        if ( ! empty($test)) {
            return true;
        } else {
            return false;
        }
    }

    // /**
    //  * Count the number of rows a user is allowed to see
    //  * @return int The count
    //  */
    // public function count()
    // {
    //     $CI = & get_instance();
    //     $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($CI->user->id)));
    //     $sql = 'SELECT COUNT(id) AS `count` FROM licenses WHERE org_id IN (' . implode(',', $org_list) . ')';
    //     $result = $this->run_sql($sql, array());
    //     return intval($result[0]->count);
    // }

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
            $sql = 'SELECT * FROM licenses WHERE org_id IN (' . implode(',', $org_list) . ')';
            $result = $this->run_sql($sql, array());
            if (is_array($result) && ! empty($result)) {
                for ($i=0; $i < count($result); $i++) { 
                    $result[$i]->used_count = $this->count($result[$i]->id);
                }
            }
            $result = $this->format_data($result, 'licenses');
            return $result;
        }
        if ( ! empty($response)) {
            $total = $this->collection($CI->user->id);
            $CI->response->meta->total = count($total);
            $sql = "SELECT {$CI->response->meta->internal->properties}, orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM licenses LEFT JOIN orgs ON (licenses.org_id = orgs.id) " . 
                    $CI->response->meta->internal->filter . ' ' . 
                    $CI->response->meta->internal->groupby . ' ' . 
                    $CI->response->meta->internal->sort . ' ' . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'licenses');
            if (is_array($result) && ! empty($result)) {
                for ($i=0; $i < count($result); $i++) { 
                    $result[$i]->used_count = $this->count($result[$i]->id);
                }
            }
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }

    /**
     * [execute description]
     * @param  integer $id [description]
     * @return [type]      [description]
     */
    public function execute($id = 0)
    {
        $id = intval($id);
        $sql = "SELECT * FROM licenses WHERE id = {$id}";
        $result = $this->run_sql($sql, array());
        if (empty($result)) {
            // TODO log an error, no matching license
            return false;
        } else {
            $license = $result[0];
        }
        $sql = "SELECT system.id AS `system.id`, system.name AS `system.name`, software.name AS `software.name`, software.version AS `software.version` FROM system LEFT JOIN software ON (system.id = software.system_id AND software.current = 'y') WHERE software.name LIKE ?";
        $result = $this->run_sql($sql, array($license->match_string));
        $result = $this->format_data($result, 'licenses');
        return ($result);
    }

    /**
     * [count description]
     * @param  integer $id [description]
     * @return [type]      [description]
     */
    public function count($id = 0)
    {
        $CI = & get_instance();
        $id = intval($id);
        $sql = "SELECT * FROM licenses WHERE id = {$id}";
        $result = $this->run_sql($sql, array());
        if (empty($result[0])) {
            // TODO log an error, no matching license
            return 0;
        } else {
            $license = $result[0];
        }
        if ( ! empty($license)) {
            if ($license->org_descendants === 'n') {
                $sql = "SELECT count(software.name) AS `count` FROM system LEFT JOIN software ON (system.id = software.system_id AND software.current = 'y') WHERE system.org_id = ? AND software.name LIKE ?";
                $data = array(intval($license->org_id), (string)$license->match_string);
                $data_result = $this->run_sql($sql, $data);
                if ( ! empty($data_result[0]->count)) {
                    $license->used_count = $data_result[0]->count;
                }
                unset($sql, $data, $data_result);
            } else {
                $children = $CI->m_orgs->get_children($license->org_id);
                $children[] = $license->org_id;
                $children = implode(',', $children);
                $sql = "SELECT count(software.name) AS `count` FROM system LEFT JOIN software ON (system.id = software.system_id AND software.current = 'y') WHERE system.org_id IN ({$children}) AND software.name LIKE ?";
                $data = array((string)$license->match_string);
                $data_result = $this->run_sql($sql, $data);
                if ( ! empty($data_result[0]->count)) {
                    $license->used_count = $data_result[0]->count;
                }
                unset($sql, $data, $data_result);
            }
            return intval($license->used_count);
        } else {
            return 0;
        }
    }

    /**
     * [dictionary description]
     * @return [type] [description]
     */
    public function dictionary()
    {
        $CI = & get_instance();
        $collection = 'licenses';
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
        $dictionary->sentence = 'Track your installed software, quickly and easily.';
        $dictionary->marketing = '<p>The license endpoint allows you to track the number of licenses found on your devices.<br /><br />To create an entry to track your licenses provide a name, an organization, the number of licenses acquired and the name of the software. Those simple pieces of information are all Open-AudIT needs to track and report on your installed software licenses.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->about = '<p>The license endpoint allows you to track the number of licenses found on your devices.<br /><br />To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->product = 'professional';
        $dictionary->notes = 'You can use the percent % sign as a wildcard in the match_string.';

        $dictionary->columns->id = $CI->temp_dictionary->id;
        $dictionary->columns->name = $CI->temp_dictionary->name;
        $dictionary->columns->org_id = $CI->temp_dictionary->org_id;
        $dictionary->columns->description = $CI->temp_dictionary->description;
        $dictionary->columns->org_descendants = 'Should we apply this license to the selected Org as well as the Orgs children?';
        $dictionary->columns->purchase_count = 'The number of purchased licenses.';
        $dictionary->columns->used_count = 'A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).';
        $dictionary->columns->match_string = 'A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.';
        $dictionary->columns->software_name = 'Your generice name for this piece of software';
        $dictionary->columns->software_version = 'Your generice version for this piece of software';
        $dictionary->columns->sql = 'unused';
        $dictionary->columns->edited_by = $CI->temp_dictionary->edited_by;
        $dictionary->columns->edited_date = $CI->temp_dictionary->edited_date;
        return $dictionary;
    }
}
// End of file m_licenses.php
// Location: ./models/m_licenses.php
