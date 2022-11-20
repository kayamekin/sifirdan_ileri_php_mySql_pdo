<?php
$dosyaYolu = $_FILES["dosya"]["tmp_name"];
$dosyaTipi = $_FILES["dosya"]["type"];
$dosyaTipiAl = explode("/" , $dosyaTipi);
$dosyaUzantisi = $dosyaTipiAl["1"];
$dosyaYeniIsim = "yuklenen_".rand(0,100).".".$dosyaUzantisi;

$yukle = move_uploaded_file($dosyaYolu, "dosyalar/". $dosyaYeniIsim);


if($yukle){
    echo "dosya tamamlandı";
}else {
    echo "dosya yüklenemedi!!";
}








// $dosya = $_FILES["dosya"]["tmp_name"];
// // $isim = $_FILES["dosya"]["name"];
// $dosyatipi = $_FILES["dosya"]["type"];
// $uzanti = explode("/", $_FILES["dosya"]["type"]);
// $yeniad = "ibo_" . rand(0, 100) . "." . $uzanti["1"];



// // dosya yukleme işlemi
// // $yukle = move_uploaded_file($dosya, $isim);
// $yukle = move_uploaded_file($dosya, "dosyalar/" . $yeniad);


// if ($yukle) {
//     echo "dosya yüklendi" . "<br>";
//     echo $dosyatipi ."<br>";
//     echo "dosyanın yeni ismi : " . $yeniad;
// } else {
//     echo "dosya yükleme işlemi başarısız.";
// }








/* 
dosya yükleme işlemi
( move_uploaded_file )
fonksiyonu ile gerçekleşir


move_uploaded_file
fonksyionu 2 parametre almaktadır.
ilk parametreye tmp_name değeri yazılır.
ikinci parametreye ise dosyanın hangi isimde kayıt edileceği belirlenir.

*/

/* 
yüklenen dosyanın ismini değiştirmek için ilk olarak uzantısına ihtiyaç vardır. uzantı ile birlikte yeniden adlandırma yapılabilir.

MIME tipi değeri kullanılarak dosyanın uzantısı alınabilir.

dosya yükleme isim değiştirme
*/
