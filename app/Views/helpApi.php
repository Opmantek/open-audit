<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h6 style="padding-top:10px;"><span class="fa-solid fa-arrows-spin oa-icon"></span><?= __('The Open-AudIT API') ?></h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8 offset-2">

<h2>Introduction</h2>
<p>Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.</p>

<br>
<h2>Open-AudIT's API</h2>
<p>Open-AudIT's API is base upon <a href="http://jsonapi.org" target="_blank">http://jsonapi.org</a> with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).</p>

<br>
<h2>Access Model</h2>
<p>The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:<br>
<code><?= $meta->baseurl ?>index.php/logon</code></p>

<br>
<h1>Collections</h1>
<p>All collections URLs are of the format <code><?= $meta->baseurl ?>index.php/{collection}</code></p>

<br>
<h2>API Routes</h2>
<div class="table-wrap">
    <table class="table">
        <thead>
            <tr>
                <th>Request Method</th>
                <th>ID</th>
                <th>Action</th>
                <th>Resulting Function</th>
                <th>Permission Required</th>
                <th>URL Example</th>
                <th>Notes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>POST</td>
                <td>n</td>
                <td><br/></td>
                <td>create</td>
                <td>{collection}::create</td>
                <td>/{collection}</td>
                <td>Insert a new {collection} entry.</td>
            </tr>
            <tr>
                <td>GET</td>
                <td>y</td>
                <td><br/></td>
                <td>read</td>
                <td>{collection}::read</td>
                <td>/{collection}/{id}</td>
                <td>Returns a {collection} details.</td>
            </tr>
            <tr>
                <td>PATCH</td>
                <td>y</td>
                <td><br/></td>
                <td>update</td>
                <td>{collection}::update</td>
                <td>/{collection}/{id}</td>
                <td>Update an attribute of a {collection} entry.</td>
            </tr>
            <tr>
                <td>DELETE</td>
                <td>y</td>
                <td><br/></td>
                <td>delete</td>
                <td>{collection}::delete</td>
                <td>/{collection}/{id}</td>
                <td>Delete a {collection} entry.</td>
            </tr>
            <tr>
                <td>GET</td>
                <td>n</td>
                <td><br/></td>
                <td>collection</td>
                <td>{collection}::read</td>
                <td>/{collection}</td>
                <td>Returns a list of {collection}.</td>
            </tr>
        </tbody>
    </table>
</div>

<br>
<h2>Web Application Routes</h2>
<div class="table-wrap">
    <table class="table">
        <thead>
            <tr>
                <th>
                    <div>Request Method</div>
                </th>
                <th>
                    <div>ID</div>
                </th>
                <th>
                    <div>Action</div>
                </th>
                <th>
                    <div>Resulting Function</div>
                </th>
                <th>Permission Required</th>
                <th>
                    <div>URL Example</div>
                </th>
                <th>
                    <div>Notes</div>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>GET</td>
                <td>n</td>
                <td>create</td>
                <td>create_form</td>
                <td>{collection}::create</td>
                <td>/{collection}/create</td>
                <td>Displays a standard web form for submission to POST /{collection}.</td>
            </tr>
            <tr>
                <td>GET</td>
                <td>n</td>
                <td>help</td>
                <td>help</td>
                <td>(collection)::read</td>
                <td>/{collection}/help</td>
                <td>Documentation about a particular collection.</td>
            </tr>
            <tr>
                <td>GET</td>
                <td>n</td>
                <td>import</td>
                <td>import_form</td>
                <td>{collection}::create</td>
                <td>/{collection}/import</td>
                <td>Displays a standard web form for submission to POST /{collection}/import.</td>
            </tr>
            <tr>
                <td>POST</td>
                <td>n</td>
                <td>import</td>
                <td>import</td>
                <td><span>{collection}::create</span></td>
                <td>/{collection}/import</td>
                <td>Import multiple {collection} using a CSV.</td>
            </tr>
            <tr>
                <td>GET</td>
                <td>y</td>
                <td>execute</td>
                <td>execute</td>
                <td>(collection)::see below</td>
                <td>/{collection}/{id}/execute</td>
                <td>Some collections can be executed - queries, etc - see below.</td>
            </tr>
        </tbody>
    </table>
</div>

