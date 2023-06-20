<?php 
/*
Operadores aritmeticos

Adição +
Subtração -
Multiplicação *
Divisão /
Módulo %
Exponencial **
*/

function soma($a, $b){
    echo $a + $b;
    echo "<hr>";
}

function subtracao($a, $b){
    echo $a - $b;
    echo "<hr>";
}

function multiplicacao($a, $b){
    echo $a * $b;
    echo "<hr>";
}

function divisao($a, $b){
    echo $a / $b;
    echo "<hr>";
}

function modulo($a, $b){
    echo $a % $b;
    echo "<hr>";
}

function exponencial($a, $b){
    echo $a ** $b;
    echo "<hr>";
}

soma(4,5);
subtracao(4,5);
multiplicacao(4,5);
divisao(4,5);
modulo(4,5);
exponencial(4,5);


?>