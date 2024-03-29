<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Font Awesome -->
    <script src="https://kit.fontawesome.com/c7094aec04.js"></script>
    <title>Login</title>
  </head>
  <body>
    <?php require_once("header.php") ?>
    <div class="conten">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center">Inicio de Sesión</h5>
              <form class="form-signin" action="perfil.php" method="POST">
                <div class="form-label-group">
                  <input type="email" id="email" name="email" class="form-control rounded-pill" required autofocus>
                  <label for="email">Email</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="password" name="password" class="form-control rounded-pill" required>
                  <label for="password">Contraseña</label>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" name="confirmar" class="custom-control-input rounded-pill" id="confirmar">
                  <label class="custom-control-label" for="confirmar">Recordar Usuario</label>
                </div>
                <button class="btn btn-lg btn-info btn-block text-uppercase rounded-pill" type="submit">Ingresar</button>
                <hr class="my-4">
                <button class="btn btn-lg btn-google btn-block text-uppercase btn-primary rounded-pill" type="submit"><i class="fab fa-google mr-2"></i> Ingresar con Google</button>
                <button class="btn btn-lg btn-facebook btn-block text-uppercase btn-primary rounded-pill" type="submit"><i class="fab fa-facebook-f mr-2"></i> Ingresar con Facebook</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php require_once("footer.php") ?>
  </body>
</html>
