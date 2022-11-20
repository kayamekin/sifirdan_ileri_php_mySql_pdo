<?php

$desen = "#[a-z A-Z 0-9]#";

$metin = "ibrahim ÇEVRÜK 2050";

preg_match_all($desen,$metin, $sonuc);

print_r($sonuc);







?>