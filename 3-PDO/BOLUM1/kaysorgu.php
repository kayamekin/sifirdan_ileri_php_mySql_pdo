<?php

include "ayar.php";


$sql = "SELECT * FROM  uye_listesi";
$islem = $db->prepare($sql);
$islem->execute();
$sonuc = $islem->fetchAll(PDO::FETCH_ASSOC);


foreach($sonuc as $veri){
    echo $veri["ad"]."-".$veri["soyad"]."->".$veri["sehir"];
    echo "<br>";
}
