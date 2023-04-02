<?php 

//Variáveis
$url = "localhost:3333";
$usuario = "root";
$senha = "";
$base = "api";

//Conexão
$conexao = mysqli_connect($url, $usuario, $senha, $base);


//Arrumar caracteres especiais
mysqli_set_charset($conexao, "utf8");

?>