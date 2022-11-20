<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <?php include "ayar.php"; ?>


    <table border="1px" ;>
        <tr>
            <td>Adı</td>
            <td>soyadı</td>
            <td>Şehir</td>
            <td>cinsiyet</td>
            <td>Güncelle</td>
            <td>sil</td>
        </tr>


        <?php
        $listele = $db->query("SELECT * FROM uyeler ORDER BY sira DESC")->fetchAll(PDO::FETCH_ASSOC); ?>
        <?php foreach ($listele as $veri) { ?>
            <tr class="sil-<?= $veri["sira"] ?>">
                <td><?= $veri["ad"] ?></td>
                <td><?= $veri["soyad"] ?></td>
                <td><?= $veri["sehir"] ?></td>
                <td><?= $veri["cinsiyet"] ?></td>
                <td>-</td>
                <td><button onclick="sil('<?= $veri["sira"] ?>')">Sil</button></td>
            </tr>
        <?php }       ?>





    </table>




    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>



    <script>
        function sil(sira) {

            var veriler = "silSira=" + sira + "&islem=sil";
            $.ajax({

                type: "POST",
                url: "islemler.php",
                data: veriler,
                success: function(cevap) {
                    $(".sil-" + sira).css("display", "none");
                }

            });

        }
    </script>

</body>

</html>