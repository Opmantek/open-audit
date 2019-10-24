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
* @category  Controller
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   3.2.2
* @link      http://www.open-audit.org
*/

/**
* Base Object Util
*
* @access   public
* @category Object
* @package  Open-AudIT
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class Util extends CI_Controller
{
    /**
    * Constructor
    *
    * @access    public
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('log');
        // log the attempt
        $log = new stdClass();
        $log->status = 'start';
        $log->function = strtolower(__METHOD__);
        stdlog($log);
    }

    /**
    * Index that is unused
    *
    * @access public
    * @return NULL
    */
    public function index()
    {
        return;
    }

    /**
    * Process the supplied data and return a padded version string
    *
    * @access public
    * @return JSON
    */
    public function version_padded()
    {
        $json = new stdClass();
        $json->version = $this->uri->segment(3, '');
        if (isset($_POST['version'])) {
            $json->version = $_POST['version'];
        }
        $this->load->helper('software_version');
        $json->version_padded = version_padded($json->version);
        header('Content-Type: application/json');
        echo json_encode($json);
    }

    public function timestamp()
    {
        $json = new stdClass();
        $this->load->helper('url');
        $this->load->helper('input');
        $unix_timestamp = $this->uri->segment(3, 0);
        $json->datetime = from_unix_timestamp($unix_timestamp);
        header('Content-Type: application/json');
        echo json_encode($json);
    }

    public function audit_my_pc()
    {
        $this->load->model('m_configuration');
        $this->m_configuration->load();

        $this->load->helper('url');
        $client = $this->uri->segment(3, 0);
        $filename = 'audit_windows.vbs';

        if ($client == 'aix') {
            $filename = 'audit_aix.sh';

        } elseif ($client == 'esxi') {
            $filename = 'audit_esxi.sh';

        } elseif ($client == 'hpux') {
            $filename = 'audit_hpux.sh';

        } elseif ($client == 'linux') {
            $filename = 'audit_linux.sh';

        } elseif ($client == 'osx') {
            $filename = 'audit_osx.sh';

        } elseif ($client == 'solaris') {
            $filename = 'audit_solaris.sh';

        } elseif ($client == 'windows') {
            $filename = 'audit_windows.vbs';
        }

        $sql = "SELECT `id` AS `id` FROM `scripts` WHERE `name` = '$filename' ORDER BY id LIMIT 1";
        $query = $this->db->query($sql);

        foreach($query->result_array() as $row) {
            $id = $row['id'];
        }

        if (!empty($id)) {
            $this->load->model('m_scripts');
            $file = $this->m_scripts->download($id);
        }

        if (!empty($file)) {
            // Set headers
            header('Cache-Control: public');
            header('Content-Description: File Transfer');
            header('Content-Disposition: attachment; filename='.$filename);
            header('Content-Type: text/plain');
            header('Content-Transfer-Encoding: binary');
            // echo our file contents
            echo $file;
        } else {
            # throw an error for invalid type or script entry not in DB
        }
    }

    public function dictionary()
    {
        $this->load->helper('url');
        $table = $this->uri->segment(3, 0);
        include 'include_dictionary.php';
        header('Content-Type: application/json');
        echo json_encode($dictionary);
    }

    public function summary_columns()
    {
        $data = array('bios.current','bios.description','bios.manufacturer','bios.version','disk.current','disk.description','disk.interface_type','disk.manufacturer','disk.model','disk.model_family','disk.partition_count','disk.status','disk.version','ip.cidr','ip.current','ip.netmask','ip.network','ip.version','log.current','log.file_name','log.name','memory.current','memory.detail','memory.form_factor','memory.size','memory.speed','memory.type','module.class_text','module.current','module.description','monitor.aspect_ratio','monitor.current','monitor.description','monitor.manufacturer','monitor.model','monitor.size','motherboard.current','motherboard.manufacturer','motherboard.memory_slot_count','motherboard.model','motherboard.processor_slot_count','network.connection_status','network.current','network.dhcp_enabled','network.dhcp_server','network.dns_domain','network.dns_server','network.manufacturer','network.model','network.type','optical.current','optical.model','optical.mount_point','pagefile.current','pagefile.max_size','pagefile.name','pagefile_initial_size','partition.bootable','partition.current','partition.description','partition.format','partition.mount_point','partition.mount_type','partition.name','partition.type','print_queue.color','print_queue.current','print_queue.duplex','print_queue.location','print_queue.manufacturer','print_queue.model','print_queue.port_name','print_queue.shared','print_queue.status','print_queue.type','processor.architecture','processor.core_count','processor.current','processor.description','processor.logical_count','processor.manufacturer','processor.physical_count','processor.socket','route.current','route.destination','route.mask','route.next_hop','route.type','server.current','server.description','server.edition','server.full_name','server.name','server.status','server.type','server.version','server.version_string','server_item.current','server_item.type','service.current','service.executable','service.name','service.start_mode','service.state','service.user','share.current','share.name','share.path','software.current','software.install_source','software.name','software_key.current','software_key.edition','software_key.name','software_key.rel','software_key.string','sound.current','sound.manufacturer','sound.model','system.class','system.contact_name','system.environment','system.form_factor','system.function','system.icon','system.invoice_id','system.lease_expiry_date','system.location_id','system.location_latitude','system.location_level','system.location_longitude','system.location_rack','system.location_rack_position','system.location_rack_size','system.location_room','system.location_suite','system.manufacturer','system.memory_count','system.model','system.oae_manage','system.org_id','system.os_bit','system.os_family','system.os_group','system.os_installation_date','system.os_name','system.os_version','system.owner','system.patch_panel','system.printer_color','system.printer_duplex','system.printer_port_name','system.printer_shared','system.printer_shared_name','system.processor_count','system.purchase_amount','system.purchase_cost_center','system.purchase_date','system.purchase_invoice','system.purchase_order_number','system.purchase_service_contract_number','system.purchase_vendor','system.service_network','system.service_number','system.service_plan','system.service_provider','system.service_type','system.snmp_oid','system.status','system.sysContact','system.sysDescr','system.sysLocation','system.sysObjectID','system.type','system.wall_port','system.warranty_duration','system.warranty_expires','system.warranty_type','user.current','user.domain','user.password_changeable','user.password_required','user.status','user.type','user_group.current','user_group.name','video.current','video.manufacturer','video.model','video.size','vm.current','vm.cpu_count','vm.memory_count','vm.status','windows.active_directory_ou','windows.boot_device','windows.build_number','windows.client_site_name','windows.country_code','windows.current','windows.domain_controller_address','windows.domain_controller_name','windows.domain_role','windows.domain_short','windows.id_number','windows.install_directory','windows.language','windows.organisation','windows.part_of_domain','windows.registered_user','windows.service_pack','windows.time_caption','windows.time_daylight','windows.version','windows.workgroup');
        $json = new stdClass();
        $json->data = $data;
        header('Content-Type: application/json');
        echo json_encode($json);
    }

    public function summary_tables()
    {
        $data = array('bios','disk','dns','ip','log','memory','module','monitor','motherboard','netstat','network','nmap','optical','pagefile','partition','print_queue','processor','route','san','scsi','server','server_item','service','share','software','software_key','sound','system','task','user','user_group','variable','video','vm','warranty','windows');
        $json = new stdClass();
        $json->data = $data;
        header('Content-Type: application/json');
        echo json_encode($json);
    }


    // public function check_db()
    // {
    //     $this->load->model('m_configuration');
    //     $this->m_configuration->load();
    //     $json = new stdClass();
    //     $json->file_version = $this->config->config['web_internal_version'];
    //     $json->db_version = $this->config->config['internal_version'];
    //     $json->db_upgrade = false;
    //     if ($this->config->config['internal_version'] < $this->config->config['web_internal_version']) {
    //         $json->db_upgrade = true;
    //     }
    //     header('Content-Type: application/json');
    //     echo json_encode($json);
    // }



    public function google()
    {
        $response = new stdClass();
        $credentials = @$this->input->post('credentials');
        if (empty($credentials)) {
            $response->errors = array();
            $error = new stdClass();
            $error->code = 400;
            $error->detail = "A request was sent to the Google API, but no credentials were in the POST.";
            $error->status = "HTTP/1.1 400 Bad Request";
            $error->title = "No credentials supplied to util/google.";
            $response->errors[] = $error;
            print_r(json_encode($response));
            return;
        }
        set_include_path('/usr/local/open-audit/code_igniter/application/third_party/google-api-php-client-2.2.3/vendor');
        require_once "autoload.php";
        $client = new Google_Client();
        $client->setAuthConfig($credentials);
        $scope = array("https://www.googleapis.com/auth/cloud-platform","https://www.googleapis.com/auth/cloud-platform.read-only","https://www.googleapis.com/auth/cloudplatformprojects","https://www.googleapis.com/auth/cloudplatformprojects.readonly");
        $client->addScope($scope);
        $httpClient = $client->authorize();
        $response = $httpClient->get('https://cloudresourcemanager.googleapis.com/v1/projects');

        $projects = array();
        if ($response->getBody()) {
            $temp = json_decode($response->getBody());
            $projects = $temp->projects;
        }

        foreach ($projects as &$project) {
            $project->instances = array();
            $project->networks = array();
            $project->projects = array();
            $project->zones = array();
        }

        if (!empty($projects)) {
            # Projects
            foreach ($projects as &$project) {
                $url = 'https://www.googleapis.com/compute/v1/projects/' . $project->projectId;
                $response = $httpClient->get($url);
                if ($response->getBody()) {
                    $temp = json_decode($response->getBody());
                    $item = new stdClass();
                    foreach ($temp as $key => $value) {
                        $item->{$key} = $value;
                    }
                    unset($item->commonInstanceMetadata);
                    unset($item->quotas);
                    $project->projects[] = $item;
                }
            }

            # Zones
            foreach ($projects as &$project) {
                unset($response);
                $url = 'https://www.googleapis.com/compute/v1/projects/' . $project->projectId . '/zones';
                $response = $httpClient->get($url);
                if ($response->getBody()) {
                    $temp = json_decode($response->getBody());
                    foreach ($temp->items as $zone) {
                        $item = new stdClass();
                        foreach ($zone as $key => $value) {
                            $item->{$key} = $value;
                        }
                        $temp = explode('/', $zone->region);
                        $item->region = end($temp);
                        $item->notes = implode(', ', $zone->availableCpuPlatforms);
                        $project->zones[] = $item;
                    }
                }
            }

            # Instances
            foreach ($projects as &$project) {
                foreach ($project->zones as $zone) {
                    unset($response);
                    $url = 'https://www.googleapis.com/compute/v1/projects/' . $project->projectId . '/zones/' . $zone->name . '/instances';
                    $response = $httpClient->get($url);
                    if ($response->getBody()) {
                        $instances = json_decode($response->getBody());
                        if (!empty($instances->items)) {
                            foreach ($instances->items as $each_instance) {
                                $item = new stdClass();
                                foreach ($each_instance as $key => $value) {
                                    $item->{$key} = $value;
                                }
                                $temp = explode('/', $each_instance->machineType);
                                $item->instance_type = end($temp);
                                $item->location_name = $zone->name;
                                if (!empty($item->networkInterfaces)) {
                                    foreach ($item->networkInterfaces as $interface) {
                                        if (!empty($interface->accessConfigs[0])) {
                                            $item->ip = $interface->accessConfigs[0]->natIP;
                                        } else {
                                            $item->ip = $interface->networkIP;
                                        }
                                    }
                                }
                                $project->instances[] = $item;
                            }
                        }
                    }
                }
            }

            # Only keep zones with instances
            foreach ($projects as &$project) {
                $zones = array();
                foreach ($project->instances as $instance) {
                    $zones[] = $instance->location_name;
                }
                foreach ($project->zones as $key => $zone) {
                    if (!in_array($zone->name, $zones)) {
                        unset($project->zones[$key]);
                    }
                }
                $project->zones = array_values($project->zones);
            }

            # Networks
            foreach ($projects as &$project) {
                foreach ($project->zones as $zone) {
                    unset($response);
                    $url = 'https://www.googleapis.com/compute/v1/projects/' . $project->projectId . '/regions/' . $zone->region . '/subnetworks';
                    $response = $httpClient->get($url);
                    if ($response->getBody()) {
                        $temp = json_decode($response->getBody());
                        if (!empty($temp->items)) {
                            foreach ($temp->items as $zone) {
                                $item = new stdClass();
                                foreach ($zone as $key => $value) {
                                    $item->{$key} = $value;
                                }
                                $project->networks[] = $item;
                                unset($item);
                            }
                        }
                    }
                }
            }
        }

        header('Content-Type: application/json');
        header("Cache-Control: no-cache, no-store, must-revalidate");
        header("Pragma: no-cache");
        header("Expires: 0");
        $response->data = array();
        $response->data[] = $projects;
        print_r(json_encode($response));
    }
}
// End of file util.php
// Location: ./controllers/util.php
