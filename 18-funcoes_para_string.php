<?php 
/* 
Funções para Strings
strtoupper
strolower
substr
str_pad
str_repeat Reete string
strlen
str_replace
strpos
*/

$nome = "rafaela peçanha";
$nomeMaiuscula = strtoupper($nome);
echo $nomeMaiuscula;
echo "<hr>";

$nomeMinuscula = strtolower($nomeMaiuscula);
echo $nomeMinuscula;
echo "<hr>";

$mensagem = "Olá Mundo";
echo substr($mensagem, 4, 5);
echo "<hr>";

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 10, "*", STR_PAD_BOTH);
echo $novoObjeto;
echo "<hr>";

$string = str_repeat("Sucesso!", 5);
echo $string;
echo "<hr>";

echo strlen($mensagem);
echo "<hr>";

$texto = "Aseleção Argentina será campeã da copa do mundo em 2018";
$novoTexto = str_replace("Argentina", "Brasileira", $texto);
echo $novoTexto;
echo "<hr>";

echo strpos($texto, "copa");
echo "<hr>";



?>


