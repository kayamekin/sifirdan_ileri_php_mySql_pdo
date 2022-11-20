<?php
// kontrollü dosya ekleme
// file_exists()


if(file_exists( "ayarla2r.php")){
    include_once "ayarlar.php";
}else{
    echo "dosya bulunamadı";
}





?>