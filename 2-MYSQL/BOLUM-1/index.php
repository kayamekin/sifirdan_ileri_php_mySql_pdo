<?php

include "ayar.php";
$sorgu  = "INSERT INTO uyeler (isim,soyisim,sehir) VALUES ('ılım','ılım','istanbul'); ";


/* 
$sorgu .= "INSERT INTO uyeler (isim,soyisim,sehir) VALUES ('ÖMER2','ŞİMŞEK2','YOZGAT'); ";
$sorgu .= "INSERT INTO uyeler (isim,soyisim,sehir) VALUES ('ÖMER3','ŞİMŞEK3','YOZGAT'); ";
$sorgu .= "INSERT INTO uyeler (isim,soyisim,sehir) VALUES ('ÖMER4','ŞİMŞEK4','YOZGAT'); ";
$sorgu .= "INSERT INTO uyeler (isim,soyisim,sehir) VALUES ('ÖMER5','ŞİMŞEK5','YOZGAT'); "; */


$ekle = mysqli_query($baglan, $sorgu);

$sonID = mysqli_insert_id($baglan);




if ($ekle) {
    echo "kayıt işlemi sağlandı";
    echo "kayıt ID DEĞERİ : " . $sonID;
} else {
    echo "kayıt sağlanamadı";

}


// işlems sonlandırma ram de yer açma siteyi hızlı çalıştırmak için
mysqli_close($baglan);
