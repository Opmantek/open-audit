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

/**
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.12.6
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class Admin_test extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $log_details = new stdClass();
        stdlog($log_details);
        unset($log_details);
    }

    public function index()
    {
        redirect('/');
    }

    public function test()
    {
        echo "test";
    }

    public function test_snmp()
    {
        echo "<pre>\n";
        $this->load->model("m_system");
        $this->load->helper('snmp');
        $this->load->helper('snmp_oid');
        $this->load->model("m_devices_components");
        $this->load->library('encrypt');
        $details = new stdClass();
        $details->system_id = $this->uri->segment(3, 0);
        $encrypted_access_details = $this->m_system->get_access_details($details->system_id);
        $details->hostname = $this->m_devices_components->read($details->system_id, 'y', 'system', '', 'hostname');
        $details->man_ip_address = $this->m_devices_components->read($details->system_id, 'y', 'system', '', 'man_ip_address');
        $details->show_output = true;

        $temp_array = get_snmp($details);
        $details = $temp_array['details'];
        $network_interfaces = $temp_array['interfaces'];

        print_r($details);
        echo "-------------------\n";
        print_r($network_interfaces);
        echo "-------------------\n";
    }

    public function data()
    {
        # comment the below line out to enable this funtcion.
        redirect('/');
        $computers_to_add = 1000;

        # populate the Open-AudIT database with dummy locations, devices and set up a few groups

        $this->load->model("m_oa_location");
        $this->load->model("m_system");
        $this->load->model("m_oa_group");
        $this->load->model("m_oa_group_column");
        $this->load->model("m_oa_org");

        $details->name = "Brisbane Office";
        $details->type = "Office";
        $details->room = "";
        $details->suite = "";
        $details->level = "";
        $details->address = "111 Eagle Street";
        $details->postcode = "4000";
        $details->city = "Brisbane";
        $details->state = "Queensland";
        $details->country = "Australia";
        $details->geo = "";
        $details->latitude = "-27.46759";
        $details->longitude = "153.030355";
        $details->id = $this->m_oa_location->add_location($details);
        $group = new stdClass();
        $group->group_name = "Items in ".$details->name;
        $group->group_padded_name = '';
        $group->group_description = "Items in ".$details->name;
        $group->group_icon = 'location';
        $group->group_category = 'location';
        $group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_location_id = '".$details->id."' AND system.man_status = 'production'";
        $group->group_parent = '';
        $group->group_display_sql = '';
        $group_id = $this->m_oa_group->insert_group($group);
        $this->m_oa_location->set_group_id($details->id, $group_id);
        $this->m_oa_group->update_specific_group($group_id);

        $details->name = "Sydney Office";
        $details->type = "Office";
        $details->room = "";
        $details->suite = "";
        $details->level = "";
        $details->address = "10 Shelley Street";
        $details->postcode = "2000";
        $details->city = "Sydney";
        $details->state = "New South Wales";
        $details->country = "Australia";
        $details->geo = "";
        $details->latitude = "-33.8659025";
        $details->longitude = "151.2024921";
        $details->id = $this->m_oa_location->add_location($details);
        $group = new stdClass();
        $group->group_name = "Items in ".$details->name;
        $group->group_padded_name = '';
        $group->group_description = "Items in ".$details->name;
        $group->group_icon = 'location';
        $group->group_category = 'location';
        $group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_location_id = '".$details->id."' AND system.man_status = 'production'";
        $group->group_parent = '';
        $group->group_display_sql = '';
        $group_id = $this->m_oa_group->insert_group($group);
        $this->m_oa_location->set_group_id($details->id, $group_id);
        $this->m_oa_group->update_specific_group($group_id);

        $details->name = "Canberra Office";
        $details->type = "Office";
        $details->room = "";
        $details->suite = "";
        $details->level = "";
        $details->address = "1 Newlands Street";
        $details->postcode = "2600";
        $details->city = "Canberra";
        $details->state = "ACT";
        $details->country = "Australia";
        $details->geo = "";
        $details->latitude = "-35.299066";
        $details->longitude = "149.1280834";
        $details->id = $this->m_oa_location->add_location($details);
        $group = new stdClass();
        $group->group_name = "Items in ".$details->name;
        $group->group_padded_name = '';
        $group->group_description = "Items in ".$details->name;
        $group->group_icon = 'location';
        $group->group_category = 'location';
        $group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_location_id = '".$details->id."' AND system.man_status = 'production'";
        $group->group_parent = '';
        $group->group_display_sql = '';
        $group_id = $this->m_oa_group->insert_group($group);
        $this->m_oa_location->set_group_id($details->id, $group_id);
        $this->m_oa_group->update_specific_group($group_id);

        $details->name = "Melbourne Office";
        $details->type = "Office";
        $details->room = "";
        $details->suite = "";
        $details->level = "";
        $details->address = "1 Freshwater Place";
        $details->postcode = "3006";
        $details->city = "Southbank";
        $details->state = "Victoria";
        $details->country = "Australia";
        $details->geo = "";
        $details->latitude = "-37.821938";
        $details->longitude = "144.962095";
        $details->id = $this->m_oa_location->add_location($details);
        $group = new stdClass();
        $group->group_name = "Items in ".$details->name;
        $group->group_padded_name = '';
        $group->group_description = "Items in ".$details->name;
        $group->group_icon = 'location';
        $group->group_category = 'location';
        $group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_location_id = '".$details->id."' AND system.man_status = 'production'";
        $group->group_parent = '';
        $group->group_display_sql = '';
        $group_id = $this->m_oa_group->insert_group($group);
        $this->m_oa_location->set_group_id($details->id, $group_id);
        $this->m_oa_group->update_specific_group($group_id);

        $details->name = "Perth Office";
        $details->type = "Office";
        $details->room = "";
        $details->suite = "";
        $details->level = "";
        $details->address = "1 Victoria Avenua";
        $details->postcode = "6000";
        $details->city = "Perth";
        $details->state = "Western Australia";
        $details->country = "Australia";
        $details->geo = "";
        $details->latitude = "-31.958617";
        $details->longitude = "115.864341";
        $details->id = $this->m_oa_location->add_location($details);
        $group = new stdClass();
        $group->group_name = "Items in ".$details->name;
        $group->group_padded_name = '';
        $group->group_description = "Items in ".$details->name;
        $group->group_icon = 'location';
        $group->group_category = 'location';
        $group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_location_id = '".$details->id."' AND system.man_status = 'production'";
        $group->group_parent = '';
        $group->group_display_sql = '';
        $group_id = $this->m_oa_group->insert_group($group);
        $this->m_oa_location->set_group_id($details->id, $group_id);
        $this->m_oa_group->update_specific_group($group_id);

        $details->name = "New Zealand Office";
        $details->type = "Office";
        $details->room = "";
        $details->suite = "";
        $details->level = "";
        $details->address = "1 Willis Street";
        $details->postcode = "6011";
        $details->city = "Wellington";
        $details->state = "";
        $details->country = "New Zealand";
        $details->geo = "";
        $details->latitude = "-41.286772";
        $details->longitude = "174.776258";
        $details->id = $this->m_oa_location->add_location($details);
        $group = new stdClass();
        $group->group_name = "Items in ".$details->name;
        $group->group_padded_name = '';
        $group->group_description = "Items in ".$details->name;
        $group->group_icon = 'location';
        $group->group_category = 'location';
        $group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_location_id = '".$details->id."' AND system.man_status = 'production'";
        $group->group_parent = '';
        $group->group_display_sql = '';
        $group_id = $this->m_oa_group->insert_group($group);
        $this->m_oa_location->set_group_id($details->id, $group_id);
        $this->m_oa_group->update_specific_group($group_id);

        $details->name = "Brisbane Data Center";
        $details->type = "Data Center";
        $details->room = "";
        $details->suite = "";
        $details->level = "";
        $details->address = "20 Warf Street";
        $details->postcode = "4000";
        $details->city = "Brisbane";
        $details->state = "Queensland";
        $details->country = "Australia";
        $details->geo = "";
        $details->latitude = "-27.4654981";
        $details->longitude = "153.0297626";
        $details->id = $this->m_oa_location->add_location($details);
        $group = new stdClass();
        $group->group_name = "Items in ".$details->name;
        $group->group_padded_name = '';
        $group->group_description = "Items in ".$details->name;
        $group->group_icon = 'location';
        $group->group_category = 'location';
        $group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_location_id = '".$details->id."' AND system.man_status = 'production'";
        $group->group_parent = '';
        $group->group_display_sql = '';
        $group_id = $this->m_oa_group->insert_group($group);
        $this->m_oa_location->set_group_id($details->id, $group_id);
        $this->m_oa_group->update_specific_group($group_id);

        $details->org_name = "Open-AudIT Organisation";
        $details->org_parent_id = "0";
        $details->contact_id = "";
        $details->org_picture = "";
        $details->org_id = $this->m_oa_org->add_org($details);
        $group = new stdClass();
        $group->group_name = $details->org_name." owned items";
        $group->group_padded_name = '';
        $group->group_description = $details->org_name." owned items";
        $group->group_icon = 'contact';
        $group->group_category = 'owner';
        $group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_org_id = '".$details->org_id."' AND system.man_status = 'production'";
        $group->group_parent = '0';
        $group->group_display_sql = '';
        $group_id = $this->m_oa_group->insert_group($group);
        $this->m_oa_org->set_group_id($details->org_id, $group_id);
        $this->m_oa_group->update_specific_group($group_id);

        $details->org_name = "IT Department";
        $details->org_parent_id = "1";
        $details->contact_id = "";
        $details->org_picture = "";
        $details->org_id = $this->m_oa_org->add_org($details);
        $group = new stdClass();
        $group->group_name = $details->org_name." owned items";
        $group->group_padded_name = '';
        $group->group_description = $details->org_name." owned items";
        $group->group_icon = 'contact';
        $group->group_category = 'owner';
        $group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_org_id = '".$details->org_id."' AND system.man_status = 'production'";
        $group->group_parent = '1';
        $group->group_display_sql = '';
        $group_id = $this->m_oa_group->insert_group($group);
        $this->m_oa_org->set_group_id($details->org_id, $group_id);
        $this->m_oa_group->update_specific_group($group_id);

        $details->org_name = "Finance Department";
        $details->org_parent_id = "1";
        $details->contact_id = "";
        $details->org_picture = "";
        $details->org_id = $this->m_oa_org->add_org($details);
        $group = new stdClass();
        $group->group_name = $details->org_name." owned items";
        $group->group_padded_name = '';
        $group->group_description = $details->org_name." owned items";
        $group->group_icon = 'contact';
        $group->group_category = 'owner';
        $group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_org_id = '".$details->org_id."' AND system.man_status = 'production'";
        $group->group_parent = '1';
        $group->group_display_sql = '';
        $group_id = $this->m_oa_group->insert_group($group);
        $this->m_oa_org->set_group_id($details->org_id, $group_id);
        $this->m_oa_group->update_specific_group($group_id);

        $details->org_name = "Marketing Department";
        $details->org_parent_id = "1";
        $details->contact_id = "";
        $details->org_picture = "";
        $details->org_id = $this->m_oa_org->add_org($details);
        $group = new stdClass();
        $group->group_name = $details->org_name." owned items";
        $group->group_padded_name = '';
        $group->group_description = $details->org_name." owned items";
        $group->group_icon = 'contact';
        $group->group_category = 'owner';
        $group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_org_id = '".$details->org_id."' AND system.man_status = 'production'";
        $group->group_parent = '1';
        $group->group_display_sql = '';
        $group_id = $this->m_oa_group->insert_group($group);
        $this->m_oa_org->set_group_id($details->org_id, $group_id);
        $this->m_oa_group->update_specific_group($group_id);

        $details->org_name = "Call Center";
        $details->org_parent_id = "1";
        $details->contact_id = "";
        $details->org_picture = "";
        $details->org_id = $this->m_oa_org->add_org($details);
        $group = new stdClass();
        $group->group_name = $details->org_name." owned items";
        $group->group_padded_name = '';
        $group->group_description = $details->org_name." owned items";
        $group->group_icon = 'contact';
        $group->group_category = 'owner';
        $group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_org_id = '".$details->org_id."' AND system.man_status = 'production'";
        $group->group_parent = '1';
        $group->group_display_sql = '';
        $group_id = $this->m_oa_group->insert_group($group);
        $this->m_oa_org->set_group_id($details->org_id, $group_id);
        $this->m_oa_group->update_specific_group($group_id);

        $details->org_name = "Processing Department";
        $details->org_parent_id = "1";
        $details->contact_id = "";
        $details->org_picture = "";
        $details->org_id = $this->m_oa_org->add_org($details);
        $group = new stdClass();
        $group->group_name = $details->org_name." owned items";
        $group->group_padded_name = '';
        $group->group_description = $details->org_name." owned items";
        $group->group_icon = 'contact';
        $group->group_category = 'owner';
        $group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_org_id = '".$details->org_id."' AND system.man_status = 'production'";
        $group->group_parent = '1';
        $group->group_display_sql = '';
        $group_id = $this->m_oa_group->insert_group($group);
        $this->m_oa_org->set_group_id($details->org_id, $group_id);
        $this->m_oa_group->update_specific_group($group_id);

        $details->org_name = "IT Infrastructure";
        $details->org_parent_id = "1";
        $details->contact_id = "";
        $details->org_picture = "";
        $details->org_id = $this->m_oa_org->add_org($details);
        $group = new stdClass();
        $group->group_name = $details->org_name." owned items";
        $group->group_padded_name = '';
        $group->group_description = $details->org_name." owned items";
        $group->group_icon = 'contact';
        $group->group_category = 'owner';
        $group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_org_id = '".$details->org_id."' AND system.man_status = 'production'";
        $group->group_parent = '1';
        $group->group_display_sql = '';
        $group_id = $this->m_oa_group->insert_group($group);
        $this->m_oa_org->set_group_id($details->org_id, $group_id);
        $this->m_oa_group->update_specific_group($group_id);

        $first_name = array("Fred", "Wilma", "Pebbles", "Barney", "Betty", "Benjamin", "Charles", "Frank", "Max", "Walter", "Sherman", "Margaret", "Francis", "Homer", "Bart", "Maggie", "Lisa", "Marge", "Greg", "Peter", "Bobby", "Marcia", "Jan", "Cindy", "Mark", "Ali", "Paige", "Toby");
        $last_name = array("Flintstone", "Rubble", "Pierce", "Winchester", "Burns", "Klinger", "OReilly", "Potter", "Houlihan", "Mulcahey", "Simpson", "Brady", "Unwin");

        for ($i = 1; $i <= intval($computers_to_add); $i++) {
            $details = new stdclass();

            $random = rand(1, 100);

            if ($i > 0 and $i <= 250) {
                $ip = $i;
                $details->man_ip_address = '192.168.0.'.$ip;
            }
            if ($i > 250 and $i <= 500) {
                $ip = $i - 250;
                $details->man_ip_address = '192.168.1.'.$ip;
            }
            if ($i > 500 and $i <= 750) {
                $ip = $i - 500;
                $details->man_ip_address = '192.168.2.'.$ip;
            }
            if ($i > 750 and $i <= 1000) {
                $ip = $i - 750;
                $details->man_ip_address = '192.168.3.'.$ip;
            }

            $details->serial = substr("a1b2c3d4e50000".$i, -14);
            $details->man_serial = $details->serial;
            $details->uuid = "";
            $details->status = 'production';

            # create a random timestamp for the last 30 days.
            // $k = rand(1,2);
            // $year = date('Y');
            // if ($k == 1) {
            // 	# use the date from last month
            // 	$day = rand(date('j'), 31);
            // 	$month = date('n') -1;
            // 	if ($month == 0) { $month = 12; $year = $year -1; }
            // } else {
            // 	# use this months date
            // 	$day = rand(1, date('j'));
            // 	$month = date('n');
            // }
            // if ($day < 10) { $day = '0' . $day; }
            // if ($month < 10) { $month = '0' . $month; }

            # create a random timestamp for the last 50 days.
            $random_days_to_subtract = rand(0, 50);
            $details->last_seen = date("Y-m-d", strtotime("-".$random_days_to_subtract." days"))." 10:00:00";

#			$details->last_seen = $year . "-" . $month . "-" . $day . " 10:00:00";
            $details->last_seen_by = "manual";
            $details->timestamp = $details->last_seen;
            $details->domain = "open-audit.local";
            $details->os_group = "";
            $details->os_family = "";
            $details->os_name = "";
            $details->type = "unknown";
            $details->hostname = $i;
            $details->manufacturer = "";
            $details->model = "";

            if ($random > 0 and $random <= 15) {
                $details->os_group = 'Windows';
                $details->os_family = "Windows XP";
                $details->os_name = "Microsoft Windows XP Professional";
                $details->type = "computer";
                $details->icon = "windows_xp";
                $details->hostname = "old_workstation_".$i;
                $details->uuid = $details->man_serial;
                $details->man_location_id = rand(2, 6);
                $details->pc_date_os_installation = "2006-11-30";
                $details->man_owner = $first_name[rand(0, count($first_name)-1)]." ".$last_name[rand(0, count($last_name)-1)];
                $details->last_seen_by = "audit";
                $j = rand(1, 2);
                if ($j == 1) {
                    $details->manufacturer = "Hewlett Packard";
                    $details->model = "HP Compaq 8000 Elite SFF PC";
                    $details->form_factor = 'desktop';
                    $details->man_class = "desktop";
                    $details->man_org_id = '2';
                } else {
                    $details->manufacturer = "Toshiba";
                    $details->model = "Tecra A3";
                    $details->form_factor = 'laptop';
                    $details->man_class = "laptop";
                    $details->man_org_id = '3';
                }
            }

            if ($random > 15 and $random <= 25) {
                $details->os_group = 'Windows';
                $details->os_family = "Windows 7";
                $details->os_name = "Microsoft Windows 7 Enterprise";
                $details->type = "computer";
                $details->icon = "windows_7";
                $details->hostname = "workstation_".$i;
                $details->uuid = $details->man_serial;
                $details->man_location_id = rand(2, 6);
                $details->pc_date_os_installation = "2011-11-30";
                $details->man_owner = $first_name[rand(0, count($first_name)-1)]." ".$last_name[rand(0, count($last_name)-1)];
                $details->last_seen_by = "audit";
                $j = rand(1, 2);
                if ($j == 1) {
                    $details->manufacturer = "Dell";
                    $details->model = "Optiplex 990";
                    $details->form_factor = 'desktop';
                    $details->man_class = "desktop";
                    $details->man_org_id = '3';
                } else {
                    $details->manufacturer = "Toshiba";
                    $details->model = "Tecra P11";
                    $details->form_factor = 'laptop';
                    $details->man_class = "laptop";
                    $details->man_org_id = '4';
                }
            }

            if ($random > 25 and $random <= 30) {
                $details->os_group = 'Windows';
                $details->os_family = "Windows 8";
                $details->os_name = "Microsoft Windows 8 Enterprise";
                $details->type = "computer";
                $details->icon = "windows_8";
                $details->hostname = "new_workstation_".$i;
                $details->uuid = $details->man_serial;
                $details->man_location_id = rand(2, 6);
                $details->pc_date_os_installation = "2002-11-30";
                $details->man_owner = $first_name[rand(0, count($first_name)-1)]." ".$last_name[rand(0, count($last_name)-1)];
                $details->last_seen_by = "audit";
                $j = rand(1, 2);
                if ($j == 1) {
                    $details->manufacturer = "Dell";
                    $details->model = "Optiplex 990";
                    $details->form_factor = 'desktop';
                    $details->man_class = "desktop";
                    $details->man_org_id = '2';
                } else {
                    $details->manufacturer = "Toshiba";
                    $details->model = "Tecra P11";
                    $details->form_factor = 'laptop';
                    $details->man_class = "laptop";
                    $details->man_org_id = '5';
                }
            }

            if ($random > 30 and $random <= 35) {
                $details->os_group = 'Linux';
                $details->os_family = "Ubuntu";
                $details->os_name = "Ubuntu 12.04.2 LTS";
                $details->type = "computer";
                $details->icon = "ubuntu";
                $details->hostname = "lin_".$i;
                $details->uuid = $details->man_serial;
                $details->man_location_id = rand(1, 6);
                $details->pc_date_os_installation = "2012-05-10";
                $details->man_org_id = rand(2, 6);
                $details->man_owner = $first_name[rand(0, count($first_name)-1)]." ".$last_name[rand(0, count($last_name)-1)];
                $details->last_seen_by = "audit";
                $j = rand(1, 2);
                if ($j == 1) {
                    $details->manufacturer = "System 76";
                    $details->model = "Gazelle Professional";
                    $details->man_class = "laptop";
                    $details->form_factor = 'laptop';
                } else {
                    $details->manufacturer = "System 76";
                    $details->model = "Wild Dog Performance";
                    $details->man_class = "desktop";
                    $details->form_factor = 'tower';
                }
            }

            if ($random > 35 and $random <= 45) {
                $details->os_group = 'Windows';
                $details->os_family = "Windows 2003";
                $details->os_name = "Microsoft Windows Server 2003, Standard Edition";
                $details->type = "computer";
                $details->icon = "windows_2003";
                $details->hostname = "old_server_".$i;
                $details->uuid = $details->man_serial;
                $details->manufacturer = "Dell";
                $details->model = "Poweredge 2650";
                $details->form_factor = 'rack';
                $details->man_location_id = '7';
                $details->pc_date_os_installation = "2005-04-30";
                $details->man_class = "server";
                $details->man_org_id = '7';
                $details->last_seen_by = "audit";
                $j = rand(1, 6);
                if ($j == 1) {
                    $details->man_function = "FILE";
                } elseif ($j == 2) {
                    $details->man_function = "SQL";
                } elseif ($j == 3) {
                    $details->man_function = "DC";
                } elseif ($j == 4) {
                    $details->man_function = "MAIL";
                } elseif ($j == 5) {
                    $details->man_function = "APP";
                } elseif ($j == 6) {
                    $details->man_function = "WEB";
                }
            }

            if ($random > 45 and $random <= 55) {
                $details->os_group = 'Windows';
                $details->os_family = "Windows 2008";
                $details->os_name = "Microsoft Windows Server 2008 Standard";
                $details->type = "computer";
                $details->icon = "windows_2008";
                $details->hostname = "server_".$i;
                $details->uuid = $details->man_serial;
                $details->manufacturer = "Hewlett Packard";
                $details->model = "Proliant ML530 G2";
                $details->form_factor = 'rack';
                $details->man_location_id = '7';
                $details->pc_date_os_installation = "2009-10-05";
                $details->man_class = "server";
                $details->man_org_id = '7';
                $details->last_seen_by = "audit";
                $j = rand(1, 6);
                if ($j == 1) {
                    $details->man_function = "FILE";
                } elseif ($j == 2) {
                    $details->man_function = "SQL";
                } elseif ($j == 3) {
                    $details->man_function = "DC";
                } elseif ($j == 4) {
                    $details->man_function = "MAIL";
                } elseif ($j == 5) {
                    $details->man_function = "APP";
                } elseif ($j == 6) {
                    $details->man_function = "WEB";
                }
            }

            if ($random > 55 and $random <= 60) {
                $details->os_group = 'Linux';
                $details->os_family = "Debian";
                $details->os_name = "Debian 6";
                $details->type = "computer";
                $details->icon = "debian";
                $details->hostname = "lin_".$i;
                $details->uuid = $details->man_serial;
                $details->manufacturer = "System 76";
                $details->model = "Jackal Pro 2u";
                $details->form_factor = 'rack';
                $details->man_location_id = '7';
                $details->pc_date_os_installation = "2013-01-30";
                $details->man_class = "server";
                $details->man_org_id = '7';
                $details->last_seen_by = "audit";
                $j = rand(1, 3);
                if ($j == 1) {
                    $details->man_function = "SQL";
                } elseif ($j == 2) {
                    $details->man_function = "MAIL";
                } elseif ($j == 3) {
                    $details->man_function = "WEB";
                }
            }

            if ($random > 60 and $random <= 70) {
                $details->os_group = 'Linux';
                $details->os_family = "RedHat";
                $details->os_name = "RedHat 6.3";
                $details->type = "computer";
                $details->icon = "redhat";
                $details->hostname = "lin_".$i;
                $details->uuid = $details->man_serial;
                $details->pc_date_os_installation = "2007-05-08";
                $details->last_seen_by = "audit";
                $j = rand(1, 3);
                if ($j == 1) {
                    $details->manufacturer = "System 76";
                    $details->model = "Gazelle Professional";
                    $details->man_class = "laptop";
                    $details->form_factor = 'laptop';
                    $details->man_location_id = rand(1, 6);
                    $details->man_org_id = "2";
                    $details->man_owner = $first_name[rand(0, count($first_name)-1)]." ".$last_name[rand(0, count($last_name)-1)];
                } elseif ($j == 2) {
                    $details->manufacturer = "System 76";
                    $details->model = "Wild Dog Performance";
                    $details->man_class = "desktop";
                    $details->form_factor = 'tower';
                    $details->man_location_id = rand(1, 6);
                    $details->man_org_id = "2";
                    $details->man_owner = $first_name[rand(0, count($first_name)-1)]." ".$last_name[rand(0, count($last_name)-1)];
                } else {
                    $details->manufacturer = "Hewlett Packard";
                    $details->model = "Proliant ML530 G2";
                    $details->form_factor = 'rack';
                    $details->man_class = "server";
                    $details->man_location_id = '7';
                    $details->man_org_id = '7';
                    $j = rand(1, 3);
                    if ($j == 1) {
                        $details->man_function = "JBOSS";
                    } elseif ($j == 2) {
                        $details->man_function = "SQL";
                    } elseif ($j == 3) {
                        $details->man_function = "WEB";
                    }
                }
            }

            if ($random > 70 and $random <= 78) {
                $details->os_group = 'Cisco';
                $details->os_family = "Cisco IOS";
                $details->os_name = "IOS 12.4";
                $details->type = "switch";
                $details->icon = "switch";
                $details->hostname = "cisco_switch_".$i;
                $details->manufacturer = "Cisco";
                $details->model = "Cisco Catalyst 2960 24tt";
                $details->form_factor = '';
                $details->man_location_id = rand(1, 7);
                $details->man_org_id = '7';
                $details->last_seen_by = "snmp";
            }

            if ($random > 78 and $random <= 81) {
                $details->os_group = '';
                $details->os_family = "";
                $details->os_name = "";
                $details->type = "switch";
                $details->icon = "switch";
                $details->hostname = "netgear_switch_".$i;
                $details->manufacturer = "Netgear";
                $details->model = "CG814WG";
                $details->form_factor = '';
                $details->man_location_id = rand(1, 7);
                $details->man_org_id = '7';
                $details->last_seen_by = "snmp";
            }

            if ($random > 81 and $random <= 85) {
                $details->os_group = 'Cisco';
                $details->os_family = "Cisco IOS";
                $details->os_name = "IOS 12.2";
                $details->type = "router";
                $details->icon = "router";
                $details->hostname = "cisco_router_".$i;
                $details->manufacturer = "Cisco";
                $details->model = "Cisco 887 g";
                $details->form_factor = '';
                $details->man_location_id = rand(1, 7);
                $details->man_org_id = '7';
                $details->last_seen_by = "snmp";
            }

            if ($random > 85 and $random <= 87) {
                $details->os_group = '';
                $details->os_family = "Nokia";
                $details->os_name = "";
                $details->type = "cell phone";
                $details->icon = "cell_phone";
                $details->hostname = "";
                $details->manufacturer = "Nokia";
                $details->model = "6610";
                $details->form_factor = '';
                $details->man_location_id = rand(1, 6);
                $details->man_owner = $first_name[rand(0, count($first_name)-1)]." ".$last_name[rand(0, count($last_name)-1)];
                $details->man_service_number = "01 2345 0".$i;
                $details->man_service_provider = "Telstra";
                $details->man_ip_address = "";
                $details->man_org_id = rand(2, 6);
            }

            if ($random > 87 and $random <= 90) {
                $details->os_group = '';
                $details->os_family = "Apple";
                $details->os_name = "IOS 5";
                $details->type = "smart phone";
                $details->icon = "apple";
                $details->hostname = "iphone_".$i;
                $details->manufacturer = "Apple";
                $details->model = "iPhone 4";
                $details->form_factor = '';
                $details->man_location_id = rand(1, 6);
                $details->man_owner = $first_name[rand(0, count($first_name)-1)]." ".$last_name[rand(0, count($last_name)-1)];
                $details->man_service_number = "01 2345 0".$i;
                $details->man_service_provider = "Telstra";
                $details->man_ip_address = "";
                $details->man_org_id = rand(2, 6);
            }

            if ($random > 90 and $random <= 95) {
                $details->os_group = '';
                $details->os_family = "Android";
                $details->os_name = "Jelly Bean";
                $details->type = "smart phone";
                $details->icon = "android";
                $details->hostname = "galaxy_nexus_".$i;
                $details->manufacturer = "Samsung";
                $details->model = "Galaxy Nexus";
                $details->form_factor = '';
                $details->man_location_id = rand(1, 6);
                $details->man_owner = $first_name[rand(0, count($first_name)-1)]." ".$last_name[rand(0, count($last_name)-1)];
                $details->man_service_number = "01 2345 0".$i;
                $details->man_service_provider = "Telstra";
                $details->man_ip_address = "";
                $details->man_org_id = rand(2, 6);
            }

            if ($random > 95 and $random <= 100) {
                $details->os_group = '';
                $details->os_family = "";
                $details->os_name = "";
                $details->type = "printer";
                $details->icon = "printer";
                $details->form_factor = '';
                $details->man_location_id = rand(1, 6);
                $details->man_org_id = "7";
                $details->last_seen_by = "audit";

                $j = rand(1, 3);
                if ($j == 1) {
                    $details->manufacturer = "Hewlett Packard";
                    $details->model = "HP Color Laserjet 4700";
                    $details->hostname = "hp_laserjet_".$i;
                } elseif ($j == 2) {
                    $details->manufacturer = "Konica Minolta";
                    $details->model = "Konica Minolta C352 C300";
                    $details->hostname = "konika_".$i;
                } elseif ($j == 3) {
                    $details->manufacturer = "Brother";
                    $details->model = "Brother MFC-465CN Printer";
                    $details->man_ip_address = "";
                    $details->hostname = "";
                    $details->man_org_id = rand(2, 6);
                    $details->man_owner = $first_name[rand(0, count($first_name)-1)]." ".$last_name[rand(0, count($last_name)-1)];
                    $details->last_seen_by = "manual";
                }
            }

            $details->man_os_group = $details->os_group;
            $details->man_os_family = $details->os_family;
            $details->man_os_name = $details->os_name;
            $details->man_type = $details->type;
            $details->fqdn = $details->hostname.".open-audit.local";
            $details->description = ucfirst($details->type)." ".$details->os_group." ".$i;
            $details->man_description = $details->description;
            $details->man_manufacturer = $details->manufacturer;
            $details->man_model = $details->model;
            $details->man_picture = strtolower($details->model);
            $details->man_picture = str_replace(" ", "_", $details->man_picture);
            $details->system_key = $this->m_system->create_system_key($details);
            $j = $this->m_system->insert_system($details);
        }

        for ($i = 1; $i <= 0; $i++) {
            $details = null;
            $details = new stdclass();

            $random_days_to_subtract = rand(0, 50);
            $details->last_seen = date("Y-m-d", strtotime("-".$random_days_to_subtract." days"))." 10:00:00";
            $details->man_ip_address = "";
            $details->last_seen_by = "manual";
            $details->timestamp = $details->last_seen;
            $details->os_group = "";
            $details->os_family = "";
            $details->os_name = "";
            $details->man_os_group = "";
            $details->man_os_family = "";
            $details->man_os_name = "";
            $details->type = "token";
            $details->man_type = "token";
            $details->icon = "access_token";
            $details->hostname = "";
            $details->uuid = $details->man_serial;
            $details->man_location_id = rand(1, 6);
            $details->manufacturer = "RSA";
            $details->man_manufacturer = $details->manufacturer;
            $details->model = "SecurID";
            $details->man_model = $details->model;
            $details->serial = substr("z6y5x4w3e5000".$i, -14);
            $details->man_serial = $details->serial;
            $details->man_picture = strtolower($details->model);
            $details->man_owner = $first_name[rand(0, count($first_name)-1)]." ".$last_name[rand(0, count($last_name)-1)];
            $details->description = "Access Token for User ".$details->man_owner;
            $details->man_description = $details->description;
            $details->man_class = "";
            $details->form_factor = "";
            $details->man_org_id = rand(2, 5);
            $j = $this->m_system->insert_system($details);
        }

        $file = BASEPATH.'../application/controllers/groups/AllPrinters.xml';
        $file_handle = fopen($file, "rb");
        $contents = fread($file_handle, filesize($file));
        $xml = new SimpleXMLElement(utf8_encode($contents));
        foreach ($xml->children() as $child) {
            if ($child->getName() == 'details') {
                $group_id = $this->m_oa_group->import_group($child);
            }
            if ($child->getName() == 'columns') {
                $this->m_oa_group_column->import_group($child, $group_id);
            }
        }
        $this->m_oa_group->update_specific_group($group_id);

        $file = BASEPATH.'../application/controllers/groups/DebianSystems.xml';
        $file_handle = fopen($file, "rb");
        $contents = fread($file_handle, filesize($file));
        $xml = new SimpleXMLElement(utf8_encode($contents));
        foreach ($xml->children() as $child) {
            if ($child->getName() == 'details') {
                $group_id = $this->m_oa_group->import_group($child);
            }
            if ($child->getName() == 'columns') {
                $this->m_oa_group_column->import_group($child, $group_id);
            }
        }
        $this->m_oa_group->update_specific_group($group_id);

        $file = BASEPATH.'../application/controllers/groups/Laptops.xml';
        $file_handle = fopen($file, "rb");
        $contents = fread($file_handle, filesize($file));
        $xml = new SimpleXMLElement(utf8_encode($contents));
        foreach ($xml->children() as $child) {
            if ($child->getName() == 'details') {
                $group_id = $this->m_oa_group->import_group($child);
            }
            if ($child->getName() == 'columns') {
                $this->m_oa_group_column->import_group($child, $group_id);
            }
        }
        $this->m_oa_group->update_specific_group($group_id);

        $file = BASEPATH.'../application/controllers/groups/Phones.xml';
        $file_handle = fopen($file, "rb");
        $contents = fread($file_handle, filesize($file));
        $xml = new SimpleXMLElement(utf8_encode($contents));
        foreach ($xml->children() as $child) {
            if ($child->getName() == 'details') {
                $group_id = $this->m_oa_group->import_group($child);
            }
            if ($child->getName() == 'columns') {
                $this->m_oa_group_column->import_group($child, $group_id);
            }
        }
        $this->m_oa_group->update_specific_group($group_id);

        $file = BASEPATH.'../application/controllers/groups/Routers.xml';
        $file_handle = fopen($file, "rb");
        $contents = fread($file_handle, filesize($file));
        $xml = new SimpleXMLElement(utf8_encode($contents));
        foreach ($xml->children() as $child) {
            if ($child->getName() == 'details') {
                $group_id = $this->m_oa_group->import_group($child);
            }
            if ($child->getName() == 'columns') {
                $this->m_oa_group_column->import_group($child, $group_id);
            }
        }
        $this->m_oa_group->update_specific_group($group_id);

        $file = BASEPATH.'../application/controllers/groups/Switches.xml';
        $file_handle = fopen($file, "rb");
        $contents = fread($file_handle, filesize($file));
        $xml = new SimpleXMLElement(utf8_encode($contents));
        foreach ($xml->children() as $child) {
            if ($child->getName() == 'details') {
                $group_id = $this->m_oa_group->import_group($child);
            }
            if ($child->getName() == 'columns') {
                $this->m_oa_group_column->import_group($child, $group_id);
            }
        }
        $this->m_oa_group->update_specific_group($group_id);

        $file = BASEPATH.'../application/controllers/groups/WindowsServers.xml';
        $file_handle = fopen($file, "rb");
        $contents = fread($file_handle, filesize($file));
        $xml = new SimpleXMLElement(utf8_encode($contents));
        foreach ($xml->children() as $child) {
            if ($child->getName() == 'details') {
                $group_id = $this->m_oa_group->import_group($child);
            }
            if ($child->getName() == 'columns') {
                $this->m_oa_group_column->import_group($child, $group_id);
            }
        }
        $this->m_oa_group->update_specific_group($group_id);

        $file = BASEPATH.'../application/controllers/groups/RedHatSystems.xml';
        $file_handle = fopen($file, "rb");
        $contents = fread($file_handle, filesize($file));
        $xml = new SimpleXMLElement(utf8_encode($contents));
        foreach ($xml->children() as $child) {
            if ($child->getName() == 'details') {
                $group_id = $this->m_oa_group->import_group($child);
            }
            if ($child->getName() == 'columns') {
                $this->m_oa_group_column->import_group($child, $group_id);
            }
        }
        $this->m_oa_group->update_specific_group($group_id);

        $file = BASEPATH.'../application/controllers/groups/UbuntuSystems.xml';
        $file_handle = fopen($file, "rb");
        $contents = fread($file_handle, filesize($file));
        $xml = new SimpleXMLElement(utf8_encode($contents));
        foreach ($xml->children() as $child) {
            if ($child->getName() == 'details') {
                $group_id = $this->m_oa_group->import_group($child);
            }
            if ($child->getName() == 'columns') {
                $this->m_oa_group_column->import_group($child, $group_id);
            }
        }
        $this->m_oa_group->update_specific_group($group_id);

        $file = BASEPATH.'../application/controllers/groups/AccessTokens.xml';
        $file_handle = fopen($file, "rb");
        $contents = fread($file_handle, filesize($file));
        $xml = new SimpleXMLElement(utf8_encode($contents));
        foreach ($xml->children() as $child) {
            if ($child->getName() == 'details') {
                $group_id = $this->m_oa_group->import_group($child);
            }
            if ($child->getName() == 'columns') {
                $this->m_oa_group_column->import_group($child, $group_id);
            }
        }
        $this->m_oa_group->update_specific_group($group_id);

        # update all groups
        $this->m_oa_group->update_groups();

        # insert some random software
        $sql = "/* admin_test::data  */ SELECT system_id, timestamp FROM system WHERE man_type = 'computer' ORDER BY RAND() DESC LIMIT 100";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $system) {
            for ($i = 1; $i<11; $i++) {
                $day = substr($system->timestamp, 8, 2);
                $i = rand($day, 31);
                $i = $day + 1;
                if ($i < 10) {
                    $i = "0".$i;
                }
                $timestamp = $system->timestamp;
                $first_timestamp = str_replace("-".$day." ", "-".$i." ", $system->timestamp);
                $system_id = $system->system_id;
                $i = rand(1, 10);
                switch ($i) {
                    case '1':
                        $software_name = "LibreOffice";
                        $software_version = "2010";
                        $software_publisher = "The Document Foundation";
                        break;

                    case '2':
                        $software_name = "Adobe Acrobat Pro";
                        $software_version = "X";
                        $software_publisher = "Adobe";
                        break;

                    case '3':
                        $software_name = "Google Chrome";
                        $software_version = "22";
                        $software_publisher = "Google";
                        break;

                    case '4':
                        $software_name = "Mozilla Firefox";
                        $software_version = "23";
                        $software_publisher = "Mozilla Corporation";
                        break;

                    case '5':
                        $software_name = "Sublime Text 2";
                        $software_version = "2";
                        $software_publisher = "Sublime HQ";
                        break;

                    case '6':
                        $software_name = "Steam";
                        $software_version = "";
                        $software_publisher = "Valve";
                        break;

                    case '7':
                        $software_name = "Inkscape";
                        $software_version = "0.48";
                        $software_publisher = "www.inkscape.org";
                        break;

                    case '8':
                        $software_name = "Thunderbird";
                        $software_version = "17.0.8";
                        $software_publisher = "Mozilla Corporation";
                        break;

                    case '9':
                        $software_name = "VLC";
                        $software_version = "2.0.8";
                        $software_publisher = "VLC";
                        break;

                    case '10':
                        $software_name = "Calibre";
                        $software_version = "0.9.18";
                        $software_publisher = "David Goyle";
                        break;

                    default:
                        # code...
                        break;
                }
                $sql = "INSERT INTO sys_sw_software (software_id, system_id, software_name, software_version, software_publisher, timestamp, first_timestamp) VALUES (NULL, ?, ?, ?, ?, ?, ?)";
                $data = array("$system_id", "$software_name", "$software_version", "$software_publisher", "$timestamp", "$first_timestamp");
                $query = $this->db->query($sql, $data);
            }
        }

        redirect('/');
    }

    public function data_devices()
    {
        # populate the Open-AudIT database with dummy devices

        # comment the below line out to enable this funtcion.
        redirect('/');

        $this->load->model("m_oa_location");
        $this->load->model("m_system");
        $this->load->model("m_oa_group");
        $this->load->model("m_oa_group_column");
        $this->load->model("m_oa_org");
        $first_name = array("Fred", "Wilma", "Pebbles", "Barney", "Betty", "Benjamin", "Charles", "Frank", "Max", "Walter", "Sherman", "Margaret", "Francis", "Homer", "Bart", "Maggie", "Lisa", "Marge", "Greg", "Peter", "Bobby", "Marcia", "Jan", "Cindy", "Mark", "Ali", "Paige", "Toby");
        $last_name = array("Flintstone", "Rubble", "Pierce", "Winchester", "Burns", "Klinger", "OReilly", "Potter", "Houlihan", "Mulcahey", "Simpson", "Brady", "Unwin");

        for ($i = 1; $i<1001; $i++) {
            $details = new stdclass();

            $random = rand(1, 100);

            if ($i > 0 and $i <= 250) {
                $ip = $i;
                $details->man_ip_address = '192.168.40.'.$ip;
            }
            if ($i > 250 and $i <= 500) {
                $ip = $i - 250;
                $details->man_ip_address = '192.168.10.'.$ip;
            }
            if ($i > 500 and $i <= 750) {
                $ip = $i - 500;
                $details->man_ip_address = '192.168.20.'.$ip;
            }
            if ($i > 750 and $i <= 1000) {
                $ip = $i - 750;
                $details->man_ip_address = '192.168.30.'.$ip;
            }

            # generate a random serial
            $details->serial = "";
            $characters = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'));
            $max = count($characters) - 1;
            for ($j = 0; $j <= 14; $j++) {
                $rand = mt_rand(0, $max);
                $details->serial .= $characters[$rand];
            }
            $hostname_extra = "";
            for ($j = 0; $j <= 4; $j++) {
                $rand = mt_rand(0, $max);
                $hostname_extra .= $characters[$rand];
            }

            #$details->serial = substr("a1b2c3d4e50000" . $i, -14);
            $details->man_serial = $details->serial;
            $details->uuid = "";
            $details->status = 'production';

            # create a random timestamp for the last 30 days.
            $k = rand(1, 2);
            $year = date('Y');
            if ($k == 1) {
                # use the date from last month
                $day = rand(date('j'), 31);
                $month = date('n') -1;
                if ($month == 0) {
                    $month = 12;
                    $year = $year -1;
                }
            } else {
                # use this months date
                $day = rand(1, date('j'));
                $month = date('n');
            }
            if ($day < 10) {
                $day = '0'.$day;
            }
            if ($month < 10) {
                $month = '0'.$month;
            }

            $details->last_seen = $year."-".$month."-".$day." 10:00:00";
            $details->last_seen_by = "manual";
            $details->timestamp = $details->last_seen;
            $details->domain = "open-audit.local";
            $details->os_group = "";
            $details->os_family = "";
            $details->os_name = "";
            $details->type = "unknown";
            $details->hostname = $i;
            $details->manufacturer = "";
            $details->model = "";

            if ($random > 0 and $random <= 15) {
                $details->os_group = 'Windows';
                $details->os_family = "Windows XP";
                $details->os_name = "Microsoft Windows XP Professional";
                $details->type = "computer";
                $details->icon = "windows_xp";
                $details->hostname = "old_workstation_".$i;
                $details->uuid = $details->man_serial;
                $details->man_location_id = rand(2, 6);
                $details->pc_date_os_installation = "2006-11-30";
                $details->man_owner = $first_name[rand(0, count($first_name)-1)]." ".$last_name[rand(0, count($last_name)-1)];
                $details->last_seen_by = "audit";
                $j = rand(1, 2);
                if ($j == 1) {
                    $details->manufacturer = "Hewlett Packard";
                    $details->model = "HP Compaq 8000 Elite SFF PC";
                    $details->form_factor = 'desktop';
                    $details->man_class = "desktop";
                    $details->man_org_id = '2';
                } else {
                    $details->manufacturer = "Toshiba";
                    $details->model = "Tecra A3";
                    $details->form_factor = 'laptop';
                    $details->man_class = "laptop";
                    $details->man_org_id = '3';
                }
            }

            if ($random > 15 and $random <= 25) {
                $details->os_group = 'Windows';
                $details->os_family = "Windows 7";
                $details->os_name = "Microsoft Windows 7 Enterprise";
                $details->type = "computer";
                $details->icon = "windows_7";
                $details->hostname = "workstation_".$i;
                $details->uuid = $details->man_serial;
                $details->man_location_id = rand(2, 6);
                $details->pc_date_os_installation = "2011-11-30";
                $details->man_owner = $first_name[rand(0, count($first_name)-1)]." ".$last_name[rand(0, count($last_name)-1)];
                $details->last_seen_by = "audit";
                $j = rand(1, 2);
                if ($j == 1) {
                    $details->manufacturer = "Dell";
                    $details->model = "Optiplex 990";
                    $details->form_factor = 'desktop';
                    $details->man_class = "desktop";
                    $details->man_org_id = '3';
                } else {
                    $details->manufacturer = "Toshiba";
                    $details->model = "Tecra P11";
                    $details->form_factor = 'laptop';
                    $details->man_class = "laptop";
                    $details->man_org_id = '4';
                }
            }

            if ($random > 25 and $random <= 30) {
                $details->os_group = 'Windows';
                $details->os_family = "Windows 8";
                $details->os_name = "Microsoft Windows 8 Enterprise";
                $details->type = "computer";
                $details->icon = "windows_8";
                $details->hostname = "new_workstation_".$i;
                $details->uuid = $details->man_serial;
                $details->man_location_id = rand(2, 6);
                $details->pc_date_os_installation = "2002-11-30";
                $details->man_owner = $first_name[rand(0, count($first_name)-1)]." ".$last_name[rand(0, count($last_name)-1)];
                $details->last_seen_by = "audit";
                $j = rand(1, 2);
                if ($j == 1) {
                    $details->manufacturer = "Dell";
                    $details->model = "Optiplex 990";
                    $details->form_factor = 'desktop';
                    $details->man_class = "desktop";
                    $details->man_org_id = '2';
                } else {
                    $details->manufacturer = "Toshiba";
                    $details->model = "Tecra P11";
                    $details->form_factor = 'laptop';
                    $details->man_class = "laptop";
                    $details->man_org_id = '5';
                }
            }

            if ($random > 30 and $random <= 35) {
                $details->os_group = 'Linux';
                $details->os_family = "Ubuntu";
                $details->os_name = "Ubuntu 12.04.2 LTS";
                $details->type = "computer";
                $details->icon = "ubuntu";
                $details->hostname = "lin_".$i;
                $details->uuid = $details->man_serial;
                $details->man_location_id = rand(1, 6);
                $details->pc_date_os_installation = "2012-05-10";
                $details->man_org_id = rand(2, 6);
                $details->man_owner = $first_name[rand(0, count($first_name)-1)]." ".$last_name[rand(0, count($last_name)-1)];
                $details->last_seen_by = "audit";
                $j = rand(1, 2);
                if ($j == 1) {
                    $details->manufacturer = "System 76";
                    $details->model = "Gazelle Professional";
                    $details->man_class = "laptop";
                    $details->form_factor = 'laptop';
                } else {
                    $details->manufacturer = "System 76";
                    $details->model = "Wild Dog Performance";
                    $details->man_class = "desktop";
                    $details->form_factor = 'tower';
                }
            }

            if ($random > 35 and $random <= 45) {
                $details->os_group = 'Windows';
                $details->os_family = "Windows 2003";
                $details->os_name = "Microsoft Windows Server 2003, Standard Edition";
                $details->type = "computer";
                $details->icon = "windows_2003";
                $details->hostname = "old_server_".$i;
                $details->uuid = $details->man_serial;
                $details->manufacturer = "Dell";
                $details->model = "Poweredge 2650";
                $details->form_factor = 'rack';
                $details->man_location_id = '7';
                $details->pc_date_os_installation = "2005-04-30";
                $details->man_class = "server";
                $details->man_org_id = '7';
                $details->last_seen_by = "audit";
                $j = rand(1, 6);
                if ($j == 1) {
                    $details->man_function = "FILE";
                } elseif ($j == 2) {
                    $details->man_function = "SQL";
                } elseif ($j == 3) {
                    $details->man_function = "DC";
                } elseif ($j == 4) {
                    $details->man_function = "MAIL";
                } elseif ($j == 5) {
                    $details->man_function = "APP";
                } elseif ($j == 6) {
                    $details->man_function = "WEB";
                }
            }

            if ($random > 45 and $random <= 55) {
                $details->os_group = 'Windows';
                $details->os_family = "Windows 2008";
                $details->os_name = "Microsoft Windows Server 2008 Standard";
                $details->type = "computer";
                $details->icon = "windows_2008";
                $details->hostname = "server_".$i;
                $details->uuid = $details->man_serial;
                $details->manufacturer = "Hewlett Packard";
                $details->model = "Proliant ML530 G2";
                $details->form_factor = 'rack';
                $details->man_location_id = '7';
                $details->pc_date_os_installation = "2009-10-05";
                $details->man_class = "server";
                $details->man_org_id = '7';
                $details->last_seen_by = "audit";
                $j = rand(1, 6);
                if ($j == 1) {
                    $details->man_function = "FILE";
                } elseif ($j == 2) {
                    $details->man_function = "SQL";
                } elseif ($j == 3) {
                    $details->man_function = "DC";
                } elseif ($j == 4) {
                    $details->man_function = "MAIL";
                } elseif ($j == 5) {
                    $details->man_function = "APP";
                } elseif ($j == 6) {
                    $details->man_function = "WEB";
                }
            }

            if ($random > 55 and $random <= 60) {
                $details->os_group = 'Linux';
                $details->os_family = "Debian";
                $details->os_name = "Debian 6";
                $details->type = "computer";
                $details->icon = "debian";
                $details->hostname = "lin_".$i;
                $details->uuid = $details->man_serial;
                $details->manufacturer = "System 76";
                $details->model = "Jackal Pro 2u";
                $details->form_factor = 'rack';
                $details->man_location_id = '7';
                $details->pc_date_os_installation = "2013-01-30";
                $details->man_class = "server";
                $details->man_org_id = '7';
                $details->last_seen_by = "audit";
                $j = rand(1, 3);
                if ($j == 1) {
                    $details->man_function = "SQL";
                } elseif ($j == 2) {
                    $details->man_function = "MAIL";
                } elseif ($j == 3) {
                    $details->man_function = "WEB";
                }
            }

            if ($random > 60 and $random <= 70) {
                $details->os_group = 'Linux';
                $details->os_family = "RedHat";
                $details->os_name = "RedHat 6.3";
                $details->type = "computer";
                $details->icon = "redhat";
                $details->hostname = "lin_".$i;
                $details->uuid = $details->man_serial;
                $details->pc_date_os_installation = "2007-05-08";
                $details->last_seen_by = "audit";
                $j = rand(1, 3);
                if ($j == 1) {
                    $details->manufacturer = "System 76";
                    $details->model = "Gazelle Professional";
                    $details->man_class = "laptop";
                    $details->form_factor = 'laptop';
                    $details->man_location_id = rand(1, 6);
                    $details->man_org_id = "2";
                    $details->man_owner = $first_name[rand(0, count($first_name)-1)]." ".$last_name[rand(0, count($last_name)-1)];
                } elseif ($j == 2) {
                    $details->manufacturer = "System 76";
                    $details->model = "Wild Dog Performance";
                    $details->man_class = "desktop";
                    $details->form_factor = 'tower';
                    $details->man_location_id = rand(1, 6);
                    $details->man_org_id = "2";
                    $details->man_owner = $first_name[rand(0, count($first_name)-1)]." ".$last_name[rand(0, count($last_name)-1)];
                } else {
                    $details->manufacturer = "Hewlett Packard";
                    $details->model = "Proliant ML530 G2";
                    $details->form_factor = 'rack';
                    $details->man_class = "server";
                    $details->man_location_id = '7';
                    $details->man_org_id = '7';
                    $j = rand(1, 3);
                    if ($j == 1) {
                        $details->man_function = "JBOSS";
                    } elseif ($j == 2) {
                        $details->man_function = "SQL";
                    } elseif ($j == 3) {
                        $details->man_function = "WEB";
                    }
                }
            }

            if ($random > 70 and $random <= 78) {
                $details->os_group = 'Cisco';
                $details->os_family = "Cisco IOS";
                $details->os_name = "IOS 12.4";
                $details->type = "switch";
                $details->icon = "switch";
                $details->hostname = "cisco_switch_".$i;
                $details->manufacturer = "Cisco";
                $details->model = "Cisco Catalyst 2960 24tt";
                $details->form_factor = '';
                $details->man_location_id = rand(1, 7);
                $details->man_org_id = '7';
                $details->last_seen_by = "snmp";
            }

            if ($random > 78 and $random <= 81) {
                $details->os_group = '';
                $details->os_family = "";
                $details->os_name = "";
                $details->type = "switch";
                $details->icon = "switch";
                $details->hostname = "netgear_switch_".$i;
                $details->manufacturer = "Netgear";
                $details->model = "CG814WG";
                $details->form_factor = '';
                $details->man_location_id = rand(1, 7);
                $details->man_org_id = '7';
                $details->last_seen_by = "snmp";
            }

            if ($random > 81 and $random <= 85) {
                $details->os_group = 'Cisco';
                $details->os_family = "Cisco IOS";
                $details->os_name = "IOS 12.2";
                $details->type = "router";
                $details->icon = "router";
                $details->hostname = "cisco_router_".$i;
                $details->manufacturer = "Cisco";
                $details->model = "Cisco 887 g";
                $details->form_factor = '';
                $details->man_location_id = rand(1, 7);
                $details->man_org_id = '7';
                $details->last_seen_by = "snmp";
            }

            if ($random > 85 and $random <= 87) {
                $details->os_group = '';
                $details->os_family = "Nokia";
                $details->os_name = "";
                $details->type = "cell phone";
                $details->icon = "cell_phone";
                $details->hostname = "";
                $details->manufacturer = "Nokia";
                $details->model = "6610";
                $details->form_factor = '';
                $details->man_location_id = rand(1, 6);
                $details->man_owner = $first_name[rand(0, count($first_name)-1)]." ".$last_name[rand(0, count($last_name)-1)];
                $details->man_service_number = "01 2345 0".$i;
                $details->man_service_provider = "Telstra";
                $details->man_ip_address = "";
                $details->man_org_id = rand(2, 6);
            }

            if ($random > 87 and $random <= 90) {
                $details->os_group = '';
                $details->os_family = "Apple";
                $details->os_name = "IOS 5";
                $details->type = "smart phone";
                $details->icon = "apple";
                $details->hostname = "iphone_".$i;
                $details->manufacturer = "Apple";
                $details->model = "iPhone 4";
                $details->form_factor = '';
                $details->man_location_id = rand(1, 6);
                $details->man_owner = $first_name[rand(0, count($first_name)-1)]." ".$last_name[rand(0, count($last_name)-1)];
                $details->man_service_number = "01 2345 0".$i;
                $details->man_service_provider = "Telstra";
                $details->man_ip_address = "";
                $details->man_org_id = rand(2, 6);
            }

            if ($random > 90 and $random <= 95) {
                $details->os_group = '';
                $details->os_family = "Android";
                $details->os_name = "Jelly Bean";
                $details->type = "smart phone";
                $details->icon = "android";
                $details->hostname = "galaxy_nexus_".$i;
                $details->manufacturer = "Samsung";
                $details->model = "Galaxy Nexus";
                $details->form_factor = '';
                $details->man_location_id = rand(1, 6);
                $details->man_owner = $first_name[rand(0, count($first_name)-1)]." ".$last_name[rand(0, count($last_name)-1)];
                $details->man_service_number = "01 2345 0".$i;
                $details->man_service_provider = "Telstra";
                $details->man_ip_address = "";
                $details->man_org_id = rand(2, 6);
            }

            if ($random > 95 and $random <= 100) {
                $details->os_group = '';
                $details->os_family = "";
                $details->os_name = "";
                $details->type = "printer";
                $details->icon = "printer";
                $details->form_factor = '';
                $details->man_location_id = rand(1, 6);
                $details->man_org_id = "7";
                $details->last_seen_by = "audit";

                $j = rand(1, 3);
                if ($j == 1) {
                    $details->manufacturer = "Hewlett Packard";
                    $details->model = "HP Color Laserjet 4700";
                    $details->hostname = "hp_laserjet_".$i;
                } elseif ($j == 2) {
                    $details->manufacturer = "Konica Minolta";
                    $details->model = "Konica Minolta C352 C300";
                    $details->hostname = "konika_".$i;
                } elseif ($j == 3) {
                    $details->manufacturer = "Brother";
                    $details->model = "Brother MFC-465CN Printer";
                    $details->man_ip_address = "";
                    $details->hostname = "";
                    $details->man_org_id = rand(2, 6);
                    $details->man_owner = $first_name[rand(0, count($first_name)-1)]." ".$last_name[rand(0, count($last_name)-1)];
                    $details->last_seen_by = "manual";
                }
            }
            $windows_user = strtolower($details->man_owner);
            $windows_user = str_replace(" ", ".", $windows_user)."@open-audit.com";
            $details->hostname .= "_".$hostname_extra;
            $details->man_os_group = $details->os_group;
            $details->man_os_family = $details->os_family;
            $details->man_os_name = $details->os_name;
            $details->man_type = $details->type;
            $details->fqdn = $details->hostname.".open-audit.local";
            $details->description = ucfirst($details->type)." ".$details->os_group." ".$i;
            $details->man_description = $details->description;
            $details->man_manufacturer = $details->manufacturer;
            $details->man_model = $details->model;
            $details->man_picture = strtolower($details->model);
            $details->man_picture = str_replace(" ", "_", $details->man_picture);
            $details->system_key = $this->m_system->create_system_key($details);
            $j = $this->m_system->insert_system($details);
        }
        # update all groups
        $this->m_oa_group->update_groups();
        redirect('/');
    }

    public function data_software()
    {
        # populate the Open-AudIT database with dummy software

        # comment the below line out to enable this funtcion.
        redirect('/');

        $this->load->model("m_oa_group");
        $sql = "SELECT system_id, timestamp FROM system WHERE man_type = 'computer' ORDER BY RAND() DESC LIMIT 100";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $system) {
            for ($i = 1; $i<11; $i++) {
                $day = substr($system->timestamp, 8, 2);
                $i = rand($day, 31);
                $i = $day + 1;
                if ($i < 10) {
                    $i = "0".$i;
                }
                $timestamp = $system->timestamp;
                $first_timestamp = str_replace("-".$day." ", "-".$i." ", $system->timestamp);
                $system_id = $system->system_id;
                $i = rand(1, 18);
                switch ($i) {
                    case '1':
                        $software_name = "LibreOffice";
                        $software_version = "2010";
                        $software_publisher = "The Document Foundation";
                        break;

                    case '2':
                        $software_name = "Adobe Acrobat Pro";
                        $software_version = "X";
                        $software_publisher = "Adobe";
                        break;

                    case '3':
                        $software_name = "Google Chrome";
                        $software_version = "22";
                        $software_publisher = "Google";
                        break;

                    case '4':
                        $software_name = "Mozilla Firefox";
                        $software_version = "23";
                        $software_publisher = "Mozilla Corporation";
                        break;

                    case '5':
                        $software_name = "Sublime Text 2";
                        $software_version = "2";
                        $software_publisher = "Sublime HQ";
                        break;

                    case '6':
                        $software_name = "Steam";
                        $software_version = "";
                        $software_publisher = "Valve";
                        break;

                    case '7':
                        $software_name = "Inkscape";
                        $software_version = "0.48";
                        $software_publisher = "www.inkscape.org";
                        break;

                    case '8':
                        $software_name = "Thunderbird";
                        $software_version = "17.0.8";
                        $software_publisher = "Mozilla Corporation";
                        break;

                    case '9':
                        $software_name = "VLC";
                        $software_version = "2.0.8";
                        $software_publisher = "VLC";
                        break;

                    case '10':
                        $software_name = "Calibre";
                        $software_version = "0.9.18";
                        $software_publisher = "David Goyle";
                        break;

                    case '11':
                        $software_name = "Microsoft Office Professional 2010";
                        $software_version = "2010";
                        $software_publisher = "Microsoft Corporation";
                        break;

                    case '12':
                        $software_name = "WinZip";
                        $software_version = "";
                        $software_publisher = "WinZip Corporation";
                        break;

                    case '13':
                        $software_name = "Visio Professional 2010";
                        $software_version = "2010";
                        $software_publisher = "Microsoft Corporation";
                        break;

                    case '14':
                        $software_name = "Skype";
                        $software_version = "6.7";
                        $software_publisher = "Microsoft Corporation";
                        break;

                    case '15':
                        $software_name = "Evernote";
                        $software_version = "";
                        $software_publisher = "Evernote Corporation";
                        break;

                    case '16':
                        $software_name = "VMware Fusion";
                        $software_version = "5.0.3";
                        $software_publisher = "VMware";
                        break;

                    case '17':
                        $software_name = "Balsamiq Mockups For Desktop";
                        $software_version = "2.2.2";
                        $software_publisher = "Balsamiq, SRL";
                        break;

                    case '18':
                        $software_name = "Aptana Studio 3";
                        $software_version = "3.0.0";
                        $software_publisher = "Appcelerator, Inc.";
                        break;

                    default:
                        # code...
                        break;
                }
                $sql = "INSERT INTO sys_sw_software (software_id, system_id, software_name, software_version, software_publisher, timestamp, first_timestamp) VALUES (NULL, ?, ?, ?, ?, ?, ?)";
                $data = array("$system_id", "$software_name", "$software_version", "$software_publisher", "$timestamp", "$first_timestamp");
                $query = $this->db->query($sql, $data);
            }
        }
        # update all groups
        $this->m_oa_group->update_groups();
        redirect('/');
    }
}
