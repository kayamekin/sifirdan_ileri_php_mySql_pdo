<?php

session_start();



/* 
$isim   = $_SESSION["ad"];
$soyad  = $_SESSION["soyad"];
$yas    = $_SESSION["yas"];  
$is     = $_SESSION["is"];
$iller  = $_SESSION["iller"]; */

$isim   = $_SESSION["ad"];


session_destroy();

echo "<pre>";
print_r($_SESSION);
