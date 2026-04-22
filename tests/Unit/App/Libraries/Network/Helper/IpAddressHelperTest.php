<?php

declare(strict_types=1);

namespace OpenAuditTest\Unit\App\Libraries\Network\Helper;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use App\Libraries\Network\Helper\IpAddressHelper;

use function iterator_to_array;

final class IpAddressHelperTest extends TestCase
{
    /**
     * @dataProvider validGenerateIpV4DataProvider
     */
    public function testGenerateIpV4Valid(string $input, array $expected): void
    {
        $result = iterator_to_array(IpAddressHelper::generateIpV4($input), false);

        $this->assertSame($expected, $result);
    }

    public static function validGenerateIpV4DataProvider(): array
    {
        return [
            'single ip'                   => [
                'input'    => '192.168.1.1',
                'expected' => ['192.168.1.1'],
            ],
            'multiple ips'                => [
                'input'    => '192.168.1.1 10.0.0.1',
                'expected' => ['192.168.1.1', '10.0.0.1'],
            ],
            'simple cidr /32'             => [
                'input'    => '192.168.1.1/32',
                'expected' => ['192.168.1.1'],
            ],
            'cidr /30 (4 ips)'            => [
                'input'    => '192.168.1.0/30',
                'expected' => [
                    '192.168.1.0',
                    '192.168.1.1',
                    '192.168.1.2',
                    '192.168.1.3',
                ],
            ],
            'cidr not aligned to network' => [
                'input'    => '192.168.1.5/30',
                'expected' => [
                    '192.168.1.4',
                    '192.168.1.5',
                    '192.168.1.6',
                    '192.168.1.7',
                ],
            ],
            'mixed ips and cidr'          => [
                'input'    => '10.0.0.1 192.168.1.0/30',
                'expected' => [
                    '10.0.0.1',
                    '192.168.1.0',
                    '192.168.1.1',
                    '192.168.1.2',
                    '192.168.1.3',
                ],
            ],
            'trims whitespace'            => [
                'input'    => ' 192.168.1.1   192.168.1.2 ',
                'expected' => ['192.168.1.1', '192.168.1.2'],
            ],
        ];
    }

    /**
     * @dataProvider invalidGenerateIpV4DataProvider
     */
    public function testGenerateIpV4Invalid(string $input, string $message): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage($message);

        iterator_to_array(IpAddressHelper::generateIpV4($input));
    }

    public static function invalidGenerateIpV4DataProvider(): array
    {
        return [
            'invalid ip'               => [
                'input'   => '999.999.999.999',
                'message' => 'Invalid IPv4 address: "999.999.999.999"',
            ],
            'invalid subnet'           => [
                'input'   => 'invalid/24',
                'message' => 'Invalid subnet: "invalid"',
            ],
            'negative prefix'          => [
                'input'   => '192.168.1.0/-1',
                'message' => 'Invalid CIDR prefix: "-1"',
            ],
            'prefix too large'         => [
                'input'   => '192.168.1.0/33',
                'message' => 'Invalid CIDR prefix: "33"',
            ],
            'mixed valid then invalid' => [
                'input'   => '192.168.1.1 invalid',
                'message' => 'Invalid IPv4 address: "invalid"',
            ],
        ];
    }
}
