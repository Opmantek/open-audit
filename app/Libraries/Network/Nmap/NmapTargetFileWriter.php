<?php

declare(strict_types=1);

namespace App\Libraries\Network\Nmap;

use App\Libraries\Network\Helper\SubnetHelper;
use RuntimeException;

use function array_flip;
use function fclose;
use function fopen;
use function fwrite;
use function preg_split;
use function sprintf;
use function trim;

use const PHP_EOL;
use const PREG_SPLIT_NO_EMPTY;

final class NmapTargetFileWriter
{
    /**
     * Write expanded targets to a file in a format compatible with Nmap's -iL input.
     *
     * This method expands the configured target specification (IP addresses and/or CIDR ranges)
     * using {@see SubnetHelper::expand()} and writes each resulting IP address to the
     * given file, one per line.
     *
     * Any hosts listed in {@see NmapOptions::$excludeHosts} are filtered out during writing.
     * The exclusion list is treated as a whitespace-delimited set of literal IP addresses.
     *
     * @param NmapOptions $options The Nmap options containing targets and exclusions.
     * @param string $filename Path to the output file to be created or overwritten.
     * @throws RuntimeException If no targets are defined or the file cannot be opened for writing.
     */
    public function write(NmapOptions $options, string $filename): void
    {
        if ($options->targets === null) {
            throw new RuntimeException('No targets defined');
        }

        $handle = fopen($filename, 'w');

        if ($handle === false) {
            throw new RuntimeException(sprintf('Unable to open file %s', $filename));
        }

        $excluded = [];

        if ($options->excludeHosts !== null) {
            $excluded = array_flip(
                preg_split('/\s+/', trim($options->excludeHosts), -1, PREG_SPLIT_NO_EMPTY)
            );
        }

        foreach (SubnetHelper::expand($options->targets) as $ip) {
            if (isset($excluded[$ip])) {
                continue;
            }

            fwrite($handle, $ip . PHP_EOL);
        }

        fclose($handle);
    }
}
