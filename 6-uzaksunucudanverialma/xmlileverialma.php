<?php

$site = "https://www.tcmb.gov.tr/kurlar/today.xml";
$baglan = simplexml_load_file($site);


// dolar bilgiler

// DOLAR
$Disim = $baglan->Currency[0]->Isim;
$Dalis = $baglan->Currency[0]->ForexBuying;
$Dsatis = $baglan->Currency[0]->ForexSelling;
// EUROO
$Eisim = $baglan->Currency[3]->Isim;
$Ealis = $baglan->Currency[3]->ForexBuying;
$Esatis = $baglan->Currency[3]->ForexSelling;




echo $Disim . "<br>" . " ALIŞ : " . $Dalis . "<br>" . " satış : " . $Dsatis . "<br>";

echo "isim :" . $Eisim . "<br>" .
    " ALIŞ : " . $Ealis . "<br>" .
    " satış : " . $Dsatis;
