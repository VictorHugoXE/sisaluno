<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Nota</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<header>
        <h1>Sistema Aluno</h1>
    </header>
    <main>
    <div class="box">
        <article>
        <?php
##permite acesso as variaves dentro do aquivo conexao
require_once('../conexao.php');



##cadastrar
if(isset($_GET['cadastrar'])){
        ##dados recebidos pelo metodo GET
        $iddisciplina = $_GET["disciplina"];
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $media = ($nota1 + $nota2) /2;

          ##codigo sql
    $sql = "UPDATE  disciplina SET Nota1   = :nota1, Nota2  = :nota2, Media  = :media WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$iddisciplina, PDO::PARAM_INT);
    $stmt->bindParam(':nota1',$nota1, PDO::PARAM_INT);
    $stmt->bindParam(':nota2',$nota2, PDO::PARAM_INT);
    $stmt->bindParam(':media',$media, PDO::PARAM_INT);
    $stmt->execute();
 


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> a nota foi adicionada!!!"; 

            echo " <button class='button-voltar'><a href='../index.html'>voltar</a></button>";
        }
        }
        
?>
        </article>
    </div>
  </main>
  <footer>
  <p>Victor Hugo</p>
        <p>INSTITUTO FEDERAL BAIANO</p>
  </footer>
    </main>
</body>
</html>