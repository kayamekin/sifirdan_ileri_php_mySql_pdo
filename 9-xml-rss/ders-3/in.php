<?php

include "ayar.php";

header("content-type: text/xml; charset=utf-8");

// xml yapısı

echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<rss version="2.0">';
echo "<channel>";
echo "<title>KAYA MEKİN</title>";
echo '<description>RSS DERSİ</description>';
echo '<link>https://www.ibrahimcevruk.com/</link>';
echo '<lastBuildDate>wed, 26 dec 2021 21:00:50 +0000</lastBuildDate>';
$veriler = $db->query("SELECT * FROM yazilar ORDER BY sira DESC LIMIT 4");
$verial =  $veriler->fetchAll(PDO::FETCH_ASSOC);

$verisay = $veriler->rowCount();
if ($verisay > 0) {

    foreach ($verial as $veri) {

        echo '<item> ';
            echo '<title> '  . $veri["baslik"] . '</title>';
            echo '<link> http://www.ibrahimcevruk.com/'  . $veri["link"] . ' </link>';
            echo '<comments>'  . $veri["aciklama"] . '</comments>';
        echo '</item>';
    }
}


echo '</channel>';
echo '</rss>';
