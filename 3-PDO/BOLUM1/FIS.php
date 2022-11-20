<!-- FIND_IN_SET -->

<?php

include "ayar.php";

/* $ara    = $db->query("SELECT * FROM iller WHERE sira IN (2)");

$veriler = $ara->fetchAll(PDO::FETCH_ASSOC);


// :nnot:: virgüllerle ayrılanları FIND_IN_SET methodu ile alınır
// :nnot:: 2,4,6,8 i  bulur 22,33,55,66 olanı içinde 2 geçsede bulmaz
// kısıtlamalı arama yöntemidir FIND_IN_SET(1,sehir) tarzında kullanılır
// bunu yapabiliyorsun sakın unutma
// ayriyetten bak aşağıda 2 tane daha yorum satırına aldığım var
// heh onlarıda tek tek aç LIKE ile aramayı ve IN ile aramayı nası yapıyon GÖR
// LA GERİZEKALI BİRİNİ AÇIYON ÖTEKİLERİDE KAPATSANA MAL



// KARIŞIRSA UNUTRSAN BURAYA BAK ^^^^^^^^^^^^^^^`````````





echo "<pre>";
print_r($veriler);

 */


// $SQL = "SELECT * FROM uye_listesi WHERE sira IN (2) ";
// $SQL = "SELECT * FROM uye_listesi WHERE sehir LIKE '%2%' ";
$SQL = "SELECT * FROM uye_listesi WHERE FIND_IN_SET(1 , sehir) ";
$islem = $db->query($SQL)->fetchAll(PDO::FETCH_ASSOC);


echo "<pre>";
print_r($islem);








?>