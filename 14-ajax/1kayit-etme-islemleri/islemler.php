<?php


include "ayar.php";

$kontrol = $_POST["islem"];

switch ($kontrol) {
    case "kayit";

        $kayit = $db->prepare("INSERT INTO uyeler SET ad=? , soyad=? , sehir=? , cinsiyet=? ");
        $islem = $kayit->execute(array(
            $_POST["isim"],
            $_POST["soyad"],
            $_POST["sehir"],
            $_POST["cinsiyet"]
        ));


        if ($islem) {
            echo "tamam";
        } else {
            echo "hata";
        }

        break;
}
