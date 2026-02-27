<?php
#$langFile = APPPATH . 'Views/lang/en.php';
if (!empty($user->lang) and file_exists(APPPATH . 'Views/lang/' . $user->lang . '.php')) {
    $langFile = APPPATH . 'Views/lang/' . $user->lang . '.php';
    include($langFile);
}

if (!function_exists('__')) {
    function __($word)
    {
        // $file = APPPATH . 'Views/lang/en.json';
        // $file_json = file_get_contents($file);
        // $lang = json_decode($file_json);
        // if (!empty($lang)) {
        //     foreach ($lang as $key => $value) {
        //         $GLOBALS['lang'][$key] = $value;
        //     }
        // }

        $word = (string)$word;

        // $GLOBALS['lang'][hash('sha256', $word)] = $word;
        // asort($GLOBALS['lang']);
        // $file_contents = json_encode($GLOBALS['lang'], JSON_PRETTY_PRINT);
        // $handle = @fopen($file, 'w');
        // @fwrite($handle, $file_contents);
        // @fclose($handle);

        if (isset($GLOBALS['lang'][$word])) {
            // We do this because we use this output in JS and HTML
            $word = str_replace("'", "\'", $GLOBALS['lang'][$word]);
            $word =str_replace('"', '\"', $GLOBALS['lang'][$word]);
        }
        return $word;
    }
}
