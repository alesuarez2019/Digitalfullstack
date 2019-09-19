<?php
  $variable1 = "Inicio";
  $variable2 = "FAQ";
  $variable3 = "Contacto";

  $registracion = "Registro";
  $logueado = "Login";
  $compras = "Carrito";

  $productos = "Ver más";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/1c8209e2c4.js"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Inicio</title>
  </head>
  <body>

  <!-- Encabezado -->
    <div class="container header">

      <div class="logo">
        <img src="img/images.png" alt="imagen">
      </div>

      <div class="centro">
        <nav>
          <ul>
            <li>
              <a href="#">
                <?=$variable1?>
              </a>
            </li>
            <li>
              <a href="FAQ.php">
                <?=$variable2?>
              </a>
            </li>
            <li>
              <a href="contacto2.php">
                <?=$variable3?>
              </a>
            </li>
          </ul>
        </nav>
      </div>

      <div class="izq">
        <nav>
          <ul>
            <li>
              <a href="registro1.php">
                <?=$registracion?>
              </a>
            </li>
            <li>
              <a href="login.php">
                <?=$logueado?>
              </a>
            </li>
            <li>
              <a href="#">
                <?=$compras?>
              </a>
            </li>
          </ul>
        </nav>
      </div>

      <!-- Search -->
        <div class="pull-right hidden-xs hidden-sm buscar text-center">
          <form action="" method="GET">
            <input class="text-input" type="text" name="q" placeholder="Buscar">
            <input class="submit-button" type="submit">
          </form>
        </div>
      </div>
      <!-- Fin del search -->


  <!-- Fin de encabezado -->

    <div id="main">
      <!-- Slider -->
      <div class="container">
        <div class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="slider-vino.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block"></div>
              </div>
              <div class="carousel-item">
                <img src="slider-vino.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block"></div>
              </div>
              <div class="carousel-item">
                <img src="slider-vino.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin de slider -->

    <!-- Contenido -->

      <div class="container">
        <h1 class="titulo1">Productos Destacados</h1>
      </div>

      <div class="container mt-5">
        <div class="row text-xs-center">
          <div class="col-md-4 col-sm-6 my-2">
            <img src="img/tinto.jpg" alt="" class="img-fluid border">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Ex minus numquam natus commodi ipsam recusandae modi sint magnam.</p>
            <button type="button" class="btn btn-primary" name="button"><a class="text-white text-decoration-none" href="producto.php"><?=$productos?></a></button>
          </div>
          <div class="col-md-4 col-sm-6 my-2">
            <img src="img/tinto.jpg" alt="" class="img-fluid border">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Ex minus numquam natus commodi ipsam recusandae modi sint magnam.</p>
            <button type="button" class="btn btn-primary" name="button">Ver más</button>
          </div>
          <div class="col-md-4 col-sm-6 my-2">
            <img src="img/tinto.jpg" alt="" class="img-fluid border">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Ex minus numquam natus commodi ipsam recusandae modi sint magnam.</p>
            <button type="button" class="btn btn-primary" name="button">Ver más</button>
          </div>
          <div class="col-md-4 col-sm-6 my-2">
            <img src="img/tinto.jpg" alt="" class="img-fluid border">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Ex minus numquam natus commodi ipsam recusandae modi sint magnam.</p>
            <button type="button" class="btn btn-primary" name="button">Ver más</button>
          </div>
          <div class="col-md-4 col-sm-6 my-2">
            <img src="img/tinto.jpg" alt="" class="img-fluid border">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Ex minus numquam natus commodi ipsam recusandae modi sint magnam.</p>
            <button type="button" class="btn btn-primary" name="button">Ver más</button>
          </div>
          <div class="col-md-4 col-sm-6 my-2">
            <img src="img/tinto.jpg" alt="" class="img-fluid border">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Ex minus numquam natus commodi ipsam recusandae modi sint magnam.</p>
            <button type="button" class="btn btn-primary" name="button">Ver más</button>
          </div>
          <div class="col-md-4 col-sm-6 my-2">
            <img src="img/tinto.jpg" alt="" class="img-fluid border">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Ex minus numquam natus commodi ipsam recusandae modi sint magnam.</p>
            <button type="button" class="btn btn-primary" name="button">Ver más</button>
          </div>
          <div class="col-md-4 col-sm-6 my-2">
            <img src="img/tinto.jpg" alt="" class="img-fluid border">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Ex minus numquam natus commodi ipsam recusandae modi sint magnam.</p>
            <button type="button" class="btn btn-primary" name="button">Ver más</button>
          </div>
          <div class="col-md-4 col-sm-6 my-2">
            <img src="img/tinto.jpg" alt="" class="img-fluid border">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Ex minus numquam natus commodi ipsam recusandae modi sint magnam.</p>
            <button type="button" class="btn btn-primary" name="button">Ver más</button>
          </div>
        </div>
        <!-- Fin de contenido -->

        <!-- Footer -->
        <footer class="bg-dark">
           <div class="container text-center">
             <div class="row">
               <div class="col-md-4 py-3">
                 <h3 class="text-white">Redes Sociales</h3>
                  <nav>
                    <ul class="social-header list-inline mb-0 my-3 text-center">
                      <li class="list-inline-item">
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                              </span>
                          </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                              </span>
                          </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
                              </span>
                          </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                              </span>
                          </a>
                      </li>
                    </ul>
                  </nav>
               </div>
               <div class="col-md-4 py-3">
                 <h3 class="text-white"><i class="fas fa-truck"></i> Envios Gratis</h3>
                 <p class="text-white">Compras de $1500 Rosario y alrededores</p>
               </div>
               <div class="col-md-4 py-3 payment-container">
                 <h3 class="text-white">Medios de pago</h3>
                 <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/visa@2x.png" alt="" height="29">
                 <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/mastercard@2x.png" alt="" height="29">
                 <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/amex@2x.png" alt="" height="29">
                 <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/ar/banelco@2x.png" alt="" height="29">
                 <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/ar/cabal@2x.png" alt="" height="29">
                 <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/ar/tarjeta-naranja@2x.png" alt="" height="29">
                 <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/mercadopago@2x.png" alt="" height="29">
                 <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/nativa@2x.png" alt="" height="29">
                 <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/pagofacil@2x.png" alt="" height="29">
                 <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/rapipago@2x.png" alt="" height="29">
               </div>
               <div class="col-md-12 text-center bg-secondary">
                   <p class="text-white pt-3">&copy;2019 - Todos los derechos reservados.</p>
               </div>
             </div>
           </div>
        </footer>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
