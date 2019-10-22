<?php 
//Classe Modelo
    class Contas{

        var $numAge;
        var $numConta;
        var $nome;
        var $cpf;
        var $tipoConta;
        var $saldo;

    
      public function getNumAge()
      {
          return $this->numAge;
      }

    
      public function setNumAge($numAge)
      {
          $this->numAge = $numAge;
          return $this;
      }


       
        public function getNumConta()
        {
            return $this->numConta;
        }

       
        public function setNumConta($numConta)
        {
            $this->numConta = $numConta;
            return $this;
        }


      
        public function getNome()
        {
            return $this->nome;
        }

       
        public function setNome($nome)
        {
            $this->nome = $nome;
            return $this;
        }


       
        public function getCpf()
        {
            return $this->cpf;
        }

     
        public function setCpf($cpf)
        {
            $this->cpf = $cpf;
            return $this;
        }


       
        public function getTipoConta()
        {
            return $this->tipoConta;
        }

      
        public function setTipoConta($tipoConta)
        {
            $this->tipoConta = $tipoConta;
            return $this;
        }


       
        public function getSaldo()
        {
            return $this->saldo;
        }

       
        public function setSaldo($saldo)
        {
            $this->saldo = $saldo;
            return $this;
        }

		
  
		}

        function ExibeDados(){

            print "Numero da Agencia: ".$this->numAge. "<br>";
            print "Numero da  Conta: ".$this->numConta. "<br>";
            print "Nome do correntista: ".$this->nome. "<br>";
            print "Saldo Atual: : ".$this->saldo. "<br>";
        }

    
			

?>
