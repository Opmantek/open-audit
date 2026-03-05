<?php

declare(strict_types=1);

namespace App\Libraries;

final class TranslationCreator
{
    public function add(string $text): bool
    {
        $defaultFile = APPPATH . 'Views/lang/default.php';

        if (! file_exists($defaultFile)) {
            return false;
        }

        $defaultTranslations = include $defaultFile;
        $hash = hash('sha256', $text);

        if (isset($defaultTranslations[$hash])) {
            return false;
        }

        $defaultTranslations[$hash] = $text;
        ksort($defaultTranslations, SORT_NATURAL);

        return $this->outputTranslationFiles($defaultTranslations);
    }

    private function outputTranslationFiles(array $translations): bool
    {
        $outputPhpFile = APPPATH . 'Views/lang/default.php';
        $outputJsonFile = APPPATH . 'Views/lang/default.json';

        $json = json_encode($translations, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        $array = json_decode($json, true);
        $content = "<?php\n\nreturn " . var_export($array, true) . ";\n";

        return file_put_contents($outputJsonFile, $json) !== false &&
            file_put_contents($outputPhpFile, $content) !== false;
    }
}
