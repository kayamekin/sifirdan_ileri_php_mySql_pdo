<?php

// hata yakalama ve fırlatma

/* try {
    if (!function_exists("isim")) {
        throw new Exception("isim no no no ")
       echo isim();

    }
} catch (Exception $mesaj) {
    echo "<pre>";
    print_r($mesaj);
}
 */


//  hata raporlama


// son hatayı yakalama
/* 
echo @$a;

echo "<pre>";
print_r(error_get_last());
 */

// 

register_shutdown_function("hatayakala");



echo $a;


function hatayakala()
{
    echo "<pre>";
    print_r(error_get_last());
    echo "</pre>";
}
