<?php

include "ayar.php";

$db->beginTransaction();


$sql1 = "UPDATE uye_listesi SET soyad='beyaz' WHERE sira=3 ";

$islem1 = $db->query($sql1);


$sql2 = "UPDATE uye_listesi SET soyad='name' WHERE sira=4 ";

$islem2 = $db->query($sql2);


if ($islem1 and $islem2) {
    $db->commit();
    echo "başarılı";
} else {
    $db->rollBack();
    echo "hata";
}
