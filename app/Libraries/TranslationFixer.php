<?php

declare(strict_types=1);

namespace App\Libraries;

final class TranslationFixer extends AbstractTranslator
{
    public function execute(): bool
    {
        foreach (self::SUPPORTED_LANGUAGES as $code => $language) {
            $languageFile = APPPATH . 'Views/lang/' . $code . '.php';

            if (! file_exists($languageFile)) {
                continue;
            }

            $languageTranslations = include $languageFile;
            $translations = $languageTranslations;

            foreach ($languageTranslations as $hash => $text) {
                if ($text === '') {
                    continue;
                }

                if (! preg_match('/[0-9A-Za-z]/', $text)) {
                    $translations[$hash] = $text;
                    continue;
                }

                $text = $this->removeRepeatedWords($text);
                $text = $this->normalizeFixedWords($text);

                $translations[$hash] = $text;
            }

            ksort($translations, SORT_NATURAL);

            $success = $this->outputTranslationFiles($translations, $code);
        }

        return true;
    }
}
