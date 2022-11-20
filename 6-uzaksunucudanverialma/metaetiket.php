<?php

$site = "https://www.phpkitap.com";
$baglan = get_meta_tags($site);

echo $baglan["description"];