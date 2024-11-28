<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/cadastro.css" />
    <title>Cadastro de Serviços</title>
</head>

<body>
   
<section>
        <div class="principal box">
            <h2>Cadastro de Serviços</h2>
            <form action="./cadastro-servicosExe.php" method="post" 
                    enctype="multipart/form-data"><!--codificação para upload-->
                <div>
                    <label for="foto">Foto do serviço/produto</label>
                    <input type="file" name="foto" id="foto" accept="image/*"/>
                </div>
                <div>
                    <label for="titulo">Serviço oferecido</label>
                    <input type="text" name="titulo" id="titulo" />
                </div>
                <div>
                    <label for="texto">Descrição do serviço</label>
                    <input type="text" name="texto" id="texto" />
                </div>
                <div>
                    <label for="telefone">telefone</label>
                    <input type="text" name="telefone" id="telefone" />
                </div>
              
                <button type="submit">Cadastrar serviço</button>
            </form>
        </div>
    </section>
</body>

</html>