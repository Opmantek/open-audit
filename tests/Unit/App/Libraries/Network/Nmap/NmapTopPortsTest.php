<?php

declare(strict_types=1);

namespace OpenAuditTest\Unit\App\Libraries\Network\Nmap;

use App\Libraries\Network\Nmap\NmapTopPorts;
use PHPUnit\Framework\TestCase;

final class NmapTopPortsTest extends TestCase
{
    public function testTcpPortsAreLimitedByCount(): void
    {
        $top = new NmapTopPorts();

        $ports = $top->getTcpPorts(5);

        $this->assertCount(5, $ports);
        $this->assertEquals(array_slice($ports, 0, 5), $ports);
    }

    public function testUdpPortsAreLimitedByCount(): void
    {
        $top = new NmapTopPorts();

        $ports = $top->getUdpPorts(5);

        $this->assertCount(5, $ports);
        $this->assertEquals(array_slice($ports, 0, 5), $ports);
    }

    public function testTcpPortsContainNoDuplicates(): void
    {
        $top = new NmapTopPorts();

        $ports = $top->getTcpPorts(50);

        $this->assertEquals(
            count($ports),
            count(array_unique($ports)),
            "TCP ports contain duplicates"
        );
    }

    public function testUdpPortsContainNoDuplicates(): void
    {
        $top = new NmapTopPorts();

        $ports = $top->getUdpPorts(50);

        $this->assertEquals(
            count($ports),
            count(array_unique($ports)),
            "UDP ports contain duplicates"
        );
    }

    public function testTcpPortsFillBeyondRankedList(): void
    {
        $top = new NmapTopPorts();

        $ports = $top->getTcpPorts(100);

        $this->assertCount(100, $ports);
        $this->assertEquals(
            count($ports),
            count(array_unique($ports))
        );
    }

    public function testUdpPortsFillBeyondRankedList(): void
    {
        $top = new NmapTopPorts();

        $ports = $top->getUdpPorts(100);

        $this->assertCount(100, $ports);
        $this->assertEquals(
            count($ports),
            count(array_unique($ports))
        );
    }

    public function testTcpAndUdpAreDifferentSets(): void
    {
        $top = new NmapTopPorts();

        $tcp = $top->getTcpPorts(20);
        $udp = $top->getUdpPorts(20);

        $intersection = array_intersect($tcp, $udp);

        $this->assertNotEmpty($tcp);
        $this->assertNotEmpty($udp);

        $this->assertLessThan(
            min(count($tcp), count($udp)),
            count($intersection)
        );
    }

    public function testSmallCountReturnsExactSlice(): void
    {
        $top = new NmapTopPorts();

        $ports = $top->getTcpPorts(3);

        $this->assertSame(3, count($ports));
        $this->assertSame(
            array_slice($ports, 0, 3),
            $ports
        );
    }
}
