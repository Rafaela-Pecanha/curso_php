<?php 
//Arrays numéricos

$carros = array(1=>"BMW", 2=>"Ferrari", 3=>"Hilux");

//echo não funciona com array, tem que ser print_r
print_r($carros);
echo "<hr>";

//echo funciona quando passo o índice do vetor
echo $carros[1];
echo "<hr>";

// acrescentando no vetor
$carros[] = "Amarok";
$carros[10] = "Palio";
print_r($carros);
echo "<hr>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";

print_r($motos);
echo "<hr>";

//Count, conta quantos tem no array
$totalCarros = count($carros);
echo $totalCarros;
echo "<hr>";

// Foreach, é montado foreach($nome_do_array as  $valor)

foreach($carros as $valor){
    echo $valor."<br>";
}
echo "<hr>";

//Arrays associativos quando as chaves são strings

$pessoa = array("nome"=>"Rafaela", "idade"=>21, "altura"=>1.79);
$pessoa["cidade"] = "São Gonçalo";

foreach($pessoa as $indice => $valor){
    echo $indice.":".$valor."<br>";
}
echo "<hr>";

//Arrays multidimensionais

$times = array(
    "cariocas"=>array("vice"=>"vasco", "campeao"=>"flamnego", "terceiro_lugar"=>"fluminense"),
    "paulistas"=>array("vice"=>"santos","campeao"=>"são paulo", "terceiro_lugar"=>"palameira"),
    "baianos"=>array("vice"=>"bahia","campeao"=>"vitoria","terceiro_lugar"=>"itabuna")
);

echo "<br>";

foreach($times as $indice => $valor){
    foreach($times[$indice] as $indice => $valor){
        echo $indice.":".$valor."<br>";
    }
}








?>


