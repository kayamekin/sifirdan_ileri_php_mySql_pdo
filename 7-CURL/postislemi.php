<?php

$siteadresi = "http://localhost/CURL/kayit.php";
$postverisi = [
    "isim"  => "ibrahim",
    "soyisim"  => "çevrük",
    "mail"  => "ibo@hotmail.com",
    "bilgi"  => "merhaba, bu işlemi curl ile gerçekleştirdim :)"
];

$curl   = curl_init();

curl_setopt($curl, CURLOPT_URL, $siteadresi);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_POST, TRUE);
curl_setopt($curl, CURLOPT_POSTFIELDS,$postverisi);

$sonuc = curl_exec($curl);


echo $sonuc;



curl_close($curl);

