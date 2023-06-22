<?php 

//Criando funções

function exibirNome ($nome){
    echo "Meu nome é $nome";
}
exibirNome("Adriele Santos");

echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4) {
    $media = ($n1 + $n2 + $n3 + $n4)/4;
    if($media >= 7):
        echo "$nome foi aprovado com a média $media.";
    else: 
        echo "$nome foi reprovado";
    endif;
}
calcularMedia("Rafaela", 8,4,10,9);
?>