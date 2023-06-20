<?php 
/*
Condicionais 
if
else
elseif
*/

$numero = 10;

if($numero ==10):
    echo "É igual a 10";
elseif($numero <-9):
    echo "É menor ou igual a 9";
else:
    echo "É diferente de 10";
endif;


echo "<hr>";

$media =7;

echo ($media >= 7) ? "Aprovado" : "Reprovado";
echo "<hr>";

/*
Condicionais
switch
case
break
*/

$cor = "vermelho";

switch($cor):
    case "vermelho":
    echo "Sua cor preferia é o vermelho";
    break;

    case "verde":
    echo "Sua cor preferida é o verde";
    break;

    case "azul":
    echo "Sua cor preferida é azul";
    break;

    default:
    echo "Sua cor preferida não é vermelho, verde ou azul";
    break;
endswitch;


/*
Condicionais
switch
case
*/


?>