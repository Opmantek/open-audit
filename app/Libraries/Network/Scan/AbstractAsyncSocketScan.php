<?php

declare(strict_types=1);

namespace App\Libraries\Network\Scan;

abstract class AbstractAsyncSocketScan extends AbstractScan
{
    protected int $concurrency = 200;
    protected int $timeout = 2;

    /**
     * Initialize the scan queue and result structure.
     *
     * @return array{0: array<int, array>, 1: array<string, array>}
     */
    abstract protected function initialize(): array;

    /**
     * Executes a scan.
     *
     * - Builds initial queue and result state
     * - Manages a pool of async sockets (active connections)
     * - Processes read/write events via stream_select
     * - Handles timeouts and cleanup
     * - Emits completed host results via callback
     *
     * @param callable $callback Receives output type and XML payload
     * @return void
     */
    public function start(callable $callback): void
    {
        [$queue, $results] = $this->initialize();

        $active = [];

        while (! empty($queue) || ! empty($active)) {

            $this->fillActive($queue, $active, $results);

            if (empty($active)) {
                usleep(1000);
                continue;
            }

            [$read, $write, $except] = $this->buildSocketSets($active);

            $result = stream_select($read, $write, $except, 0, 200000);

            if ($result === false) {
                usleep(1000);
                continue;
            }

            $this->handleRead($read, $active, $results);
            $this->handleWrite($write, $active, $results);

            if ($this->supportsEarlyHostTermination()) {
                $this->closeCompletedHosts($active, $results);
            }

            $this->handleTimeouts($active, $results);

            $this->emitResults($results, $callback);
        }

        // Just encase anything was missed
        $this->emitResults($results, $callback);
    }

    /**
     * Create a TCP or UDP socket for probing a target port.
     *
     * @param string $ip Target IP address
     * @param string $protocol Protocol (tcp|udp)
     * @param int $port Target port
     * @return resource|false Socket resource or false on failure
     */
    protected function createSocket(string $ip, string $protocol, int $port)
    {
        $flags = $protocol === self::PROTOCOL_TCP ?
            STREAM_CLIENT_CONNECT | STREAM_CLIENT_ASYNC_CONNECT :
            STREAM_CLIENT_CONNECT;

        $socket = @stream_socket_client(
            "$protocol://$ip:$port",
            $errorCode,
            $errorMessage,
            $this->timeout,
            $flags
        );

        if ($socket !== false) {
            stream_set_blocking($socket, false);
            if ($protocol === self::PROTOCOL_UDP) {
                @fwrite($socket, $this->udpProbePayload($port));
            }
        }

        return $socket;
    }

    /**
     * Fill the active socket pool up to concurrency limit.
     *
     * @param array<int, array> $queue Pending queued items
     * @param array<int, array> $active Active sockets
     * @param array<string, array> $results Host result aggregation
     * @return void
     */
    protected function fillActive(array &$queue, array &$active, array &$results): void
    {
        while (count($active) < $this->concurrency && $queue) {

            [$ip, $protocol, $port] = array_shift($queue);

            if (! empty($results[$ip]['completed'])) {
                continue;
            }

            $socket = $this->createSocket($ip, $protocol, $port);

            if ($socket === false) {
                $this->markResult($results, $ip, $protocol, $port, false, self::REASON_NO_RESPONSE);
                continue;
            }

            $id = (int) $socket;
            $now = microtime(true);

            $active[$id] = [
                'socket'   => $socket,
                'ip'       => $ip,
                'port'     => $port,
                'protocol' => $protocol,
                'start'    => $now,
                'expires'  => $now + $this->timeout,
            ];
        }
    }

    /**
     * Build read and write socket arrays for stream_select.
     *
     * @param array<int, array> $active Active sockets
     * @return array{0: array, 1: array}
     */
    protected function buildSocketSets(array $active): array
    {
        $read   = [];
        $write  = [];
        $except = [];

        foreach ($active as $meta) {
            if ($meta['protocol'] === self::PROTOCOL_UDP) {
                $read[] = $meta['socket'];
            } else {
                $write[] = $meta['socket'];
            }
        }

        return [$read, $write, $except];
    }

    /**
     * Handle readable sockets (typically UDP responses).
     *
     * @param array<int, resource> $read
     * @param array<int, array> $active
     * @param array<string, array> $results
     * @return void
     */
    protected function handleRead(array $read, array &$active, array &$results): void
    {
        foreach ($read as $socket) {
            $id = (int) $socket;

            if (! isset($active[$id])) {
                continue;
            }

            $meta = $active[$id];

            $data = @fread($socket, 1024);
            $success = ($data !== false && strlen($data) > 0);
            $reason = $success ? self::REASON_UDP_RESPONSE : self::REASON_NO_RESPONSE;

            $this->markResult($results, $meta['ip'], $meta['protocol'], $meta['port'], $success, $reason);

            fclose($socket);
            unset($active[$id]);
        }
    }

    /**
     * Handle writable sockets (typically TCP connect completion).
     *
     * @param array<int, resource> $write
     * @param array<int, array> $active
     * @param array<string, array> $results
     * @return void
     */
    protected function handleWrite(array $write, array &$active, array &$results): void
    {
        foreach ($write as $socket) {
            $id = (int) $socket;

            if (! isset($active[$id])) {
                continue;
            }

            $meta = $active[$id];
            $success = false;
            $resource = @socket_import_stream($socket);

            if ($resource !== false) {
                $error = @socket_get_option($resource, SOL_SOCKET, SO_ERROR);
                $success = ($error === 0);
            }

            //$peer = @stream_socket_get_name($socket, true);
            //$success = $peer !== false;

            $reason = $success ? self::REASON_TCP_RESPONSE : self::REASON_NO_RESPONSE;

            $this->markResult($results, $meta['ip'], $meta['protocol'], $meta['port'], $success, $reason);

            fclose($socket);
            unset($active[$id]);
        }
    }

