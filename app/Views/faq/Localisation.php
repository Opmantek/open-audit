<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$title = __('Localisation');

$intro = '<p>Open-AudIT can show in one of several languages. How you can improve this?</p>';

$body = '
<p>Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translation are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?<br><br></p>

<h2>Option #1 - Change the data</h2>

<p>The data stored in the database is not showin in the application translated. We leave the data as it is. However, there is nothign to stop you, the user, changing the name (for example) of an item in the database to your language.<br><br></p>

<h2>Option #2 - Change the translation file</h2>

<p>As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and fine the text to be changed. Maybe it doesn\'t exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect (you <i>might</i> need to force refresh your browser).<br><br></p>
<p>
    File locations:<br>
    <ul>
        <li>Windows - c:\xampp\open-audit\app\Views\lang</li>
        <li>Linux - /usr/local/open-audit/app/Views/lang</li>
    </ul>
    <br>
</p>

<p>
    Example text (from de.inc).<br><br>
    <code>$GLOBALS["lang"]["A Google Maps API Key is required for this function."] = "<span style=\'color: blue;\'>Google Maps API Für diese Funktion ist der Schlüssel erforderlich.</span>";</code><br><br>
    You should only change the second sentence of text, the <span style="color: blue;">blue</span> text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.<br><br>
</p>

<h2>But I don\'t want to have to change the language file every time I update!</h2>

<p>Great, then <i>you</i> can help - send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you don\'t need to worry about updating it for every release!<br><br>
<br><br></p>
';
