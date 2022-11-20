<?php

function baglan($adres)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $adres);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
    $sonuc = curl_exec($curl);
    curl_close($curl);
    return $sonuc;
}


$baglan = baglan("https://www.ibrahimcevruk.com/");



preg_match("#<title>(.*?)</title>#", $baglan, $title);

/* echo "<pre>";
print_r($title); */
echo $title[1];