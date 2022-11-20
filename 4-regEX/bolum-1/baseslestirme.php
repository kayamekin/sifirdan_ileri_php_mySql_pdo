<!-- 

    ifade
    belirlenen ifadenin içerisinde ifade kelimesi geçen tüm metin ile eşleşecektir.

    ^ifade 
    sadece ifade kelimesi ile başlayan metinle eşleşecektir.

    ifade $ 
    sadece ifade kelimesi ile biten metinle eşleşecektir.

    ^ifade$
    sadece ifade kelimesi ile eşleşecektir.
 -->


 <?php
$desen = "#elma#";
$metin = "bu cümlede elma kelimesi geçmektedir.";

preg_match($desen, $metin, $sonuc);

print_r($sonuc);









?>