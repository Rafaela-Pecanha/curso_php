<?php 
//Conexão com o banco de dados
//Conexões com banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$db_name= "crud";

$connect = mysqli_connect($servername, $username, $password, $db_name);
if(mysqli_connect_error()):
    echo "Falha na conexão: ".mysql_connect_error();
endif;


?>