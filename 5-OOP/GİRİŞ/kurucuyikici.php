<?php
// construct sınıf içerisinde yer alan ve hiç bir şekilde çalıştırılmadan ilk olarak çalışacak metota kurucu yani CONSTRUCT denir.

// destrcut - yine hiç bir şekil de çalıştırılmadan en son olarak çalışan metoda da yıkıcı fonksiyon yani DESTRUCT metot denilmektedir.



// kullanım __ iki alt treden sonra const yada dest gelir

/*
CONSTRUC METOT KULLANIMI
class isim{
    function __construct($veri)
    {
        echo $veri;
    }

}

// ---sinif çağırma---
$isim = new isim("ibrahim çevrük");
/* 
çıktı = merhaba
*/
/*--------------------------------------------*/
/*-------------------DESTRUCT-----------------*/

class isim
{
    function __construct($veri)
    {
        echo $veri . "<br>";
    }
    function __destruct()/*yıkıcı metod*/
    {
        echo "son!";
    }
}

// ---sinif çağırma---
$isim = new isim("ibrahim");
/* 
çıktı = merhaba
*/
