<?php

namespace App\Models;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\ControllerTestTrait;
use CodeIgniter\Test\DatabaseTestTrait;

#[\AllowDynamicProperties]

class ModelsTest extends CIUnitTestCase
{
    use DatabaseTestTrait;
    use ControllerTestTrait;

    public function testModels()
    {
        echo "\nExecuting Models tests.\n";

        helper('utility_helper');
        helper('network_helper');

        $this->config = new \Config\OpenAudit();

        $this->response = $this->setupResponse();
        $this->response->meta->collection = '';
        $this->response->meta->action = '';
        $this->response->meta->id = null;

        global $CI_INSTANCE;
        $CI_INSTANCE[0] = &$this;

        helper('response');
        helper('utility');
        $db = db_connect();

        $this->orgsModel = model('OrgsModel');
        $this->orgs = $this->orgsModel->listAll();
        $this->usersModel = model('UsersModel');
        $this->user = $this->usersModel->read(1)[0]->attributes;
        $this->user->org_list = '1,2,3,4,5';
        $this->user->orgs = [1,2,3,4,5];

        # Setup a session for user
        $session = \Config\Services::session();
        $temp = bin2hex(openssl_random_pseudo_bytes(30));
        $this->user->access_token = $temp;
        $access_token[] = $temp;
        $access_token = array_slice($access_token, -intval(config('Openaudit')->access_token_count));
        $userdata = array('user_id' => $this->user->id, 'access_token' => $access_token);
        $session->set($userdata);

        $this->response->meta->filter = response_get_query_filter('', 'filter');

        $valid_collections = array('applications','attributes','auth','baselines','baselines_policies','baselines_results','benchmarks','clouds','clusters','connections','credentials','dashboards','devices','discoveries','discovery_log','discovery_scan_options','fields','files','groups','integrations','licenses','locations','networks','orgs','queries','racks','rack_devices','rules','scripts','summaries','tasks','users','widgets');

        $valid_actions = array('collection', 'read');

        foreach ($valid_collections as $collection) {
            $model = $this->modelName($collection);

            unset($this->response->meta->filter);
            $this->response->meta->filter = array();

            $this->response->meta->collection = $collection;
            $this->response->meta->sort = $collection . '.id';

            $this->response->meta->properties = array($collection . '.id', $collection . '.name');

            if ($this->response->meta->collection === 'discovery_log') {
                $this->response->meta->properties = array('discovery_log.id', 'discovery_log.message');
            } else {
                $item = new \StdClass();
                $item->name = 'orgs.id';
                if ($this->response->meta->collection !== 'orgs') {
                    $item->name = $this->response->meta->collection . '.' . 'org_id';
                }
                $item->function = 'whereIn';
                $item->operator = 'in';
                $item->value = $this->user->orgs;
                $this->response->meta->filter[] = $item;
            }

            if ($collection !== 'discovery_log') {
                $sql = "SELECT count(*) AS `count` FROM $collection";
            } else {
                $sql = "SELECT count(*) AS `count` FROM `discovery_log` LEFT JOIN `discoveries` ON `discovery_log`.`discovery_id` = `discoveries`.`id` WHERE `message` NOT LIKE '%not responding, ignoring%' AND  `message` NOT LIKE '%responding, adding to device list%'";
            }

            log_message('debug', "SQL for $collection is: $sql");
            $count = intval($db->query($sql)->getResult()[0]->count);

            ${$model} = model($model) or die("Could not load model for " . $model);

            log_message('debug', "Testing Action collection on Model: $model");
            $this->response->meta->action = 'collection';
            $result = ${$model}->collection($this->response);
            $this->assertIsArray($result, 'The return from ' . $collection . ' (' . $this->response->meta->action . ') is not an array');
            if (!empty($GLOBALS['recordsFiltered'])) {
                $this->assertEquals($count, $GLOBALS['recordsFiltered'], "Count of $collection (" . $this->response->meta->action . ") direct is $count, count via model is " . $GLOBALS['recordsFiltered']);
                unset($GLOBALS['recordsFiltered']);
            } else {
                $this->assertCount($count, $result, "Count of $collection (" . $this->response->meta->action . ") direct is $count, count via model is " . count($result));
            }

            if (!empty($count)) {
                log_message('debug', "Testing Action read on Model: $model");
                $sql = "SELECT id FROM $collection ORDER BY id LIMIT 1";
                $id = intval($db->query($sql)->getResult()[0]->id);
                if (!empty($id)) {
                    $this->response->meta->id = $id;
                    $this->response->meta->action = 'read';
                    $result = ${$model}->read($this->response->meta->id);
                    $this->assertIsArray($result, 'The return from ' . $collection . ' (' . $this->response->meta->action . ') is not an array');
                    $this->assertCount(1, $result, "Count of $collection (" . $this->response->meta->action . ") direct is $count, count via model is " . count($result));
                }
                $this->response->meta->id = null;
            }
        }
    }

    private function modelName($collection)
    {
        $model = $collection;
        $model = str_replace('_', ' ', $model);
        $model = ucwords($model);
        $model = str_replace(' ', '', $model);
        $model .= 'Model';
        return $model;
    }

    private function setupResponse()
    {

        $response = new \stdClass();
        $response->meta = new \stdClass();
        $response->links = new \stdClass();
        $response->included = array();
        $response->logs = array();

        $response->meta->action = '';
        $response->meta->collection = '';
        $response->meta->request_method = '';
        $response->meta->format = 'json';
        $response->meta->collection = '';
        $response->meta->action = '';
        $response->meta->id = null;
        $response->meta->access_token = '';
        $response->meta->baseurl = base_url();
        $response->meta->current = '';
        $response->meta->filtered = '';
        $response->meta->groupby = '';
        $response->meta->header = 200;
        $response->meta->include = '';
        $response->meta->limit = null;
        $response->meta->microtime = config('OpenAudit')->microtime;
        $response->meta->offset = 0;
        $response->meta->properties = '';
        $response->meta->query_string = '';
        $response->meta->requestor = '';
        $response->meta->requestor = '';
        $response->meta->server_app_version = config('Openaudit')->display_version;
        $response->meta->server_platform = php_uname('s');
        $command = 'cat /etc/os-release 2>/dev/null | grep -i ^PRETTY_NAME | cut -d= -f2 | cut -d\" -f2';
        exec($command, $output);
        if (!empty($output[0])) {
            $response->meta->server_platform = $output[0];
        }

        $response->meta->sort = '';
        $response->meta->time_start = microtime(true);
        $response->meta->time_end = 0;
        $response->meta->time_elapsed = 0;
        $response->meta->total = 0;
        $response->meta->timestamp = config('OpenAudit')->timestamp;
        $response->meta->timezone = config('OpenAudit')->timezone;
        $response->meta->version = 1;
        $response->meta->filter = array();
        $response->meta->received_data = array();
        $response->meta->sql = array();
        $response->meta->user = 'admin';

        return $response;
    }
}
