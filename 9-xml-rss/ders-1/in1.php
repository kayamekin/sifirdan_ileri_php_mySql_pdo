<?php

$xml = new SimpleXMLElement("test.xml", null, true);
/* echo "<pre>";
print_r($xml);
echo "</pre>" */

$ad = $xml->personel[1]->adsoyad;
$dep = $xml->personel[1]->departman;
echo $ad . "-" . $dep . "<br><br>";

/* echo $xml->personel[0]->adsoyad . " - " . $xml->personel[0]->departman . "<br>";
echo $xml->personel[1]->adsoyad . " - " . $xml->personel[1]->departman . "<br>";
echo $xml->personel[2]->adsoyad . " - " . $xml->personel[2]->departman . "<br>"; */


?>

<!-- <style>
    .personel {
        transition: 1s;
        border: 1px solid black;
        margin: 40px;
    }

    .person1 {
        transition: 1s;
        margin: 40px;
    }

    .person1:hover {
        border-radius: 20px;
        background-color: teal;
        color: white;
        width: 300px;
        height: 300px;
        border: none;
        padding: 20px;
        transform: rotate(360deg);
        transition: 2s ease;
        box-shadow: 20px 10px 20px black;

    }
</style>

<div class="personel" style=" padding: 20px;">
    <div class="person1">
        <?php
        echo $xml->personel[0]->adsoyad . " - " . $xml->personel[0]->departman . "<br>";

        ?>
    </div>

</div>
<div class="personel" style=" padding: 20px;">
    <div class="person1">
        <?php
        echo $xml->personel[1]->adsoyad . " - " . $xml->personel[1]->departman . "<br>";

        ?>
    </div>

</div>
<div class="personel" style=" padding: 20px;">
    <div class="person1">
        <?php
        echo $xml->personel[2]->adsoyad . " - " . $xml->personel[2]->departman . "<br>";

        ?>
    </div>

</div> -->