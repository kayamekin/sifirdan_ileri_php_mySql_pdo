<?php

include "ayar.php";
$sql = "INSERT INTO uye_listesi(ad,soyad,sehir) VALUES (?,?,?)";

$islem = $db->prepare($sql);
$kayit= $islem->execute(array("servi","sahin","adıyaman"));

if($kayit){
    echo "okey #".$db->lastInsertId();
}else{
    echo "no";
}