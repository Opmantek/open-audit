<?php

declare(strict_types=1);

namespace App\Commands;

use App\Libraries\TranslationExtractor;
use App\Libraries\TranslationGenerator;
use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

/**
 * @example php spark translation:generate
 */
class TranslationGenerateCommand extends BaseCommand
{
    protected $group       = 'Translation';
    protected $name        = 'translation:generate';
    protected $description = 'Generates individual translation files from a file containing extracted translation strings';

    public function run(array $params): void
    {
        $generator = new TranslationGenerator();
        $success = $generator->generate();

        if ($success) {
            CLI::write('Translation files generated successfully', 'green');
        } else {
            CLI::error('Translation API is not accessible');
        }
    }
}
