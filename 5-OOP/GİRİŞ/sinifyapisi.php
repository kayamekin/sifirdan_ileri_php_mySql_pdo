<?php


/* class sinif{
    // sınıf içerisindeki özellik
    public $deger;
    // sınıf içerisindeki metod
    public function metod(){
        echo "method içerisinde veri";
    }
}

$nesne = new sinif();
print_r($nesne);
 */

class ogretmen
{

    public $isim;

    public $brans;

    public function bilgiAl()
    {
        echo "bilgiAL() metodu ÇALIŞTIRILDI";
    }
}


$ogretmenSinifi     = new ogretmen();
$ogretmenSinifi->bilgiAl();
echo "<br>";

echo $ogretmenSinifi->isim   = "ibrahim";
echo "<br>";

echo $ogretmenSinifi->brans   = "matematik";
