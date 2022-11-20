<?php
// konu : kalıtım mirasları

class personel
{
    public $isim;
    public $soyisim;

    public function bilgiler()
    {
        echo $this->isim . " - " . $this->soyisim . "/";
    }
}
class unvan extends personel
{
    public $unvan;
    
    public function unvanyaz()
    {
        echo "ünvanı : " . $this->unvan . "<br>";
    }
}


// BİR PERSONEL CLASSIMIZIN OLDUĞUNU BELİRTİYORUZ
$unvan = new unvan();

// THİS İLE BELİRTİLEN DEĞİŞKENLERE CEVAP AÇIKLAMA YAZIYORUZ..
$unvan->isim     = "ibrahim";
$unvan->soyisim  = "çevrük";
$unvan->unvan    = "muhasebe";
// ULAŞIM
$unvan->bilgiler();
$unvan->unvanyaz();
