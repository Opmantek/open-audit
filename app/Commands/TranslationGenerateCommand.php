<?php

declare(strict_types=1);

namespace App\Commands;

use App\Libraries\TranslationExtractor;
use App\Libraries\TranslationGenerator;
use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

/**
 * @example php spark translation:generate \
 *   --api http://localhost:5000 \
 *   --timeout 30 \
 *   --concurrency 4 \
 *   --languages ar \
 *   --input /usr/local/open-audit/writable/translations/default.php
 *   --output /usr/local/open-audit/writable/translations
 */
class TranslationGenerateCommand extends BaseCommand
{
    protected $group       = 'Translation';
    protected $name        = 'translation:generate';
    protected $description = 'Generates individual translation files from a file containing extracted translation strings';
    protected $options = [
        '--api' => 'The base URI in which the translation service is accessible',
        '--timeout' => 'The maximum duration of an API request',
        '--concurrency' => 'The amount of translations processed at once',
        '--languages' => 'A comma delimited list of language codes to filter by',
        '--input' => 'The input file containing extracted translation strings',
        '--output' => 'The path to output files',
    ];

    public function run(array $params): void
    {
        $api = CLI::getOption('api');
        $timeout = CLI::getOption('timeout');
        $concurrency = CLI::getOption('concurrency');
        $languages = CLI::getOption('languages') ?? '';
        $languages = array_filter(array_map('trim', explode(',', $languages)));
        $input = CLI::getOption('input');
        $output = CLI::getOption('output');

        if (! is_file($input)) {
            CLI::error('Input file does not exist. Use --input "/path/translations.php"');
            return;
        }

        $translations = require $input;

        if (! is_array($translations)) {
            CLI::error('Input file must return an array.');
            return;
        }

        $generator = new TranslationGenerator();
        $generator->setTranslations($translations);

        if (is_string($api)) {
            $generator->setBaseUri($api);
        }

        if (is_numeric($timeout)) {
            $generator->setTimeout((float) $timeout);
        }

        if (is_numeric($concurrency)) {
            $generator->setConcurrency((int) $concurrency);
        }

        if (! empty($languages)) {
            $generator->setLanguages($languages);
        }

        if (is_string($output)) {
            if (! is_dir($output) && ! mkdir($output, 0755, true)) {
                CLI::error('Output path is invalid or cannot be created.');
                return;
            }
            $generator->setOutputPath($output);
        }

        $success = $generator->generate();

        if ($success) {
            CLI::write('Translations generated successfully to ' . $generator->getOutputPath(), 'green');
        } else {
            CLI::error('Failed to write the generated translations to path ' . $generator->getOutputPath());
        }
    }
}
