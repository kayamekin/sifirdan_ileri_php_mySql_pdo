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

    case "sil";
        $sil = $db->prepare("DELETE FROM uyeler WHERE sira=?");
        $sil->execute(array($_POST["silSira"]));

        break;
    case "guncelle";
        $duzenle    = $db->prepare("UPDATE uyeler SET durum=?  WHERE sira=?");
        $islem      = $duzenle->execute(array(

            $_POST["durum"],
            $_POST["sira"]

        ));

        if ($islem) {
            echo "tamam";
        } else {
            echo "hata";
        }

        break;
}
