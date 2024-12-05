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
        // Exibe os resultados
        while ($row = $result->fetch_assoc()) {
            echo "Resultado: " . $row['titulo', 'foto', 'texto', 'telefone'] . "<br>";
        }
    } else {
        echo "Nenhum resultado encontrado.";
    }

    // Fecha a declaração e a conexão
    $stmt->close();
    $con->close();
}
?>