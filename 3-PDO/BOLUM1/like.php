<?php

include "ayar.php";

$aranan = "eki";
$desen = "%$aranan%";

if (mb_strlen($aranan) >= 3) {
    $ara    = "SELECT * FROM uye_listesi WHERE ad LIKE ?";
    $islem  = $db->prepare($ara);
    $islem->execute(array($desen));
    $veriAl = $islem->fetchAll(PDO::FETCH_ASSOC);

    foreach ($veriAl as $v) {
        echo $v["ad"] . "<br>";
    }
}
