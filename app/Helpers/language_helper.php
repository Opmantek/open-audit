<?php

use App\Libraries\Translator;

if (! function_exists('__')) {
    function __($text): string
    {
        return Translator::translate($text);
    }
}
