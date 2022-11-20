<?php
$link = "https://www.php.net/images/logos/php-logo.svg";
$kaydet = fopen("phplogo2.svg", "w+");

$curl = curl_init($link);
curl_setopt($curl, CURLOPT_FILE, $kaydet);
curl_exec($curl);
curl_close($curl);











?>