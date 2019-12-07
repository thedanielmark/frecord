<?php
    $xml = file_get_contents("sample.html"); // or http://path.to/file.xml
    $myXmlString = str_replace('daniel', 'harrison', $xml);
    file_put_contents("sample.html", $myXmlString);
?>