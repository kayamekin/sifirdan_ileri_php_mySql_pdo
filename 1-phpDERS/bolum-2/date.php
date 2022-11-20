<?php

/* 
DATE ZAMAN İŞLEMELRİ

PHP'de zaman işlemleri date() fonksiyonu ile yapılmaktadır.
Date() fonksiyonu o anki zaman değerini gün ay yıl dakika ve saniye cinsinden vermektedir. bu fonksiyon ile istenilen formatta ve sırada çıktı almak mümkündür. fonksiyon iki parametre almaktadır. ilk parametrede zaman biçimi belirtilir.ikinci parametrede de unıx zaman değeri belirtilir. bu değer boş bırakıldığında o anki zaman değeri otomatik olarak tanımlanacaktır.


*/
// saat bilgisini kendi bölgene uyarlama..
echo date_default_timezone_set("Europe/
istanbul");

// uzun saat tarih yapımı
$gun = date("d");
$ay = date("m");
$yil = date("Y");
$saat = date("h:i:s");

echo $gun . "/" . $ay ."/". $yil . "-" . $saat;

echo "<br>" ;//------------

echo "saat ve tarih:  ". date("d.m.Y H:i.s");

echo "<br>";//------------

echo " sadece saat: " . date("H:i:s");

echo "<br>";//------------

// echo date_timezone_get();


?>