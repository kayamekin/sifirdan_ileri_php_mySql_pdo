<?php


include "ayar.php";


$SQL    = "DELETE FROM uyeler WHERE sehir='kırıkkale' ";

$islem  = mysqli_query($baglan, $SQL);

$etkilesim  = mysqli_affected_rows($baglan); 


echo $etkilesim;






?>