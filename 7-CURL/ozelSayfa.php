<?php


session_start();
if (isset($_COOKIE["giris"]) and $_COOKIE["giris"] == "ok") {
    echo "merhaba, özel sayfana hoşgeldin";
} else {
    echo "BURASI NONİKDİR";
}
