<?php

include "ayar.php";
// ASC A'DAN Z'YE
// DESC Z'DEN A'YA
// ORDER BY deyimiyle birlikte sütun adı girildikten sonra DESC YA DA ASC değeri girilir ve işlem tamamlanır
// BU İŞLMEDE ALFABEYE GÖRE SIRALAMA YAPTIK

$sql = "SELECT * FROM uye_listesi ORDER BY ad asc, sehir desc";
$islem = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

foreach ($islem as $veri) {
    echo $veri["ad"]."-> ".$veri["sehir"] . "<br>";
}
