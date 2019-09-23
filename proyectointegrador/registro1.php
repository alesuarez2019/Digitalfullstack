<?php
  if(isset($_POST["submit"])) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["password"];
    $confirmar = $_POST["confirmar"];
    $ciudad = $_POST["ciudad"];
    $provincia = $_POST["provincia"];
    $codigopostal = $_POST["codigopostal"];
  }
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/registro1.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Font Awesome -->
    <script src="https://kit.fontawesome.com/c7094aec04.js"></script>
    <title>Registro</title>
  </head>
  <body>
  <?php require_once("header.php") ?>

    <div class="caja py-5 px-3">
        <h2>REGISTRO</h2>
        <form action=""  method="POST" class="needs-validation" novalidate>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" required>
                <div class="valid-feedback">
                  Se ve bien!
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellido" required>
                <div class="valid-feedback">
                Se ve bien!
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="usuario">Usuario</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepen">@</span>
                  </div>
                  <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuario" aria-describedby="inputGroupPrepend" required>
                  <div class="invalid-feedback">
                    Por favor elige un nombre de usuario valido.
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" class="form-control" aria-describedby="passwordHelpInline">
                <small id="pass" class="text-muted">
                  Debe tener entre 8-20 caracteres.
                </small>
              </div>
              <div class="form-group" id="contra2">
                <label for="confirmar">Confirmar</label>
                <input type="password" id="confirmar" name="confirmar" class="form-control" aria-describedby="passwordHelpInline">
                <small id="confi" class="text-muted">
                  Debe tener entre 8-20 caracteres.
                </small>
              </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="ciudad">Ciudad</label>
                <input type="text" name="ciudad" class="form-control" id="ciudad" placeholder="Ciudad" required>
                <div class="invalid-feedback">
                    Por favor elige una ciudad valida.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="provincia">Provincia</label>
                <input type="text" name="provincia" class="form-control" id="provincia" placeholder="Provincia" required>
                <div class="invalid-feedback">
                    Por favor elige una provincia valida.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="codigopostal">Codigo postal</label>
                <input type="text" name="codigopostal" class="form-control" id="codigopostal" placeholder="Codigo" required>
                <div class="invalid-feedback">
                  Por favor elige un codigo postal valido.
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" name="terminos" type="checkbox" value="" id="terminos" required>
                <label class="form-check-label" for="terminos">
                  Acepto terminos y condiciones.
                </label>
                <div class="invalid-feedback">
                  Tienes que aceptar antes de enviar.
                </div>
              </div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Enviar">
            <?php include("validar.php") ?>
          </form>
        </div>
      <?php require_once("footer.php") ?>
    </body>
  </html>
