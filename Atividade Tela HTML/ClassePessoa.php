<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pessoa</title>
</head>
<body>
<hr>
<h1 class="text">Pessoa</h1>
<hr>
<hr>
<form action="url" method="POST">
  <div>
<span>
      <label for="nome">Nome: </label>
      <input type="text" formControlName="nome">
</span>
</div>
<div>
    <span>
      <label for="cpf">Cpf: </label>
      <input type="text" formControlName="cpf">
    </span>
   </div>
   <div>
    <span>
      <label for="data_nascimento">Data Nascimento: </label>
      <input type="text" formControlName="data_nascimento">
    </span>
    </div>
    <div>
    <span>
      <label for="sexo">Sexo: </label>
      <input type="text" formControlName="sexo">
    </span>
</div>
<div>
    <span>
      <label for="peso">Peso: </label>
      <input type="text" formControlName="peso">
    </span>
</div>
<div>
    <span>
      <label for="cor_da_pele">Cor da Pele: </label>
      <input type="text" formControlName="cor_da_pele">
    </span>
</div>
<hr>
    <input type="submit" value="salvar">
    
  </form>
</body>
</html>

