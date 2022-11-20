<!-- 

$_SERVER süper küresel değişkeni, sunucu hakkında bir dizi bigiler vermektedir. Bu dizide yer alan tüm değerler web sunucusu tarafından oluşturulur. ancak bu değerlerin bazılarının sunucu tarafından oluşturulmama olasılığı vardır

server -- sunucu hizmet

 -->

 <!-- 
    $_SERVER DEĞERLERİ

    not: Server ile bir çok konuda bilgi alınabilir. En Popülerleri listedeki gibidir.

    *  SERVER_ADDR - Ana sunucnun IP adresini döndürür

    *REQUEST_METHOD - İstek yöntemini döndürür

    *REMOTE_ADDR - Kullanıcının geçerli sayfayı izlediği IP adresini döndürür

    * HTTP_USER_AGENT -Kullanıcının kullandığı tarayıcı hakkında bilgi verir.

    * HTTP_REFERER - geçerli sayfanın tam URLsini döndürür


  -->



<!-- 

SERVER KULLANIMI

SERVER küresel değişkeni kullanılarak tüm bilgileri almak için direk $_SERVER yazılarak print_r() ile çıktı alınabilir.

dönen değerlerden bir tanesini almak için $_SERVER değişkeni kullanıldığında köşeli parantezler içerisinde değer yazılarak sonuç elde edilir.


 -->
<?php


 echo "<pre>";
    print_r($_SERVER);
echo "</pre>";

 
echo "<br>";

echo "BURADA " . $_SERVER["HTTP_CACHE_CONTROL"];

?>