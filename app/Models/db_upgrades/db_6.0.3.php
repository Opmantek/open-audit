<?php

$output .= "Upgrade database to 6.0.3 commenced.\n\n";

$output .= "Upgrade database to 6.0.3 completed.\n\n";
config('Openaudit')->internal_version = 20260218;
config('Openaudit')->display_version = '6.0.3';
