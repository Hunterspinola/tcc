<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGAMA</title>
    <?php
        session_start();
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css ">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <!--------------------------------INICIO MENU-------------------->
    <header>
        <input type="checkbox" name="" id="risquinhos">
        <label for="risquinhos" class="fas fa-bars"></label>
        <a href="#" class="logo">AGAMA<span>.</span></a>


        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#sobre">Sobre</a>
            <?php if((isset($_SESSION['login'])) && ($_SESSION['login'])) : ?>
            <a href="consulta-servicos.php">Serviços</a>
            <?php endif; ?>
            <a href="#contato">Contato</a>
            <?php if(!isset($_SESSION['login'])) : ?>
            <a href="login.html">Entrar</a>
            <?php endif; ?>
            <?php if((isset($_SESSION['login'])) && ($_SESSION['login']['profissional'] === 1)):?>
            <a href="cadastro-servicos.php">Cadastrar serviços</a>
            <?php endif; ?>
        </nav>

    <div class="icons">
      <i class="fa fa-bars" title="Click me!"></i>
      <ul class="nav-links">
        <li>
            <a href="login.html" class="fas fa-user"></a>
            <?php if(isset($_SESSION['login'])) : ?>
                Olá <?php echo $_SESSION['login']['nome'] ?>!
            <div class="dropdown-content">
            <a href="includes/sair.php">Sair</a>
            <?php endif ?>
          </div>
        </li>
      </ul>
    </div>
        
           
            


        </div>
    </header>
    <!-- -------------------------FIM MENU-------------------- -->

    <!--------------------------- INICIO DO HOME------------------->

    <section class="home" id="home">


        <div class="content">
            <h3>Serviços perto de você</h3>
            <span> Profissionais de confiança </span>
            <p>Venha conhecer os serviços que a equipe Agama têm a oferecer perto da sua casa</p>

            <a href="login.html" class="btn">contrate agora</a>
        </div>

    </section>

    <!----------------------------FIM HOME------------------------->

    <!--------------------------INICIO SOBRE----------------------->

    <section class="sobre" id="sobre">

        <h1 class="heading"><span> O que </span> temos a oferecer? </h1>

        <div class="row">

            <div class="imagem">
                <img src="../tcc/imagens.img/cozina.avif" alt="">
                <h3>vários tipos de serviços</h3>
            </div>

            <div class="content">
                <h3> Um pouco sobre nosso trabalho</h3>
                <p>Aqui no site Agama, você pode contratar vários tipos de profissionais autônomos.
                    Desde serviços de reparo, até serviços de beleza e culinaria. Além de contratar,
                    você também pode se cadastrar como um profissional autônomo. Nosso objetivo é facilitar a
                    contratação de serviços </p>
                <!-- <a href="#" class="btn">mais informações</a> -->
            </div>

        </div>

    </section>

    <!-------------------------FIM SOBRE-------------------------->


    <!-------------------------INICIO ICONES---------------------->

    <section class="serviços" id="serviços"></section>

    <h1 class="servicons"><span> Esses são alguns </span> dos serviços oferecidos </h1>

   

    <section class="iconis-conteiner">

   
        <div class="iconis">
            <img src="../tcc/imagens.img/ferramentaagoravai.png" alt="">
            <div class="infor">
                <h3><a href="login.html">Reparo</a></h3>
            </div>
        </div>

        <div class="iconis">
            <img src="../tcc/imagens.img/compiuter.png" alt="">
            <div class="infor">
                <h3><a href="login.html">Tecnologia</a></h3>
            </div>
        </div>

        <div class="iconis">
            <img src="../tcc/imagens.img/predero.png" alt="">
            <div class="infor">
                <h3><a href="login.html">Construção</a></h3>
            </div>
        </div>

        <div class="iconis">
            <img src="../tcc/imagens.img/faxina.png" alt="">
            <div class="infor">
                <h3><a href="login.html">Limpeza</a></h3>
            </div>
        </div>

        <div class="iconis">
            <img src="../tcc/imagens.img/carro.png" alt="">
            <div class="infor">
                <h3><a href="login.html">Mecânica</a></h3>
            </div>
        </div>

        <div class="iconis">
            <img src="../tcc/imagens.img/bolo.png" alt="">
            <div class="infor">
                <h3><a href="login.html">Confeitaria</a></h3>
            </div>
        </div>

        <div class="iconis">
            <img src="../tcc/imagens.img/make.png" alt="">
            <div class="infor">
                <h3><a href="login.html">Beleza</a></h3>
            </div>
        </div>
        <div class="iconis">
            <h2>Para encontrar mais serviços faça login no nosso site <a href="login.html">aqui</a> </h2>
        </div>

    </section>


    <!--------------------------FIM ICONES------------------------------>

   

    <!-------------------------------INICIO CONTATO---------------------->

    <sction class="contato" id="contato">

        <h1 class="heading"><span>Para entrar </span>em contato</h1>

        <div class="row">

            <form action="https://formsubmit.co/agamaservicos@gmail.com" method="POST">
                <input type="text" name="name" placeholder="Nome" class="box">
                <input type="email" name="email" placeholder="Email" class="box">
                <textarea name="message" class="box" placeholder="Mensagem" required></textarea>
                <input type="hidden" name="_next" value="http://localhost/tcc/index.php">
                <button type="submit" class="btn">Enviar mensagem</button>
            </form>

            <div class="imagem">
                <img src="../tcc/imagens.img/info.jpg" alt="imagem hehe">
            </div>

        </div>

    </sction>

    <!-------------------------------FIM CONTATO---------------------->

    <!-------------------------------INICIO FOOTER---------------------->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Quick links</h3>
                <a href="#home">Home</a>
                <a href="#sobre">Sobre</a>
                <a href="#serviços">Serviços</a>
                <a href="#avaliaçao">Avaliações</a>
                <a href="#contato">Contato</a>
            </div>

            <div class="box">
                <h3>Localização</h3>
                <a href="#">Brasil</a>
            </div>

            <div class="box">
                <h3>Contatos</h3>
                <a href="#">Email: agamaservicos@gmail.com</a>
                <a href="#">Instagram: agamacompany</a>
                <a href="#">Telefone: 2346554655</a>
            </div>

        </div>

    </section>

    <!-------------------------------FIM FOOTER---------------------->



</body>

</html>
