
<?php

$ornek = "GÖT GÖT GÖT ,,, göt göt göt ,,, şerefsiz ,, ahlaksız ,,küfür ";

$uygunsuz_kelimeler = str_replace(
array("göt","GÖT", "şerefsiz","ahlaksız","küfür"),
array("SANSÜR","SANSÜR","ş.....","a......","k....."), $ornek);


echo $uygunsuz_kelimeler;



 

?>