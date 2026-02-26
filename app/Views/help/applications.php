<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>' . __('The Applications endpoint allows you to define an application which you can then associate to a component of a device (database, website, et al), an external service or something from AWS or Azure.') . '<br>
<br>
' . __('Applications are an Enterprise only feature.') . '<br>
<br>
' . __('Applications have been revised in Open-AudIT 6.1.0 and will only improve.') . '</p>
    <br>
    <h2>' . __('How Does it Work?') . '</h2>
    <p>' . __('You can define an application and associate multiple application components. An application component consists of two "types" (devices, services on a device, databases, websites, et al) and a relationship between them.') . '</p>
    <p>' . __('On the applications list page, there is a search box. Use that to search all application components for a given component value. A server name, a database name, an AWS service name - whatever you need. The result will show you which applications use this component. This can be used for Change Management, Service Outage Notifications, etc.') . '<p>';


$body = '<br><p>' .__('Below are examples of the component types and the possible relationships between them.') . '</p>
    <p>' . __('As well as the listed component types below, we have lists for AWS and Azure services.') . '</p><br>
    <div class="row">
        <div class="col-6">
    <h3>' . __('Component Types') . '</h3>
    <p><strong>api:</strong>&nbsp;Links to <code>server_item.name</code><br>
<br><strong>api_external:</strong>&nbsp;External API<br>
<br><strong>application:</strong>&nbsp;Links to <code>software.name</code><br>
<br><strong>application_external:</strong>&nbsp;External Application<br>
<br><strong>authentication:</strong>&nbsp;Links to <code>service.name</code><br>
<br><strong>authentication_external:</strong>&nbsp;External Authentication<br>
<br><strong>certificate:</strong>&nbsp;Links to <code>certificates.id</code><br>
<br><strong>certificate_external:</strong>&nbsp;External Certificate<br>
<br><strong>client:</strong>&nbsp;Links to <code>devices.id</code><br>
<br><strong>client_external:</strong>&nbsp;External Client<br>
<br><strong>cluster:</strong>&nbsp;Links to <code>clusters.id</code><br>
<br><strong>cluster_external:</strong>&nbsp;External Cluster<br>
<br><strong>container:</strong>&nbsp;Links to <code>vm.name</code><br>
<br><strong>container_external:</strong>&nbsp;External Docker, Podman, et al.<br>
<br><strong>database:</strong>&nbsp;Links to <code>server_item.name</code><br>
<br><strong>database_external:</strong>&nbsp;External Database<br>
<br><strong>device:</strong>&nbsp;Links to <code>devices.id</code><br>
<br><strong>device_external:</strong>&nbsp;External Device<br>
<br><strong>dnsname:</strong>&nbsp;An external service<br>
<br><strong>other:</strong>&nbsp;Something else that we do not have a current type for. Add a description for these items.<br>
<br><strong>program:</strong>&nbsp;Links to <code>file.name</code>.<br>
<br><strong>program_external:</strong>&nbsp;External Program<br>
<br><strong>queue:</strong>&nbsp;Links to <code>service.name</code><br>
<br><strong>queue_external:</strong>&nbsp;External Queue<br>
<br><strong>service:</strong>&nbsp;Links to <code>service.name</code><br>
<br><strong>service_external:</strong>&nbsp;External Service<br>
<br><strong>storage:</strong>&nbsp;Links to <code>share.name</code><br>
<br><strong>storage_external:</strong>&nbsp;External Storage<br>
<br><strong>website:</strong>&nbsp;Links to <code>server_item.name</code><br>
<br><strong>website_external:</strong>&nbsp;External Website<br>
<br></p>
    </div>
    <div class="col-6">
    <h3>' . __('Relationships') . '</h3>
    <p><strong>accessed-via:</strong>&nbsp;A network. Links to <code>networks.id</code>.<br>
<br><strong>authenticates-via:</strong>&nbsp;A device running a service. Links to <code>service.name</code>.<br>
<br><strong>calls-api:</strong>&nbsp;A device running a web service. Links to <code>server_item.name</code>.<br>
<br><strong>connected-via:</strong>&nbsp;A network. Links to <code>networks.id</code><br>
<br><strong>consumes:</strong>&nbsp;An external service.<br>
<br><strong>depends-on:</strong>&nbsp;Another component of this application. Links to <code>application.name</code>.<br>
<br><strong>hosted-on:</strong>&nbsp;A VM host. Links to <code>devices.id</code>.<br>
<br><strong>publishes-to:</strong>&nbsp;An external service.<br>
<br><strong>relies-on:</strong>&nbsp;A device or hosted service. Links to <code>devices.id</code> or an external service.<br>
<br><strong>runs-on:</strong>&nbsp;A device. Links to <code>devices.id</code><br>
<br><strong>used-by:</strong>&nbsp;Another component of this application. Links to <code>application.name</code>.<br>
<br><strong>uses-database:</strong>&nbsp;A database on a device or hosted service. Links to <code>server_item.name</code> or an external service.<br>
<br><strong>uses-storage:</strong>&nbsp;Storage on a device or hosted service. Links to <code>shares.name</code> or an external service.<br>
<br><strong>writes-to:</strong>&nbsp;Storage on a device or hosted service. Links to <code>share.name</code> or an external service.<br>
<br></p>
    </div></div>';
