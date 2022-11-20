<!-- 
veya operatörü   | düz çubuk
kitap(lar|ler);
kullanımı üstte

veya operatörü en uygun yerlerde kullanılmalıdır.
örneğin, 3 ve 6 karakterden oluşan HEX kodlarını almak için veya operatörü kullanılabilir

HEX kodları kısa bir şekil de yazılmak istenildiğinde 3 karakterle belirtilmektedir.
uzun olarak yazılmasıda 6 karakterlidir. 
yani HEX kodlarını almak için VEYA operatörü için en uygun yerdir.


-->

<?php

// ---veya operatörü kullanımı---
/* $desen = "#elma(lar|ler)#";
$metin = "  elma, 
            elmalar , 
            elmaler ,
            elmalarlar , 
            elmalerler, 
            elmas , 
            elmak , 
            ellma
        ";
preg_match_all($desen, $metin , $sonuc);
echo "<pre>";
print_r($sonuc);
 */

// ---veya opratörü kullanımı---
/* 

$desen  = '/^#([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$/i';
$renk   = '#ff0000';

preg_match_all($desen, $renk , $sonuc);
echo "<pre>";
print_r($sonuc); */

$desen  ='#[^a-zA-ZçÇÜü]*#';
$renk   ='ibrahim Çevrük 06';
preg_match_all($desen, $renk , $sonuc);
echo "<pre>";
print_r($sonuc);
?>