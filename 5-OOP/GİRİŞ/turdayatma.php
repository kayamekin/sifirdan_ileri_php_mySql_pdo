<?php
// sınıf tanımlaması
class A
{
    // publicler
    public $isim    = "ibrahim";
    public $soyisim = "çevrük";
    public $sehir   = "ankara";
}
// dışarda sınıfı tanımlama
$nesne = new A();

// dışardaki fonksiyona sınıf özelliklerini atama işlemi
function yazdir(A $bilgi)
{
    echo $bilgi->isim . "<br>";
    echo $bilgi->soyisim . "<br>";
    echo $bilgi->sehir . "<br>";
}

// dışarda tanımlanan fonksiyon
// fonksiyonuu çağırma işlemi ile özelliklere ulaşırız


yazdir($nesne);
