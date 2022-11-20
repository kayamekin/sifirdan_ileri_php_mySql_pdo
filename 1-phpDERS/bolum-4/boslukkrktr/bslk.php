<?php

## Boşluk ve karakter temizleme
// ltrim -> değerin solundaki boşluğu siler
// rtrim -> sağdakini siler
// trim -> baş ve sonraki boşluğu siler.
// 2. parametre ise karakter temizler

$kelime = "  merhaba  ";
echo trim($kelime);
echo "<br>";

$kelime1 = "    merhaba1";
echo ltrim($kelime1);
echo "<br>";

$kelime2 = "merhaba2  ";
echo rtrim($kelime2);

$kelime3 = "-mekin-baturalp-";
echo trim($kelime3, "-")






?>