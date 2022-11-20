
<?php

$ornek = "KÖTÜ KÖTÜ KÖTÜ ,,, kötü kötü kötü ,,, şerefsiz ,, ahlaksız ,,küfür ";

$uygunsuz_kelimeler = str_replace(
array("kötü","KÖTÜ", "şerefsiz","ahlaksız","küfür"),
array("SANSÜR","SANSÜR","ş.....","a......","k....."), $ornek);


echo $uygunsuz_kelimeler;



 

?>