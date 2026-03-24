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

    /**
     * Ensure certain words have the correct casing.
     */
    protected function normalizeFixedWords(string $text): string
    {
        // A mapping of lowercase words to their correctly cased versions
        $criteria = [
            'open-audit' => 'Open-AudIT',
            'firstwave'  => 'FirstWave',
        ];

        // Split the input text into individual words based on spaces
        $words = explode(' ', $text);
        // Result array to hold processed words
        $result = [];

        foreach ($words as $word) {
            // Convert the current word to lowercase for comparison
            $lowerWord = mb_strtolower($word);
            // Check if the lowercase version matches any key in the criteria array
            // Use the correctly cased word if found, otherwise original
            $result[] = $criteria[$lowerWord] ?? $word;
        }

        // Join the processed words back into a string separated by spaces
        return implode(' ', $result);
    }

    /**
     * Removes consecutive duplicated words from the input text.
     *
     * Before: This is a test test string string, with with repeated repeated words words.
     * After: This is a test string, with repeated words.
     */
    public function removeRepeatedWords(string $text): string {
        // List of punctuation characters to recognise
        $punctuations = [',', '.', '!', '?', ';', ':'];
        // Split the input text into words based on spaces
        $words = explode(' ', $text);
        // Result array to hold processed words
        $result = [];
        // Keeps track of the previous word in lowercase
        $prevWordKey = null;
        // Stores any punctuation suffixed with the previous word
        $prevPunctuation = '';

        foreach ($words as $word) {
            // Convert the current word to lowercase for comparison
            $lowerWord = mb_strtolower($word);
            // The last character of the current word
            $lastChar = mb_substr($word, -1);
            $punctuation = '';

            // If the last character is a punctuation
            if (in_array($lastChar, $punctuations)) {
                // Store the punctuation separately
                $punctuation = $lastChar;
                // Remove punctuation from the core word for comparison
                $coreWord = mb_substr($word, 0, -1);
                $coreWordLower = mb_strtolower($coreWord);
            } else {
                // No punctuation at the end, just use the lowercase word
                $coreWordLower = $lowerWord;
            }

            // If the current core word is the same as the previous one, skip adding it
            if ($coreWordLower === $prevWordKey) {
                // Save the punctuation for potential appending later
                $prevPunctuation = $punctuation;
                continue;
            }

            // If there was punctuation attached to the previous word,
            // ensure the last word in result ends with that punctuation
            if ($prevPunctuation !== '') {
                // Index of last added word
                $lastIndex = count($result) - 1;
                // The last character of the last word in result
                $lastResultLastChar = mb_substr($result[$lastIndex], -1);
                // Append punctuation if it's not already there
                if ($lastResultLastChar !== $prevPunctuation) {
                    $result[$lastIndex] .= $prevPunctuation;
                }
                // Reset the previous punctuation tracker
                $prevPunctuation = '';
            }

            // Update previous word key for next iteration
            $prevWordKey = $coreWordLower;
            // Add the current word to the result array
            $result[] = $word;
        }

        // After iterating, check if there's leftover punctuation to append
        if ($prevPunctuation !== '') {
            // Index of last added word
            $lastIndex = count($result) - 1;
            // The last character of the last word in result
            $lastResultLastChar = mb_substr($result[$lastIndex], -1);
            // Append punctuation if it's not already there
            if ($lastResultLastChar !== $prevPunctuation) {
                $result[$lastIndex] .= $prevPunctuation;
            }
        }

        // Join the processed words into a string
        $resultText = implode(' ', $result);
        // The last character of the result text
        $resultTextLastChar = mb_substr($resultText, -1);
        // The last character of the original input text
        $textLastChar = mb_substr($text, -1);

        // If the result ends with punctuation but the original didn't, remove it
        if (in_array($resultTextLastChar, $punctuations) && !in_array($textLastChar, $punctuations)) {
            $resultText = mb_substr($resultText, 0, -1);
        }

        // Return the cleaned-up text with repeated words removed
        return $resultText;
    }
}
