<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
<?php
            include('includes/conexao.php');
            //UPLOAD FOTO
            $nome_foto = "";
            if(file_exists($_FILES['foto']['tmp_name'])){
            $pasta_destino = 'fotos/';
            $extensao = strtolower(substr($_FILES['foto']['name'],-4));
            $nome_foto = $pasta_destino . date('Ymd-His').$extensao;
            move_uploaded_file($_FILES['foto']['tmp_name'],$nome_foto);
            }
            //FIM UPLOAD

            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $preco = $_POST['preco'];
            $categoria = $_POST['categoria'];
            echo "<h1>Dados do serviço</h1>";
            echo "Nome: $nome</br>";
            echo "Descricao: $descricao</br>";
            echo "Preco: $preco</br>";
            echo "categoria: $categoria</br>";
            // INSERT INTO cidade (nome, especie, raca, id_pessoa, idade)
            // VALUES ('$nome', '$especie', '$raca', $pessoa,)
        
            $sql = "INSERT INTO Servico (nome, descricao, preco, 
                                 categoria, foto)";
            $sql .= " VALUES('$nome', '$descricao', '$preco', '$categoria', '$nome_foto')";
            echo $sql;
            // Executa comando no banco de dados
            $result =  mysqli_query($con, $sql);
            if ($result) {
                echo "<h2>Dados cadastrados com sucesso!</h2>";
            } else {
                echo "<h2>Erro ao cadastrar!</h2>";
                echo mysqli_error($con);
            }
            ?>
        </div>
</body>

</html>