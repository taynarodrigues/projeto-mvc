<?php

include_once "aluno.class.php";
include_once "Turma.class.php";


//instanciando 1° Alunos

$aluno = new Aluno;
$aluno->nome = "Tayna";
$aluno->idade = "9";
$aluno->turma = "info05na";
$aluno->turma = $turma;

//instanciando 2° Alunos

$aluno2 = new Aluno;
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
echo "Codigo do Aluno: ".$turma->codigo. "<br>";
echo "Descricao do Aluno: ".$turma->descricao. "<br>";
echo "Ocupacao do Aluno: ".$turma->ocupacao. "<br>";

echo "<h4> Imprimindo os Dados</h4>";
echo "Nome do Aluno2: ".$aluno2->nome. "<br>";
echo "Idade do Aluno2: ".$aluno2->idade. "<br>";
echo "Codigo do Aluno2: ".$turma->codigo. "<br>";
echo "Descricao do Aluno2: ".$turma->descricao. "<br>";
echo "Ocupacao do Aluno2: ".$turma->ocupacao. "<br>";


?>