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

    public function testGetIpAddressWithIpv4()
    {
        $host = [
            'address' => [
                ['addr' => '192.168.1.1', 'addrtype' => 'ipv4'],
                ['addr' => '2001:db8::1', 'addrtype' => 'ipv6']
            ]
        ];

        $ipAddress = NmapHostHelper::getIpAddress($host);

        $this->assertEquals('192.168.1.1', $ipAddress['addr']);
        $this->assertEquals('ipv4', $ipAddress['addrtype']);
    }

    public function testGetIpAddressWithIpv6()
    {
        $host = [
            'address' => [
                ['addr' => '2001:db8::1', 'addrtype' => 'ipv6']
            ]
        ];

        $ipAddress = NmapHostHelper::getIpAddress($host);

        $this->assertEquals('2001:db8::1', $ipAddress['addr']);
        $this->assertEquals('ipv6', $ipAddress['addrtype']);
    }

    public function testGetIpAddressWithNoIpAddress()
    {
        $host = [
            'address' => []
        ];

        $ipAddress = NmapHostHelper::getIpAddress($host);

        $this->assertEmpty($ipAddress);
    }

    public function testGetIpAddressWhenNoAddressKey()
    {
        $host = [];

        $ipAddress = NmapHostHelper::getIpAddress($host);

        $this->assertEmpty($ipAddress);
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

    public function testGetPortsWithIndexedArray()
    {
        $host = [
            'ports' => [
                'port' => [
                    ['portid' => 80, 'protocol' => 'tcp'],
                    ['portid' => 443, 'protocol' => 'tcp']
                ]
            ]
        ];

        $ports = NmapHostHelper::getPorts($host);

        $this->assertCount(2, $ports);
        $this->assertEquals(80, $ports[0]['portid']);
        $this->assertEquals('tcp', $ports[0]['protocol']);
    }

    public function testGetPortsWithAssocArray()
    {
        $host = [
            'ports' => [
                'port' => ['portid' => 80, 'protocol' => 'tcp']
            ]
        ];

        $ports = NmapHostHelper::getPorts($host);

        $this->assertCount(1, $ports);
        $this->assertEquals(80, $ports[0]['portid']);
        $this->assertEquals('tcp', $ports[0]['protocol']);
    }

    public function testGetPortsWithNoPorts()
    {
        $host = [
            'ports' => []
        ];

        $ports = NmapHostHelper::getPorts($host);

        $this->assertEmpty($ports);
    }

    public function testGetPortsWhenNoPortsKey()
    {
        $host = [];

        $ports = NmapHostHelper::getPorts($host);

        $this->assertEmpty($ports);
    }

    public function testGetReasonWhenExists()
    {
        $host = [
            'status' => [
                'reason' => 'syn-ack'
            ]
        ];

        $reason = NmapHostHelper::getReason($host);

        $this->assertEquals('syn-ack', $reason);
    }

    public function testGetReasonWithDefault()
    {
        $host = [
            'status' => []
        ];

        $reason = NmapHostHelper::getReason($host, 'unknown-reason');

        $this->assertEquals('unknown-reason', $reason);
    }

    public function testGetReasonWhenMissing()
    {
        $host = [];

        $reason = NmapHostHelper::getReason($host);

        $this->assertNull($reason);
    }

    public function testGetHostnamesWithList()
    {
        $host = [
            'hostnames' => [
                'hostname' => [
                    ['name' => 'example.com', 'type' => 'PTR'],
                    ['name' => 'test.local', 'type' => 'user']
                ]
            ]
        ];

        $hostnames = NmapHostHelper::getHostnames($host);

        $this->assertCount(2, $hostnames);
        $this->assertEquals('example.com', $hostnames[0]['name']);
    }

    public function testGetHostnamesWithSingleEntry()
    {
        $host = [
            'hostnames' => [
                'hostname' => ['name' => 'example.com', 'type' => 'PTR']
            ]
        ];

        $hostnames = NmapHostHelper::getHostnames($host);

        $this->assertCount(1, $hostnames);
        $this->assertEquals('example.com', $hostnames[0]['name']);
    }

    public function testGetHostnamesWhenMissing()
    {
        $host = [];

        $hostnames = NmapHostHelper::getHostnames($host);

        $this->assertEmpty($hostnames);
    }

    public function testGetHostnamesWhenInvalidStructure()
    {
        $host = [
            'hostnames' => null
        ];

        $hostnames = NmapHostHelper::getHostnames($host);

        $this->assertEmpty($hostnames);
    }

    public function testToXmlBasicHost()
    {
        $host = [
            'status' => [
                'state' => 'up',
                'reason' => 'syn-ack'
            ]
        ];

        $xml = NmapHostHelper::toXml($host);

        $this->assertStringContainsString('<status state="up" reason="syn-ack"/>', $xml);
    }

    public function testToXmlWithAddresses()
    {
        $host = [
            'address' => [
                ['addr' => '192.168.1.1', 'addrtype' => 'ipv4']
            ]
        ];

        $xml = NmapHostHelper::toXml($host);

        $this->assertStringContainsString('<address addr="192.168.1.1" addrtype="ipv4"/>', $xml);
    }

    public function testToXmlWithHostnames()
    {
        $host = [
            'hostnames' => [
                'hostname' => [
                    ['name' => 'example.com', 'type' => 'PTR']
                ]
            ]
        ];

        $xml = NmapHostHelper::toXml($host);

        $this->assertStringContainsString('<hostnames>', $xml);
        $this->assertStringContainsString('name="example.com"', $xml);
    }

    public function testToXmlWithPorts()
    {
        $host = [
            'ports' => [
                'port' => [
                    [
                        'portid' => 80,
                        'protocol' => 'tcp',
                        'state' => [
                            'state' => 'open',
                            'reason' => 'syn-ack'
                        ]
                    ]
                ]
            ]
        ];

        $xml = NmapHostHelper::toXml($host);

        $this->assertStringContainsString('<port protocol="tcp" portid="80">', $xml);
        $this->assertStringContainsString('<state state="open" reason="syn-ack"/>', $xml);
    }

    public function testToXmlIncludesServiceWhenResolvable()
    {
        $host = [
            'ports' => [
                'port' => [
                    [
                        'portid' => 80,
                        'protocol' => 'tcp',
                        'state' => [
                            'state' => 'open',
                            'reason' => 'syn-ack'
                        ]
                    ]
                ]
            ]
        ];

        $xml = NmapHostHelper::toXml($host);

        $this->assertStringContainsString('<service', $xml);
        $this->assertStringContainsString('name="http"', $xml);
        $this->assertStringContainsString('method="table"', $xml);
        $this->assertStringContainsString('conf="3"', $xml);
    }

    public function testToXmlEmptyHost()
    {
        $xml = NmapHostHelper::toXml([]);

        $this->assertStringContainsString('<host', $xml);
    }
}
