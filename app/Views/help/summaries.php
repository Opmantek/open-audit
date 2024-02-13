<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.</p>
    <br>
    <h2>How Does it Work?</h2>
    <p>Summaries are a single query against the database with a \'group by\' command. Using this simple method we can easily create a summary for virtually any attribute.<br>
<br>
We no longer require a separate report for each \'type\' of a device. We now simply have a summary that groups by \'devices.type\' and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br>
<br>
A summary is different to a query in that a summary is designed to group items by a given attribute then provide a \'click through\' link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined "report + subreport", whereas a query is simply a single Report.<br>
<br>
Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.</p>';

$body = '<br>';
