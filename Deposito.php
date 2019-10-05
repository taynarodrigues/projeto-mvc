<?php
     //inserindo as clases
     include_once "Contas.class.php";
     include_once "Corrente.class.php";

    //criando um objeto da clase deposito
    $deposito = new Corrente;


  //atribuindo o primeiro valor do déposito
     $deposito->numAge = 0215;
     $deposito->numConta = 13001023;
     $deposito->nome = 'Diogo da Silva';
     $deposito->saldo = 20.30;
     $deposito->saldo = 1204.17;
     $deposito->saldo = 57.40;
     
     $deposito->ExibeDados();

 
?>