<?php

date_default_timezone_set("Europe/istanbul");

$gunler = array("pazar", "pzt", "salı", "çrş", "prş", "cmt");
$aylar = array("",
"ocak", 
"şubat", 
"mart", 
"nisan", 
"mayıs", 
"haziran", 
"temmuz", 
"ağustos", 
"eylül", 
"ekim", 
"kasım", 
"aralık");

$ay_tr = $aylar[date("n")];
$gun_tr = $gunler[date("w")];

echo date("d")." ". $ay_tr." ". date("Y")." , ". $gun_tr;
