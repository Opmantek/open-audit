<?php
#$langFile = APPPATH . 'Views/lang/en.php';
$GLOBALS['lang'] = array();
if (empty($user->lang) or $user->lang !== 'en') {
    // $langFile = APPPATH . 'Views/lang/' . $user->lang . '.json';
    // include($langFile);

    $file = APPPATH . 'Views/lang/en.json';
    $file_json = file_get_contents($file);
    $lang = json_decode($file_json);
    if (!empty($lang)) {
        foreach ($lang as $key => $value) {
            $GLOBALS['lang']['en'][$key] = $value;
        }
    }
    asort($GLOBALS['lang']['en']);

    if (file_exists(APPPATH . 'Views/lang/' . $user->lang . '.json')) {
        $file = APPPATH . 'Views/lang/' . $user->lang . '.json';
        $file_json = file_get_contents($file);
        $lang = json_decode($file_json);
        if (!empty($lang)) {
            foreach ($lang as $key => $value) {
                $GLOBALS['lang'][$user->lang][$key] = $value;
            }
        }
        asort($GLOBALS['lang'][$user->lang]);
    }

}

if (!function_exists('__')) {
    function __($word)
    {
        $learning = false;
        $word = (string)$word;
        $instance = & get_instance();
        if ($learning === false and !empty($instance->user->lang) and $instance->user->lang === 'en') {
            return $word;
        }
        if (!file_exists(APPPATH . 'Views/lang/' . $instance->user->lang . '.json')) {
            return $word;
        }

        if ($learning) {
            $file = APPPATH . 'Views/lang/en.json';
            $file_json = file_get_contents($file);
            $lang = json_decode($file_json);
            if (!empty($lang)) {
                foreach ($lang as $key => $value) {
                    $GLOBALS['lang'][$key] = $value;
                }
            }
            $GLOBALS['lang'][hash('sha256', $word)] = $word;
            asort($GLOBALS['lang']);
            $file_contents = json_encode($GLOBALS['lang'], JSON_PRETTY_PRINT);
            $handle = @fopen($file, 'w');
            @fwrite($handle, $file_contents);
            @fclose($handle);
        }

        $key = array_search($word, $GLOBALS['lang']['en']);
        if (!empty($key) and !empty($GLOBALS['lang'][$instance->user->lang][$key])) {
            return $GLOBALS['lang'][$instance->user->lang][$key];
        }
        return $word;
    }
}