<br>
<p><em><strong>Execute</strong></em> permissions required per endpoint</p>
<div class="table-wrap">
    <table class="table">
        <thead>
            <tr>
                <th>Endpoint</th>
                <th>Permission</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>baselines</td>
                <td>read</td>
            </tr>
            <tr>
                <td>clouds</td>
                <td>read</td>
            </tr>
            <tr>
                <td>dashboards</td>
                <td>read</td>
            </tr>
            <tr>
                <td>database</td>
                <td>update</td>
            </tr>
            <tr>
                <td>discovery</td>
                <td>update</td>
            </tr>
            <tr>
                <td>groups</td>
                <td>read</td>
            </tr>
            <tr>
                <td>queries</td>
                <td>read</td>
            </tr>
            <tr>
                <td>summaries</td>
                <td>read</td>
            </tr>
            <tr>
                <td>tasks</td>
                <td>read</td>
            </tr>
        </tbody>
    </table>
</div>


<br>
<h2>POSTing data</h2>
<p>To create a resource, you should POST the required data.</p>
<p>When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.</p>
<p>The format of your data should be in the form: <code>data[attributes][ATTRIBUTE_NAME]</code></p>

<p>You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.</p>
<p>In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format: <code>data[attributes][credentials][credentials][username]</code></p>

<p>Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.</p>
<br>
    <table class="table">
        <thead>
            <th>Collection</th>
            <th>Required Fields</th>
        </thead>
        <tbody>
<?php
$collections = response_valid_collections();
foreach ($collections as $collection) {
    if (in_array($collection, ['baselines_policies', 'baselines_results', 'components', 'database', 'discovery_log', 'integrations_log', 'integrations_rules', 'logs', 'maps', 'nmis', 'rack_devices', 'sessions', 'support', 'chart', 'help', 'reports', 'search', 'errors'])) {
        continue;
    } else {
        $title = $collection;
        $collection = str_replace(' ', '', ucwords(str_replace('_', ' ', $collection)));
        $tempModel = @model('App\\Models\\' . $collection . 'Model');
        if (!empty($tempModel)) {
            $tempDict = $tempModel->dictionary();
            $required = json_encode($tempDict->attributes->create);
            $required = str_replace('[', '', $required);
            $required = str_replace(']', '', $required);
            $required = str_replace('"', '', $required);
            $required = str_replace(',', ', ', $required);
            echo "          <tr><td>" . $title . '</td><td>' . $required . '</td></tr>' . "\n";
        } else {
            echo "          <tr><td>" . $title . '</td><td></td></tr>';
        }
    }
}
?>
        </tbody>
    </table>

<br>
<p>An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.<br>
<code>
{
  "access_token": "bbc0c85653fdc4b83d108cba7641bfcbbc77586dfb8f32d08973770a90fe",
  "type": "discoveries",
  "attributes": {
    "name": "My Test Discovery",
    "type": "subnet",
    "subnet": "192.169.1.150"
    "org_id": 1,
    "scan_options": {&lt;removed for brevity>},
    "match_options": {&lt;removed for brevity>},     
    }
  }
}
</code></p>

<br>
<h2>Format</h2>
<p>Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to &quot;json/application&quot;. You can override this by providing the format option in the URL.</p>
<p>We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that. <em><a href="http://www.getpostman.com" target="_blank">http://www.getpostman.com</a></em>.<br>
<code>format=json<br>
format=csv<br>
format=xml</code></p>

<br>
<h2>Sort</h2>
<p>To sort by a database column, use &quot;sort={attribute}&quot;. To reverse sort, insert a minus, thus &quot;sort=-{attribute}&quot;.<br>
<code>sort=[-]{attribute}</code></p>

<br>
<h2>Limit</h2>
<p>When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the 'page_size' item <a href="<?= url_to('configurationCollection') ?>?configuration.name=page_size">here</a>.<br>
<code>limit={int}</code></p>

<br>
<h2>Offset</h2>
<p>The offset is the count of devices you wish to return data from.<br>
<code>offset={int}</code></p>

<br>
<h2>Properties</h2>
<p>The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).<br>
<code>properties=devices.id,devices.name,devices.status</code><br><br>
You can also specify properties using the below format.<br>
<code>properties=[&quot;devices.id&quot;,&quot;devices.name&quot;,&quot;devices.status&quot;]</code></p>

<br>
<h2>Filter</h2>
<p>To filter by a property value, use the property name. Operators that should precede the value are !=, &gt;, &gt;=, &lt;, &lt;=, 'like' and '!like'. If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).<br>
<code>{attribute}=[operator]{value}</code></p>

