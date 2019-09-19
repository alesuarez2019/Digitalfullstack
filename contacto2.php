<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/contacto2.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
<!--Animate css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

<!--Font Awesome -->
<script src="https://kit.fontawesome.com/c7094aec04.js"></script>
<title>Formulario de contacto</title>
</head>
<body>
<div class="container">
        <h1>Contactanos</h1>
<div class="row">
        <div class="uno col-md-6">
            <H2>Completa tus datos</H2>
        <form action="index.html" method="POST">
            <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
            </p>
            <p>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido">
            </p>
            <p>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            </p>
            <p>
            <label for="tel">Telefono</label>
            <input type="text" name="tel" id="tel">
            </p>
            <p>
            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" id="mensaje" rows="3"></textarea>
            </p>
            <p>
            <button type="submit">
                Enviar
            </button>
            </p>

        </form>
        </div>
                    <div class="dos col-md-6">
                        <h2>Mas info</h2>
                        <ul>
                                <li><i class="fas fa-map-marker"></i>Direccion</li>
                                <li><i class="fas fa-phone">555555555</i></li>
                                <li><i class="fas fa-envelope-open-text"></i>hola@hola.com</li>
                            </ul>
                            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur laboriosam veniam delectus est quisquam
                                cupiditate voluptatum recusandae. Inventore, quia sequi.</p>
                        </div>
    </div>
</div>

</body>
</html>
