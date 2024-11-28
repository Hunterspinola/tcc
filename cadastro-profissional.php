<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="cadastro-profissional.css">
  <title>cadastro</title>
</head>
<body>
  <!----------------------------------------------------------------INICIO MENU--------------------------------------------------------------------->
 <header>
  <input type="checkbox" name="" id="risquinhos">
  <label for="risquinhos" class="fas fa-bars"></label>
  <a href="#" class="logo">AGAMA<span>.</span></a>


  <nav class="navbar">
    <a href="cadastro.html">Voltar</a>
      <a href="index.php">Home</a>
      
      
  </nav>


  <div class="icons">
      <a href="#" class="fas fa-heart"></a>
      <a href="#" class="fas fa-shopping-cart"></a>
      <a href="login.html" class="fas fa-user"></a>


  </div>
</header>
<!-- ----------------------------------------------------------FIM MENU--------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------INICIO CADASTRO------------------------------------------------------------------------ -->

  <div class="left-cadastro">
   
    <img src="pessoaloping.svg" class="left-cadastro-imagem" alt="pessoaloping">
  </div> 
<div class="container">
        
        <div class="form">
          <form action="cadastro-profissionalExe.php" method="post">
            <div class="form-header">
              <div class="title">
                <h1>Cadastre-se</h1>
              </div>
              
            </div>
<!-- --------------------------------------------------INICIO CADASTRO QUESTIONS------------------------------------------------------------------- -->
            <div class="input-gruop">
              <div class="input-box">
                <label for="primeironome">Primeiro nome</label>
                <input type="primeironome" id="primeironome" name="primeironome" placeholder="Digite seu primeironome" required>
              </div>
              <div class="input-box">
                <label for="sobrenome">Sobrenome</label>
                <input id="sobrenome" type="text" name="sobrenome" placeholder="Digite seu sobrenome" required>
              </div>
              <div class="input-box">
                <label for="usuario">Nome de usuário</label>
                <input id="usuario" type="text" name="usuario" placeholder="Crie um nome de usuário" required>
              </div>
              <div class="input-box">
                <label for="celular">Celular</label>
                <input id="celular" type="tel" name="celular" placeholder="(xx) xxxx-xxxx" required>
              </div>
              <div class="input-box">
                <label for="email">E-mail</label>
                <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
              </div>
              <div class="input-box">
                <label for="cpf">CPF</label>
                <input id="cpf" type="text" name="cpf" placeholder="Apenas números" required>
              </div>
              <div class="input-box">
                <label for="senha">Senha</label>
                <input id="senha" type="password" name="senha" placeholder="Crie uma senha" required>
              </div>
              
              <div class="input-box">
                <label for="confirmasenha">Confirme sua senha</label>
                <input id="confirmasenha" type="password" name="confirmasenha" placeholder="Senha" required>
              </div>
              <div class="input-box">
                <label for="profissional">Você é prestador de serviço?</label>
                <input type="radio" name="profissional" id="profissional" value="1"> Sim
                <input type="radio" name="profissional" id="profissional" value="0" checked> Não
              </div>
              <div class="input-box">
                <h3>Selecione uma área</h3>
                <select name="ramo" id="ramo">
                  <option value="nulo">---</option>
                  <option value="reparos">Reparos</option>
                  <option value="construcao">Construção</option>
                  <option value="tecnologia">Tecnologia</option>
                  <option value="limpeza">Limpeza</option>
                  <option value="mecanica">Mecânica</option>
                  <option value="reparos">Culinária</option>
                  <option value="beleza">Beleza</option>
                </select>
              </div>
            </div>
    <!-- --------------------------------------------------FIM CADASTRO QUESTIONS------------------------------------------------------------------- -->
            <div class="cadastro-buton">
              <button type="submit" name="submit">Cadastrar-se</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- ------------------------------------------------------FIM CADASTRO------------------------------------------------------------------------ -->
</body>
</html>