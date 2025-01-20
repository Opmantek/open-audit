<?php

namespace App\Models;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\ControllerTestTrait;
use CodeIgniter\Test\DatabaseTestTrait;

#[\AllowDynamicProperties]

class NetworkHelperTest extends CIUnitTestCase
{
    use DatabaseTestTrait;
    use ControllerTestTrait;

    public function testNetworkHelper()
    {
        echo "\nExecuting Network Helper tests.\n";

        helper('network');
        helper('utility');

        $this->config = new \Config\OpenAudit();
        $this->config->blessed_subnets_use = 'n';

        $db = db_connect();

        global $CI_INSTANCE;
        $CI_INSTANCE[0] = &$this;

        $this->assertSame(false, is_private_ip('110.2.3.5'));
        $this->assertSame(true, is_private_ip('192.168.1.1'));
        $this->assertSame(false, is_private_ip('bad.address.with.0'));
        $this->assertSame(false, is_private_ip('123'));
        $this->assertSame(false, is_private_ip('abc'));

        $this->assertSame(false, is_ssl());

        $this->assertNotEquals('127.0.0.1', server_ip());

        $network = json_decode('{"error":"","address":"192.168.1.0","netmask":"255.255.255.0","network_class":"C","wildcard":"0.0.0.255","network":"192.168.1.0","broadcast":"192.168.1.255","host_min":"192.168.1.1","host_max":"192.168.1.254","hosts_total":254,"network_slash":"24"}');
        $response = network_details('192.168.1.0/24');
        $this->assertEquals($network, $response, 'Invalid response of ' . json_encode($response));

        $network = json_decode('{"error":"Error - invalid input"}');
        $response = network_details('192.168.11111.0/24');
        $this->assertEquals($network, $response, 'Invalid response of ' . json_encode($response));

        $network = json_decode('{"error":"Invalid CIDR value. Try an integer 0 - 32."}');
        $response = network_details('192.168.1.0/52');
        $this->assertEquals($network, $response, 'Invalid response of ' . json_encode($response));

        $network = json_decode('{"error":"Invalid Netmask."}');
        $response = network_details('192.168.1.0 277.255.0.0');
        $this->assertEquals($network, $response, 'Invalid response of ' . json_encode($response));

        $network = json_decode('{"error":"Invalid IP Address."}');
        $response = network_details('192.168.777.0 255.255.255.0');
        $this->assertEquals($network, $response, 'Invalid response of ' . json_encode($response));

        $response = ip_address_to_db('192.168.1.1');
        $this->assertEquals('192.168.001.001', $response, 'Invalid response of ' . json_encode($response));

        $response = ip_address_to_db('');
        $this->assertEquals('', $response, 'Invalid response of ' . json_encode($response));

        $response = ip_address_to_db('12:34:56');
        $this->assertEquals('12:34:56', $response, 'Invalid response of ' . json_encode($response));

        $response = ip_address_from_db('192.168.001.001');
        $this->assertEquals('192.168.1.1', $response, 'Invalid response of ' . json_encode($response));

        $response = ip_address_from_db('0192.00168.0001.00001');
        $this->assertEquals('192.168.1.1', $response, 'Invalid response of ' . json_encode($response));

        $response = ip_address_from_db('not an ip address');
        $this->assertEquals('not an ip address', $response, 'Invalid response of ' . json_encode($response));

        $response = subnet_validate('192.168.1.0/24');
        $this->assertEquals('192.168.1.0/24', $response, 'Invalid response of ' . json_encode($response));

        $response = subnet_validate('192.168.1.0/999acd');
        $error = json_decode('{"level":"error","message":"Invalid Subnet. Received (192.168.1.0\/999acd)."}');
        $this->assertEquals($GLOBALS['stash'], $error, 'Invalid response of ' . json_encode($response));
        unset($GLOBALS['stash']);

        $response = subnet_validate('192.168.1.0 999.999.999.999');
        $error = json_decode('{"level":"error","message":"Invalid Subnet. Received (192.168.1.0 999.999.999.999)."}');
        $this->assertEquals($GLOBALS['stash'], $error, 'Invalid response of ' . json_encode($response));
        unset($GLOBALS['stash']);

        $response = subnet_validate('192.168.1');
        $error = json_decode('{"level":"error","message":"Subnet must contain four octets. Received (192.168.1)."}');
        $this->assertEquals($GLOBALS['stash'], $error, 'Invalid response of ' . json_encode($response));
        unset($GLOBALS['stash']);

        $response = subnet_validate('192.168.1.0/52');
        $error = json_decode('{"level":"error","message":"Subnet mask must be between 1 and 32. Received (192.168.1.0/52)."}');
        $this->assertEquals($GLOBALS['stash'], $error, 'Invalid response of ' . json_encode($response));
        unset($GLOBALS['stash']);

        $response = subnet_validate('777.168.1.0/24');
        $error = json_decode('{"level":"error","message":"Subnet octet 1 has a value of 777 and is out of bounds. Received (777.168.1.0/24)."}');
        $this->assertEquals($GLOBALS['stash'], $error, 'Invalid response of ' . json_encode($response));
        unset($GLOBALS['stash']);

        $response = subnet_validate('1.777.1.0/24');
        $error = json_decode('{"level":"error","message":"Subnet octet 2 has a value of 777 and is out of bounds. Received (1.777.1.0/24)."}');
        $this->assertEquals($GLOBALS['stash'], $error, 'Invalid response of ' . json_encode($response));
        unset($GLOBALS['stash']);

        $response = subnet_validate('192.168.777.0/24');
        $error = json_decode('{"level":"error","message":"Subnet octet 3 has a value of 777 and is out of bounds. Received (192.168.777.0/24)."}');
        $this->assertEquals($GLOBALS['stash'], $error, 'Invalid response of ' . json_encode($response));
        unset($GLOBALS['stash']);

        $response = subnet_validate('1.168.1.777/24');
        $error = json_decode('{"level":"error","message":"Subnet octet 4 has a value of 777 and is out of bounds. Received (1.168.1.777/24)."}');
        $this->assertEquals($GLOBALS['stash'], $error, 'Invalid response of ' . json_encode($response));
        unset($GLOBALS['stash']);

        $response = dns_validate(null);
        $this->assertEquals(null, null, 'Invalid response of ' . json_encode($response));

        $details = new \stdClass();
        $response = dns_validate($details);
        $this->assertEquals(null, null, 'Invalid response of ' . json_encode($response));

        $details->ip = '13.54.153.42';
        $response = dns_validate($details);
        $error = json_decode('{"ip":"13.54.153.42","dns_hostname":"ec2-13-54-153-42","dns_fqdn":"ec2-13-54-153-42.ap-southeast-2.compute.amazonaws.com","dns_domain":"ap-southeast-2.compute.amazonaws.com"}');
        $this->assertEquals($error, $response, 'Invalid response of ' . json_encode($response));

        unset($response);
        $details->ip = '192.168.1.7';
        $response = dns_validate($details);
        $error = json_decode('{"ip":"192.168.1.7","dns_hostname":"switch","dns_fqdn":"switch.open-audit.local","dns_domain":"open-audit.local"}');
        $this->assertEquals($error, $response, 'Invalid response of ' . json_encode($response));


        $sql = "SELECT value FROM configuration WHERE name = 'blessed_subnets_use'";
        $blessed_subnets_use = $db->query($sql)->getResult()[0]->value;

        $sql = "UPDATE configuration SET value = 'n' WHERE name = 'blessed_subnets_use'";
        $db->query($sql);

        $this->config->blessed_subnets_use = 'n';

        // $response = check_ip('123.999.999.000');
        // $this->assertEquals(false, $response, 'Invalid response of ' . json_encode($response));

        $sql = "UPDATE configuration SET value = 'y' WHERE name = 'blessed_subnets_use'";
        $db->query($sql);

        $response = check_ip('127.0.0.1');
        $this->assertEquals(true, $response, 'Invalid response of ' . json_encode($response));

        $response = check_ip('127.0.1.1');
        $this->assertEquals(true, $response, 'Invalid response of ' . json_encode($response));

        $response = check_ip('::1');
        $this->assertEquals(true, $response, 'Invalid response of ' . json_encode($response));

        $response = check_ip('ab:cd::ef');
        $this->assertEquals(true, $response, 'Invalid response of ' . json_encode($response));

        $response = check_ip('192.168.0.1');
        $this->assertEquals(true, $response, 'Invalid response of ' . json_encode($response));

        $response = check_ip('192.168.0.1');
        $this->assertEquals(true, $response, 'Invalid response of ' . json_encode($response));

        $response = check_ip('123.456.789.000');
        $this->assertEquals(false, $response, 'Invalid response of ' . json_encode($response));

        $sql = "UPDATE configuration SET value = '$blessed_subnets_use' WHERE name = 'blessed_subnets_use'";
        $db->query($sql);


        log_message('debug', '');
        log_message('debug', '');
        log_message('debug', '');
    }
}
