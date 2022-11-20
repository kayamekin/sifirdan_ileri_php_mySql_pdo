<?php

$site = "http://namazvakti.com/";
$baglan = file_get_contents($site);


preg_match_all('#class="pText">(.*?)</td>#', $baglan, $isim);
preg_match_all('#class="pTime">(.*?)</td>#', $baglan, $zaman);




for ($a = 0; $a < count($isim[1]); $a++) {
    echo $isim[1][$a] . ":" . $zaman[1][$a] . "<br>";
}





/* 
echo "<pre>";
print_r($baglan);
*/
/* echo "<pre>";

print_r($zaman);
 */