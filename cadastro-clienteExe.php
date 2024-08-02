<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro Cliente</title>
</head>
<body>
    <?php
      //Faz a conexão
      include('includes/conexao.php');
      //Pega as variáveis do forms e as coloca no banco.
      //Por enquanto, sem o banco totalmente criado, não dá pra fazer muito.
      //Essas variáveis são temporárias, apenas para facilitar dps.
      $primeironome = $_POST['primeironome'];
      $sobrenome = $_POST['sobrenome'];
      $usuario = $_POST['usuario'];
      $celular = $_POST['celular'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];
      $confirmasenha = $_POST['confirmasenha'];

      //Mostra os dados coletados
      echo "<h1>Dados do Cliente</h1>";
      echo "Nome: $primeironome<br>";
      echo "Sobrenome: $sobrenome<br>";
      echo "Usuário: $usuario<br>";
      echo "Celular: $celular<br>";
      echo "Email: $email<br>";
      echo "Senha: $senha<br>";
      echo "Confirmar senha: $confirmasenha<br>";

      //Insere em cliente 😏
      $sql = "INSERT INTO Cliente (nome, sobrenome, usuario, celular, email, senha, confirmarsenha";
      $sql .= "VALUES ('".$primeironome."','".$sobrenome."','".$usuario."','".$celular."','".$email."','".$senha."','".$confirmasenha."')";
      echo $sql;

      //Executa a query no banco
      $result = mysqli_query($con, $sql);

      //Verifica se a inserção foi bem-sucedida 😶
      if ($result)
      {
        echo "<h2>Dados cadastrados com sucesso!</h2>";;
      } else 
      {
        echo "<h2>Erro ao cadastrar!</h2>";
        echo "<p class='error-message'>".mysqli_query($con)."</p>";
      }

      //Fecha a conexão com o banco de dados
      mysqli_close($con);
    ?>
</body>
</html>