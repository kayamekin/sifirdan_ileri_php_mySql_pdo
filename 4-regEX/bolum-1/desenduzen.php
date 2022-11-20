<?php
/* 

    i = 
    düzenli ifadenin büyük/küçük harfe duyarlı olmasını engeller

    m = 
    uzun metinlerin her paragrafını böler
    
    s =
    ifadenin tek satırda uygulanmasını sağlar.

    u = 
    desen UTF-8 olarak kabul edilir..

*/
$desen      ='/[a-zçüÇÜ]+/i';
$metin      = "ibrahim çevrük ÇEVRÜK";
$kontrol    = preg_match_all($desen , $metin, $sonuc ) ;

echo "<pre>";
print_r($sonuc);


/* if($kontrol){
echo $metin . "var";
}else{
    echo $metin."yok";
} */














?>