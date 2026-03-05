<?php

declare(strict_types=1);

namespace App\Commands;

use App\Libraries\TranslationRemover;
use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

/**
 * @example php spark translation:remove <hash>
 */
class TranslationRemoveCommand extends BaseCommand
{
    protected $group       = 'Translation';
    protected $name        = 'translation:remove';
    protected $description = 'Removes a translation hash from the default translation file';
    protected $arguments = [
        'hash' => 'The translation hash to be removed',
    ];

    public function run(array $params): void
    {
        $hash = $params[0] ?? '';

        if (trim($hash) === '') {
            CLI::error('Input hash cannot be empty');
            return;
        }

        $creator = new TranslationRemover();
        $success = $creator->remove($hash);

        if ($success) {
            CLI::write('Translation removed successfully', 'green');
        } else {
            CLI::error('Translation hash does not exist');
        }
    }
}
