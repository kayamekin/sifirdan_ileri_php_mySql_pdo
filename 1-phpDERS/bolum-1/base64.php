<?php


/* 

    Bu şifreleme yöntemi, diüer şifrelem yöntemlerinden farklı çalışmaktadır. diğer şifreleme yöntemlerinden ayırdığı farksa, şifrelenen değer tekrar eski haline çevrilebilir. buda şifrelenen verinin tam olarak güvenli bir şekil de saklanmamasına neden olur

    bir veriyi şifrelemk için base64_encode()
    fonksiyonu kullanılmaktadır. şifrelenen veriyi tekrar eski haline getirmek içinse base64_decode() fonksiyonu kullanılmalıdır.
*/


$sifre = "selami kaya dertlerin yansın bilader";

echo base64_encode($sifre);

// ******-------********

$sifreli = "c2VsYW1pIGtheWEgZGVydGxlcmluIHlhbnPEsW4gYmlsYWRlcg";

echo base64_decode($sifreli);





?>