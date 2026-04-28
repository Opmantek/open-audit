<?php

declare(strict_types=1);

namespace App\Libraries\Network\Nmap;

use function array_diff;
use function array_merge;
use function array_values;

class NmapOptions
{
    public const SCAN_TYPE_LIST    = 'list';    // -sL
    public const SCAN_TYPE_PING    = 'ping';    // -sP
    public const SCAN_TYPE_TCP_SYN = 'tcp_syn'; // -sS
    public const SCAN_TYPE_TCP_CON = 'tcp_con'; // -sT
    public const SCAN_TYPE_TCP_ACK = 'tcp_ack'; // -sA
    public const SCAN_TYPE_TCP_FIN = 'tcp_fin'; // -sF
    public const SCAN_TYPE_TCP_WIN = 'tcp_win'; // -sW
    public const SCAN_TYPE_UDP     = 'udp';     // -sU
    public const SCAN_TYPE_XMAS    = 'xmas';    // -sX

    public const OUTPUT_TYPE_NORMAL = 'normal'; // -oN
    public const OUTPUT_TYPE_GREP   = 'grep';   // -oG
    public const OUTPUT_TYPE_XML    = 'xml';    // -oX

    // Executable
    public string|array $exePath = 'nmap';

    // General
    public ?bool $noDns          = null; // -n
    public ?bool $noPing         = null; // -Pn
    public ?bool $fast           = null; // -F
    public ?bool $randomizeHosts = null; // --randomize-hosts
    public ?int $timing          = null; // -T0..5
    public ?int $hostTimeout     = null; // --host-timeout
    public ?int $minParallelism  = null; // --min-parallelism
    public ?int $maxParallelism  = null; // --max-parallelism
    public ?int $maxRetries      = null; // --max-retries
    public ?string $scanType     = null; // -sL,-sP,-sS,-sT,-sA,-sF,-sU,-sX

    // Targets
    public ?string $targets      = null;
    public ?string $targetsFile  = null; // -iL filename.txt
    public ?string $excludeHosts = null; // --exclude

    // Detection
    public ?bool $osDetection      = null; // -O
    public ?bool $serviceDetection = null; // -sV

    // Ports
    public ?array $ports           = null; // -p
    public ?array $excludePorts    = null; // --exclude-ports
    public ?array $excludeTcpPorts = null;
    public ?array $excludeUdpPorts = null;
    public ?int $topPorts          = null; // --top-ports

    // Output
    public ?string $outputType = null; // -oN,-oG,-oX
    public ?string $outputFile = null; // filename or -

    // Debug
    public ?int $verbosity = null; // -v,-vv
    public ?int $debug     = null; // -d,-dd

    // Internal
    public array $unknownFlags = [];

    /**
     * Resolve the effective list of ports that will be scanned.
     *
     * Applying all exclusion rules defined and returning
     * and the final computed port list based on the selected scan type.
     *
     * @return array<int> List of effective port numbers to scan
     */
    public function getEffectivePorts(): array
    {
        $ports = $this->ports ?? [];

        $excludes = match ($this->scanType) {
            self::SCAN_TYPE_TCP_CON,
            self::SCAN_TYPE_TCP_SYN,
            self::SCAN_TYPE_TCP_ACK,
            self::SCAN_TYPE_TCP_FIN,
            self::SCAN_TYPE_TCP_WIN => array_merge(
                $this->excludePorts ?? [],
                $this->excludeTcpPorts ?? []
            ),

            self::SCAN_TYPE_UDP => array_merge(
                $this->excludePorts ?? [],
                $this->excludeUdpPorts ?? []
            ),

            default => $this->excludePorts ?? [],
        };

        if ($this->topPorts !== null) {
            $topPorts = new NmapTopPorts();
            if ($this->scanType === self::SCAN_TYPE_UDP) {
                $ports = $topPorts->getUdpPorts($this->topPorts);
            } else {
                $ports = $topPorts->getTcpPorts($this->topPorts);
            }
        }

        return array_values(array_diff($ports, $excludes));
    }
}
