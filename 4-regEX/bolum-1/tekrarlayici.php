<!-- 
// regexte tekrarlayıcı

{123}
kendinden önce yazılmış karakterin; parantez içerisine yazılan sayı kadar tekrar etmesini ifade eder

{1,2}
kendinden önce yazılmış karakterin; parantez içerisine yazılan iki sayı arasında tekrar etmesini ifade eder

?

kendinden önce yazılmış karakterin ; olsa da olur olmasada olurunu ifade eder,

+
bir veya daha fazla tekrar etmesini ifade eder


*
sıfır veya daha fazla tekrar etmesini ifade eder
 -->


<?php


/* $desen = "#[0-9]{2}\-[0-9]{2}\.[0-9]{4}#";
$tarih = "04-09.3000";

$kontrol = preg_match($desen , $tarih , $sonuc);

if($kontrol){
    echo "uygun";
}else{
    echo "uygun değil";
} */
$desen = "#([a-zA-ZĞŞÇÜĞŞIı]+)#";
$tarih = "ibrahim ÇEVRÜK";

preg_match_all($desen , $tarih , $sonuc);

print_r($sonuc);
?>