<?php

declare(strict_types=1);

namespace App\Libraries\Network\Helper;

use Generator;
use InvalidArgumentException;

use function explode;
use function filter_var;
use function ip2long;
use function long2ip;
use function preg_split;
use function sprintf;
use function str_contains;
use function trim;

use const FILTER_VALIDATE_IP;
use const PREG_SPLIT_NO_EMPTY;

final class IpAddressHelper
{
    /**
     * Generate IPv4 addresses from a whitespace-delimited input string.
     *
     * The input may contain individual IPv4 addresses and/or CIDR notations
     * (e.g. "192.168.1.1 10.0.0.0/30"). CIDR ranges are expanded to all
     * corresponding IP addresses, including network and broadcast addresses.
     *
     * Any amount or type of whitespace (spaces, tabs, newlines) is supported
     * as a delimiter.
     *
     * @param string $input A whitespace-delimited list of IPv4 addresses and/or CIDR blocks.
     * @return Generator<string> Yields IPv4 addresses as strings.
     * @throws InvalidArgumentException If an IP address, subnet, or CIDR prefix is invalid.
     */
    public static function generateIpV4(string $input): Generator
    {
        $array = preg_split('/\s+/', trim($input), -1, PREG_SPLIT_NO_EMPTY);

        foreach ($array as $cidr) {
            if (! str_contains($cidr, '/')) {
                if (! filter_var($cidr, FILTER_VALIDATE_IP)) {
                    throw new InvalidArgumentException(sprintf('Invalid IPv4 address: "%s"', $cidr));
                }
                yield $cidr;
                continue;
            }

            [$subnet, $prefix] = explode('/', $cidr);
            $prefix            = (int) $prefix;

            if ($prefix < 0 || $prefix > 32) {
                throw new InvalidArgumentException(sprintf('Invalid CIDR prefix: "%d"', $prefix));
            }

            if (! filter_var($subnet, FILTER_VALIDATE_IP)) {
                throw new InvalidArgumentException(sprintf('Invalid subnet: "%s"', $subnet));
            }

            $subnetLong = ip2long($subnet);
            $mask       = -1 << (32 - $prefix);
            $network    = $subnetLong & $mask;
            $totalIps   = 2 ** (32 - $prefix);

            for ($i = 0; $i < $totalIps; $i++) {
                yield long2ip($network + $i);
            }
        }
    }
}