<br>
<h2>Devices</h2>
<div class="table-wrap">
    <table class="table">
        <thead>
            <tr>
                <th>Type</th>
                <th>Endpoint</th>
                <th><br/></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>GET</td>
                <td><?= $meta->baseurl ?>index.php/devices</td>
                <td>Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)</td>
            </tr>
            <tr>
                <td>GET</td>
                <td>/devices/{id}</td>
                <td>Return an individual device's details.</td>
            </tr>
            <tr>
                <td>GET</td>
                <td>/components?components.type={componentName}</td>
                <td>To return all items for a component type. If you wanted all software you would use <?= $meta->baseurl ?>index.php/components/components.type=software</td>
            </tr>
            <tr>
                <td>GET</td>
                <td class="text-nowrap">/components?components.type={componentName}&amp;components.device_id={id}</td>
                <td>To return all items for a compnent type for a specific device.</td>
            </tr>
            <tr>
                <td>GET</td>
                <td>/components/{componentID}?components.type={componentName}</td>
                <td>To return a specific component item.</td>
            </tr>
        </tbody>
    </table>
</div>

<br>
<h3>Device Component Names</h3>
<div class="table-wrap">
    <table class="table">
        <thead>
            <tr>
                <th>NAME</th>
                <th>NAME</th>
                <th>NAME</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><code>audit_log<br/>bios<br/>change_log<br/>credential<br/>disk<br/>dns<br/>edit_log<br/>ip<br/>log<br/>memory<br/>module<br/>monitor<br/>motherboard</code></td>
                <td><code>netstat<br/>network<br/>optical<br/>pagefile<br/>partition<br/>print_queue<br/>processor<br/>radio<br/>route<br/>san<br/>scsi<br/>server<br/>server_item </code></td>
                <td><code>service<br/>share<br/>software<br/>software_key<br/>sound<br/>task<br/>user<br/>user_group<br/>variable<br/>video<br/>vm<br/>windows</code></td>
            </tr>
        </tbody>
    </table>
</div>

<br>
<h3>Examples</h3>
<div class="table-wrap">
    <table class="table">
        <thead>
            <tr>
                <th>Type</th>
                <th>Endpoint</th>
                <th><br/></th>
                <th><br/></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>GET</td>
                <td><?= $meta->baseurl ?>index.php/devices</td>
                <td>Retrieve all devices with the standard columns</td>
                <td><br/></td>
            </tr>
            <tr>
                <td>GET</td>
                <td>/devices/88</td>
                <td>Retrieve all details about the device with id 88.</td>
            </tr>
            <tr>
                <td>GET</td>
                <td>/devices?devices.os_group=Windows</td>
                <td>Retrieve all devices running Windows.</td>
            </tr>
            <tr>
                <td>GET</td>
                <td>/devices?devices.os_group=Windows&amp;limit=10&amp;sort=devices.hostname</td>
                <td>Retrieve the first 10 devices running Windows ordered by hostname</td>
            </tr>
            <tr>
                <td>GET</td>
                <td>/devices?properties=devices.id,devices.ip,devices.hostname,devices.domain,devices.type</td>
                <td>Retrieve the properties id, ip, hostname, domain, type from all devices</td>
            </tr>
            <tr>
                <td>GET</td>
                <td>/devices?ip.network=192.168.1.0/24&amp;properties=devices.id,devices.hostname,devices.domain,ip.ip</td>
                <td>Retrieve a list of devices in the 192.168.1.0/24 subnet</td>
            </tr>
            <tr>
                <td>GET</td>
                <td>/devices?devices.os_name=likeWindows 2008</td>
                <td>Retrieve a list of devices with OS Name like Windows 2008</td>
            </tr>
        </tbody>
    </table>



<br>
<h3>CURL Examples</h3>
Logging in<br>
<code>curl --cookie-jar cookies.txt --form password=password --form username=admin <?= $meta->baseurl ?>index.php/logon</code>
<br><br>

Creating Credentials</br>
<code>curl -X POST -b cookies.txt <?= $meta->baseurl ?>index.php/credentials -d &quot;data[attributes][name]=test_creds&amp;data[attributes][org_id]=1&amp;data[attributes][type]=ssh&amp;data[attributes][credentials][username]=my_new_user&amp;data[attributes][credentials][password]=my_new_password&quot;</code>
<br><br>

Retrieving a List of Credentials<br>
<code>curl -X GET -b cookies.txt <?= $meta->baseurl ?>index.php/credentials</code>
<br><br>

Update attributes<br>
NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).<br>
<code>curl -X PATCH -b cookies.txt -d 'data={&quot;data&quot;:{&quot;id&quot;:&quot;3&quot;,&quot;type&quot;:&quot;devices&quot;,&quot;attributes&quot;:{&quot;description&quot;:&quot;Test Description&quot;}}}' <?= $meta->baseurl ?>index.php/devices/3</code>
<br><br>


    </div>
</div>


                    </div>
                </div>
            </div>
        </main>
