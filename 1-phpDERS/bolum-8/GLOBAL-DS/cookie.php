<!-- 
    COOKİE kullanımı
Girilen sitenin tarayıcılar üzerinde bıraktığı izlere cookie denilmektedir.
COOKİE kelimesinin Türkçe karşılığı çerez, kurabiye anlamındadır.

kullanıcının tekrar aynı siteyi ziyaret etmesi durumunda , tarayıcı bilgilerinde yer alan değerler doğrultusunda işlemler yapılmasını sağlar . Genellikle kullanıcı girişlerinde yer alan beni hatırla bölümünde kullanılmaktadır.


-->
<!-- 
    SESSION KULLANIMI

    php ' de oturum bilgilerini saklamak ve oturumları yönetmek için session küresel değişkeni kullanılmaktadır. sessionlar çerezlerden farklı olarak kullanıcının bilgisayarında değil, sunucu bilgisayarı üzerinde saklanır

 -->

<?php

session_start();
if( !isset($_SESSION["adSoyad"])){
    $_SESSION["adSoyad"] = "mekin baturalp";
}

echo $_SESSION["adSoyad"];
?>