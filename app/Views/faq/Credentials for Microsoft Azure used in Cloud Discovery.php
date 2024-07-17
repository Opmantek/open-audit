<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$title = __('Credentials for Microsoft Azure used in Cloud Discovery');

$intro = '<p>When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.<br><br></p>
<h2>Retrieving or Creating</h2>
<p>In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.<br></p>
<h2>Tenant ID</h2>
<p>To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID (don\'t blame me for the name mismatch, that\'s how Microsoft roll!).<br></p>
<img src="' . base_url() . 'images/faq_13.png" alt="Azure Credentials">
<p>&nbsp;<br></p>
<img src="' . base_url() . 'images/faq_14.png" alt="Azure Credentials">
<p>&nbsp;<br></p>
<h2>Client ID and Secret</h2>
<p>The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.<br>
<br>
Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.<br><br></p>
<img src="' . base_url() . 'images/faq_15.png" alt="Azure Credentials">
<p>&nbsp;<br></p>
<img src="' . base_url() . 'images/faq_16.png" alt="Azure Credentials">
<p>&nbsp;<br></p>
<p>Click on the application you just created. The Application ID displayed is the Client ID.<br>
<br>
To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br>
<br>
The value will be populated for you - this is the Client Secret.<br><br></p>
<img src="' . base_url() . 'images/faq_17.png" alt="Azure Credentials">
<p>&nbsp;<br></p>
<img src="' . base_url() . 'images/faq_18.png" alt="Azure Credentials">
<p>&nbsp;<br></p>
<p>Now we need to provide the Azure Active Directory application access to your subscription.<br>
<br>
Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br>
<br>
Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br>
<br>
Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.<br><br></p>
<img src="' . base_url() . 'images/faq_19.png" alt="Azure Credentials">
<p>&nbsp;<br></p>
<h2>Subscription ID</h2>
<p>Now for the Subscription ID, click All Services, Subscriptions and copy it.<br><br></p>
<img src="' . base_url() . 'images/faq_20.png" alt="Azure Credentials">
<p>&nbsp;<br></p>
<img src="' . base_url() . 'images/faq_21.png" alt="Azure Credentials">
<p>&nbsp;<br></p>
<h2>Using</h2>
<p>Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the "Microsoft Azure" type and paste them in. Done.<br><br></p>
<img src="' . base_url() . 'images/faq_12.png" alt="Azure Credentials">
';

$body = '';
