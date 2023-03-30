<?php

//incluir conexao
include("conexao.php"); 

//sql
$sql = "SELECT * FROM curso"; //Selecione tudo da tabela 'curso' e guarde nessa variável


//Executar
$executar = mysqli_query($conexao, $sql);


//vetor
$cursos = [];

$indice = 0;

while($linha = mysqli_fetch_assoc($executar)) {
    $cursos[$indice]['idCurso'] = $linha['idCurso'];
    $cursos[$indice]['nomeCurso'] = $linha['nomeCurso'];
    $cursos[$indice]['valorCurso'] = $linha['valorCurso'];
    $indice++;
}

json_encode(['cursos'=>$curso]);


?>