<?php

declare(strict_types=1);

namespace OpenAuditTest\Unit\App\Libraries\Network\Nmap;

use App\Libraries\Network\Nmap\NmapHostHelper;
use PHPUnit\Framework\TestCase;

final class NmapHostHelperTest extends TestCase
{
    public function testGetStateWhenStateExists()
    {
        $host = [
            'status' => [
                'state' => 'up'
            ]
        ];

        $state = NmapHostHelper::getState($host);

        $this->assertEquals('up', $state);
    }

    public function testGetStateWhenStateDoesNotExist()
    {
        $host = [
            'status' => []
        ];

        $state = NmapHostHelper::getState($host);

        $this->assertEquals('unknown', $state);
    }

    public function testGetStateWithCustomDefault()
    {
        $host = [
            'status' => []
        ];

        $state = NmapHostHelper::getState($host, 'offline');

        $this->assertEquals('offline', $state);
    }

    public function testGetStateWhenStatusKeyIsMissing()
    {
        $host = [];

        $state = NmapHostHelper::getState($host);

        $this->assertEquals('unknown', $state);
    }

    public function testGetAddressesAllTypes()
    {
        $host = [
            'address' => [
                ['addr' => '192.168.1.1', 'addrtype' => 'ipv4'],
                ['addr' => 'fe80::1', 'addrtype' => 'ipv6'],
                ['addr' => '00:14:22:01:23:45', 'addrtype' => 'mac']
            ]
        ];

        $addresses = NmapHostHelper::getAddresses($host);

        $this->assertCount(3, $addresses);
        $this->assertEquals('192.168.1.1', $addresses[0]['addr']);
        $this->assertEquals('fe80::1', $addresses[1]['addr']);
        $this->assertEquals('00:14:22:01:23:45', $addresses[2]['addr']);
    }

    public function testGetAddressesByIpv4()
    {
        $host = [
            'address' => [
                ['addr' => '192.168.1.1', 'addrtype' => 'ipv4'],
                ['addr' => 'fe80::1', 'addrtype' => 'ipv6'],
                ['addr' => '00:14:22:01:23:45', 'addrtype' => 'mac']
            ]
        ];

        $ipv4Addresses = NmapHostHelper::getAddresses($host, 'ipv4');

        $this->assertCount(1, $ipv4Addresses);
        $this->assertEquals('192.168.1.1', $ipv4Addresses[0]['addr']);
    }

    public function testGetAddressesByIpv6()
    {
        $host = [
            'address' => [
                ['addr' => '192.168.1.1', 'addrtype' => 'ipv4'],
                ['addr' => 'fe80::1', 'addrtype' => 'ipv6'],
                ['addr' => '00:14:22:01:23:45', 'addrtype' => 'mac']
            ]
        ];

        $ipv6Addresses = NmapHostHelper::getAddresses($host, 'ipv6');

        $this->assertCount(1, $ipv6Addresses);
        $this->assertEquals('fe80::1', $ipv6Addresses[0]['addr']);
    }

    public function testGetAddressesByMac()
    {
        $host = [
            'address' => [
                ['addr' => '192.168.1.1', 'addrtype' => 'ipv4'],
                ['addr' => 'fe80::1', 'addrtype' => 'ipv6'],
                ['addr' => '00:14:22:01:23:45', 'addrtype' => 'mac']
            ]
        ];

        $macAddresses = NmapHostHelper::getAddresses($host, 'mac');

        $this->assertCount(1, $macAddresses);
        $this->assertEquals('00:14:22:01:23:45', $macAddresses[0]['addr']);
    }

    public function testGetIpv4Address()
    {
        $host = [
            'address' => [
                ['addr' => '192.168.1.1', 'addrtype' => 'ipv4'],
                ['addr' => 'fe80::1', 'addrtype' => 'ipv6']
            ]
        ];

        $ipv4 = NmapHostHelper::getIpv4Address($host);

        $this->assertEquals('192.168.1.1', $ipv4['addr']);
    }

    public function testGetIpv4AddressNoIpv4()
    {
        $host = [
            'address' => [
                ['addr' => 'fe80::1', 'addrtype' => 'ipv6'],
                ['addr' => '00:14:22:01:23:45', 'addrtype' => 'mac']
            ]
        ];

        $ipv4 = NmapHostHelper::getIpv4Address($host);

        $this->assertEmpty($ipv4);
    }

    public function testGetIpv6Address()
    {
        $host = [
            'address' => [
                ['addr' => '192.168.1.1', 'addrtype' => 'ipv4'],
                ['addr' => 'fe80::1', 'addrtype' => 'ipv6']
            ]
        ];

        $ipv6 = NmapHostHelper::getIpv6Address($host);

        $this->assertEquals('fe80::1', $ipv6['addr']);
    }

    public function testGetMacAddress()
    {
        $host = [
            'address' => [
                ['addr' => '192.168.1.1', 'addrtype' => 'ipv4'],
                ['addr' => 'fe80::1', 'addrtype' => 'ipv6'],
                ['addr' => '00:14:22:01:23:45', 'addrtype' => 'mac']
            ]
        ];

        $mac = NmapHostHelper::getMacAddress($host);

        $this->assertEquals('00:14:22:01:23:45', $mac['addr']);
    }

    public function testNoAddresses()
    {
        $host = [];

        $addresses = NmapHostHelper::getAddresses($host);
        $ipv4 = NmapHostHelper::getIpv4Address($host);
        $ipv6 = NmapHostHelper::getIpv6Address($host);
        $mac = NmapHostHelper::getMacAddress($host);

        $this->assertEmpty($addresses);
        $this->assertEmpty($ipv4);
        $this->assertEmpty($ipv6);
        $this->assertEmpty($mac);
    }
}
