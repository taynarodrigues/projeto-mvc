<?php
class Pessoa{

	//São os atributos da classe Pessoa
	private $nome;
	private $cpf;
	private $data_nascimento;
	private $sexo;
	private $altura;
	private $peso;
	private $cor_da_pele;

	/* O método Get (pegar/mostar)------ O método Set (colocar)
	A palavra reservada $this é usada para quando se refere a classe, de dentro dela.
	 Os métodos gets sempre retornam algo e o métodos sets sempre manipulam o atributo 
	 e insere valor dentro deles, por isso,
	 tais métodos recebem parâmetros que serão alocados aos atributos.*/

	// Método GET DO NOME
	public function getNome(){
		return $this->nome;
	}
//Método SET DO NOME
	public function setNome($nome){
		$this->nome = $nome;

		return $this;
	}

	// Método GET DO CPF
	public function getCpf()
	{
		return $this->cpf;
	}

//Método SET DO CPF
	public function setCpf($cpf)
	{
		$this->cpf = $cpf;

		return $this;
	}

	// Método GET DATA NASCIMENTO
	public function getData_nascimento()
	{
		return $this->data_nascimento;
	}

//Método SET DATA NASCIMENTO
	public function setData_nascimento($data_nascimento)
	{
		$this->data_nascimento = $data_nascimento;

		return $this;
	}

// Método GET SEXO
	public function getSexo()
	{
		return $this->sexo;
	}

//Método SET SEXO
	public function setSexo($sexo)
	{
		$this->sexo = $sexo;

		return $this;
	}

// Método GET ALTURA
	public function getAltura()
	{
		return $this->altura;
	}

//Método SET ALTURA
	public function setAltura($altura)
	{
		$this->altura = $altura;

		return $this;
	}

// Método GET PESO
	public function getPeso()
	{
		return $this->peso;
	}

//Método SET PESO
	public function setPeso($peso)
	{
		$this->peso = $peso;

		return $this;
	}

// Método GET COR DA PELE
	public function getCor_da_pele()
	{
		return $this->cor_da_pele;
	}

//Método SET COR DA PELE
	public function setCor_da_pele($cor_da_pele)
	{
		$this->cor_da_pele = $cor_da_pele;

		return $this;
	}
}// fim dos métodos getters & setters

	// instanciando o atributo $nome da classe Pessoa
	//<br> pula linha
	$nome = new Pessoa();
	$nome -> setNome('Tayna');
	print '<br>Nome: ';
	print $nome -> getNome();

	// instanciando o atributo $cpf da classe Pessoa
	$cpf = new Pessoa();
	$cpf -> setCpf('936.000.000.20');
	print '<br>Cpf: ';
	print $cpf -> getCpf();

	// instanciando o atributo $data_nascimento da classe Pessoa
	$data_nascimento = new Pessoa();
	$data_nascimento -> setData_nascimento('14/10/90');
	print '<br>Data Nascimento:';
	print $data_nascimento -> getData_nascimento();

	//instanciando o atributo $sexo da classe Pessoa
	$sexo = new Pessoa();
	$sexo -> setSexo('Feminino');
	print '<br>Feminino: ';
	print $sexo -> getSexo();

	//instanciando o atributo $altura da classe Pessoa;
	$altura = new Pessoa();
	$altura -> setAltura('1.51');
	print '<br>Altura: ';
	print $altura -> getAltura();

	//instanciando o atributo $peso  da classe Pessoa;
	$peso = new Pessoa();
	$peso -> setPeso('42 kg');
	print '<br>Peso: ';
	print $peso -> getPeso();

	//instanciando o atributo $cor_da_pele da classe Pessoa;
	$cor_da_pele = new Pessoa();
	$cor_da_pele -> setCor_da_pele('parda');
	print '<br>Cor da pele: ';
	print $cor_da_pele -> getCor_da_pele();

?>