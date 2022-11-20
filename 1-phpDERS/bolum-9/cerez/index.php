<?php
// cookie tanımlama
/* setcookie("isim", "mekin", time() + 60 * 60);
setcookie("sayi", "34", time() + 60 * 60);
setcookie("soyisim", "baturalp", time() + 60 * 60);
 echo $_COOKIE["sayi"];
*/



//************************** */



/* 
// cookie değiştirme ve silme
echo $_COOKIE["isim"];
setcookie("degisendeger", "ılım", time() + 60 * 60);

// burda -1 diyerek 1 saniye öncesine gittik ve değerin artık ortadan kalkma işlemini tamamladık
setcookie("degisendeger", "", time() - 1);

*/


//************************** */
// cookie kontrol sağlama

if (isset($_COOKIE["takim"])) {
    echo $_COOKIE["takim"];
} else {
    setcookie("takim", "fenerhahçe", time() + 60 * 60);
    echo $_COOKIE["takim"] . "yeni oluşturuldu";
}
