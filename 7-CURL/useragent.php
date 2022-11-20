<?php


$curl   = curl_init();


curl_setopt($curl , CURLOPT_URL, "https://www.ibrahimcevruk.com/");
curl_setopt($curl , CURLOPT_REFERER, "https://www.google.com/");
curl_setopt($curl , CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
$sonuc = curl_exec($curl);


echo $sonuc;

curl_close($curl);














?>