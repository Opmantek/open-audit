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
* @category  Controller
* @package   Locations
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.3.0
* @link      http://www.open-audit.org
*/

/**
* Base Object Locations
*
* @access   public
* @category Controller
* @package  Locations
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class Locations extends MY_Controller
{
    /**
    * Constructor
    *
    * @access    public
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_locations');
        inputRead();
        $this->output->url = $this->config->config['oa_web_index'];
    }

    /**
    * Index that is unused
    *
    * @access public
    * @return NULL
    */
    public function index()
    {
    }

    /**
    * Our remap function to override the inbuilt controller->method functionality
    *
    * @access public
    * @return NULL
    */
    public function _remap()
    {
        $this->{$this->response->meta->action}();
    }


    /**
    * Process the supplied data and create a new object
    *
    * @access public
    * @return NULL
    */
    public function create()
    {
        $this->response->meta->id = $this->{'m_'.$this->response->meta->collection}->create($this->response->meta->received_data->attributes);
        $this->response->data = $this->{'m_'.$this->response->meta->collection}->read($this->response->meta->id);
        $this->response->include = 'v_'.$this->response->meta->collection.'_read';
        output($this->response);
    }

    /**
    * Read a single object
    *
    * @access public
    * @return NULL
    */
    public function read()
    {
        if ($this->response->meta->format == 'screen') {
            $this->load->model('m_attributes');
            $attributes = $this->m_attributes->collection($this->user->id);
            $location_attributes = array();
            if (is_array($attributes)) {
                foreach ($attributes as $attribute) {
                    if ($attribute->attributes->resource == 'locations') {
                        $location_attributes[] = $attribute;
                    }
                }
            }
            $this->response->included = array_merge($this->response->included, $location_attributes);
        }
        $this->load->model('m_buildings');
        $this->load->model('m_floors');
        $this->load->model('m_rooms');
        $this->load->model('m_rows');
        $this->load->model('m_racks');
        $buildings = $this->m_locations->children($this->response->meta->id);
        if (!empty($buildings) and is_array($buildings)) {
            $this->response->included = array_merge($this->response->included, $buildings);
            foreach ($buildings as $building) {
                $floors = $this->m_buildings->children($building->id);
                if (!empty($floors) and is_array($floors)) {
                    $this->response->included = array_merge($this->response->included, $floors);
                    foreach ($floors as $floor) {
                        $rooms = $this->m_floors->children($floor->id);
                        if (!empty($rooms) and is_array($rooms)) {
                            $this->response->included = array_merge($this->response->included, $rooms);
                            foreach ($rooms as $room) {
                                $rows = $this->m_rooms->children($room->id);
                                if (!empty($rows) and is_array($rows)) {
                                    $this->response->included = array_merge($this->response->included, $rows);
                                    foreach ($rows as $row) {
                                        $racks = $this->m_rows->children($row->id);
                                        if (!empty($racks) and is_array($racks)) {
                                            $this->response->included = array_merge($this->response->included, $racks);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        include 'include_read.php';
    }

    /**
    * Process the supplied data and update an existing object
    *
    * @access public
    * @return NULL
    */
    public function update()
    {
        include 'include_update.php';
    }

    /**
    * Delete an existing object
    *
    * @access public
    * @return NULL
    */
    public function delete()
    {
        include 'include_delete.php';
    }

    /**
    * Collection of objects
    *
    * @access public
    * @return NULL
    */
    public function collection()
    {
        $this->{'m_'.$this->response->meta->collection}->collection(0, 1);
        output($this->response);
    }

    /**
    * Supply a HTML form for the user to create an object
    *
    * @access public
    * @return NULL
    */
    public function create_form()
    {
        if (empty($this->config->config['maps_api_key'])) {
            $this->response->meta->flash = new stdClass();
            $this->response->meta->flash->status = 'warning';
            $this->response->meta->flash->message = 'Google Maps API key required to retrieve lat/long and display map. See <a href="https://community.opmantek.com/display/opCommon/Google+Maps+API+Key" target="_blank">here</a>.';
        }
        $this->response->dictionary = $this->m_locations->dictionary();
        $this->load->model('m_orgs');
        $this->response->included = array_merge($this->response->included, $this->m_orgs->collection($this->user->id));
        $this->load->model('m_attributes');
        $this->response->included = array_merge($this->response->included, $this->m_attributes->collection($this->user->id));
        output($this->response);
    }

    /**
    * Supply a HTML form for the user to upload a collection of objects in CSV
    *
    * @access public
    * @return NULL
    */
    public function import_form()
    {
        $this->load->model('m_database');
        $this->response->data = $this->m_database->read('locations');
        include 'include_import_form.php';
    }

    /**
    * Process the supplied data and create a new object
    *
    * @access public
    * @return NULL
    */
    public function import()
    {
        include 'include_import.php';
    }

    /**
    * The requested table will have optimize run upon it and it's autoincrement reset to 1
    *
    * @access public
    * @return NULL
    */
    public function reset()
    {
        include 'include_reset.php';
    }

}
// End of file locations.php
// Location: ./controllers/locations.php
