<?php


// metinleri bölme
// explode("-" , $tiredenSonraKesilecekDegisken) | ilk -> ifade, ikinci -> değer
// örnekler
/* 
        örnekler
    $bosluksil = explode(" ", $ornek); - boşluktan sonra geleni ikinci değer olarak alır

    $tiredenSonra = explode("-", $ornek); - tire sembolünden sonra geleni ikinci değer olarak alır

    $virgüldenSonra = explode(",", $ornek); - virgülden sonra geleni ikinci değer olarak alır


*/

$ornek = "mekin, baturalp, 19, - yazılım profesorü, uşak merkez, istanbul";
$bol = explode(" , - " , $ornek);
echo "<pre>";
print_r($bol);

echo "<br>";


foreach($bol as $veri){
    echo $veri . "<br>";
}


?>