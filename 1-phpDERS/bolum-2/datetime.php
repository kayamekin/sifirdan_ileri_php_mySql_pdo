<?php

/* 
DATE TİME SINIF METODLARI

not: datetime sınıfını kullanarak sonuçlar elde etmek için aşağıda yer alan metodlar kullanılmalıdır.

    FORMAT: 
        Zaman çıktısının hangi formatta döndürülmesi gerektiğini belirtmek için kullanılır.

    gettimestamp: 
        zaman çıktısını UNIX formatında çıktı vermektedir.
    
    SetTimeStamp: 
        UNIX değerini istenilen formatta çıktı oalrak vermektedir.

    Modify:
        zaman damgasını belirlemek için kullanılır(x zaman önce yada x zaman sonrası gibi)
    
    settimezone :
        bölgesel zaman dilimini ayarlamak için kullanılır.


*/
$tarih = new DateTime();
$tarih -> setTimezone(
    new DateTimezone("Europe/Istanbul")
);
 $tarih-> modify("+2 year" );
echo $tarih-> format("d.m.Y H:i:s");
