<?php
include "ayar.php";

// NOT BETWEEN BELİRLENEN ARALIĞIN DIŞINI ALIR
//  SADECE "BETWEEN" BELİRLENEN ARALIĞIN İÇİNİ ALIR 
// ÖRNEK VERMEK GEREKİRSE AŞAĞIDA NOT BETWEEN KULLANILMIŞTIR
// BETWEEN İÇİN İSE NOT KELİMESİNİ SİLİNİZ VE TEKRAR DENEYİNİZ....

$sql = "SELECT * FROM 
            uye_listesi 
        WHERE 
            sehir 
        NOT BETWEEN 
            ? AND ? ";
            


$islem = $db->prepare($sql);
$islem->execute(array(1000,2000));
$al    = $islem->fetchAll(PDO::FETCH_ASSOC);


echo "<pre>";
print_r($al);
