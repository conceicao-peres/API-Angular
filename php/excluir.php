<?php 

//incluir conexao
include("conexao.php"); 

//obter dados
$obterDados = file_get_contents("php://input");

//extrair dados do JSON
$extrair = json_decode($obterDados);

//separar os dados do JSON
$idCurso = $extrair->curso->idCurso;


//SQL - Alterar no banco
$sql = "DELETE FROM curso WHERE idCurso = $idCurso";
mysqli_query($conexao, $sql);

?>