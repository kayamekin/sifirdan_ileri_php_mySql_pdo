<?php
include "ayar.php";

$sql = "SELECT * FROM uye_listesi ORDER BY sira DESC LIMIT 3";

$islem = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);


echo "<pre>";
print_r($islem);







?>