<?php 
/*
Funções para Números 

number_format
round arrendondar
ceil só arredonda pra cima
floor só arredonda pra baixo
rand gera numero aleatório
 */

$db = 1234.56;

$preco = number_format($db, 2, ",", ".");
echo "O valo do produto é R$ $preco";
echo "<hr>";

echo round(3.6);
echo "<hr>";

echo ceil(3.6);
echo "<hr>";

echo floor(3.6);
echo "<hr>";

echo rand(1, 20);
echo "<hr>";


?>