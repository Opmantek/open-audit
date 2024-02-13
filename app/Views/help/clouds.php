<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.<br>
<br>
Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.</p>
    <br>
    <h2>How Does it Work?</h2>
    <p>Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery.<br>
<br>
Clouds are a feature available to Open-AudIT Enterprise licensed customers.</p>';

$body = '<h2>How Does it Work?</h2>
<br>
<p>Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud (<a href="#" data-bs-toggle="modal" data-bs-target="#cloudAzureModal">Azure</a> or <a href="#" data-bs-toggle="modal" data-bs-target="#cloudAWSModal">AWS</a>) are required.<br>
<br>
Clouds are a feature available to Open-AudIT Enterprise licensed customers.</p>
<br>
<h2>Device Matching Rules</h2>
<br>
<p>To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudIT\'s matching rules see HERE: Matching Devices</p>
<br>




<div class="modal fade modal-xl" id="cloudAWSModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">AWS Credentials</h5>
      </div>
      <div class="modal-body">
        <p>When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key.<br><br>
        Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.</p>
        <br>
        <h5>Required AWS user permissions</h5>
        <p>The only required permission / policy name (in our testing) is AmazonEC2ReadOnlyAccess.</p>
        <br>
        <h5>Retrieving or Creating</h5>
        <p>To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.</p>
        <img class="img-fluid helpImage" src="' . base_url() . '/images/aws_01.png">
        <br><br>
        <p>On the next page you will be able to select Access Keys and see your key or create a new key.</p>
        <img class="img-fluid helpImage" src="' . base_url() . '/images/aws_02.png">
        <br><br>
      </div>
    </div>
  </div>
</div>

<div class="modal fade modal-xl" id="cloudAzureModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Azure Credentials</h5>
      </div>
      <div class="modal-body">
        <p>When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.<br><br>
        In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.</p>
        <br>
        <h5>Tennant ID</h5>
        <p>To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID (don\'t blame us for the name mismatch, that\'s how Microsoft roll!).</p>

        <br>
        <img class="img-fluid helpImage" src="' . base_url() . '/images/azure_01.png">
        <br><br>
        <img class="img-fluid helpImage" src="' . base_url() . '/images/azure_02.png">
        <br><br>

        <h5>Client ID and Secret</h5>
        <p>The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.<br><br>
            Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.</p>

        <br>
        <img class="img-fluid helpImage" src="' . base_url() . '/images/azure_03.png">
        <br><br>
        <img class="img-fluid helpImage" src="' . base_url() . '/images/azure_04.png">
        <br><br>

        <p>Click on the application you just created. The Application ID displayed is the Client ID.<br><br>
            To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>
            The value will be populated for you - this is the Client Secret.</p>

        <br>
        <img class="img-fluid helpImage" src="' . base_url() . '/images/azure_05.png">
        <br><br>
        <img class="img-fluid helpImage" src="' . base_url() . '/images/azure_06.png">
        <br><br>

        <p>Now we need to provide the Azure Active Directory application access to your subscription.<br><br>
            Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>
            Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>
            Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.</p>

        <br>
        <img class="img-fluid helpImage" src="' . base_url() . '/images/azure_07.png">
        <br><br>


        <h5>Subscription ID</h5>
        <p>Now for the Subscription ID, click All Services, Subscriptions and copy it.</p>

        <br>
        <img class="img-fluid helpImage" src="' . base_url() . '/images/azure_08.png">
        <br><br>
        <img class="img-fluid helpImage" src="' . base_url() . '/images/azure_09.png">
        <br><br>

      </div>
    </div>
  </div>
</div>
';
