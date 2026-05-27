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
     * @dataProvider cidrValidationDataProvider
     */
    public function testIsValidCidr(string $input, bool $expected): void
    {
        $result = SubnetHelper::isValidCidr($input);

        $this->assertSame($expected, $result);
    }

    public static function cidrValidationDataProvider(): array
    {
        return [
            'valid standard ipv4 cidr' => [
                'input' => '10.88.44.0/24',
                'expected' => true,
            ],
            'valid ipv4 cidr single host boundary' => [
                'input' => '192.168.1.1/32',
                'expected' => true,
            ],
            'valid ipv4 cidr zero mask boundary' => [
                'input' => '0.0.0.0/0',
                'expected' => true,
            ],
            'valid standard ipv6 cidr' => [
                'input' => '2001:db8::/32',
                'expected' => true,
            ],
            'valid ipv6 cidr single host boundary' => [
                'input' => 'fe80::1/128',
                'expected' => true,
            ],
            'valid ipv6 compressed format' => [
                'input' => '::1/128',
                'expected' => true,
            ],
            'invalid missing slash separator' => [
                'input' => '10.88.44.0',
                'expected' => false,
            ],
            'invalid multiple slash separators' => [
                'input' => '10.88.44.0/24/12',
                'expected' => false,
            ],
            'invalid non-numeric mask' => [
                'input' => '10.88.44.0/abc',
                'expected' => false,
            ],
            'invalid float mask' => [
                'input' => '10.88.44.0/24.5',
                'expected' => false,
            ],
            'invalid negative mask' => [
                'input' => '10.88.44.0/-1',
                'expected' => false,
            ],
            'invalid octet out of range ipv4' => [
                'input' => '10.256.44.0/24',
                'expected' => false,
            ],
            'invalid malformed ipv6 characters' => [
                'input' => '2001:db8:g::/32',
                'expected' => false,
            ],
            'invalid text string' => [
                'input' => 'not-a-cidr-block',
                'expected' => false,
            ],
            'invalid ipv4 mask exceeds 32' => [
                'input' => '10.88.44.0/33',
                'expected' => false,
            ],
            'invalid ipv6 mask exceeds 128' => [
                'input' => '2001:db8::/129',
                'expected' => false,
            ],
        ];
    }

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

    /**
     * @dataProvider allExpansionDataProvidersMerged
     */
    public function testCountMatchesExpansion(string $input, array $expected, bool $excludeNetworkBroadcast = true): void
    {
        $calculatedSize = SubnetHelper::count($input, $excludeNetworkBroadcast);

        $this->assertEquals(count($expected), $calculatedSize);
    }

    public static function allExpansionDataProvidersMerged(): array
    {
        return array_merge(
            self::ipv4CidrExpansionDataProvider(),
            self::ipv4RangeExpansionDataProvider(),
            self::ipv6RangeExpansionDataProvider(),
            self::ipv6CidrExpansionDataProvider(),
            self::mixedInputExpansionDataProvider()
        );
    }

    /**
     * @dataProvider invalidInputDataProvider
     */
    public function testExpandThrowsErrorOnInvalidInput(string $invalidInput): void
    {
        $this->expectException(InvalidArgumentException::class);

        iterator_to_array(SubnetHelper::expand($invalidInput));
    }

    /**
     * @dataProvider invalidInputDataProvider
     */
    public function testCountThrowsErrorOnInvalidInput(string $invalidInput): void
    {
        $this->expectException(InvalidArgumentException::class);

        SubnetHelper::count($invalidInput);
    }

    public static function invalidInputDataProvider(): array
    {
        return [
            ['invalid-input'],
            ['2001:db8::5-1'],
            ['10.0.0.1/not-a-number'],
            ['10.0.0.300-400'],
            ['10.0.0.1/33'],
            ['2001:db8::/129'],
        ];
    }

    public function testCountHandlesHugeNetworksWithoutTimeout(): void
    {
        $ipv4Size = SubnetHelper::count('10.0.0.0/8', false);
        $this->assertEquals(16777216, $ipv4Size);

        $ipv6Size = SubnetHelper::count('2001:db8::/64');
        $this->assertEquals(pow(2, 64), $ipv6Size);
    }

    public function testMaxResultsIsEnforced(): void
    {
        $this->expectException(RuntimeException::class);

        iterator_to_array(SubnetHelper::expand('10.0.0.0/24', 10));
    }

    public function testOutputIsDeterministic(): void
    {
        $a = iterator_to_array(SubnetHelper::expand('172.16.0-1.1-2'));
        $b = iterator_to_array(SubnetHelper::expand('172.16.0-1.1-2'));

        $this->assertSame($a, $b);
    }
}
