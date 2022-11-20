<?php

/* 
// ilk ders
$site = "https://www.ibrahimcevruk.com";
$baglan = file_get_contents($site);

highlight_string($baglan);
 */
/*--------------------------------------- */
// istenilen veriye ulaşma

/* $site   = "https://www.phpkitap.com/";
$baglan = file_get_contents($site);

$title  = "<title>site başlığı</title>";
$ilkbolum = explode("<title>", $baglan);
$sonbol = explode("</title>", $ilkbolum[1]);


echo $sonbol[0];
 */
$site   = "https://www.ibrahimcevruk.com/";
$baglan = file_get_contents($site);
$desen  = "#<title>(.*?)</title>#";

preg_match($desen , $baglan , $sonuc);

/* echo "<pre>";
print_r($sonuc); */
echo $sonuc[1];