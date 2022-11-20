<?php
/* 
GLOBALS KUALLNIMI

küresel alanda bulunan bütün değişkenleri içerir Global değişkenler hem fonksyion hem de dosya içinde geçerli olabilirler

kullanımı 
$GLOBALS[`degiskenAdi`];
şeklindedir.


benim anlayacağım şekil de

$degisken dışarda değer verildi
bir topla adında fonksiyon oluşturduk.. içine sonuc adında değişken tanımladık..
dışarda vermiş olduğumuz $degisken ve topla adındaki fonksyionun değerlerini dışarda verdiğimiz için topla adındaki fonksiyonun içerisinde sonuc degiskeninin ic kısımına $sayi dedik ve $GLOBALS değişkenini kullanarak dışardaki $degisken adındaki mevzuyu içeri alıp işlemi içerde tamamladık dışarda topla fonksiyonunu çağırırken içerisine değerimizi girdik ve sonucumuzu elde ettik.. 
*/


// dışardaki değişkenimiz
$onemliVeri = 35;
// topla adındaki fonksiyonumuz
function topla($sayi){
    // sonuc adındaki değişkenimiz
    // GLOBALS diyerek dışardaki değişkeni içeri aldık
    $sonuc = $sayi + $GLOBALS['onemliVeri'];

    // $sonuc degiskenini geri döndürdük
    return $sonuc;

}
// yukarda $sonuc içine $sayi yazdık
// topla fonksiyonunu çağırırken parantez içine değer girdik çünkü yukarıdaki $sayi degiskeni fonksiyonun değeri olarak adlandırılmakta
echo topla("100");



?>