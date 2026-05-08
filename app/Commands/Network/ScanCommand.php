<?php

declare(strict_types=1);

namespace App\Commands\Network;

use App\Libraries\Network\Nmap\NmapOptions;
use App\Libraries\Network\Nmap\NmapOptionsParser;
use App\Libraries\Network\Scan\ListScan;
use App\Libraries\Network\Scan\PingScan;
use App\Libraries\Network\Scan\TcpScan;
use App\Libraries\Network\Scan\UdpScan;
use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use InvalidArgumentException;
use Throwable;

/**
 * @example php spark network:scan
 */
class ScanCommand extends BaseCommand
{
    protected $group       = 'Network';
    protected $name        = 'network:scan';
    protected $description = 'Enter description here.';

    public function run(array $params): void
    {
        helper('utility');
        helper('discoveries');

        register_workaround();

        /**
         * ListScan: php spark network:scan --no-header -n -sL -oX - 127.0.0.1/24
         * PingScan: php spark network:scan --no-header -n -sP -oX - 127.0.0.1/24
         * TcpScan:  php spark network:scan --no-header -n -sT -p 22,80,443,8080 -oX - 127.0.0.1/32
         * UdpScan:  php spark network:scan --no-header -n -sU -p 53,123,161 -oX - 127.0.0.1/32
         */
        try {
            $optionsParser = new NmapOptionsParser();
            $options = $optionsParser->parse($_SERVER['argv'] ?? []);

            if ($options->targets === $this->name) {
                throw new InvalidArgumentException('You must provide a target network or IP to scan.');
            }

            $scan = match ($options->scanType) {
                NmapOptions::SCAN_TYPE_TCP_CON,
                NmapOptions::SCAN_TYPE_TCP_SYN,
                NmapOptions::SCAN_TYPE_TCP_ACK,
                NmapOptions::SCAN_TYPE_TCP_FIN,
                NmapOptions::SCAN_TYPE_TCP_WIN => new TcpScan($options),
                NmapOptions::SCAN_TYPE_UDP     => new UdpScan($options),
                NmapOptions::SCAN_TYPE_LIST    => new ListScan($options),
                NmapOptions::SCAN_TYPE_PING    => new PingScan($options),
                default => null
            };

            if ($scan === null) {
                throw new InvalidArgumentException(sprintf(
                    'Scan type %s is not supported. Install Nmap for advanced options.', $options->scanType
                ));
            }

            // @todo Output header, footer and summary result as XML?

            $scan->start(function (string $type, string $buffer) {
                CLI::write($buffer);
            });

        } catch(Throwable $error) {
            CLI::error('Error while scanning network: ' . $error->getMessage());
        } finally {
            deregister_workaround();
        }
    }
}
