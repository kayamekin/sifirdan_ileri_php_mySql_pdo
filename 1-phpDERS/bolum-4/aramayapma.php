<?php
//  metin içerisinde arama yapma
// strpos() yada stripos()
// ilk -> değer, ikinci -> aranan ifade
// Türkçe karakterler için mb_ eki alır

$ornek = "bugün hava çok güzel değil mi arkadaşlar?";
echo mb_stripos($ornek, "MI"). "<br>";
echo mb_stripos($ornek, "a"). "<br>";
echo mb_stripos($ornek, "ç"). "<br>";



?>