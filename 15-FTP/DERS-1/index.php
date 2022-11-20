<?php
include "hesap.php";

$sunucuBaglantisi = ftp_connect("78.174.136.28");

if ($sunucuBaglantisi) {
    echo "baglandi <br>";
    $oturum  = ftp_login($sunucuBaglantisi, $kullanici, $sifre);
    if ($oturum) {
        echo "oturum açıldı <br>";
    } else {
        echo "oturum açılamadı <br>";
    }
} else {
    $error = error_get_last();
   /*  print_r($error);
    echo "baglanmadi <br>"; */
    echo $error;
}
