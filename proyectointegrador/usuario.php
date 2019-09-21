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
    <link rel="stylesheet" href="css/usuario.css">
    <title>Perfil del usuario</title>
  </head>
  <body>
      <div class="container px-0 bg-secondary">
        <header>
          <div class="padre">
            <div class="logo">
              <h3>Logo</h3>
            </div>
            <div class="men-der">
              <h3>Registro/Login/Carrito</h3>
            </div>
          </div>
        <div class="sub-header">
          <div class="men-izq">
            <h3>Vinos/Prom./Buscador</h3>
          </div>
          <div class="menu-bar">
            <ul>
              <li>
                <a href="#">Inicio</a>
              </li>
              <li>
                <a href="#">FAQ</a>
              </li>
              <li>
                <a href="#">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
      </header>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-5 mt-3">
            <h2 class="ml-5">Perfil del Usuario</h2>
          </div>
        </div>
        <form class="ml-3">
          <div class="form-group row">
            <label for="usuario" class="col-5 col-sm-4 col-md-3 col-lg-3 col-form-label text-right">Nombre de Usuario</label>
              <div class="col-6 col-sm-7 col-md-8 col-lg-4">
                <input type="text" class="form-control" name="usuario" id="usuario">
              </div>
          </div>
          <div class="form-group row">
            <label for="nombre" class="col-5 col-sm-4 col-md-3 col-lg-3 col-form-label text-right">Nombre</label>
              <div class="col-6 col-sm-7 col-md-8 col-lg-6">
                <input type="text" class="form-control" name="nombre" id="nombre">
              </div>
          </div>
          <div class="form-group row">
            <label for="apellido" class="col-5 col-sm-4 col-md-3 col-lg-3 col-form-label text-right">Apellidos</label>
              <div class="col-6 col-sm-7 col-md-8 col-lg-6">
                <input type="text" class="form-control" name="apellido" id="apellido">
              </div>
          </div>
          <div class="form-group row">
            <label for="tel" class="col-5 col-sm-4 col-md-3 col-lg-3 col-form-label text-right">Teléfono</label>
              <div class="input-group col-6 col-sm-7 col-md-8 col-lg-6">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile-alt"></i></span>
                <input type="text" class="form-control" name="tel" id="tel">
              </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-5 col-sm-4 col-md-3 col-lg-3 col-form-label text-right">Correo Electrónico</label>
              <div class="input-group col-6 col-sm-7 col-md-8 col-lg-6">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="email" class="form-control" name="email" id="email">
              </div>
          </div>
          <div class="form-group row">
            <label for="informacion" class="col-5 col-sm-4 col-md-3 col-lg-3 col-form-label text-right">Información</label>
              <div class="col-6 col-sm-7 col-md-8 col-lg-6">
                <textarea class="form-control" name="informacion" id="informacion" rows="4" cols="80"></textarea>
              </div>
          </div>
          <div class="form-group row">
            <label for="estado" class="col-5 col-sm-4 col-md-3 col-lg-3 col-form-label text-right">Estado</label>
              <div class="col-6 col-sm-7 col-md-8 col-lg-6">
                <select class="form-control" name="estado" id="estado">
                  <option>En línea</option>
                  <option>Ausente</option>
                  <option>Ocupado</option>
                  <option>Desconectado</option>
                </select>
              </div>
          </div>
          <div class="form-group row">
            <label for="alias" class="col-5 col-sm-4 col-md-3 col-lg-3 col-form-label text-right">Alias</label>
              <div class="col-6 col-sm-7 col-md-8 col-lg-6">
                <input class="form-control" type="text" name="alias" id="alias" value="">
                <span class="help-block">Este nombre será mostrado a los usuarios, ocultando el verdadero nombre.</span>
              </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-5 col-sm-4 col-md-3 col-lg-3 col-form-label"></label>
              <div class="col-6 col-sm-7 col-md-8 col-lg-6 pb-5">
                <button type="submit" class="btn btn-success btn-lg mr-3" name="button"><span><i class="fas fa-save"></i></span> Guardar</button>
                <button type="submit" class="btn btn-danger btn-lg mr-3" name="button"><span><i class="fas fa-ban"></i></span> Cancelar</button>
              </div>
          </div>
        </form>
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
