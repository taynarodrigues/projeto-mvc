<?php 
class Aluno{
    
    private $codAluno;
    private $nome;
    private $email;
    private $telefone;

   public function getCodAluno()
   {
       return $this->codAluno;
   }

  
   public function setCodAluno($codAluno)
   {
       $this->codAluno = $codAluno;
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


  
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }


  
    public function getTelefone()
    {
        return $this->telefone;
    }

   
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }


}


?>