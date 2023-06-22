<?php 
//Superglobais
/*
$GLOBALS = ACESSAR VARIAVEIS GLOBAL EM ALGUM LUGAR
$_SERVER = super global que contém dados sobre cabeçalhos, caminhos e locais de scripts
$_POST = COLETAR DADOS DE FORMULÁRIO
$_GET = COLETAR DADOS DE FORMULÁRIO
$_FILES
$_REQUEST =

*/


$x = 10;
$y = 15;

function soma(){
    echo $GLOBALS['x'] + $GLOBALS['y'];
}

soma();

echo "<hr>";

echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";

echo "<hr>";


?>
