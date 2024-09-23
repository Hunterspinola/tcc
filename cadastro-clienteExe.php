<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro Cliente</title>
</head>
<body>
    <?php
      // Faz a conexão
      include('includes/conexao.php');

      // Pega as variáveis do formulário e as coloca no banco
      $primeironome = $_POST['primeironome'];
      $sobrenome = $_POST['sobrenome'];
      $usuario = $_POST['usuario'];
      $celular = $_POST['celular'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];
      $confirmasenha = $_POST['confirmasenha'];

      // Mostra os dados coletados
      echo "<h1>Dados do Cliente</h1>";
      echo "Nome: $primeironome<br>";
      echo "Sobrenome: $sobrenome<br>";
      echo "Usuário: $usuario<br>";
      echo "Celular: $celular<br>";
      echo "Email: $email<br>";
      echo "Senha: $senha<br>";
      echo "Confirmar senha: $confirmasenha<br>";

      // Insere em cliente
      $sql = "INSERT INTO Cliente (nome, sobrenome, nome_user, celular, email, senha_cliente) VALUES ('$primeironome', '$sobrenome', '$usuario', '$celular', '$email', '$senha')";


      // Executa a query no banco
      $result = mysqli_query($con, $sql);

      // Verifica se a inserção foi bem-sucedida
      if ($result) {
        echo "<h2>Dados cadastrados com sucesso!</h2>";
      } else {
        echo "<h2>Erro ao cadastrar!</h2>";
        echo "<p class='error-message'>".mysqli_error($con)."</p>";
      }

      // Fecha a conexão com o banco de dados
      mysqli_close($con);
      header("Location: index.html");
    ?>
</body>
</html>