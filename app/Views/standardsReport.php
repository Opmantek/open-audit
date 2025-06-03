<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/lang.php';

echo __('Edited By') . $resource->edited_by . '<br>';
echo '<pre>' . json_encode($resource) . '</pre>';
echo '<pre>' . json_encode($orgs) . '</pre>';
?>

