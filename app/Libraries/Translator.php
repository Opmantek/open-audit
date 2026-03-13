<?php

declare(strict_types=1);

namespace App\Libraries;

final class Translator
{
    public const DEFAULT_LANGUAGE = 'en';

    private static string $language = self::DEFAULT_LANGUAGE;
    private static array $translations = [];
    private static array $map = [];

    public static function getLanguage(): string
    {
        return self::$language;
    }

    public static function setLanguage(string $language): void
    {
        if ($language === self::$language) {
            return;
        }

        self::$language = $language;
        self::loadTranslations();
    }

    public static function translate($text): string
    {
        $text = (string) $text;

        if (self::$language === self::DEFAULT_LANGUAGE) {
            return $text;
        }

        $hash = self::$map[$text] ?? null;

        if ($hash === null) {
            return $text;
        }

        $translation = self::$translations[$hash] ?? null;

        return $translation ?? $text;
    }

    private static function loadTranslations(): void
    {
        $defaultFile = APPPATH . 'Views/lang/default.php';
        $map = [];

        if (file_exists($defaultFile)) {
            $defaultTranslations = include $defaultFile;
            $map = array_flip($defaultTranslations);
        }

        $translationsFile = APPPATH . 'Views/lang/' . self::$language . '.php';
        $translations = [];

        if (file_exists($translationsFile)) {
            $translations = include $translationsFile;
        }

        $overridesFile = APPPATH . 'Views/lang/' . self::$language . '_overrides.php';

        if (file_exists($overridesFile)) {
            $overrides = include $overridesFile;
            $translations = array_merge($translations, $overrides);
        }

        self::$translations = $translations;
        self::$map = $map;
    }
}
