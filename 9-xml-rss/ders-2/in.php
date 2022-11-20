<?php

// cocukları göster
/*  $xml = new SimpleXMLElement("test.xml", null, true);

foreach ($xml->children() as $name) {
    foreach ($name->children() as $cocuk) {
        echo $cocuk . "<br>";
    }
    echo "<hr>";
}
  */

// cocuk dugumlerin sayısını alma

/* $xml = new SimpleXMLElement("test.xml", null, true);

foreach ($xml->children() as $name) {
    echo $name->count();
    echo "<hr>";
}
 */

//  düğüm isimlerini bulma

/* $xml = new SimpleXMLElement("test.xml", null, true);

foreach ($xml->children() as $name) {
    foreach ($name->children() as $cocuk) {
        echo $cocuk->getName() . " : ";
        echo $cocuk . "<br>";
    }
    echo "<hr>";
} */

$xml = new SimpleXMLElement("nitelik.xml", null, true);

foreach ($xml->personel as $bilgi) {
    foreach ($bilgi->attributes() as $key => $icerik) {

        echo $key." -> ".$icerik . "<br>";
    }
    echo "<hr>";
}
