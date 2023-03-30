<?php 

//incluir conexao
include("conexao.php"); 

//obter dados
$obterDados = file_get_contents("php://input");

//extrair dados do JSON
$extrair = json_decode($obterDados);

//separar os dados do JSON
$nomeCurso = $extrair->curso->nomeCurso;
$valorCurso = $extrair->curso->valorCurso;

//SQL - Cadastrar no banco
$sql = "INSERT INTO curso (nomeCurso, valorCurso) VALUES ('$nomeCurso', $valorCurso)";
mysqli_query($conexao, $sql);

//exportar dados cadastrados
$curso = [
    'nomeCurso' => $nomeCurso,
    'valorCurso' => $valorCurso
]

json_encode(['curso']=>$curso);
?>