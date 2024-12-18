<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Exe.css">
  <title>Cadastro</title>
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
      $profissional = $_POST['profissional'];
      $senha = $_POST['senha'];
      $confirmasenha = $_POST['confirmasenha'];

      // Mostra os dados coletados
      echo "<h1>Dados do Cliente</h1>";
      echo "<h3>Nome: $primeironome</h3><br>";
      echo "<h3>Sobrenome: $sobrenome</h3><br>";
      echo "<h3>Usuário: $usuario</h3><br>";
      echo "<h3>Celular: $celular</h3><br>";
      echo "<h3>Email: $email</h3><br>";
      echo "<h3>É profissional: $profissional</h3><br>";
      echo "<h3>Senha: $senha</h3><br>";
      echo "<h3>Confirmar senha: $confirmasenha</h3><br>";

      // Insere em cliente
      $sql = "INSERT INTO usuario (nome, sobrenome, user_name, email, profissional, senha) VALUES ('$primeironome', '$sobrenome', '$usuario', '$email', '$profissional', '$senha')";


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
      header('Location: login.html');
    ?>
</body>
</html>