<?php
// namespace ile bir dosya içine alırcasına başlık veriyoruz
namespace sistem\ibonunki;

class a
{
    public function yaz()
    {
        echo "ilk a";
    }
}

// namespace ile bir dosya içine alırcasına başlık veriyoruz
namespace sistem\sercaninki;

class a
{
    public function yaz()
    {
        echo "ikinci a";
    }
}
// bu belirtilen adlardaki namespaceleri kısaltma işlemi
use sistem\ibonunki as ibo;
use sistem\sercaninki as sero;

// burada çağırma işlemi ve değişkene atama işlemi
$ibo = new ibo\a;
$sercan = new sero\b;

// değişkenleri yazdırma
$ibo->yaz();
echo "<br>";
$sercan->yaz();
