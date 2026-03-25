<?php

declare(strict_types=1);

namespace App\Libraries\Translation;

use GuzzleHttp\Client;

final class TranslationUpdater extends AbstractTranslation
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
            if (!empty($this->getLanguages()) && !in_array($code, $this->getLanguages(), true)) {
                continue;
            }

            $languageFile = rtrim($this->getOutputPath(), '/') . '/' . $code . '.php';

            if (! file_exists($languageFile)) {
                continue;
            }

            $defaultTranslations = $this->getTranslations();
            $languageTranslations = include $languageFile;
            $missingTranslations  = array_diff_key($defaultTranslations, $languageTranslations);
            $removedTranslations  = array_diff_key($languageTranslations, $defaultTranslations);

            foreach ($missingTranslations as $hash => $text) {
                if ($text === '') {
                    unset($missingTranslations[$hash]);
                }
            }

            $totalMissing = count($missingTranslations);
            $totalRemoved = count($removedTranslations);

            if ($totalMissing === 0 && $totalRemoved === 0) {
                continue;
            }

            if ($totalRemoved > 0) {
                foreach ($removedTranslations as $index => $value) {
                    unset($languageTranslations[$index]);
                }

                $this->printProgress('en', $code, $totalRemoved, $totalRemoved, 0, 'removing');
                echo PHP_EOL;
            }

            $translations = $languageTranslations;
            [$requests, $hashes] = $this->buildRequests($client, $missingTranslations, $code);
            [$newTranslations, $failedRequests] = $this->sendRequests($client, $requests, $hashes, $code, 0, 'updating');
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
