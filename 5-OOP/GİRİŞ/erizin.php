<?php

class erisim{
    public $ad = "ibrahim";
    private $soyad = "Çevrük";
    protected $sehir = "ANKARA";
}

$nesne  = new erisim();

// public olduğu için erişilebilir.
echo $nesne->ad."<br>"; // erişim var public
echo $nesne->soyad."<br>"; // erişim yok private
echo $nesne->sehir."<br>"; // erişim yok protected







?>