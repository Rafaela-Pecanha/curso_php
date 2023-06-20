<?php 
//Costantes

define("NOME", "Rafaela Peçanha"); // define("nome_da_constante", "valor_da_constante");
define("IDADE", 21);
define("TIMES", ["Vasco", "Flamengo", "Fluminense"]);
echo 'Meu nome é '.NOME.' e minha idade é '.IDADE.'';
echo "<hr>";

echo  'Meu time é '.TIMES[1].'';
echo"<hr>";

//constante são globais então pode ser acessado dentro de funcões
function exibirNome(){
    echo NOME;
}

exibirNome();
?>
