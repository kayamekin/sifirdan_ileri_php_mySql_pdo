<?php
// SHA1 İLE ŞİFRELEME
// $sifrele = "mekin";
// $ekle = "mekin_".$sifrele;
#echo sha1($ekle);

// ***********************************

//  2 DEFA ŞİFRELEME

$sifrele = "mekin";
echo sha1(md5($sifrele));

?>