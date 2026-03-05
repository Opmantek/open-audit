<?php

declare(strict_types=1);

namespace App\Libraries;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Pool;
use GuzzleHttp\Psr7\Request;

final class TranslationGenerator extends AbstractTranslator
{
    public function execute(): bool
    {
        $client = new Client([
            'base_uri' => $this->getBaseUri(),
            'timeout'  => $this->getTimeout(),
        ]);

        try {
            $response = $client->request('HEAD', '/health');
            if ($response->getStatusCode() !== 200) {
                log_message('error', 'Translation API is not accessible (non-200 response). Aborting.');
                return false;
            }
        } catch (ConnectException | RequestException $error) {
            log_message('error', 'Translation API is not accessible: ' . $error->getMessage());
            return false;
        }

        foreach (self::SUPPORTED_LANGUAGES as $code => $language) {
            if (! empty($this->getLanguages()) && ! in_array($code, $this->getLanguages(), true)) {
                continue;
            }

            $hashes = [];
            $requests = [];
            $translations = $this->getTranslations();

            foreach ($this->getTranslations() as $hash => $text) {
                if ($text === '') {
                    continue;
                }

                if (! preg_match('/[0-1A-Za-z]/', $text)) {
                    continue;
                }

                $data = [
                    'q' => $text,
                    'source' => 'en',
                    'target' => $code,
                    'format' => 'html',
                ];

                $hashes[] = $hash;

                $requests[] = new Request('POST', '/translate', [
                    'Content-Type' => 'application/json',
                ], json_encode($data));
            }

            $startTime = microtime(true);

            $pool = new Pool($client, $requests, [
                'concurrency' => $this->getConcurrency(),
                'fulfilled' => function ($response, $index) use (&$translations, $hashes) {
                    $body = $response->getBody()->getContents();
                    $data = json_decode($body, true);
                    if (! empty($data['translatedText'])) {
                        $hash = $hashes[$index];
                        $translations[$hash] = $data['translatedText'];
                    }
                },
                'rejected' => function ($reason, $index) {
                    log_message('info', "Translation {$index} failed: " . $reason->getMessage());
                },
            ]);

            $promise = $pool->promise();
            $promise->wait();

            ksort($translations, SORT_NATURAL);

            $duration = microtime(true) - $startTime;
            $count    = count($translations);
            log_message('info', "Generated Language: {$code} - Translations: {$count} - Duration: {$duration} seconds");

            $success = $this->outputTranslationFiles($translations, $code);

            if (! $success) {
                log_message('info', "Failed to generate translation files: {$code}");
            }
        }

        return true;
    }
}
