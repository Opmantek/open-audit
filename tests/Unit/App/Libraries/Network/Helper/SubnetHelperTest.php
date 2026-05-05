<?php

declare(strict_types=1);

namespace OpenAuditTest\Unit\App\Libraries\Network\Helper;

use App\Libraries\Network\Helper\SubnetHelper;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use RuntimeException;

final class SubnetHelperTest extends TestCase
{
    /**
     * @dataProvider ipv4CidrExpansionDataProvider
     */
    public function testIpv4CidrExpansion(string $input, array $expected, bool $excludeNetworkBroadcast): void
    {
        $result = iterator_to_array(
            SubnetHelper::expand(
                $input,
                1000,
                $excludeNetworkBroadcast
            )
        );

        $this->assertSame($expected, $result);
    }

    public static function ipv4CidrExpansionDataProvider(): array
    {
        return [
            'cidr excludes network and broadcast by default' => [
                'input' => '192.168.1.0/30',
                'expected' => [
                    '192.168.1.1',
                    '192.168.1.2',
                ],
                'excludeNetworkBroadcast' => true,
            ],
            'cidr includes network and broadcast when disabled' => [
                'input' => '192.168.1.0/30',
                'expected' => [
                    '192.168.1.0',
                    '192.168.1.1',
                    '192.168.1.2',
                    '192.168.1.3',
                ],
                'excludeNetworkBroadcast' => false,
            ],
        ];
    }

    /**
     * @dataProvider ipv4RangeExpansionDataProvider
     */
    public function testIpv4RangeExpansion(string $input, array $expected): void
    {
        $result = iterator_to_array(SubnetHelper::expand($input));

        $this->assertSame($expected, $result);
    }

    public static function ipv4RangeExpansionDataProvider(): array
    {
        return [
            'single octet range expands correctly' => [
                'input' => '10.0.0.1-3',
                'expected' => [
                    '10.0.0.1',
                    '10.0.0.2',
                    '10.0.0.3',
                ],
            ],
            'multi octet range expands cartesian product' => [
                'input' => '172.16.0-1.1-2',
                'expected' => [
                    '172.16.0.1',
                    '172.16.0.2',
                    '172.16.1.1',
                    '172.16.1.2',
                ],
            ],
            'skips .0 and .255 automatically' => [
                'input' => '10.0.0.0-2',
                'expected' => [
                    '10.0.0.1',
                    '10.0.0.2',
                ],
            ],
        ];
    }

    /**
     * @dataProvider ipv6RangeExpansionDataProvider
     */
    public function testIpv6RangeExpansion(string $input, array $expected): void
    {
        $result = iterator_to_array(SubnetHelper::expand($input));

        $this->assertSame($expected, $result);
    }

    public static function ipv6RangeExpansionDataProvider(): array
    {
        return [
            'simple last hextet range' => [
                'input' => '2001:db8::1-3',
                'expected' => [
                    '2001:db8::1',
                    '2001:db8::2',
                    '2001:db8::3',
                ],
            ],
            'range in multiple hextets' => [
                'input' => '2001:db8:0-1::1-2',
                'expected' => [
                    '2001:db8::1',
                    '2001:db8::2',
                    '2001:db8:1::1',
                    '2001:db8:1::2',
                ],
            ],
        ];
    }

    /**
     * @dataProvider ipv6CidrExpansionDataProvider
     */
    public function testIpv6CidrExpansion(string $input, array $expected): void
    {
        $result = iterator_to_array(SubnetHelper::expand($input));

        $this->assertSame($expected, $result);
    }

    public static function ipv6CidrExpansionDataProvider(): array
    {
        return [
            'small ipv6 cidr expands correctly' => [
                'input' => '2001:db8::/126',
                'expected' => [
                    '2001:db8::',
                    '2001:db8::1',
                    '2001:db8::2',
                    '2001:db8::3',
                ],
            ],
        ];
    }

    /**
     * @dataProvider mixedInputExpansionDataProvider
     */
    public function testMixedInputExpansion(string $input, array $expected): void
    {
        $result = iterator_to_array(SubnetHelper::expand($input));

        $this->assertSame($expected, $result);
    }

    public static function mixedInputExpansionDataProvider(): array
    {
        return [
            'handles whitespace separated mixed inputs' => [
                'input' => "10.0.0.1-2\n192.168.1.0/30",
                'expected' => [
                    '10.0.0.1',
                    '10.0.0.2',
                    '192.168.1.1',
                    '192.168.1.2',
                ],
            ],
        ];
    }

    public function testMaxResultsIsEnforced(): void
    {
        $this->expectException(RuntimeException::class);

        iterator_to_array(SubnetHelper::expand('10.0.0.0/24', 10));
    }

    public function testInvalidInputThrowsException(): void
    {
        $this->expectException(InvalidArgumentException::class);

        iterator_to_array(SubnetHelper::expand('invalid-input'));
    }

    public function testInvalidIpv6RangeThrowsException(): void
    {
        $this->expectException(InvalidArgumentException::class);

        iterator_to_array(SubnetHelper::expand('2001:db8::5-1'));
    }

    public function testInvalidCidrThrowsException(): void
    {
        $this->expectException(InvalidArgumentException::class);

        iterator_to_array(SubnetHelper::expand('10.0.0.1/not-a-number'));
    }

    public function testInvalidIpv4RangeThrowsException(): void
    {
        $this->expectException(InvalidArgumentException::class);

        iterator_to_array(SubnetHelper::expand('10.0.0.300-400'));
    }

    public function testOutputIsDeterministic(): void
    {
        $a = iterator_to_array(SubnetHelper::expand('172.16.0-1.1-2'));
        $b = iterator_to_array(SubnetHelper::expand('172.16.0-1.1-2'));

        $this->assertSame($a, $b);
    }
}
