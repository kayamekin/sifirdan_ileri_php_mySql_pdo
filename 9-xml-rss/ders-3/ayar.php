<?php

try {


    $db = new PDO("mysql:host=localhost; dbname=dersler", "root", "");

    $db->query("SET CHARSET UTF8");
} catch (PDOException $a) {
    die("hata : " . $a->getMessage());
}

