<!-- 

REQUEST kullanımı


REQUEST küresel değişkeni ; GET,POST VE COOKIE değişkenleri ile gönderilen değerlere, tek bir isim altında ulaşmak için kullanılır.

form üzerinden gönderilen değerlere REQUEST ile rahatlıkla ulaşabilirsinizç Form da belirtilen method alanında GET ya da POST yazmanızın REQUEST ile erişilmesinde farklılık göstermeyecektir.


REQUEST : İSTEK TALEP RİCA
 -->


<form action="" method="POST">
<input type="number" name="sayi">
<button>GÖNDER</button>
</form>


<?php

    if($_REQUEST){
        echo $_REQUEST["sayi"];
    }






?>