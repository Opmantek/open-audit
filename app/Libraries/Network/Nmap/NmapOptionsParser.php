<?php

declare(strict_types=1);

namespace App\Libraries\Network\Nmap;

use App\Libraries\Network\Helper\PortHelper;

use function array_pad;
use function array_slice;
use function count;
use function explode;
use function is_numeric;
use function max;
use function preg_match;
use function str_contains;
use function str_starts_with;
use function strlen;
use function strtoupper;
use function trim;

class NmapOptionsParser
{
    /**
     * Parse Nmap CLI arguments into an NmapOptions object.
     *
     * @param array $argv Raw CLI arguments with script name at index 0
     * @return NmapOptions Parsed options
     */
    public function parse(array $argv): NmapOptions
    {
        $options = new NmapOptions();
        $args    = array_slice($argv, 1);

        for ($i = 0; $i < count($args); $i++) {
            $arg = $args[$i];

            if (str_starts_with($arg, '--')) {
                $i += $this->parseLong($arg, $args, $i, $options);
                continue;
            }

            if (str_starts_with($arg, '-')) {
                $i += $this->parseShort($arg, $args, $i, $options);
                continue;
            }

            $options->targets = $arg;
        }

        return $options;
    }

    /**
     * Parse long-form CLI flags (e.g. --top-ports, --exclude).
     *
     * @param string $arg Current argument
     * @param array $args Full argument list
     * @param int $index Current index
     * @param NmapOptions $options Target options object
     * @return int Number of additional arguments consumed
     */
    private function parseLong(string $arg, array $args, int $index, NmapOptions $options): int
    {
        [$flag, $value] = array_pad(explode('=', $arg, 2), 2, null);

        switch ($flag) {
            case '--randomize-hosts':
                $options->randomizeHosts = true;
                return 0;

            case '--min-parallelism':
                $value                 ??= $this->parseNextValue($args, $index);
                $options->minParallelism = $value ? (int) $value : null;
                return $value === null ? 0 : 1;

            case '--max-parallelism':
                $value                 ??= $this->parseNextValue($args, $index);
                $options->maxParallelism = $value ? (int) $value : null;
                return $value === null ? 0 : 1;

            case '--max-retries':
                $value             ??= $this->parseNextValue($args, $index);
                $options->maxRetries = $value ? (int) $value : null;
                return $value === null ? 0 : 1;

            case '--host-timeout':
                $value              ??= $this->parseNextValue($args, $index);
                $options->hostTimeout = $value ? $this->parseTime($value) : null;
                return $value === null ? 0 : 1;

            case '--top-ports':
                $value           ??= $this->parseNextValue($args, $index);
                $value             = is_numeric($value) ? (int) $value : null;
                $options->topPorts = $value;
                return $value === null ? 0 : 1;

            case '--exclude':
                $value               ??= $this->parseNextValue($args, $index);
                $options->excludeHosts = $value;
                return $value === null ? 0 : 1;

            case '--exclude-ports':
                $value ??= $this->parseNextValue($args, $index);
                if ($value !== null) {
                    $this->parseExcludePorts($value, $options);
                    return 1;
                }
                return 0;

            default:
                $options->unknownFlags[] = $flag;
                return 0;
        }
    }

