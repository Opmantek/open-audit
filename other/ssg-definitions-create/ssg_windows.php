<?php

$dir = '/usr/local/open-audit/other/ssg-definitions/';
$files = scandir($dir);
foreach ($files as $file) {
    if (strpos($file, 'Windows') === false) {
        continue;
    }
    if (strpos($file, 'xml') !== false and strpos($file, 'org') === false) {
        #echo "Processing $file\n";
        $temp = explode('-', $file);
        $os_family = 'Windows';
        $os_version = $temp[1];

        $xml = file_get_contents($file);

        if (mb_detect_encoding($xml) !== 'UTF-8') {
            $xml = mb_convert_encoding($xml, 'UTF-8', mb_list_encodings());
        }
        $xml = iconv('UTF-8', 'UTF-8//TRANSLIT', $xml);
        $xml = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F-\x9F]/u', '', $xml);
        libxml_use_internal_errors(true);
        try {
            $xml = @simplexml_load_string($xml);
        } catch (Exception $e) {
            foreach (libxml_get_errors() as $error) {
                echo "Could not convert file $file XML into valid object.\n";
            }
            return false;
        }

        // $rule = json_encode($xml->AccountPolicyRule->Rule[0]);
        // $rule = json_decode($rule);

        // echo json_encode($rule, JSON_PRETTY_PRINT) . "\n\n";
        foreach ($xml as $key => $value) {
            foreach ($xml->{$key}->Rule as $rule) {
                $rule = json_encode($rule);
                $rule = json_decode($rule);



                $explode = explode('<', $rule->Description);
                foreach ($explode as $exp) {
                    $exp2 = explode('>', $exp);
                    if ($exp2[0] === 'VulnDiscussion' and !empty($exp2[1])) {
                        $description = $exp2[1];
                        $description = str_replace("\r\n", "<br>", $description);
                        $description = str_replace("\n", "<br>", $description);
                        $remediation_name = $description;
                    }
                }

                $remediation = '';
                $remediation = $rule->RawString;
                $remediation = str_replace("\r\n", "<br>", $remediation);
                $remediation = str_replace("\n", "<br>", $remediation);
                $rem = array();
                $rem['remediation'] = $remediation;
                $remediation = json_encode($rem);
                $remediation = str_replace("'", "\'", $remediation);
                $remediation = str_replace('"', '\"', $remediation);

                $name = '';
                if (!empty($rule->PolicyName)) {
                    $name = $key . ' :: ' . $rule->{'@attributes'}->id . ' :: ' . $rule->PolicyName;
                }
                if (empty($name) and !empty($rule->Name)) {
                    $name = $key . ' :: ' . $rule->{'@attributes'}->id . ' :: ' . $name = $rule->Name;
                }
                if (empty($name) and !empty($rule->Subcategory)) {
                    $name = $key . ' :: ' . $rule->{'@attributes'}->id . ' :: ' . $rule->Subcategory;
                }
                if (empty($name) and !empty($rule->{'@attributes'}->dscresource)) {
                    $explode = explode('.', $remediation_name);
                    $name = $key . ' :: ' . $rule->{'@attributes'}->id . ' :: ' . substr($explode[0] . '.', 0, 150);
                }


                echo "INSERT INTO benchmarks_policies VALUES (null, '" . str_replace("'", "\'", $rule->{'@attributes'}->id) . "', '" . str_replace("'", "\'", $name) . "','" . str_replace("'", "\'", $rule->{'@attributes'}->severity) . "', '" . $key . " :: " . str_replace("'", "\'", $rule->{'@attributes'}->title) . "','" . str_replace("'", "\'", $description) . "','" . $remediation. "', '2000-01-01 00:00:00', '', NOW(), 'system');\n\n\n\n";


                $sql = "INSERT INTO benchmarks_policies VALUES (null, ?, ?, ?, ?, ?, ?, '2000-01-01 00:00:00', '', NOW(), 'system')";
                $data = [$rule->{'@attributes'}->id, $name, $rule->{'@attributes'}->severity, $rule->{'@attributes'}->title, $rule->Description, $rule->RawString];
            }
        }
    }
}
