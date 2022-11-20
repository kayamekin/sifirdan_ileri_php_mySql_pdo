<?php
// %s         -> dizge alınıp gösterilir.
// %d         -> tamsayı alınıp , ondalık gösterilir.
// %0.xs         -> ilk x karakter alınır , 
// printf - sprintf

$metin = "yer %s ve istikamet %s tutar: %d TL'dir";
printf($metin , "ankara", "istanbul", 249.99);

echo "<br>";

$metin = "Ürünün adı %0.4s 'dır";
printf($metin , "cikolata");

echo "<br>";

$metin = "Ürünün adı %0.4s 'dır";
echo sprintf($metin , "cikolata");

echo "<br>";
