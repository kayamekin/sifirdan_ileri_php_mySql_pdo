<?php

/* 
    bir dosyanın adını değiştirmek için rename() fonksiyonu kullanılmaktadır. bu fonksiyon 2 adet parametre almaktadır. ilk parametreye ismi değiştirilecek olan dosya adı yazılır. ikinci parametreye de yazılan dosyanın yeni adının ne olacağı yazılır. böylece dosyanın ismi tek bir fonksiyonla değiştirilmiş olur
*/
/* 

dosya taşıma işlemide yine rename fonksiyonu ile yürütülmektedir. bu fonksiyonun ikinci parametresine yazılan yeni isim, bir dizi ile birlikte yazılırsa taşıma işlemi gerçekleştirilecektir. taşıma işleminde ismini yine aynı yazmanız durumunda farklı bir isimle taşınmamış olacaktır.


touch: yeni dosya oluşturmak için kullanılır. tek değer alır

rename: dosyanın yeniden adlandırılması için kullanılır. 2 değer alır. eski ad ve yeni ad..

*/

 if(file_exists("rename.php")){
    rename("rename.php","file/rename.php");
}
 



