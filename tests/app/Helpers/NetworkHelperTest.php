<?php

namespace Tests\Helpers;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\ControllerTestTrait;
use CodeIgniter\Test\DatabaseTestTrait;

#[\AllowDynamicProperties]

class NetworkHelperTest extends CIUnitTestCase
{
    use DatabaseTestTrait;
    use ControllerTestTrait;

    protected function setUp(): void
    {
        parent::setUp();

        helper('network');
        helper('utility');

        $this->config = new \Config\OpenAudit();
        $this->config->blessed_subnets_use = 'n';

        $db = db_connect();

        global $CI_INSTANCE;
        $CI_INSTANCE[0] = &$this;
    }

    /**
     * @dataProvider privateIpDataProvider
     */
    public function testPrivateIp(bool $expected, string $ipAddress): void
    {
        $this->assertSame($expected, is_private_ip($ipAddress));
    }

    public static function privateIpDataProvider(): array
    {
        return [
            [true, '192.168.1.1'],
            [true, '10.10.10.10'],
            [false, '110.2.3.5'],
            [false, '123'],
            [false, 'abc'],
            [false, 'bad.address.with.0'],
        ];
    }

    /**
     * @dataProvider ipAddressToDbDataProvider
     */
    public function testIpAddressToDb(string $expected, string $ipAddress): void
    {
        $this->assertSame($expected, ip_address_to_db($ipAddress));
    }

    public static function ipAddressToDbDataProvider(): array
    {
        return [
            ['192.168.001.001', '192.168.1.1'],
            ['010.010.010.010', '10.10.10.10'],
            ['110.002.003.005', '110.2.3.5'],
            ['123', '123'],
            ['abc', 'abc'],
            ['000.000.000.000', 'bad.address.with.0'],
        ];
    }

    /**
     * @dataProvider ipAddressFromDbDataProvider
     */
    public function testIpAddressFromDb(string $expected, string $ipAddress): void
    {
        $this->assertSame($expected, ip_address_from_db($ipAddress));
    }

    public static function ipAddressFromDbDataProvider(): array
    {
        return [
            ['192.168.1.1', '192.168.001.001'],
            ['10.10.10.10', '010.010.010.010'],
            ['110.2.3.5', '110.002.003.005'],
            ['123', '123'],
            ['abc', 'abc'],
            ['0.0.0.0', 'bad.address.with.0'],
        ];
    }

    /**
     * @dataProvider searchIpToDbDataProvider
     */
    public function testSearchIpAToDb(string $expected, string $ipAddress): void
    {
        $this->assertSame($expected, search_ip_to_db($ipAddress));
    }

    public static function searchIpToDbDataProvider(): array
    {
        return [
            ['192.168.001.001', '192.168.1.1'],
            ['010.010.010.010', '10.10.10.10'],
            ['110.002.003.005', '110.2.3.5'],
            ['', '123'],
            ['', 'abc'],
            ['bad.ess.ith.000', 'bad.address.with.0'],
        ];
    }

    public function testIsSsl(): void
    {
        $this->assertFalse(is_ssl());
    }

    public function testServerIp(): void
    {
        $this->assertNotSame('127.0.0.1', server_ip());
    }

    public function checkIp(): void
    {
        $this->assertTrue(check_ip('127.0.0.1'));
        $this->assertTrue(check_ip('::1'));
        $this->assertTrue(check_ip('2001:db8:0:0:0:ff00:42:8329'));
        $this->assertTrue(check_ip('foobar:8329')); // Probably not an expected outcome
    }
}
