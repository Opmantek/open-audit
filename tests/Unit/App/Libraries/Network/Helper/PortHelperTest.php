<?php

declare(strict_types=1);

namespace OpenAuditTest\Unit\App\Libraries\Network\Helper;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use App\Libraries\Network\Helper\PortHelper;

final class PortHelperTest extends TestCase
{
    /**
     * @dataProvider validExpandDataProvider
     */
    public function testExpandValid(string $input, array $expected): void
    {
        $result = PortHelper::expand($input);

        $this->assertSame($expected, $result);
    }

    public static function validExpandDataProvider(): array
    {
        return [
            'single port'            => [
                'input'    => '80',
                'expected' => [80],
            ],
            'named ports'            => [
                'input'    => 'ssh,http,https',
                'expected' => [22, 80, 443],
            ],
            'multiple ports'         => [
                'input'    => '80,443,8080',
                'expected' => [80, 443, 8080],
            ],
            'range expansion'        => [
                'input'    => '20-23',
                'expected' => [20, 21, 22, 23],
            ],
            'mixed ports and ranges' => [
                'input'    => '80,20-22,443',
                'expected' => [80, 20, 21, 22, 443],
            ],
            'whitespace handling'    => [
                'input'    => ' 80 , 443 , 20-21 ',
                'expected' => [80, 443, 20, 21],
            ],
            'deduplication'          => [
                'input'    => '80,80,80',
                'expected' => [80],
            ],
            'overlapping ranges'     => [
                'input'    => '20-22,21-23',
                'expected' => [20, 21, 22, 23],
            ],
            'boundary ports'         => [
                'input'    => '1,65535',
                'expected' => [1, 65535],
            ],
        ];
    }

    /**
     * @dataProvider invalidExpandDataProvider
     */
    public function testExpandInvalid(string $input, string $message): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage($message);

        PortHelper::expand($input);
    }

    /**
     * @dataProvider validContractDataProvider
     */
    public function testContract(array $input, string $expected): void
    {
        $result = PortHelper::contract($input);
        $this->assertSame($expected, $result);
    }

    public static function validContractDataProvider(): array
    {
        return [
            'single port' => [
                'input'    => [80],
                'expected' => '80',
            ],
            'consecutive ports' => [
                'input'    => [22, 23, 24, 25],
                'expected' => '22-25',
            ],
            'non-consecutive ports' => [
                'input'    => [22, 80, 443],
                'expected' => '22,80,443',
            ],
            'multiple ranges' => [
                'input'    => [100, 101, 102, 110, 111],
                'expected' => '100-102,110-111',
            ],
            'single port again' => [
                'input'    => [22],
                'expected' => '22',
            ],
            'no ports' => [
                'input'    => [],
                'expected' => '',
            ],
            'disjoint ranges' => [
                'input'    => [22, 23, 25, 26, 30],
                'expected' => '22-23,25-26,30',
            ],
            'full port range' => [
                'input'    => range(1, 65535),
                'expected' => '1-65535',
            ],
        ];
    }

    public static function invalidExpandDataProvider(): array
    {
        return [
            'non numeric port'             => [
                'input'   => 'abc',
                'message' => 'Invalid port: "abc"',
            ],
            'invalid named port'           => [
                'input'   => 'bash',
                'message' => 'Invalid port: "bash"',
            ],
            'invalid range format'         => [
                'input'   => '10-a',
                'message' => 'Invalid port range: "10-a"',
            ],
            'range start greater than end' => [
                'input'   => '100-10',
                'message' => 'Invalid port range (start > end): "100-10"',
            ],
            'port too low'                 => [
                'input'   => '0',
                'message' => 'Port out of bounds (1-65535): "0"',
            ],
            'port too high'                => [
                'input'   => '70000',
                'message' => 'Port out of bounds (1-65535): "70000"',
            ],
            'range out of bounds low'      => [
                'input'   => '0-10',
                'message' => 'Port range out of bounds (1-65535): "0-10"',
            ],
            'range out of bounds high'     => [
                'input'   => '65000-70000',
                'message' => 'Port range out of bounds (1-65535): "65000-70000"',
            ],
        ];
    }

    public function testIsNumericPort(): void
    {
        $this->assertTrue(PortHelper::isNumericPort('123'));
        $this->assertFalse(PortHelper::isNumericPort('12a'));
    }

    public function testIsNamedPort(): void
    {
        $this->assertTrue(PortHelper::isNamedPort('ssh'));
        $this->assertFalse(PortHelper::isNamedPort('bash'));
    }

    public function testIsValidPortRange(): void
    {
        $this->assertTrue(PortHelper::isValidPortRange(1));
        $this->assertTrue(PortHelper::isValidPortRange(65535));
        $this->assertFalse(PortHelper::isValidPortRange(0));
        $this->assertFalse(PortHelper::isValidPortRange(70000));
    }
}
