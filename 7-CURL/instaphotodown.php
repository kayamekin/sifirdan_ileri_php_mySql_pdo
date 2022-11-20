 <?php
    function baglan($adres, $secenek = "")
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $adres);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        if ($secenek != "indir") {
            $indir = fopen(rand() . ".jpg", "w+");
            curl_setopt($curl, CURLOPT_FILE, $indir);
        }
        $sonuc = curl_exec($curl);
        curl_close($curl);
        return $sonuc;
    }


    $link = baglan("https://www.instagram.com/p/CN8lf1ohesI/");
    $desen = '#<meta property="og:image" content="(.*?)" />#';
    preg_match($desen, $link, $gorsel);


    $indirilecekLink = $gorsel[1];

    $tamamla = baglan($indirilecekLink, "indir");

    echo "<pre>";
    print_r($tamamla);
    ?>
