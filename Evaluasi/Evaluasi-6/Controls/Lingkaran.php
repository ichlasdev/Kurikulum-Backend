<?php

namespace Bangundatar;

class Lingkaran{

    protected  $pi = 3.14;

    public function hitung($jari)
    {

        $luasl = $this->pi * ($jari**2);
        $kelilingl = 2 * ($this->pi + $jari);
        echo "<br/>";
        echo "<h4>Lingkaran dengan jari-jari = $jari</h4>";
        echo "<br/>";
        echo "Luas = ".$luasl." m";
        echo "<br/>";
        echo "Keliling = ".$kelilingl." m";
        echo "<br/>";

    }
}

?>
