<?php
include "ayar.php";
// "LIMIT 1";->-sınırlama
//DSC
$SQL    = "SELECT * FROM uyeler ORDER BY isim ASC "; 
$islem  = mysqli_query($baglan, $SQL);



while($veri   = mysqli_fetch_array($islem, MYSQLI_ASSOC)){
    echo $veri["isim"]."<br>";

}

// echo $veri["soyisim"]; 

// echo $veri -> soyisim; //object



