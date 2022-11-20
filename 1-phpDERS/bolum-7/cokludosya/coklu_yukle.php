<?php

$kacdosya = count($_FILES["dosya"]["name"]);

if ($kacdosya > 3) {
    die("en fazla 3 dosya yükleyebilirsiniz.");
}

for ($a = 0; $a < $kacdosya; $a++) {

    $dosyaGeciciYol = $_FILES["dosya"]["tmp_name"][$a];
    $dosyaIsim = $_FILES["dosya"]["name"][$a];
    $dosyaYolu = "dosya/" . $dosyaIsim;
    $dosyaboyutu = $_FILES["dosya"]["size"][$a];
    $dosyatipi = $_FILES["dosya"]["type"][$a];
    $gecerliboyut = (1024 * 1024) * 1;
    $gecerliuzantilar = array(
        "image/png",
        "image/gif",
        "image/jpg",
        "image/jpeg"

    );




    if (in_array($dosyatipi, $gecerliuzantilar)) {
        if ($dosyaboyutu > $gecerliboyut) {
            echo "dosyanın boyutu max 1 mb olamlı";
        } else {
            $yukle = move_uploaded_file($dosyaGeciciYol, $dosyaYolu);
            if ($yukle) {
                echo $dosyaIsim . "dosyası yüklendi" . "<br>";
            } else {
                echo $dosyaIsim . "dosya yüklenemedi";
            }
        }
    } else {
        echo "sadece PNG , GİF , JPG VE JPEG DOSYALARI YÜKLENEBİLİR.";
    }
}

/* 
for($i = 0; $i<count($_FILES["dosya"]["size"]); $i++){

    $uzantisi  = getimagesize($_FILES["dosya"]["tmp_name"][$i]);
    $tipler = $_FILES["dosya"]["type"][$i];
    $boyut  = $_FILES["dosya"]["size"][$i];
    $uzanti = explode("/", $uzantisi["mime"]);
    $resimadi = " yeniresim.$uzanti[1]";
    $max_boyut = 1024*1024 *1;
    $gecerli_tipler = array(
        "image/png",
        "image/gif",
        "image/jpg",
        "image/jpeg"
    );


    if(in_array($tipler, $gecerli_tipler)){
        if($boyut > $max_boyut){
            echo "yüklenen dosya en fazla 1 MB olabilir!!";

        }else{
            if(move_uploaded_file($_FILES["dosya"]["tmp_name"][$i],$resimadi)){

            echo $resimadi. "başarılı bir şekil de yüklendi <br>"; 


            }else{
                echo $resimadi."yüklenemedi <br>";
            }
        }
    }else{
        echo "sadece png, gif, jpg ve jpeg dosyası olması gerekmektedir.";
    }


}
 */