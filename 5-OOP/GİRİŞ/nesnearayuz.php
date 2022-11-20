<?php
interface tanimlama
{
    public function isim($isim);
    public function sehir($sehir);
    public function yaz();
}

class veriler implements tanimlama
{
    private $isimSoyisim;
    private $sehirAdi;

    public function isim($ad)
    {
        $this->isimSoyisim  = $ad;
    }
    public function sehir($il)
    {
        $this->sehirAdi     = $il;
    }
    public function yaz()
    {
        return "isim : " . $this->isimSoyisim . "<br>" . "şehir :  " . $this->sehirAdi;
    }
}

$veriler    = new veriler();
$veriler->isim("ibrahim çevrük");
// eğer publicin sehir kısmını ve alttakini kaldırsaydım yaz fonksiyonu kısımında sehiri tanımladığımız için diğer tanımladıklarımızda çalışmaz hale gelecekti bu sebepten dolayı kaldırmıyoruz

$veriler->sehir("ANKARA");
echo $veriler->yaz();
