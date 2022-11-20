<?php



/* 

    dizin (klasör) işlemleri.

    PHP'de yeni bir dizi oluşturmak için mkdir() fonksiyonu kullanılmaktadır. bu fonksiyon iki parametre almaktadır. ilk parametreye, oluşturulacak dizin yazılır. ikinci parametreye de dizine verilecek olan izinler girilir. ikinci parametreye varsayılan olarak 0777 izni verilir. oluşturulacak dizinin bulunması durumunda false değeri ekrana döndürülür. ve hata mesajı verilir...

*/
/* 
izinlerin numaralarına göre anlamları

0 : hiçbir izin verilmemiş
1 : sadece çalıştırılabilir
2 : sadece yazılabilir
3 : yazma ve çalıştırma 
4 : sadece okuma
5 : okuma ve çalıştırma
6 : okuma ve yazma
7 : tüm izinleri temsil eder
*/


/* 

    yeni bir dizin(klasör) oluşturmak için mkdir() fonksiyonu kullanılmaktadır. bu fonksiyon 2 parametre alır. 1. parametre dizinin adı, 2. parametre izin değeri girilir. eğer izin değeri girilmişse varsayılan olarak 0777 olacaktır.

    sahip (user)
    grup (group)
    herkes (world)

*/


$dizin = opendir("dosya");

closedir($dizin);

// mkdir("dosya");
// mkdir("dosya/resimler" , 0644);

