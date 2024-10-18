<?php

namespace App\Models;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\ControllerTestTrait;
use CodeIgniter\Test\DatabaseTestTrait;

class ResponseHelperTest extends CIUnitTestCase
{
    use DatabaseTestTrait;
    use ControllerTestTrait;

    public function testResponseHelper()
    {
        $collection = 'attributes';
        $action = 'read';
        $id = 23;

        $response = $this->setupResponse();
        $response->meta->collection = $collection;
        $response->meta->action = $action;
        $response->meta->id = $id;

        helper('response');
        helper('utility');
        $db = db_connect();

        $sql = "DELETE FROM orgs WHERE id > 1";
        $db->query($sql);
        $sql = "INSERT INTO orgs VALUES (2, 'My Second Org', 1, '', 'organisation', 'open-audit_orgs_my_second_org', 'system', NOW())";
        $db->query($sql);
        $sql = "INSERT INTO orgs VALUES (3, 'My Third Org', 2, '', 'organisation', 'open-audit_orgs_my_third_org', 'system', NOW())";
        $db->query($sql);
        $sql = "INSERT INTO orgs VALUES (4, 'My A Org', 1, '', 'organisation', 'open-audit_orgs_my_a_org', 'system', NOW())";
        $db->query($sql);
        $sql = "INSERT INTO orgs VALUES (5, 'My B Org', 4, '', 'organisation', 'open-audit_orgs_my_b_org', 'system', NOW())";
        $db->query($sql);

        $orgsModel = new \App\Models\OrgsModel();
        $orgs = $orgsModel->listAll();
        $usersModel = new \App\Models\UsersModel();
        $user = $usersModel->read(1)[0]->attributes;

        # response_get_data($request_method = '', $post = null, $patch = '')
        $this->assertSame(array(), response_get_data('POST'));
        $this->assertSame(array(), response_get_data('PATCH'));
        $this->assertSame(array(), response_get_data());

        // NOTE - assertEquals because the objects are not the SAME object
        $this->assertEquals((object)array("collection" => "attributes"), response_get_data('POST', '{"collection":"attributes"}', null));
        $this->assertEquals((object)array("collection" => "attributes"), response_get_data('PATCH', null, '{"collection":"attributes"}'));

        # response_get_debug($get = '', $post = '', $header = '')
        $this->assertSame(false, response_get_debug());
        $this->assertSame(true, response_get_debug('true', null, null));
        $this->assertSame(true, response_get_debug(null, 'true', null));
        $this->assertSame(true, response_get_debug(null, null, 'true'));
        $this->assertSame(true, response_get_debug('TRUE', null, null));
        $this->assertSame(true, response_get_debug(null, 'TRUE', null));
        $this->assertSame(true, response_get_debug(null, null, 'TRUE'));
        $this->assertSame(true, response_get_debug('FALSE', null, 'TRUE'));

        # response_get_query_filter($query_string, $type = '')
        $this->assertEquals(array((object)array('name' => 'attributes.name', 'function' => 'where', 'operator' => '=', 'value' => 'Desktop')), response_get_query_filter('attributes.name=Desktop', 'filter'));
        $this->assertEquals(array((object)array('name' => 'attributes.name', 'function' => 'where', 'operator' => 'not like', 'value' => '%Desktop%')), response_get_query_filter('attributes.name=not likeDesktop', 'filter'));
        $this->assertEquals(array((object)array('name' => 'attributes.name', 'function' => 'where', 'operator' => 'not like', 'value' => '%Desktop%')), response_get_query_filter('attributes.name=!likeDesktop', 'filter'));
        $this->assertEquals(array((object)array('name' => 'attributes.name', 'function' => 'where', 'operator' => 'like', 'value' => '%Desktop%')), response_get_query_filter('attributes.name=likeDesktop', 'filter'));
        $this->assertEquals(array((object)array('name' => 'attributes.name', 'function' => 'where', 'operator' => '>=', 'value' => 'Desktop')), response_get_query_filter('attributes.name=>=Desktop', 'filter'));
        $this->assertEquals(array((object)array('name' => 'attributes.name', 'function' => 'where', 'operator' => '<=', 'value' => 'Desktop')), response_get_query_filter('attributes.name=<=Desktop', 'filter'));
        $this->assertEquals(array((object)array('name' => 'attributes.name', 'function' => 'where', 'operator' => '>', 'value' => 'Desktop')), response_get_query_filter('attributes.name=>Desktop', 'filter'));
        $this->assertEquals(array((object)array('name' => 'attributes.name', 'function' => 'where', 'operator' => '<', 'value' => 'Desktop')), response_get_query_filter('attributes.name=<Desktop', 'filter'));
        $this->assertEquals(array((object)array('name' => 'attributes.name', 'function' => 'whereIn', 'operator' => 'in', 'value' => array('Desktop','Server'))), response_get_query_filter('attributes.name=in(\'Desktop\',\'Server\')', 'filter'));
        $this->assertEquals(array((object)array('name' => 'attributes.type', 'function' => 'whereNotIn', 'operator' => 'not in', 'value' => array('Desktop','Server'))), response_get_query_filter('attributes.type=notin(\'Desktop\',\'Server\')', 'filter'));
        $reserved_words = response_valid_reserved_words();
        foreach ($reserved_words as $word) {
            $this->assertSame(array(), response_get_query_filter($word . '=test', 'filter'));
        }

        # response_get_format($get = '', $post = '', $header = '')
        $valid_formats = response_valid_formats();
        foreach ($valid_formats as $format) {
            $this->assertSame($format, response_get_format($format, '', ''), "$format in GET");
            $this->assertSame($format, response_get_format('', $format, ''), "$format in POST");
            $this->assertSame($format, response_get_format('', '', $format), "$format in HEADERS");
        }
        $this->assertSame('json', response_get_format('jsonBad', '', ''));

        # response_get_groupby($get = '', $post = '', $collection = '')
        $this->assertSame('attributes.org_id', response_get_groupby('attributes.org_id', ''));
        $this->assertSame('attributes.org_id', response_get_groupby('', 'attributes.org_id'));
        $this->assertSame('', response_get_groupby('', 'attributes.org_thing'));

        # response_get_id($id = '', $collection = '', $org_list = '')
        $this->assertSame(1, response_get_id('1', 'attributes', '1,2,3'));
        $this->assertSame(1, response_get_id(1, 'attributes', '1,2,3'));
        $this->assertSame(1, response_get_id(1, 'attributes', '1,2,3'));
        $this->assertSame(null, response_get_id('', 'attributes', '1,2,3'));

        $this->assertSame('devices', response_get_id('devices', 'database', '1,2,3'));
        $this->assertSame(null, response_get_id('devicesBad', 'database', '1,2,3'));

        # TODO - Need a device ID and name to test that exists and are known

        $this->assertSame(1, response_get_id('1', 'users', '1,2,3'));
        $this->assertSame(1, response_get_id(1, 'users', '1,2,3'));
        $this->assertSame(1, response_get_id('admin', 'users', '1,2,3'));
        $this->assertSame(null, response_get_id('adminBad', 'users', '1,2,3'));
        $this->assertSame(888, response_get_id('888', 'users', '1,2,3'));

        $this->assertSame(1, response_get_id('1', 'orgs', '1,2,3'));
        $this->assertSame(1, response_get_id(1, 'orgs', '1,2,3'));
        $this->assertSame(1, response_get_id('Default Organisation', 'orgs', '1,2,3'));
        $this->assertSame(null, response_get_id('Default Organisation Bad', 'orgs', '1,2,3'));
        $this->assertSame(888, response_get_id(888, 'orgs', '1,2,3'));

        # TODO - baselines policies

        $this->assertSame(1, response_get_id('1', 'roles', ''));
        $this->assertSame(1, response_get_id(1, 'roles', ''));
        $this->assertSame(1, response_get_id('admin', 'roles', ''));
        $this->assertSame(null, response_get_id('adminBad', 'roles', ''));
        $this->assertSame(888, response_get_id(888, 'roles', ''));

        $this->assertSame(1, response_get_id('1', 'configuration', ''));
        $this->assertSame(1, response_get_id(1, 'configuration', ''));
        $this->assertSame(1, response_get_id('access_token_count', 'configuration', ''));
        $this->assertSame(null, response_get_id('access_token_countBad', 'configuration', ''));
        $this->assertSame(888, response_get_id(888, 'configuration', ''));

        $this->assertSame(1, response_get_id('1', 'discoveries', '1,2,3'));
        $this->assertSame(1, response_get_id(1, 'discoveries', '1,2,3'));
        $this->assertSame(1, response_get_id('Default Discovery', 'discoveries', '1,2,3'));
        $this->assertSame(null, response_get_id('Default Discovery Bad', 'discoveries', '1,2,3'));
        $this->assertSame(888, response_get_id(888, 'discoveries', '1,2,3'));

        #response_get_ids($get = '', $post = '')
        $this->assertSame('1,2,3', response_get_ids('', '1,2,3'));
        $this->assertSame('1,2,3', response_get_ids('1,2,3', ''));
        $this->assertSame('', response_get_ids('', ''));
        $this->assertSame('0,1,2,4', response_get_ids('', '1,2,a,b,4'));

        # response_get_include($get = '', $post = '', $collection = '', $format = '')
        $valid_includes = response_valid_includes();
        foreach ($valid_includes as $include) {
            $this->assertSame($include, response_get_include($include, '', 'devices'));
            $this->assertSame($include, response_get_include('', $include, 'devices'));
            $this->assertSame('', response_get_include($include, '', 'attributes'));
            $this->assertSame('', response_get_include('', $include, 'attributes'));
        }
        $this->assertSame('', response_get_include('applicationBad', '', 'devices'));

        # response_get_limit($get = '', $post = '', $format = '', $default_limit = 1000)
        $this->assertSame(1, response_get_limit('', '1', 'json'));
        $this->assertSame(1, response_get_limit('', 1, ''));
        $this->assertSame(1, response_get_limit('1', '', 'json'));
        $this->assertSame(1, response_get_limit(1, '', ''));
        $this->assertSame(1000, response_get_limit('', '', 'json'));
        $this->assertSame(1000, response_get_limit('', '', 'html'));

        # response_get_offset($get = '', $post = '')
        $this->assertSame(1, response_get_offset(1, ''));
        $this->assertSame(1, response_get_offset(0, 1));
        $this->assertSame(0, response_get_offset(0, null));

        # response_get_org_list($instance, $collection = '')
        $this->assertSame(null, response_get_org_list(null, null));
        $temp = $user->orgs;
        $user->orgs = array(2);
        $this->assertSame('2,3', response_get_org_list($user, 'orgs'));
        $this->assertSame('1,2,3', response_get_org_list($user, 'queries'));
        $this->assertSame('2', response_get_org_list($user, 'database'));

        # TODO - More tests for response_get_permission_id
        # response_get_permission_id($user, $collection, $action, $received_data, $id)
        $user->org_list = '2,3';
        $this->assertSame(false, response_get_permission_id($user, 'orgs', 'read', '', 1));
        $user->org_list = '1,2,3';
        $this->assertSame(true, response_get_permission_id($user, 'orgs', 'read', '', 1));
        $this->assertSame(false, response_get_permission_id($user, 'orgs', 'read', '', 8888));
        $user->orgs = $temp;

        # response_get_properties($collection = '', $action = '', $sub_resource = '', $get = '', $post = '')
        $this->assertSame('orgs.*', response_get_properties('orgs', 'read', '', '', ''));
        $this->assertSame('orgs.id,orgs.name', response_get_properties('orgs', 'read', 'orgs.id,orgs.name', '', null));
        $this->assertSame('orgs.id,orgs.name', response_get_properties('orgs', 'read', '', 'orgs.id,orgs.name', null));
        $this->assertSame('orgs.id,orgs.name,orgs.parent_id,orgs.description,orgs.type,orgs.ad_group,orgs.edited_by,orgs.edited_date', response_get_properties('orgs', 'read', 'all', '', null));
        $this->assertSame('orgs.id,orgs.name,orgs.parent_id,orgs.description,orgs.type,orgs.ad_group,orgs.edited_by,orgs.edited_date', response_get_properties('orgs', 'read', '*', '', null));
        $this->assertSame('devices.*', response_get_properties('devices', 'read', '', '', null));
        #$this->assertSame(config('OpenAudit')->devices_default_retrieve_columns, response_get_properties('devices', 'collection', '', '', null));
        #$this->user->devices_default_display_columns = 'devices.id,devices.name,devices.org_id,devices.type';
        #$this->assertSame($user->devices_default_display_columns, response_get_properties('devices', 'collection', '', '', $user));
        $this->assertSame('orgs.id,orgs.name,orgs.parent_id', response_get_properties('orgs', 'collection', '["id", "name", "parent_id"]', '', null));

        # response_get_sort($collection = '', $get = '', $post = '')
        $this->assertSame('orgs.name', response_get_sort('', 'orgs.name', ''));
        $this->assertSame('orgs.name', response_get_sort('', '', 'orgs.name'));
        $this->assertSame('orgs.name', response_get_sort('orgs', 'name', ''));
        $this->assertSame('orgs.name', response_get_sort('orgs', '', 'name'));
        $this->assertSame('', response_get_sort('', 'name', ''));
        $this->assertSame('', response_get_sort('', '', 'name'));
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
        $response->meta->debug = false;
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
