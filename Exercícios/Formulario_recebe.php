<?php

$codigo = $_POST["codigo"];
$nome = $_POST ["nome"];
$quantidade = $_POST ["quantidade"];
$unidade = $_POST ["unidade"];
$preco = $_POST ["preco"];

echo "</br> Produto cadastrado com sucesso </br></br>";
echo "$codigo </br> $nome </br> $quantidade </br> $unidade UN </br> $preco R$ </br>";

?>