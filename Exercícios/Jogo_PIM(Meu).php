<?php
$valor = $_GET["valor"];

for($i=1; $i <= $valor; $i++){
  if ($i %4==0){
    echo " PIM <br>";
  } else{
    echo " $i";
  }
}

?>