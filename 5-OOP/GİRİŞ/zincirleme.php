<?php

class ornek
{
    private $yazi;
    private $style;

    function isim($isim)
    {
        $this->yazi = $isim;
        return $this;
    }

    function style($gelenSt)
    {
        $this->style = $gelenSt;
        return $this;
    }

    function yazdir()
    {
        echo "<div style='" . $this->style . "'>$this->yazi</div>";
    }
}
$ornek = new ornek();
$ornek->isim("ibrahim çevrük")->style("color:red")->yazdir();
