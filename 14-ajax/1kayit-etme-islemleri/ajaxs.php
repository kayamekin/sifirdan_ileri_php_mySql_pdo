<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="javascript:void(0)" class="kayitformu">
        <input type="hidden" name="islem" value="kayit">
        <table>
            <tr>
                <td>adınız</td>
                <td><input type="text" name="isim"></td>
            </tr>

            <tr>
                <td>soyad</td>
                <td><input type="text" name="soyad"></td>
            </tr>

            <tr>
                <td>şehriniz</td>
                <td>
                    <select name="sehir">
                        <option value="-1">seçiniz</option>
                        <option value="ankara">ankara</option>
                        <option value="istanbul">istanbul</option>
                        <option value="izmir">izmir</option>
                        <option value="samsun">samsun</option>
                        <option value="sinop">sinop</option>
                        <option value="denizli">denizli</option>
                        <option value="denizli">uşak</option>

                    </select>
                </td>
            </tr>

            <tr>
                <td>Cinsiyetiniz</td>
                <td>
                    <select name="cinsiyet">
                        <option value="-1">seçiniz</option>
                        <option value="erkek">erkek</option>
                        <option value="kadın">kadın</option>


                    </select>
                </td>
            </tr>

            <tr>
                <td></td>
                <td><button onclick="kaydet()">KAYDET</button></td>

            </tr>
        </table>

    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        function kaydet() {
            var tumBilgiler = $(".kayitformu").serialize();
            var isim = $("input[name=isim]").val();
            var soyad = $("input[name=soyad]").val();
            var sehir = $("input[name=sehir]").val();
            var cinsiyet = $("input[name=cinsiyet]").val();

            if ($.trim(isim) == "") {
                alert("isim değerini boş bırakmayınız");
            } else if ($.trim(soyad) == "") {
                alert("soyad değerini boş bırakmayınız");

            } else if (sehir == -1) {
                alert("sehir alanını boş bırakmayınız");
            } else if (cinsiyet == -1) {
                alert("cinsiyet alanını boş bırakmayınız");
            } else {
                $.ajax({

                    type: "POST",
                    url: "islemler.php",
                    data: tumBilgiler,
                    success: function(cevap) {

                        if (cevap == "tamam") {
                            alert("kayıt sağlandı");

                            $("button").attr("disabled", true);
                        } else {
                            alert("başarısız");
                        }
                    }

                });

            }
        }
    </script>



</body>

</html>