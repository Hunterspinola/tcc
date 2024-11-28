<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section>
<div class="principal">
    <?php
    include('./includes/conexao.php');

    // Variável para armazenar o nome da foto
    $nome_foto = "";

    // Verifica se um arquivo foi enviado
    if (file_exists($_FILES['foto']['tmp_name'])) {
        $pasta_destino = 'fotos/';
        $extensao = strtolower(substr($_FILES['foto']['name'], -4));
        $nome_foto = $pasta_destino . date('Ymd-His') . $extensao;

        // Move o arquivo para o diretório de destino
        move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);
    }

    // Recebe os dados do formulário
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $telefone = $_POST['telefone'];

    // Prepara a consulta SQL para inserir os dados no banco
    $sql = "INSERT INTO Servico (titulo, texto, telefone, foto) VALUES ('$titulo', '$texto', '$telefone', '$nome_foto')";
    $result = mysqli_query($con, $sql);

    // Exibe os dados em formato de card
    echo '<div class="card">';
    echo "<h1>Dados do Serviço</h1>";
    echo "<img src='$nome_foto' alt='Foto do Serviço' class='card-img'/>";
    echo "<h2>Título: $titulo</h2>";
    echo "<p>Texto: $texto</p>";
    echo "<p>Telefone: $telefone</p>";
    echo '</div>';

    // Mensagem de sucesso ou erro
    if ($result) {
        echo "<h2>Dados cadastrados com sucesso!</h2>";
    } else {
        echo "<h2>Erro ao cadastrar!</h2>";
        echo mysqli_error($con);
    }
    ?>
</div>

<style>
    .card {
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 16px;
        margin: 16px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        max-width: 300px;
        text-align: center;
    }
    .card-img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }
</style>
    </section>
</body>
</html>