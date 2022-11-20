<?php


session_start();

$ontanim_kullanici  = "admin";
$ontanim_sifre      = "admin";


if (
    trim($_POST["kullaniciAdi"]) == "" ||  trim($_POST["sifre"]) == "" ||  trim($_POST["dogrula"]) == ""
) {

    echo "boş alan bırakmayınız";
    echo "<a href='index.php'>Geri Dön</a>";
} else if (($_POST["kullaniciAdi"] != $ontanim_kullanici) and
    ($_POST["sifre"] != $ontanim_sifre)
) {
    echo "kullanici adi yada şifre uyuşmuyor! <br>";
    echo "<a href='index.php'>Geri Dön</a>";
}else if($_POST["dogrula"] != $_SESSION["dogrulama_sonuc"]){
    echo "güvenlik kodu doğru değil <br>";
    echo '<a href="index.php">Geri dön</a>';
}else{
    $_SESSION["giris"] = "ok";
    $_SESSION["kullanici"] = $_POST["kullaniciAdi"];

    if(isset($_POST["hatirla"])){
        setcookie("hatirlaCookie" , $_POST["kullaniciAdi"], time() + 60*60);
    }
    header("location:index.php");
}
