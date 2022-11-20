<!-- 
-get methodu güvenlik riski oluşturur
-kullanılması pek hoş değildir
-adres çubuğunda verileri kullanıcı görüntüleyebilir
-bu sebeplerden dolayı GET methodu sağlıklı değildir.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        form {
            background-color: #474040;
            color: white;
            padding: 20px;
            width: 100%;
            margin: auto;
        }

        .button {
            display: block;

            float: right;
            position: relative;
            padding: 15px 26px;
            color: white;
            background-color: #025382;
            border: none;

        }

        h3 {
            padding: 50px;
        }
    </style>
</head>

<body>
    <form action="deneme.php" method="post">
        AD : <br> <input type="text" name="ad" required="required"> <br>
        SOYAD : <br> <input type="text" name="soyad" required="required"> <br>
        KULLANICI ADI : <br> <input type="text" name="kullaniciAdi" required="required"> <br>
        ŞİFRE : <br> <input type="password" name="parola" required="required"> <br>
        il : <br> <input type="text" name="il" required="required"> <br>
        ilce : <br> <input type="text" name="ilce" required="required"> <br>
        <input class="button" type="submit" value="GÖNDER">

        <input class="button" type="reset">
        <h3>lütfen bilgilerinizi giriniz ! </h3>
    </form>
</body>

</html>