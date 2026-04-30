<?php

declare(strict_types=1);

namespace App\Libraries\Network\Scan;

use App\Libraries\Network\Nmap\NmapOptions;

abstract class AbstractScan
{
    public const ERR = 'err';
    public const OUT = 'out';

    public const IP_TYPE_V4 = 'ipv4';
    public const IP_TYPE_V6 = 'ipv6';

    public const PROTOCOL_TCP = 'tcp';
    public const PROTOCOL_UDP = 'udp';

    public const REASON_TCP_RESPONSE = 'tcp-response';
    public const REASON_UDP_RESPONSE = 'udp-response';
    public const REASON_NO_RESPONSE  = 'no-response';
    public const REASON_ECHO_REPLY   = 'echo-reply';
    public const REASON_TIMEOUT      = 'timeout';
    public const REASON_UNKNOWN      = 'unknown';

    public const HOST_STATE_UP   = 'up';
    public const HOST_STATE_DOWN = 'down';

    public const PORT_STATE_OPEN          = 'open';
    public const PORT_STATE_CLOSED        = 'closed';
    public const PORT_STATE_FILTERED      = 'filtered';
    public const PORT_STATE_OPEN_FILTERED = 'open/filtered';

    public function __construct(
        protected NmapOptions $options,
    ) {
    }

    /**
     * Executes a scan.
     *
     * @param callable $callback Receives output type and XML payload
     * @return void
     */
    abstract public function start(callable $callback): void;

    /**
     * Determines whether the given IP address is IPv4 or IPv6.
     *
     * @param string $ip The IP address to evaluate.
     * @return string Returns 'ipv6' if the IP is IPv6, otherwise 'ipv4'.
     */
    protected function getIpAddressType(string $ip): string
    {
        return filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) ? 'ipv6' : 'ipv4';
    }
}
