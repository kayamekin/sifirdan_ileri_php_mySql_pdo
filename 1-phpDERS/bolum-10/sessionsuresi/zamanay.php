<?php

session_start();

if (!isset($_SESSION["sure"])) {
    $_SESSION["sure"] = time() + 60 * 60;
    $_SESSION["adSoyad"] = "ibrahim çevrük";
}


if (time() > $_SESSION["sure"]) {
    // $_SESSION["sure"] = time() + 60;
    unset($_SESSION["adSoyad"]);
    // session_destroy();
}
