<!-- 
    tablo birleştirme
    veritabanlarında bulunan tabloların sahip olduğu alanlar, diğer tablolar ile ilişkili durumda olabilir. ilişkilendirilmiş tablolar arasındaki bağı birleştirmek işlem gerçekleştirmek için JOİN deyimi kullanılmaktadır böylece tabloların birleşimi kesişim ve farkı gibi küme işlemlerini JOİN deyimi ile kolayca gerçekleştirebiliriz.

    JOIN -> birleştirmek katmak ve katılmak anlamına gelmektedir.

-->

<!-- 
    LEFT JOIN

    kategoriler tablosu ile makaleler tablosu birleştirilmektedir.
    Birleştirme işlemi kategori tablosundaki sira sütunu ie makale tablosundaki kategori sütunu iarasında gerçekleşmektedir.

    //ÖRNEK----

    $veriler = $pdo->query("
    
    SELECT
        kategoriler.kategori_adi, makaleler.baslik
    FROM
        kategoriler LEFT JOIN makaleler
    ON 
    kategoriler.sira = makaleler.kategori
    ")->fetchAll(PDO::FETCH_ASSOC);

-->


<?php

include "ayar.php";

$SQL = "SELECT 
uye_listesi.ad, uye_listesi.soyad, iller.il_adi
FROM
    uye_listesi  JOIN iller
ON
    uye_listesi.sehir = iller.il_kod
";

$islem = $db->query($SQL)->fetchAll(PDO::FETCH_ASSOC);


foreach ($islem as $veri) {
    echo $veri["ad"] ." ". $veri["soyad"]." ->". $veri["il_adi"];
    echo "<br>";
}











?>