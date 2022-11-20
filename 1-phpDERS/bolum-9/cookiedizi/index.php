<?php

setcookie("bilgi[adi]", "ibrahim,", time() + 60 * 60);
setcookie("bilgi[soyad]", "çevrük,", time() + 60 * 60);
setcookie("bilgi[yil]", "2021,", time() + 60 * 60);
setcookie("is[adi]", "muhasebe", time() + 60 * 60);
/* 
echo "<pre>";
print_r($_COOKIE);
 
echo $_COOKIE["is"]["adi"]; */

if(isset($_COOKIE["is"]["adi"])){
    echo $_COOKIE["is"]["adi"];
}else{
    echo "yok";
}