<?php

/* 
    bu şifreleme türüde aynı MD5 ve SHA1 gibi çözülmesi mümkün olmayan bir şifreleme yapmaktır. MD5 ve SHA1 şifreleme yöntemlerinden tek farkı şifreleme sonucunda TAM SAYI üretmesidir..

    ürettiği bu tam sayı pozitif yada negatif değerde olabilir CRC32 ile üretilen bir şifrenin geriye döndürülmesi mümkün değildir
*/

$sifre = "123";
$ekle = "__".$sifre;
echo crc32($ekle);


?>