<?php 

//incluir conexao
include("conexao.php"); 

//obter dados
$obterDados = file_get_contents("php://input");

//extrair dados do JSON
$extrair = json_decode($obterDados);

//separar os dados do JSON
$idCurso = $extrair->curso->idCurso;
$nomeCurso = $extrair->curso->nomeCurso;
$valorCurso = $extrair->curso->valorCurso;

//SQL - Alterar no banco
$sql = "UPDATE curso SET nomeCurso = '$nomeCurso', valorCurso = $valorCuro WHERE idCurso = $idCurso";
mysqli_query($conexao, $sql);

//exportar dados cadastrados
$curso = [
    'idCurso' => $idCurso,
    'nomeCurso' => $nomeCurso,
    'valorCurso' => $valorCurso
]

json_encode(['curso']=>$curso);
?>