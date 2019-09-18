<?php
  $variable1 = "Inicio";
  $variable2 = "FAQ";
  $variable3 = "Contacto";

  $registracion = "Registro";
  $logueado = "Login";
  $compras = "Carrito";
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
              <a href="#">
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
              <a href="#">
                <?=$registracion?>
              </a>
            </li>
            <li>
              <a href="#">
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

      <div class="buscar">
          <h4>Buscador</h4>
      </div>
    </div>

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
                <div class="carousel-caption d-none d-md-block">
                  <h5>...</h5>
                  <p>...</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="slider-vino.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>...</h5>
                  <p>...</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="slider-vino.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>...</h5>
                  <p>...</p>
                </div>
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
               <div class="col-md-4">
                  <h2>Redes</h2>
               </div>
               <div class="col-md-4">
                 <h2>Envios</h2>
               </div>
               <div class="col-md-4">
                 <h2>Metodo de pago</h2>
               </div>
               <div class="col-md-12 text-center bg-secondary">
                   <h2>Derechos reservados</h2>
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
