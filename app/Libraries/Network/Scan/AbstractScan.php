<?php

declare(strict_types=1);

namespace App\Libraries\Network\Scan;

use App\Libraries\Network\Nmap\NmapOptions;
use DOMDocument;

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
    public const REASON_UNREACHABLE  = 'unreachable';

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
     * Convert a normalized host array into an XML representation.
     *
     * @param array $host Structured host result array.
     * @return string XML string representation of the host node.
     * @throws \DOMException
     */
    protected function hostArrayToXml(array $host): string
    {
        $doc = new DOMDocument('1.0', 'UTF-8');
        $doc->formatOutput = false;

        $hostNode = $doc->createElement('host');

        if (isset($host['status']['state'])) {
            $statusNode = $doc->createElement('status');
            $statusNode->setAttribute('state', $host['status']['state']);
            if (isset($host['status']['reason'])) {
                $statusNode->setAttribute('reason', $host['status']['reason']);
            }

            $hostNode->appendChild($statusNode);
        }

        if (isset($host['address']) && is_array($host['address'])) {
            foreach ($host['address'] as $address) {
                $addressNode = $doc->createElement('address');
                $addressNode->setAttribute('addr', $address['addr']);
                $addressNode->setAttribute('addrtype', $address['addrtype'] ?? 'ipv4');

                $hostNode->appendChild($addressNode);
            }
        }

        if (isset($host['hostnames']) && is_array($host['hostnames']) && count($host['hostnames'])) {
            $hostnamesNode = $doc->createElement('hostnames');

            foreach ($host['hostnames'] as $hostname) {
                $hostnameNode = $doc->createElement('hostname');
                $hostnameNode->setAttribute('name', $hostname['name']);
                $hostnameNode->setAttribute('type', $hostname['type'] ?? 'PTR');

                $hostnamesNode->appendChild($hostnameNode);
            }

            $hostNode->appendChild($hostnamesNode);
        }

        if (isset($host['ports']['port']) && is_array($host['ports']['port']) && count($host['ports']['port'])) {
            $portsNode = $doc->createElement('ports');

            foreach ($host['ports']['port'] as $port) {
                $portNode = $doc->createElement('port');
                $portNode->setAttribute('protocol', $port['protocol']);
                $portNode->setAttribute('portid', (string) $port['portid']);

                $stateNode = $doc->createElement('state');
                $stateNode->setAttribute('state', $port['state']['state']);
                $stateNode->setAttribute('reason', $port['state']['reason'] ?? 'best-guess');

                $portNode->appendChild($stateNode);
                $portsNode->appendChild($portNode);
            }

            $hostNode->appendChild($portsNode);
        }

        $doc->appendChild($hostNode);

        return $doc->saveXML($hostNode);
    }
}
