<?php 
/*
Operadores lógicos

e (&& - and)
ou (|| - or)
ou exclusivo (xor)
negação(!)
*/

$idade =25;
$nome ="Rafaela";

if(($idade == 25) and ($nome == "Rafaela")):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;


?>