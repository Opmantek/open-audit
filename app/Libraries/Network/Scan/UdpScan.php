<?php

declare(strict_types=1);

namespace App\Libraries\Network\Scan;

use App\Libraries\Network\Helper\IpAddressHelper;

final class UdpScan extends AbstractAsyncSocketScan
{
    /**
     * {@inheritdoc}
     */
    protected function initialize(): array
    {
        $targets = iterator_to_array(
            IpAddressHelper::generateIpV4($this->options->targets),
            false
        );

        $ports = $this->options->getEffectivePorts();

        $queue   = [];
        $results = [];

        foreach ($targets as $ip) {
            $results[$ip] = [
                'total'     => count($ports),
                'done'      => 0,
                'open'      => false,
                'ports'     => [],
                'emitted'   => false,
                'completed' => false,
            ];

            foreach ($ports as $port) {
                $queue[] = [$ip, self::PROTOCOL_UDP, $port];
            }
        }

        return [$queue, $results];
    }
}
