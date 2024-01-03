<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
    <link rel="website icon" type="png" href="img/bola.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dongle&family=Jost:wght@200&family=Oswald&family=Shantell+Sans:wght@300&family=Skranji&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://kit.fontawesome.com/ab42b7abd4.css" crossorigin="anonymous">
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
                <a class="entrar" href="login.html">Entrar</a>
            </div>
            <div>
                <a href="/"><i class="fa-solid fa-house"></i></a>
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



    <div class="noticia-principal">
        <h1>
            <?php echo $noticia['TITULO'] ?>
        </h1>
        <br>
        <p class="descricao-not">
            <?php echo $noticia['DESCRICAO'] ?>
        </p>

        <hr>
        <p style="display: inline-block; margin-right: 190px;">
            <?php echo $noticia['DATA_HORA'] ?>
        </p>
        <i class="fab fa-instagram" style="display: inline-block; margin-right: 10px;"></i>
        <i class="fab fa-facebook" style="display: inline-block; margin-right: 10px;"></i>
        <i class="fab fa-twitter" style="display: inline-block; margin-right: 10px;"></i>
        <i class="fa-solid fa-share-nodes" style="display: inline-block;"></i>


        <br>
        <img class="imagem" src="<?php echo base_url() . 'assets/fotos/' . $noticia['FOTO'] ?>" alt="Imagem da Notícia">
        <br><br>
        <!-- <div class="data">
            <//?php echo $noticia['DATA_HORA'] ?>
        </div> -->
        <br>


        <div class="conteudo">

            <p>Quatro dos seis pilotos investigados por darem voltas muito lentas ou bloquearem a saída do pit lane na
                classificação do GP de São Paulo foram ouvidos pelos comissários nesta sexta-feira. E se Lance Stroll
                foi isento por exceder o delta de velocidade para uma volta, por ter tentado não atrapalhar o resto do
                grid no trecho, Pierre Gasly, Esteban Ocon e George Russell não tiveram a mesma sorte: perdem duas
                posições no grid de domingo porque não ficaram o máximo possível à esquerda no setor.</p>
            <br>
            <p>Russell era, originalmente, sexto colocado; Esteban Ocon 12º e Pierre Gasly, 13º. Agora eles ocupam
                respectivamente o oitavo, 14º e 15º lugares no grid de domingo.
                <br><br>
                Tanto as voltas lentas, quanto a situação de bloquear o pit lane são questões relacionadas: a regra que
                impõe um tempo máximo de volta que deve ser percorrida pelos pilotos entre as duas linhas do safety car
                foi estabelecida pelo diretor de provas da Federação Internacional do Automobilismo (FIA), Niels
                Wittich, no GP da Itália em setembro.
                <br><br>
                O objetivo é evitar que carros lentos acabem atrapalhando outros na pista que estejam em volta rápida.
                No entanto, alguns pilotos têm passado muito tempo na saída do pit lane para tentar abrir uma distância
                segura dos rivais, o que também passou a ocasionar <strong>punições após episódios em Singapura e no
                    México</strong>.

                <br><br>
                Até então, nenhum desses lances ocasionou em punição. Ainda no GP da Itália, por exemplo, Charles
                Leclerc e Carlos Sainz saíram ilesos apesar das voltas consideradas lentas. Porém, para a etapa no
                Autódromo de Interlagos, a FIA alertou que reforçaria a cobrança nesse tipo de ocorrência em documento
                emitido por Wittich com avisos para o fim de semana:

                <br><br>
                <i>"Os pilotos não podem andar desnecessariamente lentos, o que inclui parar um carro na pista do pit
                    lane. Durante a classificação sprint e a classificação (tradicional), os pilotos podem criar um
                    espaço entre as luzes de saída dos boxes e a linha do safety car. Qualquer piloto que desejar fazer
                    isso deve pilotar o mais à esquerda possível para permitir que outros o ultrapassem pelo lado
                    direito da saída dos boxes"</i>, informa o texto em seu Artigo 14.
            </p>
        </div>
        <br>
        <h3>Veja Mais:</h3>
    </div>

    <br><br>

    <div class="noticias-vejamais">
        <div class="center">
            <div class="noticias-wraper-2">
                <div class="noticia-destaque2"
                    style="background-image: url('https://s2-ge.glbimg.com/iVEr5fXZhO2SKGgmmrZKl5eCchA=/0x0:799x533/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2023/w/O/ANVYBPS4OMosYmZiMWPg/53178878439-01cb6eae94-c.jpg');">
                    <div class="noticia-destaque-single2">
                    </div>
                </div>
                <div class="texto-fora">
                    <h6 class="tag">Futebol</h6>
                    <h3>Matheus Cunha vê disputa acirrada por <br>vaga no ataque da Seleção: "Jogadores de <br>
                        qualidade"</h3>
                    <p class="descricao6">Importante dentro de campo e versátil taticamente, o que o faz ser admirado
                        por <br>Diniz, o atacante acredita que o seu modo de jogar encaixa com o modelo de jogo <br> do
                        treinador do Brasil</p>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="noticias-vejamais">
        <div class="center">
            <div class="noticias-wraper-2">
                <div class="noticia-destaque2"
                    style="background-image: url('https://s2-ge.glbimg.com/rZPZPjYWTKITG9pg5nzjoXDkFfU=/0x0:4160x3121/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2023/r/L/zLcbPJT5WUIwVdry4xLw/whatsapp-image-2023-11-04-at-12.38.22.jpeg');">
                    <div class="noticia-destaque-single2">
                    </div>
                </div>
                <div class="texto-fora">
                    <h6 class="tag">Pan 2023</h6>
                    <h3>Pan 2023: Babi Domingos critica ginasta <br> mexicana por provocação às brasileiras: <br> "Muito
                        triste"</h3>
                    <p class="descricao6">Marina Malpicas, do México, saiu de Santiago sem pódio e insinuou que o Brasil
                        <br>é favorecido por arbitragem na ginástica rítmica; Brasileira dona de 3 ouros e 2 <br>pratas
                        rebateu: "A gente trabalhou muito"
                    </p>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="noticias-vejamais">
        <div class="center">
            <div class="noticias-wraper-2">
                <div class="noticia-destaque2"
                    style="background-image: url('https://static-wp-tor15-prd.torcedores.com/wp-content/uploads/2021/11/bola-de-ouro-france-football.png');">
                    <div class="noticia-destaque-single2">
                    </div>
                </div>
                <div class="texto-fora">
                    <h6 class="tag" style="background-color: green;">Futebol Internacional</h6>
                    <h3>Bola de Ouro: Uefa fará parte da organização <br> do prêmio a partir de 2024</h3>
                    <p class="descricao2">A partir de 2024, a prestigiosa premiação da Bola de Ouro contará com a <br>
                        participação da UEFA na sua organização. Essa colaboração promete trazer <br>uma dimensão ainda
                        mais global e influente para o prêmio, que já é <br>extremamente reconhecido no mundo do
                        futebol. </p>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="noticias-vejamais">
        <div class="center">
            <div class="noticias-wraper-2">
                <div class="noticia-destaque2"
                    style="background-image: url('https://s2-ge.glbimg.com/RlGAxuuC9SJyTRZRJS12yVoVSSg=/0x0:1600x1034/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2023/Q/A/QdDxeVQIGgaB7GJQn4zA/whatsapp-image-2023-11-03-at-22.25.21.jpeg');">
                    <div class="noticia-destaque-single2">
                    </div>
                </div>
                <div class="texto-fora">
                    <h6 class="tag">Pan 2023</h6>
                    <h3>Após bater recordes, foco do Brasil é alcançar <br>200 medalhas</h3>
                    <p class="descricao6">Brasil já superou o recorde de ouros e do total de pódios em um único Pan <br>
                        e tenta, nos dois últimos dias de eventos em Santiago, alcançar a simbólica <br>marca de 200
                        medalhas</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/ab42b7abd4.js" crossorigin="anonymous"></script>
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