<?php
// tirnakları etkisiz hale getirme
//etkisiz hale getirmek için addslashes() -> eski haline getirmek için stripslashes()

$ornek = "ibrahim Ankara'ya geldi.";
echo stripslashes($ornek);
