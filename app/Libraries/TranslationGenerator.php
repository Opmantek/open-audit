<?php

declare(strict_types=1);

namespace App\Libraries;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Pool;
use GuzzleHttp\Psr7\Request;

final class TranslationGenerator
{
    private string $outputPath = WRITEPATH . 'translations';
    private string $baseUri = 'http://localhost:5000';
    private int $concurrency = 4;
    private array $languages = [];
    private array $translations = [];

    public function getOutputPath(): string
    {
        return $this->outputPath;
    }

    public function setOutputPath(string $outputPath): self
    {
        $this->outputPath = $outputPath;

        return $this;
    }

    public function getBaseUri(): string
    {
        return $this->baseUri;
    }

    public function setBaseUri(string $baseUri): self
    {
        $this->baseUri = $baseUri;

        return $this;
    }

    public function getConcurrency(): int
    {
        return $this->concurrency;
    }

    public function setConcurrency(int $concurrency): self
    {
        $this->concurrency = $concurrency;

        return $this;
    }

    public function getLanguages(): array
    {
        return $this->languages;
    }

    public function setLanguages(array $languages): self
    {
        $this->languages = $languages;

        return $this;
    }

    public function getTranslations(): array
    {
        return $this->translations;
    }

    public function setTranslations(array $translations): self
    {
        $this->translations = $translations;

        return $this;
    }

    public function generate(): bool
    {
        $client = new Client([
            'base_uri' => $this->getBaseUri(),
            'timeout'  => 15,
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

        foreach ($this->getSupportedLanguages() as $code => $language) {
            if (! empty($this->languages) && ! in_array($code, $this->languages, true)) {
                continue;
            }

            $hashes = [];
            $requests = [];
            $translations = [];

            foreach ($this->getTranslations() as $hash => $text) {
                if ($text === '') {
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

            $duration = microtime(true) - $startTime;
            $count    = count($translations);
            log_message('info', "Language: {$code} - Translations: {$count} - Duration: {$duration} seconds");

            $success = $this->outputTranslationFiles($translations, $code);

            if (! $success) {
                log_message('info', "Failed to generate translation files: {$code}");
            }
        }

        return true;
    }

    public function getSupportedLanguages(): array
    {
        return [
            'ar' => 'Arabic',
            'az' => 'Azerbaijani',
            'bg' => 'Bulgarian',
            'cs' => 'Czech',
            'da' => 'Danish',
            //'dq' => 'Define Quadword',
            'de' => 'German',
            'el' => 'Greek',
            'eo' => 'Esperanto',
            'es' => 'Spanish',
            'et' => 'Estonian',
            'fi' => 'Finnish',
            'fr' => 'French',
            'ga' => 'Irish',
            'hi' => 'Hindi',
            'hu' => 'Hungarian',
            'id' => 'Indonesian',
            'it' => 'Italian',
            'ja' => 'Japanese',
            'ko' => 'Korean',
            'lt' => 'Lithuanian',
            'lv' => 'Latvian',
            'nl' => 'Dutch',
            'pb' => 'Punjabi',
            'pl' => 'Polish',
            'ru' => 'Russian',
            'sq' => 'Albanian',
            'tr' => 'Turkish',
            'uk' => 'Ukrainian',
            'zh' => 'Chinese'
        ];
    }

    private function outputTranslationFiles(array $translations, string $code): bool
    {
        $outputPath = rtrim($this->getOutputPath(), '/');

        if (! is_dir($outputPath) && ! mkdir($outputPath, 0755, true)) {
            return false;
        }

        $outputPhpFile = $outputPath . '/' . $code . '.php';
        $outputJsonFile = $outputPath . '/' . $code . '.json';

        $json = json_encode($translations, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        $array = json_decode($json, true);
        $content = "<?php\n\nreturn " . var_export($array, true) . ";\n";

        return file_put_contents($outputJsonFile, $json) !== false &&
            file_put_contents($outputPhpFile, $content) !== false;
    }
}
