<?php

declare(strict_types=1);

namespace App\Libraries\Network\Scan;

use App\Libraries\Network\Helper\IpAddressHelper;

final class PingScan extends AbstractAsyncSocketScan
{
    private const PROBE_TCP_PORTS = [22, 80, 443];
    private const PROBE_UDP_PORTS = [53, 123, 161];

    /**
     * {@inheritdoc}
     */
    protected function supportsEarlyHostTermination(): bool
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function initialize(): array
    {
        $targets = iterator_to_array(
            IpAddressHelper::generateIpV4($this->options->targets),
            false
        );

        $queue   = [];
        $results = [];
        $probes  = [
            self::PROTOCOL_TCP => self::PROBE_TCP_PORTS,
            self::PROTOCOL_UDP => self::PROBE_UDP_PORTS,
        ];

        foreach ($targets as $ip) {
            $results[$ip] = [
                'total'     => count($probes['tcp']) + count($probes['udp']),
                'done'      => 0,
                'open'      => false,
                'ports'     => [],
                'emitted'   => false,
                'completed' => false,
            ];

            foreach ($probes as $protocol => $ports) {
                foreach ($ports as $port) {
                    $queue[] = [$ip, $protocol, $port];
                }
            }
        }

        return [$queue, $results];
    }
}