    /**
     * Handle socket timeouts.
     *
     * @param array<int, array> $active Active sockets
     * @param array<string, array> $results Host results
     * @return void
     */
    protected function handleTimeouts(array &$active, array &$results): void
    {
        $now = microtime(true);

        foreach ($active as $id => $meta) {
            if ($now < $meta['expires']) {
                continue;
            }

            $this->markResult($results, $meta['ip'], $meta['protocol'], $meta['port'], false, self::REASON_TIMEOUT);

            fclose($meta['socket']);
            unset($active[$id]);
        }
    }

    /**
     * Record the result of a single probe.
     *
     * @param array<string, array> $results
     * @param string $ip
     * @param string $protocol
     * @param int $port
     * @param bool $success
     * @param string $reason
     * @return void
     */
    protected function markResult(array &$results, string $ip, string $protocol, int $port, bool $success, string $reason): void
    {
        $results[$ip]['done']++;

        if ($success) {
            $results[$ip]['open'] = true;
        }

        if ($success) {
            $state = self::PORT_STATE_OPEN;
        } else {
            $state = $protocol === self::PROTOCOL_TCP ? self::PORT_STATE_CLOSED : self::PORT_STATE_OPEN_FILTERED;
        }

        $results[$ip]['ports'][] = [
            'protocol' => $protocol,
            'portid' => $port,
            'state' => [
                'state'  => $state,
                'reason' => $reason,
            ],
        ];
    }

    /**
     * Emit completed hosts to the given callback handler.
     *
     * @param array<string, array> $results Host result aggregation
     * @param callable $callback Receives output type and XML payload
     * @return void
     */
    protected function emitResults(array &$results, callable $callback): void
    {
        foreach ($results as $ip => &$data) {
            if (! $data['emitted'] && $this->isHostComplete($data)) {
                $callback(self::OUT, $this->buildHostXml($ip, $data));
                $data['emitted'] = true;
            }
        }
    }

    /**
     * Build the final XML output for a host.
     *
     * @param string $ip
     * @param array $data
     * @return string XML representation of host
     */
    protected function buildHostXml(string $ip, array $data): string
    {
        $state = $data['open'] ? self::HOST_STATE_UP : self::HOST_STATE_DOWN;

        $reason = $data['open']
            ? $this->inferHostUpReason($data['ports'])
            : self::REASON_NO_RESPONSE;

        $host = [
            'status' => [
                'state' => $state,
                'reason' => $reason,
            ],
            'address' => [
                [
                    'addr' => $ip,
                    'addrtype' => 'ipv4',
                ],
            ],
            'ports' => [
                'port' => $data['ports'],
            ],
        ];

        return $this->hostArrayToXml($host);
    }

    /**
     * Infer the reason a host is up, based on collected port results.
     *
     * - Check and use the first open port reason
     * - Finally fallback to unknown
     *
     * @param array<int, array> $ports
     * @return string
     */
    protected function inferHostUpReason(array $ports): string
    {
        foreach ($ports as $port) {
            if (
                ! empty($port['state']['state']) &&
                ! empty($port['state']['reason']) &&
                $port['state']['state'] === self::PORT_STATE_OPEN
            ) {
                return $port['state']['reason'];
            }
        }

        return self::REASON_UNKNOWN;
    }

    /**
     * Close sockets for hosts that have completed scanning.
     *
     * @param array<int, array> $active
     * @param array<string, array> $results
     * @return void
     */
    protected function closeCompletedHosts(array &$active, array &$results): void
    {
        foreach ($active as $id => $meta) {
            $data = $results[$meta['ip']] ?? null;

            if (! is_array($data)) {
                continue;
            }

            if (! empty($data['completed']) || $data['open'] === true) {
                $results[$meta['ip']]['completed'] = true;
                fclose($meta['socket']);
                unset($active[$id]);
            }
        }
    }

    /**
     * Retrieve UDP probe payload for service-specific detection.
     *
     * @param int $port Destination port
     * @return string Raw UDP payload
     */
    protected function udpProbePayload(int $port): string
    {
        return match ($port) {
            // DNS
            53  => "\x00\x00\x10\x00\x00\x00\x00\x00\x00\x00\x00\x00",
            // NTP
            123 => "\x1b" . str_repeat("\0", 47),
            // SNMP
            161 => "\x30\x26\x02\x01\x01\x04\x06public\xa0\x19\x02\x04\x71\xb4\xb5\x68\x02\x01\x00\x02\x01\x00\x30\x0b\x30\x09\x06\x05\x2b\x06\x01\x02\x01\x05\x00",
            // Throwing shit at the wall with null character
            default => "\x00",
        };
    }

    /**
     * Determine whether early host termination is enabled.
     * When true, scanning may stop probing a host early once it is "decided".
     *
     * @return bool
     */
    protected function supportsEarlyHostTermination(): bool
    {
        return false;
    }

    /**
     * Determine whether a host has finished processing all probes.
     *
     * @param array $data
     * @return bool
     */
    protected function isHostComplete(array $data): bool
    {
        return ($data['done'] >= $data['total']) || ($data['completed'] ?? false);
    }
}
