<?php

declare(strict_types=1);

namespace App\Libraries;

abstract class AbstractTranslator
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
        'pb' => 'Punjabi',
        'pl' => 'Polish',
        'ru' => 'Russian',
        'sq' => 'Albanian',
        'tr' => 'Turkish',
        'uk' => 'Ukrainian',
        'zh' => 'Chinese'
    ];

    private string $outputPath = APPPATH . 'Views/lang';
    private string $baseUri = 'http://localhost:5000';
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
