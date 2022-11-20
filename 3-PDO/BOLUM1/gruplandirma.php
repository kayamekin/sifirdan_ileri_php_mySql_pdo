<?php
include "ayar.php";

// verileri düzgünce gruplandırmak için bu kodlamayı yapmamız gerek


$sql = "SELECT 
            sehir, COUNT(*) /* gruplandırma metodu */ 
            as toplamSayi 
        FROM /*bununla hangi proje olacağı seçilir*/
            uye_listesi 
        GROUP BY /*bununla hangi gruba uygulanacağı seçilir*/
            sehir
        HAVING /*(şart-belirtme)ile dışlama yapılabilir sınırlandırma ve değer*/
            sehir !='ankara'  ";


$islem = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";

print_r($islem);
