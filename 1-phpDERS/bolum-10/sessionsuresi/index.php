<!-- varsayılan süresini uzatma session -->

<!-- 1440 lık saniyeyi değiştirme -->
<?php

session_start();
ini_get("session.gc_maxlifetime",5000);
echo ini_get("session.gc_maxlifetime");











?>