<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="app.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="basarili"></div>
    <div id="hata"></div>


    <form action="" id="iletisim-form" method="post" onsubmit="return false;">

        <div class="form">



            <span class="text"> Ad-Soyad: </span><br>
            <input type="text" placeholder="adınız ve soyadınız" id="adsoyad" name="adsoyad"> <br> <br>

            <span class="text"> E-MAİL: </span><br>
            <input type="text" placeholder="E-mail" id="eposta" name="eposta"> <br> <br>

            <span class="text">Mesajınız:</span> <br><br>
            <textarea name="mesaj" id="mesaj" cols="30" rows="5"></textarea> <br> <br>


            <button type="submit" id="gonder-btn">Gönder</button>
    </form>





    </div>






</body>

</html>