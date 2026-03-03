<?php

declare(strict_types=1);

namespace App\Commands;

use App\Libraries\TranslationExtractor;
use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

/**
 * @example php spark translation:extract --dirs "/usr/local/open-audit/app"
 */
class TranslationExtractCommand extends BaseCommand
{
    protected $group       = 'Translation';
    protected $name        = 'translation:extract';
    protected $description = 'Extracts translation strings from PHP files and outputs a PHP array file';
    protected $options = [
        '--dirs' => 'A comma separated list of directory names',
    ];

    public function run(array $params): void
    {
        $dirs = CLI::getOption('dirs') ?? '';
        $dirs = array_filter(array_map('trim', explode(',', $dirs)));

        if (empty($dirs)) {
            CLI::error('No directories specified. Use --dirs "path1,path2..."');
            return;
        }

        $extractor = new TranslationExtractor();
        $extractor->setDirectories($dirs);
        $success = $extractor->extract();

        if ($success) {
            CLI::write('Translations extracted successfully to ' . $extractor->getOutputPath(), 'green');
        } else {
            CLI::error('Failed to write the extracted translations to path ' . $extractor->getOutputPath());
        }
    }
}
