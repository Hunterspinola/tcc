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
            <form action="cadastro-servicosExe.php" method="post" 
                    enctype="multipart/form-data"><!--codificação para upload-->
                <div>
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" id="foto" accept="image/*"/>
                </div>
                <div>
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" />
                </div>
                <div>
                    <label for="descricao">Descrição</label>
                    <input type="text" name="descricao" id="descricao" />
                </div>
                <div>
                    <label for="preco">Preço</label>
                    <input type="text" name="preco" id="preco" />
                </div>
                
                <div>
                <label for="categoria">Categoria</label>
                <select name="categoria" id="categoria" class="box-inline">
                    <option value="rep">reparo</option>
                    <option value="tec">tecnologia</option>
                    <option value="con">construção</option>
                    <option value="lim">limpeza</option>
                    <option value="mec">mecânica</option>
                    <option value="bel">beleza</option>
                    <option value="conf">confeitaria</option>
                </select>
                </div>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </section>
</body>

</html>