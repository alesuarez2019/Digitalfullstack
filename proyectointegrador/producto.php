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
    <link rel="stylesheet" href="producto.css">
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
     

    <!-- Contenido -->
    <div class="container">
      <div class="row">
  <div class="izq col-md-4">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Altas-Cumbres-Sauvignon-Blanc.png" class="d-block w-100" alt="...">
                    </div>
                  
                  </div>
                </div>
              </div>
  <div class="der col-md-8">
      <h2>Altas cumbres</h2>
      <p>Son vinos modernos, versátiles y fáciles de maridar. Intenso color, con matices rojos.
          <br> Voluminoso en aromas, sobresale el carácter a mermelada y frutos del bosque.
      </p>
      <p>
          <label for="">Cantidad</label>
          <input type="text" name="" id="" value="1">
          <button type="button" class="btn btn-primary cart"> Agregar al carrito</button>
      </p>
  </div>
  
  
  
  
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
