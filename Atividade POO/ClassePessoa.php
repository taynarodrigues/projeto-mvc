<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pessoa</title>
</head>
<body>

<h4 class="text">Pessoa</h4>
<hr>
<form action="url" method="POST">
  
    <div>
      <label for="nome">Nome: </label>
      <input type="text" formControlName="nome">
    </div>

    <div>
      <label for="cpf">Cpf: </label>
      <input type="text" formControlName="cpf">
    </div>

    <div>
      <label for="data_nascimento">Data Nascimento: </label>
      <input type="text" formControlName="data_nascimento">
    </div>

    <div>
      <label for="sexo">Sexo: </label>
      <input type="text" formControlName="sexo">
    </div>

    <div>
      <label for="peso">Peso: </label>
      <input type="text" formControlName="peso">
    </div>

    <div>
      <label for="cor_da_pele">Cor da Pele: </label>
      <input type="text" formControlName="cor_da_pele">
    </div>
<hr>
    <input type="submit" value="salvar">
    
  </form>
</body>
</html>

