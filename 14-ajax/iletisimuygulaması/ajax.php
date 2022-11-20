<?php

include "db.php";


$sonuc = [];

if (isset($_POST["tip"])) {


    if ($_POST["tip"] == "iletisim") {

        $adsoyad = $_POST["adsoyad"] ?? false;
        $eposta = $_POST["eposta"] ?? false;
        $mesaj = $_POST["mesaj"] ?? false;

        if (!$adsoyad) {
            $sonuc["hata"] = "ad-soyad boş olamaz";
            $sonuc["target"] = "adosyad";
        } elseif (!$eposta) {
            $sonuc["hata"] = "eposta boş bırakılamaz";
            $sonuc["target"] = "eposta";
        } elseif (!filter_var($eposta, FILTER_VALIDATE_EMAIL)) {
            $sonuc["hata"] = "eposta adresiniz versiyonu hatalı formatta";
            $sonuc["target"] = "eposta";

        } elseif (!$mesaj) {
            $sonuc["hata"] = "mesaj boş olamaz!!";
            $sonuc["target"] = "mesaj";
        } else {


            $sorgu = $db->prepare("INSERT INTO iletisim SET iletisim_adsoyad= :adsoyad, iletisim_eposta = :eposta, iletisim_mesaj = :mesaj");
            $insertsonuc = $sorgu->execute([
                "adsoyad" => $adsoyad,
                "eposta" => $eposta,
                "mesaj" => $mesaj
            ]);
            if ($insertsonuc) {

                $sonuc["basarili"] = "iletisim mesajınız bize ulaştı";
            } else {
                $sonuc["hata"] = "bir sorun oluştu";
            }
        }
    }
}

echo json_encode($sonuc);
