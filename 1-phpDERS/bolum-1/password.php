<?php

/* 
    belirlenen değerin şifrelenmesi için password_hash() fonksiyonu kullanılmaktadır. şifrelenen değer, md5 gibi tekrar eski haline çevrilememektedir. şifrelenen değer sayfanın her yenilenmesinde farklı sonuçlar üretecektir. Bu durumda kontrolünün nasıl yapılacağı konusunda kafanız biraz karışmış olabilir. AMA OLMASIN!

    password_hash() fonksiyonu ile şifrenin ve her seferinde farklı sonuçlar veren değeri, password_verify() fonksyionunu kullanarak doğrulayabilirsiniz.
    şifrelenen değer tekrar eski haline çevrilememektedir. fakat password_verify() fonksiyonu ile doğrulaması yapılmaktadır.

*/


$sifre = "mekin baturalp";
// echo password_hash($sifre, PASSWORD_DEFAULT);


$sifreli = "$2y$10\$pBRKkwUkFb5USLJiTQyqe.qLr8BRKm1.0wSY0/YHOx5piUP8zXsia";
if(password_verify($sifre, $sifreli)){
    echo "doğru";
}else{
    echo "sifre doğru değil";
}


/* 
// ikinci parametreler

password_default = en önemlisi :: 

    en yeni ve güçlü algoritma ile şifrelenme


password_bcrypt  - crypt_blowfish

    60 karakterlik şifreleme


password_argon2ı - (7,2,0) sürüm

    argon2i algoritması kullanılarak şfire üretilir. önemsiz...

*/





?>