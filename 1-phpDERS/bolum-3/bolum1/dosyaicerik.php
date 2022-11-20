<?php

/* 
    dosya içeriğini okuma

    dosya içerisinde yer alan verilerin hepsini almak için fread() fonksiyonu kullanılmalıdır. bu fonksiyon iki parametre alır. ilkinde dosya seçilir, ikincisinde kaç byte'lık veri okunacağı yazılır. tüm verileri alacağımızdan filesize() fonksiyonu ile byte hesaplaması otomatik yapılır..

    HATIRLATMA

    r kipi : 
    dosya okuma kipinde açılır imleç dosyanın başında yer alır.

    b ve t kipi: 
    \n ifadesinin tüm platformda çalışmasını sağlar



    // dosya içeriğini okuma

    dosya içerisinde yer alan satırlar tek tek alınmak istendiğinde, fget() fonksiyonu kullanılır. bu fonksiyonu while döngüsü kullanılarak kombinlenebilir wjile döngüsüne feof() fonksiyonunda dosya belirtilip satır sonlarına gelen veriler yakalanır..

*/


/* 
dosyaOku değişkenine dosyamızı okutacak şekil de açtırdık "r okuma bt" yazıp okuma izini veridk

boyut değişkeninde dosyanın ne kadar boyut kapladığını öğrendik

okut değişkeninde fread diyip read ingilizce kelimeden türkçede oku demek
okuması gerekn değişkenleri verdik ve echo komutuyla okut değişkenini ekrana yazdırdık

en son olarak fclose diyip açıksa eğer klasör dosya veya içerik onu kapattık
yani sonlandırdık...
*/

/* $dosyaOku = fopen("isimler.txt", "rbt");
$boyut = filesize("isimler.txt");
$okut = fread($dosyaOku, $boyut);
echo $okut;
fclose($dosyaOku); */


/* alt kısımda while feof ve fgets i kullandık bunlar sayesinde dosyanın içerisindeki nesnelere yön verebiliyoruz. yani kelimeleri alt alta yada üstü üste istediğimi çevreye sokabiliriz....

feof un başına ünlem koyduk yani olumsuzluk eki. dosya bitene kadar alt satıra gelme işlemi bitene kadar devam ettirebilmek için.
*/


/* $dosyaOku = fopen("isimler.txt", "rbt");
$boyut = filesize("isimler.txt");
while (!feof($dosyaOku)) {
    echo fgets($dosyaOku)."<br>";
}

fclose($dosyaOku);
 */


// function oku($dosya){
//     $dosya = fopen($dosya, "r");
//     while (($satir = fgets($dosya)) !== false) {
//         yield $satir;
//     }
//     fclose($dosya);
// }

// $parametre = oku("isimler.txt");
// foreach($parametre as $satir){
//     echo $satir . "<hr>";
// }



/* 
    DOSYA BAŞLANGICINI KONUMLANDIRMA

    Dosyadan alınacak verilerin başlangıç noktasını belirlemek için fseek() fonksiyonu kullanılmaktadır. bu fonksiyon ile dosya içerisinde yazının  nereden başlayacağını belirleyebilirsiniz.



    SEEK_SET

    dosyanın başlangıcından kaç byte atlanacağı ayarlanır
    varsayılan ayar olarak bilinir
    VARSAYILANDIR...


    SEEK_CUR

    imlecin mevcut konumu korunur ikinci parametrede yer alan değere göre işlem sağlanır

    SEEK_END

    imleç dosyanın sonuna konumlandırılır.. ikinci parametrede yer alan negatif değere göre işlem sağlanır.

*/


$dosya = fopen("isimler.txt","rb");

fseek($dosya, -5, SEEK_END);
$boyut = filesize("isimler.txt");
$oku = fread($dosya, $boyut);
echo $oku;
fclose($dosya);