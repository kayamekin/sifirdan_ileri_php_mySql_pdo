<?php

$link = "http://localhost/CURL/cookie.php";

$formbilgileri = [
    "kullaniciadi" => "ibo",
    "sifre" => "ibo",

];


$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $link);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($curl, CURLOPT_POST, TRUE);
curl_setopt($curl, CURLOPT_POSTFIELDS, $formbilgileri);
curl_setopt($curl, CURLOPT_COOKIEJAR, "JAR.txt");
curl_setopt($curl, CURLOPT_COOKIEFILE, "FILE.txt");

$sonuc = curl_exec($curl);

echo $sonuc;
curl_close($curl);
