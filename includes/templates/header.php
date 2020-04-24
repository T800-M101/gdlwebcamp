
<!doctype html>
<html class="no-js" lang="esp">

<head>
  <meta charset="utf-8">

  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#fafafa">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/all.min.css">


  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-oi8o31xSQq8S0RpBcb4FaLB8LJi9AT8oIdmS1QldR8Ui7KUQjNAnDlJjp55Ba8FG" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">

<?php
     $archivo = basename($_SERVER['PHP_SELF']);
       $pagina = str_replace('.php',"",$archivo);//1. Que  se va a remplazar, 2. Com que se remplaza, 3. La fuente
       if($pagina =='invitados' || $pagina =='index'){
         echo '<link rel="stylesheet" href="css/colorbox.css">';
         echo ' <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
         integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
         crossorigin=""/>';
       }else if($pagina =='conferencia'){
         echo '<link rel="stylesheet" href="css/lightbox.css">';
       }

 ?>

  
  <link rel="stylesheet" href="css/main.css">


</head>

<body class="<?php echo $pagina; ?>">
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  <header header="site-header">
    <div class="hero">
      <div class="contenido-header">
        <nav class="redes-sociales">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-pinterest-p"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </nav>
        <div class="informacion-evento">
          <div class="clearfix">
            <p class="fecha"><i class="far fa-calendar-alt"></i>10-12 Dic</p>
            <p class="ciudad"><i class="fas fa-map-marker-alt"></i>Guadalajara, MX</p>
          </div>

          <h1 class="nombre-sitio">GdlWebCamp</h1>
          <p class="slogan">La mejor conferencia de <span>diseño web</span></p>
        </div><!--informacin-evento-->

      </div>
    </div><!--.hero-->
  </header>

  <div class="barra">
    <div class="contenedor clearfix">
      <div class="logo">
        <a href="index.php">
        <img src="img/logo.svg" alt="logowebcamp">
        </a>
      </div>

      <div class="menu-movil">
          <span></span>
          <span></span>
          <span></span>
      </div>
      <nav class="navegacion-principal clearfix">
            <a href="conferencia.php">Conferencia</a>
            <a href="calendario.php">Calendario</a>
            <a href="invitados.php">Invitados</a>
            <a href="registro.php">Reservaciones</a>
      </nav>
    </div><!--.contenedor-->
  </div><!--.barra-->
