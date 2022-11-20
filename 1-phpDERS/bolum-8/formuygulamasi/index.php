<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            background-color: #f2f2f2;
            font-family: sans-serif;
            margin: 40px;
        }

        .hepsi {
            padding: 20px;
        }

        input {
            border: none;
            transition: 1s;

        }

        textarea {
            transition: 1s ease;
        }

        textarea::before {
            color: white;
        }

        textarea::after {
            color: black;
        }

        input:hover,
        textarea:hover {
            padding: 20px 3px;
            color: gray;
            background-color: #06739e;
            color: white;
        }

        h5 {
            margin: 0;
            padding: 0;
        }


        .formeleman1,
        .formsehir,
        .cinsi,
        .hobi,
        .onayla {
            background-color: #06739e;
            display: block;
            width: 300px;
            margin: 40px;
            padding: 30px;
            color: white;
            border-radius: 20px;
            box-shadow: 10px 5px 50px 20px black;
        }

        .ekbilgi {
            background-color: #06739e;

            width: 400px;
            padding: 80px;
            margin: 40px;
            display: inline-block;
            color: white;
            border-radius: 20px;
            box-shadow: 10px 5px 50px 20px black;
        }

        button {
            padding: 20px;
            font-family: sans-serif;
        }

        .kutucuk {
            width: 50px;
            height: 50px;
            margin: auto;
        }
    </style>
</head>

<body>

    <form action="yazdir.php" method="POST" id="kullaniciForum">
        <div class="hepsi">
            <div class="hepicigi">
                <!-- form isim soy isim -->
                <div class="formeleman1">


                    <h5 class="formbaslik"> Adınız soyadınız : </h5><br>
                    <input class="form1" type="text" name="adSoyad"> <br>

                    <h5 class="formbaslik">şifreniz :</h5><br>
                    <input class="form1" type="password" name="sifre" id=""> <br>

                    <h5 class="formbaslik"> şifrenizi tekrar giriniz : </h5> <br>
                    <input class="form1" type="password" name="sifretekrar" id=""><br>

                </div>
                <!-- formsehir -->

                <div class="formsehir">
                    şehir: <select name="sehir">
                        <option value="ankara-06">Ankara</option>
                        <option value="izmir-35">izmir</option>
                        <option value="istanbul-34">istanbul</option>
                        <option value="usak-64">uşak</option>
                        <option value="adiyaman-01">adıyaman</option>
                    </select>
                    <br>
                </div>
                <!-- cinsiyet -->
                <div class="cinsi">

                    cinsiyet : <br>
                    <input type="radio" name="cinsiyet" value="erkek">erkek
                    <input type="radio" name="cinsiyet" value="kadın">kadın
                    <br>

                </div>


                <!-- hobi -->

                <div class="hobi">
                    hobileriniz : <br>
                    <input type="checkbox" name="hobi[]" value="kitap okumak">kitap okumak<br>
                    <input type="checkbox" name="hobi[]" value="havuz">havuz<br>
                    <input type="checkbox" name="hobi[]" value="yürüyüş">yürüyüş<br>
                    <input type="checkbox" name="hobi[]" value="yüzme">yüzme<br>
                </div>
            </div>

            <!-- ekbilgi -->
            <div class="ekbilgi">
                Ek Bilgiler : <br>
                <textarea name="ekbilgiler" id="" cols="40" rows="3"></textarea>
                <br>
            </div>


            <br>
            <!-- onayla -->
            <div class="onayla">

                <h3>FORM GÖNDERMEYİ ONAYLIYOR MUSUNUZ?</h3>

                <input type="checkbox" name="onayla" required="required" name="comment" form="kullaniciforum" class="kutucuk">
                <br>
                <button value="onaylandı">ONAYLA</button>
            </div>


        </div>
    </form>




</body>

</html>