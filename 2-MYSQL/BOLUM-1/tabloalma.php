<?php


$yeniDB = mysqli_connect("localhost", "root", "", "yeni_Mysqli_dersleri");
$SQL    = "SHOW TABLES FROM yeni_Mysqli_dersleri";
$islem  = mysqli_query($yeniDB, $SQL);

while ($veri    = mysqli_fetch_row($islem)) {
    $tabloadi   = $veri[0];
    echo "<hr>";

    echo $tabloadi;

    echo "<hr>";

    $tabloBilgi = "SHOW COLUMNS FROM  $tabloadi";
    $sutunAl = mysqli_query($yeniDB, $tabloBilgi);
    while ($sutunBilgi = mysqli_fetch_row($sutunAl)) {
        foreach ($sutunBilgi as $sB) {
            echo $sB . "<br>";
            if ($sB != "") {
                echo $sB . "<br>";
            }
        }
    }
    echo "<br>";
}
