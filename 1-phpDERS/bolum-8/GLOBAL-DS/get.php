<!-- 
    GET KULLANIMI

    global değişken olmakta birlikte bir form metodudur. 
    linklerden ya da form alanlarından direkt çağrılabilir.
    GET metodu ile bir değer , bir sayfadan başka bir sayfaya adres çubuğu ile taşınır


    adres çubuğundan değişken değerine müdahele edilebilir, kullanıcı tarafından görüntülenebilir. Bu sebeple gizli verilerin GET methodu ile gönderilmesi önerilmez.

    GET = ALMAK EDİNMEK


-->


<!-- 
 GET METODU İLE VERİ TAŞINDIĞINDA ADRES YAPISINDA gönderilen verilerin hepsi parametreler halinde gönderilir. verinin gönderileceği sayfadan sonra soru işaret (?) kullanıldıktan sonra GET parametreleri tanımlanmaktadır. Eklenecek olan değerler ile (&) ifadesiyle bağlanır


 -->

<?php

$isimSoyisim = $_GET["i"]." ".$_GET["s"];

echo $isimSoyisim ;




?>