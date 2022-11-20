<!-- 
    $_FILES DEĞİŞKENİ

    1-kullanıcıların form üzerinden dosya yüklemeleri durumunda $_FILES küresel değişkeninden yararlanır.

-----------------------------------------
    FILES küresel değişkeni, yüklenen dosya için alt dizin oluşturmaktadır. Bu dizinler yüklenen dosya hakkında birtakım bilgiler verecektir.

    FILES dosyalar dosya klasör

----------------------------------------
    $_FILES DEĞERLER

    dosya işlemlerinde $_FILES değişkeni yükleme sonucuna göre belirli değerler döndürmektedir.


    name = gönderilen dosyanın adını belirtmektedir.


    type = gönderilen dosyanın tipini belirtmektedi.(word-excel mi herhangi bir tip)

    tmp_name = gönderilen dosyanın geçici olarak barındığı adresi belirtmektedir.. (barındığı adresi öğrenme)

    size= dosyanın bayt cinsinden boyutunu belirtmektedir. (max-5mb)


    error = gerçekleşen hataları belirtmektedir. (hata bilgisi öğrenme)

----------------------------------------

FILES FORM TİPİ 

Dosya gönderim işlemleri için FORM oluşturulurken enctype eklenip, değerine multipart/form-data
parametresi eklenmelidir. Aksi durumda yükleme işlemi gerçekleşmez.

 -->
<form action="" method="POST" enctype="multipart/form-data">
<input type="file" name="dosya" id="">
<input type="submit" value="yükle">
</form>




 <?php
echo "<pre>";
    print_r($_FILES);
echo "</pre>";




?>