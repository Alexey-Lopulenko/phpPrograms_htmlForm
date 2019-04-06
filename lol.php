<?php
//include_once ('');
include_once ('curl_guery.php');
//include_once ('');
$html = curl_get('https://www.php.net/');
echo $html;
?>