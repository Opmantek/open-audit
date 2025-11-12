<?php
#$langFile = APPPATH . 'Views/lang/en.php';
if (!empty($user->lang) and file_exists(APPPATH . 'Views/lang/' . $user->lang . '.php')) {
    $langFile = APPPATH . 'Views/lang/' . $user->lang . '.php';
    include($langFile);
}

if (!function_exists('__')) {
    function __($word)
    {
        $word = (string)$word;
        if (isset($GLOBALS['lang'][$word])) {
            // We do this because we use this output in JS and HTML
            return str_replace("'", "\'", $GLOBALS['lang'][$word]);
            return str_replace('"', '\"', $GLOBALS['lang'][$word]);
        } else {
            return $word;
        }
    }
}
