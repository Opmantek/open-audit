<?php

declare(strict_types=1);

namespace App\Libraries\Translation;

use GuzzleHttp\Client;

final class TranslationGenerator extends AbstractTranslation
{
    public function execute(): bool
    {
        $client = new Client([
            'base_uri' => $this->getBaseUri(),
            'timeout'  => $this->getTimeout(),
        ]);

        if (! $this->isServerRunning($client)) {
            log_message('error', 'Translation API is not accessible.');
            return false;
        }

        foreach (self::SUPPORTED_LANGUAGES as $code => $language) {
            if (! empty($this->getLanguages()) && ! in_array($code, $this->getLanguages(), true)) {
                continue;
            }

            $defaultTranslations = $this->getTranslations();
            $existingTranslations = $this->loadExistingJsonl($code);
            $processTranslations = array_diff_key($defaultTranslations, $existingTranslations);

            $translations = $existingTranslations;
            $this->printProgress('en', $code, count($existingTranslations), count($defaultTranslations), 0, 'generating');

            [$requests, $hashes] = $this->buildRequests($client, $processTranslations, $code);
            [$newTranslations, $failedRequests] = $this->sendRequests($client, $requests, $hashes, $code, count($existingTranslations), 'generating');
            $translations += $newTranslations;

            echo PHP_EOL;

            ksort($translations, SORT_NATURAL);

            if (empty($failedRequests)) {
                $success = $this->outputTranslationFiles($translations, $code);
                if ($success) {
                    $resumeFile = $this->getJsonlPath($code);
                    if (file_exists($resumeFile)) {
                        unlink($resumeFile);
                    }
                }
            }
        }

        return true;
    }
}
