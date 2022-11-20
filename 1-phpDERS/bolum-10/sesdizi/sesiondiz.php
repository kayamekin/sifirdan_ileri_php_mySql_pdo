<?php

session_start();

$_SESSION["bilgiler"] = array(
    "uye_id" => "13",
    "isim" => "ibrahim",
    "yonetim" => "uzman",
    "sehir" => "ankara",
    "yas" => "25",

);

echo "<pre>";
print_r($_SESSION["bilgiler"]);

echo $_SESSION["bilgiler"]["yas"];
