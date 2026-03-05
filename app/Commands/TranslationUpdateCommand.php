<?php

declare(strict_types=1);

namespace App\Commands;

use App\Libraries\TranslationGenerator;
use App\Libraries\TranslationUpdater;
use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

/**
 * @example php spark translation:update \
 *   --api http://localhost:5000 \
 *   --timeout 30 \
 *   --concurrency 4 \
 *   --languages ar,az,bg,cs,da,de,el,eo,es,et,fi,fr,ga,hi,hu,id,it,ja,ko,lt,lv,nl,pb,pl,ru,sq,tr,uk,zh \
 *   --input /usr/local/open-audit/app/Views/lang/default.php
 *   --output /usr/local/open-audit/app/Views/lang
 */
class TranslationUpdateCommand extends BaseCommand
{
    protected $group       = 'Translation';
    protected $name        = 'translation:update';
    protected $description = 'Updated individual translation files which are missing translation strings';
    protected $options = [
        '--api'         => 'The base URI in which the translation service is accessible (default=http://localhost:5000)',
        '--timeout'     => 'The maximum duration of an API request (default=30.0)',
        '--concurrency' => 'The amount of translations processed at once (default=4)',
        '--languages'   => 'A comma delimited list of language codes to filter by (default=ar,az,bg,cs,da,de,el,eo,es,et,fi,fr,ga,hi,hu,id,it,ja,ko,lt,lv,nl,pb,pl,ru,sq,tr,uk,zh)',
        '--input'       => 'The input file containing extracted translation strings (default=/usr/local/open-audit/app/Views/lang/default.php)',
        '--output'      => 'The path to output updated files (default=/usr/local/open-audit/app/Views/lang)',
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

        if ($input === null) {
            $input = APPPATH . 'Views/lang/default.php';
        }

        if (! is_file($input)) {
            CLI::error('Input file does not exist. Use --input "/usr/local/open-audit/app/Views/lang/default.php"');
            return;
        }

        $translations = require $input;

        if (! is_array($translations)) {
            CLI::error('Input file must return an array.');
            return;
        }

        $updater = new TranslationUpdater();
        $updater->setTranslations($translations);

        if (is_string($api)) {
            $updater->setBaseUri($api);
        }

        if (is_numeric($timeout)) {
            $updater->setTimeout((float) $timeout);
        }

        if (is_numeric($concurrency)) {
            $updater->setConcurrency((int) $concurrency);
        }

        if (! empty($languages)) {
            $updater->setLanguages($languages);
        }

        if (is_string($output)) {
            if (! is_dir($output) && ! mkdir($output, 0755, true)) {
                CLI::error('Output path is invalid or cannot be created.');
                return;
            }
            $updater->setOutputPath($output);
        }

        $success = $updater->execute();

        if ($success) {
            CLI::write('Translations updated successfully to ' . $updater->getOutputPath(), 'green');
        } else {
            CLI::error('Failed to write the updated translations to path ' . $updater->getOutputPath());
        }
    }
}
