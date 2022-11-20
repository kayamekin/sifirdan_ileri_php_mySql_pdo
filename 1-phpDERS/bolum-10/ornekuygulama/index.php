<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    session_start();

    $sayi1 = rand(0, 9);
    $sayi2 = rand(0, 9);
    $islem = "$sayi1 + $sayi2 = ? ";

    $_SESSION["dogrulama_sonuc"] = $sayi1 + $sayi2;

    if (!isset($_SESSION["giris"])) {
    ?>


        <form action="giris_yap.php" method="POST">
            <table>
                <tr>
                    <td>kullanıcı adı</td>
                    <td>
                        <input type="text" name="kullaniciAdi" value="<?= @$_COOKIE["hatirlaCookie"] ?>">
                    </td>
                    <td>şifreniz</td>
                    <td>
                        <input type="password" name="sifre">
                    </td>
                </tr>
                <tr>
                    <td><?= $islem ?></td>
                    <td><input type="text" name="dogrula"></td>
                </tr>
                <tr>
                    <td>BENİ HATIRLA</td>
                    <td><input type="checkbox" name="hatirla" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" style="width:100%;" value="Giriş yap"></td>
                </tr>
            </table>


        </form>
    <?php } else {
        echo "hoşgeldiniz. (<a href='cikis.php'>Çıkış Yap</a> ";
    }

    ?>
</body>

</html>