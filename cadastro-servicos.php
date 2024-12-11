<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="cadastro-servico.css">
    <title>Cadastro de Serviços</title>
</head>
<body>
    <!--------------------------------INICIO MENU-------------------->
    <header>
      <input type="checkbox" name="" id="risquinhos">
        <label for="risquinhos" class="fas fa-bars"></label>
        <a href="#" class="logo">AGAMA<span>.</span></a>

      <nav class="navbar">
        <a href="index.php">voltar</a>
      </nav>
      
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="login.html" class="fas fa-user"></a>
      </div>
    </header>
    <!-- -----------------------------------------------------------FIM MENU---------------------------------------------------------------------------- -->
    
<section>
        <div class="title">Cadastro de Serviços</div>
        <div class="principalbox">
            <form action="./cadastro-servicosExe.php" method="post" 
                    enctype="multipart/form-data"><!--codificação para upload-->

    <!-- ----------------------------------------------------INICIO CADASTRO SERVIÇOS QUESTIONS------------------------------------------------------------------- -->        
                <div class="input-box">
                    <label for="foto">Foto do serviço/produto</label>
                    <input class="foto" type="file" name="foto" id="foto" accept="image/*"/>
                </div>
                <div class="input-box">
                    <label for="titulo">Serviço oferecido</label>
                    <input type="text" name="titulo" id="titulo" />
                </div>
                <div class="input-box">
                    <label for="texto">Descrição do serviço</label>
                    <input type="text" name="texto" id="texto" />
                </div>
                <div class="input-box">
                    <label for="telefone">Telefone do profissional</label>
                    <input type="text" name="telefone" id="telefone" />
                </div>
                <div class="input-box">
                    <label for="cidade">Cidade onde o serviço é ofertado</label>
                    <input type="text" name="cidade" id="cidade" />
                </div>
    <!-- ----------------------------------------------------FIM CADASTRO SERVIÇOS QUESTIONS------------------------------------------------------------------- -->
                <div class="cadastro-buton">
                <button type="submit">Cadastrar serviço</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>