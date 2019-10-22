<?php 

class Corrente extends Contas{

    var $limiteCredito;
    function depositar ($valor){

        $this->saldo += $valor;
    }
    function sacar($valor){
        if(valor<= $this ->saldo){
            $this->saldo -= $valor;
        }
    }
}
?>
