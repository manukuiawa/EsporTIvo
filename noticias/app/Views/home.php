<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
    <link rel="website icon" type="png" href="img/bola.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dongle&family=Jost:wght@200&family=Oswald&family=Shantell+Sans:wght@300&family=Skranji&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://kit.fontawesome.com/ab42b7abd4.css" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Bebas+Neue&family=Dongle&family=Jost:wght@200&family=Oswald:wght@400;500&family=Sedgwick+Ave+Display&family=Shantell+Sans:wght@300&family=Skranji&family=Space+Grotesk:wght@400;600;700&family=Teko:wght@500&display=swap"
        rel="stylesheet">
    <title>Portal EsporTIvo</title>
</head>

<body>

    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <div class="links-assinar-entrar">
                <a class="entrar" href="login">Entrar</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Calendário dos Jogos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Fórmula 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Pan 2023</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Futebol</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Apostas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Streaming</a>
                        </li>
                    </ul>

                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <div class="offcanvas-header border-0" style="display: flex; align-items: center;">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" width="35" height="35"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                            style="vertical-align: middle; margin-right: 10px;">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z">
                            </path>
                        </svg>
                        <ul>
                            <li>
                                <span>
                                    <a class="acessar-conta" href="login"><strong>Acesse sua conta</strong></a>
                                </span>
                            </li>
                            <li>
                                <a class="cadastrar-agora" href="cadastro.html">ou cadastre-se agora</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="retangulo">
        <h2><span>// Portal Espor<span style="color: rgb(246, 255, 0); font-weight: bold;">TI</span>vo //</span></h2>
        <div id="search-results"></div>
        <div class="caixa-pesquisa">
            <div id="resultado-pesquisa"></div>
            <input type="text" class="pesquisa-txt" placeholder="Faça sua busca">
            <a href="#" class="pesquisar-btn">
                <img src="<?= base_url('assets/img/lupa.png') ?>" alt="Lupa" height="20" width="20">
            </a>
        </div>
    </div>
    <br><br>


    <section class="noticia1">
        <div class="center">
            <div class="noticias-wraper-1">
                <?php $ultimas_noticias = array_slice($noticias, 0, 1);
                foreach ($ultimas_noticias as $noticia):
                    ?>
                    <div class="noticia-destaque">
                        <a href="<?php echo ('/noticia/' . $noticia['ID']) ?>" style="text-decoration: none;"
                            style="text-decoration: none;">
                            <div style="background-image: url('<?php
                            echo base_url() . 'assets/fotos/' . $noticia['FOTO']
                                ?>');" class="noticia-destaque-single">
                                <h3 style="font-family: 'Signika Negative';
                    color: white;
                    text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.9);
                    padding: 10px;
                    width: 90%;
                    position: absolute;
                    top: 77%;
                    left: 20px;">
                                    <?php echo $noticia['TITULO'] ?>
                                </h3>
                                <p class="descricao">
                                    <?php echo $noticia['DESCRICAO'] ?>
                                </p>
                            </div>
                    </div>
                <?php endforeach; ?>
                <div>
                    <?php $ultimas_noticias = array_slice($noticias, 1, 1);
                    foreach ($ultimas_noticias as $noticia):
                        ?>
                        <a href="<?php echo ('/noticia/' . $noticia['ID']) ?>" style="text-decoration: none;"
                            style="text-decoration: none;">
                            <div class="outra-noticia1-single"
                                style="background-image: url('<?php echo base_url() . 'assets/fotos/' . $noticia['FOTO'] ?>');">
                                <h3 style="font-family: 'Signika Negative';
                    color: white;
                    text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.9);
                    padding: 10px;
                    width: 90%;
                    position: absolute;
                    top: 40%;
                    left: 20px;">
                                    <?php echo $noticia['TITULO'] ?>
                                </h3>
                                <!-- <p style="  font-family: 'Lato';
                     color: white;
                     text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.9);
                     padding: 10px;
                     width: 90%;
                     position: absolute;
                     bottom: 0;
                     top: 75%;
                     left: 20px;"> echo $noticia['DESCRICAO'] </p> -->
                            </div>
                            <div>
                                <?php $ultimas_noticias = array_slice($noticias, 2, 1);
                                foreach ($ultimas_noticias as $noticia):
                                    ?>
                                    <a href="<?php echo ('/noticia/' . $noticia['ID']) ?>" style="text-decoration: none;"
                                        style="text-decoration: none;">
                                    <?php endforeach; ?>


                                    <div class="outra-noticia1-single"
                                        style="background-image: url('<?php echo base_url() . 'assets/fotos/' . $noticia['FOTO'] ?>');">
                                        <h3>
                                            <?php echo $noticia['TITULO'] ?>
                                        </h3><br><br>
                                        <!-- <p> echo $noticia['DESCRICAO'] </p> -->
                                    </div>
                            </div>
                        <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>



    <br><br><br><br>
    <?php
    $ultimas_noticias = array_slice($noticias, 0, 10);
    foreach ($ultimas_noticias as $noticia): ?>
        <!-- foreach ($noticias as $noticia):  -->

        <div class="noticias">
            <div class="center">
                <a href="<?php echo ('/noticia/' . $noticia['ID']) ?>" style="text-decoration: none;">
                    <div class="noticias-wraper-2">
                        <div class="noticia-destaque2"
                            style="background-image: url('<?php echo base_url() . 'assets/fotos/' . $noticia['FOTO'] ?>');">
                        </div>
                        <div class="texto-fora">
                            <h6 class="tag">
                                <?php echo $noticia['TAGS'] ?>
                            </h6>
                            <h3>
                                <?php echo $noticia['TITULO'] ?>
                            </h3>
                            <p class="descricao_grid">
                                <?php echo $noticia['DESCRICAO'] ?>
                            </p>
                        </div>
                    </div>
            </div>
        </div>
        <br><br><br>

    <?php endforeach; ?>
    <br>
    <hr style="margin-right: 400px; margin-left: 200px; border: 1px solid black;">
    <br><br>
    <div class="noticias">
        <div class="center">
            <div class="noticias-wraper-2">
                <div class="noticia-destaque2" style="background-image: url('');">
                    <div class="noticia-destaque-single2">
                    </div>
                </div>
                <div class="texto-fora-2">
                    <h6 class="tag" style="background-color: rgb(246, 246, 2);">Streaming</h6>
                    <h3>Streaming</h3>
                    <p class="descricao6">streaming</p>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="noticias">
        <div class="center">
            <div class="noticias-wraper-2">
                <div class="noticia-destaque2" style="background-image: url('');">
                    <div class="noticia-destaque-single2">
                    </div>
                </div>
                <div class="texto-fora-2">
                    <h6 class="tag" style="background-color: rgb(246, 246, 2);">Streaming</h6>
                    <h3>Streaming</h3>
                    <p class="descricao6">streaming</p>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="noticias">
        <div class="center">
            <div class="noticias-wraper-2">
                <div class="noticia-destaque2" style="background-image: url('');">
                    <div class="noticia-destaque-single2">
                    </div>
                </div>
                <div class="texto-fora-2">
                    <h6 class="tag" style="background-color: rgb(246, 246, 2);">Streaming</h6>
                    <h3>Streaming</h3>
                    <p class="descricao6">streaming</p>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="noticias">
        <div class="center">
            <div class="noticias-wraper-2">
                <div class="noticia-destaque2" style="background-image: url('');">
                    <div class="noticia-destaque-single2">
                    </div>
                </div>
                <div class="texto-fora-2">
                    <h6 class="tag" style="background-color: rgb(246, 246, 2);">Streaming</h6>
                    <h3>Streaming</h3>
                    <p class="descricao6">streaming</p>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="noticias">
        <div class="center">
            <div class="noticias-wraper-2">
                <div class="noticia-destaque2" style="background-image: url('');">
                    <div class="noticia-destaque-single2">
                    </div>
                </div>
                <div class="texto-fora-2">
                    <h6 class="tag" style="background-color: rgb(246, 246, 2);">Streaming</h6>
                    <h3>Streaming</h3>
                    <p class="descricao6">streaming</p>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>

    <footer class="text-center mt-5">
        <div class="copyright">
            &copy; 2023 - Todos os Direitos Reservados
        </div>
        <div class="social-links mt-3">
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/?locale=pt_BR"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/login?lang=pt"><i class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
        </div>
        <div class="contact-links mt-3">
            <a href="sobrenos.html">Sobre Nós</a>
            <a href="contato.html">Contato</a>
        </div>
        <p>Desenvolvido por Manuella, Pedro e Robson</p>
    </footer>
</body>

</html>