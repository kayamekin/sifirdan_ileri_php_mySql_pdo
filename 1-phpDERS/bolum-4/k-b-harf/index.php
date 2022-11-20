<?php

$metin = "php dersleri - ibrahim ÇEVRÜK. ";

// küçültme tüm harfler
echo mb_strtolower($metin) . "<b>--mb_strtolower--</b>";
echo "<br>";

// büyütme tüm harfler
echo mb_strtoupper($metin) . "<b>----mb_strtoupper----</b>";
echo "<br>";

//değişkenin sadece ilk baş harfini büyük yapar
echo ucfirst($metin) . "<b>ucfirst--------ucfirst------</b>";

echo "<br>";

//cümle içindeki tüm kelimelerin başındaki harfleri büyük harf yapmaktadır...
echo ucwords($metin) . "<b>--ucwords---</b>";
echo "<br>";

// CONVERT EDEREK ÜSTTEKİ DEĞİŞKENLERİ TANIMLAMA
echo"<br>". "<h3>CONVERTLER</h3>". "<br>";


// title -- kelimelerin baş harfleri
echo mb_convert_case($metin, MB_CASE_TITLE, "utf-8");
echo "<br>";

// cümlenin tüm harfleri büyük
echo mb_convert_case($metin, MB_CASE_UPPER, "utf-8");
echo "<br>";

// cümlenin tüm harfleri küçük
echo mb_convert_case($metin, MB_CASE_LOWER, "utf-8");
