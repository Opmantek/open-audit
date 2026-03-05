<?php

declare(strict_types=1);

namespace App\Commands;

use App\Libraries\TranslationCreator;
use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

/**
 * @example php spark translation:add <text>
 */
class TranslationAddCommand extends BaseCommand
{
    protected $group       = 'Translation';
    protected $name        = 'translation:add';
    protected $description = 'Adds an individual translatable string to the default translation file';
    protected $arguments = [
        'text' => 'The text to be translated',
    ];

    public function run(array $params): void
    {
        $text = $params['text'] ?? '';

        if (trim($text) === '') {
            CLI::error('Input text cannot be empty');
            return;
        }

        $creator = new TranslationCreator();
        $success = $creator->add($text);

        if ($success) {
            CLI::write('Translation added successfully', 'green');
        } else {
            CLI::error('Translation already exists');
        }
    }
}
