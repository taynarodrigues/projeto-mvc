<?php 
class Aluno{
    
    private $matricula;
    private $nome;
    private $idade;

    function getMatricula(){
        return $this-> matricula;
    }
    function setMatricula($matricula){
        $this->matricula = $matricula;
    }

}

$aluno1 = new Aluno();

    $aluno1-> setMatricula('123456');
    print'<b><br>Matricula: ';
        print $aluno1->getMatricula();


?>