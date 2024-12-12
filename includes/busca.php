<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="busca.css">
    <title>Document</title>
</head>
<body>
     <!--------------------------------INICIO MENU-------------------->
     <header>
     
      <input type="checkbox" name="" id="risquinhos">
        <label for="risquinhos" class="fas fa-bars"></label>
        <a href="index.php" class="logo">AGAMA<span>.</span></a>
       
        <h1 class="cs" >Busca por Serviços</h1>
        <nav class="navbar">
        <a href="../consulta-servicos.php">voltar</a>
      </nav>
      
      <div class="icons">

        <a href="login.html" class="fas fa-user"></a>
      </div>
    </header>
    <!-- ----------------------FIM MENU----------------------------------->
<?php
// Inclua o arquivo de conexão
include 'conexao.php';

if (isset($_GET['query'])) {
    $query = $_GET['query'];
    
    // Prepara a consulta SQL
    $sql = "SELECT * FROM servico WHERE titulo LIKE ?";
    $stmt = $con->prepare($sql);
    $searchTerm = "%" . $query . "%";
    $stmt->bind_param("s", $searchTerm);
    
    // Executa a consulta
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifica se há resultados
    if ($result->num_rows > 0) {
        // Inicia a tabela
        echo "<table border='1'>
                <tr>
                    <th>Título</th>
                    <th>Foto</th>
                    <th>Texto</th>
                    <th>Cidade</th>
                    <th>Telefone</th>
                </tr>";
        
        // Exibe os resultados
        while ($row = $result->fetch_assoc()) {
            // Ajuste o caminho da imagem aqui
            $caminhoImagem = '../' . htmlspecialchars($row['foto']); // Caminho relativo

            echo "<tr>
                    <td>" . htmlspecialchars($row['titulo']) . "</td>
                    <td><img src='" . $caminhoImagem . "' alt='Foto do serviço' style='width:100px; height:auto;'></td>
                    <td>" . htmlspecialchars($row['texto']) . "</td>
                    <td>" . htmlspecialchars($row['cidade']) . "</td>
                    <td>" . htmlspecialchars($row['telefone']) . "</td>
                  </tr>";
        }
        
        // Fecha a tabela
        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado.";
    }

    // Fecha a declaração e a conexão
    $stmt->close();
    $con->close();
}
?>
</body>
</html>
