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
                <p>';
    foreach ($dictionary->components->types as $key => $value) {
        $body .= "                    <strong>" . $key . ":</strong>&nbsp;" . $value . "<br><br>\n";
    }
    $body .= "                <p></div><div class=\"col-6\">\n";
    $body .= '            <h3>' . __('Relationships') . "</h3>
                <p>";
    foreach ($dictionary->components->relationships as $key => $value) {
        $body .= "<strong>" . $key . ":</strong>&nbsp;" . $value . "<br><br>\n";
    }
    $body .= "                <p>
            </div>
        </div>";
