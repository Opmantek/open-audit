<?php

declare(strict_types=1);

namespace App\Libraries\Network\Nmap;

use function array_map;
use function array_merge;
use function implode;
use function str_repeat;

class NmapCommand
{
    public function generate(NmapOptions $options): array
    {
        $command = [$options->exePath];

        if ($options->fast) {
            $command[] = '-F';
        }

        if ($options->noDns) {
            $command[] = '-n';
        }

        if ($options->noPing) {
            $command[] = '-Pn';
        }

        if ($options->osDetection) {
            $command[] = '-O';
        }

        if ($options->serviceDetection) {
            $command[] = '-sV';
        }

        if ($options->verbosity) {
            $command[] = '-' . str_repeat('v', $options->verbosity);
        }

        if ($options->debug) {
            $command[] = '-' . str_repeat('d', $options->debug);
        }

        switch ($options->scanType) {
            case NmapOptions::SCAN_TYPE_LIST:
                $command[] = '-sL';
                break;
            case NmapOptions::SCAN_TYPE_PING:
                $command[] = '-sP';
                break;
            case NmapOptions::SCAN_TYPE_TCP_SYN:
                $command[] = '-sS';
                break;
            case NmapOptions::SCAN_TYPE_TCP_CON:
                $command[] = '-sT';
                break;
            case NmapOptions::SCAN_TYPE_TCP_ACK:
                $command[] = '-sA';
                break;
            case NmapOptions::SCAN_TYPE_TCP_FIN:
                $command[] = '-sF';
                break;
            case NmapOptions::SCAN_TYPE_TCP_WIN:
                $command[] = '-sW';
                break;
            case NmapOptions::SCAN_TYPE_UDP:
                $command[] = '-sU';
                break;
            case NmapOptions::SCAN_TYPE_XMAS:
                $command[] = '-sX';
                break;
        }

        if ($options->timing) {
            $command[] = '-T' . $options->timing;
        }

        if ($options->hostTimeout) {
            $command[] = '--host-timeout';
            $command[] = $options->hostTimeout;
        }

        if ($options->topPorts) {
            $command[] = '--top-ports';
            $command[] = $options->topPorts;
        }

        if ($options->ports) {
            $command[] = '-p';
            $command[] = implode(',', $options->ports);
        }

        if ($options->excludeHosts) {
            $command[] = '--exclude';
            $command[] = $options->excludeHosts;
        }

        if ($options->excludePorts || $options->excludeTcpPorts || $options->excludeUdpPorts) {
            $command[] = '--exclude-ports';
            $excluded  = array_merge(
                $options->excludePorts ?? [],
                array_map(fn($port) => 'T:' . $port, $options->excludeTcpPorts ?? []),
                array_map(fn($port) => 'U:' . $port, $options->excludeUdpPorts ?? []),
            );
            $command[] = implode(',', $excluded);
        }

        switch ($options->outputType) {
            case NmapOptions::OUTPUT_TYPE_NORMAL:
                $command[] = '-oN';
                break;
            case NmapOptions::OUTPUT_TYPE_GREP:
                $command[] = '-oG';
                break;
            case NmapOptions::OUTPUT_TYPE_XML:
                $command[] = '-oX';
                break;
        }

        if ($options->outputFile) {
            $command[] = $options->outputFile;
        }

        if ($options->targetsFile) {
            $command[] = '-iL';
            $command[] = $options->targetsFile;
        }

        $command[] = $options->targets;

        return $command;
    }
}
