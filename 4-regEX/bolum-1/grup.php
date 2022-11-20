<?php

$desen = '#href="([a-z\.\/\:0-9]+)"#';
$bilgi = '
        <a href="https://www.google.com">GOOGLE</a>
        <a href="https://www.youtube.com">youtube</a>
        <a href="https://www.ibocan35.com">ibocan35</a>
        
        ';


        preg_match_all($desen,$bilgi,$sonuc);

        echo "<pre>";
        print_r($sonuc);