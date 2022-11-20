<?php

/* 
dosya çıktısı alma

text/html - html dosyası tanımlamaktadır.
text/plain- metin belgesi tanımlamaktadır.
image/gif - gif görseli
image/jpeg - jpeg görseli
image/png - png görseli
video/mpeg - mpeg video tipi tanımlamakadır.
audio/wav - wav ses tipi tanımlamakadır.
audio/mpeg - mp3 ses tipi tanımlamakadır.
video / mov - Quictime video tipi tanımlanmaktadır.
video/quicktime-- ^^^üsttekiyle aynı^^
video/x-ms-wmv - windows Wmv video tipi
audio/x-ms-wma-- windows WMA ses tipi

video/x-msvideo -- 
ortaki>>>>>>>>>>>> avi video tipi
video/avi -- -----

application/pdf -- PDF dosya tipi
application/msword -- ms word .doc dök dosyası tanımlanmakta
application/zip zip dosyası tanımlanmaktadır.


***ÖNEMLİ NOT***

dosya çıktısını alabilmek için header() FONKSİYONUNA content-type
tanımlaması yapmak gerekmetkedir. burada tanımlanan tip ile indirilecek dosya türü belirlenmektedir.
*/

header("Content-Type: text/html; charset=utf-8");
header("Content-Type: application/msword");
header("Content-Disposition: attachment; filename=mekin.doc");
 



?>

İbrahim Çevrük!