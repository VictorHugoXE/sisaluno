<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro Professor</title>
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../formulario.css">
</head>

<body>
  <header>
    <h1>Sistema Aluno</h1>
    <img src="../imagem/pokebola-verde.png" alt="">
  </header>
  <main>
    <form method="GET" action="crudprofessor.php">
      <label for="nome">Nome: </label>
      <input type="text" name="nome" required>

      <label for="cpf">CPF: </label>
      <input type="text" name="cpf" required>
  
      <label for="idade">Idade: </label>
      <input type="text" name="idade" required>
  
      <label for="datanascimento">Data de Nascimento: </label>
      <input type="date" name="datanascimento" required>
  
      <label for="endereco">Endereço: </label>
      <input type="text" name="endereco" required>
  
      <label for="estatus"> Status:
        <label for="">
          <input type="radio" name="estatus" value="1" checked>
          Ativo
        </label>
        <label for="">
          <input type="radio" name="estatus" value="0">
          Desativo
        </label>
      </label>

      <div>
        <input type="submit" name="cadastrar" value="Cadastrar" class="btn">
      </div>

      <div>
        <button class="button"><a href="../index.html">voltar</a></button>
      </div>
    </form>
  </main>
  <footer>
    <p>Victor Hugo</p>
        <p>INSTITUTO FEDERAL BAIANO</p>
  </footer>
</body>

</html>