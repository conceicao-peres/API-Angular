<?php

//CONEXAO ENTRE BANCO (MYSQL) E O PHP

//variaveis
$url = "localhost";
$usuario = "root";
$senha = "";
$base = "api"; //pasta api (banco)


//Conexao
$conexao = mysqli_connect($url, $usuario, $senha, $base);

//Arrumar caracteres especiais
mysqli_set_charset($conexao, "utf8");

?>