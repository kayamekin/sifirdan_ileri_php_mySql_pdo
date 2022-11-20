<?php




if(isset($_POST["hatirla"])){
    setcookie("sifre",$_POST["sifre"],time() + 60*60);
    echo $_COOKIE["sifre"];
}else{
    echo $_POST["sifre"];
}

?>