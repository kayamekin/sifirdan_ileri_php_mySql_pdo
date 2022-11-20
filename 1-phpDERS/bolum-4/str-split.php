<!-- 

metinleri belirli oranarda bölme

str_split() | ilk -> değer, ikinci -> kaç karakter

-->
<?php


$ornek = "bugün hava çok sıcak bundan dolayı bunaldım";

$bol = mb_str_split($ornek, 8);


foreach ($bol as $veri) {
    echo trim($veri) . "<br>";
}



?>