<?php

declare(strict_types=1);

namespace App\Libraries\Network\Nmap;

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
}
