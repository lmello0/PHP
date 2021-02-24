<?php

$n = $_GET["num"];
$numero = 1;

for($i=1; $i <= $n; $i++){
    for($j = 0; $j < 4; $j++){
        if ($numero % 4 == 0)
            echo "PIM <br>";
        else
            echo "$numero - ";
        
            $numero++;
    }
}