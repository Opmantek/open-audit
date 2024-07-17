<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$title = __('Credentials for Amazon AWS used in Cloud Discovery');

$intro = '<p>When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key.

Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.<br>
<br>
</p>
<h2>Retrieving or Creating</h2>
<p>To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.<br><br></p>
<img src="' . base_url() . 'images/faq_09.png" alt="AWS Credentials">
<p><br>On the next page you will be able to select Access Keys and see your key or create a new key.<br><br></p>
<img src="' . base_url() . 'images/faq_10.png" alt="AWS Credentials">
<p><br><br></p>
<h2>Required AWS user permissions</h2>
<p>The only required permission / policy name (in our testing) is AmazonEC2ReadOnlyAccess.</p>
<h2>Using</h2>
<p>Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the "Amazon AWS" type and paste them in. Done.<br><br></p>
<img src="' . base_url() . 'images/faq_11.png" alt="AWS Credentials">
';

$body = '';
