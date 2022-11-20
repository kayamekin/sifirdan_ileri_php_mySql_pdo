<?php

function indir($adres)
{
    $kaydet = fopen("dizin.pdf", "w+");
    $curl = curl_init($adres);
    curl_setopt($curl, CURLOPT_FILE, $kaydet);
    $sonuc =    curl_exec($curl);
    curl_close($curl);
    return $sonuc;
}






$link = indir("https://www.phpkitap.com/wp-content/uploads/2019/08/%C4%B0%C3%87%C4%B0NDEK%C4%B0LER.pdf");


echo $link;


