<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" type="image/png" href="img/bola.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Bebas+Neue&family=Dongle&family=Jost:wght@200&family=Oswald:wght@400;500&family=Sedgwick+Ave+Display&family=Shantell+Sans:wght@300&family=Skranji&family=Space+Grotesk:wght@400;600;700&family=Teko:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://kit.fontawesome.com/ab42b7abd4.css" crossorigin="anonymous">
    <title>Portal EsporTIvo</title>
</head>
<body>

    <div class="retangulo-log">
        <h2><span>// Portal Espor<span style="color: rgb(246, 255, 0); font-weight: bold;">TI</span>vo //</span></h2>
          </a>
        </div>
      </div>
      <br>
    <h2 class="contato">Entre em Contato</h2>
    <p class="contato_conosco">Preencha o formulário abaixo para entrar em contato conosco.</p>
    
 
    <form action="processar" method="POST">
       
        <input type="text" class="nome-cad" id="nome" name="nome" placeholder="Insira seu nome completo" required>
        <input type="email" class="email" id="email" name="email" placeholder="Insira seu email" required>
        <input type="text" class="nome-cad" id="assunto" name="assunto" placeholder="Insira o assunto:" required>
        <textarea id="mensagem" name="mensagem" rows="4" placeholder="Insira sua mensagem:"required></textarea>
        <br><br>
        <input class="btn-login" type="submit" value="Enviar">
        <br><br>
    </form>
<br><br>

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
            <a href="sobre.html">Sobre Nós</a>
            <a href="contato.html">Contato</a>
        </div>
        <p>Desenvolvido por Manuella, Pedro e Robson</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
