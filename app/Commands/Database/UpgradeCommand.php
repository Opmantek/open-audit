<?php

declare(strict_types=1);

namespace App\Commands\Database;

use App\Libraries\TranslationCreator;
use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use Throwable;

/**
 * @example php spark database:upgrade
 */
class UpgradeCommand extends BaseCommand
{
    protected $group       = 'Database';
    protected $name        = 'database:upgrade';
    protected $description = 'Upgrade the database with any outstanding migrations.';

    public function run(array $params): void
    {
        helper('utility');
        register_workaround();

        try {
            $config = config('OpenAudit');
            $upgradeModel = model('App\Models\DatabaseModel', false);
            $currentVersion = $config->display_version;

            $upgradeModel->update();

            $upgradedVersion = $config->display_version;

            if ($currentVersion === $upgradedVersion) {
                CLI::write('Database is up to date.', 'green');
            } else {
                CLI::write(sprintf('Database has been upgraded from %s to %s.', $currentVersion, $upgradedVersion), 'green');
            }
        } catch(Throwable $error) {
            CLI::error('Error while upgrading database: ' . $error->getMessage() . PHP_EOL . $error->getTraceAsString());
        } finally {
            deregister_workaround();
        }
    }
}
