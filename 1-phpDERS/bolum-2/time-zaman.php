<?php
/* 
    time() fonksiyonu, 1 ocak 1970 yılından başlayarak saniye cinsinden değer döndürmektedir. Bu fonksiyon direkt olarak çalıştırıldığında, şuanki zaman bilgisini saniye cinsinden UNIX biçimde gösterecektir.



    TİME() fonksiyonu ekrana yazdırıldıktan sonra her sayfa yenilemesinde saniye değeri artacaktır. fonksiyondan elde edilen değer date() fonksiyonu ile birlikte kullanılmaktadır.

*/

 date_default_timezone_set("Europe/istanbul");

$bugun = time();
$yarin = $bugun + (60*60*24);
$tarih = date("d.m.Y H:i:s", $yarin);
echo $tarih;


?>