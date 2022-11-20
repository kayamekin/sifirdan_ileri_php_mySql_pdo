<!-- final == miras ile aktarılmasını istemediğimiz method ya da bir değimdir -->




<?php
 class A
{
    final public function yaz()
    {
        echo "merhaba";
    }
}
class B extends A
{
    public function yaz2()
    {
        echo "selam";
    }
}

$nesne    = new B();
$nesne->yaz();
$nesne->yaz2();


?>