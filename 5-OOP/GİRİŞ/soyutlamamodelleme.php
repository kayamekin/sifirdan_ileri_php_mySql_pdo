<?php

abstract class A
{
    public $isim;
    abstract public function soyad();
}


class B extends A
{
    function __construct($isim)
    {
        /* başına asla echo gelmez */
        $this->isim = $isim;
    }
    public function soyad()
    {
        echo "değerler : " . $this->isim;
    }
}


$nesne = new B("İBRAHİM ÇEVRÜK");
$nesne->soyad();
