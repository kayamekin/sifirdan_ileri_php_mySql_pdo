<?php
## Metin içerisindeki HTML Etiketlerini Temizleme
// strip_tags()
//  ilk -> değer. ikinci -> izin verilen değer

$ornek = "<script>alert('hacked')</script>
<a href='#'>ibrahim <b>Çevrük</b></a>";
$veri = strip_tags($ornek,"<a><b>");
// echo $veri;
echo $veri;


?>