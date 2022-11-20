<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        .bilgiler {
            display: inline-block;
            padding: 0 100px;
        }

        .adsoyad {
            padding: 20px;
            color: white;
            border-radius: 20px;
            box-shadow: 10px 15px 20px black;
            margin: 40px;
            display: block;
            width: 100%;
            height: auto;
            background-color: forestgreen;
        }

        .aciklama {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 10px 10px 20px 20px black;
            margin: 40px;
            width: 40%;
            position: relative;
            justify-content: right;
            display: inline-block;
        } 
    </style>
</head>

<body>

    <?php

    $adSoyad     = @$_POST["adSoyad"];
    $sifre       = @$_POST["sifre"];
    $sifretekrar = @$_POST["sifretekrar"];
    $sehir       = @$_POST["sehir"];
    $cinsiyet    = @$_POST["cinsiyet"];
    $hobi        = @$_POST["hobi"];
    $ekbilgiler  = @$_POST["ekbilgiler"];




    if ($adSoyad == "") {
        echo "ad soyad alanı boş bırakılamaz.";
    } else if ($sifre == "" or $sifretekrar == "") {
        echo "şifre alanı boş bırakılamaz.";
    } else if ($sifre != $sifretekrar) {
        echo "şifreler aynı değil lütfen tekrar deneyiniz.";
    } else if (!isset($cinsiyet)) {
        echo "cinsiyet seçiniz.";
    } else {
        echo "<div class='bilgiler'>";
        echo "<div class='adsoyad'>";
        echo  " AD SOYAD :" . $adSoyad . "<br>";
        echo "</div>";

        echo "<div class='adsoyad'>";
        echo "SEHİR : " . $sehir  . "<br>";
        echo "</div>";

        echo "<div class='adsoyad'>";
        echo "CİNSİYET : " . $cinsiyet  . "<br>";
        echo "</div>";


        echo "<div class='adsoyad'>";
        foreach ($hobi as $hb) {
            echo $hb . "<br>";
        }
        echo "</div>";

        echo "</div>";


        echo "<div class='aciklama'>";
        echo $ekbilgiler;
        echo "</div>";
    }
    ?>


</body>

</html>