<?php

/* 
    mktime() fonksiyonu, istediğimiz bir tarihin UNIX değerini döndürmektedir. Bu fonksiyon sayesinde istenilen tarihin UNIX değerine ulaşıp işlemler yapabilirsiniz.


    Bu fonksiyon altı parametre almaktadır. Bu parametreler sırası ile saat-dakika-saniye-ay-gün ve yıl değerlerini almaktadır. fonksiyona gönderilecek olan verilerin sırası oldukça önemlidir. yanlış veri gönderilmesi durumunda istenmeyen sonuçları elde edebilirsiniz.

*/

$tarih = mktime(10,23,23,3,19,2050);

echo $tarih . "<br>";

echo date("d.m.y H:i:s",$tarih);
?>