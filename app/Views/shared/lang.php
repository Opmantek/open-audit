<?php
$langFile = APPPATH . 'Views/lang/en.php';
if (!empty($user->lang)) {
    $langFile = APPPATH . 'Views/lang/' . $user->lang . '.php';
}
include($langFile);
if (!function_exists('__')) {
    function __($word)
    {
        $language_learning_mode = false;
        if (ENVIRONMENT === 'Set as \'development\' and enable .env to make work. Disabled now as we use parsing for each build.') {
            $language_learning_mode = true;
        }
        $language_file = APPPATH . 'Views/lang/en.php';
        $word = (string)$word;
        if (isset($GLOBALS['lang'][$word])) {
            // We do this because we use this output in JS and HTML
            return str_replace("'", "\'", $GLOBALS['lang'][$word]);
            return str_replace('"', '\"', $GLOBALS['lang'][$word]);
        } else {
            if ($language_learning_mode === true and !empty($word) and php_uname('s') !== 'Windows NT') {
                if (is_writable($language_file)) {
                    unset($lang_array);
                    $lang_array = file($language_file);
                    $lang_array = array_unique($lang_array);
                    $match = '$GLOBALS["lang"]["' . $word . '"]="' . $word . "';\n";
                    if (!in_array($match, $lang_array)) {
                        $lang_array[] = $match;
                        sort($lang_array, SORT_NATURAL | SORT_FLAG_CASE);
                        for ($i = 0; $i < count($lang_array); $i++) {
                            if ($lang_array[$i] === '') {
                                unset($lang_array[$i]);
                            }
                            if ($lang_array[$i] === '<?php' or $lang_array[$i] === "<?php\n") {
                                unset($lang_array[$i]);
                            }
                        }
                        $lang_array = array_unique($lang_array);
                        $file_contents = "<?php\n" . implode("", $lang_array);
                        $handle = @fopen($language_file, 'w');
                        @fwrite($handle, $file_contents);
                        @fclose($handle);
                    }
                } else {
                    log_message('error', "Language-Learning-Mode, but $language_file not writeable. Want to write '" . $word . "'.");
                    \Config\Services::session()->setFlashdata('error', "Language-Learning-Mode, but $language_file not writeable. Want to write '" . $word . "'.");
                    // echo "Language-Learning-Mode, but $language_file not writeable";
                    // die("Language-Learning-Mode, but $language_file not writeable");
                }
            }
            return $word;
        }
    }
}
