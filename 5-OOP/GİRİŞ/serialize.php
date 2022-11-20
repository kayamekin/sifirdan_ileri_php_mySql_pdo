<?php

class a
{
    public $isim;
    public function yaz()
    {
        echo $this->isim;
    }
}
$baglan         = unserialize(file_get_contents("test.txt"));
$baglan->isim   = "ceylin çevrük";
$baglan->yaz(); 

/* 
$nesne = new a();
$nesne->isim = "ibrahim";
$nesne->yaz();
file_put_contents("test.txt", serialize($nesne));

 */
