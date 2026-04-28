<?php

declare(strict_types=1);

namespace App\Libraries\Network\Scan;

use App\Libraries\Network\Nmap\NmapOptions;

abstract class AbstractScan
{
    public const ERR = 'err';
    public const OUT = 'out';

    public const PROTOCOL_TCP = 'tcp';
    public const PROTOCOL_UDP = 'udp';

    public const REASON_TCP_RESPONSE = 'tcp-response';
    public const REASON_UDP_RESPONSE = 'udp-response';
    public const REASON_NO_RESPONSE  = 'no-response';
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
}
