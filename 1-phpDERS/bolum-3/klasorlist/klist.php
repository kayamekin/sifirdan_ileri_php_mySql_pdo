<?php


/* 
dizin içerisinde yer alan dosya ve alt dizinleri listelemek için iki fonksiyon bulunmaktadır. bunlar ; 
 readdir() ve scandir() fonksiyonlarıdır.
*/

/* 
    seçilen klasördeki tüm içeriği listelendirmek için readdir() fonksiyonu kullanılmaktadır . bu fonksiyondan gelen bilgiler while döngüsü kullanılarak listelendirilebilir.

    bu dosyayı açmak için opendir() fonksiyonu kullanılır.
    dosya içerisinde yer alan veriler readdir() fonksiyonu ile listelenir dosyalama işlemi bittiğinde closedir() fonksiyonu ile işlem sonlandırılır.


*/

/* $dizin = opendir("resimler");
while(($dosyalar = readdir($dizin)) !== false){
    echo $dosyalar."<br>";
}
closedir($dizin); */
/* 
is_file (dosya olanlar)
is_dir  (klasör olanlar)
*/

$dizin = scandir("resimler", 1);
foreach ($dizin as $dosya) {
if(is_file("resimler/". $dosya)){
    echo $dosya . "<br>";
}    
}
