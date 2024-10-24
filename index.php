<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGAMA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css ">
    <link rel="stylesheet" href="index.css">
    <?php
        include('includes/iniciaSessao.php');
        //Não tire o comentário se não fica impossível acessar o index.php
        /*if(empty($_SESSION['login'])) {
            header("Location: login.html");
        }*/
    ?>
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
            <a href="#serviços">Serviços</a>
            <a href="#avaliaçao">Avaliações</a>
            <a href="#contato">Contato</a>
            <a href="login.html">Entrar</a>
            <a href="pagprincipal.html">Teste</a>
        </nav>


        <div class="icons">
            <a href="login.html" class="fas fa-heart"></a>
            <a href="login.html" class="fas fa-shopping-cart"></a>
            <a href="login.html" class="fas fa-user"></a>


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
                <h3>Reparo </h3>
                <span>fvdgfdgf</span>
            </div>
        </div>

        <div class="iconis">
            <img src="../tcc/imagens.img/compiuter.png" alt="">
            <div class="infor">
                <h3>Tecnologia </h3>
                <span>fvdgfdgf</span>
            </div>
        </div>

        <div class="iconis">
            <img src="../tcc/imagens.img/predero.png" alt="">
            <div class="infor">
                <h3>Construção </h3>
                <span>fvdgfdgf</span>
            </div>
        </div>

        <div class="iconis">
            <img src="../tcc/imagens.img/faxina.png" alt="">
            <div class="infor">
                <h3>Limpeza </h3>
                <span>fvdgfdgf</span>
            </div>
        </div>

        <div class="iconis">
            <img src="../tcc/imagens.img/carro.png" alt="">
            <div class="infor">
                <h3>Mecânica </h3>
                <span>fvdgfdgf</span>
            </div>
        </div>

        <div class="iconis">
            <img src="../tcc/imagens.img/bolo.png" alt="">
            <div class="infor">
                <h3>Confeitaria </h3>
                <span>fvdgfdgf</span>
            </div>
        </div>

        <div class="iconis">
            <img src="../tcc/imagens.img/make.png" alt="">
            <div class="infor">
                <h3>Beleza </h3>
                <span>fvdgfdgf</span>
            </div>
        </div>

    </section>


    <!--------------------------FIM ICONES------------------------------>

    <!-------------------------INICIO AVALIAÇÕES------------------------->

    <section class="avaliaçao" id="avaliaçao">

        <h1 class="heading">Quem usa <span>recomenda!</span></h1>

        <div class="box-container">

            <div class="box">
                <div class="user">
                    <img src="../tcc/imagens.img/io.jpg" alt="">
                    <div class="user-in">
                        <h3>Italiana da Shopee</h3>
                        <span>@gigispin</span>
                    </div>
                </div>
                <div class="strelas">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>SLK bolo bão de mais. Não imaginei que os serviços culinarios dariam certo no site (mas eu queimei a
                    cozinha tentando fazer um bolo e precisei pedir um novo kkk)
                    mas me enganei, atendimento rápido e o bolo chegou intacto. acho que vou aproveitar e contratar um
                    pintor para pintar a parede queimada
                </p>

            </div>

            <div class="box">
                <div class="user">
                    <img src="../tcc/imagens.img/mary.jpg" alt="">
                    <div class="user-in">
                        <h3>rainha do rj</h3>
                        <span>@maryqueen</span>
                    </div>
                </div>
                <div class="strelas">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Contratei um pedreiro para fazer uma área nova na minha casa. A contratação foi super facil e o
                    atendimento maravilhoso, além de um pedreiro lindo rsrs.</p>

            </div>

            <div class="box">
                <div class="user">
                    <img src="../tcc/imagens.img/naclara.jpg" alt="">
                    <div class="user-in">
                        <h3>Verdinha da paz</h3>
                        <span>@naclara</span>
                    </div>
                </div>
                <div class="strelas">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Contratei um mecanico para arrumar meu carro em casa pq meio que eu entrei com ele dentro da sala
                    (tirei carta ontem rsrs)
                    como um guincho é muito caro eu precisava que ele viesse até minha casa. Também chamei um pedreiro,
                    sabe para concertar o rombo na parede. Eles vieram e graças a DEUS antes do meu pai chegar. Valeu
                    suuuuper a pena!!!!!!!
                </p>

            </div>

            <div class="box">
                <div class="user">
                    <img src="../tcc/imagens.img/naju.jpg" alt="">
                    <div class="user-in">
                        <h3>Legalmente loira</h3>
                        <span>@najulinda</span>
                    </div>
                </div>
                <div class="strelas">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Ótimo atendimento, preço super em conta. Contratei uma maquiadora
                    incrivel. Foi super facil usar o site, cliquei, agendei, e ela veio!!!
                </p>

            </div>
        </div>
    </section>

    <!-------------------------------FIM AVALIAÇÕES---------------------->

    <!-------------------------------INICIO CONTATO---------------------->

    <sction class="contato" id="contato">

        <h1 class="heading"><span>Para entrar </span>em contato</h1>

        <div class="row">

            <form action="">
                <input type="text" placeholder="Nome" class="box">
                <input type="email" placeholder="Email" class="box">
                <input type="number" placeholder="Número de telefone" class="box">
                <textarea name="" class="box" placeholder="Menssagem" id="" cols="30" rows="10">
                    </textarea>
                    <a href="#" class="btn">Enviar mensagem</a>
            </form>

            <div class="imagem">
                <img src="../tcc/imagens.img/info.jpg" alt="">
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
                <a href="#">Email: agamacompany@gmail.com</a>
                <a href="#">Instagram: agamacompany</a>
                <a href="#">Telefone: 2346554655</a>
            </div>

        </div>

        <div class="creditos">created by<span> agamacompany and help mr. web designer</span> all rights reserved</div>

    </section>

    <!-------------------------------FIM FOOTER---------------------->



</body>

</html>
