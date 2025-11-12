<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>' . __('News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!') . '</p>

<br>
<h2>' . __('Notes') . '</h2>

<p>' . __('News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.') . '</p>

<p>' . __('In order to use this functionality, it must be enabled in the configuration - click') . ' <a href="' . url_to('configurationCollection') . '?configuration.name=feature_news">' . __('here') . '</a>.</p>

<p>' . __('Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.') . '</p>';

$body = '
<h2>' . __('What do we send?') . '</h2>

<p>' . __('We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.') . '</p>

<br>
<h2>' . __('Data') . '</h2>

<p>' . __('Because we try to be as transparent as possible, here is your actual data that we send.') . '</p>

<pre>' . json_encode(createNewsData(), JSON_PRETTY_PRINT) . '

<br>';
