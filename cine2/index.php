<?php
    require './model/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/responsivo.css">

    <!-- FONTES DO GOOGLE  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">

    <!--OWL CSS-->
    <link rel="stylesheet" href="./css/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl/owl.theme.default.min.css">
    <title>CineMail</title>
</head>

<body>
    <header>
        <a href="index.php" class="logo">
            <img src="img/logo.svg" alt="Logo do CineM@ail">
            <h1 alt="CineMail">CineM@il</h1>
        </a>
        <nav class="menu">
            <button onclick="openMenu()" data-menu="button" aria-expanded="false" aria-controls="menu">Menu</button>
            <ul data-menu="list" id="menu">
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#contato">Contato</a></li>
                <?php
                if(isset($_SESSION['idFuncionario']) && !empty($_SESSION['idFuncionario'])):
                ?> 
                    <li><a href="./control/ctr-logout.php">Logout</a></li>
                <?php
                else: ?> 
                    <li onclick="action('#modal-login')" class="btn">Login</li>
                <?php endif;?>
                <li ><a href="acesso-adm.php"><img  id="engrenagem-acesso-adm" onmouseover="passaCursor();" onmouseout="retiraCursor();" src="./img/engrenagem.svg" alt="Acesso administrativo"></a></li>
            </ul>
        </nav>
    </header>

    <div class="modal" id="modal-login">
        <img id="modal-bg" src="./img/img-login/imagem-login.png" alt="Imagem de um cinema vazio">
        <div class="modal-container">
            <img onclick="fechar('#modal-login')" class="fechar" src="./img/fechar.svg" alt="Icone para fechar o poup-up.">
            <h3>Conecte-se com a sua conta</h3>
            <form action="control/ctr-funcionario.php" method="POST"><!--Adicionado pra enviar os dados de login pra fazer a conexão-->
                <div class="input-container">
                    <img src="./img/img-login/login-icone.svg" alt="Icone-Login">
                    <div class="input">
                        <label>Email</label>
                        <input type="text" id="email" name="email" required>
                    </div>
                </div>

                <div class="input-container">
                    <img src="./img/img-login/senha-icone.svg" alt="Icone-Login">
                    <div class="input">
                        <label>Senha</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                </div>
                <div class="forget-enviar"><!--Criada pra alinhar os elementos abaixo-->
                    <a href="not-found.html" id="forget">Esqueci a senha</a>
                    <button class="enviar" type="submit" value="Enviar">Enviar</button>
                </div>
            </form>
        </div>
    </div>


    <div id="blur">
        <div class="busca-filmes">
            <div id="search">
                <input type="text">
                <a href="#"><img src="img/search.svg" alt="icone-pesquisa"> </a>
            </div>
        </div>

        <section class="posters-container">
            <h2>Em cartaz</h2>
            <div class="posters">
                <div class="owl-carousel owl-theme">
                    <div class="poster-filme">
                        <a href="#"><img src="./img/posters/black-window.jpg" alt="Black Window"></a>
                        <div class="legenda">
                            <div class="descricao">
                                <p class="label-filme">Nome: <span>Black Widow</span><br>
                                    Gênero: <span>Ação</span><br>
                                    Class. Ind.: <span>+13 anos</span>
                                </p>
                            </div>

                            <div class="bottom">
                                <div class="bloco">
                                    <p class="label-filme">Estreia</p>
                                    <p class="data">28/03/21</p>
                                </div>
                                <div class="bloco">
                                    <p class="label-filme">Último dia</p>
                                    <p class="data">02/05/21</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="poster-filme">
                        <a href=""><img src="./img/posters/home-alone.jpg" alt="HomeAlone"></a>
                        <div class="legenda">
                            <div class="descricao">
                                <p class="label-filme">Nome: <span>Home Alone</span><br>
                                    Gênero: <span>Comédia</span><br>
                                    Class. Ind.: <span>Livre</span>
                                </p>
                            </div>

                            <div class="bottom">
                                <div class="bloco">
                                    <p class="label-filme">Estreia</p>
                                    <p class="data">28/03/21</p>
                                </div>
                                <div class="bloco">
                                    <p class="label-filme">Último dia</p>
                                    <p class="data">02/05/21</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="poster-filme">
                        <a><img src="./img/posters/halloween-4-2.jpg" alt="Halloween 4"></a>
                        <div class="legenda">
                            <div class="descricao">
                                <p class="label-filme">Nome: <span>Halloween 4</span><br>
                                    Gênero: <span>Terror</span><br>
                                    Class. Ind.: <span>+16 anos</span>
                                </p>
                            </div>

                            <div class="bottom">
                                <div class="bloco">
                                    <p class="label-filme">Estreia</p>
                                    <p class="data">28/03/21</p>
                                </div>
                                <div class="bloco">
                                    <p class="label-filme">Último dia</p>
                                    <p class="data">02/05/21</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="poster-filme">
                        <a><img src="img/posters/pulp-fiction-2.jpg" alt="Pulp Fiction"></a>
                        <div class="legenda">
                            <div class="descricao">
                                <p class="label-filme">Nome: <span>Pulp Fiction</span><br>
                                    Gênero: <span>Crime/Drama</span><br>
                                    Class. Ind.: <span>+18 anos</span>
                                </p>
                            </div>

                            <div class="bottom">
                                <div class="bloco">
                                    <p class="label-filme">Estreia</p>
                                    <p class="data">28/03/21</p>
                                </div>
                                <div class="bloco">
                                    <p class="label-filme">Último dia</p>
                                    <p class="data">02/05/21</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="poster-filme">
                        <a><img src="./img/posters/raya-e-o-último-dragão.jpg" alt="Raya e Último Dragão"></a>
                        <div class="legenda">
                            <div class="descricao">
                                <p class="label-filme">Nome: <span>Raya e o último dragão</span><br>
                                    Gênero: <span>Aventura</span><br>
                                    Class. Ind.: <span>Livre</span>
                                </p>
                            </div>

                            <div class="bottom">
                                <div class="bloco">
                                    <p class="label-filme">Estreia</p>
                                    <p class="data">28/03/21</p>
                                </div>
                                <div class="bloco">
                                    <p class="label-filme">Último dia</p>
                                    <p class="data">02/05/21</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster-filme">
                        <a><img src="./img/posters/monster-hunter.jpg" alt="Monster Hunter"></a>
                        <div class="legenda">
                            <div class="descricao">
                                <p class="label-filme">Nome: <span>Monster Hunter</span><br>
                                    Gênero: <span>Ação</span><br>
                                    Class. Ind.: <span>+13 anos</span>
                                </p>
                            </div>

                            <div class="bottom">
                                <div class="bloco">
                                    <p class="label-filme">Estreia</p>
                                    <p class="data">28/03/21</p>
                                </div>
                                <div class="bloco">
                                    <p class="label-filme">Último dia</p>
                                    <p class="data">02/05/21</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comprar-filmes">
                <p>Compre o seu ingresso!</p>
                <a href="./vender.php">
                    <button class="btn-vermelho">Comprar</button>
                </a>
                
            </div>
        </section>


        <section id="sobre">
            <div class="text-sobre">
                <h2>Sobre</h2>
                <p>O CineMail surgiu a partir da necessidade de levar aos moradores de Dendezeiros um <strong>cinema único e inovador</strong> na exibição de seus filmes. <br><br> Os filmes que ficarão em cartaz são <strong>escolhidos a partir da indicação dos moradores</strong>, ou seja, aqueles que obtiverem mais votos serão exibidos.</p><br>
                <p>Foi fundado em Março de 2020 pelos sócios Isael Sobral e Estefane Luz, como uma forma de ajudar e agradecer ao bairro de Dendezeiros pelo enorme carinho que tiveram durante toda sua infância.</p> <br>
                <p>O CineMail possui <strong>a mais alta tecnologia de imersão da America Latina.</strong> Venha assistir com a gente!</p>
            </div>
            <div id="img-sobre">
                <img src="img/sobre/cinema-1.jpg" alt="Visão frontal de várias pessoas em uma sala de cinema">
                <img src="img/sobre/cinema-2.jpg" alt="Visão de trás de uma sala de cinema lotada">
            </div>

        </section>

        <footer id="contato">
            <div class="contatos-container">
                <div class='redes-sociais'>
                    <h2>Redes Sociais</h2>
                    <ul>
                        <li> <!--id="facebook" onmouseover="passaCursor();" onmouseout="retiraCursor();"-->
                            <a href="facebook.com" target="_blank"><img src="./img/redes-sociais/facebook.svg" alt="Facebook CineMail"></a>
                        </li>
                        <li>
                            <a href="instagram.com" target="_blank"><img src="./img/redes-sociais/instagram.svg" alt="Instagram CineMail"></a>
                        </li>
                        <li>
                            <a href="twitter.com" target="_blank"><img src="./img/redes-sociais/twitter.svg" alt="Twitter CineMail"></a>
                        </li>
                    </ul>
                </div>
                <div class="contato">
                    <h2>Contato</h2>
                    <ul>
                        <li>+55 71 911 111 111</li>
                        <li><a href="mailto:cinemail@email.com">cinemail@email.com</a></li>
                        <li>Av. Duas Caras, 120</li>
                        <li>XXXXXX - SP</li>
                    </ul>
                </div>
                <img id="img-footer" src="./img/img-footer.svg" alt="pessoas-assistindo">
            </div>
        </footer>
    </div>
    <!--Linkando com arquivo JS-->
    <script src="./js/script.js"></script>
    <script src="./js/owl/jquery.min.js"></script>
    <script src="./js/owl/owl.carousel.min.js"></script>
    <script src="./js/owl/setup.js"></script>
    <script src="./js/hover.js"></script>
</body>

</html>