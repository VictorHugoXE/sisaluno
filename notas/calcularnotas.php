<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Disciplina</title>
    <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../formulario.css">
</head>
<body>
  <header>
    <h1>Sistema Aluno</h1>
  </header>
  <main>
  <?php
/*
 * Melhor prática usando Prepared Statements
 * 
 */
require_once('../conexao.php');

$retorno = $conexao->prepare('SELECT * FROM disciplina');
$retorno->execute();


?>

    <form method="GET" action="crudnotas.php">
    <label for="disciplina">Disciplina: </label>
      <select name="disciplina" id="" required>
        <?php foreach ($retorno->fetchall() as $value) { ?>
        <option value="<?php echo $value['id'] ?>"> <?php echo $value['nomedisciplina'] ?> </option>
        <?php  }  ?>
      </select>

      <label for="nota1">Nota 1: </label>
      <input type="text" name="nota1" required>
  
      <label for="nota2">Nota 2: </label>
      <input type="text" name="nota2" required>

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