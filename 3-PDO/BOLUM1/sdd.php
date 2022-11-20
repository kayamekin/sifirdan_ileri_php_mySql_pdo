<?php

include "ayar.php";

$sql = "SELECT * FROM uye_listesi WHERE sehir='ankar'";

$sorgu = $db->query($sql);

$say = $sorgu->rowCount();

if($say > 0 ){
    $veri = $sorgu->fetchAll(PDO::FETCH_ASSOC);
    foreach($veri as $v){
        echo $v["ad"]."<br>";
    }
}else{
    echo "buraya listenelecek bir şey bulunamadı";
}
