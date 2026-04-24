<?php

declare(strict_types=1);

namespace App\Commands\Network;

use App\Libraries\Network\Nmap\NmapOptionsParser;
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

        try {
            $optionsParser = new NmapOptionsParser();
            $options = $optionsParser->parse($_SERVER['argv'] ?? []);

            if ($options->targets === $this->name) {
                throw new InvalidArgumentException('You must provide a target network or IP to scan.');
            }

            log_message('info', 'Options: ' . print_r($options, true));

            CLI::write(print_r($options, true), 'green');

        } catch(Throwable $error) {
            CLI::error('Error while scanning network: ' . $error->getMessage() . PHP_EOL . $error->getTraceAsString());
        } finally {
            deregister_workaround();
        }
    }
}
