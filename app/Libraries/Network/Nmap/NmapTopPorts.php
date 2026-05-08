<?php

declare(strict_types=1);

namespace App\Libraries\Network\Nmap;

final class NmapTopPorts
{
    /**
     * Approximate TCP top ports.
     */
    private const TCP_PORTS = [
        80, 443, 22, 21, 25, 110, 445, 3389, 53, 139,
        143, 993, 995, 1723, 3306, 5900, 8080, 8443,
        587, 111, 135, 137, 138, 389, 445, 1433,
        1521, 2049, 2181, 2375, 2376, 27017, 6379,
    ];

    /**
     * Approximate UDP top ports.
     */
    private const UDP_PORTS = [
        53, 67, 68, 123, 161, 162, 500, 514, 1900,
        4500, 1194, 33434, 137, 138, 69, 111,
    ];

    /**
     * Retrieve top TCP ports limited by $count.
     *
     * If $count exceeds available ranked ports, remaining slots are
     * filled with additional valid TCP ports not already in the list.
     *
     * @param int $count Number of ports requested
     * @return array<int> List of TCP ports
     */
    public function getTcpPorts(int $count): array
    {
        return $this->resolvePorts($count, self::TCP_PORTS, range(1, 65535));
    }

    /**
     * Retrieve top UDP ports limited by $count.
     *
     * If $count exceeds available ranked ports, remaining slots are
     * filled with additional valid UDP ports not already in the list.
     *
     * @param int $count Number of ports requested
     * @return array<int> List of UDP ports
     */
    public function getUdpPorts(int $count): array
    {
        return $this->resolvePorts($count, self::UDP_PORTS, range(1, 65535));
    }

    /**
     * Resolve top ports.
     *
     * @param int $count
     * @param array<int> $ranked
     * @param array<int> $fallbackPool
     * @return array<int>
     */
    private function resolvePorts(int $count, array $ranked, array $fallbackPool): array
    {
        $ports = [];

        foreach ($ranked as $port) {
            if (count($ports) === $count) {
                break;
            }
            $ports[$port] = $port;
        }

        if (count($ports) < $count) {
            foreach ($fallbackPool as $port) {
                if (count($ports) === $count) {
                    break;
                }

                if (isset($ports[$port])) {
                    continue;
                }

                $ports[$port] = $port;
            }
        }

        return array_values($ports);
    }
}
