<?php
    //inserindo as clases
    include_once "Contas.class.php";
    include_once "Correntes.class.php";
    include_once "Investimentos.class.php";

    //criando um objeto da clase conta correntes, ou seja, uma conta corrente
    $conta1 = new Correntes;

    //criando um objeto da clase investimentos, ou seja uma conta investimento
    $conta2 = new Investimentos;

    //atribuindo valores a conta corrente
    $conta1->numAge = 0215;
    $conta1->numConta = 13001023;
    $conta1->nome = "Jean Carlos da Silva";
    $conta1->saldo = 100.89;
    $conta1->limiteCredito = 500.33;
    $conta1->sacar(20.32);
    $conta1->ExibeDados();
    echo"<p>Próxima Conta</p>";

    //atribuindo valores a conta investimento

    $conta2->numAge = 0225;
    $conta2->numConta = 22001123;
    $conta2->nome = "Jose da Silva";
    $conta2->saldo = 300.89;
    $conta2->tipoInvestimento = "Renda Fixa";
    $conta2->sacar(33.32);

    //Exibindo dados da conta investimento com saque já feito;
    $conta2->ExibeDados();
    echo"<p>ExibeDados</p>";

?>