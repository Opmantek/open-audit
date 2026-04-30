<?php

declare(strict_types=1);

namespace App\Libraries\Network\Scan;

use App\Libraries\Network\Helper\SubnetHelper;
use App\Libraries\Network\Nmap\NmapHostHelper;
use Symfony\Component\Process\Process;

final class PingScan extends AbstractAsyncSocketScan
{
    private const PROBE_TCP_PORTS = [22, 80, 443];
    private const PROBE_UDP_PORTS = [53, 123, 161];

    protected int $concurrency = 50;

    /**
     * Executes a list scan similar to Nmap `-sP`.
     *
     * @param callable $callback Receives type and buffered output per host
     * @return void
     */
    public function start(callable $callback): void
    {
        if ($this->isPingAvailable()) {
            $this->scan($callback);
        } else {
            parent::start($callback);
        }
    }

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
            SubnetHelper::expand($this->options->targets),
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

    /**
     * Execute ICMP-based host discovery using concurrent ping processes.
     *
     * @param callable $callback Receives type and buffered output per host
     * @return void
     */
    private function scan(callable $callback): void
    {
        $targets = iterator_to_array(
            SubnetHelper::expand($this->options->targets),
            false
        );

        $running = [];
        $index   = 0;
        $total   = count($targets);

        while ($index < $total || ! empty($running)) {

            while (count($running) < $this->concurrency && $index < $total) {
                $ip = $targets[$index++];

                $process = $this->createPingProcess($ip);
                $process->start();

                $running[$ip] = $process;
            }

            foreach ($running as $ip => $process) {
                if (! $process->isRunning()) {

                    $output = $process->getOutput();
                    $alive  = $this->isHostAlive($output);
                    $type   = $this->getIpAddressType($ip);

                    $host = [
                        'status' => [
                            'state' => $alive ? self::HOST_STATE_UP : self::HOST_STATE_DOWN,
                            'reason' => $alive ? self::REASON_ECHO_REPLY: self::REASON_NO_RESPONSE,
                        ],
                        'address' => [
                            [
                                'addr' => $ip,
                                'addrtype' => $type,
                            ],
                        ],
                    ];

                    $callback(self::OUT, NmapHostHelper::toXml($host));

                    unset($running[$ip]);
                }
            }

            usleep(50_000);
        }
    }

    /**
     * Create a ping process for the given IP address.
     *
     * @param string $ip Target IP address
     * @return Process Configured ping process ready for execution
     */
    private function createPingProcess(string $ip): Process
    {
        return new Process(['ping', '-c', '1', '-W', '1', $ip]);
    }

    /**
     * Determine whether a host is considered alive based on ping output.
     *
     * @param string $output Raw ping command output
     * @return bool True if host responded successfully
     */
    private function isHostAlive(string $output): bool
    {
        return str_contains($output, '1 received') || str_contains($output, 'bytes from');
    }

    /**
     * Determine whether the system ping binary is available and executable.
     *
     * @return bool True if ping is available, false otherwise
     */
    private function isPingAvailable(): bool
    {
        $process = new Process(['ping', '-c', '1',  '-W', '1', '127.0.0.1']);
        $process->run();

        return $process->isSuccessful();
    }
}
