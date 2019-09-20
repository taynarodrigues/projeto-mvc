<?php 
class Aluno{
    
    private $matricula;
    private $nome;
    private $idade;

		// Método GET
    function getMatricula(){
        return $this-> matricula;
		}
		
		//Método SET
    function setMatricula($matricula){
        $this->matricula = $matricula;
    }

}

// instanciando uma classe
$aluno1 = new Aluno();

    $aluno1-> setMatricula('123456');
    print'<b><br>Matricula: ';
        print $aluno1->getMatricula();

?>