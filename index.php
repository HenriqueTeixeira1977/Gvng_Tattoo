<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Henriq Tatto</title>

  <!-- Favicons -->
  <link href="assets/images/favicon.png" rel="icon">
  <link href="assets/images/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  
  <!-- Link do Bootstrap 5 -->  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

  <!-- Vendor CSS Files -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <!-- Navbar -->
  
<!--  
  <header>
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">HenriqTattoo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
            <li class="nav-item"><a class="nav-link" href="#portfolio">Portfólio</a></li>
            <li class="nav-item"><a class="nav-link" href="#artistas">Artistas</a></li>
            <li class="nav-item"><a class="nav-link" href="#depoimentos">Depoimentos</a></li>
            <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
-->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <div id="logotipo" class="logotipo">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <div id="logo-img" class="logo-img">
          <a href="index.php"><img src="assets/img/logo.png" alt=""></a>
        </div>        
        <div id="logo-txt" class="logo-txt">
          <a href="index.php" class="titulo">HenriqueTattoo</a>
          <a href="index.php" class="slogan">LetteringCusttom</a>
        </div>
      </div>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#" class="active">Home</a></li>
          <li class="dropdown"><a href="#features"><span>Institucional</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#features">Missão</a></li>
              <li><a href="#features">Visão</a></li>
              <li><a href="#features">Valores</a></li>
            </ul>
          </li>          
          <li class="dropdown"><a href="#services"><span>Áreas Atendidas</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Direito Societário</a></li>
              <li class="dropdown"><a href="#"><span>Direito Contratual</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Consultoria Jurídica</a></li>
                  <li><a href="#">Contratos Comerciais</a></li>
                  <li><a href="#">Contratos Imobiliários</a></li>
                </ul>
              </li>
              <li><a href="#">Direito Tributário</a></li>
              <li><a href="#">Direito Trabalhista</a></li>
              <li><a href="#">Direito Civil</a></li>
              <li><a href="#">Direito Comercial</a></li>
            </ul>
          </li>
          
          <li class="dropdown"><a href="#"><span>Seções</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#cases">Casos</a></li>
              <li><a href="#projects">Projetos</a></li>
              <li><a href="#testimonials">Depoimentos</a></li>
              <li><a href="#recent-blog-posts">Blog</a></li>              
            </ul>
          </li>          
          <li><a href="#about">Sobre Nós</a></li>
          <li><a href="#get-started">Contato</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>


  <main>
    <!-- Home -->
    <section id="home" class="home text-center text-light" style="height: 100vh; background-color: #121212;">
      <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <!-- Slide 1 -->
          <div class="carousel-item active">
            <img src="assets/images/home/bg1.png" class="d-block w-100" alt="Imagem 1">
            <div class="carousel-caption d-flex align-items-center justify-content-center d-none d-md-block">
              <div class="text-center">
                <h1 class="display-4">Arte, Estilo e Personalidade</h1>
                <p class="lead">Explore o melhor da tatuagem com Henriq Tatto, um artista premiado e especialista em artes customizadas.</p>
                <a href="#portfolio" class="btn btn-success btn-lg">Veja o portfólio</a>
              </div>
            </div>
          </div>
          <!-- Slide 2 -->
          <div class="carousel-item">
            <img src="assets/images/home/bg2.png" class="d-block w-100" alt="Imagem 2">
            <div class="carousel-caption d-flex align-items-center justify-content-center d-none d-md-block">
              <div class="text-center">
                <h1 class="display-4">Transforme Sua Pele em Arte</h1>
                <p class="lead">Cada tatuagem é uma obra única. Faça parte dessa experiência.</p>
                <a href="#contato" class="btn btn-success btn-lg">Entre em contato</a>
              </div>
            </div>
          </div>
          <!-- Slide 3 -->
          <div class="carousel-item">
            <img src="assets/images/home/bg3.png" class="d-block w-100" alt="Imagem 3">
            <div class="carousel-caption d-flex align-items-center justify-content-center d-none d-md-block">
              <div class="text-center">
                <h1 class="display-4">Tatuagens Exclusivas e Personalizadas</h1>
                <p class="lead">A arte de tatuar é nossa paixão. Deixe sua marca no mundo.</p>
                <a href="#portfolio" class="btn btn-success btn-lg">Veja mais</a>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
  
    <!-- Sobre -->
    <section id="sobre" class="py-5 text-center" style="background-color: #1a1a1a;">
      <div class="container">
        <div class="row align-items-center">
          <!-- Coluna de imagem -->
          <div class="col-md-6">
            <img src="assets/images/sobre/sobre.png" alt="Henriq Tatto" class="img-fluid rounded">
          </div>
          <!-- Coluna de texto -->
          <div class="col-md-6">
            <h2 class="text-success">Sobre Henriq</h2>
            <p>Sou Henriq Tatto, pai orgulhoso da Helena, artista com 9 anos de experiência e apaixonado por transformar ideias em arte na pele. Ao longo da minha trajetória, conquistei 20 premiações nacionais e me especializei em artes customizadas, criando tatuagens que refletem a individualidade de cada cliente.</p>
            <p>Além de tatuador, sou sócio do estúdio "Só mais uma Tattoo" — um espaço que respira arte e liberdade criativa — e fundador da Tatto Gang, um movimento que une amantes da tatuagem em torno da autenticidade e da expressão pessoal.</p>          
            <p>Aqui, cada tatuagem é mais do que um desenho: é um símbolo, uma memória, uma obra de arte viva.</p>
            <a href="#contato" class="btn btn-success btn-lg">Entre em contato</a>
          </div>
        </div>
      </div>
    </section>
  
    <!-- Portfólio -->
    <!--
    <section id="portfolio" class="py-5">
      <div class="container text-center">
        <h2 class="text-success">Portfólio</h2>
        <div class="row g-4">
          <div class="col-md-4">
            <img src="../assets/images/portifolio/tattoo01.png" class="img-fluid rounded" alt="Tatuagem 1">
          </div>
          <div class="col-md-4">
            <img src="../assets/images/portifolio/tattoo02.png" class="img-fluid rounded" alt="Tatuagem 2">
          </div>
          <div class="col-md-4">
            <img src="../assets/images/portifolio/tattoo03.png" class="img-fluid rounded" alt="Tatuagem 3">
          </div>
        </div>
      </div>
    </section>
    -->
    <section id="portfolio" class="py-5 text-center">
      <div class="container">
        <h2 class="text-success">Portfólio</h2>
        <div class="row g-4">
          <div class="col-md-4"><img src="assets/images/portifolio/tattoo01.png" class="img-fluid rounded"></div>
          <div class="col-md-4"><img src="assets/images/portifolio/tattoo02.png" class="img-fluid rounded"></div>
          <div class="col-md-4"><img src="assets/images/portifolio/tattoo03.png" class="img-fluid rounded"></div>
          <div class="col-md-4"><img src="assets/images/portifolio/tattoo04.png" class="img-fluid rounded"></div>
          <div class="col-md-4"><img src="assets/images/portifolio/tattoo05.png" class="img-fluid rounded"></div>
          <div class="col-md-4"><img src="assets/images/portifolio/tattoo06.png" class="img-fluid rounded"></div>
          <div class="col-md-4"><img src="assets/images/portifolio/tattoo07.png" class="img-fluid rounded"></div>
          <div class="col-md-4"><img src="assets/images/portifolio/tattoo08.png" class="img-fluid rounded"></div>
          <div class="col-md-4"><img src="assets/images/portifolio/tattoo09.png" class="img-fluid rounded"></div>
          <div class="col-md-4"><img src="assets/images/portifolio/tattoo10.png" class="img-fluid rounded"></div>
          <div class="col-md-4"><img src="assets/images/portifolio/tattoo11.png" class="img-fluid rounded"></div>
          <div class="col-md-4"><img src="assets/images/portifolio/tattoo12.png" class="img-fluid rounded"></div>
          <div class="col-md-4"><img src="assets/images/portifolio/tattoo13.png" class="img-fluid rounded"></div>
          <div class="col-md-4"><img src="assets/images/portifolio/tattoo14.png" class="img-fluid rounded"></div>
          <div class="col-md-4"><img src="assets/images/portifolio/tattoo15.png" class="img-fluid rounded"></div>
        </div>
      </div>
    </section>
  
    <!-- Artistas -->
    <section id="artistas" class="py-5 text-center" style="background-color: #1a1a1a;">
      <div class="container">
        <h2 class="text-success">Conheça os Artistas</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="card text-center bg-dark text-light">
              <img src="assets/images/artistas/artist01.png" class="card-img-top" alt="Artista 1">
              <div class="card-body">
                <h5 class="card-title">Artista 1</h5>
                <p class="card-text">Descrição do artista 1.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center bg-dark text-light">
              <img src="assets/images/artistas/artist02.png" class="card-img-top" alt="Artista 2">
              <div class="card-body">
                <h5 class="card-title">Artista 2</h5>
                <p class="card-text">Descrição do artista 2.</p>
              </div>
            </div>
          </div><div class="col-md-4">
            <div class="card text-center bg-dark text-light">
              <img src="assets/images/artistas/artist03.png" class="card-img-top" alt="Artista 3">
              <div class="card-body">
                <h5 class="card-title">Artista 3</h5>
                <p class="card-text">Descrição do artista 3.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <!-- Depoimentos -->
    <section id="depoimentos" class="py-5 text-center" style="background-color: #1a1a1a;">
      <div class="container">
        <h2 class="text-success">O que dizem nossos clientes</h2>
        <div class="row">
          <div class="col-md-6">
            <blockquote class="blockquote">
              <p class="mb-0">"Henriq é um mestre. Tatuou meu braço com uma arte incrível!"</p>
              <footer class="blockquote-footer">Cliente 1</footer>
            </blockquote>
          </div>
          <div class="col-md-6">
            <blockquote class="blockquote">
              <p class="mb-0">"Atendimento excelente, o estúdio tem uma energia incrível!"</p>
              <footer class="blockquote-footer">Cliente 2</footer>
            </blockquote>
          </div>
        </div>
      </div>
    </section>
  
    <!-- Contato -->
    <section id="contato" class="py-5">
      <div class="container text-center">
        <h2 class="text-success">Entre em Contato</h2>
        <form method="POST" action="contact/process_form.php">
          <div class="mb-3">
            <input type="text" class="form-control" name="nome" placeholder="Nome" required>
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
          </div>
          <div class="mb-3">
            <textarea class="form-control" name="mensagem" placeholder="Mensagem" rows="4" required></textarea>
          </div>
          <button type="submit" class="btn btn-success btn-lg">Enviar</button>
        </form>
      </div>
    </section>
  </main>

  
  <!-- Footer -->
  <footer class="bg-dark text-center text-light py-3">
    <p>&copy; 2025 Henriq Tatto | Todos os direitos reservados</p>
    <div class="social-icons">
      <a href="#" class="text-success me-3">
        <i class="fab fa-facebook"></i> Facebook
      </a>
      <a href="#" class="text-success me-3">
        <i class="fab fa-instagram"></i> Instagram
      </a>
      <a href="#" class="text-success">
        <i class="fab fa-twitter"></i> Twitter
      </a>
    </div>
  </footer>
  
  <!-- Scripts -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="js/script.js"></script>
  
<!-- Effects  -->
  <!-- Scroll Top -->

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  <!-- Preloader -->
  <!-- <div id="preloader"></div> -->
  
  <!-- Vendor JS Files -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/purecounter/purecounter_vanilla.js"></script>
<!-- /Effects -->



</body>

</html>
