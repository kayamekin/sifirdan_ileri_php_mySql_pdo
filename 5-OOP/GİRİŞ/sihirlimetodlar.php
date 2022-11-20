<?php
// clone işleminde
// private ile kopyalama durdurulur hata alınır.
// sade public ile kullanılır.

/* 
class yaz
{
    public $isimsoyisim;
    private function __clone()
    {
        echo "merhaba";
    }
}

$yaz = new yaz();
$yaz2 = clone $yaz; */


/* 
$yaz = new yaz();
$copy = clone $yaz;
$yaz->isimsoyisim = "ibo";
echo $yaz->isimsoyisim;


$copy->isimsoyisim = "sercan";

echo $copy->isimsoyisim;
 */

/*-------------------------------------------------- */


// __toString metodu sadece return ile konuşur
// "(echo)" "(kabul etmez)" içinde "echo" ya dair bir durum olamaz
// kullanımı aşağıda belirtilmiştir.

/* 
class yaz{
    public function __toString()
    {
        return "merhaba";
    }
}
$yaz = new yaz();

echo $yaz; */

/*-------------------------------------------------- */

// __wakeup
/* 
nesne değerini "serialize" ettikten sonra "unserialize" ile çevrilerek direkt ulaşılmasını istediğinizde "__wakeup" metodu kullanılır
*/
// kullanımı aşağıda belirtilmiştir.

/* class yaz
{
    public function __wakeup()
    {
        echo "merhaba";
    }
}
$yaz = new yaz();
$veri = serialize($yaz);
unserialize($veri); */
/*-------------------------------------------------- */


// __invoke
// nesneye direkt parametre göndermek ve sonuca ulaşmak için kullanılır
// kullanımı aşağıda belirtilmiştir.

/* class yaz
{
    public function __invoke($a)
    {
        echo "nesneye" . " (" . $a . ") " . "parametresi gönderildi";
    }
}

$yaz = new yaz();
$yaz("mekin"); */
/*-------------------------------------------------- */
// __set
// private ve olmayan bir özelliğe değer gönderilmesi durumunda hataları yakalamak için __set metodu kullanılmaktadır.
// kullanımı aşağıda belirtilmiştir.
/* 
class yaz
{
    private $ad;
    public function __set($a, $b)
    {
        echo $a . "<br>";
        echo $b . "<br>";
    }
}


$yaz            = new yaz();

// bu gönderilen parametreler hatalı olursa ekranda görünür
$yaz->ad        = "ibo";
$yaz->soyad     = "çevruk";


 */


/*---------------------"__get"--------------------- */

// __Get
// private ve sınıfa gö
// private ve sınıfa  gönderilen değerlerin hataları yakalamak için kullanılmaktadır.


/* class yaz
{
    private $ad;
    public function __get($a)
    {
        echo $a . "<br>";
    }
}

$yaz            = new yaz();
// bu gönderilen parametreler hatalı olursa ekranda görünür
echo $yaz->adi;
echo $yaz->soyadi; */
