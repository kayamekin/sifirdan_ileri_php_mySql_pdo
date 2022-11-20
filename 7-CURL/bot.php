<?php

$curl = curl_init();
curl_setopt($curl , CURLOPT_URL, "https://www.ibrahimcevruk.com/");
curl_setopt($curl, CURLOPT_REFERER, "https://www.google.com.tr");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
$sonuc = curl_exec($curl);


echo $sonuc;

curl_close($curl);

?>