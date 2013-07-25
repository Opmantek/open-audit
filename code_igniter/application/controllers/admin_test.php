<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Mark Unwin, 2011
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class Admin_test extends MY_Controller {

	function __construct() {
		parent::__construct();
		// must be an admin to access this page
		if ($this->session->userdata('user_admin') != 'y') {
			if (isset($_SERVER['HTTP_REFERER']) and $_SERVER['HTTP_REFERER'] > "") {
				redirect($_SERVER['HTTP_REFERER']);
			} else {
				redirect('login/index');
			}
		}
	}

	function index() {
		redirect('/');
	}

	function data() {

		# comment the below line out to enable this funtcion.
		redirect('/');
		
		# populate the Open-AudIT database with dummy locations, devices and set up a few groups

		$this->load->model("m_oa_location");
		$this->load->model("m_system");	
		$this->load->model("m_oa_group");
		$this->load->model("m_oa_group_column");
		$this->load->model("m_oa_org");

		$details->location_name = "Brisbane Office"; 
		$details->location_type = "Office"; 
		$details->location_room = ""; 
		$details->location_suite = ""; 
		$details->location_level = ""; 
		$details->location_address = "111 Eagle Street"; 
		$details->location_postcode = "4000"; 
		$details->location_city = "Brisbane"; 
		$details->location_state = "Queensland"; 
		$details->location_country = "Australia"; 
		$details->location_geo = ""; 
		$details->location_latitude = "-27.46759"; 
		$details->location_longitude = "153.030355"; 
		$details->location_id = $this->m_oa_location->add_location($details);
		$group = new stdClass();
		$group->group_name = "Items in " . $details->location_name;
		$group->group_padded_name = '';
		$group->group_description = "Items in " . $details->location_name;
		$group->group_icon = 'location';
		$group->group_category = 'location';
		$group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_location_id = '" . $details->location_id . "' AND system.man_status = 'production'";
		$group->group_parent = '';
		$group->group_display_sql = '';
		$group_id = $this->m_oa_group->insert_group($group);
		$this->m_oa_location->set_group_id($details->location_id, $group_id);
		$this->m_oa_group->update_specific_group($group_id);

		$details->location_name = "Sydney Office"; 
		$details->location_type = "Office"; 
		$details->location_room = ""; 
		$details->location_suite = ""; 
		$details->location_level = ""; 
		$details->location_address = "10 Shelley Street"; 
		$details->location_postcode = "2000"; 
		$details->location_city = "Sydney"; 
		$details->location_state = "New South Wales"; 
		$details->location_country = "Australia"; 
		$details->location_geo = ""; 
		$details->location_latitude = "-33.8659025"; 
		$details->location_longitude = "151.2024921"; 
		$details->location_id = $this->m_oa_location->add_location($details);
		$group = new stdClass();
		$group->group_name = "Items in " . $details->location_name;
		$group->group_padded_name = '';
		$group->group_description = "Items in " . $details->location_name;
		$group->group_icon = 'location';
		$group->group_category = 'location';
		$group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_location_id = '" . $details->location_id . "' AND system.man_status = 'production'";
		$group->group_parent = '';
		$group->group_display_sql = '';
		$group_id = $this->m_oa_group->insert_group($group);
		$this->m_oa_location->set_group_id($details->location_id, $group_id);
		$this->m_oa_group->update_specific_group($group_id);

		$details->location_name = "Canberra Office"; 
		$details->location_type = "Office"; 
		$details->location_room = ""; 
		$details->location_suite = ""; 
		$details->location_level = ""; 
		$details->location_address = "1 Newlands Street"; 
		$details->location_postcode = "2600"; 
		$details->location_city = "Canberra"; 
		$details->location_state = "ACT"; 
		$details->location_country = "Australia"; 
		$details->location_geo = ""; 
		$details->location_latitude = "-35.299066"; 
		$details->location_longitude = "149.1280834"; 
		$details->location_id = $this->m_oa_location->add_location($details);
		$group = new stdClass();
		$group->group_name = "Items in " . $details->location_name;
		$group->group_padded_name = '';
		$group->group_description = "Items in " . $details->location_name;
		$group->group_icon = 'location';
		$group->group_category = 'location';
		$group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_location_id = '" . $details->location_id . "' AND system.man_status = 'production'";
		$group->group_parent = '';
		$group->group_display_sql = '';
		$group_id = $this->m_oa_group->insert_group($group);
		$this->m_oa_location->set_group_id($details->location_id, $group_id);
		$this->m_oa_group->update_specific_group($group_id);

		$details->location_name = "Melbourne Office"; 
		$details->location_type = "Office"; 
		$details->location_room = ""; 
		$details->location_suite = ""; 
		$details->location_level = ""; 
		$details->location_address = "1 Freshwater Place"; 
		$details->location_postcode = "3006"; 
		$details->location_city = "Southbank"; 
		$details->location_state = "Victoria"; 
		$details->location_country = "Australia"; 
		$details->location_geo = ""; 
		$details->location_latitude = "-37.821938"; 
		$details->location_longitude = "144.962095"; 
		$details->location_id = $this->m_oa_location->add_location($details);
		$group = new stdClass();
		$group->group_name = "Items in " . $details->location_name;
		$group->group_padded_name = '';
		$group->group_description = "Items in " . $details->location_name;
		$group->group_icon = 'location';
		$group->group_category = 'location';
		$group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_location_id = '" . $details->location_id . "' AND system.man_status = 'production'";
		$group->group_parent = '';
		$group->group_display_sql = '';
		$group_id = $this->m_oa_group->insert_group($group);
		$this->m_oa_location->set_group_id($details->location_id, $group_id);
		$this->m_oa_group->update_specific_group($group_id);

		$details->location_name = "Perth Office"; 
		$details->location_type = "Office"; 
		$details->location_room = ""; 
		$details->location_suite = ""; 
		$details->location_level = ""; 
		$details->location_address = "1 Victoria Avenua"; 
		$details->location_postcode = "6000"; 
		$details->location_city = "Perth"; 
		$details->location_state = "Western Australia"; 
		$details->location_country = "Australia"; 
		$details->location_geo = ""; 
		$details->location_latitude = "-31.958617"; 
		$details->location_longitude = "115.864341"; 
		$details->location_id = $this->m_oa_location->add_location($details);
		$group = new stdClass();
		$group->group_name = "Items in " . $details->location_name;
		$group->group_padded_name = '';
		$group->group_description = "Items in " . $details->location_name;
		$group->group_icon = 'location';
		$group->group_category = 'location';
		$group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_location_id = '" . $details->location_id . "' AND system.man_status = 'production'";
		$group->group_parent = '';
		$group->group_display_sql = '';
		$group_id = $this->m_oa_group->insert_group($group);
		$this->m_oa_location->set_group_id($details->location_id, $group_id);
		$this->m_oa_group->update_specific_group($group_id);

		$details->location_name = "New Zealand Office"; 
		$details->location_type = "Office"; 
		$details->location_room = ""; 
		$details->location_suite = ""; 
		$details->location_level = ""; 
		$details->location_address = "1 Willis Street"; 
		$details->location_postcode = "6011"; 
		$details->location_city = "Wellington"; 
		$details->location_state = ""; 
		$details->location_country = "New Zealand"; 
		$details->location_geo = ""; 
		$details->location_latitude = "-41.286772"; 
		$details->location_longitude = "174.776258"; 
		$details->location_id = $this->m_oa_location->add_location($details);
		$group = new stdClass();
		$group->group_name = "Items in " . $details->location_name;
		$group->group_padded_name = '';
		$group->group_description = "Items in " . $details->location_name;
		$group->group_icon = 'location';
		$group->group_category = 'location';
		$group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_location_id = '" . $details->location_id . "' AND system.man_status = 'production'";
		$group->group_parent = '';
		$group->group_display_sql = '';
		$group_id = $this->m_oa_group->insert_group($group);
		$this->m_oa_location->set_group_id($details->location_id, $group_id);
		$this->m_oa_group->update_specific_group($group_id);

		$details->location_name = "Brisbane Data Center"; 
		$details->location_type = "Data Center"; 
		$details->location_room = ""; 
		$details->location_suite = ""; 
		$details->location_level = ""; 
		$details->location_address = "20 Warf Street"; 
		$details->location_postcode = "4000"; 
		$details->location_city = "Brisbane"; 
		$details->location_state = "Queensland"; 
		$details->location_country = "Australia"; 
		$details->location_geo = ""; 
		$details->location_latitude = "-27.4654981"; 
		$details->location_longitude = "153.0297626"; 
		$details->location_id = $this->m_oa_location->add_location($details);
		$group = new stdClass();
		$group->group_name = "Items in " . $details->location_name;
		$group->group_padded_name = '';
		$group->group_description = "Items in " . $details->location_name;
		$group->group_icon = 'location';
		$group->group_category = 'location';
		$group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_location_id = '" . $details->location_id . "' AND system.man_status = 'production'";
		$group->group_parent = '';
		$group->group_display_sql = '';
		$group_id = $this->m_oa_group->insert_group($group);
		$this->m_oa_location->set_group_id($details->location_id, $group_id);
		$this->m_oa_group->update_specific_group($group_id);










		$details->org_name = "Open-AudIT Organisation"; 
		$details->org_parent_id = "0";
		$details->contact_id = "";
		$details->org_picture = "";
		$details->org_id = $this->m_oa_org->add_org($details);
		$group = new stdClass();
		$group->group_name = $details->org_name . " owned items";
		$group->group_padded_name = '';
		$group->group_description = $details->org_name . " owned items";
		$group->group_icon = 'contact';
		$group->group_category = 'owner';
		$group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_org_id = '" . $details->org_id . "' AND system.man_status = 'production'";
		$group->group_parent = '0';
		$group->group_display_sql = '';
		$group_id = $this->m_oa_group->insert_group($group);
		$this->m_oa_org->set_group_id($details->org_id, $group_id);
		$this->m_oa_group->update_specific_group($group_id);

		$details->org_name = "IT Derpartment"; 
		$details->org_parent_id = "1";
		$details->contact_id = "";
		$details->org_picture = "";
		$details->org_id = $this->m_oa_org->add_org($details);
		$group = new stdClass();
		$group->group_name = $details->org_name . " owned items";
		$group->group_padded_name = '';
		$group->group_description = $details->org_name . " owned items";
		$group->group_icon = 'contact';
		$group->group_category = 'owner';
		$group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_org_id = '" . $details->org_id . "' AND system.man_status = 'production'";
		$group->group_parent = '1';
		$group->group_display_sql = '';
		$group_id = $this->m_oa_group->insert_group($group);
		$this->m_oa_org->set_group_id($details->org_id, $group_id);
		$this->m_oa_group->update_specific_group($group_id);

		$details->org_name = "Finance Derpartment"; 
		$details->org_parent_id = "1";
		$details->contact_id = "";
		$details->org_picture = "";
		$details->org_id = $this->m_oa_org->add_org($details);
		$group = new stdClass();
		$group->group_name = $details->org_name . " owned items";
		$group->group_padded_name = '';
		$group->group_description = $details->org_name . " owned items";
		$group->group_icon = 'contact';
		$group->group_category = 'owner';
		$group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_org_id = '" . $details->org_id . "' AND system.man_status = 'production'";
		$group->group_parent = '1';
		$group->group_display_sql = '';
		$group_id = $this->m_oa_group->insert_group($group);
		$this->m_oa_org->set_group_id($details->org_id, $group_id);
		$this->m_oa_group->update_specific_group($group_id);

		$details->org_name = "Marketing Derpartment"; 
		$details->org_parent_id = "1";
		$details->contact_id = "";
		$details->org_picture = "";
		$details->org_id = $this->m_oa_org->add_org($details);
		$group = new stdClass();
		$group->group_name = $details->org_name . " owned items";
		$group->group_padded_name = '';
		$group->group_description = $details->org_name . " owned items";
		$group->group_icon = 'contact';
		$group->group_category = 'owner';
		$group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_org_id = '" . $details->org_id . "' AND system.man_status = 'production'";
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
		$group->group_name = $details->org_name . " owned items";
		$group->group_padded_name = '';
		$group->group_description = $details->org_name . " owned items";
		$group->group_icon = 'contact';
		$group->group_category = 'owner';
		$group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_org_id = '" . $details->org_id . "' AND system.man_status = 'production'";
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
		$group->group_name = $details->org_name . " owned items";
		$group->group_padded_name = '';
		$group->group_description = $details->org_name . " owned items";
		$group->group_icon = 'contact';
		$group->group_category = 'owner';
		$group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_org_id = '" . $details->org_id . "' AND system.man_status = 'production'";
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
		$group->group_name = $details->org_name . " owned items";
		$group->group_padded_name = '';
		$group->group_description = $details->org_name . " owned items";
		$group->group_icon = 'contact';
		$group->group_category = 'owner';
		$group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_org_id = '" . $details->org_id . "' AND system.man_status = 'production'";
		$group->group_parent = '1';
		$group->group_display_sql = '';
		$group_id = $this->m_oa_group->insert_group($group);
		$this->m_oa_org->set_group_id($details->org_id, $group_id);
		$this->m_oa_group->update_specific_group($group_id);


		$first_name = array("Fred", "Wilma", "Pebbles", "Barney", "Betty", "Benjamin", "Charles", "Frank", "Max", "Walter", "Sherman", "Margaret", "Francis", "Homer", "Bart", "Maggie", "Lisa", "Marge", "Greg", "Peter", "Bobby", "Marcia", "Jan", "Cindy", "Mark", "Ali", "Paige", "Toby");
		$last_name = array("Flintstone", "Rubble", "Pierce", "Winchester", "Burns", "Klinger", "OReilly", "Potter", "Houlihan", "Mulcahey", "Simpson", "Brady", "Unwin");



		for ($i=1; $i<1001; $i++) {

			$details = new stdclass();

			$random = rand(1,100);

			if ($i > 0 and $i <= 250) {$details->man_ip_address = '192.168.0.' . $i;}
			if ($i > 250 and $i <= 500) {$details->man_ip_address = '192.168.1.' . $i;}
			if ($i > 500 and $i <= 750) {$details->man_ip_address = '192.168.2.' . $i;}
			if ($i > 750 and $i <= 1000) {$details->man_ip_address = '192.168.3.' . $i;}

			$details->serial = substr("a1b2c3d4e50000" . $i, -14);
			$details->man_serial = $details->serial;
			$details->uuid = "";
			$details->status = 'production';
			$day = rand(1,30);
			if ($day < 10) {
				$details->last_seen = "2013-06-0" . $day . " 10:00:00";
			} else {
				$details->last_seen = "2013-06-" . $day . " 10:00:00";
			}
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
				$details->hostname = "old_workstation_" . $i;
				$details->uuid = $details->man_serial;
				$details->man_location_id = rand(2,6);
				$details->pc_date_os_installation = "2006-11-30";
				$details->man_owner = $first_name[rand(0,count($first_name)-1)] . " " . $last_name[rand(0,count($last_name)-1)];
				$j = rand(1,2);
				if ( $j == 1 ) {
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
				$details->hostname = "workstation_" . $i;
				$details->uuid = $details->man_serial;
				$details->man_location_id = rand(2,6);
				$details->pc_date_os_installation = "2011-11-30";
				$details->man_owner = $first_name[rand(0,count($first_name)-1)] . " " . $last_name[rand(0,count($last_name)-1)];
				$j = rand(1,2);
				if ( $j == 1 ) {
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
				$details->hostname = "new_workstation_" . $i;
				$details->uuid = $details->man_serial;
				$details->man_location_id = rand(2,6);
				$details->pc_date_os_installation = "2002-11-30";
				$details->man_owner = $first_name[rand(0,count($first_name)-1)] . " " . $last_name[rand(0,count($last_name)-1)];
				$j = rand(1,2);
				if ( $j == 1 ) {
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
				$details->hostname = "lin_" . $i;
				$details->uuid = $details->man_serial;
				$details->man_location_id = rand(1,6);
				$details->pc_date_os_installation = "2012-05-10";
				$details->man_org_id = rand(2,6);
				$details->man_owner = $first_name[rand(0,count($first_name)-1)] . " " . $last_name[rand(0,count($last_name)-1)];
				$j = rand(1,2);
				if ( $j == 1 ) {
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
				$details->hostname = "old_server_" . $i;
				$details->uuid = $details->man_serial;
				$details->manufacturer = "Dell"; 
				$details->model = "Poweredge 2650"; 
				$details->form_factor = 'rack'; 
				$details->man_location_id = '7'; 
				$details->pc_date_os_installation = "2005-04-30";
				$details->man_class = "server";
				$details->man_org_id = '7';
				$j = rand(1,6);
				if ($j == 1) {
					$details->man_function = "FILE";
				} else if ($j == 2) {
					$details->man_function = "SQL";
				} else if ($j == 3) {
					$details->man_function = "DC";
				} else if ($j == 4) {
					$details->man_function = "MAIL";
				} else if ($j == 5) {
					$details->man_function = "APP";
				} else if ($j == 6) {
					$details->man_function = "WEB";
				}
			}
			
			if ($random > 45 and $random <= 55) {
				$details->os_group = 'Windows';
				$details->os_family = "Windows 2008";
				$details->os_name = "Microsoft Windows Server 2008 Standard";
				$details->type = "computer";
				$details->icon = "windows_2008";
				$details->hostname = "server_" . $i;
				$details->uuid = $details->man_serial;
				$details->manufacturer = "Hewlett Packard"; 
				$details->model = "Proliant ML530 G2"; 
				$details->form_factor = 'rack'; 
				$details->man_location_id = '7'; 
				$details->pc_date_os_installation = "2009-10-05";
				$details->man_class = "server"; 
				$details->man_org_id = '7';
				$j = rand(1,6);
				if ($j == 1) {
					$details->man_function = "FILE";
				} else if ($j == 2) {
					$details->man_function = "SQL";
				} else if ($j == 3) {
					$details->man_function = "DC";
				} else if ($j == 4) {
					$details->man_function = "MAIL";
				} else if ($j == 5) {
					$details->man_function = "APP";
				} else if ($j == 6) {
					$details->man_function = "WEB";
				}

			}
			
			if ($random > 55 and $random <= 60) {
				$details->os_group = 'Linux';
				$details->os_family = "Debian";
				$details->os_name = "Debian 6";
				$details->type = "computer";
				$details->icon = "debian";
				$details->hostname = "lin_" . $i;
				$details->uuid = $details->man_serial;
				$details->manufacturer = "System 76"; 
				$details->model = "Jackal Pro 2u"; 
				$details->form_factor = 'rack'; 
				$details->man_location_id = '7'; 
				$details->pc_date_os_installation = "2013-01-30";
				$details->man_class = "server";
				$details->man_org_id = '7';
				$j = rand(1,3);
				if ($j == 1) {
					$details->man_function = "SQL";
				} else if ($j == 2) {
					$details->man_function = "MAIL";
				} else if ($j == 3) {
					$details->man_function = "WEB";
				}
			}
			
			if ($random > 60 and $random <= 70) {
				$details->os_group = 'Linux';
				$details->os_family = "RedHat";
				$details->os_name = "RedHat 6.3";
				$details->type = "computer";
				$details->icon = "redhat";
				$details->hostname = "lin_" . $i;
				$details->uuid = $details->man_serial;
				$details->pc_date_os_installation = "2007-05-08";
				$j = rand(1,3);
				if ($j == 1) {
					$details->manufacturer = "System 76"; 
					$details->model = "Gazelle Professional"; 
					$details->man_class = "laptop"; 
					$details->form_factor = 'laptop'; 
					$details->man_location_id = rand(1,6);
					$details->man_org_id = "2";
					$details->man_owner = $first_name[rand(0,count($first_name)-1)] . " " . $last_name[rand(0,count($last_name)-1)];
				} else if ($j == 2) {
					$details->manufacturer = "System 76"; 
					$details->model = "Wild Dog Performance"; 
					$details->man_class = "desktop"; 
					$details->form_factor = 'tower'; 
					$details->man_location_id = rand(1,6);
					$details->man_org_id = "2";
					$details->man_owner = $first_name[rand(0,count($first_name)-1)] . " " . $last_name[rand(0,count($last_name)-1)];
				} else {
					$details->manufacturer = "Hewlett Packard"; 
					$details->model = "Proliant ML530 G2"; 
					$details->form_factor = 'rack'; 
					$details->man_class = "server"; 
					$details->man_location_id = '7'; 
					$details->man_org_id = '7';
					$j = rand(1,3);
					if ($j == 1) {
						$details->man_function = "JBOSS";
					} else if ($j == 2) {
						$details->man_function = "SQL";
					} else if ($j == 3) {
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
				$details->hostname = "cisco_switch_" . $i;
				$details->manufacturer = "Cisco";
				$details->model = "Cisco Catalyst 2960 24tt";
				$details->form_factor = '';
				$details->man_location_id = rand(1,7);
				$details->man_org_id = '7';
			}

			if ($random > 78 and $random <= 81) {
				$details->os_group = '';
				$details->os_family = "";
				$details->os_name = "";
				$details->type = "switch";
				$details->icon = "switch";
				$details->hostname = "netgear_switch_" . $i;
				$details->manufacturer = "Netgear";
				$details->model = "CG814WG";
				$details->form_factor = '';
				$details->man_location_id = rand(1,7);
				$details->man_org_id = '7';
			}
		
			if ($random > 81 and $random <= 85) {
				$details->os_group = 'Cisco';
				$details->os_family = "Cisco IOS";
				$details->os_name = "IOS 12.2";
				$details->type = "router";
				$details->icon = "router";
				$details->hostname = "cisco_router_" . $i;
				$details->manufacturer = "Cisco";
				$details->model = "Cisco 887 g";
				$details->form_factor = '';
				$details->man_location_id = rand(1,7);
				$details->man_org_id = '7';
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
				$details->man_location_id = rand(1,6);
				$details->man_owner = $first_name[rand(0,count($first_name)-1)] . " " . $last_name[rand(0,count($last_name)-1)];
				$details->man_service_number = "01 2345 0" . $i;
				$details->man_service_provider = "Telstra";
				$details->man_ip_address = "";
				$details->man_org_id = rand(2,6);
			}
		
			if ($random > 87 and $random <= 90) {
				$details->os_group = '';
				$details->os_family = "Apple";
				$details->os_name = "IOS 5";
				$details->type = "smart phone";
				$details->icon = "apple";
				$details->hostname = "iphone_" . $i;
				$details->manufacturer = "Apple";
				$details->model = "iPhone 4";
				$details->form_factor = '';
				$details->man_location_id = rand(1,6);
				$details->man_owner = $first_name[rand(0,count($first_name)-1)] . " " . $last_name[rand(0,count($last_name)-1)];
				$details->man_service_number = "01 2345 0" . $i;
				$details->man_service_provider = "Telstra";
				$details->man_ip_address = "";
				$details->man_org_id = rand(2,6);
			}
			
			if ($random > 90 and $random <= 95) {
				$details->os_group = '';
				$details->os_family = "Android";
				$details->os_name = "Jelly Bean";
				$details->type = "smart phone";
				$details->icon = "android";
				$details->hostname = "galaxy_nexus_" . $i;
				$details->manufacturer = "Samsung";
				$details->model = "Galaxy Nexus";
				$details->form_factor = '';
				$details->man_location_id = rand(1,6);
				$details->man_owner = $first_name[rand(0,count($first_name)-1)] . " " . $last_name[rand(0,count($last_name)-1)];
				$details->man_service_number = "01 2345 0" . $i;
				$details->man_service_provider = "Telstra";
				$details->man_ip_address = "";
				$details->man_org_id = rand(2,6);
			}
			
			if ($random > 95 and $random <= 100) {
				$details->os_group = '';
				$details->os_family = "";
				$details->os_name = "";
				$details->type = "printer";
				$details->icon = "printer";
				$details->form_factor = '';
				$details->man_location_id = rand(1,6);
				$details->man_org_id = "7";

				$j = rand(1,3);
				if ($j == 1) {
					$details->manufacturer = "Hewlett Packard";
					$details->model = "HP Color Laserjet 4700";
					$details->hostname = "hp_laserjet_" . $i;
				} else if ($j == 2) {
					$details->manufacturer = "Konica Minolta"; 
					$details->model = "Konica Minolta C352 C300"; 
					$details->hostname = "konika_" . $i;
				} else if ($j == 3) {
					$details->manufacturer = "Brother"; 
					$details->model = "Brother MFC-465CN Printer"; 
					$details->man_ip_address = "";
					$details->hostname = "";
					$details->man_org_id = rand(2,6);
					$details->man_owner = $first_name[rand(0,count($first_name)-1)] . " " . $last_name[rand(0,count($last_name)-1)];
				} 
			}

			$details->man_os_group = $details->os_group;
			$details->man_os_family = $details->os_family;
			$details->man_os_name = $details->os_name;
			$details->man_type = $details->type;
			$details->fqdn = $details->hostname . ".open-audit.local";
			$details->description = ucfirst($details->type) . " " . $details->os_group . " " . $i;
			$details->man_description = $details->description;
			$details->man_manufacturer = $details->manufacturer;
			$details->man_model = $details->model;
			$details->man_picture = strtolower($details->model);
			$details->man_picture = str_replace(" ", "_", $details->man_picture);
			$details->system_key = $this->m_system->create_system_key($details);
			$j = $this->m_system->insert_system($details);
		}

		for ($i=1; $i<101; $i++) {
				$day = rand(1,30);
				if ($day < 10) {
					$details->last_seen = "2013-06-0" . $day . " 10:00:00";
				} else {
					$details->last_seen = "2013-06-" . $day . " 10:00:00";
				}
				$details->last_seen_by = "manual";
				$details->timestamp = $details->last_seen;
				$details->os_group = '';
				$details->os_family = "";
				$details->os_name = "";
				$details->type = "token";
				$details->man_type = "token";
				$details->icon = "access_token";
				$details->hostname = "";
				$details->uuid = $details->man_serial;
				$details->man_location_id = rand(1,6);
				$details->manufacturer = "RSA"; 
				$details->man_manufacturer = $details->manufacturer;
				$details->model = "SecurID"; 
				$details->man_model = $details->model;
				$details->serial = substr("z6y5x4w3e5000" . $i, -14);
				$details->man_serial = $details->serial;
				$details->man_picture = strtolower($details->model);
				$details->description = "Access Token for User " . $i;
				$details->man_description = $details->description;
				$details->man_class = ""; 
				$details->form_factor = ""; 
				$details->man_owner = $first_name[rand(0,count($first_name)-1)] . " " . $last_name[rand(0,count($last_name)-1)];
				$details->man_org_id = rand(2,5);
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

	}
}
