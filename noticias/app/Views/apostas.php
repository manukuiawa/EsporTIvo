<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="website icon" type="png" 
    href="img/bola.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dongle&family=Jost:wght@200&family=Oswald&family=Shantell+Sans:wght@300&family=Skranji&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://kit.fontawesome.com/ab42b7abd4.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://kit.fontawesome.com/ab42b7abd4.css" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Bebas+Neue&family=Dongle&family=Jost:wght@200&family=Oswald:wght@400;500&family=Sedgwick+Ave+Display&family=Shantell+Sans:wght@300&family=Skranji&family=Space+Grotesk:wght@400;600;700&family=Teko:wght@500&display=swap" rel="stylesheet">
    <title>Portal EsporTIvo</title>
</head>
<body>
    
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <div class="links-assinar-entrar">
                <a class="entrar" href="login.html">Entrar</a>
            </div>
            <div>
                <a href="index.html"><i class="fa-solid fa-house"></i></a>
            </div>
        </div> 
    </nav>
    
    <div class="retangulo-principal-aposta">
        <h2 class="portal"><span>// Portal Espor<span style="color: rgb(47, 255, 0); font-weight: bold;">TI</span>vo //</span></h2>
        <div id="search-results"></div>
        <div class="caixa-pesquisa">
            <div id="resultado-pesquisa"></div>
          <input type="text" class="pesquisa-txt" placeholder="Faça sua busca">
          <a href="#" class="pesquisar-btn">
            <img src="img/lupa.png" alt="Lupa" height="20" width="20">
          </a>
        </div>
      </div>

 
      <div class="ret-aposta">
        <h5><img src="img/bolafutebol.png" alt="Futebol" height="20" width="20"> Futebol</h5>
        <h5><img src="img/bandeira-de-corrida.png" alt="Fórmula 1" height="20" width="20"> Fórmula 1</h5>
        <h5><img src="img/voleibol.png" alt="Vôlei" height="20" width="20"> Vôlei</h5>
        <h5><img src="img/bola-de-basquete.png" alt="Basquete" height="25" width="25"> Basquete</h5>
        <h5><img src="img/ficha-de-cassino.png" alt="Minhas Apostas" height="25" width="25"> Minhas Apostas</h5>
    </div>

    <div class="retangulo-aposta">
    <h4 class="title-principal">Principais Apostas</h4>
    <div class="dia-aposta">
        <h6 style="margin-right:60px;">Sábado - 18/11/2023</h6>
        <h6 style="margin-left: 60px;">1</h6>
        <h6 style="margin-right: 60px; margin-left:90px;">x</h6>
        <h6 style="margin-left: 40px;">2</h6>
    </div>
    <button style="margin-top: -200px; margin-left: -440px; border-color: blue; border-radius: 2px; text-shadow: 10px;">1.98</button>
    <button style="margin-top: -200px; margin-left: 55px; border-color: blue; border-radius: 2px;">3.40</button>
    <button style="margin-top: -200px; margin-left: 60px; border-color: blue; border-radius: 2px;">3.90</button>
    <div class="time1">
    <img src="img/fortaleza.png" alt="Fortaleza" width="25" height="25">
    <h5> Fortaleza</h5>
    </div>
    <div class="time2">
    <img src="img/fluminense.png" alt="Fluminense" width="25" height="25">
    <h5> Fluminense</h5>
    </div>
    </div>

    <div class="ret-pag">
        <h3>Valor da Aposta</h3>
        <input type="number" name="valor" id="valor" placeholder="Insira um valor">
        <button onclick="atualizarValor(25)" style="font-size: 20px;">+25</button>
        <button onclick="atualizarValor(50)" style="font-size: 20px;">+50</button>
        <button onclick="atualizarValor(100)" style="font-size: 20px;">+100</button>
        <button onclick="atualizarValor(250)" style="font-size: 20px;">+250</button>
        <button onclick="atualizarValor(500)" style="font-size: 20px;">+500</button>
        <br><br>
        <a class="btn-aposta" href="pagamento.html" onclick="apostar()">APOSTAR</a>
    </div>
    
    <script>
      
    function atualizarValor(valor) {
        var valorAtual = parseFloat(document.getElementById('valor').value) || 0;
        document.getElementById('valor').value = valorAtual + valor;
    }

    function apostar() {
        var valorApostado = parseFloat(document.getElementById('valor').value) || 0;
        console.log("Valor apostado: " + valorApostado);
    }

    </script>

    <script src="https://kit.fontawesome.com/ab42b7abd4.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script.js"></script>

    <style>
        footer {
    background-image: linear-gradient( to right, rgb(71, 69, 229), rgb(219, 222, 223) );
    color: #fff;
    text-align: center;
    padding: 1px;
    position: relative;
    font-family: Arial, Helvetica, sans-serif;
    color: black;
}

    </style>

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