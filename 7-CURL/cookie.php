<!-- oturum işlemleri -->
<form action="" method="post">
    kullanıcı adı <br>
    <input type="text" name="kullaniciadi"> <br>
    şifreniz <br>
    <input type="password" name="sifre">
    <button>GİRİŞ YAP</button>
</form>


<?php
// session_start();
// session_destroy();
if ($_POST) {
    session_start();
    $kullanici = $_POST["kullaniciadi"];
    $sifre = $_POST["sifre"];
    if ($kullanici == "ibo" and $sifre == "ibo") {
        setcookie("giris", "ok", time() + 60 * 60);
        // $_SESSION["giris"]      = "ok";
        header("Location: ozelSayfa.php");
    } else {
        echo "bilgiler hatalı!";
    }
}















?>