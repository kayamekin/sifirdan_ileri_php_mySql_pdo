<?php

$host = $_SERVER["HTTP_HOST"];
$sayfa = $_SERVER["REQUEST_URI"];
$parametre = $_SERVER["QUERY_STRING"];
$sa = md5($host . $sayfa . $parametre);
$yol = "cache/" . $sa . ".html";
$sure = 60 * 60 * 24;
$hesapla = time() - $sure;

if (file_exists($yol) and ($hesapla < $filemtime($yol))) {

    include($yol);
    exit;
}

ob_start();
?>


<a href="#">selamlar</a>
<?php

$dosya = fopen($yol, "w");
fwrite($dosya, ob_get_contents());
fclose($dosya);
ob_end_flush(); // dosya oluşturma işlemleri



?>