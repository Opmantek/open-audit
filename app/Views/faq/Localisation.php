<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$title = __('Localisation');

$intro = '<p>' . __('Open-AudIT can show in one of several languages. How you can improve this?') . '</p>';

$body = '
<p>' . __('Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?') . '</p>

<h2>' . __('Option #1 - Change the data') . '</h2>

<p>' . __('The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.') . '<br><br></p>

<h2>' . __('Option #2 - Change the translation file') . '</h2>

<p>' . __('As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.') . '<br><br></p>
<p>
    ' . __('File') . ' ' . __('Locations') . ':<br>
    <ul>
        <li>' . __('Windows') . ' - c:\xampp\open-audit\app\Views\lang</li>
        <li>' . __('Linux') . ' - /usr/local/open-audit/app/Views/lang</li>
    </ul>
    <br>
</p>

<p>
    ' . __('Example text from') . ' de.php.<br><br>
    <code>' . __('A Google Maps API Key is required for this function.') . '</code><br><br>
    ' . __('You should only change the second sentence of text, the') . ' <span style="color: blue;">' . __('blue') . '</span> ' . __('text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.') . '<br><br>
</p>

<h2>' . __('But I do not want to have to change the language file every time I update!') . '</h2>

<p>' . __('Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!') . '</p>
';
