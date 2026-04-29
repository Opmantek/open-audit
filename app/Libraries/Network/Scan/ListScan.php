<?php

declare(strict_types=1);

namespace App\Libraries\Network\Scan;

use App\Libraries\Network\Helper\SubnetHelper;
use App\Libraries\Network\Nmap\NmapHostHelper;

final class ListScan extends AbstractScan
{
    /**
     * Executes a list scan similar to Nmap `-sL`.
     *
     * This scan does not probe hosts for availability.
     * Instead, it simply enumerates targets and optionally resolves
     * reverse DNS (PTR records) unless disabled via `noDns`.
     *
     * - Expands target ranges into individual IP addresses
     * - Optionally performs reverse DNS lookup per IP
     * - Emits each host immediately via callback as it is resolved
     *
     * Output state is always "unknown" because no probing occurs.
     *
     * @param callable $callback Receives type and buffered output per host
     * @return void
     */
    public function start(callable $callback): void
    {
        $noDns = $this->options->noDns === true;
        $targets = SubnetHelper::expand($this->options->targets);

        foreach ($targets as $ip) {
            if ($noDns) {
                $this->emitResponse($ip, [], $callback);
                continue;
            }


            $hostname = gethostbyaddr($ip);
            $hostnames = [];

            if ($hostname && $hostname !== $ip) {
                $hostnames[] = [
                    'name' => $hostname,
                    'type' => 'PTR',
                ];
            }

            $this->emitResponse($ip, $hostnames, $callback);
        }
    }

    /**
     * Build and emit a single host result in the same structure as Nmap.
     *
     * @param string $ip IPv4 address being processed
     * @param array<int, array{name:string,type:string}> $hostnames Optional PTR hostnames
     * @param callable $callback Output handler
     * @return void
     */
    private function emitResponse(string $ip, array $hostnames, callable $callback): void
    {
        $host = [
            'status' => [
                'state' => 'unknown',
            ],
            'address' => [
                [
                    'addr' => $ip,
                    'addrtype' => 'ipv4',
                ],
            ],
            'hostnames' => $hostnames,
        ];

        $callback(self::OUT, NmapHostHelper::toXml($host));
    }
}