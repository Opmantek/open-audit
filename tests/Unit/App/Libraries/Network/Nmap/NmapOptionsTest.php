<?php

declare(strict_types=1);

namespace OpenAuditTest\Unit\App\Libraries\Network\Nmap;

use PHPUnit\Framework\TestCase;
use App\Libraries\Network\Nmap\NmapOptions;

final class NmapOptionsTest extends TestCase
{
    /**
     * @dataProvider effectivePortsDataProvider
     */
    public function testGetEffectivePorts(
        array $ports,
        ?string $scanType,
        array $excludePorts,
        array $excludeTcp,
        array $excludeUdp,
        array $expected
    ): void {
        $options = new NmapOptions();

        $options->ports           = $ports;
        $options->scanType        = $scanType;
        $options->excludePorts    = $excludePorts;
        $options->excludeTcpPorts = $excludeTcp;
        $options->excludeUdpPorts = $excludeUdp;

        $this->assertSame($expected, $options->getEffectivePorts());
    }

    public static function effectivePortsDataProvider(): array
    {
        return [
            'no exclusions'                                 => [
                'ports'        => [80, 443, 22],
                'scanType'     => NmapOptions::SCAN_TYPE_TCP_SYN,
                'excludePorts' => [],
                'excludeTcp'   => [],
                'excludeUdp'   => [],
                'expected'     => [80, 443, 22],
            ],
            'global exclusions only'                        => [
                'ports'        => [80, 443, 22],
                'scanType'     => NmapOptions::SCAN_TYPE_TCP_SYN,
                'excludePorts' => [22],
                'excludeTcp'   => [],
                'excludeUdp'   => [],
                'expected'     => [80, 443],
            ],
            'tcp-specific exclusion applied'                => [
                'ports'        => [80, 443, 22],
                'scanType'     => NmapOptions::SCAN_TYPE_TCP_SYN,
                'excludePorts' => [],
                'excludeTcp'   => [22],
                'excludeUdp'   => [],
                'expected'     => [80, 443],
            ],
            'udp-specific exclusion used only for udp scan' => [
                'ports'        => [53, 67, 68],
                'scanType'     => NmapOptions::SCAN_TYPE_UDP,
                'excludePorts' => [],
                'excludeTcp'   => [],
                'excludeUdp'   => [67],
                'expected'     => [53, 68],
            ],
            'combined exclusions'                           => [
                'ports'        => [80, 443, 22, 8080],
                'scanType'     => NmapOptions::SCAN_TYPE_TCP_SYN,
                'excludePorts' => [8080],
                'excludeTcp'   => [22],
                'excludeUdp'   => [],
                'expected'     => [80, 443],
            ],
            'empty ports'                                   => [
                'ports'        => [],
                'scanType'     => NmapOptions::SCAN_TYPE_TCP_SYN,
                'excludePorts' => [80],
                'excludeTcp'   => [22],
                'excludeUdp'   => [],
                'expected'     => [],
            ],
            'null scan type defaults to global'             => [
                'ports'        => [80, 443, 22],
                'scanType'     => null,
                'excludePorts' => [],
                'excludeTcp'   => [22],
                'excludeUdp'   => [80],
                'expected'     => [80, 443, 22],
            ],
        ];
    }
}
