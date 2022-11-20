<?php
/* dizin adını değiştirme (taşıma ve silme) */

$islem = rmdir("sistem");
if($islem){
    echo "silindi";
}else{
    echo "maalesef";
}

?>