<?php

include_once "Editoras.class.php";
include_once "Livros.class.php";


//Instanciomento Editoras
$editora = new Editoras;
$editora->codEditora = 11;
$editora->razaoSocial = "Nova Editora";
$editora->contato = "Carlos da Silva";
$editora->telefone = "(19)3434-2323";


//Instanciomento Livros

$livro = new Livros;
$livro->codigo = 245;
$livro->descLivro = "Java OO";
$livro->ISBN = "123.456.789.11";
$livro->editora = $editora;

//Exibindo os atributos na tela

echo "<h4> Imprimindo os Dados</h4>";
echo "C&oacute;digo do Livro: ".$livro->codigo."<br>";
echo "T&iacute;tulo do Livro: ".$livro->descLivro."<br>";
echo "ISBN do Livro: ".$livro->ISBN."<br>";
echo "Nome da Editora: ".$livro->editora->razaoSocial."<br>";

?>
