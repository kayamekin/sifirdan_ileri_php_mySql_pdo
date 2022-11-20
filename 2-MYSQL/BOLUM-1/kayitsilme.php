<?php

include "ayar.php";


$SQL    = "DELETE FROM uyeler WHERE isim='omer2'";
$sil    = mysqli_query($baglan, $SQL);

if($sil){
    echo "değer silindi";
}else{
    echo "değer silinemedi bir sorun var.";
}









?>