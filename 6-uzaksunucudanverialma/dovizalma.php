
<?php
$site = "https://www.tcmb.gov.tr/kurlar/today.xml";
$baglan = file_get_contents($site);
preg_match_all("#<Isim>(.*?)</Isim>#", $baglan, $isim);
preg_match_all("#<ForexBuying>(.*?)</ForexBuying>#", $baglan, $alis);
preg_match_all("#<ForexSelling>(.*?)</ForexSelling>#", $baglan, $satis);
$say =  count($isim[1]);
for ($a = 0; $a < $say; $a++) {
    echo $isim[1][$a] . "<br>";
    echo "<b> Alış : </b>" . $alis[1][$a] . "<br>";
    echo "<b> Satış : </b>" . $satis[1][$a] . "<br>";
    echo "<hr>";
}
