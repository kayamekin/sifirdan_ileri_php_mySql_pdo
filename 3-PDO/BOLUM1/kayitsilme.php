<?php


include "ayar.php";

/* $SQL = "DELETE FROM uye_listesi WHERE sira='13'";

$islem = $db->query($SQL);


if ($islem) {
    echo "veri silindi";
} */

$SQL   = "DELETE FROM uye_listesi WHERE sira=?";
$sorgu = $db->prepare($SQL);

$islem = $sorgu->execute(array(6));

if ($islem) {
    echo "veri silindi";
}
