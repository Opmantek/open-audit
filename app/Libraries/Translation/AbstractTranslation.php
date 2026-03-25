<?php

declare(strict_types=1);

namespace App\Libraries\Translation;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Pool;
use Throwable;

abstract class AbstractTranslation
{
    public const SUPPORTED_LANGUAGES = [
        'ar' => 'Arabic',
        'az' => 'Azerbaijani',
        'bg' => 'Bulgarian',
        'cs' => 'Czech',
        'da' => 'Danish',
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
        'pa' => 'Punjabi',
        'pl' => 'Polish',
        'ru' => 'Russian',
        'sq' => 'Albanian',
        'tr' => 'Turkish',
        'uk' => 'Ukrainian',
        'zh-CN' => 'Chinese'
    ];

    private string $outputPath = APPPATH . 'Views/lang';
    private string $baseUri = 'http://localhost:5003';
    private float $timeout = 30.0;
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

    public function getTimeout(): float
    {
        return $this->timeout;
    }

    public function setTimeout(float $timeout): self
    {
        $this->timeout = $timeout;

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

    abstract public function execute(): bool;

    protected function isServerRunning(Client $client): bool
    {
        try {
            $response = $client->request('GET', '/health');
            return $response->getStatusCode() === 200;
        } catch (Throwable) {
            return false;
        }
    }

    protected function buildRequests(Client $client, array $translations, string $code): array
    {
        $requests = [];
        $hashes = [];

        foreach ($translations as $hash => $text) {
            if ($text === '') {
                continue;
            }

            if (! preg_match('/[0-9A-Za-z]/', $text)) {
                $this->appendJsonl($code, $hash, $text);
                continue;
            }

            $hashes[] = $hash;

            $requests[] = function () use ($client, $text, $code, $hash) {
                return $client->getAsync('/api', [
                    'query' => [
                        'from' => 'en',
                        'to'   => $code,
                        'text' => $text,
                    ],
                    'timeout' => $this->getTimeout(),
                ]);
            };
        }

        return [$requests, $hashes];
    }

    protected function sendRequests(
        Client $client,
        array $requests,
        array $hashes,
        string $code,
        int $totalProcessedStart = 0,
        string $label = 'translating',
    ): array {
        $translations = [];
        $failed = [];
        $totalProcessed = $totalProcessedStart;
        $totalTranslations = $totalProcessedStart + count($hashes);
        $totalFailed = 0;

        $pool = new Pool($client, $requests, [
            'concurrency' => $this->getConcurrency(),
            'fulfilled' => function ($response, $index) use (&$translations, $hashes, $code, &$failed, &$totalProcessed, &$totalFailed, $totalTranslations, $label) {
                $hash = $hashes[$index];
                $totalProcessed++;
                $contents = $response->getBody()->getContents();
                $data = json_decode($contents, true);
                if (! empty($data['translation'])) {
                    $translation = $data['translation'];
                    $translations[$hash] = $translation;
                    $this->appendJsonl($code, $hash, $translation);
                } else {
                    $failed[$hash] = 'Empty or missing translation.';
                    $totalFailed++;
                    log_message('error', sprintf('Language %s failed: %s - Content %s', $code, $hash, $contents));
                }
                if ($totalFailed > 60) {
                    throw new Exception('Something is seriously wrong! Check request limit has not been reached.');
                }
                $this->printProgress('en', $code, $totalProcessed, $totalTranslations, $totalFailed, $label);
            },
            'rejected' => function ($reason, $index) use ($hashes, $code, &$failed, &$totalProcessed, &$totalFailed, $totalTranslations, $label) {
                $hash = $hashes[$index];
                $failed[$hash] = $reason->getMessage();
                $totalProcessed++;
                $totalFailed++;
                $this->printProgress('en', $code, $totalProcessed, $totalTranslations, $totalFailed, $label);
                log_message('error', sprintf('Language %s failed: %s - %s', $code, $hash, $reason->getMessage()));
            },
        ]);

        $pool->promise()->wait();

        return [$translations, $failed];
    }

    protected function getJsonlPath(string $code): string
    {
        return rtrim($this->getOutputPath(), '/') . '/' . $code . '.jsonl';
    }

    protected function loadExistingJsonl(string $code): array
    {
        $path = $this->getJsonlPath($code);

        if (! file_exists($path)) {
            return [];
        }

        $data = [];
        $handle = fopen($path, 'r');

        if ($handle === false) {
            return [];
        }

        while (($line = fgets($handle)) !== false) {
            $row = json_decode(trim($line), true);
            if (isset($row['hash'], $row['text'])) {
                $data[$row['hash']] = $row['text'];
            }
        }

        fclose($handle);

        return $data;
    }

    protected function appendJsonl(string $code, string $hash, string $text): void
    {
        $path = $this->getJsonlPath($code);

        $dir = dirname($path);
        if (! is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        $line = json_encode([
            'hash' => $hash,
            'text' => $text,
        ], JSON_UNESCAPED_UNICODE);

        file_put_contents($path, $line . PHP_EOL, FILE_APPEND | LOCK_EX);
    }

    protected function printProgress(
        string $from,
        string $to,
        int $current,
        int $total,
        int $failed = 0,
        string $label = 'translating'
    ): void {
        echo sprintf(
            "\r[%s] %s to %s: %d / %d (failed: %d)",
            $label,
            $from,
            $to,
            $current,
            $total,
            $failed
        );

        flush();
    }

    protected function outputTranslationFiles(array $translations, string $code): bool
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
