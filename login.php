<?php
// Inclui o arquivo de conexão com o banco de dados
include('includes/conexao.php');

// Recupera os dados de login do formulário
$nome_user = $_POST['usuario'];
$senha = $_POST['senha'];

// Verifica se os dados foram passados corretamente
if (empty($nome_user) || empty($senha)) {
    echo "<h1>Usuário ou senha não informados!</h1>";
    exit;
}

// Prepara a consulta SQL
$sql = "SELECT * FROM usuario WHERE user_name = '$nome_user'";

// Executa a consulta SQL e verifica se ocorreu algum erro
$result = mysqli_query($con, $sql);

if (!$result) {
    // Se a consulta falhou, exibe o erro
    die('Erro na consulta SQL: ' . mysqli_error($con));
}

// Verifica se encontrou o usuário
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    // Verifica a senha (usando password_verify se a senha estiver armazenada de forma segura no banco)
    if (password_verify($senha, $row['senha'])) {
        
        // Inicia a sessão
        session_start();
        
        // Armazena informações do usuário na sessão
        $_SESSION['login'] = [
            'usuario' => [
                'id' => $row['id'],
                'nome' => $row['nome'],
                'user_name' => $row['user_name'],
                // Outros campos do usuário, se necessário
            ]
        ];

        // Redireciona para a página inicial após login
        header('Location: index.php');
        exit;
    } else {
        // Se a senha não for válida, redireciona para o login
        echo "<h1>Senha inválida! Tente novamente</h1>";
        header('Location: login.html');
    }
} else {
    // Se o usuário não for encontrado, exibe uma mensagem de erro
    echo "<h1>Usuário não encontrado</h1>";
    header('Location: login.html');
}
?>