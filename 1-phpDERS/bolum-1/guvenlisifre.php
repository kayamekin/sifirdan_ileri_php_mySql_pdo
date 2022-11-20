<?php

$parola  = "22123";
$sifrele =
    sha1(
        base64_encode(
            md5(
                base64_encode(
                    $parola
                )
            )
        )
    );


$kes = substr($sifrele, 3, 10);
echo $sifrele . "<br>" . $kes;
