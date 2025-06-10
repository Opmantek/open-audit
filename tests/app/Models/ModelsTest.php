<?php

namespace App\Models;

use CodeIgniter\Test\CIUnitTestCase;

#[\AllowDynamicProperties]

/*
 * @covers App\Models\devicesModel
*/
class ModelsTest extends CIUnitTestCase
{

    /*
     * @covers App\Models\devicesModel
    */
    public function testModels()
    {

        // $meta = (object)[
        //     'properties' => ['name', 'description', 'hostname', 'ip', 'os_name'],
        //     'filter' => [
        //         (object)['name' => 'name', 'operator' => 'like', 'function' => 'where', 'value' => '%debian%'],
        //         (object)['name' => 'ip', 'operator' => 'like', 'function' => 'orWhere', 'value' => '192.168.001%']
        //     ],
        //     'sort' => 'name ASC',
        //     'limit' => 10,
        //     'offset' => 0,
        //     'collection' => 'devices'
        // ];
        // $resp = (object)['meta' => $meta];

        log_message('debug', "Executing Models tests.");

        helper('utility_helper');
        helper('network_helper');

        $this->config = new \Config\OpenAudit();

        $this->response = $this->setupResponse();

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

        $valid_collections = array('agents','applications','attributes','auth','baselines','baselines_policies','baselines_results','benchmarks','clouds','clusters','connections','credentials','dashboards','devices','discoveries','discovery_scan_options','fields','files','groups','integrations','licenses','locations','networks','orgs','queries','racks','rack_devices','rules','scripts','summaries','tasks','users','widgets');

        $valid_actions = array('collection', 'read');

        foreach ($valid_collections as $collection) {
            $model = $this->modelName($collection);

            unset($this->response->meta->filter);
            $this->response->meta->filter = array();

            $this->response->meta->collection = $collection;
            $this->response->meta->sort = $collection . '.id';

            $this->response->meta->properties = array($collection . '.id', $collection . '.name');


            $item = new \StdClass();
            $item->name = 'orgs.id';
            if ($this->response->meta->collection !== 'orgs') {
                $item->name = $this->response->meta->collection . '.' . 'org_id';
            }
            $item->function = 'whereIn';
            $item->operator = 'in';
            $item->value = $this->user->orgs;
            $this->response->meta->filter[] = $item;

            $sql = "SELECT count(id) AS `count` FROM $collection";
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
            unset($result);

            if (!empty($count)) {
                log_message('debug', "Testing Action read on Model: $model");
                $sql = "SELECT id, name FROM $collection ORDER BY id LIMIT 1";
                $id = intval($db->query($sql)->getResult()[0]->id);
                $name = $db->query($sql)->getResult()[0]->name;

                // Our direct DB result.
                // ID and Name are common across models - use only these.
                $directResult = [];
                $item = new \stdClass();
                $item->id = intval($id);
                $item->type = $collection;
                $item->attributes = new \stdClass();
                $item->attributes->name = $name;
                $directResult[] = $item;

                if (!empty($id)) {
                    $this->response->meta->id = $id;
                    $this->response->meta->action = 'read';
                    $result = ${$model}->read($this->response->meta->id);
                    $this->assertIsArray($result, 'The return from ' . $collection . ' (' . $this->response->meta->action . ') is not an array');
                    $this->assertCount(1, $result, "Count of $collection (" . $this->response->meta->action . ") for a given ID should be 1, count via model::read is " . count($result));

                    // To compare the output as model::read returns all columns - we only want id and name
                    $modelResult = [];
                    $item = new \stdClass();
                    $item->id = intval($result[0]->id);
                    $item->type = $collection;
                    $item->attributes = new \stdClass();
                    $item->attributes->name = $result[0]->attributes->name;
                    $modelResult[] = $item;
                    $this->assertEquals($directResult, $modelResult);

                    unset($result);
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
