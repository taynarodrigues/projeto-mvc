<?php 
//Classe Modelo
    class Contas{

        var $numAge;
        var $numConta;
        var $nome;
        var $cpf;
        var $tipoConta;
        var $saldo;


	public var get$NumAge() {
		return this.$numAge;
	}

	public void set$NumAge(var $numAge) {
		this.$numAge = $numAge;
	}

	public var get$NumConta() {
		return this.$numConta;
	}

	public void set$NumConta(var $numConta) {
		this.$numConta = $numConta;
	}

	public var get$Nome() {
		return this.$nome;
	}

	public void set$Nome(var $nome) {
		this.$nome = $nome;
	}

	public var get$Cpf() {
		return this.$cpf;
	}

	public void set$Cpf(var $cpf) {
		this.$cpf = $cpf;
	}

	public var get$TipoConta() {
		return this.$tipoConta;
	}

	public void set$TipoConta(var $tipoConta) {
		this.$tipoConta = $tipoConta;
	}

	public var get$Saldo() {
		return this.$saldo;
	}

	public void set$Saldo(var $saldo) {
		this.$saldo = $saldo;
	}

        function ExibeDados(){

            print "Numero da Agencia: ".$this->numAge. "<br>";
            print "Numero da  Conta: ".$this->numConta. "<br>";
            print "Nome do correntista: ".$this->nome. "<br>";
            print "Saldo Atual: : ".$this->saldo. "<br>";
        }

    }


?>
