<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/carrito.css">
    <!--Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Carrito</title>
</head>
<body>
    <div class="header">
        <h1 class="margin py-5 ">Lista del Carrito</h1>
    </div>
<div class="container">

        <table class="table table-light table-bordered">
            <tbody>
                <tr>
                    <th width="40%" class="text-center white">Descripcion</th>
                    <th width="15%" class="text-center">Cantidad</th>
                    <th width="20%" class="text-center">Precio</th>
                    <th width="20%" class="text-center">Total</th>
                    <th width="5%"  class="text-center">--</th>
                </tr>
                <tr>
                        <td width="40%">Vinox </td>
                        <td width="15%" class="text-center">1</td>
                        <td width="20%" class="text-center">300</td>
                        <td width="20%" class="text-center">300</td>
                        <td width="5%"><button class="btn btn-danger" type="buttom">Eliminar</button></td>
                    </tr>
                    <tr>
                            <td width="40%">Vinox </td>
                            <td width="15%" class="text-center">1</td>
                            <td width="20%" class="text-center">300</td>
                            <td width="20%" class="text-center">300</td>
                            <td width="5%"><button class="btn btn-danger" type="buttom">Eliminar</button></td>
                        </tr>
                        <tr>
                                <td width="40%">Vinox </td>
                                <td width="15%" class="text-center">1</td>
                                <td width="20%" class="text-center">300</td>
                                <td width="20%" class="text-center">300</td>
                                <td width="5%"><button class="btn btn-danger" type="buttom">Eliminar</button></td>
                            </tr>
                            <tr>
                                <td colspan="3" align="right"><h3>Total</h3></td>
                                <td align="right"><h3>$</h3></td>
                                <td></td>
                            </tr>
                            <td colspan="5">
                                <div class="form-group">
                                    <label for="">Correo de contacto</label>
                                    <input type="text" name="email" class="form-control" type="email" placeholder="Por favor escribe tu correo" required>
                                </div>
                            <button class="btn btn-primary btn-lg btn-block" type="buttom" type="submit">Proceder a pagar</button>
                            </td>

                </tbody>
        </table>


</div>
</body>
</html>
