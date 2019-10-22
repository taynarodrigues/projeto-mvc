<?php
     //inserindo as clases
     include_once "Corrente.class.php";

    //criando um objeto da clase conta correntes, ou seja, uma conta corrente
    $conta1 = new Correntes;

    //atribuindo valores a conta corrente
    $conta1->numAge = 0215;
    $conta1->numConta = 13001023;
    $conta1->nome = "Diogo da Silva";
    $conta1->saldo = 100.89;
    $conta1->limiteCredito = 500.33;
    $conta1->sacar(1.10);
    $conta1->ExibeDados();
  


    //atribuindo valores a conta corrente
    $conta1->numAge = 0222;
    $conta1->numConta = 13001023;
    $conta1->nome = "Tayna Silva";
    $conta1->saldo = 100.89;
    $conta1->limiteCredito = 500.33;
    $conta1->sacar(6.35);
    $conta1->ExibeDados();


    

?>