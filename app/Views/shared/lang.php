<?php
// This code is run once, when this file is "included" by header.php
// The function __() below is called multiple times in templates.

$GLOBALS['lang'] = []; // Potentially keep until further refactoring, but not needed
$GLOBALS['lang']['en'] = []; // Potentially keep until further refactoring, but not needed

$GLOBALS['lang_user'] = null;
$GLOBALS['lang_default'] = null;
$GLOBALS['lang_map'] = null;

if (empty($user->lang)) {
    log_message('warning', 'No language code defined for user.');
}

if ($GLOBALS['lang_default'] === null || $GLOBALS['lang_map'] === null) {
    $GLOBALS['lang_default'] = [];
    $GLOBALS['lang_map'] = [];

    $defaultFile = APPPATH . 'Views/lang/default.php';

    if (file_exists($defaultFile)) {
        $defaultTranslations = include $defaultFile;

        $GLOBALS['lang_default'] = $defaultTranslations;
        $GLOBALS['lang_map'] = array_flip($defaultTranslations);
    }
}

if (! empty($GLOBALS['lang_default']) && ! empty($GLOBALS['lang_map']) && ! empty($user->lang)) {
    if ($user->lang !== 'en') {
        $languageFile = APPPATH . 'Views/lang/' . $user->lang . '.php';

        if (file_exists($languageFile)) {
            $languageTranslations = include $languageFile;
            $GLOBALS['lang_user'] = $languageTranslations;
        }
    }
}

if (! function_exists('__')) {
    function __($text): string
    {
        $text = (string) $text;

        if (empty($GLOBALS['lang_user'])) {
            return $text;
        }

        $hash = $GLOBALS['lang_map'][$text] ?? null;

        if ($hash === null) {
            return $text;
        }

        $translation = $GLOBALS['lang_user'][$hash] ?? null;

        return $translation ?? $text;
    }
}
