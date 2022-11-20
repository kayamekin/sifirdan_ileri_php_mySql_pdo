<?php
// uygulama : sayıları yazıya çevirme
// örneğin : 45 -> kırk beş

$ornek = 84;

$basamak = str_split($ornek);

$say = count($basamak);


$birler = array("", "bir", "iki", "üç", "dört", "beş", "altı", "yedi", "sekiz", "dokuz");
$onlar = array("", "on", "yirmi", "otuz", "kırk", "elli", "altmış", "yetmiş", "seksen", "doksan");

if ($say == 1) {
    echo $birler[$basamak[0]];
}else if ($say == 2) {
    echo $onlar[$basamak[0]]." ".$birler[$basamak[1]];
}



echo "<pre>";

print_r($basamak);
