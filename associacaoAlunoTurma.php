<?php

include_once "Alunos.class.php";
include_once "Turma.class.php";


//instanciando 1° Alunos

$aluno = new Alunos;
$aluno->nome = "Tayna";
$aluno->idade = "9";
$aluno->turma = "info04na";

//instanciando 2° Alunos

$aluno2 = new Alunos;
$aluno2->nome = "Maria";
$aluno2->idade = "5";
$aluno2->turma = "info04na";


//instanciando turma

$turma = new Turma;
$turma->codigo = "info05na";
$turma->descricao = "ccp";
$turma->ocupacao = "15";

//Exibindo os atributos na tela

echo "<h4> Imprimindo os Dados</h4>";
echo "Nome do Aluno: ".$aluno->nome. "<br>";
echo "Idade do Aluno: ".$aluno->idade. "<br>";
echo "Turma do Aluno: ".$aluno->turma->codigo. "<br>";
echo "Turma do Aluno: ".$aluno->turma->descricao. "<br>";
echo "Turma do Aluno: ".$aluno->turma->ocupacao. "<br>";

echo "<h4> Imprimindo os Dados</h4>";
echo "Nome do Aluno2: ".$aluno2->nome. "<br>";
echo "Idade do Aluno2: ".$aluno2->idade. "<br>";
echo "Turma do Aluno2: ".$aluno2->turma->codigo. "<br>";
echo "Turma do Aluno2: ".$aluno2->turma->descricao. "<br>";
echo "Turma do Aluno2: ".$aluno2->turma->ocupacao. "<br>";


?>