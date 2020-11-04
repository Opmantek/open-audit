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
* @package   Discoveries
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.5.1
* @link      http://www.open-audit.org
*/

/**
* Base Model Discoveries
*
* @access   public
* @category Model
* @package  Discoveries
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_discovery_scan_options extends MY_Model
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
        if ($id = $this->insert_collection('discovery_scan_options', $data)) {
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
        $sql = 'SELECT * FROM `discovery_scan_options` WHERE id = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'discovery_scan_options');
        return ($result);
    }

    /**
     * Delete All items from the DB
     *
     * @param  int $id The ID of the requested item
     * @return bool True = success, False = fail
     */
    public function delete($id = 0)
    {
        $sql = 'DELETE FROM `discovery_scan_options` WHERE `id` = ?';
        $data = array($id);
        $test = $this->run_sql($sql, $data);
        if ( ! empty($test)) {
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
            $org_list = $CI->m_orgs->get_user_all($user_id);
            $sql = 'SELECT * FROM discovery_scan_options WHERE org_id IN (' . implode(',', $org_list) . ')';
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'discovery_scan_options');
            return $result;
        }
        if ( ! empty($response)) {
            $total = $this->collection($CI->user->id);
            $CI->response->meta->total = count($total);
            $sql = 'SELECT ' . $CI->response->meta->internal->properties . ', orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM discovery_scan_options LEFT JOIN orgs ON (discovery_scan_options.org_id = orgs.id) ' . 
                    $CI->response->meta->internal->filter . ' ' . 
                    $CI->response->meta->internal->groupby . ' ' . 
                    $CI->response->meta->internal->sort . ' ' . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'discovery_scan_options');
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
        $collection = 'discovery_scan_options';
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
        $dictionary->sentence = 'Scanning options allow you to easily apply a set of options to a discovery.';
        $dictionary->marketing = '<p>Using Enterprise you can choose a set of scanning options, or set configurable discovery options <i>per discovery</i>.<br /><br /></p>';
        $dictionary->about = '<p>Scanning options allow you to easily apply a set of options to a discovery.<br /><br /></p>';
        $dictionary->product = 'enterprise';
        $dictionary->notes = '<p>The attributes of timeout, ssh ports and excluding TCP, UDP & IPs can be set here and overwritten for a specific discovery.<br /><br /></p><p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br /><br /><blockquote><p>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often don\'t realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</p><footer>Gordon \'Fyodor\' Lyon</footer></blockquote><br /><br /></p>';

        $dictionary->columns->id = $CI->temp_dictionary->id;
        $dictionary->columns->name = $CI->temp_dictionary->name;
        $dictionary->columns->org_id = $CI->temp_dictionary->org_id;
        $dictionary->columns->description = $CI->temp_dictionary->description;
        $dictionary->columns->ping = 'Should we ping the device before attempting to scan it? If it does not respond to the ping, skip this device.';
        $dictionary->columns->service_version = 'When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.';
        $dictionary->columns->filtered = 'Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?';
        $dictionary->columns->{'open|filtered'} = 'Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?';
        $dictionary->columns->timing = 'The standard Nmap timing options. We usually use -T4 as this is recommended for a decent broadband or ethernet connection.';
        $dictionary->columns->timeout = 'The number of seconds to try and communicate with the target IP.';
        $dictionary->columns->nmap_tcp_ports = 'The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.';
        $dictionary->columns->nmap_udp_ports = 'The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.';
        $dictionary->columns->tcp_ports = 'Any specific TCP ports you wish tested (comma seperated, no spaces).';
        $dictionary->columns->udp_ports = 'Any specific UDP ports you wish tested (comma seperated, no spaces).';
        $dictionary->columns->exclude_tcp_ports = 'Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery.';
        $dictionary->columns->exclude_udp_ports = 'Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery.';
        $dictionary->columns->exclude_ip = 'Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.';
        $dictionary->columns->ssh_ports = 'If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.';
        $dictionary->columns->edited_by = $CI->temp_dictionary->edited_by;
        $dictionary->columns->edited_date = $CI->temp_dictionary->edited_date;
        return $dictionary;
    }
}
// End of file m_discovery_scan_options.php
// Location: ./models/m_discovery_scan_options.php
