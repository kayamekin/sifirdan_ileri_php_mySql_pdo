<?php

// dosya silme



$zip = new ZipArchive();
$zipadi = getcwd()."/ders.zip";
if($zip->open($zipadi)=== TRUE){

    // $zip->deleteName("bilgi1/bilgi.txt");
    $zip->renameName("bilgi2/bilgi.txt","bilgi2/bilgisssss.txt");
    $zip->close();
    // echo "silindi";
    echo "düzenlendi";

}else{
    $zip->close();
    echo "sorun var";
}



?>