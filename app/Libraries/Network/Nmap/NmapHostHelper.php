<?php

declare(strict_types=1);

namespace App\Libraries\Network\Nmap;

use DOMDocument;
use DOMException;

final class NmapHostHelper
{
    /**
     * Retrieve the state of the host (e.g., 'up', 'down', etc.).
     *
     * @param array $host The host array containing status information.
     * @param string $default The default value to return if the state is not found. Defaults to 'unknown'.
     * @return string The state of the host or the default value.
     */
    public static function getState(array $host, string $default = 'unknown'): string
    {
        return $host['status']['state'] ?? $default;
    }

    /**
     * Retrieve the reason associated with the host status.
     *
     * @param array $host The host array containing status information.
     * @param string|null $default The default value to return if the reason is not found.
     * @return string|null The reason string or the default value if not present.
     */
    public static function getReason(array $host, ?string $default = null): ?string
    {
        return $host['status']['reason'] ?? $default;
    }

    /**
     * Retrieve hostnames associated with the host.
     *
     * @param array $host The host array containing hostname information.
     * @return array A list of hostname arrays (empty array if none found).
     */
    public static function getHostnames(array $host): array
    {
        if (empty($host['hostnames']) || ! is_array($host['hostnames'])) {
            return [];
        }

        return array_is_list($host['hostnames']['hostname']) ? $host['hostnames']['hostname'] : [$host['hostnames']['hostname']];
    }

    /**
     * Retrieve all addresses or filter by type.
     *
     * This function will return all addresses or filter them based on the `addrtype`
     * (e.g., 'ipv4', 'ipv6', 'mac'). It normalizes the addresses if a single
     * address is provided as an associative array.
     *
     * @param array $host The host array containing address information.
     * @param string|null $type The optional address type to filter by (e.g., 'ipv4', 'ipv6', 'mac').
     * @return array A list of addresses (empty array if none found).
     */
    public static function getAddresses(array $host, ?string $type = null): array
    {
        if (empty($host['address']) || ! is_array($host['address'])) {
            return [];
        }

        $addresses = array_is_list($host['address']) ? $host['address'] : [$host['address']];

        if ($type !== null) {
            return array_values(array_filter($addresses, function(array $address) use ($type) {
                return isset($address['addrtype']) && $address['addrtype'] === $type;
            }));
        }

        return $addresses;
    }

    /**
     * Retrieve the first IPv4 or IPv6 address from the host.
     *
     * @param array $host The host array containing address information.
     * @return array The first IPv4 or IPv6 address or an empty array if not found.
     */
    public static function getIpAddress(array $host): array
    {
        return self::getAddresses($host, 'ipv4')[0] ?? self::getIpv6Address($host) ?? [];
    }

    /**
     * Retrieve the first IPv4 address from the host.
     *
     * @param array $host The host array containing address information.
     * @return array The first IPv4 address or an empty array if not found.
     */
    public static function getIpv4Address(array $host): array
    {
        return self::getAddresses($host, 'ipv4')[0] ?? [];
    }

    /**
     * Retrieve the first IPv6 address from the host.
     *
     * @param array $host The host array containing address information.
     * @return array The first IPv6 address or an empty array if not found.
     */
    public static function getIpv6Address(array $host): array
    {
        return self::getAddresses($host, 'ipv6')[0] ?? [];
    }

    /**
     * Retrieve the first MAC address from the host.
     *
     * @param array $host The host array containing address information.
     * @return array The first MAC address or an empty array if not found.
     */
    public static function getMacAddress(array $host): array
    {
        return self::getAddresses($host, 'mac')[0] ?? [];
    }

    /**
     * Retrieve ports from the host.
     *
     * @param array $host The host array containing port information.
     * @return array A list of ports (empty array if none found).
     */
    public static function getPorts(array $host): array
    {
        if (empty($host['ports']['port']) || ! is_array($host['ports']['port'])) {
            return [];
        }

        return array_is_list($host['ports']['port']) ? $host['ports']['port'] : [$host['ports']['port']];
    }

    /**
     * Convert a normalized host array into an XML representation.
     *
     * While this nowhere near handles all possibilities, it is a decent
     * starting point, one we are able to test and expand upon.
     *
     * @param array $host Structured host result array.
     * @return string XML string representation of the host node.
     * @throws DOMException
     */
    public static function toXml(array $host): string
    {
        $doc = new DOMDocument('1.0', 'UTF-8');
        $doc->formatOutput = false;

        $hostNode = $doc->createElement('host');

        $state = self::getState($host);

        if ($state) {
            $reason = self::getReason($host);
            $statusNode = $doc->createElement('status');
            $statusNode->setAttribute('state', $state);
            if ($reason) {
                $statusNode->setAttribute('reason', $reason);
            }

            $hostNode->appendChild($statusNode);
        }

        $addresses = self::getAddresses($host);

        foreach ($addresses as $address) {
            $addressNode = $doc->createElement('address');
            $addressNode->setAttribute('addr', $address['addr']);
            $addressNode->setAttribute('addrtype', $address['addrtype'] ?? 'ipv4');

            $hostNode->appendChild($addressNode);
        }

        $hostnames = self::getHostnames($host);

        if (! empty($hostnames)) {
            $hostnamesNode = $doc->createElement('hostnames');

            foreach ($hostnames as $hostname) {
                $hostnameNode = $doc->createElement('hostname');
                $hostnameNode->setAttribute('name', $hostname['name']);
                $hostnameNode->setAttribute('type', $hostname['type'] ?? 'PTR');

                $hostnamesNode->appendChild($hostnameNode);
            }

            $hostNode->appendChild($hostnamesNode);
        }

        $ports = self::getPorts($host);

        if (! empty($ports)) {
            $portsNode = $doc->createElement('ports');

            foreach ($ports as $port) {
                $portNode = $doc->createElement('port');
                $portNode->setAttribute('protocol', $port['protocol']);
                $portNode->setAttribute('portid', (string) $port['portid']);

                $stateNode = $doc->createElement('state');
                $stateNode->setAttribute('state', $port['state']['state']);
                $stateNode->setAttribute('reason', $port['state']['reason'] ?? 'best-guess');

                $portNode->appendChild($stateNode);

                $serviceName = getservbyport((int) $port['portid'], $port['protocol']);

                if ($serviceName !== false) {
                    $serviceNode = $doc->createElement('service');
                    $serviceNode->setAttribute('name', $serviceName);
                    $serviceNode->setAttribute('method', 'table');
                    $serviceNode->setAttribute('conf', '3');

                    $portNode->appendChild($serviceNode);
                }

                $portsNode->appendChild($portNode);
            }

            $hostNode->appendChild($portsNode);
        }

        $doc->appendChild($hostNode);

        return $doc->saveXML($hostNode);
    }
}
