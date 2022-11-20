<?php
include "ayar.php";

$il = $_POST["il"];

$ilceler = $db->query("SELECT * FROM ilce WHERE il='$il'")->fetchAll(PDO::FETCH_ASSOC);
foreach ($ilceler as $ilce) {
    echo "<option value='" . $ilce['sira'] . "'>" . $ilce["ilce_adi"] . "</option>";
}
