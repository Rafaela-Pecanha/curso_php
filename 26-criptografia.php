<?php 
//Criptografias vulneráveis

$senha = "23456";
$novasenha = base64_encode($senha);
echo "base64: ".$novasenha."<br>";
echo "Sua senha é:". base64_decode($novasenha);
echo "<hr>";
echo "Md5:". md5($senha);
echo "<hr>";
echo "Sha1: ". sha1($senha);
echo "<hr>";
// Hash seguros

$senha = "123456";
$senha_db = '$2y$10$OHTQ0U7ygjNTjYYCZjm3au7QAYEjPtpfvET/isaCT//JCJz30v';


if(password_verify($senha, $senha_db)):
    echo "Senha válida";
else:
    echo "Senha inválida";
endif;
//quanto maior o custo, mais seguro o hash porém maor o custo pra ser gerado
// $options = [
//     'cost' => 10,
// ]


// $senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
// $senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
// echo $senhaSegura;

?>