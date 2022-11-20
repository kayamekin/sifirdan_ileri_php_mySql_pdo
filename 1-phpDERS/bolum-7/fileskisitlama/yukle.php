<?php

$dosyaYolu     = @$_FILES["secilenDosya"]["tmp_name"];
$dosyaTipi     = @$_FILES["secilenDosya"]["type"];
$dosyaIsmi     = @$_FILES["secilenDosya"]["name"];
$dosyaBoyut    = @$_FILES["secilenDosya"]["size"];
$gecerliBoyut  =  2322;// (1024 * 1024) * 5;
$gecerliTipler = array(
    "image/png",
    "image/gif",
    "image/jpg",
    "image/jpeg"

);


if (in_array($dosyaTipi, $gecerliTipler)) {
    if ($dosyaBoyut > $gecerliBoyut) {
        echo "yüklenen dosya max 5 mb olabilir";
    } else {
        $yukle = move_uploaded_file($dosyaYolu, $dosyaIsmi);
        if ($yukle) {
            echo "dosya yüklendi";
        } else {
            echo "dosya yüklenemedi";
        }
    }
} else {
    echo "sadece PNG, GİF , JPG ve JPEG dosyaları yüklenebilir.";
}
