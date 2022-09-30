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
* @package   Clouds
* @author    Mark Unwin <mark.unwin@firstwave.com>
* @copyright 2022 Firstwave
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.3.2
* @link      http://www.open-audit.org
*/

/**
* Base Model Clouds
*
* @access   public
* @category Model
* @package  Clouds
* @author   Mark Unwin <mark.unwin@firstwave.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_clouds extends MY_Model
{
    /**
    * Constructor
    *
    * @access public
    */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Create an individual item in the database
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function create($data = null)
    {
        $CI = & get_instance();
        if (! empty($data->credentials) && is_string($data->credentials)) {
            $data->credentials = (string)simpleEncrypt($data->credentials);
        } else {
            $data->credentials = (string)simpleEncrypt(json_encode($data->credentials));
        }
        if (! empty($data->options)) {
            $data->options = json_encode($data->options);
        }


        $id = $this->insert_collection('clouds', $data);
        if (empty($id)) {
            return false;
        }

        $cloud = $this->read($id);
        $cloud = $cloud[0];

        # The discovery
        $CI->load->model('m_discoveries');
        $discovery = new stdClass();
        $discovery->type = 'cloud';
        $discovery->name = 'Discovery for ' . $cloud->attributes->name;
        $discovery->network_address = 'http://127.0.0.1/open-audit/index.php/input/discoveries';
        $discovery->org_id = $cloud->attributes->org_id;
        $discovery->discard = 'n';
        $discovery->complete = 'n';
        $discovery->subnet = '';
        $discovery->cloud_id = $id;
        $discovery->cloud_name = $cloud->attributes->name;
        $discovery_id = intval($CI->m_discoveries->create($discovery));

        return intval($id);
    }

    /**
     * Read an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return array The array of requested items
     */
    public function read($id = 0)
    {
        $sql = 'SELECT * FROM `clouds` WHERE `id` = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        if ( ! empty($result[0]->options)) {
            $result[0]->options = json_decode($result[0]->options);
        } else {
            $result[0]->options = new stdClass();
            $result[0]->options->ssh = 'y';
            $result[0]->options->wmi = 'y';
            $result[0]->options->snmp = 'n';
        }
        $result = $this->format_data($result, 'clouds');
        if ( ! empty($result[0]->attributes->credentials)) {
            $result[0]->attributes->credentials = json_decode(simpleDecrypt($result[0]->attributes->credentials));
        }

        return ($result);
    }

    /**
     * Update an individual item from the database, by ID
     *
     * @return null
     */
    function update()
    {
        $CI = & get_instance();
        $sql = 'UPDATE `clouds` SET ';
        $data = array();
        if ( ! empty($CI->response->meta->received_data->attributes->credentials)) {
            $received_credentials = new stdClass();
            foreach ($CI->response->meta->received_data->attributes->credentials as $key => $value) {
                    $received_credentials->$key = $value;
            }
            $select = 'SELECT * FROM clouds WHERE id = ?';
            $existing_credentials = $this->run_sql($select, array($CI->response->meta->id));
            $existing_credentials = json_decode(simpleDecrypt($existing_credentials[0]->credentials));
            $new_credentials = new stdClass();
            foreach ($existing_credentials as $key => $value) {
                if ( ! empty($received_credentials->$key)) {
                    $new_credentials->$key = $received_credentials->$key;
                } else {
                    $new_credentials->$key = $existing_credentials->$key;
                }
            }
            $sql .= '`credentials` = ?, ';
            $data[] = (string)simpleEncrypt(json_encode($new_credentials));
        }

        if ( ! empty($CI->response->meta->received_data->attributes->options)) {
            $get_sql = 'SELECT * FROM clouds WHERE id = ' . intval($CI->response->meta->id);
            $get_result = $this->run_sql($get_sql);
            $existing_options = @json_decode($get_result[0]->options);
            foreach ($CI->response->meta->received_data->attributes->options as $key => $value) {
                $existing_options->{$key} = $value;
            }
            unset($CI->response->meta->received_data->attributes->options);
            $sql .= '`options` = ?, ';
            $data[] = json_encode($existing_options);
        }
        
        if ( ! empty($CI->response->meta->received_data->attributes->name)) {
            $sql .= '`name` = ?, ';
            $data[] = $CI->response->meta->received_data->attributes->name;
        }

        if ( ! empty($CI->response->meta->received_data->attributes->description)) {
            $sql .= '`description` = ?, ';
            $data[] = $CI->response->meta->received_data->attributes->description;
        }

        if ( ! empty($CI->response->meta->received_data->attributes->org_id)) {
            $sql .= '`org_id` = ?, ';
            $data[] = $CI->response->meta->received_data->attributes->org_id;
        }

        $sql .= ' `edited_by` = ?, `edited_date` = NOW() WHERE id = ?';
        $data[] = (string)$CI->user->full_name;
        $data[] = intval($CI->response->meta->id);
        $this->run_sql($sql, $data);
        return;
    }

    /**
     * Read the associated items from the DB by ID
     *
     * @param  int $id The ID of the cloud
     * @return array The array of cloud_logs associated with this cloud
     */
    public function read_sub_resource($id = 0)
    {
        $sql = 'SELECT * FROM cloud_log WHERE cloud_id = ? ORDER BY `id` LIMIT ' . $this->config->config['database_show_row_limit'];
        $result = $this->run_sql($sql, array($id));
        $result = $this->format_data($result, 'cloud_log');
        return ($result);
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return bool True = success, False = fail
     */
    public function delete($id = 0)
    {
        $data = array(intval($id));
        // Delete any associated tasks
        $sql = "DELETE FROM tasks WHERE sub_resource_id = ? AND type = 'clouds'";
        $test = $this->run_sql($sql, $data);
        // Delete any cloud log entries
        $sql = 'DELETE FROM `cloud_log` WHERE cloud_id = ?';
        $test = $this->run_sql($sql, $data);
        // Delete the discovery
        $sql = 'DELETE FROM `discoveries` WHERE cloud_id = ?';
        $test = $this->run_sql($sql, $data);
        // Delete the cloud
        $sql = 'DELETE FROM `clouds` WHERE `id` = ?';
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
        $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($CI->user->id)));
        $sql = 'SELECT COUNT(id) AS `count` FROM clouds WHERE org_id IN (' . implode(',', $org_list) . ')';
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
            $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($user_id)));
            $sql = 'SELECT * FROM clouds WHERE org_id IN (' . implode(',', $org_list) . ')';
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'clouds');
            return $result;
        }
        if ( ! empty($response)) {
            $CI->response->meta->total = $this->count();
            $sql = 'SELECT ' . $CI->response->meta->internal->properties . ', orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM clouds LEFT JOIN orgs ON (clouds.org_id = orgs.id) ' . 
                    $CI->response->meta->internal->filter . ' ' . 
                    $CI->response->meta->internal->groupby . ' ' . 
                    $CI->response->meta->internal->sort . ' ' . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'clouds');
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
        $collection = 'clouds';
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
        $dictionary->sentence = 'Open-AudIT can discover and audit your cloud-based virtual machines. You provide the credentials and Open-AudIT will query the Amazon or Microsoft APIs to determine what devices you have, their state, any associated networks and locations and then run discovery upon each cloud instance. You get all the regular Open-AudIT details, but now you also get cloud-specific details like size.';
        $dictionary->marketing = '<p>You provide the credentials, Open-AudIT does the rest.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->about = '<p>This endpoint enables you to add your cloud infrastructre details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br /><br /><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->product = 'enterprise';
        $dictionary->notes = "<p>If you intend to completely audit your cloud machines, don't forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.</p>";

        $dictionary->columns->id = $CI->temp_dictionary->id;
        $dictionary->columns->name = $CI->temp_dictionary->name;
        $dictionary->columns->org_id = $CI->temp_dictionary->org_id;
        $dictionary->columns->description = $CI->temp_dictionary->description;
        $dictionary->columns->credentials = 'Your access credentials, as per that clouds native API.';
        $dictionary->columns->type = 'At the moment, only Amazon AWS is supported.';
        $dictionary->columns->key = 'Your API key.';
        $dictionary->columns->secret_key = 'The secret key used in conjunction with your API key.';
        $dictionary->columns->status = 'The current status of the Cloud Discovery.';
        $dictionary->columns->options = 'Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.';
        $dictionary->columns->snmp = 'Should we test for SNMP using UDP port 161.';
        $dictionary->columns->ssh = 'Should we test for SSH using TCP port 21.';
        $dictionary->columns->wmi = 'Should we test for WMI using TCP port 135.';
        // Azure
        $dictionary->columns->subscription_id = 'Likely displayed as the Directory ID in Azure.';
        $dictionary->columns->tennant_id = 'Your Azure tennant ID.';
        $dictionary->columns->client_id = 'The client ID is the ID of an Azure Active Directory application. It may be displayed in Azure as the Application ID.';
        $dictionary->columns->client_secret = 'As created by Azure.';
        // AWS
        $dictionary->columns->credentials_key = 'As created in AWS.';
        $dictionary->columns->credentials_secret_key = 'The associated secret for the AWS credentials.';

        $dictionary->columns->edited_by = $CI->temp_dictionary->edited_by;
        $dictionary->columns->edited_date = $CI->temp_dictionary->edited_date;
        return $dictionary;
    }
}
// End of file m_clouds.php
// Location: ./models/m_clouds.php
