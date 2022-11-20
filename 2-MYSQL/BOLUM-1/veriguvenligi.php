<form action="" method="post">
    <input type="text" name="isim">

    <button>gonder</button>
</form>


<?php
if ($_POST) {
    // $isim = trim($_POST["isim"]);

    /* 
        // boşluk bırakılmaması için
    if ($isim == "") {
        echo "boş olamaz";
    } else {

        echo $isim;
    } */

    /* 
    // sadece numara girilmesi için
   if(!is_numeric($isim)){
        echo "veri sayısal değildir";

    }else{
        echo $isim;
    } */

    /*   
//   15sayıdan fazlası girilmemesi için
  if(strlen($isim) > 15){
        echo "15 karakterden büyük olamaz";

    }else{
        echo $isim;
    }  */

    /* 

    //  HTML kodlarını engelleme ve bazılarına izin vermek için

    $isim = strip_tags($_POST["isim"],"<p><b><i>");

    echo $isim;
 */

    /* 
    // -- ne yazdıysan onu çıkarır html elementlerine izin vermez

    $isim = htmlspecialchars($_POST["isim"]);
    echo $isim; 
     $isim = htmlspecialchars($_POST["isim"]);
    echo $isim;
    
    */
}
?>