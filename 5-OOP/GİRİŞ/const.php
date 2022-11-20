<!-- const : bir kez tanımlanırsa asla değiştirilemez -->

<!-- const deger = 34;  -->
<!-- kullanımı üsttedir -->

<?php
class A
{
    const sehir = "Ankara";
    public static function yazdir()
    {
        echo self::sehir;
    }
}


echo A::sehir;
echo "<br>";

A::yazdir();







?>