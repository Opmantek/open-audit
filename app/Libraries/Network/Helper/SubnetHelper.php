<?php

declare(strict_types=1);

namespace App\Libraries\Network\Helper;

use Generator;
use InvalidArgumentException;
use RuntimeException;

final class SubnetHelper
{
    /**
     * Validate whether a given string is a properly formatted IPv4 or IPv6 CIDR block.
     *
     * @param string $input The network string to validate
     * @return bool bool True if the input is a valid CIDR block, false otherwise
     */
    public static function isValidCidr(string $input): bool
    {
        if (substr_count($input, '/') !== 1) {
            return false;
        }

        [$ip, $netmask] = explode('/', $input);

        if (! ctype_digit($netmask)) {
            return false;
        }

        $netmask = (int) $netmask;

        if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) !== false) {
            return ($netmask >= 0 && $netmask <= 32);
        }

        if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) !== false) {
            return ($netmask >= 0 && $netmask <= 128);
        }

        return false;
    }

    /**
     * Expand a whitespace-delimited string of IPv4/IPv6 addresses, CIDR blocks,
     * and dash ranges into individual IP addresses.
     *
     * @param string $input Whitespace-delimited input string
     * @param int $maxResults Maximum number of IPs to generate
     * @param bool $excludeNetworkBroadcast Whether to exclude network/broadcast in IPv4 CIDR
     * @return Generator<string> Yields IP addresses as strings
     * @throws InvalidArgumentException For invalid input or formats
     * @throws RuntimeException If maxResults is exceeded
     */
    public static function expand(
        string $input,
        int $maxResults = 100000,
        bool $excludeNetworkBroadcast = true
    ): Generator {
        $parts = preg_split('/\s+/', trim($input), -1, PREG_SPLIT_NO_EMPTY);
        $parts = array_map(fn(string $part) => trim($part), $parts);
        $count = 0;

        foreach ($parts as $part) {

            if (str_contains($part, '/')) {
                [$ip, $prefix] = explode('/', $part, 2);

                if (! ctype_digit($prefix)) {
                    throw new InvalidArgumentException(sprintf('Invalid CIDR prefix: "%s"', $prefix));
                }

                $prefix = (int) $prefix;

                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
                    foreach (self::expandIpv4Cidr($ip, $prefix, $excludeNetworkBroadcast, $count, $maxResults) as $ip) {
                        yield $ip;
                    }
                } elseif (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
                    foreach (self::expandIpv6Cidr($ip, $prefix, $count, $maxResults) as $ip) {
                        yield $ip;
                    }
                } else {
                    throw new InvalidArgumentException(sprintf('Invalid CIDR: "%s"', $part));
                }

                continue;
            }

            if (str_contains($part, ':')) {
                foreach (self::expandIpv6Ranges($part, $count, $maxResults) as $ip) {
                    yield $ip;
                }
            } else if (str_contains($part, '.')) {
                foreach (self::expandIpv4RangeOrSingle($part, $excludeNetworkBroadcast, $count, $maxResults) as $ip) {
                    yield $ip;
                }
            } else {
                throw new InvalidArgumentException(sprintf('Invalid input: "%s"', $part));
            }
        }
    }

    /**
     * Expand an IPv6 address containing optional dash ranges.
     *
     * @param string $input IPv6 address with optional ranges
     * @param int &$count Running total of generated results
     * @param int $max Maximum allowed results
     * @return Generator<string>
     * @throws InvalidArgumentException If format or ranges are invalid
     * @throws RuntimeException If maxResults is exceeded
     */
    private static function expandIpv6Ranges(string $input, int &$count, int $max): Generator
    {
        $hextets = self::expandIpv6ToFull($input);

        $ranges = array_map(fn($h) => self::parseHexRange($h), $hextets);

        yield from self::cartesianStream($ranges, function (array $parts) use (&$count, $max): string {
                $bin = '';

                foreach ($parts as $h) {
                    $bin .= pack('n', $h & 0xFFFF);
                }

                $ip = inet_ntop($bin);
                return self::guardYield($ip, $count, $max);
            }
        );
    }

    /**
     * Expand a compressed IPv6 address into a full 8-hextet array.
     *
     * @param string $ip IPv6 address (compressed or full)
     * @return array<int,string> Array of 8 hextet strings
     * @throws InvalidArgumentException If the IPv6 format is invalid
     */
    private static function expandIpv6ToFull(string $ip): array
    {
        if (!str_contains($ip, '::')) {
            $parts = explode(':', $ip);
        } else {
            [$left, $right] = explode('::', $ip, 2);

            $leftParts  = $left === '' ? [] : explode(':', $left);
            $rightParts = $right === '' ? [] : explode(':', $right);

            $missing = 8 - (count($leftParts) + count($rightParts));

            if ($missing < 0) {
                throw new InvalidArgumentException(sprintf('Invalid IPv6 format: "%s"', $ip));
            }

            $parts = array_merge(
                $leftParts,
                array_fill(0, $missing, '0'),
                $rightParts
            );
        }

        if (count($parts) !== 8) {
            throw new InvalidArgumentException(sprintf('Invalid IPv6 format: "%s"', $ip));
        }

        return $parts;
    }

    /**
     * Parse a single IPv6 hextet or hextet range into numeric bounds.
     *
     * @param string $value Hextet or range
     * @return array{0:int,1:int} Start and end values (inclusive)
     * @throws InvalidArgumentException If the range is invalid
     */
    private static function parseHexRange(string $value): array
    {
        if (str_contains($value, '-')) {
            [$start, $end] = explode('-', $value, 2);
        } else {
            $start = $end = $value;
        }

        $start = hexdec($start);
        $end   = hexdec($end);

        if ($start > $end || $end > 0xFFFF) {
            throw new InvalidArgumentException(sprintf('Invalid IPv6 range: "%s"', $value));
        }

        return [$start, $end];
    }

    /**
     * Generate a cartesian stream of multiple numeric ranges as a generator.
     *
     * @param array<int,array{0:int,1:int}> $ranges Array of [start, end] ranges
     * @param callable $formatter Function applied to each combination
     * @return Generator<mixed>
     */
    private static function cartesianStream(array $ranges, callable $formatter): Generator
    {
        $result = [[]];

        foreach ($ranges as $level => [$start, $end]) {
            $new = [];

            foreach ($result as $prefix) {
                for ($i = $start; $i <= $end; $i++) {
                    $new[] = array_merge($prefix, [$i]);
                }
            }

            $result = $new;
        }

        foreach ($result as $combo) {
            yield $formatter($combo);
        }
    }

    /**
     * Expand an IPv6 CIDR block into individual IP addresses.
     *
     * @param string $ip Base IPv6 address
     * @param int $prefix CIDR prefix length (0–128)
     * @param int &$count Running total of generated results
     * @param int $max Maximum allowed results
     * @return Generator<string>
     * @throws InvalidArgumentException If prefix is invalid or block too large
     * @throws RuntimeException If maxResults is exceeded
     */
    private static function expandIpv6Cidr(string $ip, int $prefix, int &$count, int $max): Generator
    {
        if ($prefix < 0 || $prefix > 128) {
            throw new InvalidArgumentException(sprintf('Invalid IPv6 prefix: "%s"', $prefix));
        }

        $base = inet_pton($ip);
        $bytes = unpack('C*', $base);

        $hostBits = 128 - $prefix;
        $total = 2 ** $hostBits;

        if ($total > $max) {
            throw new RuntimeException(sprintf('IPv6 CIDR too large: max "%s"', $max));
        }

        for ($i = 0; $i < $total; $i++) {
            $addr = $bytes;
            $carry = $i;

            for ($b = 16; $b >= 1; $b--) {
                $sum = $addr[$b] + ($carry & 0xFF);
                $addr[$b] = $sum & 0xFF;
                $carry >>= 8;

                if ($carry === 0) {
                    break;
                }
            }

            yield self::guardYield(inet_ntop(pack('C*', ...$addr)), $count, $max);
        }
    }

    /**
     * Expand an IPv4 address or IPv4 dash range into individual IPs.
     *
     * @param string $input IPv4 address or range
     * @param bool $excludeNB Whether to exclude network/broadcast addresses
     * @param int &$count Running total of generated results
     * @param int $max Maximum allowed results
     * @return Generator<string>
     * @throws RuntimeException If maxResults is exceeded
     */
    private static function expandIpv4RangeOrSingle(string $input, bool $excludeNB, int &$count, int $max): Generator
    {
        if (filter_var($input, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
            yield self::guardYield($input, $count, $max);
            return;
        }

        $octets = array_map(fn(string $octet) => trim($octet), explode('.', $input, 4));

        if (count($octets) !== 4) {
            throw new InvalidArgumentException(sprintf('Invalid IPv4 format: "%s"', $input));
        }

        $ranges = [];

        foreach ($octets as $octet) {
            if (str_contains($octet, '-')) {
                [$start, $end] = array_map(fn($v) => (int) trim($v), explode('-', $octet, 2));

                if ($start < 0 || $start > 255 || $end < 0 || $end > 255 || $start > $end) {
                    throw new InvalidArgumentException(sprintf('Invalid IPv4 range: "%s"', $octet));
                }

                $ranges[] = [$start, $end];
            } else {
                $value = (int) $octet;

                if ($value < 0 || $value > 255) {
                    throw new InvalidArgumentException(sprintf('Invalid IPv4 octet: "%s"', $octet));
                }

                $ranges[] = [$value, $value];
            }
        }

        for ($a = $ranges[0][0]; $a <= $ranges[0][1]; $a++) {
            for ($b = $ranges[1][0]; $b <= $ranges[1][1]; $b++) {
                for ($c = $ranges[2][0]; $c <= $ranges[2][1]; $c++) {
                    for ($d = $ranges[3][0]; $d <= $ranges[3][1]; $d++) {
                        if ($excludeNB && ($d === 0 || $d === 255)) {
                            continue;
                        }

                        yield self::guardYield(
                            "{$a}.{$b}.{$c}.{$d}",
                            $count,
                            $max
                        );
                    }
                }
            }
        }
    }

    /**
     * Expand an IPv4 CIDR block into individual IP addresses.
     *
     * @param string $ip Base IPv4 address
     * @param int $prefix CIDR prefix length (0–32)
     * @param bool $excludeNB Whether to exclude network/broadcast addresses
     * @param int &$count Running total of generated results
     * @param int $max Maximum allowed results
     * @return Generator<string>
     * @throws RuntimeException If maxResults is exceeded
     */
    private static function expandIpv4Cidr(string $ip, int $prefix, bool $excludeNB, int &$count, int $max): Generator
    {
        $base = ip2long($ip);
        $mask = -1 << (32 - $prefix);
        $network = $base & $mask;
        $total = 2 ** (32 - $prefix);

        $start = 0;
        $end   = $total;

        if ($excludeNB && $total > 2) {
            $start = 1;
            $end   = $total - 1;
        }

        for ($i = $start; $i < $end; $i++) {
            yield self::guardYield(long2ip($network + $i), $count, $max);
        }
    }

    /**
     * Increment the result counter and enforce the maximum result limit.
     *
     * @param string $ip The IP address to yield
     * @param int &$count Running total of generated results
     * @param int $max Maximum allowed results
     * @return string The validated IP address
     * @throws RuntimeException If maxResults is exceeded
     */
    private static function guardYield(string $ip, int &$count, int $max): string
    {
        $count++;
        if ($count > $max) {
            throw new RuntimeException(sprintf('Subnet expansion too large: max "%s"', $max));
        }
        return $ip;
    }
}
