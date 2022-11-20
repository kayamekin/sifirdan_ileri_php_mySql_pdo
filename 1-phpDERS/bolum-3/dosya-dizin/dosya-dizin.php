<?php

/* 
    DOSYA AÇMA KİPLERİ

    r:
    dosya okuma kipinde açılır. imleç dosyanın başında yer alır.

    r+:
    dosya hem okuma hemde yazma kipinde açılır. imlec dosyanın başında yer alır.

    W:
    dosya sadece yazmak kipinde açılır. dosya daha önceden varsa tüm veriler silinir.

    W+: 
    dosya okuma ve yazma kipinde açılır
    dosya daha önceden varsa tüm veriler silinir.

    a : 
    dosya yazma kipinde açılır. imlec dosyanin basinda yer alır. dosya yoksa olusturulur.

    a+:
    dosya hem yazma hemde okuma kipinde açılır. imleç dosyanın başında yer alır. dosya yoksa olusuturulur.

    x :
    dosya yazma kipinde açılır.
    dosya yoksa oluşturulur. varsa false döner.


    x+ :
    dosya hem okuma hem yazma kipinde açılır
    dosya yoksa oluşturur. varsa false..


*/


/* 
ilk önce icerik adında değişken yapıp eklemek istediğimiz metni yazıyoruz ardından islem diye bir değişken tanımlayıp içerisinde yapmamız gerekn islemi yazıyoruz
--fwrite()-- bunun içine ilk önce dosyamızın değişkenini ardından eklemek istediğimiz değişkeni yanına yazıyoruz 

yazdıktan sonra if else operatörlerini kullanarak bu islem değişkenimizi if kısımına parantez içinde yazıyoruz yazdıktan sonra sonuç doğruysa if kısmına true sonuc yanlış ise else kısmına false yazıyoruz sonucu görüntüle dedikten sonra işlemimiz başarıyla tamamlanıyor..

dosyaya icerik eklerken eğer bi alt satıra geçmek istiyorsak ters slash yani "\n" bunu cümlemizin sonuna yazarak bi alt satıra geçirterek dosyamıza yazdırıyoruz..


Unix ve türevleri sistemlerde satırı sonlandırmak için \n kullanılmaktadır windows için bu \r\n iken, mac sistemlerde ise sadece \r karakteri kullanılır. bu ayrımı ortadan kaldırmak için b kipi kullanılmaktadır. aynı şekilde eklenen içeriğin satır satır görünmesi içinde t kipi ilave edilmelidir.

a kipi : dosya yazma kipinde açılır ç imlec dosyanın başında yer alır dosya yoksa oluşturulur.

wbt : 
yazarsak eğer tüm satırları siler geçmişte ne var ne yok gider ve bize her yenilediğimizde yeni değeri getirir ve eskisini siler.
*/

$olustur = fopen("yeni_dosya.txt","wbt");
$icerik = " merhabalar bugün nasılsın \n Merhaba ben root\n merhabalar bugün nasılsın \n Merhaba ben root\n";
$islem = fwrite($olustur, $icerik);
if($islem){

    echo "okundu, oluşturuldu";

}else{
    echo "oluşmadı";
} 

fclose($olustur);











?>