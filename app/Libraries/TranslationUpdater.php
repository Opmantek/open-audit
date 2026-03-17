<?php

declare(strict_types=1);

namespace App\Libraries;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Pool;
use GuzzleHttp\Psr7\Request;

final class TranslationUpdater extends AbstractTranslator
{
    public function execute(): bool
    {
        $client = new Client([
            'base_uri' => $this->getBaseUri(),
            'timeout'  => $this->getTimeout(),
        ]);

        try {
            $response = $client->request('GET', '/health');
            if ($response->getStatusCode() !== 200) {
                log_message('error', 'Translation API is not accessible (non-200 response). Aborting.');
                return false;
            }
        } catch (ConnectException | RequestException $error) {
            log_message('error', 'Translation API is not accessible: ' . $error->getMessage());
            return false;
        }

        log_message('info', sprintf('Performing translation update for languages: %s', implode(', ', $this->getLanguages())));

        foreach (self::SUPPORTED_LANGUAGES as $code => $language) {
            if (! empty($this->getLanguages()) && ! in_array($code, $this->getLanguages(), true)) {
                continue;
            }

            $languageFile = APPPATH . 'Views/lang/' . $code . '.php';

            if (! file_exists($languageFile)) {
                continue;
            }

            $languageTranslations = include $languageFile;
            $missingTranslations  = array_diff_key($this->getTranslations(), $languageTranslations);
            $removedTranslations  = array_diff_key($languageTranslations, $this->getTranslations());
            $totalMissing = count($missingTranslations);
            $totalRemoved = count($removedTranslations);

            if ($totalMissing === 0 && $totalRemoved === 0) {
                log_message('info', sprintf('Language %s is up to date', $code));
                continue;
            } else {
                log_message('info', sprintf('Language %s requires updating: added=%s, removed=%s', $code, $totalMissing, $totalRemoved));
            }

            foreach ($removedTranslations as $index => $value) {
                log_message('info', sprintf('Language %s removed: %s', $code, $index));
                unset($languageTranslations[$index]);
            }

            $hashes = [];
            $requests = [];
            $translations = $languageTranslations;

            foreach ($missingTranslations as $hash => $text) {
                if ($text === '') {
                    continue;
                }

                if (! preg_match('/[0-9A-Za-z]/', $text)) {
                    $translations[$hash] = $text;
                    continue;
                }

                $data = [
                    'source' => 'en',
                    'target' => $code,
                    'text' => $text,
                ];

                $hashes[] = $hash;

                $requests[] = new Request('POST', '/translate', [
                    'Content-Type' => 'application/json',
                ], json_encode($data));
            }

            $startTime = microtime(true);

            $pool = new Pool($client, $requests, [
                'concurrency' => $this->getConcurrency(),
                'fulfilled' => function ($response, $index) use (&$translations, $hashes, $code) {
                    $body = $response->getBody()->getContents();
                    $data = json_decode($body, true);
                    $hash = $hashes[$index];
                    if (! empty($data['translation'])) {
                        $text = $data['translation'];
                        $translations[$hash] = $text;
                        log_message('info', sprintf('Language %s added: %s', $code, $hash));
                    } else {
                        log_message('error', sprintf('Language %s added: %s - empty translation', $code, $hash));
                    }
                },
                'rejected' => function ($reason, $index) use ($hashes, $code) {
                    $hash = $hashes[$index];
                    log_message('error', sprintf('Language %s added: %s - %s', $code, $hash, $reason->getMessage()));
                },
            ]);

            $promise = $pool->promise();
            $promise->wait();

            ksort($translations, SORT_NATURAL);

            $duration = microtime(true) - $startTime;
            $count    = count($translations);
            log_message('info', "Updated Language: {$code} - Translations: {$count} - Duration: {$duration} seconds");

            $success = $this->outputTranslationFiles($translations, $code);

            if (! $success) {
                log_message('info', "Failed to generate translation files: {$code}");
            }
        }

        return true;
    }
}
