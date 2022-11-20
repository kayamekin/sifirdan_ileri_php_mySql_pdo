<?php

$sayfa = intval($_GET["sayfa"]);

if($sayfa < 1){
    $sayfa = 1;

}


echo "index.php dosyasının ". $sayfa . " sayfasındasınız";