    /**
     * Parse short-form CLI flags (e.g. -sS, -p, -oX).
     *
     * @param string $arg Current argument
     * @param array $args Full argument list
     * @param int $index Current index
     * @param NmapOptions $options Target options object
     * @return int Number of additional arguments consumed
     */
    private function parseShort(string $arg, array $args, int $index, NmapOptions $options): int
    {
        switch (true) {
            case $arg === '-n':
                $options->noDns = true;
                return 0;

            case $arg === '-Pn':
                $options->noPing = true;
                return 0;

            case $arg === '-F':
                $options->fast = true;
                return 0;

            case $arg === '-sL':
                $options->scanType = NmapOptions::SCAN_TYPE_LIST;
                return 0;

            case $arg === '-sP':
            case $arg === '-sn':
                $options->scanType = NmapOptions::SCAN_TYPE_PING;
                return 0;

            case $arg === '-sS':
                $options->scanType = NmapOptions::SCAN_TYPE_TCP_SYN;
                return 0;

            case $arg === '-sT':
                $options->scanType = NmapOptions::SCAN_TYPE_TCP_CON;
                return 0;

            case $arg === '-sA':
                $options->scanType = NmapOptions::SCAN_TYPE_TCP_ACK;
                return 0;

            case $arg === '-sF':
                $options->scanType = NmapOptions::SCAN_TYPE_TCP_FIN;
                return 0;

            case $arg === '-sW':
                $options->scanType = NmapOptions::SCAN_TYPE_TCP_WIN;
                return 0;

            case $arg === '-sU':
                $options->scanType = NmapOptions::SCAN_TYPE_UDP;
                return 0;

            case $arg === '-sX':
                $options->scanType = NmapOptions::SCAN_TYPE_XMAS;
                return 0;

            case $arg === '-O':
                $options->osDetection = true;
                return 0;

            case $arg === '-sV':
                $options->serviceDetection = true;
                return 0;

            case $arg === '-p':
                $value          = $this->parseNextValue($args, $index);
                $value          = $value === null ? null : PortHelper::expand($value);
                $options->ports = $value;
                return empty($value) ? 0 : 1;

            case $arg === '-oN':
                $options->outputType = NmapOptions::OUTPUT_TYPE_NORMAL;
                $value               = $this->parseOutputValue($args, $index);
                $options->outputFile = $value;
                return $value === null ? 0 : 1;

            case $arg === '-oG':
                $options->outputType = NmapOptions::OUTPUT_TYPE_GREP;
                $value               = $this->parseOutputValue($args, $index);
                $options->outputFile = $value;
                return $value === null ? 0 : 1;

            case $arg === '-oX':
                $options->outputType = NmapOptions::OUTPUT_TYPE_XML;
                $value               = $this->parseOutputValue($args, $index);
                $options->outputFile = $value;
                return $value === null ? 0 : 1;

            case $arg === '-iL':
                $value                = $this->parseNextValue($args, $index);
                $options->targetsFile = $value;
                return $value === null ? 0 : 1;

            case preg_match('/^-T([0-5])$/', $arg, $matches):
                $options->timing = (int) $matches[1];
                return 0;

            case preg_match('/^-v+$/', $arg):
                $options->verbosity += strlen($arg) - 1;
                return 0;

            case preg_match('/^-d+$/', $arg):
                $options->debug += strlen($arg) - 1;
                return 0;

            default:
                $options->unknownFlags[] = $arg;
                return 0;
        }
    }

    /**
     * Retrieve the next CLI argument if it is not another flag.
     *
     * @param array $args Argument list
     * @param int $index Current index
     * @return string|null Next value or null if missing/invalid
     */
    private function parseNextValue(array $args, int $index): ?string
    {
        $nextIndex = $index + 1;

        if (! isset($args[$nextIndex])) {
            return null;
        }

        return str_starts_with($args[$nextIndex], '-') ? null : $args[$nextIndex];
    }

    /**
     * Retrieve output file value, accounting for "-" meaning stdout.
     *
     * @param array $args Argument list
     * @param int $index Current index
     * @return string|null Output file or "-" or null if missing
     */
    private function parseOutputValue(array $args, int $index): ?string
    {
        $nextIndex = $index + 1;

        if (! isset($args[$nextIndex])) {
            return null;
        }

        if ($args[$nextIndex] === '-') {
            return '-';
        }

        return str_starts_with($args[$nextIndex], '-') ? null : $args[$nextIndex];
    }

    /**
     * Parse --exclude-ports into protocol-specific arrays.

     * Supported formats:
     *  - "80,443"
     *  - "T:80,443"
     *  - "U:53,22"
     *
     * @param string $value Raw exclude-ports string
     * @param NmapOptions $options Target options object
     */
    private function parseExcludePorts(string $value, NmapOptions $options): void
    {
        $ports    = [];
        $tcpPorts = [];
        $udpPorts = [];

        foreach (explode(',', $value) as $item) {
            $item     = trim($item);
            $protocol = null;
            $portPart = $item;

            if (str_contains($item, ':')) {
                [$prefix, $portPart] = explode(':', $item, 2);
                $protocol            = strtoupper($prefix);
            }

            $expanded = PortHelper::expand($portPart);

            foreach ($expanded as $port) {
                switch ($protocol) {
                    case 'T':
                        $tcpPorts[] = $port;
                        break;

                    case 'U':
                        $udpPorts[] = $port;
                        break;

                    default:
                        $ports[] = $port;
                }
            }
        }

        $options->excludePorts    = ! empty($ports) ? $ports : null;
        $options->excludeTcpPorts = ! empty($tcpPorts) ? $tcpPorts : null;
        $options->excludeUdpPorts = ! empty($udpPorts) ? $udpPorts : null;
    }

    /**
     * Parse time values (e.g. "10", "5s", "2m", "1h") into seconds.
     *
     * @param string $value Raw time string
     * @return int|null Time in seconds or null if invalid
     */
    private function parseTime(string $value): ?int
    {
        if (preg_match('/(\d+)([smh]?)/', $value, $matches)) {
            $time = max(1, (int) $matches[1]);
            return match ($matches[2]) {
                'h' => $time * 3600,
                'm' => $time * 60,
                default => $time,
            };
        }

        return $value ? max(1, (int) $value) : null;
    }
}
