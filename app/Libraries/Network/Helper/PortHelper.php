<?php

declare(strict_types=1);

namespace App\Libraries\Network\Helper;

use InvalidArgumentException;

use function array_unique;
use function array_values;
use function ctype_digit;
use function explode;
use function sprintf;
use function str_contains;
use function trim;

final class PortHelper
{
    public const NAMED_PORTS = [
        // Web
        'http'      => 80,
        'https'     => 443,
        'http-alt'  => 8080,
        'https-alt' => 8443,
        'web'       => 80,
        'websecure' => 443,

        // Remote access
        'ssh'    => 22,
        'telnet' => 23,
        'rdp'    => 3389,
        'vnc'    => 5900,

        // File transfer
        'ftp'  => 21,
        'ftps' => 990,
        'sftp' => 22,
        'tftp' => 69,

        // Mail
        'smtp'       => 25,
        'smtps'      => 465,
        'submission' => 587,
        'pop3'       => 110,
        'pop3s'      => 995,
        'imap'       => 143,
        'imaps'      => 993,

        // DNS / naming
        'dns'    => 53,
        'domain' => 53,

        // Databases
        'mysql'      => 3306,
        'postgres'   => 5432,
        'postgresql' => 5432,
        'mssql'      => 1433,
        'mongodb'    => 27017,
        'redis'      => 6379,
        'cassandra'  => 9042,

        // Messaging / middleware
        'rabbitmq'  => 5672,
        'amqp'      => 5672,
        'kafka'     => 9092,
        'zookeeper' => 2181,

        // Directory / auth
        'ldap'     => 389,
        'ldaps'    => 636,
        'kerberos' => 88,

        // Monitoring / infra
        'snmp'          => 161,
        'prometheus'    => 9090,
        'grafana'       => 3000,
        'elasticsearch' => 9200,
        'kibana'        => 5601,

        // Misc services
        'docker'     => 2375,
        'docker-tls' => 2376,
        'kubernetes' => 6443,
        'k8s'        => 6443,
        'nfs'        => 2049,
        'rpcbind'    => 111,
        'smb'        => 445,
        'netbios'    => 139,
    ];

    /**
     * Expand a comma-separated list of ports and port ranges into a flat array of integers.
     *
     * @param string $input Comma-separated list of ports and/or port ranges.
     * @return array<int> List of unique expanded port numbers.
     * @throws InvalidArgumentException If:
     *  - A port value is not numeric and no alias
     *  - A range contains invalid values
     *  - A range start is greater than its end
     *  - Any port is outside the valid range (1–65535)
     */
    public static function expand(string $input): array
    {
        $result = [];

        foreach (explode(',', $input) as $value) {
            $value = trim($value);

            if ($value === '') {
                continue;
            }

            if (str_contains($value, '-')) {
                [$start, $end] = explode('-', $value, 2);

                if (! self::isNumericPort($start) || ! self::isNumericPort($end)) {
                    throw new InvalidArgumentException(sprintf('Invalid port range: "%s"', $value));
                }

                $start = (int) $start;
                $end   = (int) $end;

                if ($start > $end) {
                    throw new InvalidArgumentException(sprintf('Invalid port range (start > end): "%s"', $value));
                }

                if (! self::isValidPortRange($start) || ! self::isValidPortRange($end)) {
                    throw new InvalidArgumentException(sprintf('Port range out of bounds (1-65535): "%s"', $value));
                }

                for ($port = $start; $port <= $end; $port++) {
                    $result[] = $port;
                }

                continue;
            }

            if (! self::isNumericPort($value) && ! self::isNamedPort($value)) {
                throw new InvalidArgumentException(sprintf('Invalid port: "%s"', $value));
            }

            if (isset(self::NAMED_PORTS[$value])) {
                $value = self::NAMED_PORTS[$value];
            }

            $port = (int) $value;

            if (! self::isValidPortRange($port)) {
                throw new InvalidArgumentException(sprintf('Port out of bounds (1-65535): "%s"', $value));
            }

            $result[] = $port;
        }

        return array_values(array_unique($result));
    }

    /**
     * Validate that a string represents a numeric port value.
     *
     * @param string $value Raw port string input.
     * @return bool True if the string is a valid numeric port representation.
     */
    public static function isNumericPort(string $value): bool
    {
        return ctype_digit($value);
    }

    /**
     * Validate that a string represents a named port value.
     *
     * @param string $name Name identifying the port.
     * @return bool True if the string is a valid port name.
     */
    public static function isNamedPort(string $name): bool
    {
        return isset(self::NAMED_PORTS[$name]);
    }

    /**
     * Validate that an integer is within the valid TCP/UDP port range, 1-65535.
     *
     * @param int $port Port number.
     * @return bool True if the port is within the valid range.
     */
    public static function isValidPortRange(int $port): bool
    {
        return $port >= 1 && $port <= 65535;
    }
}
