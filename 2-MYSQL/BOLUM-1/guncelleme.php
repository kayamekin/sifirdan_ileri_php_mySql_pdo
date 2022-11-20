<?php

include "ayar.php";

// $SQL    = "UPDATE uyeler SET isim='derman' , soyisim='derman12321' WHERE sira='6'";
$SQL    = "UPDATE uyeler SET sehir='kırıkkale' WHERE sira='6'";

$islem  = mysqli_query($baglan , $SQL);

if($islem){
    echo "düzenleme sağlandı";
}else{
    echo "düzenleme sağlanamadı";
}
