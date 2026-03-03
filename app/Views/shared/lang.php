<?php
// This code is run once, when this file is "included" by header.php
// The function __() below is called multiple times in templates.
$GLOBALS['lang'] = array();
$GLOBALS['lang']['en'] = array();

if (empty($user->lang)) {
    log_message('warning', 'No json language file found. English is the only available option without this file.');
}

if (!empty($user->lang) and $user->lang !== 'en') {
    if (file_exists(APPPATH . 'Views/lang/en.json')) {
        $file_json = file_get_contents(APPPATH . 'Views/lang/en.json');
        $lang = json_decode($file_json);
        if (!empty($lang)) {
            foreach ($lang as $key => $value) {
                $GLOBALS['lang']['en'][$key] = $value;
            }
        }
        asort($GLOBALS['lang']['en']);
        unset($lang, $file_json);
    } else {
        log_message('warning', 'No en.json language file found. English is the only available option without this file.');
    }

    if (file_exists(APPPATH . 'Views/lang/' . $user->lang . '.json')) {
        $file_json = file_get_contents(APPPATH . 'Views/lang/' . $user->lang . '.json');
        $lang = json_decode($file_json);
        if (!empty($lang)) {
            foreach ($lang as $key => $value) {
                $GLOBALS['lang'][$user->lang][$key] = $value;
            }
        }
        asort($GLOBALS['lang'][$user->lang]);
        unset($lang, $file_json);
    } else {
        log_message('warning', "No {$user->lang}.json language file found. English is the only available option without this file.");
    }
}

// This function is executed every time a template needs a string translation
if (!function_exists('__')) {
    function __($word): string
    {
        // Set to true to enable reading / writing the en.json file.
        // Should be done prior to each release and calling php index.php dictionary to generate all $lang.json files.
        $learning = false;
        // We need an $instance here because we're inside a function.
        // Above code (before this function) is simply included by header.php, and therefore has a $user object supplied by the call to the template.
        $instance = & get_instance();
        // Just make sure what we're working with is a string.
        $word = (string)$word;
        // If we're using english and not in learning mode, return $word.
        if ($learning === false and !empty($instance->user->lang) and $instance->user->lang === 'en') {
            return $word;
        }
        if (empty($instance->user)) {
            return $word;
        }

        // Load, update and write en.json if in learning mode.
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
        // If the $lang file doesn't exist, return $word.
        if (!file_exists(APPPATH . 'Views/lang/' . $instance->user->lang . '.json')) {
            return $word;
        }
        // Search the en.json for the corresponding array key.
        $key = array_search($word, $GLOBALS['lang']['en']);
        // Search the $lang.json for the matching key.
        if (!empty($key) and !empty($GLOBALS['lang'][$instance->user->lang][$key])) {
            return $GLOBALS['lang'][$instance->user->lang][$key];
        }
        // No matching key in $lang.json found, return $word.
        return $word;
    }
}
