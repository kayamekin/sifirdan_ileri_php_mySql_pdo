<?php


$dosya = "isimler.text";

if(file_exists($dosya)){
    echo "dosya var";
}else{
    echo "dosya yok";
}