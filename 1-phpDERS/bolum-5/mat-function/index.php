<?php



/* 
abs = sayının mutlak değerini hesaplar

sqrt = sayının karekökünü döndürmektedir.

pow = sayının girilen derecenin üssünü alır

fmod = sayının girilen değere bölümünden kalanını döndürmektedir

*/
echo abs(-455634) . "<br>";
echo sqrt(512) . "<br>";
echo pow(22, 12) . "<br>";
echo fmod(15, 9) . "<br>";


/* 
log : logaritma işlemi yapılır
log10 : 10 tabanında logaritma işlemi yapılır
exp : girilen değerin E üssünü alınr

hypot : iki kenarı belirtilen dik üçgenin hipotenüsünü hesaplamaktadır.

*/

echo log(10) ."<br>";
echo log10(10) ."<br>";
echo exp(3) ."<br>";
echo hypot(60,3) ."<br>";


/* 
pi : pi sayısını döndürmektedir;

max : birden fazla gönderilen değerlerden en büyüğünü çıktı olacak verecektir.

min : birden fazla gönderilen değerlerden en küçüğünü çıktı olacak verecektir.
*/

echo pi()."<br>";
echo max(45,45,32,24,53,23,42,24,678,38,13)."<br>";
echo min(45,45,32,24,53,23,42,24,678,38,13)."<br>";


?>
